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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->notNullable();
            $table->string('image')->notNullable(); // Assuming you will store the path to the image
            $table->text('excerpt')->notNullable();
            $table->string('slug')->unique(); // Assuming you want to create a unique slug for SEO-friendly URLs
            $table->text('body')->notNullable();
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
