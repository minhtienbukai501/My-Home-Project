-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 18, 2024 lúc 07:44 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlygiadinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `takeDate` date NOT NULL,
  `decription` text NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id`, `title`, `takeDate`, `decription`, `image`) VALUES
(1, 'Tôm Mon Đô đi chơi công viên part1', '2021-08-18', 'Tôm Mon Đô xin cậu Tiến đi chơi công viên ', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part1.jpg'),
(2, 'Đô Mon Mi Đi Chơi Cầu Trượt Part 2', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part2.jpg'),
(3, 'Đô Mon Mi Đi Chơi Cầu Trượt Part 3', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part3.jpg'),
(4, 'Đô Mon Mi Đi Chơi Cầu Trượt Part 4', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part4.jpg'),
(5, 'Đô Mon Mi Đi Chơi Cầu Trượt Part 5', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part5.jpg'),
(6, 'Đô Mon Mi Đi Chơi Cầu Trượt Part 6', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part6.jpg'),
(7, 'Đô Mon Mi Đi Chơi Cầu Trượt Part 7', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part7.jpg'),
(8, 'Đô Mon Mi Đi Chơi Cầu Trượt Part 8', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part8.jpg'),
(9, 'Đô Mon Mi Đi Chơi Cầu Trượt Part 9', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part9.jpg'),
(10, ' Mon  Đi Chơi Cầu Trượt part 1', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part10.jpg'),
(11, ' Mon  Đi Chơi Cầu Trượt part 2', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part11.jpg'),
(12, ' Mon  Đi Chơi Cầu Trượt part 3', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part12.jpg'),
(13, 'Đô Mon Mi Đi Chơi Cầu Trượt part 10', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part13.jpg'),
(14, 'Đô Mon Mi Đi Chơi Cầu Trượt part 11', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part14.jpg'),
(15, ' Mon Đi Chơi Cầu Trượt part 4', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part15.jpg'),
(16, 'Đô Mon Mi Đi Chơi Cầu Trượt part 12', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part16.jpg'),
(17, 'Đô Mon chụp ảnh với cậu Dũng 1', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part17.jpg'),
(18, 'Đô Mon chụp ảnh với cậu Dũng 2', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part18.jpg'),
(19, 'Mon Khóc', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part20.jpg'),
(20, 'Đô chơi game', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part21.jpg'),
(21, 'Mon chơi một mình', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part23.jpg'),
(22, 'Tôm My Mon Đô đi chơi cầu trượt Tố Hữu 1', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part25.jpg'),
(23, 'Tôm My Mon Đô đi chơi cầu trượt Tố Hữu 2', '2021-08-12', 'Đô Mon Rê Đi Chơi Cầu Trượt', 'anhMonDoTommy_ChoiCauTruot18_08_2021_part27.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_member`
--

CREATE TABLE `image_member` (
  `id` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `image_member`
--

INSERT INTO `image_member` (`id`, `id_image`, `id_member`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3),
(10, 4, 1),
(11, 4, 2),
(12, 4, 3),
(13, 5, 1),
(14, 5, 2),
(15, 5, 3),
(16, 6, 1),
(17, 6, 2),
(18, 6, 3),
(19, 7, 1),
(20, 7, 2),
(21, 7, 3),
(22, 8, 1),
(23, 8, 2),
(24, 8, 3),
(25, 9, 1),
(26, 9, 2),
(27, 9, 3),
(28, 10, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  `decription` text NOT NULL,
  `birthDay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `name`, `image`, `decription`, `birthDay`) VALUES
(1, 'Lê Hoàng Minh', 'TommyChoiXichDu18_08_21Part1.jpg', 'Tên ở nhà là Tôm My. Tôm My mê bé yến, bé Trang. Mê A Thiệu, Mê bé loẹt, bé Như. Tôm My đào hoa có nhiều bạn gái', '2012-06-01'),
(2, 'Văn Thị Bảo yến', 'anhMon.jpg', 'Tên ở nhà là Rê kết hợp với 2 anh chị để tạo thành Đô Rê Mon . Rê Là một trẻ tuổi nhất trong 3 chị em và có vai vế nhỏ nhất', '2012-06-01'),
(3, 'Văn Đức Bảo Anh', 'TkTra_18_8_21.jpg', 'Đô Đẹp dai', '2014-07-12'),
(4, 'Dao Quang Linh', 'Re_part11.jpg', 'Rê Dễ thương', '2023-12-06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image_member`
--
ALTER TABLE `image_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_member_ibfk_1` (`id_member`),
  ADD KEY `id_image` (`id_image`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `image_member`
--
ALTER TABLE `image_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image_member`
--
ALTER TABLE `image_member`
  ADD CONSTRAINT `image_member_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `image_member_ibfk_2` FOREIGN KEY (`id_image`) REFERENCES `image` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
