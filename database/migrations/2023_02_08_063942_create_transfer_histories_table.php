<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_histories', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('vender_id')->nullable();
            $table->string('booking_id')->nullable();
            $table->string('type')->comment('DR,CR');
            $table->string('translation_id')->nullable();
            $table->string('amount');
            $table->string('payment_status')->nullable();
            $table->string('payment_type');
            $table->tinyInteger('status')->default(1)->comment('1:Active, 2:Deactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_histories');
    }
};
