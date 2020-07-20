-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 02:56 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE IF NOT EXISTS `jawaban` (
`id_jawaban` int(5) NOT NULL,
  `id_karyawan` int(5) NOT NULL,
  `tgl_tes` date NOT NULL,
  `benar` int(3) NOT NULL DEFAULT '0',
  `salah` int(3) NOT NULL DEFAULT '0',
  `total_nilai` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_karyawan`, `tgl_tes`, `benar`, `salah`, `total_nilai`) VALUES
(27, 15, '2020-07-19', 0, 5, 5),
(28, 15, '2020-07-19', 0, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_detail`
--

CREATE TABLE IF NOT EXISTS `jawaban_detail` (
`id_jawaban_detail` int(5) NOT NULL,
  `id_jawaban` int(5) NOT NULL,
  `id_soal` int(5) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `jawaban` varchar(2) NOT NULL,
  `kunci` varchar(2) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_detail`
--

INSERT INTO `jawaban_detail` (`id_jawaban_detail`, `id_jawaban`, `id_soal`, `id_paket`, `jawaban`, `kunci`, `nilai`) VALUES
(78, 8, 13, 8, 'C', 'C', 20),
(79, 6, 11, 6, 'C', 'C', 20),
(80, 6, 7, 6, 'C', 'D', 0),
(81, 6, 16, 6, 'B', 'A', 0),
(82, 6, 15, 6, 'B', 'B', 20),
(83, 6, 9, 6, 'B', 'B', 20),
(84, 6, 9, 6, 'C', 'B', 0),
(85, 6, 16, 6, 'C', 'A', 0),
(86, 6, 11, 6, 'C', 'C', 20),
(87, 6, 7, 6, 'A', 'D', 0),
(88, 6, 15, 6, 'A', 'B', 0);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
`id_karyawan` int(11) NOT NULL,
  `nip` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` enum('Laki-Laki','Perempun') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nip`, `nama`, `jk`) VALUES
(12, 18009827, 'Depi Aima', 'Perempun'),
(13, 1403160, 'Idris', 'Laki-Laki'),
(14, 19013551, 'Yohana', 'Perempun'),
(17, 2345678, 'ari', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
`id_paket` int(4) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `paket`, `deskripsi`) VALUES
(6, 'PENGETAHUAN DASAR SEPATU OLAHRAGA', 'Sepatu terdiri dari 4 bagian yaitu :Upper : Bagian atas sepatu.\r\nInsole : Bagian alas dibawah upper.\r\nMidsole : Bagian tengah diantara insole dan outsole.\r\nOutsole : Bagian paling bawah yang bersentuhan dengan lantai atau landasan.\r\n'),
(7, 'ANALISA KEBUTUHAN', 'Cara menganalisa kebutuhan customer adalah : 1. Bertanya 2. Mendengar\r\n'),
(8, 'ALASAN CUSTOMER MEMBELI', 'Tangible adalah dasar pertimbangan yang dapat terlihat atau terwujud, diantaranya: 1.Spesifikasi produk-feature/karakteristik produk secara fisik? 2. Kinerja-Apa yang bisa ia lakukan? 3. Penampilan-Bagaimana tampilan produk? \r\n\r\nIntangible adalah dasar pertimbangan yang tidak terlihat atau tidak berwujud tapi mempengaruhi secara emosional');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
`id_soal` int(4) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `e` varchar(200) NOT NULL,
  `kunci` varchar(2) NOT NULL,
  `status` enum('tampil','tidak') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `paket`, `soal`, `a`, `b`, `c`, `d`, `e`, `kunci`, `status`) VALUES
(7, '6', 'Bagian upper sepatu TIDAK dibuat dari bahan dibawah ini :', 'Nylon Mesh', 'Kulit', 'Kulit Sintetis', 'Gum Rubber', 'A & B Benar', 'D', 'tampil'),
(9, '6', 'Sepatu Olahraga terdiri dari 4 bagian, yaitu ?', 'Upper, Midsole, Air System, Outsole', 'Upper, Insole, Midosele, Outsole', 'Upper, Insole, Outsole, Heel', 'Upper, Insole, PU, Rubber', 'B & C', 'B', 'tampil'),
(11, '6', 'Bagian sepatu yang mampu menyerap dan meyebarkan tekanan adalah :', 'Upper', 'Insole dan Outsole', 'Midsole', 'Upper dan Outsole', 'Heel dan Insole', 'C', 'tampil'),
(13, '8', 'Dalam menganalisa kebutuhan customer ada beberapa teknik yang dapat kita gunakan, kecuali :', 'Mendengar', 'Mengetahui buying motive dari customer', 'Pendekatan', 'Bertanya', 'Hanya Diam', 'C', 'tampil'),
(14, '7', 'Kebutuhan Adalah :', 'Sesuatu yang harus dipenuhi untuk melengkapi kekurangan', 'Sesuatu yang sangat berbeda, itu adalah keinginan untuk sesuatu yang mungkin tidak diperlukan, tetapi orang itu masih menginginkannya', 'Sesuatu yang diperlukan untuk fisik atau mental kenyamanan seseorang', 'Sesuatu yang didasarkan dengna emosional ketika menyukai sesuatu hal', 'C & A jawaban benar', 'C', 'tampil'),
(15, '6', 'Insole adalah bagian sepatu yang terletak di :', 'Diantara Midsole dan Outole', 'Dibawah upper', 'Bawah sepatu bersentuhan dengan lantai', 'Daerah belakang tumit', 'C & A jawaban benar', 'B', 'tampil'),
(16, '6', 'Midsole terbuat dari bahan dibawah ini :', 'EVA, PU, PE', 'Nylon Canvas', 'Blown Rubber', 'Gum Rubber', 'C & A jawaban benar', 'A', 'tampil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(10) NOT NULL,
  `nis` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` enum('admin','karyawan') NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nis`, `nama`, `username`, `pass`, `level`, `status`) VALUES
(1, 12, 'admin', 'admin', 'admin', 'admin', 1),
(51, 18009827, 'Depi Aima', 'depi@gmail.com', 'depi', 'karyawan', 2),
(52, 19013551, 'Yohana', 'yohana', 'yohana', 'karyawan', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
 ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `jawaban_detail`
--
ALTER TABLE `jawaban_detail`
 ADD PRIMARY KEY (`id_jawaban_detail`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
 ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
 ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
MODIFY `id_jawaban` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `jawaban_detail`
--
ALTER TABLE `jawaban_detail`
MODIFY `id_jawaban_detail` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
MODIFY `id_paket` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
MODIFY `id_soal` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
