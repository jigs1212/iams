<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function(Blueprint $table){
            $table->increments('id');
            $table->integer('asset_id');
            $table->integer('requester_user_id');
            $table->timestamp('date_to_be_allocated');
            $table->timestamp('date_of_return');
            $table->text('purpose');
            $table->text('remarks');
            $table->boolean('status');
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
        Schema::drop('requests');
    }
}
