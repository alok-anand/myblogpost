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
        Schema::connection('mysql_testprep')->create('questions', function (Blueprint $table) {
            $table->integer('question_id');
            $table->integer('question_sets_id');
            $table->integer('question_no');
            $table->text('question');
            $table->text('correct_answer');
            $table->text('correct_answer_explaination')->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
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
        Schema::connection('mysql_testprep')->dropIfExists('questions');
    }
};
