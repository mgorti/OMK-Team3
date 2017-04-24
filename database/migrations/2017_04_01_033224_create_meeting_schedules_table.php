<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('meeting_schedules', function (Blueprint $table) {
        $table->integer('id');
        $table->string('mentor_name');
        $table->string('student_name');
        $table->date('date');
        $table->time('time');
        $table->string('location');
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
        //
        Schema::drop('meeting_schedules');
    }
}
