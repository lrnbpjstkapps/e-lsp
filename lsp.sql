-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2018 pada 09.38
-- Versi Server: 5.6.11
-- Versi PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `lsp`
--
CREATE DATABASE IF NOT EXISTS `lsp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lsp`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrasi`
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
-- Struktur dari tabel `apl01_bukti`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `apl01_ek`
--

CREATE TABLE IF NOT EXISTS `apl01_ek` (
  `UUID_APL01_EK` varchar(36) NOT NULL,
  `UUID_APL01` varchar(36) DEFAULT NULL,
  `UUID_EK` varchar(36) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_APL01_EK`),
  KEY `UUID_APL01_APL01_EK` (`UUID_APL01`),
  KEY `UUID_EK_APL01_EK` (`UUID_EK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `apl01_uk`
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
-- Dumping data untuk tabel `apl01_uk`
--

INSERT INTO `apl01_uk` (`UUID_APL01_UK`, `UUID_APL01`, `UUID_UK`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('b511a1b0-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'ee8978e1-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b517697f-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', 'd9e75bdb-3301-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b5186337-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '27a89ed9-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b5191291-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '1db7c37e-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b5195f1e-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '119eece2-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b51debae-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '114efdcb-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b51e41a2-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '06e1531b-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b522b758-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '34681927-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b52303db-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '6cc208e5-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b527df09-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '5fb850ac-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b52c1d67-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '5286a276-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b52ed9fd-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '3f4bc69f-3302-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b52f46b6-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '0544790c-3281-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1'),
('b52fa8a7-4acf-11e8-ac06-00ff0b0c062f', 'b12a2a81-469a-11e8-a478-a4c494eed0da', '12c6f9cc-3280-11e8-89f9-64006a4fef6c', 'Super Admin', '2018-04-28 17:34:19', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apl02_kuk`
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
-- Struktur dari tabel `bukti`
--

CREATE TABLE IF NOT EXISTS `bukti` (
  `UUID_BUKTI` varchar(36) NOT NULL,
  `UUID_TB` varchar(36) DEFAULT NULL,
  `UUID_UK` varchar(36) DEFAULT NULL,
  `UUID_ADM` varchar(36) DEFAULT NULL,
  `NO_BUKTI` varchar(50) DEFAULT NULL,
  `NAMA_BUKTI` varchar(50) DEFAULT NULL,
  `LINK` varchar(50) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_BUKTI`),
  KEY `UUID_TB_BUKTI` (`UUID_TB`),
  KEY `UUID_UK_BUKTI` (`UUID_UK`),
  KEY `UUID_ADM_BUKTI` (`UUID_ADM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `elemen_kompetensi`
--

CREATE TABLE IF NOT EXISTS `elemen_kompetensi` (
  `UUID_EK` varchar(36) NOT NULL,
  `UUID_UK` varchar(36) DEFAULT NULL,
  `NOMOR_EK` varchar(50) DEFAULT NULL,
  `NAMA_EK` varchar(50) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UP` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_EK`),
  KEY `UUID_UK_EK` (`UUID_UK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fr_apl_01`
--

CREATE TABLE IF NOT EXISTS `fr_apl_01` (
  `UUID_APL01` varchar(36) NOT NULL,
  `UUID_ADM` varchar(36) DEFAULT NULL,
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
  KEY `UUID_ADM_APL01` (`UUID_ADM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fr_apl_01`
--

INSERT INTO `fr_apl_01` (`UUID_APL01`, `UUID_ADM`, `NO_DOKUMEN`, `NAMA_LENGKAP`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `JENIS_KELAMIN`, `KEBANGSAAN`, `ALAMAT_RUMAH`, `KODE_POS_RUMAH`, `NO_TLP_RUMAH`, `NO_TLP_HP`, `NO_TLP_KANTOR`, `EMAIL`, `PENDIDIKAN_TERAKHIR`, `NAMA_PERUSAHAAN`, `JABATAN`, `ALAMAT_KANTOR`, `KODE_POS_PERUSAHAAN`, `EMAIL_KANTOR`, `FAX_KANTOR`, `TUJUAN_ASESMEN`, `TUJUAN_ASESMEN_LAINNYA_KETERANGAN`, `JENIS_SKEMA`, `UUID_SKEMA`, `IS_DITERIMA`, `IS_MEMENUHI_SYARAT`, `ALASAN_KURANG_SYARAT`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('b12a2a81-469a-11e8-a478-a4c494eed0da', NULL, '12345678', 'Karid Nurvenus', 'Kota Blitar', '1993-01-24', 'Laki - laki', 'Indonesia', 'Dsn. Manukan RT/RW 3/1 - Ds. Pojok - Kec. Garum - Kab. Blitar - Jawa Timur - Indonesia', '66182', '0342563506', '085790902042', '0215207797', 'karidnur@gmail.com', 'S1', 'BPJS Ketenagakerjaan', 'Penata Utama Teknologi dan Solusi Pembelajaran ', 'Jln. Dadali No. 79 Kota Bogor - Jawa Barat - Indonesia ', '16161', 'care@bpjsketenagakerjaan.go.id', '0215202310', 'Sertifikasi', NULL, 'Klaster', '57797303-31d0-11e8-89f9-64006a4fef6c', NULL, NULL, NULL, 'Super Admin', '2018-04-23 09:04:44', 'Super Admin', '2018-04-28 17:34:19', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fr_apl_02`
--

CREATE TABLE IF NOT EXISTS `fr_apl_02` (
  `UUID_APL02` varchar(36) NOT NULL,
  `UUID_ADM` varchar(36) DEFAULT NULL,
  `TUK` varchar(10) DEFAULT NULL,
  `IS_KOMPETEN` varchar(1) DEFAULT NULL,
  `ALASAN_BLM_KOMPETEN` varchar(80) DEFAULT NULL,
  `IS_DILANJUTKAN` varchar(1) DEFAULT NULL,
  `CATATAN_1` varchar(50) DEFAULT NULL,
  `CATATAN_2` varchar(50) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_APL02`),
  KEY `UUID_ADM_APL02` (`UUID_ADM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fr_mak_02`
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
-- Struktur dari tabel `fr_mak_03`
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
-- Struktur dari tabel `fr_mma`
--

CREATE TABLE IF NOT EXISTS `fr_mma` (
  `UUID_MMA` varchar(36) NOT NULL,
  `UUID_ADM` varchar(36) DEFAULT NULL,
  `NAMA_LSP` varchar(50) DEFAULT NULL,
  `TUK` varchar(10) DEFAULT NULL,
  `KONTEKS_ASESMEN` varchar(18) DEFAULT NULL,
  `PENDEKATAN_ASESMEN` varchar(18) DEFAULT NULL,
  `STRATEGI_ASESMEN` varchar(36) DEFAULT NULL,
  `ACUAN_PEMBANDING` varchar(36) DEFAULT NULL,
  `KET_ACUAN_PEMBANDING` varchar(36) DEFAULT NULL,
  `BATASAN_VARIABEL` varchar(1) DEFAULT NULL,
  `PANDUAN_ASESMEN` varchar(1) DEFAULT NULL,
  `TGL_ASESMEN` varchar(18) DEFAULT NULL,
  `CLO_DURASI` varchar(3) DEFAULT NULL,
  `CLO_START` datetime DEFAULT NULL,
  `CLO_END` datetime DEFAULT NULL,
  `CLP_DURASI` varchar(3) DEFAULT NULL,
  `CLP_START` datetime DEFAULT NULL,
  `CLP_END` datetime DEFAULT NULL,
  `DPL_DURASI` varchar(3) DEFAULT NULL,
  `DPL_START` datetime DEFAULT NULL,
  `DPL_END` datetime DEFAULT NULL,
  `DPT_DURASI` varchar(3) DEFAULT NULL,
  `DPT_START` datetime DEFAULT NULL,
  `DPT_END` datetime DEFAULT NULL,
  `PW_DURASI` varchar(3) DEFAULT NULL,
  `PW_START` datetime DEFAULT NULL,
  `PW_END` datetime DEFAULT NULL,
  `VPK_DURASI` varchar(3) DEFAULT NULL,
  `VPK_START` datetime DEFAULT NULL,
  `VPK_END` datetime DEFAULT NULL,
  `SK_DURASI` varchar(3) DEFAULT NULL,
  `SK_START` datetime DEFAULT NULL,
  `SK_END` datetime DEFAULT NULL,
  `LAIN_DURASI` varchar(3) DEFAULT NULL,
  `LAIN_START` datetime DEFAULT NULL,
  `LAIN_END` datetime DEFAULT NULL,
  `KARAKTERISTIK_PESERTA` varchar(80) DEFAULT NULL,
  `PENYESUAIAN_KEBUTUHAN` varchar(80) DEFAULT NULL,
  `3.3_1` varchar(50) DEFAULT NULL,
  `3.3_2` varchar(50) DEFAULT NULL,
  `3.3_3` varchar(50) DEFAULT NULL,
  `3.3_4` varchar(50) DEFAULT NULL,
  `3.4` varchar(10) DEFAULT NULL,
  `3.4_CATATAN` varchar(50) DEFAULT NULL,
  `3.5` varchar(18) DEFAULT NULL,
  `3.6` varchar(10) DEFAULT NULL,
  `PENGATURAN_DKGN_SPESIALIS` varchar(18) DEFAULT NULL,
  `STRATEGI_KOMUNIKASI` varchar(36) DEFAULT NULL,
  `USR_CRT` varchar(50) DEFAULT NULL,
  `DTM_CRT` datetime DEFAULT NULL,
  `USR_UPD` varchar(50) DEFAULT NULL,
  `DTM_UPD` datetime DEFAULT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`UUID_MMA`),
  KEY `UUID_ADM_MMA` (`UUID_ADM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_master`
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
-- Struktur dari tabel `group_master_menu`
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
-- Struktur dari tabel `kriteria_unjuk_kerja`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
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
-- Dumping data untuk tabel `menu`
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
-- Struktur dari tabel `mma_kuk`
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
  PRIMARY KEY (`UUID_MMA_KUK`),
  KEY `UUID_MMA_MMA_KUK` (`UUID_MMA`),
  KEY `UUID_KUK_MMA_KUK` (`UUID_KUK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
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
-- Dumping data untuk tabel `role`
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
-- Struktur dari tabel `skema`
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
-- Dumping data untuk tabel `skema`
--

INSERT INTO `skema` (`UUID_SKEMA`, `NAMA_SKEMA`, `NOMOR_SKEMA`, `USR_CRT`, `DTM_CRT`, `USR_UPD`, `DTM_UPD`, `IS_ACTIVE`) VALUES
('57797303-31d0-11e8-89f9-64006a4fef6c', 'Penata Madya TI', 'SKE.BPJSTK.05.00/02/2017', 'Super Admin', '2018-03-27 22:05:59', 'Super Admin', '2018-04-01 17:36:25', '1'),
('6f555fc3-2b31-11e8-b1df-64006a4fef6c', 'Agen Perisai', 'SKE.BPJSTK.06.00/02/2017', 'Super Admin', '2018-03-19 11:53:20', 'Super Admin', '2018-03-26 20:34:59', '1'),
('7a1f6bba-2a7d-11e8-b1df-64006a4fef6c', 'Penata Madya SDM', 'SKE.BPJSTK.04.00/02/2017', 'Super Admin', '2018-03-18 14:25:07', 'Super Admin', '2018-03-26 20:35:10', '1'),
('b0aeb036-2b30-11e8-b1df-64006a4fef6c', 'Marketing Officer', 'SKE.BPJSTK.01.00/02/2017', 'Super Admin', '2018-03-19 11:48:00', 'Super Admin', '2018-03-27 00:58:36', '1'),
('e3df3391-3121-11e8-89f9-64006a4fef6c', 'Customer Service Officer', 'SKE.BPJSTK.02.00/02/2017', 'Super Admin', '2018-03-27 01:17:11', 'Super Admin', '2018-03-27 01:17:28', '1'),
('f0238d8b-2a98-11e8-b1df-64006a4fef6c', 'Penata Madya Keuangan', 'SKE.BPJSTK.03.00/02/2017', 'Super Admin', '2018-03-18 17:41:42', 'Super Admin', '2018-03-26 22:13:25', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skema_uk`
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
-- Dumping data untuk tabel `skema_uk`
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
-- Struktur dari tabel `status_administrasi`
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
-- Struktur dari tabel `tipe_bukti`
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
-- Struktur dari tabel `unit_kompetensi`
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
-- Dumping data untuk tabel `unit_kompetensi`
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
-- Struktur dari tabel `user`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  ADD CONSTRAINT `UUID_APL01_ADM` FOREIGN KEY (`UUID_APL01`) REFERENCES `fr_apl_01` (`UUID_APL01`),
  ADD CONSTRAINT `UUID_APL02_ADM` FOREIGN KEY (`UUID_APL02`) REFERENCES `fr_apl_02` (`UUID_APL02`),
  ADD CONSTRAINT `UUID_ASESI_ADM` FOREIGN KEY (`UUID_ASESI`) REFERENCES `user` (`UUID_USER`),
  ADD CONSTRAINT `UUID_ASESOR_ADM` FOREIGN KEY (`UUID_ASESOR`) REFERENCES `user` (`UUID_USER`),
  ADD CONSTRAINT `UUID_MAK02_ADM` FOREIGN KEY (`UUID_MAK02`) REFERENCES `fr_mak_02` (`UUID_MAK02`),
  ADD CONSTRAINT `UUID_MAK03_ADM` FOREIGN KEY (`UUID_MAK03`) REFERENCES `fr_mak_03` (`UUID_MAK03`),
  ADD CONSTRAINT `UUID_MMA_ADM` FOREIGN KEY (`UUID_MMA`) REFERENCES `fr_mma` (`UUID_MMA`),
  ADD CONSTRAINT `UUID_SA_ADM` FOREIGN KEY (`UUID_SA`) REFERENCES `status_administrasi` (`UUID_SA`);

--
-- Ketidakleluasaan untuk tabel `apl01_bukti`
--
ALTER TABLE `apl01_bukti`
  ADD CONSTRAINT `UUID_APL01_APL01_BUKTI` FOREIGN KEY (`UUID_APL01`) REFERENCES `fr_apl_01` (`UUID_APL01`),
  ADD CONSTRAINT `UUID_BUKTI_APL01_BUKTI` FOREIGN KEY (`UUID_BUKTI`) REFERENCES `bukti` (`UUID_BUKTI`);

--
-- Ketidakleluasaan untuk tabel `apl01_ek`
--
ALTER TABLE `apl01_ek`
  ADD CONSTRAINT `UUID_APL01_APL01_EK` FOREIGN KEY (`UUID_APL01`) REFERENCES `fr_apl_01` (`UUID_APL01`),
  ADD CONSTRAINT `UUID_EK_APL01_EK` FOREIGN KEY (`UUID_EK`) REFERENCES `elemen_kompetensi` (`UUID_EK`);

--
-- Ketidakleluasaan untuk tabel `apl01_uk`
--
ALTER TABLE `apl01_uk`
  ADD CONSTRAINT `UUID_APL01_APL01_UK` FOREIGN KEY (`UUID_APL01`) REFERENCES `fr_apl_01` (`UUID_APL01`),
  ADD CONSTRAINT `UUID_UK_APL01_UK` FOREIGN KEY (`UUID_UK`) REFERENCES `unit_kompetensi` (`UUID_UK`);

--
-- Ketidakleluasaan untuk tabel `apl02_kuk`
--
ALTER TABLE `apl02_kuk`
  ADD CONSTRAINT `UUID_APL02_APL02_KUK` FOREIGN KEY (`UUID_APL02`) REFERENCES `fr_apl_02` (`UUID_APL02`),
  ADD CONSTRAINT `UUID_BUKTI_APL02_KUK` FOREIGN KEY (`UUID_BUKTI`) REFERENCES `bukti` (`UUID_BUKTI`),
  ADD CONSTRAINT `UUID_KUK_APL02_KUK` FOREIGN KEY (`UUID_KUK`) REFERENCES `kriteria_unjuk_kerja` (`UUID_KUK`);

--
-- Ketidakleluasaan untuk tabel `bukti`
--
ALTER TABLE `bukti`
  ADD CONSTRAINT `UUID_ADM_BUKTI` FOREIGN KEY (`UUID_ADM`) REFERENCES `administrasi` (`UUID_ADM`),
  ADD CONSTRAINT `UUID_TB_BUKTI` FOREIGN KEY (`UUID_TB`) REFERENCES `tipe_bukti` (`UUID_TB`),
  ADD CONSTRAINT `UUID_UK_BUKTI` FOREIGN KEY (`UUID_UK`) REFERENCES `unit_kompetensi` (`UUID_UK`);

--
-- Ketidakleluasaan untuk tabel `elemen_kompetensi`
--
ALTER TABLE `elemen_kompetensi`
  ADD CONSTRAINT `UUID_UK_EK` FOREIGN KEY (`UUID_UK`) REFERENCES `unit_kompetensi` (`UUID_UK`);

--
-- Ketidakleluasaan untuk tabel `fr_apl_01`
--
ALTER TABLE `fr_apl_01`
  ADD CONSTRAINT `UUID_ADM_APL01` FOREIGN KEY (`UUID_ADM`) REFERENCES `administrasi` (`UUID_ADM`);

--
-- Ketidakleluasaan untuk tabel `fr_apl_02`
--
ALTER TABLE `fr_apl_02`
  ADD CONSTRAINT `UUID_ADM_APL02` FOREIGN KEY (`UUID_ADM`) REFERENCES `administrasi` (`UUID_ADM`);

--
-- Ketidakleluasaan untuk tabel `fr_mak_02`
--
ALTER TABLE `fr_mak_02`
  ADD CONSTRAINT `UUID_ADM_MAK02` FOREIGN KEY (`UUID_ADM`) REFERENCES `administrasi` (`UUID_ADM`);

--
-- Ketidakleluasaan untuk tabel `fr_mak_03`
--
ALTER TABLE `fr_mak_03`
  ADD CONSTRAINT `UUID_ADM_MAK03` FOREIGN KEY (`UUID_ADM`) REFERENCES `administrasi` (`UUID_ADM`);

--
-- Ketidakleluasaan untuk tabel `fr_mma`
--
ALTER TABLE `fr_mma`
  ADD CONSTRAINT `UUID_ADM_MMA` FOREIGN KEY (`UUID_ADM`) REFERENCES `administrasi` (`UUID_ADM`);

--
-- Ketidakleluasaan untuk tabel `group_master_menu`
--
ALTER TABLE `group_master_menu`
  ADD CONSTRAINT `UUID_GROUP_GROUP_MASTER_MENU` FOREIGN KEY (`UUID_GROUP`) REFERENCES `group_master` (`UUID_GROUP`),
  ADD CONSTRAINT `UUID_MENU_GROUP_MASTER_MENU` FOREIGN KEY (`UUID_MENU`) REFERENCES `menu` (`UUID_MENU`),
  ADD CONSTRAINT `UUID_USER_ROLE_GROUP_MASTER_MENU` FOREIGN KEY (`UUID_USER_ROLE`) REFERENCES `user_role` (`UUID_USER_ROLE`);

--
-- Ketidakleluasaan untuk tabel `kriteria_unjuk_kerja`
--
ALTER TABLE `kriteria_unjuk_kerja`
  ADD CONSTRAINT `UUID_EK_KUK` FOREIGN KEY (`UUID_EK`) REFERENCES `elemen_kompetensi` (`UUID_EK`);

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `UUID_MENU_PARENT_MENU` FOREIGN KEY (`UUID_MENU_PARENT`) REFERENCES `menu` (`UUID_MENU`);

--
-- Ketidakleluasaan untuk tabel `mma_kuk`
--
ALTER TABLE `mma_kuk`
  ADD CONSTRAINT `UUID_KUK_MMA_KUK` FOREIGN KEY (`UUID_KUK`) REFERENCES `kriteria_unjuk_kerja` (`UUID_KUK`),
  ADD CONSTRAINT `UUID_MMA_MMA_KUK` FOREIGN KEY (`UUID_MMA`) REFERENCES `fr_mma` (`UUID_MMA`);

--
-- Ketidakleluasaan untuk tabel `skema_uk`
--
ALTER TABLE `skema_uk`
  ADD CONSTRAINT `UUID_SKEMA_SKEMA_UK` FOREIGN KEY (`UUID_SKEMA`) REFERENCES `skema` (`UUID_SKEMA`),
  ADD CONSTRAINT `UUID_UK_SKEMA_UK` FOREIGN KEY (`UUID_UK`) REFERENCES `unit_kompetensi` (`UUID_UK`);

--
-- Ketidakleluasaan untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `UUID_ROLE_USER_ROLE` FOREIGN KEY (`UUID_ROLE`) REFERENCES `role` (`UUID_ROLE`),
  ADD CONSTRAINT `UUID_USER_USER_ROLE` FOREIGN KEY (`UUID_USER`) REFERENCES `user` (`UUID_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
