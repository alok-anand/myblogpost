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
        Schema::connection('mysql_testprep')->create('student_proficiency_level', function (Blueprint $table) {
            $table->integer('student_prof_id');
            $table->integer('student_answer_id');
            $table->integer('student_id')->nullable()->comment('added by alok , this field is not mandatory, student_anwer_id we need is enogh');
            $table->string('collection_no', 200);
            $table->string('FC', 20);
            $table->string('LR', 20);
            $table->string('Pronunciation', 20);
            $table->string('GRA', 20);
            $table->string('TA_TR', 20);
            $table->string('CC', 20);
            $table->integer('underlength')->nullable();
            $table->integer('numOfWords')->nullable();
            $table->string('penality', 20)->nullable();
            $table->integer('off_topic')->nullable();
            $table->integer('memorised')->nullable();
            $table->integer('illegible')->nullable();
            $table->string('comment', 300)->nullable();
            $table->integer('by_user');
            $table->tinyInteger('is_uploaded')->default(0);
            $table->dateTime('uploaded_datetime')->nullable();
            $table->dateTime('created')->useCurrent();
            $table->dateTime('modified')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('student_proficiency_level');
    }
};
