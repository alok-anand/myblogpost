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
        Schema::connection('mysql_testprep')->create('band_scores', function (Blueprint $table) {
            $table->integer('band_score_id');
            $table->integer('category_id');
            $table->decimal('band_score', 3, 1);
            $table->decimal('band_range_lower', 3, 1)->default(0);
            $table->decimal('band_range_upper', 3, 1)->default(0);
            $table->integer('pro_id')->nullable();
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
        Schema::connection('mysql_testprep')->dropIfExists('band_scores');
    }
};
