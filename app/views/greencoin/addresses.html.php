<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?><?php use lithium\util\String;?>
<div style="margin:20px;padding:20px;">
<div style="background-color:white;padding:10px"><h3><?=$t('Identification Search')?> <small><?=$t('Registered users')?></small></h3></div>
<div style="background-color:white;padding:10px">
<?php if($data){?>
	<div class="row">
		<div class="col-md-12">
		<table class="table table-condensed">
			<tr>
				<th><?=$t('Email')?></th>
				<th><?=$t('Phone')?></th>
				<th><?=$t('Identification')?></th>
				<th><?=$t('Extra Info')?></th>
			</tr>
					<tr>
					<td><?=$data['users']->email?></td>
					<td><?=$data['users']->phone?></td>
					<td><?=$t('City')?>: <?=$data['users']->IPinfo->city?>, <?=$t('Country')?>: <?=$data['users']->IPinfo->country?>, <?=$t('Registered')?>: <?=gmdate(DATE_RFC850,$data['users']->DateTime)?>, IP: <?=$data['users']->IPinfo->ip?></td>
					<td><?=$data['users']->extra?></td>
				</tr>
		</table>
		
		<?=$this->form->create(null,array('class'=>'form-group','id'=>'Code')); ?>
		<h4><?=$t('Enter ##CODE## for the above information from your identification.log to view GreenCoinX addresses')?></h4>
		<input type="text" class="form-control" id="secret" name="secret"  placeholder="Enter Code"><br>
		<input type="submit" class="form-control btn btn-sm btn-primary" value="Submit Code">
		</form>
		
		<?php
		if($show=="Yes"){?>
		<div>
			<table class="table table-condensed">
				<tr>
					<th><?=$t('Addresses')?></th>
					<td>
						<?php foreach($data['users']->addresses as $a){?>
								<code><a href="/<?=$locale?>/blockchain/address/<?=$a?>"><?=$a?></a></code>
						<?php }?>
					</td>
				</tr>
			</table>
		</div>
		<?php }else{?>
		<h4 class="alert alert-danger"><?=$t('Code not correct')?>!</h4>
		<?php }?>
		</div>
	
	</div>
	<?php }?>
	</div>
	</div>