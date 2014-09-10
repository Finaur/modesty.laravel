<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMNews extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('m_news', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('title_news', 255);
			$table->text('summary_news');
			$table->text('content_news');
			$table->string('author', 255);
			$table->integer('id_category');

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
		Schema::drop('m_news');
	}

}
