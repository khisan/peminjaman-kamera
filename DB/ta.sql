-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1,	'adimin',	'adimin',	'admin');

DROP TABLE IF EXISTS `data_peminjaman`;
CREATE TABLE `data_peminjaman` (
  `id_peminjam` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `kontak` varchar(14) NOT NULL,
  `no_identitas` varchar(14) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `total_biaya` int(60) NOT NULL,
  `id_kamera` int(10) NOT NULL,
  PRIMARY KEY (`id_peminjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `data_peminjaman` (`id_peminjam`, `nama`, `kontak`, `no_identitas`, `tgl_peminjaman`, `tgl_selesai`, `total_biaya`, `id_kamera`) VALUES
(114,	'idk6',	'083833349186',	'12345678901234',	'2017-02-07',	'2017-02-08',	100000,	0),
(115,	'idk7',	'083833349186',	'12345678901234',	'2017-02-07',	'2017-02-09',	150000,	0),
(116,	'idk8',	'083833349186',	'12345678901234',	'2017-02-07',	'2017-02-09',	150000,	0),
(117,	'idk9',	'083833349186',	'12345678901234',	'2017-02-07',	'2017-02-09',	210000,	0),
(118,	'idk10',	'083833349186',	'12345678901234',	'2017-02-07',	'2017-02-10',	200000,	0),
(119,	'idk11',	'083833349186',	'12345678901234',	'2017-02-07',	'2017-02-08',	140000,	0),
(121,	'idk13',	'083833349186',	'12345678901234',	'2017-02-07',	'2017-02-10',	280000,	0),
(122,	'brjo',	'08565263562',	'12345678901234',	'2017-02-11',	'2017-02-17',	490000,	0);

DROP TABLE IF EXISTS `kamera`;
CREATE TABLE `kamera` (
  `id_kamera` int(10) NOT NULL AUTO_INCREMENT,
  `merk_kamera` varchar(30) NOT NULL,
  `harga_kamera` int(60) NOT NULL,
  `stock_kamera` int(10) NOT NULL,
  `deskripsi_singkat_kamera` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tipe_kamera` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kamera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kamera` (`id_kamera`, `merk_kamera`, `harga_kamera`, `stock_kamera`, `deskripsi_singkat_kamera`, `gambar`, `tipe_kamera`) VALUES
(1,	'Nikon',	70000,	2,	'Merupakan pengembangan dari Nikon D80. Nikon D90 memiliki resolusi 12,3 megapixels dan mempunyai kemampuan merekam objek bergerak alias video. D90 mampu merekam sampai resolusi 1280x720 pixels pada 24 fps dengan audio mono. Mode video ini memanfaatkan full matrix metering agar exposure nya akurat. Hasil rekaman disimpan dalam bentuk kompresi motion JPEG AVI. Nikon D90 menggunakan CMOS format DX 12,3 megapixels dengan sistem self cleaning dan prosesor EXPEED mutakhir, lengkap dengan mode Live View Monitor LCD 3\" .Fitur menarik lain yang merupakan warisan dari DSLR Nikon yang lebih advanced adalah sistem Scene Recognition (yang populer di D3 dan D300). Sistem ini menggunakan sensor khusus 420-pixel RGB untuk menganalisa scene dan informasi warna dari subjek yang akan difoto lalu mengoptimalkan fokus, exposure dan white balance tepat sebelum tombol shutter ditekan. Nikon D90 memiliki kualitas gambar yang hampir sama dengan D300.',	'canon 1100d.png',	'D90'),
(4,	'Nikon',	50000,	0,	'Nikon D800 merupakan kamera format FX (full frame) terbaru dengan sensor CMOS 36 MP, tertinggi dalam sejarah kamera DSLR. Kamera ini sudah dilengkapi dengan modul AF 51 titik, fitur HDR dan kemampuan merekam video profesional termasuk uncompressed movie via HDMI. Kecepatan tembaknya adalah 4 fps dengan resolusi maksimal, cukup handal untuk memotret aksi yang bergerak cepat. Rentang ISO normal adalah 100 - 6400, meski bisa juga memilih ISO ekstra tinggi hingga setara dengan ISO 25600. Tersedia banyak pilihan untuk menyimpan file foto seperti JPG, TIFF, lossless compressed RAW dan RAW, apalagi dengan dua slot memori (CF dan SD) akan menambah fleksibilitas pengguna dalam mengatur file foto dan videonya. Jangan kompromi terhadap kualitas, untuk kebutuhan foto atau video penting anda, hubungi kami untuk menyewa Nikon D800 ini.',	'nikon d80.png',	'D80');

DROP TABLE IF EXISTS `master_biaya`;
CREATE TABLE `master_biaya` (
  `biaya_perhari` int(50) NOT NULL,
  `denda` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-02-09 19:52:09
