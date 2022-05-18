-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2022 at 07:39 PM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_crud_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id` int(11) NOT NULL,
  `jenis_beasiswa` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `beasiswa_untuk` varchar(255) NOT NULL,
  `informasi` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `jenis_beasiswa`, `slug`, `beasiswa_untuk`, `informasi`, `created_at`, `updated_at`) VALUES
(1, 'Beasiswa Prestasi', 'beasiswa-prestasi', 'Calon Mahasiswa dan Mahasiswa Aktif', 'Beasiswa Prestasi Utomo adalah beasiswa bagi calon mahasiswa yang diberikan bagi lulusan SMA/Sederajat dari seluruh nusantara yang memiliki prestasi pada bidang akademik dan non-akademik (olahraga/seni) dalam tingkat nasional atau internasional.\r\n\r\nBesaran Beasiswa: 100%\r\n\r\nMasa Berlaku Beasiswa : Maksimal 8 Semester untuk Program Sarjana dan Maksimal 6 Semester untuk Program Diploma', NULL, '2022-05-18 07:31:16'),
(2, 'Beasiswa Guru', 'beasiswa-guru', 'Calon Mahasiswa', 'Beasiswa untuk anak guru', NULL, NULL),
(3, 'Beasiswa Jalur Ujian', 'beasiswa-jalur-ujian', 'Calon Mahasiswa', 'Beasiswa yang didapat lewat ujian.', '2022-05-18 02:06:27', '2022-05-18 02:06:27'),
(15, 'Beasiswa Akademik', 'beasiswa-akademik', 'Mahasiswa Aktif', 'Beasiswa yang diberikan Pemerintah melalui Direktorat Jenderal Pendidikan Tinggi Kementerian Pendidikan Nasional memberikan bantuan biaya pendidikan kepada mahasiswa yang mempunyai prestasi tinggi, baik di bidang akademik dan atau non akademik.\r\n\r\nPersyaratan :\r\n\r\n- Terdaftar sebagai mahasiswa aktif Universitas Utomo , Semester II – VIII ( D4 – S1 ), Semester II – IV (D3) dengan melampirkan foto copy Kartu Tanda Mahasiswa (KTM).\r\n- IPK ≥ 3.00 dan dibuktikan dengan melampirkan fotocopy transkrip nilai yang ditandatangani Ketua Program Studi.\r\n- Surat Permohonan Beasiswa PPA Ditujukan kepada WAREK IV\r\n- Formulir pendaftaran (Formulir Beasiswa)\r\n- Mendapat Rekomendasi dari pimpinan Fakultas/ Program Studi.\r\n- Surat Pernyataan tidak sedang menerima beasiswa dari sumber lain.\r\n- Fotocopy Kartu Tanda Mahasiswa (KTM)\r\n- Surat Keterangan Mahasiswa Aktif\r\n- Kartu Rencana Studi (KRS)\r\n- Fotocopy Kartu Tanda Penduduk (KTP)\r\n- Fotocopy Kartu Keluarga (KK)\r\n-Fotocopy Piagam atau Bukti Prestasi Lainya pada Bidang Ko – Kurilkuler dan / atau ekstra Kurikuler (Jika Memiliki)\r\n-Surat Pernyataan Akan Menggunakan Dana Beasiswa Untuk Penunjang Belajar\r\n-Surat Pernyataan Belum Menikah dan Belum Bekerja\r\n-Surat Keterangan Penghasilan Orangtua yang ditanda Tangani dan di stempel oleh Instansi\r\n- Bagi calon pelamar beasiswa agar memperhatikan persyaratan dan dokumen kelengkapan yang telah dipersyaratkan.', '2022-05-18 07:13:42', '2022-05-18 07:17:58'),
(16, 'Beasiswa Internal', 'beasiswa-internal', 'Internal', 'Beasiswa internal adalah beasiswa yang diberikan kepada calon mahasiswa yang merupakan karyawan/staff/petinggi Universitas Utomo, ataupun anak kandung atau anak angkat dari karyawan/staff/petinggi Universitas Utomo.', '2022-05-18 07:28:31', '2022-05-18 07:28:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
