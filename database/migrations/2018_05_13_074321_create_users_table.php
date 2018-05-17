<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('family');
			$table->string('user_email');
			$table->string('username');
			$table->string('user_name');
			$table->string('password_user');
			$table->string('user_pass');
			$table->enum('permission', array('admin', 'reporter'));
			$table->enum('state', array('enble', 'disable', 'noactive'));
			$table->rememberToken('rememberToken');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}