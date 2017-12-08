<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('organization_id')->unsigned();
            $table->integer('facility_id')->unsigned();
            $table->string('activityName');
            $table->string('activityDescription');
            $table->integer('attendantsNumber');
            $table->dateTime('activityDate');
            $table->integer('activity_status_code');
            $table->integer('hasFood');
            $table->integer('hasGuest');
            $table->string('guestName')->nullable();
            $table->integer('counselor_status_code');
            $table->integer('manager_status_code');
            $table->integer('activity_type_code');
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
        Schema::drop('activities');
    }
}
