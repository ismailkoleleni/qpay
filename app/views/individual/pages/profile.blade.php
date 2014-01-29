@extends('individual.individual_template')
@section('content_pane')
	<div class="span9">
				<?php 
				$individual=Account::find(Auth::user()->id)->individual; 
				//$individual=Individual::account()->find($account->id); 
				?>
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					User Account					
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						<div class="widget">
							
							<div class="widget-header">
								<h3>Basic Information </h3>
							</div> <!-- /widget-header -->
							<div class="widget-content">
								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Profile</a>
									  </li>
									  <li class=""><a href="#2" data-toggle="tab">Settings</a></li>
									  <li class=""><a href="#2" data-toggle="tab">Notifications</a></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane active" id="1">
											<form id="edit-profile" class="form-horizontal">
												<fieldset>
													<div class="control-group">											
														<label class="control-label" for="username">Email</label>
														<div class="controls">
															<input type="text" class="input-xlarge disabled" id="username" value="{{ Auth::user()->email }}" disabled>
															<p class="help-block">Your username is for logging in and cannot be changed.</p>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													
													<div class="control-group">											
														<label class="control-label" for="firstname">First Name</label>
														<div class="controls">
															<input type="text" class="input-xlarge" id="firstname" value="{{ $individual->first_name }}">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="lastname">Last Name</label>
														<div class="controls">
															<input type="text" class="input-xlarge" id="lastname" value="{{ $individual->last_name }}">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="password1">Password</label>
														<div class="controls">
															<input type="password" class="input-xlarge" id="password1" value="password">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													<div class="control-group">											
														<label class="control-label" for="password2">Confirm</label>
														<div class="controls">
															<input type="password" class="input-xlarge" id="password2" value="password">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
												</fieldset>
											</form>
										</div>
										
										<div class="tab-pane" id="2">
											<form id="edit-profile2" class="form-horizontal">
												<fieldset>
													<div class="control-group">
														<label class="control-label" for="accounttype">SMS Notification<br/><i>There are extra charges</i></label>
														<div class="controls">
															<label class="radio">
																<label class="checkbox">
																<input type="checkbox" name="accountadvanced" value="option1" checked="checked" id="accountadvanced">
																I would like SMS Notification Service after every successful transaction I do.
															</label>
															
														</div>
													</div>
													
													<div class="control-group">
														<label class="control-label" for="accountadvanced">Advanced Settings</label>
														<div class="controls">
															<label class="checkbox">
																<label class="radio">
																	<input type="checkbox" name="accountadvanced" value="option1" checked="checked" id="accountadvanced">
																	User encrypted connection when accessing this server
																</label>
															</label>
															<label class="checkbox">
																<label class="radio">
																	<input type="checkbox" name="accounttype" value="option2">
																	Download all transactions on connection
																</div>
															</label>
														</div>
													</div>
													
													<div class="form-actions">
														<button type="submit" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
													</div>
												</fieldset>
											</form>
										</div>
										
									</div>
						</div>

@stop