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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('categories');
            $table->integer('price');
            $table->text('description');
            $table->unsignedBigInteger('resto');
            $table->timestamps();
        });

        Schema::table('items', function (Blueprint $table) {
            $table->foreign('categories')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('resto')->references('id')->on('restos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
