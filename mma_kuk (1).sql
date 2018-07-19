-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 12:09 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `mma_kuk`
--

CREATE TABLE IF NOT EXISTS `mma_kuk` (
  `UUID_MMA_KUK` varchar(36) NOT NULL,
  `UUID_MMA` varchar(36) DEFAULT NULL,
  `UUID_UK` varchar(36) DEFAULT NULL,
  `UUID_EK` varchar(36) DEFAULT NULL,
  `UUID_KUK` varchar(36) DEFAULT NULL,
  `UUID_BUKTI` varchar(360) DEFAULT NULL,
  `JENIS_BUKTI` varchar(2) DEFAULT NULL,
  `METODE` varchar(25) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_MMA_KUK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mma_kuk`
--

INSERT INTO `mma_kuk` (`UUID_MMA_KUK`, `UUID_MMA`, `UUID_UK`, `UUID_EK`, `UUID_KUK`, `UUID_BUKTI`, `JENIS_BUKTI`, `METODE`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('35c4f276-e25b-4283-8d7b-106c7989a6f6', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', 'ad83c49d-41f4-11e8-8c73-64006a4fef6c', 'ad83c49d-41f4-11e8-8c73-64006a4fef6c', 'ad83c49d-41f4-11e8-8c73-64006a4fef6c', NULL, 'L', 'PW', 'Karid Nurvenus', '2018-07-19 08:31:01', NULL, NULL, '1'),
('3819d1eb-c9fb-4d81-8842-59f66054c9b9', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '38993d58-41f4-11e8-8c73-64006a4fef6c', '38993d58-41f4-11e8-8c73-64006a4fef6c', '38993d58-41f4-11e8-8c73-64006a4fef6c', NULL, 'T', 'CLP', 'Karid Nurvenus', '2018-07-19 08:31:01', NULL, NULL, '1'),
('4edb0465-eb9a-42ad-a854-477e828edb64', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '76735072-41f4-11e8-8c73-64006a4fef6c', '76735072-41f4-11e8-8c73-64006a4fef6c', '76735072-41f4-11e8-8c73-64006a4fef6c', NULL, 'TL', 'PW', 'Karid Nurvenus', '2018-07-19 08:31:01', NULL, NULL, '1'),
('5954e6e9-4045-4065-855b-68ebb45844e4', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', 'be2fbd92-41f4-11e8-8c73-64006a4fef6c', 'be2fbd92-41f4-11e8-8c73-64006a4fef6c', 'be2fbd92-41f4-11e8-8c73-64006a4fef6c', NULL, 'TL', 'PW', 'Karid Nurvenus', '2018-07-19 08:31:02', NULL, NULL, '1'),
('59960ba8-165a-4b4f-95ad-2b6c9be0ee2e', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '1ec24420-41f4-11e8-8c73-64006a4fef6c', '1ec24420-41f4-11e8-8c73-64006a4fef6c', '1ec24420-41f4-11e8-8c73-64006a4fef6c', NULL, 'TL', 'CLP', 'Karid Nurvenus', '2018-07-19 08:31:01', NULL, NULL, '1'),
('968eaa0b-2cb6-43be-bccd-c6fb1652da15', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '0a4d7f16-41f4-11e8-8c73-64006a4fef6c', '0a4d7f16-41f4-11e8-8c73-64006a4fef6c', '0a4d7f16-41f4-11e8-8c73-64006a4fef6c', NULL, 'L', 'CLP', 'Karid Nurvenus', '2018-07-19 08:31:01', NULL, NULL, '1'),
('9c172461-e427-4de9-b93e-a1a1676877c5', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '4fb20c80-41f4-11e8-8c73-64006a4fef6c', '4fb20c80-41f4-11e8-8c73-64006a4fef6c', '4fb20c80-41f4-11e8-8c73-64006a4fef6c', NULL, 'TL', 'CLP', 'Karid Nurvenus', '2018-07-19 08:31:01', NULL, NULL, '1'),
('e471ea12-2f6d-4b12-9000-988dc0f0c0e6', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '61affdc4-41f4-11e8-8c73-64006a4fef6c', '61affdc4-41f4-11e8-8c73-64006a4fef6c', '61affdc4-41f4-11e8-8c73-64006a4fef6c', NULL, 'L', 'DPT', 'Karid Nurvenus', '2018-07-19 08:31:01', NULL, NULL, '1'),
('f929fbfe-d85c-432f-a16a-632663b2c9d3', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '9e86b89f-41f4-11e8-8c73-64006a4fef6c', '9e86b89f-41f4-11e8-8c73-64006a4fef6c', '9e86b89f-41f4-11e8-8c73-64006a4fef6c', NULL, 'TL', 'PW', 'Karid Nurvenus', '2018-07-19 08:31:01', NULL, NULL, '1'),
('fcc84220-f99f-4641-953b-8c0c3c9fc9e2', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '8a594a09-41f4-11e8-8c73-64006a4fef6c', '8a594a09-41f4-11e8-8c73-64006a4fef6c', '8a594a09-41f4-11e8-8c73-64006a4fef6c', NULL, 'T', 'PW', 'Karid Nurvenus', '2018-07-19 08:31:01', NULL, NULL, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
