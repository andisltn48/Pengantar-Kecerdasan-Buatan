-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2020 pada 05.54
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

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
-- Struktur dari tabel `tbl_aset`
--

CREATE TABLE `tbl_aset` (
  `Nama_Barang` varchar(30) NOT NULL,
  `Merk` varchar(30) NOT NULL,
  `Jenis_Barang` varchar(30) NOT NULL,
  `Tahun_Perolehan` int(20) NOT NULL,
  `Metode_Perolehan` varchar(30) NOT NULL,
  `Kondisi_Barang` varchar(30) NOT NULL,
  `Harga_Beli` varchar(30) NOT NULL,
  `BPKPB/STNK` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biodata`
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
  `No_Handphone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kondisiekonomi`
--

CREATE TABLE `tbl_kondisiekonomi` (
  `Pekerjaan_Ayah/Wali` varchar(20) NOT NULL,
  `Penghasilan_Ayah/Wali` varchar(100) NOT NULL,
  `Detail_Detail_Pekerjaan_Ayah/Wali` text NOT NULL,
  `Bantuan_Pemerintah` varchar(50) NOT NULL,
  `Pekerjaan_Ibu` varchar(20) NOT NULL,
  `Penghasilan_Ibu` varchar(100) NOT NULL,
  `Detail_Pekerjaan_Ibu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rencana_hidup`
--

CREATE TABLE `tbl_rencana_hidup` (
  `Tempat_Tinggal` varchar(30) NOT NULL,
  `Dukungan_Keluarga` varchar(30) NOT NULL,
  `Transportasi_Harian` varchar(30) NOT NULL,
  `Biaya_Transportasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rumah`
--

CREATE TABLE `tbl_rumah` (
  `Jenis_Kepemilikan` varchar(30) NOT NULL,
  `Sumber_Listrik` varchar(30) NOT NULL,
  `Daya_Listrik` varchar(30) NOT NULL,
  `Penggunaan_Air_3_Bulan_terakhir` varchar(30) NOT NULL,
  `Luas_Tanah` varchar(30) NOT NULL,
  `Luas_Bangunan` varchar(30) NOT NULL,
  `Bahan_Atap` varchar(30) NOT NULL,
  `Bahan_Lantai` varchar(30) NOT NULL,
  `Bahan_Tembok` varchar(30) NOT NULL,
  `Pajak_Bumi_Bangunan` varchar(30) NOT NULL,
  `Mandi_Cuci_Kakus` varchar(30) NOT NULL,
  `Sumber_Air_Utama` varchar(30) NOT NULL,
  `Jarak_dari_Pusat_Kota` varchar(30) NOT NULL,
  `Jumlah_orang_tinggal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`NISN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
