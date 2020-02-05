<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegularRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regular_reg', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('std_reg_id')->unique();
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
        Schema::dropIfExists('regular_reg');
    }
}
