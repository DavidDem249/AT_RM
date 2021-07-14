<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormateursTable extends Migration {

	public function up()
	{
		Schema::create('formateurs', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('status')->default(false);
			// $table->integer('user_id')->unsigned();
			$table->integer('prestataire_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('formateurs');
	}
}