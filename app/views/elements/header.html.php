<?php
use lithium\storage\Session;
use app\extensions\action\Functions;

?>
<?php $user = Session::read('member'); ?>
<div class="navbar-wrapper">
	<div class="">
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">...</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><img src="/img/greencoin.png" alt="GreenCoinX">&nbsp;<sup style="color:red;font-weight:bold">XGC</sup></a>
					
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="/greencoin/how">How it works?</a></li>
						<li><a href="/greencoin/FAQ">FAQ</a></li>
						<li><a href="/blockchain">blockchain</a></li>
						<li><a href="/greencoin/download">download</a></li>
						<li><a href="/greencoin/government">government</a></li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li><a href="/greencoin/identification"><strong>identification</strong></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

