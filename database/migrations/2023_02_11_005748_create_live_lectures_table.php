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
        Schema::connection('mysql_testprep')->create('live_lectures', function (Blueprint $table) {
            $table->integer('live_lecture_id');
            $table->integer('category_id');
            $table->string('live_lecture_title', 100);
            $table->text('short_desc');
            $table->string('video_url', 100)->nullable();
            $table->string('screenshot')->nullable();
            $table->tinyInteger('active');
            $table->integer('by_user')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('live_lectures');
    }
};
