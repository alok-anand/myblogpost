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
        Schema::connection('mysql_testprep')->create('blog_category', function (Blueprint $table) {
            $table->integer('cat_id');
            $table->string('cat_name', 100);
            $table->string('slug', 50);
            $table->longText('cat_desc');
            $table->integer('parent');
            $table->string('status', 100)->default('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('blog_category');
    }
};
