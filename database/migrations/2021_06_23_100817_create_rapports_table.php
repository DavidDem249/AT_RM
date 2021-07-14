<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRapportsTable extends Migration {

	public function up()
	{
		Schema::create('rapports', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libele', 200)->nullable();
			$table->longText('description');
			$table->integer('recruteur_id')->unsigned();
			$table->integer('prestataire_id')->unsigned();
			$table->boolean('status')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('rapports');
	}
}