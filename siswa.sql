-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 03:50 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `ujian_jurusan` int(11) NOT NULL,
  `selesai_ujian` int(1) NOT NULL,
  `last_login` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `email`, `username`, `password`, `foto`, `ujian_jurusan`, `selesai_ujian`, `last_login`) VALUES
(8, 'AZZAHRA CINTA HARLENSA (D)', 'P', 'Solok', '20-09-2003', 'Jalan 2 Unit 2, Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'azzahra@gmail.com', 'azzahra', '9ee15b47ea0f1a70ad7af7b99a728b03', '', 0, 1, '07/07/2019 - 07:20:5'),
(9, 'MIFATHUL HAMLI (B)', 'L', 'Simawang', '02-03-2003', 'Jalan 5 Unit 2, Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'mifathul@gmail.com', 'mifathul', '2424e8ab28efa822890906d53ed9fe6d', '', 0, 1, '07/07/2019 - 07:19:3'),
(10, 'AJENG NURHIDAYAH (E)', 'P', 'Bandung', '27-09-2003', 'Jalan 8 Unit 2, Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'ajengnurhidayah@gmail.com', 'ajeng', '7f5be8aa3215455ab11a5942b5b1a25f', '', 0, 1, '07/07/2019 - 07:18:1'),
(11, 'DHILA ACTAFIA (A)', 'P', 'Rimbo Bujang', '28-05-2003', 'Jalan 6 Unit 2, Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'dhilaactafia@gmail.com', 'dhila', 'e1f87327759ee120f063e19709fc44bd', '', 0, 1, '29/07/2019 - 03:25:3'),
(12, 'FAGRI HAMDI APRIAL (I)', 'L', 'Rimbo Bujang', '10-02-2003', 'Jalan 5 Unit 2, Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'fagri@gmail.com', 'fagri', 'e59fdd4707832233065be70cb119346c', '', 0, 1, '07/07/2019 - 07:15:1'),
(13, 'ANDIKA CAFRIARSIDA (G)', 'L', 'Rimbo Bujang', '02-03-2003', 'Jalan 12 Unit 2, Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'andika.c@gmail.com', 'andika', '0c8b710ad235a0822cbbd81d13c61c92', '', 0, 1, '07/07/2019 - 07:13:4'),
(14, 'REINNUCHA PERMATA SURI (F)', 'P', 'Rimbo Bujang', '28-05-2003', 'Jalan 9 Unit 2, Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'reinnucha@gmail.com', 'reinnucha', '4bb9b5d222ed663f8c0ce266f08bfef7', '', 0, 1, '07/07/2019 - 07:12:1'),
(15, 'FARHAN JAVALINO (H)', 'L', 'Muara Bungo', '28-05-2003', 'Jalan 4 unit 2, Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'farhanjavalino@gmail.com', 'farhan', 'aafccd2ba8f028c405615d4ca6aa3227', '', 0, 1, '07/07/2019 - 07:10:2'),
(16, 'KZANINDYA DESWINTA FAJRIN (J)', 'P', 'Muara Bungo', '16-03-2003', 'Jalan 7 Unit 2, Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'kzanindya@gmail.com', 'kzanindya', 'bab1a3889de20115c6427892fd2703a7', '', 0, 1, '07/07/2019 - 07:08:1'),
(17, 'FINDI YENITA SARI (C)', 'P', 'Rimbo Bujang', '13-06-2003', 'Jalan 5 unit 2, Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'findiyenita@gmail.com', 'findi', '8cd08332917e342a26ff38b0a680fc5e', '', 0, 1, '07/07/2019 - 07:02:3'),
(18, 'KEVIN BRAMASTA (K)', 'L', 'Muara Bungo', '13-06-2003', 'Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'kevin@gmail.com', 'kevin', 'f8a1d9cf3df31609b223416d6352457c', '', 0, 0, '25/07/2019 - 05:12:0'),
(19, 'SUCI ELINA BASIR (L)', 'P', 'Pariaman', '16-09-2003', 'Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'suci@gmail.com', 'suci', 'dfd9876ff56d4214d5bb1963f63a5864', '', 0, 0, '25/07/2019 - 05:15:1'),
(20, 'M. MEY DANI KANDRIZON (M)', 'L', 'Pekan Baru', '28-05-2003', 'Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'mey@gmail.com', 'mey', 'e8c06a9b1d8c24d7c3f54cde8c315bb3', '', 0, 0, '25/07/2019 - 05:16:0'),
(21, 'DEWI KURNIAWATI S. (N)', 'P', 'Rimbo Bujang', '13-06-2003', 'Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'dewi@gmail.com', 'dewi', 'f4ed75134075f2a782676c2b8bf842a9', '', 0, 0, '25/07/2019 - 05:16:4'),
(22, 'PUSPITA ARI SUHARSONO (O)', 'P', 'Rimbo Bujang', '27-09-2003', 'Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'puspita@gmail.com', 'puspita', 'bb9c17e300317b33581a86721aabce13', '', 0, 0, '25/07/2019 - 05:17:3'),
(23, 'ANGGI ANGRIYANI S. (P)', 'P', 'Rimbo Bujang', '28-05-2003', 'Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'anggi@gmail.com', 'anggi', '1acc72ee70bf4b1edfcdeb884b66f3a0', '', 0, 0, '25/07/2019 - 05:18:2'),
(24, 'MAHARANI PUTRI SUMARDHI (Q)', 'P', 'Rimbo Bujang', '02-03-2003', 'Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'maharani@gmail.com', 'maharani', '1c84bae45d24a399034165f9d1307b0d', '', 0, 0, '25/07/2019 - 05:19:0'),
(25, 'ILMA ELIZA (R)', 'P', 'Rimbo Bujang', '16-09-2003', 'Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'ilma@gmail.com', 'ilma', '966e8c0e8041db5c2b2777afa4b00408', '', 0, 0, '25/07/2019 - 05:20:3'),
(26, 'ASMITA MAIDA PUTRI (S)', 'P', 'Rimbo Bujang', '16-09-2003', 'Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'asmita@gmail.com', 'asmita', '89f69eae4d6371ef5b52ad11628972ef', '', 0, 0, '25/07/2019 - 05:21:2'),
(27, 'LARASATI NUR INDAH (T)', 'P', 'Rimbo Bujang', '02-03-2003', 'Kel. Kelurahan Wirotho Agung, Kec. Rimbo Bujang, Kab. Tebo, Jambi', '082279312210', 'larasati@gmail.com', 'larasati', '6d2bfe79f08251cb8f3490e8dab7419c', '', 0, 0, '25/07/2019 - 05:22:3'),
(28, 'user', 'L', 'jogja', '16 Septemb', 'jambi', '082279312210', 'user@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '', 0, 0, '03/12/2019 - 03:40:3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `ujian_jurusan` (`ujian_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
