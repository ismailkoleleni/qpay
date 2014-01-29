@extends('individual.individual_template')
@section('content_pane')
	<div class="span9">
				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Disbursements					
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						<div class="widget">
							
							<div class="widget-header">
								<h3>Disbursements Table</h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">
								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Disburse</a>
									  </li>
									  <li class=""><a href="#2" data-toggle="tab">Report</a></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane active" id="1">
											<div class="widget">
												<div class="widget-content">
													<p>This section, will help you add/put money in your account.</p>
												</div> <!-- /widget-content -->
											</div> <!-- /widget -->

											<form id="edit-profile" class="form-horizontal pull-center">
												<fieldset>
													<div class="control-group">											
														<label class="control-label" for="username">Phone Numnber</label>
														<div class="controls">
															<input type="text" class="input-xlarge " id="phone" value="">
															<p class="help-block">Phone Number you used to send money with.</p>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													<div class="control-group">											
														<label class="control-label" for="username">Verification Code</label>
														<div class="controls">
															<input type="text" class="input-xlarge " id="phone" value="">
															<p class="help-block">Verification Code you received on your phone.</p>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="pull-right">
														<button class="btn">Cancel</button> <button type="submit" class="btn btn-primary">Disburse Money</button>
													</div>
												</fieldset>
											</form>
										</div>
										
										<div class="tab-pane" id="2">
											<div class="widget widget-table">
										
												<div class="widget-header">

													<i class="icon-th-list"></i>
													<h3>Active Disbursements</h3>
												</div> <!-- /widget-header -->
												
												<div class="widget-content">
												
													<table class="table table-striped table-bordered">
														<thead>
															<tr>
																<th>#</th>
																<th>Phone Number</th>
																<th>Amount</th>
																<th>Verification Code</th>
																<th>Date/Time</th>
																<th>&nbsp;</th>
															</tr>
														</thead>
														
														<tbody>
															<tr>
																<td>1</td>
																<td>255754372839</td>
																<td>Tsh. 50,000 </td>
																<td>V12Q342</td>
																<td>Mon 19th Dec 2013 1123hrs</td>
																<td class="action-td">
																	<a href="javascript:;" class="btn btn-small btn-warning">
																		<i class="icon-ok"></i>								
																	</a>					
																	<a href="javascript:;" class="btn btn-small">
																		<i class="icon-remove"></i>						
																	</a>
																</td>
															</tr>
															<tr>
																<td>2</td>
																<td>255754372839</td>
																<td>Tsh. 150,000 </td>
																<td>V32J342</td>
																<td>Mon 19th Dec 2013 1923hrs</td>
																<td class="action-td">
																	<a href="javascript:;" class="btn btn-small btn-warning">
																		<i class="icon-ok"></i>								
																	</a>						
																	<a href="javascript:;" class="btn btn-small">
																		<i class="icon-remove"></i>						
																	</a>
																</td>
															</tr>
															<tr>
																<td>3</td>
																<td>255754372839</td>
																<td>Tsh. 70,000 </td>
																<td>P14Q341</td>
																<td>Mon 27th Dec 2013 2323hrs</td>
																<td class="action-td">
																	<a href="javascript:;" class="btn btn-small btn-warning">
																		<i class="icon-ok"></i>								
																	</a>						
																	<a href="javascript:;" class="btn btn-small">
																		<i class="icon-remove"></i>						
																	</a>
																</td>
															</tr>
															<tr>
																<td>4</td>
																<td>255754372839</td>
																<td>Tsh. 250,000 </td>
																<td>M12P342</td>
																<td>Mon 29th Dec 2013 2323hrs</td>
																<td class="action-td">
																	<a href="javascript:;" class="btn btn-small btn-warning">
																		<i class="icon-ok"></i>								
																	</a>					
																	<a href="javascript:;" class="btn btn-small">
																		<i class="icon-remove"></i>						
																	</a>
																</td>
															</tr>
															<tr>
																<td>5</td>
																<td>255754372839</td>
																<td>Tsh. 20,000 </td>
																<td>J13P412</td>
																<td>Mon 29th Dec 2013 1223hrs</td>
																<td class="action-td">
																	<a href="javascript:;" class="btn btn-small btn-warning">
																		<i class="icon-ok"></i>								
																	</a>						
																	<a href="javascript:;" class="btn btn-small">
																		<i class="icon-remove"></i>						
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												
												</div> <!-- /widget-content -->
												
											</div> <!-- /widget -->
										</div>
										
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop