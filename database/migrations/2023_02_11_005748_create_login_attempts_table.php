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
        Schema::connection('mysql_testprep')->create('login_attempts', function (Blueprint $table) {
            $table->integer('l_id');
            $table->string('ip', 20)->nullable();
            $table->string('au_date', 20)->nullable();
            $table->time('lastlogin')->nullable();
            $table->bigInteger('login_attempts')->default(0);
            $table->string('username', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('login_attempts');
    }
};
