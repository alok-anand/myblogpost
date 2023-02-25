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
        Schema::connection('mysql_testprep')->create('sections', function (Blueprint $table) {
            $table->integer('section_id');
            $table->integer('ts_cat_assoc_id');
            $table->string('section_heading');
            $table->text('section_desc');
            $table->text('section_para');
            $table->string('section_image')->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
            $table->integer('by_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('sections');
    }
};
