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
        Schema::connection('mysql_testprep')->create('real_test_dates', function (Blueprint $table) {
            $table->integer('realTestDatesId');
            $table->string('testDate', 10)->nullable();
            $table->string('test_url')->nullable();
            $table->integer('programe_id')->nullable();
            $table->integer('test_module_id');
            $table->integer('country_id')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
            $table->tinyInteger('by_user')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('real_test_dates');
    }
};
