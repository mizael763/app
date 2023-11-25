<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_prod');
            $table->string('nombre_prod');
            $table->string('categoria_prod');
            $table->text('descripcion');
            $table->decimal('precio_prod', 8, 2); // Se asume precio con 8 dígitos en total, 2 decimales.
            $table->string('imagen')->nullable(false);
            $table->timestamps(); // Creado en y actualizado en
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
