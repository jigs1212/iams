<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAssets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->text('part_no');
            $table->string('vendor_name');
            $table->integer('quantity');
            $table->boolean('type');
            $table->string('supplier_name');
            $table->text('bill_no');
            $table->integer('amount');
            $table->date('date_of_purchase');
            $table->integer('warranty_period');
            $table->string('customer_care_numbers');
            $table->string('customer_care_email');
            $table->string('vendor_website_support');
            $table->date('date_of_end_of_warranty');
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
        Schema::drop('assets');
    }
}
