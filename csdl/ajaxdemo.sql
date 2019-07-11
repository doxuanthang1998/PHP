-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2019 lúc 06:26 AM
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
-- Cơ sở dữ liệu: `ajaxdemo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `album_id` int(10) UNSIGNED NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `album_img` varchar(255) NOT NULL,
  `singer_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `album_img`, `singer_id`) VALUES
(1, 'Thap nhi mi nhan', 'data/aaa.jpg', 1),
(2, 'Di ve NOi Xa', 'data/bbb.jpg', 1),
(3, 'Tim lai giac mo', 'data/ccc.jpg', 2),
(4, 'Hanh Phuc Thoang Qua', 'data/ddd.jpg', 4),
(5, 'Tinh say', 'data/eee.jpg', 3),
(6, 'Binh minh se mang em di', 'data/fff.jpg', 3),
(7, 'Ba cham', 'data/ccc.jpg', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `com_id` int(10) UNSIGNED NOT NULL,
  `com_name` varchar(100) NOT NULL,
  `com_email` varchar(100) NOT NULL,
  `com_mess` text NOT NULL,
  `com_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`com_id`, `com_name`, `com_email`, `com_mess`, `com_date`) VALUES
(12, 'Äá»— XuÃ¢n Tháº¯ng', 'thang@yahoo.com', 'Trang web ráº¥t hay', '2019-05-18 02:17:34'),
(13, 'Kiá»u Hiá»n', 'hienkieu@yahoo.com', 'Ráº¥t há»¯u Ã­ch', '2019-05-18 02:18:11'),
(14, 'HoÃ ng Minh', 'hoangminh@123.com', 'Ná»™i dung tÃ­ch cá»±c', '2019-05-18 02:22:03'),
(15, 'Minh Äá»©c', 'minhduc@gmail.com', 'Ná»™i dung ráº¥t hay', '2019-05-18 08:53:49'),
(16, 'CÃ´ng Long', 'conglong@123.com', 'Ná»™i dung chuáº©n', '2019-05-18 10:14:09'),
(17, 'Quá»‘c HÆ°ng', 'quochung@yahoo.com', 'BÃ i viáº¿t tá»‘t', '2019-05-18 13:55:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `singer`
--

CREATE TABLE `singer` (
  `singer_id` int(10) UNSIGNED NOT NULL,
  `singer_name` varchar(255) NOT NULL,
  `singer_info` text NOT NULL,
  `singer_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `singer`
--

INSERT INTO `singer` (`singer_id`, `singer_name`, `singer_info`, `singer_img`) VALUES
(1, 'Dan Truong', 'Tieu su cua Dan Truong o day', 'data/dantruong.jpg'),
(2, 'Ho Ngoc Ha', 'Tieu su cua Ho Ngoc Ha o day', 'data/hongocha.jpg'),
(3, 'Dam Vinh Biet', 'Tieu su cua Dam Vinh Biet', 'data/damvinhhung.jpg'),
(4, 'Noo Phuoc Thinh', 'Tieu su cua Noo Phuoc Thinh', 'data/phuocthinh.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `song_id` int(10) UNSIGNED NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `song_url` text NOT NULL,
  `song_lyric` text NOT NULL,
  `album_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`song_id`, `song_name`, `song_url`, `song_lyric`, `album_id`) VALUES
(1, 'Di ve noi xa', '', '', 2),
(2, 'Di ve noi gan', '<object width=\"300\" height=\"61\"><param name=\"movie\" value=\"http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin1.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMS8xMS8yMi8yLzIvInagaMEMjJmYWFhMDmUsICxZWNkZjk3NmMxODBlMjM3ZTE0MzFiYjUdUngWeBXAzfEPDsyBLaGkgTsOgWeByBS4WeBdUngdaSBYYXxCw61jaCBQaMawxqFdUngZ3x8Mg\" /><param name=\"quality\" value=\"high\" /><param name=\"wmode\" value=\"transparent\" /><embed width=\"300\" height=\"61\" src=\"http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin1.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMS8xMS8yMi8yLzIvInagaMEMjJmYWFhMDmUsICxZWNkZjk3NmMxODBlMjM3ZTE0MzFiYjUdUngWeBXAzfEPDsyBLaGkgTsOgWeByBS4WeBdUngdaSBYYXxCw61jaCBQaMawxqFdUngZ3x8Mg\" quality=\"high\" wmode=\"transparent\" type=\"application/x-shockwave-flash\"></embed></object><br />', 'Có Khi Nào Rời Xa\r\nĐóng góp: dzitcon211\r\nBiết đâu bất ngờ đôi ta chợt rời xa nhau,\r\nAi còn đứng dưới mưa ngân nga câu ru tình..\r\nVà môi hôn rất ướt,dư âm giấu trong mưa.\r\nCơn mưa kéo dài…\r\n\r\nSẽ là dối lòng khi em chẳng ngại âu lo,\r\nLo em sẽ mất anh trong lúc yêu thương nhất.\r\nVì tình yêu mong manh,tay em quá yếu mềm..\r\nNgười yêu ơi,anh có biết?\r\n\r\nChorus:\r\nEm yêu anh hơn thế,nhiều hơn lời em vẫn nói.\r\nĐể bên anh em đánh đổi tất cả bình yên\r\nĐêm buông xuôi vì cô đơn,còn riêng em cứ ngẩn ngơ\r\nCó khi nào ta xa rời…\r\n\r\nAnh đưa em theo với, cầm tay em và đưa lối,\r\nĐến nơi đâu em có thể bên anh trọn đời,\r\nNơi thương yêu không phôi phai, được bên nhau mỗi sớm mai.\r\nQuá xa xôi không, anh ơi \r\nNơi thương yêu không phôi phai, được bên nhau mỗi sớm mai.\r\nBiết không anh ,em yêu anh...', 2),
(3, 'Di ve noi gan nua', '<object width=\"300\" height=\"61\"><param name=\"movie\" value=\"http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin9.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMC8xMi8yOS9mLzYvInagaMEZjY4MGVkYjRkNjE1YmI1NDmUsICyMTdjYmQ2YjQ0OWEwMWYdUngWeBXAzfENoWeByBN4WeBdUngZdCBUw6xdUngaCBZw6p1fE3hdUng7kgVMOiWeBXwxfDI\" /><param name=\"quality\" value=\"high\" /><param name=\"wmode\" value=\"transparent\" /><embed width=\"300\" height=\"61\" src=\"http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin9.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMC8xMi8yOS9mLzYvInagaMEZjY4MGVkYjRkNjE1YmI1NDmUsICyMTdjYmQ2YjQ0OWEwMWYdUngWeBXAzfENoWeByBN4WeBdUngZdCBUw6xdUngaCBZw6p1fE3hdUng7kgVMOiWeBXwxfDI\" quality=\"high\" wmode=\"transparent\" type=\"application/x-shockwave-flash\"></embed></object><br />', 'Cho Một Tình Yêu - Mỹ Tâm\r\nĐóng góp: Thu Huynh\r\nNgày mới quen nhau em nào hay đôi mình\r\nĐược gần nhau sống chung dưới trăng vàng\r\nNgày tháng trôi qua em nhận ra tim mình\r\nCàng gần anh em lại càng yêu anh.\r\n\r\nTừ những lúc vui hay là lúc giận hờn\r\nCàng nhìn anh càng yêu hơn thế\r\nTình đã như trong sao mắt môi giấu kín\r\nĐể ta có lúc tưởng chia xa.\r\n\r\nNgười ơi biết không em ngày đêm mong chờ\r\nChờ mong nghe câu yêu thương anh nói\r\nĐể em biết anh yêu một mình em thôi\r\nDù ta không thuộc về nhau.\r\n\r\nGần bên anh cho em bao cảm giác yêu thương ngọt ngào\r\nNụ cười anh xua tan đi bao nỗi đắng cay ngày nào\r\nChỉ mong được gần anh như thế\r\nChỉ mong được nhìn anh như thế\r\nTình em nơi đây chỉ biết đến anh người ơi.\r\n\r\nMột lần thôi con tim em muốn nói yêu anh thật nhiều\r\nChỉ một câu yêu thương thôi sao mà vẫn cứ nghẹn lời\r\nChỉ mong được gần anh để nói\r\nChỉ mong được nhìn anh để nói\r\nRằng em yêu anh yêu mãi trái tim này.', 2),
(4, 'Tim lai giac mo 1', '', '', 3),
(5, 'Hanh phuc thoang qua', '', '', 4),
(6, 'Doi Thay', '', '', 4),
(7, 'Binh Minh Se Mang Em Di', '', '', 6),
(8, 'Nhu mot thoi quen', '', '', 7),
(9, 'Tinh say', '<object width=\"300\" height=\"61\"><param name=\"movie\" value=\"http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin1.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMS8wOS8xMi8xLzMvInagaMEMTNiMmQ4NzAwOWVkMzBhYWQxOWMzOTFiMzJmNTM1NjEdUngWeBXAzfENoWeByBFWeBSBN4WeBdUngZdCBM4WeBqnWeBiBZw6p1fMSQw7RdUngZyBOaGl8fDI\" /><param name=\"quality\" value=\"high\" /><param name=\"wmode\" value=\"transparent\" /><embed width=\"300\" height=\"61\" src=\"http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin1.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMS8wOS8xMi8xLzMvInagaMEMTNiMmQ4NzAwOWVkMzBhYWQxOWMzOTFiMzJmNTM1NjEdUngWeBXAzfENoWeByBFWeBSBN4WeBdUngZdCBM4WeBqnWeBiBZw6p1fMSQw7RdUngZyBOaGl8fDI\" quality=\"high\" wmode=\"transparent\" type=\"application/x-shockwave-flash\"></embed></object><br />', 'Cho Em Một Lần Yêu\r\n\r\nNgười bỗng đến bên em vào một hôm nắng xanh ngời\r\nVà rồi tyay nắm tay như từng quen muôn kiếp trước\r\nNgười nói, nói với em bao lời êm ái trên đời\r\nVà rồi như giấc mơ, em ngủ quên.\r\n\r\nYêu, cho em yêu một lần thôi, cho em khóc một lần thôi, để em biết những buồn vui.\r\nMơ, cho em mơ một lần thôi, cho em đau một lần nhớ, nước mắt ấy dẫu vẫn rơi hoài\r\n\r\nNgười đánh cắp tim em như người đã trót đôi lần\r\nRồi người đem bán cho anh nhà thơ ở cuối xóm\r\nChuyện cũ viết trong thơ nay người đem hát cho đời\r\nMà đời nào có hay em ngủ quên\r\nMà đời nào có thương cho phận em\r\n\r\nEm, em chưa bao giờ được yêu\r\nEm chưa bao giờ được khóc\r\nDù chỉ khóc một lần thôi\r\nEm, em xinh như cành hoa tươi\r\nSao yêu thương còn xa mãi\r\nHéo cánh úa hoa em rã rời. ', 5),
(10, 'Chim trang mo coi', '', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '12345', '2'),
(2, 'kenny', '12345', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`com_id`);

--
-- Chỉ mục cho bảng `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`singer_id`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `com_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `singer`
--
ALTER TABLE `singer`
  MODIFY `singer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
