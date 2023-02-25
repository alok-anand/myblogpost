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
        Schema::connection('mysql_testprep')->create('batches', function (Blueprint $table) {
            $table->integer('batch_id');
            $table->string('batch_name');
            $table->string('type', 50)->default('E1');
            $table->integer('branch_id');
            $table->integer('instructor_id');
            $table->text('gm_link');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('classstarttime', 50);
            $table->string('classsendtime', 50);
            $table->string('batch_type', 50);
            $table->tinyInteger('online_offline')->default(0)->comment('0 Offline 1 Online');
            $table->integer('batch_capacity');
            $table->dateTime('created_date')->useCurrent();
            $table->string('status', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('batches');
    }
};
