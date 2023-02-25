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
        Schema::connection('mysql_testprep')->create('static_pages-olddel', function (Blueprint $table) {
            $table->integer('static_page_id');
            $table->integer('pid');
            $table->integer('category_id');
            $table->integer('question_type_id')->nullable();
            $table->string('template_type', 50)->nullable();
            $table->text('packages')->nullable();
            $table->string('title');
            $table->integer('display_order')->nullable();
            $table->longText('contents');
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('audio')->nullable();
            $table->string('video')->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
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
        Schema::connection('mysql_testprep')->dropIfExists('static_pages-olddel');
    }
};
