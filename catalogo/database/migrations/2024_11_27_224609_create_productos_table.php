<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->mediumIncrements('idProducto');
            $table->string('prdNombre', 75)->unique();
            $table->decimal('prdPrecio', 10, 2)->unsigned();
            $table->tinyInteger('idMarca')->unsigned();
            $table->tinyInteger('idCategoria')->unsigned();
            $table->string('prdDescripcion', 1000);
            $table->string('prdImagen', 45);
            $table->boolean('prdActivo')->default(1);
            $table->foreign('idMarca')
                ->references('idMarca')->on('marcas');
            $table->foreign('idCategoria')
                ->references('idCategoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
