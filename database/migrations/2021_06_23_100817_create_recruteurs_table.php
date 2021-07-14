<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecruteursTable extends Migration {

	public function up()
	{
		Schema::create('recruteurs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('lastname', 100)->nullable();
			$table->string('firstname', 100)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('email', 200);
			$table->string('domicile', 1500)->nullable();
			$table->integer('ville_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('recruteurs');
	}
}