<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function(Blueprint $table){
            $table->increments('id');
            $table->string('sku', 10)->nullable();
            $table->string('nombre', 50)->nullable();
            $table->integer('id_categoria')->unsigned();
            $table->string('descripcion', 256)->nullable();
            $table->decimal('precio', 11, 2)->nullable();
            $table->integer('cantidad')->nullable();
            $table->boolean('estado')->default(0);
            $table->boolean('eliminacion')->default(0);
            $table->integer('calificacion')->default(0);
            $table->timestamps();

            $table->foreign('id_categoria')->references('id')->on('categorias');
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
