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
        Schema::connection('mysql_testprep')->create('student_resources', function (Blueprint $table) {
            $table->integer('student_resources_id');
            $table->integer('student_id');
            $table->integer('resource_id');
            $table->integer('batch_id');
            $table->string('assign_date');
            $table->string('due_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('student_resources');
    }
};
