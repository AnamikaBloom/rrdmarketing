<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('payment_id')->nullable();
            $table->string('razorpay_order_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->integer('product_price')->nullable();
            $table->integer('order_price')->nullable();
            $table->integer('payable_price');
            $table->enum('status', ['Order Placed', 'Order Completed', 'Cancel'])->nullable();
            $table->enum('cancel_stat', ['Approved', 'Rejected', 'Request'])->nullable();
            $table->string('cancel_reason')->nullable();
            $table->string('cancel_comment')->nullable();
            $table->timestamp('cancel_req_date')->nullable();
            $table->text('reason')->nullable();
            $table->enum('payment_type', ['Cod', 'Online', 'Wallet','Reward Point']);
            $table->string('delivered_date')->nullable();
            $table->integer('product_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->text('order_note')->nullable();
            $table->string('delivery_charge')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
