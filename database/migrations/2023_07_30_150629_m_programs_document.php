<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MProgramsDocument extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_programs_document', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('program_id');
            $table->string('title', 100)->nullable();
            $table->string('cover', 255)->nullable();
            $table->boolean('is_source')->default(false);
            $table->text('source')->nullable();
            $table->text('btn_style')->nullable();
            $table->string('btn_text', 100)->nullable();
            $table->boolean('is_second_source')->default(false);
            $table->text('second_source')->nullable();
            $table->text('btn_second_style')->nullable();
            $table->string('btn_second_text', 100)->nullable();
            $table->boolean('is_upload')->default(false);
            $table->boolean('is_upload_allowed')->default(false);

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
        Schema::dropIfExists('m_programs_document');
    }
}
