<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname');
            $table->string('birthday');
            $table->string('self_introduction');
            $table->string('hire_date')->nullable();
            $table->string('tel')->nullable();
            $table->string('hobby');
            $table->string('image_url');
            $table->string('image_url2');
            $table->string('image_url3');
            $table->string('work');
            $table->string('skill');
            $table->string('target');
            $table->string('food')->nullable();
            $table->string('animal')->nullable();
//            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('blood_id');
            $table->unsignedBigInteger('birthmonth_id');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('division_id');
            $table->timestamps();

//            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('blood_id')->references('id')->on('bloods');
            $table->foreign('birthmonth_id')->references('id')->on('birthmonths');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('division_id')->references('id')->on('divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
