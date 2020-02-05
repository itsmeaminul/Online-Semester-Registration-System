<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImproveRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('improve_reg', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('std_imp_id')->unique();
            $table->string('std_name_ban');
            $table->string('exam_year');
            $table->string('std_year');
            $table->string('std_semester');
            $table->string('std_guardian');
            $table->string('std_present_add');
            $table->string('std_permanent_add');
            $table->string('pre_exam_year');
            $table->string('pre_exam_semester');
            $table->string('pre_passing_year');
            $table->string('pre_semester_gpa');
            $table->string('pre_semester_cgpa');
            $table->string('imp_course_code1');
            $table->string('imp_course_code2')->nullable();
            $table->string('imp_course_code3')->nullable();
            $table->string('imp_course_code4')->nullable();
            $table->string('imp_course_code5')->nullable();
            $table->string('imp_course_title1');
            $table->string('imp_course_title2')->nullable();
            $table->string('imp_course_title3')->nullable();
            $table->string('imp_course_title4')->nullable();
            $table->string('imp_course_title5')->nullable();
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
        Schema::dropIfExists('improve_reg');
    }
}
