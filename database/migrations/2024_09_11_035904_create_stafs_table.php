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
        Schema::create('staf', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
            $table->unsignedBigInteger('device_id')->nullable();
            $table->foreign('device_id')->references('id')->on('device')->onDelete('cascade');
            $table->string('username')->nullable();
            $table->string('nama')->nullable();
            $table->string('password')->nullable();
            $table->string('module')->nullable();
            $table->text('akses_provinsi')->nullable();
            $table->text('akses_kota')->nullable();
            $table->string('view_sk')->nullable();
            $table->string('view_detil')->nullable();
            $table->string('posisi')->nullable();
            $table->string('rank')->nullable();
            $table->string('nik')->nullable();
            $table->string('nip')->nullable();
            $table->string('email')->nullable();
            $table->string('secret_key')->nullable();
            $table->dateTime('time_secret_key')->nullable();
            $table->tinyInteger('is_verified')->nullable();
            $table->integer('percobaan_login')->nullable();
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
        Schema::dropIfExists('staf');
    }
};