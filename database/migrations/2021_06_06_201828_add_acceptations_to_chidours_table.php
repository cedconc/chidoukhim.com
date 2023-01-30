<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAcceptationsToChidoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chidours', function (Blueprint $table) {
            $table->integer('acceptation_origine')->nullable();
            $table->integer('acceptation_cible')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chidours', function (Blueprint $table) {
            $table->drop('acceptation_origine');
            $table->drop('acceptation_cible');
        });
    }
}
