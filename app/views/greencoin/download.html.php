<?php

?>
<div style="margin:20px">
<div class="row">
	<div class="col-lg-6">
		<h3>Registered Users</h3>
		<table class="table table-condensed table-striped table-hover" style="background-color:white;">
			<tr>
				<th>Country</th>
				<th>Users</th>
			</tr>
			<?php foreach($result['result'] as $res){?>
			<tr>
				<td><?php
					foreach ($res['_id']['country'] as $r){ ?>
								<img src="/img/flags/<?=strtolower($r['ISO']);?>.gif" width="30px"> <?=$r['country'].'-'.$r['ISO'];?>
								<br>
					<?php }?></td>
				<td style="text-align:right"><?=$res['count']?></td>
			</tr>
			<?php }?>
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
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Windows/64/greencoin-qt.exe/download">GreenCoinX QT - 64 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Windows/32/greencoin-qt.exe/download">GreenCoinX QT - 32 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Windows/64/greencoind.exe/download">GreenCoinX daemon - 64 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Windows/32/greencoind.exe/download">GreenCoinX daemon - 32 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Windows/64/greencoin-cli.exe/download">GreenCoinX cli - 64 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Windows/32/greencoin-cli.exe/download">GreenCoinX cli - 32 bit</a><br>
			</td>
		</tr>

		<tr>
			<td><img src="/img/Ubuntu-icon.png" width="60px"><br>
			Ubuntu 64 and 32 bit
			</td>
			<td>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Ubuntu/64/greencoin-qt/download">GreenCoinX QT - 64 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Ubuntu/32/greencoin-qt/download">GreenCoinX QT - 32 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Ubuntu/64/greencoind/download">GreenCoinX daemon - 64 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Ubuntu/32/greencoind/download">GreenCoinX daemon - 32 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Ubuntu/64/greencoin-cli/download">GreenCoinX cli - 64 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Ubuntu/32/greencoin-cli/download">GreenCoinX cli - 32 bit</a><br>
			</td>
		</tr>
<!--
		<tr>
			<td><img src="/img/Linux-icon.png" width="60px"><br>
			Linux 64 and 32 bit
			</td>
			<td>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Linux/64/greencoin-qt/download">GreenCoinX QT - 64 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Linux/32/greencoin-qt/download">GreenCoinX QT - 32 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Linux/64/greencoind/download">GreenCoinX daemon - 64 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Linux/32/greencoind/download">GreenCoinX daemon - 32 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Linux/64/greencoin-cli/download">GreenCoinX cli - 64 bit</a><br>
			<a target="_blank"  href="http://sourceforge.net/projects/xgc/files/0.9.3/Linux/32/greencoin-cli/download">GreenCoinX cli - 32 bit</a><br>
			</td>
		</tr>
-->		
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