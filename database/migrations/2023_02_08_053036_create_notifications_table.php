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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable()->comment('follow, invitation, inerview etc');
            $table->integer('ids_data')->nullable()->comment('follow id, invitation id, inerview id. you can set relationship in model about this');
            $table->integer('sender_userId')->nullable()->comment('notification sender user id');
            $table->integer('reciver_userId')->nullable()->comment('notification reciver user id');
            $table->text('message')->nullable();
            $table->tinyInteger('read')->default(0)->comment('0:unseen, 1:seen');
            $table->tinyInteger('status')->default(1)->comment('1:new invitation, 2:skip, 0:Delete');
            $table->timestamp('read_at')->nullable();
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
        Schema::dropIfExists('notifications');
    }
};
