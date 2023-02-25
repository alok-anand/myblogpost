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
        Schema::connection('mysql_testprep')->create('mock_test_bookings', function (Blueprint $table) {
            $table->integer('booking_id');
            $table->integer('student_id');
            $table->integer('programe_id');
            $table->integer('test_module_id');
            $table->string('booking_date', 10)->nullable();
            $table->string('booking_time', 6)->nullable();
            $table->tinyInteger('active')->default(1);
            $table->timestamp('created')->useCurrent();
            $table->timestamp('modified')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('mock_test_bookings');
    }
};
