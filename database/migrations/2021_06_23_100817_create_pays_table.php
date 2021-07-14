<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaysTable extends Migration {

	public function up()
	{
		Schema::create('pays', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libele', 100);
			$table->boolean('status')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('pays');
	}
}