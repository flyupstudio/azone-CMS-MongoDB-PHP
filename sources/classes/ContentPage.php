<?

	class ContentPage extends AbstractPage {
					
		/*
		 * Public methods
		 */
		public $SiteCongig 	= array();
		public $DB			= null; // selected database object;
		public $urlsCollection = null;
		public $emailsCollection = null;
		
		public function __construct($SiteConfig){			
			$this->SiteConfig = $SiteConfig;
			$mongo = new MongoClient();
			$this->DB = $mongo->selectDB($this->SiteConfig['DB']['database']);				
			$this->urlsCollection = new MongoCollection($this->DB,'urls5');
			$this->emailsCollection = new MongoCollection($this->DB,'emails5');										
			parent::__construct();
		}
				
		public final function OnBeforeCreate() {
			global $server;
			global $url_parts, $config;				
				
			$this->UrlParts = $url_parts;
			
			if($this->UrlParts[0] == ''){
				$this->UrlParts[0] = 'index';
			}			
		}			
		
		public function OnDisplay() {
			
			ob_start();
			if($this->Header) {
				require_once PATH_HTML_TEMPLATES.$this->Header;
			}
			
			if(isset($this->directPathTemplate) && $this->directPathTemplate){
				require_once $this->directPathTemplate;
			}else{
				require_once PATH_HTML_TEMPLATES.$this->TemplatesBaseDir.$this->Template;
			}
			
			if($this->Footer){
				require_once PATH_HTML_TEMPLATES.$this->Footer;
			}
			
			$this->PageContent = ob_get_contents();
			
		
			ob_end_clean();
			
			echo $this->PageContent;
			
		}
		
		/*
		 * Protected methods
		 */					
		
	}
?>
