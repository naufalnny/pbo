-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 05:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(150) NOT NULL,
  `nama_admin` varchar(150) NOT NULL,
  `password_admin` varchar(150) NOT NULL,
  `id_toko` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password_admin`, `id_toko`) VALUES
('1', 'dala', 'dala123', ''),
('2', 'rahmat', 'rahmat123', ''),
('3', 'naufal', 'naufal123', ''),
('4', 'aldo', 'aldo123', '');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idBuku` varchar(150) NOT NULL,
  `judulBuku` varchar(150) NOT NULL,
  `pengarang` varchar(150) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `thnTerbit` int(5) NOT NULL,
  `rating` int(5) NOT NULL,
  `harga` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idBuku`, `judulBuku`, `pengarang`, `penerbit`, `thnTerbit`, `rating`, `harga`) VALUES
('1', 'Mengembangakan cinta', 'naruto', 'Gramedia', 2010, 4, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_buku` varchar(150) NOT NULL,
  `id_toko` varchar(150) NOT NULL,
  `total_buku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_cust` varchar(150) NOT NULL,
  `nama_cust` varchar(150) NOT NULL,
  `e-mail` varchar(150) NOT NULL,
  `username_cust` varchar(150) NOT NULL,
  `pass_cust` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_cust`, `nama_cust`, `e-mail`, `username_cust`, `pass_cust`) VALUES
('1', 'yaon', 'yoan@gmail.com', 'yoan221', 'yaon123'),
('2', 'mami', 'mami@gmail.com', 'mami221', 'mami123'),
('3', 'jul', 'jul@gmail.com', 'jul221', 'jul123');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kode_pembayaran` varchar(150) NOT NULL,
  `kode_transaksi` varchar(150) NOT NULL,
  `via_pembayaran` varchar(150) NOT NULL,
  `total_pembayaran` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` varchar(150) NOT NULL,
  `nama_toko` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `e-mail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat`, `e-mail`) VALUES
('1', 'sumber sehat', 'jln. tarumanegara', 'sshealt@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(150) NOT NULL,
  `id_buku` varchar(150) NOT NULL,
  `jumlah_buku` int(5) NOT NULL,
  `total_harga` int(5) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `kurir` varchar(150) NOT NULL,
  `id_cust` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`,`id_toko`),
  ADD KEY `id_toko` (`id_toko`),
  ADD KEY `id_toko_2` (`id_toko`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idBuku`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD KEY `id_buku` (`id_buku`,`id_toko`),
  ADD KEY `id_toko` (`id_toko`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kode_pembayaran`,`kode_transaksi`),
  ADD KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_cust` (`id_cust`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`idBuku`),
  ADD CONSTRAINT `inventaris_ibfk_2` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`kode_transaksi`) REFERENCES `transaksi` (`kode_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`idBuku`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_cust`) REFERENCES `pelanggan` (`id_cust`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
