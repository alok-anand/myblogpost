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
        Schema::connection('mysql_testprep')->create('branches', function (Blueprint $table) {
            $table->integer('center_id');
            $table->integer('etracs_branch_id');
            $table->string('center_name');
            $table->string('alias', 100);
            $table->string('contact');
            $table->string('email', 50)->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('address_line_1');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->tinyInteger('active')->nullable();
            $table->timestamp('created')->useCurrent();
            $table->text('seocontent');
            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->timestamp('modified')->useCurrentOnUpdate()->useCurrent();
            $table->tinyInteger('by_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('branches');
    }
};
