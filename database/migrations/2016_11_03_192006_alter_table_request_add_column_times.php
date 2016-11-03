<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableRequestAddColumnTimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requests',function(Blueprint $table) {
            $table->time('time_to_be_allocated')->after('date_to_be_allocated');
            $table->time('time_of_return')->after('date_of_return');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requests',function(Blueprint $table) {
            $table->dropColumn('time_to_be_allotted');
            $table->dropColumn('time_of_return');
        });
    }
}
