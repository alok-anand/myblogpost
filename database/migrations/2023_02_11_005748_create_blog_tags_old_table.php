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
        Schema::connection('mysql_testprep')->create('blog_tags_old', function (Blueprint $table) {
            $table->integer('tag_id');
            $table->string('tag_name', 100);
            $table->string('slug', 100);
            $table->longText('tag_desc');
            $table->string('link', 100);
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
        Schema::connection('mysql_testprep')->dropIfExists('blog_tags_old');
    }
};
