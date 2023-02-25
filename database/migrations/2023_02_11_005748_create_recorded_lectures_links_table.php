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
        Schema::connection('mysql_testprep')->create('recorded_lectures_links', function (Blueprint $table) {
            $table->integer('recorded_lecture_id');
            $table->string('lecture_topic');
            $table->text('lecture_link');
            $table->integer('batch_id');
            $table->integer('instructor_id');
            $table->string('instructor_name', 50);
            $table->string('lecture_date');
            $table->string('status', 50)->default('active');
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
        Schema::connection('mysql_testprep')->dropIfExists('recorded_lectures_links');
    }
};
