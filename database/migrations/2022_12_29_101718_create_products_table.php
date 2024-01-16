<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('childcategory_id')->nullable();
            $table->text('description')->nullable();
            $table->string('colors')->nullable();
            $table->string('sizes')->nullable();
            $table->string('slug');
            $table->enum('featured', ['Yes', 'No'])->nullable();
            $table->string('price');
            $table->string('selling_price')->nullable();
            $table->string('quantity');
            $table->enum('status', ['Active', 'InActive'])->default('Active');
            $table->string('sku')->nullable();
            $table->string('hsn_code')->nullable();
            $table->text('details')->nullable();
            $table->string('brand')->nullable();
            $table->string('gst')->nullable();
            $table->string('referal_point')->nullable();
            $table->enum('type', ['BestSeller', 'Latest'])->nullable();
            $table->string('orderCount')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE');
            $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('CASCADE');
            $table->foreign('childcategory_id')->references('id')->on('child_categories')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
