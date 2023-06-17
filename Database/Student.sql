-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 17, 2023 lúc 04:53 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc-project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Student`
--

CREATE TABLE `Student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `YoB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `Student`
--

INSERT INTO `Student` (`id`, `name`, `YoB`) VALUES
(1, 'Rosabel', 1997),
(2, 'Esteban', 2011),
(3, 'Danni', 2008),
(4, 'Jayme', 2006),
(5, 'Angelina', 1994),
(6, 'Noni', 2008),
(7, 'Ambrosius', 1994),
(8, 'Agnella', 1984),
(9, 'Stu', 2006),
(10, 'Donall', 2002),
(11, 'Adriano', 2007),
(12, 'Nanice', 1999),
(13, 'Madelina', 1996),
(14, 'Libby', 1993),
(15, 'Kelcie', 1999),
(16, 'Oliviero', 1997),
(17, 'Ben', 2009),
(18, 'Winnifred', 1986),
(19, 'Evangelin', 2001),
(20, 'Ricca', 1997),
(21, 'Edmon', 1987),
(22, 'Lurleen', 1997),
(23, 'Kaitlyn', 2004),
(24, 'Phyllys', 2003),
(25, 'Viviana', 1987),
(26, 'Laird', 1996),
(27, 'Nance', 2009),
(28, 'Laurena', 2008),
(29, 'Judi', 1986),
(30, 'Gonzalo', 1995),
(31, 'Linda', 2006),
(32, 'Goran', 1989),
(33, 'Leonard', 1969),
(34, 'Klement', 2011),
(35, 'Cristian', 2001),
(36, 'Ann-marie', 2002),
(37, 'Justine', 2012),
(38, 'Jennee', 2002),
(39, 'Sharl', 1996),
(40, 'Jobina', 2005),
(41, 'Freddy', 1978),
(42, 'Humberto', 1997),
(43, 'Robin', 1997),
(44, 'Ardelis', 2004),
(45, 'Merrel', 2007),
(46, 'Warde', 1998),
(47, 'Hilliary', 2007),
(48, 'Shannen', 1995),
(49, 'Stevy', 1989),
(50, 'Viviana', 2011),
(51, 'Daisey', 2009),
(52, 'Ike', 1995),
(53, 'Gwen', 2008),
(54, 'Franny', 1992),
(55, 'Tonnie', 1985),
(56, 'Lalo', 2012),
(57, 'Roxie', 1998),
(58, 'Tamarah', 2009),
(59, 'Marketa', 1994),
(60, 'Annnora', 2004),
(61, 'Drake', 1995),
(62, 'Llywellyn', 1995),
(63, 'Gracie', 2007),
(64, 'Beatriz', 1996),
(65, 'Dugald', 2002),
(66, 'Mallissa', 1991),
(67, 'Joanne', 1997),
(68, 'Roch', 2004),
(69, 'Casi', 2005),
(70, 'Trace', 2011),
(71, 'Barbee', 1992),
(72, 'Adams', 1992),
(73, 'Heath', 2004),
(74, 'Wildon', 2004),
(75, 'Kain', 1992),
(76, 'Sherye', 1994),
(77, 'Dean', 2001),
(78, 'Vasily', 2012),
(79, 'Sula', 2003),
(80, 'Violetta', 1988),
(81, 'Joan', 1996),
(82, 'Jozef', 1999),
(83, 'Fiona', 2011),
(84, 'Kerwinn', 1992),
(85, 'Sholom', 2012),
(86, 'Belinda', 1992),
(87, 'Magdaia', 2001),
(88, 'Carlotta', 1999),
(89, 'Rollins', 2005),
(90, 'Marius', 2006),
(91, 'Shirlene', 2010),
(92, 'Kathryn', 2010),
(93, 'Roda', 2004),
(94, 'Eva', 1989),
(95, 'Donni', 2009),
(96, 'Tannie', 1995),
(97, 'Alaster', 2001),
(98, 'Hillier', 1972),
(99, 'Melisandra', 2011),
(100, 'Jorgan', 1993),
(101, 'name', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Student`
--
ALTER TABLE `Student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
