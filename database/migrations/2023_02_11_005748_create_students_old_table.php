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
        Schema::connection('mysql_testprep')->create('students-old', function (Blueprint $table) {
            $table->integer('id');
            $table->string('OTP', 4)->nullable();
            $table->integer('programe_id')->default(0);
            $table->integer('test_module_id')->nullable();
            $table->text('oauth_uid');
            $table->string('oauth_provider');
            $table->integer('time_zone')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->string('token');
            $table->longText('dtoken')->nullable();
            $table->string('dtype')->nullable();
            $table->string('country_code', 5)->nullable();
            $table->string('mobile', 10);
            $table->string('email', 60)->nullable();
            $table->string('fname', 25);
            $table->string('lname', 25);
            $table->string('username', 60)->nullable();
            $table->integer('gender')->nullable();
            $table->string('dob', 12);
            $table->string('profile_pic')->nullable()->default('https://api.masterprep.in/newV1/./uploads/profile_pic/default_profile_pic.png');
            $table->text('residential_address');
            $table->integer('country_id')->nullable();
            $table->tinyInteger('mobile_notification')->default(1);
            $table->tinyInteger('email_notification')->default(1);
            $table->decimal('Goal_l', 3, 1)->nullable();
            $table->decimal('Goal_r', 3, 1)->nullable();
            $table->decimal('Goal_w', 3, 1)->nullable();
            $table->decimal('Goal_s', 3, 1)->nullable();
            $table->decimal('Goal_avg', 3, 1)->nullable();
            $table->char('targateDate', 10)->nullable();
            $table->integer('by_user')->nullable();
            $table->integer('batch_id');
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
        Schema::connection('mysql_testprep')->dropIfExists('students-old');
    }
};
