@extends('login.pages.signup_template')
@section('signup_wrapper')
    <div class="row" style="padding-top:5%; padding-left:5%;padding-right:5%;">
						
		<div class=" row span11" >
			<div id="login-header">
		        <h3 style='text-align:center;'>Signup As Individual</h3>
		    </div>
		    @if($errors->any())
				{{ implode('', $errors->all('<div class="alert alert-warning alert-dismissable">:message</div>') ) }}
			@endif
			<div class="row" style="padding-left:4%; padding-right:4%;">
				{{ Form::open(array('url' => '/signup/individual')); }}	
					<div class="span4">
						<div class="widget">
							<div class="widget-content">
								<fieldset>
									<legend>Account Information</legend>
									<label for="email">Email </label><input id="email" type="email" name="email"/>
									<label for="password">Password </label><input id="password" type="password" name="password"/>
									<label for="conf-password">Confirm Password </label><input id="conf-password" type="password" name="password_confirmation"/>
								</fieldset>	
							</div> <!-- /widget-content -->
						</div> <!-- /widget -->
					</div> <!-- /span5 -->
					
					<div class="span6">
				
						<div class="widget">
																
							<div class="widget-content">
								<fieldset>
									<legend>Personal Information</legend>
									<div class="row">
										<div class="span3" >
											<label for="firstname">First Names </label><input id="firstname" type="text" name="individual_first_name"/>
										</div>
										<div class="span2" >
											<label for="lastname">Last Name </label><input id="lastname" type="text" name="individual_last_name"/>
										</div>
									</div>
									<div class="row">
										<div class="span3" >
											<label for="age">Date of Birth </label><input type="Date" name="individual_dob"/>
										</div>
										<div class="span2" >
											<label for="gender">gender</label><select id="gender" name="individual_gender"><option>Male</option><option>Female</option></select>
										</div>
									</div>
									<div class="row">
										<div class="span3" >
											<label for="location">Location </label><select id="location" name="individual_location"><option>Dar es salaam</option><option>Kilimanjaro</option></select>
										</div>
										<div class="span2" >
											<label for="phone">Phone</label><input id="phone" type="phone" name="individual_phone"/>
										</div>
									</div>
								</fieldset>	
							</div> <!-- /widget-content -->
						</div> <!-- /widget -->
					<div class="row" style="padding-left:4%; padding-right:4%;">
	    		    	<div style="float:right;">
				    		<input type="checkbox" checked disabled> &nbsp;&nbsp; I agree to <a href="">terms and conditions</a>&nbsp;&nbsp;&nbsp;
							<button type="submit" class="btn btn-warning btn-large" >Signup</button>
						</div>
					</div>
				{{ Form::close() }}		
			</div> <!-- /span4 -->

		</div> <!-- /row -->

	</div>	<!-- /span9 -->
@stop
