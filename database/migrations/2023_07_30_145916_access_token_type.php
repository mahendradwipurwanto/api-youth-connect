<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccessTokenType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_token_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->text('description')->nullable();

            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns (timestamp data type)
            $table->softDeletes(); // Adds 'deleted_at' column (timestamp data type)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_token_type');
    }
}
