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
        Schema::create('file_ba_pembahasan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sk_rekomendasi_id')->nullable();
            $table->string('nama_file')->nullable();
            $table->date('tgl_ba_pembahasan')->nullable();
            $table->text('file_ba_pembahasan')->nullable();
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
        Schema::dropIfExists('file_ba_pembahasan');
    }
};