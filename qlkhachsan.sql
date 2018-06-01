-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 01:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlkhachsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MADH` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `MATOUR` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYDAT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MADH`, `MATOUR`, `NGAYDAT`) VALUES
('DH001', 'T0001', '2018-05-31'),
('MHc4K', 'T0001', '2018-06-01'),
('MHRYf', 'T0001', '2018-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `dondattour`
--

CREATE TABLE `dondattour` (
  `MADH` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `TINHTRANG` bit(1) NOT NULL DEFAULT b'0',
  `SOLUONGNGUOI` int(11) NOT NULL,
  `MAKH` char(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dondattour`
--

INSERT INTO `dondattour` (`MADH`, `TINHTRANG`, `SOLUONGNGUOI`, `MAKH`) VALUES
('DH001', b'0', 2, 'KH001'),
('MHc4K', b'0', 2, 'KH001'),
('MHRYf', b'0', 2, 'KH001');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MAKH` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `USER_NAME` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ROLE_ID` tinyint(4) NOT NULL,
  `GIOITINH` bit(1) NOT NULL DEFAULT b'0',
  `HOTEN` varchar(30) CHARACTER SET utf8 NOT NULL,
  `DIACHI` varchar(50) CHARACTER SET utf8 NOT NULL,
  `SDT` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MAKH`, `USER_NAME`, `PASSWORD`, `ROLE_ID`, `GIOITINH`, `HOTEN`, `DIACHI`, `SDT`, `EMAIL`) VALUES
('KH001', 'lephu', '123', 1, b'1', 'phú mập heo', '82 nguyễn xí', '0123456789', 'phu@gmail.com'),
('KH002', 'lephu1', '1234', 0, b'1', 'phú mập heo', '82 nguyễn xí', '0123456789', 'phu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `MATOUR` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `DIADIEMTOUR` varchar(200) CHARACTER SET utf8 NOT NULL,
  `SOLUONGNGUOI` tinyint(4) NOT NULL,
  `NGAYDI` date NOT NULL,
  `NGAYVE` date NOT NULL,
  `DONGIA` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`MATOUR`, `DIADIEMTOUR`, `SOLUONGNGUOI`, `NGAYDI`, `NGAYVE`, `DONGIA`) VALUES
('T0001', 'TP.HCM - VŨNG TÀU', 10, '2018-06-15', '2018-06-18', 3000000),
('T0002', 'TP.HCM - ĐÀ LẠT', 20, '2018-06-07', '2018-06-10', 5000000),
('T0003', 'TP.HCM - PHAN THIẾT', 30, '2018-06-15', '2018-06-20', 5000000),
('T0004', 'TP.HCM - NHA TRANG', 30, '2018-06-10', '2018-06-13', 6000000),
('T0005', 'TP.HCM - ĐÀ NẴNG', 45, '2018-06-27', '2018-06-29', 20000000),
('T0006', 'TP.HCM - HÀ NỘI', 10, '2018-06-27', '2018-06-30', 20000000),
('T0007', 'TP.HCM - MŨI NÉ', 40, '2018-06-27', '2018-06-30', 20000000),
('T0008', 'TP.HCM - CẦN GIỜ', 40, '2018-06-20', '2018-06-25', 8000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MADH`,`MATOUR`),
  ADD KEY `FK_MATOUR` (`MATOUR`,`MADH`) USING BTREE;

--
-- Indexes for table `dondattour`
--
ALTER TABLE `dondattour`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `FK_MAKH` (`MAKH`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MAKH`) USING BTREE;

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`MATOUR`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `FK_MADH` FOREIGN KEY (`MADH`) REFERENCES `dondattour` (`MADH`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_MATOUR` FOREIGN KEY (`MATOUR`) REFERENCES `tour` (`MATOUR`) ON UPDATE CASCADE;

--
-- Constraints for table `dondattour`
--
ALTER TABLE `dondattour`
  ADD CONSTRAINT `FK_MAKH` FOREIGN KEY (`MAKH`) REFERENCES `taikhoan` (`MAKH`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
