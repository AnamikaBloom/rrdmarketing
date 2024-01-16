<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepurchageOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repurchage_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->unsignedBigInteger('user_id');
            $table->string('txn_id')->nullable();
            $table->integer('order_price')->nullable();
            $table->integer('payable_price');
            $table->decimal('selling_price_without_gst')->default(0);
            $table->decimal('total_gst')->default(0);
            $table->enum('payment_type',['Online','COD'])->nullable();
            $table->enum('product_order_status',[0,1])->comment('0:Not Ordered,1:Ordered')->default('0');
            $table->enum('status', ['Placed', 'Completed','Failed','Processing'])->nullable();
            $table->string('delivery_charge')->nullable();
            $table->string('payment_request_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('currency')->nullable();
            $table->string('fees')->nullable();
            $table->string('payment_request')->nullable();
            $table->string('instrument_type')->nullable();
            $table->string('billing_instrument')->nullable();
            $table->string('tax_invoice_id')->nullable();
            $table->string('failure')->nullable();
            $table->string('payout')->nullable();
            $table->string('affiliate_commission')->nullable();
            $table->timestamp('payment_created_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repurchage_orders');
    }
}
