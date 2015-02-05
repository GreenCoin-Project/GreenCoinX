<?php use lithium\util\String;?>
<div style="margin:20px;padding:20px;">
<div style="background-color:white;padding:10px"><h3>Identification Search <small>Registered users</small></h3></div>
<div style="background-color:white;padding:10px">
	<div class="row">
		<div class="col-md-4">
			<?=$this->form->create(null,array('class'=>'form-group','id'=>'searchEmail')); ?>
				<input type="hidden" name="search" value="searchEmail">
				<table class="table table-condensed">
					<tr>
						<td>
						<input type="text" class="form-control" id="email" name="email"  placeholder="yourname@domain.com" alt="">
						<small>Your email address</small>
						</td>
						<td>
						<input type="submit" class="form-control btn btn-sm btn-primary" value="Email">
						</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="col-md-4">
			<?=$this->form->create(null,array('class'=>'form-group','id'=>'searchPhone')); ?>
			<input type="hidden" name="search" value="searchPhone">
				<table class="table table-condensed">
					<tr>
						<td>
						<input type="text" class="form-control" id="phone" name="phone"  placeholder="+998887776666">
						<small>Include +[Country Code] +998887776666</small>
						</td>
						<td>
						<input type="submit" class="form-control btn btn-sm btn-primary" value="Phone">
						</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="col-md-4">
			<?=$this->form->create(null,array('class'=>'form-group','id'=>'searchAddress')); ?>
			<input type="hidden" name="search" value="searchAddress">
				<table class="table table-condensed">
					<tr>
						<td>
						<input type="text" class="form-control" id="address" name="address"  placeholder="15m7bCWwadgAJPh5PaxTLyngaQzrjNxMQK">
						<small>Your GreenCoinX address</small>
						</td>
						<td>
						<input type="submit" class="form-control btn btn-sm btn-primary" value="GreenCoinX Address">
						</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<?php if($data){?>
	<div class="row">
		<div class="col-md-12">
		<table class="table table-condensed">
			<tr>
				<th>Email</th>
				<th>Phone</th>
				<th>Identification</th>
				<th>Extra Info</th>
				<th>GreenCoinX</th>
			</tr>
	<?php foreach($data as $user){
		foreach($user as $d){
		?>
				<tr>
					<td><?=$d->email?></td>
					<td><?=$d->phone?></td>
					<td>City: <?=$d->IPinfo->city?>, Country: <?=$d->IPinfo->country?>, Registered: <?=gmdate(DATE_RFC850,$d->DateTime)?>, IP: <?=$d->IPinfo->ip?></td>
					
					<td><?=$d->extra?></td>
					<td><a href="/greencoin/addresses/<?=String::hash($d->_id)?>/<?=$d->_id?>">Addresses</a></td>
				</tr>
		<?php }
		}	?>	
			
		</table>
		</div>
	
	</div>
	<?php }?>
	
	
	
</div>
</div>
