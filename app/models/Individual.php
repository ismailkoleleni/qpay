<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Individual extends Eloquent{
	
	protected $table = 'Individuals';
	protected $guarded = array('id');
	protected $fillable = array('first_name','last_name','dob','gender','location','phone','account_id');

	public function account(){
		return $this->belongsTo('Account','id','account_id');
	}
	public function transaction(){
		return $this->hasMany('Transaction');
	}
	
}