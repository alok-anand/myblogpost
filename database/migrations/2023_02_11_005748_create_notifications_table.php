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
        Schema::connection('mysql_testprep')->create('notifications', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('notify_user_id');
            $table->integer('notification_masters_id');
            $table->integer('resource_id')->nullable();
            $table->integer('hw_assigned_id')->nullable();
            $table->tinyInteger('seen')->default(0);
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
        Schema::connection('mysql_testprep')->dropIfExists('notifications');
    }
};
