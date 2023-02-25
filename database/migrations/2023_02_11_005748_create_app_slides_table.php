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
        Schema::connection('mysql_testprep')->create('app_slides', function (Blueprint $table) {
            $table->integer('id');
            $table->text('slide_title');
            $table->text('slide_content');
            $table->string('slide_image');
            $table->tinyInteger('active');
            $table->integer('by_user');
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
        Schema::connection('mysql_testprep')->dropIfExists('app_slides');
    }
};
