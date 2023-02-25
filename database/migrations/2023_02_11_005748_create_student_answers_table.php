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
        Schema::connection('mysql_testprep')->create('student_answers', function (Blueprint $table) {
            $table->integer('student_answers_id');
            $table->integer('ts_cat_assoc_id');
            $table->integer('student_id');
            $table->string('collection_no', 50);
            $table->integer('question_id');
            $table->tinyInteger('is_img')->nullable();
            $table->text('student_answers')->nullable();
            $table->decimal('marks_secured', 3, 1)->nullable();
            $table->text('checker_remarks')->nullable();
            $table->tinyInteger('is_uploaded')->default(0);
            $table->dateTime('uploaded_datetime')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('student_answers');
    }
};
