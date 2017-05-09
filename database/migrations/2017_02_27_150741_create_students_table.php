<?php

use Illuminate\Support\Facades\Schema;
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
            $table->timestamp('created_on')->nullable();
            $table->integer('created_by')->nullable();
            $table->boolean('private')->default(0)->nullable();
            $table->boolean('active')->default(1)->nullable();
            $table->integer('student_id');
            $table->string('full_name');
            $table->string('email');
            $table->integer('user_id')->unsigned();
            $table->integer('council_id')->unsigned();
            $table->string('thesis_file');
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
        Schema::dropIfExists('students');
    }
}
