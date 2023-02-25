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
        Schema::connection('mysql_testprep')->create('faculties', function (Blueprint $table) {
            $table->integer('faculty_id');
            $table->string('faculty_name');
            $table->string('status', 50);
            $table->string('profile_pic');
            $table->string('token');
            $table->string('username');
            $table->text('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('faculties');
    }
};
