@extends('individual.individual_template')
@section('content_pane')
	<div class="span9">
						
		<h1 class="page-title">
			<i class="icon-home"></i>
			Dashboard					
		</h1>
		
		<div class="stat-container">
								
			<div class="stat-holder">						
				<div class="stat">							
					<span>{{ Account::find(Auth::user()->id)->transaction->count() }}</span>							
					Total Transactions							
				</div> <!-- /stat -->						
			</div> <!-- /stat-holder -->
			<div class="stat-holder">						
				<div class="stat">							
					<span>{{ Account::find(Auth::user()->id)->transaction->count() }}</span>							
					Complete Transactions							
				</div> <!-- /stat -->						
			</div> <!-- /stat-holder -->
			
			<div class="stat-holder">						
				<div class="stat">							
					<span>{{ "0" }}</span>							
					Pending Transactions							
				</div> <!-- /stat -->						
			</div> <!-- /stat-holder -->
			
			<div class="stat-holder">						
				<div class="stat">							
					<span>{{ Transaction::where('sender_id',Auth::user()->id)->sum('amount') }} Tsh</span>							
					Total Expenditure							
				</div> <!-- /stat -->						
			</div> <!-- /stat-holder -->
			
		</div> <!-- /stat-container -->
		
		<div class="widget">
								
			<div class="widget-header">
				<i class="icon-signal"></i>
				<h3>Weekly Transactions</h3>
			</div> <!-- /widget-header -->
												
			<div class="widget-content">					
				<div id="bar-chart" class="chart-holder"></div> <!-- /bar-chart -->				
			</div> <!-- /widget-content -->
			
		</div> <!-- /widget -->
		
@stop