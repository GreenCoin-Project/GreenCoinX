<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><?php
use lithium\storage\Session;
use app\extensions\action\Functions;
$user = Session::read('member');
$function = new Functions();
$ibwtapi = $function->ibwtapi();

?>
<div class="navbar-wrapper">
	<div class="">
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">...</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/<?=$locale?>/"><img src="/img/greencoin.png" alt="GreenCoinX">&nbsp;<sup style="color:red;font-weight:bold">XGC</sup></a>
					
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="/<?=$locale?>/greencoin/how"><?=$t('Technical wallet')?></a></li>
						<li><a href="/<?=$locale?>/greencoin/FAQ"><?=$t('FAQ')?></a></li>
<!--						<li><a href="/<?=$locale?>/blockchain">blockchain</a></li>-->
						<li><a href="/<?=$locale?>/greencoin/download"><?=$t('open a new wallet')?></a></li>
						<li><a href="https://xgcwallet.org" target="_blank"><?=$t('XGC Wallet')?></a></li>
						<li><a href="https://kycglobal.net" target="_blank"><?=$t('KYC Global')?></a></li>
						<li><a href="https://siicrypto.com" target="_blank"><?=$t('SiiCrypto')?></a></li>
						<li><a href="/<?=$locale?>/greencoin/government"><?=$t('government')?></a></li>
						<li><a href="/<?=$locale?>/greencoin/press"><?=$t('press release')?></a></li>						
						<li></li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li><a href="/<?=$locale?>/greencoin/identification">identification</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<div style="background-color:black;padding:10px;margin-top:-20px">
	<a class=" page-scroll" href="#" onclick="ChangeLanguage('en','<?=$_SERVER['REQUEST_URI']?>');" style="border-bottom:double"><small>English</small></a>	
<a class=" page-scroll" href="#" onclick="ChangeLanguage('de','<?=$_SERVER['REQUEST_URI']?>');" style="border-bottom:double"><small>Deutsch</small></a>
<!--
<a href="#" onclick="ChangeLanguage('es','<?=$_SERVER['REQUEST_URI']?>');" style="border-bottom:double"><small>Español</small></a>
<a href="#" onclick="ChangeLanguage('hi','<?=$_SERVER['REQUEST_URI']?>');" style="border-bottom:double"><small>हिन्दी</small></a>
-->
</div>
	</div>

