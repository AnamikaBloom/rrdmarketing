<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoyaltyToRankManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rank_management', function (Blueprint $table) {
            $table->string('royalty_percentage')->after('rank_income')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rank_management', function (Blueprint $table) {
            $table->dropColumn('royalty_percentage');
        });
    }
}
