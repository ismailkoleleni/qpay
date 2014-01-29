@extends('login.pages.signup_template')
@section('signup_wrapper')
    <div class="row" style="padding-top:5%; padding-left:5%;padding-right:5%;">
						
		<div class=" row span11" >
			<div id="login-header">
		        <h3 style='text-align:center;'>Signup As Business</h3>
		    </div> 
		    {{ Form::open(array('url' => '/signup/business')); }}	
				<div class="row" style="padding-left:4%; padding-right:4%;">
						<div class="span4">
							<div class="widget">
								<div class="widget-content">
									<fieldset>
										<legend>Account Information</legend>
										<label for="email">Email </label><input id="email" type="email" name="email"/>
										<label for="password">Password </label><input id="password" type="password" name="password"/>
										<label for="conf-password">Confirm Password </label><input id="conf-password" type="password" name="conf_password"/>
									</fieldset>	
								</div> <!-- /widget-content -->
								
							</div> <!-- /widget -->
							
						</div> <!-- /span4 -->
						
						<div class="span6">
					
							<div class="widget">
																	
								<div class="widget-content">
									<fieldset>
										<legend>Business Representative Information</legend>
										<div class="row">
											<div class="span3" >
												<label for="firstname">First Names </label><input id="firstname" type="text" name="representative_firstname"/>
											</div>
											<div class="span2" >
												<label for="lastname">Last Name </label><input id="lastname" type="text" name="representative_lastname"/>
											</div>
										</div>
										<div class="row">
											<div class="span3" >
												<label for="age">Date of Birth </label><input type="Date" name="representative_dob"/>
											</div>
											<div class="span2" >
												<label for="gender">gender</label><select id="gender" name="representative_gender"><option>Male</option><option>Female</option></select>
											</div>
										</div>
										<div class="row">
											<div class="span3" >
												<label for="location">Title </label><input type="text" name="representative_title"/>
											</div>
											<div class="span2" >
												<label for="phone">Phone</label><input id="phone" type="text" name="representative_phone"/>
											</div>
										</div>
									</fieldset>	
								</div> <!-- /widget-content -->
								
							</div> <!-- /widget -->
							
						</div> <!-- /span4 -->
						

				 </div> <!-- /row -->

				<div class="row" style="padding-left:4%; padding-right:4%;">
					<div class="span10">
						<div class="widget">
							<div class="widget-content">
								<fieldset>
									<legend>Business Information</legend>
									<div class="row" style="">
										<div class="span3" >
											<label for="lastname">Business Name </label><input id="business_name" name="business_name" type="text"/>
										</div>
										<div class="span3" >
											<label for="firstname">Business Type</label><select id="business_type" name="business_type"><option> -- </option><option>Sole Proprietorship</option><option>Partnership</option><option>Corporation</option><option>Other Corporate Body</option><option>Government Body</option></select>
										</div>
										<div class="span3" >
											<label for="location">Business Category </label>
											<select name="business_category">
	                                            <option value="Select"> -- </option>
	                                            <option value="Beauty,Fashion & Clothing">Beauty,Fashion & Clothing</option>  	
	                                            <option value="Career & Education">Career & Education</option>		
	                                            <option value="Financial Products">Financial Products</option>  	  	
	                                            <option value="Hardware & Equipment">Hardware & Equipment</option>	  	  	
	                                            <option value="Home, Decor & Furnishings">Home, Decor & Furnishings</option>	
	                                            <option value="Jobs & Employment">Jobs & Employment</option> 	  	
	                                            <option value="Music, Entertainment & Sports">Music, Entertainment & Sports</option> 	
	                                            <option value="Real Estate & Services">Real Estate & Services</option>
	                                            <option value="Business Services">Business Services</option>	
	                                            <option value="Cars, Bikes and Automotive">Cars, Bikes and Automotive</option>
	                                            <option value="Food & Drinks">Food & Drinks</option>
	                                            <option value="Health & Fitness">Health & Fitness</option>
	                                            <option value="Internet & Services">Internet & Services</option>
	                                            <option value="Mobiles, Electronics & Computers">Mobiles, Electronics & Computers</option>
	                                            <option value="Travel & Holiday">Travel & Holiday</option>
	                                            <option value="Other">Other</option>
	                                        </select>
										</div>
									</div>
									
									<div class="row">
										<div class="span3" >
											<label for="age">Location</label><select name="business_location" id="business_location"><option>Dar es salaam</option><option>Kilimanjaro</option></select>
										</div>
										<div class="span3" >
											<label for="age">Phone</label><input type="text" name="business_phone"/>
										</div>
										<div class="span3" >
											<label for="age">PO. Box</label><input type="text" name="business_box"/>
										</div>
									</div>

									<div class="row">
										<div class="span3" >
											<label for="gender">Date of Registration</label><input type="Date" name="business_date_registration">
										</div>
										<div class="span3" >
											<label for="lastname">Business TIN No. </label><input id="business_tin" type="text" name="business_tin"/>
										</div>
										<div class="span3" >
											<label for="phone"> Business URL <i>(option)</i></label><input id="business_url" type="text" value="http://" name="business_url"/>
										</div>
									</div>

								</fieldset>	
							</div>
						</div>
					</div>
				</div>
			    <div class="row" style="padding-left:4%; padding-right:4%;">
			    	<div style="float:right;">
			    		<input type="checkbox" checked disabled> &nbsp;&nbsp; I agree to <a href="">terms and conditions</a>&nbsp;&nbsp;&nbsp;
						<button type="submit" class="btn btn-warning btn-large" >Signup</button>
					</div>
				</div>
			{{ Form::close() }}

		</div> <!-- /span9 -->
	</div> <!-- /row -->    
@stop
