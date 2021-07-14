<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('firstname', 50)->nullable();
			$table->string('lastname', 100)->nullable();
			$table->string('email', 255);
			$table->string('phone', 20)->nullable();
			$table->string('object', 100)->nullable();
			$table->text('message')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}