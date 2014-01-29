<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Individual extends Eloquent{
	
	protected $table = 'Individuals';
	protected $guarded = array('id');
	protected $fillable = array('first_name','last_name','dob','gender','location','phone');

	public function account(){
		return $this->belongsTo('Account','account_id');
	}
	public function transaction(){
		return $this->hasMany('Transaction');
	}
	
}