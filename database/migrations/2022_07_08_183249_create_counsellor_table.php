<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounsellorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counsellors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('address');
            $table->string('dob');
            $table->string('nic');
            $table->string('emp_no_student_no');
            $table->string('faculty');
            $table->string('department');
            $table->string('batch');
            $table->string('gender');
            $table->string('phone');
            $table->string('type');
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
        Schema::dropIfExists('counsellors');
    }
}
