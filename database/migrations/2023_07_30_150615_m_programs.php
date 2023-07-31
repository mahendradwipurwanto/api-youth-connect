<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MPrograms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('program_type_id');
            $table->unsignedBigInteger('program_branch_id');
            $table->string('title', 100)->nullable();
            $table->string('icon', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('logo_white', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('max_upload')->default(5)->nullable();
            $table->text('allowed_upload')->default('{"pdf":true,"jpg":true,"jpeg":true,"png":true,"docx":true,"pptx":true,"xlsx":true}')->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('tiktok', 100)->nullable();
            $table->string('twitter', 100)->nullable();
            $table->string('youtube', 100)->nullable();
            $table->string('facebook', 100)->nullable();

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
        Schema::dropIfExists('m_programs');
    }
}
