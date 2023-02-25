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
        Schema::connection('mysql_testprep')->create('test_seriese', function (Blueprint $table) {
            $table->integer('test_seriese_id');
            $table->integer('programe_id')->nullable();
            $table->tinyInteger('test_module_id')->default(1);
            $table->string('package_id');
            $table->tinyInteger('is_MtEt')->nullable();
            $table->string('test_seriese_name', 100)->default('Test');
            $table->integer('display_order')->default(0);
            $table->integer('minimum_score')->nullable();
            $table->enum('test_seriese_type', ['FREE', 'PAID']);
            $table->string('icon')->nullable();
            $table->text('test_seriese_desc');
            $table->tinyInteger('active')->nullable()->default(1);
            $table->integer('by_user')->nullable();
            $table->string('test_seriese_color', 25)->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('test_seriese');
    }
};
