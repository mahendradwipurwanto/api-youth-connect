<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_auth', function (Blueprint $table) {
            $table->uuid('user_id')->primary();
            $table->string('email')->unique();
            $table->string('password');
            // Add other necessary columns
            $table->timestamps();
        });

        Schema::create('tb_user', function (Blueprint $table) {
            $table->uuid('user_id');
            // Add other necessary columns
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('tb_auth')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_user');
        Schema::dropIfExists('tb_auth');
    }
}
