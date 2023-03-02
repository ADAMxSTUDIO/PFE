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
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('src');
            $table->boolean('license');
            $table->unsignedBigInteger('category_id');
            $table->string('dimensions', 11);
            $table->string('aspect_ratio', 5);
            $table->integer('file_size');
            $table->integer('views')->default(0);
            $table->float('price');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures');
    }
};