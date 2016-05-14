<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><div style="margin:20px">
<table class="table table-condensed table-striped table-bordered" style="background-color:white ">
	<tr>
		<td><?=$t('Next Block')?> </td>
		<td><code><a href="/<?=$locale?>/blockchain/blockhash/<?php if(isset($nextblockhash)){echo $nextblockhash;}?>">
		<?php if(isset($nextblockhash)){echo $nextblockhash;}?></a></code></td>
		<td><?php if(isset($nextblock)){?>
		<a href="/<?=$locale?>/blockchain/blocks/<?=$nextblock?>"><?=$nextblock?></a>
		<?php }?></td>
	</tr>	
	<tr>
		<td><?=$t('Hash')?></td>
		<td><code><strong><?=$getblock['hash']?></strong></code></td>
		<td><strong><?=$getblock['height']?></strong></td>
	</tr>
	<tr>
		<td><?=$t('Prev Block')?> </td>
		<td><code><a href="/<?=$locale?>/blockchain/blockhash/<?=$prevblockhash?>"><?=$prevblockhash?></a></code></td>
		<td><a href="/<?=$locale?>/blockchain/blocks/<?=$prevblock?>"><?=$prevblock?></a></td>
	</tr>		
</table>
<h3><?=$t('Details')?>:</h3>
<table class="table table-condensed table-striped table-bordered" style="background-color:white ">
	<tr>
		<td><?=$t('Hash')?></td>
		<td><code><strong><?=$getblock['hash']?></strong></code></td>
	</tr>
	<tr>
		<td><?=$t('Block')?></td>
		<td><strong><?=$getblock['height']?></strong></td>
	</tr>
	<tr>
		<td><?=$t('Confirmations')?></td>
		<td><?=$getblock['confirmations']?></td>
	</tr>
	<tr>
		<td><?=$t('Size')?></td>
		<td><?=$getblock['size']?></td>
	</tr>
	<tr>
		<td><?=$t('Version')?></td>
		<td><?=$getblock['version']?></td>
	</tr>
	<tr>
		<td><?=$t('Merkle root')?></td>
		<td><code><?=$getblock['merkleroot']?></code></td>
	</tr>	
	<tr>
		<td><?=$t('Time')?></td>
		<td><?=$getblock['time']?></td>
	</tr>		
	<tr>
		<td><?=$t('Nonce')?></td>
		<td><?=$getblock['nonce']?></td>
	</tr>		
	<tr>
		<td><?=$t('Bits')?></td>
		<td><?=$getblock['bits']?></td>
	</tr>		
	<tr>
		<td><?=$t('Difficulty')?></td>
		<td><?=$getblock['difficulty']?></td>
	</tr>		
</table>
<h3><?=$t('Transaction in this block')?>:</h3>
<table class="table table-condensed table-striped table-bordered" style="background-color:white ">
	<thead>
		<tr>
			<th><?=$t('ID')?></th>
			<th><?=$t('Transaction hash')?></th>
		</tr>
	</thead>
<?php $tx = count($getblock['tx']);
	for($i=0;$i<$tx;$i++){
?>
	<tr>
		<td><?=$i?></td>
		<td><code><a href="/<?=$locale?>/blockchain/transactionhash/<?php print_r($getblock['tx'][$i])?>"><?php print_r($getblock['tx'][$i])?></a></code></td>
	</tr>		
<?php }?>
</table>
</div>