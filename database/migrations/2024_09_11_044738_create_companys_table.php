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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('nib')->nullable();
            $table->timestamp('tgl_pengajuan_nib')->nullable();
            $table->timestamp('tgl_terbit_nib')->nullable();
            $table->timestamp('tgl_perubahan_nib')->nullable();
            $table->string('oss_id')->nullable();
            $table->string('izin_id')->nullable();
            $table->string('kd_izin')->nullable();
            $table->string('kd_daerah')->nullable();
            $table->string('kewenangan')->nullable();
            $table->string('jenis_pelaku_usaha')->nullable();
            $table->string('no_npp')->nullable();
            $table->string('no_va')->nullable();
            $table->string('no_wlkp')->nullable();
            $table->string('flag_perusahaan')->nullable();
            $table->string('flag_ekspor')->nullable();
            $table->string('flag_impor')->nullable();
            $table->string('jenis_api')->nullable();
            $table->string('gabung_negara')->nullable();
            $table->string('negara_pma_dominan')->nullable();
            $table->string('total_pma')->nullable();
            $table->string('nilai_pma_dominan')->nullable();
            $table->string('nilai_pmdn')->nullable();
            $table->string('persen_pma')->nullable();
            $table->string('persen_pmdn')->nullable();
            $table->string('kd_kawasan')->nullable();
            $table->string('jenis_kawasan')->nullable();
            $table->string('versi_pia')->nullable();
            $table->string('jangka_waktu')->nullable();
            $table->string('status_badan_hukum')->nullable();
            $table->string('status_penanaman_modal')->nullable();
            $table->string('npwp_perseroan')->nullable();
            $table->tinyText('nama_perseroan')->nullable();
            $table->string('nama_singkatan')->nullable();
            $table->string('jenis_perseroan')->nullable();
            $table->string('status_perseroan')->nullable();
            $table->string('alamat_perseroan')->nullable();
            $table->string('rt_rw_perseroan')->nullable();
            $table->string('kelurahan_perseroan')->nullable();
            $table->string('perseroan_daerah_id')->nullable();
            $table->string('kode_pos_perseroan')->nullable();
            $table->string('nomor_telpon_perseroan')->nullable();
            $table->string('email_perusahaan')->nullable();
            $table->string('dalam_bentuk_uang')->nullable();
            $table->string('dalam_bentuk_lain')->nullable();
            $table->string('total_modal_dasar')->nullable();
            $table->string('total_modal_ditempatkan')->nullable();
            $table->text('pemegang_saham')->nullable();
            $table->text('penanggung_jwb')->nullable();
            $table->string('no_pengesahan')->nullable();
            $table->timestamp('tgl_pengesahan')->nullable();
            $table->string('no_akta_lama')->nullable();
            $table->timestamp('tgl_akta_lama')->nullable();
            $table->string('no_pengesahan_lama')->nullable();
            $table->timestamp('tgl_pengesahan_lama')->nullable();
            $table->text('legalitas')->nullable();
            $table->text('data_rptka')->nullable();
            $table->text('data_proyek')->nullable();
            $table->text('data_dni')->nullable();
            $table->text('data_checklist')->nullable();
            $table->string('jenis_id_user_proses')->nullable();
            $table->string('no_id_user_proses')->nullable();
            $table->string('nama_user_proses')->nullable();
            $table->string('email_user_proses')->nullable();
            $table->string('hp_user_proses')->nullable();
            $table->string('alamat_user_proses')->nullable();
            $table->string('jns_kelamin_user_proses')->nullable();
            $table->string('tempat_lahir_user_proses')->nullable();
            $table->string('tgl_lahir_user_proses')->nullable();
            $table->string('daerah_id_user_proses')->nullable();
            $table->string('rt_rw_user_proses')->nullable();
            $table->string('agama_user_proses')->nullable();
            $table->string('status_perkawinan_user_proses')->nullable();
            $table->string('pekerjaan_user_proses')->nullable();
            $table->string('status_nib')->nullable();
            $table->string('tipe_dokumen')->nullable();
            $table->string('tipe_user')->nullable();
            $table->string('password')->nullable();
            $table->string('secret_key')->nullable();
            $table->dateTime('time_secret_key')->nullable();
            $table->tinyInteger('is_verified')->nullable();
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
        Schema::dropIfExists('company');
    }
};
