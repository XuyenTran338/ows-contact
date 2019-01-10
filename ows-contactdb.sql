-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2019 lúc 12:27 PM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ows-contactdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone1`, `phone2`, `email`, `fb`, `company`) VALUES
(1, 'Trần Văn Xuyên', '0968236439', '0344926655', 'xuyentran98moon@gmail.com', 'https://www.facebook.com/sosadsong98', 'Công ty cổ phần ABC'),
(3, 'Trần Văn Thuân', '0364587142', '0311616119', 'thuan345@gmail.com', 'https://www.facebook.com/thuan', 'Công ty cổ phần CDEAA'),
(9, 'Phạm Văn Tuấn', '0311616162', '0161616162', 'tuansaca@gmail.com', 'https://www.facebook.com/tuansaca', 'Công ty cổ phần FGH'),
(13, 'Bạch Ngọc Nhật', '0351161616', '0164446665', 'bachnhat@gmail.com', 'https://www.facebook.com/bachnhat', 'Công ty cổ phần VNVSJ'),
(14, 'Nguyễn Thị Hồng Nhung', '0161545660', '0115151515', 'hongnhung123@gmail.com', 'https://www.facebook.com/hongnhung', 'Công ty cổ phần FGH'),
(16, 'Vũ Thị Lan Anh', '0303116166', '0169496616', 'lananh3456@gmail.com', 'https://www.facebook.com/lananh ', 'Công ty cổ phần FGH'),
(17, 'Hoàng Anh Dũng', '0353533345', '0135353353', 'dungnail23@gmail.com', 'https://www.facebook.com/dung', 'Công ty cổ phần FGH');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
