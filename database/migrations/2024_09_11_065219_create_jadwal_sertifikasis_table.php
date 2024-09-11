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
        Schema::create('jadwal_sertifikasi', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pelaksanaan')->nullable();
            $table->string('lokasi')->nullable();
            $table->tinyInteger('jml_peserta')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_sertifikasi');
    }
};
