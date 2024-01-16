<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug');
            $table->string('image');
            // $table->unsignedBigInteger('category_id')->nullable();
            $table->string('titlenext')->nullable();
            $table->enum('title_color', ['dark', 'white'])->default('dark');
            $table->string('content')->nullable();
            $table->enum('status', ['Active', 'InActive']);
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
