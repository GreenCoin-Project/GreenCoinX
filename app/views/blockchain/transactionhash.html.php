<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><div style="margin:20px"><h2><?=$t('Transaction details')?></h2>
<?php
//print_r($decoderawtransaction);
?>
<table class="table table-condensed table-striped table-bordered" style="background-color:white ">
	<tr>
		<td><?=$t('Tx ID')?></td>
		<td><code><?=$decoderawtransaction['txid']?></code></td>
	</tr>
	<tr>
		<td><?=$t('Version')?></td>
		<td><?=$decoderawtransaction['version']?></td>
	</tr>
	<tr>
		<td><?=$t('Lock time')?></td>
		<td><?=$decoderawtransaction['locktime']?></td>
	</tr>
	<tr>
		<td><?=$t('Last since Block')?></td>
		<td><code><a href="/<?=$locale?>/blockchain/blockhash/<?php print_r($listsinceblock['lastblock'])?>"><?php print_r($listsinceblock['lastblock'])?></a></code></td>
	</tr>

</table>
<h3><?=$t('Transaction In')?></h3>
<table class="table table-condensed table-striped table-bordered" style="background-color:white ">
<?php
	foreach($decoderawtransaction['vin'] as $in){
?>
	<tr>
		<td><?=$t('Tx ID')?></td>
		<td><strong><code><a href="/<?=$locale?>/blockchain/transactionhash/<?php if(isset($in['txid'])){echo $in['txid'];}?>">
		<?php if(isset($in['txid'])){echo $in['txid'];}?></a></code></strong></td>
	</tr>
	<tr>
		<td><?=$t('Vout')?></td>
		<td><?php if(isset($in['vout'])){echo $in['vout'];}?></td>
	</tr>
	<tr>
		<td><?=$t('scriptSig: asm')?></td>
		<td><code><?php if(isset($in['scriptSig']['asm'])){echo substr($in['scriptSig']['asm'],0,50);}?>...</code></td>
	</tr>
	<tr>
		<td><?=$t('scriptSig: hex')?></td>
		<td><?php if(isset($in['scriptSig']['hex'])){echo substr($in['scriptSig']['hex'],0,50);}?>...</td>
	</tr>
	<tr>
		<td><?=$t('sequence')?></td>
		<td><?=$in['sequence']?></td>
	</tr>
<?php }?>
</table>
<h3><?=$t('Transaction Out')?></h3>
<table class="table table-condensed table-striped table-bordered" style="background-color:white ">
<?php
	foreach($decoderawtransaction['vout'] as $out){
?>
	<tr>
		<td><strong><?=$t('Amount')?></strong></td>
		<td><strong><?=$out['value']?></strong></td>
	</tr>
	<tr>
		<td>N</td>
		<td><?=$out['n']?></td>
	</tr>
	<tr>
	<td colspan="2">
	<table class="table table-condensed table-striped table-bordered" style="background-color:white ">
		<thead>
			<tr>
				<th><?=$t('Addresses')?></th>								
				<th><?=$t('Script pub key: asm')?></th>
				<th><?=$t('Script pub key: hex')?></th>
				<th><?=$t('Require sign')?></th>
				<th><?=$t('Type')?></th>				

			</tr>
			<tr>
				<td><?php print_r($out['scriptPubKey']['addresses'])?></td>
				<td><?=$out['scriptPubKey']['asm']?></td>
				<td><?=$out['scriptPubKey']['hex']?></td>				
				<td><?=$out['scriptPubKey']['reqSigs']?></td>				
				<td><?=$out['scriptPubKey']['type']?></td>				
			</tr>
			
		</thead>
	</table>
	</td>
	</tr>
<?php }?>
</table>
</div>