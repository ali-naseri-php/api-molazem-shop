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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ProjectName');
            $table->string('location');
            $table->string('picture');
            $table->string('typeProject');
            $table->string('customer');
            $table->string('discription');
            $table->bigInteger('StartYearProject');
            $table->json('Chalanges');
            $table->json('Solution');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
