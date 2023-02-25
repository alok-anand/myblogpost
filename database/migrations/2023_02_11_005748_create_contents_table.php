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
        Schema::connection('mysql_testprep')->create('contents', function (Blueprint $table) {
            $table->integer('id');
            $table->string('title', 30)->nullable();
            $table->string('sub_title', 50)->nullable();
            $table->string('tag')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('by_user')->nullable();
            $table->tinyInteger('active')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('contents');
    }
};
