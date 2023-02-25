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
        Schema::connection('mysql_testprep')->create('teacher_resources', function (Blueprint $table) {
            $table->integer('resources_id');
            $table->integer('teacher_id');
            $table->text('resource_link');
            $table->string('resource_category');
            $table->string('status', 20)->default('active');
            $table->string('title');
            $table->string('resource_type');
            $table->integer('batch_id')->nullable();
            $table->dateTime('created')->useCurrent();
            $table->string('filesize')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('teacher_resources');
    }
};
