<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsCommentsTable extends Migration {

	public function up()
	{
		Schema::create('news_comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('news_id')->unsigned();
			$table->string('name', 255);
			$table->text('email');
			$table->text('user_email_comment');
			$table->enum('state', array('post', 'npost', 'spam'));
			$table->ipAddress('user_ip');
		});
	}

	public function down()
	{
		Schema::drop('news_comments');
	}
}