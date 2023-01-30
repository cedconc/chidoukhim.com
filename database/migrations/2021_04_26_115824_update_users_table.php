<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('genre')->nullable();
            $table->string('statut_marital')->nullable();
            $table->string('adresse')->nullable();
            $table->string('date_de_naissance')->nullable();
            $table->string('taille')->nullable();
            $table->string('poids')->nullable();
            $table->string('profession')->nullable();
            $table->string('etude')->nullable();
            $table->string('langues')->nullable();
            $table->string('cohen')->nullable();
            $table->string('types')->nullable();
            $table->string('background_religieux')->nullable();
            $table->string('ethnicite')->nullable();
            $table->string('references')->nullable();
            $table->string('a_propos')->nullable();
            $table->string('attentes')->nullable();
            $table->string('age-min')->nullable();
            $table->string('age-max')->nullable();
            $table->string('photo_1')->nullable();
            $table->string('photo_2')->nullable();
            $table->string('photo_3')->nullable();
            $table->string('photo_4')->nullable();
            $table->string('photo_5')->nullable();
            $table->string('photo_6')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('genre');
            $table->dropColumn('statut_marital');
            $table->dropColumn('adresse');
            $table->dropColumn('date_de_naissance');
            $table->dropColumn('taille');
            $table->dropColumn('poids');
            $table->dropColumn('profession');
            $table->dropColumn('etude');
            $table->dropColumn('langues');
            $table->dropColumn('cohen');
            $table->dropColumn('types');
            $table->dropColumn('background_religieux');
            $table->dropColumn('ethnicite');
            $table->dropColumn('references');
            $table->dropColumn('a_propos');
            $table->dropColumn('attentes');
            $table->dropColumn('age-min');
            $table->dropColumn('age-max');
            $table->dropColumn('photo_1');
            $table->dropColumn('photo_2');
            $table->dropColumn('photo_3');
            $table->dropColumn('photo_4');
            $table->dropColumn('photo_5');
            $table->dropColumn('photo_6');
        });
    }
}
