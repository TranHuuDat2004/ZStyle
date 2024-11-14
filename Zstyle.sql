-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2023 lúc 05:34 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `zstyle`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(3) NOT NULL,
  `img` varchar(200) NOT NULL,
  `vitri` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `img`, `vitri`) VALUES
(1, 'banner 1.png', 1),
(2, 'banner 2.png', 2),
(3, 'banner 3.png', 3),
(4, 'banner-custom-1.png', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `id_user` int(6) NOT NULL,
  `id_donhang` int(5) NOT NULL DEFAULT 1,
  `id_product` int(5) NOT NULL,
  `soluong` int(6) NOT NULL,
  `price` double(10,2) NOT NULL,
  `thanhtien` double(10,2) NOT NULL,
  `img` varchar(100) NOT NULL,
  `id_size` int(3) NOT NULL,
  `id_color` int(3) NOT NULL,
  `product_design` tinyint(1) NOT NULL DEFAULT 0,
  `id_product_design` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_donhang`, `id_product`, `soluong`, `price`, `thanhtien`, `img`, `id_size`, `id_color`, `product_design`, `id_product_design`) VALUES
(658, 91, 148, 76, 1, 399000.00, 399000.00, 'AK_008_blue.png', 1, 5, 0, 1),
(659, 91, 148, 75, 1, 399000.00, 399000.00, 'AK_007_yellow.png', 1, 10, 0, 1),
(660, 91, 149, 69, 1, 315000.00, 315000.00, 'APL_003_black.png', 1, 2, 0, 1),
(661, 91, 150, 74, 1, 375000.00, 375000.00, 'AK_006_black.png', 1, 2, 0, 1),
(662, 91, 151, 71, 1, 315000.00, 315000.00, 'APL_005_black.png', 1, 2, 0, 1),
(664, 91, 152, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_44296425.png', 1, 1, 1, 68),
(665, 92, 153, 70, 1, 250000.00, 250000.00, 'APL_004_white.png', 1, 1, 0, 1),
(668, 92, 154, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_20480023.png', 1, 1, 1, 70),
(672, 92, 155, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_26470811.png', 1, 1, 1, 73),
(673, 92, 156, 75, 1, 399000.00, 399000.00, 'AK_007_yellow.png', 1, 10, 0, 1),
(674, 93, 157, 68, 1, 288000.00, 288000.00, 'ASM_007_blue.png', 1, 5, 0, 1),
(678, 93, 158, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_59742211.png', 1, 1, 1, 75),
(679, 93, 159, 71, 1, 315000.00, 315000.00, 'APL_005_black.png', 1, 2, 0, 1),
(680, 94, 160, 66, 1, 300000.00, 300000.00, 'ASM_005_white.png', 1, 1, 0, 1),
(683, 94, 161, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_60816077.png', 1, 1, 1, 77),
(684, 94, 162, 76, 1, 399000.00, 399000.00, 'AK_008_blue.png', 1, 5, 0, 1),
(685, 94, 163, 74, 1, 375000.00, 375000.00, 'AK_006_black.png', 1, 2, 0, 1),
(686, 94, 163, 62, 1, 450000.00, 450000.00, 'AK_005_blue.png', 1, 5, 0, 1),
(687, 94, 163, 64, 1, 300000.00, 300000.00, 'ASM_003_brown.png', 1, 3, 0, 1),
(688, 95, 164, 53, 1, 490000.00, 490000.00, 'AK_001_white.png', 1, 1, 0, 1),
(689, 95, 164, 57, 1, 420000.00, 420000.00, 'AK_003_beige.png', 1, 8, 0, 1),
(690, 95, 164, 63, 1, 390000.00, 390000.00, 'AT_008_black.png', 1, 2, 0, 1),
(691, 95, 164, 59, 1, 290000.00, 290000.00, 'AT_006_white.png', 1, 1, 0, 1),
(693, 95, 165, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_14856513.png', 1, 1, 1, 79),
(694, 95, 166, 45, 1, 290000.00, 290000.00, 'AT_002_white.png', 1, 1, 0, 1),
(695, 95, 166, 61, 1, 270000.00, 270000.00, 'AT_007_white.png', 3, 1, 0, 1),
(696, 95, 166, 60, 1, 399000.00, 399000.00, 'AK_004_blue.png', 1, 5, 0, 1),
(697, 96, 167, 55, 1, 450000.00, 450000.00, 'AK_002_black.png', 1, 2, 0, 1),
(698, 96, 167, 50, 1, 850000.00, 850000.00, 'ASM_001_brown.png', 1, 3, 0, 1),
(699, 96, 167, 67, 1, 315000.00, 315000.00, 'ASM_006_black.png', 1, 2, 0, 1),
(701, 96, 168, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_03019319.png', 1, 1, 1, 81),
(702, 97, 169, 46, 1, 320000.00, 320000.00, 'AT_003_white.png', 1, 1, 0, 1),
(703, 97, 169, 49, 1, 350000.00, 350000.00, 'AT_005_blue.png', 1, 5, 0, 1),
(705, 97, 170, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_73288057.png', 1, 1, 1, 82),
(706, 98, 171, 51, 1, 440000.00, 440000.00, 'APL_001_white.png', 1, 1, 0, 1),
(707, 98, 171, 52, 1, 350000.00, 350000.00, 'APL_002_white.png', 1, 1, 0, 1),
(708, 98, 171, 73, 1, 315000.00, 315000.00, 'APL_007_white.png', 1, 1, 0, 1),
(709, 99, 172, 75, 1, 399000.00, 399000.00, 'AK_007_yellow.png', 1, 10, 0, 1),
(710, 99, 172, 61, 1, 270000.00, 270000.00, 'AT_007_white.png', 1, 1, 0, 1),
(712, 99, 173, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_34305599.png', 1, 1, 1, 83),
(713, 100, 174, 50, 1, 850000.00, 850000.00, 'ASM_001_brown.png', 1, 3, 0, 1),
(714, 100, 174, 74, 1, 375000.00, 375000.00, 'AK_006_black.png', 1, 2, 0, 1),
(715, 100, 174, 72, 1, 315000.00, 315000.00, 'APL_006_black.png', 1, 2, 0, 1),
(717, 101, 175, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_80372540.png', 1, 1, 1, 84),
(718, 101, 176, 76, 1, 399000.00, 399000.00, 'AK_008_blue.png', 1, 5, 0, 1),
(719, 101, 177, 65, 1, 300000.00, 300000.00, 'ASM_004_white.png', 1, 1, 0, 1),
(720, 101, 178, 68, 1, 288000.00, 288000.00, 'ASM_007_blue.png', 1, 5, 0, 1),
(721, 102, 179, 53, 2, 490000.00, 980000.00, 'AK_001_white.png', 1, 1, 0, 1),
(722, 102, 180, 74, 1, 375000.00, 375000.00, 'AK_006_black.png', 1, 2, 0, 1),
(723, 103, 181, 73, 1, 315000.00, 315000.00, 'APL_007_white.png', 1, 1, 0, 1),
(724, 103, 182, 59, 1, 290000.00, 290000.00, 'AT_006_white.png', 1, 1, 0, 1),
(727, 103, 183, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_67008393.png', 1, 1, 1, 87),
(728, 104, 184, 75, 1, 399000.00, 399000.00, 'AK_007_yellow.png', 1, 10, 0, 1),
(729, 104, 184, 72, 1, 315000.00, 315000.00, 'APL_006_black.png', 1, 2, 0, 1),
(730, 104, 184, 64, 1, 300000.00, 300000.00, 'ASM_003_brown.png', 1, 3, 0, 1),
(731, 104, 184, 1, 1, 250000.00, 250000.00, 'AT_001_white.png', 1, 1, 0, 1),
(732, 104, 185, 72, 1, 315000.00, 315000.00, 'APL_006_black.png', 1, 2, 0, 1),
(733, 104, 186, 72, 1, 315000.00, 315000.00, 'APL_006_black.png', 1, 2, 0, 1),
(734, 105, 187, 49, 1, 350000.00, 350000.00, 'AT_005_blue.png', 1, 5, 0, 1),
(735, 105, 188, 75, 1, 399000.00, 399000.00, 'AK_007_yellow.png', 1, 10, 0, 1),
(736, 106, 189, 57, 1, 420000.00, 420000.00, 'AK_003_beige.png', 1, 8, 0, 1),
(737, 106, 190, 57, 1, 420000.00, 420000.00, 'AK_003_beige.png', 1, 8, 0, 1),
(738, 107, 191, 49, 1, 350000.00, 350000.00, 'AT_005_blue.png', 1, 5, 0, 1),
(739, 107, 192, 72, 1, 315000.00, 315000.00, 'APL_006_black.png', 1, 2, 0, 1),
(740, 107, 193, 74, 1, 375000.00, 375000.00, 'AK_006_black.png', 1, 2, 0, 1),
(741, 108, 194, 72, 1, 315000.00, 315000.00, 'APL_006_black.png', 1, 2, 0, 1),
(742, 108, 195, 59, 1, 290000.00, 290000.00, 'AT_006_white.png', 1, 1, 0, 1),
(743, 108, 196, 46, 1, 320000.00, 320000.00, 'AT_003_white.png', 1, 1, 0, 1),
(744, 109, 197, 45, 1, 290000.00, 290000.00, 'AT_002_white.png', 1, 1, 0, 1),
(745, 109, 198, 75, 1, 399000.00, 399000.00, 'AK_007_yellow.png', 1, 10, 0, 1),
(746, 110, 199, 65, 1, 300000.00, 300000.00, 'ASM_004_white.png', 1, 1, 0, 1),
(747, 110, 200, 70, 1, 250000.00, 250000.00, 'APL_004_white.png', 1, 1, 0, 1),
(748, 110, 201, 62, 1, 450000.00, 450000.00, 'AK_005_blue.png', 1, 5, 0, 1),
(749, 111, 202, 58, 1, 320000.00, 320000.00, 'ASM_002_brown.png', 1, 3, 0, 1),
(750, 111, 203, 53, 1, 490000.00, 490000.00, 'AK_001_white.png', 1, 1, 0, 1),
(751, 112, 204, 50, 1, 850000.00, 850000.00, 'ASM_001_brown.png', 1, 3, 0, 1),
(752, 112, 205, 47, 1, 290000.00, 290000.00, 'AT_004_blue.png', 1, 5, 0, 1),
(753, 113, 206, 46, 1, 320000.00, 320000.00, 'AT_003_white.png', 1, 1, 0, 1),
(754, 113, 207, 45, 1, 290000.00, 290000.00, 'AT_002_white.png', 1, 1, 0, 1),
(755, 113, 208, 1, 1, 250000.00, 250000.00, 'AT_001_white.png', 1, 1, 0, 1),
(756, 114, 209, 47, 1, 290000.00, 290000.00, 'AT_004_blue.png', 1, 5, 0, 1),
(757, 114, 210, 71, 1, 315000.00, 315000.00, 'APL_005_black.png', 1, 2, 0, 1),
(758, 114, 211, 65, 1, 300000.00, 300000.00, 'ASM_004_white.png', 1, 1, 0, 1),
(759, 115, 212, 66, 1, 300000.00, 300000.00, 'ASM_005_white.png', 1, 1, 0, 1),
(760, 115, 213, 1, 1, 250000.00, 250000.00, 'AT_001_white.png', 1, 1, 0, 1),
(761, 115, 214, 71, 1, 315000.00, 315000.00, 'APL_005_black.png', 1, 2, 0, 1),
(762, 116, 215, 55, 1, 450000.00, 450000.00, 'AK_002_black.png', 1, 2, 0, 1),
(763, 117, 216, 76, 1, 399000.00, 399000.00, 'AK_008_blue.png', 1, 5, 0, 1),
(764, 117, 217, 64, 1, 300000.00, 300000.00, 'ASM_003_brown.png', 1, 3, 0, 1),
(765, 118, 218, 61, 1, 270000.00, 270000.00, 'AT_007_white.png', 1, 1, 0, 1),
(766, 119, 219, 70, 1, 250000.00, 250000.00, 'APL_004_white.png', 1, 1, 0, 1),
(767, 120, 220, 74, 1, 375000.00, 375000.00, 'AK_006_black.png', 1, 2, 0, 1),
(768, 120, 221, 64, 1, 300000.00, 300000.00, 'ASM_003_brown.png', 1, 3, 0, 1),
(769, 104, 222, 73, 1, 315000.00, 315000.00, 'APL_007_white.png', 1, 1, 0, 1),
(772, 104, 223, 46, 1, 320000.00, 320000.00, 'AT_003_white.png', 1, 1, 0, 1),
(773, 104, 1, 1, 1, 300000.00, 300000.00, 'AT_DESIGN_59536545.png', 3, 1, 1, 89);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stt` int(3) NOT NULL DEFAULT 0,
  `sethome` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `stt`, `sethome`) VALUES
(11, 'Áo thun', 1, 1),
(12, 'Áo polo', 2, 1),
(13, 'Áo khoác', 3, 1),
(14, 'Áo sơ mi', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id` int(3) NOT NULL,
  `color` varchar(20) NOT NULL,
  `ma_color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id`, `color`, `ma_color`) VALUES
(1, 'Trắng', '#ffffff'),
(2, 'Đen', '#000000'),
(3, 'Nâu', '#5C3F2E'),
(4, 'Lục', '#014A36'),
(5, 'Lam', '#405474'),
(6, 'Tím', '#AAAFD8'),
(7, 'Hồng', '#DEB3B4'),
(8, 'Be', '#E6D2A6'),
(9, 'Cam', '#CB6747'),
(10, 'Vàng', '#FFAC24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(9) NOT NULL,
  `id_product` int(5) NOT NULL,
  `id_user` int(6) NOT NULL,
  `thoigian` date NOT NULL,
  `noidung` text NOT NULL,
  `rate` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_product`, `id_user`, `thoigian`, `noidung`, `rate`) VALUES
(37, 69, 91, '2023-12-07', 'Áo xấu quắc', 2),
(38, 71, 91, '2023-12-07', 'Tạm được', 2),
(39, 64, 92, '2023-12-07', 'Áo mà bày đặt bông với chả hoa', 1),
(40, 76, 92, '2023-12-07', 'Này bán đắt quá, không mua nữa đâu, hàng gì mà xấu quắc', 2),
(41, 65, 92, '2023-12-07', 'Áo đẹp', 4),
(42, 67, 92, '2023-12-07', 'Áo xinh nha', 2),
(43, 75, 92, '2023-12-07', 'Áo khoác mặc vào nóng', 3),
(44, 74, 93, '2023-12-07', 'Áo đẹp xuất sắc', 4),
(45, 72, 93, '2023-12-07', 'Áo nhìn sang', 0),
(46, 70, 93, '2023-12-07', 'Áo đẹp, phù hợp để đi chơi', 0),
(47, 69, 94, '2023-12-07', 'Chời ơi áo dì mà đẹp khùng đẹp điên', 5),
(48, 76, 94, '2023-12-07', 'Áo này mặc vô đi bay đi lắc xịn nha', 4),
(49, 49, 95, '2023-12-07', 'Nhìn mà muốn ăn luôn cái áo', 4),
(50, 58, 95, '2023-12-07', 'Áo nhìn màu nâu quá', 3),
(51, 50, 96, '2023-12-07', 'Áo này mặc hơi nóng nhưng đẹp', 4),
(52, 1, 96, '2023-12-07', 'Áo trắng mà mắc ác', 2),
(53, 47, 97, '2023-12-07', 'Màu xanh, không thích', 1),
(54, 46, 97, '2023-12-07', 'Áo đẹp nha, mua nha', 5),
(55, 45, 97, '2023-12-07', 'Áo này chắc đẹp mua test nè', 4),
(56, 75, 98, '2023-12-07', 'thích thích thích', 5),
(57, 60, 98, '2023-12-07', 'đẹp đẹp đẹp', 4),
(58, 71, 99, '2023-12-07', 'Mua về mặc thử ', 5),
(59, 76, 99, '2023-12-07', 'Áo gì mà không có tay áoo', 0),
(60, 69, 100, '2023-12-07', 'Áo vậy mà Dĩm nó khen, ghét vô cmt chê', 1),
(61, 73, 101, '2023-12-07', 'áo đẹp', 4),
(62, 51, 101, '2023-12-07', 'áo này đẹp luôn ', 5),
(63, 76, 101, '2023-12-07', 'Áo vải hong đẹp gì cả', 2),
(64, 68, 101, '2023-12-07', 'Áo sơ mi vải đẹp, không có gì để chê', 5),
(65, 62, 102, '2023-12-07', 'Tui thích style dạng năng động thế này', 4),
(66, 67, 102, '2023-12-07', 'tạm ổn', 4),
(67, 52, 103, '2023-12-07', 'Áo đẹp lắm luôn nhaaaa.!!', 4),
(68, 59, 103, '2023-12-07', 'áo này form đẹp', 0),
(69, 64, 104, '2023-12-07', 'Áo đẹp áo đẹp', 4),
(70, 75, 104, '2023-12-07', 'Áo này đẹp', 0),
(71, 74, 104, '2023-12-07', 'Áo này nóng', 2),
(72, 64, 104, '2023-12-07', 'Áo này màu mè', 0),
(73, 1, 104, '2023-12-07', 'Áo trắng dễ chơi dễ trúng thưởng', 0),
(74, 73, 104, '2023-12-07', 'Áo xấu vậy mà khen', 1),
(75, 72, 104, '2023-12-07', 'Áo đẹp cực', 0),
(76, 61, 104, '2023-12-07', 'Áo đẹp 10đ không có nhưng', 5),
(77, 49, 105, '2023-12-07', 'Đồ nhìn ngon thiệt', 0),
(78, 47, 105, '2023-12-07', 'Áo hơi bình thường', 3),
(79, 46, 105, '2023-12-07', 'Áo đẹp quá, sẽ mua tiếp', 0),
(80, 45, 105, '2023-12-07', 'Áo tạm tạm', 3),
(81, 57, 106, '2023-12-07', 'Áo vừa rẻ, vừa đẹp', 5),
(82, 1, 106, '2023-12-07', '셔츠가 너무 예쁜데 다들 혹평을 받네요', 5),
(83, 67, 106, '2023-12-07', '셔츠가 너무 예뻐요', 4),
(84, 52, 106, '2023-12-07', '셔츠가 너무 예뻐요', 5),
(85, 47, 107, '2023-12-07', 'Đẹp', 0),
(86, 72, 107, '2023-12-07', 'Áo này đẹp lắm', 4),
(87, 64, 107, '2023-12-07', 'Áo đẹp thật', 0),
(88, 75, 107, '2023-12-07', 'Áo đẹp như này chắc làm đại diện thương hiệu luôn quá', 5),
(89, 74, 107, '2023-12-07', 'Check email, add mình với', 5),
(90, 72, 108, '2023-12-07', 'Áo này nhìn cũng bình thường vậy mà mtp khen hơi lố', 2),
(91, 75, 108, '2023-12-07', 'mtp mua áo nào, tôi không mua áo đó', 1),
(92, 74, 108, '2023-12-07', 'Mua về mới biết đụng hàng mtp', 3),
(93, 76, 108, '2023-12-07', 'Áo đẹp', 0),
(94, 73, 108, '2023-12-07', 'Áo đẹp nhaa', 4),
(95, 61, 108, '2023-12-07', 'Áo đẹp vãiii', 4),
(96, 59, 108, '2023-12-07', '10đ', 5),
(97, 47, 108, '2023-12-07', 'Định khen, thấy mtp cmt', 2),
(98, 46, 108, '2023-12-07', 'Áo đẹp quá', 4),
(99, 45, 109, '2023-12-07', 'Áo đẹp', 0),
(100, 68, 109, '2023-12-07', 'đẹp đẹp đẹp đẹp', 4),
(101, 66, 109, '2023-12-07', 'Áo này dễ mặc', 4),
(102, 75, 109, '2023-12-07', 'Thấy hot mua thử', 4),
(103, 65, 110, '2023-12-07', '셔츠가 너무 예뻐요', 4),
(104, 70, 110, '2023-12-07', '셔츠가 너무 예뻐요', 4),
(105, 63, 110, '2023-12-07', '셔츠가 너무 예뻐요', 4),
(106, 62, 110, '2023-12-07', '셔츠가 너무 예뻐요', 3),
(107, 58, 111, '2023-12-07', '못생긴', 2),
(108, 57, 111, '2023-12-07', '못생긴', 1),
(109, 55, 111, '2023-12-07', '셔츠가 한국적이네요', 4),
(110, 51, 111, '2023-12-07', '예쁜', 3),
(111, 50, 112, '2023-12-07', 'Áo đẹp, giá cả học sinh tiểu học', 5),
(112, 49, 112, '2023-12-07', 'Nhìn thèm ghê', 3),
(113, 47, 112, '2023-12-07', 'Cái áo chữ D', 5),
(114, 46, 113, '2023-12-07', 'Áo bình thường', 3),
(115, 45, 113, '2023-12-07', 'Cũng được', 3),
(116, 1, 113, '2023-12-07', 'Áo đơn giản dễ mặc', 4),
(117, 66, 114, '2023-12-09', 'sản phẩm này đẹp', 0),
(118, 66, 114, '2023-12-09', 'sản phẩm okk', 4),
(119, 65, 114, '2023-12-09', 'Áo ok', 4),
(120, 66, 115, '2023-12-09', 'Sản phẩm giống như trên hình', 4),
(121, 58, 115, '2023-12-09', 'Áo đẹp', 4),
(122, 1, 115, '2023-12-09', 'Đơn giản', 2),
(123, 70, 116, '2023-12-09', 'Áo được', 3),
(124, 76, 117, '2023-12-09', 'Áo okkkk', 4),
(125, 72, 117, '2023-12-09', 'Áo xấu', 1),
(126, 64, 117, '2023-12-09', 'Áo xấuuu', 1),
(127, 61, 118, '2023-12-09', 'Áo đẹp vừa vừa', 3),
(128, 72, 119, '2023-12-09', 'Áo đẹp', 4),
(129, 47, 120, '2023-12-09', 'Đồ gì mà xấu', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dadung_voucher`
--

CREATE TABLE `dadung_voucher` (
  `id` int(11) NOT NULL,
  `id_voucher` int(6) NOT NULL,
  `id_user` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dadung_voucher`
--

INSERT INTO `dadung_voucher` (`id`, `id_voucher`, `id_user`) VALUES
(34, 2, 91),
(35, 2, 91),
(36, 3, 91),
(37, 2, 94),
(38, 2, 95),
(39, 3, 96),
(40, 3, 97),
(41, 2, 98),
(42, 2, 104),
(43, 2, 104);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `design`
--

CREATE TABLE `design` (
  `id` int(8) NOT NULL,
  `id_color` int(3) NOT NULL,
  `id_size` int(3) NOT NULL,
  `img_front` varchar(200) NOT NULL,
  `img_back` varchar(200) NOT NULL,
  `price` double(10,2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_user` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `design`
--

INSERT INTO `design` (`id`, `id_color`, `id_size`, `img_front`, `img_back`, `price`, `name`, `id_user`) VALUES
(1, 1, 4, '1', '1', 1.00, '1', 1),
(67, 1, 1, 'AT_DESIGN_05119196.png', 'AT_DESIGN_91059097.png', 200000.00, 'Áo thun tự thiết kế', 91),
(68, 1, 1, 'AT_DESIGN_44296425.png', 'AT_DESIGN_83480126.png', 300000.00, 'Áo thun tự thiết kế', 91),
(69, 1, 1, 'AT_DESIGN_27161754.png', 'AT_DESIGN_88431544.png', 300000.00, 'Áo thun tự thiết kế', 92),
(70, 1, 1, 'AT_DESIGN_20480023.png', 'AT_DESIGN_58569889.png', 300000.00, 'Áo thun tự thiết kế', 92),
(71, 8, 1, 'AT_DESIGN_33670188.png', 'AT_DESIGN_40893448.png', 300000.00, 'Áo thun tự thiết kế', 92),
(72, 8, 1, 'AT_DESIGN_26456666.png', 'AT_DESIGN_95127976.png', 300000.00, 'Áo thun tự thiết kế', 92),
(73, 1, 1, 'AT_DESIGN_26470811.png', 'AT_DESIGN_37802245.png', 300000.00, 'Áo thun tự thiết kế', 92),
(74, 1, 1, 'AT_DESIGN_87616594.png', 'AT_DESIGN_03258980.png', 300000.00, 'Áo thun tự thiết kế', 93),
(75, 1, 1, 'AT_DESIGN_59742211.png', 'AT_DESIGN_52022110.png', 300000.00, 'Áo thun tự thiết kế', 93),
(76, 1, 1, 'AT_DESIGN_03937412.png', 'AT_DESIGN_91207380.png', 300000.00, 'Áo thun tự thiết kế', 94),
(77, 1, 1, 'AT_DESIGN_60816077.png', 'AT_DESIGN_70526419.png', 300000.00, 'Áo thun tự thiết kế', 94),
(78, 1, 1, 'AT_DESIGN_74504028.png', 'AT_DESIGN_06989583.png', 200000.00, 'Áo thun tự thiết kế', 95),
(79, 1, 1, 'AT_DESIGN_14856513.png', 'AT_DESIGN_30806810.png', 300000.00, 'Áo thun tự thiết kế', 95),
(80, 1, 1, 'AT_DESIGN_49503286.png', 'AT_DESIGN_21564919.png', 200000.00, 'Áo thun tự thiết kế', 96),
(81, 1, 1, 'AT_DESIGN_03019319.png', 'AT_DESIGN_93093004.png', 300000.00, 'Áo thun tự thiết kế', 96),
(82, 1, 1, 'AT_DESIGN_73288057.png', 'AT_DESIGN_45168188.png', 300000.00, 'Áo thun tự thiết kế', 97),
(83, 1, 1, 'AT_DESIGN_34305599.png', 'AT_DESIGN_16677962.png', 300000.00, 'Áo thun tự thiết kế', 99),
(84, 1, 1, 'AT_DESIGN_80372540.png', 'AT_DESIGN_90358077.png', 300000.00, 'Áo thun tự thiết kế', 101),
(85, 1, 1, 'AT_DESIGN_51174406.png', 'AT_DESIGN_58687242.png', 200000.00, 'Áo thun tự thiết kế', 103),
(86, 1, 1, 'AT_DESIGN_53025504.png', 'AT_DESIGN_68460968.png', 300000.00, 'Áo thun tự thiết kế', 103),
(87, 1, 1, 'AT_DESIGN_67008393.png', 'AT_DESIGN_64178294.png', 300000.00, 'Áo thun tự thiết kế', 103),
(88, 1, 1, 'AT_DESIGN_33277609.png', 'AT_DESIGN_08248325.png', 200000.00, 'Áo thun tự thiết kế', 104),
(89, 3, 1, 'AT_DESIGN_59536545.png', 'AT_DESIGN_35913389.png', 300000.00, 'Áo thun tự thiết kế', 104);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(5) NOT NULL,
  `iduser` int(6) NOT NULL,
  `ma_donhang` varchar(10) NOT NULL,
  `ngaylap` date NOT NULL,
  `trangthai` varchar(50) NOT NULL,
  `tongtien` double(10,2) NOT NULL,
  `tendat` varchar(50) NOT NULL,
  `tennhan` varchar(50) DEFAULT NULL,
  `emaildat` varchar(50) NOT NULL,
  `emailnhan` varchar(50) DEFAULT NULL,
  `sdtdat` varchar(20) NOT NULL,
  `sdtnhan` varchar(20) DEFAULT NULL,
  `diachidat` varchar(100) NOT NULL,
  `diachinhan` varchar(100) DEFAULT NULL,
  `ptthanhtoan` varchar(50) NOT NULL,
  `giaohangnhanh` tinyint(1) NOT NULL DEFAULT 0,
  `id_voucher` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `iduser`, `ma_donhang`, `ngaylap`, `trangthai`, `tongtien`, `tendat`, `tennhan`, `emaildat`, `emailnhan`, `sdtdat`, `sdtnhan`, `diachidat`, `diachinhan`, `ptthanhtoan`, `giaohangnhanh`, `id_voucher`) VALUES
(1, 1, 'ADMIN_0001', '2023-01-23', 'Chưa thanh toán', 1.00, '1', '', '1', '', '1', NULL, '1', NULL, '1', 0, 1),
(147, 91, 'ZS_w0oP5Sn', '2023-01-07', 'Chưa thanh toán', 718200.00, 'Lê Minh Tú', '', 'lmt@gmail.com', '', '0123456789', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 2),
(148, 91, 'ZS_jNfkD8k', '2023-01-07', 'Chưa thanh toán', 718200.00, 'Lê Minh Tú', '', 'lmt@gmail.com', '', '0123456789', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 2),
(149, 91, 'ZS_dWRNWKj', '2023-02-07', 'Chưa thanh toán', 315000.00, 'Lê Minh Tú', '', 'leminhtu10062004@gmail.com', '', '0123456789', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(150, 91, 'ZS_a6bnlqv', '2023-02-07', 'Chưa thanh toán', 285000.00, 'Lê Minh Tú', '', 'leminhtu10062004@gmail.com', '', '0123456789', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 3),
(151, 91, 'ZS_X9wJxYk', '2023-03-07', 'Chưa thanh toán', 315000.00, 'Lê Minh Tú', '', 'leminhtu10062004@gmail.com', '', '0123456789', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(152, 91, 'ZS_UJynd2X', '2023-03-07', 'Chưa thanh toán', 300000.00, 'Lê Minh Tú', '', 'leminhtu10062004@gmail.com', '', '0123456789', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(153, 92, 'ZS_B8DNLlB', '2023-04-07', 'Chưa thanh toán', 250000.00, 'Tú Minh Lê', '', 'tuminhle1006@gmail.com', '', '0123456788', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(154, 92, 'ZS_7P1u5ad', '2023-04-07', 'Chưa thanh toán', 300000.00, 'Tú Minh Lê', '', 'tuminhle1006@gmail.com', '', '0123456788', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(155, 92, 'ZS_RedwIvF', '2023-05-07', 'Chưa thanh toán', 300000.00, 'Tú Minh Lê', '', 'tuminhle1006@gmail.com', '', '0123456788', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(156, 92, 'ZS_xq2byro', '2023-05-07', 'Chưa thanh toán', 399000.00, 'Tú Minh Lê', '', 'tuminhle1006@gmail.com', '', '0123456788', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(157, 93, 'ZS_Dlf5TTw', '2023-06-07', 'Chưa thanh toán', 288000.00, 'Minh Tú Lê', '', 'tuminhle1006@gmail.com', '', '0123456787', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(158, 93, 'ZS_6XYvaGF', '2023-06-07', 'Chưa thanh toán', 300000.00, 'Minh Tú Lê', '', 'tuminhle1006@gmail.com', '', '0123456787', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(159, 93, 'ZS_8zEKmZ0', '2023-07-07', 'Chưa thanh toán', 315000.00, 'Minh Tú Lê', '', 'tuminhle1006@gmail.com', '', '0123456787', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(160, 94, 'ZS_ajnLlur', '2023-07-07', 'Chưa thanh toán', 300000.00, 'Bùi Dương Dĩm', '', 'jodd23855@gmail.com', '', '0123456789', '', 'Bình Phước', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(161, 94, 'ZS_iv7BfKq', '2023-08-07', 'Chưa thanh toán', 300000.00, 'Bùi Dương Dĩm', '', 'jodd23855@gmail.com', '', '0123456789', '', 'Bình Phước', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(162, 94, 'ZS_0j9fwLW', '2023-08-07', 'Chưa thanh toán', 399000.00, 'Bùi Dương Dĩm', '', 'jodd23855@gmail.com', '', '0123456789', '', 'Bình Phước', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(163, 94, 'ZS_QlI4oCH', '2023-09-07', 'Chưa thanh toán', 1012500.00, 'Bùi Dương Dĩm', '', 'jodd23855@gmail.com', '', '0123456789', '', 'Bình Phước', '', 'Thanh toán trực tiếp khi giao hàng', 0, 2),
(164, 95, 'ZS_uwKwxgm', '2023-09-07', 'Chưa thanh toán', 1431000.00, 'Dương Dĩm Bùi', '', 'jodd23855@gmail.com', '', '0123456786', '', 'Bình Phước 1', '', 'Thanh toán trực tiếp khi giao hàng', 0, 2),
(165, 95, 'ZS_VPx0iaN', '2023-10-07', 'Chưa thanh toán', 300000.00, 'Dương Dĩm Bùi', '', 'jodd23855@gmail.com', '', '0123456786', '', 'Bình Phước 1', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(166, 95, 'ZS_jDziH8S', '2023-10-07', 'Chưa thanh toán', 959000.00, 'Dương Dĩm Bùi', '', 'jodd23855@gmail.com', '', '0123456786', '', 'Bình Phước 1', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(167, 96, 'ZS_uqAW9Fg', '2023-11-07', 'Chưa thanh toán', 1227400.00, 'Dĩm Bùi Dương', '', 'jodd23855@gmail.com', '', '0123456785', '', 'Bình Phước 2', '', 'Thanh toán bằng Thẻ quốc tế / Thẻ nội địa', 0, 3),
(168, 96, 'ZS_dI4bRUP', '2023-11-07', 'Chưa thanh toán', 300000.00, 'Dĩm Bùi Dương', '', 'jodd23855@gmail.com', '', '0123456785', '', 'Bình Phước 2', '', 'Thanh toán bằng Thẻ quốc tế / Thẻ nội địa', 0, 1),
(169, 97, 'ZS_j7zxMth', '2023-12-07', 'Chưa thanh toán', 509200.00, 'Nguyễn Hoàng Thông', '', 'thong@gmail.com', '', '0123456784', '', 'Vĩnh Long, Long An', '', 'Thanh toán trực tiếp khi giao hàng', 0, 3),
(170, 97, 'ZS_enE7gcy', '2023-12-07', 'Chưa thanh toán', 300000.00, 'Nguyễn Hoàng Thông', '', 'thong@gmail.com', '', '0123456784', '', 'Vĩnh Long, Long An', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(171, 98, 'ZS_VX8Kekp', '2023-01-07', 'Chưa thanh toán', 994500.00, 'Hoàng Thông', '', 'thong@gmail.com', '', '0123456783', '', 'Vĩnh Long, Long An', '', 'Thanh toán trực tiếp khi giao hàng', 0, 2),
(172, 99, 'ZS_uL6Waqp', '2023-01-07', 'Chưa thanh toán', 669000.00, 'Nguyễn Thanh Toàn', '', 'toan@gmail.com', '', '0123456783', '', 'Miền Nam', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(173, 99, 'ZS_sRLY0Wo', '2023-02-07', 'Chưa thanh toán', 300000.00, 'Nguyễn Thanh Toàn', '', 'toan@gmail.com', '', '0123456783', '', 'Miền Nam', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(174, 100, 'ZS_EOSVjvn', '2023-02-07', 'Chưa thanh toán', 1540000.00, 'Võ Hoàng Quý', '', 'quy@gmail.com', '', '0123456782', '', 'Miền Nam', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(175, 101, 'ZS_9IYnxo0', '2023-03-07', 'Chưa thanh toán', 300000.00, 'Lê Thị Mỹ Hồng', '', 'hongltmps28690@fpt.edu.vn', '', '0123456780', '', 'Sa Đéc', '', 'Thanh toán bằng ví MoMo', 0, 1),
(176, 101, 'ZS_W9xPawi', '2023-03-07', 'Chưa thanh toán', 399000.00, 'Lê Thị Mỹ Hồng', '', 'hongltmps28690@fpt.edu.vn', '', '0123456780', '', 'Sa Đéc', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(177, 101, 'ZS_oWTHF3c', '2023-04-07', 'Chưa thanh toán', 300000.00, 'Lê Thị Mỹ Hồng', '', 'hongltmps28690@fpt.edu.vn', '', '0123456780', '', 'Sa Đéc', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(178, 101, 'ZS_fXDKNZG', '2023-04-07', 'Chưa thanh toán', 288000.00, 'Lê Thị Mỹ Hồng', '', 'hongltmps28690@fpt.edu.vn', '', '0123456780', '', 'Sa Đéc', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(179, 102, 'ZS_b4HV6bS', '2023-05-07', 'Chưa thanh toán', 980000.00, 'Phạm Ngọc Lang', '', 'lagdz.1646@gmail.com', '', '0123456779', '', 'Quảng Ngãi', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(180, 102, 'ZS_wkWlebe', '2023-05-07', 'Chưa thanh toán', 375000.00, 'Phạm Ngọc Lang', '', 'lagdz.1646@gmail.com', '', '0123456779', '', 'Quảng Ngãi', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(181, 103, 'ZS_wJID5NZ', '2023-06-07', 'Chưa thanh toán', 315000.00, 'Lê Thị Mỹ Hường', '', 'myhong11a32004@gmail.com', '', '0704838199', '', 'Phùng Khắc Khoan', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(182, 103, 'ZS_zkX0N5P', '2023-06-07', 'Chưa thanh toán', 290000.00, 'Lê Thị Mỹ Hường', '', 'myhong11a32004@gmail.com', '', '0704838199', '', 'Phùng Khắc Khoan', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(183, 103, 'ZS_HcOB1Sz', '2023-07-07', 'Chưa thanh toán', 300000.00, 'Lê Thị Mỹ Hường', '', 'myhong11a32004@gmail.com', '', '0704838199', '', 'Phùng Khắc Khoan', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(184, 104, 'ZS_kFoKQc8', '2023-07-07', 'Chưa thanh toán', 1264000.00, 'Đỗ Tuấn Kiệt', '', 'hoa48488474773@gmail.com', '', '0123456778', '', 'Bến Tre', '', 'Thanh toán bằng Thẻ quốc tế / Thẻ nội địa', 0, 1),
(185, 104, 'ZS_q7lXPSY', '2023-08-07', 'Chưa thanh toán', 315000.00, 'Đỗ Tuấn Kiệt', '', 'hoa48488474773@gmail.com', '', '0123456778', '', 'Bến Tre', '', 'Thanh toán bằng Thẻ quốc tế / Thẻ nội địa', 0, 1),
(186, 104, 'ZS_I4jmhVR', '2023-08-07', 'Chưa thanh toán', 315000.00, 'Đỗ Tuấn Kiệt', '', 'hoa48488474773@gmail.com', '', '0123456778', '', 'Bến Tre', '', 'Thanh toán bằng Thẻ quốc tế / Thẻ nội địa', 0, 1),
(187, 105, 'ZS_wlxE2m5', '2023-09-07', 'Chưa thanh toán', 350000.00, 'Trần Anh Toàn', '', 'toan21420@gmail.com', '', '0123456775', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(188, 105, 'ZS_fJzeooF', '2023-09-07', 'Chưa thanh toán', 399000.00, 'Trần Anh Toàn', '', 'toan21420@gmail.com', '', '0123456775', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(189, 106, 'ZS_DfeoJPY', '2023-10-07', 'Chưa thanh toán', 420000.00, 'VVV', '', 'vbts@gmail.com', '', '0123456776', '', 'Nước ngoài', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(190, 106, 'ZS_pfm92se', '2023-10-07', 'Chưa thanh toán', 420000.00, 'VVV', '', 'vbts@gmail.com', '', '0123456776', '', 'Nước ngoài', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(191, 107, 'ZS_Eoxh9B8', '2023-11-07', 'Chưa thanh toán', 350000.00, 'Nguyễn Thanh Tùng', '', 'sontungmtp@gmail.com', '', '0123456774', '', 'Thái Bình', '', 'Thanh toán bằng Thẻ quốc tế / Thẻ nội địa', 0, 1),
(192, 107, 'ZS_RtqUfsW', '2023-11-07', 'Chưa thanh toán', 315000.00, 'Nguyễn Thanh Tùng', '', 'sontungmtp@gmail.com', '', '0123456774', '', 'Thái Bình', '', 'Thanh toán bằng Thẻ quốc tế / Thẻ nội địa', 0, 1),
(193, 107, 'ZS_PeOCU41', '2023-05-07', 'Chưa thanh toán', 375000.00, 'Nguyễn Thanh Tùng', '', 'sontungmtp@gmail.com', '', '0123456774', '', 'Thái Bình', '', 'Thanh toán bằng Thẻ quốc tế / Thẻ nội địa', 0, 1),
(194, 108, 'ZS_Czl76Mg', '2023-07-07', 'Chưa thanh toán', 315000.00, 'Trịnh Trần Phương Tuấn', '', 'j97@gmail.com', '', '0123456773', '', 'Miền Tây', '', 'Thanh toán bằng ví MoMo', 0, 1),
(195, 108, 'ZS_cgYmTT0', '2023-04-07', 'Chưa thanh toán', 290000.00, 'Trịnh Trần Phương Tuấn', '', 'j97@gmail.com', '', '0123456773', '', 'Miền Tây', '', 'Thanh toán bằng ví MoMo', 0, 1),
(196, 108, 'ZS_clgrO4s', '2023-08-07', 'Chưa thanh toán', 320000.00, 'Trịnh Trần Phương Tuấn', '', 'j97@gmail.com', '', '0123456773', '', 'Miền Tây', '', 'Thanh toán bằng ví MoMo', 0, 1),
(197, 109, 'ZS_hjEOwMa', '2023-08-07', 'Chưa thanh toán', 290000.00, 'Phan Thị Mỹ Tâm', '', 'mytam@gmail.com', '', '0123456772', '', 'Miền Nam', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(198, 109, 'ZS_7RbzWMg', '2023-10-07', 'Chưa thanh toán', 399000.00, 'Phan Thị Mỹ Tâm', '', 'mytam@gmail.com', '', '0123456772', '', 'Miền Nam', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(199, 110, 'ZS_Z89R7GL', '2023-10-07', 'Chưa thanh toán', 300000.00, 'naruto', '', 'naruto@gmail.com', '', '0123456771', '', 'Thế giới cartoon', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(200, 110, 'ZS_1zSWZVG', '2023-11-07', 'Chưa thanh toán', 250000.00, 'naruto', '', 'naruto@gmail.com', '', '0123456771', '', 'Thế giới cartoon', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(201, 110, 'ZS_0ROiO9j', '2023-11-07', 'Chưa thanh toán', 450000.00, 'naruto', '', 'naruto@gmail.com', '', '0123456771', '', 'Thế giới cartoon', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(202, 111, 'ZS_6F7FZeM', '2023-01-07', 'Chưa thanh toán', 320000.00, 'sasuke', '', 'sasuke@gmail.com', '', '0123456770', '', 'naa', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(203, 111, 'ZS_ILgKj4b', '2023-01-07', 'Chưa thanh toán', 490000.00, 'sasuke', '', 'sasuke@gmail.com', '', '0123456770', '', 'naa', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(204, 112, 'ZS_nkeeGKV', '2023-02-07', 'Chưa thanh toán', 850000.00, 'doraemon', '', 'doraemon@gmail.com', '', '0123456699', '', 'Nước ngoài', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(205, 112, 'ZS_IlSx9we', '2023-02-07', 'Chưa thanh toán', 290000.00, 'doraemon', '', 'doraemon@gmail.com', '', '0123456699', '', 'Nước ngoài', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(206, 113, 'ZS_Jv47tXR', '2023-03-07', 'Chưa thanh toán', 320000.00, 'nobita', '', 'nobita@gmail.com', '', '0123456768', '', 'Nước ngoài', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(207, 113, 'ZS_omW1KoO', '2023-03-07', 'Chưa thanh toán', 290000.00, 'nobita', '', 'nobita@gmail.com', '', '0123456768', '', 'Nước ngoài', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(208, 113, 'ZS_ZXN70bU', '2023-04-07', 'Chưa thanh toán', 250000.00, 'nobita', '', 'nobita@gmail.com', '', '0123456768', '', 'Nước ngoài', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(209, 114, 'ZS_R4Zv301', '2023-04-09', 'Chưa thanh toán', 290000.00, 'Trần Anh Toàn', '', 'toan21420@gmail.com', '', '0123456759', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(210, 114, 'ZS_WQac7zr', '2023-06-09', 'Chưa thanh toán', 315000.00, 'Trần Anh Toàn', '', 'toan21420@gmail.com', '', '0123456759', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(211, 114, 'ZS_NLW6TEQ', '2023-06-09', 'Chưa thanh toán', 300000.00, 'Trần Anh Toàn', '', 'toan21420@gmail.com', '', '0123456759', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(212, 115, 'ZS_8kPpe7u', '2023-08-09', 'Chưa thanh toán', 300000.00, 'Đỗ Tuấn Kiệt', '', 'hoa48488474773@gmail.com', '', '0123456711', '', 'Bến Tre', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(213, 115, 'ZS_gYNcNOc', '2023-08-09', 'Chưa thanh toán', 250000.00, 'Đỗ Tuấn Kiệt', '', 'hoa48488474773@gmail.com', '', '0123456711', '', 'Bến Tre', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(214, 115, 'ZS_uMOFCia', '2023-06-09', 'Chưa thanh toán', 315000.00, 'Đỗ Tuấn Kiệt', '', 'hoa48488474773@gmail.com', '', '0123456711', '', 'Bến Tre', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(215, 116, 'ZS_thmrJ5q', '2023-03-09', 'Chưa thanh toán', 450000.00, 'Kiệt Đỗ', '', 'hoa48488474773@gmail.com', '', '9876534256', '', 'Bến Tre', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(216, 117, 'ZS_uwZYpAu', '2023-03-09', 'Chưa thanh toán', 399000.00, 'mỹ pink', '', 'hongltmps28690@fpt.edu.vn', '', '8796543897', '', 'Miền Nam', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(217, 117, 'ZS_sFWeYnm', '2023-04-09', 'Chưa thanh toán', 300000.00, 'mỹ pink', '', 'hongltmps28690@fpt.edu.vn', '', '8796543897', '', 'Miền Nam', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(218, 118, 'ZS_5POEpRD', '2023-04-09', 'Chưa thanh toán', 270000.00, 'Hồng', '', 'hongltmps28690@fpt.edu.vn', '', '7648397650', '', 'Miền Nam', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(219, 119, 'ZS_e2UnauJ', '2023-12-09', 'Chưa thanh toán', 250000.00, 'Tú', '', 'lmt@gmail.com', '', '0987657852', '', 'TPHCM', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(220, 120, 'ZS_c5qmvTP', '2023-12-09', 'Chưa thanh toán', 375000.00, 'Cao Văn Quí', '', 'qui@gmail.com', '', '6758493764', '', 'Việt Nam', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(221, 120, 'ZS_6firuTx', '2023-11-09', 'Chưa thanh toán', 300000.00, 'Cao Văn Quí', '', 'qui@gmail.com', '', '6758493764', '', 'Việt Nam', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(222, 104, 'ZS_rJbPHKP', '2023-11-10', 'Chưa thanh toán', 315000.00, 'Đỗ Tuấn Kiệt', '', 'hoa48488474773@gmail.com', '', '0123456778', '', 'Bến Tre', '', 'Thanh toán trực tiếp khi giao hàng', 0, 1),
(223, 104, 'ZS_sDJLMJF', '2023-12-10', 'Chưa thanh toán', 288000.00, 'Đỗ Tuấn Kiệt', 'Sơn', 'hoa48488474773@gmail.com', 'son@gmail.com', '0123456778', '1235647895', 'Bến Tre', 'Tân Trung', 'Thanh toán bằng Thẻ quốc tế / Thẻ nội địa', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img_design`
--

CREATE TABLE `img_design` (
  `id` int(6) NOT NULL,
  `img` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `img_design`
--

INSERT INTO `img_design` (`id`, `img`, `id_user`) VALUES
(1, 'img_design1.png', 1),
(2, 'img_design2.png', 1),
(3, 'img_design3.png', 1),
(4, 'img_design4.png', 1),
(5, 'img_design5.png', 1),
(6, 'img_design6.png', 1),
(7, 'img_design7.png', 1),
(8, 'img_design8.png', 1),
(14, 'd60ff7cc8940201e7951.jpg', 92),
(15, '12d345c6204a8914d05b.jpg', 92),
(16, '12d345c6204a8914d05b.jpg', 92),
(17, '12d345c6204a8914d05b-removebg-preview.png', 92),
(18, 'ed50ac2495a83cf665b9-removebg-preview.png', 93),
(19, '85b110d50c59a507fc48.jpg', 95),
(20, '3eb710a90c25a57bfc34.jpg', 96),
(21, 'image-removebg-preview (3).png', 97),
(22, 'image-removebg-preview (4).png', 99),
(23, '4056d16fa9e000be59f1.jpg', 101),
(24, 'piccc.jpg', 103);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img_product_color`
--

CREATE TABLE `img_product_color` (
  `id` int(8) NOT NULL,
  `main_img` varchar(200) NOT NULL,
  `sub_img1` varchar(200) DEFAULT NULL,
  `sub_img2` varchar(200) DEFAULT NULL,
  `sub_img3` varchar(200) DEFAULT NULL,
  `id_product` int(5) NOT NULL,
  `id_color` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `img_product_color`
--

INSERT INTO `img_product_color` (`id`, `main_img`, `sub_img1`, `sub_img2`, `sub_img3`, `id_product`, `id_color`) VALUES
(1, 'AT_001_white.png', 'AT_001_white1.png', 'AT_001_detail1.jpg', 'AT_001_detail2.jpg', 1, 1),
(2, 'AT_001_black.png', 'AT_001_black1.png', 'AT_001_detail1.jpg', 'AT_001_detail2.jpg', 1, 2),
(3, 'AT_001_brown.png', 'AT_001_brown1.png', 'AT_001_detail1.jpg', 'AT_001_detail2.jpg', 1, 3),
(4, 'AT_001_green.png', 'AT_001_green1.png', 'AT_001_detail1.jpg', 'AT_001_detail2.jpg', 1, 4),
(5, 'AT_001_blue.png', 'AT_001_blue1.png', 'AT_001_detail1.jpg', 'AT_001_detail2.jpg', 1, 5),
(6, 'AT_001_purple.png', 'AT_001_purple1.png', 'AT_001_detail1.jpg', 'AT_001_detail2.jpg', 1, 6),
(7, 'AT_001_pink.png', 'AT_001_pink1.png', 'AT_001_detail1.jpg', 'AT_001_detail2.jpg', 1, 7),
(8, 'AT_001_beige.png', 'AT_001_beige1.png', 'AT_001_detail1.jpg', 'AT_001_detail2.jpg', 1, 8),
(9, 'AT_001_orange.png', 'AT_001_orange1.png', 'AT_001_detail1.jpg', 'AT_001_detail2.jpg', 1, 9),
(10, 'AT_001_yellow.png', 'AT_001_yellow1.png', 'AT_001_detail1.jpg', 'AT_001_detail2.jpg', 1, 10),
(11, 'AT_002_white.png', 'AT_002_detail1.jpg', 'AT_002_detail2.jpg', 'AT_001_detail1.jpg', 45, 1),
(12, 'AT_002_black.png', 'AT_002_detail1.jpg', 'AT_002_detail2.jpg', 'AT_001_detail1.jpg', 45, 2),
(13, 'AT_002_brown.png', 'AT_002_detail1.jpg', 'AT_002_detail2.jpg', 'AT_001_detail1.jpg', 45, 3),
(14, 'AT_002_green.png', 'AT_002_detail1.jpg', 'AT_002_detail2.jpg', 'AT_001_detail1.jpg', 45, 4),
(15, 'AT_003_white.png', 'AT_003_white1.jpg', 'AT_003_detail1.jpg', 'AT_003_detail2.webp', 46, 1),
(16, 'AT_003_black.png', 'AT_003_black1.webp', 'AT_003_detail1.jpg', 'AT_003_detail2.webp', 46, 2),
(17, 'AT_004_blue.png', 'AT_004_blue1.webp', 'AT_004_detail1.jpg', 'AT_004_detail1.jpg', 47, 5),
(23, 'APL_001_white.png', 'APL_001_white1.jpg', 'APL_001_white2.webp', 'APL_001_white3.webp', 51, 1),
(27, 'AK_001_white.png', 'AK_001_white1.webp', 'AK_001_white2.webp', 'AK_001_white3.webp', 53, 1),
(28, 'AK_001_black.png', 'AK_001_black1.webp', 'AK_001_black2.webp', 'AK_001_black3.webp', 53, 2),
(29, 'AK_002_black.png', 'AK_002_black1.webp', 'AK_002_black2.webp', 'AK_002_black3.webp', 55, 2),
(30, 'AK_002_beige.png', 'AK_002_beige1.webp', 'AK_002_beige2.webp', 'AK_002_beige3.webp', 55, 8),
(31, 'AK_003_beige.png', 'AK_003_beige1.webp', 'AK_003_beige2.webp', 'AK_003_beige3.webp', 57, 8),
(32, 'ASM_002_brown.png', 'ASM_002_brown1.webp', 'ASM_002_brown2.webp', 'ASM_002_brown3.webp', 58, 3),
(33, 'AT_006_white.png', 'AT_006_detail1.jpg', 'AT_006_detail2.jpg', 'AT_006_detail3.jpg', 59, 1),
(34, 'AT_006_black.png', 'AT_006_detail1.jpg', 'AT_006_detail2.jpg', 'AT_006_detail3.jpg', 59, 2),
(35, 'ASM_001_brown.png', 'ASM_001_detail1.jpg', 'ASM_001_detail2.webp', 'ASM_001_detail3.webp', 50, 3),
(36, 'ASM_001_beige.png', 'ASM_001_detail1.jpg', 'ASM_001_detail2.webp', 'ASM_001_detail3.webp', 50, 8),
(38, 'ASM_001_white.png', 'ASM_001_detail1.jpg', 'ASM_001_detail2.webp', 'ASM_001_detail3.webp', 50, 1),
(39, 'APL_002_white.png', 'APL_002_detail1.jpg', 'APL_002_detail2.jpg', 'APL_002_detail3.jpg', 52, 1),
(40, 'APL_002_black.png', 'APL_002_detail1.jpg', 'APL_002_detail2.jpg', 'APL_002_detail3.jpg', 52, 2),
(41, 'AT_005_blue.png', 'AT_005_detail1.jpg', 'AT_005_detail2.jpg', 'AT_005_detail3.jpg', 49, 5),
(42, 'AT_005_white.png', 'AT_005_detail1.jpg', 'AT_005_detail2.jpg', 'AT_005_detail3.jpg', 49, 1),
(43, 'AT_005_black.png', 'AT_005_detail1.jpg', 'AT_005_detail2.jpg', 'AT_005_detail3.jpg', 49, 2),
(44, 'AK_004_blue.png', 'AK_004_blue1.webp', 'Ak_004_detail1.webp', 'AK_004_detail2.jpg', 60, 5),
(45, 'AT_007_white.png', 'AT_007_detail1.jpg', 'AT_007_detail2.webp', 'AT_007_detail3.webp', 61, 1),
(46, 'AT_007_black.png', 'AT_007_detail1.jpg', 'AT_007_detail2.webp', 'AT_007_detail3.webp', 61, 2),
(47, 'AK_005_blue.png', 'AK_005_blue1.webp', 'AK_005_detail1.webp', 'AK_005_detail2.webp', 62, 5),
(49, 'AT_008_black.png', 'AT_008_black1.webp', 'AT_008_detail1.webp', 'AT_008_detail2.jpg', 63, 2),
(50, 'ASM_003_brown.png', 'ASM_003_brown1.webp', 'ASM_003_detail1.jpg', 'ASM_003_detail2.jpg', 64, 3),
(51, 'ASM_004_white.png', 'ASM_004_white1.webp', 'ASM_004_detail1.webp', 'ASM_004_detail2.jpg', 65, 1),
(52, 'ASM_005_white.png', 'ASM_005_detail1.webp', 'ASM_005_detail2.webp', 'ASM_005_detail3.webp', 66, 1),
(53, 'ASM_005_black.png', 'ASM_005_detail1.webp', 'ASM_005_detail2.webp', 'ASM_005_detail3.webp', 66, 2),
(54, 'ASM_006_black.png', 'ASM_006_black1.jpg', 'ASM_006_detail1.webp', 'ASM_006_detail2.webp', 67, 2),
(55, 'ASM_007_blue.png', 'ASM_007_detail1.jpg', 'ASM_007_detail2.jpg', 'ASM_007_detail3.jpg', 68, 5),
(56, 'APL_003_black.png', 'APL_003_black1.webp', 'APL_003_detail1.webp', 'APL_003_detail2.webp', 69, 2),
(57, 'APL_004_white.png', 'APL_004_white1.jpg', 'APL_004_detail1.jpg', 'APL_004_detail2.jpg', 70, 1),
(58, 'APL_005_black.png', 'APL_005_black1.jpg', 'APL_005_detail1.jpg', 'APL_005_detail2.jpg', 71, 2),
(59, 'APL_006_black.png', 'APL_006_detail1.webp', 'APL_006_detail2.webp', 'APL_006_detail3.jpg', 72, 2),
(60, 'APL_006_beige.png', 'APL_006_detail1.webp', 'APL_006_detail2.webp', 'APL_006_detail3.jpg', 72, 8),
(61, 'APL_007_white.png', 'APL_007_white1.jpg', 'APL_007_detail1.jpg', 'APL_007_detail2.jpg', 73, 1),
(62, 'AK_006_black.png', 'AK_006_detail1.webp', 'AK_006_detail2.webp', 'AK_006_detail3.webp', 74, 2),
(64, 'AK_007_yellow.png', 'AK_007_yellow1.jpg', 'AK_007_detail1.jpg', 'AK_007_detail1.jpg', 75, 10),
(65, 'AK_008_blue.png', 'AK_008_blue1.jpg', 'AK_008_detail1.jpg', 'AK_008_detail1.jpg', 76, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `ma_sanpham` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `priceold` double(10,2) NOT NULL DEFAULT 0.00,
  `hot` tinyint(1) NOT NULL DEFAULT 0,
  `noibat` tinyint(1) NOT NULL DEFAULT 0,
  `chitiet` varchar(1000) DEFAULT NULL,
  `gioitinh` tinyint(1) DEFAULT 0,
  `idcatalog` int(3) NOT NULL,
  `bestsell` tinyint(1) NOT NULL DEFAULT 0,
  `view` int(6) NOT NULL DEFAULT 0,
  `trend` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `ma_sanpham`, `name`, `price`, `priceold`, `hot`, `noibat`, `chitiet`, `gioitinh`, `idcatalog`, `bestsell`, `view`, `trend`) VALUES
(1, 'AT_001', 'Áo Thun Regular Basic', 250000.00, 0.00, 0, 0, '', 0, 11, 1, 286, 0),
(45, 'AT_002', 'Áo Thun Regular Come', 290000.00, 350000.00, 1, 1, NULL, 1, 11, 1, 101, 0),
(46, 'AT_003', 'Áo Thun Oversize Cổ V', 320000.00, 0.00, 1, 1, NULL, 0, 11, 1, 85, 1),
(47, 'AT_004', 'Áo Thun Regular Rhythm', 290000.00, 330000.00, 0, 1, NULL, 1, 11, 1, 123, 1),
(49, 'AT_005', 'Áo Thun Streetfood Pop Art', 350000.00, 0.00, 0, 1, NULL, 0, 11, 1, 69, 1),
(50, 'ASM_001', 'Áo Sơmi Cuban Label', 850000.00, 900000.00, 0, 1, NULL, 1, 14, 1, 59, 0),
(51, 'APL_001', 'Áo Polo Nam Tay Ngắn', 440000.00, 500000.00, 0, 0, NULL, 1, 12, 0, 136, 1),
(52, 'APL_002', 'Áo Polo Elegant Alphabet', 350000.00, 390000.00, 0, 1, NULL, 1, 12, 0, 34, 1),
(53, 'AK_001', 'Áo Khoác Regular Surpass', 490000.00, 0.00, 1, 1, NULL, 2, 13, 0, 71, 1),
(55, 'AK_002', 'Áo Khoác Raglan Colorblock', 450000.00, 0.00, 0, 1, NULL, 0, 13, 1, 117, 0),
(57, 'AK_003', 'Áo Khoác Varsity Festive Vibe', 420000.00, 450000.00, 0, 0, NULL, 0, 13, 1, 33, 0),
(58, 'ASM_002', 'Áo Sơ mi Cuban Abstract', 320000.00, 0.00, 0, 0, NULL, 1, 14, 1, 54, 0),
(59, 'AT_006', 'Áo Thun Regular Special', 290000.00, 0.00, 0, 0, NULL, 1, 11, 0, 78, 1),
(60, 'AK_004', 'Áo Khoác Zstyle Classic', 399000.00, 0.00, 0, 0, NULL, 0, 13, 0, 85, 0),
(61, 'AT_007', 'Áo Thun Mono Zstyle', 270000.00, 0.00, 1, 0, NULL, 0, 11, 0, 102, 1),
(62, 'AK_005', 'Áo Khoác Varsity Rhythm', 450000.00, 399000.00, 1, 0, NULL, 0, 13, 0, 100, 1),
(63, 'AT_008', 'Áo Thun Regular Tiger', 390000.00, 350000.00, 1, 0, NULL, 0, 11, 0, 10, 1),
(64, 'ASM_003', 'Áo Sơmi Cuban Floral Plain', 300000.00, 350000.00, 1, 1, NULL, 0, 14, 0, 73, 1),
(65, 'ASM_004', 'Áo Sơmi Oxford Regular', 300000.00, 350000.00, 1, 0, NULL, 0, 14, 0, 113, 1),
(66, 'ASM_005', 'Áo Sơmi Slimfit Button Down', 300000.00, 350000.00, 1, 0, NULL, 0, 14, 0, 166, 1),
(67, 'ASM_006', 'Áo Sơmi Cuban Chrysanthenum', 315000.00, 350000.00, 0, 0, NULL, 0, 14, 1, 85, 0),
(68, 'ASM_007', 'Áo Sơmi Logo Customize Vertical', 288000.00, 320000.00, 1, 0, NULL, 0, 14, 1, 50, 1),
(69, 'APL_003', 'Áo Polo Radiate Positivity', 315000.00, 350000.00, 0, 0, NULL, 0, 12, 1, 156, 1),
(70, 'APL_004', 'Áo Polo Horional Green Stripes', 250000.00, 350000.00, 0, 0, NULL, 1, 12, 1, 13, 0),
(71, 'APL_005', 'Áo Polo Milk Coffee Striped', 315000.00, 350000.00, 1, 0, NULL, 1, 12, 1, 60, 1),
(72, 'APL_006', 'Áo Polo Alphabet Pattern', 315000.00, 350000.00, 1, 1, NULL, 0, 12, 1, 225, 1),
(73, 'APL_007', 'Áo Polo Regular Horizonal', 315000.00, 350000.00, 0, 0, NULL, 0, 12, 1, 92, 1),
(74, 'AK_006', 'Áo Khoác Windproof Flexible', 375000.00, 420000.00, 1, 1, NULL, 0, 13, 1, 227, 1),
(75, 'AK_007', 'Áo Khoác Raglan Clock Color', 399000.00, 490000.00, 1, 1, NULL, 0, 13, 1, 266, 1),
(76, 'AK_008', 'Áo Trucker Denim Extended', 399000.00, 520000.00, 0, 0, NULL, 0, 13, 0, 69, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` int(3) NOT NULL,
  `ma_size` varchar(10) NOT NULL,
  `chieucao` varchar(20) NOT NULL,
  `cannang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `ma_size`, `chieucao`, `cannang`) VALUES
(1, 'XS', '1m54 - 1m59', '42kg - 47kg'),
(2, 'S', '1m56 - 1m63', '50kg - 59kg'),
(3, 'M', '1m56 - 1m68', '60kg - 65kg'),
(4, 'L', '1m56 - 1m80', '60kg - 75kg'),
(5, 'XL', '1m59 - 1m88', '60kg - 80kg'),
(6, 'XXL', '1m64 - 1m88', '70kg - 99kg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `soluongtonkho`
--

CREATE TABLE `soluongtonkho` (
  `id` int(6) NOT NULL,
  `id_product` int(5) NOT NULL,
  `id_size` int(3) NOT NULL,
  `id_color` int(3) NOT NULL,
  `soluong` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `soluongtonkho`
--

INSERT INTO `soluongtonkho` (`id`, `id_product`, `id_size`, `id_color`, `soluong`) VALUES
(1, 1, 1, 1, 10),
(2, 1, 2, 1, 5),
(3, 1, 3, 1, 18),
(4, 1, 4, 1, 14),
(5, 1, 5, 1, 10),
(6, 1, 6, 1, 5),
(7, 1, 1, 2, 7),
(8, 1, 2, 2, 7),
(9, 1, 3, 2, 11),
(10, 1, 4, 2, 9),
(11, 1, 5, 2, 6),
(12, 1, 6, 2, 13),
(13, 1, 1, 3, 7),
(14, 1, 2, 3, 10),
(15, 1, 3, 3, 12),
(16, 1, 4, 3, 7),
(17, 1, 5, 3, 14),
(18, 1, 6, 3, 8),
(19, 1, 1, 4, 6),
(20, 1, 2, 4, 8),
(21, 1, 3, 4, 10),
(22, 1, 4, 4, 5),
(23, 1, 5, 4, 10),
(24, 1, 6, 4, 5),
(25, 1, 1, 5, 7),
(26, 1, 2, 5, 10),
(27, 1, 3, 5, 5),
(28, 1, 4, 5, 10),
(29, 1, 5, 5, 6),
(30, 1, 6, 5, 6),
(31, 1, 1, 6, 10),
(32, 1, 2, 6, 5),
(33, 1, 3, 6, 6),
(34, 1, 4, 6, 9),
(35, 1, 5, 6, 7),
(36, 1, 6, 6, 10),
(37, 1, 1, 7, 6),
(38, 1, 2, 7, 9),
(39, 1, 3, 7, 8),
(40, 1, 4, 7, 13),
(41, 1, 5, 7, 7),
(42, 1, 6, 7, 10),
(43, 1, 1, 8, 10),
(44, 1, 2, 8, 8),
(45, 1, 3, 8, 10),
(46, 1, 4, 8, 8),
(47, 1, 5, 8, 10),
(48, 1, 6, 8, 9),
(49, 1, 1, 9, 7),
(50, 1, 2, 9, 8),
(51, 1, 3, 9, 12),
(52, 1, 4, 9, 10),
(53, 1, 5, 9, 8),
(54, 1, 6, 9, 9),
(55, 1, 1, 10, 10),
(56, 1, 2, 10, 8),
(57, 1, 3, 10, 8),
(58, 1, 4, 10, 13),
(59, 1, 5, 10, 6),
(60, 1, 6, 10, 13),
(61, 45, 1, 1, 77),
(62, 45, 2, 1, 60),
(63, 45, 3, 1, 55),
(64, 45, 4, 1, 15),
(65, 45, 5, 1, 3),
(66, 45, 6, 1, 60),
(67, 45, 1, 2, 40),
(68, 45, 1, 2, 40),
(69, 45, 2, 2, 100),
(70, 45, 3, 2, 75),
(71, 45, 4, 2, 90),
(72, 45, 5, 2, 5),
(73, 45, 6, 2, 70),
(74, 45, 1, 3, 65),
(75, 45, 2, 3, 34),
(76, 45, 3, 3, 20),
(77, 45, 4, 3, 87),
(78, 45, 5, 3, 91),
(79, 45, 6, 3, 45),
(80, 45, 1, 4, 32),
(81, 45, 2, 4, 67),
(82, 45, 3, 4, 23),
(83, 45, 4, 4, 80),
(84, 45, 5, 4, 75),
(85, 45, 6, 4, 89),
(86, 46, 1, 1, 50),
(87, 46, 2, 1, 35),
(88, 46, 3, 1, 78),
(89, 46, 4, 1, 50),
(90, 46, 5, 1, 76),
(91, 46, 6, 1, 8),
(92, 47, 1, 5, 22),
(93, 47, 2, 5, 67),
(94, 47, 3, 5, 56),
(95, 47, 4, 5, 3),
(96, 47, 5, 5, 88),
(97, 47, 6, 5, 59),
(98, 49, 1, 1, 45),
(99, 49, 2, 1, 99),
(100, 49, 3, 1, 66),
(101, 49, 4, 1, 59),
(102, 49, 6, 1, 49),
(103, 49, 5, 1, 47),
(104, 49, 1, 2, 12),
(105, 49, 2, 2, 34),
(106, 49, 3, 2, 5),
(107, 49, 4, 2, 1),
(108, 49, 5, 2, 86),
(109, 49, 6, 2, 90),
(110, 49, 1, 5, 12),
(111, 49, 2, 5, 76),
(112, 49, 3, 5, 45),
(113, 49, 4, 5, 95),
(114, 49, 5, 5, 46),
(115, 49, 6, 5, 89),
(116, 50, 1, 1, 50),
(117, 50, 2, 1, 78),
(118, 50, 3, 1, 60),
(119, 50, 4, 1, 80),
(120, 50, 5, 1, 50),
(121, 50, 6, 1, 89),
(122, 50, 1, 8, 56),
(123, 50, 2, 8, 79),
(124, 50, 3, 8, 35),
(125, 50, 4, 8, 65),
(126, 50, 5, 8, 78),
(127, 50, 6, 8, 86),
(128, 50, 1, 3, 41),
(129, 50, 2, 3, 40),
(130, 50, 3, 3, 3),
(131, 50, 4, 3, 10),
(132, 50, 5, 3, 72),
(133, 50, 6, 3, 71),
(134, 51, 1, 1, 44),
(135, 51, 2, 1, 34),
(136, 51, 3, 1, 76),
(137, 51, 4, 1, 6),
(138, 51, 5, 1, 10),
(139, 51, 6, 1, 78),
(140, 52, 1, 1, 6),
(141, 52, 2, 1, 71),
(142, 52, 3, 1, 65),
(143, 52, 4, 1, 86),
(144, 52, 5, 1, 14),
(145, 52, 6, 1, 32),
(146, 52, 1, 2, 2),
(147, 52, 2, 2, 54),
(148, 52, 3, 2, 63),
(149, 52, 4, 2, 70),
(150, 52, 5, 2, 80),
(151, 52, 6, 2, 15),
(152, 53, 1, 1, 41),
(153, 53, 2, 1, 12),
(154, 53, 3, 1, 19),
(155, 53, 4, 1, 78),
(156, 53, 5, 1, 92),
(157, 53, 6, 1, 93),
(158, 53, 1, 2, 51),
(159, 53, 2, 2, 43),
(160, 53, 3, 2, 17),
(161, 53, 4, 2, 98),
(162, 53, 5, 2, 62),
(163, 53, 6, 2, 15),
(164, 55, 1, 2, 23),
(165, 55, 2, 2, 35),
(166, 55, 3, 2, 45),
(167, 55, 4, 2, 5),
(168, 55, 5, 2, 15),
(169, 55, 6, 2, 95),
(170, 55, 1, 8, 32),
(171, 55, 2, 8, 15),
(172, 55, 3, 8, 76),
(173, 55, 4, 8, 80),
(174, 55, 5, 8, 40),
(175, 55, 6, 8, 13),
(176, 57, 1, 8, 51),
(177, 57, 2, 8, 65),
(178, 57, 3, 8, 13),
(179, 57, 4, 8, 98),
(180, 57, 5, 8, 56),
(181, 57, 6, 8, 34),
(182, 58, 1, 3, 22),
(183, 58, 2, 3, 54),
(184, 58, 3, 3, 78),
(185, 58, 4, 3, 89),
(186, 58, 5, 3, 60),
(187, 58, 6, 3, 62),
(188, 59, 1, 1, 29),
(189, 59, 2, 1, 67),
(190, 59, 3, 1, 84),
(191, 59, 4, 1, 90),
(192, 59, 5, 1, 43),
(193, 59, 6, 1, 76),
(194, 59, 1, 2, 89),
(195, 59, 2, 2, 43),
(196, 59, 3, 2, 21),
(197, 59, 4, 2, 78),
(198, 59, 5, 2, 45),
(199, 59, 6, 2, 94),
(200, 60, 1, 5, 44),
(201, 60, 2, 5, 34),
(202, 60, 3, 5, 29),
(203, 60, 4, 5, 76),
(204, 60, 5, 5, 99),
(205, 60, 6, 5, 57),
(206, 61, 1, 1, 53),
(207, 61, 2, 1, 34),
(208, 61, 3, 1, 44),
(209, 61, 4, 1, 96),
(210, 61, 5, 1, 12),
(211, 61, 6, 1, 6),
(212, 61, 1, 2, 45),
(213, 61, 2, 2, 40),
(214, 61, 3, 2, 32),
(215, 61, 4, 2, 34),
(216, 61, 5, 2, 67),
(217, 61, 6, 2, 23),
(218, 62, 1, 5, 16),
(219, 62, 2, 5, 9),
(220, 62, 3, 5, 25),
(221, 62, 4, 5, 56),
(222, 62, 5, 5, 78),
(223, 62, 6, 5, 56),
(224, 63, 1, 2, 97),
(225, 63, 2, 2, 15),
(226, 63, 3, 2, 73),
(227, 63, 4, 2, 87),
(228, 63, 5, 2, 77),
(229, 63, 6, 2, 54),
(230, 64, 1, 3, 35),
(231, 64, 2, 3, 90),
(232, 64, 3, 3, 46),
(233, 64, 4, 3, 99),
(234, 64, 5, 3, 82),
(235, 64, 6, 3, 78),
(236, 65, 1, 1, 31),
(237, 65, 2, 1, 12),
(238, 65, 3, 1, 10),
(239, 65, 4, 1, 87),
(240, 65, 5, 1, 54),
(241, 65, 6, 1, 23),
(242, 66, 1, 1, 87),
(243, 66, 2, 1, 54),
(244, 66, 3, 1, 75),
(245, 66, 4, 1, 98),
(246, 66, 5, 1, 51),
(247, 66, 6, 1, 45),
(248, 66, 1, 2, 21),
(249, 66, 2, 2, 20),
(250, 66, 3, 2, 30),
(251, 66, 4, 2, 40),
(252, 66, 5, 2, 67),
(253, 66, 6, 2, 98),
(254, 67, 1, 2, 64),
(255, 67, 2, 2, 55),
(256, 67, 3, 2, 10),
(257, 67, 4, 2, 23),
(258, 67, 5, 2, 78),
(259, 67, 6, 2, 43),
(260, 68, 1, 5, 92),
(261, 68, 2, 5, 70),
(262, 68, 3, 5, 50),
(263, 68, 4, 5, 7),
(264, 68, 5, 5, 98),
(265, 68, 6, 5, 65),
(266, 69, 1, 2, 40),
(267, 69, 2, 2, 76),
(268, 69, 3, 2, 87),
(269, 69, 4, 2, 53),
(270, 69, 5, 2, 12),
(271, 69, 6, 2, 81),
(272, 70, 1, 1, 72),
(273, 70, 2, 1, 34),
(274, 70, 3, 1, 87),
(275, 70, 4, 1, 19),
(276, 70, 5, 1, 43),
(277, 70, 6, 1, 76),
(278, 71, 1, 2, 77),
(279, 71, 2, 2, 45),
(280, 71, 3, 2, 19),
(281, 71, 4, 2, 84),
(282, 71, 5, 2, 13),
(283, 71, 6, 2, 54),
(284, 72, 1, 2, 69),
(285, 72, 2, 2, 56),
(286, 72, 3, 2, 91),
(287, 72, 4, 2, 45),
(288, 72, 5, 2, 96),
(289, 72, 6, 2, 36),
(290, 72, 1, 8, 77),
(291, 72, 2, 8, 45),
(292, 72, 3, 8, 40),
(293, 72, 4, 8, 41),
(294, 72, 5, 8, 82),
(295, 72, 6, 8, 67),
(296, 73, 1, 1, 81),
(297, 73, 2, 1, 32),
(298, 73, 3, 1, 67),
(299, 73, 4, 1, 43),
(300, 73, 5, 1, 12),
(301, 73, 6, 1, 6),
(302, 74, 1, 2, 6),
(303, 74, 2, 2, 76),
(304, 74, 3, 2, 8),
(305, 74, 4, 2, 5),
(306, 74, 5, 2, 30),
(307, 74, 6, 2, 65),
(308, 75, 1, 10, 20),
(309, 75, 2, 10, 85),
(310, 75, 3, 10, 88),
(311, 75, 4, 10, 32),
(312, 75, 5, 10, 65),
(313, 75, 6, 10, 12),
(314, 76, 1, 5, 51),
(315, 76, 2, 5, 98),
(316, 76, 3, 5, 43),
(317, 76, 4, 5, 43),
(318, 76, 5, 5, 4),
(319, 76, 6, 5, 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(200) NOT NULL,
  `thoigian` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `title`, `img`, `thoigian`, `noidung`) VALUES
(1, 'Phong cách unisex là gì?', 'img_news1.jpeg', '2023-11-29', 'Unisex là một tính từ dùng để chỉ sự những kiểu trang phục không phân biệt về giới tính, phù hợp với tất cả hai giới và khiến hai giới trông tương tự, giống nhau. Chúng được giới trẻ gọi là trang phục phi giới tính hoặc trung lập giới tính.'),
(2, 'Những sự thật thú vị về chiếc áo thun.', 'img_news2.jpg', '2023-11-30', 'Bên cạnh quần jeans, áo thun cũng là trang phục cực kỳ phổ biến, không chỉ với giới trẻ mà còn với tất cả mọi người ở mọi lứa tuổi. Đặc biệt hơn, áo thun là món đồ không bao giờ lỗi mốt, lại còn dễ dàng mix match với bất kỳ items và mọi'),
(3, 'Tạp chí Life là ấn phẩm đầu tiên “lăng xê” áo thun', 'img_news3.jpg', '2023-11-30', 'Bìa tạp chí Life năm 1942 đã góp phần đưa áo phông trở thành biểu tượng thời trang nổi tiếng. Bỗng dưng, áo thun trở thành một thứ thời trang đầy cá tính, và nó “đòi hỏi”'),
(4, 'Áo thun xuất hiện trên màn ảnh vào năm 1950', 'img_news4.webp', '2023-12-30', 'Tuy nhiên, áo thun chỉ thật sự được chú ý từ sau những năm 1950s đến nay sau sự xuất hiện của bộ phim hành động báo thù mang tên “A street car named Desire” ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` text DEFAULT NULL,
  `gioitinh` tinyint(1) NOT NULL DEFAULT 0,
  `ngaysinh` date DEFAULT NULL,
  `diachi` text DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `img` varchar(100) DEFAULT NULL,
  `kichhoat` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `name`, `email`, `sdt`, `gioitinh`, `ngaysinh`, `diachi`, `role`, `img`, `kichhoat`) VALUES
(1, 'admin', 'admin', 'Đỗ Tuấn Kiệt', 'dotuankiet04092003@gmail.com', '0383858853', 1, '2003-09-04', 'Gò Vấp', 1, NULL, 1),
(91, 'leminhtu', '123456', 'Lê Minh Tú', 'leminhtu10062004@gmail.com', '0123456789', 0, '0000-00-00', 'TPHCM', 0, '', 1),
(92, 'tuminhle', '123456', 'Tú Minh Lê', 'tuminhle1006@gmail.com', '0123456788', 0, '0000-00-00', 'TPHCM', 0, '', 1),
(93, 'minhtule', '123456', 'Minh Tú Lê', 'tuminhle1006@gmail.com', '0123456787', 0, '0000-00-00', 'TPHCM', 0, 'sothich.jpg', 1),
(94, 'duongdim', '123456', 'Bùi Dương Dĩm', 'jodd23855@gmail.com', '0123456789', 0, '0000-00-00', 'Bình Phước', 0, '85b110d50c59a507fc48.jpg', 1),
(95, 'dimduong', '123456', 'Dương Dĩm Bùi', 'jodd23855@gmail.com', '0123456786', 0, '0000-00-00', 'Bình Phước 1', 0, '9d6f1d03018fa8d1f19e.jpg', 1),
(96, 'dimbui', '123456', 'Dĩm Bùi Dương', 'jodd23855@gmail.com', '0123456785', 0, '0000-00-00', 'Bình Phước 2', 0, '3eb710a90c25a57bfc34.jpg', 1),
(97, 'thong', '123456', 'Nguyễn Hoàng Thông', 'thong@gmail.com', '0123456784', 0, '0000-00-00', 'Vĩnh Long, Long An', 0, 'image-removebg-preview (2).png', 1),
(98, 'hoangthong', '123456', 'Hoàng Thông', 'thong@gmail.com', '0123456783', 0, '0000-00-00', 'Vĩnh Long, Long An', 0, 'image-removebg-preview (3).png', 1),
(99, 'thanhtoan', '123456', 'Nguyễn Thanh Toàn', 'toan@gmail.com', '0123456783', 0, '0000-00-00', 'Miền Nam', 0, 'image-removebg-preview (4).png', 1),
(100, 'quy', '123456', 'Võ Hoàng Quý', 'quy@gmail.com', '0123456782', 0, '0000-00-00', 'Miền Nam', 0, 'image-removebg-preview (5).png', 1),
(101, 'mhong', '123456', 'Lê Thị Mỹ Hồng', 'hongltmps28690@fpt.edu.vn', '0123456780', 0, '2004-08-12', 'Sa Đéc', 0, 'mhonggg.jpg', 1),
(102, 'lang', '123456', 'Phạm Ngọc Lang', 'lagdz.1646@gmail.com', '0123456779', 1, '0000-00-00', 'Quảng Ngãi', 0, 'khoaileg.jpg', 1),
(103, 'pinky', '123456789', 'Lê Thị Mỹ Hường', 'myhong11a32004@gmail.com', '0704838199', 0, '0000-00-00', 'Phùng Khắc Khoan', 0, 'piccc.jpg', 1),
(104, 'kiet', '555555', 'Đỗ Tuấn Kiệt', 'hoa48488474773@gmail.com', '0123456778', 0, '0000-00-00', 'Bến Tre', 0, '', 1),
(105, 'toan', '123456', 'Trần Anh Toàn', 'toan21420@gmail.com', '0123456775', 0, '0000-00-00', 'TPHCM', 0, 'image-removebg-preview (6).png', 1),
(106, 'V', '123456', 'VVV', 'vbts@gmail.com', '0123456776', 0, '0000-00-00', 'Nước ngoài', 0, '220624_방탄소년단_뷔(1).jpg', 1),
(107, 'mtp', '123456', 'Nguyễn Thanh Tùng', 'sontungmtp@gmail.com', '0123456774', 0, '0000-00-00', 'Thái Bình', 0, 'son-tung-mtp-va-hai-tu (1).webp', 1),
(108, 'j97', '123456', 'Trịnh Trần Phương Tuấn', 'j97@gmail.com', '0123456773', 0, '0000-00-00', 'Miền Tây', 0, 'jjj.jpeg', 1),
(109, 'tam', '123456', 'Phan Thị Mỹ Tâm', 'mytam@gmail.com', '0123456772', 0, '0000-00-00', 'Miền Nam', 0, 'mt.webp', 1),
(110, 'na', '123456', 'naruto', 'naruto@gmail.com', '0123456771', 0, '0000-00-00', 'Thế giới cartoon', 0, '20230107-naruto-jutsu-555x555.webp', 1),
(111, 'sa', '123456', 'sasuke', 'sasuke@gmail.com', '0123456770', 0, '0000-00-00', 'naa', 0, 'naruto-sasuke.jpg', 1),
(112, 'do', '123456', 'doraemon', 'doraemon@gmail.com', '0123456699', 0, '0000-00-00', 'Nước ngoài', 0, 'Doraemon_character.png', 1),
(113, 'no', '123456', 'nobita', 'nobita@gmail.com', '0123456768', 0, '0000-00-00', 'Nước ngoài', 0, 'Nobita-1-game4v.png', 1),
(114, 'atoan', '123456', 'Trần Anh Toàn', 'toan21420@gmail.com', '0123456759', 0, '0000-00-00', 'TPHCM', 0, '', 1),
(115, 'tkiet', '555555', 'Đỗ Tuấn Kiệt', 'hoa48488474773@gmail.com', '0123456711', 0, '0000-00-00', 'Bến Tre', 0, 'deo-kinh-can-thuong-xuyen-tot-cho-mat-hay-nguoc-lai-tim-7-800x450.jpg', 1),
(116, 'kietdo', '555555', 'Kiệt Đỗ', 'hoa48488474773@gmail.com', '9876534256', 0, '0000-00-00', 'Bến Tre', 0, 'lienket.jpg', 1),
(117, 'mpink', '123456', 'mỹ pink', 'hongltmps28690@fpt.edu.vn', '8796543897', 0, '0000-00-00', 'Miền Nam', 0, 'tenmien.jpg', 1),
(118, 'hong', '123456', 'Hồng', 'hongltmps28690@fpt.edu.vn', '7648397650', 0, '0000-00-00', 'Miền Nam', 0, 'AT_001_detail1.jpg', 1),
(119, 'tu', '123456', 'Tú', 'lmt@gmail.com', '0987657852', 0, '0000-00-00', 'TPHCM', 0, 'Nu.png', 1),
(120, 'qui', '123456', 'Cao Văn Quí', 'qui@gmail.com', '6758493764', 0, '0000-00-00', 'Việt Nam', 0, '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id` int(6) NOT NULL,
  `ma_voucher` varchar(10) NOT NULL,
  `giamgia` double(10,2) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `dieukien` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id`, `ma_voucher`, `giamgia`, `ngaybatdau`, `ngayketthuc`, `dieukien`) VALUES
(1, '0', 0.00, '2023-11-23', '2023-11-23', 10.00),
(2, 'giamgia', 10.00, '2023-12-03', '2024-01-30', 100000.00),
(3, 'chua', 24.00, '2023-12-21', '2024-01-04', 0.00),
(7, 'het', 20.00, '2023-11-26', '2023-12-05', 500000.00),
(8, 'dieukien', 10.00, '2023-11-26', '2023-12-28', 500000.00);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_user` (`id_user`),
  ADD KEY `fk_cart_donhang` (`id_donhang`),
  ADD KEY `fk_cart_product` (`id_product`),
  ADD KEY `fk_cart_size` (`id_size`),
  ADD KEY `fk_cart_color` (`id_color`),
  ADD KEY `fk_cart_product_design` (`id_product_design`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_product` (`id_product`),
  ADD KEY `fk_comment_user` (`id_user`);

--
-- Chỉ mục cho bảng `dadung_voucher`
--
ALTER TABLE `dadung_voucher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dadungvoucher_voucher` (`id_voucher`),
  ADD KEY `fk_dadungvoucher_user` (`id_user`);

--
-- Chỉ mục cho bảng `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_design_color` (`id_color`),
  ADD KEY `fk_design_size` (`id_size`),
  ADD KEY `fk_design_user` (`id_user`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iduser`),
  ADD KEY `fk_donhang_voucher` (`id_voucher`);

--
-- Chỉ mục cho bảng `img_design`
--
ALTER TABLE `img_design`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_img_design_user` (`id_user`);

--
-- Chỉ mục cho bảng `img_product_color`
--
ALTER TABLE `img_product_color`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_img_product_color_product` (`id_product`),
  ADD KEY `fk_img_product_color_color` (`id_color`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_catalog` (`idcatalog`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `soluongtonkho`
--
ALTER TABLE `soluongtonkho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_soluongtonkho_product` (`id_product`),
  ADD KEY `fk_soluongtonkho_color` (`id_color`),
  ADD KEY `fk_soluongtonkho_size` (`id_size`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=774;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT cho bảng `dadung_voucher`
--
ALTER TABLE `dadung_voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `design`
--
ALTER TABLE `design`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT cho bảng `img_design`
--
ALTER TABLE `img_design`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `img_product_color`
--
ALTER TABLE `img_product_color`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `soluongtonkho`
--
ALTER TABLE `soluongtonkho`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_color` FOREIGN KEY (`id_color`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `fk_cart_donhang` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `fk_cart_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_cart_product_design` FOREIGN KEY (`id_product_design`) REFERENCES `design` (`id`),
  ADD CONSTRAINT `fk_cart_size` FOREIGN KEY (`id_size`) REFERENCES `size` (`id`),
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_comment_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `dadung_voucher`
--
ALTER TABLE `dadung_voucher`
  ADD CONSTRAINT `fk_dadungvoucher_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_dadungvoucher_voucher` FOREIGN KEY (`id_voucher`) REFERENCES `voucher` (`id`);

--
-- Các ràng buộc cho bảng `design`
--
ALTER TABLE `design`
  ADD CONSTRAINT `fk_design_color` FOREIGN KEY (`id_color`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `fk_design_size` FOREIGN KEY (`id_size`) REFERENCES `size` (`id`),
  ADD CONSTRAINT `fk_design_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_donhang_user` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_donhang_voucher` FOREIGN KEY (`id_voucher`) REFERENCES `voucher` (`id`);

--
-- Các ràng buộc cho bảng `img_design`
--
ALTER TABLE `img_design`
  ADD CONSTRAINT `fk_img_design_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `img_product_color`
--
ALTER TABLE `img_product_color`
  ADD CONSTRAINT `fk_img_product_color_color` FOREIGN KEY (`id_color`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `fk_img_product_color_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`idcatalog`) REFERENCES `catalog` (`id`);

--
-- Các ràng buộc cho bảng `soluongtonkho`
--
ALTER TABLE `soluongtonkho`
  ADD CONSTRAINT `fk_soluongtonkho_color` FOREIGN KEY (`id_color`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `fk_soluongtonkho_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_soluongtonkho_size` FOREIGN KEY (`id_size`) REFERENCES `size` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
