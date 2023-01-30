<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferencesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nom_reference_1')->nullable();
            $table->string('phone_reference_1')->nullable();
            $table->string('lien_de_parente_reference_1')->nullable();

            $table->string('nom_reference_2')->nullable();
            $table->string('phone_reference_2')->nullable();
            $table->string('lien_de_parente_reference_2')->nullable();

            $table->string('phone_rabbin')->nullable();


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
            $table->dropColumn('nom_reference_1');
            $table->dropColumn('phone_reference_1');
            $table->dropColumn('lien_de_parente_reference_1');

            $table->dropColumn('nom_reference_2');
            $table->dropColumn('phone_reference_2');
            $table->dropColumn('lien_de_parente_reference_2');

            $table->dropColumn('phone_rabbin');




        });
    }
}
