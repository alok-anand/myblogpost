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
        Schema::connection('mysql_testprep')->create('student_package', function (Blueprint $table) {
            $table->integer('student_package_id');
            $table->integer('student_id');
            $table->integer('programe_id');
            $table->integer('test_module_id');
            $table->string('contact', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('package_id');
            $table->string('payment_id', 100)->nullable();
            $table->string('order_id', 50)->nullable();
            $table->integer('amount')->nullable();
            $table->string('currency', 5)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('captured', 5)->nullable();
            $table->string('method', 20)->nullable();
            $table->tinyInteger('active')->default(0);
            $table->decimal('paper_left', 4)->default(0);
            $table->string('created_at', 50)->nullable();
            $table->string('subscribed_on', 10)->nullable();
            $table->string('expired_on', 10)->nullable();
            $table->timestamp('requested_on')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_testprep')->dropIfExists('student_package');
    }
};
