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
        Schema::connection('mysql_testprep')->create('mock_speaking_slots', function (Blueprint $table) {
            $table->integer('book_speaking_slots_id');
            $table->integer('stud_id');
            $table->integer('examiner_id');
            $table->integer('availability_id');
            $table->longText('stu_booking_info');
            $table->string('unique_test_id', 200);
            $table->integer('attempt');
            $table->string('meeting_id', 200);
            $table->string('meeting_url');
            $table->integer('active');
            $table->string('band_score', 60);
            $table->string('FC', 10)->nullable();
            $table->string('LR', 10)->nullable();
            $table->string('Pronunciation', 10)->nullable();
            $table->string('GRA', 10)->nullable();
            $table->longText('examiner_comment');
            $table->string('audio_file', 200);
            $table->integer('result_sent')->default(0);
            $table->integer('reminder_sent');
            $table->integer('meeting_url_sent')->nullable();
            $table->dateTime('created')->useCurrent();
            $table->dateTime('updated')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('mock_speaking_slots');
    }
};
