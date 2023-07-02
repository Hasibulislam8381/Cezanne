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
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->string('slug');
            $table->string('photo');
            $table->string('sku_code');
            $table->string('artist_name');
            $table->string('medium')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('size')->nullable();
            $table->string('price')->nullable();
            $table->string('price_w_frame')->nullable();
            $table->string('sale_price')->nullable();            
            $table->longText('description')->nullable();
            $table->longText('add_info')->nullable();
            $table->string('status')->default('publish');
            $table->softDeletes();
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
