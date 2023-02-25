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
        Schema::connection('mysql_testprep')->create('vocabulary_masters', function (Blueprint $table) {
            $table->integer('id');
            $table->string('word', 100);
            $table->string('meaning');
            $table->integer('band')->nullable();
            $table->string('sentense');
            $table->string('synonym');
            $table->string('antonyms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('vocabulary_masters');
    }
};
