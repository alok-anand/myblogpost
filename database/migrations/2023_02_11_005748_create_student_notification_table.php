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
        Schema::connection('mysql_testprep')->create('student_notification', function (Blueprint $table) {
            $table->integer('notification_id');
            $table->integer('student_id');
            $table->integer('programe_id')->nullable();
            $table->tinyInteger('test_module_id')->nullable();
            $table->integer('ts_cat_assoc_id');
            $table->string('collection_no', 50);
            $table->integer('messege_id');
            $table->tinyInteger('read_status')->default(0);
            $table->integer('pinned')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('paper_checked')->nullable();
            $table->dateTime('created');
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
        Schema::connection('mysql_testprep')->dropIfExists('student_notification');
    }
};
