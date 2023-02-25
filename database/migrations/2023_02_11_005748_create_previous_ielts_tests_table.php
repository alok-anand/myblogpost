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
        Schema::connection('mysql_testprep')->create('previous_ielts_tests', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('country_id');
            $table->integer('module_id');
            $table->integer('category_id');
            $table->longText('content');
            $table->integer('active');
            $table->integer('byuser');
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
        Schema::connection('mysql_testprep')->dropIfExists('previous_ielts_tests');
    }
};
