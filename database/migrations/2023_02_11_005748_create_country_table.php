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
        Schema::connection('mysql_testprep')->create('country', function (Blueprint $table) {
            $table->integer('country_id');
            $table->string('iso', 20);
            $table->string('iso3', 10)->nullable();
            $table->string('name', 100);
            $table->string('phonecode', 5)->nullable();
            $table->string('flag')->nullable();
            $table->tinyInteger('phoneNo_limit')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('country');
    }
};
