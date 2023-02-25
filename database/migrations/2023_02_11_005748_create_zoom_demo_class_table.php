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
        Schema::connection('mysql_testprep')->create('zoom_demo_class', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('email');
            $table->string('moblle');
            $table->string('program_type', 100);
            $table->string('demo_type');
            $table->text('meetingtime');
            $table->string('branch_name');
            $table->dateTime('added')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('zoom_demo_class');
    }
};
