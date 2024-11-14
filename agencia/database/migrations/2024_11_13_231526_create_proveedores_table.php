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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->tinyIncrements('idProveedor');
            $table->string('nombre', 45)->unique();
            $table->string('whatsapp', 45);
            $table->string('ciudad', 45);
            $table->string('pais', 45);
            $table->string('direccion', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
