<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('member_id')->unique();
            $table->string('sponser_id');
            $table->string('placement_id');
            $table->unsignedBigInteger('rank_id')->nullable();
            $table->string('password')->nullable();
            $table->string('password_hint')->nullable();
            $table->boolean('has_password')->default(1);
            $table->string('email')->nullable();
            $table->boolean('is_email_verified')->default(0);
            $table->string('mobile')->nullable();
            $table->string('house_no')->nullable();
            $table->string('street')->nullable();
            $table->string('landmark')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('district')->nullable();
            $table->string('pincode')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('nominee_relation')->nullable();
            $table->string('nominee_age')->nullable();
            $table->string('cashback')->nullable();
            $table->string('transaction_pass')->nullable();
            $table->string('payee_name')->nullable();
            $table->string('account_no')->nullable();
            $table->string('IFSC_Code')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch')->nullable();
            $table->enum('bankappoval_status',['Pending','Approved','Rejected'])->default('Pending');
            $table->string('pan_no')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('referral_code')->nullable();
            $table->string('photo')->nullable();
            $table->enum('photo_status',['Pending','Approved','Rejected'])->default('Pending');
            $table->string('gst')->nullable();
            $table->enum('gst_status',['Pending','Approved','Rejected'])->default('Pending');
            $table->string('pan')->nullable();
            $table->enum('pan_status',['Pending','Approved','Rejected'])->default('Pending');
            $table->boolean('is_mobile_verified')->default(0);
            $table->boolean('two_step_verification')->default(0);
            $table->rememberToken();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender',['Male','Female'])->nullable();
            $table->enum('marital_status',['Married','Single','Widow'])->nullable();
            $table->enum('status',['Active','Inactive'])->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('CASCADE');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('CASCADE');
            $table->foreign('rank_id')->references('id')->on('rank_management')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
