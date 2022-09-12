-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 07:35 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raimu_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `face`
--

CREATE TABLE `face` (
  `kode` int(8) NOT NULL,
  `id` varchar(250) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenkel` varchar(50) NOT NULL,
  `tgl_lahir` varchar(250) NOT NULL,
  `goldar` varchar(250) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `total` varchar(5) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `hasil` int(1) NOT NULL,
  `tgl_sekarang` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `konfirmasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `face`
--

INSERT INTO `face` (`kode`, `id`, `nama`, `jenkel`, `tgl_lahir`, `goldar`, `alamat`, `total`, `fb`, `nohp`, `hasil`, `tgl_sekarang`, `image`, `konfirmasi`) VALUES
(27, '7', 'Suef', 'Male', '2019-04-23', 'O', 'stabat', '3', 'fb', '000', 3, '2019-04-22', '27.png', 3),
(28, '7', 'Setiawan', 'Male', '2019-04-23', 'O', 'stabat', '3', 'fb', '082161498056', 2, '2019-04-22', '28.png', 1),
(31, '7', 'rangga', 'Male', '16/01/1995', 'AB', 'newzaeland', '4', 'Rangga', '085276475777', 1, '2019-04-23', '31.png', 1),
(32, '7', 'Sipolan', 'Male', '2019-04-23', 'O', 'Stabat', '3', 'Facebook', '0821000000', 2, '2019-04-23', '32.png', 1),
(33, '6', 'llllll', 'Male', '2019-04-23', 'O', 'stabat', '3', 'facebook', '0000', 3, '2019-04-23', '33.png', 1),
(34, '7', 'Tesss', 'Male', '2019-04-01', 'O', 'sss', '8', 'aaaa', '0000', 4, '2019-04-23', '34.png', 1),
(37, '7', 'Dedek Setiawan', 'Male', '1995-07-08', 'O', 'Stabat', '3', 'Dedek Setiawan', '082161498056', 5, '2019-04-25', '35.png', 1),
(42, '7', 'cxxx', 'Female', '2019-04-26', 'B', 'ddf', '6', 'fff', '11', 6, '2019-04-25', '38.png', 1),
(43, '7', 'nsksk', 'Female', '2019-04-26', 'O', 'hsjs', '6', 'hsjsj', '55', 7, '2019-04-25', '43.png', 1),
(44, '6', 'akaka', 'Male', '2019-04-26', 'O', 'bsjs', '6', 'hsjs', '11', 8, '2019-04-25', '44.png', 1),
(45, '7', 'ksksk', 'Male', '2019-04-26', 'O', 'bsjs', '6', 'bsja', '111', 9, '2019-04-25', '45.png', 1),
(46, '7', 'sjaja', 'Male', '2019-04-27', 'O', 'haja', '7', 'bsja', '11', 0, '2019-04-25', '46.png', 0),
(47, '7', 'Tes terkahir', 'Male', '2019-04-26', 'O', 'hjj', '6', 'hjjj', '123', 0, '2019-04-25', '47.png', 0),
(48, '7', 'Setiawan Dedek', 'Male', '2019-04-28', 'O', 'Stabat', '8', 'Dedek', '1111', 0, '2019-04-28', '48.png', 0),
(49, '7', 'Dedek', 'Male', '2019-04-30', 'O', 'Stabat', '1', 'Fb', '12345678', 0, '2019-04-30', '49.png', 0),
(50, '7', 'Sipolan Loo', 'Male', '2019-04-30', 'O', 'Stabat', '1', 'Fb', '12345678', 0, '2019-04-30', '50.png', 0),
(51, '7', 'Tes Telegram', 'Male', '2019-04-30', 'O', 'Alamat', '1', 'Facebook', '11111', 0, '2019-04-30', '51.png', 0),
(52, '7', 'Sipolan', 'Male', '2019-05-02', 'O', 'Stabat', '1', 'Fb', '1234567890', 0, '2019-05-02', '52.png', 0),
(53, '7', 'ajaj', 'Male', '2019-05-03', 'O', 'banan', '2', 'hahaj', '123', 0, '2019-05-02', '53.png', 0),
(54, '7', 'Sipolan', 'Male', '2019-05-04', 'O', 'hsjsj', '3', 'hsjaja', '123456', 0, '2019-05-02', '54.png', 0),
(55, '7', 'rahmat', 'Male', '1985-12-03', 'AB', 'batang kuis', '2', 'rm noor', '08126341848', 0, '2019-05-03', '55.png', 0),
(56, '6', 'Dedek Setiawan Ganteng', 'Male', '1995-07-08', 'O', 'Stabat', '3', 'Dedek Ganteng', '082161498056', 0, '2019-05-03', '56.png', 0),
(61, '6', 'Jsks', 'Male', '2019-05-03', 'O', 'hsksks', '2', 'hssjj', '12345', 0, '2019-05-03', '57.png', 0),
(63, '7', 'bsksn', 'Male', '2019-05-03', 'O', 'bdmsn', '2', 'bsjsj', '111', 0, '2019-05-03', '62.png', 0),
(64, '7', 'kaka', 'Male', '2019-05-03', 'O', 'hsjsj', '2', 'hsjsj', '11', 0, '2019-05-03', '64.png', 0),
(65, '7', 'suhar', 'Male', '2019-05-10', 'O', 'j', '9', 'h', '3', 0, '2019-05-04', '65.png', 0),
(66, '7', 'M Sipolan', 'Male', '2019-05-04', 'O', 'Stabat', '3', 'Fb Aja', '123456789', 0, '2019-05-04', '66.png', 0),
(67, '7', 'ddd', 'Male', '2019-05-05', 'O', 'dff', '4', 'fff', '112', 0, '2019-05-04', '67.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ket_kepribadian`
--

CREATE TABLE `ket_kepribadian` (
  `id` int(2) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ket_kepribadian`
--

INSERT INTO `ket_kepribadian` (`id`, `keterangan`) VALUES
(1, 'The Thinker'),
(2, 'The King Maker'),
(3, 'The Diligent'),
(4, 'The Generous'),
(5, 'The Leader'),
(6, 'The Conceptor'),
(7, 'The Inspirator'),
(8, 'The Manager'),
(9, 'The Equalizer'),
(0, 'Belum Di periksa');

-- --------------------------------------------------------

--
-- Table structure for table `ket_konfirmasi`
--

CREATE TABLE `ket_konfirmasi` (
  `id` int(1) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ket_konfirmasi`
--

INSERT INTO `ket_konfirmasi` (`id`, `keterangan`) VALUES
(0, 'belum di konfirmasi'),
(1, 'terima'),
(2, 'tolak');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_detail_user`
--

CREATE TABLE `tabel_detail_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(15) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `level_akses` int(5) DEFAULT NULL,
  `level_penjualan` int(5) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `kuota` varchar(100) DEFAULT NULL,
  `tgl_daftar` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_detail_user`
--

INSERT INTO `tabel_detail_user` (`id`, `user_id`, `nama`, `tgl_lahir`, `email`, `password`, `level_akses`, `level_penjualan`, `foto`, `kuota`, `tgl_daftar`) VALUES
(1, 'dist01', 'suhar', '2013-05-06', 'suhardiansyah16@gmail.com', '12345', 1, 1, 'a', '10', '2019-04-08 23:15:06.000000'),
(2, 'dist02', 'jancuk', '2019-04-01', 'suhar.bisnis@gmail.com', '12345', 2, 2, 'b', '9', '2019-05-06 23:15:09.000000'),
(27, 'admin', 'admin raimu', '2019-05-16', 'admin@raimu.id', '8754cb9a658872aca7c3f1b8202224c270881c4721e68c3a48495b557646e3f9', 1, 1, 'WhatsApp_Image_2019-04-23_at_23_45_511.jpeg', '1000', NULL),
(28, 'admin', 'admin', '2019-05-09', 'admin@raimu.id', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 1, 1, 'WhatsApp_Image_2019-04-23_at_23_45_512.jpeg', '11111', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_keperibadian`
--

CREATE TABLE `tabel_keperibadian` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_keperibadian`
--

INSERT INTO `tabel_keperibadian` (`id`, `keterangan`) VALUES
(1, 'The Thinker'),
(2, 'The King Maker'),
(3, 'The Diligent'),
(4, 'The Generous'),
(5, 'The Leader'),
(6, 'The Conseptor'),
(7, 'The Inspirator'),
(8, 'The Manager'),
(9, 'The Equalizer');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_level_penjualan`
--

CREATE TABLE `tabel_level_penjualan` (
  `id_level_user` int(5) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_level_penjualan`
--

INSERT INTO `tabel_level_penjualan` (`id_level_user`, `keterangan`) VALUES
(1, 'Cabang'),
(2, 'Distributor'),
(3, 'tester');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_level_user`
--

CREATE TABLE `tabel_level_user` (
  `id_level_user` int(5) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_level_user`
--

INSERT INTO `tabel_level_user` (`id_level_user`, `keterangan`) VALUES
(1, 'Super User'),
(2, 'Administrator'),
(3, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `nama_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'Dashboard', 'dashboard', 'fas fa-tachometer-alt', 0),
(2, 'User Agent', '#', 'fas fa-chart-bar', 0),
(3, 'Daftar User', 'user_agent/list_user', 'fa fa-dashboard', 2),
(4, 'List Tester', 'tester', 'fa fa-dashboard', 2),
(5, 'Konfirmasi Pendaftaran', 'konfirmasi', 'far fa-check-square', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_face`
-- (See below for the actual view)
--
CREATE TABLE `v_face` (
`kode` int(8)
,`id` varchar(250)
,`nama` varchar(500)
,`jenkel` varchar(50)
,`tgl_lahir` varchar(250)
,`goldar` varchar(250)
,`alamat` varchar(500)
,`total` varchar(5)
,`fb` varchar(100)
,`nohp` varchar(50)
,`hasil` int(1)
,`tgl_sekarang` date
,`image` varchar(250)
,`konfirmasi` int(1)
,`keterangan_konfirmasi` varchar(20)
,`keterangan_kepribadian` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tbl_user`
-- (See below for the actual view)
--
CREATE TABLE `v_tbl_user` (
`id` int(11)
,`user_id` varchar(15)
,`nama` varchar(30)
,`tgl_lahir` date
,`email` varchar(35)
,`password` varchar(250)
,`level_akses` int(5)
,`level_penjualan` int(5)
,`foto` varchar(100)
,`kuota` varchar(100)
,`tgl_daftar` datetime(6)
,`level_user` varchar(20)
,`level_jual` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `v_face`
--
DROP TABLE IF EXISTS `v_face`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_face`  AS  select `face`.`kode` AS `kode`,`face`.`id` AS `id`,`face`.`nama` AS `nama`,`face`.`jenkel` AS `jenkel`,`face`.`tgl_lahir` AS `tgl_lahir`,`face`.`goldar` AS `goldar`,`face`.`alamat` AS `alamat`,`face`.`total` AS `total`,`face`.`fb` AS `fb`,`face`.`nohp` AS `nohp`,`face`.`hasil` AS `hasil`,`face`.`tgl_sekarang` AS `tgl_sekarang`,`face`.`image` AS `image`,`face`.`konfirmasi` AS `konfirmasi`,`ket_konfirmasi`.`keterangan` AS `keterangan_konfirmasi`,`ket_kepribadian`.`keterangan` AS `keterangan_kepribadian` from ((`face` join `ket_konfirmasi`) join `ket_kepribadian`) where ((`face`.`hasil` = `ket_kepribadian`.`id`) and (`face`.`konfirmasi` = `ket_konfirmasi`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_tbl_user`
--
DROP TABLE IF EXISTS `v_tbl_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tbl_user`  AS  select `tdu`.`id` AS `id`,`tdu`.`user_id` AS `user_id`,`tdu`.`nama` AS `nama`,`tdu`.`tgl_lahir` AS `tgl_lahir`,`tdu`.`email` AS `email`,`tdu`.`password` AS `password`,`tdu`.`level_akses` AS `level_akses`,`tdu`.`level_penjualan` AS `level_penjualan`,`tdu`.`foto` AS `foto`,`tdu`.`kuota` AS `kuota`,`tdu`.`tgl_daftar` AS `tgl_daftar`,`tlu`.`keterangan` AS `level_user`,`tlp`.`keterangan` AS `level_jual` from ((`tabel_detail_user` `tdu` join `tabel_level_user` `tlu`) join `tabel_level_penjualan` `tlp`) where ((`tdu`.`level_akses` = `tlu`.`id_level_user`) and (`tdu`.`level_penjualan` = `tlp`.`id_level_user`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `face`
--
ALTER TABLE `face`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `ket_konfirmasi`
--
ALTER TABLE `ket_konfirmasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_detail_user`
--
ALTER TABLE `tabel_detail_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_akses` (`level_akses`),
  ADD KEY `level_penjualan` (`level_penjualan`);

--
-- Indexes for table `tabel_keperibadian`
--
ALTER TABLE `tabel_keperibadian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_level_penjualan`
--
ALTER TABLE `tabel_level_penjualan`
  ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `tabel_level_user`
--
ALTER TABLE `tabel_level_user`
  ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `face`
--
ALTER TABLE `face`
  MODIFY `kode` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `ket_konfirmasi`
--
ALTER TABLE `ket_konfirmasi`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_detail_user`
--
ALTER TABLE `tabel_detail_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tabel_keperibadian`
--
ALTER TABLE `tabel_keperibadian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabel_level_penjualan`
--
ALTER TABLE `tabel_level_penjualan`
  MODIFY `id_level_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_level_user`
--
ALTER TABLE `tabel_level_user`
  MODIFY `id_level_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_detail_user`
--
ALTER TABLE `tabel_detail_user`
  ADD CONSTRAINT `tabel_detail_user_ibfk_1` FOREIGN KEY (`level_akses`) REFERENCES `tabel_level_user` (`id_level_user`),
  ADD CONSTRAINT `tabel_detail_user_ibfk_2` FOREIGN KEY (`level_penjualan`) REFERENCES `tabel_level_penjualan` (`id_level_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
