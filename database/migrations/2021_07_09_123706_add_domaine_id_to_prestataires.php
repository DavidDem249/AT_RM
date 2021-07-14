<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDomaineIdToPrestataires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prestataires', function (Blueprint $table) {

            $table->integer('domaine_id')->unsigned()->nullable();
            $table->foreign('domaine_id')->references('id')->on('domaines')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prestataires', function (Blueprint $table) {
            Schema::dropIfExists('domaine_id');
        });
    }
}
