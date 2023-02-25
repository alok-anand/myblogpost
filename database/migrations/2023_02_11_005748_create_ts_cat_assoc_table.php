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
        Schema::connection('mysql_testprep')->create('ts_cat_assoc', function (Blueprint $table) {
            $table->integer('ts_cat_assoc_id');
            $table->integer('test_seriese_id');
            $table->integer('category_id');
            $table->string('icon')->nullable();
            $table->enum('paper_duration', ['5', '10', '15', '20', '25', '30', '35', '40', '45', '50', '55', '60'])->comment('in Minutes');
            $table->string('max_marks', 3)->nullable();
            $table->tinyInteger('totalquest')->nullable();
            $table->string('audio_file')->nullable();
            $table->string('audio_time', 10)->nullable();
            $table->string('title');
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
        Schema::connection('mysql_testprep')->dropIfExists('ts_cat_assoc');
    }
};
