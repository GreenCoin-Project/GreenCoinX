<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><div style="font-size:12px;background-color:#333333;color:white;padding:5px;border-bottom:3px solid green " class="footer">
	<p><?=$t('GreenCoinX is a registered name of')?> <strong>GreenCoinX Inc., Canada</strong>
	<small><span class="pull-right"><?php 	echo number_format($pagetotaltime*1000,2);  ?> ms</span></small>
	</p>
	<div style=";background-color:#efe;height:50px;margin-top:5px">
	<ul class="nav navbar-nav" style="font-size:11px">
		<li><a href="/<?=$locale?>/greencoin/contact"><?=$t('Contact')?></a></li>		
		<li><a href="/<?=$locale?>/greencoin/aboutus"><?=$t('About us')?></a></li>	
		<li><a href="/<?=$locale?>/greencoin/risk"><?=$t('Risk')?></a></li>				
		<li><a href="/<?=$locale?>/greencoin/privacy"><?=$t('Privacy')?></a></li>		
<!--		<li><a href="/<?=$locale?>/greencoin/how">How it works?</a></li> -->
		<li><a href="/<?=$locale?>/greencoin/press"><?=$t('Press release')?></a></li>		
		<li><a href="/<?=$locale?>/greencoin/FAQ"><?=$t('FAQ')?></a></li>				
		<li><a href="/<?=$locale?>/API"><?=$t('API')?></a></li>								
	</ul>
	</div>
	
</div>
<p>&nbsp;</p>