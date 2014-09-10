<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('m_users', function(Blueprint $table)
		{
			$table->increments('user_id');
			$table->string('user_name', 255);
			$table->string('full_name', 255);
			$table->string('user_email', 255);
			$table->string('password', 255);
			$table->char('user_status', 2);
			$table->enum('actived', array('y', 'n'));

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
		Schema::drop('m_users');
	}

}
