<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MEligibilityCountries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_eligibility_countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nationality', 50)->nullable();
            $table->string('continent', 50)->nullable();
            $table->string('type_visa', 50)->nullable();
            $table->string('issed_from', 50)->nullable();

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
        Schema::dropIfExists('m_eligibility_countries');
    }
}
