<?
	class EditablePage extends ContentPage {		
		
		public 	$urlList				= array();
		
		
		protected $PageInfo				= array();		
		public 	$Iterations				= 1;
		protected $urlsList				= array();
		protected $emailsList				= array();
		protected $Links			 	= array();
		protected $ParseHost 			= array();
		protected $startUrl				= '';
		protected $SkipHrefs			= array("","#"); // no need parse empty href or # (javascript clicks);
		protected $disallowedHosts		= array('vk.com',
												'facebook.com',
												'youtube.com',
												'www.facebook.com',
												'l.facebook.com',
												'ru-ru.facebook.com');
		protected $Level				= 0;
		
		public function OnCreate() {
	
			if(end($this->UrlParts) != 'index' && end($this->UrlParts)){
				$this->GoTo404();	
			}else{
				$this->FrontPage = true;							
				$this->SetTemplate('editable-page.php');				
			}
		}			
		public function OnDefault() {	
			$this->_proccess_content();
		}		

		public function OnGetUrlSubInfo(){
			
			$this->_proccess_content($_POST['parent_id']);
			echo json_encode( array('emails' => $this->emailsList, 'urls' => $this->urlsList));			
			exit();
		}
		public function OnSendAjaxUrlsRequest(){
			
			// append data to Collection
			ob_start();
			$this->Iterations = intval($_POST['iterations']) > $this->Iterations ? intval($_POST['iterations']) : $this->Iterations;			
			$parent_id = $this->addUrl($_POST['url'], intval($_POST['iterations']));
			
			echo json_encode(array(
									'url'=>$_POST['url'], 
									'iterations' => $this->Iterations,
									'time' => time(),
									'id' => $parent_id
									));
			ob_flush();
			
			
			
									
			
			$this->ParseHost = parse_url($_POST['url']);
			$this->startUrl = $_POST['url'];
			//, $prent_id->{'$id'}
			$this->Links[$this->Level]['url'] = $_POST['url']; //initialize links array to input values there;
			$this->ParseUrlForLink($this->Links[$this->Level], 0, $parent_id);
			
			ob_end_flush(); 
			exit();	
		}
		
		/*
		 * Private/Protected methods
		 */		 		
		
		
		protected function addUrl($url, $iterations = 1, $parent_id = 0) {
			$urlsDoc = array(
						'url' => $url,
						'parent_id' => $parent_id,
						'iterations' => $iterations,
						'time' => time()
						);			
			$this->urlsCollection->insert($urlsDoc);	
			
			return $urlsDoc['_id']->{'$id'};//;
		}
		
		private function addEmail($email, $parent_id){
			$this->emailsCollection->insert(array(
				'email' => $email,
				'parent_id' => $parent_id			
			));
		}
		
		private function linksChecker($matches, &$linksArray, $parent_id){
			$matches = array_unique($matches);
			// need find emails and other links				
			foreach($matches[0] as $link){
				$href = "";			
				preg_match_all('/<a[^>]+href=([\'"])(.+?)\1[^>]*>/i', $link, $result);
				if (!empty($result)) {
					# Found a link.
					$href = $result[2][0];
					$hrefInfo = parse_url($href);
					
					if(!in_array($href, $this->SkipHrefs) && !in_array($hrefInfo['host'], $this->disallowedHosts)){									
						//check for mailto: :)
						$pos = strpos($href, "mailto");
						if(!($pos === false)){
							$href = end(explode("mailto:", $href));
						}else{
							// check need add http or no need to link					
							$pos = strpos($href, "http");
							if($pos === false){
								$href = $this->ParseHost['scheme'].'://'.$this->ParseHost['host'].''.$href;															
							}
						}
						$linksArray['links'][0][
							filter_var($href, FILTER_VALIDATE_EMAIL) ? 
							'emails':
							'links'][] = array('url' => $href);
						
					}						
				}
			}		
		}
		
		private function ParseUrlForLink(&$linksArray, $level, $parent_id){				
			if($this->Iterations > $level){
				$url = $linksArray['url'];			
				$input = @file_get_contents($url);			
				if($input){
					$regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
					if(preg_match_all("/$regexp/siU", $input, $matches)) {				
						// remove dublicates
						
						$this->linksChecker($matches, $linksArray);																
						foreach($linksArray['links'][0]['links'] as &$link){							
							$this->ParseUrlForLink($link, $level+1, 
													$this->addUrl($link['url'], 0, $parent_id));
						}
						// check content for emails 
						$matches = array();
						$pattern = '\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b';
						preg_match_all("/$pattern/siU",$input,$matches);
						
						$emails = array();
						foreach($linksArray['links'][0]['emails'] as $email){
							$emails[] = $email['url'];							
						}
						
						$emails = array_unique(array_merge($emails,$matches[0]));
						
						foreach($emails as $email){
							$this->addEmail($email, $parent_id);
						}
						//unset($link);					
					}
				}		
			}
		}
		
		private function _proccess_content($parent_id = 0) {
			// some manipulation with page content			
			//get old urls from parser
			$urlQuery = array('parent_id' => $parent_id);
			$cursor = $this->urlsCollection->find($urlQuery);			
			$cursor = $cursor->sort(array('time' => -1));
			foreach ($cursor as $doc) {
				$this->urlsList[] = $doc;
			}					
			$cursor = $this->emailsCollection->find($urlQuery);			
			foreach ($cursor as $doc) {
				//print_r($doc);
				$this->emailsList[] = $doc;
			}
		}
	}
?>
