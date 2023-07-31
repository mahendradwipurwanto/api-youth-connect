<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccessAuth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_auth', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->unsignedBigInteger('program_id')->default(0);
            $table->string('referral_code', 10)->nullable();
            $table->integer('role_id')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password', 255)->nullable();
            $table->boolean('online')->default(false);
            $table->integer('status')->default(0)->comment('0: unverified, 1: verified, 2: suspended');
            $table->string('device_id', 255)->nullable();

            $table->timestamp('log_time')->useCurrent();
            $table->timestamp('joined_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_auth');
    }
}
