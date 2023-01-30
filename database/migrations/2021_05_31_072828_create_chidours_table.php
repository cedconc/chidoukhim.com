<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChidoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chidours', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('origine');
            $table->bigInteger('cible');
            $table->bigInteger('chatrane');
            $table->boolean('fini')->default(false);
            $table->boolean('marie')->default(false);
            $table->string('motif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chidours');
    }
}
