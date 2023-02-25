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
        Schema::connection('mysql_testprep')->create('menus', function (Blueprint $table) {
            $table->integer('id');
            $table->string('title', 60);
            $table->string('icon');
            $table->integer('parent')->nullable();
            $table->string('url');
            $table->string('roles');
            $table->integer('by_user');
            $table->integer('active');
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
        Schema::connection('mysql_testprep')->dropIfExists('menus');
    }
};
