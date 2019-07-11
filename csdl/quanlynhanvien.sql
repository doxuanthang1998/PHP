-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2019 lúc 06:24 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlynhanvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `eid` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `department` char(50) NOT NULL,
  `position` char(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `idcard` int(20) NOT NULL,
  `address` char(50) NOT NULL,
  `salary` char(20) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`eid`, `username`, `department`, `position`, `gender`, `idcard`, `address`, `salary`, `des`) VALUES
(1, 'Máº¡nh CÆ°á»ng', 'Kinh doanh', 'NhÃ¢n viÃªn', 'Nam', 168548751, 'HÃ  Ná»™i', '5.000.000Ä‘', '<p>ChÄƒm chá»‰</p>\r\n'),
(2, 'HÃ  Trang', 'Tiáº¿p Thá»‹', 'NhÃ¢n viÃªn', 'Ná»¯', 165874512, 'Háº£i PhÃ²ng', '6.000.000Ä‘', '<p>NÄƒng Ä‘á»™ng</p>\r\n'),
(3, 'Máº¡nh DÅ©ng', 'Váº­n chuyá»ƒn', 'NhÃ¢n viÃªn', 'Nam', 168545871, 'HÃ  Nam', '4.000.000Ä‘', '<p>Nhanh nháº¹n</p>\r\n'),
(4, 'XuÃ¢n Chiáº¿n', 'NhÃ¢n sá»±', 'NhÃ¢n viÃªn', 'Nam', 65845123, 'VÅ©ng TÃ u', '8.500.000Ä‘', '<p>Th&ocirc;ng minh</p>\r\n'),
(5, 'Há»“ng Lan', 'NhÃ¢n sá»±', 'NhÃ¢n viÃªn', 'Ná»¯', 165874521, 'HÃ  Ná»™i', '8.000.000Ä‘', '<p>Th&aacute;o v&aacute;t</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ktkl`
--

CREATE TABLE `ktkl` (
  `kkid` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `department` char(50) NOT NULL,
  `position` char(50) NOT NULL,
  `khenthuongkiluat` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `ktkl`
--

INSERT INTO `ktkl` (`kkid`, `username`, `department`, `position`, `khenthuongkiluat`) VALUES
(1, 'Máº¡nh DÅ©ng', 'Kinh doanh', 'NhÃ¢n viÃªn', 'LÃ m viá»‡c chÄƒm chá»‰, tiáº¿n bá»™'),
(2, 'ThÃ¡i HoÃ ng', 'Marketing', 'NhÃ¢n viÃªn', 'Äáº¡t doanh thu áº¥n tÆ°á»£ng'),
(3, 'Minh Ngá»c', 'Ká»¹ thuáº­t', 'TrÆ°á»Ÿng phÃ²ng', 'Cháº­m chá»… trong tiáº¿n Ä‘á»™ dá»± kiáº¿n'),
(4, 'XuÃ¢n PhÆ°Æ¡ng', 'NhÃ¢n sá»±', 'NhÃ¢n viÃªn', 'LÃ m viá»‡c táº­p trung chÄƒm chá»‰'),
(14, 'Ngá»c PhÆ°Æ¡ng', 'Kinh doanh', 'NhÃ¢n viÃªn', 'ThÃ´ng minh, sÃ¡ng táº¡o'),
(15, 'Thanh Huyá»n', 'Kinh doanh', 'NhÃ¢n viÃªn', 'ThÃ´ng minh, sÃ¡ng táº¡o'),
(16, 'Thanh HÆ°Æ¡ng', 'Kinh doanh', 'NhÃ¢n viÃªn', 'ThÃ´ng minh, sÃ¡ng táº¡o');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quatrinhcongtac`
--

CREATE TABLE `quatrinhcongtac` (
  `qid` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `unit` char(50) NOT NULL,
  `department` char(50) NOT NULL,
  `position` char(50) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `quatrinhcongtac`
--

INSERT INTO `quatrinhcongtac` (`qid`, `username`, `unit`, `department`, `position`, `startdate`, `enddate`) VALUES
(1, 'Máº¡nh Long', 'Táº­p Ä‘oÃ n Sunhouse', 'Marketing', 'TrÆ°á»Ÿng phÃ²ng', '2019-05-08', '2020-03-18'),
(2, 'Ngá»c Trang', 'Táº­p Ä‘oÃ n Alibaba', 'Sáº£n xuáº¥t', 'NhÃ¢n viÃªn', '2019-05-19', '2030-05-19'),
(3, 'Ngá»c Mai', 'CÃ´ng ty Samsung', 'Kinh doanh', 'NhÃ¢n viÃªn thu ngÃ¢n', '2019-05-26', '2022-05-03'),
(5, 'HÃ  Chi', 'Táº­p Ä‘oÃ n Samsung', 'Marketing', 'TrÆ°á»Ÿng phÃ²ng', '2019-09-05', '2030-08-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userid` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` char(100) NOT NULL,
  `level` int(1) NOT NULL,
  `department` char(50) NOT NULL,
  `position` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `level`, `department`, `position`) VALUES
(1, 'admin', '12345', 2, 'Ká»¹ thuáº­t', 'TrÆ°á»Ÿng phÃ²ng'),
(2, 'Minh Hiá»n', '123456', 2, 'Marketing', 'GiÃ¡m Ä‘á»‘c Ä‘iá»u hÃ nh'),
(3, 'Äá»— Tháº¯ng', '12345', 2, 'Äiá»u hÃ nh', 'PhÃ³ chá»§ tá»‹ch'),
(4, 'Jackma', '123456', 2, 'LÃ£nh Ä‘áº¡o', 'Chá»§ tá»‹ch'),
(7, 'Bill Gates', '123', 2, 'LÃ£nh Ä‘áº¡o', 'Chá»§ tá»‹ch toÃ n quyá»n'),
(8, 'Quá»‘c HÆ°ng', '123', 2, 'LÃ£nh Ä‘áº¡o', 'Chá»§ tá»‹ch');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Chỉ mục cho bảng `ktkl`
--
ALTER TABLE `ktkl`
  ADD PRIMARY KEY (`kkid`);

--
-- Chỉ mục cho bảng `quatrinhcongtac`
--
ALTER TABLE `quatrinhcongtac`
  ADD PRIMARY KEY (`qid`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `ktkl`
--
ALTER TABLE `ktkl`
  MODIFY `kkid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `quatrinhcongtac`
--
ALTER TABLE `quatrinhcongtac`
  MODIFY `qid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
