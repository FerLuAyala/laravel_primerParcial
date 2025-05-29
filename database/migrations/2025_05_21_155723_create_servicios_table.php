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
       Schema::create('servicios', function (Blueprint $table) {
    $table->id('servicio_id');
    $table->string('title', 100);
    $table->string('descripcion');
    $table->unsignedInteger('price');

    $table->unsignedTinyInteger('categoria_id'); // FK
    $table->foreign('categoria_id')->references('categoria_id')->on('categorias');

    $table->string('img')->nullable();

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
