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
        Schema::connection('mysql_testprep')->create('students_visa_enquiry_old', function (Blueprint $table) {
            $table->integer('visa_enquiry_id');
            $table->integer('student_id');
            $table->integer('programe_id');
            $table->integer('test_module_id');
            $table->string('name', 60);
            $table->string('email', 60);
            $table->string('mobile', 10);
            $table->string('country_intrested', 50)->nullable();
            $table->string('VISA_type', 50)->nullable();
            $table->tinyInteger('isReplied')->default(0);
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
        Schema::connection('mysql_testprep')->dropIfExists('students_visa_enquiry_old');
    }
};
