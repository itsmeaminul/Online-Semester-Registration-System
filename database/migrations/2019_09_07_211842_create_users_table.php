<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('std_id')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('std_regn');
            $table->string('std_session');
            $table->string('std_department');
            $table->string('std_faculty');
            $table->string('std_hall');
            $table->string('std_fathersname');
            $table->string('std_mothersname');
            $table->string('std_contact');
            $table->date('std_dob');
            $table->string('std_blood');
            $table->string('std_nationality');
            $table->string('std_religion');
            $table->string('std_photo')->nullable();
            $table->string('std_sign')->nullable();
            $table->string('ssc_board');
            $table->string('school');
            $table->integer('ssc_roll');
            $table->string('ssc_year');
            $table->string('ssc_gpa');
            $table->string('ssc_sub');
            $table->string('hsc_board');
            $table->string('college');
            $table->integer('hsc_roll');
            $table->string('hsc_year');
            $table->string('hsc_gpa');
            $table->string('hsc_sub');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
