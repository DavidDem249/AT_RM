<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomainesTable extends Migration {

	public function up()
	{
		Schema::create('domaines', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 155);
			$table->boolean('status')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('domaines');
	}
}