-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Nov 2018 pada 20.29
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unusa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `no` varchar(10) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`no`, `nim`, `namalengkap`, `jabatan`, `status`) VALUES
('1', '5130017001', 'Ahmad Romadhoni', 'DIVISI KEROHANIAN (KOOR)', 'LULUS'),
('2', '5130017002', 'Intan Melinda', 'BENDAHARA', 'LULUS'),
('3', '5130017003', 'Alifia Nur Fadlilah ', 'DIVISI PSDM', 'LULUS'),
('4', '5130017010', 'Erika Rinanda Putri', 'DIVISI HUMAS', 'LULUS'),
('5', '5130017013', 'Ayik Auliyaur Rasyid', 'DIVISI HUMAS', 'LULUS'),
('6', '5130017015', 'Thufailbinjubair', 'DIVISI HUMAS (KOOR)', 'LULUS'),
('7', '5130017016', 'Mukhammad Ainul Yaqin', 'DIVISI PSDM', 'LULUS'),
('8', '5130017021', 'Tiamita Gea Nuraini', 'DIVISI SENI DAN OLAHRAGA', 'LULUS'),
('9', '5130017022', 'Muhammad Adam Rifqi', 'DIVISI PSDM ', 'LULUS'),
('10', '5130017025', 'Risdiana ragil putri', 'DIVISI HUMAS', 'TIDAK LULUS'),
('11', '5130017027', 'Viola Elza Hikmanda', 'DIVISI KEWIRAUSAHAAN (KOOR)', 'LULUS'),
('12', '5130017033', 'Cucu Auliya ', 'DIVISI KEWIRAUSAHAAN', 'LULUS'),
('13', '5130017034', 'LAILA ALFI SAHRIN', 'SEKRETARIS', 'LULUS'),
('14', '5130017035', 'AHMAD ZIYADUL HAQ', 'DIVISI PENDIDIKAN', 'LULUS'),
('15', '5130017038', 'Amalia lasulfah', 'DIVISI KEROHANIAN', 'LULUS'),
('16', '5130017039', 'Layyinatusy Syifa''', 'DIVISI PENDIDIKAN', 'LULUS'),
('17', '5130017043', 'Pasihul Lisan', 'DIVISI KEROHANIAN', 'LULUS'),
('18', '5130017047', 'Rizkiyani Hijriyah', 'DIVISI PENDIDIKAN (KOOR)', 'LULUS'),
('19', '5130017050', 'Afifah putri', 'DIVISI PSDM (Pengembangan Sumber Daya Manusia);DIV', 'TIDAK LULUS'),
('20', '5130017051', 'Moh. Riswanto', 'DIVISI PSDM (KOOR)', 'LULUS'),
('21', '5130017054', 'Azrida Ayu Rahmania', 'SEKRETARIS', 'LULUS'),
('22', '5130017055', 'Moh. Adi Bayu Dwi Putra', 'BENDAHARA', 'LULUS'),
('23', '5130017056', 'Mochammad Choirudin', 'DIVISI SENI DAN OLAHRAGA (KOOR)', 'LULUS'),
('24', '5130017057', 'afif khoiruddin', 'DIVISI KEWIRAUSAHAAN', 'LULUS'),
('25', '5130017058', 'Siti alfia', 'DIVISI KEROHANIAN;DIVISI SENI DAN OLAHRAGA', 'TIDAK LULUS'),
('26', '5130017059', 'Dwi Nuraini H', 'DIVISI KEROHANIAN;DIVISI SENI DAN OLAHRAGA', 'LULUS'),
('27', '5130017060', 'Ahmad Samma Usamah', 'DIVISI HUMAS', 'LULUS'),
('28', '5130017062', 'Abdullah', 'DIVISI KEROHANIAN', 'LULUS'),
('29', '5130018001', 'Vika wulandari', 'DIVISI KEWIRAUSAHAAN', 'LULUS'),
('30', '5130018002', 'Muhammad fachruddin', 'DIVISI KEROHANIAN', 'LULUS'),
('31', '5130018003', 'Inayatus Sholikhah', 'BENDAHARA;DIVISI HUMAS', 'TIDAK LULUS'),
('32', '5130018005', 'Reza Rizky Pratama ', 'DIVISI SENI DAN OLAHRAGA', 'LULUS'),
('33', '5130018013', 'Tika Indriani', 'DIVISI PSDM (Pengembangan Sumber Daya Manusia);DIV', 'TIDAK LULUS'),
('34', '5130018014', 'Moh Nurholis', 'DIVISI KEWIRAUSAHAAN', 'LULUS'),
('35', '5130018017', 'Muhammad Afton Ilman Huda', 'DIVISI SENI DAN OLAHRAGA', 'TIDAK LULUS'),
('36', '5130018019', 'Jenny Yahya', 'DIVISI SENI DAN OLAHRAGA', 'TIDAK LULUS'),
('37', '5130018024', 'Rosyad Alwan', 'DIVISI PSDM', 'LULUS'),
('38', '5130018042', 'Era Aktoria Ramli', 'DIVISI KEWIRAUSAHAAN;DIVISI SENI DAN OLAHRAGA', 'TIDAK LULUS'),
('39', '5130018073', 'Siti Hajar', 'DIVISI PENDIDIKAN', 'LULUS'),
('40', '5130018082', 'Fadhilah Aulia Febrianti', 'DIVISI KEROHANIAN', 'LULUS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
