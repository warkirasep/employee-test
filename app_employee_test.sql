/*
 Navicat Premium Data Transfer

 Source Server         : localhost-mysql
 Source Server Type    : MySQL
 Source Server Version : 50729
 Source Host           : localhost:3306
 Source Schema         : app_employee_test

 Target Server Type    : MySQL
 Target Server Version : 50729
 File Encoding         : 65001

 Date: 20/07/2020 14:24:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jawaban
-- ----------------------------
DROP TABLE IF EXISTS `jawaban`;
CREATE TABLE `jawaban` (
  `id_jawaban` int(5) NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(5) NOT NULL,
  `tgl_tes` date NOT NULL,
  `id_paket` int(255) NOT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jawaban
-- ----------------------------
BEGIN;
INSERT INTO `jawaban` VALUES (81, 12, '2020-07-20', 8);
INSERT INTO `jawaban` VALUES (82, 12, '2020-07-20', 7);
INSERT INTO `jawaban` VALUES (83, 12, '2020-07-20', 6);
COMMIT;

-- ----------------------------
-- Table structure for jawaban_detail
-- ----------------------------
DROP TABLE IF EXISTS `jawaban_detail`;
CREATE TABLE `jawaban_detail` (
  `id_jawaban_detail` int(5) NOT NULL AUTO_INCREMENT,
  `id_soal` int(5) NOT NULL,
  `jawaban` varchar(2) NOT NULL,
  `id_jawaban` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_jawaban_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=225 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jawaban_detail
-- ----------------------------
BEGIN;
INSERT INTO `jawaban_detail` VALUES (218, 13, 'A', 81);
INSERT INTO `jawaban_detail` VALUES (219, 14, 'C', 82);
INSERT INTO `jawaban_detail` VALUES (220, 9, 'C', 83);
INSERT INTO `jawaban_detail` VALUES (221, 16, 'C', 83);
INSERT INTO `jawaban_detail` VALUES (222, 11, 'A', 83);
INSERT INTO `jawaban_detail` VALUES (223, 15, 'A', 83);
INSERT INTO `jawaban_detail` VALUES (224, 7, 'B', 83);
COMMIT;

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nip` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` enum('Laki-Laki','Perempun') NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
BEGIN;
INSERT INTO `karyawan` VALUES (12, 18009827, 'Depi Aima', 'Perempun');
INSERT INTO `karyawan` VALUES (13, 1403160, 'Idris', 'Laki-Laki');
INSERT INTO `karyawan` VALUES (14, 19013551, 'Yohana', 'Perempun');
INSERT INTO `karyawan` VALUES (17, 2345678, 'ari', 'Laki-Laki');
COMMIT;

-- ----------------------------
-- Table structure for paket
-- ----------------------------
DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket` (
  `id_paket` int(4) NOT NULL AUTO_INCREMENT,
  `paket` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of paket
-- ----------------------------
BEGIN;
INSERT INTO `paket` VALUES (6, 'PENGETAHUAN DASAR SEPATU OLAHRAGA', 'Sepatu terdiri dari 4 bagian yaitu :Upper : Bagian atas sepatu.\r\nInsole : Bagian alas dibawah upper.\r\nMidsole : Bagian tengah diantara insole dan outsole.\r\nOutsole : Bagian paling bawah yang bersentuhan dengan lantai atau landasan.\r\n');
INSERT INTO `paket` VALUES (7, 'ANALISA KEBUTUHAN', 'Cara menganalisa kebutuhan customer adalah : 1. Bertanya 2. Mendengar\r\n');
INSERT INTO `paket` VALUES (8, 'ALASAN CUSTOMER MEMBELI', 'Tangible adalah dasar pertimbangan yang dapat terlihat atau terwujud, diantaranya: 1.Spesifikasi produk-feature/karakteristik produk secara fisik? 2. Kinerja-Apa yang bisa ia lakukan? 3. Penampilan-Bagaimana tampilan produk? \r\n\r\nIntangible adalah dasar pertimbangan yang tidak terlihat atau tidak berwujud tapi mempengaruhi secara emosional');
COMMIT;

-- ----------------------------
-- Table structure for soal
-- ----------------------------
DROP TABLE IF EXISTS `soal`;
CREATE TABLE `soal` (
  `id_soal` int(4) NOT NULL AUTO_INCREMENT,
  `paket` varchar(100) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `e` varchar(200) NOT NULL,
  `kunci` varchar(2) NOT NULL,
  `status` enum('tampil','tidak') NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of soal
-- ----------------------------
BEGIN;
INSERT INTO `soal` VALUES (7, '6', 'Bagian upper sepatu TIDAK dibuat dari bahan dibawah ini :', 'Nylon Mesh', 'Kulit', 'Kulit Sintetis', 'Gum Rubber', 'A & B Benar', 'D', 'tampil');
INSERT INTO `soal` VALUES (9, '6', 'Sepatu Olahraga terdiri dari 4 bagian, yaitu ?', 'Upper, Midsole, Air System, Outsole', 'Upper, Insole, Midosele, Outsole', 'Upper, Insole, Outsole, Heel', 'Upper, Insole, PU, Rubber', 'B & C', 'B', 'tampil');
INSERT INTO `soal` VALUES (11, '6', 'Bagian sepatu yang mampu menyerap dan meyebarkan tekanan adalah :', 'Upper', 'Insole dan Outsole', 'Midsole', 'Upper dan Outsole', 'Heel dan Insole', 'C', 'tampil');
INSERT INTO `soal` VALUES (13, '8', 'Dalam menganalisa kebutuhan customer ada beberapa teknik yang dapat kita gunakan, kecuali :', 'Mendengar', 'Mengetahui buying motive dari customer', 'Pendekatan', 'Bertanya', 'Hanya Diam', 'C', 'tampil');
INSERT INTO `soal` VALUES (14, '7', 'Kebutuhan Adalah :', 'Sesuatu yang harus dipenuhi untuk melengkapi kekurangan', 'Sesuatu yang sangat berbeda, itu adalah keinginan untuk sesuatu yang mungkin tidak diperlukan, tetapi orang itu masih menginginkannya', 'Sesuatu yang diperlukan untuk fisik atau mental kenyamanan seseorang', 'Sesuatu yang didasarkan dengna emosional ketika menyukai sesuatu hal', 'C & A jawaban benar', 'C', 'tampil');
INSERT INTO `soal` VALUES (15, '6', 'Insole adalah bagian sepatu yang terletak di :', 'Diantara Midsole dan Outole', 'Dibawah upper', 'Bawah sepatu bersentuhan dengan lantai', 'Daerah belakang tumit', 'C & A jawaban benar', 'B', 'tampil');
INSERT INTO `soal` VALUES (16, '6', 'Midsole terbuat dari bahan dibawah ini :', 'EVA, PU, PE', 'Nylon Canvas', 'Blown Rubber', 'Gum Rubber', 'C & A jawaban benar', 'A', 'tampil');
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nis` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` enum('admin','karyawan') NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (1, 12, 'admin', 'admin', 'admin', 'admin', 1);
INSERT INTO `user` VALUES (52, 19013551, 'Yohana', 'yohana', 'yohana', 'karyawan', 1);
INSERT INTO `user` VALUES (53, 18009827, 'Depi Aima', 'rohim', 'rohim', 'karyawan', 1);
INSERT INTO `user` VALUES (54, 2345678, 'ari', 'ari', 'ari', 'karyawan', 1);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
