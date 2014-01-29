@extends('individual.template')

@section('topbar')
		
<div class="navbar navbar-fixed-top">
	<?php 
		$individual_data=Account::find(Auth::user()->id)->individual;
		$credit=Account::find(Auth::user()->id)->credit;
	?>
													
	<div class="navbar-inner top_header_custom">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 				
			</a>
			
			<a class="brand" href="index">Q-Pay</a>
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle " href="#">
							{{ $individual_data->first_name." ".$individual_data->last_name }}<b class="caret"></b>							
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="profile"><i class="icon-user"></i> Account Setting  </a>
							</li>
							
							<li>
								<a href="profile"><i class="icon-lock"></i> Change Password</a>
							</li>
							
							<li class="divider"></li>
							
							<li>
								<a href="Logout"><i class="icon-off"></i> Logout</a>
							</li>
						</ul>
					</li>
				</ul>
				
			</div> <!-- /nav-collapse -->
			
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
@stop


@section('sidebar')
	
	<div id="content">
			
			<div class="container">
				
				<div class="row">
					
	<div class="span3">
				
				<div class="account-container">
				
					<div class="account-avatar">
						<img src="{{ '../../public/img/headshot.png' }} " alt="" class="thumbnail" />
					</div> <!-- /account-avatar -->
				
					<div class="account-details">
					
						<span class="account-name">{{ $individual_data->first_name." ".$individual_data->last_name }}</span>
						<span class="account-role">{{ $individual_data->account_type }}</span>
						<span class="account-actions"> <a href="profile">Profile</a> | <a href="profile">Edit Settings</a></span>
						
					</div> <!-- /account-details -->
				<span class="badge" style="text-align:center;">{{ $credit->amount." ".$credit->currency }}</span>
						
				</div> <!-- /account-container -->
				
				<hr />
				
				<ul id="main-nav" class="nav nav-tabs nav-stacked">
					
					<li class="">
						<a href="index" data-toggle-"tab">
							<i class="icon-home"></i>
							Dashboard 		
						</a>
					</li>
					
					<li>
						<a href="disbursements" data-toggle-"tab">
							<i class="icon-money"></i>
							Disbursements		
						</a>
					</li>
					
					<li>
						<a href="transactions" data-toggle-"tab">
							<i class="icon-list"></i>
							Transactions	
							<span class="label label-warning pull-right">5</span>
						</a>
					</li>
					
					<li>
						<a href="reports" data-toggle-"tab">
							<i class="icon-signal"></i>
							Reports	
						</a>
					</li>
					<li>
						<a href="helps" data-toggle-"tab">
							<i class="icon-th-large"></i>
							Help	
						</a>
					</li>
					
				</ul>	
				
				<hr />
				
				<div class="sidebar-extra">
					<p>Buy Smartly!.</p>
				</div> <!-- .sidebar-extra -->
				
				<br />
		
			</div> <!-- /span3 -->
			
@stop

@section('contents')
		
	@yield('content_pane')
		
@stop


