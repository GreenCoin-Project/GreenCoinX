<?php
?>
<div class="container">
	<form id="SelectCountry" name="SelectCountry" method="post">
		<select name='ISO' class='form-control' onchange="SelectCountry.submit();">
			<?php foreach($templates as $template){?>
					<option value="<?=$template['ISO']?>"
					<?php if($template['ISO']==$Country['ISO']){echo " selected ";}?>
					><?=$template['country']?></option>
			<?php }?>
		</select>
	</form>
	<hr>
	<?php foreach($Country['Allow'] as $AC){?>
	<input type="checkbox" class="form-control"><?=$AC?>
	<?php }?>
</div>