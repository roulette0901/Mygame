<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableInter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
        public function up()
    {
        Schema::create('comptes_persos', function (Blueprint $table)
        {

        $table->id();
        $table->unsignedBigInteger('comptes_id');
        $table->unsignedBigInteger('persos_id');
        $table->foreign('comptes_id')->references('id')->on('comptes');
        $table->foreign('persos_id')->references('id')->on('persos');
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
