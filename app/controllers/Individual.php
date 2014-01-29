<?php

class Individuals extends BaseController {

	public function index()
	{	
		//$User=Account::find(Auth::user()->id);
		//echo $individual->first_name;
		//echo $User->email;
		//$indi=Individual::find('account_id',$User->id);
		//echo $indi->first_name;
		return View::make('individual.pages.individual');
		//$individual=Individual::find(10);
		//var_dump($individual->account->email);
	}
	public function profile()
	{
		return View::make('individual.pages.profile');
	}
	public function report()
	{
		return View::make('individual.pages.reports');
	}
	public function transactions()
	{
		return View::make('individual.pages.transactions');
	}
	public function disbursements()
	{
		return View::make('individual.pages.disbursements');
	}
	public function helps()
	{
		return View::make('individual.pages.help');
	}

}