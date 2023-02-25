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
        Schema::connection('mysql_testprep')->create('pagemeta', function (Blueprint $table) {
            $table->integer('id');
            $table->string('slug', 150);
            $table->string('scriptname', 150);
            $table->string('atitle', 150);
            $table->string('faqtitle');
            $table->string('metatitle');
            $table->text('metadescription');
            $table->text('metakeywords');
            $table->integer('active');
            $table->dateTime('created')->useCurrent();
            $table->dateTime('modified')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('pagemeta');
    }
};
