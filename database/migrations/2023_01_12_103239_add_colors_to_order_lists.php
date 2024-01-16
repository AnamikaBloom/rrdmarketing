<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColorsToOrderLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_lists', function (Blueprint $table) {
            $table->string('colors')->after('product_id')->nullable();
            $table->string('sizes')->after('colors')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_lists', function (Blueprint $table) {
            $table->dropColumn('colors');
            $table->dropColumn('sizes');
        });
    }
}
