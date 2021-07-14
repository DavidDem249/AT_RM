<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrestatairesTable extends Migration {

	public function up()
	{
		Schema::create('prestataires', function(Blueprint $table) {
			$table->increments('id');
			$table->string('lastname', 155);
			$table->string('firstname', 200);
			$table->string('phone', 20);
			$table->string('email', 200);
			$table->boolean('status')->default(false);
			$table->string('gender', 50)->nullable();
			$table->integer('ville_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('prestataires');
	}
}