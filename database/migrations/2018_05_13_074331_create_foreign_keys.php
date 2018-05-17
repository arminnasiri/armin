<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('news_comments', function(Blueprint $table) {
			$table->foreign('news_id')->references('id')->on('news_table')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('news_img', function(Blueprint $table) {
			$table->foreign('news_id')->references('id')->on('news_table')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('news_comments', function(Blueprint $table) {
			$table->dropForeign('news_comments_news_id_foreign');
		});
		Schema::table('news_img', function(Blueprint $table) {
			$table->dropForeign('news_img_news_id_foreign');
		});
	}
}