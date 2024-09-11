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
        Schema::create('andalalin_recycle_bin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konsultan_id')->nullable();
            $table->foreign('konsultan_id')->references('id')->on('konsultan')->onDelete('cascade');
            $table->unsignedBigInteger('perusahaan_id')->nullable();
            $table->foreign('perusahaan_id')->references('id')->on('perusahaan')->onDelete('cascade');
            $table->unsignedBigInteger('proyek_id')->nullable();
            $table->foreign('proyek_id')->references('id')->on('proyek')->onDelete('cascade');
            $table->unsignedBigInteger('andalalin_id')->nullable();
            $table->foreign('andalalin_id')->references('id')->on('andalalin')->onDelete('cascade');
            $table->text('catatan_hapus')->nullable();
            $table->string('no_andalalin')->nullable();
            $table->string('no_sert_konsultan')->nullable();
            $table->string('nib')->nullable();
            $table->string('npwp_perseroan')->nullable();
            $table->string('nama_perseroan')->nullable();
            $table->string('nama_singkatan')->nullable();
            $table->string('alamat_perseroan')->nullable();
            $table->string('rt_rw_perseroan')->nullable();
            $table->string('kelurahan_perseroan')->nullable();
            $table->string('kode_pos_perseroan')->nullable();
            $table->string('nomor_telpon_perseroan')->nullable();
            $table->string('email_perusahaan')->nullable();
            $table->string('nama_pimpinan')->nullable();
            $table->string('nomor_telpon_pimpinan')->nullable();
            $table->string('posisi_pimpinan')->nullable();
            $table->string('klasifikasi')->nullable();
            $table->string('kategori')->nullable();
            $table->string('sub_kategori')->nullable();
            $table->string('kapasitas')->nullable();
            $table->string('nama_proyek')->nullable();
            $table->string('alamat_proyek')->nullable();
            $table->string('privinsi_proyek')->nullable();
            $table->string('wilayah')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('polygon')->nullable();
            $table->decimal('harga', 10,2)->nullable();
            $table->string('kode_biling')->nullable();
            $table->tinyInteger('pengajuan_kode_biling')->default(0)->nullable();
            $table->timestamp('pembayaran_kadaluarsa')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->string('status_pembayaran')->nullable();
            $table->string('no_final_surat')->nullable();
            $table->text('salinan_surat')->nullable();
            $table->string('status')->nullable();
            $table->text('catatan_pengajuan')->nullable();
            $table->string('verifikasi_pengajuan')->nullable();
            $table->string('proyek_regency')->nullable();
            $table->string('draft_upload')->nullable();
            $table->string('final_surat_file')->nullable();
            $table->string('draft_final_surat_file')->nullable();
            $table->text('area')->nullable();
            $table->timestamp('tanggal_pembayaran')->nullable();
            $table->string('no_surat_aplikasi')->nullable();
            $table->date('tanggal_surat_aplikasi')->nullable();
            $table->string('promissory_note_no')->nullable();
            $table->timestamp('promissory_note_date')->nullable();
            $table->string('verifikator_awal')->nullable();
            $table->string('verifikator_akhir')->nullable();
            $table->string('kasubdit')->nullable();
            $table->string('status_draft_sk')->nullable();
            $table->text('catatan_draft_sk')->nullable();
            $table->tinyInteger('signed_by')->nullable();
            $table->string('nama_penandatangan')->nullable();
            $table->string('nik_penandatangan')->nullable();
            $table->timestamp('tanggal_tandatangan')->nullable();
            $table->string('tgl_dikeluarkan_sk')->nullable();
            $table->text('oss')->nullable();
            $table->string('kode_pembayaran')->nullable();
            $table->string('kode_ntpn')->nullable();
            $table->string('kode_ntb')->nullable();
            $table->string('kode_bank')->nullable();
            $table->string('ch_pembayaran')->nullable();
            $table->text('respon_pembayaran')->nullable();
            $table->string('klasifikasi_jalan')->nullable();
            $table->string('klasifikasi_konsultan')->nullable();
            $table->string('p')->nullable();
            $table->string('x')->nullable();
            $table->string('y')->nullable();
            $table->string('h')->nullable();
            $table->string('w')->nullable();
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
        Schema::dropIfExists('andalalin_recycle_bin');
    }
};