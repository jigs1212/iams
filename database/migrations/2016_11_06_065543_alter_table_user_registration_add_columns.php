<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUserRegistrationAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_registrations',function(Blueprint $table) {
            $table->text('city')->after('department_id');
            $table->text('state')->after('city');
            $table->text('country')->after('state');
            $table->date('birthday')->after('country');
            $table->integer('phone_off')->after('birthday');
            $table->integer('extn')->after('phone_off');
            $table->integer('mobile_no')->after('extn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_registrations',function(Blueprint $table) {
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('country');
            $table->dropColumn('birthday');
            $table->dropColumn('phone_off');
            $table->dropColumn('extn');
            $table->dropColumn('mobile_no');
        });
    }
}
