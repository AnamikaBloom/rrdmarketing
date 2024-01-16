<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepurchageOrderListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repurchage_order_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('repurchage_order_id');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('product_size')->nullable();
            $table->decimal('selling_price')->nullable();
            $table->decimal('selling_price_without_gst')->default(0);
            $table->decimal('total_gst')->default(0);
            $table->integer('quantity')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('repurchage_order_id')->references('id')->on('repurchage_orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repurchage_order_lists');
    }
}
