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
        Schema::create('sip_flow', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peserta_permohonan_id')->nullable();
            $table->string('status')->nullable();
            $table->string('pesan')->nullable();
            $table->string('aksi_oleh')->nullable();
            $table->timestamp('aksi_pada')->nullable();
            $table->string('tipe_user')->nullable();
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
        Schema::dropIfExists('sip_flow');
    }
};