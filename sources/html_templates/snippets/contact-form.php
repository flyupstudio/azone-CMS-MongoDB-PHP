<?
	if(!isset($formData['type']))							$formData['type']							= 'contact';
	if(!isset($formData['event']))							$formData['event']							= 'SendMessageAtt';
	if(!isset($formData['action']))							$formData['action']							= $_SERVER['REQUEST_URI'];
	if(!isset($formData['msgType']))						$formData['msgType']						= 'contact';
	if(!isset($formData['doValid']))						$formData['doValid']						= true;
	if(!isset($formData['doAttach']))						$formData['doAttach']						= false;
	if(!isset($formData['html']['before']))					$formData['html']['before']					= '';
	if(!isset($formData['html']['after']))					$formData['html']['after']					= '';
	if(!isset($formData['html']['block1']))					$formData['html']['block1']					= '';
	if(!isset($formData['html']['block2']))					$formData['html']['block2']					= '';
	if(!isset($formData['html']['block3']))					$formData['html']['block3']					= '';
	if(!isset($formData['html']['note']))					$formData['html']['note']					= '';
	if(!isset($formData['classes']['wrapper']))				$formData['classes']['wrapper']				= 'form-wrapper';
	if(!isset($formData['classes']['before']))				$formData['classes']['before']				= 'before-send';
	if(!isset($formData['classes']['after']))				$formData['classes']['after']				= 'after-send';
	if(!isset($formData['classes']['form']))				$formData['classes']['form']				= 'defaultForm';
	if(!isset($formData['classes']['block1']))				$formData['classes']['block1']				= 'top';
	if(!isset($formData['classes']['block2']))				$formData['classes']['block2']				= 'middle';
	if(!isset($formData['classes']['block3']))				$formData['classes']['block3']				= 'bottom';
	
	if(!isset($formData['fields']['name']['show']))			$formData['fields']['name']['show']			= true;
	if(!isset($formData['fields']['name']['name']))			$formData['fields']['name']['name']			= 'name';
	if(!isset($formData['fields']['name']['label']))		$formData['fields']['name']['label']		= '{[NAME]}';
	if(!isset($formData['fields']['name']['value']))		$formData['fields']['name']['value']		= '{[NAME]}';
	if(!isset($formData['fields']['name']['img']))			$formData['fields']['name']['img']			= $this->RootUrl.'public/images/icon-input-name.png';
	if(!isset($formData['fields']['name']['class']))		$formData['fields']['name']['class']		= 'valid';
	if(!isset($formData['fields']['name']['type']))			$formData['fields']['name']['type']			= 'input';
	
	if(!isset($formData['fields']['email']['show']))		$formData['fields']['email']['show']		= true;
	if(!isset($formData['fields']['email']['name']))		$formData['fields']['email']['name']		= 'email';
	if(!isset($formData['fields']['email']['label']))		$formData['fields']['email']['label']		= '{[EMAIL]}';
	if(!isset($formData['fields']['email']['value']))		$formData['fields']['email']['value']		= '{[EMAIL]}';
	if(!isset($formData['fields']['email']['img']))			$formData['fields']['email']['img']			= $this->RootUrl.'public/images/icon-input-mail.png';
	if(!isset($formData['fields']['email']['class']))		$formData['fields']['email']['class']		= 'valid email';
	if(!isset($formData['fields']['email']['type']))		$formData['fields']['email']['type']		= 'input';
	
	if(!isset($formData['fields']['phone']['show']))		$formData['fields']['phone']['show']		= false;
	if(!isset($formData['fields']['phone']['name']))		$formData['fields']['phone']['name']		= 'phone';
	if(!isset($formData['fields']['phone']['label']))		$formData['fields']['phone']['label']		= '{[PHONE]}';
	if(!isset($formData['fields']['phone']['value']))		$formData['fields']['phone']['value']		= '{[PHONE]}';
	if(!isset($formData['fields']['phone']['img']))			$formData['fields']['phone']['img']			= $this->RootUrl.'public/images/icon-input-phone.png';
	if(!isset($formData['fields']['phone']['class']))		$formData['fields']['phone']['class']		= 'valid phone';
	if(!isset($formData['fields']['phone']['type']))		$formData['fields']['phone']['type']		= 'input';
	
	if(!isset($formData['fields']['message']['show']))		$formData['fields']['message']['show']		= true;
	if(!isset($formData['fields']['message']['name']))		$formData['fields']['message']['name']		= 'message';
	if(!isset($formData['fields']['message']['label']))		$formData['fields']['message']['label']		= '{[MESSAGE]}';
	if(!isset($formData['fields']['message']['value']))		$formData['fields']['message']['value']		= '{[MESSAGE]}';
	if(!isset($formData['fields']['message']['img']))		$formData['fields']['message']['img']		= $this->RootUrl.'public/images/icon-input-message.png';
	if(!isset($formData['fields']['message']['class']))		$formData['fields']['message']['class']		= 'valid';
	if(!isset($formData['fields']['message']['type']))		$formData['fields']['message']['type']		= 'textarea';
	
	if(!isset($formData['fields']['shop']['show']))			$formData['fields']['shop']['show']			= false;
	if(!isset($formData['fields']['shop']['name']))			$formData['fields']['shop']['name']			= 'shop';
	if(!isset($formData['fields']['shop']['label']))		$formData['fields']['shop']['label']		= 'Название компании/магазина';
	if(!isset($formData['fields']['shop']['value']))		$formData['fields']['shop']['value']		= 'Название компании/магазина';
	if(!isset($formData['fields']['shop']['class']))		$formData['fields']['shop']['class']		= 'valid';
	if(!isset($formData['fields']['shop']['type']))			$formData['fields']['shop']['type']			= 'input';
	
	if(!isset($formData['fields']['city']['show']))			$formData['fields']['city']['show']			= false;
	if(!isset($formData['fields']['city']['name']))			$formData['fields']['city']['name']			= 'city';
	if(!isset($formData['fields']['city']['label']))		$formData['fields']['city']['label']		= 'Город';
	if(!isset($formData['fields']['city']['value']))		$formData['fields']['city']['value']		= 'Город';
	if(!isset($formData['fields']['city']['class']))		$formData['fields']['city']['class']		= 'valid';
	if(!isset($formData['fields']['city']['type']))			$formData['fields']['city']['type']			= 'input';
	
	if(!isset($formData['fields']['region']['show']))		$formData['fields']['region']['show']		= false;
	if(!isset($formData['fields']['region']['name']))		$formData['fields']['region']['name']		= 'region';
	if(!isset($formData['fields']['region']['label']))		$formData['fields']['region']['label']		= 'Область';
	if(!isset($formData['fields']['region']['value']))		$formData['fields']['region']['value']		= 'Выберите область';
	if(!isset($formData['fields']['region']['type']))		$formData['fields']['region']['type']		= 'select';
	
	if(!isset($formData['fields']['file']['show']))			$formData['fields']['file']['show']			= false;
	if(!isset($formData['fields']['file']['type']))			$formData['fields']['file']['type']			= 'file';
	
	if(!isset($formData['fields']['empty']['show']))		$formData['fields']['empty']['show']		= true;
	if(!isset($formData['fields']['empty']['type']))		$formData['fields']['empty']['type']		= 'empty';
	
	if(!isset($formData['fields']['button']['show']))		$formData['fields']['button']['show']		= true;
	if(!isset($formData['fields']['button']['value']))		$formData['fields']['button']['value']		= '{[SEND]}';
	if(!isset($formData['fields']['button']['class']))		$formData['fields']['button']['class']		= 'button';
	if(!isset($formData['fields']['button']['type']))		$formData['fields']['button']['type']		= 'button';
	
	// удалить
	if(!isset($formData['button']['value']))				$formData['button']['value']				= '{[SEND]}';
	if(!isset($formData['button']['class']))				$formData['button']['class']				= 'button font';
	// /удалить
	
	if(!isset($formData['extra']['title']))					$formData['extra']['title']					= '';
	// _debug($formData);
?>

<?= $formData['html']['before']?>
<form class="<?= $formData['classes']['form']?> <?= $formData['doValid'] ? 'validation-form' : ''?>" action="<?= $formData['action']?>" method="post" <?= $formData['doAttach'] ? 'enctype="multipart/form-data"' : ''?>>
	<div class="<?= $formData['classes']['before']?>">
		<div class="<?= $formData['classes']['block1']?>">
			<?= $formData['html']['block1']?>
		</div>
		<div class="<?= $formData['classes']['block2']?>">
			<table>
				<?if(!$_GET['form']){?>
				<?foreach($formData['structure'] as $row){?>
					<tr>
						<?foreach($row['tds'] as $td){?>
							<?if($formData['fields'][$td['name']]['show']){?>
								<td <?= $td['colspan'] ? 'colspan="'.$td['colspan'].'"' : ''?> <?= $td['rowspan'] ? 'rowspan="'.$td['rowspan'].'"' : ''?>>
									<?if($formData['fields'][$td['name']]['type'] == 'input'){?>
										<label><?= $formData['fields'][$td['name']]['label']?>
											<span class="input-box">
												<?if($formData['fields'][$td['name']]['img']){?>
													<span class="img"><img src="<?= $formData['fields'][$td['name']]['img']?>" alt=""/></span>
												<?}?>
												<span class="input"><input type="text" class="<?= $formData['fields'][$td['name']]['class']?> <?= (isset($this->Error[$td]) && $this->Error[$td]) ? 'error' : ''?>" name="<?= $formData['fields'][$td['name']]['name']?>" placeholder="<?= (isset($_POST[$td]) && $_POST[$td]) ?  $_POST[$td] : $formData['fields'][$td['name']]['value']?>" title="<?= $formData['fields'][$td['name']]['value']?>" /></span>
											</span>
										</label>
									<?}elseif($formData['fields'][$td['name']]['type'] == 'textarea'){?>
										<label><?= $formData['fields'][$td['name']]['label']?>
											<span class="input-box valign relative">
												<?if($formData['fields'][$td['name']]['img']){?>
													<span class="img"><img src="<?= $formData['fields'][$td['name']]['img']?>" alt=""/></span>
												<?}?>
												<span class="input textarea"><textarea class="<?= $formData['fields'][$td['name']]['class']?> <?= (isset($this->Error[$td]) && $this->Error[$td]) ? 'error' : '' ?>" name="<?= $formData['fields'][$td['name']]['name']?>" cols="1" rows="1" title="<?= $formData['fields'][$td['name']]['value']?>" placeholder="<?= (isset($_POST[$td]) && $_POST[$td]) ?  $_POST[$td] : $formData['fields'][$td['name']]['value']?>"></textarea></span>
											</span>
										</label>
									<?}elseif($formData['fields'][$td['name']]['type'] == 'select'){?>
										<?if($formData['fields'][$td['name']]['name'] == 'region'){?>
											<label><?= $formData['fields'][$td['name']]['label']?>
												<span class="input select">
													<?
														$regions = $this->_load_content('country', '', 't.name');
													?>
													<select class="valid" name="region" title="<?= $formData['fields'][$td['name']]['value']?>">
														<option value="<?= $formData['fields'][$td['name']]['value']?>" selected="selected"><?= $formData['fields'][$td['name']]['value']?></option>
														<?foreach($regions as $region){?>
															<?$name_arr = explode(' ', $region[$this->LN.'name'])?>
															<option value="<?= $name_arr[0]?>"><?= $name_arr[0]?></option>
														<?}?>
													</select>
												</span>
											</label>
										<?}?>
									<?}elseif($formData['fields'][$td['name']]['type'] == 'file' && $formData['doAttach']){?>
										<?if(stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE') || $_GET['ie']){?>
											<div class="fileinputs">
												<div class="fakefile">
													<span class="file-in">{[FORM_ATTACH]}</span>
													<?/* <input id="ffl1" class="ffile"/> */?>
												</div>
												<br />
												<input name="file" type="file" class="file" value="" <?/* onchange="getElementById('ffl1').value = encodeURI(this.value).replace('C:%5Cfakepath%5C','')" */?> />
											</div>
										 <?}else{?>
											<div class="multiFile file">
												<a class="addFile btn" href="#" title="{[FORM_ATTACH]}"><i class="fa fa-paperclip"></i><span>{[FORM_ATTACH]}</span></a>
												<div class="clear"></div>
												<div class="files"><input type="file" style="display: none;" id="file1-1" class="file" name="file1" /></div>
											</div>
										<?}?>
									<?}elseif($formData['fields'][$td['name']]['type'] == 'button'){?>
										<?= $formData['html']['note']?>
										<?if($formData['msgType']){?>
											<input name="MsgType" type="hidden" value="<?= $formData['msgType']?>" />
										<?}?>
										<?if($formData['postType']){?>
											<input name="postType" type="hidden" value="<?= $formData['postType']?>" />
										<?}?>
										<input name="Event" type="hidden" value="<?= $formData['event']?>" />
										<?if($formData['type'] == 'comments' || $formData['type'] == 'productQuestion'){?>
											<input name="prodId" type="hidden" value="<?= $Product['id']?>" />
											<input name="prodCatId" type="hidden" value="<?= $Product['category_id']?>" />
											<input name="prodCatTopId" type="hidden" value="<?= $this->_get_top_level_cat($Product['category_id'])?>" />
										<?}?>
										<input class="<?= $formData['fields'][$td['name']]['class']?>" type="submit" value="<?= $formData['fields'][$td['name']]['value']?>"/>
										<div class="clear"></div>
									<?}?>
								</td>
							<?}?>
						<?}?>
					</tr>
				<?}?>
				<?}else{?>
				<tr>
					<?if($formData['fields']['name']['show']){?>
						<td>
							<label><?= $formData['fields']['name']['label']?>
								<span class="input-box">
									<span class="img"><img src="<?= $this->RootUrl?>public/images/icon-input-name.png" alt=""/></span>
									<span class="input"><input type="text" class="valid <?= (isset($this->Error['name']) && $this->Error['name']) ? 'error' : ''?>" name="<?= $formData['fields']['name']['name']?>" value="<?= (isset($_POST['name']) && $_POST['name']) ?  $_POST['name'] : $formData['fields']['name']['value']?>" title="<?= $formData['fields']['name']['value']?>" /></span>
								</span>
							</label>
						</td>
					<?}?>
					<?if($formData['fields']['phone']['show']){?>
						<td>
							<label><?= $formData['fields']['phone']['label']?>
								<span class="input-box">
									<span class="img"><img src="<?= $this->RootUrl?>public/images/icon-input-phone.png" alt=""/></span>
									<span class="input"><input type="text" class="valid phone <?= (isset($this->Error['phone']) && $this->Error['phone']) ? 'error' : ''?>" name="phone" value="<?= (isset($_POST['phone']) && $_POST['phone']) ?  $_POST['phone'] : $formData['fields']['phone']['value']?>" title="<?= $formData['fields']['phone']['value']?>" /></span>
								</span>
							</label>
						</td>
					<?}?>
				</tr>
				<?if($formData['fields']['email']['show']){?>
					<tr>
						<td colspan="2">
							<label><?= $formData['fields']['email']['label']?>
								<span class="input-box">
									<span class="img"><img src="<?= $this->RootUrl?>public/images/icon-input-mail.png" alt=""/></span>
									<span class="input"><input type="text" class="valid email <?= (isset($this->Error['email']) && $this->Error['email']) ? 'error' : ''?>" name="<?= $formData['fields']['email']['name']?>" value="<?= (isset($_POST['email']) && $_POST['email']) ?  $_POST['email'] : $formData['fields']['email']['value']?>" title="<?= $formData['fields']['email']['value']?>" /></span>
								</span>
							</label>
						</td>
					</tr>
				<?}?>
				<?if($formData['fields']['shop']['show']){?>
					<tr>
						<td colspan="2"><label><?= $formData['fields']['shop']['label']?><span class="input"><input type="text" class="valid <?= (isset($this->Error['shop']) && $this->Error['shop']) ? 'error' : ''?>" name="shop" value="<?= (isset($_POST['shop']) && $_POST['shop']) ?  $_POST['shop'] : $formData['fields']['shop']['value']?>" title="<?= $formData['fields']['shop']['value']?>" /></span></label></td>
					</tr>
				<?}?>
				<?if($formData['fields']['city']['show'] || $formData['fields']['region']['show']){?>
					<tr>
						<?if($formData['fields']['city']['show']){?>
							<td><label><?= $formData['fields']['city']['label']?><span class="input"><input type="text" class="valid <?= (isset($this->Error['city']) && $this->Error['city']) ? 'error' : ''?>" name="city" value="<?= (isset($_POST['city']) && $_POST['city']) ?  $_POST['city'] : $formData['fields']['city']['value']?>" title="<?= $formData['fields']['city']['value']?>" /></span></label></td>
						<?}?>
						<?if($formData['fields']['region']['show']){?>
							<td>
								<label><?= $formData['fields']['region']['label']?>
									<span class="input select">
										<?
											$regions = $this->_load_content('country', '', 't.name');
										?>
										<select class="valid" name="region" title="<?= $formData['fields']['region']['value']?>">
											<option value="<?= $formData['fields']['region']['value']?>" selected="selected"><?= $formData['fields']['region']['value']?></option>
											<?foreach($regions as $region){?>
												<?$name_arr = explode(' ', $region[$this->LN.'name'])?>
												<option value="<?= $name_arr[0]?>"><?= $name_arr[0]?></option>
											<?}?>
										</select>
									</span>
								</label>
							</td>
						<?}?>
					</tr>
				<?}?>
				<?if($formData['fields']['message']['show']){?>
					<tr>
						<td colspan="2">
							<label><?= $formData['fields']['message']['label']?>
								<span class="input-box valign relative">
									<span class="img"><img src="<?= $this->RootUrl?>public/images/icon-input-message.png" alt=""/></span>
									<span class="input textarea"><textarea class="valid <?= (isset($this->Error['message']) && $this->Error['message']) ? 'error' : '' ?>" name="message" cols="1" rows="1" title="<?= $formData['fields']['message']['value']?>"><?= (isset($_POST['message']) && $_POST['message']) ?  $_POST['message'] : $formData['fields']['message']['value']?></textarea></span>
								</span>
							</label>
						</td>
					</tr>
				<?}?>
				<tr>
					<td colspan="2">
						<?= $formData['html']['note']?>
						<?if($formData['msgType']){?>
							<input name="MsgType" type="hidden" value="<?= $formData['msgType']?>" />
						<?}?>
						<input name="Event" type="hidden" value="<?= $formData['event']?>" />
						<?if($formData['type'] == 'comments'){?>
							<input name="prodId" type="hidden" value="<?= $Product['id']?>" />
							<input name="prodCatId" type="hidden" value="<?= $Product['category_id']?>" />
							<input name="prodCatTopId" type="hidden" value="<?= $this->_get_top_level_cat($Product['category_id'])?>" />
						<?}?>
						<input class="<?= $formData['button']['class']?>" type="submit" value="<?= $formData['button']['value']?>"/>
						<div class="clear"></div>
					</td>                   
				</tr>
				<?} // $_GET['form']?>
			</table>
		</div>
		<?= $formData['html']['block3']?>
	</div>
	<div class="<?= $formData['classes']['after']?>"><table><tr><td class="text"></td></tr></table><img class="close animate" src="<?= $this->RootUrl?>public/images/close.png" alt=""></div>
</form>
<?= $formData['html']['after']?>










<?if(false){ /* goalzero */ ?>
<?= $formData['html']['before']?>
<div class="<?= $formData['classes']['before']?>">
	<?= $formData['extra']['title']?>
	<form class="<?= $formData['classes']['form']?> <?= $formData['doValid'] ? 'validation-form' : ''?>" action="<?= $formData['action']?>" method="post" <?= $formData['doAttach'] ? 'enctype="multipart/form-data"' : ''?>>
		<div class="f-item clearfix">
			<?if($formData['type'] == 'pricelist'){?>
				<p><label for="p-name">{[NAME]}</label><input id="p-name" type="text" class="valid <?= $this->Error['name'] ? 'error-ico' : ''?>" name="name" value="<?= $_POST['name'] ?  $_POST['name'] : $formData['fields']['values']['name']?>" title="<?= $formData['fields']['values']['name']?>" /></p>
				<p><label for="p-comp">Название компании</label><input id="p-comp" type="text" class="valid" name="shop" value="" /></p>
				<p><label for="p-mail">{[EMAIL]}</label><input id="p-mail" type="text" class="valid email <?= $this->Error['email'] ? 'error-ico' : '' ?>" name="email" value="<?= $_POST['email'] ?  $_POST['email'] : $formData['fields']['values']['email']?>" title="<?= $formData['fields']['values']['email']?>" /></p>
				<p><label for="p-phone">{[PHONE]}</label><input id="p-phone" type="text" class="valid phone <?= $this->Error['phone'] ? 'error-ico' : ''?>" name="phone" value="<?= $_POST['phone'] ?  $_POST['phone'] : $formData['fields']['values']['phone']?>" title="<?= $formData['fields']['values']['phone']?>" /></p>
				<p><label for="p-town">Город</label><input id="p-town" type="text" class="valid" name="city" value="" /></p>
				<p><label for="p-region">Область</label><input id="p-region" type="text" class="valid" name="region" value="" /></p>
			<?}else{?>
				<p><input type="text" class="valid <?= $this->Error['name'] ? 'error-ico' : ''?>" name="name" value="<?= $_POST['name'] ?  $_POST['name'] : $formData['fields']['values']['name']?>" title="<?= $formData['fields']['values']['name']?>" /></p>
				<?if($formData['type'] == 'contact'){?>
					<p><input type="text" class="valid phone <?= $this->Error['phone'] ? 'error-ico' : ''?>" name="phone" value="<?= $_POST['phone'] ?  $_POST['phone'] : $formData['fields']['values']['phone']?>" title="<?= $formData['fields']['values']['phone']?>" /></p>
				<?}?>
				<p><input type="text" class="mail valid email <?= $this->Error['email'] ? 'error-ico' : '' ?>" name="email" value="<?= $_POST['email'] ?  $_POST['email'] : $formData['fields']['values']['email']?>" title="<?= $formData['fields']['values']['email']?>" /></p>
			<?}?>
		</div>
		<?if($formData['type'] == 'pricelist'){?>
			<div class="f-item clearfix">
				<label for="p-mess">Кратко опишите Ваш бизнес</label><textarea id="p-mess" class="valid <?= $this->Error['message'] ? 'error-ico' : '' ?>" name="message" cols="50" rows="5" title="<?= $formData['fields']['values']['message']?>"><?= $_POST['message'] ?  $_POST['message'] : $formData['fields']['values']['message']?></textarea>
				<div class="t-left"><p>Все поля обязательны для заполнения</p></div>
			</div>
		<?}else{?>
			<div class="f-item clearfix"><textarea class="valid <?= $this->Error['message'] ? 'error-ico' : '' ?>" name="message" cols="50" rows="5" title="<?= $formData['fields']['values']['message']?>" ><?= $_POST['message'] ?  $_POST['message'] : $formData['fields']['values']['message']?></textarea></div>
		<?}?>
		<div class="f-item clearfix <?= $formData['type'] == 'contact' ? 'button' : ''?>">
			<?if($formData['type'] == 'productComment'){?>
				<input name="prodId" type="hidden" value="<?= $Product['id']?>" />
				<input name="prodCatId" type="hidden" value="<?= $Product['category_id']?>" />
				<input name="prodCatTopId" type="hidden" value="<?= $this->_get_top_level_cat($Product['category_id'])?>" />
			<?}?>
			<input name="MsgType" type="hidden" value="<?= $formData['msgType']?>" />
			<input name="Event" type="hidden" value="<?= $formData['event']?>" />
			<div class="button"><input type="submit" value="{[SEND]}" /></div>
			<?if($formData['doAttach']){?>
				<?if(stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE') || $_GET['ie']){?>
					<div class="fileinputs">
						<div class="fakefile">
							<span class="file-in">{[FORM_ATTACH]}</span>
							<?/* <input id="ffl1" class="ffile"/> */?>
						</div>
						<br />
						<input name="file" type="file" class="file" value="" <?/* onchange="getElementById('ffl1').value = encodeURI(this.value).replace('C:%5Cfakepath%5C','')" */?> />
					</div>
				 <?}else{?>
					<div class="multiFile file">
						<a class="addFile btn" href="#"><span>{[FORM_ATTACH]}</span></a>
						<div class="clear"></div>
						<div class="files"><input type="file" style="display: none;" id="file1-1" class="file" name="file1" /></div>
					</div>
				<?}?>
			<?}?>
		</div>	
	</form>
</div>
<div class="<?= $formData['classes']['after']?>">
	<h3>Спасибо.</h3>
	<p>Ваше мнение очень важно для нас!</p>
</div>
<?= $formData['html']['after']?>
<?} // false?>