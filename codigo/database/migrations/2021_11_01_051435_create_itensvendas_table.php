<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensvendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensvendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idvenda");
            $table->unsignedBigInteger("idproduto");
            $table->timestamps();
            $table->integer('quantidade');
            $table->foreign('idvenda')->references('id')->on('vendas')->onDelete("cascade");
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
        Schema::dropIfExists('itensvendas');
    }
}
