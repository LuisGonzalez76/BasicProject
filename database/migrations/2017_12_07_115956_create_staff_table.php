<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(/**
         * @param Blueprint $table
         */
            'staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullName');
            $table->string('staffEmail');
            $table->string('staffPhone');
            $table->integer('staff_type_id')->unsigned();
            $table->foreign('staff_type_id')->references('id')->on('staff');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('staff');
    }
}
