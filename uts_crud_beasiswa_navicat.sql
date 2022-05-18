/*
 Navicat Premium Data Transfer

 Source Server         : wsl-localhost-mariadb
 Source Server Type    : MySQL
 Source Server Version : 100334
 Source Host           : localhost:3306
 Source Schema         : uts_crud_beasiswa

 Target Server Type    : MySQL
 Target Server Version : 100334
 File Encoding         : 65001

 Date: 18/05/2022 19:40:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for beasiswa
-- ----------------------------
DROP TABLE IF EXISTS `beasiswa`;
CREATE TABLE `beasiswa`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `jenis_beasiswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `beasiswa_untuk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `informasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of beasiswa
-- ----------------------------
INSERT INTO `beasiswa` VALUES (1, 'Beasiswa Prestasi', 'beasiswa-prestasi', 'Calon Mahasiswa dan Mahasiswa Aktif', 'Beasiswa Prestasi Utomo adalah beasiswa bagi calon mahasiswa yang diberikan bagi lulusan SMA/Sederajat dari seluruh nusantara yang memiliki prestasi pada bidang akademik dan non-akademik (olahraga/seni) dalam tingkat nasional atau internasional.\r\n\r\nBesaran Beasiswa: 100%\r\n\r\nMasa Berlaku Beasiswa : Maksimal 8 Semester untuk Program Sarjana dan Maksimal 6 Semester untuk Program Diploma', NULL, '2022-05-18 07:31:16');
INSERT INTO `beasiswa` VALUES (2, 'Beasiswa Guru', 'beasiswa-guru', 'Calon Mahasiswa', 'Beasiswa untuk anak guru', NULL, NULL);
INSERT INTO `beasiswa` VALUES (3, 'Beasiswa Jalur Ujian', 'beasiswa-jalur-ujian', 'Calon Mahasiswa', 'Beasiswa yang didapat lewat ujian.', '2022-05-18 02:06:27', '2022-05-18 02:06:27');
INSERT INTO `beasiswa` VALUES (15, 'Beasiswa Akademik', 'beasiswa-akademik', 'Mahasiswa Aktif', 'Beasiswa yang diberikan Pemerintah melalui Direktorat Jenderal Pendidikan Tinggi Kementerian Pendidikan Nasional memberikan bantuan biaya pendidikan kepada mahasiswa yang mempunyai prestasi tinggi, baik di bidang akademik dan atau non akademik.\r\n\r\nPersyaratan :\r\n\r\n- Terdaftar sebagai mahasiswa aktif Universitas Utomo , Semester II – VIII ( D4 – S1 ), Semester II – IV (D3) dengan melampirkan foto copy Kartu Tanda Mahasiswa (KTM).\r\n- IPK ≥ 3.00 dan dibuktikan dengan melampirkan fotocopy transkrip nilai yang ditandatangani Ketua Program Studi.\r\n- Surat Permohonan Beasiswa PPA Ditujukan kepada WAREK IV\r\n- Formulir pendaftaran (Formulir Beasiswa)\r\n- Mendapat Rekomendasi dari pimpinan Fakultas/ Program Studi.\r\n- Surat Pernyataan tidak sedang menerima beasiswa dari sumber lain.\r\n- Fotocopy Kartu Tanda Mahasiswa (KTM)\r\n- Surat Keterangan Mahasiswa Aktif\r\n- Kartu Rencana Studi (KRS)\r\n- Fotocopy Kartu Tanda Penduduk (KTP)\r\n- Fotocopy Kartu Keluarga (KK)\r\n-Fotocopy Piagam atau Bukti Prestasi Lainya pada Bidang Ko – Kurilkuler dan / atau ekstra Kurikuler (Jika Memiliki)\r\n-Surat Pernyataan Akan Menggunakan Dana Beasiswa Untuk Penunjang Belajar\r\n-Surat Pernyataan Belum Menikah dan Belum Bekerja\r\n-Surat Keterangan Penghasilan Orangtua yang ditanda Tangani dan di stempel oleh Instansi\r\n- Bagi calon pelamar beasiswa agar memperhatikan persyaratan dan dokumen kelengkapan yang telah dipersyaratkan.', '2022-05-18 07:13:42', '2022-05-18 07:17:58');
INSERT INTO `beasiswa` VALUES (16, 'Beasiswa Internal', 'beasiswa-internal', 'Internal', 'Beasiswa internal adalah beasiswa yang diberikan kepada calon mahasiswa yang merupakan karyawan/staff/petinggi Universitas Utomo, ataupun anak kandung atau anak angkat dari karyawan/staff/petinggi Universitas Utomo.', '2022-05-18 07:28:31', '2022-05-18 07:28:31');

SET FOREIGN_KEY_CHECKS = 1;
