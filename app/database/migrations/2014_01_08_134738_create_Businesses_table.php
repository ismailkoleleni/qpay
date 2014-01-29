<?php

use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Businesses',function($table){
			$table->increments('id');
			$table->String('first_name');
			$table->String('last_name');
			$table->String('title');
			$table->String('dob');
			$table->String('gender');
			$table->String('phone');

			$table->String('business_name');
			$table->String('business_type');
			$table->String('business_category');
			$table->String('business_location');
			$table->String('business_box');
			$table->String('business_phone');
			$table->String('business_tin');
			$table->String('business_date_of_reg');
			
			$table->String('business_url');
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
		Schema::create('Businesses');
	}

}