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
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('name')->unique();
            $table->boolean('status')->default(1);
            $table->string('tag')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('base_price', 10, 2);
            $table->decimal('discount_price', 10, 2);
            $table->string('image')->nullable();
            $table->integer('stock')->default(0);
            $table->string('sku')->unique()->nullable();
            $table->string('slug')->nullable();
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
