-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2022 pada 11.28
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lattis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(500) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `roles` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `pass`, `email`, `roles`) VALUES
(2, '', 'bima', '7fcba392d4dcca33791a44cd892b2112', '', 'admin'),
(4, '', 'alya', '11928ca22a60b25479e3f0799a0a3d5f', '', 'siswa'),
(5, '', 'danskadik501', '226b0d752ee8861c52e5b8b52957128d', '', 'antap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antap`
--

CREATE TABLE `antap` (
  `id` int(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(500) DEFAULT NULL,
  `pangkat` varchar(100) DEFAULT NULL,
  `nrp` varchar(200) DEFAULT NULL,
  `korp` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `jenis` varchar(25) DEFAULT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `antap`
--

INSERT INTO `antap` (`id`, `foto`, `nama`, `pangkat`, `nrp`, `korp`, `jabatan`, `jenis`, `agama`, `alamat`) VALUES
(1, '', 'Giri Prastio, S.IP.,M.M.,CHRMP.', 'Letkol', '528752', 'ADM', 'Komandan Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(2, '', 'Angga Hadi Saputra', 'Mayor', '537890', 'ADM', 'Kasiops Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(3, '', 'Eni Budiarti', 'Kapten', '516265', 'PDE', 'Danflight B Skadik 501', 'Wanita ', 'Islam', 'Skadik 501'),
(4, '', 'Yayat Sudrajat', 'Kapten', '518278', 'Intel', 'Danflight C Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(5, '', 'Joko Purwanto', 'Lettu', '515140', 'Intel', 'Instruktur Gol VII Skadik 501', 'Pria ', 'Islam ', 'Skadik 501'),
(6, '', 'Diki Aprian, S.Kom', 'Lettu', '21719104546619', 'PDE', 'Instruktur Golongan VII Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(7, '', 'Uke Tri Hartini', 'Lettu', '524603', 'ADM', 'Kaurtu Skadik 501', 'Wanita', 'Islam', 'Skadik 501'),
(8, '', 'Agung Hasdianto,S.Pd.', 'Letda', '21919009549830', 'Sains', 'Kaurdal Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(9, '', 'Nuring Ayu Safitri', 'Letda', '528001', 'PDE', 'Instruktura Gol VIII Skadik 501', 'Wanita', 'Islam', 'Skadik 501'),
(10, '', 'Arif Joko Sampurno', 'Letda', '526658', 'KES', 'Instruktur Gol IX Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(11, '', 'Makmur Syahruddin,S.Kom.', 'Letda ', '526486', 'PDE', 'Ps.Kaurlakdik Subsiopsdik Siops Skadik 501', 'Pria ', 'Islam ', 'Skadik 501'),
(12, '', 'Iman Surya Bimawijaya,S.Kom.', 'Letda', '22019504551702', 'PDE', 'Instruktur Gol IX Skadik 501', 'Pria ', 'Islam', 'Skadik 501'),
(13, '', 'Della Audita,S.Si', 'Letda', '3221202970553124', 'PDE', 'Instruktur Gol IX Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(14, '', 'Agung Prasetyo', 'Letda', '533996', 'Intel', 'Instruktur Gol IX Skadik 501', 'Pria ', 'Islam', 'Skadik 501'),
(15, '', 'Riyana Noviati Hadi', 'Serma ', '534072', 'PDE', 'Ba Operator Komputer Subsiopsdik Siops Skadik 501', 'Pria ', 'Islam ', 'Skadik 501'),
(16, '', 'Riska Dwi Nugrahani', 'Serka ', '538211', 'PDE', 'Ba Flight B Skadik 501', 'Wanita', 'Islam', 'Skadik 501'),
(17, '', 'Didi Purwanto', 'Sertu', '520657', 'ADM', 'Ba Adminu Pokgadik Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(18, '', 'Erwan Nugroho', 'Sertu', '523981', NULL, NULL, 'Pria', 'Islam', 'Skadik 501'),
(19, '', 'Deny Farras Fahnianto', 'Serda', '3521101000554000', 'PDE', NULL, 'Pria ', 'Islam', 'Skadik 501'),
(20, '', 'Anang Aprian Kusuma', 'Kopda', '535829', 'ADM', 'Ta Adminpers Urdal Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(21, '', 'Evan W.', 'Praka', '542767', NULL, NULL, 'Pria', 'Islam', 'Skadik 501'),
(22, '', 'Theofillus Selestiann Moa', 'Pratu', '544711', 'ADM', 'Ta Adminu Urtu Skadik 501', 'Pria', 'Kristen', 'Skadik 501'),
(23, '', 'Septian Billi Mahardika ', 'Pratu', '61819809547895', 'PDE', 'Ta Flight C Sakadik 501', 'Pria ', 'Islam', 'Skadik 501'),
(24, '', 'Rifky Ananto Anggi Pratama', 'Pratu', '61619604545613', 'PDE', 'Ta Flight B Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(25, '', 'Rivqi Andrianto', 'Prada ', '61919711550275', 'PDE', 'Ta Flight A Skadik 501', 'Pria', 'Islam', 'Skadik 501'),
(26, '', 'Suryani', 'PNS III A', '196907141999032001', NULL, 'Urtu Skadik 501', 'Wanita ', 'Islam', 'Skadik 501'),
(27, '', 'Sujadi', 'PNS III A', '19690410994031009', NULL, 'Urdal Skadik 501', 'Pria ', 'Islam ', 'Skadik 501'),
(28, '', 'Rr. Wirawanti', 'PNS II C', '196605242005012002', NULL, 'Ops Skadik 501', 'Wanita', 'Islam', 'Skadik 501'),
(29, '', 'Ayi Sumarna', 'PNS II C', NULL, NULL, 'Urdal Skadik 501', 'Pria', 'Islam', 'Skadik 501');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hanjar`
--

CREATE TABLE `hanjar` (
  `id` int(30) NOT NULL,
  `nokep` varchar(500) DEFAULT NULL,
  `namasekolah` varchar(500) DEFAULT NULL,
  `materi` varchar(500) DEFAULT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hanjar`
--

INSERT INTO `hanjar` (`id`, `nokep`, `namasekolah`, `materi`, `file`) VALUES
(1, 'Kep/350/IX/2022\r\n', 'Sekolah Kejuruan Bintara Pengolah Data Elektronik', 'Pancasila,Sapta Marga, Sumpah Prajurit, dan 8 Wajib TNI\r\n', 'tele'),
(2, 'Kep/278/IX/2019\r\n', 'Sekolah Kejuruan Bintara Pengolah Data Elektronik', 'Organisasi Infolahta TNI AU\r\n', '0'),
(3, 'Kep/278/IX/2020\r\n', 'Sekolah Kejuruan Bintara Pengolah Data Elektronik', 'Pengenalan Sistem Informasi TNI AU\r\n', '1'),
(4, 'Kep/278/IX/2021\r\n', 'Sekolah Kejuruan Bintara Pengolah Data Elektronik', 'Dasar Pemeliharaan Komputer\r\n', '1'),
(5, 'Kep278/IX/2022\r\n', 'Kursus Buku Aplikasi Pengolah Kata Sekolah Kejuruan Bintara\r\n', 'Aplikasi Pengolah Kata\r\n', '0'),
(6, 'Kep278/IX/2022\r\n', 'Kursus Buku Aplikasi Pengolah Kata Sekolah Kejuruan Bintara\r\n', 'Aplikasi Pengolah Angka\r\n', '0'),
(7, 'Kep/278/IX/2020 \r\n', 'Kursus Database Management (DBMS)', 'Data Base  Management System (DBMS)\r\n', '0'),
(8, 'Kep/110/V/2020 \r\n', 'Kursus Pemrograman Bintara PDE ', 'Dasar Pemrograman\r\n', '0'),
(9, 'Kep/278/IX/2022\r\n', 'Kursus Lambangja Suspa Sar Dasar', 'Pemrograman Berbasis Web\r\n', '0'),
(10, 'Kep/276/X/2020 \r\n', 'Kursus Bintara Manajemen Kejuruan PDE', 'Pengenalan Desain Grafis\r\n', '0'),
(11, 'Kep/172/VII/2020 \r\n', 'Sekolah Kejuruan Dasar Tamtama Pengelolah Data Elektronik\r\n', 'Hardware\r\n', '0'),
(12, 'Kep/172/VII/2020 \r\n\r\n', 'Sekolah Kejuruan Dasar Tamtama Pengelolah Data Elektronik\r\n', 'Operating System(OS)\r\n', '0'),
(13, 'Kep/276/XII/2019 \r\n', 'Kursus Sistem Informasi Manajemen\r\n', 'Pengaman Data(File)\r\n', '0'),
(14, 'Kep/276/X/2020\r\n', 'Kursus Bintara Manajemen Kejuruan Pengolah Data Elektronik\r\n', 'Aplikasi Pengolah Kata\r\n', '0'),
(15, 'Kep/276/IX/2020 \r\n', 'Kursus Bintara Maajemen Kejuruan Pengolah Data Elektronik  \r\n', 'Aplikasi Pengolah Angka\r\n', '0'),
(16, 'Kep/276/X/2020 \r\n', 'Kursus Bintara Maajemen Kejuruan Pengolah Data Elektronik  \r\n', 'Aplikasi Pembuatan Paparan/Presentasi\r\n', '0'),
(17, 'Kep/276/X/2020 \r\n', 'Kursus Bintara Maajemen Kejuruan Pengolah Data Elektronik  \r\n', 'Jaringan\r\n', '0'),
(18, 'Kep/276/X/2020 \r\n', 'Kursus Pemrograman Berbasis Web Sekolah Susbamenjur PDE\r\n', 'Internet\r\n', '0'),
(19, 'Kep/276/X/2020 \r\n', 'Pemeliharaan Sistem Informasi Kursus Bintara Management Kejuruan\r\n', 'Virtual Meeting\r\n', '0'),
(20, 'Kep326/XII/2022 \r\n', 'Kursus Teknis Penyelenggaraan Operasi Pendidikan TNI AU\r\n', 'Pentgetahuan Teknologi Informasi dan Komunikasi\r\n', '0'),
(21, 'Kep/759/XII/2013 \r\n', 'Kursus Teknis Penyelenggaraan Operasi Pendidikan TNI AU\r\n', 'Pengantar System Informasi\r\n', '0'),
(22, 'Kep/350/XII/2019 \r\n', 'Kursus Administrator Database & Jaringan Komputer\r\n', 'Pengantar System Informasi TNI AU\r\n', '0'),
(23, 'Kep/93/III/2022 \r\n', 'Kursus Operator Komputer\r\n', 'Intalasi Operating System\r\n', '0'),
(24, 'Kep/93/III/2022 \r\n', 'Kursus Aplikasi Pengolahan Kata Sekolah Kejuruan Bintara\r\n', 'Instalasi Software Relation Database Management\r\n', '0'),
(25, 'Kep/110/V/2020 \r\n\r\n', 'Kursus Penyusunan Bahan Pendidikan di Lingkungan TNI AU\r\n', 'Konsep Dasar Pemograman\r\n', '0'),
(26, 'Kep/93/III/2022 \r\n', 'Kursus Operator Komputer\r\n', 'System(RDBMS)\r\n', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(100) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `nama` varchar(500) DEFAULT NULL,
  `pangkat` varchar(100) DEFAULT NULL,
  `nrp` varchar(200) DEFAULT NULL,
  `sekolah` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `korp` varchar(100) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `foto`, `nama`, `pangkat`, `nrp`, `sekolah`, `jabatan`, `korp`, `jenis`, `agama`, `alamat`) VALUES
(1, '????\0JFIF\0\0\0\0\0\0??\0?\0\n\n\n\"\"$$6*&&*6>424>LDDL_Z_||?\n\n\n\"\"$$6*&&*6>424>LDDL_Z_||???\0A?\"\0??\02\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0[?\0\0\0\0\0\0\0\0', 'Reza Yulian Putra', 'Serda', '3522104000555033', 'Sejurba PDE A-38', 'Serda', 'PDE', 'Laki Laki', 'Ba Operator Skadik 501', 'skadik 501'),
(2, 'WIN_20220928_08_48_41_Pro.jpg', 'Fajar Salim Dwi Sujatmiko', 'Serda', '3522107010555034', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'laki laki', 'islam', 'Skadik 501'),
(3, 'WIN_20220928_08_48_41_Pro.jpg', 'Haris Juanda Sihombing', 'Serda', '3522109010555035', 'Sejurba PDE A-38', 'Ba operator Skadik 501', 'PDE', 'laki laki', 'Kristen', 'Skadik 501'),
(4, 'whatsapp-logo-D33939653C-seeklogo.com-removebg-preview.png', 'Muhammad Syakur', 'Serda', '3522104010555036', 'Sejurba PDE A-38', 'Ba Operator skadik 501', 'PDE', 'laki laki', 'islam', 'Skadik 501'),
(5, '', 'Ahmad Febrian Nugraha', 'Serda', '3522104010555037', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'laki laki', 'islam', 'Skadik 501'),
(6, '', 'Muhammad Zikran Aryanto', 'Serda', '3522104010555038', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'laki laki', 'islam', 'Skadik 501'),
(7, 'iii.jpg', 'Galih Hanung Sri Hartono', 'Serda', '3522104010555039', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'laki laki', 'islam', 'Skadik 501'),
(8, '', 'Dhoni Wahyu Pratama', 'Serda', '3522104010555040', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'laki laki', 'islam', 'Skadik 501'),
(9, '', 'Erico Fardan', 'Serda', '3522104010555041', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'laki laki', 'islam', 'Skadik 501'),
(10, '', 'Muhammad Rafiqi Hilmi', 'Serda', '3522104010555042', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'laki laki', 'islam', 'Skadik 501'),
(11, '', 'Risa Bayu Laksono Putro', 'Serda', '3522104010555043', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(12, '', 'Baronmeus Nipa Wawo', 'Serda', '3522104010555044', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Katolik', 'Skadik 501'),
(13, '', 'Muhammad Bentar A', 'Serda', '3522104010555045', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(14, '', 'Didin Prasetyo', 'Serda', '3522104010555046', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(15, '', 'Nuriqbal Hasyim', 'Serda', '3522104010555047', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(16, '', 'Sura Wiranta Tarigan', 'Serda', '3522104010555048', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Kristen', 'Skadik 501'),
(17, '', 'Moch Alvin Fachrizal', 'Serda', '3522104010555049', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(18, '', 'Ghifory Afrizal Akbar', 'Serda', '3522104010555050', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501\r\n'),
(19, '', 'Aurindra Bayu Rakhmat K', 'Serda', '3522104010555051', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(20, '', 'Berliano Windra Sakti\r\n', 'Serda', '3522104010555052', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(21, '', 'Wisnu Wibisono', 'Serda', '3522104010555053', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(22, '', 'Trio Duta Mega Prakoso', 'Serda', '3522104010555054', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(23, '', 'Elang Jalu Satrio', 'Serda', '3522104010555055', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(24, '', 'Muhammad Riski Wlayu', 'Serda', '3522104010555056', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501\r\n'),
(25, '', 'Raden Almas Maulana', 'Serda', '3522104010555057', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(26, '', 'Rizal Nazaruddin', 'Serda', '3522104010555058', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(27, '', 'Muhammad Iqbal Nugroho P', 'Serda', '3522104010555059', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(28, '', 'Luthfi Dwi Nur Rahma', 'Serda', '3522104010555060', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(29, '', 'Desramdhan Akbar Aryahya', 'Serda', '3522104010555061', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(30, '', 'Farhans Maulana Makruf', 'Serda', '3522104010555062', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(31, '', 'Setiawan Agung Saputro', 'Serda', '3522104010555063', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(32, '', 'Ariq Yudatama', 'Serda', '3522104010555064', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(33, '', 'Aryo Fadli Hardiansyah', 'Serda', '3522104010555065', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(34, '', 'Reyhan Revanaldy', 'Serda', '3522104010555066', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(35, '', 'Daffa Dirga Arwima', 'Serda', '3522104010555067', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(36, '', 'Andhika Widiansyah', 'Serda', '3522104010555068', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(37, '', 'Yogi Armanda Putra', 'Serda', '3522104010555069', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(38, '', 'Zidan Pandutama', 'serda', '3522104010555070', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'laki laki', 'islam', 'Skadik 501'),
(39, '', 'Kadarisman', 'serda', '3522104010555071', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(40, '', 'Mavrick Bima Kibigunney', 'Serda', '3522104010555072', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(41, '', 'Ach. Rizqi Romadhan', 'Serda', '3522104010555073', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(42, '', 'Pandu Herlambang', 'Serda', '3522104010555074', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Laki-Laki', 'Islam', 'Skadik 501'),
(43, '', 'Tegar Faza Delfine W', 'Serda', '3522104010555075', 'Sejurba PDE A-38\r\n', 'Ba Operator Skadik 501', 'PDE', 'Perempuan', 'islam', 'Skadik 501'),
(44, '', 'Bunga Novia Putri Diasti', 'Serda', '3522104010555076', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Perempuan', 'Islam', 'Skadik 501'),
(45, '', 'Emy Winda Ariyanti', 'Serda', '3522104010555077', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Perempuan', 'Islam', 'Skadik 501'),
(46, '', 'Alya Azizza Cynthia Maharani', 'Serda', '3522104010555078', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Perempuam', 'Islam', 'Skadik 501'),
(47, '', 'Rahma Dewi Halim', 'Serda', '3522104010555079', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Perempuan', 'Islam', 'Skadik 501\r\n'),
(48, '', 'Adhisa Novia', 'Serda', '3522104010555080', 'Sejurba PDE A-38', 'Ba Operator Skadik 501\r\n', 'PDE', 'Perempuan', 'Islam', 'Skadik 501'),
(49, '', 'Nor Amelia Sari', 'Serda', '3522104010555081', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Perempuan', 'islam', 'Skadik 501'),
(50, '', 'Tithan Ridh\'a As Zalza', 'Serda', '3522104010555082', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Perempuan', 'Islam', 'Skadik 501\r\n'),
(51, '', 'Eva Nur Hayati', 'Serda', '3522104010555083', 'Sejurba PDE A-38', 'Ba Operator Skadik 501\r\n', 'PDE', 'Perempuan', 'Islam', 'Skadik 501'),
(52, '', 'Afifah Ulya', 'Serda', '3522104010555084', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Perempuam', 'Islam', 'Skadik 501'),
(53, '', 'Saidhatul Maulidiyani', 'Serda', '3522104010555085', 'Sejurba PDE A-38', 'Ba Operator Skadik 501', 'PDE', 'Perempuan', 'Islam', ' Skadik 501'),
(54, '', 'Silva Salsadila', 'Serda', '3522104010555086', 'Sejurba PDE A-38\r\n', 'Ba Operator Skadik 501', 'PDE', 'Perempuan', 'Islam', 'Skadik 501'),
(55, '', 'Tri Agung P. Situmorang', 'Serda', '3522108020554981', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'laki laki', 'islam', '\r\nSkadik 501\r\n'),
(56, '', 'Catur Putra Wira Pambudi', 'Serda', '3522112010554982', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(57, '', 'Skadik 501', 'Serda', '3522105010554983', 'Sejurba Intel A-32', 'Ba Intel Skadik 50', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(58, '', 'Devin Arya Mustofa', 'Serda', '3522112010554984', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(59, '', 'Rizky Prayoga', 'Serda', '3522102020554985', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(60, '', 'Muhammad Zulyadi Ihsan', 'Serda', '3522103000554986', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'laki laki', 'islam', 'Skadik 501'),
(61, '', 'Muhammad Zulyadi Ihsan', 'Serda', '3522103000554986', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel\r\n', 'Laki-Laki', 'Islam', 'Skadik 501'),
(62, '', 'Muh. Ardha Nur', 'Serda', '3522105020554987', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501', 'intel', 'laki laki', 'islam', 'Skadik 501'),
(63, '', 'Rafio Nur Sultan H.', 'Serda', '3522109030554988', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(64, '', 'Moh. Ali Rizky', 'Serda', '3522108020554989', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'laki laki', 'islam', 'Skadik 501'),
(65, '', 'Desir Layungjingga', 'serda', '3522104010554990', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(66, '', 'Rahmat Al Haidir', 'Serda', '3522109000554991', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel\r\n', 'laki laki', 'islam', 'Skadik 501                                                                                                                                                  '),
(67, '', 'Ragufir', 'Serda', '3522106030554992', 'Sejurba Intel A-32\r\n', '\r\nBa Intel Skadik 501\r\n', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(68, '', 'I Kadek Tegar Dipayana G', 'Serda', '3522104020554993', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'laki laki', 'islam', 'Skadik 501'),
(69, '', 'Warga Candra Junior', 'serda', '3522109020554994', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', NULL, NULL, 'Skadik 501'),
(70, '', 'Gilang Anggono Aviantara', 'Serda\r\n', '3522107000554995', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'laki laki', 'islam', 'Skadik 501'),
(71, '', 'Andhika Bayu Putra A', 'Sejurba Intel A-32', '3522109010554996', 'Ba Intel Skadik 501', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Laki-Laki', 'Islam', 'Skadik 501'),
(72, '', 'Agripa Septiawan', 'Serda', '3522109020554997', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501', 'Intel ', 'Laki-Laki', 'Katolik', 'Skadik 501'),
(73, '', 'Benediktus Naro Marbun', 'Serda', '3522101000554998', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Kristen', 'Skadik 501'),
(74, '', 'Aditia Okwanda Pratama', 'Serda', '3522110030554999', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(75, '', 'Deni hidayatullah', 'Serda', '3522107020555000', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(76, '', 'Aditya Pratama', 'Serda', '3522107020555001', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(77, '', 'Ramadhan Syahputra', 'Serda', '3522111020555002', 'Sejurba Intel A-32', 'Ba Intel Skadik 501\r\n', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(78, '', 'Muhammad Abdul H.M.', 'Serda', '3522112010555003', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'laki laki', 'Islam', 'Skadik 501'),
(79, '', 'Dimas Sentosa', 'Serda', '3522112000555004', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(80, '', 'Fakhriy Dinan Hutaman', 'Serda', '3522101000555005', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(81, '', 'Agis Shafryzal', 'Serda', '3522109020555006', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(82, '', 'Muhammad Asfa R.', 'Serda ', '3522107020555007', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(83, '', 'Muhammad Astaghina', 'Serda', '3522106030555008', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(84, '', 'Aldi Syahputra', 'Serda', '3522104020555009', 'Sejurba Intel A-32', 'Ba Intel Skadik 501\r\n', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(85, '', 'Rafqi Elkadaren', 'Serda', '3522109010555010', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501\r\n', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(86, '', 'Aditya Putra Dwi Santosa', 'Serda', '3522101010555011', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501\r\n', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(87, '', 'Muhammad Hanif', 'Serda', '3522111010555012', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501\r\n', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(88, '', 'Johannes Jaya Wijaya L', 'Serda', '3522112020555013', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501\r\n', 'Intel', 'Laki-Laki', 'Kristen', 'Skadik 501'),
(89, '', 'Akmal Shafa Naufal Z.A', 'Serda', '3522107020555014', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501\r\n', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(90, '', 'Christian Viery Surbakti', 'Serda', '3522104000555015', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501\r\n', 'Intel', 'Laki-Laki', 'Kristen', 'Skadik 501'),
(91, '', 'Muh. Alif', 'Serda', '3522110000555016', 'Sejurba Intel A-32\r\n', 'Ba Intel Skadik 501\r\n', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(92, '', 'Dylan Javas Alfarizi', 'Serda', '3522104010555017', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'laki laki', 'islam', 'Skadik 501'),
(93, '', 'M. Bagus Hardian R', 'Serda', '3522101000555018', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(94, '', 'Rama Dhoni Herlangga', 'Serda', '3522112020555019', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(95, '', 'Tri Putra Handika', 'Serda', '3522110000555020', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(96, '', 'Nurwahyu', 'Serda', '3522103000555021', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(97, '', 'Mulham Zulyendra Alfaiza', 'Serda', '3522105010555022', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501\r\n'),
(98, '', 'M. Yamin', 'Serda', '3522106030555023', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(99, '', 'Cristof Del Piero Alfonso', 'Serda', '3522106020555024', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Kristen', 'Skadik 501'),
(100, '', 'Enggar Restu Pinanggih ', 'Serda', '3522110000555025', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(101, '', 'Efran Saputra', 'Serda', '3522106010555026', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(102, '', 'Sonu Umbara', 'Serda', '3522109000555027', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(103, '', 'Muhammad Zunan Y. Ibad', 'Serda', '3522107000555028', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(104, '', 'Ali Akbar Rafsanjani', 'Serda', '3522107000555029', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(105, '', 'Andrian Gunawan', 'Serda', '3522101000555030', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(106, '', 'Andre Yolanda', 'Serda', '3522101020555031', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(107, '', 'Prasetya Ari Pratama', 'Serda', '3522101030555032', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Islam', 'Skadik 501'),
(108, '', 'Dhamytha Fauziah Noor', 'Serda', '3522211020555134', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Perempuan', 'Islam', 'Skadik 501'),
(109, '', 'Jazilah', 'Serda', '3522206020555135', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Perempuan', 'Islam', 'Skadik 501'),
(110, '', 'Arimami Putri Lukitasari', 'Serda', '3522203010555136', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Perempuan', 'Islam', 'Skadik 501'),
(111, '', 'Shinta Ayu Widya Wati', 'Serda', '3522212000555137', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Perempuan', 'Islam', 'Skadik 501'),
(112, '', 'Eleonita Feby Haryono', 'Serda', '3522202010555138', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Laki-Laki', 'Kristen', 'Skadik 501'),
(113, '', 'Dewi Lestari', 'Serda', '3522211020555139', 'Sejurba Intel A-32', 'Ba Intel Skadik 501', 'Intel', 'Perempuan', 'Kristen', 'Skadik 501');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id_file`, `nama_file`) VALUES
(1, '123.png'),
(2, 'iii.jpg'),
(3, 'iii.jpg'),
(4, 'kkkk.jpg'),
(5, 'Screenshot 2022-09-26 091543.png'),
(6, 'iii.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `antap`
--
ALTER TABLE `antap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hanjar`
--
ALTER TABLE `hanjar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_file`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `antap`
--
ALTER TABLE `antap`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `hanjar`
--
ALTER TABLE `hanjar`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `upload`
--
ALTER TABLE `upload`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
