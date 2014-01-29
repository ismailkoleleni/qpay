<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Account extends Eloquent implements UserInterface, RemindableInterface {
	
	protected $table = 'Accounts';
	protected $hidden = array('password');
	protected $guarded = array('id');
	protected $fillable = array('email','password','account_type');

	public function individual(){
		return $this->hasOne('Individual');
	}
	public function transaction(){
		return $this->hasMany('Transaction');
	}
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
}