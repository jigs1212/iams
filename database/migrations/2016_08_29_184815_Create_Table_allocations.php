<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAllocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('request_id');
            $table->timestamp('date_of_allotment');
            $table->timestamp('date_of_return');
            $table->text('remarks');
            $table->integer('allocator_user_id');
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
        Schema::drop('allocations');
    }
}
