<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateComptePerso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_perso', function (Blueprint $table)
        {

        $table->id();
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
