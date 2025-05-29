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
         Schema::create('blogs', function (Blueprint $table) {
           $table->tinyIncrements('blog_id');
           $table->string('title' , 150);
            $table->string('subtitle');
            $table->text('texto1');
            $table->text('texto2');
            $table->text('texto3');
           $table->string('destacado');
           $table->string('img');
           $table->string('icono1');
           $table->string('icono2');
           $table->string('icono3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
