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
        Schema::connection('mysql_testprep')->create('enquries', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('enquiry_type');
            $table->string('usercourse');
            $table->string('pgurl', 150);
            $table->string('calldate');
            $table->string('calltime');
            $table->string('status', 100);
            $table->dateTime('created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('enquries');
    }
};
