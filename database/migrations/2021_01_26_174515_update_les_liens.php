<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLesLiens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comptes_persos', function (Blueprint $table)
        {
        $table->unsignedBigInteger('compte_id');
        $table->unsignedBigInteger('perso_id');
        $table->foreign('compte_id')->references('id')->on('comptes');
        $table->foreign('perso_id')->references('id')->on('persos');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
