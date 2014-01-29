<?php

use Illuminate\Database\Migrations\Migration;

class CreateIndividualsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Individuals',function($table){
			$table->increments('id');
			$table->String('first_name');
			$table->String('last_name');
			$table->String('dob');
			$table->String('gender');
			$table->String('location');
			$table->String('phone');
			$table->integer('account_id')->references('id')->on('accounts');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Individuals');
		//
	}

}