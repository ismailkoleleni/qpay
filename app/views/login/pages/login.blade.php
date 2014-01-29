@extends('login.pages.login_template')

@section('login_wrapper')
	<div id="login-container">
	
	
	<div id="login-header">
		
		<h3>Login</h3>
		
	</div> <!-- /login-header -->
	
	<div id="login-content" class="clearfix">
			{{ Form::open(array('url' => 'Login')) }}
				<fieldset>
					@if($errors->any())
						{{ implode('', $errors->all('<div class="alert alert-warning alert-dismissable">:message</div>') ) }}
					@endif
					<div class="control-group">
						<label class="control-label" for="username">Email</label>
						<div class="controls">
							<input type="text" class="" id="email" name="email" placeholder="email@mail.com">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
							<input type="password" class="" id="password" name="password" placeholder="Password">
						</div>
					</div>
				</fieldset>
				
				<div id="remember-me" class="pull-left">
					<input type="checkbox" name="remember" id="remember" />
					<label id="remember-label" for="remember">Remember Me</label>
				</div>
				
				<div class="pull-right">
					<button type="submit" class="btn btn-warning btn-large">
						Login
					</button>
				</div>
			{{ Form::close() }}
		</div> <!-- /login-content -->
		<div id="login-extra">
			<p>Don't have an account? <a href="signup">Sign Up.</a></p>
			<p>Remind Password? <a href="Retrieve">Retrieve.</a></p>
		</div> <!-- /login-extra -->
	
	</div> <!-- /login-wrapper -->
@stop