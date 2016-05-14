<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><?php
			$response = file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}");
			$details = json_decode($response);
			if($details->tor) {
				$tor = "Login is disabled from TOR!";
			}
?>
<p><?=$t('Use this')?> "<strong><?=$t('Login Email Password')?></strong>" <?=$t('to sign in to')?> <?=$COMPANY_URL?></p>
<p>
<?=$t('Login')?>: <?=$username?><br>
<?=$t('Login Email Password')?>: <strong style="font-size:24px;font-weight:bold "><?=$oneCode?></strong><br>
IP: <?=$_SERVER['REMOTE_ADDR'];?><br>
<?=$tor?><br>
<?=$t('Date and time')?>: <?=gmdate('Y-m-d H:i:s',time())?>
</p>