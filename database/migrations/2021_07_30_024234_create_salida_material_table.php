<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidaMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salida_material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('material_id')->nullable();
            $table->string('estado');
            $table->string('cantidadMaterial');
            $table->unsignedBigInteger('salida_id')->nullable();

            $table->foreign('material_id')->references('id')->on('materials')->onDelete('set null'); 
            $table->foreign('salida_id')->references('id')->on('salida')->onDelete('set null');    

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salida_material');
    }
}