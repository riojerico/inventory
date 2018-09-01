-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2018 at 02:21 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--
CREATE DATABASE `inventory` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inventory`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(16) NOT NULL,
  `id_jenis` varchar(10) NOT NULL,
  `nm_barang` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_jenis`, `nm_barang`, `stok`, `satuan`) VALUES
('001-0317', '003', 'Tinta Black Siegerk', 300, 'pcs'),
('002-0417', '002', 'Pisau Perforasi', 74, 'pcs'),
('003-0417', '1212', 'Blue Wash', 160, 'jerigen'),
('004-0417', '005', 'Lakban', 112, 'roll'),
('005-0417', '005', 'Pastapur', 3, 'jerigen'),
('006-0417', '1212', 'NaOH', 50, 'liter'),
('007', '005', 'tes', 65, 'pcs'),
('008-0417', '1212', 'Butil Acetat', 95, 'kg'),
('009-0417', '001', 'BUKU', -1, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `id_keluar` varchar(30) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `id_user` varchar(16) NOT NULL,
  `id_outlet` varchar(16) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_keluar`, `tgl_keluar`, `id_user`, `id_outlet`, `time`) VALUES
('OUT0419201700001', '2017-04-19', 'user1', '555', '2017-04-19 15:54:52'),
('OUT0420201700002', '2017-04-20', 'admin', 'FNS', '2017-04-20 12:47:48'),
('OUT0420201700003', '2017-04-20', 'admin', 'ISO', '2017-04-20 12:52:11'),
('OUT0420201700004', '2017-04-20', 'admin', 'PRD', '2017-04-20 12:54:39'),
('OUT0420201700005', '2017-04-20', 'admin', 'IT', '2017-04-20 12:59:18'),
('OUT0420201700006', '2017-04-20', 'admin', 'PRD', '2017-04-20 13:46:41'),
('OUT0420201700007', '2017-04-20', 'admin', 'FNS', '2017-04-20 13:56:58'),
('OUT0420201700008', '2017-04-20', 'admin', 'PRD', '2017-04-20 14:00:49'),
('OUT0420201700009', '2017-04-20', 'admin', 'PRD', '2017-04-20 14:04:27'),
('OUT0420201700010', '2017-04-20', 'admin', 'FNS', '2017-04-20 14:04:57'),
('OUT0420201700011', '2017-04-20', 'admin', 'FNS', '2017-04-20 14:06:32'),
('OUT0420201700012', '2017-04-20', 'a', 'PRD', '2017-04-20 14:55:51'),
('OUT0420201700013', '2017-04-20', 'a', 'FNS', '2017-04-20 16:15:19'),
('OUT0420201700014', '2017-04-20', 'a', 'FNS', '2017-04-20 16:44:29'),
('OUT0420201700015', '2017-04-20', 'a', 'FNS', '2017-04-20 17:04:22'),
('OUT0420201700016', '2017-04-20', 'a', 'FNS', '2017-04-20 17:07:27'),
('OUT0420201700017', '2017-04-20', 'a', 'FNS', '2017-04-20 17:18:01'),
('OUT0420201700018', '2017-04-20', 'a', 'FNS', '2017-04-20 17:18:52'),
('OUT0420201700019', '2017-04-20', 'a', 'FNS', '2017-04-20 17:20:37'),
('OUT0420201700020', '2017-04-20', 'a', 'FNS', '2017-04-20 17:58:34'),
('OUT0420201700021', '2017-04-20', 'admin', 'PRD', '2017-04-20 19:01:13'),
('OUT0420201700022', '2017-04-20', 'admin', 'FNS', '2017-04-20 19:03:01'),
('OUT0420201700023', '2017-04-20', 'admin', 'PRD', '2017-04-20 19:51:51'),
('OUT0420201700024', '2017-04-20', 'admin', 'FNS', '2017-04-20 19:53:19'),
('OUT0721201800027', '2018-07-21', 'siti', 'PRD', '2018-07-21 19:50:50'),
('OUT1013201700025', '2017-10-13', 'siti', 'FNS', '2017-10-13 13:34:44'),
('OUT1016201700026', '2017-10-16', 'siti', 'FNS', '2017-10-16 16:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `id_masuk` varchar(16) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_user` varchar(16) NOT NULL,
  `id_supplier` varchar(16) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_masuk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_masuk`, `tgl_masuk`, `id_user`, `id_supplier`, `time`) VALUES
('IN/TMG/042020170', '2017-04-20', 'admin', '004LPP', '2017-04-20 10:39:43'),
('INTC042020170000', '2017-04-20', 'a', '002PDPPML', '2017-04-20 14:40:07'),
('RES0419201700001', '2017-04-19', 'user1', '002PDPPML', '2017-04-19 12:55:36'),
('RES0419201700002', '2017-04-19', 'user1', '002PDPPML', '2017-04-19 13:15:20'),
('RES0419201700003', '2017-04-19', 'user1', '001PBT', '2017-04-19 14:02:22'),
('RES0419201700004', '2017-04-19', 'user1', '001PBT', '2017-04-19 14:05:47'),
('RES0420201700005', '2017-04-20', 'a', '003TJIWI', '2017-04-20 14:38:34'),
('RES0420201700006', '2017-04-20', 'a', '004LPP', '2017-04-20 14:41:15'),
('RES0420201700007', '2017-04-20', 'a', '003TJIWI', '2017-04-20 14:45:25'),
('RES0420201700008', '2017-04-20', 'a', '005SM', '2017-04-20 14:46:44'),
('RES0420201700009', '2017-04-20', 'a', '003TJIWI', '2017-04-20 14:48:01'),
('RES0420201700010', '2017-04-20', 'a', '005SM', '2017-04-20 14:49:27'),
('RES0420201700011', '2017-04-20', 'a', '003TJIWI', '2017-04-20 14:50:35'),
('RES0420201700012', '2017-04-20', 'a', '004LPP', '2017-04-20 14:52:01'),
('RES0420201700013', '2017-04-20', 'a', '004LPP', '2017-04-20 14:53:37'),
('RES0420201700014', '2017-04-20', 'a', '002PDPPML', '2017-04-20 14:55:28'),
('RES0420201700015', '2017-04-20', 'a', '003TJIWI', '2017-04-20 14:59:07'),
('RES0420201700016', '2017-04-20', 'a', '004LPP', '2017-04-20 15:29:21'),
('RES0420201700017', '2017-04-20', 'a', '001PBT', '2017-04-20 16:00:01'),
('RES0420201700018', '2017-04-20', 'a', '001PBT', '2017-04-20 16:04:44'),
('RES0420201700019', '2017-04-20', 'a', '005SM', '2017-04-20 16:09:33'),
('RES0420201700020', '2017-04-20', 'a', '001PBT', '2017-04-20 16:10:38'),
('RES0420201700021', '2017-04-20', 'a', '005SM', '2017-04-20 16:11:51'),
('RES0420201700022', '2017-04-20', 'a', '001PBT', '2017-04-20 16:13:49'),
('RES0420201700023', '2017-04-20', 'a', '003TJIWI', '2017-04-20 17:41:55'),
('RES0420201700024', '2017-04-20', 'a', '005SM', '2017-04-20 17:50:50'),
('RES0420201700025', '2017-04-20', 'a', '005SM', '2017-04-20 17:53:10'),
('RES0420201700026', '2017-04-20', 'a', '001PBT', '2017-04-20 18:12:12'),
('RES0420201700027', '2017-04-20', 'a', '004LPP', '2017-04-20 18:15:44'),
('RES0420201700028', '2017-04-20', 'admin', '001PBT', '2017-04-20 18:54:35'),
('RES0420201700029', '2017-04-20', 'admin', '001PBT', '2017-04-20 18:56:52'),
('RES0420201700030', '2017-04-20', 'admin', '001PBT', '2017-04-20 18:58:55'),
('RES0420201700031', '2017-04-20', 'admin', '003TJIWI', '2017-04-20 19:50:22'),
('RES0721201800034', '2018-07-21', 'siti', '002PDPPML', '2018-07-21 19:57:17'),
('RES1013201700032', '2017-10-13', 'siti', '002PDPPML', '2017-10-13 13:28:01'),
('RES1016201700033', '2017-10-16', 'siti', '002PDPPML', '2017-10-16 16:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `barang_outlet`
--

CREATE TABLE IF NOT EXISTS `barang_outlet` (
  `id_outlet` varchar(16) NOT NULL,
  `id_barang` varchar(16) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_outlet`
--

INSERT INTO `barang_outlet` (`id_outlet`, `id_barang`, `stok`) VALUES
('RB001', 'B00000001', 103),
('RB001', 'B00000002', 20),
('RB001', 'B00000003', 84),
('RB001', 'B00000004', 30),
('RB001', 'B00000005', 20),
('RB005', 'B00000001', 8),
('Saya', 'B001', 3),
('101', 'b01', 5),
('101', '005', 50),
('101', '111', 218),
('101', '112', 23),
('555', '002-0417', 10),
('FNS', '004-0417', 5),
('ISO', '004-0417', 2),
('PRD', '004-0417', 93),
('IT', '004-0417', 1),
('PRD', '003-0417', 6),
('FNS', '003-0417', 2),
('PRD', '001-0317', 5),
('FNS', '001-0317', 2),
('FNS', '007', 12);

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang_keluar`
--

CREATE TABLE IF NOT EXISTS `detail_barang_keluar` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_keluar` varchar(16) NOT NULL,
  `id_barang` varchar(16) NOT NULL,
  `stok_awal` int(11) NOT NULL,
  `jml_keluar` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `detail_barang_keluar`
--

INSERT INTO `detail_barang_keluar` (`no`, `id_keluar`, `id_barang`, `stok_awal`, `jml_keluar`, `time`) VALUES
(1, 'OUT0419201700001', '002-0417', 25, 10, '2017-04-19 15:54:31'),
(2, 'OUT0420201700002', '004-0417', 47, 5, '2017-04-20 12:47:42'),
(3, 'OUT0420201700003', '004-0417', 42, 2, '2017-04-20 12:52:05'),
(4, 'OUT0420201700004', '004-0417', 40, 3, '2017-04-20 12:54:21'),
(5, 'OUT0420201700014', '007', 10, 9, '2017-04-20 16:38:55'),
(6, 'OUT0420201700015', '007', 1, 1, '2017-04-20 17:04:13'),
(7, 'OUT0420201700016', '004-0417', 193, 90, '2017-04-20 17:07:20'),
(8, 'OUT0420201700017', '004-0417', 103, 90, '2017-04-20 17:17:54'),
(9, 'OUT0420201700018', '003-0417', 147, 7, '2017-04-20 17:18:46'),
(10, 'OUT0420201700019', '004-0417', 13, 1, '2017-04-20 17:20:30'),
(11, 'OUT0420201700020', '007', 180, 20, '2017-04-20 17:58:26'),
(12, 'OUT0420201700021', '008-0417', 40, 9, '2017-04-20 19:01:04'),
(13, 'OUT0420201700022', '008-0417', 31, 1, '2017-04-20 19:02:58'),
(14, 'OUT0420201700023', '008-0417', 100, 5, '2017-04-20 19:51:35'),
(15, 'OUT0420201700024', '009-0417', 0, 1, '2017-04-20 19:53:12'),
(16, 'OUT1013201700025', '007', 166, 3, '2017-10-13 13:34:34'),
(17, 'OUT1016201700026', '007', 166, 6, '2017-10-16 16:39:32'),
(18, 'OUT0721201800027', '005-0417', 5, 1, '2018-07-21 19:50:33'),
(19, 'OUT0721201800027', '007', 162, 2, '2018-07-21 19:57:31'),
(20, 'OUT0721201800027', '005-0417', 4, 1, '2018-07-21 20:07:39'),
(21, 'OUT0721201800027', '007', 160, 90, '2018-07-21 20:09:07'),
(22, 'OUT0721201800027', '007', 70, 2, '2018-07-21 20:11:04'),
(23, 'OUT0721201800027', '007', 68, 1, '2018-07-21 20:11:39'),
(24, 'OUT0721201800027', '007', 67, 1, '2018-07-21 20:12:35'),
(25, 'OUT0721201800027', '007', 66, 1, '2018-07-21 20:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang_masuk`
--

CREATE TABLE IF NOT EXISTS `detail_barang_masuk` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_masuk` varchar(16) NOT NULL,
  `id_barang` varchar(16) NOT NULL,
  `stok_awal` int(11) NOT NULL,
  `jml_masuk` int(11) NOT NULL,
  `hrg_beli` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `detail_barang_masuk`
--

INSERT INTO `detail_barang_masuk` (`no`, `id_masuk`, `id_barang`, `stok_awal`, `jml_masuk`, `hrg_beli`, `sub_total`, `time`) VALUES
(13, 'RES0420201700018', '001-0317', 0, 30, 0, 0, '2017-04-20 16:04:12'),
(14, 'RES0420201700019', '006-0417', 0, 20, 0, 0, '2017-04-20 16:08:52'),
(15, 'RES0420201700020', '006-0417', 0, 10, 0, 0, '2017-04-20 16:10:33'),
(16, 'RES0420201700021', '006-0417', 0, 10, 0, 0, '2017-04-20 16:11:44'),
(17, 'RES0420201700022', '007', 0, 22, 0, 0, '2017-04-20 16:13:24'),
(18, 'RES0420201700023', '003-0417', 0, 20, 0, 0, '2017-04-20 17:41:47'),
(19, 'RES0420201700024', '007', 0, 100, 0, 0, '2017-04-20 17:50:44'),
(20, 'RES0420201700025', '007', 100, 80, 0, 0, '2017-04-20 17:53:04'),
(21, 'RES0420201700026', '004-0417', 12, 100, 0, 0, '2017-04-20 18:11:57'),
(22, 'RES0420201700027', '001-0317', 232, 68, 0, 0, '2017-04-20 18:15:39'),
(23, 'RES0420201700028', '008-0417', 0, 12, 0, 0, '2017-04-20 18:54:32'),
(24, 'RES0420201700029', '008-0417', 12, 24, 0, 0, '2017-04-20 18:56:48'),
(25, 'RES0420201700030', '008-0417', 36, 4, 0, 0, '2017-04-20 18:58:51'),
(26, 'RES0420201700031', '008-0417', 30, 70, 0, 0, '2017-04-20 19:50:03'),
(27, 'RES1013201700032', '', 0, 0, 0, 0, '2017-10-13 13:26:21'),
(28, 'RES1013201700032', '007', 160, 6, 0, 0, '2017-10-13 13:26:56'),
(29, 'RES1016201700033', '007', 163, 3, 0, 0, '2017-10-16 16:35:09'),
(30, 'RES0721201800034', '007', 160, 2, 0, 0, '2018-07-21 19:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `detail_jual`
--

CREATE TABLE IF NOT EXISTS `detail_jual` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_jual` varchar(30) NOT NULL,
  `id_barang` varchar(16) NOT NULL,
  `stok_awal` int(11) NOT NULL,
  `jml` int(11) NOT NULL,
  `hrg_jual` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `detail_jual`
--


-- --------------------------------------------------------

--
-- Table structure for table `detail_retur`
--

CREATE TABLE IF NOT EXISTS `detail_retur` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_retur` varchar(16) NOT NULL,
  `id_barang` varchar(16) NOT NULL,
  `stok_awal` int(11) NOT NULL,
  `jml` int(11) NOT NULL,
  `hrg` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `detail_retur`
--


-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE IF NOT EXISTS `jenis_barang` (
  `id_jenis` varchar(10) NOT NULL,
  `nm_jenis` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `nm_jenis`) VALUES
('001', 'ATK'),
('002', 'Sparepart'),
('003', 'Tinta'),
('004', 'Karton'),
('005', 'Bahan Penunjang'),
('1212', 'chemical');

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE IF NOT EXISTS `outlet` (
  `id_outlet` varchar(16) NOT NULL,
  `nm_outlet` varchar(30) NOT NULL,
  `almt_outlet` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_outlet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nm_outlet`, `almt_outlet`, `password`) VALUES
('FNS', 'FINISHING', 'SECURITY PRINTING', 'FNSJUGA'),
('GA', 'GENERAL AFFAIR', 'HOLDING', 'GAJUGA'),
('ISO', 'QHSE', 'HOLDING', 'ISOJUGA'),
('IT', 'IT', 'HOLDING', 'ITJUGA'),
('MKT', 'MARKETING', 'SECURITY PRINTING', 'MKTJUGA'),
('PRC', 'PURCHASING', 'SECURITY PRINTING', 'PRCJUGA'),
('PRD', 'PRODUCTION', 'SECURITY PRINTING', 'PRDJUGA'),
('TKS', 'TEKNISI', 'SECURITY PRINTING', 'TKSJUGA');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `id_jual` varchar(30) NOT NULL,
  `tgl_jual` date NOT NULL,
  `pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `id_outlet` varchar(16) NOT NULL,
  `total` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ket` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jual`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--


-- --------------------------------------------------------

--
-- Table structure for table `retur_barang`
--

CREATE TABLE IF NOT EXISTS `retur_barang` (
  `id_retur` varchar(16) NOT NULL,
  `id_transaksi` varchar(16) NOT NULL,
  `id_user` varchar(16) NOT NULL,
  `tgl_retur` date NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_retur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retur_barang`
--


-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` varchar(16) NOT NULL,
  `nm_supplier` varchar(30) NOT NULL,
  `almt_supplier` varchar(100) NOT NULL,
  `tlp_supplier` varchar(12) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nm_supplier`, `almt_supplier`, `tlp_supplier`) VALUES
('001PBT', 'PT. Pura Barutama', 'JL. AKBP Agil Kusumadya KM. 04, Jati Wetan, Jati, Kab. Kudus - Jawa Tengah (59346)', '0291-444631'),
('002PDPPML', 'PT. Pindo Deli Pulp and Paper ', 'Jalan Prof. Dr. Ir. H. Soetami No.88, Kel. Adirasa, Karawang - Indonesia (41313)', '024-660434'),
('003TJIWI', 'PT. Pabrik Kertas Tjiwi Kimia ', 'Jalan Raya Surabaya - Mojokerto KM. 44, Mojokerto - Jawa Timur (61301)', '032-650768'),
('004LPP', 'PT. Lontar Papyrus Pulp & Pape', 'Jalan Ir. H. Juanda No. 14, Simang III Sipin, Kota Baru - Jambi', '0741-65930'),
('005SM', 'PT. Sukses Makmur', 'Jalan Cendrawasih No. 9 Malang, Jawa Timur', '0321-760555');

-- --------------------------------------------------------

--
-- Table structure for table `temp_barang`
--

CREATE TABLE IF NOT EXISTS `temp_barang` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_trx` varchar(30) NOT NULL,
  `id_barang` varchar(16) NOT NULL,
  `jml` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `temp_barang`
--

INSERT INTO `temp_barang` (`no`, `id_trx`, `id_barang`, `jml`, `time`) VALUES
(1, 'RES0405201700001', '', 0, '2017-04-05 17:51:40'),
(2, 'RES0405201700001', '', 0, '2017-04-05 17:52:21'),
(3, 'RES0405201700001', '', 0, '2017-04-05 17:52:23'),
(5, 'RES0405201700001', '001-0317', 10, '2017-04-05 18:31:43'),
(6, 'OUT0405201700001', '001-0317', 2, '2017-04-05 18:32:02'),
(7, 'RES0412201700001', '002-0417', 20, '2017-04-12 18:23:05'),
(8, 'OUT0412201700001', '002-0417', 2, '2017-04-12 18:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(16) NOT NULL,
  `nm_user` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `password`, `level`) VALUES
('admin', 'gudang', 'admin', 'admin 1'),
('siti', 'siti', 'siti', 'it'),
('user1', 'purchasing', 'user1', 'admin 2'),
('user2', 'ppic', 'user2', 'viewer'),
('user3', 'pimpinan', 'user3', 'viewer');
