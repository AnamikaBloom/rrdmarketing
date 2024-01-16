<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('user_name')->unique();
            $table->string('password')->nullable();
            $table->string('password_hint')->nullable();
            $table->boolean('has_password')->default(1);
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->string('control_access')->default('1|2|3|4|5|6|7|8|9|10|11|12|13|14|15');
            $table->string('address')->nullable();
            $table->boolean('is_email_verified')->default(0);
            $table->string('mobile')->nullable();
            $table->string('UPI')->nullable();
            $table->boolean('is_mobile_verified')->default(0);
            $table->boolean('two_step_verification')->default(0);
            $table->rememberToken();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender',['Male','Female'])->nullable();
            $table->enum('marital_status',['Married','Single','Widow'])->nullable();
            $table->enum('status',['Active','Inactive'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
