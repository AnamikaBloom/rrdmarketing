<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepurchagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repurchages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rank_id');
            $table->string('reward_percentage');
            $table->string('self_purchage_amount');
            $table->string('team_purchage_amount');
            $table->enum('status',['Active','Inactive'])->default('Inactive');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('rank_id')->references('id')->on('rank_management')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repurchages');
    }
}
