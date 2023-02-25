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
        Schema::connection('mysql_testprep')->create('c_school_enquiry', function (Blueprint $table) {
            $table->integer('id');
            $table->string('OTP', 100);
            $table->string('is_mobile_verified', 50);
            $table->string('email');
            $table->string('phone');
            $table->string('name');
            $table->string('country');
            $table->string('userstream', 100);
            $table->string('std_query');
            $table->string('webinar');
            $table->string('topic');
            $table->string('date_time');
            $table->string('meeting_id');
            $table->dateTime('created')->useCurrent();
            $table->integer('marketing_id');
            $table->string('marketing_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('c_school_enquiry');
    }
};
