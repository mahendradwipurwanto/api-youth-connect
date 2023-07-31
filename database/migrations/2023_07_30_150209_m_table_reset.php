<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MTableReset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_table_reset', function (Blueprint $table) {
            $table->string('key', 100)->primary();
            $table->string('group', 100)->nullable();
            $table->string('table', 100)->nullable();
            $table->text('join')->nullable();
            $table->text('fk')->nullable();
            $table->text('condition')->nullable();

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
        Schema::dropIfExists('m_table_reset');
    }
}
