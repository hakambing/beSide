<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chats', function (Blueprint $table) {
            Schema::dropIfExists('chats');
            $table->id();
            $table->timestamps();
            $table->boolean('has_unseen_messages');
            $table->unsignedBigInteger('user_1_id');
            $table->foreign('user_1_id')->references('id')->on('users');
            $table->unsignedBigInteger('user_2_id');
            $table->foreign('user_2_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
