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
        Schema::create('chat', function (Blueprint $table) {
            $table->id();
            $table->string('pemohon_nama')->nullable();
            $table->string('pemohon_tipe')->nullable();
            $table->string('penilai_nama')->nullable();
            $table->string('penilai_tipe')->nullable();
            $table->tinyText('pesan')->nullable();
            $table->timestamp('stamp')->nullable();
            $table->string('status', 50)->nullable();
            $table->string('readby_pemohon')->nullable();
            $table->string('readby_penilai')->nullable();
            $table->string('pengirim')->nullable();
            $table->string('no_andalalin')->nullable();
            $table->string('deleted_by')->nullable();
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
        Schema::dropIfExists('chat');
    }
};
