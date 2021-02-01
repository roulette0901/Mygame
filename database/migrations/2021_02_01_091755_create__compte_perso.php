<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptePerso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_perso', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('perso_id');
            $table->unsignedBigInteger('compte_id');
            $table->foreign('perso_id')->references('id')->on('persos');
            $table->foreign('compte_id')->references('id')->on('comptes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compte_perso');
    }
}
