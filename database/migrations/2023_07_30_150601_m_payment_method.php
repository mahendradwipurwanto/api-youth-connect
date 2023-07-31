<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MPaymentMethod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_payment_method', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50)->nullable();
            $table->string('code', 50)->nullable();
            $table->string('img', 255)->nullable();
            $table->decimal('fee', 10, 2)->nullable();
            $table->integer('fee_type')->default(1)->comment('1: outside, 2: flat, 3: percentage');
            $table->text('details')->nullable();
            $table->text('tutorial')->nullable();
            $table->integer('status')->default(0)->comment('0: inactive, 1: active');

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
        Schema::dropIfExists('m_payment_method');
    }
}
