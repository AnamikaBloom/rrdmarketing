<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('package_id');
            $table->string('order_id')->nullable();
            $table->string('txn_id')->nullable();
            $table->string('amount')->nullable();
            $table->enum('payment_type',['Online','COD'])->nullable();
            $table->enum('product_order_status',[0,1])->comment('0:Not Ordered,1:Ordered')->default('0');

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
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_packages');
    }
}
