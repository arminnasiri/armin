<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryNewsTable extends Migration {

	public function up()
	{
		Schema::create('category_news', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->text('title');
			$table->text('category_title');
			$table->text('description_category');
		});
	}

	public function down()
	{
		Schema::drop('category_news');
	}
}