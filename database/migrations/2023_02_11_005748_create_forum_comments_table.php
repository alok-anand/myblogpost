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
        Schema::connection('mysql_testprep')->create('forum_comments', function (Blueprint $table) {
            $table->integer('id');
            $table->text('comment');
            $table->integer('forum_post_id');
            $table->integer('user_id')->nullable();
            $table->dateTime('created')->useCurrent();
            $table->integer('student_id')->nullable();
            $table->integer('is_approved');
            $table->integer('approoved_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('forum_comments');
    }
};
