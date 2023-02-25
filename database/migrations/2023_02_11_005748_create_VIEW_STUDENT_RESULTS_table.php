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
        Schema::connection('mysql_testprep')->create('VIEW_STUDENT_RESULTS', function (Blueprint $table) {
            $table->string('test_seriese_name', 100)->nullable();
            $table->tinyInteger('is_MtEt')->nullable();
            $table->string('title')->nullable();
            $table->string('category_name', 30)->nullable();
            $table->enum('paper_duration', ['5', '10', '15', '20', '25', '30', '35', '40', '45', '50', '55', '60'])->nullable();
            $table->integer('programe_id')->nullable();
            $table->integer('test_seriese_id')->nullable();
            $table->integer('ts_cat_assoc_id')->nullable();
            $table->tinyInteger('test_module_id')->nullable();
            $table->tinyInteger('totalquest')->nullable();
            $table->tinyInteger('active')->nullable();
            $table->string('collection_no', 50)->nullable();
            $table->string('type', 10)->nullable();
            $table->decimal('band_score', 3, 1)->nullable();
            $table->integer('paper_checked')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('VIEW_STUDENT_RESULTS');
    }
};
