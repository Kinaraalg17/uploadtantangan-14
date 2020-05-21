-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2020 pada 13.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelfix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NAMA_ADMIN` varchar(30) NOT NULL,
  `ALAMAT_ADMIN` varchar(50) NOT NULL,
  `NO_TELP_ADMIN` char(12) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NAMA_ADMIN`, `ALAMAT_ADMIN`, `NO_TELP_ADMIN`, `PASSWORD`) VALUES
(1, 'kinaraAlg', 'slkjlsadl', '081', 'kinara@'),
(2, 'asdjl', 'lsda', '081', 'awdklas'),
(3, 'asdjlal', 'jsladjlas', '1312', 'asjlajl'),
(4, 'asdjlal', 'jsladjlas', '1312', 'asjlajl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_reservasi`
--

CREATE TABLE `detail_reservasi` (
  `ID_RESERVASI` int(11) NOT NULL,
  `ID_KAMAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_reservasi`
--

INSERT INTO `detail_reservasi` (`ID_RESERVASI`, `ID_KAMAR`) VALUES
(20, 10),
(29, 20),
(30, 21),
(31, 22),
(32, 23),
(33, 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `ID_KAMAR` int(11) NOT NULL,
  `STATUS_KAMAR` varchar(20) NOT NULL,
  `KAPASITAS_KAMAR` int(11) NOT NULL,
  `JENIS_KAMAR` char(5) NOT NULL,
  `HARGA_KAMAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`ID_KAMAR`, `STATUS_KAMAR`, `KAPASITAS_KAMAR`, `JENIS_KAMAR`, `HARGA_KAMAR`) VALUES
(10, '1', 12, 'VVIP', 50000000),
(13, 'kosong', 12, 'VIP', 200000),
(14, 'Single Bed', 3, 'VVIP', 200000),
(15, 'Single Bed', 2, 'VVIP', 200000),
(16, 'Single Bed', 12, 'VIP', 200000),
(17, 'Single Bed', 3, 'VVIP', 200000),
(18, 'Single Bed', 3, 'VVIP', 2000000),
(19, 'Single Bed', 3, 'VIP', 200000),
(20, 'Double Bed', 3, 'VVIP', 200000),
(21, 'Single Bed', 3, 'VVIP', 2000000),
(22, 'Single Bed', 3, 'VVIP', 200000),
(23, 'Single Bed', 3, 'VVIP', 200000),
(24, 'Single Bed', 12, 'VIP', 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kredit`
--

CREATE TABLE `kredit` (
  `ID_PEMBAYARAN` int(11) NOT NULL,
  `NO_REKENING` char(12) NOT NULL,
  `ID_RESERVASI` int(11) DEFAULT NULL,
  `TANGGAL_PEMBAYARAN` datetime NOT NULL,
  `STATUS_PEMBAYARAN` varchar(12) NOT NULL,
  `TOTAL_PEMBAYARAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kredit`
--

INSERT INTO `kredit` (`ID_PEMBAYARAN`, `NO_REKENING`, `ID_RESERVASI`, `TANGGAL_PEMBAYARAN`, `STATUS_PEMBAYARAN`, `TOTAL_PEMBAYARAN`) VALUES
(32, '121321', 33, '2010-12-12 00:00:00', 'Cicil', 13000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PEMBAYARAN` int(11) NOT NULL,
  `ID_RESERVASI` int(11) NOT NULL,
  `TANGGAL_PEMBAYARAN` datetime NOT NULL,
  `STATUS_PEMBAYARAN` varchar(10) NOT NULL,
  `TOTAL_PEMBAYARAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`ID_PEMBAYARAN`, `ID_RESERVASI`, `TANGGAL_PEMBAYARAN`, `STATUS_PEMBAYARAN`, `TOTAL_PEMBAYARAN`) VALUES
(17, 18, '2122-12-12 00:00:00', '1', 13000),
(18, 19, '2000-02-01 00:00:00', '1', 13000),
(19, 20, '2000-03-15 00:00:00', '1', 175000),
(20, 21, '2000-04-01 00:00:00', '1', 1750000),
(21, 22, '2000-12-13 00:00:00', '1', 13000),
(22, 23, '2000-02-23 00:00:00', 'Lunas', 1765000),
(23, 24, '2222-03-12 00:00:00', 'Lunas', 13000),
(24, 25, '2000-07-13 00:00:00', 'Lunas', 13000),
(25, 26, '3000-03-12 00:00:00', 'Lunas', 13500),
(26, 27, '2020-03-19 00:00:00', 'Lunas', 2150000),
(27, 28, '2000-03-17 00:00:00', 'Cicil', 123921),
(28, 29, '2000-02-12 00:00:00', 'Lunas', 13000),
(29, 30, '2020-05-13 00:00:00', 'Lunas', 2000000),
(30, 31, '2000-03-12 00:00:00', 'Lunas', 13000),
(31, 32, '2001-12-12 00:00:00', 'Lunas', 2000000),
(32, 33, '2010-12-12 00:00:00', 'Cicil', 13000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `ID_RESERVASI` int(11) NOT NULL,
  `ID_ADMIN` int(11) NOT NULL,
  `ID_TAMU` int(11) NOT NULL,
  `TANGGAL_RESERVASI` datetime NOT NULL,
  `JUMLAH_RESERVASI` int(11) NOT NULL,
  `TANGGAL_CHECKIN` datetime NOT NULL,
  `TANGGAL_CHECKOUT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`ID_RESERVASI`, `ID_ADMIN`, `ID_TAMU`, `TANGGAL_RESERVASI`, `JUMLAH_RESERVASI`, `TANGGAL_CHECKIN`, `TANGGAL_CHECKOUT`) VALUES
(18, 1, 15, '2222-12-12 00:00:00', 12, '1222-12-12 00:00:00', '1111-12-12 00:00:00'),
(19, 2, 16, '1222-12-12 00:00:00', 1, '0001-12-12 00:00:00', '1222-12-01 00:00:00'),
(20, 1, 17, '2222-02-12 00:00:00', 10, '1995-12-12 00:00:00', '2005-12-12 00:00:00'),
(21, 1, 21, '1222-12-12 00:00:00', 1, '2000-03-01 00:00:00', '2001-04-12 00:00:00'),
(22, 1, 22, '2000-03-12 00:00:00', 1, '2020-03-12 00:00:00', '2020-03-13 00:00:00'),
(23, 4, 23, '2000-03-17 00:00:00', 1, '2020-03-16 00:00:00', '2020-03-17 00:00:00'),
(24, 4, 24, '1233-12-12 00:00:00', 11, '2222-02-12 00:00:00', '2222-02-12 00:00:00'),
(25, 4, 25, '2222-12-12 00:00:00', 12, '1222-12-12 00:00:00', '2001-01-01 00:00:00'),
(26, 4, 26, '2999-12-12 00:00:00', 35, '2000-12-12 00:00:00', '2000-12-25 00:00:00'),
(27, 4, 27, '2020-03-17 00:00:00', 1, '2020-03-19 00:00:00', '2020-03-20 00:00:00'),
(28, 4, 28, '2000-03-12 00:00:00', 1, '2001-03-12 00:00:00', '2002-04-13 00:00:00'),
(29, 4, 37, '2005-04-12 00:00:00', 1, '2000-03-17 00:00:00', '2222-02-12 00:00:00'),
(30, 4, 38, '2020-05-13 00:00:00', 2, '2020-05-13 00:00:00', '2020-05-14 00:00:00'),
(31, 4, 39, '2000-03-17 00:00:00', 1, '2000-02-13 00:00:00', '2000-02-14 00:00:00'),
(32, 4, 41, '2000-02-12 00:00:00', 1, '2000-12-12 00:00:00', '2001-12-12 00:00:00'),
(33, 4, 42, '2000-03-12 00:00:00', 13, '2000-03-12 00:00:00', '2001-02-13 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `ID_TAMU` int(11) NOT NULL,
  `NAMA_TAMU` varchar(30) NOT NULL,
  `TANGGAL_LAHIR` datetime NOT NULL,
  `JENIS_KELAMIN_TAMU` varchar(10) NOT NULL,
  `NO_TLP_TAMU` char(12) NOT NULL,
  `ALAMAT_TAMU` varchar(50) NOT NULL,
  `KEWARGANEGARAAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`ID_TAMU`, `NAMA_TAMU`, `TANGGAL_LAHIR`, `JENIS_KELAMIN_TAMU`, `NO_TLP_TAMU`, `ALAMAT_TAMU`, `KEWARGANEGARAAN`) VALUES
(15, 'Kinara Al Ghiffari', '2000-03-12 00:00:00', '1', '1312', 'pci', 'Indonesia'),
(16, 'tes', '1222-12-12 00:00:00', '1', '1212', '1212', 'Indonesia'),
(17, 'BIMO', '2000-12-12 00:00:00', '1', '082113502945', 'pci c 22/07', 'china'),
(21, 'Ir. Katub Mekantono', '2000-03-17 00:00:00', '1', '081803297782', 'PCI Blok C22/07', 'United Kingdom'),
(22, 'ANDARA', '2000-03-17 00:00:00', '1', '08180329887', 'CILEGON', 'Indonesia'),
(23, 'Twenty', '2000-03-17 00:00:00', 'Perempuan', '1312', 'Kediri Jl Anggrek', 'Indonesia'),
(24, 'MAHAKAM RATIH PURUHITA', '1222-12-12 00:00:00', 'Perempuan', '1212', 'kfjsalsl', 'Indonesia'),
(25, 'lala21', '2000-12-12 00:00:00', 'Laki-Laki', '081803297780', 'PCI Blok C 22/07', 'china'),
(26, 'Kinara Al ghiffari', '1222-12-12 00:00:00', 'Laki-Laki', '0818645', 'jalan anggrek no 15 c', 'Indonesia'),
(27, 'Kinara Al G', '2000-03-17 00:00:00', 'Laki-Laki', '0254398119', 'Jalan Mulyosari Baru', 'Indonesia'),
(28, 'MAHAKAM RATIH PURUHITA', '2000-02-12 00:00:00', 'Laki-Laki', '081803297782', 'bca', 'Indonesia'),
(29, 'MAHAKAM RATIH PURUHITA', '2020-12-12 00:00:00', 'Laki-Laki', '1312', 'kfjsalsl', 'United Kingdom'),
(30, 'MAHAKAM RATIH PURUHITA', '2020-12-12 00:00:00', 'Laki-Laki', '1312', 'kfjsalsl', 'United Kingdom'),
(31, 'MAHAKAM RATIH PURUHITA', '1222-12-12 00:00:00', 'Perempuan', '1212', 'PCI Blok C 22/07', 'Indonesia'),
(32, 'asdjlal', '2222-12-12 00:00:00', 'Laki-Laki', '1231', '12', 'china'),
(33, 'MAHAKAM RATIH PURUHITA', '2222-03-12 00:00:00', 'Perempuan', '1231', 'bca', 'United Kingdom'),
(34, 'asdjlal', '2222-12-12 00:00:00', 'Laki-Laki', '1312', 'bca', 'Indonesia'),
(35, 'kinaraAlg', '2222-02-12 00:00:00', 'Laki-Laki', '1231', 'PCI Blok C 22/07', 'Indonesia'),
(36, 'asdjlal', '2000-12-12 00:00:00', 'Perempuan', '1231', 'jsladjlas', 'Indonesia'),
(37, 'MAHAKAM RATIH PURUHITA', '2000-03-12 00:00:00', 'Laki-Laki', '1312', 'bca', 'indo'),
(38, 'Kinara Al G', '2000-03-17 00:00:00', 'Laki-Laki', '081803297782', 'PCI Blok C 22/07', 'Indonesia'),
(39, 'asdjlal', '2000-03-12 00:00:00', 'Laki-Laki', '1312', 'kfjsalsl', 'china'),
(40, 'Kinara Al Ghiffari', '2000-02-13 00:00:00', 'Laki-Laki', '1312', 'bca', 'Indonesia'),
(41, 'Kinara Al G', '2000-12-12 00:00:00', 'Laki-Laki', '1312', 'bca', 'Indonesia'),
(42, 'MAHAKAM RATIH PURUHITA', '2000-02-12 00:00:00', 'Laki-Laki', '1312', 'ajlakd', 'china');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tunai`
--

CREATE TABLE `tunai` (
  `ID_PEMBAYARAN` int(11) NOT NULL,
  `NO_KTP` char(16) NOT NULL,
  `ID_RESERVASI` int(11) DEFAULT NULL,
  `TANGGAL_PEMBAYARAN` datetime NOT NULL,
  `STATUS_PEMBAYARAN` varchar(10) NOT NULL,
  `TOTAL_PEMBAYARAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tunai`
--

INSERT INTO `tunai` (`ID_PEMBAYARAN`, `NO_KTP`, `ID_RESERVASI`, `TANGGAL_PEMBAYARAN`, `STATUS_PEMBAYARAN`, `TOTAL_PEMBAYARAN`) VALUES
(17, '123123', 18, '2122-12-12 00:00:00', '1', 13000),
(18, '120900', 19, '2000-02-01 00:00:00', '1', 13000),
(19, '14022', 20, '2000-03-15 00:00:00', '1', 175000),
(20, '0923291293', 21, '2000-04-01 00:00:00', '1', 1750000),
(21, '1231234', 22, '2000-12-13 00:00:00', '1', 13000),
(22, '123123', 23, '2000-02-23 00:00:00', 'Lunas', 1765000),
(22, '76372172', 23, '2000-02-23 00:00:00', 'Lunas', 1765000),
(23, '76372172', 24, '2222-03-12 00:00:00', 'Lunas', 13000),
(24, '131212', 25, '2000-07-13 00:00:00', 'Lunas', 13000),
(25, '123123', 26, '3000-03-12 00:00:00', 'Lunas', 13500),
(26, '0828321432', 27, '2020-03-19 00:00:00', 'Lunas', 2150000),
(27, '123123', 28, '2000-03-17 00:00:00', 'Lunas', 12),
(28, '98762', 29, '2000-02-12 00:00:00', 'Lunas', 13000),
(29, '08728312', 30, '2020-05-13 00:00:00', 'Lunas', 2000000),
(30, '091929283', 31, '2000-03-12 00:00:00', 'Lunas', 13000),
(31, '02341232', 32, '2001-12-12 00:00:00', 'Lunas', 2000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indeks untuk tabel `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD PRIMARY KEY (`ID_RESERVASI`,`ID_KAMAR`),
  ADD KEY `FK_TERMASUK` (`ID_KAMAR`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`ID_KAMAR`);

--
-- Indeks untuk tabel `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`,`NO_REKENING`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`),
  ADD KEY `FK_DITERUSKAN` (`ID_RESERVASI`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`ID_RESERVASI`),
  ADD KEY `FK_MELAKUKAN` (`ID_TAMU`),
  ADD KEY `FK_MEMVALIDASI` (`ID_ADMIN`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`ID_TAMU`);

--
-- Indeks untuk tabel `tunai`
--
ALTER TABLE `tunai`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`,`NO_KTP`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `ID_KAMAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `ID_PEMBAYARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `ID_RESERVASI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `ID_TAMU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD CONSTRAINT `FK_MENGHASILKAN` FOREIGN KEY (`ID_RESERVASI`) REFERENCES `reservasi` (`ID_RESERVASI`),
  ADD CONSTRAINT `FK_TERMASUK` FOREIGN KEY (`ID_KAMAR`) REFERENCES `kamar` (`ID_KAMAR`);

--
-- Ketidakleluasaan untuk tabel `kredit`
--
ALTER TABLE `kredit`
  ADD CONSTRAINT `FK_MELIPUTI2` FOREIGN KEY (`ID_PEMBAYARAN`) REFERENCES `pembayaran` (`ID_PEMBAYARAN`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `FK_DITERUSKAN` FOREIGN KEY (`ID_RESERVASI`) REFERENCES `reservasi` (`ID_RESERVASI`);

--
-- Ketidakleluasaan untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `FK_MELAKUKAN` FOREIGN KEY (`ID_TAMU`) REFERENCES `tamu` (`ID_TAMU`),
  ADD CONSTRAINT `FK_MEMVALIDASI` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Ketidakleluasaan untuk tabel `tunai`
--
ALTER TABLE `tunai`
  ADD CONSTRAINT `FK_MELIPUTI` FOREIGN KEY (`ID_PEMBAYARAN`) REFERENCES `pembayaran` (`ID_PEMBAYARAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
