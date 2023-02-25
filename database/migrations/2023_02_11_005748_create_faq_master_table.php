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
        Schema::connection('mysql_testprep')->create('faq_master', function (Blueprint $table) {
            $table->integer('id');
            $table->string('parent_subject', 100);
            $table->integer('test_module_id');
            $table->text('short_desc')->nullable();
            $table->string('icon')->nullable();
            $table->tinyInteger('active')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('faq_master');
    }
};
