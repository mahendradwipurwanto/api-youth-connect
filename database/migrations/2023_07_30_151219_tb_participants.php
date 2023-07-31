<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbParticipants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('referral_by');
            $table->integer('submission_step')->default(0)->nullable();
            $table->string('self_photo', 255)->nullable();
            $table->string('birthdate', 20)->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->text('address')->nullable();
            $table->string('city', 50)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('nationality', 50)->nullable();
            $table->string('nationality_custom', 100)->nullable();
            $table->string('occupation', 100)->nullable();
            $table->string('field_of_study', 100)->nullable();
            $table->string('institution_workplace', 100)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('emergency_contact', 100)->nullable();
            $table->string('contact_relation', 100)->nullable();
            $table->text('disease_history')->nullable();
            $table->string('tshirt_size', 10)->nullable();
            $table->text('experience')->nullable();
            $table->text('achievements')->nullable();
            $table->text('social_projects')->nullable();
            $table->text('talents')->nullable();
            $table->string('source', 100)->nullable();
            $table->string('twibbon_link', 100)->nullable();
            $table->string('share_proof_link', 100)->nullable();
            $table->boolean('terms_condition')->default(false)->nullable();
            $table->boolean('is_payment')->default(false)->nullable();
            $table->integer('status')->default(0)->nullable()->comment('0: unverified, 1: verified, 2: rejected');

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
        Schema::dropIfExists('tb_participants');
    }
}
