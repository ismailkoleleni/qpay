<?php

class Login extends BaseController {
	public static $rules = array(
			'email'=>'required|email|unique:Accounts',
			'password'=>'required|alpha_num|between:6,12',
			'password_confirmation'=>'same:password'
		);
	public function index()
	{
		return View::make('login.pages.login');
	}
	public function signup(){

		return View::make('login.pages.signup');
	}

	public function retrieve(){

		return View::make('login.pages.retrieve');
	}

	public function signup_individual(){

		return View::make('login.pages.who.individual');
	}
	public function do_individual_signup()
	{
		$validator = Validator::make(Input::only(['first_name','last_name','email','password','password_confirmation']), Login::$rules);
 
	    if ($validator->passes()) {
	       //if passes form validation
	        $account_data=array(
					'email'=>Input::get('email'),
					'password'=>Hash::make(Input::get('password')),
					'account_type'=>'Individual'
				);
	        //new account is created here
			$new_account=Account::create($account_data);

			$individual = array(
					'first_name'=>Input::get('individual_first_name'),
					'last_name'=>Input::get('individual_last_name'),
					'dob'=>Input::get('individual_dob'),
					'gender'=>Input::get('individual_gender'),
					'location'=>Input::get('individual_location'),
					'phone'=>Input::get('individual_phone'),
					'account_id'=>$new_account->id
				);
			//new individual is created here
			$new_individual=Individual::create($individual);


			$credit_data=array(
					'currency' => 'Tsh',
					'amount' => 0,
					'account_id' =>$new_account->id
					);
			//new credit row is created for this user
			$new_credit=Credit::create($credit_data);


			if($new_account && $new_individual && $new_credit){
				//if successfully created a new individual, return to signup page with success message
				return Redirect::to('signup/individual')->with('success_message', 'Thanks for registering!');
				
			}else{
				echo "Failed to add individual";
			}

		} else {
			return Redirect::to('signup/individual')->with('error_message', 'The following errors occurred')->withErrors($validator)->withInput();
	   	}
	}
	public function signup_business(){

		return View::make('login.pages.who.business');
	}

	public function do_business_signup()
	{
		$account_data=array(
				'email'=>Input::get('email'),
				'password'=>Hash::make(Input::get('password')),
				'account_type'=>'Business'
			);
		$new_account=Account::create($account_data);

		$business_data = array(
			 'first_name'=>Input::get('representative_firstname'),	
			 'last_name'=>Input::get('representative_lastname'),
			 'dob'=>Input::get('representative_dob'),
			 'gender'=>Input::get('representative_gender'),
			 'title'=>Input::get('representative_title'),	
			 'phone'=>Input::get('representative_phone'),	
			 'business_name'=>Input::get('business_name'),
			 'business_type'=>Input::get('business_type'),
			 'business_category'=>Input::get('business_category'),
			 'business_location'=>Input::get('business_location'),
			 'business_phone'=>Input::get('business_phone'),	
			 'business_box'=>Input::get('business_box'),	
			 'business_date_of_reg'=>Input::get('business_date_registration'),	
			 'business_tin'=>Input::get('business_tin'),
			 'business_url'=>Input::get('business_url'),
			 'account_id'=>$new_account->id
			);
		$new_business=Business::create($business_data);

			if($new_business){

				echo "Successfull added new BUSINESS";
			}else{
				echo "Failed to add individual";
			}
	}
	public function do_logout(){

		Session::flush(); // clear the session
		return Redirect::to('Login'); // redirect the user to the login screen
	}

	public function do_login(){
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('Login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				return Redirect::to('Individual/index');

				// for now we'll just echo success (even though echoing in a controller is bad)
				//echo 'SUCCESS!';

			} else {	 	
				// validation not successful, send back to form	
				return Redirect::back()->withInput()->withErrors($validator);
				//return Redirect::to('Login')->with('error_message', 'The following errors occurred')->withErrors($validator)->withInput();
			}
		}
	}
}