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
        Schema::connection('mysql_testprep')->create('hw_assigned_student-old', function (Blueprint $table) {
            $table->integer('hw_assiign_student_id');
            $table->integer('student_result_id')->nullable();
            $table->integer('student_id');
            $table->integer('ts_cat_assoc_id');
            $table->integer('batch_id');
            $table->string('assign_date');
            $table->string('due_date');
            $table->integer('status')->default(0);
            $table->dateTime('created')->useCurrent();
            $table->dateTime('submitted_on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('hw_assigned_student-old');
    }
};
