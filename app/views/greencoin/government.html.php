<div style="margin:20px;padding:20px;">

<div class="row">
	<div class="col-md-6">
		<div style="background-color:white;padding:10px"><h3>Government Contact us</h3></div>
			<div style="background-color:white;padding:10px">
			<blockquote>
				<h4>Register with us</h4>
			</blockquote>
			<blockquote>
				<h4>Know users</h4>
			</blockquote>
			<blockquote>
				<h4>Create rules & regulations</h4>
			</blockquote>
			<blockquote>
				<h4>Collect taxes</h4>
			</blockquote>
			</div>
		</div>
		<div class="col-md-6">
			<div style="background-color:white;padding:10px"><h3>We will call you back</h3></div>
			<div style="background-color:white;padding:10px">
			<form class="form">
				<div class="form-group">
     <label for="name">Country</label>
     <select class="form-control" name="country">
						<?php 
							foreach ($countries as $country){
						?>
							<option value="<?=$country['ISO']?>"><?=$country['Country']?></option>
						<?php		
							}
						?>
					</select>
    </div>
				<div class="form-group">
     <label for="name">Name</label>
     <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
				<div class="form-group">
     <label for="designation">Designation</label>
     <input type="text" class="form-control" id="designation" name="designation"  placeholder="Enter designation">
    </div>

				<div class="form-group">
     <label for="email">Email address</label>
     <input type="text" class="form-control" id="email" name="email"  placeholder="Enter email">
    </div>
				<div class="form-group">
     <label for="phone">Phone number</label>
     <input type="text" class="form-control" id="phone"  name="phone" placeholder="Enter phone">
    </div>
				<div class="form-group">
     <label for="time">Time to contact</label>
     <input type="text" class="form-control" id="time"  name="time" placeholder="time">
    </div>
				<div class="form-group">
     <label for="extra">Additional info</label>
     <textarea type="textarea" name="addinfo" id="addinfo"  class="form-control"></textarea>
    </div>
				
				<input type="submit" class="form-control" value="Submit">
				
			</form>
			</div>
		</div>
	</div>
</div>
