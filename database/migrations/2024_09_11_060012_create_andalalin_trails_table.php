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
        Schema::create('andalalin_trail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('andalalin_id')->nullable();
            $table->foreign('andalalin_id')->references('id')->on('andalalin')->onDelete('cascade');
            $table->string('login')->nullable();
            $table->string('nama')->nullable();
            $table->string('status')->nullable();
            $table->text('detail')->nullable();
            $table->timestamp('timestamp')->nullable();;
            $table->string('updated_by')->nullable();
            $table->string('created_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('andalalin_trail');
    }
};
