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
        Schema::connection('mysql_testprep')->create('category_masters', function (Blueprint $table) {
            $table->integer('category_id');
            $table->tinyInteger('test_module_id')->default(1);
            $table->string('category_name', 30);
            $table->integer('programe_id');
            $table->text('packages')->nullable();
            $table->integer('display_order')->nullable();
            $table->string('icon')->nullable();
            $table->text('bootstrap_icon');
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
        Schema::connection('mysql_testprep')->dropIfExists('category_masters');
    }
};
