<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrol', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('course_id');
            $table->timestamps();

            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('course_id')
            ->references('id')
            ->on('courses')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enroll');
    }
}
