<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MCountries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_countries', function (Blueprint $table) {
            $table->unsignedBigInteger('num_code')->primary();
            $table->string('alpha_2_code', 100)->nullable();
            $table->string('alpha_3_code', 100)->nullable();
            $table->string('en_short_name', 100)->nullable();
            $table->string('nationality', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_countries');
    }
}
