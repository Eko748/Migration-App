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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('nip')->nullable();
            $table->string('golongan')->nullable();
            $table->string('file_photo')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('pegawai');
    }
};
