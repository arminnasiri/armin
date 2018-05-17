<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTableTable extends Migration {

	public function up()
	{
		Schema::create('news_table', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('reporter_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->string('title', 500);
			$table->text('abstr');
			$table->text('body');
			$table->enum('post', array('post', 'draft'));
			$table->integer('views');
			$table->integer('post_like');
			$table->integer('post_unlike');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('news_table');
	}
}