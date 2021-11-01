<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome',60);
            $table->double('icms');
            $table->double('ipi'); 
            $table->double('frete');
            $table->double('precofabrica'); 
            $table->double('precocompra'); 
            $table->double('precovenda'); 
            $table->double('lucro'); 
            $table->double('desconto'); 
            $table->integer('quantidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
