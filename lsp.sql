-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 12:07 PM
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
CREATE DATABASE IF NOT EXISTS `lsp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lsp`;

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE IF NOT EXISTS `administrasi` (
  `UUID_ADM` varchar(36) NOT NULL,
  `UUID_APL01` varchar(36) DEFAULT NULL,
  `DTM_APL01_ASESI` datetime DEFAULT NULL,
  `DTM_APL01_ASESOR` datetime DEFAULT NULL,
  `UUID_APL02` varchar(36) DEFAULT NULL,
  `DTM_APL02_ASESI` datetime DEFAULT NULL,
  `DTM_APL02_ASESOR` datetime DEFAULT NULL,
  `UUID_MMA` varchar(36) DEFAULT NULL,
  `DTM_MMA_ASESOR` datetime DEFAULT NULL,
  `DTM_MMA_TUK` datetime DEFAULT NULL,
  `DTM_MMA_MANAJER` datetime DEFAULT NULL,
  `UUID_MAK02` varchar(36) DEFAULT NULL,
  `DTM_MAK02_ASESI` datetime DEFAULT NULL,
  `UUID_MAK03` varchar(36) DEFAULT NULL,
  `DTM_MAK03_ASESI` datetime DEFAULT NULL,
  `DTM_MAK03_ASESOR` datetime DEFAULT NULL,
  `UUID_SA` varchar(36) DEFAULT NULL,
  `UUID_ASESI` varchar(36) DEFAULT NULL,
  `UUID_ASESOR` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`UUID_ADM`),
  KEY `UUID_APL01_ADM` (`UUID_APL01`),
  KEY `UUID_APL02_ADM` (`UUID_APL02`),
  KEY `UUID_MMA_ADM` (`UUID_MMA`),
  KEY `UUID_MAK02_ADM` (`UUID_MAK02`),
  KEY `UUID_MAK03_ADM` (`UUID_MAK03`),
  KEY `UUID_SA_ADM` (`UUID_SA`),
  KEY `UUID_ASESI_ADM` (`UUID_ASESI`),
  KEY `UUID_ASESOR_ADM` (`UUID_ASESOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answer_apl02`
--

CREATE TABLE IF NOT EXISTS `answer_apl02` (
  `UUID_ANS_APL02` varchar(36) NOT NULL,
  `UUID_USER` varchar(36) DEFAULT NULL,
  `UUID_APL01` varchar(36) DEFAULT NULL,
  `UUID_APL02` varchar(36) DEFAULT NULL,
  `UUID_UK` varchar(36) DEFAULT NULL,
  `UUID_EK` varchar(36) DEFAULT NULL,
  `UUID_KUK` varchar(36) DEFAULT NULL,
  `IS_KOMPETEN` varchar(255) DEFAULT NULL,
  `UUID_BUKTI` varchar(36) DEFAULT NULL,
  `JENIS_BUKTI` varchar(5) DEFAULT NULL,
  `METODE_ASESMEN` varchar(5) DEFAULT NULL,
  `USR_CRT` varchar(255) DEFAULT NULL,
  `DTM_CRT` varchar(255) DEFAULT NULL,
  `USR_UPD` varchar(255) DEFAULT NULL,
  `DTM_UPD` varchar(255) DEFAULT NULL,
  `IS_ACTIVE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UUID_ANS_APL02`),
  KEY `UUID_APL02_ANSWER_APL_02` (`UUID_APL02`),
  KEY `UUID_UK_ANSWER_APL_02` (`UUID_UK`),
  KEY `UUID_KUK_ANSWER_APL_02` (`UUID_KUK`),
  KEY `UUID_EK_ANSWER_APL_02` (`UUID_EK`),
  KEY `UUID_APL01_ANSWER_APL_02` (`UUID_APL01`),
  KEY `UUID_USER_ANSWER_APL_02` (`UUID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_apl02`
--

INSERT INTO `answer_apl02` (`UUID_ANS_APL02`, `UUID_USER`, `UUID_APL01`, `UUID_APL02`, `UUID_UK`, `UUID_EK`, `UUID_KUK`, `IS_KOMPETEN`, `UUID_BUKTI`, `JENIS_BUKTI`, `METODE_ASESMEN`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('085ff1ae-5085-47ba-b00a-e48e14564205', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', '34dc4853-3e3f-11e8-8647-64006a4fef6c', '76735072-41f4-11e8-8c73-64006a4fef6c', '1', NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:32', NULL, NULL, '1'),
('2e1700b7-d66b-4867-abf3-ae778c899c22', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', '2cd13cba-3e3f-11e8-8647-64006a4fef6c', '4fb20c80-41f4-11e8-8c73-64006a4fef6c', '1', NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:31', NULL, NULL, '1'),
('3a7824ef-3f10-4c4c-ac9f-c85897f2ab8b', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', '3ae0498f-3e3f-11e8-8647-64006a4fef6c', '9e86b89f-41f4-11e8-8c73-64006a4fef6c', '1', NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:32', NULL, NULL, '1'),
('48bb53e4-895f-434f-9679-851c1e1634be', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', '3ae0498f-3e3f-11e8-8647-64006a4fef6c', 'be2fbd92-41f4-11e8-8c73-64006a4fef6c', '1', NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:32', NULL, NULL, '1'),
('4d948b80-7cc7-4f84-a0ea-4f79f1d2bba2', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', '34dc4853-3e3f-11e8-8647-64006a4fef6c', '8a594a09-41f4-11e8-8c73-64006a4fef6c', '0', NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:32', NULL, NULL, '1'),
('58f1268a-e802-4871-b198-30ac56a17cd4', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', '2cd13cba-3e3f-11e8-8647-64006a4fef6c', '0a4d7f16-41f4-11e8-8c73-64006a4fef6c', '0', NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:31', NULL, NULL, '1'),
('622ff610-9c66-4fb5-ae25-0dadadb8d1cc', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', '2cd13cba-3e3f-11e8-8647-64006a4fef6c', '38993d58-41f4-11e8-8c73-64006a4fef6c', '0', NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:31', NULL, NULL, '1'),
('b63ff649-ccc4-4726-bc9c-61e017efa6b5', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', '2cd13cba-3e3f-11e8-8647-64006a4fef6c', '61affdc4-41f4-11e8-8c73-64006a4fef6c', '0', NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:31', NULL, NULL, '1'),
('e1a58417-b27d-47cd-9811-27ea932c2391', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', '2cd13cba-3e3f-11e8-8647-64006a4fef6c', '1ec24420-41f4-11e8-8c73-64006a4fef6c', '1', NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:31', NULL, NULL, '1'),
('eff1cfe1-024a-410b-bdf4-d83509542e03', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', '3ae0498f-3e3f-11e8-8647-64006a4fef6c', 'ad83c49d-41f4-11e8-8c73-64006a4fef6c', '0', NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:32', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `apl01_bukti`
--

CREATE TABLE IF NOT EXISTS `apl01_bukti` (
  `UUID_APL01_BUKTI` varchar(36) NOT NULL,
  `UUID_APL01` varchar(36) DEFAULT NULL,
  `UUID_BUKTI` varchar(36) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_APL01_BUKTI`),
  KEY `UUID_APL01_APL01_BUKTI` (`UUID_APL01`),
  KEY `UUID_BUKTI_APL01_BUKTI` (`UUID_BUKTI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apl01_bukti`
--

INSERT INTO `apl01_bukti` (`UUID_APL01_BUKTI`, `UUID_APL01`, `UUID_BUKTI`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('0372b7c9-5b34-11e8-a5e5-a4c494eed0da', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '8a871d3a-4f4e-11e8-a823-00ff0b0c062f', 'Super Admin', '2018-05-19 14:12:38', NULL, NULL, '1'),
('037798a0-5b34-11e8-a5e5-a4c494eed0da', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '8ec61877-4f4e-11e8-a823-00ff0b0c062f', 'Super Admin', '2018-05-19 14:12:38', NULL, NULL, '1'),
('de99ee24-5b43-11e8-a5e5-a4c494eed0da', '58ddf08f-fc20-490d-b617-274fca9e140f', '8a871d3a-4f4e-11e8-a823-00ff0b0c062f', 'Super Admin', '2018-05-19 16:06:09', NULL, NULL, '1'),
('dea3a49f-5b43-11e8-a5e5-a4c494eed0da', '58ddf08f-fc20-490d-b617-274fca9e140f', '8ec61877-4f4e-11e8-a823-00ff0b0c062f', 'Super Admin', '2018-05-19 16:06:09', NULL, NULL, '1'),
('deced0aa-5b43-11e8-a5e5-a4c494eed0da', '58ddf08f-fc20-490d-b617-274fca9e140f', '92a98576-4f4e-11e8-a823-00ff0b0c062f', 'Super Admin', '2018-05-19 16:06:09', NULL, NULL, '1'),
('def752b8-5b43-11e8-a5e5-a4c494eed0da', '58ddf08f-fc20-490d-b617-274fca9e140f', '96ee4baa-4f4e-11e8-a823-00ff0b0c062f', 'Super Admin', '2018-05-19 16:06:09', NULL, NULL, '1'),
('df1fefbb-5b43-11e8-a5e5-a4c494eed0da', '58ddf08f-fc20-490d-b617-274fca9e140f', '9a7fb69d-4f4e-11e8-a823-00ff0b0c062f', 'Super Admin', '2018-05-19 16:06:09', NULL, NULL, '1'),
('df2e2eb8-5b43-11e8-a5e5-a4c494eed0da', '58ddf08f-fc20-490d-b617-274fca9e140f', 'a94347e8-4f4e-11e8-a823-00ff0b0c062f', 'Super Admin', '2018-05-19 16:06:10', NULL, NULL, '1'),
('df333948-5b43-11e8-a5e5-a4c494eed0da', '58ddf08f-fc20-490d-b617-274fca9e140f', '185093a2-4f51-11e8-a823-00ff0b0c062f', 'Super Admin', '2018-05-19 16:06:10', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `apl01_uk`
--

CREATE TABLE IF NOT EXISTS `apl01_uk` (
  `UUID_APL01_UK` varchar(36) NOT NULL,
  `UUID_APL01` varchar(36) DEFAULT NULL,
  `UUID_UK` varchar(36) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_APL01_UK`),
  KEY `UUID_APL01_APL01_UK` (`UUID_APL01`),
  KEY `UUID_UK_APL01_UK` (`UUID_UK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apl01_uk`
--

INSERT INTO `apl01_uk` (`UUID_APL01_UK`, `UUID_APL01`, `UUID_UK`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('036732cc-5b34-11e8-a5e5-a4c494eed0da', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-05-19 14:12:38', NULL, NULL, '1'),
('de350864-5b43-11e8-a5e5-a4c494eed0da', '58ddf08f-fc20-490d-b617-274fca9e140f', '873735d1-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-05-19 16:06:08', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `apl02_kuk`
--

CREATE TABLE IF NOT EXISTS `apl02_kuk` (
  `UUID_APL02_KUK` varchar(36) NOT NULL,
  `UUID_APL02` varchar(36) DEFAULT NULL,
  `UUID_KUK` varchar(36) DEFAULT NULL,
  `PENILAIAN` varchar(1) DEFAULT NULL,
  `UUID_BUKTI` varchar(36) DEFAULT NULL,
  `VALID` varchar(1) DEFAULT NULL,
  `ASLI` varchar(1) DEFAULT NULL,
  `TERKINI` varchar(1) DEFAULT NULL,
  `MEMADAI` varchar(1) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_APL02_KUK`),
  KEY `UUID_APL02_APL02_KUK` (`UUID_APL02`),
  KEY `UUID_KUK_APL02_KUK` (`UUID_KUK`),
  KEY `UUID_BUKTI_APL02_KUK` (`UUID_BUKTI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bukti`
--

CREATE TABLE IF NOT EXISTS `bukti` (
  `UUID_BUKTI` varchar(36) NOT NULL,
  `UUID_USER` varchar(36) NOT NULL,
  `ID` int(3) DEFAULT NULL,
  `KETERANGAN` varchar(75) DEFAULT NULL,
  `URL` varchar(100) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_BUKTI`),
  KEY `UUID_USER_BUKTI` (`UUID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti`
--

INSERT INTO `bukti` (`UUID_BUKTI`, `UUID_USER`, `ID`, `KETERANGAN`, `URL`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('0c05d5df-4f4e-11e8-a823-00ff0b0c062f', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', NULL, '123456', 'assets/bukti_kelengkapan/LSP_BPJSTK_file_2f3611ce-c7ad-408f-bb77-621ce78dcc34.pdf', 'Super Admin', '2018-05-04 10:48:46', 'Super Admin', '2018-05-04 10:49:02', '0'),
('185093a2-4f51-11e8-a823-00ff0b0c062f', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', NULL, 'Sertifikat 7', 'assets/bukti_kelengkapan/LSP_BPJSTK_file_635cd90d-4b1b-46a4-bfc0-b7e48f55a63d.pdf', 'Super Admin', '2018-05-04 11:10:35', 'Super Admin', '2018-05-17 13:59:53', '1'),
('24775143-4f4e-11e8-a823-00ff0b0c062f', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', NULL, 'ket', 'assets/bukti_kelengkapan/LSP_BPJSTK_file_1a5016c1-8014-40e2-b441-2caf8a15f39b.pdf', 'Super Admin', '2018-05-04 10:49:27', 'Super Admin', '2018-05-04 10:52:00', '0'),
('620e2d49-4f4d-11e8-a823-00ff0b0c062f', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', NULL, 'Keterangan 123', 'assets/bukti_kelengkapan/LSP_BPJSTK_file_2c91951b-6fe7-439c-8890-dab0f1201141.pdf', 'Super Admin', '2018-05-04 10:44:01', 'Super Admin', '2018-05-04 10:49:08', '0'),
('8a871d3a-4f4e-11e8-a823-00ff0b0c062f', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', NULL, 'Sertifikat 1', 'assets/bukti_kelengkapan/LSP_BPJSTK_file_cc028418-23ae-4337-8fb5-36e5240d1ef1.pdf', 'Super Admin', '2018-05-04 10:52:18', NULL, NULL, '1'),
('8ec61877-4f4e-11e8-a823-00ff0b0c062f', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', NULL, 'Sertifikat 2', 'assets/bukti_kelengkapan/LSP_BPJSTK_file_3b5a9b3d-e0cd-4959-badd-896fbe6637fb.pdf', 'Super Admin', '2018-05-04 10:52:25', NULL, NULL, '1'),
('92a98576-4f4e-11e8-a823-00ff0b0c062f', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', NULL, 'Sertifikat 3', 'assets/bukti_kelengkapan/LSP_BPJSTK_file_cb06a2ba-f8dd-4038-a2da-2eb5c42ff377.pdf', 'Super Admin', '2018-05-04 10:52:32', NULL, NULL, '1'),
('96ee4baa-4f4e-11e8-a823-00ff0b0c062f', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', NULL, 'Sertifikat 4', 'assets/bukti_kelengkapan/LSP_BPJSTK_file_9e967cda-26cc-4940-a88c-8703b4f26f6d.pdf', 'Super Admin', '2018-05-04 10:52:39', NULL, NULL, '1'),
('9a7fb69d-4f4e-11e8-a823-00ff0b0c062f', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', NULL, 'Sertifikat 5', 'assets/bukti_kelengkapan/LSP_BPJSTK_file_20792488-0de2-48f5-ba31-bb00125bb608.pdf', 'Super Admin', '2018-05-04 10:52:45', 'Super Admin', '2018-05-18 09:20:55', '1'),
('a94347e8-4f4e-11e8-a823-00ff0b0c062f', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', NULL, 'Sertifikat 6', 'assets/bukti_kelengkapan/LSP_BPJSTK_file_aad97c9e-40bb-4327-b5aa-0e9cdd2f10e7.pdf', 'Super Admin', '2018-05-04 10:53:10', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `elemen_kompetensi`
--

CREATE TABLE IF NOT EXISTS `elemen_kompetensi` (
  `UUID_EK` varchar(36) NOT NULL,
  `UUID_UK` varchar(36) DEFAULT NULL,
  `NOMOR_EK` varchar(50) DEFAULT NULL,
  `NAMA_EK` varchar(100) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_EK`),
  KEY `UUID_UK_EK` (`UUID_UK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elemen_kompetensi`
--

INSERT INTO `elemen_kompetensi` (`UUID_EK`, `UUID_UK`, `NOMOR_EK`, `NAMA_EK`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('010294af-3d99-11e8-806f-64006a4fef6c', '7ca72635-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.004.01.2', 'Menerbitkan kartu peserta dan sertifikat untuk pes', 'Super Admin', '2018-04-11 22:00:06', NULL, NULL, '1'),
('01cde75b-3e3e-11e8-8647-64006a4fef6c', '8857d7ea-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.010.01.3', 'Merekapitulasi hasil penilaian kinerja individu se', 'Super Admin', '2018-04-12 17:41:07', NULL, NULL, '1'),
('031a4630-3e43-11e8-8647-64006a4fef6c', '6cc208e5-3302-11e8-89f9-64006a4fef6c', 'JSN.AS.001.01.2', 'Melakukan pengendalian aset', 'Super Admin', '2018-04-12 18:16:57', 'Super Admin', '2018-04-12 18:18:55', '1'),
('0948b43c-3d9a-11e8-806f-64006a4fef6c', '723bd384-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.005.01.1', 'Mempersiapkan pekerjaan pengajuan laporan kecelaka', 'Super Admin', '2018-04-11 22:07:30', NULL, NULL, '1'),
('0a1c0eed-3d99-11e8-806f-64006a4fef6c', '7ca72635-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.004.01.3', 'Menyerahkan kartu peserta dan sertifikat kepada pe', 'Super Admin', '2018-04-11 22:00:22', NULL, NULL, '1'),
('0a22579a-3e40-11e8-8647-64006a4fef6c', '34681927-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.009.01.1', 'Mengidentifikasi permasalahan', 'Super Admin', '2018-04-12 17:55:40', NULL, NULL, '1'),
('0ae50f22-3e43-11e8-8647-64006a4fef6c', '6cc208e5-3302-11e8-89f9-64006a4fef6c', 'JSN.AS.001.01.3', 'Melakukan administrasi dan pelaporan aset', 'Super Admin', '2018-04-12 18:17:10', 'Super Admin', '2018-04-12 18:18:59', '1'),
('0ff46ead-3e40-11e8-8647-64006a4fef6c', '34681927-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.009.01.2', 'Melakukan tindakan penyelesaian masalah sesuai kew', 'Super Admin', '2018-04-12 17:55:50', NULL, NULL, '1'),
('11801bec-3e3d-11e8-8647-64006a4fef6c', '80e4425e-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.009.01.1', 'Mengidentifikasi data tentang pemisahan dana', 'Super Admin', '2018-04-12 17:34:24', NULL, NULL, '1'),
('11849299-3e3f-11e8-8647-64006a4fef6c', 'd9e75bdb-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.001.01.1', 'Mempersiapkan pekerjaan perawatan', 'Super Admin', '2018-04-12 17:48:43', NULL, NULL, '1'),
('1185d426-3d9a-11e8-806f-64006a4fef6c', '723bd384-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.005.01.2', 'Menerima berkas pengajuan laporan kecelakaan kerja', 'Super Admin', '2018-04-11 22:07:44', NULL, NULL, '1'),
('12d4ca19-3d99-11e8-806f-64006a4fef6c', '7ca72635-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.004.01.4', 'Melakukan monitoring dan evaluasi ketepatan kepese', 'Super Admin', '2018-04-11 22:00:36', NULL, NULL, '1'),
('1373cf04-3e3e-11e8-8647-64006a4fef6c', '96306fff-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.013.01.1', 'Mempersiapkan administrasi imbal jasa dan kesejaht', 'Super Admin', '2018-04-12 17:41:37', NULL, NULL, '1'),
('186f6185-3e40-11e8-8647-64006a4fef6c', '34681927-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.009.01.3', 'Melaporkan penyelesaian masalah', 'Super Admin', '2018-04-12 17:56:04', NULL, NULL, '1'),
('18749832-3e3d-11e8-8647-64006a4fef6c', '80e4425e-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.009.01.2', 'Melakukan verifikasi terhadap pemisahan dana ke re', 'Super Admin', '2018-04-12 17:34:36', NULL, NULL, '1'),
('196ab823-3d9a-11e8-806f-64006a4fef6c', '723bd384-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.005.01.3', 'Mengagendakan laporan kecelakaan kerja tahap perta', 'Super Admin', '2018-04-11 22:07:57', NULL, NULL, '1'),
('19d48a95-3e3f-11e8-8647-64006a4fef6c', 'd9e75bdb-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.001.01.2', 'Membuat daftar peralatan yang perlu dilakukan pera', 'Super Admin', '2018-04-12 17:48:57', NULL, NULL, '1'),
('1a28043d-3e3e-11e8-8647-64006a4fef6c', '96306fff-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.013.01.2', 'Merencanakan pemberian imbal jasa dan kesejahteraa', 'Super Admin', '2018-04-12 17:41:48', NULL, NULL, '1'),
('1e4b7652-3e3d-11e8-8647-64006a4fef6c', '80e4425e-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.009.01.3', 'Mentransfer dana ke rekening masing-masing program', 'Super Admin', '2018-04-12 17:34:46', NULL, NULL, '1'),
('20c91d71-3e3f-11e8-8647-64006a4fef6c', 'd9e75bdb-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.001.01.3', 'Membuat rencana kegiatan perawatan', 'Super Admin', '2018-04-12 17:49:09', NULL, NULL, '1'),
('2458e7ba-3e3e-11e8-8647-64006a4fef6c', '96306fff-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.013.01.3', 'Melaksanakan pemberian imbal jasa dan kesejahteraa', 'Super Admin', '2018-04-12 17:42:05', NULL, NULL, '1'),
('29511bc9-3d9a-11e8-806f-64006a4fef6c', '80a7e5fa-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.006.01.1', 'Mempersiapkan pekerjaan pengajuan laporan kecelaka', 'Super Admin', '2018-04-11 22:08:24', NULL, NULL, '1'),
('2b88fe6a-3e3d-11e8-8647-64006a4fef6c', 'ad0fa4fd-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.010.01.1', 'Memverifikasi dokumen pembayaran Jaminan', 'Super Admin', '2018-04-12 17:35:08', NULL, NULL, '1'),
('2cd13cba-3e3f-11e8-8647-64006a4fef6c', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.003.01.1', 'Mempersiapkan instalasi software aplikasi', 'Super Admin', '2018-04-12 17:49:29', NULL, NULL, '1'),
('3064d084-3d9a-11e8-806f-64006a4fef6c', '80a7e5fa-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.006.01.2', 'Menerima berkas pengajuan laporan kecelakaan kerja', 'Super Admin', '2018-04-11 22:08:35', NULL, NULL, '1'),
('318f6497-3e3e-11e8-8647-64006a4fef6c', 'a1a09f66-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.016.01.1', 'Mempersiapkan administrasi data karyawan', 'Super Admin', '2018-04-12 17:42:27', NULL, NULL, '1'),
('32e652f9-3e3d-11e8-8647-64006a4fef6c', 'ad0fa4fd-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.010.01.2', 'Melaksanakan Pembayaran Jaminan', 'Super Admin', '2018-04-12 17:35:20', NULL, NULL, '1'),
('34dc4853-3e3f-11e8-8647-64006a4fef6c', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.003.01.2', 'Melaksanakan pekerjaan instalasi software aplikasi', 'Super Admin', '2018-04-12 17:49:42', NULL, NULL, '1'),
('39851ad4-3e3d-11e8-8647-64006a4fef6c', 'ad0fa4fd-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.010.01.3', 'Merencanakan nominal jumlah pembayaran jaminan sec', 'Super Admin', '2018-04-12 17:35:31', NULL, NULL, '1'),
('3ae0498f-3e3f-11e8-8647-64006a4fef6c', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.003.01.3', 'Mengecek hasil instalasi', 'Super Admin', '2018-04-12 17:49:52', NULL, NULL, '1'),
('3af01477-3d9a-11e8-806f-64006a4fef6c', '80a7e5fa-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.006.01.3', 'Mengagendakan laporan kecelakaan kerja tahap kedua', 'Super Admin', '2018-04-11 22:08:53', NULL, NULL, '1'),
('3b0b06ed-3e40-11e8-8647-64006a4fef6c', '3f4bc69f-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.010.01.1', 'Menentukan persyaratan pengguna', 'Super Admin', '2018-04-12 17:57:02', NULL, NULL, '1'),
('40a93e61-3e3d-11e8-8647-64006a4fef6c', 'ad0fa4fd-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.010.01.4', 'Mengarsip dokumen pembayaran jaminan', 'Super Admin', '2018-04-12 17:35:43', NULL, NULL, '1'),
('4afef423-3d9a-11e8-806f-64006a4fef6c', '8b30d3be-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.022.01.1', 'Mempersiapkan pekerjaan menerima pengajuan klaim J', 'Super Admin', '2018-04-11 22:09:20', NULL, NULL, '1'),
('4b06dd4c-3d98-11e8-806f-64006a4fef6c', '0544790c-3281-11e8-89f9-64006a4fef6c', 'JSN.UM.002.01.1', 'Mengidentifikasi sistem kearsipan', 'Super Admin', '2018-04-11 21:55:01', NULL, NULL, '1'),
('4bf252ae-3e40-11e8-8647-64006a4fef6c', '3f4bc69f-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.010.01.2', 'Membuat desain awal jaringan', 'Super Admin', '2018-04-12 17:57:31', NULL, NULL, '1'),
('4e1edc7d-3d99-11e8-806f-64006a4fef6c', '873735d1-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.005.01.1', 'Mendapatkan data calon mitra ', 'Super Admin', '2018-04-11 22:02:16', NULL, NULL, '1'),
('4fa88f8f-3e3e-11e8-8647-64006a4fef6c', 'a1a09f66-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.016.01.2', 'Melaksanakan proses administrasi pembaharuan data ', 'Super Admin', '2018-04-12 17:43:18', NULL, NULL, '1'),
('50e7b3e2-3e3d-11e8-8647-64006a4fef6c', 'bf9e51d3-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.011.01.1', 'Menerima dokumen pembayaran BUBM ', 'Super Admin', '2018-04-12 17:36:10', NULL, NULL, '1'),
('527910a3-3d9a-11e8-806f-64006a4fef6c', '8b30d3be-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.022.01.2', 'Menerima berkas pengajuan klaim JKM', 'Super Admin', '2018-04-11 22:09:33', NULL, NULL, '1'),
('54b4c4bf-3d98-11e8-806f-64006a4fef6c', '0544790c-3281-11e8-89f9-64006a4fef6c', 'JSN.UM.002.01.2', 'Menyimpan dokumen sesuai sistem kearsipan', 'Super Admin', '2018-04-11 21:55:17', NULL, NULL, '1'),
('54ef9f78-3d99-11e8-806f-64006a4fef6c', '873735d1-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.005.01.2', 'Mendapatkan komitmen dengan calon mitra', 'Super Admin', '2018-04-11 22:02:27', NULL, NULL, '1'),
('57440667-3e3e-11e8-8647-64006a4fef6c', 'a1a09f66-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.016.01.3', 'Menyimpan hasil pembaharuan data administrasi kary', 'Super Admin', '2018-04-12 17:43:31', NULL, NULL, '1'),
('5836f449-3e3d-11e8-8647-64006a4fef6c', 'bf9e51d3-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.011.01.2', 'Memverifikasi dokumen pembayaran BUBM', 'Super Admin', '2018-04-12 17:36:23', NULL, NULL, '1'),
('5c1225e3-3d98-11e8-806f-64006a4fef6c', '0544790c-3281-11e8-89f9-64006a4fef6c', 'JSN.UM.002.01.3', 'Mengelola arsip', 'Super Admin', '2018-04-11 21:55:30', NULL, NULL, '1'),
('5c1adca9-3d99-11e8-806f-64006a4fef6c', '873735d1-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.005.01.3', 'Mengevaluasi efektifitas program kerjasama dengan ', 'Super Admin', '2018-04-11 22:02:39', NULL, NULL, '1'),
('5c29d8de-3e40-11e8-8647-64006a4fef6c', '3f4bc69f-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.010.01.3', 'Mengevaluasi lalulintas jaringan', 'Super Admin', '2018-04-12 17:57:58', NULL, NULL, '1'),
('5c83dba0-3d9a-11e8-806f-64006a4fef6c', '8b30d3be-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.022.01.3', 'Mengagendakan klaim JKM', 'Super Admin', '2018-04-11 22:09:49', NULL, NULL, '1'),
('5fdb6236-3e3d-11e8-8647-64006a4fef6c', 'bf9e51d3-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.011.01.3', 'Melaksanakan Pembayaran BUBM', 'Super Admin', '2018-04-12 17:36:36', NULL, NULL, '1'),
('6160ccfd-3e42-11e8-8647-64006a4fef6c', '5286a276-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.011.01.1', 'Mencatat hak akses keamanan', 'Super Admin', '2018-04-12 18:12:26', NULL, NULL, '1'),
('67551862-3e3d-11e8-8647-64006a4fef6c', 'bf9e51d3-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.011.01.4', 'Merencanakan nominal jumlah pembayaran BUBM secara', 'Super Admin', '2018-04-12 17:36:48', NULL, NULL, '1'),
('67cb572b-3e42-11e8-8647-64006a4fef6c', '5286a276-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.011.01.2', 'Mencatat lisensi perangkat lunak', 'Super Admin', '2018-04-12 18:12:36', NULL, NULL, '1'),
('6af7477e-3e40-11e8-8647-64006a4fef6c', '3f4bc69f-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.010.01.4', 'Menyelesaikan desain jaringan', 'Super Admin', '2018-04-12 17:58:23', NULL, NULL, '1'),
('6ee18998-3d98-11e8-806f-64006a4fef6c', '114efdcb-3281-11e8-89f9-64006a4fef6c', 'JSN.UM.003.01.1', 'Menyusun bahan sosialisasi', 'Super Admin', '2018-04-11 21:56:01', NULL, NULL, '1'),
('6ee5dfe7-3d9a-11e8-806f-64006a4fef6c', 'a8151e2c-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.026.01.1', 'Mempersiapkan pekerjaan menerima permohonan klaim ', 'Super Admin', '2018-04-11 22:10:20', NULL, NULL, '1'),
('6f0a6799-3e3d-11e8-8647-64006a4fef6c', 'bf9e51d3-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.011.01.5', 'Mengarsip dokumen pembayaran BUBM', 'Super Admin', '2018-04-12 17:37:01', NULL, NULL, '1'),
('7016749c-3e42-11e8-8647-64006a4fef6c', '5286a276-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.011.01.3', 'Menjalankan back-up system', 'Super Admin', '2018-04-12 18:12:50', NULL, NULL, '1'),
('767f0de3-3d98-11e8-806f-64006a4fef6c', '114efdcb-3281-11e8-89f9-64006a4fef6c', 'JSN.UM.003.01.2', 'Melaksanakan sosialisasi', 'Super Admin', '2018-04-11 21:56:14', NULL, NULL, '1'),
('770fc733-3e42-11e8-8647-64006a4fef6c', '5286a276-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.011.01.4', 'Memulihkan (restore) sistem dengan menggunakan bac', 'Super Admin', '2018-04-12 18:13:02', 'Super Admin', '2018-04-13 08:19:16', '1'),
('7782c43c-3e3e-11e8-8647-64006a4fef6c', 'abd195e1-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.017.01.1', 'Mempersiapkan pelaksanaan penghargaan atau sanksi ', 'Super Admin', '2018-04-12 17:44:25', NULL, NULL, '1'),
('7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'a8151e2c-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.026.01.2', 'Menerima berkas pengajuan klaim JHT', 'Super Admin', '2018-04-11 22:10:40', NULL, NULL, '1'),
('7d14b6a4-3e3d-11e8-8647-64006a4fef6c', '2d98cbe6-3301-11e8-89f9-64006a4fef6c', 'JSN.KE.013.01.1', 'Melakukan rekonsiliasi atas transaksi keuangan', 'Super Admin', '2018-04-12 17:37:25', NULL, NULL, '1'),
('7e5eb99f-3e42-11e8-8647-64006a4fef6c', '5286a276-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.011.01.5', 'Mendokumentasikan akses keamanan', 'Super Admin', '2018-04-12 18:13:14', NULL, NULL, '1'),
('7f58c5d7-3d99-11e8-806f-64006a4fef6c', '70c748ef-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.019.01.1', 'Menetapkan iuran pertama', 'Super Admin', '2018-04-11 22:03:38', NULL, NULL, '1'),
('7f8b5dbf-3e3e-11e8-8647-64006a4fef6c', 'abd195e1-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.017.01.2', 'Merencanakan pemberian penghargaan dan sanksi', 'Super Admin', '2018-04-12 17:44:38', NULL, NULL, '1'),
('7fe5b84d-3d98-11e8-806f-64006a4fef6c', '114efdcb-3281-11e8-89f9-64006a4fef6c', 'JSN.UM.003.01.3', 'Monitoring dan evaluasi kegiatan sosialisasi', 'Super Admin', '2018-04-11 21:56:30', NULL, NULL, '1'),
('84b166fa-3d9a-11e8-806f-64006a4fef6c', 'a8151e2c-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.026.01.3', 'Mengagendakan klaim JHT', 'Super Admin', '2018-04-11 22:10:57', NULL, NULL, '1'),
('84be26c0-3e3d-11e8-8647-64006a4fef6c', '2d98cbe6-3301-11e8-89f9-64006a4fef6c', 'JSN.KE.013.01.2', 'Membuat data lampiran laporan keuangan ', 'Super Admin', '2018-04-12 17:37:37', NULL, NULL, '1'),
('86a7bd1c-3d99-11e8-806f-64006a4fef6c', '70c748ef-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.019.01.2', 'Menerima data termuktahir melalui web portal', 'Super Admin', '2018-04-11 22:03:51', NULL, NULL, '1'),
('87db6a4f-3e3e-11e8-8647-64006a4fef6c', 'abd195e1-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.017.01.3', 'Mengadministrasikan hasil pemberian penghargaan da', 'Super Admin', '2018-04-12 17:44:52', NULL, NULL, '1'),
('8843f46f-3e3f-11e8-8647-64006a4fef6c', 'faee9d9b-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.004.01.1', 'Mengidentifikasi kebutuhan sarana teknologi inform', 'Super Admin', '2018-04-12 17:52:02', NULL, NULL, '1'),
('8b01a022-3e42-11e8-8647-64006a4fef6c', '5fb850ac-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.012.01.1', 'Memasang perangkat pada sistem jaringan', 'Super Admin', '2018-04-12 18:13:35', NULL, NULL, '1'),
('8d035db9-3e3c-11e8-8647-64006a4fef6c', 'fc9e13af-32ff-11e8-89f9-64006a4fef6c', 'JSN.KE.001.01.1', 'Mempersiapkan informasi yang dibutuhkan dalam peny', 'Super Admin', '2018-04-12 17:30:42', NULL, NULL, '1'),
('8d36acf7-3e3d-11e8-8647-64006a4fef6c', '2d98cbe6-3301-11e8-89f9-64006a4fef6c', 'JSN.KE.013.01.3', 'Melakukan rekonsiliasi data aktiva', 'Super Admin', '2018-04-12 17:37:52', NULL, NULL, '1'),
('8f333bec-3d99-11e8-806f-64006a4fef6c', '70c748ef-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.019.01.3', 'Mendistribusikan Tanda Bukti Kepesertaan Pertama', 'Super Admin', '2018-04-11 22:04:05', NULL, NULL, '1'),
('8f420c03-3e3f-11e8-8647-64006a4fef6c', 'faee9d9b-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.004.01.2', 'Memenuhi kebutuhan sarana teknologi informasi', 'Super Admin', '2018-04-12 17:52:14', NULL, NULL, '1'),
('91bd06b5-3e42-11e8-8647-64006a4fef6c', '5fb850ac-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.012.01.2', 'Mengkonfigurasi perangkat layanan', 'Super Admin', '2018-04-12 18:13:47', NULL, NULL, '1'),
('930e6e04-3b34-11e8-806f-64006a4fef6c', '5be2d48e-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.001.01.1', 'Mengidentifikasi data kebutuhan karyawan', 'Super Admin', '2018-04-08 20:56:05', 'Super Admin', '2018-04-09 12:14:41', '1'),
('948c6f2a-3d98-11e8-806f-64006a4fef6c', '59114d2d-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.001.01.1', 'Mencari data potensi', 'Super Admin', '2018-04-11 21:57:04', NULL, NULL, '1'),
('971b8a53-3e3c-11e8-8647-64006a4fef6c', 'fc9e13af-32ff-11e8-89f9-64006a4fef6c', 'JSN.KE.001.01.2', 'Mengidentifikasi kebutuhan anggaran kantor cabang ', 'Super Admin', '2018-04-12 17:30:59', NULL, NULL, '1'),
('981b985e-3e42-11e8-8647-64006a4fef6c', '5fb850ac-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.012.01.3', 'Mengadministrasi dan memberikan dukungan fungsi pe', 'Super Admin', '2018-04-12 18:13:57', NULL, NULL, '1'),
('986d2957-3e3e-11e8-8647-64006a4fef6c', '23d244d2-3303-11e8-89f9-64006a4fef6c', 'JSN.HC.022.01.1', 'Merencanakan Sosialisasi Hubungan Industrial', 'Super Admin', '2018-04-12 17:45:20', NULL, NULL, '1'),
('9b64abd5-3d98-11e8-806f-64006a4fef6c', '59114d2d-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.001.01.2', 'Merekam data potensi', 'Super Admin', '2018-04-11 21:57:16', NULL, NULL, '1'),
('9b6bda56-3e3d-11e8-8647-64006a4fef6c', '3997b110-3301-11e8-89f9-64006a4fef6c', 'JSN.KE.014.01.1', 'Melakukan rekonsiliasi atas kewajiban perpajakan y', 'Super Admin', '2018-04-12 17:38:15', NULL, NULL, '1'),
('9e3fac3c-3e3c-11e8-8647-64006a4fef6c', 'fc9e13af-32ff-11e8-89f9-64006a4fef6c', 'JSN.KE.001.01.3', 'Merekapitulasi data anggaran', 'Super Admin', '2018-04-12 17:31:11', NULL, NULL, '1'),
('9e7969fc-3d97-11e8-806f-64006a4fef6c', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'JSN.UM.001.01.1', 'Mempersiapkan dokumen', 'Super Admin', '2018-04-11 21:50:12', 'Super Admin', '2018-04-11 21:53:37', '1'),
('9f0e8454-3e3e-11e8-8647-64006a4fef6c', '23d244d2-3303-11e8-89f9-64006a4fef6c', 'JSN.HC.022.01.2', 'Melaksanakan Sosialisasi Hubungan Industrial', 'Super Admin', '2018-04-12 17:45:31', NULL, NULL, '1'),
('a04d43ab-3e3f-11e8-8647-64006a4fef6c', '06e1531b-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.005.01.1', 'Mempersiapkan pekerjaan mengembalikan file yang te', 'Super Admin', '2018-04-12 17:52:43', NULL, NULL, '1'),
('a12a1e95-3d9a-11e8-806f-64006a4fef6c', 'b6e76a26-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.034.01.1', 'Mempersiapkan pekerjaan menerima permohonan klaim ', 'Super Admin', '2018-04-11 22:11:45', NULL, NULL, '1'),
('a15b3530-3b34-11e8-806f-64006a4fef6c', '5be2d48e-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.001.01.2', 'Melakukan evaluasi kebutuhan karyawan di kantor ca', 'Super Admin', '2018-04-08 20:56:29', 'Super Admin', '2018-04-09 08:40:30', '1'),
('a224d60e-3e3d-11e8-8647-64006a4fef6c', '3997b110-3301-11e8-89f9-64006a4fef6c', 'JSN.KE.014.01.2', 'Melakukan input data ke aplikasi perpajakan nasion', 'Super Admin', '2018-04-12 17:38:27', NULL, NULL, '1'),
('a4451a99-3e42-11e8-8647-64006a4fef6c', '5fb850ac-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.012.01.4', 'Memecahkan masalah pada perangkat jaringan', 'Super Admin', '2018-04-12 18:14:18', NULL, NULL, '1'),
('a76f4201-3e3f-11e8-8647-64006a4fef6c', '06e1531b-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.005.01.2', 'Menjalankan program recovery data', 'Super Admin', '2018-04-12 17:52:55', NULL, NULL, '1'),
('a87e6cef-3e3e-11e8-8647-64006a4fef6c', '23d244d2-3303-11e8-89f9-64006a4fef6c', 'JSN.HC.022.01.3', 'Mengevaluasi Sosialisasi Hubungan Industrial', 'Super Admin', '2018-04-12 17:45:47', NULL, NULL, '1'),
('a9f90e34-3e3d-11e8-8647-64006a4fef6c', '3997b110-3301-11e8-89f9-64006a4fef6c', 'JSN.KE.014.01.3', 'Menyampaikan laporan perpajakan kepada instansi te', 'Super Admin', '2018-04-12 17:38:40', NULL, NULL, '1'),
('ad0a0694-3b34-11e8-806f-64006a4fef6c', '5be2d48e-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.001.01.3', 'Membuat usulan kebutuhan karyawan kantor cabang', 'Super Admin', '2018-04-08 20:56:49', 'Super Admin', '2018-04-08 20:57:34', '1'),
('ae4b50f7-3d9a-11e8-806f-64006a4fef6c', 'b6e76a26-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.034.01.2', 'Menerima berkas pengajuan klaim JP', 'Super Admin', '2018-04-11 22:12:07', NULL, NULL, '1'),
('ae9ab39d-3e3c-11e8-8647-64006a4fef6c', '0cbffe09-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.005.01.1', 'Memverifikasi bukti setor bank iuran kepesertaan', 'Super Admin', '2018-04-12 17:31:38', NULL, NULL, '1'),
('aefe1d72-3e3f-11e8-8647-64006a4fef6c', '06e1531b-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.005.01.3', 'Menguji hasil recovery data', 'Super Admin', '2018-04-12 17:53:07', NULL, NULL, '1'),
('afb0e9cf-3d98-11e8-806f-64006a4fef6c', '648a9d29-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.002.01.1', 'Memberikan informasi tentang program Jaminan Sosia', 'Super Admin', '2018-04-11 21:57:50', NULL, NULL, '1'),
('b5116f21-3d99-11e8-806f-64006a4fef6c', '5def4c55-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.001.01.1', 'Mempersiapkan penanganan pengaduan', 'Super Admin', '2018-04-11 22:05:08', NULL, NULL, '1'),
('b5b2e666-3e3c-11e8-8647-64006a4fef6c', '0cbffe09-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.005.01.2', 'Memverifikasi validitas pembayaran iuran', 'Super Admin', '2018-04-12 17:31:50', NULL, NULL, '1'),
('b6d2068e-3d9a-11e8-806f-64006a4fef6c', 'b6e76a26-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.034.01.3', 'Mengagendakan pengajuan klaim JP', 'Super Admin', '2018-04-11 22:12:21', NULL, NULL, '1'),
('b9e6d882-3d98-11e8-806f-64006a4fef6c', '648a9d29-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.002.01.2', 'Menerima kelengkapan dokumen pendaftaran', 'Super Admin', '2018-04-11 21:58:07', NULL, NULL, '1'),
('bc39ae08-3e3f-11e8-8647-64006a4fef6c', '119eece2-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.006.01.1', 'Mempersiapkan pekerjaan membersihkan virus yang me', 'Super Admin', '2018-04-12 17:53:30', NULL, NULL, '1'),
('bd33d0bf-3e3c-11e8-8647-64006a4fef6c', '0cbffe09-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.005.01.3', 'Mencetak bukti pembayaran ', 'Super Admin', '2018-04-12 17:32:03', NULL, NULL, '1'),
('bf148d03-3d99-11e8-806f-64006a4fef6c', '5def4c55-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.001.01.2', 'Menerima dan menggolongkan pengaduan', 'Super Admin', '2018-04-11 22:05:25', NULL, NULL, '1'),
('c18a0a31-3d97-11e8-806f-64006a4fef6c', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'JSN.UM.001.01.2', 'Memproduksi dokumen', 'Super Admin', '2018-04-11 21:51:10', 'Super Admin', '2018-04-11 21:53:48', '1'),
('c2daa0d5-3e3f-11e8-8647-64006a4fef6c', '119eece2-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.006.01.2', 'Menjalankan software anti virus', 'Super Admin', '2018-04-12 17:53:41', NULL, NULL, '1'),
('c3a7d07a-3d98-11e8-806f-64006a4fef6c', '648a9d29-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.002.01.3', 'Melakukan rekonsiliasi dan pembayaran iuran', 'Super Admin', '2018-04-11 21:58:23', NULL, NULL, '1'),
('c9adb8a9-3e3f-11e8-8647-64006a4fef6c', '119eece2-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.006.01.3', 'Menutup software anti virus', 'Super Admin', '2018-04-12 17:53:52', NULL, NULL, '1'),
('ca6af1f8-3d99-11e8-806f-64006a4fef6c', '5def4c55-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.001.01.3', 'Menangani pengaduan sesuai jenis pengaduan', 'Super Admin', '2018-04-11 22:05:44', NULL, NULL, '1'),
('cb2d75f1-3e3c-11e8-8647-64006a4fef6c', '19d7cfa9-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.007.01.1', 'Mempersiapkan pekerjaan penerimaan pendapatan lain', 'Super Admin', '2018-04-12 17:32:26', NULL, NULL, '1'),
('d1d612b4-3e3d-11e8-8647-64006a4fef6c', '7c5df84d-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.005.01.1', 'Mempersiapkan pengumpulan data pengembangan karyaw', 'Super Admin', '2018-04-12 17:39:47', NULL, NULL, '1'),
('d1fdad5c-3d9a-11e8-806f-64006a4fef6c', 'cedbd042-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.040.01.1', 'Mempersiapkan pekerjaan menerima konfirmasi peneri', 'Super Admin', '2018-04-11 22:13:07', NULL, NULL, '1'),
('d4879fb8-3e3f-11e8-8647-64006a4fef6c', '1db7c37e-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.007.01.1', 'Menyiapkan komputer jaringan', 'Super Admin', '2018-04-12 17:54:10', NULL, NULL, '1'),
('d687e13a-3e3c-11e8-8647-64006a4fef6c', '19d7cfa9-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.007.01.2', 'Memverifikasi bukti penerimaan pendapatan lain', 'Super Admin', '2018-04-12 17:32:45', NULL, NULL, '1'),
('d69b17b5-3d98-11e8-806f-64006a4fef6c', 'b935ef7a-32fe-11e8-89f9-64006a4fef6c', 'JSN.PM.003.01.1', 'Menetapkan iuran pertama', 'Super Admin', '2018-04-11 21:58:55', NULL, NULL, '1'),
('d8c5662c-3e3d-11e8-8647-64006a4fef6c', '7c5df84d-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.005.01.2', 'Membuat usulan kebutuhan program pembelajaran dan ', 'Super Admin', '2018-04-12 17:39:58', NULL, NULL, '1'),
('dac9922d-3e3f-11e8-8647-64006a4fef6c', '1db7c37e-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.007.01.2', 'Menjalankan software anti virus', 'Super Admin', '2018-04-12 17:54:21', NULL, NULL, '1'),
('de069029-3e3c-11e8-8647-64006a4fef6c', '19d7cfa9-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.007.01.3', 'Membukukan penerimaan pendapatan lain pada aplikas', 'Super Admin', '2018-04-12 17:32:58', NULL, NULL, '1'),
('dfa7291d-3d98-11e8-806f-64006a4fef6c', 'b935ef7a-32fe-11e8-89f9-64006a4fef6c', 'JSN.PM.003.01.2', 'Menerima data termuktahir melalui web portal', 'Super Admin', '2018-04-11 21:59:10', NULL, NULL, '1'),
('e0902618-3e3d-11e8-8647-64006a4fef6c', '7c5df84d-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.005.01.3', 'Mengkoordinasikan usulan program pengembangan kary', 'Super Admin', '2018-04-12 17:40:11', NULL, NULL, '1'),
('e19c3f43-3d97-11e8-806f-64006a4fef6c', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'JSN.UM.001.01.3', 'Mencetak dokumen', 'Super Admin', '2018-04-11 21:52:04', 'Super Admin', '2018-04-11 21:54:05', '1'),
('e1a3eaf5-3e3f-11e8-8647-64006a4fef6c', '1db7c37e-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.007.01.3', 'Menutup software anti virus', 'Super Admin', '2018-04-12 17:54:32', NULL, NULL, '1'),
('e23fafc0-3d9a-11e8-806f-64006a4fef6c', 'cedbd042-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.040.01.2', 'Menerima berkas konfirmasi penerima manfaat  Jamin', 'Super Admin', '2018-04-11 22:13:34', NULL, NULL, '1'),
('e55632f0-3d99-11e8-806f-64006a4fef6c', '680afec3-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.004.01.1', 'Mempersiapkan pekerjaan menerima pengajuan adminis', 'Super Admin', '2018-04-11 22:06:29', NULL, NULL, '1'),
('e7c523a6-3d98-11e8-806f-64006a4fef6c', 'b935ef7a-32fe-11e8-89f9-64006a4fef6c', 'JSN.PM.003.01.3', 'Melakukan pencetakan Tanda Bukti Kepesertaan Perta', 'Super Admin', '2018-04-11 21:59:24', NULL, NULL, '1'),
('ebb302d6-3d97-11e8-806f-64006a4fef6c', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'JSN.UM.001.01.4', 'Mempersiapkan dokumen presentasi', 'Super Admin', '2018-04-11 21:52:21', 'Super Admin', '2018-04-11 21:54:27', '1'),
('edd5ca4d-3d99-11e8-806f-64006a4fef6c', '680afec3-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.004.01.2', 'Menerima dokumen kepesertaan', 'Super Admin', '2018-04-11 22:06:44', NULL, NULL, '1'),
('ee1f63d8-3d9a-11e8-806f-64006a4fef6c', 'cedbd042-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.040.01.3', 'Mengagenda status konfirmasi penerima manfaat Jami', 'Super Admin', '2018-04-11 22:13:54', NULL, NULL, '1'),
('ef3bf74d-3e3f-11e8-8647-64006a4fef6c', '27a89ed9-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.008.01.1', 'Menyiapkan pekerjaan untuk melindungi komputer dar', 'Super Admin', '2018-04-12 17:54:55', NULL, NULL, '1'),
('f1a4f998-3e3d-11e8-8647-64006a4fef6c', '8857d7ea-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.010.01.1', 'Mempersiapkan rencana pengumpulan data penilaian k', 'Super Admin', '2018-04-12 17:40:40', NULL, NULL, '1'),
('f4e5a08a-3e3f-11e8-8647-64006a4fef6c', '27a89ed9-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.008.01.2', 'Melaksanakan perlindungan terhadap serangan berbag', 'Super Admin', '2018-04-12 17:55:05', NULL, NULL, '1'),
('f6a2b153-3d99-11e8-806f-64006a4fef6c', '680afec3-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.004.01.3', 'Mengagendakan pengajuan administrasi kepesertaan', 'Super Admin', '2018-04-11 22:06:58', NULL, NULL, '1'),
('f7e99c24-3d98-11e8-806f-64006a4fef6c', '7ca72635-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.004.01.1', 'Menerima permintaan penerbitan kartu peserta dan s', 'Super Admin', '2018-04-11 21:59:51', NULL, NULL, '1'),
('f8864a69-3e3d-11e8-8647-64006a4fef6c', '8857d7ea-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.010.01.2', 'Memproses pengumpulan data penilaian kinerja indiv', 'Super Admin', '2018-04-12 17:40:52', NULL, NULL, '1'),
('fadb64d3-3e3f-11e8-8647-64006a4fef6c', '27a89ed9-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.008.01.3', 'Membuat laporan perlindungan dari serangan berbaga', 'Super Admin', '2018-04-12 17:55:15', NULL, NULL, '1'),
('fd1fb86c-3e42-11e8-8647-64006a4fef6c', '6cc208e5-3302-11e8-89f9-64006a4fef6c', 'JSN.AS.001.01.1', 'Merencanakan kebutuhan aset', 'Super Admin', '2018-04-12 18:16:47', 'Super Admin', '2018-04-13 08:23:42', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fr_apl_01`
--

CREATE TABLE IF NOT EXISTS `fr_apl_01` (
  `UUID_APL01` varchar(36) NOT NULL,
  `UUID_ADM` varchar(36) DEFAULT NULL,
  `UUID_USER` varchar(36) DEFAULT NULL,
  `NO_DOKUMEN` varchar(50) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(36) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `JENIS_KELAMIN` varchar(18) DEFAULT NULL,
  `KEBANGSAAN` varchar(36) DEFAULT NULL,
  `ALAMAT_RUMAH` varchar(160) DEFAULT NULL,
  `KODE_POS_RUMAH` varchar(10) DEFAULT NULL,
  `NO_TLP_RUMAH` varchar(18) DEFAULT NULL,
  `NO_TLP_HP` varchar(18) DEFAULT NULL,
  `NO_TLP_KANTOR` varchar(18) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PENDIDIKAN_TERAKHIR` varchar(36) DEFAULT NULL,
  `NAMA_PERUSAHAAN` varchar(50) DEFAULT NULL,
  `JABATAN` varchar(80) DEFAULT NULL,
  `ALAMAT_KANTOR` varchar(80) DEFAULT NULL,
  `KODE_POS_PERUSAHAAN` varchar(10) DEFAULT NULL,
  `EMAIL_KANTOR` varchar(100) DEFAULT NULL,
  `FAX_KANTOR` varchar(10) DEFAULT NULL,
  `TUJUAN_ASESMEN` varchar(50) DEFAULT NULL,
  `TUJUAN_ASESMEN_LAINNYA_KETERANGAN` varchar(255) DEFAULT NULL,
  `JENIS_SKEMA` varchar(50) DEFAULT NULL,
  `UUID_SKEMA` varchar(36) DEFAULT NULL,
  `IS_DITERIMA` varchar(1) DEFAULT NULL,
  `IS_MEMENUHI_SYARAT` varchar(1) DEFAULT NULL,
  `ALASAN_KURANG_SYARAT` varchar(80) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_APL01`),
  KEY `UUID_ADM_APL01` (`UUID_ADM`),
  KEY `UUID_USER_FR_APL_01` (`UUID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fr_apl_01`
--

INSERT INTO `fr_apl_01` (`UUID_APL01`, `UUID_ADM`, `UUID_USER`, `NO_DOKUMEN`, `NAMA_LENGKAP`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `JENIS_KELAMIN`, `KEBANGSAAN`, `ALAMAT_RUMAH`, `KODE_POS_RUMAH`, `NO_TLP_RUMAH`, `NO_TLP_HP`, `NO_TLP_KANTOR`, `EMAIL`, `PENDIDIKAN_TERAKHIR`, `NAMA_PERUSAHAAN`, `JABATAN`, `ALAMAT_KANTOR`, `KODE_POS_PERUSAHAAN`, `EMAIL_KANTOR`, `FAX_KANTOR`, `TUJUAN_ASESMEN`, `TUJUAN_ASESMEN_LAINNYA_KETERANGAN`, `JENIS_SKEMA`, `UUID_SKEMA`, `IS_DITERIMA`, `IS_MEMENUHI_SYARAT`, `ALASAN_KURANG_SYARAT`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('58ddf08f-fc20-490d-b617-274fca9e140f', NULL, 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', '67DA7EEAPL01', 'Azhar Fadillah', '', '0000-00-00', 'Laki - laki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 'Klaster', '6f555fc3-2b31-11e8-b1df-64006a4fef6c', NULL, NULL, NULL, 'Super Admin', '2018-05-19 14:52:25', 'Super Admin', '2018-05-19 16:06:08', '1'),
('b12a2a81-469a-11e8-a478-a4c494eed0da', NULL, 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', '8B6BK2CAPL01', 'Karid Nurvenus', 'Kota Blitar', '1993-01-24', 'Laki - laki', 'Indonesia', 'Dsn. Manukan RT/RW 3/1 - Ds. Pojok - Kec. Garum - Kab. Blitar - Jawa Timur - Indonesia', '66182', '0342563506', '085790902042', '0215207797', 'karidnur@gmail.com', 'S1', 'BPJS Ketenagakerjaan', 'Penata Utama Teknologi dan Solusi Pembelajaran ', 'Jln. Dadali No. 79 Kota Bogor - Jawa Barat - Indonesia ', '16161', 'care@bpjsketenagakerjaan.go.id', '0215202310', 'Sertifikasi', NULL, 'Klaster', '57797303-31d0-11e8-89f9-64006a4fef6c', NULL, NULL, NULL, 'Super Admin', '2018-04-23 09:04:44', 'Super Admin', '2018-05-19 14:12:38', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fr_apl_02`
--

CREATE TABLE IF NOT EXISTS `fr_apl_02` (
  `UUID_APL02` varchar(36) NOT NULL,
  `UUID_USER` varchar(36) DEFAULT NULL,
  `UUID_APL01` varchar(36) DEFAULT NULL,
  `NO_DOKUMEN` varchar(50) DEFAULT NULL,
  `TUK` varchar(10) DEFAULT NULL,
  `IS_KOMPETEN` varchar(1) DEFAULT NULL,
  `ALASAN_BLM_KOMPETEN` varchar(80) DEFAULT NULL,
  `IS_DILANJUTKAN` varchar(1) DEFAULT NULL,
  `CATATAN_1` varchar(50) DEFAULT NULL,
  `CATATAN_2` varchar(50) DEFAULT NULL,
  `UUID_ADM` varchar(36) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_APL02`),
  KEY `UUID_APL01_FR_APL_02` (`UUID_APL01`),
  KEY `UUID_ADM_FR_APL_02` (`UUID_ADM`) USING BTREE,
  KEY `UUID_USER_APL_02` (`UUID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fr_apl_02`
--

INSERT INTO `fr_apl_02` (`UUID_APL02`, `UUID_USER`, `UUID_APL01`, `NO_DOKUMEN`, `TUK`, `IS_KOMPETEN`, `ALASAN_BLM_KOMPETEN`, `IS_DILANJUTKAN`, `CATATAN_1`, `CATATAN_2`, `UUID_ADM`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('d06d6cbf-da7c-41cf-a985-d2037213ae78', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '94D1248APL02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Super Admin', '2018-05-19 16:05:31', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `fr_mak_02`
--

CREATE TABLE IF NOT EXISTS `fr_mak_02` (
  `UUID_MAK02` varchar(36) NOT NULL,
  `UUID_ADM` varchar(36) DEFAULT NULL,
  `BANDING_DIJELASKAN` varchar(1) DEFAULT NULL,
  `DISKUSI_BANDING` varchar(1) DEFAULT NULL,
  `MELIBATKAN_ORANG` varchar(1) DEFAULT NULL,
  `ALASAN` varchar(500) DEFAULT NULL,
  `HASIL_BANDING` varchar(18) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_MAK02`),
  KEY `UUID_ADM_MAK02` (`UUID_ADM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fr_mak_03`
--

CREATE TABLE IF NOT EXISTS `fr_mak_03` (
  `UUID_MAK03` varchar(36) NOT NULL,
  `UUID_ADM` varchar(36) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_MAK03`),
  KEY `UUID_ADM_MAK03` (`UUID_ADM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fr_mma`
--

CREATE TABLE IF NOT EXISTS `fr_mma` (
  `UUID_MMA` varchar(36) NOT NULL,
  `UUID_USER` varchar(36) DEFAULT NULL,
  `UUID_APL_01` varchar(36) DEFAULT NULL,
  `UUID_APL_02` varchar(36) DEFAULT NULL,
  `NO_DOKUMEN` varchar(50) DEFAULT NULL,
  `KELOMPOK_TARGET` varchar(100) DEFAULT NULL,
  `TUJUAN_ASESMEN` varchar(30) DEFAULT NULL,
  `KONTEKS_ASESMEN` varchar(100) DEFAULT NULL,
  `PIHAK_RELEVAN` varchar(255) DEFAULT NULL,
  `ATURAN_LSP` varchar(100) DEFAULT NULL,
  `ATURAN_TEKNIS` varchar(100) DEFAULT NULL,
  `PENDEKATAN_ASESMEN` varchar(50) DEFAULT NULL,
  `STRATEGI_ASESMEN` varchar(1000) DEFAULT NULL,
  `ACUAN_PEMBANDING` varchar(1000) DEFAULT NULL,
  `BATASAN_VARIABEL` varchar(5) DEFAULT NULL,
  `PANDUAN_ASESMEN` varchar(5) DEFAULT NULL,
  `PERSETUJUAN_ASESOR` date DEFAULT NULL,
  `PERSETUJUAN_PENYEDIA` date DEFAULT NULL,
  `PERSETUJUAN_TUK` date DEFAULT NULL,
  `TANGGAL_UJI_KOMPETENSI` date DEFAULT NULL,
  `DURASI_OBSERVASI_START` datetime DEFAULT NULL,
  `DURASI_OBSERVASI_END` datetime DEFAULT NULL,
  `DURASI_TES_LISAN_START` datetime DEFAULT NULL,
  `DURASI_TES_LISAN_END` datetime DEFAULT NULL,
  `LOKASI_ASESMEN` varchar(255) DEFAULT NULL,
  `KARAKTERISTIK_PESERTA` varchar(100) DEFAULT NULL,
  `PENYESUAIAN_KEBUTUHAN_SPESIFIK` varchar(100) DEFAULT NULL,
  `PADA_BATASAN_VARIABEL` varchar(255) DEFAULT NULL,
  `PADA_PANDUAN_PENILAIAN` varchar(255) DEFAULT NULL,
  `3_1` varchar(255) DEFAULT NULL,
  `3_1_CATATAN` varchar(255) DEFAULT NULL,
  `3_2` varchar(255) DEFAULT NULL,
  `3_2_CATATAN` varchar(255) DEFAULT NULL,
  `3_3` varchar(255) DEFAULT NULL,
  `3_3_CATATAN` varchar(255) DEFAULT NULL,
  `3_4` varchar(255) DEFAULT NULL,
  `3_4_CATATAN` varchar(255) DEFAULT NULL,
  `PENGATURAN_DUKUNGAN_SPESIALIS` varchar(255) DEFAULT NULL,
  `STRATEGI_KOMUNIKASI` varchar(1000) DEFAULT NULL,
  `KOORDINATOR_TUK` varchar(36) DEFAULT NULL,
  `KOORDINATOR_TUK_DTM` datetime DEFAULT NULL,
  `MANAGER_SERTIFIKASI_LSP` varchar(36) DEFAULT NULL,
  `MANAGER_SERTIFIKASI_LSP_DTM` datetime DEFAULT NULL,
  `MANAGER_TEMPAT_KERJA` varchar(36) DEFAULT NULL,
  `MANAGER_TEMPAT_KERJA_DTM` datetime DEFAULT NULL,
  `KET_ASESOR` varchar(255) DEFAULT NULL,
  `KET_MANAGER_SERTIFIKASI` varchar(255) DEFAULT NULL,
  `ASESOR` varchar(255) DEFAULT NULL,
  `MANAGER_SERTIFIKASI` varchar(255) DEFAULT NULL,
  `UUID_ADM` varchar(36) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_MMA`),
  KEY `UUID_APL_01` (`UUID_APL_01`),
  KEY `UUID_APL_02` (`UUID_APL_02`),
  KEY `KOORDINATOR_TUK` (`KOORDINATOR_TUK`),
  KEY `MANAGER_SERTIFIKASI_LSP` (`MANAGER_SERTIFIKASI_LSP`),
  KEY `MANAGER_TEMPAT_KERJA` (`MANAGER_TEMPAT_KERJA`),
  KEY `ASESOR` (`ASESOR`),
  KEY `MANAGER_SERTIFIKASI` (`MANAGER_SERTIFIKASI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fr_mma`
--

INSERT INTO `fr_mma` (`UUID_MMA`, `UUID_USER`, `UUID_APL_01`, `UUID_APL_02`, `NO_DOKUMEN`, `KELOMPOK_TARGET`, `TUJUAN_ASESMEN`, `KONTEKS_ASESMEN`, `PIHAK_RELEVAN`, `ATURAN_LSP`, `ATURAN_TEKNIS`, `PENDEKATAN_ASESMEN`, `STRATEGI_ASESMEN`, `ACUAN_PEMBANDING`, `BATASAN_VARIABEL`, `PANDUAN_ASESMEN`, `PERSETUJUAN_ASESOR`, `PERSETUJUAN_PENYEDIA`, `PERSETUJUAN_TUK`, `TANGGAL_UJI_KOMPETENSI`, `DURASI_OBSERVASI_START`, `DURASI_OBSERVASI_END`, `DURASI_TES_LISAN_START`, `DURASI_TES_LISAN_END`, `LOKASI_ASESMEN`, `KARAKTERISTIK_PESERTA`, `PENYESUAIAN_KEBUTUHAN_SPESIFIK`, `PADA_BATASAN_VARIABEL`, `PADA_PANDUAN_PENILAIAN`, `3_1`, `3_1_CATATAN`, `3_2`, `3_2_CATATAN`, `3_3`, `3_3_CATATAN`, `3_4`, `3_4_CATATAN`, `PENGATURAN_DUKUNGAN_SPESIALIS`, `STRATEGI_KOMUNIKASI`, `KOORDINATOR_TUK`, `KOORDINATOR_TUK_DTM`, `MANAGER_SERTIFIKASI_LSP`, `MANAGER_SERTIFIKASI_LSP_DTM`, `MANAGER_TEMPAT_KERJA`, `MANAGER_TEMPAT_KERJA_DTM`, `KET_ASESOR`, `KET_MANAGER_SERTIFIKASI`, `ASESOR`, `MANAGER_SERTIFIKASI`, `UUID_ADM`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('c3784ee2-5b44-11e8-a5e5-a4c494eed0da', 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd06d6cbf-da7c-41cf-a985-d2037213ae78', '39D1275MMA00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Super Admin', '2018-05-21 08:55:47', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `group_master`
--

CREATE TABLE IF NOT EXISTS `group_master` (
  `UUID_GROUP` varchar(36) NOT NULL,
  `GROUP_ID` varchar(50) DEFAULT NULL,
  `DESCRIPTION` varchar(80) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_GROUP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_master_menu`
--

CREATE TABLE IF NOT EXISTS `group_master_menu` (
  `UUID_GROUP_MENU` varchar(36) NOT NULL,
  `UUID_GROUP` varchar(36) DEFAULT NULL,
  `UUID_USER_ROLE` varchar(36) DEFAULT NULL,
  `UUID_MENU` varchar(36) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` varchar(0) DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` varchar(0) DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_GROUP_MENU`),
  KEY `UUID_MENU_GROUP_MASTER_MENU` (`UUID_MENU`),
  KEY `UUID_GROUP_GROUP_MASTER_MENU` (`UUID_GROUP`),
  KEY `UUID_USER_ROLE_GROUP_MASTER_MENU` (`UUID_USER_ROLE`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_unjuk_kerja`
--

CREATE TABLE IF NOT EXISTS `kriteria_unjuk_kerja` (
  `UUID_KUK` varchar(255) NOT NULL,
  `UUID_EK` varchar(255) DEFAULT NULL,
  `NOMOR_KUK` varchar(255) DEFAULT NULL,
  `PERNYATAAN` varchar(255) DEFAULT NULL,
  `PERTANYAAN` varchar(255) DEFAULT NULL,
  `USR_CRT` varchar(255) DEFAULT NULL,
  `DTM_CRT` varchar(255) DEFAULT NULL,
  `USR_UPD` varchar(255) DEFAULT NULL,
  `DTM_UPD` varchar(255) DEFAULT NULL,
  `IS_ACTIVE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UUID_KUK`),
  KEY `UUID_EK_KUK` (`UUID_EK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_unjuk_kerja`
--

INSERT INTO `kriteria_unjuk_kerja` (`UUID_KUK`, `UUID_EK`, `NOMOR_KUK`, `PERNYATAAN`, `PERTANYAAN`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('005c72d7-412e-11e8-8c73-64006a4fef6c', 'e0902618-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.005.01.3.1', 'Usulan yang telah dikirim dipastikan telah diterima oleh petugas terkait', 'Memastikan usulan yang telah dikirim telah diterima oleh petugas terkait', 'Super Admin', '2018-04-16 11:24:08', NULL, NULL, '1'),
('00d7cff7-41ec-11e8-8c73-64006a4fef6c', '010294af-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.2.2', 'Data identitas diri yang telah valid ditindaklanjuti sesuai dengan tahapan yang berlaku', 'Menindaklanjuti data identitas diri yang telah valid sesuai dengan tahapan yang berlaku', 'Super Admin', '2018-04-17 10:04:14', NULL, NULL, '1'),
('011fb3c7-41f6-11e8-8c73-64006a4fef6c', '8f420c03-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.004.01.2.3', 'Pengadaan barang dan jasa dilakukan sesuai prosedur dan ketentuan yang berlaku', 'Melakukan pengadaan barang dan jasa sesuai prosedur dan ketentuan yang berlaku', 'Super Admin', '2018-04-17 11:15:49', NULL, NULL, '1'),
('01fb9e6b-415f-11e8-8c73-64006a4fef6c', '8d36acf7-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.3.1', 'Data aktiva diterima dari pihak terkait sesuai dengan klasifikasinya', 'Menerima data aktiva dari pihak terkait sesuai dengan klasifikasinya', 'Super Admin', '2018-04-16 17:14:56', NULL, NULL, '1'),
('0206750a-4173-11e8-8c73-64006a4fef6c', 'ee1f63d8-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.3.4', 'Berkas pengajuan manfaat pensiun dikelola sesuai dengan ketentutan yang berlaku', 'Mengelola berkas pengajuan manfaat pensiun sesuai dengan ketentutan yang berlaku', 'Super Admin', '2018-04-16 19:38:06', NULL, NULL, '1'),
('02262d2f-41e5-11e8-8c73-64006a4fef6c', '948c6f2a-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.001.01.1.3', 'Informasi data potensi ditindaklanjuti sesuai pedoman yang telah ditetapkan', 'Menindaklanjuti informasi data potensi sesuai pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 09:14:09', NULL, NULL, '1'),
('02484353-41fc-11e8-8c73-64006a4fef6c', '6af7477e-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.4.2', 'Desain akhir jaringan LAN diusulkan kepada pihak terkait sesuai dengan pedoman yang berlaku', 'Mengusulkan desain akhir jaringan LAN kepada pihak terkait sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:58:48', NULL, NULL, '1'),
('039c590b-4156-11e8-8c73-64006a4fef6c', '18749832-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.009.01.2.2', 'Jumlah dana yang akan dipisahkan diinput ke dalam aplikasi keuangan', 'Menginput jumlah dana yang akan dipisahkan ke dalam aplikasi keuangan', 'Super Admin', '2018-04-16 16:10:33', NULL, NULL, '1'),
('039cd579-4160-11e8-8c73-64006a4fef6c', 'a224d60e-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.2.1', 'Data rekonsiliasi pajak disiapkan sesuai dengan format yang telah ditetapkan', 'Menyiapkan data rekonsiliasi pajak sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-16 17:22:08', NULL, NULL, '1'),
('049a14e8-4171-11e8-8c73-64006a4fef6c', 'a12a1e95-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.1.3', 'Alat dan bahan pekerjaan dipersiapkan sesuai kebutuhan', 'Menyiapkan alat dan bahan pekerjaan sesuai kebutuhan', 'Super Admin', '2018-04-16 19:23:51', NULL, NULL, '1'),
('04db11a7-416d-11e8-8c73-64006a4fef6c', '196ab823-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.3.7', 'Berkas pengajuan laporan kecelakaan kerja tahap pertama beserta data pendukung lainnya diserahkan kepada petugas terkait', 'Menyerahkan berkas pengajuan laporan kecelakaan kerja tahap pertama beserta data pendukung lainnya kepada petugas terkait', 'Super Admin', '2018-04-16 18:55:14', NULL, NULL, '1'),
('066c2b9e-4130-11e8-8c73-64006a4fef6c', '2458e7ba-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.013.01.3.1', 'Pemenuhan persyaratan pembayaran imbal jasa dilakukan sesuai ketentuan yang berlaku', 'Melakukan pemenuhan persyaratan pembayaran imbal jasa sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:38:37', NULL, NULL, '1'),
('067e5fac-41fd-11e8-8c73-64006a4fef6c', '7016749c-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.3.2', 'Back-up dilaksanakan sesuai dengan periode spesifikasi', 'Melaksanakan back-up sesuai dengan periode spesifikasi', 'Super Admin', '2018-04-17 12:06:05', NULL, NULL, '1'),
('06b40708-41e8-11e8-8c73-64006a4fef6c', 'b9e6d882-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.002.01.2.2', 'Data identitas diri dan upah yang dibutuhkan diverifikasi sesuai dengan peraturan perundangan yang berlaku', 'Memverifikasi data identitas diri dan upah yang dibutuhkan sesuai dengan peraturan perundangan yang berlaku', 'Super Admin', '2018-04-17 09:35:45', NULL, NULL, '1'),
('06f15537-4206-11e8-8c73-64006a4fef6c', '54b4c4bf-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.002.01.2.3', 'Arsip inaktif ditindaklanjuti sesuai dengan pedoman yang berlaku', 'Menindaklanjuti arsip inaktif sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 13:10:31', 'Super Admin', '2018-04-17 13:13:08', '1'),
('0705ca69-41fe-11e8-8c73-64006a4fef6c', '981b985e-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.3.4', 'Jadwal pemeliharaan, penggunaan log, statistik penggunaan biaya dikembangkan sesuai dengan pedoman yang telah ditetapkan', 'Mengembangkan jadwal pemeliharaan, penggunaan log, statistik penggunaan biaya sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 12:13:15', NULL, NULL, '1'),
('07e3bed0-41fb-11e8-8c73-64006a4fef6c', '3b0b06ed-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.1.3', 'Kandungan dan volume lalu lintas diidentifikasi sesuai kebutuhan organisasi', 'Mengidentifiasi kandungan dan volume lalu lintas sesuai kebutuhan organisasi', 'Super Admin', '2018-04-17 11:51:48', NULL, NULL, '1'),
('082dad9e-41fa-11e8-8c73-64006a4fef6c', 'fadb64d3-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.008.01.3.1', 'Kartu kegiatan (log book) diisi berdasarkan keadaan atau tindakan yang telah dilakukankan sesuai dengan format yang telah ditetapkan', 'Mengisi kartu kegiatan (log book) berdasarkan keadaan atau tindakan yang telah dilakukankan sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 11:44:39', NULL, NULL, '1'),
('085ef299-41f1-11e8-8c73-64006a4fef6c', '12d4ca19-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.4.2', 'Transfer iuran ke rekening program BPJS Ketenagakerjaan pada bank yang ditunjuk BPJS Ketenagakerjaan dipastikan ketepatan waktunya', 'Memastikan transfer iuran ke rekening program BPJS Ketenagakerjaan pada bank yang ditunjuk BPJS Ketenagakerjaan tepat waktu', 'Super Admin', '2018-04-17 10:40:14', 'Super Admin', '2018-04-17 10:40:43', '1'),
('08ec2ad2-4168-11e8-8c73-64006a4fef6c', 'e55632f0-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.1.3', 'Alat dan bahan pekerjaan dipersiapkan sesuai kebutuhan', 'Menyiapkan alat dan bahan pekerjaan sesuai kebutuhan', 'Super Admin', '2018-04-16 18:19:33', NULL, NULL, '1'),
('0920968f-4207-11e8-8c73-64006a4fef6c', '6ee18998-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.1.2', 'Calon peserta sosialisasi diidentifikasi kondisi atau karakternya', 'Mengidentifikasi kondisi atau karakter calon peserta sosialisasi ', 'Super Admin', '2018-04-17 13:17:44', NULL, NULL, '1'),
('0927c6f9-4131-11e8-8c73-64006a4fef6c', '7f8b5dbf-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.017.01.2.2', 'Daftar pemberian penghargaan dan atau sanksi diklarifikasi kepada pihak terkait', 'Mengklarifikasi daftar pemberian penghargaan dan atau sanksi kepada pihak terkait', 'Super Admin', '2018-04-16 11:45:51', NULL, NULL, '1'),
('09fb96e9-4132-11e8-8c73-64006a4fef6c', '986d2957-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.022.01.1.4', 'Rencana pelaksanaan kegiatan disusun sesuai dengan sasaran sosialisasi', 'Menyusun rencana pelaksanaan kegiatan sesuai dengan sasaran sosialisasi', 'Super Admin', '2018-04-16 11:53:02', NULL, NULL, '1'),
('0a320a85-414b-11e8-8c73-64006a4fef6c', '0ae50f22-3e43-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.3.3', 'Aset yang rusak atau hilang diadministrasikan sesuai pedoman pengelolaan aset', 'Mengadministrasi aset yang rusak atau hilang sesuai pedoman pengelolaan aset', 'Super Admin', '2018-04-16 14:52:00', NULL, NULL, '1'),
('0a4d7f16-41f4-11e8-8c73-64006a4fef6c', '2cd13cba-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.003.01.1.1', 'Paket instalasi software aplikasi disiapkan dalam media penyimpanan yang sesuai', 'Menyiapkan paket instalasi software aplikasi dalam media penyimpanan yang sesuai', 'Super Admin', '2018-04-17 11:01:45', NULL, NULL, '1'),
('0ace1f3a-414c-11e8-8c73-64006a4fef6c', '9e3fac3c-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.001.01.3.1', 'Hasil rekapitulasi dipastikan ketepatannya sesuai dengan ketentuan yang berlaku', 'Memastikan ketepatan hasil rekapitulasi sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 14:59:10', NULL, NULL, '1'),
('0aff7675-412f-11e8-8c73-64006a4fef6c', 'f8864a69-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.010.01.2.2', 'Tata cara pengisian formulir penilaian kinerja individu disosialisasikan kepada pihak terkait', 'Mensosialisasikan tata cara pengisian formulir penilaian kinerja individu kepada pihak terkait', 'Super Admin', '2018-04-16 11:31:35', NULL, NULL, '1'),
('0c3a8bfd-416e-11e8-8c73-64006a4fef6c', '4afef423-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.1.1', 'Aplikasi JKM BPJS Ketenagakerjaan dipastikan kesiapannya', 'Memastikan kesiapan aplikasi JKM BPJS Ketenagakerjaan ', 'Super Admin', '2018-04-16 19:02:36', NULL, NULL, '1'),
('0c6ff696-3e44-11e8-8647-64006a4fef6c', '8b01a022-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.1.2', 'Perangkat dihubungkan pada sistem jaringan menggunakan metode koneksi dan teknologi yang tepat sesuai dengan pedoman yang telah ditetapkan', 'Menghubungkan perangkat pada sistem jaringan menggunakan metode koneksi dan teknologi yang tepat sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-12 18:24:22', NULL, NULL, '1'),
('0e69bf55-416f-11e8-8c73-64006a4fef6c', '6ee5dfe7-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.1.3', 'Alat dan bahan pekerjaan dipersiapkan sesuai kebutuhan', 'Menyiapkan alat dan bahan pekerjaan sesuai kebutuhan', 'Super Admin', '2018-04-16 19:09:49', NULL, NULL, '1'),
('0f2398a2-41f2-11e8-8c73-64006a4fef6c', '5c1adca9-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.005.01.3.3', 'Laporan hasil evaluasi dibuat sesuai dengan pedoman yang berlaku', 'Membuat laporan hasil evaluasi sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 10:47:35', 'Super Admin', '2018-04-17 10:47:45', '1'),
('0f59229c-41f9-11e8-8c73-64006a4fef6c', 'e1a3eaf5-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.3.1', 'Perlindungan terhadap virus di seluruh komputer jaringan dilakukan sesuai dengan ketentuan yang berlaku', 'Melakukan perlindungan terhadap virus di seluruh komputer jaringan sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 11:37:41', NULL, NULL, '1'),
('0f99602f-41ec-11e8-8c73-64006a4fef6c', '010294af-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.2.3', 'Iuran dihitung sesuai dengan data tenaga kerja', 'Menghitung iuran dihitung sesuai dengan data tenaga kerja', 'Super Admin', '2018-04-17 10:04:38', NULL, NULL, '1'),
('0fc7e29c-4160-11e8-8c73-64006a4fef6c', 'a224d60e-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.2.2', 'Aplikasi perpajakan nasional yang digunakan dipastikan dapat beroperasi sesuai dengan fungsinya', 'Memastikan aplikasi perpajakan nasional yang digunakan dapat beroperasi sesuai dengan fungsinya', 'Super Admin', '2018-04-16 17:22:28', NULL, NULL, '1'),
('0fef7191-41ea-11e8-8c73-64006a4fef6c', 'dfa7291d-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.2.5', 'E-mail persetujuan iuran pertama dan kode iuran dikirimkan kepada peserta', 'Mengirimkan e-mail persetujuan iuran pertama dan kode iuran kepada peserta', 'Super Admin', '2018-04-17 09:50:20', NULL, NULL, '1'),
('10aaae00-416a-11e8-8c73-64006a4fef6c', '0948b43c-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.1.2', 'Peraturan terkait persyaratan berkas pengajuan disiapkan untuk menjadi pedoman', 'Menyiapkan peraturan terkait persyaratan berkas pengajuan untuk menjadi pedoman', 'Super Admin', '2018-04-16 18:34:05', NULL, NULL, '1'),
('12725de4-4164-11e8-8c73-64006a4fef6c', 'b5116f21-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.1.1', 'Referensi terkait pengaduan yang berlaku disiapkan untuk menjadi pedoman', 'Menyiapkan referensi terkait pengaduan yang berlaku untuk menjadi pedoman', 'Super Admin', '2018-04-16 17:51:11', NULL, NULL, '1'),
('1305830c-4130-11e8-8c73-64006a4fef6c', '2458e7ba-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.013.01.3.2', 'Memo pencairan imbalan jasa diajukan ke pihak terkait sesuai dengan prosedur yang ada', 'Mengajukan memo pencairan imbalan jasa ke pihak terkait sesuai dengan prosedur yang ada', 'Super Admin', '2018-04-16 11:38:58', NULL, NULL, '1'),
('145c165a-4131-11e8-8c73-64006a4fef6c', '7f8b5dbf-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.017.01.2.3', 'Usulan pemberian penghargaan dan atau sanksi diajukan kepada pejabat terkait', 'Mengajukan usulan pemberian penghargaan dan atau sanksi kepada pejabat terkait', 'Super Admin', '2018-04-16 11:46:10', NULL, NULL, '1'),
('14707fec-41ff-11e8-8c73-64006a4fef6c', 'c18a0a31-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.2.2', 'Dokumen diedit dengan menggunakan kaidah tata bahasa yang baik dan benar', 'Mengedit dokumen dengan menggunakan kaidah tata bahasa yang baik dan benar', 'Super Admin', '2018-04-17 12:20:47', NULL, NULL, '1'),
('14f5817c-3bc2-11e8-806f-64006a4fef6c', 'a15b3530-3b34-11e8-806f-64006a4fef6c', 'JSN.HC.001.01.2.2', 'Hasil klarifikasi kebutuhan karyawan diajukan kepada pejabat yang berwenang untuk mendapat persetujuan.', 'Mengajukan hasil klarifikasi kebutuhan karyawan kepada pejabat yang berwenang untuk mendapat persetujuan', 'Super Admin', '2018-04-09 13:49:03', 'Super Admin', '2018-04-16 11:18:09', '1'),
('1595f41d-41fb-11e8-8c73-64006a4fef6c', '3b0b06ed-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.1.4', 'Kebutuhan sumber daya ditentukan pada masing-masing segmen LAN', 'Menentukan kebutuhan sumber daya pada masing-masing segmen LAN', 'Super Admin', '2018-04-17 11:52:11', NULL, NULL, '1'),
('15b3d811-41fa-11e8-8c73-64006a4fef6c', 'fadb64d3-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.008.01.3.2', 'Laporan dibuat sesuai dengan format yang telah ditetapkan', 'Membuat laporan sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 11:45:02', NULL, NULL, '1'),
('15f9ed21-414b-11e8-8c73-64006a4fef6c', '0ae50f22-3e43-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.3.4', 'Aset yang rusak atau hilang dilaporkan sesuai pedoman pengelolaan aset', 'Melaporkan aset yang rusak atau hilang sesuai pedoman pengelolaan aset', 'Super Admin', '2018-04-16 14:52:19', NULL, NULL, '1'),
('1694483f-4156-11e8-8c73-64006a4fef6c', '18749832-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.009.01.2.3', 'Data yang muncul pada aplikasi dipastikan kesesuaiannya', 'Memastikan kesesuaian data yang muncul pada aplikasi', 'Super Admin', '2018-04-16 16:11:05', NULL, NULL, '1'),
('16d79db1-4132-11e8-8c73-64006a4fef6c', '9f0e8454-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.022.01.2.1', 'Kebutuhan sosialisasi disiapkan sebelum pelaksanaan', 'Menyiapkan kebutuhan sosialisasi sebelum pelaksanaan', 'Super Admin', '2018-04-16 11:53:23', NULL, NULL, '1'),
('17956448-41fd-11e8-8c73-64006a4fef6c', '7016749c-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.3.3', 'Back-up dicatat sesuai pedoman yang telah ditetapkan', 'Mencatat back-up sesuai pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 12:06:33', NULL, NULL, '1'),
('17bfa1cb-41f3-11e8-8c73-64006a4fef6c', '8f333bec-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.3.2', 'Tanda terima sertifikat dan kartu peseta dipastikan telah ditandatangani oleh pihak yang berwenang sesuai dengan ketentuan yang berlaku', 'Memastikan tanda terima sertifikat dan kartu peseta telah ditandatangani oleh pihak yang berwenang sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 10:54:58', NULL, NULL, '1'),
('184ff562-41f8-11e8-8c73-64006a4fef6c', 'c9adb8a9-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.006.01.3.2', 'Laporan dibuat sesuai dengan format yang telah ditetapkan', 'Membuat laporan sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 11:30:47', NULL, NULL, '1'),
('186171d2-414c-11e8-8c73-64006a4fef6c', '9e3fac3c-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.001.01.3.2', 'Hasil rekapitulasi diserahkan kepada pihak terkait untuk mendapatkan persetujuan', 'Menyerahkan hasil rekapitulasi kepada pihak terkait untuk mendapatkan persetujuan', 'Super Admin', '2018-04-16 14:59:33', NULL, NULL, '1'),
('18bfa7db-4207-11e8-8c73-64006a4fef6c', '6ee18998-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.1.3', 'Media sosialisasi ditetapkan sesuai dengan karakter calon peserta sosialisasi', 'Menetapkan media sosialisasi sesuai dengan karakter calon peserta sosialisasi', 'Super Admin', '2018-04-17 13:18:10', NULL, NULL, '1'),
('193c5206-4170-11e8-8c73-64006a4fef6c', '7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.2.9', 'Ketentuan pajak JHT diinformasikan kepada tenaga kerja atau ahli waris', 'Menginformasikan ketentuan pajak JHT kepada tenaga kerja atau ahli waris', 'Super Admin', '2018-04-16 19:17:16', NULL, NULL, '1'),
('1a2c6947-412e-11e8-8c73-64006a4fef6c', 'e0902618-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.005.01.3.2', 'Usulan program pengembangan karyawan dimonitor statusnya dari pihak terkait', 'Memonitor status usulan program pengembangan karyawan dari pihak terkait', 'Super Admin', '2018-04-16 11:24:51', NULL, NULL, '1'),
('1b5b4cd1-41e5-11e8-8c73-64006a4fef6c', '9b64abd5-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.001.01.2.1', 'Rencana kegiatan disusun berdasarkan informasi data potensi', 'Menyusun rencana kegiatan berdasarkan informasi data potensi', 'Super Admin', '2018-04-17 09:14:52', NULL, NULL, '1'),
('1c0e7c57-415d-11e8-8c73-64006a4fef6c', '7d14b6a4-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.1.2', 'Data untuk rekonsiliasi transaksi keuangan disiapkan sesuai dengan format yang telah ditetapkan', 'Menyiapkan data untuk rekonsiliasi transaksi keuangan sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-16 17:01:21', NULL, NULL, '1'),
('1c46e549-416f-11e8-8c73-64006a4fef6c', '6ee5dfe7-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.1.4', 'Penjelasan singkat mengenai informasi prosedur dan persyaratan pengajuan klaim JHT disampaikan kepada tenaga kerja atau ahli waris', 'Menyampaikan penjelasan singkat mengenai informasi prosedur dan persyaratan pengajuan klaim JHT kepada tenaga kerja atau ahli waris', 'Super Admin', '2018-04-16 19:10:12', NULL, NULL, '1'),
('1c48476a-41eb-11e8-8c73-64006a4fef6c', 'f7e99c24-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.1.3', 'Daftar penerbitan kartu peserta dan sertifikat dipastikan ketepatannya sesuai dengan data tenaga kerja', 'Memastikan ketepatan daftar penerbitan kartu peserta dan sertifikat sesuai dengan data tenaga kerja', 'Super Admin', '2018-04-17 09:57:50', NULL, NULL, '1'),
('1d016655-416a-11e8-8c73-64006a4fef6c', '0948b43c-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.1.3', 'Alat dan bahan pekerjaan dipersiapkan sesuai kebutuhan', 'Menyiapkan alat dan bahan pekerjaan sesuai kebutuhan', 'Super Admin', '2018-04-16 18:34:26', NULL, NULL, '1'),
('1dd4b1e5-416d-11e8-8c73-64006a4fef6c', '29511bc9-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.1.1', 'Aplikasi BPJS Ketenagakerjaan dipastikan kesiapannya', 'Memastikan kesiapan aplikasi BPJS Ketenagakerjaan', 'Super Admin', '2018-04-16 18:55:56', NULL, NULL, '1'),
('1e58b748-41f9-11e8-8c73-64006a4fef6c', 'e1a3eaf5-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.3.2', 'Software anti virus ditutup tanpa kesalahan', 'Menutup software anti virus tanpa kesalahan', 'Super Admin', '2018-04-17 11:38:07', NULL, NULL, '1'),
('1e709564-4130-11e8-8c73-64006a4fef6c', '2458e7ba-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.013.01.3.3', 'Realisasi pemberian imbalan jasa dilaksanakan sesuai ketentuan yang berlaku', 'Melaksanakan realisasi pemberian imbalan jasa sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:39:17', NULL, NULL, '1'),
('1e824d4a-416e-11e8-8c73-64006a4fef6c', '4afef423-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.1.2', 'Peraturan terkait persyaratan berkas pengajuan JKM disiapkan', 'Menyiapkan peraturan terkait persyaratan berkas pengajuan JKM ', 'Super Admin', '2018-04-16 19:03:06', NULL, NULL, '1'),
('1ec24420-41f4-11e8-8c73-64006a4fef6c', '2cd13cba-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.003.01.1.2', 'Manual instalasi software aplikasi dipahami sebagai pedoman dalam pelaksanaan pekerjaan', 'Memahami manual instalasi software aplikasi sebagai pedoman dalam pelaksanaan pekerjaan', 'Super Admin', '2018-04-17 11:02:20', NULL, NULL, '1'),
('2077a757-412f-11e8-8c73-64006a4fef6c', 'f8864a69-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.010.01.2.3', 'Hasil penilaian kinerja individu yang telah diverifikasi dikumpulkan dari pihak terkait', 'Mengumpulkan hasil penilaian kinerja individu yang telah diverifikasi dari pihak terkait', 'Super Admin', '2018-04-16 11:32:11', NULL, NULL, '1'),
('21a465b9-4159-11e8-8c73-64006a4fef6c', '39851ad4-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.010.01.3.1', 'Rekap pembayaran jaminan yang diperoleh dipastikan ketepatannya', 'Memastikan ketepatan rekap pembayaran jaminan yang diperoleh', 'Super Admin', '2018-04-16 16:32:52', NULL, NULL, '1'),
('221f8d1a-4172-11e8-8c73-64006a4fef6c', 'd1fdad5c-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.1.3', 'Alat dan bahan pekerjaan dipersiapkan sesuai kebutuhan', 'Menyiapkan alat dan bahan pekerjaan sesuai kebutuhan', 'Super Admin', '2018-04-16 19:31:50', NULL, NULL, '1'),
('22346307-4132-11e8-8c73-64006a4fef6c', '9f0e8454-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.022.01.2.2', 'Sosialisasi dilaksanakan sesuai jadwal yang telah ditetapkan', 'Melaksanakan sosialisasi sesuai jadwal yang telah ditetapkan', 'Super Admin', '2018-04-16 11:53:42', NULL, NULL, '1'),
('2235c249-4160-11e8-8c73-64006a4fef6c', 'a224d60e-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.2.3', 'Pembuatan data rekonsiliasi pajak diselesaikan di aplikasi perpajakan nasional sesuai dengan tahapan yang berlaku', 'Menyelesaikan pembuatan data rekonsiliasi pajak di aplikasi perpajakan nasional sesuai dengan tahapan yang berlaku', 'Super Admin', '2018-04-16 17:22:59', NULL, NULL, '1'),
('2254c27a-41ff-11e8-8c73-64006a4fef6c', 'c18a0a31-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.2.3', 'Dokumen diedit sesuai dengan batasan waktu yang ditentukan', 'Mengedit dokumen sesuai dengan batasan waktu yang ditentukan', 'Super Admin', '2018-04-17 12:21:10', NULL, NULL, '1'),
('22f469c2-41fe-11e8-8c73-64006a4fef6c', '981b985e-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.3.5', 'Kapasitas layanan perangkat dari aplikasi atau workstation ditunjukkan kepada pengguna sesuai dengan pedoman yang telah ditetapkan', 'Menunjukkan kapasitas layanan perangkat dari aplikasi atau workstation kepada pengguna sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 12:14:02', NULL, NULL, '1'),
('238b9a58-41ea-11e8-8c73-64006a4fef6c', 'e7c523a6-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.3.1', 'Nomor kepesertaan diterbitkan sesuai dengan tahapan yang berlaku', 'Menerbitkan nomad kepesertaan sesuai dengan tahapan yang berlaku', 'Super Admin', '2018-04-17 09:50:53', NULL, NULL, '1'),
('25cd4d25-41fb-11e8-8c73-64006a4fef6c', '3b0b06ed-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.1.5', 'Faktor-faktor yang berpengaruh terhadap desain LAN ditetapkan sesuai dengan hasil identifikasi', 'Menetapkan faktor-faktor yang berpengaruh terhadap desain LAN sesuai dengan hasil identifikasi', 'Super Admin', '2018-04-17 11:52:38', NULL, NULL, '1'),
('26b4729c-4168-11e8-8c73-64006a4fef6c', 'e55632f0-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.1.4', 'Penjelasan singkat mengenai informasi prosedur dan persyaratan pengajuan administrasi kepesertaan disampaikan kepada tenaga kerja atau pengurus perusahaan', 'Menyampaikan penjelasan singkat mengenai informasi prosedur dan persyaratan pengajuan administrasi kepesertaan kepada tenaga kerja atau pengurus perusahaan', 'Super Admin', '2018-04-16 18:20:23', NULL, NULL, '1'),
('278e034d-4170-11e8-8c73-64006a4fef6c', '7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.2.10', 'Semua dokumen pendukung permohonan klaim JHT divalidasi sesuai ketentuan yang berlaku', 'Memvalidasi semua dokumen pendukung permohonan klaim JHT sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 19:17:40', NULL, NULL, '1'),
('281befb4-41ec-11e8-8c73-64006a4fef6c', '010294af-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.2.4', 'Bukti persetujuan rekonsiliasi iuran dipastikan telah ditandatangani oleh pengurus perusahaan', 'Memastikan bukti persetujuan rekonsiliasi iuran telah ditandatangani oleh pengurus perusahaan', 'Super Admin', '2018-04-17 10:05:19', NULL, NULL, '1'),
('28b9be70-4164-11e8-8c73-64006a4fef6c', 'b5116f21-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.1.2', 'Aplikasi BPJS Ketenagakerjaan dipastikan siap untuk digunakan', 'Memastikan aplikasi BPJS Ketenagakerjaan siap untuk digunakan', 'Super Admin', '2018-04-16 17:51:48', NULL, NULL, '1'),
('28e1280b-4157-11e8-8c73-64006a4fef6c', '2b88fe6a-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.010.01.1.1', 'Berkas penetapan jaminan diterima dari pihak terkait', 'Menerima berkas penetapan jaminan dari pihak terkait', 'Super Admin', '2018-04-16 16:18:45', NULL, NULL, '1'),
('28f38251-416e-11e8-8c73-64006a4fef6c', '4afef423-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.1.3', 'Alat dan bahan pekerjaan disiapkan sesuai kebutuhan', 'Menyiapkan alat dan bahan pekerjaan sesuai kebutuhan', 'Super Admin', '2018-04-16 19:03:24', NULL, NULL, '1'),
('290eb483-4207-11e8-8c73-64006a4fef6c', '6ee18998-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.1.4', 'Media sosialisasi didesain sesuai dengan karakter calon peserta sosialisasi', 'Mendesain media sosialisasi sesuai dengan karakter calon peserta sosialisasi', 'Super Admin', '2018-04-17 13:18:38', NULL, NULL, '1'),
('293bf450-3e44-11e8-8647-64006a4fef6c', '8b01a022-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.1.3', 'Perangkat diuji fungsionalitasnya sesuai dengan pedoman yang telah ditetapkan', 'Menguji fungsionalitas perangkat sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-12 18:25:10', NULL, NULL, '1'),
('29507aa5-41f6-11e8-8c73-64006a4fef6c', 'a04d43ab-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.1.1', 'Data yang terhapus/hilang diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi data yang terhapus/hilang sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:16:56', NULL, NULL, '1'),
('2a0a63b8-41fd-11e8-8c73-64006a4fef6c', '770fc733-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.4.1', 'Prosedur me-restore disiapkan sesuai dengan pedoman yang telah ditetapkan', 'Menyiapkan prosedur me-restore sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 12:07:04', NULL, NULL, '1'),
('2a9df127-4156-11e8-8c73-64006a4fef6c', '1e4b7652-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.009.01.3.1', 'Surat perintah transfer disiapkan sesuai dengan format yang telah ditetapkan', 'Menyiapkan surat perintah transfer sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-16 16:11:38', NULL, NULL, '1'),
('2a9f2a7a-412e-11e8-8c73-64006a4fef6c', 'e0902618-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.005.01.3.3', 'Status usulan program pengembangan dilaporkan kepada pejabat yang berwenang', 'Melaporkan status usulan program pengembangan kepada pejabat yang berwenang', 'Super Admin', '2018-04-16 11:25:18', NULL, NULL, '1'),
('2c7a35a2-415d-11e8-8c73-64006a4fef6c', '7d14b6a4-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.1.3', 'Transaksi keuangan kantor cabang diidentifikasi pada aplikasi keuangan', 'Mengidentifikasi transaksi keuangan kantor cabang pada aplikasi keuangan', 'Super Admin', '2018-04-16 17:01:48', NULL, NULL, '1'),
('2ca45105-416f-11e8-8c73-64006a4fef6c', '7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.2.1', 'Kelengkapan dokumen permohonan klaim JHT diterima dari tenaga kerja atau ahli waris', 'Menerima kelengkapan dokumen permohonan klaim JHT dari tenaga kerja atau ahli waris', 'Super Admin', '2018-04-16 19:10:39', NULL, NULL, '1'),
('2ca93a46-41e5-11e8-8c73-64006a4fef6c', '9b64abd5-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.001.01.2.2', 'Rencana kegiatan diajukan kepada pihak terkait untuk mendapatkan persetujuan', 'Mengajukan rencana kegiatan kepada pihak terkait untuk mendapatkan persetujuan', 'Super Admin', '2018-04-17 09:15:21', NULL, NULL, '1'),
('2e011932-4132-11e8-8c73-64006a4fef6c', '9f0e8454-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.022.01.2.3', 'Dokumentasi kegiatan sosialisasi dibuat sesuai dengan format yang telah ditetapkan', 'Membuat dokumentasi kegiatan sosialisasi sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-16 11:54:02', NULL, NULL, '1'),
('2ea9a977-416a-11e8-8c73-64006a4fef6c', '1185d426-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.2.1', 'Dokumen pengajuan laporan kecelakaan kerja tahap pertama diterima dari pihak pelapor', 'Menerima dokumen pengajuan laporan kecelakaan kerja tahap pertama dari pihak pelapor', 'Super Admin', '2018-04-16 18:34:55', NULL, NULL, '1'),
('2f359cbb-41f1-11e8-8c73-64006a4fef6c', '12d4ca19-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.4.3', 'Jumlah peserta pada program jaminan sosial dan jumlah pekerja di organisasi/wadah peserta dipastikan ketepatannya', 'Memastikan ketepatan jumlah peserta pada program jaminan sosial dan jumlah pekerja di organisasi/wadah peserta', 'Super Admin', '2018-04-17 10:41:19', NULL, NULL, '1'),
('2fa64414-41fa-11e8-8c73-64006a4fef6c', '0a22579a-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.009.01.1.1', 'Daftar permasalahan terkini diinventarisir sesuai dengan pedoman yang berlaku', 'Menginventarisir daftar permasalahan terkini sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:45:45', NULL, NULL, '1'),
('32266cdd-414b-11e8-8c73-64006a4fef6c', '0ae50f22-3e43-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.3.5', 'Laporan kerusakan dan kehilangan aset diusulkan untuk penghapusbukuan sesuai dengan pedoman yang berlaku', 'Mengusulkan laporan kerusakan dan kehilangan aset untuk penghapusbukuan sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-16 14:53:07', NULL, NULL, '1'),
('32683035-4159-11e8-8c73-64006a4fef6c', '39851ad4-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.010.01.3.2', 'Total nominal hasil rekap pembayaran jaminan diinput dalam aplikasi keuangan', 'Menginput total nominal hasil rekap pembayaran jaminan dalam aplikasi keuangan', 'Super Admin', '2018-04-16 16:33:20', NULL, NULL, '1'),
('32cdfbe3-41f6-11e8-8c73-64006a4fef6c', 'a04d43ab-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.1.2', 'Penyebab data hilang diidentifikasi sesuai pedoman yang berlaku', 'Mengidentifikasi penyebab data hilang sesuai pedoman yang berlaku', 'Super Admin', '2018-04-17 11:17:12', NULL, NULL, '1'),
('33df795d-4130-11e8-8c73-64006a4fef6c', '318f6497-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.016.01.1.1', 'Jenis administrasi data karyawan yang akan diproses, diidentifikasi sesuai ketentuan yang berlaku', 'Mengidentifikasi jenis administrasi data karyawan yang akan diproses, sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:39:53', NULL, NULL, '1'),
('3427d7b8-4160-11e8-8c73-64006a4fef6c', 'a224d60e-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.2.4', 'Data yang muncul pada aplikasi perpajakan nasional dan data rekonsiliasi pajak dipastikan kesesuaiannya', 'Memastikan kesesuaian data yang muncul pada aplikasi perpajakan nasional dan data rekonsiliasi pajak', 'Super Admin', '2018-04-16 17:23:29', NULL, NULL, '1'),
('34a7d9de-3bb6-11e8-806f-64006a4fef6c', '930e6e04-3b34-11e8-806f-64006a4fef6c', 'JSN.HC.001.01.1.1', 'Data kebutuhan karyawan diidentifikasi sesuai ketentuan yang berlaku', 'Mengidentifikasi data kebutuhan karyawan sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-09 12:24:02', 'Super Admin', '2018-04-16 11:07:10', '1'),
('34e5950c-41ea-11e8-8c73-64006a4fef6c', 'dfa7291d-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.2.6', 'Dokumen pendaftaran yang telah diterima dinformasikan ke peserta melalui media komunikasi', 'Menginformasikan dokumen pendaftaran yang telah diterima ke peserta melalui media komunikasi', 'Super Admin', '2018-04-17 09:51:22', NULL, NULL, '1'),
('34ec7dc5-41f7-11e8-8c73-64006a4fef6c', 'bc39ae08-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.006.01.1.1', 'Jenis virus diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi jenis virus sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:24:25', NULL, NULL, '1'),
('35338cb1-41f9-11e8-8c73-64006a4fef6c', 'e1a3eaf5-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.3.3', 'Laporan dibuat sesuai dengan format yang telah ditentukan', 'Membuat laporan sesuai dengan format yang telah ditentukan', 'Super Admin', '2018-04-17 11:38:45', NULL, NULL, '1'),
('354000de-4164-11e8-8c73-64006a4fef6c', 'b5116f21-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.1.3', 'Alat dan bahan yang diperlukan untuk pencatatan pengaduan disiapkan sesuai dengan kebutuhan', 'Menyiapkan alat dan bahan yang diperlukan untuk pencatatan pengaduan sesuai dengan kebutuhan', 'Super Admin', '2018-04-16 17:52:09', NULL, NULL, '1'),
('367fa22b-41f2-11e8-8c73-64006a4fef6c', '7f58c5d7-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.1.1', 'Iuran pertama dihitung sesuai dengan ketentuan yang berlaku', 'Menghitung iuran pertama sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 10:48:41', NULL, NULL, '1'),
('3700397e-41ff-11e8-8c73-64006a4fef6c', 'c18a0a31-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.2.4', 'Dokumen disimpan secara teratur untuk menghindari kehilangan data', 'Menyimpan dokumen secara teratur untuk menghindari kehilangan data', 'Super Admin', '2018-04-17 12:21:45', NULL, NULL, '1'),
('372e2e47-41fb-11e8-8c73-64006a4fef6c', '3b0b06ed-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.1.6', 'Faktor – faktor yang berpengaruh terhadap desain LAN diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi faktor – faktor yang berpengaruh terhadap desain LAN sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:53:07', NULL, NULL, '1'),
('376f014e-41f8-11e8-8c73-64006a4fef6c', 'd4879fb8-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.1.1', 'Semua komputer jaringan, server dan client, dihubungkan sesuai dengan pedoman yang berlaku', 'Menghubungkan semua komputer jaringan, server dan client, sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:31:39', NULL, NULL, '1'),
('379ece3e-412f-11e8-8c73-64006a4fef6c', '01cde75b-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.010.01.3.1', 'Rekapitulasi hasil penilaian kinerja individu dibuat sesuai ketentuan yang berlaku', 'Membuat rekapitulasi hasil penilaian kinerja individu sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:32:50', NULL, NULL, '1'),
('37b2ac4d-416e-11e8-8c73-64006a4fef6c', '4afef423-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.1.4', 'Penjelasan singkat mengenai informasi prosedur dan persyaratan pengajuan klaim JKM disampaikan kepada ahli waris', 'Menyampaikan penjelasan singkat mengenai informasi prosedur dan persyaratan pengajuan klaim JKM kepada ahli waris', 'Super Admin', '2018-04-16 19:03:48', NULL, NULL, '1'),
('37b53689-416d-11e8-8c73-64006a4fef6c', '29511bc9-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.1.2', 'Peraturan terkait persyaratan berkas pengajuan disiapkan untuk menjadi pedoman', 'Menyiapkan peraturan terkait persyaratan berkas pengajuan untuk menjadi pedoman', 'Super Admin', '2018-04-16 18:56:39', NULL, NULL, '1'),
('384609e0-416f-11e8-8c73-64006a4fef6c', '7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.2.2', 'Formulir klaim JHT tenaga kerja atau ahli waris diperiksa dan dipastikan terisi lengkap', 'Memeriksa formulir klaim JHT tenaga kerja atau ahli waris dan dipastikan terisi lengkap', 'Super Admin', '2018-04-16 19:10:59', NULL, NULL, '1'),
('3879e617-4172-11e8-8c73-64006a4fef6c', 'e23fafc0-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.2.1', 'Kelengkapan dokumen konfirmasi penerima manfaat JP diterima dan diverifikasi penerima manfaatnya', 'Menerima kelengkapan dokumen konfirmasi penerima manfaat JP dan diverifikasi penerima manfaatnya', 'Super Admin', '2018-04-16 19:32:28', NULL, NULL, '1'),
('38993d58-41f4-11e8-8c73-64006a4fef6c', '2cd13cba-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.003.01.1.3', 'Perangkat komputer sudah disiapkan sesuai dengan spesifikasi yang sesuai', 'Menyiapkan perangkat komputer sesuai dengan spesifikasi yang sesuai', 'Super Admin', '2018-04-17 11:03:03', NULL, NULL, '1'),
('3900356c-41fe-11e8-8c73-64006a4fef6c', 'a4451a99-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.4.1', 'Jadwal pemeliharaan secara reguler dijalankan sesuai rekomendasi dari pihak terkait', 'Menjalankan jadwal pemeliharaan secara reguler sesuai rekomendasi dari pihak terkait', 'Super Admin', '2018-04-17 12:14:39', NULL, NULL, '1'),
('3a434bc1-414d-11e8-8c73-64006a4fef6c', 'b5b2e666-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.005.01.2.2', 'Data yang ditunjukkan pada aplikasi dan bukti setor diverifikasi kesesuaiannya', 'Memverifikasi kesesuaian antara data yang ditunjukkan pada aplikasi dan bukti setor', 'Super Admin', '2018-04-16 15:07:39', NULL, NULL, '1'),
('3b945867-4207-11e8-8c73-64006a4fef6c', '767f0de3-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.2.1', 'Jadwal sosialisasi ditetapkan berdasarkan kesepakatan dengan calon peserta sosialisasi', 'Menetapkan jadwal sosialisasi berdasarkan kesepakatan dengan calon peserta sosialisasi', 'Super Admin', '2018-04-17 13:19:09', NULL, NULL, '1'),
('3bad4332-414c-11e8-8c73-64006a4fef6c', 'ae9ab39d-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.005.01.1.1', 'Jenis program kepesertaan diidentifikasi melalui bukti setor bank', 'Mengidentifikasi jenis program kepesertaan melalui bukti setor bank', 'Super Admin', '2018-04-16 15:00:32', NULL, NULL, '1'),
('3bd1dc7c-416a-11e8-8c73-64006a4fef6c', '1185d426-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.2.2', 'Elijibilitas status data kepesertaan dan status upah diverifikasi melalui sistem aplikasi', 'Memverifikasi elijibilitas status data kepesertaan dan status upah melalui sistem aplikasi', 'Super Admin', '2018-04-16 18:35:17', NULL, NULL, '1'),
('3c506784-4168-11e8-8c73-64006a4fef6c', 'edd5ca4d-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.2.1', 'Tenaga kerja atau pengurus perusahaan diwawancara untuk memperoleh informasi yang dibutuhkan sesuai dengan pedoman', 'Mewawancarai tenaga kerja atau pengurus perusahaan untuk memperoleh informasi yang dibutuhkan sesuai dengan pedoman', 'Super Admin', '2018-04-16 18:20:59', NULL, NULL, '1'),
('3ea69948-414e-11e8-8c73-64006a4fef6c', 'cb2d75f1-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.007.01.1.1', 'Ketentuan, peraturan dan prosedur kerja tentang pembukuan penerimaan pendapatan lain disiapkan untuk menjadi pedoman', 'Menyiapkan ketentuan, peraturan dan prosedur kerja tentang pembukuan penerimaan pendapatan lain untuk menjadi pedoman', 'Super Admin', '2018-04-16 15:14:56', NULL, NULL, '1'),
('3eca84ed-4170-11e8-8c73-64006a4fef6c', '84b166fa-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.3.1', 'Berkas permohonan klaim JHT disusun dan dijadikan satu sesuai dengan urutan yang berlaku', 'Menyusun berkas permohonan klaim JHT dan dijadikan satu sesuai dengan urutan yang berlaku', 'Super Admin', '2018-04-16 19:18:19', NULL, NULL, '1'),
('3f6e0e76-4130-11e8-8c73-64006a4fef6c', '318f6497-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.016.01.1.2', 'Peraturan terkait administrasi data karyawan diidentifikasi sesuai kebutuhan untuk menjadi pedoman', 'Mengidentifikasi peraturan terkait administrasi data karyawan sesuai kebutuhan untuk menjadi pedoman', 'Super Admin', '2018-04-16 11:40:12', NULL, NULL, '1'),
('3f7e4505-4169-11e8-8c73-64006a4fef6c', '0948b43c-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.1.1', 'Aplikasi BPJS Ketenagakerjaan dipastikan kesiapannya', 'Memastikan kesiapan aplikasi BPJS Ketenagakerjaan ', 'Super Admin', '2018-04-16 18:28:14', NULL, NULL, '1'),
('3f95ad59-41fd-11e8-8c73-64006a4fef6c', '770fc733-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.4.2', 'Back-up sistem di-restore sesuai dengan permintaan pihak yang berwenang dalam pengawasan pihak terkait', 'Me-restore back-up sistem sesuai dengan permintaan pihak yang berwenang dalam pengawasan pihak terkait', 'Super Admin', '2018-04-17 12:07:40', NULL, NULL, '1'),
('3f9a9f3e-41fc-11e8-8c73-64006a4fef6c', '6160ccfd-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.1.1', 'Kebutuhan klien diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi kebutuhan klien sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 12:00:31', NULL, NULL, '1'),
('40643d3f-41e5-11e8-8c73-64006a4fef6c', '9b64abd5-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.001.01.2.3', 'Rencana kegiatan dilaksanakan sesuai dengan pedoman yang berlaku', 'Melaksanakan rencana kegiatan sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 09:15:54', NULL, NULL, '1'),
('41464b25-41f3-11e8-8c73-64006a4fef6c', '11849299-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.1.1', 'Prosedur kerja terkait perawatan komputer dan perangkat penunjang disiapkan untuk menjadi pedoman', 'Menyiapkan prosedur kerja terkait perawatan komputer dan perangkat penunjang untuk menjadi pedoman', 'Super Admin', '2018-04-17 10:56:08', NULL, NULL, '1'),
('41733095-412b-11e8-8c73-64006a4fef6c', 'd8c5662c-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.005.01.2.1', 'Data karyawan yang membutuhkan pengembangan diajukan kepada pihak terkait untuk mendapat persetujuan', 'Mengajukan data karyawan yang membutuhkan pengembangan kepada pihak terkait untuk mendapat persetujuan', 'Super Admin', '2018-04-16 11:04:28', NULL, NULL, '1'),
('41fd0994-41f6-11e8-8c73-64006a4fef6c', 'a04d43ab-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.1.3', 'Software utility recovery data disiapkan sesuai dengan hasil identifikasi', 'Menyiapkan software utility recovery data sesuai dengan hasil identifikasi', 'Super Admin', '2018-04-17 11:17:38', NULL, NULL, '1'),
('424594cf-415e-11e8-8c73-64006a4fef6c', '84be26c0-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.2.1', 'Data lampiran laporan keuangan disiapkan sesuai format yang telah ditetapkan', 'Menyiapkan data lampiran laporan keuangan sesuai format yang telah ditetapkan', 'Super Admin', '2018-04-16 17:09:34', NULL, NULL, '1'),
('42f87224-414b-11e8-8c73-64006a4fef6c', '0ae50f22-3e43-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.3.6', 'Hasil penetapan penghapusbukuan aset dilakukan eksekusi sesuai pedoman pengelolaan aset', 'Melakukan eksekusi hasil penetapan penghapusbukuan aset sesuai pedoman pengelolaan aset', 'Super Admin', '2018-04-16 14:53:35', NULL, NULL, '1'),
('4405b7f3-41ec-11e8-8c73-64006a4fef6c', '010294af-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.2.5', 'Nomor kepesertaan dan sertifikat dipastikan ketepatannya dengan menggunakan aplikasi sistem yang berlaku', 'Memastikan ketepatan nomor kepesertaan dan sertifikat dengan menggunakan aplikasi sistem yang berlaku', 'Super Admin', '2018-04-17 10:06:06', NULL, NULL, '1'),
('4406679d-4164-11e8-8c73-64006a4fef6c', 'bf148d03-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.2.1', 'Pengaduan diterima sesuai dengan ketentuan yang berlaku', 'Menerima pengaduan sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 17:52:34', NULL, NULL, '1'),
('44a6a8b1-416d-11e8-8c73-64006a4fef6c', '29511bc9-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.1.3', 'Alat dan bahan pekerjaan dipersiapkan sesuai kebutuhan', 'Menyiapkan alat dan bahan pekerjaan sesuai kebutuhan', 'Super Admin', '2018-04-16 18:57:01', NULL, NULL, '1'),
('45d9aece-4172-11e8-8c73-64006a4fef6c', 'e23fafc0-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.2.2', 'Peserta atau ahli waris  diwawancara untuk memperoleh informasi penerima manfaat', 'Mewawancarai peserta atau ahli waris untuk memperoleh informasi penerima manfaat', 'Super Admin', '2018-04-16 19:32:50', NULL, NULL, '1'),
('46036137-41f8-11e8-8c73-64006a4fef6c', 'd4879fb8-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.1.2', 'Semua komputer jaringan  dipastikan siap untuk dioperasikan', 'Memastikan semua komputer jaringan siap untuk dioperasikan', 'Super Admin', '2018-04-17 11:32:04', NULL, NULL, '1'),
('472b9b61-416e-11e8-8c73-64006a4fef6c', '527910a3-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.2.1', 'Kelengkapan formulir dan dokumen pengajuan klaim JKM ahli waris dipastikan lengkap dan benar', 'Memastikan kelengkapan formulir dan dokumen pengajuan klaim JKM ahli waris lengkap dan benar', 'Super Admin', '2018-04-16 19:04:14', NULL, NULL, '1'),
('47778b46-416f-11e8-8c73-64006a4fef6c', '7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.2.3', 'Kelengkapan berkas permohonan klaim JHT dicocokkan dengan berkas asli tenaga kerja atau ahli waris sesuai ketentuan yang berlaku', 'Mencocokkan kelengkapan berkas permohonan klaim JHT dengan berkas asli tenaga kerja atau ahli waris sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 19:11:24', NULL, NULL, '1'),
('47d324c6-41ed-11e8-8c73-64006a4fef6c', '0a1c0eed-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.3.3', 'Tanda terima sertifikat dan kartu peseta dipastikan telah ditandatangani oleh pihak yang berwenang', 'Memastikan tanda terima sertifikat dan kartu peseta telah ditandatangani oleh pihak yang berwenang', 'Super Admin', '2018-04-17 10:13:22', NULL, NULL, '1'),
('484947ba-4160-11e8-8c73-64006a4fef6c', 'a9f90e34-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.3.1', 'Data hasil aplikasi perpajakan nasional disiapkan sesuai dengan format yang telah ditentukan', 'Menyiapkan data hasil aplikasi perpajakan nasional sesuai dengan format yang telah ditentukan', 'Super Admin', '2018-04-16 17:24:03', NULL, NULL, '1'),
('486b91a6-4168-11e8-8c73-64006a4fef6c', 'edd5ca4d-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.2.2', 'Kelengkapan dokumen pengajuan administrasi kepesertaan diterima dari pengurus perusahaan', 'Menerima kelengkapan dokumen pengajuan administrasi kepesertaan dari pengurus perusahaan', 'Super Admin', '2018-04-16 18:21:20', NULL, NULL, '1'),
('48a3fd5d-41fe-11e8-8c73-64006a4fef6c', 'a4451a99-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.4.2', 'Komponen habis pakai atau komponen lain yang habis masa pakainya diganti sesuai dengan ketentuan', 'Mengganti komponen habis pakai atau komponen lain yang habis masa pakainya sesuai dengan ketentuan', 'Super Admin', '2018-04-17 12:15:05', NULL, NULL, '1'),
('497f7168-416a-11e8-8c73-64006a4fef6c', '1185d426-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.2.3', 'Pihak pelapor diwawancara untuk memperoleh informasi yang dibutuhkan sesuai pedoman', 'Mewawancarai pihak pelapor untuk memperoleh informasi yang dibutuhkan sesuai pedoman', 'Super Admin', '2018-04-16 18:35:40', NULL, NULL, '1'),
('4a89efe5-414c-11e8-8c73-64006a4fef6c', 'ae9ab39d-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.005.01.1.2', 'Data peserta diidentifikasi melalui bukti setor bank sesuai ketentuan yang berlaku', 'Mengidentifikasi data peserta melalui bukti setor bank sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 15:00:57', NULL, NULL, '1'),
('4a9c5897-41f2-11e8-8c73-64006a4fef6c', '7f58c5d7-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.1.2', 'Iuran pertama diterbitkan penetapannya sesuai dengan ketentuan yang berlaku', 'Menerbitkan penetapan iuran pertama sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 10:49:14', NULL, NULL, '1'),
('4aa2f0bd-4171-11e8-8c73-64006a4fef6c', 'ae4b50f7-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.2.1', 'Dokumen pengajuan JP diperiksa kelengkapannya', 'Memeriksa kelengkapan dokumen pengajuan JP ', 'Super Admin', '2018-04-16 19:25:49', NULL, NULL, '1'),
('4b652970-41fb-11e8-8c73-64006a4fef6c', '3b0b06ed-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.1.7', 'Topologi LAN yang sesuai dengan kebutuhan bisnis dan analisis fungsional ditetapkan sesuai dengan pedoman yang berlaku', 'Menetapkan topologi LAN yang sesuai dengan kebutuhan bisnis dan analisis fungsional sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:53:41', NULL, NULL, '1'),
('4baf2166-4207-11e8-8c73-64006a4fef6c', '767f0de3-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.2.2', 'Seluruh kebutuhan sosialisasi disiapkan sebelum waktu pelaksanaan', 'Menyiapkan seluruh kebutuhan sosialisasi sebelum waktu pelaksanaan', 'Super Admin', '2018-04-17 13:19:36', NULL, NULL, '1'),
('4cc601c8-4130-11e8-8c73-64006a4fef6c', '318f6497-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.016.01.1.3', 'Data karyawan yang akan diproses diidentifikasi melalui sistem aplikasi pengelolaan SDM', 'Mengidentifikasi data karyawan yang akan diproses melalui sistem aplikasi pengelolaan SDM', 'Super Admin', '2018-04-16 11:40:35', NULL, NULL, '1'),
('4d5a7aef-4159-11e8-8c73-64006a4fef6c', '40a93e61-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.010.01.4.1', 'Dokumen pembayaran jaminan dikelompokkan sesuai jenis klaim', 'Mengelompokan dokumen pembayaran jaminan sesuai jenis klaim', 'Super Admin', '2018-04-16 16:34:05', NULL, NULL, '1'),
('4df83a80-415d-11e8-8c73-64006a4fef6c', '7d14b6a4-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.1.4', 'Data yang ada di aplikasi dan data transaksi keuangan dipastikan kesesuaiannya', 'Memastikan kesesuaian data yang ada di aplikasi dan data transaksi keuangan ', 'Super Admin', '2018-04-16 17:02:44', NULL, NULL, '1'),
('4edb94ba-4164-11e8-8c73-64006a4fef6c', 'bf148d03-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.2.2', 'Data pengaduan dicatat sesuai dengan ketentuan yang berlaku', 'Mencatat data pengaduan sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 17:52:52', NULL, NULL, '1'),
('4f33d4b7-4170-11e8-8c73-64006a4fef6c', '84b166fa-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.3.2', 'Permohonan klaim JHT diagenda melalui sistem aplikasi', 'Mengagenda permohonan klaim JHT melalui sistem aplikasi', 'Super Admin', '2018-04-16 19:18:47', NULL, NULL, '1'),
('4f75a1bf-4132-11e8-8c73-64006a4fef6c', 'a87e6cef-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.022.01.3.1', 'Saran, masukan dan pemecahan permasalahan Hubungan Industrial dihimpun dari peserta', 'Menghimpun saran, masukan dan pemecahan permasalahan Hubungan Industrial dari peserta', 'Super Admin', '2018-04-16 11:54:58', NULL, NULL, '1');
INSERT INTO `kriteria_unjuk_kerja` (`UUID_KUK`, `UUID_EK`, `NOMOR_KUK`, `PERNYATAAN`, `PERTANYAAN`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('4f96c825-41fa-11e8-8c73-64006a4fef6c', '0a22579a-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.009.01.1.2', 'Permasalahan diidentifikasi dari daftar permasalahan terkini sesuai dengan pedoman yang berlaku', 'Mengidentifikasi permasalahan dari daftar permasalahan terkini sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:46:39', NULL, NULL, '1'),
('4f9c70f4-414e-11e8-8c73-64006a4fef6c', 'cb2d75f1-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.007.01.1.2', 'Formulir kerja terkait penerimaan pendapatan lain disiapkan sesuai dengan pedoman yang berlaku', 'Menyiapkan formulir kerja terkait penerimaan pendapatan lain sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-16 15:15:25', NULL, NULL, '1'),
('4fa58f6b-41f1-11e8-8c73-64006a4fef6c', '4e1edc7d-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.005.01.1.1', 'Teknik mencari mitra, referral atau non-refferal dilakukan sesuai dengan pedoman yang berlaku', 'Melakukan teknik mencari mitra, referral atau non-refferal sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 10:42:13', NULL, NULL, '1'),
('4fb20c80-41f4-11e8-8c73-64006a4fef6c', '2cd13cba-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.003.01.1.4', 'Media paket instalasi software aplikasi disiapkan sesuai dengan panduan yang ada', 'Menyiapkan media paket instalasi software aplikasi sesuai dengan panduan yang ada', 'Super Admin', '2018-04-17 11:03:42', NULL, NULL, '1'),
('4ffc9b37-41fd-11e8-8c73-64006a4fef6c', '770fc733-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.4.3', 'Restore dicatat sesuai dengan pedoman yang telah ditetapkan', 'Mencatat restore sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 12:08:08', NULL, NULL, '1'),
('5051af73-41f3-11e8-8c73-64006a4fef6c', '11849299-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.1.2', 'Formulir / kertas kerja disiapkan sesuai dengan ketentuan yang berlaku', 'Menyiapkan formulir / kertas kerja sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 10:56:33', NULL, NULL, '1'),
('513f7f10-414d-11e8-8c73-64006a4fef6c', 'bd33d0bf-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.005.01.3.1', 'Bukti penerimaan pembayaran iuran dicetak berdasarkan hasil verifikasi data', 'Mencetak bukti penerimaan pembayaran iuran berdasarkan hasil verifikasi data', 'Super Admin', '2018-04-16 15:08:18', NULL, NULL, '1'),
('514c6b60-41fc-11e8-8c73-64006a4fef6c', '6160ccfd-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.1.2', 'Password akses keamanan disampaikan ke klien', 'Menyampaikan password akses keamanan ke klien', 'Super Admin', '2018-04-17 12:01:01', NULL, NULL, '1'),
('52333f9d-416b-11e8-8c73-64006a4fef6c', '1185d426-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.2.5', 'Pengisian formulir laporan kecelakaan kerja tahap pertama beserta dokumen pendukung lainnya diperiksa kelengkapannya sesuai ketentuan yang berlaku', 'Memeriksa kelengkapan pengisian formulir laporan kecelakaan kerja tahap pertama beserta dokumen pendukung lainnya sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 18:43:04', NULL, NULL, '1'),
('539ed72b-416e-11e8-8c73-64006a4fef6c', '527910a3-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.2.2', 'Eligibilitas status data kepesertaan dan status iuran diverifikasi dalam sistem aplikasi', 'Memverifikasi eligibilitas status data kepesertaan dan status iuran dalam sistem aplikasi', 'Super Admin', '2018-04-16 19:04:35', NULL, NULL, '1'),
('54b6b4a2-41f8-11e8-8c73-64006a4fef6c', 'd4879fb8-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.1.3', 'Instalasi software anti virus disiapkan sesuai dengan pedoman', 'Menyiapkan instalasi software anti virus sesuai dengan pedoman', 'Super Admin', '2018-04-17 11:32:28', NULL, NULL, '1'),
('54c69508-415e-11e8-8c73-64006a4fef6c', '84be26c0-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.2.2', 'Data yang ada di aplikasi dan data lampiran keuangan dipastikan kesesuaiannya', 'Memastikan kesesuaian data yang ada di aplikasi dan data lampiran keuangan', 'Super Admin', '2018-04-16 17:10:05', NULL, NULL, '1'),
('551928a7-416f-11e8-8c73-64006a4fef6c', '7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.2.4', 'Histori saldo tenaga kerja di cetak dan diperiksa', 'Mencetak histori saldo tenaga kerja dan diperiksa', 'Super Admin', '2018-04-16 19:11:47', NULL, NULL, '1'),
('5557483a-41e5-11e8-8c73-64006a4fef6c', '9b64abd5-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.001.01.2.4', 'Data potensi dimutakhirkan berdasarkan skala usaha perusahaan dan jenis pekerjaan', 'Memutakhirkan data potensi berdasarkan skala usaha perusahaan dan jenis pekerjaan', 'Super Admin', '2018-04-17 09:16:29', NULL, NULL, '1'),
('56693f7a-41fe-11e8-8c73-64006a4fef6c', 'a4451a99-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.4.3', 'Perangkat lain yang rusak dan tidak berfungsi diperbaiki sesuai dengan ketentuan', 'Memperbaiki perangkat lain yang rusak dan tidak berfungsi sesuai dengan ketentuan', 'Super Admin', '2018-04-17 12:15:28', NULL, NULL, '1'),
('56f7e462-4160-11e8-8c73-64006a4fef6c', 'a9f90e34-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.3.2', 'Bukti pendukung laporan perpajakan disiapkan sesuai dengan format yang telah ditetapkan', 'Menyiapkan bukti pendukung laporan perpajakan sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-16 17:24:28', NULL, NULL, '1'),
('5721e909-4172-11e8-8c73-64006a4fef6c', 'e23fafc0-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.2.3', 'Peserta atau ahli waris  diambil gambar dan disimpan sebagai arsip elektronik', 'Mengambil gambar peserta atau ahli waris dan disimpan sebagai arsip elektronik', 'Super Admin', '2018-04-16 19:33:19', NULL, NULL, '1'),
('580ffc27-41f6-11e8-8c73-64006a4fef6c', 'a04d43ab-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.1.4', 'Software utility recovery data diinstall sesuai dengan prosedur', 'Menginstall software utility recovery data sesuai dengan prosedur', 'Super Admin', '2018-04-17 11:18:15', NULL, NULL, '1'),
('5817f56e-416d-11e8-8c73-64006a4fef6c', '3064d084-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.2.1', 'Dokumen pengajuan klaim laporan tahap kedua diterima dari pihak pelapor sesuai dengan ketentuan yang berlaku', 'Menerima dokumen pengajuan klaim laporan tahap kedua dari pihak pelapor sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 18:57:33', NULL, NULL, '1'),
('59dacade-3bb8-11e8-806f-64006a4fef6c', '930e6e04-3b34-11e8-806f-64006a4fef6c', 'JSN.HC.001.01.1.3', 'Jumlah kebutuhan karyawan direkap sesuai kebutuhan setiap bidang', 'Merekap jumlah kebutuhan karyawan sesuai kebutuhan setiap bidang', 'Super Admin', '2018-04-09 12:39:24', 'Super Admin', '2018-04-16 11:08:45', '1'),
('59fc1806-4207-11e8-8c73-64006a4fef6c', '767f0de3-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.2.3', 'Sosialisasi dilaksanakan sesuai jadwal yang telah ditetapkan', 'Melaksanakan sosialisasi sesuai jadwal yang telah ditetapkan', 'Super Admin', '2018-04-17 13:20:00', NULL, NULL, '1'),
('5a35fecc-4171-11e8-8c73-64006a4fef6c', 'ae4b50f7-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.2.2', 'Pengisian formulir JP beserta data pendukung lainnya diperiksa kelengkapannya sesuai dengan syarat pengambilan JP', 'Memeriksa kelengkapan pengisian formulir JP beserta data pendukung lainnya sesuai dengan syarat pengambilan JP', 'Super Admin', '2018-04-16 19:26:15', NULL, NULL, '1'),
('5a808e06-41ff-11e8-8c73-64006a4fef6c', 'e19c3f43-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.3.1', 'Dokumen yang akan dicetak diperiksa ulang ketepatan tata bahasa dan formatnya', 'Memeriksa ulang ketepatan tata bahasa dan format dokumen yang akan dicetak', 'Super Admin', '2018-04-17 12:22:45', NULL, NULL, '1'),
('5a8b285e-4130-11e8-8c73-64006a4fef6c', '4fa88f8f-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.016.01.2.1', 'Verifikasi data karyawan dilakukan dengan pihak terkait', 'Melakukan verifikasi data karyawan dengan pihak terkait', 'Super Admin', '2018-04-16 11:40:58', NULL, NULL, '1'),
('5b16dfc2-415d-11e8-8c73-64006a4fef6c', '7d14b6a4-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.1.5', 'Rekonsiliasi bank atas jumlah nominal transaksi dibuat sesuai tahapan yang berlaku', 'Membuat rekonsiliasi bank atas jumlah nominal transaksi sesuai tahapan yang berlaku', 'Super Admin', '2018-04-16 17:03:06', NULL, NULL, '1'),
('5b71710b-416a-11e8-8c73-64006a4fef6c', '1185d426-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.2.4', 'Pihak pelapor diinformasikan tentang hal-hal yang perlu diajukan pada saat pengajuan JKK sesuai ketentuan yang berlaku', 'Menginformasikan kepada pihak pelapor tentang hal-hal yang perlu diajukan pada saat pengajuan JKK sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 18:36:10', NULL, NULL, '1'),
('5cd73e22-41ea-11e8-8c73-64006a4fef6c', 'e7c523a6-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.3.2', 'Sertifikat dan kartu peserta diserahkan kepada pihak terkait berdasarkan tahapan yang berlaku', 'Menyerahkan sertifikat dan karate peserta kepada pihak terkait berdasarkan tahapan yang berlaku', 'Super Admin', '2018-04-17 09:52:29', NULL, NULL, '1'),
('5cdc14fd-41f7-11e8-8c73-64006a4fef6c', 'bc39ae08-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.006.01.1.2', 'Software anti virus diinstall sesuai dengan pedoman yang berlaku', 'Menginstall software anti virus sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:25:32', NULL, NULL, '1'),
('5d0028ed-412b-11e8-8c73-64006a4fef6c', 'd8c5662c-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.005.01.2.2', 'Rekapitulasi data karyawan yang mendapat persetujuan dikirim kepada pihak terkait dalam format sesuai dengan ketentuan yang berlaku', 'Mengirim rekapitulasi data karyawan yang mendapat persetujuan kepada pihak terkait dalam format sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:05:14', NULL, NULL, '1'),
('5d51943d-41f2-11e8-8c73-64006a4fef6c', '7f58c5d7-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.1.3', 'Penetapan iuran diverifikasi sesuai ketentuan yang berlaku', 'Memverifikasi penetapan iuran sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-17 10:49:46', NULL, NULL, '1'),
('5d666237-4164-11e8-8c73-64006a4fef6c', 'bf148d03-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.2.3', 'Jenis pengaduan diklasifikasikan sesuai ketentuan yang berlaku', 'Mengklasifikasi jenis pengaduan sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 17:53:17', NULL, NULL, '1'),
('5df33b01-414c-11e8-8c73-64006a4fef6c', 'ae9ab39d-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.005.01.1.3', 'Aplikasi keuangan dipastikan dapat beroperasi sesuai dengan fungsinya', 'Memastikan aplikasi keuangan dapat beroperasi sesuai dengan fungsinya', 'Super Admin', '2018-04-16 15:01:30', NULL, NULL, '1'),
('5f429041-414e-11e8-8c73-64006a4fef6c', 'cb2d75f1-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.007.01.1.3', 'Aplikasi penerimaan pendapatan lain dipastikan dapat beroperasi sesuai dengan fungsinya', 'Memastikan aplikasi penerimaan pendapatan lain dapat beroperasi sesuai dengan fungsinya', 'Super Admin', '2018-04-16 15:15:51', 'Super Admin', '2018-04-16 15:44:59', '1'),
('5f4d96ec-41fa-11e8-8c73-64006a4fef6c', '0a22579a-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.009.01.1.3', 'Masalah diklasifikasi sesuai skala prioritas', 'Mengklasifikasi masalah sesuai skala prioritas', 'Super Admin', '2018-04-17 11:47:05', NULL, NULL, '1'),
('60f416d4-416f-11e8-8c73-64006a4fef6c', '7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.2.5', 'Tenaga kerja atau ahli waris diwawancara untuk memperoleh informasi', 'Mewawancarai tenaga kerja atau ahli waris untuk memperoleh informasi', 'Super Admin', '2018-04-16 19:12:07', 'Super Admin', '2018-04-16 19:12:20', '1'),
('61672e46-41fc-11e8-8c73-64006a4fef6c', '6160ccfd-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.1.3', 'Dokumentasi dan akses keamanan oleh klien disediakan sesuai dengan format yang berlaku', 'Menyediakan dokumentasi dan akses keamanan oleh klien sesuai dengan format yang berlaku', 'Super Admin', '2018-04-17 12:01:28', NULL, NULL, '1'),
('617c2ee2-41f1-11e8-8c73-64006a4fef6c', '4e1edc7d-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.005.01.1.2', 'Data mitra dianalisis untuk mendapatkan data yang lengkap, akurat dan relevan', 'Menganalisis data mitra untuk mendapatkan data yang lengkap, akurat dan relevan', 'Super Admin', '2018-04-17 10:42:43', NULL, NULL, '1'),
('61831320-416e-11e8-8c73-64006a4fef6c', '527910a3-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.2.3', 'Ahli waris atau pihak yang mengurus pemakaman diwawancara untuk memperoleh informasi klaim', 'Mewawancarai ahli waris atau pihak yang mengurus pemakaman untuk memperoleh informasi klaim', 'Super Admin', '2018-04-16 19:04:59', NULL, NULL, '1'),
('61affdc4-41f4-11e8-8c73-64006a4fef6c', '2cd13cba-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.003.01.1.5', 'Log-sheet/report-sheet disiapkan sesuai dengan format yang telah disiapkan', 'Menyiapkan log-sheet/report-sheet sesuai dengan format yang telah disiapkan', 'Super Admin', '2018-04-17 11:04:12', NULL, NULL, '1'),
('61f27af7-41f5-11e8-8c73-64006a4fef6c', '8843f46f-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.004.01.1.1', 'Kondisi kelayakan pakai sarana teknologi informasi terkini diidentifikasi sesuai dengan pedoman yang telah ditetapkan', 'Mengidentifikasi kondisi kelayakan pakai sarana teknologi informasi terkini sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 11:11:22', NULL, NULL, '1'),
('62149222-415f-11e8-8c73-64006a4fef6c', '8d36acf7-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.3.2', 'Data aktiva dipastikan ketepatan pelaporannya', 'Memastikan ketepatan pelaporan data aktiva', 'Super Admin', '2018-04-16 17:17:37', NULL, NULL, '1'),
('63b5fc70-4132-11e8-8c73-64006a4fef6c', 'a87e6cef-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.022.01.3.2', 'Evaluasi kegiatan sosialisasi dilaksanakan sesuai dengan pedoman yang berlaku', 'Melaksanakn evaluasi kegiatan sosialisasi sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-16 11:55:32', NULL, NULL, '1'),
('645b54c3-41f3-11e8-8c73-64006a4fef6c', '19d48a95-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.2.1', 'Peralatan yang terpasang dalam suatu sistem diidentifikasi sesuai spesifikasi dan kemampuan kerja', 'Mengidentifikasi peralatan yang terpasang dalam suatu sistem sesuai spesifikasi dan kemampuan kerja', 'Super Admin', '2018-04-17 10:57:07', NULL, NULL, '1'),
('6499260d-412a-11e8-8c73-64006a4fef6c', 'd1d612b4-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.005.01.1.1', 'Jenis-jenis kompetensi yang dipersyaratkan, diidentifikasi berdasarkan kelompok pekerjaan masing-masing', 'Mengidentifikasi jenis-jenis kompetensi yang dipersyaratkan berdasarkan kelompok pekerjaan masing-masing', 'Super Admin', '2018-04-16 10:58:18', NULL, NULL, '1'),
('6562a747-4130-11e8-8c73-64006a4fef6c', '4fa88f8f-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.016.01.2.2', 'Usulan pembaharuan data karyawan diajukan kepada pihak terkait untuk mendapat persetujuan.', 'Mengajukan usulan pembaharuan data karyawan kepada pihak terkait untuk mendapat persetujuan.', 'Super Admin', '2018-04-16 11:41:16', NULL, NULL, '1'),
('65e4b5e5-41fd-11e8-8c73-64006a4fef6c', '7e5eb99f-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.5.1', 'Akses keamanan didokumentasikan sesuai pedoman keamanan yang telah ditetapkan', 'Mendokumentasikan akses keamanan sesuai pedoman keamanan yang telah ditetapkan', 'Super Admin', '2018-04-17 12:08:45', NULL, NULL, '1'),
('66741fda-4168-11e8-8c73-64006a4fef6c', 'edd5ca4d-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.2.3', 'Kelengkapan dokumen diperiksa sesuai kebutuhan persyaratan pengajuan administrasi kepesertaan berdasarkan ketentuan yang berlaku', 'Memeriksa kelengkapan dokumen sesuai kebutuhan persyaratan pengajuan administrasi kepesertaan berdasarkan ketentuan yang berlaku', 'Super Admin', '2018-04-16 18:22:10', NULL, NULL, '1'),
('66781ecb-41fe-11e8-8c73-64006a4fef6c', 'a4451a99-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.4.4', 'Pemakaian perangkat dan tingginya lalu lintas dalam jaringan dimonitor sesuai ketentuan', 'Memonitor pemakaian perangkat dan tingginya lalu lintas dalam jaringan sesuai ketentuan', 'Super Admin', '2018-04-17 12:15:55', NULL, NULL, '1'),
('697ef5f8-412f-11e8-8c73-64006a4fef6c', '01cde75b-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.010.01.3.2', 'Rekapitulasi hasil penilaian kinerja individu dimintakan persetujuan kepada pihak terkait', 'Memintakan persetujuan pihak terkait pada rekapitulasi hasil penilaian kinerja individu', 'Super Admin', '2018-04-16 11:34:13', NULL, NULL, '1'),
('6a03ebec-41f9-11e8-8c73-64006a4fef6c', 'ef3bf74d-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.008.01.1.1', 'Software anti virus termutakhir disiapkan sesuai dengan pedoman yang berlaku', 'Menyiapkan software anti virus termutakhir sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:40:14', NULL, NULL, '1'),
('6a7f9c47-4207-11e8-8c73-64006a4fef6c', '767f0de3-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.2.4', 'Dokumentasi kegiatan sosialisasi dibuat sesuai dengan format yang telah ditetapkan', 'Membuat dokumentasi kegiatan sosialisasi sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 13:20:27', NULL, NULL, '1'),
('6b152075-416b-11e8-8c73-64006a4fef6c', '1185d426-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.2.6', 'Berkas pengajuan laporan kecelakaan kerja tahap pertama divalidasi sesuai ketentuan yang berlaku', 'Memvalidasi berkas pengajuan laporan kecelakaan kerja tahap pertama sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 18:43:46', NULL, NULL, '1'),
('6c74a806-415a-11e8-8c73-64006a4fef6c', '5836f449-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.2.2', 'Data yang muncul pada aplikasi keuangan dan dokumen pembayaran BUBM dipastikan kesesuaiannya', 'Memastikan kesesuaian data yang muncul pada aplikasi keuangan dan dokumen pembayaran BUBM', 'Super Admin', '2018-04-16 16:42:07', NULL, NULL, '1'),
('6c85737f-41f2-11e8-8c73-64006a4fef6c', '7f58c5d7-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.1.4', 'Surat pemberitahuan penetapan iuran dicetak untuk disetujui oleh calon peserta', 'Mencetak surat pemberitahuan penetapan iuran untuk disetujui oleh calon peserta', 'Super Admin', '2018-04-17 10:50:11', NULL, NULL, '1'),
('6ce2578c-4160-11e8-8c73-64006a4fef6c', 'a9f90e34-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.3.3', 'Tanda terima pelaporan perpajakan diterima dari pihak terkait', 'Menerima tanda terima pelaporan perpajakan dari pihak terkait', 'Super Admin', '2018-04-16 17:25:05', NULL, NULL, '1'),
('6d0a1edc-4164-11e8-8c73-64006a4fef6c', 'ca6af1f8-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.3.1', 'Informasi tata cara pengaduan dan pemenuhan berkas pendukung disampaikan kepada peserta sesuai jenis pengaduan', 'Menyampaikan informasi tata cara pengaduan dan pemenuhan berkas pendukung kepada peserta sesuai jenis pengaduan', 'Super Admin', '2018-04-16 17:53:43', NULL, NULL, '1'),
('6f661d24-4132-11e8-8c73-64006a4fef6c', 'a87e6cef-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.022.01.3.3', 'Laporan pelaksanaan sosialisasi Hubungan Industrial disusun sesuai dengan format yang telah ditetapkan', 'Menyusun laporan pelaksanaan sosialisasi Hubungan Industrial sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-16 11:55:52', NULL, NULL, '1'),
('6f848a38-41fc-11e8-8c73-64006a4fef6c', '6160ccfd-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.1.4', 'Hak akses keamanan dicatat untuk integritas pemeliharaan sistem', 'Mencatat hak akses keamanan untuk integritas pemeliharaan sistem', 'Super Admin', '2018-04-17 12:01:51', NULL, NULL, '1'),
('6f93434f-41fa-11e8-8c73-64006a4fef6c', '0a22579a-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.009.01.1.4', 'Tools, log sheet dan sarana penyelesaian masalah lain disiapkan sesuai dengan pedoman yang berlaku', 'Menyiapkan tools, log sheet dan sarana penyelesaian masalah lain sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:47:32', NULL, NULL, '1'),
('7099c1ef-41f6-11e8-8c73-64006a4fef6c', 'a76f4201-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.2.1', 'Software utility recovery data dapat dijalankan sesuai dengan prosedur', 'Menjalankan software utility recovery data sesuai dengan prosedur', 'Super Admin', '2018-04-17 11:18:56', NULL, NULL, '1'),
('7139cc04-4159-11e8-8c73-64006a4fef6c', '40a93e61-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.010.01.4.2', 'Pengelolaan dokumen pembayaran jaminan dilaksanakan sesuai tahapan yang berlaku', 'Melaksanakan pengelolaan dokumen pembayaran jaminan sesuai tahapan yang berlaku', 'Super Admin', '2018-04-16 16:35:05', NULL, NULL, '1'),
('713ffc6f-4130-11e8-8c73-64006a4fef6c', '4fa88f8f-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.016.01.2.3', 'Pembaharuan data karyawan dilakukan melalui sistem aplikasi pengelolaan SDM', 'Melakukan pembaharuan data karyawan melalui sistem aplikasi pengelolaan SDM', 'Super Admin', '2018-04-16 11:41:36', NULL, NULL, '1'),
('7155e8ad-414e-11e8-8c73-64006a4fef6c', 'd687e13a-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.007.01.2.1', 'Jenis pendapatan lain diidentifikasi melalui rekening koran', 'Mengidentifikasi jenis pendapatan lain melalui rekening koran', 'Super Admin', '2018-04-16 15:16:21', NULL, NULL, '1'),
('71b46e57-41ec-11e8-8c73-64006a4fef6c', '010294af-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.2.6', 'Daftar kartu peserta dan sertifikat disampaikan ke pihak terkait untuk dilakukan pencetakan', 'Menyampaikan daftar kartu peserta dan sertifikat ke pihak terkait untuk dilakukan pencetakan', 'Super Admin', '2018-04-17 10:07:23', NULL, NULL, '1'),
('721693af-41fb-11e8-8c73-64006a4fef6c', '4bf252ae-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.2.1', 'Persyaratan klien pengguna diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi persyaratan klien pengguna sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:54:46', NULL, NULL, '1'),
('72e903a9-41f5-11e8-8c73-64006a4fef6c', '8843f46f-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.004.01.1.2', 'Kebutuhan jenis dan jumlah sarana teknologi informasi diidentifikasi sesuai dengan pedoman yang telah ditetapkan', 'Mengidentifikasi kebutuhan jenis dan jumlah sarana teknologi informasi sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 11:11:50', NULL, NULL, '1'),
('74762230-41f3-11e8-8c73-64006a4fef6c', '19d48a95-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.2.2', 'Beban kerja tiap peralatan diidentifikasi berdasarkan penggunaan dan risiko kerusakan peralatan', 'Mengidentifikasi beban kerja tiap peralatan berdasarkan penggunaan dan risiko kerusakan peralatan', 'Super Admin', '2018-04-17 10:57:34', NULL, NULL, '1'),
('75c8bc48-41fd-11e8-8c73-64006a4fef6c', '7e5eb99f-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.5.2', 'Register akses keamanan dipelihara sesuai pedoman yang telah ditetapkan', 'Memelihara register akses keamanan sesuai pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 12:09:11', NULL, NULL, '1'),
('76735072-41f4-11e8-8c73-64006a4fef6c', '34dc4853-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.003.01.2.1', 'Proses instalasi dilaksanakan sesuai dengan prosedur dan instruksi manual', 'Melaksanakan proses instalasi sesuai dengan prosedur dan instruksi manual', 'Super Admin', '2018-04-17 11:04:47', NULL, NULL, '1'),
('7683d111-412b-11e8-8c73-64006a4fef6c', 'd8c5662c-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.005.01.2.3', 'Usulan data kebutuhan pengembangan karyawan diarsipkan sesuai dengan ketentuan yang berlaku', 'Mengarsipkan usulan data kebutuhan pengembangan karyawan sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:05:57', NULL, NULL, '1'),
('777d5b55-412f-11e8-8c73-64006a4fef6c', '01cde75b-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.010.01.3.3', 'Rekapitulasi hasil penilaian kinerja individu yang telah disetujui dikirimkan kepada pihak terkait', 'Mengirimkan rekapitulasi hasil penilaian kinerja individu yang telah disetujui kepada pihak terkait', 'Super Admin', '2018-04-16 11:34:37', NULL, NULL, '1'),
('7823fa59-4173-11e8-8c73-64006a4fef6c', '948c6f2a-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.001.01.1.1', 'Prioritas potensi pasar dianalisis berdasarkan kondisi terkini', 'Menganalisis prioritas potensi pasar berdasarkan kondisi terkini', 'Super Admin', '2018-04-16 19:41:24', NULL, NULL, '1'),
('78bd6b0a-41f1-11e8-8c73-64006a4fef6c', '4e1edc7d-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.005.01.1.3', 'Usulan kerjasama dengan mitra dibuat untuk disampaikan kepada pihak terkait', 'Membuat usulan kerjasama dengan mitra untuk disampaikan kepada pihak terkait', 'Super Admin', '2018-04-17 10:43:22', NULL, NULL, '1'),
('79451174-416d-11e8-8c73-64006a4fef6c', '3064d084-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.2.2', 'Kelengkapan pengisian formulir laporan kecelakaan kerja tahap kedua beserta dokumen pendukung lainnya dipastikan kebenarannya sesuai ketentuan yang berlaku melalui formulir kendali', 'Memastikan kebenaran kelengkapan pengisian formulir laporan kecelakaan kerja tahap kedua beserta dokumen pendukung lainnya sesuai ketentuan yang berlaku melalui formulir kendali', 'Super Admin', '2018-04-16 18:58:29', NULL, NULL, '1'),
('794dcb32-4164-11e8-8c73-64006a4fef6c', 'ca6af1f8-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.3.2', 'Pengaduan ditindaklanjuti menggunakan mekanisme yang sesuai dengan ketentuan', 'Menindaklanjuti pengaduan menggunakan mekanisme yang sesuai dengan ketentuan', 'Super Admin', '2018-04-16 17:54:04', NULL, NULL, '1'),
('7971011c-4206-11e8-8c73-64006a4fef6c', '5c1225e3-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.002.01.3.1', 'Penyimpanan arsip aktif dalam berkas dilaksanakan sesuai dengan pedoman yang berlaku', 'Melaksanakan penyimpanan arsip aktif dalam berkas sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 13:13:43', NULL, NULL, '1'),
('7a94a1eb-3bc2-11e8-806f-64006a4fef6c', 'ad0a0694-3b34-11e8-806f-64006a4fef6c', 'JSN.HC.001.01.3.1', 'Rekapitulasi kebutuhan karyawan yang mendapat persetujuan dikirim kepada pihak terkait sesuai dengan ketentuan yang berlaku.', 'Mengirim rekapitulasi kebutuhan karyawan yang mendapat persetujuan kepada pihak terkait sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-09 13:51:54', 'Super Admin', '2018-04-16 11:18:48', '1'),
('7b6b0ef2-41fe-11e8-8c73-64006a4fef6c', 'a4451a99-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.4.5', 'Penambahan perangkat direkomendasikan sesuai kebutuhan', 'Merekomendasikan penambahan perangkat sesuai kebutuhan', 'Super Admin', '2018-04-17 12:16:30', NULL, NULL, '1'),
('7c55171e-4207-11e8-8c73-64006a4fef6c', '7fe5b84d-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.3.1', 'Monitoring hasil kegiatan sosialisasi dilaksanakan sesuai dengan pedoman yang telah ditetapkan', 'Melaksanakan monitoring hasil kegiatan sosialisasi sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 13:20:57', NULL, NULL, '1'),
('7d1ba5fa-415b-11e8-8c73-64006a4fef6c', '67551862-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.4.2', 'Total nominal hasil rekap pembayaran BUBM diinput dalam aplikasi keuangan sesuai dengan pedoman yang berlaku', 'Menginput total nominal hasil rekap pembayaran BUBM dalam aplikasi keuangan sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-16 16:49:44', NULL, NULL, '1'),
('7d894499-416f-11e8-8c73-64006a4fef6c', '7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.2.6', 'Eligibilitas dan validitas data tenaga kerja diverifikasi sesuai dengan data NIK adminduk', 'Memverifikasi eligibilitas dan validitas data tenaga kerja sesuai dengan data NIK adminduk', 'Super Admin', '2018-04-16 19:12:55', NULL, NULL, '1'),
('7d9ff370-4168-11e8-8c73-64006a4fef6c', 'f6a2b153-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.3.1', 'Dokumen pengajuan disusun dan dijadikan satu sesuai dengan urutan yang berlaku', 'Menyusun dokumen pengajuan dan dijadikan satu sesuai dengan urutan yang berlaku', 'Super Admin', '2018-04-16 18:22:49', NULL, NULL, '1'),
('7dacac8f-4171-11e8-8c73-64006a4fef6c', 'ae4b50f7-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.2.3', 'Riwayat kepesertaan diperiksa untuk kepastian pemenuhan syarat pengambilan JP', 'Memeriksa riwayat kepesertaan untuk kepastian pemenuhan syarat pengambilan JP', 'Super Admin', '2018-04-16 19:27:14', NULL, NULL, '1'),
('7e267a52-4159-11e8-8c73-64006a4fef6c', '40a93e61-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.010.01.4.3', 'Dokumen pembayaran jaminan diserahkan ke pihak terkait', 'Menyerahkan dokumen pembayaran jaminan ke pihak terkait', 'Super Admin', '2018-04-16 16:35:27', NULL, NULL, '1'),
('7e8a8e30-416e-11e8-8c73-64006a4fef6c', '527910a3-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.2.4', 'Ahli waris atau yang mengurus pengajuan pemakaman atau yang menerima kuasa mengurus pengajuan klaim JKM diambil gambar dan disimpan sebagai arsip elektronik', 'Mengambil gambar ahli waris atau yang mengurus pengajuan pemakaman atau yang menerima kuasa mengurus pengajuan klaim JKM dan disimpan sebagai arsip elektronik', 'Super Admin', '2018-04-16 19:05:47', NULL, NULL, '1'),
('802cdad0-41e9-11e8-8c73-64006a4fef6c', 'd69b17b5-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.1.2', 'Iuran pertama diterbitkan penetapannya sesuai dengan ketentuan yang berlaku', 'Menerbitkan penetapan iuran pertama sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 09:46:19', NULL, NULL, '1'),
('8097e657-41fb-11e8-8c73-64006a4fef6c', '4bf252ae-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.2.2', 'Persyaratan jaringan LAN diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi persyaratan jaringan LAN sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:55:10', NULL, NULL, '1'),
('80a1b09d-414e-11e8-8c73-64006a4fef6c', 'd687e13a-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.007.01.2.2', 'Data penerimaan pendapatan lain diidentifikasi melalui rekening koran sesuai ketentuan yang berlaku', 'Mengidentifikasi data penerimaan pendapatan lain melalui rekening koran sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 15:16:47', NULL, NULL, '1'),
('8136b5db-41fa-11e8-8c73-64006a4fef6c', '0ff46ead-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.009.01.2.1', 'Perbaikan dilakukan sesuai hasil identifikasi', 'Melakukan perbaikan sesuai hasil identifikasi', 'Super Admin', '2018-04-17 11:48:02', NULL, NULL, '1'),
('81520ebd-414c-11e8-8c73-64006a4fef6c', 'b5b2e666-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.005.01.2.1', 'Identitas kepesertaan diinput ke dalam aplikasi keuangan', 'Menginput identitas kepesertaan ke dalam aplikasi keuangan', 'Super Admin', '2018-04-16 15:02:29', NULL, NULL, '1'),
('81f428f5-41e5-11e8-8c73-64006a4fef6c', 'afb0e9cf-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.002.01.1.1', 'Manfaat pendaftaran program jaminan sosial ketenagakerjaan dijelaskan kepada calon peserta berpedoman pada ketentuan dan peraturan yang berlaku', 'Menjelaskan manfaat pendaftaran program jaminan sosial ketenagakerjaan kepada calon peserta berpedoman pada ketentuan dan peraturan yang berlaku', 'Super Admin', '2018-04-17 09:17:44', NULL, NULL, '1'),
('82ae7104-41fc-11e8-8c73-64006a4fef6c', '67cb572b-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.2.1', 'Perangkat lunak berlisensi diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi perangkat lunak berlisensi sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 12:02:23', NULL, NULL, '1'),
('834d27a8-41f3-11e8-8c73-64006a4fef6c', '19d48a95-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.2.3', 'Daftar kebutuhan perawatan dibuat berdasarkan jenis alat', 'Membuat daftar kebutuhan perawatan berdasarkan jenis alat', 'Super Admin', '2018-04-17 10:57:59', NULL, NULL, '1'),
('83641bb3-4130-11e8-8c73-64006a4fef6c', '57440667-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.016.01.3.1', 'Hasil pembaharuan data administrasi karyawan dipastikan kebenarannya melalui sistem aplikasi pengelolaan SDM', 'Memastikan kebenaran hasil pembaharuan data administrasi karyawan melalui sistem aplikasi pengelolaan SDM', 'Super Admin', '2018-04-16 11:42:06', NULL, NULL, '1'),
('8608a2c5-41f5-11e8-8c73-64006a4fef6c', '8843f46f-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.004.01.1.3', 'Rencana pemenuhan sarana teknologi informasi untuk anggaran tahun berikutnya dibuat sesuai dengan format yang telah ditetapkan', 'Membuat rencana pemenuhan sarana teknologi informasi untuk anggaran tahun berikutnya sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 11:12:23', NULL, NULL, '1'),
('862cd6ff-41f2-11e8-8c73-64006a4fef6c', '7f58c5d7-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.1.5', 'Kode iuran untuk pembayaran iuran pertama peserta dipastikan ketepatannya sesuai dengan ketentuan yang berlaku', 'Memastikan ketepatan kode iuran untuk pembayaran iuran pertama peserta sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 10:50:54', NULL, NULL, '1'),
('865e896c-415a-11e8-8c73-64006a4fef6c', '5fdb6236-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.3.1', 'Proses penyelesaian pembayaran BUBM pada aplikasi keuangan dilakukan sesuai tahapan yang ditentukan', 'Melakukan proses penyelesaian pembayaran BUBM pada aplikasi keuangan sesuai tahapan yang ditentukan', 'Super Admin', '2018-04-16 16:42:50', NULL, NULL, '1'),
('87615bff-41ea-11e8-8c73-64006a4fef6c', 'e7c523a6-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.3.3', 'Tanda terima sertifikat dan kartu peseta dipastikan telah ditandatangani oleh pihak yang berwenang sesuai dengan ketentuan yang berlaku', 'Memastikan tanda terima sertifikat dan kartu peseta telah ditandatangani oleh pihak yang berwenang sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 09:53:40', NULL, NULL, '1'),
('877a3ee8-416d-11e8-8c73-64006a4fef6c', '3064d084-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.2.3', 'Berkas pengajuan klaim JKK divalidasi sesuai ketentuan yang berlaku', 'Memvalidasi berkas pengajuan klaim JKK sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 18:58:53', NULL, NULL, '1'),
('8a594a09-41f4-11e8-8c73-64006a4fef6c', '34dc4853-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.003.01.2.2', 'Konfigurasi sistem, seluruh file dan ikon (bila ada) dipastikan telah berfungsi secara baik sesuai panduan manual', 'Memastikan konfigurasi sistem, seluruh file dan ikon (bila ada) telah berfungsi secara baik sesuai panduan manual', 'Super Admin', '2018-04-17 11:05:20', NULL, NULL, '1'),
('8b720386-4171-11e8-8c73-64006a4fef6c', 'ae4b50f7-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.2.4', 'Berkas pengajuan klaim JP divalidasi sesuai ketentuan yang berlaku', 'Memvalidasi berkas pengajuan klaim JP sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 19:27:37', NULL, NULL, '1'),
('8b8911b5-4131-11e8-8c73-64006a4fef6c', '87db6a4f-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.017.01.3.1', 'Tindak lanjut usulan pemberian penghargaan dan atau sanksi disampaikan kepada petugas terkait', 'Menyampaikan tindak lanjut usulan pemberian penghargaan dan atau sanksi diterima kepada petugas terkait', 'Super Admin', '2018-04-16 11:49:30', 'Super Admin', '2018-04-16 11:50:01', '1'),
('8ba62e74-41f6-11e8-8c73-64006a4fef6c', 'a76f4201-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.2.2', 'Data yang terhapus karena delete dapat dikembalikan lagi dengan menggunakan software', 'Mengembalikan data yang terhapus karena delete dengan menggunakan software', 'Super Admin', '2018-04-17 11:19:41', NULL, NULL, '1'),
('8d9242df-4207-11e8-8c73-64006a4fef6c', '7fe5b84d-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.3.2', 'Evaluasi kegiatan sosialisasi dilaksanakan sesuai dengan pedoman yang berlaku', 'Melaksanakan evaluasi kegiatan sosialisasi sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 13:21:26', NULL, NULL, '1'),
('8d97bd74-4164-11e8-8c73-64006a4fef6c', 'ca6af1f8-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.3.3', 'Eskalasi ke unit terkait dilakukan berdasarkan kondisi dan sesuai dengan tahapan serta ketentuan yang berlaku', 'Melakukan eskalasi ke unit terkait berdasarkan kondisi dan sesuai dengan tahapan serta ketentuan yang berlaku', 'Super Admin', '2018-04-16 17:54:38', NULL, NULL, '1'),
('8ddff95a-41ff-11e8-8c73-64006a4fef6c', 'e19c3f43-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.3.2', 'Perangkat untuk mencetak dokumen dipastikan siap sesuai dengan fungsinya', 'Memastikan perangkat untuk mencetak dokumen  siap sesuai dengan fungsinya', 'Super Admin', '2018-04-17 12:24:11', NULL, NULL, '1'),
('8eb2d72a-41e9-11e8-8c73-64006a4fef6c', 'd69b17b5-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.1.3', 'Penetapan iuran diverifikasi sesuai ketentuan yang berlaku', 'Memverifikasi penetapan iuran sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-17 09:46:43', NULL, NULL, '1'),
('8f4c23b3-41f1-11e8-8c73-64006a4fef6c', '54ef9f78-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.005.01.2.1', 'Calon mitra dihubungi dengan menggunakan teknik yang tepat sesuai dengan karakternya', 'Menghubungi calon mitra dengan menggunakan teknik yang tepat sesuai dengan karakternya', 'Super Admin', '2018-04-17 10:44:00', NULL, NULL, '1'),
('8f66f78b-41fb-11e8-8c73-64006a4fef6c', '4bf252ae-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.2.3', 'Diagram jaringan fisik LAN dibuat sesuai persyaratan pengguna', 'Membuat diagram jaringan fisik LAN sesuai persyaratan pengguna', 'Super Admin', '2018-04-17 11:55:35', NULL, NULL, '1'),
('90212811-41f8-11e8-8c73-64006a4fef6c', 'd4879fb8-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.1.4', 'Software anti virus diinstall pada semua komputer jaringan sesuai dengan pedoman yang berlaku', 'Menginstall software anti virus pada semua komputer jaringan sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:34:08', NULL, NULL, '1'),
('9075cb18-41fe-11e8-8c73-64006a4fef6c', 'a4451a99-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.4.6', 'Kegagalan layanan perangkat diidentifikasi sesuai dengan format yang telah ditetapkan', 'Mengidentifikasi kegagalan layanan perangkat sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 12:17:06', NULL, NULL, '1'),
('90913f07-3bc2-11e8-806f-64006a4fef6c', 'ad0a0694-3b34-11e8-806f-64006a4fef6c', 'JSN.HC.001.01.3.2', 'Usulan yang telah dikirim dipastikan telah diterima oleh petugas terkait.', 'Memastikan usulan yang telah dikirim telah diterima oleh petugas terkait', 'Super Admin', '2018-04-09 13:52:31', 'Super Admin', '2018-04-16 11:19:24', '1'),
('90a8c345-4206-11e8-8c73-64006a4fef6c', '5c1225e3-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.002.01.3.2', 'Mobilitas arsip aktif dilakukan sesuai dengan ketentuan yang berlaku', 'Melakukan mobilitas arsip aktif sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 13:14:22', NULL, NULL, '1'),
('90b3987b-416f-11e8-8c73-64006a4fef6c', '7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.2.7', 'Tenaga kerja atau ahli waris atau yang menerima kuasa mengurus permohonan klaim JHT di ambil gambar dan disimpan sebagai arsip elektronik', 'Mengambil gambar tenaga kerja atau ahli waris atau yang menerima kuasa mengurus permohonan klaim JHT dan disimpan sebagai arsip elektronik', 'Super Admin', '2018-04-16 19:13:27', NULL, NULL, '1'),
('9205658b-416e-11e8-8c73-64006a4fef6c', '527910a3-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.2.5', 'Ahli waris diinformasikan agar manfaat beasiswa pendidikan diajukan sekaligus pada saat pengajuan klaim JKM sesuai ketentuan yang berlaku', 'Menginformasikan kepada ahli waris agar manfaat beasiswa pendidikan diajukan sekaligus pada saat pengajuan klaim JKM sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 19:06:20', NULL, NULL, '1'),
('924781ac-414e-11e8-8c73-64006a4fef6c', 'd687e13a-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.007.01.2.3', 'Aplikasi keuangan yang digunakan dipersiapkan sesuai ketentuan yang berlaku', 'Menyiapkan aplikasi keuangan yang digunakan sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 15:17:16', NULL, NULL, '1'),
('92ddde67-41f3-11e8-8c73-64006a4fef6c', '19d48a95-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.2.4', 'Daftar peralatan yang memerlukan perawatan untuk memperkecil resiko dibuat sesuai dengan pedoman kerja yang berlaku', 'Membuat daftar peralatan yang memerlukan perawatan untuk memperkecil resiko sesuai dengan pedoman kerja yang berlaku', 'Super Admin', '2018-04-17 10:58:25', NULL, NULL, '1'),
('938089e7-41fc-11e8-8c73-64006a4fef6c', '67cb572b-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.2.2', 'Jumlah dan pemakai lisensi didokumentasikan sesuai dengan format yang telah ditetapkan', 'Mendokumentasikan jumlah dan pemakai lisensi sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 12:02:52', NULL, NULL, '1'),
('9530c657-415b-11e8-8c73-64006a4fef6c', '6f0a6799-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.5.1', 'Pengelolaan dokumen pembayaran BUBM dilaksanakan sesuai tahapan yang berlaku', 'Melaksanakan pengelolaan dokumen pembayaran BUBM sesuai tahapan yang berlaku', 'Super Admin', '2018-04-16 16:50:25', NULL, NULL, '1'),
('953de9ad-41ed-11e8-8c73-64006a4fef6c', '0a1c0eed-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.3.4', 'Tanda terima bukti penyerahan berkas dokumen kepesertaan baru dibuat dan diserahkan kepada petugas terkait', 'Membuat tanda terima bukti penyerahan berkas dokumen kepesertaan baru dan diserahkan kepada petugas terkait', 'Super Admin', '2018-04-17 10:15:32', NULL, NULL, '1'),
('95e16c2b-416d-11e8-8c73-64006a4fef6c', '3af01477-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.3.1', 'Berkas pengajuan laporan kecelakaan kerja tahap kedua disusun sesuai dengan urutan yang berlaku', 'Menyusun berkas pengajuan laporan kecelakaan kerja tahap kedua sesuai dengan urutan yang berlaku', 'Super Admin', '2018-04-16 18:59:17', NULL, NULL, '1'),
('96c5832f-415a-11e8-8c73-64006a4fef6c', '5fdb6236-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.3.2', 'Dokumen perintah bayar yang telah dibuat diverifikasi keakuratannya', 'Memverifikasi keakuratan dokumen perintah bayar yang telah dibuat ', 'Super Admin', '2018-04-16 16:43:18', NULL, NULL, '1'),
('97e31189-4170-11e8-8c73-64006a4fef6c', '84b166fa-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.3.3', 'Agenda permohonan klaim JHT dicetak dan salinan agenda diberikan kepada tenaga kerja atau ahli waris sebagai tanda bukti', 'Mencetak agenda permohonan klaim JHT dan salinan agenda diberikan kepada tenaga kerja atau ahli waris sebagai tanda bukti', 'Super Admin', '2018-04-16 19:20:49', NULL, NULL, '1'),
('986603c2-412a-11e8-8c73-64006a4fef6c', 'd1d612b4-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.005.01.1.2', 'Jenis pengembangan yang dibutuhkan diidentifikasi berdasarkan kelompok pekerjaan', 'Mengidentifikasi jenis pengembangan yang dibutuhkan berdasarkan kelompok pekerjaan', 'Super Admin', '2018-04-16 10:59:45', NULL, NULL, '1'),
('992c663c-41fd-11e8-8c73-64006a4fef6c', '91bd06b5-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.2.1', 'Fungsi layanan yang ada pada perangkat diinstal untuk mengelola semua perangkat yang ada dalam jaringan', 'Menginstall fungsi layanan yang ada pada perangkat untuk mengelola semua perangkat yang ada dalam jaringan', 'Super Admin', '2018-04-17 12:10:11', NULL, NULL, '1'),
('99d91876-4171-11e8-8c73-64006a4fef6c', 'b6d2068e-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.3.1', 'Berkas pengajuan klaim JP disusun sesuai dengan urutan yang berlaku', 'Menyusun berkas pengajuan klaim JP sesuai dengan urutan yang berlaku', 'Super Admin', '2018-04-16 19:28:02', NULL, NULL, '1'),
('9a7fa648-4164-11e8-8c73-64006a4fef6c', 'ca6af1f8-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.3.4', 'Informasi jawaban pengaduan disampaikan kepada peserta', 'Menyampaikan informasi jawaban pengaduan kepada peserta', 'Super Admin', '2018-04-16 17:54:59', NULL, NULL, '1'),
('9bcca2fd-412f-11e8-8c73-64006a4fef6c', '1373cf04-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.013.01.1.1', 'Jenis imbal jasa yang akan dibayarkan diidentifikasi sesuai ketentuan yang berlaku', 'Mengidentifikasi jenis imbal jasa yang akan dibayarkan sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:35:38', NULL, NULL, '1'),
('9c5d9df4-41f9-11e8-8c73-64006a4fef6c', 'ef3bf74d-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.008.01.1.2', 'Karakter berbagai jenis virus diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi karakter berbagai jenis virus sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:41:38', NULL, NULL, '1'),
('9c692fd6-41ff-11e8-8c73-64006a4fef6c', 'e19c3f43-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.3.3', 'Dokumen dicetak sesuai dengan instruksi dan kebutuhan', 'Mencetak dokumen sesuai dengan instruksi dan kebutuhan', 'Super Admin', '2018-04-17 12:24:35', NULL, NULL, '1'),
('9d1bf020-4207-11e8-8c73-64006a4fef6c', '7fe5b84d-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.3.3', 'Laporan hasil evaluasi kegiatan sosialisasi dibuat sesuai dengan format yang telah ditetapkan', 'Membuat laporan hasil evaluasi kegiatan sosialisasi sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 13:21:52', NULL, NULL, '1'),
('9d7af74f-41fa-11e8-8c73-64006a4fef6c', '0ff46ead-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.009.01.2.2', 'Keberhasilan penyelesaian masalah diverifikasi sesuai dengan pedoman yang berlaku', 'Memverifikasi keberhasilan penyelesaian masalah sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:48:49', NULL, NULL, '1'),
('9e37c2fe-4172-11e8-8c73-64006a4fef6c', 'e23fafc0-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.2.4', 'Semua dokumen pendukung konfirmasi penerima manfaat JP divalidasi sesuai ketentuan yang berlaku', 'Memvalidasi semua dokumen pendukung konfirmasi penerima manfaat JP sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 19:35:18', NULL, NULL, '1'),
('9e86b89f-41f4-11e8-8c73-64006a4fef6c', '3ae0498f-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.003.01.3.1', 'Aplikasi dijalankan secara sampling tanpa error', 'Menjalankan aplikasi secara sampling tanpa error', 'Super Admin', '2018-04-17 11:05:54', NULL, NULL, '1'),
('9eeb0b80-41f2-11e8-8c73-64006a4fef6c', '86a7bd1c-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.2.1', 'Peserta yang telah terdaftar diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi peserta yang telah terdaftar sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 10:51:36', NULL, NULL, '1'),
('9ef25095-41f1-11e8-8c73-64006a4fef6c', '54ef9f78-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.005.01.2.2', 'Jadwal pertemuan disepakati oleh calon mitra', 'Menyepakati jadwal pertemuan oleh calon mitra', 'Super Admin', '2018-04-17 10:44:26', NULL, NULL, '1'),
('9f13673c-416e-11e8-8c73-64006a4fef6c', '527910a3-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.2.6', 'Semua dokumen pendukung pengajuan klaim JKM divalidasi sesuai ketentuan yang berlaku', 'Memvalidasi semua dokumen pendukung pengajuan klaim JKM  sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 19:06:42', NULL, NULL, '1'),
('9f5b049e-414a-11e8-8c73-64006a4fef6c', '031a4630-3e43-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.2.1', 'Pengadaan barang dicatat sesuai kelompok barang sesuai dengan pedoman pengelolaan aset yang berlaku', 'Mencatat pengadaan barang sesuai kelompok barang sesuai dengan pedoman pengelolaan aset yang berlaku', 'Super Admin', '2018-04-16 14:49:00', NULL, NULL, '1'),
('9f9f18cb-41e9-11e8-8c73-64006a4fef6c', 'd69b17b5-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.1.4', 'Surat pemberitahuan penetapan iuran dicetak untuk disetujui oleh calon peserta', 'Mencetak surat pemberitahuan penetapan iuran untuk disetujui oleh calon peserta', 'Super Admin', '2018-04-17 09:47:11', NULL, NULL, '1'),
('a1a054ca-416f-11e8-8c73-64006a4fef6c', '7ad6391d-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.2.8', 'Tenaga kerja atau ahli waris dikonfirmasi mengenai metode dan biaya transfer pembayaran klaim apabila menggunakan bank yang berbeda dengan BPJS Ketenagakerjaan', 'Mengkonfirmasi tenaga kerja atau ahli waris mengenai metode dan biaya transfer pembayaran klaim apabila menggunakan bank yang berbeda dengan BPJS Ketenagakerjaan', 'Super Admin', '2018-04-16 19:13:56', NULL, NULL, '1'),
('a1b1bdb0-41ea-11e8-8c73-64006a4fef6c', 'f7e99c24-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.1.1', 'Data kepesertaan dan iuran pertama yang telah diterima divalidasi sesuai dengan ketentuan yang berlaku', 'Memvalidasi data kepesertaan dan iuran pertama yang telah diterima sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 09:54:24', NULL, NULL, '1'),
('a2542615-415b-11e8-8c73-64006a4fef6c', '6f0a6799-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.5.2', 'Dokumen pembayaran BUBM diserahkan ke pihak terkait', 'Menyerahkan dokumen pembayaran BUBM ke pihak terkait', 'Super Admin', '2018-04-16 16:50:47', NULL, NULL, '1'),
('a2782c08-415a-11e8-8c73-64006a4fef6c', '5fdb6236-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.3.3', 'Surat instruksi kepada pihak perbankan dibuat sesuai jenis pembayaran', 'Membuat surat instruksi kepada pihak perbankan sesuai jenis pembayaran', 'Super Admin', '2018-04-16 16:43:38', NULL, NULL, '1'),
('a34dc9d3-41f6-11e8-8c73-64006a4fef6c', 'a76f4201-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.2.3', 'Data yang hilang akibat hard disk terformat dapat dikembalikan lagi dengan menggunakan software', 'Mengembalikan data yang hilang akibat hard disk terformat dengan menggunakan software', 'Super Admin', '2018-04-17 11:20:21', NULL, NULL, '1'),
('a36e3dbe-41fb-11e8-8c73-64006a4fef6c', '4bf252ae-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.2.4', 'Tipe-tipe terminal dan penempatan prosesor-prosesor, protokol yang diperlukan dan arsitektur jaringan LAN ditentukan berdasarkan spesifikasi teknik dan persyaratan pengguna', 'Menentukan tipe-tipe terminal dan penempatan prosesor-prosesor, protokol yang diperlukan dan arsitektur jaringan LAN berdasarkan spesifikasi teknik dan persyaratan pengguna', 'Super Admin', '2018-04-17 11:56:09', NULL, NULL, '1'),
('a5f6446f-41f8-11e8-8c73-64006a4fef6c', 'dac9922d-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.2.1', 'Software antivirus termutakhir dijalankan di semua jaringan komputer sesuai dengan pedoman yang berlaku', 'Menjalankan software antivirus termutakhir di semua jaringan komputer sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:34:45', NULL, NULL, '1'),
('a6a0c9e2-4164-11e8-8c73-64006a4fef6c', 'ca6af1f8-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.3.5', 'Penyelesaian dan status pengaduan diinput ke aplikasi', 'Menginput penyelesaian dan status pengaduan ke aplikasi', 'Super Admin', '2018-04-16 17:55:20', NULL, NULL, '1');
INSERT INTO `kriteria_unjuk_kerja` (`UUID_KUK`, `UUID_EK`, `NOMOR_KUK`, `PERNYATAAN`, `PERTANYAAN`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('a768ed5e-41fc-11e8-8c73-64006a4fef6c', '67cb572b-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.2.3', 'Perangkat lunak tidak legal yang ada di personal komputer dan jaringan komputer diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi perangkat lunak tidak legal yang ada di personal komputer dan jaringan komputer sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 12:03:25', NULL, NULL, '1'),
('a7743275-3bc2-11e8-806f-64006a4fef6c', 'ad0a0694-3b34-11e8-806f-64006a4fef6c', 'JSN.HC.001.01.3.3', 'Dokumen usulan kebutuhan karyawan diarsipkan dalam bentuk sesuai dengan ketentuan yang berlaku.', 'Mengarsipkan dokumen usulan kebutuhan karyawan dalam bentuk sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-09 13:53:09', 'Super Admin', '2018-04-16 11:19:52', '1'),
('a792bcb6-412a-11e8-8c73-64006a4fef6c', 'd1d612b4-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.005.01.1.3', 'Data karyawan yang membutuhkan pengembangan diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi data karyawan yang membutuhkan pengembangan sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-16 11:00:10', NULL, NULL, '1'),
('a7954752-41f3-11e8-8c73-64006a4fef6c', '20c91d71-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.3.1', 'Daftar prioritas peralatan yang memerlukan perawatan dibuat sesuai dengan format yang telah ditetapkan', 'Membuat daftar prioritas peralatan yang memerlukan perawatan sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 10:59:00', NULL, NULL, '1'),
('a7d16b25-41fd-11e8-8c73-64006a4fef6c', '91bd06b5-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.2.2', 'Pemberian nama pada perangkat dibuat sesuai dengan ketentuan', 'Membuat pemberian nama pada perangkat sesuai dengan ketentuan', 'Super Admin', '2018-04-17 12:10:35', NULL, NULL, '1'),
('a9c15e8b-4130-11e8-8c73-64006a4fef6c', '57440667-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.016.01.3.2', 'Hasil pembaharuan data karyawan diajukan kepada pihak terkait untuk mendapatkan persetujuan', 'Mengajukan hasil pembaharuan data karyawan kepada pihak terkait untuk mendapatkan persetujuan', 'Super Admin', '2018-04-16 11:43:11', NULL, NULL, '1'),
('a9e2e8c3-4205-11e8-8c73-64006a4fef6c', '4b06dd4c-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.002.01.1.1', 'Sistem kearsipan diidentifikasi sesuai dengan pedoman administrasi yang berlaku', 'Mengidentifikasi sistem kearsipan sesuai dengan pedoman administrasi yang berlaku', 'Super Admin', '2018-04-17 13:07:55', NULL, NULL, '1'),
('aae44a2c-4171-11e8-8c73-64006a4fef6c', 'b6d2068e-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.3.2', 'Data pengajuan klaim diinput secara lengkap ke dalam sistem aplikasi', 'Menginput secara lengkap data pengajuan klaim ke dalam sistem aplikasi', 'Super Admin', '2018-04-16 19:28:30', NULL, NULL, '1'),
('ab1b40d7-4170-11e8-8c73-64006a4fef6c', '84b166fa-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.3.4', 'Berkas permohonan klaim JHT yang telah di agenda beserta data pendukung lainnya diserahkan kepada petugas penata madya pelayanan', 'Menyerahkan berkas permohonan klaim JHT yang telah di agenda beserta data pendukung lainnya kepada petugas penata madya pelayanan', 'Super Admin', '2018-04-16 19:21:21', NULL, NULL, '1'),
('ab27c130-415f-11e8-8c73-64006a4fef6c', '8d36acf7-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.3.3', 'Pembuatan data aktiva diselesaikan di aplikasi keuangan sesuai dengan tahapan yang berlaku', 'Menyelesaikan pembuatan data aktiva di aplikasi keuangan sesuai dengan tahapan yang berlaku', 'Super Admin', '2018-04-16 17:19:40', NULL, NULL, '1'),
('abe8d886-4156-11e8-8c73-64006a4fef6c', '1e4b7652-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.009.01.3.2', 'Ketepatan data transfer divalidasi oleh pihak terkait', 'Memvalidasi ketepatan data transfer oleh pihak terkait', 'Super Admin', '2018-04-16 16:15:15', NULL, NULL, '1'),
('ad83c49d-41f4-11e8-8c73-64006a4fef6c', '3ae0498f-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.003.01.3.2', 'Aplikasi ditutup tanpa error', 'Menutup aplikasi tanpa error', 'Super Admin', '2018-04-17 11:06:19', NULL, NULL, '1'),
('adac8914-416e-11e8-8c73-64006a4fef6c', '5c83dba0-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.3.1', 'Berkas pengajuan klaim JKM disusun sesuai dengan urutan yang berlaku', 'Menyusun berkas pengajuan klaim JKM sesuai dengan urutan yang berlaku', 'Super Admin', '2018-04-16 19:07:06', NULL, NULL, '1'),
('adb324ed-414e-11e8-8c73-64006a4fef6c', 'de069029-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.007.01.3.1', 'Penerimaan pendapatan lain dihitung ketepatannya sesuai dengan peraturan yang berlaku', 'Menghitung ketepatan penerimaan pendapatan lain sesuai dengan peraturan yang berlaku', 'Super Admin', '2018-04-16 15:18:02', NULL, NULL, '1'),
('adff5965-41e8-11e8-8c73-64006a4fef6c', 'c3a7d07a-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.002.01.3.1', 'Data upah dan pekerja direkonsiliasi melalui aplikasi yang sesuai dengan program manfaat yang diikuti', 'Merekonsiliasi data upah dan pekerja melalui aplikasi yang sesuai dengan program manfaat yang diikuti', 'Super Admin', '2018-04-17 09:40:26', NULL, NULL, '1'),
('aea5fddc-41f5-11e8-8c73-64006a4fef6c', '8843f46f-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.004.01.1.4', 'Laporan rencana pemenuhan kebutuhan sarana teknologi informasi dibuat untuk disampaikan ke pihak terkait sesuai dengan pedoman yang telah ditetapkan', 'Membuat laporan rencana pemenuhan kebutuhan sarana teknologi informasiuntuk disampaikan ke pihak terkait sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 11:13:31', NULL, NULL, '1'),
('af6b210c-41ea-11e8-8c73-64006a4fef6c', 'f7e99c24-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.1.2', 'Nomor kepesertaan disiapkan menggunakan aplikasi sistem yang berlaku', 'Menyiapkan nomor kepesertaan menggunakan aplikasi sistem yang berlaku', 'Super Admin', '2018-04-17 09:54:47', NULL, NULL, '1'),
('af84de1a-41fa-11e8-8c73-64006a4fef6c', '186f6185-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.009.01.3.1', 'Inventarisasi masalah dilakukan pada daftar permasalahan terkini', 'Melakukan inventarisasi masalah pada daftar permasalahan terkini', 'Super Admin', '2018-04-17 11:49:20', NULL, NULL, '1'),
('afcdad0b-41f2-11e8-8c73-64006a4fef6c', '86a7bd1c-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.2.2', 'Input data identitas diri peserta divalidasi ketepatannya berdasarkan ketentuan yang berlaku', 'Memvalidasi ketepatan input data identitas diri peserta berdasarkan ketentuan yang berlaku', 'Super Admin', '2018-04-17 10:52:04', NULL, NULL, '1'),
('afdb0cdc-412f-11e8-8c73-64006a4fef6c', '1373cf04-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.013.01.1.2', 'Peraturan terkait administrasi imbal jasa dan kesejahteraan karyawan diidentifikasi sesuai kebutuhan', 'Mengidentifikasi peraturan terkait administrasi imbal jasa dan kesejahteraan karyawan sesuai kebutuhan', 'Super Admin', '2018-04-16 11:36:11', NULL, NULL, '1'),
('b0751580-414b-11e8-8c73-64006a4fef6c', '8d035db9-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.001.01.1.1', 'Target dan pedoman penyusunan RKAT kantor cabang dipahami sesuai dengan informasi dari kantor pusat', 'Memahami target dan pedoman penyusunan RKAT kantor cabang sesuai dengan informasi dari kantor pusat', 'Super Admin', '2018-04-16 14:56:39', NULL, NULL, '1'),
('b1294eaa-41ff-11e8-8c73-64006a4fef6c', 'ebb302d6-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.4.1', 'Dokumen presentasi disiapkan dengan mempertimbangkan teknik presentasi yang efektif dan efisien', 'Menyiapkan dokumen presentasi dengan mempertimbangkan teknik presentasi yang efektif dan efisien', 'Super Admin', '2018-04-17 12:25:10', NULL, NULL, '1'),
('b23f69d5-415a-11e8-8c73-64006a4fef6c', '67551862-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.4.1', 'Rekap pembayaran BUBM yang diperoleh dipastikan ketepatannya', 'Memastikan ketepatan rekap pembayaran BUBM yang diperoleh', 'Super Admin', '2018-04-16 16:44:04', NULL, NULL, '1'),
('b2459e54-4131-11e8-8c73-64006a4fef6c', '87db6a4f-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.017.01.3.2', 'Hasil keputusan pemberian penghargaan dan atau sanksi dicatat dalam data administrasi karyawan', 'Mencatat hasil keputusan pemberian penghargaan dan atau sanksi dalam data administrasi karyawan', 'Super Admin', '2018-04-16 11:50:35', NULL, NULL, '1'),
('b2881024-3bc1-11e8-806f-64006a4fef6c', 'a15b3530-3b34-11e8-806f-64006a4fef6c', 'JSN.HC.001.01.2.1', 'Rekapitulasi kebutuhan karyawan diklarifikasi dengan pihak terkait', 'Mengklarifikasi rekapitulasi kebutuhan karyawan dengan pihak terkait', 'Super Admin', '2018-04-09 13:46:18', 'Super Admin', '2018-04-16 11:17:30', '1'),
('b34b758a-41f9-11e8-8c73-64006a4fef6c', 'f4e5a08a-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.008.01.2.1', 'Live update software anti virus  dijalankan sesuai dengan pedoman yang berlaku', 'Menjalankan live update software anti virus sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:42:16', NULL, NULL, '1'),
('b41f66ae-4206-11e8-8c73-64006a4fef6c', '5c1225e3-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.002.01.3.3', 'Kegiatan penyimpanan arsip dilaporkan secara berkala kepada pihak terkait', 'Melaporkan secara berkala kegiatan penyimpanan arsip kepada pihak terkait', 'Super Admin', '2018-04-17 13:15:21', NULL, NULL, '1'),
('b4d26cae-4164-11e8-8c73-64006a4fef6c', 'ca6af1f8-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.001.01.3.6', 'Pengaduan yang memerlukan proses lanjutan dimonitor sesuai ketentuan yang berlaku', 'Memonitor pengaduan yang memerlukan proses lanjutan sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 17:55:43', NULL, NULL, '1'),
('b4de50a9-41e9-11e8-8c73-64006a4fef6c', 'd69b17b5-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.1.5', 'Kode iuran untuk pembayaran iuran pertama dipastikan ketepatannya melalui website BPJS Ketenagakerjaan', 'Memastikan ketepatan kode iuran untuk pembayaran iuran pertama melalui website BPJS Ketenagakerjaan', 'Super Admin', '2018-04-17 09:47:47', NULL, NULL, '1'),
('b503fcff-41f8-11e8-8c73-64006a4fef6c', 'dac9922d-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.2.2', 'Komputer yang terinfeksi virus jaringan diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi komputer yang terinfeksi virus jaringan sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:35:10', NULL, NULL, '1'),
('b526b5f2-416c-11e8-8c73-64006a4fef6c', '196ab823-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.3.1', 'Berkas pengajuan laporan kecelakaan kerja tahap pertama disusun sesuai dengan urutan yang berlaku', 'Menyusun berkas pengajuan laporan kecelakaan kerja tahap pertama sesuai dengan urutan yang berlaku', 'Super Admin', '2018-04-16 18:53:00', NULL, NULL, '1'),
('b614dc14-41fd-11e8-8c73-64006a4fef6c', '91bd06b5-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.2.3', 'Sistem keamanan dikonfigurasi untuk membatasi hak akses', 'Mengkonfigurasi sistem keamanan untuk membatasi hak akses', 'Super Admin', '2018-04-17 12:10:59', NULL, NULL, '1'),
('b7128c40-4171-11e8-8c73-64006a4fef6c', 'b6d2068e-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.3.3', 'Agenda pengajuan klaim JP dicetak dan salinan agenda diberikan kepada pihak terkait', 'Mencetak agenda pengajuan klaim JP dan salinan agenda diberikan kepada pihak terkait', 'Super Admin', '2018-04-16 19:28:51', NULL, NULL, '1'),
('b7939896-41e5-11e8-8c73-64006a4fef6c', 'afb0e9cf-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.002.01.1.2', 'Tata cara pendaftaran kepesertaan program jaminan sosial ketenagakerjaan melalui kantor cabang BPJS Ketenagakerjaan dijelaskan kepada calon peserta sesuai ketentuan dan peraturan yang berlaku', 'Menjelaskan tata cara pendaftaran kepesertaan program jaminan sosial ketenagakerjaan melalui kantor cabang BPJS Ketenagakerjaan kepada calon peserta sesuai ketentuan dan peraturan yang berlaku', 'Super Admin', '2018-04-17 09:19:14', NULL, NULL, '1'),
('b8241f01-4172-11e8-8c73-64006a4fef6c', 'ee1f63d8-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.3.1', 'Konfirmasi penerima manfaat JP diagenda melalui sistem aplikasi', 'Mengagenda konfirmasi penerima manfaat JP melalui sistem aplikasi', 'Super Admin', '2018-04-16 19:36:02', NULL, NULL, '1'),
('b847dcc7-41f6-11e8-8c73-64006a4fef6c', 'a76f4201-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.2.4', 'Data yang hilang akibat partisi table rusak dapat dikembalikan lagi dengan menggunakan software', 'Mengembalikan data yang hilang akibat partisi table rusak dengan menggunakan software', 'Super Admin', '2018-04-17 11:20:56', NULL, NULL, '1'),
('b9a744bd-41fb-11e8-8c73-64006a4fef6c', '5c29d8de-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.3.1', 'Jalur lalulintas serta pengaruhnya terhadap prosesor, piranti masukan dan keluaran, diprediksi untuk kebutuhan saat ini dan masa yang akan datang', 'Memprediksi jalur lalulintas serta pengaruhnya terhadap prosesor, piranti masukan dan keluaran, untuk kebutuhan saat ini dan masa yang akan datang', 'Super Admin', '2018-04-17 11:56:46', NULL, NULL, '1'),
('ba0a6d74-416e-11e8-8c73-64006a4fef6c', '5c83dba0-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.3.2', 'Pengajuan klaim JKM diagenda melalui sistem aplikasi', 'Mengagenda pengajuan klaim JKM melalui sistem aplikasi', 'Super Admin', '2018-04-16 19:07:27', NULL, NULL, '1'),
('bb448510-41f3-11e8-8c73-64006a4fef6c', '20c91d71-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.3.2', 'Daftar prioritas perawatan dikoordinasikan dengan user', 'Mengkoordinasikan daftar prioritas perawatan dengan user', 'Super Admin', '2018-04-17 10:59:33', NULL, NULL, '1'),
('bbf437fb-414e-11e8-8c73-64006a4fef6c', 'de069029-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.007.01.3.2', 'Penerimaan pendapatan lain dibukukan ke dalam aplikasi keuangan', 'Membukukan penerimaan pendapatan lain ke dalam aplikasi keuangan', 'Super Admin', '2018-04-16 15:18:26', NULL, NULL, '1'),
('bcda91fd-4130-11e8-8c73-64006a4fef6c', '57440667-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.016.01.3.3', 'Hasil pembaharuan data karyawan disampaikan ke Kantor Pusat dalam format yang sesuai ketentuan yang berlaku', 'Menyampaikan hasil pembaharuan data karyawan ke Kantor Pusat dalam format sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:43:43', NULL, NULL, '1'),
('bce919d9-4205-11e8-8c73-64006a4fef6c', '4b06dd4c-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.002.01.1.2', 'Peralatan kantor yang relevan diidentifikasi sesuai dengan pedoman administrasi yang berlaku', 'Mengidentifikasi peralatan kantor yang relevan sesuai dengan pedoman administrasi yang berlaku', 'Super Admin', '2018-04-17 13:08:27', NULL, NULL, '1'),
('bd28d75a-41fa-11e8-8c73-64006a4fef6c', '186f6185-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.009.01.3.2', 'Laporan penyelesaian masalah dibuat sesuai ketentuan yang berlaku', 'Membuat laporan penyelesaian masalah sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-17 11:49:43', NULL, NULL, '1'),
('bd371b01-414a-11e8-8c73-64006a4fef6c', '031a4630-3e43-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.2.2', 'Daftar inventaris ruangan dibuat sesuai dengan jumlah barang dan lokasi barang berada', 'Membuat daftar inventaris ruangan sesuai dengan jumlah barang dan lokasi barang berada', 'Super Admin', '2018-04-16 14:49:50', NULL, NULL, '1'),
('bd515a5c-4168-11e8-8c73-64006a4fef6c', 'f6a2b153-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.3.2', 'Pengajuan diagenda melalui sistem aplikasi', 'Mengagenda pengajuan melalui sistem aplikasi', 'Super Admin', '2018-04-16 18:24:36', NULL, NULL, '1'),
('bd54777c-412e-11e8-8c73-64006a4fef6c', 'f1a4f998-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.010.01.1.1', 'Jenis data penilaian kinerja yang akan dikumpulkan diidentifikasi sesuai ketentuan yang berlaku', 'Mengidentifikasi jenis data penilaian kinerja yang akan dikumpulkan sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:29:25', NULL, NULL, '1'),
('bd6aad0f-416d-11e8-8c73-64006a4fef6c', '3af01477-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.3.2', 'Dokumen laporan kecelakaan kerja tahap kedua diterima sesuai dengan ketentuan yang berlaku', 'Menerima dokumen laporan kecelakaan kerja tahap kedua sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 19:00:23', NULL, NULL, '1'),
('bdd259fa-412f-11e8-8c73-64006a4fef6c', '1373cf04-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.013.01.1.3', 'Data penerima imbal jasa diidentifikasi sesuai ketentuan yang berlaku', 'Mengidentifikasi data penerima imbal jasa sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:36:35', NULL, NULL, '1'),
('bddff9a3-414b-11e8-8c73-64006a4fef6c', '8d035db9-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.001.01.1.2', 'Data target dan anggaran kantor cabang diinformasikan ke masing-masing bidang', 'Menginformasikan data target dan anggaran kantor cabang ke masing-masing bidang', 'Super Admin', '2018-04-16 14:57:01', NULL, NULL, '1'),
('bdf70ca6-41ff-11e8-8c73-64006a4fef6c', 'ebb302d6-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.4.2', 'Dokumen presentasi dibuat dengan jelas dan tepat sasaran', 'Membuat dokumen presentasi dengan jelas dan tepat sasaran', 'Super Admin', '2018-04-17 12:25:31', NULL, NULL, '1'),
('be2fbd92-41f4-11e8-8c73-64006a4fef6c', '3ae0498f-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.003.01.3.3', 'Troubleshooting dilakukan sesuai prosedur Installation Manual', 'Melakukan troubleshooting sesuai prosedur Installation Manual', 'Super Admin', '2018-04-17 11:06:47', NULL, NULL, '1'),
('be5468c8-41fc-11e8-8c73-64006a4fef6c', '67cb572b-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.2.4', 'Rekapitulasi perangkat lunak yang tidak legal dilaporkan kepada pihak terkait sesuai dengan format yang telah ditetapkan', 'Melaporkan rekapitulasi perangkat lunak yang tidak legal kepada pihak terkait sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 12:04:03', NULL, NULL, '1'),
('bedef693-4131-11e8-8c73-64006a4fef6c', '87db6a4f-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.017.01.3.3', 'Dokumen pemberian penghargaan dan atau sanksi diarsipkan dalam bentuk sesuai dengan ketentuan yang berlaku', 'Mengarsipkan dokumen pemberian penghargaan dan atau sanksi dalam bentuk sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:50:56', NULL, NULL, '1'),
('bf174247-41fe-11e8-8c73-64006a4fef6c', '9e7969fc-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.1.1', 'Dokumen yang diperlukan diidentifikasi sesuai kebutuhan', 'Mengidentifikasi dokumen yang diperlukan sesuai kebutuhan', 'Super Admin', '2018-04-17 12:18:24', NULL, NULL, '1'),
('c1d654f0-41f9-11e8-8c73-64006a4fef6c', 'f4e5a08a-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.008.01.2.2', 'Software anti virus dijalankan secara Auto-Protect, Script Blocking dan Worm Blocking', 'Menjalankan software anti virus secara Auto-Protect, Script Blocking dan Worm Blocking', 'Super Admin', '2018-04-17 11:42:41', NULL, NULL, '1'),
('c282f462-41f2-11e8-8c73-64006a4fef6c', '86a7bd1c-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.2.3', 'Perhitungan iuran dilakukan atas data tenaga kerja dan iuran yang diterima', 'Melakukan perhitungan iuran atas data tenaga kerja dan iuran yang diterima', 'Super Admin', '2018-04-17 10:52:35', NULL, NULL, '1'),
('c2d4186a-415f-11e8-8c73-64006a4fef6c', '9b6bda56-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.1.1', 'Data untuk rekonsiliasi pajak disiapkan sesuai dengan format yang telah ditetapkan', 'Menyiapkan data untuk rekonsiliasi pajak sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-16 17:20:19', NULL, NULL, '1'),
('c411e41d-41f8-11e8-8c73-64006a4fef6c', 'dac9922d-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.2.3', 'Virus pada komputer jaringan diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi virus pada komputer jaringan sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:35:35', NULL, NULL, '1'),
('c489d370-416e-11e8-8c73-64006a4fef6c', '5c83dba0-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.3.3', 'Agenda pengajuan klaim JKM dicetak', 'Mencetak agenda pengajuan klaim JKM ', 'Super Admin', '2018-04-16 19:07:45', NULL, NULL, '1'),
('c4ca7897-416c-11e8-8c73-64006a4fef6c', '196ab823-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.3.2', 'Dokumen laporan kecelakaan kerja tahap pertama yang telah sesuai dengan persyaratan pada formulir kendali diterima oleh pihak terkait', 'Menerima dokumen laporan kecelakaan kerja tahap pertama yang telah sesuai dengan persyaratan pada formulir kendali oleh pihak terkait', 'Super Admin', '2018-04-16 18:53:26', NULL, NULL, '1'),
('c4ed6933-41f5-11e8-8c73-64006a4fef6c', '8f420c03-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.004.01.2.1', 'Ketersediaan anggaran untuk memenuhi kebutuhan sarana teknologi informasi diidentifikasi sesuai dengan pedoman yang telah ditetapkan', 'Mengidentifikasi ketersediaan anggaran untuk memenuhi kebutuhan sarana teknologi informasi sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 11:14:08', NULL, NULL, '1'),
('c58c2ad5-3bb6-11e8-806f-64006a4fef6c', '930e6e04-3b34-11e8-806f-64006a4fef6c', 'JSN.HC.001.01.1.2', 'Peraturan terkait pemenuhan kebutuhan karyawan disiapkan untuk menjadi pedoman', 'Menyiapkan peraturan terkait pemenuhan kebutuhan karyawan untuk menjadi pedoman.', 'Super Admin', '2018-04-09 12:28:05', 'Super Admin', '2018-04-16 11:07:40', '1'),
('c63f4fc2-4171-11e8-8c73-64006a4fef6c', 'b6d2068e-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.3.4', 'Berkas pengajuan JP beserta data pendukung lainnya diserahkan kepada petugas terkait', 'Menyerahkan berkas pengajuan JP beserta data pendukung lainnya kepada petugas terkait', 'Super Admin', '2018-04-16 19:29:16', NULL, NULL, '1'),
('c6900930-4172-11e8-8c73-64006a4fef6c', 'ee1f63d8-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.3.2', 'Agenda konfirmasi penerima manfaat JP dicetak dan salinan agenda diberikan kepada pihak terkait', 'Mencetak agenda konfirmasi penerima manfaat JP dan salinan agenda diberikan kepada pihak terkait', 'Super Admin', '2018-04-16 19:36:26', NULL, NULL, '1'),
('c69cc7b3-4158-11e8-8c73-64006a4fef6c', '2b88fe6a-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.010.01.1.2', 'Dokumen pengajuan pembayaran jaminan divalidasi sesuai dengan ketentuan yang berlaku', 'Memvalidasi dokumen pengajuan pembayaran jaminan sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 16:30:19', NULL, NULL, '1'),
('c6b3f231-41e8-11e8-8c73-64006a4fef6c', 'c3a7d07a-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.002.01.3.2', 'Kertas kerja rekonsiliasi diserahkan untuk ditandatangani oleh pihak terkait', 'Menyerahkan kertas kerb rekonsiliasi untuk ditandatangani oleh pihak terkait', 'Super Admin', '2018-04-17 09:41:08', NULL, NULL, '1'),
('c8186355-4206-11e8-8c73-64006a4fef6c', '5c1225e3-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.002.01.3.4', 'Informasi tentang tata kelola penyimpanan arsip yang terbaru diakses dari berbagai sumber', 'Mengakses informasi tentang tata kelola penyimpanan arsip yang terbaru dari berbagai sumber', 'Super Admin', '2018-04-17 13:15:55', NULL, NULL, '1'),
('c96655c3-415b-11e8-8c73-64006a4fef6c', '7d14b6a4-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.1.1', 'Aplikasi keuangan yang digunakan dipastikan dapat beroperasi sesuai dengan fungsinya', 'Memastikan aplikasi keuangan yang digunakan dapat beroperasi sesuai dengan fungsinya', 'Super Admin', '2018-04-16 16:51:52', 'Super Admin', '2018-04-16 19:53:33', '1'),
('c9e951ff-4170-11e8-8c73-64006a4fef6c', 'a12a1e95-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.1.1', 'Aplikasi BPJS Ketenagakerjaan Program JP dipastikan kesiapannya', 'Memastikan kesiapan aplikasi BPJS Ketenagakerjaan Program JP', 'Super Admin', '2018-04-16 19:22:13', NULL, NULL, '1'),
('ca4101c8-41e9-11e8-8c73-64006a4fef6c', 'dfa7291d-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.2.1', 'Peserta yang telah terdaftar diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi peserta yang telah terdaftar sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 09:48:23', NULL, NULL, '1'),
('cb443412-414b-11e8-8c73-64006a4fef6c', '8d035db9-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.001.01.1.3', 'Kebutuhan anggaran sesuai format yang telah ditentukan diserahkan kepada masing – masing bidang', 'Menyerahkan kebutuhan anggaran sesuai format yang telah ditentukan kepada masing – masing bidang', 'Super Admin', '2018-04-16 14:57:24', NULL, NULL, '1'),
('cb85954f-41ff-11e8-8c73-64006a4fef6c', 'ebb302d6-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.4.3', 'Dokumen pendukung disiapkan sesuai dengan kebutuhan', 'Menyiapkan dokumen pendukung sesuai dengan kebutuhan', 'Super Admin', '2018-04-17 12:25:54', NULL, NULL, '1'),
('cbcc0ad9-41f7-11e8-8c73-64006a4fef6c', 'bc39ae08-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.006.01.1.3', 'Log-sheet/report-sheet disiapkan sesuai dengan format yang telah ditetapkan', 'Menyiapkan log-sheet/report-sheet sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 11:28:39', NULL, NULL, '1'),
('cc68a49b-414a-11e8-8c73-64006a4fef6c', '031a4630-3e43-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.2.3', 'Mutasi barang dimonitor sesuai lokasi perpindahan barang mengacu pada pedoman pengelolaan aset yang berlaku', 'Memonitor mutasi barang sesuai lokasi perpindahan barang mengacu pada pedoman pengelolaan aset yang berlaku', 'Super Admin', '2018-04-16 14:50:16', NULL, NULL, '1'),
('cc72165e-41fa-11e8-8c73-64006a4fef6c', '186f6185-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.009.01.3.', 'Laporan penyelesaian masalah disampaikan kepada unit kerja terkait', 'Menyampaikan laporan penyelesaian masalah kepada unit kerja terkait', 'Super Admin', '2018-04-17 11:50:08', NULL, NULL, '1'),
('cca7d4e4-41e5-11e8-8c73-64006a4fef6c', 'afb0e9cf-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.002.01.1.3', 'Tata cara pendaftaran kepesertaan program jaminan sosial ketenagakerjaan melalui saluran elektronik dijelaskan kepada calon peserta dengan berpedoman pada ketentuan dan peraturan yang berlaku', 'Menjelaskan tata cara pendaftaran kepesertaan program jaminan sosial ketenagakerjaan melalui saluran elektronik kepada calon peserta dengan berpedoman pada ketentuan dan peraturan yang berlaku', 'Super Admin', '2018-04-17 09:19:49', NULL, NULL, '1'),
('ccd7613e-41f3-11e8-8c73-64006a4fef6c', '20c91d71-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.3.3', 'Kebutuhan perawatan setiap perangkat diidentifikasi sesuai dengan kondisinya', 'Mengidentifikasi kebutuhan perawatan setiap perangkat sesuai dengan kondisinya', 'Super Admin', '2018-04-17 11:00:02', NULL, NULL, '1'),
('cd0189ea-4205-11e8-8c73-64006a4fef6c', '4b06dd4c-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.002.01.1.3', 'Disfungsi peralatan kantor yang ada ditindaklanjuti sesuai dengan ketentuan yang berlaku', 'Menindaklanjuti disfungsi peralatan kantor yang ada sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 13:08:54', NULL, NULL, '1'),
('cd6edc20-41eb-11e8-8c73-64006a4fef6c', 'f7e99c24-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.1.4', 'Daftar usulan penerbitan kartu peserta dan sertifikasi dipastikan telah disetujui oleh calon peserta', 'Memastikan daftar usulan penerbitan kartu peserta dan sertifikasi telah disetujui oleh calon peserta', 'Super Admin', '2018-04-17 10:02:47', NULL, NULL, '1'),
('cd7be85e-416d-11e8-8c73-64006a4fef6c', '3af01477-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.3.3', 'Dokumen laporan kecelakaan kerja tahap kedua diagenda melalui sistem aplikasi', 'Mengagenda dokumen laporan kecelakaan kerja tahap kedua melalui sistem aplikasi', 'Super Admin', '2018-04-16 19:00:50', NULL, NULL, '1'),
('cdaa7b9c-412f-11e8-8c73-64006a4fef6c', '1373cf04-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.013.01.1.4', 'Alat, bahan dan aplikasi data administrasi imbal jasa karyawan disiapkan sesuai pedoman yang telah ditetapkan', 'Menyiapkan alat, bahan dan aplikasi data administrasi imbal jasa karyawan sesuai pedoman yang telah ditetapkan', 'Super Admin', '2018-04-16 11:37:01', NULL, NULL, '1'),
('cdaba5f6-41fe-11e8-8c73-64006a4fef6c', '9e7969fc-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.1.2', 'Informasi dari bagian atau unit kerja lain diidentifikasi sesuai kebutuhan', 'Mengidentifikasi informasi dari bagian atau unit kerja lain sesuai kebutuhan', 'Super Admin', '2018-04-17 12:18:48', NULL, NULL, '1'),
('ce4a22bd-412e-11e8-8c73-64006a4fef6c', 'f1a4f998-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.010.01.1.2', 'Pihak yang relevan dalam pengumpulan data penilaian kinerja individu diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi pihak yang relevan dalam pengumpulan data penilaian kinerja individu sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-16 11:29:53', NULL, NULL, '1'),
('ceb0a070-414e-11e8-8c73-64006a4fef6c', 'de069029-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.007.01.3.3', 'Pendapatan lain yang telah dibukukan pada aplikasi keuangan divalidasi sesuai ketentuan yang berlaku', 'Memvalidasi pendapatan lain yang telah dibukukan pada aplikasi keuangan sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 15:18:58', NULL, NULL, '1'),
('cef96c5c-41fb-11e8-8c73-64006a4fef6c', '5c29d8de-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.3.2', 'Desain diukur berdasarkan volume lalu lintas yang diharapkan', 'Mengukur desain berdasarkan volume lalu lintas yang diharapkan', 'Super Admin', '2018-04-17 11:57:22', NULL, NULL, '1'),
('d0352808-416e-11e8-8c73-64006a4fef6c', '5c83dba0-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.3.4', 'Salinan agenda diberikan kepada tenaga kerja atau ahli waris sebagai tanda bukti', 'Memberikan salinan agenda kepada tenaga kerja atau ahli waris sebagai tanda bukti', 'Super Admin', '2018-04-16 19:08:04', NULL, NULL, '1'),
('d0f3f1ee-416c-11e8-8c73-64006a4fef6c', '196ab823-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.3.3', 'Dokumen laporan kecelakaan kerja tahap pertama diagenda melalui sistem aplikasi', 'Mengagenda dokumen laporan kecelakaan kerja tahap pertama melalui sistem aplikasi', 'Super Admin', '2018-04-16 18:53:47', NULL, NULL, '1'),
('d238a108-4130-11e8-8c73-64006a4fef6c', '7782c43c-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.017.01.1.1', 'Jenis penghargaan atau sanksi diidentifikasi sesuai ketentuan yang berlaku', 'Mengidentifikasi jenis penghargaan atau sanksi sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:44:19', NULL, NULL, '1'),
('d2da6d23-4131-11e8-8c73-64006a4fef6c', '986d2957-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.022.01.1.1', 'Bahan sosialisasi Hubungan Industrial disiapkan sesuai dengan peraturan perundangan yang berlaku ', 'Menyiapkan bahan sosialisasi Hubungan Industrial sesuai dengan peraturan perundangan yang berlaku ', 'Super Admin', '2018-04-16 11:51:29', NULL, NULL, '1'),
('d3179512-41fd-11e8-8c73-64006a4fef6c', '981b985e-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.3.1', 'Layanan antrian ditetapkan urutan prioritasnya berdasarkan pedoman yang telah ditetapkan', 'Menetapkan layanan antrian urutan prioritasnya berdasarkan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 12:11:48', NULL, NULL, '1'),
('d399fea5-4155-11e8-8c73-64006a4fef6c', '11801bec-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.009.01.1.1', 'Data tentang pemisahan dana disiapkan sesuai dengan format yang telah ditetapkan', 'Menyiapkan data tentang pemisahan dana sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-16 16:09:12', NULL, NULL, '1'),
('d3aaee65-415f-11e8-8c73-64006a4fef6c', '9b6bda56-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.1.2', 'Kewajiban perpajakan atas transaksi keuangan kantor cabang diidentifikasi pada aplikasi keuangan', 'Mengidentifikasi kewajiban perpajakan atas transaksi keuangan kantor cabang pada aplikasi keuangan', 'Super Admin', '2018-04-16 17:20:48', NULL, NULL, '1'),
('d3e18b91-41f2-11e8-8c73-64006a4fef6c', '86a7bd1c-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.2.4', 'Formulir pendaftaran diunduh untuk ditandatangani oleh peserta', 'Mengunduh formulir pendaftaran untuk ditandatangani oleh peserta', 'Super Admin', '2018-04-17 10:53:05', NULL, NULL, '1'),
('d4c080dd-41f6-11e8-8c73-64006a4fef6c', 'aefe1d72-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.3.1', 'Data yang terhapus akibat delete dapat identifikasi kembali', 'Mengidentifikasi data yang terhapus akibat delete', 'Super Admin', '2018-04-17 11:21:44', NULL, NULL, '1'),
('d511ffa4-4159-11e8-8c73-64006a4fef6c', '50e7b3e2-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.1.1', 'Dokumen pembayaran BUBM diterima sesuai ketentuan yang berlaku', 'Menerima dokumen pembayaran BUBM sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 16:37:53', NULL, NULL, '1'),
('d5da452c-41f1-11e8-8c73-64006a4fef6c', '54ef9f78-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.005.01.2.3', 'Usulan kerjasama dinegosiasikan dengan calon mitra untuk mendapatkan komitmen', 'Menegosiasikan usulan kerjasama dengan calon mitra untuk mendapatkan komitmen', 'Super Admin', '2018-04-17 10:45:58', NULL, NULL, '1'),
('d5fb2164-41e8-11e8-8c73-64006a4fef6c', 'c3a7d07a-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.002.01.3.3', 'Iuran yang dibayarkan diverifikasi sesuai dengan ketentuan yang berlaku', 'Memverifikasi iuran yang dibayarkan sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 09:41:33', NULL, NULL, '1'),
('d603b4c1-41f9-11e8-8c73-64006a4fef6c', 'f4e5a08a-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.008.01.2.3', 'File attachment melalui email dan file yang ditransfer melalui instant messenger di-scaning sesuai dengan pedoman yang berlaku', 'Men-scanning file attachment melalui email dan file yang ditransfer melalui instant messenger sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:43:15', NULL, NULL, '1'),
('d69011f9-4168-11e8-8c73-64006a4fef6c', 'f6a2b153-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.3.3', 'Agenda pengajuan dicetak dan salinan agenda diberikan kepada tenaga kerja atau pengurus perusahaan sebagai tanda terima sebagai arsip perusahaan', 'Mencetak agenda pengajuan dan salinan agenda diberikan kepada tenaga kerja atau pengurus perusahaan sebagai tanda terima sebagai arsip perusahaan', 'Super Admin', '2018-04-16 18:25:18', NULL, NULL, '1'),
('d7351398-41f5-11e8-8c73-64006a4fef6c', '8f420c03-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.004.01.2.2', 'Dokumen administrasi pemenuhan kebutuhan sarana teknologi informasi dibuat sesuai dengan format yang telah ditetapkan', 'Membuat dokumen administrasi pemenuhan kebutuhan sarana teknologi informasi sesuai dengan format yang telah ditetapkan', 'Super Admin', '2018-04-17 11:14:39', NULL, NULL, '1'),
('d920da71-41ed-11e8-8c73-64006a4fef6c', '12d4ca19-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.4.1', 'Proses input data kepesertaan dan penerimaan iuran dipastikan ketepatannya', 'Memastikan ketepatan proses input data kepesertaan dan penerimaan iuran', 'Super Admin', '2018-04-17 10:17:26', NULL, NULL, '1'),
('d927292e-4158-11e8-8c73-64006a4fef6c', '32e652f9-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.010.01.2.1', 'Proses penyelesaian pembayaran jaminan pada aplikasi keuangan dilakukan sesuai tahapan yang ditentukan', 'Melakukan proses penyelesaian pembayaran jaminan pada aplikasi keuangan sesuai tahapan yang ditentukan', 'Super Admin', '2018-04-16 16:30:50', NULL, NULL, '1'),
('da476502-41fe-11e8-8c73-64006a4fef6c', '9e7969fc-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.1.3', 'Isu penting dianalisis sesuai konteks masing-masing unit kerja', 'Menganalisis isu penting sesuai konteks masing-masing unit kerja', 'Super Admin', '2018-04-17 12:19:09', NULL, NULL, '1'),
('db1d812b-416d-11e8-8c73-64006a4fef6c', '3af01477-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.3.4', 'Tanda bukti pelaporan kecelakaan kerja tahap kedua disampaikan kepada pihak pelapor sesuai ketentuan yang berlaku', 'Menyampaikan tanda bukti pelaporan kecelakaan kerja tahap kedua kepada pihak pelapor sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 19:01:13', NULL, NULL, '1'),
('db39f706-416e-11e8-8c73-64006a4fef6c', '5c83dba0-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.022.01.3.5', 'Berkas pengajuan klaim JKM diserahkan kepada petugas terkait', 'Menyerahkan berkas pengajuan klaim JKM kepada petugas terkait', 'Super Admin', '2018-04-16 19:08:23', NULL, NULL, '1'),
('dca66f0b-416c-11e8-8c73-64006a4fef6c', '196ab823-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.3.4', 'Agenda laporan kecelakaan kerja tahap pertama dicetak sesuai tahapan yang berlaku', 'Mencetak agenda laporan kecelakaan kerja tahap pertama sesuai tahapan yang berlaku', 'Super Admin', '2018-04-16 18:54:06', NULL, NULL, '1'),
('dcd76ef2-412e-11e8-8c73-64006a4fef6c', 'f1a4f998-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.010.01.1.3', 'Peraturan terkait pengumpulan data penilaian kinerja individu di akses dari sumber yang relevan untuk menjadi pedoman', 'Mengakses peraturan terkait pengumpulan data penilaian kinerja individu dari sumber yang relevan untuk menjadi pedoman', 'Super Admin', '2018-04-16 11:30:17', NULL, NULL, '1'),
('dd15d5d0-41f3-11e8-8c73-64006a4fef6c', '20c91d71-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.3.4', 'Jadwal perawatan dibuat berdasarkan kondisi peralatan dan tenaga kerja yang ada', 'Membuat jadwal perawatan berdasarkan kondisi peralatan dan tenaga kerja yang ada', 'Super Admin', '2018-04-17 11:00:30', NULL, NULL, '1'),
('dd596f40-41fb-11e8-8c73-64006a4fef6c', '5c29d8de-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.3.3', 'Profil kinerja dan pengaruhnya pada sistem lain diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi profil kinerja dan pengaruhnya pada sistem lain sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:57:46', NULL, NULL, '1'),
('ddda7ed2-4130-11e8-8c73-64006a4fef6c', '7782c43c-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.017.01.1.2', 'Peraturan terkait penghargaan dan sanksi karyawan diidentifikasi untuk menjadi pedoman', 'Mengidentifikasi peraturan terkait penghargaan dan sanksi karyawan untuk menjadi pedoman', 'Super Admin', '2018-04-16 11:44:38', NULL, NULL, '1'),
('de0ff213-41e9-11e8-8c73-64006a4fef6c', 'dfa7291d-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.2.2', 'Input data identitas diri peserta divalidasi ketepatannya berdasarkan ketentuan yang berlaku', 'Memvalidasi ketepatan input data identitas diri peserta berdasarkan ketentuan yang berlaku', 'Super Admin', '2018-04-17 09:48:56', NULL, NULL, '1'),
('de410230-41f7-11e8-8c73-64006a4fef6c', 'c2daa0d5-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.006.01.2.1', 'Software anti virus dijalankan sesuai dengan pedoman yang berlaku', 'Menjalankan software anti virus sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:29:10', NULL, NULL, '1'),
('df3ef8a3-414b-11e8-8c73-64006a4fef6c', '971b8a53-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.001.01.2.1', 'Hasil isian sesuai format yang telah ditentukan dari masing – masing bidang, diterima sesuai dengan ketentuan yang berlaku', 'Menerima hasil isian sesuai format yang telah ditentukan dari masing – masing bidang, sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 14:57:57', NULL, NULL, '1'),
('df89896c-412f-11e8-8c73-64006a4fef6c', '1a28043d-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.013.01.2.1', 'Perhitungan imbal jasa dilakukan sesuai ketentuan yang berlaku', 'Melakukan perhitungan imbal jasa sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:37:31', NULL, NULL, '1'),
('df9ca071-41f8-11e8-8c73-64006a4fef6c', 'dac9922d-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.007.01.2.4', 'Virus pada komputer jaringan dibersihkan sesuai dengan pedoman yang berlaku', 'Membersihkan virus pada komputer jaringan sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:36:21', NULL, NULL, '1'),
('dfd52a4c-414a-11e8-8c73-64006a4fef6c', '031a4630-3e43-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.2.4', 'Mutasi barang diinventaris sesuai lokasi perpindahan barang mengacu pada pedoman pengelolaan aset yang berlaku', 'Menginventarisir mutasi barang sesuai lokasi perpindahan barang mengacu pada pedoman pengelolaan aset yang berlaku', 'Super Admin', '2018-04-16 14:50:48', NULL, NULL, '1'),
('e1bf198d-4155-11e8-8c73-64006a4fef6c', '11801bec-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.009.01.1.2', 'Aplikasi keuangan yang digunakan dipastikan dapat beroperasi sesuai dengan fungsinya', 'Memastikan aplikasi keuangan yang digunakan dapat beroperasi sesuai dengan fungsinya', 'Super Admin', '2018-04-16 16:09:36', NULL, NULL, '1'),
('e2c4f045-41eb-11e8-8c73-64006a4fef6c', '010294af-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.2.1', 'Data kepesertaan diinput di aplikasi kepesertaan sesuai dengan tahapan yang berlaku', 'Menginput data kepesertaan di aplikasi kepesertaan sesuai dengan tahapan yang berlaku', 'Super Admin', '2018-04-17 10:03:23', NULL, NULL, '1'),
('e37ad6e4-4205-11e8-8c73-64006a4fef6c', '54b4c4bf-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.002.01.2.1', 'Dokumen yang akan menjadi arsip dipilah sesuai dengan pedoman yang berlaku', 'Memilah dokumen yang akan menjadi arsip sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 13:09:31', NULL, NULL, '1'),
('e4415711-41f2-11e8-8c73-64006a4fef6c', '86a7bd1c-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.2.5', 'Surat penetapan iuran pertama dan kode iuran dikirimkan kepada peserta', 'Mengirimkan surat penetapan iuran pertama dan kode iuran kepada peserta', 'Super Admin', '2018-04-17 10:53:32', NULL, NULL, '1'),
('e4f76346-4206-11e8-8c73-64006a4fef6c', '6ee18998-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.003.01.1.1', 'Bahan sosialisasi disiapkan dengan mengacu pada ketentuan peraturan perundangan yang berlaku', 'Menyiapkan bahan sosialisasi dengan mengacu pada ketentuan peraturan perundangan yang berlaku', 'Super Admin', '2018-04-17 13:16:43', NULL, NULL, '1'),
('e50d3b4f-4172-11e8-8c73-64006a4fef6c', 'ee1f63d8-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.3.3', 'Status penerima manfaat diverifikasi kebenarannya', 'Memverifikasi kebenaran status penerima manfaat', 'Super Admin', '2018-04-16 19:37:17', NULL, NULL, '1'),
('e526415f-41fd-11e8-8c73-64006a4fef6c', '981b985e-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.3.2', 'Perangkat lunak pengelola sistem jaringan digunakan sesuai dengan pedoman yang berlaku', 'Menggunakan perangkat lunak pengelola sistem jaringan sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 12:12:18', NULL, NULL, '1'),
('e561c7eb-415f-11e8-8c73-64006a4fef6c', '9b6bda56-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.1.3', 'Data yang muncul pada aplikasi dan data kewajiban perpajakan dipastikan kesesuaiannya', 'Memastikan kesesuaian data yang muncul pada aplikasi dan data kewajiban perpajakan', 'Super Admin', '2018-04-16 17:21:17', NULL, NULL, '1'),
('e5974ea0-41f6-11e8-8c73-64006a4fef6c', 'aefe1d72-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.3.2', 'Data yang hilang akibat terformat dapat diidentifikasi kembali', 'Mengidentifikasi data yang hilang akibat terformat', 'Super Admin', '2018-04-17 11:22:12', NULL, NULL, '1'),
('e60ee9ad-4159-11e8-8c73-64006a4fef6c', '50e7b3e2-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.1.2', 'Dokumen diperiksa kelengkapannya sesuai dengan pedoman yang telah ditetapkan', 'Memeriksa dokumen kelengkapannya sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-16 16:38:21', NULL, NULL, '1'),
('e670c211-416d-11e8-8c73-64006a4fef6c', '3af01477-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.3.5', 'Salinan formulir kendali diberikan kepada pihak pelapor', 'Memberikan salinan formulir kendali kepada pihak pelapor', 'Super Admin', '2018-04-16 19:01:32', NULL, NULL, '1'),
('e6811dd5-41e7-11e8-8c73-64006a4fef6c', 'b9e6d882-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.002.01.2.3', 'Data identitas diri dan upah yang telah terverifikasi ditindaklanjuti melalui saluran elektronik atau wadah/kelompok sesuai kelompok kepesertaan', 'Menindaklanjuti data identitas diri dan upah yang telah terverifikasi melalui saluran elektronik atau wadah/kelompok sesuai kelompok kepesertaan', 'Super Admin', '2018-04-17 09:34:51', 'Super Admin', '2018-04-17 09:37:04', '1'),
('e770878b-416c-11e8-8c73-64006a4fef6c', '196ab823-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.3.5', 'Salinan agenda diberikan kepada pihak pelapor', 'Memberikan salinan agenda kepada pihak pelapor', 'Super Admin', '2018-04-16 18:54:24', NULL, NULL, '1'),
('e7eb0a3c-41e5-11e8-8c73-64006a4fef6c', 'afb0e9cf-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.002.01.1.4', 'Formulir pendaftaran kepesertaan program jaminan sosial ketenagakerjaan dijelaskan kepada calon peserta dengan berpedoman pada ketentuan dan peraturan yang berlaku', 'Menjelaskan formulir pendaftaran kepesertaan program jaminan sosial ketenagakerjaan kepada calon peserta dengan berpedoman pada ketentuan dan peraturan yang berlaku', 'Super Admin', '2018-04-17 09:20:35', NULL, NULL, '1'),
('e820a165-3e43-11e8-8647-64006a4fef6c', '8b01a022-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.1.1', 'Lokasi perangkat pada sistem jaringan direncanakan dengan tepat sesuai dengan pedoman yang telah ditetapkan', 'Merencanakan dengan tepat lokasi perangkat pada sistem jaringan sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-12 18:23:21', 'Super Admin', '2018-04-12 18:24:30', '1'),
('e8733395-41e4-11e8-8c73-64006a4fef6c', '948c6f2a-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.001.01.1.2', 'Surat usulan pencarian data potensi dibuat sesuai dengan pedoman yang telah ditetapkan', 'Membuat surat usulan pencarian data potensi sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 09:13:26', NULL, NULL, '1'),
('e8e61001-41fa-11e8-8c73-64006a4fef6c', '3b0b06ed-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.1.1', 'Segmen-segmen sistem yang diusulkan diidentifikasi berdasarkan kebutuhan bisnis', 'Mengidentifikasi segmen-segmen sistem yang diusulkan berdasarkan kebutuhan bisnis', 'Super Admin', '2018-04-17 11:50:56', NULL, NULL, '1'),
('e912878b-41fe-11e8-8c73-64006a4fef6c', '9e7969fc-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.1.4', 'Struktur dan isi dokumen disiapkan sesuai dengan tujuan', 'Menyiapkan struktur dan isi dokumen sesuai dengan tujuan', 'Super Admin', '2018-04-17 12:19:34', NULL, NULL, '1'),
('e98820fd-4167-11e8-8c73-64006a4fef6c', 'e55632f0-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.1.1', 'Aplikasi BPJS Ketenagakerjaan pelayanan administrasi kepesertaan dipastikan kesiapannya', 'Memastikan kesiapan aplikasi BPJS Ketenagakerjaan pelayanan administrasi kepesertaan ', 'Super Admin', '2018-04-16 18:18:40', NULL, NULL, '1'),
('e9d679ab-4168-11e8-8c73-64006a4fef6c', 'f6a2b153-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.3.4', 'Dokumen pengajuan yang telah diagenda diserahkan kepada petugas bidang pemasaran', 'Menyerahkan dokumen pengajuan yang telah diagenda kepada petugas bidang pemasaran', 'Super Admin', '2018-04-16 18:25:50', NULL, NULL, '1'),
('e9f3a4db-412e-11e8-8c73-64006a4fef6c', 'f1a4f998-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.010.01.1.4', 'Jadwal pengumpulan data penilaian kinerja individu diusulkan kepada pihak terkait', 'Mengusulkan jadwal pengumpulan data penilaian kinerja individu kepada pihak terkait', 'Super Admin', '2018-04-16 11:30:39', NULL, NULL, '1'),
('ea54e9ad-4130-11e8-8c73-64006a4fef6c', '7782c43c-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.017.01.1.3', 'Data karyawan yang mendapatkan penghargaan atau sanksi diidentifikasi sesuai peraturan yang berlaku', 'Mengidentifikasi data karyawan yang mendapatkan penghargaan atau sanksi sesuai peraturan yang berlaku', 'Super Admin', '2018-04-16 11:44:59', NULL, NULL, '1'),
('eb10bb7f-41ec-11e8-8c73-64006a4fef6c', '0a1c0eed-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.3.1', 'Nomor kepesertaan diterbitkan sesuai dengan tahapan', 'Menerbitkan nomor kepesertaan sesuai dengan tahapan', 'Super Admin', '2018-04-17 10:10:47', NULL, NULL, '1'),
('eb79eece-412f-11e8-8c73-64006a4fef6c', '1a28043d-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.013.01.2.2', 'Klarifikasi perhitungan pemberian imbal jasa dilakukan dengan pihak terkait', 'Melakukan klarifikasi perhitungan pemberian imbal jasa dengan pihak terkait', 'Super Admin', '2018-04-16 11:37:52', NULL, NULL, '1'),
('eb7d4009-4158-11e8-8c73-64006a4fef6c', '32e652f9-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.010.01.2.2', 'Dokumen perintah bayar yang telah dibuat diverifikasi keakuratannya', 'Memverifikasi keakuratan dokumen perintah bayar yang telah dibuat ', 'Super Admin', '2018-04-16 16:31:21', NULL, NULL, '1'),
('ec2a57e7-4171-11e8-8c73-64006a4fef6c', 'd1fdad5c-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.1.1', 'Aplikasi BPJS Ketenagakerjaan Program JP dipastikan kesiapannya', 'Memastikan kesiapan aplikasi BPJS Ketenagakerjaan Program JP ', 'Super Admin', '2018-04-16 19:30:20', NULL, NULL, '1'),
('ec4903fd-41f7-11e8-8c73-64006a4fef6c', 'c2daa0d5-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.006.01.2.2', 'Troubleshooting dijalankan sesuai pedoman yang berlaku', 'Menjalankan troubleshooting sesuai pedoman yang berlaku', 'Super Admin', '2018-04-17 11:29:33', NULL, NULL, '1'),
('eca3f632-414d-11e8-8c73-64006a4fef6c', 'bd33d0bf-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.005.01.3.2', 'Bukti pembayaran iuran yang telah dicetak divalidasi oleh pihak terkait', 'Memvalidasi bukti pembayaran iuran yang telah dicetak oleh pihak terkait', 'Super Admin', '2018-04-16 15:12:38', NULL, NULL, '1'),
('ed039d31-414b-11e8-8c73-64006a4fef6c', '971b8a53-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.001.01.2.2', 'Kebutuhan masing-masing mata anggaran diidentifikasi berdasarkan realisasi RKAT periode sebelumnya dan target anggaran periode yang akan datang', 'Mengidentifikasi kebutuhan masing-masing mata anggaran berdasarkan realisasi RKAT periode sebelumnya dan target anggaran periode yang akan datang', 'Super Admin', '2018-04-16 14:58:20', NULL, NULL, '1'),
('ed05bc24-41f3-11e8-8c73-64006a4fef6c', '20c91d71-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.001.01.3.5', 'Dokumentasi jadwal kegiatan dibuat sesuai dengan format yang telah ditentukan', 'Membuat dokumentasi jadwal kegiatan sesuai dengan format yang telah ditentukan', 'Super Admin', '2018-04-17 11:00:56', NULL, NULL, '1'),
('ed43fcd2-41f1-11e8-8c73-64006a4fef6c', '5c1adca9-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.005.01.3.1', 'Data kinerja hasil kerjasama dengan mitra diidentifikasi sesuai dengan pedoman yang berlaku', 'Mengidentifikasi data kinerja hasil kerjasama dengan mitra sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 10:46:38', NULL, NULL, '1'),
('ef4d6d59-4149-11e8-8c73-64006a4fef6c', 'fd1fb86c-3e42-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.1.1', 'Rencana tahunan diinventarisasi sesuai kebutuhan', 'Menginventarisir rencana tahunan sesuai kebutuhan', 'Super Admin', '2018-04-16 14:44:05', NULL, NULL, '1');
INSERT INTO `kriteria_unjuk_kerja` (`UUID_KUK`, `UUID_EK`, `NOMOR_KUK`, `PERNYATAAN`, `PERTANYAAN`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('ef4d8794-415e-11e8-8c73-64006a4fef6c', '84be26c0-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.013.01.2.3', 'Pembuatan data lampiran diselesaikan di aplikasi keuangan sesuai dengan tahapan yang berlaku', 'Menyelesaikan pembuatan data lampiran di aplikasi keuangan sesuai dengan tahapan yang berlaku', 'Super Admin', '2018-04-16 17:14:24', NULL, NULL, '1'),
('ef79b9c0-41e8-11e8-8c73-64006a4fef6c', 'd69b17b5-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.1.1', 'Iuran pertama dihitung sesuai dengan ketentuan yang berlaku', 'Menghitung iuran pertama sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-17 09:42:16', NULL, NULL, '1'),
('ef7ddf42-41f9-11e8-8c73-64006a4fef6c', 'f4e5a08a-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.008.01.2.4', 'Sistem yang terpenting diisolasi dari sumber serangan virus yang potensial sesuai dengan pedoman yang berlaku', 'Mengisolasi sistem yang terpenting dari sumber serangan virus yang potensial sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:43:57', NULL, NULL, '1'),
('efb69fab-41fb-11e8-8c73-64006a4fef6c', '6af7477e-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.4.1', 'Ukuran, dukungan dan persyaratan-persyaratan ditetapkan sesuai dengan pedoman yang berlaku', 'Menetapkan ukuran, dukungan dan persyaratan-persyaratan sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 11:58:17', NULL, NULL, '1'),
('f0464b39-41e9-11e8-8c73-64006a4fef6c', 'dfa7291d-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.2.3', 'Perhitungan iuran dilakukan atas data tenaga kerja dan iuran yang diterima', 'Melakukan perhitungan iuran atas data tenaga kerja dan iuran yang diterima', 'Super Admin', '2018-04-17 09:49:27', NULL, NULL, '1'),
('f132dea9-414a-11e8-8c73-64006a4fef6c', '0ae50f22-3e43-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.3.1', 'Daftar aset diadministrasi sesuai standar akuntansi pencatatan aset dalam pedoman pengelolaan aset', 'Mengadministrasi daftar aset sesuai standar akuntansi pencatatan aset dalam pedoman pengelolaan aset', 'Super Admin', '2018-04-16 14:51:18', NULL, NULL, '1'),
('f1da9657-4131-11e8-8c73-64006a4fef6c', '986d2957-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.022.01.1.2', 'Sasaran sosialisasi ditetapkan sesuai kebutuhan', 'Menetapkan sasaran sosialisasi sesuai kebutuhan', 'Super Admin', '2018-04-16 11:52:21', NULL, NULL, '1'),
('f26a7980-416e-11e8-8c73-64006a4fef6c', '6ee5dfe7-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.1.1', 'Aplikasi BPJS Ketenagakerjaan Program JHT dipastikan kesiapannya', 'Memastikan kesiapan aplikasi BPJS Ketenagakerjaan Program JHT', 'Super Admin', '2018-04-16 19:09:02', NULL, NULL, '1'),
('f30bba00-415f-11e8-8c73-64006a4fef6c', '9b6bda56-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.014.01.1.4', 'Rekonsiliasi pajak atas jumlah nominal transaksi dibuat sesuai tahapan yang berlaku', 'Membuat rekonsiliasi pajak atas jumlah nominal transaksi sesuai tahapan yang berlaku', 'Super Admin', '2018-04-16 17:21:40', NULL, NULL, '1'),
('f419cee9-41fd-11e8-8c73-64006a4fef6c', '981b985e-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.012.01.3.3', 'Template dibuat untuk digunakan dalam sistem jaringan', 'Membuat template untuk digunakan dalam sistem jaringan', 'Super Admin', '2018-04-17 12:12:43', NULL, NULL, '1'),
('f44ddf50-416d-11e8-8c73-64006a4fef6c', '3af01477-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.006.01.3.6', 'Berkas pengajuan laporan tahap kedua beserta data pendukung lainnya diserahkan kepada petugas yang terkait', 'Menyerahkan berkas pengajuan laporan tahap kedua beserta data pendukung lainnya kepada petugas yang terkait', 'Super Admin', '2018-04-16 19:01:55', NULL, NULL, '1'),
('f4d370c4-416c-11e8-8c73-64006a4fef6c', '196ab823-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.005.01.3.6', 'Salinan formulir kendali dan daftar persyaratan dokumen pendukung laporan kecelakaan kerja tahap kedua diberikan kepada pihak pelapor', 'Memberikan salinan formulir kendali dan daftar persyaratan dokumen pendukung laporan kecelakaan kerja tahap kedua kepada pihak pelapor', 'Super Admin', '2018-04-16 18:54:47', NULL, NULL, '1'),
('f633ea2b-4155-11e8-8c73-64006a4fef6c', '18749832-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.009.01.2.1', 'Pemisahan dana diverifikasi antara jumlah yang tercatat pada aplikasi keuangan dengan jumlah yang diterima di rekening koran', 'Memverifikasi pemisahan dana antara jumlah yang tercatat pada aplikasi keuangan dengan jumlah yang diterima di rekening koran', 'Super Admin', '2018-04-16 16:10:11', NULL, NULL, '1'),
('f6eb3a18-41fc-11e8-8c73-64006a4fef6c', '7016749c-3e42-11e8-8647-64006a4fef6c', 'JSN.TI.011.01.3.1', 'Prosedur back-up disiapkan sesuai dengan pedoman yang telah ditetapkan', 'Menyiapkan prosedur back-up sesuai dengan pedoman yang telah ditetapkan', 'Super Admin', '2018-04-17 12:05:38', NULL, NULL, '1'),
('f76ca2d8-412f-11e8-8c73-64006a4fef6c', '1a28043d-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.013.01.2.3', 'Rencana jadwal pemberian imbal jasa dibuat sesuai dengan ketentuan yang berlaku', 'Membuat rencana jadwal pemberian imbal jasa sesuai dengan ketentuan yang berlaku', 'Super Admin', '2018-04-16 11:38:12', NULL, NULL, '1'),
('f7d55b17-4205-11e8-8c73-64006a4fef6c', '54b4c4bf-3d98-11e8-806f-64006a4fef6c', 'JSN.UM.002.01.2.2', 'Arsip dinamis disimpan sesuai dengan pedoman yang berlaku', 'Menyimpan arsip dinamis sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-17 13:10:05', NULL, NULL, '1'),
('f8079063-41f6-11e8-8c73-64006a4fef6c', 'aefe1d72-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.005.01.3.3', 'Data yang hilang akibat partisi table rusak dapat diidentifikasi kembali', 'Mengidentifikasi data yang hilang akibat partisi table rusak', 'Super Admin', '2018-04-17 11:22:43', NULL, NULL, '1'),
('f80cfa99-414b-11e8-8c73-64006a4fef6c', '971b8a53-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.001.01.2.3', 'Kebutuhan anggaran direkap berdasarkan kelompok mata anggaran', 'Merekap kebutuhan anggaran berdasarkan kelompok mata anggaran', 'Super Admin', '2018-04-16 14:58:39', NULL, NULL, '1'),
('f88f8aa2-4170-11e8-8c73-64006a4fef6c', 'a12a1e95-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.034.01.1.2', 'Peraturan terkait persyaratan pengajuan JP dipersiapkan untuk menjadi pedoman', 'Menyiapkan peraturan terkait persyaratan pengajuan JP untuk menjadi pedoman', 'Super Admin', '2018-04-16 19:23:31', NULL, NULL, '1'),
('f8c33065-41fa-11e8-8c73-64006a4fef6c', '3b0b06ed-3e40-11e8-8647-64006a4fef6c', 'JSN.TI.010.01.1.2', 'Persyaratan segmen dibuat dengan menggunakan analisis fungsional LAN', 'Membuat persyaratan segmen dengan menggunakan analisis fungsional LAN', 'Super Admin', '2018-04-17 11:51:23', NULL, NULL, '1'),
('f95ee9c6-4159-11e8-8c73-64006a4fef6c', '5836f449-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.011.01.2.1', 'Dokumen pembayaran BUBM diverifikasi sesuai ketentuan yang berlaku', 'Memverifikasi dokumen pembayaran BUBM sesuai ketentuan yang berlaku', 'Super Admin', '2018-04-16 16:38:54', NULL, NULL, '1'),
('f97cfa7c-4130-11e8-8c73-64006a4fef6c', '7f8b5dbf-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.017.01.2.1', 'Perencanaan jadwal pemberian penghargaan dan atau sanksi dipersiapkan sesuai dengan peraturan yang berlaku', 'Menyiapkan perencanaan jadwal pemberian penghargaan dan atau sanksi sesuai dengan peraturan yang berlaku', 'Super Admin', '2018-04-16 11:45:25', NULL, NULL, '1'),
('fabc5c9c-4171-11e8-8c73-64006a4fef6c', 'd1fdad5c-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.040.01.1.2', 'Peraturan terkait persyaratan pengajuan JP dipersiapkan untuk menjadi pedoman', 'Menyiapkan peraturan terkait persyaratan pengajuan JP untuk menjadi pedoman', 'Super Admin', '2018-04-16 19:30:44', NULL, NULL, '1'),
('fb0b7983-41f2-11e8-8c73-64006a4fef6c', '8f333bec-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.019.01.3.1', 'Sertifikat untuk perusahaan dan kartu peserta diserahkan kepada pihak terkait berdasarkan tahapan yang berlaku', 'Menyerahkan sertifikat untuk perusahaan dan kartu peserta kepada pihak terkait berdasarkan tahapan yang berlaku', 'Super Admin', '2018-04-17 10:54:10', NULL, NULL, '1'),
('fbb1b506-414d-11e8-8c73-64006a4fef6c', 'bd33d0bf-3e3c-11e8-8647-64006a4fef6c', 'JSN.KE.005.01.3.3', 'Bukti pembayaran iuran yang telah divalidasi diserahkan kepada pihak terkait', 'Menyerahkan bukti pembayaran iuran yang telah divalidasi kepada pihak terkait', 'Super Admin', '2018-04-16 15:13:04', NULL, NULL, '1'),
('fbd84173-4158-11e8-8c73-64006a4fef6c', '32e652f9-3e3d-11e8-8647-64006a4fef6c', 'JSN.KE.010.01.2.3', 'Instruksi kepada pihak perbankan dibuat sesuai jenis pembayaran', 'Membuat instruksi kepada pihak perbankan sesuai jenis pembayaran', 'Super Admin', '2018-04-16 16:31:49', NULL, NULL, '1'),
('fc1987d4-41ec-11e8-8c73-64006a4fef6c', '0a1c0eed-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.004.01.3.2', 'Sertifikat dan kartu peserta diserahkan kepada pihak terkait', 'Menyerahkan sertifikat dan karate peserta kepada pihak terkait', 'Super Admin', '2018-04-17 10:11:15', NULL, NULL, '1'),
('fcc046f5-4167-11e8-8c73-64006a4fef6c', 'e55632f0-3d99-11e8-806f-64006a4fef6c', 'JSN.PL.004.01.1.2', 'Peraturan terkait persyaratan pengajuan administrasi kepesertaan disiapkan untuk menjadi pedoman', 'Menyiapkan peraturan terkait persyaratan pengajuan administrasi kepesertaan untuk menjadi pedoman', 'Super Admin', '2018-04-16 18:19:13', NULL, NULL, '1'),
('fd140be0-412e-11e8-8c73-64006a4fef6c', 'f8864a69-3e3d-11e8-8647-64006a4fef6c', 'JSN.HC.010.01.2.1', 'Formulir penilaian kinerja individu didistribusikan kepada pihak terkait', 'Mendistribusikan formulir penilaian kinerja individu kepada pihak terkait', 'Super Admin', '2018-04-16 11:31:12', NULL, NULL, '1'),
('fd3f1eb6-41e9-11e8-8c73-64006a4fef6c', 'dfa7291d-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.003.01.2.4', 'Formulir pendaftaran diunduh untuk ditandatangani oleh peserta', 'Mengunduh formulir pendaftaran untuk ditandatangani oleh peserta', 'Super Admin', '2018-04-17 09:49:49', NULL, NULL, '1'),
('fd97a8c5-41f7-11e8-8c73-64006a4fef6c', 'c9adb8a9-3e3f-11e8-8647-64006a4fef6c', 'JSN.TI.006.01.3.1', 'Software anti virus ditutup tanpa kesalahan', 'Menutup software anti virus tanpa kesalahan', 'Super Admin', '2018-04-17 11:30:02', NULL, NULL, '1'),
('fd9f04ba-414a-11e8-8c73-64006a4fef6c', '0ae50f22-3e43-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.3.2', 'Daftar aset dilaporkan kepada pihak terkait sesuai standar akuntansi pencatatan aset dalam pedoman pengelolaan aset yang berlaku', 'Melaporkan daftar aset kepada pihak terkait sesuai standar akuntansi pencatatan aset dalam pedoman pengelolaan aset yang berlaku', 'Super Admin', '2018-04-16 14:51:38', NULL, NULL, '1'),
('fddbb2b2-4131-11e8-8c73-64006a4fef6c', '986d2957-3e3e-11e8-8647-64006a4fef6c', 'JSN.HC.022.01.1.3', 'Media sosialisasi disusun sesuai dengan sasaran sosialisasi', 'Menyusun media sosialisasi sesuai dengan sasaran sosialisasi', 'Super Admin', '2018-04-16 11:52:41', NULL, NULL, '1'),
('fddcb014-416e-11e8-8c73-64006a4fef6c', '6ee5dfe7-3d9a-11e8-806f-64006a4fef6c', 'JSN.PL.026.01.1.2', 'Peraturan terkait persyaratan pengajuan JHT dipersiapkan', 'Menyiapkan peraturan terkait persyaratan pengajuan JHT ', 'Super Admin', '2018-04-16 19:09:21', NULL, NULL, '1'),
('fe8129d8-41f1-11e8-8c73-64006a4fef6c', '5c1adca9-3d99-11e8-806f-64006a4fef6c', 'JSN.PM.005.01.3.2', 'Data kinerja hasil kerjasama dengan mitra dievaluasi menggunakan metodologi analisis yang sesuai', 'Mengevaluasi data kinerja hasil kerjasama dengan mitra menggunakan metodologi analisis yang sesuai', 'Super Admin', '2018-04-17 10:47:07', NULL, NULL, '1'),
('fecf6fc7-41e5-11e8-8c73-64006a4fef6c', 'b9e6d882-3d98-11e8-806f-64006a4fef6c', 'JSN.PM.002.01.2.1', 'Dokumen pendaftaran kepesertaan direkam melalui aplikasi yang sesuai dengan program yang diikuti', 'Merekam dokumen pendaftaran kepesertaan melalui aplikasi yang sesuai dengan program yang diikuti', 'Super Admin', '2018-04-17 09:21:13', NULL, NULL, '1'),
('ff36483a-4149-11e8-8c73-64006a4fef6c', 'fd1fb86c-3e42-11e8-8647-64006a4fef6c', 'JSN.AS.001.01.1.2', 'Jadwal rencana kerja pemenuhan kebutuhan barang dan jasa disusun sesuai dengan pedoman yang berlaku', 'Menyusun jadwal rencana kerja pemenuhan kebutuhan barang dan jasa sesuai dengan pedoman yang berlaku', 'Super Admin', '2018-04-16 14:44:32', NULL, NULL, '1'),
('ff635ddd-41fe-11e8-8c73-64006a4fef6c', 'c18a0a31-3d97-11e8-806f-64006a4fef6c', 'JSN.UM.001.01.2.1', 'Konsep dokumen dibuat sesuai dengan format yang ditetapkan', 'Membuat konsep dokumen sesuai dengan format yang ditetapkan', 'Super Admin', '2018-04-17 12:20:12', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `UUID_MENU` varchar(36) NOT NULL,
  `UUID_MENU_PARENT` varchar(36) DEFAULT NULL,
  `MENU_NAME` varchar(36) DEFAULT NULL,
  `MENU_LEVEL` varchar(2) DEFAULT NULL,
  `URL` varchar(80) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_MENU`),
  KEY `UUID_MENU_PARENT_MENU` (`UUID_MENU_PARENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`UUID_MENU`, `UUID_MENU_PARENT`, `MENU_NAME`, `MENU_LEVEL`, `URL`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('2d5f6fe4-2b66-11e8-b1df-64006a4fef6c', 'ee700b12-2b64-11e8-b1df-64006a4fef6c', 'Setting', '1', '', 'Super Admin', '2018-03-19 18:10:53', NULL, NULL, '1'),
('59392885-2b6a-11e8-b1df-64006a4fef6c', '2d5f6fe4-2b66-11e8-b1df-64006a4fef6c', 'Skema Sertifikasi', '2', 'common/skema_sertifikasi', 'Super Admin', '2018-03-19 18:40:45', NULL, NULL, '1'),
('63b8db02-2b64-11e8-b1df-64006a4fef6c', NULL, 'Application Manager', '0', NULL, 'Super Admin', '2018-03-19 17:58:05', NULL, NULL, '1'),
('6aa3a2ef-2b6a-11e8-b1df-64006a4fef6c', '2d5f6fe4-2b66-11e8-b1df-64006a4fef6c', 'Unit Kompetensi', '2', 'common/unit_kompetensi', 'Super Admin', '2018-03-19 18:41:14', NULL, NULL, '1'),
('79aba3cf-2b6a-11e8-b1df-64006a4fef6c', '2d5f6fe4-2b66-11e8-b1df-64006a4fef6c', 'Elemen Kompetensi', '2', 'common/elemen_kompetensi', 'Super Admin', '2018-03-19 18:41:39', NULL, NULL, '1'),
('85853319-2b6a-11e8-b1df-64006a4fef6c', '2d5f6fe4-2b66-11e8-b1df-64006a4fef6c', 'Kriteria Unjuk Kerja', '2', 'common/kriteria_unjuk_kerja', 'Super Admin', '2018-03-19 18:41:59', NULL, NULL, '1'),
('a7b3bc0c-2b6a-11e8-b1df-64006a4fef6c', 'ee700b12-2b64-11e8-b1df-64006a4fef6c', 'Monitoring', '1', '', 'Super Admin', '2018-03-19 18:42:56', NULL, NULL, '1'),
('c3075da0-2b6a-11e8-b1df-64006a4fef6c', 'a7b3bc0c-2b6a-11e8-b1df-64006a4fef6c', 'Persetujuan', '2', 'lsp/persetujuan', 'Super Admin', '2018-03-19 18:43:42', NULL, NULL, '1'),
('d10a09d6-2b64-11e8-b1df-64006a4fef6c', '63b8db02-2b64-11e8-b1df-64006a4fef6c', 'About', '1', 'common/about', 'Super Admin', '2018-03-19 18:01:09', NULL, NULL, '1'),
('ee700b12-2b64-11e8-b1df-64006a4fef6c', NULL, 'Asesmen', '0', NULL, 'Super Admin', '2018-03-19 18:01:58', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `mma_kuk`
--

CREATE TABLE IF NOT EXISTS `mma_kuk` (
  `UUID_MMA_KUK` varchar(36) NOT NULL,
  `UUID_MMA` varchar(36) DEFAULT NULL,
  `UUID_KUK` varchar(36) DEFAULT NULL,
  `BUKTI` varchar(80) DEFAULT NULL,
  `JENIS_BUKTI` varchar(1) DEFAULT NULL,
  `METODE` varchar(3) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_MMA_KUK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `UUID_ROLE` varchar(36) NOT NULL,
  `ROLE_NAME` varchar(50) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_ROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`UUID_ROLE`, `ROLE_NAME`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('154e2f21-2902-11e8-b1df-64006a4fef6c', 'Admin LSP', 'Super Admin', '2018-03-16 17:09:16', NULL, NULL, '1'),
('246c89b8-2902-11e8-b1df-64006a4fef6c', 'Asesor', 'Super Admin', '2018-03-16 17:09:41', NULL, NULL, '1'),
('595ecaf9-2902-11e8-b1df-64006a4fef6c', 'TUK', 'Super Admin', '2018-03-16 17:11:10', NULL, NULL, '1'),
('71f2835f-2902-11e8-b1df-64006a4fef6c', 'Manajer', 'Super Admin', '2018-03-16 17:11:51', NULL, NULL, '1'),
('adb7aa69-2902-11e8-b1df-64006a4fef6c', 'Admin', 'Super Admin', '2018-03-16 17:13:32', NULL, NULL, '1'),
('bcd4c16d-2902-11e8-b1df-64006a4fef6c', 'Super Admin', 'Super Admin', '2018-03-16 17:13:57', NULL, NULL, '1'),
('d6640f35-2901-11e8-b1df-64006a4fef6c', 'Asesi', 'Super Admin', '2018-03-16 17:07:30', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `skema`
--

CREATE TABLE IF NOT EXISTS `skema` (
  `UUID_SKEMA` varchar(36) NOT NULL,
  `NAMA_SKEMA` varchar(50) DEFAULT NULL,
  `NOMOR_SKEMA` varchar(50) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_SKEMA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skema`
--

INSERT INTO `skema` (`UUID_SKEMA`, `NAMA_SKEMA`, `NOMOR_SKEMA`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('57797303-31d0-11e8-89f9-64006a4fef6c', 'Penata Madya TI', 'SKE.BPJSTK.05.00/02/2017', 'Super Admin III', '2018-03-27 22:05:59', 'Super Admin', '2018-04-01 17:36:25', '1'),
('6f555fc3-2b31-11e8-b1df-64006a4fef6c', 'Agen Perisai', 'SKE.BPJSTK.06.00/02/2017', 'Super Admin', '2018-03-19 11:53:20', 'Super Admin', '2018-03-26 20:34:59', '1'),
('7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', 'Penata Madya SDM', 'SKE.BPJSTK.04.00/02/2017', 'Super Admin', '2018-03-18 14:25:07', 'Super Admin', '2018-03-26 20:35:10', '1'),
('b0aeb036-2b30-11e8-b1df-64006a4fef6c', 'Marketing Officer', 'SKE.BPJSTK.01.00/02/2017', 'Super Admin', '2018-03-19 11:48:00', 'Super Admin', '2018-03-27 00:58:36', '1'),
('e3df3391-3121-11e8-89f9-64006a4fef6c', 'Customer Service Officer', 'SKE.BPJSTK.02.00/02/2017', 'Super Admin', '2018-03-27 01:17:11', 'Super Admin', '2018-03-27 01:17:28', '1'),
('f0238d8b-2a98-11e8-b1df-64006a4fef6c', 'Penata Madya Keuangan', 'SKE.BPJSTK.03.00/02/2017', 'Super Admin', '2018-03-18 17:41:42', 'Super Admin', '2018-03-26 22:13:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `skema_uk`
--

CREATE TABLE IF NOT EXISTS `skema_uk` (
  `UUID_SKEMA_UK` varchar(36) NOT NULL,
  `UUID_SKEMA` varchar(36) DEFAULT NULL,
  `UUID_UK` varchar(36) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  KEY `UUID_SKEMA_SKEMA_UK` (`UUID_SKEMA`),
  KEY `UUID_UK_SKEMA_UK` (`UUID_UK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skema_uk`
--

INSERT INTO `skema_uk` (`UUID_SKEMA_UK`, `UUID_SKEMA`, `UUID_UK`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('c8d4f117-3593-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', 'fc9e13af-32ff-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d4fa98-3593-11e8-89f9-64006a4fef6c', '7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', 'abd195e1-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d4ffdc-3593-11e8-89f9-64006a4fef6c', 'b0aeb036-2b30-11e8-b1df-64006a4fef6c', '114efdcb-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d504e3-3593-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', 'a8151e2c-32ff-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d50a91-3593-11e8-89f9-64006a4fef6c', 'b0aeb036-2b30-11e8-b1df-64006a4fef6c', '59114d2d-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d51010-3593-11e8-89f9-64006a4fef6c', '7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', 'a1a09f66-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d51579-3593-11e8-89f9-64006a4fef6c', 'b0aeb036-2b30-11e8-b1df-64006a4fef6c', '23d244d2-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d51ada-3593-11e8-89f9-64006a4fef6c', 'b0aeb036-2b30-11e8-b1df-64006a4fef6c', '0544790c-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d52044-3593-11e8-89f9-64006a4fef6c', '7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', '96306fff-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d52590-3593-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', '114efdcb-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d52ac6-3593-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', '8b30d3be-32ff-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d53009-3593-11e8-89f9-64006a4fef6c', '7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', '8857d7ea-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5356a-3593-11e8-89f9-64006a4fef6c', '6f555fc3-2b31-11e8-b1df-64006a4fef6c', '873735d1-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d54079-3593-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', '80e4425e-3300-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d545da-3593-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', 'ad0fa4fd-3300-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d54b3f-3593-11e8-89f9-64006a4fef6c', 'b0aeb036-2b30-11e8-b1df-64006a4fef6c', '648a9d29-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d55098-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', 'faee9d9b-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d55e57-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d563c5-3593-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', '114efdcb-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5691e-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', 'd9e75bdb-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d56e72-3593-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', '0544790c-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d57428-3593-11e8-89f9-64006a4fef6c', 'b0aeb036-2b30-11e8-b1df-64006a4fef6c', '873735d1-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d57985-3593-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', 'cedbd042-32ff-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d58684-3593-11e8-89f9-64006a4fef6c', 'b0aeb036-2b30-11e8-b1df-64006a4fef6c', '7ca72635-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d58bea-3593-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', 'bf9e51d3-3300-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d59146-3593-11e8-89f9-64006a4fef6c', '7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', '23d244d2-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d59696-3593-11e8-89f9-64006a4fef6c', 'b0aeb036-2b30-11e8-b1df-64006a4fef6c', 'b935ef7a-32fe-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d59c00-3593-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', 'b6e76a26-32ff-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5a150-3593-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', '80a7e5fa-32ff-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5a6c2-3593-11e8-89f9-64006a4fef6c', '6f555fc3-2b31-11e8-b1df-64006a4fef6c', '7ca72635-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5ac09-3593-11e8-89f9-64006a4fef6c', '7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', '7c5df84d-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5b6dc-3593-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', '2d98cbe6-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5bc57-3593-11e8-89f9-64006a4fef6c', '6f555fc3-2b31-11e8-b1df-64006a4fef6c', '0544790c-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5c565-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '27a89ed9-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5caec-3593-11e8-89f9-64006a4fef6c', '6f555fc3-2b31-11e8-b1df-64006a4fef6c', '23d244d2-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5d5b3-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '1db7c37e-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5db14-3593-11e8-89f9-64006a4fef6c', '7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', '0544790c-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5e07d-3593-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', '19d7cfa9-3300-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5ebb3-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '119eece2-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5f114-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '114efdcb-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5f671-3593-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', '0cbffe09-3300-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d5fbda-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '06e1531b-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d60148-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '34681927-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d606b6-3593-11e8-89f9-64006a4fef6c', '6f555fc3-2b31-11e8-b1df-64006a4fef6c', '114efdcb-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d60c2c-3593-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', '723bd384-32ff-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d6119a-3593-11e8-89f9-64006a4fef6c', '6f555fc3-2b31-11e8-b1df-64006a4fef6c', '70c748ef-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d61715-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '6cc208e5-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d61c90-3593-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', '680afec3-32ff-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d62220-3593-11e8-89f9-64006a4fef6c', '6f555fc3-2b31-11e8-b1df-64006a4fef6c', '648a9d29-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d62792-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '5fb850ac-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d62d15-3593-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', '5def4c55-32ff-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d637d3-3593-11e8-89f9-64006a4fef6c', '7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', '5be2d48e-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d63d56-3593-11e8-89f9-64006a4fef6c', '6f555fc3-2b31-11e8-b1df-64006a4fef6c', '59114d2d-3303-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d642ea-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '5286a276-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d64865-3593-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', '0544790c-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d64de0-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '3f4bc69f-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d6535f-3593-11e8-89f9-64006a4fef6c', '7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', '114efdcb-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d658b3-3593-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', '3997b110-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('c8d65e29-3593-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '0544790c-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-03-30 17:16:02', NULL, NULL, '1'),
('4e2e7ef1-3595-11e8-89f9-64006a4fef6c', 'b0aeb036-2b30-11e8-b1df-64006a4fef6c', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-01 17:13:34', NULL, NULL, '1'),
('4e33bf21-3595-11e8-89f9-64006a4fef6c', 'e3df3391-3121-11e8-89f9-64006a4fef6c', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-01 17:13:34', NULL, NULL, '1'),
('4e39d7e9-3595-11e8-89f9-64006a4fef6c', 'f0238d8b-2a98-11e8-b1df-64006a4fef6c', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-01 17:13:34', NULL, NULL, '1'),
('4e44515e-3595-11e8-89f9-64006a4fef6c', '7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-01 17:13:34', NULL, NULL, '1'),
('4e48c7bd-3595-11e8-89f9-64006a4fef6c', '57797303-31d0-11e8-89f9-64006a4fef6c', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-01 17:13:34', NULL, NULL, '1'),
('4e4bca6d-3595-11e8-89f9-64006a4fef6c', '6f555fc3-2b31-11e8-b1df-64006a4fef6c', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-01 17:13:34', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `status_administrasi`
--

CREATE TABLE IF NOT EXISTS `status_administrasi` (
  `UUID_SA` varchar(36) NOT NULL,
  `URUTAN` varchar(3) DEFAULT NULL,
  `ID_SA` varchar(10) DEFAULT NULL,
  `NAMA_SA` varchar(50) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_SA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_bukti`
--

CREATE TABLE IF NOT EXISTS `tipe_bukti` (
  `UUID_TB` varchar(36) NOT NULL,
  `ID_TB` varchar(50) DEFAULT NULL,
  `NAMA_TB` varchar(50) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_TB`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit_kompetensi`
--

CREATE TABLE IF NOT EXISTS `unit_kompetensi` (
  `UUID_UK` varchar(36) NOT NULL,
  `KODE_UK` varchar(50) DEFAULT NULL,
  `JUDUL_UK` varchar(100) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_UK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_kompetensi`
--

INSERT INTO `unit_kompetensi` (`UUID_UK`, `KODE_UK`, `JUDUL_UK`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('0544790c-3281-11e8-89f9-64006a4fef6c', 'JSN.UM.002.01', 'Mengelola Arsip', 'Super Admin', '2018-03-28 19:10:43', NULL, NULL, '1'),
('06e1531b-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.005.01', 'Mengembalikan File Pada Hard Disk Yang Terhapus / Data Hilang', 'Super Admin', '2018-03-29 10:34:11', NULL, NULL, '1'),
('0cbffe09-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.005.01', 'Membuat Bukti Pembayaran Iuran Kepesertaan', 'Super Admin', '2018-03-29 10:20:02', 'Super Admin', '2018-03-29 10:21:34', '1'),
('114efdcb-3281-11e8-89f9-64006a4fef6c', 'JSN.UM.003.01', 'Mensosialisasikan Program Jaminan Sosial Ketenagakerjaan', 'Super Admin', '2018-03-28 19:11:03', NULL, NULL, '1'),
('119eece2-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.006.01', 'Membersihkan Virus yang Menginfeksi Komputer', 'Super Admin', '2018-03-29 10:34:30', NULL, NULL, '1'),
('12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'JSN.UM.001.01', 'Membuat Dokumen', 'Super Admin', '2018-03-28 19:03:56', 'Super Admin', '2018-04-01 17:13:33', '1'),
('19d7cfa9-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.007.01', 'Membukukan Penerimaan Pendapatan Lain', 'Super Admin', '2018-03-29 10:20:24', 'Super Admin', '2018-03-29 10:21:50', '1'),
('1db7c37e-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.007.01', 'Membersihkan Virus Jaringan', 'Super Admin', '2018-03-29 10:34:50', NULL, NULL, '1'),
('23d244d2-3303-11e8-89f9-64006a4fef6c', 'JSN.HC.022.01', 'Mensosialisasikan Hubungan Industrial', 'Super Admin', '2018-03-29 10:42:10', NULL, NULL, '1'),
('27a89ed9-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.008.01', 'Melindungi Komputer dari Serangan Berbagai Jenis Virus', 'Super Admin', '2018-03-29 10:35:06', NULL, NULL, '1'),
('2d98cbe6-3301-11e8-89f9-64006a4fef6c', 'JSN.KE.013.01', 'Menyusun Laporan Keuangan', 'Super Admin', '2018-03-29 10:28:07', NULL, NULL, '1'),
('34681927-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.009.01', 'Memperbaiki Kerusakan Pada Sarana Teknologi Informasi', 'Super Admin', '2018-03-29 10:35:28', NULL, NULL, '1'),
('3997b110-3301-11e8-89f9-64006a4fef6c', 'JSN.KE.014.01', 'Menyusun Laporan Perpajakan', 'Super Admin', '2018-03-29 10:28:27', NULL, NULL, '1'),
('3f4bc69f-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.010.01', 'Membuat Desain Jaringan Lokal', 'Super Admin', '2018-03-29 10:35:46', NULL, NULL, '1'),
('5286a276-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.011.01', 'Mengadministrasi Sistem Jaringan', 'Super Admin', '2018-03-29 10:36:18', NULL, NULL, '1'),
('59114d2d-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.001.01', 'Memproses Data Potensi', 'Super Admin', '2018-03-29 10:43:39', NULL, NULL, '1'),
('5be2d48e-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.001.01', 'Mengumpulkan Data Kebutuhan Karyawan', 'Super Admin', '2018-03-29 10:29:25', NULL, NULL, '1'),
('5def4c55-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.001.01', 'Melayani pengaduan melalui kanal counter pengaduan', 'Super Admin', '2018-03-29 10:15:09', NULL, NULL, '1'),
('5fb850ac-3302-11e8-89f9-64006a4fef6c', 'JSN.TI.012.01', 'Mengelola Perangkat Jaringan', 'Super Admin', '2018-03-29 10:36:41', NULL, NULL, '1'),
('648a9d29-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.002.01', 'Menerima Pendaftaran Peserta', 'Super Admin', '2018-03-29 10:43:58', NULL, NULL, '1'),
('680afec3-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.004.01', 'Menerima pengajuan dokumen administrasi kepesertaan', 'Super Admin', '2018-03-29 10:15:26', NULL, NULL, '1'),
('6cc208e5-3302-11e8-89f9-64006a4fef6c', 'JSN.AS.001.01', 'Mengadministrasi Pengelolaan Aset', 'Super Admin', '2018-03-29 10:37:02', NULL, NULL, '1'),
('70c748ef-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.019.01', 'Memproses Pembayaran Iuran Peserta Baru', 'Super Admin', '2018-03-29 10:44:19', NULL, NULL, '1'),
('723bd384-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.005.01', 'Memproses pengajuan laporan kecelakaan kerja tahap pertama', 'Super Admin', '2018-03-29 10:15:43', NULL, NULL, '1'),
('7c5df84d-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.005.01', 'Mengadministrasi Data Pengembangan Karyawan', 'Super Admin', '2018-03-29 10:30:19', NULL, NULL, '1'),
('7ca72635-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.004.01', 'Memproses Tanda Bukti Kepesertaan', 'Super Admin', '2018-03-29 10:44:39', NULL, NULL, '1'),
('80a7e5fa-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.006.01', 'Memproses pengajuan laporan kecelakaan kerja tahap kedua', 'Super Admin', '2018-03-29 10:16:07', 'Super Admin', '2018-03-29 10:16:43', '1'),
('80e4425e-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.009.01', 'Memisahkan Dana ke Rekening Program', 'Super Admin', '2018-03-29 10:23:17', NULL, NULL, '1'),
('873735d1-3303-11e8-89f9-64006a4fef6c', 'JSN.PM.005.01', 'Memperluas Jaringan Kemitraan', 'Super Admin', '2018-03-29 10:44:56', NULL, NULL, '1'),
('8857d7ea-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.010.01', 'Mengadministrasi Penilaian Kinerja Karyawan', 'Super Admin', '2018-03-29 10:30:39', NULL, NULL, '1'),
('8b30d3be-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.022.01', 'Menerima berkas pengajuan klaim JKM', 'Super Admin', '2018-03-29 10:16:25', NULL, NULL, '1'),
('96306fff-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.013.01', 'Memproses Imbal Jasa dan Kesejahteraan Karyawan', 'Super Admin', '2018-03-29 10:31:02', NULL, NULL, '1'),
('a1a09f66-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.016.01', 'Memperbaharui Administrasi Data Karyawan', 'Super Admin', '2018-03-29 10:31:22', NULL, NULL, '1'),
('a8151e2c-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.026.01', 'Menerima berkas pengajuan klaim JHT', 'Super Admin', '2018-03-29 10:17:13', NULL, NULL, '1'),
('abd195e1-3301-11e8-89f9-64006a4fef6c', 'JSN.HC.017.01', 'Mengadministrasi Pemberian Penghargaan dan Sanksi Karyawan', 'Super Admin', '2018-03-29 10:31:39', NULL, NULL, '1'),
('ad0fa4fd-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.010.01', 'Melakukan Pembayaran Jaminan (JHT,JKK,JKM dan JP)', 'Super Admin', '2018-03-29 10:24:31', NULL, NULL, '1'),
('b6e76a26-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.034.01', 'Menerima berkas pengajuan klaim JP', 'Super Admin', '2018-03-29 10:17:38', NULL, NULL, '1'),
('b935ef7a-32fe-11e8-89f9-64006a4fef6c', 'JSN.PM.003.01', 'Menerima Pembayaran Iuran Peserta', 'Super Admin', '2018-03-29 10:10:33', NULL, NULL, '1'),
('bf9e51d3-3300-11e8-89f9-64006a4fef6c', 'JSN.KE.011.01', 'Melakukan Pembayaran Beban Usaha dan Belanja Modal', 'Super Admin', '2018-03-29 10:25:02', 'Super Admin', '2018-03-29 10:29:46', '1'),
('cedbd042-32ff-11e8-89f9-64006a4fef6c', 'JSN.PL.040.01', 'Menerima Konfirmasi Penerima Manfaat  JP', 'Super Admin', '2018-03-29 10:18:18', NULL, NULL, '1'),
('d9e75bdb-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.001.01', 'Menentukan Ruang Lingkup Perawatan (Maintenance)', 'Super Admin', '2018-03-29 10:32:56', NULL, NULL, '1'),
('ee8978e1-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.003.01', 'Melakukan Instalasi Software Aplikasi', 'Super Admin', '2018-03-29 10:33:31', NULL, NULL, '1'),
('faee9d9b-3301-11e8-89f9-64006a4fef6c', 'JSN.TI.004.01', 'Memenuhi Kebutuhan Sarana Teknologi Informasi', 'Super Admin', '2018-03-29 10:33:51', NULL, NULL, '1'),
('fc9e13af-32ff-11e8-89f9-64006a4fef6c', 'JSN.KE.001.01', 'Mengumpulkan Bahan Penyusunan Rencana Kerja dan Anggaran Tahunan', 'Super Admin', '2018-03-29 10:19:35', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UUID_USER` varchar(36) NOT NULL,
  `LOGIN_ID` varchar(50) DEFAULT NULL,
  `USER_NAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `PHONE` varchar(18) DEFAULT NULL,
  `IS_ONLINE` varchar(1) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UUID_USER`, `LOGIN_ID`, `USER_NAME`, `EMAIL`, `PASSWORD`, `PHONE`, `IS_ONLINE`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('d8c702c5-4e7f-11e8-bf00-00ff0b0c062f', 'karid.nurvenus', 'Karid Nurvenus', 'karid.nurvenus@bpjsketenagakerjaan.go.id', NULL, '085790902042', '1', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `UUID_USER_ROLE` varchar(36) NOT NULL,
  `UUID_USER` varchar(36) DEFAULT NULL,
  `UUID_ROLE` varchar(36) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_USER_ROLE`),
  KEY `UUID_USER_USER_ROLE` (`UUID_USER`),
  KEY `UUID_ROLE_USER_ROLE` (`UUID_ROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD CONSTRAINT `UUID_APL01_ADM` FOREIGN KEY (`UUID_APL01`) REFERENCES `fr_apl_01` (`UUID_APL01`),
  ADD CONSTRAINT `UUID_APL02_ADM` FOREIGN KEY (`UUID_APL02`) REFERENCES `fr_apl_02` (`UUID_APL02`),
  ADD CONSTRAINT `UUID_ASESI_ADM` FOREIGN KEY (`UUID_ASESI`) REFERENCES `user` (`UUID_USER`),
  ADD CONSTRAINT `UUID_ASESOR_ADM` FOREIGN KEY (`UUID_ASESOR`) REFERENCES `user` (`UUID_USER`),
  ADD CONSTRAINT `UUID_MAK02_ADM` FOREIGN KEY (`UUID_MAK02`) REFERENCES `fr_mak_02` (`UUID_MAK02`),
  ADD CONSTRAINT `UUID_MAK03_ADM` FOREIGN KEY (`UUID_MAK03`) REFERENCES `fr_mak_03` (`UUID_MAK03`),
  ADD CONSTRAINT `UUID_SA_ADM` FOREIGN KEY (`UUID_SA`) REFERENCES `status_administrasi` (`UUID_SA`);

--
-- Constraints for table `answer_apl02`
--
ALTER TABLE `answer_apl02`
  ADD CONSTRAINT `UUID_APL01_ANSWER_APL_02` FOREIGN KEY (`UUID_APL01`) REFERENCES `fr_apl_01` (`UUID_APL01`),
  ADD CONSTRAINT `UUID_APL02_ANSWER_APL_02` FOREIGN KEY (`UUID_APL02`) REFERENCES `fr_apl_02` (`UUID_APL02`),
  ADD CONSTRAINT `UUID_EK_ANSWER_APL_02` FOREIGN KEY (`UUID_EK`) REFERENCES `elemen_kompetensi` (`UUID_EK`),
  ADD CONSTRAINT `UUID_KUK_ANSWER_APL_02` FOREIGN KEY (`UUID_KUK`) REFERENCES `kriteria_unjuk_kerja` (`UUID_KUK`),
  ADD CONSTRAINT `UUID_UK_ANSWER_APL_02` FOREIGN KEY (`UUID_UK`) REFERENCES `unit_kompetensi` (`UUID_UK`),
  ADD CONSTRAINT `UUID_USER_ANSWER_APL_02` FOREIGN KEY (`UUID_USER`) REFERENCES `user` (`UUID_USER`);

--
-- Constraints for table `apl01_bukti`
--
ALTER TABLE `apl01_bukti`
  ADD CONSTRAINT `UUID_APL01_APL01_BUKTI` FOREIGN KEY (`UUID_APL01`) REFERENCES `fr_apl_01` (`UUID_APL01`),
  ADD CONSTRAINT `UUID_BUKTI_APL01_BUKTI` FOREIGN KEY (`UUID_BUKTI`) REFERENCES `bukti` (`UUID_BUKTI`);

--
-- Constraints for table `apl01_uk`
--
ALTER TABLE `apl01_uk`
  ADD CONSTRAINT `UUID_APL01_APL01_UK` FOREIGN KEY (`UUID_APL01`) REFERENCES `fr_apl_01` (`UUID_APL01`),
  ADD CONSTRAINT `UUID_UK_APL01_UK` FOREIGN KEY (`UUID_UK`) REFERENCES `unit_kompetensi` (`UUID_UK`);

--
-- Constraints for table `apl02_kuk`
--
ALTER TABLE `apl02_kuk`
  ADD CONSTRAINT `UUID_APL02_APL02_KUK` FOREIGN KEY (`UUID_APL02`) REFERENCES `fr_apl_02` (`UUID_APL02`),
  ADD CONSTRAINT `UUID_BUKTI_APL02_KUK` FOREIGN KEY (`UUID_BUKTI`) REFERENCES `bukti` (`UUID_BUKTI`),
  ADD CONSTRAINT `UUID_KUK_APL02_KUK` FOREIGN KEY (`UUID_KUK`) REFERENCES `kriteria_unjuk_kerja` (`UUID_KUK`);

--
-- Constraints for table `bukti`
--
ALTER TABLE `bukti`
  ADD CONSTRAINT `UUID_USER_BUKTI` FOREIGN KEY (`UUID_USER`) REFERENCES `user` (`UUID_USER`);

--
-- Constraints for table `elemen_kompetensi`
--
ALTER TABLE `elemen_kompetensi`
  ADD CONSTRAINT `UUID_UK_EK` FOREIGN KEY (`UUID_UK`) REFERENCES `unit_kompetensi` (`UUID_UK`);

--
-- Constraints for table `fr_apl_01`
--
ALTER TABLE `fr_apl_01`
  ADD CONSTRAINT `UUID_ADM_APL01` FOREIGN KEY (`UUID_ADM`) REFERENCES `administrasi` (`UUID_ADM`),
  ADD CONSTRAINT `UUID_USER_FR_APL_01` FOREIGN KEY (`UUID_USER`) REFERENCES `user` (`UUID_USER`);

--
-- Constraints for table `fr_apl_02`
--
ALTER TABLE `fr_apl_02`
  ADD CONSTRAINT `UUID_ADM_FR_APL_02` FOREIGN KEY (`UUID_ADM`) REFERENCES `administrasi` (`UUID_ADM`),
  ADD CONSTRAINT `UUID_APL01_FR_APL_02` FOREIGN KEY (`UUID_APL01`) REFERENCES `fr_apl_01` (`UUID_APL01`),
  ADD CONSTRAINT `UUID_USER_APL_02` FOREIGN KEY (`UUID_USER`) REFERENCES `user` (`UUID_USER`);

--
-- Constraints for table `fr_mak_02`
--
ALTER TABLE `fr_mak_02`
  ADD CONSTRAINT `UUID_ADM_MAK02` FOREIGN KEY (`UUID_ADM`) REFERENCES `administrasi` (`UUID_ADM`);

--
-- Constraints for table `fr_mak_03`
--
ALTER TABLE `fr_mak_03`
  ADD CONSTRAINT `UUID_ADM_MAK03` FOREIGN KEY (`UUID_ADM`) REFERENCES `administrasi` (`UUID_ADM`);

--
-- Constraints for table `fr_mma`
--
ALTER TABLE `fr_mma`
  ADD CONSTRAINT `fr_mma_ibfk_7` FOREIGN KEY (`MANAGER_SERTIFIKASI`) REFERENCES `user` (`UUID_USER`),
  ADD CONSTRAINT `fr_mma_ibfk_1` FOREIGN KEY (`UUID_APL_01`) REFERENCES `fr_apl_01` (`UUID_APL01`),
  ADD CONSTRAINT `fr_mma_ibfk_2` FOREIGN KEY (`UUID_APL_02`) REFERENCES `fr_apl_02` (`UUID_APL02`),
  ADD CONSTRAINT `fr_mma_ibfk_3` FOREIGN KEY (`KOORDINATOR_TUK`) REFERENCES `user` (`UUID_USER`),
  ADD CONSTRAINT `fr_mma_ibfk_4` FOREIGN KEY (`MANAGER_SERTIFIKASI_LSP`) REFERENCES `user` (`UUID_USER`),
  ADD CONSTRAINT `fr_mma_ibfk_5` FOREIGN KEY (`MANAGER_TEMPAT_KERJA`) REFERENCES `user` (`UUID_USER`),
  ADD CONSTRAINT `fr_mma_ibfk_6` FOREIGN KEY (`ASESOR`) REFERENCES `user` (`UUID_USER`);

--
-- Constraints for table `group_master_menu`
--
ALTER TABLE `group_master_menu`
  ADD CONSTRAINT `UUID_GROUP_GROUP_MASTER_MENU` FOREIGN KEY (`UUID_GROUP`) REFERENCES `group_master` (`UUID_GROUP`),
  ADD CONSTRAINT `UUID_MENU_GROUP_MASTER_MENU` FOREIGN KEY (`UUID_MENU`) REFERENCES `menu` (`UUID_MENU`),
  ADD CONSTRAINT `UUID_USER_ROLE_GROUP_MASTER_MENU` FOREIGN KEY (`UUID_USER_ROLE`) REFERENCES `user_role` (`UUID_USER_ROLE`);

--
-- Constraints for table `kriteria_unjuk_kerja`
--
ALTER TABLE `kriteria_unjuk_kerja`
  ADD CONSTRAINT `UUID_EK_KUK` FOREIGN KEY (`UUID_EK`) REFERENCES `elemen_kompetensi` (`UUID_EK`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `UUID_MENU_PARENT_MENU` FOREIGN KEY (`UUID_MENU_PARENT`) REFERENCES `menu` (`UUID_MENU`);

--
-- Constraints for table `skema_uk`
--
ALTER TABLE `skema_uk`
  ADD CONSTRAINT `UUID_SKEMA_SKEMA_UK` FOREIGN KEY (`UUID_SKEMA`) REFERENCES `skema` (`UUID_SKEMA`),
  ADD CONSTRAINT `UUID_UK_SKEMA_UK` FOREIGN KEY (`UUID_UK`) REFERENCES `unit_kompetensi` (`UUID_UK`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `UUID_ROLE_USER_ROLE` FOREIGN KEY (`UUID_ROLE`) REFERENCES `role` (`UUID_ROLE`),
  ADD CONSTRAINT `UUID_USER_USER_ROLE` FOREIGN KEY (`UUID_USER`) REFERENCES `user` (`UUID_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
