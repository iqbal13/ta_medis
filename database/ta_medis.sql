-- Adminer 4.3.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `ta_medis`;
CREATE DATABASE `ta_medis` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ta_medis`;

DROP TABLE IF EXISTS `dokter`;
CREATE TABLE `dokter` (
  `id_dokter` int(10) NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(100) DEFAULT NULL,
  `kode_poli` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_dokter`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `kode_poli`) VALUES
(1,	'Maulana',	'A1'),
(2,	'Muhammad',	'A2'),
(3,	'Iqbal',	'A3');

DROP TABLE IF EXISTS `jadwal_praktik`;
CREATE TABLE `jadwal_praktik` (
  `id_jadwal` int(10) NOT NULL AUTO_INCREMENT,
  `id_dokter` varchar(10) DEFAULT NULL,
  `id_waktu` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `jadwal_praktik` (`id_jadwal`, `id_dokter`, `id_waktu`) VALUES
(1,	'1',	'1'),
(2,	'1',	'2'),
(3,	'2',	'1'),
(4,	'2',	'2');

DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` int(11) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `paket` (`id_paket`, `nama_paket`, `keterangan`) VALUES
(0,	-1,	'A	 Gedung dan Sarana (Subsidi Rp. 1 jt.)\r\nB	 Buffe Utama 500 Porsi Menu A:\r\nNasi Putih\r\nNasi Goreng Spesial\r\nAneka Soup (pilihan):\r\nSoup Kimlo/ Sop Ayam Bakso/ Sop Daging Bakso/ Sop Daging Komplit/ Sop Jagung Manis/ Sop Kombinasi/ Sop Makaroni.\r\nDaging (pilihan):\r\nBeef Steak Bola-bola/Teriyaki/ Daging Balado/ Daging Bumbu Kari/ Daging Bumbu Lapis/ Gulai Daging/ Krengseng Daging/ Rendang/ Rolade/ Sambal Goreng Daging Printil/ Sapi Lada Hitam/ Semur.\r\nAyam (pilihan):\r\nAyam Bakar/ Ayam Bumbu Bali/ Ayam Cah Sosis/ Ayam Kari/ Ayam Kecap Mentega/ Ayam Masak Cabe Hijo/ Ayam Rica-rica/ Ayam Suwir/ Ayam Woku/ Chiken Katsu/ Chiken Teriyaki/ Gulai Ayam/ Rollade Ayam/ Sate Ayam.\r\nMasakan (pilihan):\r\nAsinan/ Slada Bangkok/ Gado-gado Betawi.\r\nAneka Pudding.\r\nAneka Buah Segar\r\nAneka Softdrink\r\nAneka Snack\r\nKrupuk Udang/ Emping.\r\nAir Mineral\r\nC	 Menu Gubug:\r\nKambing Guling 1 Ekor\r\nBakso 150 Porsi.\r\nSomay 150 porsi.\r\nEs Puter 1 Galon (200 cup)\r\nD	 Pelaminan:\r\nPelaminan Minimalis Modern Up to 8 Meters).\r\nKursi Pengantin 1 Set.\r\nMini Garden + Bunga Segar.\r\nStanding Flower 3 bh dipelaminan.\r\nLinghting Ke Pelaminan.\r\nE	 Dekorasi:\r\nDekorasi Buffe Prasmanan 1 set.\r\nBunga di Buffe Prasmanan 3 bh.\r\nPagar / Pembatas Buffe VIP.\r\nPargola di Buffe VIP.\r\nDekorasi Buffe VIP\r\nBunga di Buffe VIP 1 bh.\r\nRound Table di Buffe VIP 3 Set + Bunga Kecil.\r\nIce Carving 1 pasang / Inisial Bunga.\r\nIce Tray 1 bh (optional).\r\nDekorasi Meja Dissert.\r\nBunga di Meja Dissert.\r\nJanur / Umbul-umbul 1 pasang + Nama.\r\nStanding Flower di jalan.\r\nKarpet Merah di Jalan.\r\nRangkaian Bunga di Meja Terima Tamu 2 bh.\r\nBackdrop Terima Tamu 2 bh.\r\nPargola/ Wellcome Gazebo + Bunga Jatuh di Pintu Masuk.\r\nF	 Tata Rias & Busana:\r\nTata Rias & Busana Pengantin (Akad dan Resepsi).\r\nTata Rias & Busana Orang Tua 2 pasang.\r\nTata Rias & Busana Penerima Tamu 4 Orang\r\nTata Rias & Busana Pager Ayu 6 Orang\r\nTata Rias & Busana Pager Bagus 6 Orang\r\nG	 Dokumentasi:\r\nAlbum Photo Kolase Exclusive 1 Album.\r\nMaster Foto Transfer DVD.\r\nVideo Shooting Transfer DVD Animasi.\r\nMini Studio.\r\nH	  Cucuk Lampah / Mang Lengser.\r\nI	 MC Untuk Resepsi Pernikahan\r\nJ	 Organ Tunggal + Singer.\r\nK	 Peralatan:\r\nTempat Angpaw 2 bh (dipinjamkan)\r\nBuku Tamu 2 bh + Spidol\r\nStanding Frame 2 bh dipinjamkan.\r\nL	 Bonus:\r\nBuffe 50 porsi\r\nFoto Ukuran 17 R + Bingkai Cantik 1 bh.');

DROP TABLE IF EXISTS `pasien`;
CREATE TABLE `pasien` (
  `id_pasien` int(5) NOT NULL AUTO_INCREMENT,
  `nomor_rekam` varchar(50) DEFAULT NULL,
  `nama_pasien` varchar(100) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `alamat` text,
  `nomor_kontak` varchar(20) DEFAULT NULL,
  `umur` varchar(10) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `pasien` (`id_pasien`, `nomor_rekam`, `nama_pasien`, `ttl`, `alamat`, `nomor_kontak`, `umur`, `jenis_kelamin`, `status`) VALUES
(1,	'a13',	'aaaaaaa',	NULL,	'dggff',	NULL,	NULL,	NULL,	NULL),
(2,	'RM170817-001',	'Maulana Muhammad Iqbal',	NULL,	'Ciledug',	'087887142364',	NULL,	NULL,	1),
(3,	'A13-76',	'ANDAIKAN KAU DATANG KEMBALI',	'2016-01-01',	'JAWABAN APA YANG KAN KUBERI',	'087887142365',	NULL,	NULL,	NULL),
(4,	'A13-76',	'ANDAIKAN KAU DATANG KEMBALI',	'2016-01-01',	'JAWABAN APA YANG KAN KUBERI',	'087887142365',	NULL,	NULL,	NULL),
(5,	'A13-43',	'ada',	'2017-01-01',	'ada',	'081252525252',	NULL,	NULL,	NULL),
(6,	'A13-96',	'ada',	'2017-01-01',	'ada',	'1231313131',	'0',	NULL,	NULL);

DROP TABLE IF EXISTS `poli`;
CREATE TABLE `poli` (
  `id_poli` int(5) NOT NULL AUTO_INCREMENT,
  `kode_poli` varchar(20) DEFAULT NULL,
  `nama_poli` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_poli`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `poli` (`id_poli`, `kode_poli`, `nama_poli`) VALUES
(1,	'A1',	'Poli Pantai'),
(2,	'A2',	'Poli Polio'),
(3,	'A3',	'Poli Polio');

DROP TABLE IF EXISTS `registrasi_rawatjalan`;
CREATE TABLE `registrasi_rawatjalan` (
  `id_reg` int(10) NOT NULL AUTO_INCREMENT,
  `nomor_registrasi` varchar(50) NOT NULL,
  `nomor_rekam_medis` varchar(30) DEFAULT NULL,
  `tanggal_kunjungan` date DEFAULT NULL,
  `id_dokter` int(10) DEFAULT NULL,
  `id_waktu` int(10) DEFAULT NULL,
  `waktu_registrasi` datetime DEFAULT NULL,
  `cara_bayar` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_reg`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `registrasi_rawatjalan` (`id_reg`, `nomor_registrasi`, `nomor_rekam_medis`, `tanggal_kunjungan`, `id_dokter`, `id_waktu`, `waktu_registrasi`, `cara_bayar`) VALUES
(1,	'RJ20170819-001',	'A13-76',	'2017-12-12',	1,	1,	'2017-08-19 02:13:32',	NULL),
(2,	'RJ20170819-2',	'A13-76',	'2017-12-12',	1,	1,	'2017-08-19 02:15:23',	NULL),
(3,	'RJ20170819-3',	'A13-43',	'2017-12-12',	1,	1,	'2017-08-19 02:21:33',	NULL),
(4,	'RJ20170819-4',	'A13-76',	'2018-01-01',	2,	2,	'2017-08-19 02:25:08',	NULL),
(5,	'RJ20170819-5',	'A13-76',	'2017-11-11',	1,	2,	'2017-08-19 04:36:17',	NULL),
(6,	'RJ20170819-6',	'A13-76',	'0000-00-00',	0,	0,	'2017-08-19 04:43:32',	NULL),
(7,	'RJ20170819-7',	'A13-96',	'2017-12-01',	1,	1,	'2017-08-19 04:50:25',	NULL),
(8,	'RJ20170819-8',	'',	'0000-00-00',	0,	0,	'2017-08-19 04:54:44',	'jkn');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_users` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id_users`, `username`, `password`, `nama_user`) VALUES
(1,	'admin',	'21232f297a57a5a743894a0e4a801fc3',	'Administrator');

DROP TABLE IF EXISTS `waktu_praktik`;
CREATE TABLE `waktu_praktik` (
  `id_waktu` int(10) NOT NULL AUTO_INCREMENT,
  `waktu_praktik` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_waktu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `waktu_praktik` (`id_waktu`, `waktu_praktik`) VALUES
(1,	'09.00 - 12.00'),
(2,	'13.00-15.00');

-- 2017-08-19 02:57:44
