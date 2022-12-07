-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 07:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_inst` int(11) NOT NULL,
  `nama_inst` varchar(50) NOT NULL,
  `alamat_inst` varchar(50) NOT NULL,
  `nohp_inst` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_inst`, `nama_inst`, `alamat_inst`, `nohp_inst`) VALUES
(3, 'PT.Gigantara Network', 'Jl Sasana budaya', '0231730'),
(4, 'PT Mencari Cinta Sejati', 'Jl Cipto', '02317384');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `jk_mhs` varchar(20) NOT NULL,
  `nohp_mhs` varchar(15) NOT NULL,
  `alamat_mhs` varchar(50) NOT NULL,
  `prodi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `nama_mhs`, `jk_mhs`, `nohp_mhs`, `alamat_mhs`, `prodi`) VALUES
(1, '200511086', 'Lucky Saputra', 'Laki-Laki', '08818285309', 'Desa Luwung Kecamatan Mundu Kabupaten Cirebon', 'S1 Teknik Informatika'),
(2, '200511877', 'Abdul Rozak', 'Laki-Laki', '08818287689', 'Desa Sumber Kecamatan Mundu Kabupaten Cirebon', 'S1 Teknik Informatika'),
(7, '200511107', 'Azis Rahman', 'Laki-laki', '088182876897', 'Sumber', 'S1 Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `pembimbing`
--

CREATE TABLE `pembimbing` (
  `id_pem` int(11) NOT NULL,
  `nidn` varchar(15) NOT NULL,
  `nama_pem` varchar(50) NOT NULL,
  `jk_pem` varchar(20) NOT NULL,
  `nohp_pem` varchar(20) NOT NULL,
  `alamat_pem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembimbing`
--

INSERT INTO `pembimbing` (`id_pem`, `nidn`, `nama_pem`, `jk_pem`, `nohp_pem`, `alamat_pem`) VALUES
(1, '1212', 'Freddy Wicaksono', 'Laki-laki', '0881828', 'Desa Kanci'),
(3, '3434', 'Hendra', 'Laki-laki', '08818283645443', 'Desa Kanci');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nohp_mhs` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nama_pem` varchar(50) NOT NULL,
  `nohp_pem` varchar(20) NOT NULL,
  `nama_inst` varchar(50) NOT NULL,
  `alamat_inst` varchar(100) NOT NULL,
  `nohp_inst` varchar(20) NOT NULL,
  `jdwl_bimbing` date NOT NULL,
  `jmlh_bimbingan` int(5) NOT NULL,
  `nilai_disiplin` int(5) NOT NULL,
  `nilai_tjwb` int(5) NOT NULL,
  `nilai_inisiatif` int(5) NOT NULL,
  `nilai_loyal` int(5) NOT NULL,
  `nilai_kerja` int(5) NOT NULL,
  `nilai_kerjasama` int(5) NOT NULL,
  `nilai_keputusan` int(5) NOT NULL,
  `nilai_sikap` int(5) NOT NULL,
  `nilai_jujur` int(5) NOT NULL,
  `nilai_hasilkerja` int(5) NOT NULL,
  `nilai_penulisan` int(5) NOT NULL,
  `nilai_penelitian` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `nama_mhs`, `nim`, `nohp_mhs`, `prodi`, `nidn`, `nama_pem`, `nohp_pem`, `nama_inst`, `alamat_inst`, `nohp_inst`, `jdwl_bimbing`, `jmlh_bimbingan`, `nilai_disiplin`, `nilai_tjwb`, `nilai_inisiatif`, `nilai_loyal`, `nilai_kerja`, `nilai_kerjasama`, `nilai_keputusan`, `nilai_sikap`, `nilai_jujur`, `nilai_hasilkerja`, `nilai_penulisan`, `nilai_penelitian`) VALUES
(3, 'Abdul Rozak', '344 ', '088182853090', 'S1 Teknik Informatika', '', 'Freddy Wicaksono', '08818283645443', 'PT.Gigantara Network', 'Jl Sasana budaya', '0231734455', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Lucky Saputra', '200511086', '08818285309', 'S1 Teknik Informatik', '', 'Freddy Wicaksono', '08818283645', 'PT.Gigantara Network', 'Jl Sasana budaya', '0231734455', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_ajukan` int(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `nama_inst` varchar(50) NOT NULL,
  `alamat_inst` varchar(100) NOT NULL,
  `nohp_mhs` varchar(20) NOT NULL,
  `nohp_inst` varchar(20) NOT NULL,
  `nama_pem` varchar(50) DEFAULT NULL,
  `nidn` varchar(20) NOT NULL,
  `nohp_pem` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_ajukan`, `nama_mhs`, `nim`, `prodi`, `nama_inst`, `alamat_inst`, `nohp_mhs`, `nohp_inst`, `nama_pem`, `nidn`, `nohp_pem`, `status`) VALUES
(20, 'Lucky Saputra', '200511086', 'S1 Teknik Informatik', 'PT.Gigantara Network', 'Jl Sasana budaya', '08818285309', '0231734455', '', '', '', 'Teregistrasi');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi`, `tanggal`) VALUES
(1, 'Rapat Persiapan', 'Penyelenggaraan rapat Persiapan PKL di Universitas muhammadiyah Cirebon Tahun ajaran 2021/2022 akan', '2022-11-08'),
(2, 'Upacara Pelepasan PKL 2022', 'Upacara pelepasan PKL 2022 akan di selenggarakan di lapangan kampus 2', '2022-11-17'),
(3, 'Pendaftaran PKL 2022', 'Batas Pendaftaran PKL tahun 2022 selambat lambatnya pada tanggal 20 November 2022', '2022-11-18'),
(4, 'Sidang PKL 2022', 'Sidang tahunan PKL', '2022-11-26'),
(5, 'Rapat Penutupan PKL 2022', 'Aula MAchdor', '2022-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rolename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `rolename`) VALUES
(1, 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'admin'),
(2, '1212', '8cb2237d0679ca88db6464eac60da96345513964', 'dosen'),
(3, '200511086', '8cb2237d0679ca88db6464eac60da96345513964', 'mahasiswa'),
(5, 'lucky', '8cb2237d0679ca88db6464eac60da96345513964', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_inst`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `pembimbing`
--
ALTER TABLE `pembimbing`
  ADD PRIMARY KEY (`id_pem`),
  ADD UNIQUE KEY `nidn` (`nidn`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_ajukan`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_inst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembimbing`
--
ALTER TABLE `pembimbing`
  MODIFY `id_pem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_ajukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
