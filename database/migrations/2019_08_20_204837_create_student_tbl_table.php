<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->bigIncrements('std_id');
            $table->integer('std_reg');
            $table->string('std_session');
            $table->string('std_password');
            $table->string('std_name');
            $table->string('std_fathersname');
            $table->string('std_mothersname');
            $table->string('std_contact');
            $table->string('std_email');
            $table->date('std_dob');
            $table->string('std_nationality');
            $table->string('std_religion');
            $table->string('std_photo');
            $table->string('ssc_board');
            $table->string('school');
            $table->string('ssc_roll');
            $table->string('ssc_year');
            $table->string('ssc_gpa');
            $table->string('hsc_board');
            $table->string('college');
            $table->string('hsc_roll');
            $table->string('hsc_year');
            $table->string('hsc_gpa');
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
        Schema::dropIfExists('student_tbl');
    }
}
