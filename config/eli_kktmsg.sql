-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 02:16 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eli_kktmsg`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `addressable_id` int(10) UNSIGNED NOT NULL,
  `addressable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `addressable_id`, `addressable_type`, `address`, `postcode`, `city`, `state`, `country`, `phone`, `created_at`, `updated_at`) VALUES
(2, 1, 'App\\Company', 'NO.8,JALAN PARIT RAJA 2/3,TAMAN PARIT RAJA 2', '86400', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '0123456678', '2018-08-17 00:25:33', '2018-08-23 23:15:19'),
(5, 2, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-17 01:09:06', '2018-08-17 01:09:06'),
(6, 4, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-17 01:09:54', '2018-08-17 01:09:54'),
(7, 5, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-17 01:09:59', '2018-08-17 01:09:59'),
(8, 6, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-18 18:41:17', '2018-08-18 18:41:17'),
(9, 2, 'App\\Company', 'ALAN KEMUS, SIMPANG EMPAT,', '78000', 'ALOR GAJAH', 'MELAKA', 'MALAYSIA', '065520888', '2018-08-18 19:04:46', '2018-08-18 19:04:46'),
(10, 3, 'App\\Company', 'NO 4, LEBUH PERUSAHAAN KELEBANG 5, \r\nIGB INTERNATIONAL INDUSTRIAL PARK,JALAN KUALA KANGSAR,', '31200', 'IPOH', 'PERAK', 'MALAYSIA', '6052911599', '2018-08-18 19:10:22', '2018-08-18 19:10:22'),
(11, 4, 'App\\Company', 'JALAN KELAPA SAWIT, OFF KM 4 \r\nJALAN TUARAN', '88300', 'KOTA KINABALU', 'SABAH', 'MALAYSIA', '088-235811', '2018-08-18 19:14:43', '2018-08-18 19:14:43'),
(15, 8, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-19 20:42:35', '2018-08-19 20:42:35'),
(16, 5, 'App\\Company', 'no 6b, kg parit bareng', '56789', 'SHAH ALAM', 'SELANGOR', 'MALAYSIA', '0123456678', '2018-08-23 22:54:36', '2018-08-23 22:54:36'),
(17, 6, 'App\\Company', 'NO.8,JALAN PARIT RAJA 2/3,TAMAN PARIT RAJA 2', '86400', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '0123456678', '2018-08-23 23:02:48', '2018-08-23 23:02:48'),
(18, 1, 'App\\User', 'NO.8,JALAN PARIT RAJA 2/3,TAMAN PARIT RAJA 2', '56789', 'SELANGOR', 'JOHOR', 'MALAYSIA', '0123456678', '2018-08-23 23:18:40', '2018-08-23 23:18:40'),
(19, 9, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-24 00:03:06', '2018-08-24 00:03:06'),
(20, 10, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-25 19:47:04', '2018-08-25 19:47:04'),
(22, 7, 'App\\Company', 'ND.14 14-1, JALAN UNIVERSITI 1, \r\nTAMAN UNIVERSITI PARIT RAJA', '86400', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '074535168', '2018-09-02 22:11:49', '2018-09-02 22:11:49'),
(23, 8, 'App\\Company', '12, BLOCK B, JALAN WAWASAN 8, \r\nKAWASAN PERINDUSTRIA SRI GADING,', '86400', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '07-4556823', '2018-09-02 22:24:56', '2018-09-02 22:24:56'),
(25, 9, 'App\\Company', '12, BLOCK B, JALAN WAWASAN 8,\r\nKAWASAN PERINDUSTRIA SRI GADING,', '86400', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '07-455 7823', '2018-09-02 22:34:48', '2018-09-02 22:34:48'),
(26, 12, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-02 22:36:05', '2018-09-02 22:36:05'),
(27, 10, 'App\\Company', '12, BLOCK B, JALAN WAWASAN 8,\r\nKAWASAN PERINDUSTRIA SRI GADING,', '83300', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '07-455 7823', '2018-09-02 23:21:19', '2018-09-02 23:21:19'),
(28, 11, 'App\\Company', 'JALAN DAMAI SATU \r\nJANDA BAIK', '28750', 'BENTONG', 'PAHANG', 'MALAYSIA', '09-221 0888', '2018-09-02 23:36:57', '2018-09-02 23:36:57'),
(29, 13, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-06 23:25:42', '2018-09-06 23:25:42'),
(30, 14, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-11 19:07:37', '2018-09-11 19:07:37'),
(31, 12, 'App\\Company', 'LOT PTD 4570, \r\nKAWASAN PERINDUSTRIAN TANJUNG AGAS,', '84000', 'MUAR', 'JOHOR', 'MALAYSIA', '06-956 5003', '2018-09-11 19:50:07', '2018-09-11 19:50:07'),
(32, 13, 'App\\Company', 'LOT PTD 4570, \r\nKAWASAN PERINDUSTRIAN TANJUNG AGAS,', '84000', 'MUAR', 'JOHOR', 'MALAYSIA', '06-9535004', '2018-09-11 19:50:43', '2018-09-11 19:50:43'),
(33, 14, 'App\\Company', '20 KM, JALAN PONTIAN LAMA, \r\nPULAI', '81110', 'PULAI', 'JOHOR', 'MALAYSIA', '+607 5212121', '2018-09-11 19:56:05', '2018-09-11 19:56:05'),
(34, 15, 'App\\Company', 'PLO 165, JALAN PERINDUSTRIAN 7, \r\nTANJUNG AGAS INDUSTRIAL ESTATE', '84000', 'MUAR', 'JOHOR', 'MALAYSIA', '+606 9525 202', '2018-09-11 20:03:31', '2018-09-11 20:03:31'),
(35, 16, 'App\\Company', '26&26A JALAN KEBUDAYAAN 18 , TAMAN UNIVERSITI', '81300', 'SKUDAI', 'JOHOR', 'MALAYSIA', '075215402', '2018-09-11 20:11:26', '2018-09-11 20:11:26'),
(36, 17, 'App\\Company', 'L.8.44, PLAZA ANGSANA, \r\nPUSAT BANDAR TAMPOI,', '81200', 'JOHOR BAHRU', 'JOHOR', 'MALAYSIA', '07-2359709', '2018-09-11 20:16:08', '2018-09-11 20:16:08'),
(37, 18, 'App\\Company', 'PTD 4069, (PLO 108), JALAN RUMBIA 4, TANJUNG LANGSAT INDUSTRIAL COMPLEX', '81700', 'PASIR GUDANG', 'JOHOR', 'MALAYSIA', '019-779 5888', '2018-09-11 20:34:23', '2018-09-11 20:34:23'),
(38, 19, 'App\\Company', 'NO 156 & 157, JALAN KENANGA 29 / 4, \r\nTAMAN INDAHPURA,', '81000', 'KULAIJAYA', 'JOHOR', 'MALAYSIA', '076625326', '2018-09-11 22:23:56', '2018-09-11 22:23:56'),
(39, 20, 'App\\Company', 'BLOK F, F3-004 B, BANGUNANTEKNO USAHAWAN, \r\nUNIVERSITI TUN HUSSEIN ONN MALAYSIA, PARIT RAJA', '86400', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '+606-9521521', '2018-09-11 22:40:13', '2018-09-11 22:40:13'),
(40, 21, 'App\\Company', 'NO 10-12, JALAN PERDANA 23/A \r\nTAMAN BUKIT PERDANA, BATU PAHAT', '83000', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '+607 432 1710', '2018-09-11 22:46:42', '2018-09-11 22:46:42'),
(41, 22, 'App\\Company', 'NO. 10, JALAN 9/7 TAMAN IKS SEKSYEN 9', '43650', 'BANDAR BARU BANGI', 'SELANGOR', 'MALAYSIA', '+603 8926 0012', '2018-09-11 22:52:30', '2018-09-11 22:52:30'),
(42, 23, 'App\\Company', '1882, Jalan Stadium, Alor Malai,', '05100', 'ALOR SETAR', 'KEDAH', 'MALAYSIA', '604-731 1988', '2018-09-12 00:05:11', '2018-09-12 00:05:11'),
(43, 24, 'App\\Company', 'NO 80, LORONG PUTIH 6, \r\nTAMAN RAKYAT MERGONG', '05150', 'ALOR SETAR', 'KEDAH', 'MALAYSIA', '04-7333688', '2018-09-12 00:13:57', '2018-09-12 00:13:57'),
(44, 25, 'App\\Company', 'No. 26 & 27, Jalan Patani,', '08000', 'SUNGAI PETANI', 'KEDAH', 'MALAYSIA', '04-423 5800', '2018-09-12 00:28:23', '2018-09-12 00:28:23'),
(45, 26, 'App\\Company', '2 Jalan Anggerik Vanilla R31/R Kota Kemuning Section 31', '40460', 'SHAH ALAM', 'SELANGOR', 'MALAYSIA', '603-5123 6123', '2018-09-12 00:47:25', '2018-09-12 00:47:25'),
(46, 27, 'App\\Company', 'PT 539,ARAS 02,KG CERANG, JALAN HOSPITAL', '15200', 'KOTA BHARU', 'KELANTAN', 'MALAYSIA', '097461142', '2018-09-12 18:04:17', '2018-09-12 18:04:17'),
(47, 28, 'App\\Company', 'PT 514, TINGKAT 1, RUMAH KEDAI LEMBAH SIREH, \r\nJALAN SULTANAH ZAINAB', '15050', 'KOTA BHARU', 'KELANTAN', 'MALAYSIA', '097413588', '2018-09-12 18:10:43', '2018-09-12 18:10:43'),
(48, 29, 'App\\Company', 'LOT 2009-C, JALAN SULTAN YAHYA PETRA,', '15200', 'KOTA BHARU', 'KELANTAN', 'MALAYSIA', '0139349400', '2018-09-12 18:19:59', '2018-09-12 18:19:59'),
(49, 30, 'App\\Company', 'PT 69, TINGKAT 1, WISMA YAMUD', '15350', 'KOTA BHARU', 'KELANTAN', 'MALAYSIA', '09-7488166', '2018-09-12 18:25:55', '2018-09-12 18:25:55'),
(50, 31, 'App\\Company', 'LOT 597, BANGUNAN MAIZA, JALAN ISMAIL PETRA,', '17500', 'TANAH MERAH', 'KELANTAN', 'MALAYSIA', '0199122255', '2018-09-12 18:45:33', '2018-09-12 18:45:33'),
(51, 32, 'App\\Company', 'No. 271, Jalan Maarof, Bangsar', '59000', 'KUALA LUMPUR', 'KUALA LUMPUR', 'MALAYSIA', '+603 2094 4200', '2018-09-12 19:24:10', '2018-09-12 19:24:10'),
(52, 33, 'App\\Company', 'PT 538 Jalan Kuala Krai\r\nTaman Puspa Jaya 1, Kok Lanas', '16450', 'KOTA BHARU', 'KELANTAN', 'MALAYSIA', '+609-788 0838 (HQ)', '2018-09-12 19:54:55', '2018-09-12 19:54:55'),
(53, 34, 'App\\Company', 'NO. M1-1-4 \r\nKOMPLEKS YAYASAN BELIA SEDUNIA', '75450', 'AYER KEROH', 'MELAKA', 'MALAYSIA', '+6062318222', '2018-09-12 20:26:35', '2018-09-12 20:26:35'),
(54, 35, 'App\\Company', '54-A JALAN LAKSMANA CHENG HO', '75000', 'MELAKA', 'MELAKA', 'MALAYSIA', '062845050', '2018-09-12 20:50:11', '2018-09-12 20:50:11'),
(55, 36, 'App\\Company', '2020, JALAN SEMABOK', '75050', 'MELAKA', 'MELAKA', 'MALAYSIA', '06 – 288 2228', '2018-09-12 23:12:42', '2018-09-12 23:12:42'),
(56, 15, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-18 19:28:46', '2018-10-18 19:28:46'),
(57, 16, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-23 16:55:26', '2018-10-23 16:55:26'),
(60, 37, 'App\\Company', 'NO. 35 SUITE B JALAN FLORA UTAMA', '83000', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '017-7878139', '2018-11-07 19:28:03', '2018-11-07 19:28:03'),
(61, 38, 'App\\Company', 'KARUNG BERKUNCI 518,', '86009', 'KLUANG', 'JOHOR', 'MALAYSIA', '07-7724040', '2018-11-07 20:02:05', '2018-11-07 20:02:05'),
(62, 39, 'App\\Company', 'WISMA PENBANDARAN KLUANG JALAN KOTA TINGGI,', '86000', 'KLUANG', 'JOHOR', 'MALAYSIA', '07-7771401', '2018-11-07 20:04:26', '2018-11-07 20:04:26'),
(63, 40, 'App\\Company', 'NO. 33A, JLN UNIVERSITI 4, TAMAN UNIVERSITI , PARIT RAJA,', '86400 PARIT RAJA, BATU PAHAT', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '019-7276903', '2018-11-07 20:17:26', '2018-11-07 20:17:26'),
(64, 41, 'App\\Company', 'ARAS 4, BANGUNAN DATO\' ABDUL RAHMAN ANDAK, ISKANDAR PUTERI,', '79582', 'NUSAJAYA,', 'JOHOR', 'MALAYSIA', '07-2666987', '2018-11-07 20:30:08', '2018-11-07 20:30:08'),
(65, 42, 'App\\Company', 'Block 5, Unipark Suria, \r\nJalan Ikram-Uniten,', '43000', 'KAJANG,', 'SELANGOR', 'MALAYSIA', '03 8738 3375', '2018-11-07 20:46:30', '2018-11-07 20:46:30'),
(66, 43, 'App\\Company', 'NO. 1, 1ST FLOOR, JALAN PERDANA 14, TAMAN JUNID PERDANA, JALAN ABDUL RAHMAN,', '84000', 'MUAR,', 'JOHOR', 'MALAYSIA', '06-9555500', '2018-11-07 22:32:05', '2018-11-07 22:32:05'),
(67, 44, 'App\\Company', 'NO. 17 JALAN DAUD, KG BARU,', '50300', 'KUALA LUMPUR', 'KUALA LUMPUR', 'MALAYSIA', '03-2691 3007', '2018-11-07 22:46:36', '2018-11-07 22:46:36'),
(68, 45, 'App\\Company', 'Bangunan Zikay, 53, \r\nJalan Raja Alang, \r\nKampung Baru,', '50300,', 'KUALA LUMPUR', 'KUALA LUMPUR', 'MALAYSIA', '03 2698 8789', '2018-11-07 23:01:12', '2018-11-07 23:01:12'),
(69, 46, 'App\\Company', 'NO. 19, JLN YAACOB LATIF (JLN TENTERAM), BANDAR TUN RAZAK,', '56000', 'CHERAS,', 'KUALA LUMPUR', 'MALAYSIA', '03-91955555', '2018-11-07 23:08:28', '2018-11-07 23:08:28'),
(71, 18, 'App\\User', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-24 09:30:14', '2018-11-24 09:30:14'),
(73, 17, 'App\\User', '12, BLOCK B, JALAN WAWASAN 8,\r\nKAWASAN PERINDUSTRIA SRI GADING,', '86400', 'BATU PAHAT', 'JOHOR', 'MALAYSIA', '0137662312', '2018-11-25 19:43:01', '2018-11-25 19:43:01'),
(74, 47, 'App\\Company', 'parit raja', '86400', 'BATU PAHAT', '981102031234', 'MALAYSIA', '11111111123', '2018-11-25 19:47:03', '2018-11-25 19:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hr_officer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `no_1`, `no_2`, `fax_1`, `fax_2`, `email`, `hr_officer`, `status`, `created_at`, `updated_at`) VALUES
(3, 'B.K.B HEVEA PRODUCTS', NULL, '67878678', NULL, NULL, 'sales@bkbhevea.com', 'petronas lui', 1, '2018-08-18 19:10:22', '2018-08-23 23:25:27'),
(4, 'BLUESCOPE LYSAGHT (SABAH) SDN.BHD', NULL, NULL, NULL, NULL, 'sawitrecruit@sawitkinabalu.com.my', NULL, 1, '2018-08-18 19:14:43', '2018-08-18 19:14:43'),
(7, '1MP NETWORK SDN BHD', NULL, NULL, '074535168', NULL, 'info1mpnetwork@gmail.com', NULL, 0, '2018-09-02 22:11:48', '2018-09-02 22:11:48'),
(9, 'A PLUS AUTOMATION (M) SDN BHD', NULL, '017-755 5699', '07-455 6823', NULL, 'joshuatee@plus-am.com', NULL, 0, '2018-09-02 22:34:48', '2018-09-02 22:34:48'),
(10, 'A PLUS AUTOMATION (M) SDN BHD', NULL, '017-755 5699', '07-455 6823', NULL, 'joshuatee@plus-am.com', NULL, 0, '2018-09-02 23:21:19', '2018-09-02 23:21:19'),
(11, 'ELEKTRISOLA (MALAYSIA) SDN BHD', NULL, NULL, NULL, NULL, 'sales@elektrisola.my', NULL, 1, '2018-09-02 23:36:56', '2018-09-06 23:26:45'),
(13, 'KOMUNITI GIATMARA LEDANG', NULL, NULL, '06-9535004', NULL, 'gmledang@giatmara.edu.my', NULL, 1, '2018-09-11 19:50:43', '2018-09-11 19:51:56'),
(14, 'PULAI SPRING RESORT', NULL, '+607 521 2121', '+607521 1818', NULL, 'asst.hr.mgr@pulaisprings.com', NULL, 1, '2018-09-11 19:56:05', '2018-09-11 19:58:30'),
(15, 'A-ZUM LOCKS & FITTINGS SDN BHD', NULL, NULL, '+606 9520 105', NULL, 'sales@a-zum.com', NULL, 1, '2018-09-11 20:03:31', '2018-09-11 20:11:42'),
(16, 'BABTIE JURUTERA PERUNDING SDN BHD', NULL, NULL, NULL, NULL, 'bjpkl@time.net.my', NULL, 1, '2018-09-11 20:11:26', '2018-09-11 20:11:56'),
(17, 'BADAN CEMERLANG SDN. BHD.', NULL, '07-2360449', '07-2377566', NULL, 'badan@badanbookstore.com', NULL, 1, '2018-09-11 20:16:08', '2018-09-11 20:16:31'),
(18, 'BAHRU STAINLESS SDN BHD', NULL, NULL, '607-251 3179', NULL, 'dario.mesonero@bahrustainless.com', NULL, 1, '2018-09-11 20:34:23', '2018-09-11 22:22:55'),
(19, 'BALQIEZA ENTERPRISE', NULL, NULL, NULL, NULL, 'enquiry@sennego.com', NULL, 1, '2018-09-11 22:23:56', '2018-09-11 22:24:22'),
(20, 'BARACHO TECH & SERVICES SDN BHD', NULL, NULL, NULL, NULL, 'fazida@baracho.com.my', NULL, 1, '2018-09-11 22:40:13', '2018-09-11 22:40:33'),
(21, 'BCB CONSTRUCTION SDN. BHD.', NULL, '+607 431 3510', NULL, NULL, 'batupahat@bcbbhd.com.my', NULL, 1, '2018-09-11 22:46:42', '2018-09-11 22:46:59'),
(22, 'BINA INTEGRATED TECHNOLOGY SDN BHD', NULL, '+603 8926 0013', '+603 8926 0023', NULL, 'info@binatech.biz', NULL, 1, '2018-09-11 22:52:29', '2018-09-11 22:53:33'),
(23, 'AIMA CONSTRUCTION SDN BHD', NULL, '604-732 9959', '604-733 9367', NULL, 'aima1881@gmail.com', NULL, 1, '2018-09-12 00:05:11', '2018-09-12 00:05:26'),
(24, 'ANG AH CHIN CONSTRUCTION SDN. BHD.', NULL, NULL, '04-7333080', NULL, 'info@angahchin.com.my', NULL, 1, '2018-09-12 00:13:57', '2018-09-12 00:14:08'),
(25, 'JESIN CONSTRUCTION SDN. BHD.', NULL, NULL, NULL, NULL, 'sales@jesin.com.my', NULL, 1, '2018-09-12 00:28:23', '2018-09-12 00:28:39'),
(26, 'PARAMOUNT ENGINEERING & CONSTRUCTION SDN BHD', NULL, '603-5123 6168', NULL, NULL, 'info@pecsb.com.my', NULL, 1, '2018-09-12 00:47:25', '2018-09-12 17:55:49'),
(27, 'DUWIK CONSTRUCTION', NULL, '+60199388993', NULL, NULL, 'chemat8989@yahoo.com', NULL, 1, '2018-09-12 18:04:17', '2018-09-12 18:04:32'),
(28, 'ELITE FORTE CONSTRUCTION SDN BHD', NULL, NULL, NULL, NULL, 'eliteforte2010@gmail.com', NULL, 1, '2018-09-12 18:10:43', '2018-09-12 18:10:59'),
(29, 'HAIQAL CONSTRUCTION', NULL, '09-7473334', '09-7470734', NULL, 'haiqal.construction@gmail.com', NULL, 1, '2018-09-12 18:19:59', '2018-09-12 18:20:11'),
(30, 'KAMAL T.I. CONSTRUCTION & TRADING SDN. BHD.', NULL, NULL, NULL, NULL, 'kamaltisb@yahoo.com', NULL, 1, '2018-09-12 18:25:55', '2018-09-12 18:26:07'),
(31, 'MAIZA CONSTRUCTION & TRADING', NULL, '09-955 5255', NULL, NULL, 'kamaalul@yahoo.com', NULL, 1, '2018-09-12 18:45:31', '2018-09-12 18:46:00'),
(32, 'Guan Corporate Mall Sdn. Bhd.', NULL, NULL, '+603 2095 2370', NULL, 'e-info@guan.com.my', NULL, 1, '2018-09-12 19:24:08', '2018-09-12 19:25:24'),
(33, 'SKT CONSTRUCTION SDN BHD', NULL, '+609-747 2838 (KB)', '+609-788 0833 (HQ)', '+609-747 2830 (KB)', 'enquiry@sktc.com.my', NULL, 1, '2018-09-12 19:54:55', '2018-09-12 19:55:13'),
(34, 'AGIBS ENGINEERING & CONSTRUCTION SDN. BHD.', NULL, NULL, '+6062316222', NULL, 'info@agibs.com.my', NULL, 1, '2018-09-12 20:26:35', '2018-09-12 20:27:22'),
(35, 'BOH HUAT CHAN CONSTRUCTION SDN BHD', NULL, NULL, '062836060', NULL, 'bhccsb@tm.net.my', NULL, 1, '2018-09-12 20:50:11', '2018-09-12 20:53:23'),
(37, 'FACO TRADING', NULL, '07-4332530', '07-4332530', NULL, 'facotradingbp@gmail.com', 'PN. SITI ZAEMA BT MOHD TAIB', 1, '2018-11-07 19:28:03', '2018-11-07 20:19:03'),
(38, 'JABATAN KERJA RAYA KLUANG', NULL, '07-7724041', '07-7744030', NULL, 'kluang@jkr.gov.my', 'EN. MUHAMMAD HANAFIAH BIN SHARIF', 1, '2018-11-07 20:02:04', '2018-11-07 20:19:22'),
(39, 'MAJLIS PERBANDARAN KLUANG', NULL, '07-7791469', '07-7713209', NULL, 'aduan@mpkluang.gov.my', 'EN. MOHAMAD RADIF', 1, '2018-11-07 20:04:26', '2018-11-07 20:19:41'),
(40, 'PRESTON GEOCEM SDN BHD', NULL, '07- 453 220', NULL, NULL, 'prestongeocem@gmail.com', 'EN. MOHD ZAINIZAN', 1, '2018-11-07 20:17:25', '2018-11-07 20:19:58'),
(41, 'PEJABAT PENGARAH KERJA RAYA JOHOR', NULL, '07-2666988', '07-2661623', '07-2661624', 'jkrjohor@johor.gov.my', NULL, 1, '2018-11-07 20:30:08', '2018-11-07 20:33:08'),
(42, 'KUMPULAN IKRAM SDN BHD', NULL, NULL, '03 8736 5406', NULL, 'info@ikram.com.my', NULL, 1, '2018-11-07 20:46:29', '2018-11-07 20:46:47'),
(43, 'K&L BUILDING CONSTRUCTION (M) SDN BHD', NULL, NULL, '06-9555800', NULL, '81342@panpages1.directoryup.com', 'LAU KENG YONG', 1, '2018-11-07 22:32:05', '2018-11-07 22:32:29'),
(44, 'JURUTERA PERUNDING ZAABA SDN BHD', NULL, '03-2691 3009', '03-2692 5624', '03-2698 6239', 'info@jpz.com.my', 'EN. ZAHIN AIMAN', 1, '2018-11-07 22:46:35', '2018-11-07 22:46:51'),
(45, 'KEMBANG SERANTAU SDN BHD', NULL, '03 2692 4789', NULL, NULL, 'info@zikay.com', 'PN. MARIANA RAMLI', 1, '2018-11-07 23:01:11', '2018-11-07 23:01:40'),
(46, 'INSTITUT LATIHAN DEWAN BANDARAYA KUALA LUMPUR', NULL, NULL, '03-91314005', NULL, 'idb@dbkl.gov.my', NULL, 1, '2018-11-07 23:08:28', '2018-11-07 23:30:00'),
(47, 'vortechron', NULL, '323234234', '434534534', '535345345', 'kluang@jkr.gov.my', 'encik imran', 1, '2018-11-25 19:47:03', '2018-11-25 19:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `company_registration`
--

CREATE TABLE `company_registration` (
  `id` int(10) UNSIGNED NOT NULL,
  `registration_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_registration`
--

INSERT INTO `company_registration` (`id`, `registration_id`, `company_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 3, 3, 1, '2018-08-18 19:22:41', '2018-08-23 23:25:42'),
(6, 3, 4, 0, '2018-08-18 19:22:53', '2018-08-18 19:22:53'),
(10, 6, 3, 1, '2018-08-19 20:44:27', '2018-11-20 06:57:37'),
(12, 10, 24, 1, '2018-09-23 19:33:41', '2018-09-23 19:35:19'),
(13, 10, 33, 0, '2018-09-23 19:45:00', '2018-09-23 19:45:00'),
(14, 10, 11, 0, '2018-09-23 19:45:17', '2018-09-23 19:45:17'),
(16, 13, 24, 1, '2018-11-25 19:46:03', '2018-11-25 19:52:07'),
(17, 13, 47, 0, '2018-11-25 19:49:23', '2018-11-25 19:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2018_08_03_075205_create_registrations_table', 1),
(41, '2018_08_03_075851_create_company_registration_table', 1),
(42, '2018_08_03_075919_create_companies_table', 1),
(43, '2018_08_03_075949_create_addresses_table', 1),
(44, '2018_08_10_025757_create_constraints', 1),
(45, '2018_08_10_042522_create_permission_tables', 1),
(46, '2018_08_10_043100_create_roles', 1),
(47, '2018_08_17_081342_create_statuses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 8),
(1, 'App\\User', 9),
(1, 'App\\User', 10),
(1, 'App\\User', 12),
(1, 'App\\User', 15),
(1, 'App\\User', 16),
(1, 'App\\User', 17),
(1, 'App\\User', 18),
(2, 'App\\User', 2),
(2, 'App\\User', 4),
(2, 'App\\User', 5),
(2, 'App\\User', 13),
(2, 'App\\User', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adlipower@gmail.com', '$2y$10$u7Drp5/BzPHlCzF/E85H8Od0wjyBR8uHxYMSYn7xUXrz02y9WSeLm', '2018-09-06 23:27:43'),
('nsnursyahirah95@gmail.com', '$2y$10$CXQXUoLCWiPThn43ZjZbNO51GGaRjG2B2fJfmJCFG265fjo3PhIpK', '2018-09-12 17:38:28'),
('ieraguys@gmail.com', '$2y$10$DV6wKhX/etuTn/mgHDr0gOHvWsRft3kzpCuwKUBWeSfNvpGnjgq3O', '2018-09-12 22:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_at` timestamp NULL DEFAULT NULL,
  `end_at` timestamp NULL DEFAULT NULL,
  `period` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `user_id`, `semester`, `session`, `start_at`, `end_at`, `period`, `status`, `quota`, `created_at`, `updated_at`) VALUES
(3, 6, '6', '20182019', '2018-09-01 16:00:00', '2018-12-26 16:00:00', '17', 'registered', '3', '2018-08-18 19:00:43', '2018-08-18 19:00:43'),
(6, 8, '6', '20172018', '2018-08-19 16:00:00', '2018-09-01 16:00:00', '21', 'registered', '3', '2018-08-19 20:44:05', '2018-08-19 20:44:05'),
(8, 12, '5', '20182019', '2018-09-22 16:00:00', '2019-03-06 16:00:00', '24', 'registered', '3', '2018-09-02 22:37:20', '2018-09-02 22:37:20'),
(10, 1, '6', '20182019', '2018-09-23 16:00:00', '2018-09-23 16:00:00', '1', 'registered', '4', '2018-09-23 19:32:14', '2018-09-23 19:45:50'),
(13, 17, '6', '20182019', '2018-11-25 16:00:00', '2018-11-25 16:00:00', '5', 'registered', '4', '2018-11-25 19:44:50', '2018-11-25 19:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'student', 'web', '2018-08-17 00:24:30', '2018-08-17 00:24:30'),
(2, 'administrator', 'web', '2018-08-17 00:24:30', '2018-08-17 00:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matric` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `ic`, `matric`, `profile_picture`, `programme`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'syahirah', '990203139988', 'adlipower', 'profile_pictures/FIyRgZpDsezis1XXHjeQYEO9ULkn0llxPdMIpJq0.jpeg', 'DTG', 'adlipower@gmail.com', '$2y$10$t7x8/HiTdFU.i4ERKmHCceyvIkxdRcZ7Gz.hyvBtwrA3D4H4/3vCy', 'umSwxSAuWF48uyekVLg7Nh9ooznoSq2Pie9S7DGhR7FomsilWVTips0shJQl', '2018-08-17 00:25:06', '2018-08-23 23:18:41'),
(2, NULL, NULL, NULL, NULL, NULL, 'sayaamiruladli@gmail.com', '$2y$10$AdYv93JNmst.6Jj1jw4crOi5pHYtzszGV8FSuRpwRler7gGyWOdD6', 'aHBjP8jKlyxomcjHAJHsiupHVmYRpqYIuavVFHVyCT23QaKfciOWVpcEqt1U', '2018-08-17 01:09:06', '2018-08-17 01:09:06'),
(4, NULL, NULL, NULL, NULL, NULL, 'sayaamiruladli1@gmail.com', '$2y$10$uLRHjGSNkIghMwvMBM7a.eXfFJKqmetRud1bw0PrRjtr7RyLlOtyO', NULL, '2018-08-17 01:09:54', '2018-08-17 01:09:54'),
(5, NULL, NULL, NULL, NULL, NULL, 'sayaamiruladli123@gmail.com', '$2y$10$oV0PpPGcjp4rZqnvMJuXC.9DYq41JJ0wwnGvX6N/MVHXfFAV4Rx1K', NULL, '2018-08-17 01:09:59', '2018-08-17 01:09:59'),
(6, NULL, NULL, 'di150051', NULL, NULL, 'ieraguys@gmail.com', '$2y$10$0RJRDp0.mFywkZzZ7sLtzuUBVsyX35swvHjU2sMglZA5T4L6p8x4q', NULL, '2018-08-18 18:41:17', '2018-08-18 18:41:17'),
(8, NULL, NULL, 'di150004', NULL, NULL, 'asdasd@gmail.com', '$2y$10$pQAldJQPNy0pv6psc.KC4uorouFkQtv9puPCGemfRXdXuvGGzZyHe', NULL, '2018-08-19 20:42:35', '2018-08-19 20:42:35'),
(9, NULL, NULL, 'nssss', NULL, NULL, 'nsnursyahirah95@gmail.com', '$2y$10$mppLPMtXVXigRR9pYz5N6eSnPLSiUBRotlgHjgmEaMJGUzbqedLme', 'UhXPMBDUV3a10SXooffkhKFsQsfsspTA0KJzKwys8rdOqtfHMX0zBePcN4z6', '2018-08-24 00:03:06', '2018-08-24 00:06:09'),
(10, NULL, NULL, 'di150011', NULL, NULL, 'qwertyuiop@gmail.com', '$2y$10$ECyT.mAi6q9yj4562LkwpeGEewCaY50nmf7D9ZlJ2LrzOkoSHgbvS', NULL, '2018-08-25 19:47:04', '2018-08-25 19:47:04'),
(12, NULL, NULL, 'abcd123', NULL, NULL, '123abc@gmail.com', '$2y$10$h8sbjJpdsk64rAuqjpe.6eGx4cSOi3k8MSVhQrFXsSZja6QG54q1i', NULL, '2018-09-02 22:36:05', '2018-09-02 22:36:05'),
(13, NULL, NULL, NULL, NULL, NULL, 'asdasdasd@gmail.com', '$2y$10$41AbdPrOwSYKZNMptCCU8edm8/IKWHn1zfV/VzUrtgk.fInSUhm4a', 'vTnbjkR5uRUkvtaxiWKU3SXoPB5jV1Xhk9Y3sY2MXjwM1jbsMT9gntlbLJmH', '2018-09-06 23:25:41', '2018-09-06 23:25:41'),
(14, NULL, NULL, NULL, NULL, NULL, 'ikhwan@kktmsrigading.edu.my', '$2y$10$h7PaX1q1EP05WWd44ON8G.xyGsCXe6kQKg94v3wo0kBw8Vzgm1FJK', 'uZmLz9bzKy3PUcWTfcDtseRkV6Jc0EGDbMWHENfvvCN73IuzTf0xjSMUjn4q', '2018-09-11 19:07:37', '2018-09-11 19:07:37'),
(15, NULL, NULL, 'di150033', NULL, 'Diploma Teknologi Forensik Bangunan & Penyelenggaraan (DTF)', 'syahirah11@gmail.com', '$2y$10$ksgxewRt50jAcktVlBaOQeZq8YXGPwFWb2FvMlm5Mtp9tIO/sDdFm', 'pwOrKKonTr5W37q8NCxUV8EiSmKzq8Au6WWDWW4ZvkWsBRCtnjQ66eqhQPBg', '2018-10-18 19:28:45', '2018-10-18 19:28:45'),
(16, NULL, NULL, 'di155003', NULL, 'Diploma Teknologi Forensik Bangunan & Penyelenggaraan (DTF)', 'joshuatee@plus-am.com', '$2y$10$cjyubXkNxLPTO2ynZ6kh6OrAedCHeEhLvsLqKavSnghXguBEVF/wS', 'cNK4o26pv2dryaaLLGxZbem80u5cvWmVCK7fbDD5bdkzEPpPlloo6oJBPfbF', '2018-10-23 16:55:25', '2018-10-23 16:55:25'),
(17, 'NUR SYAKILA ADHWA BINTI ZAIDI', '951123-01-2233', '3330145', 'profile_pictures/JIihveFTo1OKVC19uAfXbAikgjFaH99LnLuIoBKq.jpeg', 'Diploma Teknologi Pembinaan Geo-Struktur (DTG)', 'syakilaadhwa@gmail.com', '$2y$10$wCIEL3lfWmxT21GX3TJ3q.eKi2meoabP6lSoTGNTKYoBUezoNSjGm', '1HyiDllkRL6s9UGe3eGNQh2iyh0uWgmyIs80Cqb9TLGZK0HN0mNvDcj1EY5Y', '2018-11-07 19:15:06', '2018-11-07 19:22:59'),
(18, NULL, NULL, '3330146', NULL, 'Diploma Teknologi Sistem Pembinaan Termaju (DTC)', 'ammarhakim@gmail.com', '$2y$10$jw8Ai.UcLnIgwaAt8VqKWelTduVBqLYNEYL9OwI1QKoewoQGsEApq', NULL, '2018-11-24 09:30:14', '2018-11-24 09:30:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_registration`
--
ALTER TABLE `company_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_registration_registration_id_foreign` (`registration_id`),
  ADD KEY `company_registration_company_id_foreign` (`company_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registrations_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statuses_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_ic_unique` (`ic`),
  ADD UNIQUE KEY `users_matric_unique` (`matric`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `company_registration`
--
ALTER TABLE `company_registration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_registration`
--
ALTER TABLE `company_registration`
  ADD CONSTRAINT `company_registration_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `company_registration_registration_id_foreign` FOREIGN KEY (`registration_id`) REFERENCES `registrations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `registrations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
