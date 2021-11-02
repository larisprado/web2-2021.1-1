<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensentradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensentradas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("identrada");
            $table->unsignedBigInteger("idproduto");
            $table->timestamps();
            $table->integer('quantidade');
            $table->foreign('identrada')->references('id')->on('entradas')->onDelete("cascade");
            $table->foreign('idproduto')->references('id')->on('produtos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itensentradas');
    }
}
