<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormationsTable extends Migration {

	public function up()
	{
		Schema::create('formations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libele', 155);
			$table->integer('domaine_id')->unsigned();
			$table->text('description')->nullable();
			$table->boolean('status')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('formations');
	}
}