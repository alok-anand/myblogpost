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
        Schema::connection('mysql_testprep')->create('backup_students_etracs_payments', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('etracs_retain_payment_id');
            $table->integer('programe_id');
            $table->integer('test_module_id');
            $table->string('course_type', 100);
            $table->integer('student_id');
            $table->integer('mprep_student_id');
            $table->integer('consultancy_type_id')->default(0);
            $table->date('duration_from');
            $table->date('duration_to');
            $table->date('date_joining');
            $table->integer('payment_status');
            $table->integer('is_apporoved')->default(1);
            $table->integer('latest_status')->default(1);
            $table->text('remarks');
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
        Schema::connection('mysql_testprep')->dropIfExists('backup_students_etracs_payments');
    }
};
