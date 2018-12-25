-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 09:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'faiz', 'faiz');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_motor`
--

CREATE TABLE `hasil_motor` (
  `id_motor` int(5) NOT NULL,
  `foto_motor` varchar(255) NOT NULL,
  `nama_motor` varchar(255) NOT NULL,
  `merk_motor` varchar(255) NOT NULL,
  `spesifikasi_motor` varchar(255) NOT NULL,
  `prestasi_motor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_motor`
--

INSERT INTO `hasil_motor` (`id_motor`, `foto_motor`, `nama_motor`, `merk_motor`, `spesifikasi_motor`, `prestasi_motor`) VALUES
(11, 'Satria-F150-11.JPG', 'Merah Delima', 'Suzuki Satria F150', 'Piston  73 mm, Stroke  62 mm, Karburator  PJ 34, Knalpot  AHM, Klep In Ex  28-24 mm, Durasi Cam 265, CDI  BRT Imax Super Pro, BBM  Pertamax Plus, Ratio  1(14-33) 2(16-23) 3(19-25) 4(21-23) 5(23-23) & 6(25-23)', 'Juara 1 Kawahara July Open 2016 201M'),
(12, '13827431_1203678919695800_1928423825_n.jpg', 'Hati Yang Luka', 'Suzuki Satria F150', 'Piston 73 mm, Stroke 62 mm, Karburator PJ 34, Knalpot AHM, Klep In Ex 28-24 mm, Durasi Cam 265, CDI BRT Imax Super Pro, BBM Pertamax Plus, Ratio 1(14-33) 2(16-23) 3(19-25) 4(21-23) 5(23-23) & 6(25-23)', 'Juara 1 Kawahara July Open 2016 500M'),
(13, '379231_583288755019983_1395615258_n.jpg', 'Jali Jali', 'Suzuki Satria F150', 'Piston 72 mm, Stroke 62 mm, Karburator PE 28, Knalpot AHM, Klep In Ex 26-24 mm, Durasi Cam 265, CDI BRT Imax Super Pro, BBM Pertamax Plus, Ratio 1(14-33) 2(16-23) 3(19-25) 4(21-23) 5(23-23) & 6(25-23)', 'Mendapatkan Julukan Raja 4tak 500M Taman Mini tahun 2015');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_bengkel`
--

CREATE TABLE `pegawai_bengkel` (
  `id_pegawai` int(5) NOT NULL,
  `foto_pegawai` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `ttl_pegawai` varchar(255) NOT NULL,
  `alamat_pegawai` varchar(255) NOT NULL,
  `jabatan_pegawai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_bengkel`
--

INSERT INTO `pegawai_bengkel` (`id_pegawai`, `foto_pegawai`, `nama_pegawai`, `ttl_pegawai`, `alamat_pegawai`, `jabatan_pegawai`) VALUES
(4, 'roby-umar-kemeja-muslim_f-783-1521.png', 'Tryto Anwar', 'Jakarta 26 November 1986', 'Kemayoran, Jakarta Pusat', 'Owner'),
(5, 'roby-ustman---kemeja-muslim_l-780-1518.png', 'Yusuf Setiawan', 'Blitar 4 Juli 1981', 'Tanjung Priok, Jakarta Utara', 'Calo Event'),
(6, 'Baju_Muslim_Baju_koko__baju_muslim_pria_MQI_001_Pria_Keren_E.png', 'Wawan Setiawan', 'Purworejo, 27 Mei 1981', 'Kemayoran, Jakarta Pusat', 'Mekanik');

-- --------------------------------------------------------

--
-- Table structure for table `profile_bengkel`
--

CREATE TABLE `profile_bengkel` (
  `id_profile` int(5) NOT NULL,
  `nama_pemilik` varchar(25) NOT NULL,
  `tanggal_berdiri` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `kerjasama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_bengkel`
--

INSERT INTO `profile_bengkel` (`id_profile`, `nama_pemilik`, `tanggal_berdiri`, `alamat`, `fasilitas`, `kerjasama`) VALUES
(1, 'Tryto Anwar', '26 November 2014', 'Jalan Letjend Suprapto No.82 RT.10/RW.2 ', 'Service, Tune Up, Modifikasi, Sparepart & Bore Up', '<p><em>Kawahara Racing Team</em></p>\r\n<p><strong>BRT</strong> (<em>Bintang Racing Team)</em></p>\r\n<p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `hasil_motor`
--
ALTER TABLE `hasil_motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `pegawai_bengkel`
--
ALTER TABLE `pegawai_bengkel`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `profile_bengkel`
--
ALTER TABLE `profile_bengkel`
  ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hasil_motor`
--
ALTER TABLE `hasil_motor`
  MODIFY `id_motor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pegawai_bengkel`
--
ALTER TABLE `pegawai_bengkel`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile_bengkel`
--
ALTER TABLE `profile_bengkel`
  MODIFY `id_profile` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
