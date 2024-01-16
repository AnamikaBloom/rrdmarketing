<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMinlegsToRankManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rank_management', function (Blueprint $table) {
            $table->string('minLegOnSameRank')->after('royalty_percentage')->nullable();
            $table->string('minTotalMembers')->after('minLegOnSameRank')->nullable();
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
            $table->dropColumn('minLegOnSameRank');
            $table->dropColumn('minTotalMembers');
        });
    }
}
