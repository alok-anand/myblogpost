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
        Schema::connection('mysql_testprep')->create('test_module', function (Blueprint $table) {
            $table->integer('test_module_id');
            $table->integer('programe_id')->nullable();
            $table->string('test_module_name', 60)->nullable();
            $table->string('test_module_desc');
            $table->tinyInteger('active')->nullable();
            $table->tinyInteger('enqActive')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('test_module');
    }
};
