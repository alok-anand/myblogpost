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
        Schema::connection('mysql_testprep')->create('upcoming_exams_leads', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('upcomingexam_id');
            $table->string('name');
            $table->string('number');
            $table->string('city');
            $table->string('ielts');
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
        Schema::connection('mysql_testprep')->dropIfExists('upcoming_exams_leads');
    }
};
