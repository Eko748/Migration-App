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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('kabupaten_kota_id')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('telepon')->nullable();
            $table->string('alamat_perusahaan')->nullable();
            $table->string('penanggung_jawab')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('no_npwp_perusahaan')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('perusahaan');
    }
};
