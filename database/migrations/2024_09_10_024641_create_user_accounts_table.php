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
        Schema::create('user_account', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawai_id')->nullable();
            $table->unsignedBigInteger('bptd_id')->nullable();
            $table->unsignedBigInteger('level_id')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->integer('is_admin')->nullable();
            $table->string('last_login')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('remember_token')->nullable();
            $table->boolean('status')->nullable();
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
            $table->foreign('bptd_id')->references('id')->on('bptd')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('level')->onDelete('cascade');
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
        Schema::dropIfExists('user_account');
    }
};
