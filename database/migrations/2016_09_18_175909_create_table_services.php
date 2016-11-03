<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_register', function(Blueprint $table){
            $table->increments('id');
            $table->text('Service_call_no');
            $table->text('Problem');
            $table->timestamp('date_of_registration');
            $table->timestamp('date_of_resolved');
            $table->text('Problem_Solution');
            $table->text('remarks');
            $table->integer('registered_by_user_id');
            $table->enum('choices', array('call_logged', 'call_attended', 'pending_for_spares', 'pending_for_service', 'call_finished'));
            $table->boolean('status');
            $table->integer('added_by_user_id');
            $table->integer('updated_by_user_id');
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
        Schema::drop('service_register');
    }
}
