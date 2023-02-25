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
        Schema::connection('mysql_testprep')->create('students_enquiry', function (Blueprint $table) {
            $table->integer('enquiry_id');
            $table->integer('student_id');
            $table->integer('programe_id');
            $table->string('name', 60);
            $table->string('email', 60);
            $table->string('mobile', 10);
            $table->integer('center_id');
            $table->string('center_name', 50);
            $table->string('city_name', 25);
            $table->integer('test_module_id');
            $table->integer('test_id')->nullable();
            $table->string('test_module_name', 20);
            $table->mediumText('message');
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
        Schema::connection('mysql_testprep')->dropIfExists('students_enquiry');
    }
};
