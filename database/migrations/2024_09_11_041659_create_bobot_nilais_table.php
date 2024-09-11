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
        Schema::create('bobot_nilai', function (Blueprint $table) {
            $table->id();
            $table->decimal('bobot_penilaian')->nullable();
            $table->decimal('bobot_pengalaman')->nullable();
            $table->decimal('bobot_perilaku')->nullable();
            $table->decimal('nilai_lulus')->nullable();
            $table->char('is_aktif', 1)->nullable();
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
        Schema::dropIfExists('bobot_nilai');
    }
};
