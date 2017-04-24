<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('class');
            $table->string('email');
            $table->string('address');
            $table->integer('zip');
            $table->string('cell_phone');
            $table->integer('mentor_id');
            $table->timestamps();
        });

        Schema::table('students',function(Blueprint $table){
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
        });
    }

        /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}

