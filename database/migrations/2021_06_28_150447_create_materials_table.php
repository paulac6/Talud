<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('peso');
            $table->string('tamaño');
            $table->string('cantidad');
            $table->string('situacion');
            $table->unsignedBigInteger('estado')->default(1);
            $table->unsignedBigInteger('tipo_id')->nullable();
            $table->unsignedBigInteger('marca_id')->nullable();
            $table->unsignedBigInteger('proveedor_id')->nullable();

            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('set null');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('set null');
            $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('set null');

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
        Schema::dropIfExists('materials');
    }
}