INSERT INTO siandalan_nasional.akses (name,category,created_at,updated_at,deleted_at,code) VALUES
	 ('Verifikasi Awal','andalalin','2021-11-23 10:45:16','2021-11-23 10:45:16',NULL,'initial_verification'),
	 ('Kelola Undangan','andalalin','2021-11-23 10:45:33','2021-11-23 10:45:33',NULL,'manage_invitation'),
	 ('Berita Acara Rapat','andalalin','2021-11-23 10:46:04','2021-11-23 10:46:04',NULL,'minutes_of_meeting'),
	 ('Verifikasi Final','andalalin','2021-11-23 10:46:16','2021-11-23 10:46:16',NULL,'final_verification'),
	 ('Persetujuan Rapat','andalalin','2021-11-23 10:46:24','2021-11-23 10:46:24',NULL,'meeting_approval'),
	 ('Tangan SK','andalalin','2021-11-23 10:46:34','2021-11-23 10:46:34',NULL,'sk_signature'),
	 ('Hari libur','master','2021-11-23 10:46:47','2021-11-23 10:46:47',NULL,'holiday'),
	 ('Kategori','master','2021-11-23 10:46:59','2021-11-23 10:46:59',NULL,'category'),
	 ('Bangkitan','master','2021-11-23 10:47:08','2021-11-23 10:47:08',NULL,'bangkitan'),
	 ('Dokumen','master','2021-11-23 10:47:19','2021-11-23 10:47:19',NULL,'document');
INSERT INTO siandalan_nasional.akses (name,category,created_at,updated_at,deleted_at,code) VALUES
	 ('Tim Penilai','master','2021-11-23 10:47:36','2021-11-23 10:47:36',NULL,'team'),
	 ('Pemohon','master','2021-11-23 10:47:46','2021-11-23 10:47:46',NULL,'applicant'),
	 ('User','master','2021-11-23 10:47:53','2021-11-23 10:47:53',NULL,'user'),
	 ('Berkas','master','2021-11-23 10:48:01','2021-11-23 10:48:01',NULL,'berkas'),
	 ('Ubah Jadwal','andalalin','2021-11-23 10:48:13','2021-11-23 10:48:13',NULL,'change_schedule'),
	 ('Setting','master','2021-11-23 10:48:21','2021-11-23 10:48:21',NULL,'setting'),
	 ('Pemohon SiPenyusun','penyusun','2021-11-23 10:48:41','2021-11-24 00:27:17',NULL,'sip_pemohon'),
	 ('Verifikator','penyusun','2021-11-23 10:48:55','2021-11-23 10:48:55',NULL,'sip_verifikasi'),
	 ('Tim Penilai','penyusun','2021-11-23 10:49:05','2021-11-23 10:49:05',NULL,'sip_tim_penilai'),
	 ('Penyusun Jadwal','penyusun','2021-11-23 10:49:14','2021-11-23 10:49:14',NULL,'sip_jadwal');
INSERT INTO siandalan_nasional.akses (name,category,created_at,updated_at,deleted_at,code) VALUES
	 ('Bendahara','penyusun','2021-11-23 10:49:21','2021-11-23 10:49:21',NULL,'sip_bendahara'),
	 ('Kasubdit','penyusun','2021-11-23 10:49:27','2021-11-23 10:49:27',NULL,'sip_kasubdit'),
	 ('Direktur','penyusun','2021-11-23 10:49:34','2021-11-23 10:49:34',NULL,'sip_direktur'),
	 ('Add','andalalin','2021-11-24 00:17:51','2021-11-24 00:17:51',NULL,'add'),
	 ('Edit','andalalin','2021-11-24 00:17:59','2021-11-24 00:17:59',NULL,'edit'),
	 ('Upload Dokumen','andalalin','2021-11-24 00:18:17','2021-11-24 00:18:17',NULL,'upload_docs'),
	 ('Generate Billing','andalalin','2021-11-24 00:19:01','2021-11-24 00:19:01',NULL,'generate_billing'),
	 ('Tambah Jadwal','andalalin','2021-11-24 00:19:34','2021-11-24 00:24:58',NULL,'set_schedule'),
	 ('Riwayat Pemohon','penyusun','2021-11-24 00:26:34','2021-11-24 00:26:34',NULL,'history_pemohon'),
	 ('Upload Dokumen SiPenyusun','penyusun','2021-11-24 00:26:53','2021-11-24 00:27:24',NULL,'sip_upload_docs');
INSERT INTO siandalan_nasional.akses (name,category,created_at,updated_at,deleted_at,code) VALUES
	 ('F A Q','master','2021-11-24 00:26:53','2021-11-24 00:26:53',NULL,'faq'),
	 ('guest','andalalin',NULL,'2023-06-20 04:22:41',NULL,'guest');
