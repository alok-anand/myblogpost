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
        Schema::connection('mysql_testprep')->create('question_sets', function (Blueprint $table) {
            $table->integer('question_sets_id');
            $table->integer('section_id');
            $table->integer('set_behavior')->nullable();
            $table->integer('question_type_id');
            $table->integer('display_no_of_questions')->comment('no of question to display students');
            $table->integer('total_questions');
            $table->string('question_sets_heading');
            $table->text('question_sets_desc');
            $table->text('question_sets_para');
            $table->string('question_sets_image')->nullable();
            $table->string('answer_audio_recrod_duration', 10)->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
            $table->integer('by_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('question_sets');
    }
};
