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
        Schema::connection('mysql_testprep')->create('events', function (Blueprint $table) {
            $table->integer('id');
            $table->string('eventname', 200);
            $table->string('shortdesc');
            $table->string('eventdate', 100);
            $table->string('eventtime', 100);
            $table->string('banner', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('events');
    }
};
