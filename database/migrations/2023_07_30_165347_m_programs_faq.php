<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MProgramsFaq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_programs_faq', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('faq_categories_id');
            $table->string('faq', 100)->nullable();
            $table->text('content')->nullable();
            $table->integer('order')->default(0)->nullable();

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
        Schema::dropIfExists('m_programs_faq');
    }
}
