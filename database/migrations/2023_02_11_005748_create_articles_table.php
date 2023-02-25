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
        Schema::connection('mysql_testprep')->create('articles', function (Blueprint $table) {
            $table->integer('a_id');
            $table->integer('author_id')->nullable();
            $table->dateTime('adate')->nullable();
            $table->dateTime('udate')->nullable();
            $table->longText('atitle');
            $table->string('aslug', 200);
            $table->longText('asummery');
            $table->longText('adescr');
            $table->string('f_image', 100);
            $table->string('site_type', 100);
            $table->longText('acat');
            $table->longText('atag');
            $table->integer('cview');
            $table->integer('likes_count')->default(0);
            $table->integer('dislike_count')->default(0);
            $table->string('c_id', 100)->nullable();
            $table->text('meta_title');
            $table->text('meta_desc');
            $table->text('meta_keyword');
            $table->integer('status')->default(1);
            $table->integer('featured')->default(0);
            $table->string('guid');
            $table->string('faqtitle');
            $table->integer('trending_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('articles');
    }
};
