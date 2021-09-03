-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2021 pada 07.44
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hutatinggi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_diri`
--

CREATE TABLE `data_diri` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `usia` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `NIK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_diri`
--

INSERT INTO `data_diri` (`id`, `nama`, `usia`, `tanggal_lahir`, `jenis_kelamin`, `NIK`) VALUES
(1, 'Trifani', 18, '2001-02-09', 'Wanita', 13318005),
(2, 'Do', 19, '2000-06-17', 'Pria', 13318020),
(4, 'Yolanda', 17, '2019-12-06', 'Wanita', 13318001),
(5, 'Trifani', 19, '2019-12-20', 'Wanita', 13318010),
(6, 'ye', 19, '2000-04-21', 'Pria', 13318015),
(7, 'eva', 20, '2020-02-15', 'Wanita', 13318032),
(8, 'sis', 19, '2001-08-15', 'Wanita', 13318040),
(9, 'jo', 21, '1995-02-10', 'Pria', 13318080),
(10, 'Ayu', 22, '1996-06-06', 'Wanita', 13318023),
(11, 'Talenta', 25, '1998-09-09', 'Wanita', 13318024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `grafik`
--

CREATE TABLE `grafik` (
  `id` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `grafik`
--

INSERT INTO `grafik` (`id`, `kategori`, `jumlah`) VALUES
(1, 'Pria', 20),
(2, 'Wanita', 31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `image`
--

CREATE TABLE `image` (
  `no` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_surat`
--

CREATE TABLE `kategori_surat` (
  `id_kategori` int(30) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_surat`
--

INSERT INTO `kategori_surat` (`id_kategori`, `nama`) VALUES
(1, 'Surat Peminjaman Alat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `subjek` varchar(30) DEFAULT NULL,
  `isi` varchar(300) DEFAULT NULL,
  `tanggapan` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `nama_user`, `subjek`, `isi`, `tanggapan`) VALUES
(1, 'user2', 'w', 'w', 'ok'),
(2, 'user', 'Jalan', 'kek mananya jalan disini', 'ok'),
(3, 'user', 'surat', 'gk siap sut', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_kategori_surat` int(11) NOT NULL,
  `tanggal_request` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`id`, `id_user`, `id_status`, `id_kategori_surat`, `tanggal_request`) VALUES
(2, 4, 3, 1, '0000-00-00 00:00:00'),
(3, 4, 2, 3, '0000-00-00 00:00:00'),
(4, 4, 2, 4, '0000-00-00 00:00:00'),
(5, 3, 2, 3, '0000-00-00 00:00:00'),
(6, 18, 2, 4, '0000-00-00 00:00:00'),
(7, 3, 1, 4, '0000-00-00 00:00:00'),
(8, 3, 2, 1, '0000-00-00 00:00:00'),
(9, 3, 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(30) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama`) VALUES
(1, 'Kelompok Tani'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_request`
--

CREATE TABLE `status_request` (
  `id_status` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `keterangan` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_request`
--

INSERT INTO `status_request` (`id_status`, `nama`, `keterangan`) VALUES
(1, 'Baru', 'Permintaan baru dilakukan'),
(2, 'Konfirmasi', 'Permintaan telah di konfirmasi'),
(3, 'Selesai', 'Surat telah selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `username`, `password`, `email`, `role`) VALUES
(2, 'admin', '0000-00-00', 'Wanita', 'hutatinggi', 'admin', 'admin', 'admin@', 2),
(22, 'user', '1997-12-09', '', 'Pardomuan', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@', 1),
(23, 'Trifani Febrina Hasibuan', '2021-07-09', 'Wanita', 'porsea', 'trifani', 'trifani123', 'trifanihasibuan09@gmail.com', 1),
(24, 'Trifani Febrina Hasibuan', '2021-07-28', 'Wanita', 'porsea', '', '', 'trifanihasibuan09@gmail.com', 1),
(25, 'Trifani Febrina Hasibuan', '2021-07-21', 'Wanita', 'sd', '', '', 'trifanihasibuan09@gmail.com', 1),
(26, 'Trifani Febrina Hasibuan', '2021-07-29', 'Pria', 'sd', '', '', '082166488295', 1),
(27, 'febrina', '2021-07-28', 'Wanita', 'porsea', 'febrina', 'febrina123', 'trifanihasibuan09@gmail.com', 1),
(28, 'Trifani Febrina Hasibuan', '2021-07-28', 'Wanita', 'porsea', '', '', 'trifanihasibuan09@gmail.com', 1),
(29, 'Trifani Febrina Hasibuan', '2021-07-01', 'Wanita', 'porsea', '', '', 'trifanihasibuan09@gmail.com', 1),
(30, 'febrina', '2021-07-19', 'Wanita', 'porsea', '', '', 'trifanihasibuan09@gmail.com', 1),
(31, 'Trif', '2021-07-21', 'Wanita', 'porsea', '', '', 'trifanihasibuan09@gmail.com', 1),
(32, 'Trif', '2021-07-28', 'Wanita', 'porsea', '', '', 'trifanihasibuan09@gmail.com', 1),
(33, 'febrina', '2021-07-30', 'Wanita', 'porsea', '', '', 'trifanihasibuan09@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `grafik`
--
ALTER TABLE `grafik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `kategori_surat`
--
ALTER TABLE `kategori_surat`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `status_request`
--
ALTER TABLE `status_request`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user` (`role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `grafik`
--
ALTER TABLE `grafik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `status_request`
--
ALTER TABLE `status_request`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role_user` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
