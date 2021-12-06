<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cantidadMaterial');
            $table->string('estado')->default('Activo');
            $table->text('observacion');
            $table->unsignedBigInteger('material_id')->nullable();
            $table->unsignedBigInteger('entrada_id')->nullable();

            $table->foreign('material_id')->references('id')->on('materials')->onDelete('set null');
            $table->foreign('entrada_id')->references('id')->on('entrada')->onDelete('set null');
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
        Schema::dropIfExists('entrada_material');
    }
}