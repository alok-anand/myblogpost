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
        Schema::connection('mysql_testprep')->create('tips_and_tricks', function (Blueprint $table) {
            $table->integer('tips_tricks_id');
            $table->integer('pid')->nullable();
            $table->string('question')->nullable();
            $table->text('answer');
            $table->integer('display_order')->nullable();
            $table->tinyInteger('active')->default(1);
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
        Schema::connection('mysql_testprep')->dropIfExists('tips_and_tricks');
    }
};
