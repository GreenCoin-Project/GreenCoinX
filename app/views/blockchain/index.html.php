<?php
use app\extensions\action\Functions;
			$function = new Functions();
?><div style="margin:20px;background-color:white;padding:4px" style=" ">
<strong>Network status: </strong>We are in sync with GreenCoin network using <a href="/blockchain/peer"><strong><?=$getconnectioncount?></strong></a> connections!
<hr>
<h2><a href="/blockchain/blocks"><?=$getblockcount?> Blocks</a></h2>
Generated <?=$function->toFriendlyTime((time()-$getblock['time']));?> mins ago at <?=gmdate('Y-m-d H:i:s',$getblock['time'])?>. 
The above block had difficulty level of <?=$getblock['difficulty']?>.<br>
Hash: <code><?=$getblock['hash']?></code>

</div>