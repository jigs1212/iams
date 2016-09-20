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
            $table->int('request_id');
            $table->date('date_of_allotment');
            $table->date('date_of_return');
            $table->text('remarks');
            $table->int('user_id_allocated_by');
            $table->boolean('status');
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
