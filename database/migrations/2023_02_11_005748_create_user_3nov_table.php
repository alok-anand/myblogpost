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
        Schema::connection('mysql_testprep')->create('user-3nov', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('assigned_count')->default(0);
            $table->integer('time_zone')->nullable();
            $table->string('country_iso', 25)->nullable();
            $table->string('fname', 50);
            $table->string('lname', 50);
            $table->integer('gender')->nullable();
            $table->string('dob', 12)->nullable();
            $table->string('email', 60)->nullable();
            $table->string('mobile', 10)->nullable();
            $table->string('password');
            $table->string('token')->nullable();
            $table->string('residential_address');
            $table->integer('batch_id');
            $table->string('profile_pic')->nullable();
            $table->string('experience')->nullable();
            $table->string('designation')->nullable();
            $table->string('profile_info')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->integer('by_user')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('user-3nov');
    }
};
