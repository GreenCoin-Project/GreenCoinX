<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><div class="btn-group-vertical" role="group">
	<a type="button" class="btn btn-default" href="/<?=$locale?>/greencoin/install"><?=$t('Install GreenCoinX')?></a>
	<a type="button" class="btn btn-default" href="/<?=$locale?>/greencoin/installosx"><?=$t('Install Mac OSX')?></a>	
	<a type="button" class="btn btn-default" href="/<?=$locale?>/greencoin/how"><?=$t('Setup Identification Win')?></a>
	<a type="button" class="btn btn-default" href="/<?=$locale?>/greencoin/howosx"><?=$t('Setup Identification OSX')?></a>
	<a type="button" class="btn btn-default"  href="/<?=$locale?>/greencoin/sendtoemail"><?=$t('Send to email')?></a>
	<a type="button" class="btn btn-default"  href="/<?=$locale?>/greencoin/sendtophone"><?=$t('Send to phone')?></a>
	<a type="button" class="btn btn-default"  href="/<?=$locale?>/greencoin/newaddress"><?=$t('Create new address')?></a>
	<a type="button" class="btn btn-default"  href="/<?=$locale?>/greencoin/paytaxes"><?=$t('Pay taxes')?></a>
	<a type="button" class="btn btn-default"  href="/<?=$locale?>/greencoin/mine"><?=$t('Mine GreenCoinX')?></a>			
	<a type="button" class="btn btn-default"  href="/<?=$locale?>/greencoin/largetx"><?=$t('Tx too large')?></a>			
</div>