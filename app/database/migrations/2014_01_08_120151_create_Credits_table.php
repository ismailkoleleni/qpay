f<?php

use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Credits',function($table){
			$table->increments('id');
			$table->String('currency');
			$table->float('amount');
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
		Schema::drop('Credits');
	}

}