<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVillesTable extends Migration {

	public function up()
	{
		Schema::create('villes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libele', 30);
			$table->integer('pays_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('villes');
	}
}