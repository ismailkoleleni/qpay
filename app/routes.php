<?php

	//LOGIN SECTION
	//route to login page
	Route::get('/','Login@index');
	// alternative route to show the login form
	Route::get('Login', array('uses' => 'Login@index'));
	// route to process the login form
	Route::post('/Login', array('uses' => 'Login@do_login'));
	// route to logout from the system
	Route::get('/Logout', array('uses' => 'Login@do_logout'));
	// route to retrieve forgoten account
	Route::get('/Retrieve','Login@retrieve');
	
	//SIGNUP SECTION
	//route to signup page
	Route::get('/signup','Login@signup');
	//route to individual signup page
	Route::get('/signup/individual','Login@signup_individual');
	//route to individual signup controller
	Route::post('/signup/individual', array('uses' => 'Login@do_individual_signup'));
	//rout to business signup page
	Route::get('/signup/business','Login@signup_business');
	//route to business signup controller
	Route::post('/signup/business', array('uses' => 'Login@do_business_signup'));

	//INDIVIDUAL SECTION
	//route to individual dashboard
	Route::get('/Individual/index',array('before'=>'auth','uses'=>'Individuals@index'));
	//route to individual profile
	Route::get('/Individual/profile',array('before'=>'auth','uses'=>'Individuals@profile'));
	//route to individual report
	Route::get('/Individual/reports',array('before'=>'auth','uses'=>'Individuals@report'));
	//route to individual disbursements
	Route::get('/Individual/disbursements',array('before'=>'auth','uses'=>'Individuals@disbursements'));
	//route to individual transactions
	Route::get('/Individual/transactions',array('before'=>'auth','uses'=>'Individuals@transactions'));
	//route to individual help
	Route::get('/Individual/helps',array('before'=>'auth','uses'=>'Individuals@helps'));
	//route to logout
	Route::get('/Individual/Logout', array('uses' => 'Login@do_logout'));
	

	//route to do testing 
	Route::get('/testing',function(){
			// $acc=Account::find(52)->individual;
			// echo $acc->first_name;

			//return Account::all();
			
			// $sender=DB::table('individuals')->where('account_id',50)->first();
			// foreach ($sender as $value) {
			// 	echo $value->first_name;
			// }

			return Transaction::create(array(
					'sender_id'=>52,
					'receiver_id'=>51,
					'summary'=>'Wali Maharagwe na Matunda',
					'amount'=>1600
					));


			// if(Transaction::create(array('summary'=>'Wali Nyama Na Matunda','receiver_id'=>51,'amount'=>'2000','sender_id'=>52))){
			// 	echo "Success Transfer";
			// }


			// $individual=Account::find(49)->individual;
		 //     var_dump($individual->first_name);
			});
	
	//Route::get('/about','PagesController@about');

