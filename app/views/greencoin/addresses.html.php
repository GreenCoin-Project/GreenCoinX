<?php use lithium\util\String;?>
<div style="margin:20px;padding:20px;">
<div style="background-color:white;padding:10px"><h3>Identification Search <small>Registered users</small></h3></div>
<div style="background-color:white;padding:10px">
<?php if($data){?>
	<div class="row">
		<div class="col-md-12">
		<table class="table table-condensed">
			<tr>
				<th>Email</th>
				<th>Phone</th>
				<th>Identification</th>
				<th>Extra Info</th>
			</tr>
					<tr>
					<td><?=$data['users']->email?></td>
					<td><?=$data['users']->phone?></td>
					<td>City: <?=$data['users']->IPinfo->city?>, Country: <?=$data['users']->IPinfo->country?>, Registered: <?=gmdate(DATE_RFC850,$data['users']->DateTime)?>, IP: <?=$data['users']->IPinfo->ip?></td>
					<td><?=$data['users']->extra?></td>
				</tr>
		</table>
		
		<?=$this->form->create(null,array('class'=>'form-group','id'=>'Code')); ?>
		<h4>Enter ##CODE## for the above information from your identification.log to view GreenCoinX addresses</h4>
		<input type="text" class="form-control" id="secret" name="secret"  placeholder="Enter Code"><br>
		<input type="submit" class="form-control btn btn-sm btn-primary" value="Submit Code">
		</form>
		
		<?php
		if($show=="Yes"){?>
		<div>
			<table class="table table-condensed">
				<tr>
					<th>Addresses</th>
					<td>
						<?php foreach($data['users']->addresses as $a){?>
								<code><a href="/blockchain/address/<?=$a?>"><?=$a?></a></code>
						<?php }?>
					</td>
				</tr>
			</table>
		</div>
		<?php }else{?>
		<h4 class="alert alert-danger">Code not correct!</h4>
		<?php }?>
		</div>
	
	</div>
	<?php }?>
	</div>
	</div>