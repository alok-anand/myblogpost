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
        Schema::connection('mysql_testprep')->create('course_curriculum-old', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('course_id');
            $table->string('heading');
            $table->integer('parent_id');
            $table->string('link_url');
            $table->integer('content_type')->comment('1=video,2=pdf,3=practicetest');
            $table->boolean('demo_available');
            $table->text('short_description');
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
        Schema::connection('mysql_testprep')->dropIfExists('course_curriculum-old');
    }
};
