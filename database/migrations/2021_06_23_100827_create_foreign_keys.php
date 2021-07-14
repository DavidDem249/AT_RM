<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('recruteurs', function(Blueprint $table) {
			$table->foreign('ville_id')->references('id')->on('villes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('recruteurs', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('offres', function(Blueprint $table) {
			$table->foreign('ville_id')->references('id')->on('villes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('offres', function(Blueprint $table) {
			$table->foreign('domaine_id')->references('id')->on('domaines')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('prestataires', function(Blueprint $table) {
			$table->foreign('ville_id')->references('id')->on('villes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('prestataires', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('rapports', function(Blueprint $table) {
			$table->foreign('recruteur_id')->references('id')->on('recruteurs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('rapports', function(Blueprint $table) {
			$table->foreign('prestataire_id')->references('id')->on('prestataires')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('villes', function(Blueprint $table) {
			$table->foreign('pays_id')->references('id')->on('pays')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		/*Schema::table('formateurs', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});*/
		Schema::table('formateurs', function(Blueprint $table) {
			$table->foreign('prestataire_id')->references('id')->on('prestataires')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('formations', function(Blueprint $table) {
			$table->foreign('domaine_id')->references('id')->on('domaines')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('recruteurs', function(Blueprint $table) {
			$table->dropForeign('recruteurs_ville_id_foreign');
		});
		Schema::table('recruteurs', function(Blueprint $table) {
			$table->dropForeign('recruteurs_user_id_foreign');
		});
		Schema::table('offres', function(Blueprint $table) {
			$table->dropForeign('offres_ville_id_foreign');
		});
		Schema::table('offres', function(Blueprint $table) {
			$table->dropForeign('offres_domaine_id_foreign');
		});
		Schema::table('prestataires', function(Blueprint $table) {
			$table->dropForeign('prestataires_ville_id_foreign');
		});
		Schema::table('prestataires', function(Blueprint $table) {
			$table->dropForeign('prestataires_user_id_foreign');
		});
		Schema::table('rapports', function(Blueprint $table) {
			$table->dropForeign('rapports_recruteur_id_foreign');
		});
		Schema::table('rapports', function(Blueprint $table) {
			$table->dropForeign('rapports_prestataire_id_foreign');
		});
		Schema::table('villes', function(Blueprint $table) {
			$table->dropForeign('villes_pays_id_foreign');
		});
		/*Schema::table('formateurs', function(Blueprint $table) {
			$table->dropForeign('formateurs_user_id_foreign');
		});*/
		Schema::table('formateurs', function(Blueprint $table) {
			$table->dropForeign('formateurs_prestataire_id_foreign');
		});
		Schema::table('formations', function(Blueprint $table) {
			$table->dropForeign('formations_domaine_id_foreign');
		});
	}
}