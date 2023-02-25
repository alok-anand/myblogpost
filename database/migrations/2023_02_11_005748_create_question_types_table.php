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
        Schema::connection('mysql_testprep')->create('question_types', function (Blueprint $table) {
            $table->integer('question_type_id');
            $table->string('type_name', 50)->nullable();
            $table->integer('question_behavior_id');
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
        Schema::connection('mysql_testprep')->dropIfExists('question_types');
    }
};
