<?php

?>
<div style="margin:20px">
<h4 class="alert alert-danger" style="color:black">Get 10 XGC with every identified wallet, ask friends to register, send to their email / phone</h4>
<div class="row">
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
	<div class="col-lg-6">
		<h3>Download GreenCoinX v0.9.3 </h3>
		<table class="table table-condensed table-striped table-hover" style="background-color:white;">
		<tr>
			<th>OS</th>
			<th>Download</th>
		</tr>
		<tr>
			<td><img src="/img/Windows-icon.png" width="60px"><br>
			Windows 64 and 32 bit
			</td>
			<td>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Windows/64/Setup-GreenCoin-QT-64.exe/download">GreenCoinX Setup - 64 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Windows/32/Setup-GreenCoin-QT-32.exe/download">GreenCoinX Setup - 32 bit</a><br>
			</td>
		</tr>

		<tr>
			<td><img src="/img/Ubuntu-icon.png" width="60px"><br>
			Ubuntu 64 bit
			</td>
			<td>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Ubuntu/64/greencoin-ubuntu-64.tar.gz/download">GreenCoinX QT - 64 bit</a><br>
			</td>
		</tr>

		<tr>
			<td><img src="/img/Linux-icon.png" width="60px"><br>
			Linux 
			</td>
			<td>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Linux/greencoin-0.9.3-linux.tar.gz/download">GreenCoinX 64/32 bit & source</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Linux/greencoin-0.9.3-linux.zip/download">GreenCoinX 64/32 bit Zip</a><br>
			</td>
		</tr>

	<tr>
		<td><img src="/img/Github-icon.png" width="60px"><br>
		Source</td>
		<td><a target="_blank"  href="https://github.com/GreenCoin-Project/GreenCoin-Core/archive/master.zip">GreenCoinX Source</a><br>
		<a target="_blank"  href="https://github.com/GreenCoin-Project/GreenCoin-Core">Contribute</a>
	</tr>
		</table>
		
	</div>
</div>
</div>