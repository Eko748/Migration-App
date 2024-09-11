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
        Schema::create('user_message', function (Blueprint $table) {
            $table->id();
            $table->dateTime('time')->nullable();
            $table->unsignedBigInteger('sender_message_id')->nullable();
            $table->unsignedBigInteger('receiver_message_id')->nullable();
            $table->string('pesan')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_message');
    }
};
