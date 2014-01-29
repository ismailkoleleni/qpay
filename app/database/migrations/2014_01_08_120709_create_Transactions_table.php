<?php

use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Transactions',function($table){
			$table->increments('id');
			$table->String('summary');
			$table->String('amount');
			$table->integer('sender_id')->references('id')->on('accounts');
			$table->integer('receiver_id')->references('id')->on('accounts');
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
		Schema::create('Transactions');
	}

}