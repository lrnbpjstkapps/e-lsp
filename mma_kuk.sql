-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 01:44 PM
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
  `JENIS_BUKTI` varchar(1) DEFAULT NULL,
  `METODE` varchar(3) DEFAULT NULL,
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
('04af3987-ae4b-4c69-98ce-a4938ccf17df', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '1ec24420-41f4-11e8-8c73-64006a4fef6c', '1ec24420-41f4-11e8-8c73-64006a4fef6c', '1ec24420-41f4-11e8-8c73-64006a4fef6c', NULL, 'o', 'on', 'Karid Nurvenus', '2018-07-18 12:50:16', NULL, NULL, '1'),
('2278d9e9-59bb-45d9-96c7-4b291460721b', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '38993d58-41f4-11e8-8c73-64006a4fef6c', '38993d58-41f4-11e8-8c73-64006a4fef6c', '38993d58-41f4-11e8-8c73-64006a4fef6c', NULL, 'o', 'on', 'Karid Nurvenus', '2018-07-18 12:50:16', NULL, NULL, '1'),
('232a53de-e8ef-4ac6-a1a2-d65fb5d6003c', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', 'ad83c49d-41f4-11e8-8c73-64006a4fef6c', 'ad83c49d-41f4-11e8-8c73-64006a4fef6c', 'ad83c49d-41f4-11e8-8c73-64006a4fef6c', NULL, NULL, NULL, 'Karid Nurvenus', '2018-07-18 12:50:17', NULL, NULL, '1'),
('24f9baf3-c3c1-46e9-bb95-cccc6ac5c804', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '9e86b89f-41f4-11e8-8c73-64006a4fef6c', '9e86b89f-41f4-11e8-8c73-64006a4fef6c', '9e86b89f-41f4-11e8-8c73-64006a4fef6c', NULL, NULL, NULL, 'Karid Nurvenus', '2018-07-18 12:50:17', NULL, NULL, '1'),
('6b91132a-97f6-4ed7-8191-6c30db12aa9f', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '0a4d7f16-41f4-11e8-8c73-64006a4fef6c', '0a4d7f16-41f4-11e8-8c73-64006a4fef6c', '0a4d7f16-41f4-11e8-8c73-64006a4fef6c', NULL, 'o', 'on', 'Karid Nurvenus', '2018-07-18 12:50:16', NULL, NULL, '1'),
('88a10f7c-1b27-4630-bbf5-00b1edc724d3', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '76735072-41f4-11e8-8c73-64006a4fef6c', '76735072-41f4-11e8-8c73-64006a4fef6c', '76735072-41f4-11e8-8c73-64006a4fef6c', NULL, NULL, NULL, 'Karid Nurvenus', '2018-07-18 12:50:17', NULL, NULL, '1'),
('a8717185-2980-49f0-a71f-c5546a528459', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', 'be2fbd92-41f4-11e8-8c73-64006a4fef6c', 'be2fbd92-41f4-11e8-8c73-64006a4fef6c', 'be2fbd92-41f4-11e8-8c73-64006a4fef6c', NULL, NULL, NULL, 'Karid Nurvenus', '2018-07-18 12:50:17', NULL, NULL, '1'),
('b0fd798c-d0ea-44fd-8582-1a661b595732', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '8a594a09-41f4-11e8-8c73-64006a4fef6c', '8a594a09-41f4-11e8-8c73-64006a4fef6c', '8a594a09-41f4-11e8-8c73-64006a4fef6c', NULL, NULL, NULL, 'Karid Nurvenus', '2018-07-18 12:50:17', NULL, NULL, '1'),
('bd763e0d-7dd8-49a5-af7f-c7d68540c5fb', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '61affdc4-41f4-11e8-8c73-64006a4fef6c', '61affdc4-41f4-11e8-8c73-64006a4fef6c', '61affdc4-41f4-11e8-8c73-64006a4fef6c', NULL, NULL, NULL, 'Karid Nurvenus', '2018-07-18 12:50:17', NULL, NULL, '1'),
('f7ab1fef-0de3-4fb4-987d-f51a43ccba8e', 'c3784ee2-5b44-11e8-a5e5-a4c494eed0da', '4fb20c80-41f4-11e8-8c73-64006a4fef6c', '4fb20c80-41f4-11e8-8c73-64006a4fef6c', '4fb20c80-41f4-11e8-8c73-64006a4fef6c', NULL, NULL, NULL, 'Karid Nurvenus', '2018-07-18 12:50:17', NULL, NULL, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
