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
        Schema::connection('mysql_testprep')->create('forum_posts', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('category_id')->nullable();
            $table->string('title');
            $table->text('description');
            $table->dateTime('created')->useCurrent();
            $table->dateTime('modified')->default('0000-00-00 00:00:00');
            $table->integer('approved_by')->nullable()->default(1);
            $table->integer('user_id')->nullable();
            $table->integer('student_id')->nullable();
            $table->boolean('approved')->default(true);
            $table->tinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('forum_posts');
    }
};
