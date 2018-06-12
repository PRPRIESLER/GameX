-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2018 at 11:19 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamex`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `dropcart`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `dropcart` ()  NO SQL
TRUNCATE cart$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `pid` int(10) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `rate` int(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `amt` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `rate` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `rate`) VALUES
(10, 'Corsair K95 RGB ', 14700),
(11, 'Roccat Ryos MK Pro ', 8000),
(12, 'Razer Ornata Chroma', 6500),
(13, 'Corsair Strafe Mechanical', 6400),
(15, 'Logitech G610 Orion Brown', 7800),
(16, 'Logitech G910 Orion Spectrum', 11700),
(17, 'Razer BlackWidow ', 9000),
(18, 'SteelSeries Apex M500', 6700),
(14, 'Das Keyboard X40', 7000),
(19, 'HyperX Cloud Revolver', 9000),
(20, 'Steelseries Arctis Series', 8700),
(21, 'Razer ManO\'War 7.1', 6900),
(22, 'Razer Kraken Pro V2', 7800),
(23, 'Logitech G231 Prodigy', 6500),
(24, 'HyperX Cloud Stinger', 7000),
(25, 'Turtle Beach Force Recon 50P', 8000),
(26, 'Logitech G933 Artemis Spectrum', 8200),
(27, 'ASTRO Gaming A40 TR ', 11000),
(28, 'Steel Series Rival 700', 4800),
(29, 'Asus ROG Spatha', 10000),
(30, 'Razer Ouroboros', 6200),
(31, 'Logitech G900 Chaos Spectrum', 7050),
(32, 'Corsair M65 Pro RGB', 4500),
(33, 'Logitech G502', 4300),
(34, 'Razer DeathAdder Chroma', 3800),
(35, 'Corsair Scimitar RGB', 8000),
(36, 'Razer Naga Hex V2', 6900);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`) VALUES
('qwerty', 'qwerty'),
('qaz', 'qws'),
('pk', 'pk'),
('q', 'q'),
('q', 'q'),
('q', 'q'),
('q', 'q'),
('qwerty', 'asd');

--
-- Triggers `register`
--
DROP TRIGGER IF EXISTS `registertime`;
DELIMITER $$
CREATE TRIGGER `registertime` BEFORE INSERT ON `register` FOR EACH ROW INSERT INTO reglogs values(NEW.username,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reglogs`
--

DROP TABLE IF EXISTS `reglogs`;
CREATE TABLE IF NOT EXISTS `reglogs` (
  `username` varchar(40) NOT NULL,
  `regtime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reglogs`
--

INSERT INTO `reglogs` (`username`, `regtime`) VALUES
('q', '2017-11-28 18:24:10'),
('q', '2017-11-30 14:38:54'),
('q', '2017-11-30 14:41:27'),
('q', '2017-11-30 14:43:19'),
('qwerty', '2017-11-30 14:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `pid` int(20) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`pid`, `pname`, `unit`) VALUES
(10, 'Corsair K95 RGB', 7),
(11, 'Roccat Ryos MK Pro ', 20),
(12, 'Razer Ornata Chroma', 4),
(13, 'Corsair Strafe Mechanical', 0),
(14, 'Das Keyboard X40', 2),
(15, 'Logitech G610 Orion Brown', 0),
(16, 'Logitech G910 Orion Spectrum', 0),
(17, 'Razer BlackWidow', 1),
(18, 'SteelSeries Apex M500', 0),
(19, 'HyperX Cloud Revolver', 0),
(20, 'Steelseries Arctis Series', 1),
(21, 'Razer ManO\'War 7.1', 0),
(22, 'Razer Kraken Pro V2', 1),
(23, 'Logitech G231 Prodigy', 1),
(24, 'HyperX Cloud Stinger', 2),
(25, 'Turtle Beach Force Recon 50P', 0),
(26, 'Logitech G933 Artemis Spectrum', 0),
(27, 'ASTRO Gaming A40 TR', 0),
(28, 'Steel Series Rival 700', 0),
(29, 'Asus ROG Spatha', 1),
(30, 'Razer Ouroboros', 1),
(31, 'Logitech G900 Chaos Spectrum', 0),
(32, 'Corsair M65 Pro RGB', 0),
(33, 'Logitech G502', 0),
(34, 'Razer DeathAdder Chroma', 0),
(35, 'Corsair Scimitar RGB', 0),
(36, 'Razer Naga Hex V2', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
