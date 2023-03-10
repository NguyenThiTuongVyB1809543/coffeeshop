-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 06:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `do_an`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(10) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `chitietsp` varchar(150) NOT NULL,
  `giasp` int(20) NOT NULL,
  `hinhanhsp` varchar(100) NOT NULL,
  `idtv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `chitietsp`, `giasp`, `hinhanhsp`, `idtv`) VALUES
(7, 'Cà Phê Sữa Đá', 'Được làm từ cà phê Buôn Mê Thuột và sữa Ông Thọ, thơm ngon béo ngậy', 20000, './img/cà phê sữa đá.jpg', 1),
(8, 'MatCha Đá Xoay', 'Bột MatCha từ nhật bản hòa quyện với nước đá đông lạnh, tạo ra sự kết hợp tẹc dời', 20000, './img/MATCHADAXAY.jpg', 1),
(9, 'Nước Cam', 'Được ép từ loại cam thượng hạng trồng tại đồng bằng sông Cửu Long, loại đường được sữ dụng cũng được làm từ cây mía trồng ở đây', 20000, './img/nướccam.jpg', 1),
(10, 'Socola Đá Xoay', 'Được làm từ socola chất lượng của Pháp, sữa bò nguyên chất từ Đan Mạch, đây là một sản phẩm Lắc Xu Rỳ', 20000, './img/SOCOLADAXAY.jpg', 1),
(11, 'Cà Phê Nóng', 'Cà Phê Buôn Mê Thuột chất lượng, thơm ngon tròn vị', 20000, './img/cà phê nóng.jpg', 1),
(12, 'Trà Đào ', 'Trà Thái Nguyên thơm ngon, nồng đượm, Đào được mua từ siêu thị', 20000, './img/trà đào.jpg', 1),
(13, 'Sinh Tố Trái Cây', 'Xoay trái cây với sữa rồi bỏ đá dô xoay cái nữa', 15000, './img/sinh to.jpg', 1),
(14, 'Trà Vải', 'Trà thì trà Thái Nguyên, vải là vải Bắc Giang', 20000, './img/travai.jpg', 1),
(15, 'Trà Sữa', 'Trà quậy sữa thoi hà', 2000, './img/tra sua.jpg', 1),
(16, 'Nước Suối', 'Nước được lấy từ suối', 50000, './img/nuocsuoi.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(20) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(32) NOT NULL,
  `vaitro` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `tendangnhap`, `matkhau`, `vaitro`) VALUES
(1, 'admin', '1', 1),
(4, 'vy123456', 'a123456', 0),
(5, 'tuongvy', 'a123456', 0),
(6, 'YenLinh', 'a123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `idtv` (`idtv`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idtv`) REFERENCES `thanhvien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
