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
										//$transactions=Transaction::find(2);

										// $transactions = DB::table('transactions')->where('sender_id',Auth::user()->id)->get();
										//Account::find(50)->with('transaction')->get()
									//$transactions=Account::find(50)->transaction->get();
										//echo $transactions->summary;
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
										<?php
										$transactions = Account::find(Auth::user()->id)->transaction;
										//var_dump($transactions);

										?>
										@foreach($transactions as $transaction)
											<tr>
												<!-- $sender=DB::table('individuals')->where('account_id',$transaction->receiver_id)->first();
												-->
												 <td>{{ $transaction->id }}</td>
												<td>{{ Account::find($transaction->receiver_id)->email }}</td>
												<td>{{ $transaction->summary }}</td>
												<td>{{ $transaction->amount }}</td>
												<td>{{ $transaction->created_at }}s</td>
												<td class="action-td">
													<a href="javascript:;" class="btn btn-small btn-warning">
														<i class="icon-ok"></i>								
													</a>					
													<a href="javascript:;" class="btn btn-small">
														<i class="icon-remove"></i>						
													</a>
												</td>
											</tr>
										@endforeach
												
											
											
										</tbody>
									</table>
								
								</div> <!-- /widget-content -->
								
							</div> <!-- /widget -->
				
						</div>
					</div>
				</div>
	</div>	

@stop