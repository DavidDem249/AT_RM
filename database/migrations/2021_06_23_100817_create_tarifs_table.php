<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarifsTable extends Migration {

	public function up()
	{
		Schema::create('tarifs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libele', 100)->nullable();
			$table->boolean('status')->default(false);
			$table->bigInteger('montant')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('tarifs');
	}
}