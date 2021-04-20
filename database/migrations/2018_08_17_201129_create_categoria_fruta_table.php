<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaFrutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_fruta', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('fruta_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->timestamps();



            //relation
            $table->foreign('fruta_id')->references('id')->on('frutas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('categoria_id')->references('id')->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_fruta');
    }
}
