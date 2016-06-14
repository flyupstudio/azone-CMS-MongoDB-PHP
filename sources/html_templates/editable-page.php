<h1>Test task for SendPulse</h1>
<h3>Author Vlasenko Maxim</h3>

<div class="emailParser">
	<form action="" method="post">
		<div>
			<input type="text" placeholder="URL" name="url">			
			<input type="numer" placeholder="iterations" name="iterations">			
			<input type="submit" name="run">			
			<input type="hidden" value="SendAjaxUrlsRequest" name="Event">			
		</div>
	</form>
	
</div>
<div class="emailParserHistory">
	<?if($this->urlsList){?>
	<ul>
	<?}?>
		<?foreach($this->urlsList as $url){?>
			<li>
				<a href="<?=$url['url']?>" data-id="<?=$url['_id']?>" class="loadAjaxSubInfo"><?=$url['url'].' ('.$url['iterations'].')'?></a> from <?=date('m/d/Y h:i', $url['time'])?>
			</li>
		<?}?>
	<?if($this->urlsList){?>
	</ul>
	<?}?>		
</div>
<div class="clear"></div>
