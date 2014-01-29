@extends('login.template')

@section('contents')
	@yield('login_wrapper')
@stop
@section('topbar')	
<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner top_header_custom">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 				
			</a>
			
			<a class="brand" href="">Q-Pay</a>
			
			<div class="nav-collapse">
			
				<ul class="nav pull-right">
					
					<li class="">
						
						<!--<a href="javascript:;"><i class="icon-chevron-left"></i></a>-->
					</li>
				</ul>
				
			</div> <!-- /nav-collapse -->
			
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
   
@stop
