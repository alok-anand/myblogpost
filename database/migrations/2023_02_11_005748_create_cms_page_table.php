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
        Schema::connection('mysql_testprep')->create('cms_page', function (Blueprint $table) {
            $table->integer('id');
            $table->string('type', 100);
            $table->string('h1tag');
            $table->text('shortdescription');
            $table->text('content');
            $table->integer('displayorder');
            $table->integer('page_id');
            $table->integer('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('cms_page');
    }
};
