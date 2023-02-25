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
        Schema::connection('mysql_testprep')->create('student_results', function (Blueprint $table) {
            $table->integer('student_result_id');
            $table->integer('student_id');
            $table->integer('programe_id')->nullable();
            $table->tinyInteger('test_module_id')->nullable();
            $table->integer('test_seriese_id');
            $table->integer('ts_cat_assoc_id');
            $table->string('collection_no', 50);
            $table->integer('master_cat')->nullable();
            $table->string('type', 10)->nullable();
            $table->string('mockId', 10)->nullable();
            $table->integer('package_id')->nullable();
            $table->string('un_mock_id')->nullable();
            $table->integer('rank')->nullable();
            $table->integer('marks_secured')->nullable();
            $table->string('percentage', 6)->nullable();
            $table->decimal('band_score', 3, 1)->nullable();
            $table->decimal('predicted_band_score', 3, 1)->nullable();
            $table->integer('pro_id')->nullable();
            $table->string('time_taken', 10)->nullable();
            $table->integer('totalQuestion')->nullable();
            $table->integer('skipped')->nullable();
            $table->integer('attempted')->nullable();
            $table->integer('paper_checked')->nullable();
            $table->integer('assigned_to')->nullable();
            $table->integer('by_user')->nullable();
            $table->text('json')->nullable();
            $table->tinyInteger('is_uploaded')->default(0);
            $table->dateTime('uploaded_datetime')->nullable();
            $table->dateTime('created')->useCurrent();
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
        Schema::connection('mysql_testprep')->dropIfExists('student_results');
    }
};
