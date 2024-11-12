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
        Schema::create('destinos', function (Blueprint $table) {
            $table->smallIncrements('idDestino');
            $table->string('aeropuerto', 60)->unique();
            $table->decimal('precio', 10, 2);
            $table->tinyInteger('idRegion')->unsigned();
            $table->boolean('activo');
            // foreign key
            $table->foreign('idRegion')
                        ->references('idRegion')
                        ->on('regiones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinos');
    }
};
