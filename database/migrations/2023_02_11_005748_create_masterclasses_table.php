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
        Schema::connection('mysql_testprep')->create('masterclasses', function (Blueprint $table) {
            $table->integer('class_id');
            $table->string('class_title', 100);
            $table->integer('category_id');
            $table->string('zoom_link', 100)->nullable();
            $table->dateTime('start_date');
            $table->time('start_time');
            $table->string('duration', 100)->nullable();
            $table->text('picture')->nullable();
            $table->tinyInteger('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('masterclasses');
    }
};
