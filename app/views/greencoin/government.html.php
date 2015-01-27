<div style="margin:20px;padding:20px;">

<div class="row">
	<div class="col-md-6">
		<div style="background-color:white;padding:10px"><h3>Government Contact us</h3></div>
			<div style="background-color:white;padding:10px">
			<blockquote>
				<h4>Register with us</h4>
				<p>Register your department with XGC. Collect fees, payments, automated regular transactions. Your department will be verified and users will be able to send you transactions via your email, contact number, or through the standard long code.</p>
			</blockquote>
			<blockquote>
				<h4>Know your nations users</h4>
				<p>Account for all the identified users on XGC within your nation. Formulate economic plans, account for businesses and individuals, un-thought of analytical possibilities for financial departments.</p>
			</blockquote>
			<blockquote>
				<h4>Set financial guidelines</h4>
				<p>Enable automated financial sanctions. Design specific guidelines for your nations financial planning that our developers can integrate for your country.</p>
			</blockquote>
			<blockquote>
				<h4>Collect automated taxes</h4>
				<p>Set taxation levels for individuals and businesses. Allow your department (if authorized) to collect automated financial taxes. All tax collection can be viewed via the public XGC block chain for verification by individuals, businesses or government.</p>
			</blockquote>
			<blockquote>
				<h4>Digital law enforcement</h4>
				<p>Identified recipients are easy to trace via email, phone, or IP address. The ability to easily track financial crime through the XGC network will assist your law enforcement like nothing before.</p>
			</blockquote>
			</div>
		</div>
		<div class="col-md-6">
			<div style="background-color:white;padding:10px"><h3>We will call you back</h3></div>
			<div style="background-color:white;padding:10px">
				<?=$this->form->create(null,array('class'=>'form-group','id'=>'Government')); ?>
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
     <label for="department">Department</label>
     <input type="text" class="form-control" id="department" name="department" placeholder="Department">
    </div>
				<div class="form-group">
     <label for="subdepartment">Sub-Department (if relevant)</label>
     <input type="text" class="form-control" id="subdepartment" name="subdepartment" placeholder="Sub Department">
    </div>
				<div class="form-group">
     <label for="address">Address</label>
     <input type="text" class="form-control" id="address" name="address" placeholder="Full address">
    </div>

				<div class="form-group">
     <label for="name">Name</label>
     <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>

				<div class="form-group">
     <label for="position">Your position</label>
     <input type="text" class="form-control" id="position" name="position"  placeholder="Enter position">
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
     <label for="time">Appropriate contact day/time</label>
     <input type="text" class="form-control" id="time"  name="time" placeholder="time">
    </div>
<hr>
				<div class="form-group">
     <label for="supdepartment">Your Superiors Department (if relevant)</label>
     <input type="text" class="form-control" id="supdepartment" name="supdepartment" placeholder="Sup Department">
    </div>
				<div class="form-group">
     <label for="supname">Superior Name</label>
     <input type="text" class="form-control" id="supname" name="supname" placeholder="Enter name">
    </div>

				<div class="form-group">
     <label for="supposition">Superior position</label>
     <input type="text" class="form-control" id="supposition" name="supposition"  placeholder="Enter position">
    </div>

				<div class="form-group">
     <label for="supemail">Superior Email address</label>
     <input type="text" class="form-control" id="supemail" name="supemail"  placeholder="Enter email">
    </div>
				<div class="form-group">
     <label for="supphone">Superior Phone number</label>
     <input type="text" class="form-control" id="supphone"  name="supphone" placeholder="Enter phone">
    </div>
				<div class="form-group">
     <label for="suptime">Superior Appropriate contact day/time</label>
     <input type="text" class="form-control" id="suptime"  name="suptime" placeholder="time">
    </div>
				
				<hr>
				
				<div class="form-group">
     <label for="extra">Additional info</label>
     <textarea type="textarea" name="addinfo" id="addinfo"  class="form-control"></textarea>
    </div>
				
				<input type="submit" class="form-control btn btn-primary" value="Submit">
				
			</form>
			</div>
		</div>
	</div>
</div>
