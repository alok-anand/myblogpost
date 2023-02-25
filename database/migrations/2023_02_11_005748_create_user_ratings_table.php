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
        Schema::connection('mysql_testprep')->create('user_ratings', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id');
            $table->integer('student_id');
            $table->integer('reading');
            $table->integer('listening');
            $table->integer('speaking');
            $table->integer('writing');
            $table->text('review')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('user_ratings');
    }
};
