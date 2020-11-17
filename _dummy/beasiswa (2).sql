-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 02:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `nama` varchar(50) NOT NULL,
  `ipk` float NOT NULL,
  `penghasilan` int(50) NOT NULL,
  `jarak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`nama`, `ipk`, `penghasilan`, `jarak`) VALUES
('andi', 3.4, 5000000, 10),
('inda', 3.7, 500000, 20),
('budi', 3.1, 1000000, 30),
('fulan', 3.8, 1500000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aset`
--

CREATE TABLE `tbl_aset` (
  `Nama_Barang` varchar(30) NOT NULL,
  `Merk` varchar(30) NOT NULL,
  `Jenis_Barang` varchar(30) NOT NULL,
  `Tahun_Perolehan` int(20) NOT NULL,
  `Metode_Perolehan` varchar(30) NOT NULL,
  `Kondisi_Barang` varchar(30) NOT NULL,
  `Harga_Beli` varchar(30) NOT NULL,
  `BPKPB_STNK` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `NISN` int(12) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Tempat_Lahir` varchar(20) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Kode_Pos` varchar(7) NOT NULL,
  `No_Telepon` varchar(13) NOT NULL,
  `No_Handphone` varchar(12) NOT NULL,
  `IPK` float NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kondisiekonomi`
--

CREATE TABLE `tbl_kondisiekonomi` (
  `Pekerjaan_Ayah_Wali` varchar(20) NOT NULL,
  `Penghasilan_Ayah_Wali` int(100) NOT NULL,
  `Detail_Pekerjaan_Ayah_Wali` text NOT NULL,
  `Bantuan_Pemerintah` varchar(50) NOT NULL,
  `Pekerjaan_Ibu` varchar(20) NOT NULL,
  `Penghasilan_Ibu` int(100) NOT NULL,
  `Detail_Pekerjaan_Ibu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kondisiekonomi`
--

INSERT INTO `tbl_kondisiekonomi` (`Pekerjaan_Ayah_Wali`, `Penghasilan_Ayah_Wali`, `Detail_Pekerjaan_Ayah_Wali`, `Bantuan_Pemerintah`, `Pekerjaan_Ibu`, `Penghasilan_Ibu`, `Detail_Pekerjaan_Ibu`) VALUES
('t', 50000, 'adsawd', '--', '-', 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rencana_hidup`
--

CREATE TABLE `tbl_rencana_hidup` (
  `Tempat_Tinggal` varchar(30) NOT NULL,
  `Dukungan_Keluarga` varchar(30) NOT NULL,
  `Transportasi_Harian` varchar(30) NOT NULL,
  `Biaya_Transportasi` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rumah`
--

CREATE TABLE `tbl_rumah` (
  `Jenis_Kepemilikan` varchar(30) NOT NULL,
  `Sumber_Listrik` varchar(30) NOT NULL,
  `Daya_Listrik` varchar(30) NOT NULL,
  `Penggunaan_air` varchar(30) NOT NULL,
  `Luas_Tanah` varchar(30) NOT NULL,
  `Luas_Bangunan` varchar(30) NOT NULL,
  `Bahan_Atap` varchar(30) NOT NULL,
  `Bahan_Lantai` varchar(30) NOT NULL,
  `Bahan_Tembok` varchar(30) NOT NULL,
  `PBB` varchar(30) NOT NULL,
  `Mandi_Cuci_Kakus` varchar(30) NOT NULL,
  `Sumber_Air_Utama` varchar(30) NOT NULL,
  `Jarak` double NOT NULL,
  `Jumlah_orang_tinggal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`NISN`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD CONSTRAINT `tbl_biodata_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
