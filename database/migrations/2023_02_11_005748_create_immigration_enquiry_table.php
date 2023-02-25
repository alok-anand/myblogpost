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
        Schema::connection('mysql_testprep')->create('immigration_enquiry', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 100);
            $table->string('email');
            $table->string('phone', 20);
            $table->string('city', 50);
            $table->integer('age');
            $table->string('exp', 200);
            $table->string('qualification', 200);
            $table->string('jobtitle', 200);
            $table->string('pageurl');
            $table->dateTime('created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('immigration_enquiry');
    }
};
