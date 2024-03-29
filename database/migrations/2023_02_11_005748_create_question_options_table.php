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
        Schema::connection('mysql_testprep')->create('question_options', function (Blueprint $table) {
            $table->integer('question_option_id');
            $table->integer('question_id');
            $table->char('option_key', 1)->nullable();
            $table->string('option_value')->nullable();
            $table->timestamp('created')->useCurrent();
            $table->tinyInteger('by_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('question_options');
    }
};
