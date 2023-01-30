<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('silhouette')->nullable();
            $table->string('handicap')->nullable();
            $table->string('telephone', 25)->nullable();
            $table->string('pays', 50)->nullable();
            $table->string('appartenance_religieuse')->nullable();
            $table->string('pratique_religieuse')->nullable();
            $table->string('niveau_religieux')->nullable();
            $table->string('nom_rabbin')->nullable();
            $table->string('suivre_conjoint', 3)->nullable();
            $table->string('partage_photo', 3)->nullable();

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
            $table->dropColumn('silhouette');
            $table->dropColumn('handicap');
            $table->dropColumn('telephone');
            $table->dropColumn('pays');
            $table->dropColumn('appartenance_religieuse');
            $table->dropColumn('pratique_religieuse');
            $table->dropColumn('niveau_religieux');
            $table->dropColumn('nom_rabbin');
            $table->dropColumn('suivre_conjoint');
            $table->dropColumn('partage_photo');
        });
    }
}
