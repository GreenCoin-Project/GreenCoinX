
<div style="margin:20px;padding:20px;">
<div style="background-color:white;padding:10px"><h3>Admin - Signin</h3></div>
<div style="background-color:white;padding:10px">
	<?=$this->form->create(null,array('class'=>'form-group has-error')); ?>
	<div class="form-group has-error">			
				<div class="input-group">
					<span class="input-group-addon">
						<i class="glyphicon glyphicon-asterisk" id="UserNameIcon"></i>
					</span>
						<?=$this->form->field('username', array('label'=>'','onBlur'=>'CheckUserNameLogin(this.value);', 'onBlur'=>'SendPassword();', 'placeholder'=>'username', 'class'=>'form-control')); ?>
				</div>
			</div>				
			<div class="form-group has-error">			
				<div class="input-group">
					<span class="input-group-addon">
						<i class="glyphicon glyphicon-asterisk"></i>
					</span>
			<?=$this->form->field('password', array('type' => 'password', 'label'=>'', 'placeholder'=>'password','class'=>'form-control')); ?>
				</div>
			</div>				

			<div class="alert alert-danger"  id="LoginEmailPassword">
				<div class="form-group has-error">			
					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-asterisk"></i>
						</span>
					<?=$this->form->field('loginpassword', array('type' => 'password', 'label'=>'','class'=>'span1','maxlength'=>'6', 'placeholder'=>'123456','class'=>'form-control')); ?>
					</div>		
				</div>		
				<small>Please check your registered email in 5 seconds. You will receive "<strong>Login Email Password</strong>" use it in the box above.</small>
			</div>		

			<div style="display:none" id="TOTPPassword" class="alert alert-danger">
			<div class="form-group has-error">			
				<div class="input-group">
					<span class="input-group-addon">
						<i class="glyphicon glyphicon-asterisk"></i>
					</span>
			<?=$this->form->field('totp', array('type' => 'password', 'label'=>'','class'=>'span1','maxlength'=>'6', 'placeholder'=>'123456','class'=>'form-control')); ?>	
				</div>		
			</div>		
				<small><strong>Time based One Time Password (TOTP) from your smartphone</strong></small>	
			</div>
		
			<?=$this->form->submit('Signin' ,array('class'=>'btn btn-primary btn-block','id'=>'LoginButton','disabled'=>'disabled')); ?>
			<?=$this->form->end(); ?>
</div>
</div>
