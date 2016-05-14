<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><div style="margin-left:20px;margin-right:20px;" class="container">
<div class="row">
	<div class="col-md-2"> 
<h3><?=$t('How it works?')?></h3>
		<?php echo $this->_render('element', 'greencoin');?>				
	</div>
	<div class="col-md-10" > 
	<h3><?=$t('Setup Identification')?></h3>
	<div class="panel panel-success">
  <div class="panel-heading">
    <a name="0"></a><h3 class="panel-title"><?=$t('Initial startup')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Syncing.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('First time sync. You will have to setup identification to use GreenCoinX. Click on GreenCoin-QT -> Preferences -> Identification tab and verify your email and phone.')?>
		</div>
	</div>
	
	<div style="text-align:center">
	<a href="#1" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	</div>
	
	<div class="panel panel-success">
  <div class="panel-heading">
    <a name="1"></a><h3 class="panel-title"><?=$t('Settings -> Options')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Preferences.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('First time sync. You will have to setup identification to use GreenCoinX. Click on GreenCoin-QT -> Preferences -> Identification tab and verify your email and phone.')?>
		</div>
	</div>

	<div style="text-align:center">
	<a href="#2" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#0" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	
	<div class="panel panel-success">
  <div class="panel-heading">
    <a name="2"></a><h3 class="panel-title"><?=$t('Identification tab: Start Verification')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Preferences - Identification.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Identification tab')?>
		</div>
	</div>	

	<div style="text-align:center">
	<a href="#3" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#1" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	
	
	<div class="panel panel-success">
  <div class="panel-heading">
    <a name="3"></a><h3 class="panel-title"><?=$t('Start Verification: Let\'s start!')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Preferences - Start Verification.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Click on Yes to start the verification process.')?>
		</div>
	</div>		

	<div style="text-align:center">
	<a href="#4" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#2" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	
	
	<div class="panel panel-success">
  <div class="panel-heading">
    <a name="4"></a><h3 class="panel-title"><?=$t('Enter your email address')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Preferences - Start Verification - Email.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Please enter correct email address. Click on \'Get Code\'. This will send an email to your email address, with a 6 digit code, which you enter in next step.')?>
		</div>
	</div>		

	<div style="text-align:center">
	<a href="#5" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#3" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
		
	
		<div class="panel panel-success">
  <div class="panel-heading">
    <a name="5"></a><h3 class="panel-title"><?=$t('Get Code')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Preferences - Start Verification - Email -  GetCode.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Click on Get Code. You should receive an email with the validation code. Please check your INBOX and SPAM folder too. ')?>
		</div>
	</div>		

	<div style="text-align:center">
	<a href="#6" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#4" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	
	
		<div class="panel panel-success">
  <div class="panel-heading">
    <a name="6"></a><h3 class="panel-title"><?=$t('Enter Code')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Preferences - Start Verification - Email -  EnterCode 1.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Enter Code and click Verify')?>
		</div>
	</div>		

	<div style="text-align:center">
	<a href="#7" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#5" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	

		<div class="panel panel-success">
  <div class="panel-heading">
    <a name="7"></a><h3 class="panel-title"><?=$t('Enter Code')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Preferences - Start Verification - Email -  EnterCode 2.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Click \'Yes\' to verify your email address.')?>
		</div>
	</div>		

	<div style="text-align:center">
	<a href="#8" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#6" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	
	
	
		<div class="panel panel-success">
  <div class="panel-heading">
    <a name="8"></a><h3 class="panel-title"><?=$t('Verify Phone')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Preferences - Start Verification - Phone .jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Please enter correct phone number with ISD code (only numbers) [998887776666], 99 is ISD code. Click \'Get code\' to receive SMS.')?>
		</div>
	</div>		

	<div style="text-align:center">
	<a href="#9" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#7" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	
		
	
	
		<div class="panel panel-success">
  <div class="panel-heading">
    <a name="8"></a><h3 class="panel-title"><?=$t('Additional Info')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Preferences - Start Verification - Confirm.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Add additional information about you, so others can recognize you. Please do not include space or special characters. You can use numbers with CamelCase too.')?>
		</div>
	</div>		

	<div style="text-align:center">
	<a href="#9" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#7" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	
		<div class="panel panel-success">
  <div class="panel-heading">
    <a name="9"></a><h3 class="panel-title"><?=$t('Confirm Verification')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Preferences - Start Verification - Confirm.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Click on \'Confirm Verification\'. This will complete your identification and you will receive 0.0001 XGC with on your new receiving XGC address. Click OK to close this window.')?>
		</div>
	</div>		

	<div style="text-align:center">
	<a href="#10" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#8" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	
	
		<div class="panel panel-success">
  <div class="panel-heading">
    <a name="10"></a><h3 class="panel-title"><?=$t('Check Identification log')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Help - Degug.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Click on Help -> Debug window. You will be able to open Identification log file.')?>
		</div>
	</div>		

	<div style="text-align:center">
	<a href="#11" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-down animated fa-3x"></i>
	</a>
	<a href="#9" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	
		<div class="panel panel-success">
  <div class="panel-heading">
    <a name="11"></a><h3 class="panel-title"><?=$t('Identification log')?></h3>
  </div>
  <div class="panel-body">
    <img src="/img/OSX/Help - Debug - Information - identification.log.jpg" width="800">
  </div>
		<div class="panel-footer"><?=$t('Identification log file is important. This shows your log file which is added to GreenCoinX')?> <u><?=$t('blockchain')?></u>. <?=$t('The ##CODE##: can you used to')?> '<a href='/<?=$locale?>/greencoin/identification'><?=$t('identification')?></a>' <?=$t('of a person through email / phone search.')?>
		</div>
	</div>		

	<div style="text-align:center">
	<a href="#10" class="btn btn-circle page-scroll" style="color:white">
		<i class="fa fa-angle-double-up animated fa-3x"></i>
	</a>
	</div>
	
	
</div>

</div>
</div>