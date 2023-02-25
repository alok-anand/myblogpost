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
        Schema::connection('mysql_testprep')->create('advertisements', function (Blueprint $table) {
            $table->integer('id');
            $table->string('adv_title');
            $table->text('adv_content');
            $table->string('adv_image');
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
        Schema::connection('mysql_testprep')->dropIfExists('advertisements');
    }
};
