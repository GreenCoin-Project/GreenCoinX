<div style="margin:20px;padding:20px;">
<div style="background-color:white;padding:10px"><h3>Identification</h3></div>
<div style="background-color:white;padding:10px">
<h4>Search</h4>
	<?=$this->form->create(null,array('class'=>'form-group','id'=>'searchEmail')); ?>
	<table class="table table-condensed table-striped table-hover">
	<tr>
		<td>
		<div class="form-group">
			<input type="text" class="form-control" id="email" name="email"  placeholder="Enter email">
		</div>
		</td>
		<td>
		<input type="submit" class="form-control btn btn-sm btn-primary" value="Search Email">
		</td>
	</tr>
	</table>
	</form>
	<?=$this->form->create(null,array('class'=>'form-group','id'=>'searchPhone')); ?>
	<table class="table table-condensed table-striped table-hover">
	<tr>
		<td>
		<div class="form-group">
			<input type="text" class="form-control" id="phone" name="phone"  placeholder="Enter phone">
		</div>
		</td>
		<td>
		<input type="submit" class="form-control btn btn-sm btn-primary" value="Search Phone">
		</td>
	</tr>
	</table>
	</form>
</div>
</div>
