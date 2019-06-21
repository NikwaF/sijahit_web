-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2019 at 09:02 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sijahit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '6228fcd5b58de800fd5798dd4cc5b6ccb233220b');

-- --------------------------------------------------------

--
-- Table structure for table `alamat_customer`
--

CREATE TABLE `alamat_customer` (
  `id_alamat_customer` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `detail_alamat` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat_customer`
--

INSERT INTO `alamat_customer` (`id_alamat_customer`, `id_customer`, `desa`, `kecamatan`, `kelurahan`, `kode_pos`, `detail_alamat`, `date_created`, `date_updated`) VALUES
(1, 2, 'sumbersari', 'sumbersari', 'gang gunung agung', '68121', 'sumbersari gang gunung batu nomer 1 ', '2019-05-08 08:19:07', '0000-00-00 00:00:00'),
(2, 3, 'sumbersari', 'sumbersari', 'gang gunung agung', '68121', 'sumbersari gang gunung batu nomer 1 ', '2019-05-10 12:56:18', '0000-00-00 00:00:00'),
(3, 4, 'ambulu', 'sumbersari', 'gang gunung agung', '68121', 'sumbersari gang gunung batu nomer 1 ', '2019-05-10 19:21:28', '0000-00-00 00:00:00'),
(4, 5, 'kembang', 'panji', 'gunung emas', '68322', 'perumnas blok oo-19 ', '2019-05-10 16:02:23', '0000-00-00 00:00:00'),
(5, 6, 'jember', 'jember', 'jember', '998899', 'jember', '2019-05-20 10:19:59', '0000-00-00 00:00:00'),
(6, 7, 'halo', 'adslf', 'adsf', '23832', 'dfsa', '2019-05-21 02:52:36', '0000-00-00 00:00:00'),
(7, 8, 'fffdfg', 'fddfdf', 'fdfd', '98989', '9090', '2019-05-21 02:58:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(200) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_roles` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `no_hp`, `email`, `password`, `id_roles`, `date_created`, `date_updated`) VALUES
(2, 'niko wahyu fitrianto', '0895380894476', 'nikonabilah@gmail.com', '$2y$10$y1ajp8CTlykiyROrcBXqcuXQ0s7QQ3/OIYX7xy1ILwqEzOFlEn8V2', 1, '2019-05-08 15:19:07', NULL),
(4, 'Merlin Sanjaya', '0895380894476', 'edi_wahyu2@gmail.com', '$2y$10$l65IYaXP7/guyNIN9dfXKemLQ3O95EwkFN53rZ2XqTpxRiyTesNAa', 2, '2019-05-10 20:28:44', NULL),
(5, 'vindi kusuma', '08543787463', 'vindikusuma@gmail.com', '$2y$10$pCOHu8CffREaL0aJXv5tLeq.L8bX6Qx3Vbdd/0ooeOEcDaCD1Nta6', 1, '2019-05-10 23:02:23', NULL),
(6, 'hikari', '887788999', 'hikari@gmail.com', '$2y$10$dJnwm8xHr2/2OJpVxWpEOuoWD5eo6REkHDrRisxHoCXP5wpceRDdS', 1, '2019-05-20 17:19:59', NULL),
(7, 'coba', '082212122121', 'willia@gmail.com', '$2y$10$.cuE18K3F0reJYgahXJHMOc1TOn2r1DraBrym2WoKSvB0liS4hKFW', 1, '2019-05-21 09:52:36', NULL),
(8, 'fakih', '0909090', 'fakih@gmail.com', '$2y$10$8qdolWilRHcc00VsQwy6WOSYV4Mt7cxJUkciV1Lkq9F.Wnf81HSW6', 1, '2019-05-21 09:58:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `harga_min` int(255) NOT NULL,
  `harga_max` int(255) NOT NULL,
  `id_ukuran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_tipe`, `harga_min`, `harga_max`, `id_ukuran`) VALUES
(5, 1, 30000, 50000, 1),
(6, 1, 60000, 65000, 2),
(7, 1, 70000, 77000, 3),
(8, 2, 30000, 50000, 1),
(9, 2, 70000, 90000, 2),
(10, 2, 100000, 120000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tipe`
--

CREATE TABLE `kategori_tipe` (
  `id_kategori_tipe` int(11) NOT NULL,
  `nama_tipe` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_tipe`
--

INSERT INTO `kategori_tipe` (`id_kategori_tipe`, `nama_tipe`) VALUES
(1, 'kemeja'),
(2, 'daster');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_ukuran`
--

CREATE TABLE `kategori_ukuran` (
  `id_ukuran_kategori` int(11) NOT NULL,
  `nama_ukuruan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_ukuran`
--

INSERT INTO `kategori_ukuran` (`id_ukuran_kategori`, `nama_ukuruan`) VALUES
(1, 'anak-anak'),
(2, 'remaja'),
(3, 'dewasa'),
(4, 'remaja xl'),
(5, 'dewasa xl');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `nama_roles` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `nama_roles`) VALUES
(1, 'customer'),
(2, 'pengukur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alamat_customer`
--
ALTER TABLE `alamat_customer`
  ADD PRIMARY KEY (`id_alamat_customer`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_tipe`
--
ALTER TABLE `kategori_tipe`
  ADD PRIMARY KEY (`id_kategori_tipe`);

--
-- Indexes for table `kategori_ukuran`
--
ALTER TABLE `kategori_ukuran`
  ADD PRIMARY KEY (`id_ukuran_kategori`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alamat_customer`
--
ALTER TABLE `alamat_customer`
  MODIFY `id_alamat_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori_tipe`
--
ALTER TABLE `kategori_tipe`
  MODIFY `id_kategori_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_ukuran`
--
ALTER TABLE `kategori_ukuran`
  MODIFY `id_ukuran_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
