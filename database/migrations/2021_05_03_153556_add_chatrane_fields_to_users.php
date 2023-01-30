<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChatraneFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('type_celibataire')->nullable();
            $table->string('age-min-supporte')->nullable();
            $table->string('age-max-supporte')->nullable();
            $table->string('orientations_religieuses_profils')->nullable();
            $table->string('pays_profils')->nullable();
            $table->string('langues_profils')->nullable();
            $table->string('nb_max_profils')->nullable();
            $table->string('services')->nullable();
            $table->string('motif_chatrane')->nullable();


            $table->string('prenom')->nullable();
            $table->decimal('tarif_prise_en_charge', 8,2)->nullable();
            $table->decimal('tarif_chidour', 8,2)->nullable();
            $table->string('modalites_paiement')->nullable();
            $table->string('contact_celibataires')->nullable();
            $table->string('handicap_chatrane')->nullable();
            $table->string('disponibilite')->nullable();
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
            $table->dropColumn('type_celibataire');
            $table->dropColumn('age-min-supporte');
            $table->dropColumn('age-max-supporte');
            $table->dropColumn('orientations_religieuses_profils');
            $table->dropColumn('pays_profils');
            $table->dropColumn('langues_profils');
            $table->dropColumn('nb_max_profils');
            $table->dropColumn('services');
            $table->dropColumn('motif_chatrane');


            $table->dropColumn('prenom');
            $table->dropColumn('tarif_prise_en_charge');
            $table->dropColumn('tarif_chidour');
            $table->dropColumn('modalites_paiement');
            $table->dropColumn('contact_celibataires');
            $table->dropColumn('handicap_chatrane');
            $table->dropColumn('disponibilite');
        });
    }
}
