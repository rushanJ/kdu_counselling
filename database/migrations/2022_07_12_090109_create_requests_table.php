<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('counseller_id')->unsigned();
            $table->string('problem_type');
            $table->string('service_method');
            $table->text('remarks');
            $table->timestamps();
            // $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('counseller_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('student_id')->references('id')->on('users');
            // $table->foreign('counseller_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
