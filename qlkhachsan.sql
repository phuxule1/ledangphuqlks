-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 02:01 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
-- Table structure for table `chitietdatphong`
--

CREATE TABLE `chitietdatphong` (
  `ma_CTHD` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_HD` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_KS` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_phong` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `MAKH` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `SL` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `ngay_den` date NOT NULL,
  `ngay_di` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
('MHBwg', 'T0001', '2018-06-02'),
('MHhgj', 'T0001', '2018-06-02'),
('MHmza', 'T0001', '2018-06-02'),
('MHV6S', 'T0001', '2018-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `dondatphong`
--

CREATE TABLE `dondatphong` (
  `ma_HD` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_KS` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `MAKH` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_lap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
('MHBwg', b'0', 2, 'KH001'),
('MHhgj', b'0', 2, 'KH001'),
('MHmza', b'0', 2, 'KH001'),
('MHV6S', b'0', 2, 'KH001');

-- --------------------------------------------------------

--
-- Table structure for table `khachsan`
--

CREATE TABLE `khachsan` (
  `ma_KS` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ten_KS` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_thieu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachsan`
--

INSERT INTO `khachsan` (`ma_KS`, `ten_KS`, `gioi_thieu`, `hinh_1`, `hinh_2`, `dia_chi`, `SDT`) VALUES
('MKS01', 'Khách sạn A', 'sdfsdfsd', 'khach_san_A_1.jpg', 'khách_sạn_Á hình 2', 'Đà Lạt', '0987654321'),
('MKS02', 'Khách sạn B', 'dfdfbdfbdfvdf', 'khach_san_B_1.jpg', 'Khach_san_B hình 2', 'Đà Lạt', '1234567890'),
('MKS03', 'Khách sạn C', 'dfgfdgdfgdf', 'hình C 1', 'hình C 2', 'Đà lạt', '1234509876');

-- --------------------------------------------------------

--
-- Table structure for table `loai_phong`
--

CREATE TABLE `loai_phong` (
  `ma_loai` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ten_loai` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_phong`
--

INSERT INTO `loai_phong` (`ma_loai`, `ten_loai`) VALUES
('ML001', 'Phòng đơn'),
('ML002', 'Phòng đôi');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `ma_phong` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_KS` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `SL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`ma_phong`, `ma_KS`, `ma_loai`, `gia`, `SL`) VALUES
('MP001', 'MKS01', 'ML001', 200000, 10),
('MP002', 'MKS01', 'ML002', 300000, 20),
('MP003', 'MKS02', 'ML001', 250000, 20),
('MP004', 'MKS02', 'ML002', 450000, 20);

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
  `LOTRINH` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SOLUONGNGUOI` tinyint(4) NOT NULL,
  `NGAYDI` date NOT NULL,
  `NGAYVE` date NOT NULL,
  `DONGIA` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`MATOUR`, `DIADIEMTOUR`, `LOTRINH`, `SOLUONGNGUOI`, `NGAYDI`, `NGAYVE`, `DONGIA`) VALUES
('T0001', 'TP.HCM - VŨNG TÀU', 'TP.HCM - PHÀ CÁT LÁI - QL51 - VŨNG TÀU', 10, '2018-06-15', '2018-06-18', 3000000),
('T0002', 'TP.HCM - ĐÀ LẠT', 'TP.HCM - LONG THÀNH - QL20 - ĐÀ LẠT', 20, '2018-06-07', '2018-06-10', 5000000),
('T0003', 'TP.HCM - PHAN THIẾT', 'TP.HCM - LONG THÀNH - QL1A PHAN THIẾT', 30, '2018-06-15', '2018-06-20', 5000000),
('T0004', 'TP.HCM - NHA TRANG', 'TP.HCM - TRƯỜNG CHINH - LONG THÀNH - QL27C - NHA TRANG', 30, '2018-06-10', '2018-06-13', 6000000),
('T0005', 'TP.HCM - ĐÀ NẴNG', 'TP.HCM - QL14 - QL1A ĐÀ NẴNG', 45, '2018-06-27', '2018-06-29', 20000000),
('T0006', 'TP.HCM - HÀ NỘI', 'TP.HCM - QL22 - QL14 - QL1 - QL6 - HÀ NỘI', 10, '2018-06-27', '2018-06-30', 20000000),
('T0007', 'TP.HCM - MŨI NÉ', 'TP.HCM - LONG THÀNH - QL1A - MŨI NÉ', 40, '2018-06-27', '2018-06-30', 20000000),
('T0008', 'TP.HCM - CẦN GIỜ', 'TP.HCM - QL50 - ĐI PHÀ - LÝ NHƠN - CẦN GIỜ', 40, '2018-06-20', '2018-06-25', 8000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdatphong`
--
ALTER TABLE `chitietdatphong`
  ADD PRIMARY KEY (`ma_CTHD`),
  ADD KEY `ma_phong` (`ma_phong`),
  ADD KEY `ma_HD` (`ma_HD`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MADH`,`MATOUR`),
  ADD KEY `FK_MATOUR` (`MATOUR`,`MADH`) USING BTREE;

--
-- Indexes for table `dondatphong`
--
ALTER TABLE `dondatphong`
  ADD PRIMARY KEY (`ma_HD`),
  ADD KEY `MAKH` (`MAKH`);

--
-- Indexes for table `dondattour`
--
ALTER TABLE `dondattour`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `FK_MAKH` (`MAKH`);

--
-- Indexes for table `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`ma_KS`);

--
-- Indexes for table `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`ma_phong`),
  ADD KEY `ma_KS` (`ma_KS`),
  ADD KEY `ma_loai` (`ma_loai`);

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
-- Constraints for table `chitietdatphong`
--
ALTER TABLE `chitietdatphong`
  ADD CONSTRAINT `ma_HD` FOREIGN KEY (`ma_HD`) REFERENCES `dondatphong` (`ma_HD`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ma_phong` FOREIGN KEY (`ma_phong`) REFERENCES `phong` (`ma_phong`) ON UPDATE CASCADE;

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `FK_MADH` FOREIGN KEY (`MADH`) REFERENCES `dondattour` (`MADH`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_MATOUR` FOREIGN KEY (`MATOUR`) REFERENCES `tour` (`MATOUR`) ON UPDATE CASCADE;

--
-- Constraints for table `dondatphong`
--
ALTER TABLE `dondatphong`
  ADD CONSTRAINT `MAKH` FOREIGN KEY (`MAKH`) REFERENCES `taikhoan` (`MAKH`) ON UPDATE CASCADE;

--
-- Constraints for table `dondattour`
--
ALTER TABLE `dondattour`
  ADD CONSTRAINT `FK_MAKH` FOREIGN KEY (`MAKH`) REFERENCES `taikhoan` (`MAKH`) ON UPDATE CASCADE;

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `ma_KS` FOREIGN KEY (`ma_KS`) REFERENCES `khachsan` (`ma_KS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ma_loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai_phong` (`ma_loai`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
