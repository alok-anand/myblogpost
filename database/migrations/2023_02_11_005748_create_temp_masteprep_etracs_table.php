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
        Schema::connection('mysql_testprep')->create('temp_masteprep_etracs', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('mprep_id');
            $table->integer('mobile');
            $table->integer('etracs_id');
            $table->integer('telephone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('temp_masteprep_etracs');
    }
};
