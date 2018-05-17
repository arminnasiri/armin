<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsImgTable extends Migration {

	public function up()
	{
		Schema::create('news_img', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('news_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('news_img');
	}
}