<?php

?>
<div style="">
<!--<h4 class="alert alert-danger" style="color:black">Get 10 XGC with every identified wallet, ask friends to register, send to their email / phone</h4> -->
<div class="row container">
<!--
	<div class="col-lg-6">
		<h3>Registered Users</h3>
		<table class="table table-condensed table-striped table-hover" style="background-color:white;">
			<tr>
				<th>Country</th>
				<th>Users</th>
			</tr>
			<?php foreach($users as $key=>$res){
						foreach($res as $res1){
							foreach($res1 as $res2){
				?>
			<tr>
				<td><?php
							foreach ($res2->_id->country as $r){ ;?>
								<img src="/img/Flags/<?=strtolower($r->ISO);?>.gif" width="30px"> <?=$r->country.'-'.$r->ISO;?>
								<br>
						<?php }?></td>
				<td style="text-align:right"><?=$res2->count?></td>
			</tr>
			<?php }}}?>
		</table>
</div>
-->
<div class="col-lg-6">
<h3><?=$t('Open a new Online')?> <a style="color:white" href="https://xgcwallet.org" target="_blank">XGCWallet.org</a></h3>
<div style="background-color:white;padding:10px" class="">
 <p><?=$t('To use XGC, please use the free XGC Online Wallet available at')?> <a href="https://xgcwallet.org" target="_blank">www.xgcwallet.org</a></p>

</div>
<h3><?=$t('Open a new mobile wallet on your Android mobile device')?></h3>
<div style="background-color:white;padding:10px" class="">
 

 


<p><?=$t('Open a new mobile wallet on your Android mobile device')?>
 <a href="https://play.google.com/store/apps/details?id=org.xgcwallet.mobile" target="_blank">https://play.google.com/store/apps/details?id=org.xgcwallet.mobile</a></p>

</div>
</div>

	<div class="col-lg-6">
		
		<h3><?=$t('Technical Wallet Download GreenCoinX v0.9.3')?></h3>
		<table class="table table-condensed table-striped table-hover" style="background-color:white;">
		<tr>
			<th><?=$t('Your Operating System')?></th>
			<th><?=$t('Download')?></th>
		</tr>
		<tr>
			<th><?=$t('CheckSum file (sha1)')?></th>
			<td><a target="_blank"  href="/download/Checksum.sha1"><?=$t('All CheckSum(sha1)')?></a><br></td>
		</tr>
		<tr>
			<td><img src="/img/Windows-icon.png" width="60px"><br>
			<?=$t('Windows 64 and 32 bit')?>
			</td>
			<td>
			<a target="_blank"  href="/download/Setup-GreenCoinX-win-64.exe">GreenCoinX Setup - 64 bit</a><br>
			<a target="_blank"  href="/download/Setup-GreenCoinX-win-32.exe">GreenCoinX Setup - 32 bit</a><br>
			<?=$t('Your Windows OS can be 64 or 32 bit.')?><br> <?=$t('If you are not sure, it is advisable to download GreenCoinX Setup 32 bit.')?>
			</td>
		</tr>

		<tr>
			<td><img src="/img/Linux-icon.png" width="60px"><br>
			Linux 
			</td>
			<td>
			<a target="_blank"  href="/download/greencoin-0.9.3-linux.tar.gz">GreenCoinX 64/32 bit & source</a><br>
			<?=$t('Your OS is Linux based, download from above link.')?>
			</td>
		</tr>

		<tr>
			<td><img src="/img/OSX-icon.png" width="60px"><br>
			OSX
			</td>
			<td>
			<a target="_blank"  href="/download/GreenCoin-Qt.dmg">GreenCoinX 64 bit</a><br>
			<?=$t('Your OS is MAC OSX 10.7 download from above line')?>
			</td>
		</tr>
		</table>
		
	</div>
</div>
</div>