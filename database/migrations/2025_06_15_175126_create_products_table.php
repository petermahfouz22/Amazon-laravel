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
            $table->id('productId');
            $table->string('product_title');
            $table->decimal('rating', 3, 2)->nullable();
            $table->unsignedInteger('quantity_sold')->default(0);
            $table->decimal('price', 10, 2);
            $table->json('discount_creditcard')->nullable();
            $table->foreignId('categoryId')->constrained('categories', 'categoryId')->onDelete('cascade');
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
