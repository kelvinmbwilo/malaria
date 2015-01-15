-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2015 at 06:20 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `malaria`
--
CREATE DATABASE IF NOT EXISTS `malaria` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `malaria`;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `region_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=140 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district`, `region_id`) VALUES
(1, 'Arusha', 1),
(2, 'Arumeru', 1),
(3, 'Karatu', 1),
(4, 'Longido', 1),
(5, 'Monduli', 1),
(6, 'Ngorongoro', 1),
(7, 'Ilala', 2),
(8, 'Kinondoni', 2),
(9, 'Temeke', 2),
(10, 'Bahi', 3),
(11, 'Dodoma', 3),
(12, 'Kondoa', 3),
(13, 'Kongwa', 3),
(14, 'Mpwapwa', 3),
(15, 'Chamwino', 3),
(16, 'Bukombe', 4),
(17, 'Chato', 4),
(18, 'Geita', 4),
(19, 'Mbongowe', 4),
(20, 'Nyang''hwale', 4),
(21, 'Iringa rural', 5),
(22, 'Iringa urban', 5),
(23, 'Kilolo', 5),
(24, 'Mufindi', 5),
(25, 'Biharamulo', 6),
(26, 'Bukoba urban', 6),
(27, 'Bukoba rural', 6),
(28, 'Karagwe', 6),
(29, 'Misenyi', 6),
(30, 'Muleba', 6),
(31, 'Ngara', 6),
(32, 'Mpanda', 7),
(33, 'Mlele', 7),
(34, 'Kasulu', 8),
(35, 'Kibondo', 8),
(36, 'Kigoma rural', 8),
(37, 'Kigoma urban', 8),
(38, 'Hai', 9),
(39, 'Moshi rural', 9),
(40, 'Moshi urban', 9),
(41, 'Mwanga', 9),
(42, 'Rombo', 9),
(43, 'Same', 9),
(44, 'Siha', 9),
(45, 'Kilwa', 10),
(46, 'Lindi rural', 10),
(47, 'Lindi urban', 10),
(48, 'Liwale', 10),
(49, 'Nachingwea', 10),
(50, 'Ruangwa', 10),
(51, 'Babati', 11),
(52, 'Hanang', 11),
(53, 'Kiteto', 11),
(54, 'Mbulu', 11),
(55, 'Simanjiro', 11),
(56, 'Bunda', 12),
(57, 'Musoma rural', 12),
(58, 'Musoma urban', 12),
(59, 'Serengeti', 12),
(60, 'Tarime', 12),
(61, 'Rolya', 12),
(62, 'Chunya', 13),
(63, 'Ileje', 13),
(64, 'Kyela', 13),
(65, 'Mbarali', 13),
(66, 'Mbeya rural', 13),
(67, 'Mbeya urban', 13),
(68, 'Mbozi', 13),
(69, 'Rungwe', 13),
(70, 'Kilombero', 14),
(71, 'Kilosa', 14),
(72, 'Morogoro rural', 14),
(73, 'Morogoro urban', 14),
(74, 'Mvomero', 14),
(75, 'Ulanga', 14),
(76, 'Lulindi', 15),
(77, 'Masasi', 15),
(78, 'Mtwara  rural', 15),
(79, 'Mtwara urban', 15),
(80, 'Nanyumbu', 15),
(81, 'Newala', 15),
(82, 'Tandahimba', 15),
(83, 'Ilemela', 16),
(84, 'Kwimba', 16),
(85, 'Magu', 16),
(86, 'Misungwi', 16),
(87, 'Nyamagana', 16),
(88, 'Sengerema', 16),
(89, 'Ukerewe', 16),
(90, 'Ludewa', 17),
(91, 'Makete', 17),
(92, 'Njombe rural', 17),
(93, 'Njombe urban', 17),
(94, 'Wanging''ombe', 17),
(95, 'Bagamoyo', 18),
(96, 'Kibaha', 18),
(97, 'Kisarawe', 18),
(98, 'Mafia', 18),
(99, 'Mkuranga', 18),
(100, 'Rufiji', 18),
(101, 'Nkasi', 19),
(102, 'Sumbawanga rural', 19),
(103, 'Sumbawanga urban', 19),
(104, 'Mbinga', 20),
(105, 'Songea rural', 20),
(106, 'Songea urban', 20),
(107, 'Tunduru', 20),
(108, 'Namtumbo', 20),
(109, 'Nyasa', 20),
(110, 'Kahama', 21),
(111, 'Kishapu', 21),
(112, 'Shinyanga rural', 21),
(113, 'Shinyanga urban', 21),
(114, 'Bariadi', 22),
(115, 'Busega', 22),
(116, 'Itilima', 22),
(117, 'Maswa', 22),
(118, 'Meatu', 22),
(119, 'Iramba', 23),
(120, 'Manyoni', 23),
(121, 'Singida rural', 23),
(122, 'Singida urban', 23),
(123, 'Igunga', 24),
(124, 'Nzega', 24),
(125, 'Sikonge', 24),
(126, 'Uyui', 24),
(127, 'Tabora', 24),
(128, 'Urambo', 24),
(129, 'Handeni', 25),
(130, 'Kilindi', 25),
(131, 'Korogwe', 25),
(132, 'Lushoto', 25),
(133, 'Muheza', 25),
(134, 'Mkinga', 25),
(135, 'Pangani', 25),
(136, 'Tanga', 25),
(137, 'Busokelo', 13),
(138, 'Momba', 13),
(139, 'Kalambo', 19);

-- --------------------------------------------------------

--
-- Table structure for table `kaya`
--

CREATE TABLE IF NOT EXISTS `kaya` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `ward` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `village` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `leader_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `station` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_of_veo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `writer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kaya`
--

INSERT INTO `kaya` (`id`, `uid`, `region`, `district`, `ward`, `village`, `leader_name`, `phone`, `male`, `female`, `station`, `name_of_veo`, `writer`, `created_at`, `updated_at`) VALUES
(1, 625551, 1, 2, 'afdafd', 'afdasf', 'dafdafd', '254235432', 4, 4, '0', 'fsgsfgfs', 'gfsgfdgsfdgfdg', '2015-01-13 19:42:18', '2015-01-13 19:42:18'),
(3, 731257, 2, 8, 'sgfsgfsg', 'fsgfsgfsgfsg', 'fsgfsgfsgf', 'sgfsgfsgf', 6, 7, 'bvcbnbn', 'cnbcnbc', 'nbcnbcnbcnbcnbcn', '2015-01-13 23:56:49', '2015-01-13 23:56:49'),
(4, 485180, 6, 26, 'vnvcnb', 'cnbcnbvcn', 'cnbcnb', 'gfgf', 2, 4, 'gnhvnhgn', 'jhgjhgfhgj', 'jfhgjhgjfhgjhgjhg', '2015-01-13 23:58:22', '2015-01-13 23:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region`) VALUES
(1, 'Arusha'),
(2, 'Dar es salaam'),
(3, 'Dodoma'),
(4, 'Geita'),
(5, 'Iringa'),
(6, 'Kagera'),
(7, 'Katavi'),
(8, 'Kigoma'),
(9, 'Kilimanjaro'),
(10, 'Lindi'),
(11, 'Manyara'),
(12, 'Mara'),
(13, 'Mbeya'),
(14, 'Morogoro'),
(15, 'Mtwara'),
(16, 'Mwanza'),
(17, 'Njombe'),
(18, 'Pwani'),
(19, 'Rukwa'),
(20, 'Ruvuma'),
(21, 'Shinyanga'),
(22, 'Simiyu'),
(23, 'Singida'),
(24, 'Tabora'),
(25, 'Tanga');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE IF NOT EXISTS `stations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `ward` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `head_of_station` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contacts` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
