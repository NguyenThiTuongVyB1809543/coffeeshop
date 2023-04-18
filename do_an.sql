-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2023 lúc 05:52 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `total_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `oders`
--

INSERT INTO `oders` (`order_id`, `user_id`, `order_date`, `total_price`) VALUES
(26, 3, '2023-04-17 21:53:01', '30000'),
(27, 3, '2023-04-17 21:55:37', '85000'),
(28, 5, '2023-04-17 22:09:16', '80000'),
(29, 6, '2023-04-17 22:25:47', '25000'),
(30, 1, '2023-04-17 23:06:22', '25000'),
(31, 3, '2023-04-17 23:41:10', '100000'),
(32, 3, '2023-04-18 11:10:13', '10000'),
(33, 3, '2023-04-18 11:10:49', '10000'),
(34, 3, '2023-04-18 11:11:01', '25000'),
(35, 3, '2023-04-18 11:12:17', '60000'),
(36, 3, '2023-04-18 11:43:00', '75000'),
(37, 9, '2023-04-18 13:41:13', '25000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `quantity`, `item_price`) VALUES
(14, 26, 8, 3, '30000'),
(15, 27, 3, 3, '75000'),
(16, 27, 4, 1, '10000'),
(17, 28, 8, 2, '20000'),
(18, 28, 9, 2, '60000'),
(19, 29, 3, 1, '25000'),
(20, 30, 3, 1, '25000'),
(21, 31, 7, 4, '100000'),
(22, 32, 4, 1, '10000'),
(23, 34, 3, 1, '25000'),
(24, 35, 9, 2, '60000'),
(25, 36, 7, 2, '50000'),
(26, 36, 3, 1, '25000'),
(27, 37, 3, 1, '25000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(300) COLLATE utf8_vietnamese_ci NOT NULL,
  `image_url` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `description`, `image_url`) VALUES
(3, 'Cà Phê Latte Caramel', '25000', 'Café Latte Caramel Muối, món này với những bạn nào hay la cà quán xá thì chắc cũng không quá xa lạ nữa, tin mình đi là món này nó ngon. Cà phê đậm vị đi cùng với hương thơm và vị đặc trưng đến từ caramel, len lõi trong lúc uống là vị mặn từ chút muối mà ', './img/Café Latte Caramel.jpg'),
(4, 'Bạc Xỉu', '10000', 'Một món cà phê truyền thống quen thuộc nhưng không phải quán nào làm cũng ngon nên mình quyết định gọi thử để trải nghiệm', './img/Bạc Xỉu.jpg'),
(5, 'ChoCo Mint', '30000', 'Là sự kết hợp giữa chocolate trắng (white chocolate) và bạc hà, hương vị chocolate trắng thì nhẹ nhàng thôi nhưng cũng đủ để cảm nhận được, có chút béo nhẹ, đi cùng với sự the mát của bạc hà', './img/ChoCo Mint.jpg'),
(6, 'ChoCo White', '35000', 'món này lúc các bạn viên mang ra thì thấy cũng khá thú vị vì được topping bằng lớp chocolate trắng được bào nhuyễn bên trên nên cảm giác đậm vị hơn hẳn so với Choco Mint ở trên. Bạn nào không thích vị bạc hà thì có thể gọi món Choco White này để trải nghiệm thử hương vị của chocolate trắng nha.', './img/Choco White.jpg'),
(7, 'Trà Hoa Hồng', '25000', 'vị trà hoa hồng thì mình nghĩ chắc mọi người cũng không còn quá xa lạ nữa, là một món giải khát tốt, vị trà đậm vừa phải và độ ngọt cũng khá dễ chịu ', './img/Trà Hoa Hồng.jpg'),
(8, 'Cà Phê Nước Cốt Dừa', '10000', 'Món này thì cũng không quá xa lạ với mọi người nữa, là sự kết hợp giữa espresso và nước cốt dừa đá xay', './img/Cà Phê Nước Cốt Dừa.jpg'),
(9, 'Trà Chuối', '30000', 'Món này mình thấy khá lạ miệng lúc vừa uống thử ngụm đầu tiên, chắc hẳn là do phần khoai tím đó giờ mình thấy ít khi nào được đi chung với cà phê, nhưng càng uống thì thấy càng dễ chịu hơn vì lúc này cảm nhận được vị và hương thơm từ cà phê, phần khoai tím mịn và cho vị ngọt dịu. Bạn nào thích trải ', './img/Trà Chuối.jpg'),
(11, 'Cà Phê Coconut', '35000', 'Đây là sự kết hợp giữa món bánh Croffle và một viên kem dừa, topping là chuối, dâu tây tươi và sốt chocolate. Cá nhân mình thấy món này dễ nghiện lắm :)), bánh croffle được quán nướng nóng hổi, bên trong bánh còn giữ được độ dai và xốp, viên kem dừa cũng được mấy bạn nhân viên múc “đậm tay” lắm nên ', './img/Cà phê coconut.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `vaitro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `address`, `phone_number`, `vaitro`) VALUES
(1, 'admin', '1', '', '0', '0', '0', 1),
(3, 'tuongdi123', 'a123456', 'Tường Di Nguyễn', 'di123@gmail.com', '3/2, Cần Thơ', '0789146891', 0),
(4, 'vy0000', 'a123456', '', 'lan@gmail.com', 'Viet Nam', '0706639961', 0),
(5, 'ngov', 'a123456', '', 'lan@gmail.com', 'Viet Nam', '0706639961', 0),
(6, 'lan123', 'a123456', 'Bùi Quang Lan', 'lan@gmail.com', 'Đông Anh, Hà Nội, Việt Nam', '046462446', 0),
(7, 'lanbui', '', 'Bùi Quan', '', '', '', 0),
(8, 'lanbui123', 'a123456', 'Bùi Quang Lan', 'lan@gmail.com', 'Viet Nam', '0706639961', 0),
(9, 'B1809543', 'a123456', 'Nguyễn Thị Tường Vy', 'vyb1809543@student.ctu.edu.vn', 'Ô Môn, Cần Thơ', '0706639961', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `oders`
--
ALTER TABLE `oders`
  ADD CONSTRAINT `oders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `oders` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
