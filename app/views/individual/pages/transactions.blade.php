@extends('individual.individual_template')
@section('content_pane')
	<div class="span9">
				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Transactions					
				</h1>
				
				<div class="row">
					
					<div class="span9">
				
						<div class="widget">
							<div class="widget widget-table">
										
								<div class="widget-header">
									<i class="icon-th-list"></i>
									<h3>Transactions</h3>
								</div> <!-- /widget-header -->
								
								<div class="widget-content">
									<?php //$transactions=Account::find(Auth::user()->id)->transaction; 
										$transactions=Transaction::find(1);
										foreach (Account::with('transaction')->get() as $transaction)
											{
											    echo $Account->transaction->summary;
											}
										//var_dump($transactions);
									?>

									<table class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>To</th>
												<th>Payment For</th>
												<th>Amount</th>
												<th>Date/Time</th>
												<th>&nbsp;</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>1</td>
												<td>Cafeteria 1</td>
												<td>Meal= Wali + Maarage ...</td>
												<td>Tsh. 800 </td>
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
												<td>2</td>
												<td>Cafeteria 2</td>
												<td>Meal= Wali + Maarage ...</td>
												<td>Tsh. 800 </td>
												<td>Mon 20th Dec 2013 1323hrs</td>
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
												<td>Cafeteria 1</td>
												<td>Meal= Wali + Maarage ...</td>
												<td>Tsh. 600 </td>
												<td>Mon 20th Dec 2013 1633hrs</td>
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
												<td>Hillpark cafe</td>
												<td>Meal=Wali + Samaki ...</td>
												<td>Tsh. 3500 </td>
												<td>Mon 21th Dec 2013 1239hrs</td>
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
												<td>Coet 1</td>
												<td>Meal= matunda ...</td>
												<td>Tsh. 1000 </td>
												<td>Mon 21th Dec 2013 1903hrs</td>
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
												<td>6</td>
												<td>Cafeteria 1</td>
												<td>Meal= Wali + Nyama ...</td>
												<td>Tsh. 1600 </td>
												<td>Mon 22th Dec 2013 1223hrs</td>
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
												<td>7</td>
												<td>Cafeteria 1</td>
												<td>Meal= Chipsi + Mayai ...</td>
												<td>Tsh. 1500 </td>
												<td>Mon 23th Dec 2013 2343hrs</td>
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

@stop