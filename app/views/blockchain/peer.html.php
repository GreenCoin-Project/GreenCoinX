<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><?php
use app\extensions\action\Functions;
array_multisort($getpeerinfo);
//print_r($getpeerinfo);
?>
<div style="margin:20px">
<h4><?=$t('Peer / network connections')?>: <?=$getconnectioncount?></h4>
<table class="table table-condensed table-striped table-bordered" style="background-color:white ">
	<thead>
		<tr>
			<th>#</th>
			<th><?=$t('IP')?></th>
			<th><?=$t('Port')?></th>
			<th><?=$t('Connected Time')?></th>

			<th><?=$t('Host')?></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i=0;
			foreach($getpeerinfo as $peer){
			$i++;
			$ip_port = explode(":",$peer['addr']);
			$function = new Functions();
//			print_r(strstr($ip_port[0],'onion'));
			if(strstr($ip_port[0],'onion')!='onion'){
				$ip_location = $function->ip2location($ip_port[0]);
			}else{
				$ip_location = array();
			}
		?>
		<tr>
			<td><?=$i?></td>		
			<td><?=$ip_port[0]?><br>
			<?=$peer['version']?>:<?=$peer['subver']?>/<?=$peer['banscore']?><br>
			&lt; <?=$function->toFriendlyTime(gmdate(time())-$peer['lastsend'])?> &gt; <?=$function->toFriendlyTime(gmdate(time())-$peer['lastrecv'])?></td>
			<td><?=$ip_port[1]?><br>
			<?php print_r(IsTorExitPoint($ip_port[0],$ip_port[1]))?>
			</td>
			<td><?=$function->toFriendlyTime(gmdate(time())-$peer['conntime'])?></td>			
			<td><?php
			if(strstr($ip_port[0],'onion')!='onion'){
				print_r(gethostbyaddr($ip_port[0]));
			}
			?></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
</div>
<?php

function IsTorExitPoint($ip,$port){
    if (gethostbyname(ReverseIPOctets($ip).".".$port.".".ReverseIPOctets($ip).".ip-port.exitlist.torproject.org")=="127.0.0.2") {
       return "Y";
    } else {
       return "N";
    } 
}

function ReverseIPOctets($inputip){
    $ipoc = explode(".",$inputip);
    return $ipoc[3].".".$ipoc[2].".".$ipoc[1].".".$ipoc[0];
}
?>
