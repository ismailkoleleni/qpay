@extends('login.pages.login_template')

@section('login_wrapper')
	<div id="login-container">
	
	
	<div id="login-header">
		
		<h3>Retrieve Password</h3>
		
	</div> <!-- /login-header -->
	
	<div id="login-content" class="clearfix">
	
	<form action="">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="username">Email</label>
						<div class="controls">
							<input type="text" class="" id="username" placeholder="Email">
						</div>
					</div>
				</fieldset>
				<div class="pull-right">
					<button type="submit" class="btn btn-warning btn-large">
						Re-Send Credentials
					</button>
				</div>
			</form>
			
		</div> <!-- /login-content -->
		
		
		<div id="login-extra">
			<p>Don't have an account? <a href="signup">Sign Up.</a></p>
		</div> <!-- /login-extra -->
	
</div> <!-- /login-wrapper -->
@stop