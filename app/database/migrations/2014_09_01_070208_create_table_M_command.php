<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMCommand extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('m_command', function(Blueprint $table)
		{
			$table->increments('command_id');
			$table->string('command_author', 255);
			$table->string('email_author', 255);
			$table->text('command_detail');
			$table->integer('news_id');

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
		Schema::drop('m_command');
	}

}
