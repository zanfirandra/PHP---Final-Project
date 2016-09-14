-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Sep 2016 la 09:37
-- Versiune server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php1finalexamen`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `angajati`
--

CREATE TABLE `angajati` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `angajati`
--

INSERT INTO `angajati` (`id`, `username`, `password`) VALUES
(1, 'andra', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Ion', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Marian', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'zanfir', '25d55ad283aa400af464c76d713c07ad'),
(6, 'andrei', '7315de75b6992d9eb6f64589aa691b0c'),
(7, 'eu', '4829322d03d1606fb09ae9af59a271d3');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `mesaje`
--

CREATE TABLE `mesaje` (
  `id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `mesaje`
--

INSERT INTO `mesaje` (`id`, `message`, `sender`, `receiver`) VALUES
(1, 'Buna!', 'andra', 'Ion'),
(2, 'ce mai faci', 'zanfir', 'andra'),
(3, 'asdsaa', 'eu', ''),
(4, 'sadaa', 'eu', 'andra'),
(5, 'sadaa', 'eu', 'andra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angajati`
--
ALTER TABLE `angajati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesaje`
--
ALTER TABLE `mesaje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angajati`
--
ALTER TABLE `angajati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mesaje`
--
ALTER TABLE `mesaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
