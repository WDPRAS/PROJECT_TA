-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2022 pada 03.47
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_ref`
--

CREATE TABLE `absen_ref` (
  `kd_absen` varchar(5) NOT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `deskrip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen_ref`
--

INSERT INTO `absen_ref` (`kd_absen`, `ket`, `deskrip`) VALUES
('a', 'alasan', 'tanpa alasan'),
('i', 'ijin', 'izin per surat'),
('s', 'sakit', 'sakit dengan keterangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_absen`
--

CREATE TABLE `data_absen` (
  `kode_presensi` int(11) NOT NULL,
  `id_siswa` varchar(5) DEFAULT NULL,
  `ket` varchar(50) NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` varchar(5) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `asal_sekolah` varchar(50) DEFAULT NULL,
  `nomor` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama`, `asal_sekolah`, `nomor`) VALUES
('1', 'indah ', 'smk negeri 1  udanawu', 857488944);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen_ref`
--
ALTER TABLE `absen_ref`
  ADD PRIMARY KEY (`kd_absen`);

--
-- Indeks untuk tabel `data_absen`
--
ALTER TABLE `data_absen`
  ADD PRIMARY KEY (`kode_presensi`),
  ADD KEY `siswa` (`id_siswa`),
  ADD KEY `keterangan` (`ket`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_absen`
--
ALTER TABLE `data_absen`
  MODIFY `kode_presensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_absen`
--
ALTER TABLE `data_absen`
  ADD CONSTRAINT `keterangan` FOREIGN KEY (`ket`) REFERENCES `absen_ref` (`kd_absen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
