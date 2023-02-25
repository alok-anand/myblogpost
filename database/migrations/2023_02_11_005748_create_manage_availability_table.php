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
        Schema::connection('mysql_testprep')->create('manage_availability', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id');
            $table->date('date');
            $table->string('start_time', 60);
            $table->string('end_time', 60);
            $table->string('booking_timestamp');
            $table->integer('booking_status');
            $table->integer('booked_by');
            $table->integer('byuser');
            $table->dateTime('created')->useCurrent();
            $table->dateTime('modified')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('manage_availability');
    }
};
