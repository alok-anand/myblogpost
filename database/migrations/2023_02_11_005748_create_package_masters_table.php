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
        Schema::connection('mysql_testprep')->create('package_masters', function (Blueprint $table) {
            $table->integer('package_id');
            $table->string('package_name', 60);
            $table->string('package_color', 10)->nullable();
            $table->string('icon')->nullable();
            $table->integer('star_count')->nullable();
            $table->text('package_desc');
            $table->integer('no_of_mocktest');
            $table->integer('no_of_practest');
            $table->double('amount', 10, 2);
            $table->string('duration', 5);
            $table->integer('programe_id')->nullable();
            $table->integer('test_paper_limit')->nullable();
            $table->integer('test_module_id')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('package_masters');
    }
};
