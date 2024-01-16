<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('district',100);
            $table->unsignedBigInteger('state_id');
            $table->string('city',100);
            $table->bigInteger('postal_code');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->timestamps();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
