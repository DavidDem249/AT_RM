<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffresTable extends Migration {

	public function up()
	{
		Schema::create('offres', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 100);
			$table->text('description')->nullable();
			$table->text('comp_tech')->nullable();
			$table->integer('place')->nullable();
			$table->date('date_limite')->nullable();
			$table->string('type_travail', 100)->nullable();
			$table->string('lieu', 50)->nullable();
			$table->string('duration', 100)->nullable();
			$table->integer('ville_id')->unsigned();
			$table->integer('domaine_id')->unsigned();
			$table->boolean('status')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('offres');
	}
}