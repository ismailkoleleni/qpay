<?php

class Credit extends Eloquent {
	protected $guarded=array('id');
	protected $fillable=array('currency','amount','account_id');

	public function individual(){
		return $this->belongsTo('Individual','id','account_id');

	}
	public function account(){
		return $this->belongsTo('Account','id','account_id');

	}
}