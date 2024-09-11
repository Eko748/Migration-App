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
            $table->string('nib', 100)->nullable();
            $table->timestamp('tgl_pengajuan_nib')->nullable();
            $table->timestamp('tgl_terbit_nib')->nullable();
            $table->timestamp('tgl_perubahan_nib')->nullable();
            $table->string('oss_id', 100)->nullable();
            $table->string('izin_id', 100)->nullable();
            $table->string('kd_izin', 50)->nullable();
            $table->string('kd_daerah', 50)->nullable();
            $table->string('kewenangan', 50)->nullable();
            $table->string('jenis_pelaku_usaha', 50)->nullable();
            $table->string('no_npp', 100)->nullable();
            $table->string('no_va', 100)->nullable();
            $table->string('no_wlkp', 100)->nullable();
            $table->string('flag_perusahaan', 10)->nullable();
            $table->string('flag_ekspor', 10)->nullable();
            $table->string('flag_impor', 10)->nullable();
            $table->string('jenis_api', 50)->nullable();
            $table->string('gabung_negara', 50)->nullable();
            $table->string('negara_pma_dominan', 50)->nullable();
            $table->string('total_pma', 100)->nullable();
            $table->string('nilai_pma_dominan', 100)->nullable();
            $table->string('nilai_pmdn', 100)->nullable();
            $table->string('persen_pma', 10)->nullable();
            $table->string('persen_pmdn', 10)->nullable();
            $table->string('kd_kawasan', 50)->nullable();
            $table->string('jenis_kawasan', 50)->nullable();
            $table->string('versi_pia', 50)->nullable();
            $table->string('jangka_waktu', 50)->nullable();
            $table->string('status_badan_hukum', 50)->nullable();
            $table->string('status_penanaman_modal', 50)->nullable();
            $table->string('npwp_perseroan', 50)->nullable();
            $table->text('nama_perseroan')->nullable();
            $table->string('nama_singkatan', 100)->nullable();
            $table->string('jenis_perseroan', 100)->nullable();
            $table->string('status_perseroan', 100)->nullable();
            $table->string('alamat_perseroan', 255)->nullable();
            $table->string('rt_rw_perseroan', 50)->nullable();
            $table->string('kelurahan_perseroan', 100)->nullable();
            $table->string('perseroan_daerah_id', 100)->nullable();
            $table->string('kode_pos_perseroan', 20)->nullable();
            $table->string('nomor_telpon_perseroan', 20)->nullable();
            $table->string('email_perusahaan', 100)->nullable();
            $table->string('dalam_bentuk_uang', 100)->nullable();
            $table->string('dalam_bentuk_lain', 100)->nullable();
            $table->string('total_modal_dasar', 100)->nullable();
            $table->string('total_modal_ditempatkan', 100)->nullable();
            $table->text('pemegang_saham')->nullable();
            $table->text('penanggung_jwb')->nullable();
            $table->string('no_pengesahan', 100)->nullable();
            $table->timestamp('tgl_pengesahan')->nullable();
            $table->string('no_akta_lama', 100)->nullable();
            $table->timestamp('tgl_akta_lama')->nullable();
            $table->string('no_pengesahan_lama', 100)->nullable();
            $table->timestamp('tgl_pengesahan_lama')->nullable();
            $table->text('legalitas')->nullable();
            $table->text('data_rptka')->nullable();
            $table->text('data_proyek')->nullable();
            $table->text('data_dni')->nullable();
            $table->text('data_checklist')->nullable();
            $table->string('jenis_id_user_proses', 50)->nullable();
            $table->string('no_id_user_proses', 100)->nullable();
            $table->string('nama_user_proses', 255)->nullable();
            $table->string('email_user_proses', 100)->nullable();
            $table->string('hp_user_proses', 50)->nullable();
            $table->string('alamat_user_proses', 255)->nullable();
            $table->string('jns_kelamin_user_proses', 20)->nullable();
            $table->string('tempat_lahir_user_proses', 100)->nullable();
            $table->string('tgl_lahir_user_proses', 50)->nullable();
            $table->string('daerah_id_user_proses', 50)->nullable();
            $table->string('rt_rw_user_proses', 50)->nullable();
            $table->string('agama_user_proses', 50)->nullable();
            $table->string('status_perkawinan_user_proses', 50)->nullable();
            $table->string('pekerjaan_user_proses', 100)->nullable();
            $table->string('status_nib', 50)->nullable();
            $table->string('tipe_dokumen', 50)->nullable();
            $table->string('tipe_user', 50)->nullable();
            $table->string('password')->nullable();
            $table->string('secret_key', 50)->nullable();
            $table->dateTime('time_secret_key')->nullable();
            $table->tinyInteger('is_verified')->nullable();
            $table->string('created_by', 50)->nullable();
            $table->string('updated_by', 50)->nullable();
            $table->string('deleted_by', 50)->nullable();
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
