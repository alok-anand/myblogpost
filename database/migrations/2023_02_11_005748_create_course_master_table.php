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
        Schema::connection('mysql_testprep')->create('course_master', function (Blueprint $table) {
            $table->integer('id');
            $table->string('title');
            $table->string('demo_url');
            $table->string('alias');
            $table->string('metatitle');
            $table->string('metadescription');
            $table->string('course_type');
            $table->text('description');
            $table->string('short description');
            $table->string('starts');
            $table->string('duration');
            $table->string('language');
            $table->string('live_classes');
            $table->string('daily_batch');
            $table->string('mock_test');
            $table->string('batches_available');
            $table->string('price', 10);
            $table->integer('mrp');
            $table->string('download_curriculum');
            $table->string('download_list');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('course_master');
    }
};
