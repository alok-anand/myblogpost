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
        Schema::connection('mysql_testprep')->create('contact_form', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('course');
            $table->string('query');
            $table->dateTime('added')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('contact_form');
    }
};
