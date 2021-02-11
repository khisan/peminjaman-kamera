-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2021 pada 07.08
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama`, `password`, `level`) VALUES
(1, 'adimin', 'Administrator', 'adimin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peminjaman`
--

CREATE TABLE `data_peminjaman` (
  `id_peminjam` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kontak` varchar(14) NOT NULL,
  `no_identitas` varchar(14) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `total_biaya` int(60) NOT NULL,
  `id_kamera` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_peminjaman`
--

INSERT INTO `data_peminjaman` (`id_peminjam`, `nama`, `kontak`, `no_identitas`, `tgl_peminjaman`, `tgl_selesai`, `total_biaya`, `id_kamera`) VALUES
(114, 'idk6', '083833349186', '12345678901234', '2017-02-07', '2017-02-08', 100000, 0),
(115, 'idk7', '083833349186', '12345678901234', '2017-02-07', '2017-02-09', 150000, 0),
(116, 'idk8', '083833349186', '12345678901234', '2017-02-07', '2017-02-09', 150000, 0),
(117, 'idk9', '083833349186', '12345678901234', '2017-02-07', '2017-02-09', 210000, 0),
(118, 'idk10', '083833349186', '12345678901234', '2017-02-07', '2017-02-10', 200000, 0),
(119, 'idk11', '083833349186', '12345678901234', '2017-02-07', '2017-02-08', 140000, 0),
(121, 'idk13', '083833349186', '12345678901234', '2017-02-07', '2017-02-10', 280000, 0),
(122, 'brjo', '08565263562', '12345678901234', '2017-02-11', '2017-02-17', 490000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamera`
--

CREATE TABLE `kamera` (
  `id_kamera` int(10) NOT NULL,
  `merk_kamera` varchar(30) NOT NULL,
  `harga_kamera` int(60) NOT NULL,
  `stock_kamera` int(10) NOT NULL,
  `deskripsi_singkat_kamera` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tipe_kamera` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamera`
--

INSERT INTO `kamera` (`id_kamera`, `merk_kamera`, `harga_kamera`, `stock_kamera`, `deskripsi_singkat_kamera`, `gambar`, `tipe_kamera`) VALUES
(1, 'Nikon', 70000, 2, 'Merupakan pengembangan dari Nikon D80. Nikon D90 memiliki resolusi 12,3 megapixels dan mempunyai kemampuan merekam objek bergerak alias video. D90 mampu merekam sampai resolusi 1280x720 pixels pada 24 fps dengan audio mono. Mode video ini memanfaatkan full matrix metering agar exposure nya akurat. Hasil rekaman disimpan dalam bentuk kompresi motion JPEG AVI. Nikon D90 menggunakan CMOS format DX 12,3 megapixels dengan sistem self cleaning dan prosesor EXPEED mutakhir, lengkap dengan mode Live View Monitor LCD 3\" .Fitur menarik lain yang merupakan warisan dari DSLR Nikon yang lebih advanced adalah sistem Scene Recognition (yang populer di D3 dan D300). Sistem ini menggunakan sensor khusus 420-pixel RGB untuk menganalisa scene dan informasi warna dari subjek yang akan difoto lalu mengoptimalkan fokus, exposure dan white balance tepat sebelum tombol shutter ditekan. Nikon D90 memiliki kualitas gambar yang hampir sama dengan D300.', 'canon 1100d.png', 'D90'),
(4, 'Nikon', 50000, 0, 'Nikon D800 merupakan kamera format FX (full frame) terbaru dengan sensor CMOS 36 MP, tertinggi dalam sejarah kamera DSLR. Kamera ini sudah dilengkapi dengan modul AF 51 titik, fitur HDR dan kemampuan merekam video profesional termasuk uncompressed movie via HDMI. Kecepatan tembaknya adalah 4 fps dengan resolusi maksimal, cukup handal untuk memotret aksi yang bergerak cepat. Rentang ISO normal adalah 100 - 6400, meski bisa juga memilih ISO ekstra tinggi hingga setara dengan ISO 25600. Tersedia banyak pilihan untuk menyimpan file foto seperti JPG, TIFF, lossless compressed RAW dan RAW, apalagi dengan dua slot memori (CF dan SD) akan menambah fleksibilitas pengguna dalam mengatur file foto dan videonya. Jangan kompromi terhadap kualitas, untuk kebutuhan foto atau video penting anda, hubungi kami untuk menyewa Nikon D800 ini.', 'nikon d80.png', 'D80');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_biaya`
--

CREATE TABLE `master_biaya` (
  `biaya_perhari` int(50) NOT NULL,
  `denda` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kamera`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  MODIFY `id_peminjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT untuk tabel `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kamera` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
