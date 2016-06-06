<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/<?=$locale?>/">
																 <i class="fa fa-play-circle"></i>  <span class="light">GreenCoin</span><span style="color:red">X</span> 
                </a>
																<span style="padding:10px;" class="pull-right">
																<a class=" page-scroll" href="#" onclick="ChangeLanguage('en','<?=$_SERVER['REQUEST_URI']?>');" style="border-bottom:double"><small>English</small></a>	
																<a class=" page-scroll" href="#" onclick="ChangeLanguage('de','<?=$_SERVER['REQUEST_URI']?>');" style="border-bottom:double"><small>Deutsch</small></a>
																<a class=" page-scroll" href="#" onclick="ChangeLanguage('hi','<?=$_SERVER['REQUEST_URI']?>');" style="border-bottom:double"><small>हिन्दी</small></a>
																<!--
<a href="#" onclick="ChangeLanguage('es','<?=$_SERVER['REQUEST_URI']?>');" style="border-bottom:double"><small>Español</small></a>

																-->
																</span>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
																				
                </ul>
            </div>
            <!-- /.navbar-collapse -->
												
        </div>
        <!-- /.container -->

    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
																				<div class="col-lg-6 col-lg-offset-3">
																				<p>&nbsp;</p>
																					<img  src="/img/logo-GreenCoinX.png" style="max-width:100%"/>
																				</div>
																			
                    <div class="col-md-12">
                        <h1 class="brand-heading"><?=$t('THE WORLD\'S FIRST CRYPTO CURRENCY REQUIRING USER IDENTIFICATION')?></h1>
                        <p class="intro-text">
																								 <?=$t('THE PROMISE OF CRYPTO CURRENCY WAS ALWAYS THE FAST AND INEXPENSIVE TRANSFER OF FUNDS WORLDWIDE, WHILE BYPASSING THE BANKING SYSTEM.')?></p> 
																									<p class="intro-text"><?=$t('BEFORE GREENCOINX THIS WAS IMPEDED BY IDENTITY CONCERNS.')?></p>
																									<p class="intro-text"><?=$t('NOW GREENCOINX HAS MADE THIS PROMISE A REALITY.')?></p>
																			</div>
																		<div class="col-md-12" style="text-align:centre;background-color:#efe;margin-top:5px">
																				<ul class="nav navbar-nav" style="font-family:Verdana; font-size:13px">
																					<li><a href="/<?=$locale?>/greencoin/contact"><?=$t('contact')?></a></li>		
																					<li><a href="/<?=$locale?>/greencoin/aboutus"><?=$t('about us')?></a></li>	
																					<li><a href="/<?=$locale?>/greencoin/risk"><?=$t('risk')?></a></li>				
																					<li><a href="/<?=$locale?>/greencoin/privacy"><?=$t('privacy')?></a></li>		
														<!--							<li><a href="/greencoin/how">how it works?</a></li>		-->
																					<li><a href="/<?=$locale?>/greencoin/FAQ"><?=$t('faq')?></a></li>				
<!--																					<li><a href="/blockchain">block chain</a></li>-->
																					<li><a href="/<?=$locale?>/greencoin/download"><?=$t('open a new wallet')?></a></li>
																					<li><a href="https://xgcwallet.org" target="_blank"><?=$t('XGC Wallet')?></a></li>
																					<li><a href="https://kycglobal.net" target="_blank"><?=$t('KYC Global')?></a></li>
																					<li><a href="https://siicrypto.com" target="_blank"><?=$t('SiiCrypto')?></a></li>
																					<li><a href="/<?=$locale?>/greencoin/government"><?=$t('government')?></a></li>
																					<li><a href="/<?=$locale?>/greencoin/press"><?=$t('press')?></a></li>
																					<li><a href="/<?=$locale?>/greencoin/identification"><?=$t('identification')?></a></li>
																				</ul>
																				</div>
																				<div class="col-md-8 col-md-offset-2">
																				 <a href="#about" class="btn btn-circle page-scroll">
                         <i class="fa fa-angle-double-down animated"></i>
                        </a>
</div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
													<div class="row">
														<div class="col-lg-6 col-lg-offset-3">
															<img  src="/img/logo-GreenCoinX.png" style="max-width:100%"/>
														</div>
													</div>
													<h3 style="color:white"><?=$t('ALL GREENCOINX USERS HAVE TO BE FULLY IDENTIFIED BEFORE USAGE')?>,</h3><h3 style="color:white"> <?=$t('SO BAD ACTORS WILL NOT USE GREENCOINX')?></h3>
													<p style="text-align:justify;font-size:16px;color:black;margin-top:-20px"></p>
												<p style="text-align:justify;font-size:16px;color:black;margin-top:-20px"><?=$t('In October, 2014 Bill Gates, the founder of Microsoft, when asked about bitcoin stated;')?>
													<blockquote style="text-align:justify;padding-left:20px;margin-top:-20px;color:white"><?=$t('"The customers we\'re talking about aren\'t trying to be anonymous, they\'re willing to be known, so bitcoin technology is key and you can add to it or you could build a similar technology where there\'s enough attribution where people feel comfortable that this is nothing to do with terrorism or any type of money laundering."')?> 
													<footer style="padding:0px;margin:0px;color:white"><a  style="color:white" href="http://www.bloomberg.com/video/bill-gates-bitcoin-is-exciting-because-it-s-cheap-dQ4qHV4~TLSnUIuIRfZBVA.html" target="_blank"><?=$t('Bill Gates, Bloomberg TV')?></a></footer>
													</blockquote>
												</p>
												<h3 style="color:white"><?=$t('THE GREENCOINX ECOSYSTEM COMPRISES THE WORLD\'S FIRST CRYPTO CURRENCY REQUIRING USER IDENTIFICATION,')?></h3>
												<h3 style="color:white"><?=$t('A FREE ONLINE WALLET, AND ')?></h3>
												<h3 style="color:white"><?=$t('A FREE ONLINE CRYPTO CURRENCY EXCHANGE.')?></h3>
												</p>
												<p style="text-align:center;font-size:16px;color:white;margin-top:-20px"><?=$t('TO OPEN YOUR FREE ONLINE GREENCOINX WALLET GO TO')?> <a  style="color:white" href="https://XGCWALLET.ORG">WWW.XGCWALLET.ORG</a></p>
																<a href="#features" class="btn btn-circle page-scroll">
                 <i class="fa fa-angle-double-down animated"></i>
                </a>
																
            </div>
        </div>
    </section>
<div class="col-md-12" style="text-align:centre;background-color:#efe;margin-top:5px">
																				<ul class="nav navbar-nav" style="font-family:Verdana; font-size:13px">
																					<li><a href="/<?=$locale?>/greencoin/contact"><?=$t('contact')?></a></li>
																					<li><a href="/<?=$locale?>/greencoin/aboutus"><?=$t('about us')?></a></li>	
																					<li><a href="/<?=$locale?>/greencoin/risk"><?=$t('risk')?></a></li>				
																					<li><a href="/<?=$locale?>/greencoin/privacy"><?=$t('privacy')?></a></li>		
														<!--							<li><a href="/<?=$locale?>/greencoin/how">how it works?</a></li>		-->
																					<li><a href="/<?=$locale?>/greencoin/FAQ"><?=$t('faq')?></a></li>				
<!--																					<li><a href="/<?=$locale?>/blockchain">block chain</a></li>-->
																					<li><a href="/<?=$locale?>/greencoin/download"><?=$t('open a new wallet')?></a></li>
																					<li><a href="https://xgcwallet.org" target="_blank"><?=$t('XGC Wallet')?></a></li>
																					<li><a href="https://kycglobal.net" target="_blank"><?=$t('KYC Global')?></a></li>
																					<li><a href="https://siicrypto.com" target="_blank"><?=$t('SiiCrypto')?></a></li>
																					
																					<li><a href="/<?=$locale?>/greencoin/government"><?=$t('government')?></a></li>
																					<li><a href="/<?=$locale?>/greencoin/press"><?=$t('press')?></a></li>
																					<li><a href="/<?=$locale?>/greencoin/identification"><?=$t('identification')?></a></li>
																				</ul>
																				</div>

    <!-- Feature Section -->
    <section id="features" class="content-section text-center">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
													<div class="row">
														<div class="col-lg-6 col-lg-offset-3"><br>
															<img  src="/img/logo-GreenCoinX.png" style="max-width:100%"/>
														</div>
													</div><br>

                <h3 style="color:black"><?=$t('Crypto currency is the most significant technological breakthrough to impact the financial world since the Internet.')?>
																</h3>
																<p>&nbsp;</p>
																<p style="color:black"><?=$t('GreenCoinX is a medium of exchange created and stored electronically, which uses encryption techniques to control the creation of monetary units and verify the transfer of funds. Due to encryption , transactions are secure from third parties. GreenCoinX is anti-inflationary as its value is not affected by government money printing. GreenCoinX allows users access to a fast execution anytime/anywhere low cost global payment system which bypasses the banking system.')?></p>
																
                <h3 style="color:DeepSkyBlue"> <?=$t('GREENCOINX IS THE ACCEPTABLE ALTERNATIVE CRYPTO CURRENCY TO FIAT CURRENCIES')?></h3>
<h3  style="color:DeepSkyBlue"><?=$t('GreenCoinX is the Anti-Bitcoin. It has solved all the Bitcoin flaws. The GreenCoinX Answer is...')?> </h3>
																
																 <ul style="font-size:20px;color:DeepSkyBlue"><li><?=$t('User Identification')?></li>
<li><?=$t('Currency Stability')?></li>

<li><?=$t('Blockchain Longevity')?></li>

<li><?=$t('Free and Safe Crypto Currency Exchange')?></li>

<li><?=$t('Government Partnerships')?></li>
</ul>
 <h3 style="color:black"><a href="#"><?=$t('The User Attraction')?>:</a> <?=$t('Funds can be transferred at a fraction of the cost and speed of the banking system. Micro payments can be easily completed. The 1.5 Billion unbanked people in the world can transfer funds simply with a mobile phone. Online retailers can substantially increase their market size by accessing the unbanked. Payment intermediaries can significantly improve cost/speed of their transactions.')?></h3>

<h3 style="color:white"><?=$t('JOIN THE CRYPTO CURRENCY REVOLUTION !  OPEN A GREENCOINX WALLET NOW')?></h3>

<h4 style="color:black"><a href="#">GreenCoinX Inc</a> <?=$t('is a subsidiary of')?> <a href="#">GreenBank Capital Inc</a> <?=$t('a Canadian public company')?> (<a href="#">CSE:GBC and OTCMKTS:GRNBF</a>)</h4>

<h4 style="color:black"><?=$t('For more information on GreenBank please see')?> <a href="http://www.GreenBankCapitalInc.com" target="_blank">www.GreenBankCapitalInc.com</a></h4>

																
            </div>
        </div>
    </section>
<div class="col-md-12" style="text-align:centre;background-color:#efe;margin-top:5px">
																				<ul class="nav navbar-nav" style="font-family:Verdana; font-size:13px">
																					<li><a href="/<?=$locale?>/greencoin/contact"><?=$t('contact')?></a></li>		
																					<li><a href="/<?=$locale?>/greencoin/aboutus"><?=$t('about us')?></a></li>	
																					<li><a href="/<?=$locale?>/greencoin/risk"><?=$t('risk')?></a></li>				
																					<li><a href="/<?=$locale?>/greencoin/privacy"><?=$t('privacy')?></a></li>		
														<!--							<li><a href="/<?=$locale?>/greencoin/how">how it works?</a></li>		-->
																					<li><a href="/<?=$locale?>/greencoin/FAQ"><?=$t('faq')?></a></li>				
																					<!--																					<li><a href="/<?=$locale?>/blockchain">block chain</a></li>-->
																					<li><a href="/<?=$locale?>/greencoin/download"><?=$t('open a new wallet')?></a></li>
																					<li><a href="https://xgcwallet.org" target="_blank"><?=$t('XGC Wallet')?></a></li>
																					<li><a href="https://kycglobal.net" target="_blank"><?=$t('KYC Global')?></a></li>
																					<li><a href="https://siicrypto.com" target="_blank"><?=$t('SiiCrypto')?></a></li>
																					
																					<li><a href="/<?=$locale?>/greencoin/government"><?=$t('government')?></a></li>
																					<li><a href="/<?=$locale?>/greencoin/press"><?=$t('press')?></a></li>
																					<li><a href="/<?=$locale?>/greencoin/identification"><?=$t('identification')?></a></li>
																				</ul>
																				</div>    <!-- Signup Section -->
