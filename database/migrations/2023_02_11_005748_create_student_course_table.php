<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_testprep')->create('student_course', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('student_id');
            $table->integer('course_id');
            $table->integer('transaction_id');
            $table->string('start_date');
            $table->string('end_date');
            $table->dateTime('created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('student_course');
    }
};
