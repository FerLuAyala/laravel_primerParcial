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
               Schema::create('categorias', function (Blueprint $table) {
            $table->tinyIncrements('categoria_id');
            $table->string('name' , 100);
            $table->string('intro');
            $table->string('icono');
            $table->string('subtitle');
            $table->text('detalle');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
