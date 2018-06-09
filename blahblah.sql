-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 01:04 PM
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
-- Table structure for table `chitietdatphong`
--

CREATE TABLE `chitietdatphong` (
  `ma_HD` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_KS` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_phong` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `SL` int(11) NOT NULL,
  `ngay_den` date NOT NULL,
  `ngay_di` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdatphong`
--

INSERT INTO `chitietdatphong` (`ma_HD`, `ma_KS`, `ma_phong`, `SL`, `ngay_den`, `ngay_di`) VALUES
('HDbUt', '1', '1', 33, '2018-06-20', '2018-06-22'),
('HDcGl', '1', '1', 2, '2018-06-19', '2018-06-17');

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
('MHRYf', 'T0001', '2018-06-01'),
('MHttz', 'T0001', '2018-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `matn` char(5) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`matn`, `hoten`, `email`, `problem`, `message`) VALUES
('TNPA8', 'Luu Cuong', 'cungaga@gmail.com', 'balashda s asdb', 'adaoasdpoashodashpiofaifasphpodfa'),
('TNR0T', 'Luu Cuong', 'cungaga@gmail.com', 'ádasdasd', 'adasfasfgawefawefqqqqqqwqwqwqwdqwfqw');

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
('MHRYf', b'0', 2, 'KH001'),
('MHttz', b'0', 1, 'KHj2S');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_HD` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_KH` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dat` date NOT NULL,
  `ngay_den` date NOT NULL,
  `ngay_di` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma_HD`, `ma_KH`, `ngay_dat`, `ngay_den`, `ngay_di`) VALUES
('HDbUt', 'KHj2S', '2018-06-03', '2018-06-20', '2018-06-22'),
('HDcGl', 'KHj2S', '2018-06-03', '2018-06-19', '2018-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `khach_san`
--

CREATE TABLE `khach_san` (
  `ma_KS` int(3) NOT NULL,
  `ten_KS` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_thieu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tong_SL` int(6) NOT NULL,
  `SDT` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_san`
--

INSERT INTO `khach_san` (`ma_KS`, `ten_KS`, `gioi_thieu`, `hinh_1`, `hinh_2`, `dia_chi`, `tong_SL`, `SDT`) VALUES
(1, 'Khách sạn A', 'abc xyz', 'khach_san_A_1.jpg', 'khach_san_A_2.jpg', 'Đà lạt', 30, 1234567890),
(2, 'Khách sạn B', 'wwwww', 'khach_san_B_1.jpg', 'khach_san_B_2.jpg', 'Đà Lạt', 40, 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `loai_phong`
--

CREATE TABLE `loai_phong` (
  `ma_loai` int(2) NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_phong`
--

INSERT INTO `loai_phong` (`ma_loai`, `ten_loai`) VALUES
(1, 'Phòng đơn'),
(2, 'Phòng đôi');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `ma_phong` int(4) NOT NULL,
  `ma_KS` int(3) NOT NULL,
  `ma_loai` int(2) NOT NULL,
  `gia` int(8) NOT NULL,
  `SL` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`ma_phong`, `ma_KS`, `ma_loai`, `gia`, `SL`) VALUES
(1, 1, 1, 200000, 10),
(2, 1, 2, 300000, 20),
(3, 2, 1, 250000, 20),
(4, 2, 2, 400000, 20);

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
('KH002', 'lephu1', '1234', 2, b'1', 'phú mập heo', '82 nguyễn xí', '0123456789', 'phu@gmail.com'),
('KHj2S', 'Luu Sean', '9704061342284595', 2, b'1', 'Luu Cuong', '141 D5, TP.HCM', '01292508700', 'cuong.luusean@gmail.com');

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
('T0001', 'TP.HCM - VŨNG TÀU', 10, '2018-06-15', '2018-06-20', 4000000),
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
-- Indexes for table `chitietdatphong`
--
ALTER TABLE `chitietdatphong`
  ADD PRIMARY KEY (`ma_HD`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MADH`,`MATOUR`),
  ADD KEY `FK_MATOUR` (`MATOUR`,`MADH`) USING BTREE;

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`matn`);

--
-- Indexes for table `dondattour`
--
ALTER TABLE `dondattour`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `FK_MAKH` (`MAKH`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_HD`),
  ADD KEY `FK_KH` (`ma_KH`);

--
-- Indexes for table `khach_san`
--
ALTER TABLE `khach_san`
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
  ADD PRIMARY KEY (`ma_phong`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khach_san`
--
ALTER TABLE `khach_san`
  MODIFY `ma_KS` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loai_phong`
--
ALTER TABLE `loai_phong`
  MODIFY `ma_loai` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `ma_phong` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdatphong`
--
ALTER TABLE `chitietdatphong`
  ADD CONSTRAINT `FK_HDPhong` FOREIGN KEY (`ma_HD`) REFERENCES `hoa_don` (`ma_HD`) ON UPDATE CASCADE;

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

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `FK_KH` FOREIGN KEY (`ma_KH`) REFERENCES `taikhoan` (`MAKH`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
