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
        Schema::connection('mysql_testprep')->create('student_leaves', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('student_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('reason');
            $table->tinyInteger('approved')->default(0);
            $table->integer('approved_by')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('student_leaves');
    }
};
