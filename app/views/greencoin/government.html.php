<div style="margin:20px;padding:20px;">

<div class="row">
	<div class="col-md-6">
		<div style="background-color:white;padding:10px"><h3><?=$t('Government Contact us')?></h3></div>
			
			<div style="background-color:white;padding:10px">
			<blockquote>
				<h4><?=$t('GreenCoinX - Government')?></h4>
				<p><?=$t('GreenCoinX Inc is ready, willing and able to co-operate with all government entities in any jurisdiction worldwide to smoothly facilitate the collections of taxes related to transactions that use GreenCoinX.')?> </p>
				<p><?=$t('GreenCoinX is flexible and modifiable such that each government can decide what identification rules they require for a GreenCoinX transaction and what country specific taxes should be attached to each transaction. Additional parameters can be added on an as needed basis depending on the requirements of each country.')?></p>
				<p><?=$t('We encourage all governments to contact us so that we can facilitate your parameters, by completing the following form.')?></p>
			</blockquote>
			<blockquote>
				<h4><?=$t('Register with us')?></h4>
				<p><?=$t('Register your department with XGC. Collect fees, payments, automated regular transactions. Your department will be verified and users will be able to send you transactions via your email, contact number, or through the standard long code.')?></p>
			</blockquote>
			<blockquote>
				<h4><?=$t('Know your nations users')?></h4>
				<p><?=$t('Account for all the identified users on XGC within your nation. Formulate economic plans, account for businesses and individuals, un-thought of analytical possibilities for financial departments.')?></p>
			</blockquote>
			<blockquote>
				<h4><?=$t('Set financial guidelines')?></h4>
				<p><?=$t('Enable automated financial sanctions. Design specific guidelines for your nations financial planning that our developers can integrate for your country.')?></p>
			</blockquote>
			<blockquote>
				<h4><?=$t('Collect automated taxes')?></h4>
				<p><?=$t('Set taxation levels for individuals and businesses. Allow your department (if authorized) to collect automated financial taxes. All tax collection can be viewed via the public XGC block chain for verification by individuals, businesses or government.')?></p>
			</blockquote>
			<blockquote>
				<h4><?=$t('Digital law enforcement')?></h4>
				<p><?=$t('Identified recipients are easy to trace via email, phone, or IP address. The ability to easily track financial crime through the XGC network will assist your law enforcement like nothing before.')?></p>
			</blockquote>
			</div>
		</div>
		<div class="col-md-6">
			<div style="background-color:white;padding:10px"><h3><?=$t('We will call you back')?></h3></div>
			<div style="background-color:white;padding:10px">
				<?=$this->form->create(null,array('class'=>'form-group','id'=>'Government')); ?>
				<div class="form-group">
     <label for="name"><?=$t('Country')?></label>
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
     <label for="department"><?=$t('Department')?></label>
     <input type="text" class="form-control" id="department" name="department" placeholder="Department">
    </div>
				<div class="form-group">
     <label for="subdepartment"><?=$t('Sub-Department (if relevant)')?></label>
     <input type="text" class="form-control" id="subdepartment" name="subdepartment" placeholder="Sub Department">
    </div>
				<div class="form-group">
     <label for="address"><?=$t('Address')?></label>
     <input type="text" class="form-control" id="address" name="address" placeholder="Full address">
    </div>

				<div class="form-group">
     <label for="name"><?=$t('Name')?></label>
     <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>

				<div class="form-group">
     <label for="position"><?=$t('Your position')?></label>
     <input type="text" class="form-control" id="position" name="position"  placeholder="Enter position">
    </div>

				<div class="form-group">
     <label for="email"><?=$t('Email address')?></label>
     <input type="text" class="form-control" id="email" name="email"  placeholder="Enter email">
    </div>
				<div class="form-group">
     <label for="phone"><?=$t('Phone number')?></label>
     <input type="text" class="form-control" id="phone"  name="phone" placeholder="Enter phone">
    </div>
				<div class="form-group">
     <label for="time"><?=$t('Appropriate contact day/time')?></label>
     <input type="text" class="form-control" id="time"  name="time" placeholder="time">
    </div>
<hr>
				<div class="form-group">
     <label for="supdepartment"><?=$t('Your Superiors Department (if relevant)')?></label>
     <input type="text" class="form-control" id="supdepartment" name="supdepartment" placeholder="Sup Department">
    </div>
				<div class="form-group">
     <label for="supname"><?=$t('Superior Name')?></label>
     <input type="text" class="form-control" id="supname" name="supname" placeholder="Enter name">
    </div>

				<div class="form-group">
     <label for="supposition"><?=$t('Superior position')?></label>
     <input type="text" class="form-control" id="supposition" name="supposition"  placeholder="Enter position">
    </div>

				<div class="form-group">
     <label for="supemail"><?=$t('Superior Email address')?></label>
     <input type="text" class="form-control" id="supemail" name="supemail"  placeholder="Enter email">
    </div>
				<div class="form-group">
     <label for="supphone"><?=$t('Superior Phone number')?></label>
     <input type="text" class="form-control" id="supphone"  name="supphone" placeholder="Enter phone">
    </div>
				<div class="form-group">
     <label for="suptime"><?=$t('Superior Appropriate contact day/time')?></label>
     <input type="text" class="form-control" id="suptime"  name="suptime" placeholder="time">
    </div>
				
				<hr>
				
				<div class="form-group">
     <label for="extra"><?=$t('Additional info')?></label>
     <textarea type="textarea" name="addinfo" id="addinfo"  class="form-control"></textarea>
    </div>
				
				<input type="submit" class="form-control btn btn-primary" value="Submit">
				
			</form>
			</div>
		</div>
	</div>
</div>
