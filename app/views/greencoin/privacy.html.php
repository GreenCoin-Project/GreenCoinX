<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><div style="margin:20px;padding:20px;">
<div style="background-color:white;padding:10px"><h3><?=$t('Privacy Policy')?></h3></div>
<div style="background-color:white;padding:10px">

<p><?=$t('GreenCoinX Inc (the "Company," "we" or "us") respects your privacy and undertakes to protect any personal information entrusted to it. Generally, you may visit our Site without giving us any information about yourself (but we may use Cookies to gather information about you, even if you do not register as a user - please see the section on Cookies below). There are times when we may need to obtain information from you through a registration process in order to provide certain services. Below we describe how we gather and use data. If you are not comfortable with any of the practices or policies described in our privacy policy, we ask that you discontinue use of our Site. Our privacy policy may change from time to time, so please revisit this page frequently to remain fully informed of our latest practices and policies.')?></p>

<p><strong><?=$t('How we use your personal information')?></strong><br>

<?=$t('The Company collects, records, retains and uses your personal information only for legitimate business purposes; including (i) to provide, administer, support, improve and obtain feedback on our services and to send you information that you have requested; (ii) to comply with applicable laws, enforce our Terms of Use or other agreements; and to protect the rights or property of the Company, our users and others; (iii) to solicit your opinions about our services or to introduce new services; and/or (iv) for quality control, regulatory, and monitoring purposes.')?></p>

<p><strong><?=$t('When we may disclose your personal information')?></strong><br></p>

<p><strong><?=$t('To Third Parties')?>:</strong><br>
<?=$t('We will not sell or rent your personal information to third parties. We do aggregrate certain user data to create profiles of "typical" users, which aggregate data may be disclosed to applicable third parties. We will disclose information when required to do so by law or in response to a request from a law enforcement agency or authority.')?></p>

<p><strong><?=$t('To Others in Your Own Organization')?>:</strong><br>

<?=$t('If you use any of our services through your employer, then we may pass certain information to your employer regarding your use of such services where your employer has a legitimate reason to receive such information, as determined by us in our sole discretion. Similarly, if you are the point contact person in your organization for a service, we may pass your contact details to those in your organization for this purpose.')?></p>

<p><strong><?=$t('How we collect your personal information')?></strong><br></p>

<p><strong><?=$t('Information Collected Through Our Services')?>:</strong><br>

<?=$t('We collect information about your use of our services, such as generic types of data accessed, times and volume of use of the services and traffic data. Traffic data includes logs, details of networks, data and systems accessed details of the sender and recipients of messages sent over our services, times and location of log on or access, duration of sessions, clickstream and similar usage or system data. We do not gather any personally identifiable information about you.')?></p>

<p><strong><?=$t('Information Collected Through Cookies')?>:</strong><br>

<?=$t('In order to personalize and enhance your experience on our Site, we may also collect information through "cookies." Cookies are small strings of text sent by our Site to your browser and then stored by your browser on your computer\'s hard drive. Cookies enable us to collect information about how our services are used. Until you have registered with us, the cookie will only track general usage patterns and technical information about your computer type and will not be used to identify you individually. After registration, cookies will be used to collect information on an aggregate basis, to track the readership of stories and usage of our products, to analyze traffic patterns on our sites and to provide anonymous reporting of usage. You can turn off the ability to receive cookies by adjusting the browser in your computer. However, you should note that if you do so, it might materially distort the quality of service and data you receive. Therefore, you do so at your own risk.')?></p>

<p><strong><?=$t('Information Collected Through Digital Signatures/Certificates')?>:</strong><br>

<?=$t('If the product you are using has digital certificates/certificate signatures, then your name and related details may be displayed as part of any certificate issued to you. It will be seen by those to whom your certificate or signature is presented or who rely on your certificate or signature. Your details may also need to be entered into a related status directory of certificates issued.')?></p>

<p><strong><?=$t('How we protect your information')?></strong><br>

<?=$t('We use commercially reasonable efforts to provide security safeguards to protect your information, such as firewall protection on our servers to prevent unauthorized access to any information we may store. Although these measures are typically effective, use of the Internet and related computer systems are inherently vulnerable to unauthorized access or "hacking." No guarantee can be given to ensure that information you provide to us will not be accessed by unauthorized persons.')?></p>

<p><strong><?=$t('Links to third party websites')?></strong><br>

<?=$t('Our Site may offer links to other websites, which may have information policies and practices different from ours. We do not control and are not responsible for the privacy policies or practices of any third party sites.')?></p>

<p><strong><?=$t('Interception of mail')?></strong><br>

<?=$t('We may reject, delay or remove content from emails which have a nature, content or attachments which, in our sole discretion, may (x) disrupt our systems or pose security issues such as viruses, or (y) be offensive, unwanted or constitute spam. In certain circumstances, this may result in "innocent" emails being affected.')?></p>

<p><strong><?=$t('Consent')?></strong><br>

<?=$t('By using this Site, you consent to our collection and use of any personal information in accordance with this Privacy Policy. We may, at any time, to modify or update this Privacy Policy. Every time you use our site your continued use of the Site constitutes your acceptance and agreement to the then current version of this Privacy Policy, whether or not you have read it at that time. It is up to you to recheck this Privacy Policy to update yourself of any changes')?></p>

<p><strong><?=$t('Privacy questions')?></strong><br>

<?=$t('If you have any questions regarding our privacy policy, please contact us through the')?> <a href="/<?=$locale?>/greencoin/contact"><?=$t('Contact Us')?></a> <?=$t('page on the Site')?></p>
</div>
</div>