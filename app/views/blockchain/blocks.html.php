<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><?php
use app\extensions\action\Functions;
$function = new Functions();
?><div style="margin:20px">
<h2><?=$t('Details of last 10 blocks generated')?>.</h2>
<table class="table table-condensed table-striped table-bordered" style="background-color:white ">
	<thead>
		<tr>
			<th><?=$t('Block Hash')?></th>
			<th><?=$t('Height')?></th>			
			<th><?=$t('Num Tx')?></th>			
			<th><?=$t('Time')?></th>			
			<th></th>						
		</tr>
	</thead>
<tbody>
<?php foreach($getblock as $block){?>
	<tr>
		<td><code><a href="/<?=$locale?>/blockchain/blockhash/<?=$block['hash'];?>"><?=$block['hash'];?></a></code></td>
		<td><?=$block['height'];?></td>		
		<td><?=count($block['tx']);?></td>
		<td><?=date('Y-m-d H:i:s',$block['time']);?></td>		
		<td><?=$function->toFriendlyTime((time()-$block['time']));?></td>				
	</tr>
<?php }?>
	<tr>
		<td colspan="2"><a href="/<?=$locale?>/blockchain/blocks" class="pull-left btn"><?=$t('Latest')?></a></td>
		<td colspan="3">
		<a href="/<?=$locale?>/blockchain/blocks/<?=($block['height']+19)?>" class="pull-right btn"><?=$t('Next >> 10')?></a>
		<a href="/<?=$locale?>/blockchain/blocks/<?=$block['height']-1?>" class="pull-right btn"><?=$t('Previous << 10')?></a>
		</td>		
	</tr>
</tbody>
</table>
</div>