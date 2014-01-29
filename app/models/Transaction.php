<?php

class Transaction extends Eloquent {
	protected $guarded=array('id');
	protected $fillable=array('summary','amount','sender_id','receiver_id');

	public function individual(){
		return $this->belongsTo('Individual','id','sender_id');

	}
	public function account(){
		return $this->belongsTo('Account');

	}
}