-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 10:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_user` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_user`, `username`, `email`, `namalengkap`, `password`, `type`, `avatar`) VALUES
(1, 'fadhiilrachman', 'admin@gmail.com', 'Fadhiil Rachman', '21232f297a57a5a743894a0e4a801fc3', 'admin', '41241cacd6a56d9cb6bef52fb1d337b1.jpg'),
(6, 'baak', 'baak@gmail.com', 'Ka. BAAK', 'f6edb4c31cf9be5ce497d12251a9d29e', 'baak', '2b10f8e9a8cf35bd216750928492d585.jpg'),
(7, 'baak2', 'baak2@gmail.com', 'Ka. BAAK 2', '3cf1462ae5dadb71e6d875df74ecbd9f', 'baak', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aspirasi`
--

CREATE TABLE `tb_aspirasi` (
  `id` int(11) NOT NULL,
  `nik` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `aspirasi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_aspirasi`
--

INSERT INTO `tb_aspirasi` (`id`, `nik`, `nama`, `aspirasi`) VALUES
(1, '3275091311990017', 'Nadhirah', 'Aku sayang kamu'),
(2, '3275091311990017', 'Toffel', 'Aku orang pusat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `id_bidang` int(255) NOT NULL,
  `nama_bidang` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_bidang`
--

INSERT INTO `tb_bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'Enterprise'),
(2, 'Data Solutions');

-- --------------------------------------------------------

--
-- Table structure for table `tb_izin`
--

CREATE TABLE `tb_izin` (
  `id_izin` int(255) NOT NULL,
  `id_namaizin` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `tglawal` date NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tglakhir` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_izin`
--

INSERT INTO `tb_izin` (`id_izin`, `id_namaizin`, `id`, `tglawal`, `tempat`, `tglakhir`, `status`) VALUES
(2, 2, 11, '2018-08-17', 'Jakarta', '2018-08-16', 'waiting'),
(3, 2, 10, '2018-08-01', 'Jakarta', '2018-08-04', 'approved'),
(4, 5, 10, '2018-08-21', 'Depok', '2018-08-22', 'waiting'),
(5, 3, 11, '2018-10-05', 'Jakarta', '2018-12-01', 'rejected'),
(8, 14, 12, '2018-08-22', 'Bekasi', '2018-08-24', 'waiting'),
(9, 12, 10, '2018-08-16', 'Bekasi', '2018-08-20', 'approved'),
(10, 11, 11, '2018-09-21', 'Bandung', '2018-09-22', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(255) NOT NULL,
  `nama_jabatan` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Deputi'),
(3, 'Sekretaris'),
(5, 'Bendahara');

-- --------------------------------------------------------

--
-- Table structure for table `tb_namaizin`
--

CREATE TABLE `tb_namaizin` (
  `id_namaizin` int(255) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nama_izin` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_namaizin`
--

INSERT INTO `tb_namaizin` (`id_namaizin`, `type`, `nama_izin`) VALUES
(1, 'cuti', 'Cuti Hamil'),
(2, 'cuti', 'Cuti Lebaran'),
(3, 'cuti', 'Cuti Natal'),
(4, 'sekolah', 'Rapat Petinggi Kampus'),
(5, 'sekolah', 'Rapat Guru'),
(6, 'seminar', 'Seminar Bela Negara'),
(7, 'seminar', 'Seminar Compfest'),
(8, 'seminar', 'Seminar Sinaptika 2018'),
(9, 'seminar', 'Seminar Gemastik 11'),
(11, 'sekolah', 'Rapat Kurikulum'),
(12, 'cuti', 'Cuti Idul Adha'),
(13, 'cuti', 'Cuti Pregnant'),
(14, 'seminar', 'Seminar Google I/O 2018');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nip` int(255) NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status_perkawinan` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status_pegawai` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_jabatan` int(255) NOT NULL,
  `id_bidang` int(255) NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `no_ktp` int(255) NOT NULL,
  `no_rumah` int(255) NOT NULL,
  `no_handphone` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tanggal_pengangkatan` date NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `nama`, `nip`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_terakhir`, `status_perkawinan`, `status_pegawai`, `id_jabatan`, `id_bidang`, `agama`, `alamat`, `no_ktp`, `no_rumah`, `no_handphone`, `email`, `password`, `id_user`, `tanggal_pengangkatan`, `avatar`) VALUES
(13, 'Prianggara', 123456, 'Bekasi', '2021-09-03', 'Laki-laki', 'SMP/SMA', 'Belum kawin', 'Karyawan tetap', 1, 1, 'Kristen Protestan', 'daadadada', 1234455, 12121, 1313131313, 'pegawai@gmail.com', '047aeeb234644b9e2d4138ed3bc7976a', '123456', '2021-11-03', '2b904818c1422f8c766301e82e53a684.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_aspirasi`
--
ALTER TABLE `tb_aspirasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tb_izin`
--
ALTER TABLE `tb_izin`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_namaizin`
--
ALTER TABLE `tb_namaizin`
  ADD PRIMARY KEY (`id_namaizin`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_aspirasi`
--
ALTER TABLE `tb_aspirasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `id_bidang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_izin`
--
ALTER TABLE `tb_izin`
  MODIFY `id_izin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_namaizin`
--
ALTER TABLE `tb_namaizin`
  MODIFY `id_namaizin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
