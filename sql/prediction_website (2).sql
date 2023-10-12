-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 16, 2022 at 02:34 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prediction_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `activating_table`
--

DROP TABLE IF EXISTS `activating_table`;
CREATE TABLE IF NOT EXISTS `activating_table` (
  `activating_Date` varchar(235) NOT NULL,
  `expiry_Date` varchar(235) NOT NULL,
  `email` varchar(235) NOT NULL,
  `package` varchar(235) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activating_table`
--

INSERT INTO `activating_table` (`activating_Date`, `expiry_Date`, `email`, `package`) VALUES
('Feb 16, 2022', 'Feb 23, 2022', 'timi@gmail.com', 'basic'),
('Feb 16, 2022', 'Feb 23, 2022', 'cvas@gmail.com', 'basic'),
('Feb 16, 2022', 'Feb 23, 2022', 'jj@ll.com', 'basic'),
('Feb 16, 2022', 'Feb 23, 2022', 'qq@ll.com', 'basic'),
('Feb 16, 2022', 'Feb 4, 2022', 'kk@ll.com', 'premium'),
('Feb 16, 2022', 'Feb 23, 2022', 'afdf@kk.com', 'premium'),
('Feb 16, 2022', 'Feb 23, 2022', 'ssss@jj.com', 'basic');

-- --------------------------------------------------------

--
-- Table structure for table `basic_post`
--

DROP TABLE IF EXISTS `basic_post`;
CREATE TABLE IF NOT EXISTS `basic_post` (
  `Name` varchar(1000) NOT NULL,
  `File_Name` varchar(256) NOT NULL,
  `_Date` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_post`
--

INSERT INTO `basic_post` (`Name`, `File_Name`, `_Date`) VALUES
('Joy', 'happy new month beauble.jpg', '04-Nov-2021'),
('kk', 'kayode.jpg', '16-Feb-2022');

-- --------------------------------------------------------

--
-- Table structure for table `client_basic`
--

DROP TABLE IF EXISTS `client_basic`;
CREATE TABLE IF NOT EXISTS `client_basic` (
  `first_Name` varchar(256) NOT NULL,
  `last_Name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `active` int(2) NOT NULL,
  `package` varchar(256) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_basic`
--

INSERT INTO `client_basic` (`first_Name`, `last_Name`, `email`, `password`, `active`, `package`) VALUES
('daniel', 'ighodaro', 'ssss@jj.com', '12345678', 1, 'basic'),
('Timi', 'joy', 'timi@gmail.com', '11111111', 1, 'basic'),
('daniel', 'ighodaro', 'jj@ll.com', '11111111', 1, 'basic'),
('daniel', 'ighodaro', 'cvas@gmail.com', '11111111', 1, 'basic'),
('daniel', 'ighodaro', 'qq@ll.com', 'mmmmmmmm', 1, 'basic');

-- --------------------------------------------------------

--
-- Table structure for table `client_premium`
--

DROP TABLE IF EXISTS `client_premium`;
CREATE TABLE IF NOT EXISTS `client_premium` (
  `first_Name` varchar(235) NOT NULL,
  `last_Name` varchar(235) NOT NULL,
  `email` varchar(10000) NOT NULL,
  `password` varchar(12) NOT NULL,
  `active` varchar(2) NOT NULL,
  `package` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_premium`
--

INSERT INTO `client_premium` (`first_Name`, `last_Name`, `email`, `password`, `active`, `package`) VALUES
('adfadf', 'fffff', 'afdf@kk.com', 'kkkkkkkkkkkk', '1', 'premium'),
('ddd', 'ssss', 'kk@ll.com', '12345678', '0', 'premium');

-- --------------------------------------------------------

--
-- Table structure for table `home_games`
--

DROP TABLE IF EXISTS `home_games`;
CREATE TABLE IF NOT EXISTS `home_games` (
  `file_name` varchar(236) NOT NULL,
  `_Date` varchar(236) NOT NULL,
  `Name` varchar(236) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_games`
--

INSERT INTO `home_games` (`file_name`, `_Date`, `Name`) VALUES
('happy new month beauble.jpg', '04-Nov-2021', 'Joy');

-- --------------------------------------------------------

--
-- Table structure for table `premium_post`
--

DROP TABLE IF EXISTS `premium_post`;
CREATE TABLE IF NOT EXISTS `premium_post` (
  `Name` varchar(235) NOT NULL,
  `File_Name` varchar(235) NOT NULL,
  `_Date` varchar(235) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premium_post`
--

INSERT INTO `premium_post` (`Name`, `File_Name`, `_Date`) VALUES
('kjhgf', 'IMG-20210517-WA0017.jpg', '04-Nov-2021'),
('Social media', 'social.png', '04-Nov-2021'),
('qqqq', 'osun picture.jpg', '14-Feb-2022');

-- --------------------------------------------------------

--
-- Table structure for table `previous_post`
--

DROP TABLE IF EXISTS `previous_post`;
CREATE TABLE IF NOT EXISTS `previous_post` (
  `Name` varchar(1000) NOT NULL,
  `File_Name` varchar(1000) NOT NULL,
  `_Date` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previous_post`
--

INSERT INTO `previous_post` (`Name`, `File_Name`, `_Date`) VALUES
('d', '20200725-20200725-IMG_2081-scaled-e1606326675939 (1).jpg', '16-Feb-2022'),
('1111111111111111111', 've.jpg', '16-Feb-2022');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `da` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`da`) VALUES
(1),
(5),
(5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
