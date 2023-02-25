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
        Schema::connection('mysql_testprep')->create('articles_author', function (Blueprint $table) {
            $table->integer('id');
            $table->string('a_name', 50);
            $table->longText('a_description');
            $table->string('a_slug', 50);
            $table->string('a_gender', 20)->nullable();
            $table->timestamp('c_date')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('articles_author');
    }
};
