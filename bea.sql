-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 04:09 PM
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
-- Database: `bea`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambilbeasiswa`
--

CREATE TABLE `ambilbeasiswa` (
  `id` int(11) NOT NULL,
  `nama_beasiswa` varchar(30) NOT NULL,
  `penerbit` varchar(35) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambilbeasiswa`
--

INSERT INTO `ambilbeasiswa` (`id`, `nama_beasiswa`, `penerbit`, `status`) VALUES
(13, 'Bank Indonesia', 'Bank Indonesia', ''),
(15, 'Jadi PNS 2021', 'Zemy Prabowo', ''),
(16, 'Bidikmisi', 'Bank Indonesia', ''),
(18, 'Bidikmisi', 'Bank Indonesia', ''),
(20, 'Bidikmisi', 'Ristek Dikti', ''),
(22, 'Bank Indonesia', 'Bank Indonesia', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftarbeasiswa`
--

CREATE TABLE `daftarbeasiswa` (
  `id` int(5) NOT NULL,
  `nama_beasiswa` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `total` varchar(15) NOT NULL,
  `kuota` int(3) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `syarat1` varchar(250) NOT NULL,
  `syarat2` varchar(250) NOT NULL,
  `syarat3` varchar(250) NOT NULL,
  `syarat4` varchar(250) NOT NULL,
  `dokument1` varchar(250) NOT NULL,
  `dokument2` varchar(250) NOT NULL,
  `dokument3` varchar(250) NOT NULL,
  `dokument4` varchar(250) NOT NULL,
  `dokument5` varchar(250) NOT NULL,
  `dokument6` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarbeasiswa`
--

INSERT INTO `daftarbeasiswa` (`id`, `nama_beasiswa`, `image`, `penerbit`, `total`, `kuota`, `deskripsi`, `syarat1`, `syarat2`, `syarat3`, `syarat4`, `dokument1`, `dokument2`, `dokument3`, `dokument4`, `dokument5`, `dokument6`) VALUES
(1, 'Bidikmisi', 'https://files.planet.ung.ac.id/fak/102/ristekdikti-2.jpg', 'Ristek Dikti', 'Buka', 75, 'BIDIKMISI adalah bantuan biaya pendidikan bagi calon mahasiswa tidak mampu secara ekonomi dan memiliki potensi akademik baik untuk menempuh pendidikan di perguruan tinggi pada program studi unggulan sampai lulus tepat waktu.', 'Siswa SMA/SMK/MA atau bentuk lain yang sederajat yang akan lulus pada tahun 2020, memiliki identitas berupa NISN dan NPSN yang valid di PDSPK.', 'Usia paling tinggi pada saat mendaftar adalah 21 tahun', 'Pendidikan orang Tua/Wali setinggi-tingginya S1 (Strata 1) atau Diploma 4', 'Memiliki potensi akademik baik berdasarkan rekomendasi objektif dan akurat dari Kepala Sekolah', 'Kartu Peserta Bidikmisi', 'Fotocopy Kartu Peserta SNMPTN', 'Fotocopy kartu keluarga', 'Pas Photo 4 x 6 cm berwarna', 'Photo rumah tampak depan ukuran 4R berwarna ', 'Photo ruang keluarga ukuran 4 R berwarna'),
(2, 'Jadi PNS 2021', 'https://daftarbeasiswa.com/wp-content/uploads/2020/11/Beasiswa-Jadi-PNS.png', 'Zemy Prabowo', 'Buka', 50, 'Jadi PNS merupakan organisasi pemuda yang bertujuan menciptakan future leaders yang berkualitas, berkarakter, dan visioner untuk dunia yang lebih baik. Beasiswa Jadi PNS adalah salah satu bentuk pengabdian dan cinta kami kepada ibu pertiwi dalam mendukung pendidikan di Indonesia.', 'Warga Negara Indonesia', 'Siswa aktif SMA/SMK/MA/Sederajat', 'Mahasiswa aktif D1/D2/D3/D4/S1', 'Tidak ada minimal nilai rapot atau IPK', 'Foto/Scan Kartu Pelajar atau Kartu Tanda Mahasiswa (KTM) atau Identitas lainnya yang menunjukkan kamu seorang pelajar', 'Foto/Scan Nilai Rapor Terakhir [hanya SMA/SMK/MA/Sederajat]', ' Foto/Scan KHS Kumulatif terakhir yang ada [hanya Mahasiswa]', 'Foto/Scan KRS terakhir yang ada [hanya Mahasiswa]', 'Foto/Scan Surat Pernyataan Kurang Mampu [hanya Mahasiswa/SMA/SMK/MA/Sederajat kategori Kurang Mampu]', ''),
(3, 'Bank Indonesia', 'https://cf.shopee.co.id/file/295ae9a66101badfc367ac1c66c4e434', 'Bank Indonesia', 'Buka', 50, 'Beasiswa Bank Indonesia merupakan beasiswa yang diberikan oleh Bank Indonesia bagi para mahasiswa S1 di berbagai Perguruan Tinggi Negeri (PTN). Melalui beasiswa ini, BI akan memberikan bantuan untuk biaya pendidikan, tunjangan studi, dan juga biaya hidup bagi para mahasiswa on going, yakni mereka yang sudah menempuh minimal 40 SKS.', 'Merupakan mahasiswa S1 reguler', 'Minimal telah menyelesaikan 40 SKS/3 semester', 'Berasal dari latar belakang ekonomi keluarga kurang mampu', 'empunyai IPK minimal 3.00 (skala 4.00)', 'Kartu Tanda Penduduk (KTP)', '	 Kartu Identitias Mahasiswa (KIM)', 'Kartu Hasil Studi (KHS)', 'Kartu Keluarga (KK)', 'Surat Keterangan Tidak Mampu (SKTM) dari Kelurahan domisili orangtua/wali. (opsional)', 'Surat pernyataan sedang tidak menerima beasiswa apapun');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ipk` float NOT NULL,
  `penghasilan` int(50) NOT NULL,
  `jarak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `nama`, `ipk`, `penghasilan`, `jarak`) VALUES
(3, 'anton', 3.1, 1000000, 30),
(6, 'adni', 2, 50000, 5),
(7, 'addd', 3.4, 5000000, 4),
(8, 'lina', 2.1, 10000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `dummys`
--

CREATE TABLE `dummys` (
  `Id` int(8) NOT NULL,
  `nim` int(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `ipk` float NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `jarak` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dummy_akun`
--

CREATE TABLE `dummy_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dummy_akun`
--

INSERT INTO `dummy_akun` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_fuzzy`
--

CREATE TABLE `hasil_fuzzy` (
  `defuzzifikasi` float NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_fuzzy`
--

INSERT INTO `hasil_fuzzy` (`defuzzifikasi`, `id_user`) VALUES
(65.71, 20),
(62.05, 22),
(62.05, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aset`
--

CREATE TABLE `tbl_aset` (
  `Jumlah_Mobil` int(11) NOT NULL,
  `Jumlah_Motor` int(11) NOT NULL,
  `Nama_Barang` varchar(30) NOT NULL,
  `Merk` varchar(30) NOT NULL,
  `Jenis_Barang` enum('Motor','Mobil') NOT NULL,
  `Tahun_Perolehan` int(20) NOT NULL,
  `Metode_Perolehan` enum('Cash','Kredit','Pemberian') NOT NULL,
  `Kondisi_Barang` varchar(30) NOT NULL,
  `Harga_Beli` varchar(30) NOT NULL,
  `BPKB_STNK` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_aset`
--

INSERT INTO `tbl_aset` (`Jumlah_Mobil`, `Jumlah_Motor`, `Nama_Barang`, `Merk`, `Jenis_Barang`, `Tahun_Perolehan`, `Metode_Perolehan`, `Kondisi_Barang`, `Harga_Beli`, `BPKB_STNK`, `id_user`) VALUES
(0, 0, 'a', '123', 'Motor', 123, 'Kredit', '123', '123', 'WhatsApp Image 2021-01-17 at 1', 12),
(0, 0, 'a', '123', 'Motor', 123, 'Kredit', '123', '123', 'WhatsApp Image 2021-01-17 at 1', 12),
(0, 0, 'kue', '123', 'Motor', 31231313, 'Cash', 'pawlepawle', '13132', 'Studibies.kit.pdf', 15),
(0, 0, 'Motor', 'Mio', '', 2015, 'Cash', 'Baik', '999999', '6c24f7d584826924d9cf7757d2aac4', 16),
(0, 0, 'Supra', 'Honda', 'Motor', 2004, 'Cash', 'Baik', '2000000', 'Capture.PNG', 18),
(0, 1, 'nmax', 'honda', 'Motor', 2010, 'Cash', 'ok', '2000000', 'WhatsApp Image 2020-12-07 at 0', 20),
(0, 2, 'Blade', 'Honda', 'Motor', 2012, 'Cash', 'Baik', '7000000', 'wallhaven-mdll89 (1).jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `NIM` int(12) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Tempat_Lahir` varchar(20) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `Kode_Pos` varchar(7) NOT NULL,
  `No_Telepon` varchar(13) NOT NULL,
  `No_Handphone` varchar(12) NOT NULL,
  `IPK` float NOT NULL,
  `Foto` varchar(64) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biodata`
--

INSERT INTO `tbl_biodata` (`NIM`, `Nama`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `Kode_Pos`, `No_Telepon`, `No_Handphone`, `IPK`, `Foto`, `id_user`) VALUES
(10, 'andi', 'Laki-laki', 'bpp', '2000-01-29', 'jlawea', '31231', '3131', '13132', 3.3, '6004595e35215.jpg', 15),
(111, 'andi', 'Laki-laki', 'bppp', '2000-01-19', 'jl bara', '73231', '', '0831238213', 3.4, '60057bb50ff05.jpg', 20),
(2399, 'Budi', 'Laki-laki', 'bpp', '2000-01-08', 'jl kar', '732828', '083123289', '083218318', 2.9, '60052dc1706c5.jpg', 18),
(12313, 'asu', 'Laki-laki', 'weaweawe', '2021-01-25', 'aweawe', '12313', '23213', '23131', 3.1, '6004490909692.png', 13),
(12323, 'asu', 'Laki-laki', 'a', '2021-01-15', 'awdawd', '123', '123', '123', 2, 'Laundry.q_poster.jpg', 12),
(11181010, 'Andi Sultan Asharil Raphi', 'Laki-laki', 'Balikpapan', '2021-01-19', 'adsadasdasdad', '33444', '5454545', '45454545', 4, '60047a6181c0c.jpg', 16),
(11181072, 'Raffly Gafar Pohan', 'Laki-laki', 'Bandung', '2001-01-05', 'Jl MT Haryono', '75311', '', '0812345678', 3.7, '60059f73efedd.jpeg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kondisiekonomi`
--

CREATE TABLE `tbl_kondisiekonomi` (
  `Pekerjaan_Ayah_Wali` varchar(20) NOT NULL,
  `Penghasilan_Ayah_Wali` int(100) NOT NULL,
  `Detail_Pekerjaan_Ayah_Wali` text NOT NULL,
  `Bantuan_Pemerintah` enum('Ada','Tidak Ada') NOT NULL,
  `Nominal` int(30) NOT NULL,
  `Pekerjaan_Ibu` varchar(20) NOT NULL,
  `Penghasilan_Ibu` int(100) NOT NULL,
  `Detail_Pekerjaan_Ibu` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kondisiekonomi`
--

INSERT INTO `tbl_kondisiekonomi` (`Pekerjaan_Ayah_Wali`, `Penghasilan_Ayah_Wali`, `Detail_Pekerjaan_Ayah_Wali`, `Bantuan_Pemerintah`, `Nominal`, `Pekerjaan_Ibu`, `Penghasilan_Ibu`, `Detail_Pekerjaan_Ibu`, `id_user`) VALUES
('eawaewae', 123131, 'lakwkeawo', 'Tidak Ada', 0, 'oawkeoake', 1231313, 'oakeaowke', 15),
('Andi', 99999, 'Dewa', 'Tidak Ada', 0, 'andin', 0, 'Dewi', 16),
('-', 0, '-', 'Ada', 5000000, '-', 0, '-', 18),
('awe', 20000, 'oakwe', 'Tidak Ada', 0, 'owa', 12000, 'aowke', 20),
('-', 0, '-', 'Tidak Ada', 0, 'Dagang', 1000000, 'jualan', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rencana_hidup`
--

CREATE TABLE `tbl_rencana_hidup` (
  `Tempat_Tinggal` varchar(30) NOT NULL,
  `Dukungan_Keluarga` varchar(30) NOT NULL,
  `Transportasi_Harian` enum('Mobil','Motor','Kereta','Bus','Tidak Ada') NOT NULL,
  `Biaya_Transportasi` int(30) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rencana_hidup`
--

INSERT INTO `tbl_rencana_hidup` (`Tempat_Tinggal`, `Dukungan_Keluarga`, `Transportasi_Harian`, `Biaya_Transportasi`, `id_user`) VALUES
('wewe', 'wewewe', 'Kereta', 23, 12),
('wkeoawke', 'oawkeoawke', 'Mobil', 12313, 15),
('Rumah', '-', 'Motor', 50000, 16),
('bpp', 'iya', 'Motor', 20000, 18),
('bpp', 'iya', 'Motor', 20000, 20),
('Bontang', 'Iya', 'Motor', 100000, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rumah`
--

CREATE TABLE `tbl_rumah` (
  `Jumlah_Rumah` int(11) NOT NULL,
  `Jenis_Kepemilikan` enum('Pribadi','Sewa','Kontrak') NOT NULL,
  `Sumber_Listrik` varchar(30) NOT NULL,
  `Daya_Listrik` varchar(30) NOT NULL,
  `Penggunaan_air` varchar(30) NOT NULL,
  `Penggunaan_listrik` varchar(30) NOT NULL,
  `Luas_Tanah` varchar(30) NOT NULL,
  `Luas_Bangunan` varchar(30) NOT NULL,
  `Bahan_Atap` varchar(30) NOT NULL,
  `Bahan_Lantai` varchar(30) NOT NULL,
  `Bahan_Tembok` varchar(30) NOT NULL,
  `PBB` varchar(30) NOT NULL,
  `Mandi_Cuci_Kakus` enum('Dalam Rumah','Luar Rumah') NOT NULL,
  `Sumber_Air_Utama` varchar(30) NOT NULL,
  `Jarak` double NOT NULL,
  `Jumlah_orang_tinggal` int(10) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rumah`
--

INSERT INTO `tbl_rumah` (`Jumlah_Rumah`, `Jenis_Kepemilikan`, `Sumber_Listrik`, `Daya_Listrik`, `Penggunaan_air`, `Penggunaan_listrik`, `Luas_Tanah`, `Luas_Bangunan`, `Bahan_Atap`, `Bahan_Lantai`, `Bahan_Tembok`, `PBB`, `Mandi_Cuci_Kakus`, `Sumber_Air_Utama`, `Jarak`, `Jumlah_orang_tinggal`, `id_user`) VALUES
(0, 'Sewa', 'waeaw', '323', 'WhatsApp Image 2021-01-17 at 1', '', '23', '12', 'wdwd', 'we', 'wew', '231', '', 'waeawe', 31, 23, 12),
(0, 'Sewa', 'awekawoek', '131231', 'Pink Border Sale Instagram Pos', '', '2311', '32131', 'oaowekaok', 'okawoke', 'ko', 'koweoo', '', 'eokoawe', 132, 21, 15),
(0, 'Pribadi', 'sddadwad', '2222', '6c24f7d584826924d9cf7757d2aac4', '', '333', '3333', '3333', '333', '3333', '333', '', '3', 3, 3, 16),
(0, 'Pribadi', 'ada', '200', 'tabel.png', '', '30x20', '20x15', 'ada', 'ada', 'ada', '2000', '', 'pdam', 30, 3, 18),
(1, 'Pribadi', 'ada', '240', '100000', '120000', '30', '20', 'kayu', 'keramik', 'bata', '4000', '', 'pdam', 20, 3, 20),
(1, 'Pribadi', 'PLN', '900', '150000', '200000', '30', '25', 'Kayu', 'kayu', 'kayu', '5000', 'Dalam Rumah', 'PDAM', 250, 4, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email`, `password`) VALUES
(2, 'aowkdoawkd', '$2y$10$n.SjG1GX4A7M.4Z8m06nQOegTFtDv5dfJSdwvoy2Ke44vC0wbQuUm'),
(3, 'aaa', '$2y$10$IoR8.ZwtGwbns41PLC4cKeBIAgi2IQ7ONmyYlevaKx2mKZbpWXwdK'),
(4, 'andigans123@gmail.com', '$2y$10$8S9Dr7dm9giyV/3OSsGMWuST5QG1BripjTDOFTyTpdHkoLhT3bxli'),
(5, '11181072@student.itk.ac.id', '$2y$10$7e5g6bGuaoJ5dX.25RrwROF8x3SpKwcGVpP6jWPCsfzQJncKioll2'),
(6, 'awawaw', '$2y$10$9wU6VQayVZaaCH.xKTcmyOQwPujCORGkLKiOw/AwdvqFEi20kVWqK'),
(7, 'tes@mail', '$2y$10$6enZ0vrDDtYw5.93io93aOBLsF0f9WrJmQDm/j27u2D5mZa.CbdFq'),
(8, 'tes2@mail', '$2y$10$8qq4m6pkD5aRz0GyvPlKwutZ1cK3dv39QLwk99xEU6JOfAakRcUvS'),
(9, 'tes3@mail', '$2y$10$N47RucjsmbMaca7MlZx6leIqfW2yaZsu2s7SeIc4ZxnqYzAEH1z76'),
(10, 'tes4@mail', '$2y$10$lt7T64ynhPDQ5U83c.zgQe/VlGfX2qDbOU4aqkX9gYaVLxeW9tqta'),
(11, 'tes5@mail', '$2y$10$H8Nc.OxCBsdual0iXCvzfOwX5iXPOtqsj7ylPGJQ5gcpxaMwAWacm'),
(12, 'tes6@gmail.com', '$2y$10$DWJ1LLPISEIVwUViW6Mrp.qKdmN/85uQHQY7bdal3dt2IvWIAVxM.'),
(13, 'tes7@mail', '$2y$10$ZtBhY.T2uIqEYo0kD7iSVOcsEO0PkqmaZELvXmdI8wSjO3A7PULM6'),
(15, 'tes8@mail', '$2y$10$xgh5IRhyTlLvifrqxJP2QeyZh8LLj0fNxqJPfn0ly9yzDKN95Iiwe'),
(16, 'admins@gmail.com', '$2y$10$UFG1kSkSYEm9NY2rko.vFOu2xuNQVL85HIbR.8e9RN3RvzjmEfnn2'),
(17, 'adminsaaa@gmail.com', '$2y$10$Y8XngaH4ixQo/Cp3v4HuOuLO/wKf/L1dEUeqwW4YKzmT6F7vKx1xK'),
(18, 'tes9@mail.com', '$2y$10$z1fDa/jX90/VTY1t02CsleiX4VSrcc.UG7JalYgur708wW0u7eNMC'),
(19, 'tes10@mail.com', '$2y$10$HPA4V5zX4jlXIW6oo5UNJevcJiztLfsdUppYQCRQX5pRll7P.qDAG'),
(20, 'tes11@mail.com', '$2y$10$ipx190cDFmJvQi8otA7bo.4FzgQL1HTJKGXUpVrQy4mtw5vNyyeMu'),
(22, 'raffly123@gmail.com', '$2y$10$4hOrWRghj5zWtKAIFoGD0u0MAJhK9kz0rpylVDwONyKZVkAeABBNm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambilbeasiswa`
--
ALTER TABLE `ambilbeasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarbeasiswa`
--
ALTER TABLE `daftarbeasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama_beasiswa`);

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dummys`
--
ALTER TABLE `dummys`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `dummy_akun`
--
ALTER TABLE `dummy_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_fuzzy`
--
ALTER TABLE `hasil_fuzzy`
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_aset`
--
ALTER TABLE `tbl_aset`
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `id` (`id_user`);

--
-- Indexes for table `tbl_kondisiekonomi`
--
ALTER TABLE `tbl_kondisiekonomi`
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_rencana_hidup`
--
ALTER TABLE `tbl_rencana_hidup`
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_rumah`
--
ALTER TABLE `tbl_rumah`
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarbeasiswa`
--
ALTER TABLE `daftarbeasiswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dummys`
--
ALTER TABLE `dummys`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dummy_akun`
--
ALTER TABLE `dummy_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_fuzzy`
--
ALTER TABLE `hasil_fuzzy`
  ADD CONSTRAINT `hasil_fuzzy_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_aset`
--
ALTER TABLE `tbl_aset`
  ADD CONSTRAINT `tbl_aset_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD CONSTRAINT `tbl_biodata_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_kondisiekonomi`
--
ALTER TABLE `tbl_kondisiekonomi`
  ADD CONSTRAINT `tbl_kondisiekonomi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_rencana_hidup`
--
ALTER TABLE `tbl_rencana_hidup`
  ADD CONSTRAINT `tbl_rencana_hidup_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_rumah`
--
ALTER TABLE `tbl_rumah`
  ADD CONSTRAINT `tbl_rumah_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
