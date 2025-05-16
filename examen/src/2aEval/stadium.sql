-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2022 at 01:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stadium`
--
CREATE DATABASE IF NOT EXISTS `stadium` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `stadium`;

-- --------------------------------------------------------

--
-- Table structure for table `lamps`
--

DROP TABLE IF EXISTS `lamps`;
CREATE TABLE IF NOT EXISTS `lamps` (
  `lamp_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lamp_name` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `lamp_model` int(11) UNSIGNED NOT NULL,
  `lamp_zone` int(11) UNSIGNED NOT NULL,
  `lamp_on` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`lamp_id`),
  KEY `model` (`lamp_model`),
  KEY `zone` (`lamp_zone`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `lamps`
--

INSERT INTO `lamps` (`lamp_id`, `lamp_name`, `lamp_model`, `lamp_zone`, `lamp_on`) VALUES
(1, 'T27G53C93', 2, 2, 0),
(2, 'B28K61V46', 1, 1, 0),
(3, 'F99C65X41', 3, 3, 1),
(4, 'J12F67N45', 1, 4, 0),
(5, 'N52U60D45', 2, 1, 1),
(6, 'H38F87L81', 3, 4, 1),
(7, 'C58T44L58', 2, 2, 0),
(8, 'T51S43A59', 1, 3, 1),
(9, 'U39R34K71', 1, 2, 1),
(10, 'T51S18P58', 2, 1, 1),
(11, 'M24E12V60', 3, 2, 0),
(12, 'X56I19D88', 3, 1, 1),
(13, 'K34Y58O34', 1, 1, 0),
(14, 'K23F17K32', 2, 3, 0),
(15, 'C62O28F63', 1, 3, 1),
(16, 'G78J41T62', 2, 4, 0),
(17, 'K26G50O25', 1, 2, 0),
(18, 'U57K42I88', 1, 4, 1),
(19, 'M88G83I01', 2, 2, 1),
(20, 'D49Z48C63', 2, 3, 0),
(21, 'T23X55T38', 3, 1, 0),
(22, 'W87U76S22', 2, 4, 1),
(23, 'R53W46M15', 1, 2, 1),
(24, 'U09F43Q88', 1, 4, 1),
(25, 'F15M30O68', 2, 2, 0),
(26, 'K65W55C92', 3, 2, 1),
(27, 'L15E31N26', 2, 2, 0),
(28, 'H40W13L33', 2, 1, 0),
(29, 'Y71X61C14', 2, 1, 1),
(30, 'C45N76I65', 3, 1, 0),
(31, 'S89H44R17', 3, 4, 0),
(32, 'Y78H53E37', 1, 1, 1),
(33, 'C98Z28O30', 1, 3, 0),
(34, 'B69D78P78', 2, 2, 1),
(35, 'F51L43G15', 2, 1, 1),
(36, 'N59O84D22', 3, 4, 0),
(37, 'Q58L92E70', 1, 1, 0),
(38, 'X14X27R68', 3, 3, 1),
(39, 'L06C76A46', 3, 2, 0),
(40, 'D41C21E36', 1, 4, 1),
(41, 'M44J37G72', 2, 2, 0),
(42, 'E32R18F45', 1, 1, 1),
(43, 'W39J76H15', 1, 3, 1),
(44, 'W35J14L18', 1, 1, 0),
(45, 'K30F37V89', 3, 3, 1),
(46, 'U24W71N54', 3, 4, 1),
(47, 'D22C68V46', 3, 4, 1),
(48, 'T67R58E62', 2, 3, 1),
(49, 'I62V16P56', 3, 1, 0),
(50, 'R50T13E22', 2, 3, 1),
(51, 'D73P95E68', 1, 1, 1),
(52, 'P89L45V43', 1, 2, 1),
(53, 'H23Q34H18', 1, 2, 1),
(54, 'E85Y64S57', 1, 1, 1),
(55, 'I86F93L22', 3, 1, 1),
(56, 'P43Q77W36', 1, 4, 0),
(57, 'W17Z26R84', 2, 1, 0),
(58, 'S67J97L45', 2, 2, 1),
(59, 'J52B53T05', 1, 2, 0),
(60, 'K46D75N47', 2, 1, 0),
(61, 'W21P20T93', 1, 1, 0),
(62, 'D98S25V61', 2, 2, 1),
(63, 'R97H14G10', 3, 4, 1),
(64, 'N26X66U73', 3, 1, 0),
(65, 'M25T36L31', 2, 3, 0),
(66, 'K17N17Z15', 2, 4, 1),
(67, 'P83P83F54', 3, 3, 1),
(68, 'M30O84E34', 2, 2, 1),
(69, 'M11W70R71', 1, 1, 1),
(70, 'I63T22X52', 2, 2, 0),
(71, 'D28R85X15', 3, 1, 0),
(72, 'G71H97W58', 2, 1, 0),
(73, 'E67N18T23', 1, 2, 0),
(74, 'C59O80R48', 2, 1, 0),
(75, 'Q86P88O81', 3, 4, 1),
(76, 'P85P56T04', 3, 1, 0),
(77, 'C59K65B51', 1, 4, 0),
(78, 'G32P27K81', 3, 3, 1),
(79, 'N25Q09F99', 3, 3, 0),
(80, 'I86M53F77', 2, 4, 1),
(81, 'I69Y72V84', 2, 4, 0),
(82, 'Y88O85I87', 1, 3, 0),
(83, 'Q84R56R68', 2, 3, 1),
(84, 'S54Y23C84', 2, 2, 0),
(85, 'G48D27X13', 3, 2, 0),
(86, 'W29O39O91', 1, 1, 0),
(87, 'U73Z40J94', 3, 1, 1),
(88, 'Z44V78M68', 1, 1, 1),
(89, 'Y23F66W12', 1, 1, 0),
(90, 'P24C32T80', 2, 1, 0),
(91, 'D18W71Y41', 1, 2, 0),
(92, 'K36E52H17', 3, 2, 0),
(93, 'E31T32I12', 2, 2, 0),
(94, 'X61O72H47', 3, 1, 1),
(95, 'O88J72Y38', 2, 1, 1),
(96, 'X37C38V33', 2, 2, 0),
(97, 'C56K26Q31', 2, 2, 1),
(98, 'P76Q71Y56', 2, 2, 0),
(99, 'R25C10G80', 1, 4, 1),
(100, 'D01A68V94', 3, 4, 1),
(101, 'A19W15L90', 1, 4, 0),
(102, 'R81I08O56', 3, 2, 0),
(103, 'O74M96W28', 3, 4, 1),
(104, 'K65V26W33', 3, 3, 0),
(105, 'U64W16H13', 3, 1, 1),
(106, 'H43P76J40', 1, 3, 1),
(107, 'O85J51O52', 1, 2, 1),
(108, 'F53L25G46', 2, 4, 1),
(109, 'P52O57F82', 2, 3, 1),
(110, 'N22W34Y26', 3, 1, 0),
(111, 'B89A81M55', 1, 2, 1),
(112, 'X86C31E62', 3, 1, 1),
(113, 'P85R25X93', 2, 3, 0),
(114, 'K18A54J05', 2, 1, 0),
(115, 'Y12K75O92', 2, 2, 1),
(116, 'D07B58V27', 2, 2, 1),
(117, 'M51M79V51', 1, 4, 0),
(118, 'J11L38F35', 3, 4, 0),
(119, 'B24X69U16', 1, 1, 1),
(120, 'W35C43S74', 1, 2, 1),
(121, 'Q13O98Y36', 1, 3, 0),
(122, 'R38P78G15', 3, 2, 0),
(123, 'M75S18M15', 1, 2, 0),
(124, 'Y12O40S\"071\"', 3, 3, 1),
(125, 'J25J69W25', 1, 1, 1),
(126, 'C23C48X81', 3, 4, 0),
(127, 'Y21J11F99', 3, 4, 0),
(128, 'Y58V17N84', 1, 1, 1),
(129, 'M80D33G60', 1, 3, 1),
(130, 'I45I83Q86', 3, 3, 0),
(131, 'M35I27C54', 2, 3, 0),
(132, 'R24G76R59', 2, 2, 1),
(133, 'O19P15W36', 1, 4, 0),
(134, 'I45R73B68', 3, 1, 1),
(135, 'A07D87F74', 1, 3, 0),
(136, 'X26O65A09', 3, 2, 1),
(137, 'T44N70D87', 3, 4, 1),
(138, 'E96U41V32', 2, 4, 0),
(139, 'D74V79G31', 2, 2, 1),
(140, 'G15X14I26', 1, 1, 1),
(141, 'B29U37H26', 2, 4, 0),
(142, 'I67L08E74', 2, 2, 1),
(143, 'E25S53C53', 2, 3, 1),
(144, 'N81F03H00', 3, 1, 1),
(145, 'F82D34T08', 3, 2, 0),
(146, 'L96I87F14', 2, 1, 1),
(147, 'H98K91W68', 2, 3, 1),
(148, 'O71N61D56', 3, 1, 0),
(149, 'W71P28C75', 3, 3, 1),
(150, 'C08J35U30', 3, 1, 1),
(151, 'V85P77S69', 1, 4, 1),
(152, 'S71V75N94', 1, 2, 1),
(153, 'S44A34A53', 1, 1, 0),
(154, 'E23T41C83', 2, 4, 1),
(155, 'D67T64B65', 1, 2, 1),
(156, 'G51F55R12', 3, 2, 1),
(157, 'R18B57S14', 1, 2, 0),
(158, 'B12X76J62', 3, 2, 0),
(159, 'B89C47M27', 1, 2, 1),
(160, 'N69M85M36', 2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lamp_models`
--

DROP TABLE IF EXISTS `lamp_models`;
CREATE TABLE IF NOT EXISTS `lamp_models` (
  `model_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_part_number` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `model_manufacturer` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `model_wattage` int(11) NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `lamp_models`
--

INSERT INTO `lamp_models` (`model_id`, `model_part_number`, `model_manufacturer`, `model_wattage`) VALUES
(1, 'HS-HM600W-A', 'HISHINE-GR', 600),
(2, 'GL-SFL serie', 'AIRELUX', 400),
(3, 'Arenapro', 'LEDLUCKY', 500);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

DROP TABLE IF EXISTS `zones`;
CREATE TABLE IF NOT EXISTS `zones` (
  `zone_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `zone_name` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`zone_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`zone_id`, `zone_name`) VALUES
(1, 'Fondo Norte'),
(2, 'Fondo Sur'),
(3, 'Grada Este'),
(4, 'Grada Oeste');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lamps`
--
ALTER TABLE `lamps`
  ADD CONSTRAINT `lamps_ibfk_1` FOREIGN KEY (`lamp_model`) REFERENCES `lamp_models` (`model_id`),
  ADD CONSTRAINT `lamps_ibfk_2` FOREIGN KEY (`lamp_zone`) REFERENCES `zones` (`zone_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
