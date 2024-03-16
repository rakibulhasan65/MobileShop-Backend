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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->string('category_name');
            $table->string('category_slug')->nullable();
            $table->text('shortDescription')->nullable();
            $table->string('category_image')->nullable();
            $table->double('category_discount')->default(0);
            $table->string('url')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_descriptions')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
