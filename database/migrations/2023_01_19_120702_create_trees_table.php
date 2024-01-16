<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('left_user_id')->nullable();
            $table->unsignedBigInteger('middle_user_id')->nullable();
            $table->unsignedBigInteger('right_user_id')->nullable();
            $table->unsignedBigInteger('fourth_user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('left_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('right_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('middle_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('fourth_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trees');
    }
}
