<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Color;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(Brand::class);
            $table->string('product_name');
            $table->string('sku');
            $table->string('product_slug');
            $table->foreignIdFor(Color::class);
            $table->string('family_color')->nullable();
            $table->string('group_code')->nullable();
            $table->string('product_image')->nullable();
            $table->float('product_price');
            $table->float('product_discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->float('final_price');
            $table->string('product_video')->nullable();
            $table->text('product_descriptions')->nullable();
            $table->text('product_search_keywords')->nullable();
            $table->string('occasion')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_descriptions')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->integer('stock')->nullable();
            $table->tinyInteger('is_featured')->default(0);
            $table->tinyInteger('view')->nullable();
            $table->tinyInteger('status')->default(0);
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
