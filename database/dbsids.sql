-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 05:28 AM
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
-- Database: `dbsids`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `aktif` int(1) NOT NULL,
  `tanggal_daftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `email`, `password`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `foto`, `aktif`, `tanggal_daftar`) VALUES
(2, 'Novi', 'nopi', 'novinurkhaeni.2@gmail.com', '$2y$10$gkImTKPbOWwLuRHr5sPhB..bLHOz5JbqnRuEsD4laRoMpIQcJQ0na', 'perempuan', 'jogja', '2001-11-11', 'jogja', '0877777', 'foto.jpg', 1, 1575382293),
(8, 'ridho', 'ridho', 'ridhoaryobimo@gmail.com', '$2y$10$Si62vGjTlJN3ON06kADb/OkPmg9KYCMIzEkEwotebYsJyv8Ke3Fv.', '', 'jogja', '1999-11-11', 'jogja', '0877777', 'foto.jpg', 0, 1575432846),
(9, 'Novi', 'novi', 'novi.nurkhaeni@students.amikom.ac.id', '$2y$10$kka2aFWrKNC3M0R1FMIr/uMnA.r8PawqED/nYSr4ThN1X/d/ZA5L2', '', 'jogja', '1111-11-11', 'jogja', '0877777', 'foto.jpg', 0, 1575433118),
(11, 'ridho', 'ridhoo', 'ridho.bimo@students.amikom.ac.id', '$2y$10$pxxTTBgz4KxW8HdT.b55F.Ebm.o74UZLlNVrpGOdAfgC0JEG0/jUu', '', 'jogja', '1111-11-11', 'jogja', '0877777', 'foto.jpg', 0, 1575433600);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `token_id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`token_id`, `email`, `token`, `date_created`) VALUES
(5, 'ridhoaryobimo@gmail.com', 'oqIefvKvdP89jz0Nw5BwcFQU+dr3szcEm3XYt3q2F08=', 1575432703),
(6, 'ridhoaryobimo@gmail.com', 'm91A2I0dhKIlQSmnWDESrOolt6M5ZTfUUt4OJ8hS9zM=', 1575432846),
(7, 'novi.nurkhaeni@students.amikom.ac.id', 'DUj+8M/fllbtIcIqye8DuVLw0HhUoPH9OGUF23mmVVQ=', 1575433118),
(9, 'ridho.bimo@students.amikom.ac.id', 'OsQBqLE4V29BorvsXPXiyUV714S5EqSxp5gxhlV/BHA=', 1575433600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`token_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
