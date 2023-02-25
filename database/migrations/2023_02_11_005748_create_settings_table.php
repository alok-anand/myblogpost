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
        Schema::connection('mysql_testprep')->create('settings', function (Blueprint $table) {
            $table->integer('s_id');
            $table->string('e_from', 100)->nullable();
            $table->string('ename', 100)->nullable();
            $table->string('admin_email', 100)->nullable();
            $table->longText('site_name');
            $table->string('currency', 10)->default('Rs.');
            $table->integer('c_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('settings');
    }
};
