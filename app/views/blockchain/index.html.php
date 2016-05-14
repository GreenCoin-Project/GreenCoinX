<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><?php
use app\extensions\action\Functions;
			$function = new Functions();
?><div style="margin:20px;background-color:white;padding:4px" style=" ">
<strong><?=$t('Network status')?>: </strong><?=$t('We are in sync with GreenCoinX network using')?> <a href="/<?=$locale?>/blockchain/peer"><strong><?=$getconnectioncount?></strong></a> <?=$t('connections')?>!
<hr>
<h2><a href="/<?=$locale?>/blockchain/blocks"><?=$getblockcount?> <?=$t('Blocks')?></a></h2>
<?=$t('Generated')?> <?=$function->toFriendlyTime((time()-$getblock['time']));?> <?=$t('mins ago at')?> <?=gmdate('Y-m-d H:i:s',$getblock['time'])?>. 
<?=$t('The above block had difficulty level of')?> <?=$getblock['difficulty']?>.<br>
<?=$t('Hash')?>: <code><?=$getblock['hash']?></code>

</div>