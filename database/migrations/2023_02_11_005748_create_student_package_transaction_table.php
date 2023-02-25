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
        Schema::connection('mysql_testprep')->create('student_package_transaction', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('student_id');
            $table->string('transaction_id');
            $table->dateTime('trans_date')->useCurrent();
            $table->integer('course_id');
            $table->string('course_fees');
            $table->integer('paid_amnt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('student_package_transaction');
    }
};
