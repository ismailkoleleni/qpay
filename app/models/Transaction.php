<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Transaction extends Eloquent{
	
	protected $fillable=array('summary','amount','sender_id','receiver_id');

	public function individual(){
		return $this->belongsTo('Individual');

	}
	public function account(){
		return $this->belongsTo('Account','sender_id');

	}
}