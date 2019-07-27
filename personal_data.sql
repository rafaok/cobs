-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 12:07 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jasaguna`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE IF NOT EXISTS `personal_data` (
  `photo` varchar(30) NOT NULL,
  `photo_name` varchar(30) NOT NULL,
  `photo_upload` date NOT NULL,
  `id` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `education` varchar(2) NOT NULL,
  `pob` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(2) NOT NULL,
  `merrital_status` varchar(2) NOT NULL,
  `phone` int(13) NOT NULL,
  `e_addr` varchar(30) NOT NULL,
  `province` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `ktp` int(16) NOT NULL,
  `kk` int(16) NOT NULL,
  `npwp` int(15) DEFAULT NULL,
  `npwp_addr` varchar(200) DEFAULT NULL,
  `bpjs_tk_status` varchar(9) NOT NULL,
  `bpjs_tk` int(10) DEFAULT NULL,
  `bpjs_tk_desc` varchar(50) DEFAULT NULL,
  `bpjs_kes_status` varchar(9) NOT NULL,
  `bpjs_kes` int(16) DEFAULT NULL,
  `bpjs_kes_desc` varchar(50) DEFAULT NULL,
  `bpjs_pens_status` varchar(9) NOT NULL,
  `bpjs_pens` int(11) DEFAULT NULL,
  `bpjs_pens_desc` varchar(50) DEFAULT NULL,
  `card_status` varchar(19) NOT NULL,
  `card_number` int(17) NOT NULL,
  `ac_code` varchar(4) NOT NULL,
  `ac_name` varchar(30) NOT NULL,
  `ac_num` int(15) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `note` varchar(200) DEFAULT NULL,
  `status` varchar(9) NOT NULL,
  `position` varchar(30) NOT NULL,
  `position_desc` varchar(30) NOT NULL,
  `project` varchar(20) NOT NULL,
  `work_loc` varchar(20) NOT NULL,
  `join_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `sal_group` varchar(20) NOT NULL,
  `month_rate` int(8) NOT NULL,
  `sal_type` varchar(20) NOT NULL,
  `transport` int(7) DEFAULT NULL,
  `dailyrho` int(7) DEFAULT NULL,
  `h_rate` int(7) DEFAULT NULL,
  `otrh` int(7) DEFAULT NULL,
  `ot_type` varchar(20) DEFAULT NULL,
  `pda` int(7) DEFAULT NULL,
  `dsa` int(7) DEFAULT NULL,
  `sa` int(7) DEFAULT NULL,
  `fix_allowance` int(8) NOT NULL,
  `jkk` float NOT NULL,
  `jht1` float NOT NULL,
  `jht2` float NOT NULL,
  `jk` float NOT NULL,
  `kes1` float NOT NULL,
  `kes2` float NOT NULL,
  `jp1` float NOT NULL,
  `jp2` float NOT NULL,
  `cont_name` varchar(30) NOT NULL,
  `cont_phone` int(13) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `cv` varchar(30) NOT NULL,
  `cv_name` varchar(30) NOT NULL,
  `cv_upload` date NOT NULL,
  `offer_letter` varchar(30) NOT NULL,
  `offer_letter_name` varchar(30) NOT NULL,
  `offer_letter_upload` date NOT NULL,
  `join_letter` varchar(30) NOT NULL,
  `join_letter_name` varchar(30) NOT NULL,
  `join_letter_upload` date NOT NULL,
  `cna` varchar(30) NOT NULL,
  `cna_name` varchar(30) NOT NULL,
  `cna_upload` date NOT NULL,
  `hid` varchar(30) NOT NULL,
  `hid_name` varchar(30) NOT NULL,
  `hid_upload` date NOT NULL,
  `cp_bpjs_kes` varchar(30) NOT NULL,
  `cp_bpjs_kes_name` varchar(30) NOT NULL,
  `cp_bpjs_kes_upload` date NOT NULL,
  `cp_bpjs_tk` varchar(30) NOT NULL,
  `cp_bpjs_tk_name` varchar(30) NOT NULL,
  `cp_bpjs_tk_upload` date NOT NULL,
  `cp_bpjs_pens` varchar(30) NOT NULL,
  `cp_bpjs_pens_name` varchar(30) NOT NULL,
  `cp_bpjs_pens_upload` date NOT NULL,
  `cp_ktp` varchar(30) NOT NULL,
  `cp_ktp_name` varchar(30) NOT NULL,
  `cp_ktp_upload` date NOT NULL,
  `cp_kk` varchar(30) NOT NULL,
  `cp_kk_name` varchar(30) NOT NULL,
  `cp_kk_upload` date NOT NULL,
  `cp_bank_acc` varchar(30) NOT NULL,
  `cp_bank_acc_name` varchar(30) NOT NULL,
  `cp_bank_acc_upload` date NOT NULL,
  `cp_npwp` varchar(30) NOT NULL,
  `cp_npwp_name` varchar(30) NOT NULL,
  `cp_npwp_upload` date NOT NULL,
  `cp_akta` varchar(30) NOT NULL,
  `cp_akta_name` varchar(30) NOT NULL,
  `cp_akta_upload` date NOT NULL,
  `upload_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_data`
--

INSERT INTO `personal_data` (`photo`, `photo_name`, `photo_upload`, `id`, `name`, `education`, `pob`, `dob`, `gender`, `merrital_status`, `phone`, `e_addr`, `province`, `kab`, `kec`, `kel`, `address`, `ktp`, `kk`, `npwp`, `npwp_addr`, `bpjs_tk_status`, `bpjs_tk`, `bpjs_tk_desc`, `bpjs_kes_status`, `bpjs_kes`, `bpjs_kes_desc`, `bpjs_pens_status`, `bpjs_pens`, `bpjs_pens_desc`, `card_status`, `card_number`, `ac_code`, `ac_name`, `ac_num`, `bank_name`, `note`, `status`, `position`, `position_desc`, `project`, `work_loc`, `join_date`, `finish_date`, `sal_group`, `month_rate`, `sal_type`, `transport`, `dailyrho`, `h_rate`, `otrh`, `ot_type`, `pda`, `dsa`, `sa`, `fix_allowance`, `jkk`, `jht1`, `jht2`, `jk`, `kes1`, `kes2`, `jp1`, `jp2`, `cont_name`, `cont_phone`, `relation`, `cv`, `cv_name`, `cv_upload`, `offer_letter`, `offer_letter_name`, `offer_letter_upload`, `join_letter`, `join_letter_name`, `join_letter_upload`, `cna`, `cna_name`, `cna_upload`, `hid`, `hid_name`, `hid_upload`, `cp_bpjs_kes`, `cp_bpjs_kes_name`, `cp_bpjs_kes_upload`, `cp_bpjs_tk`, `cp_bpjs_tk_name`, `cp_bpjs_tk_upload`, `cp_bpjs_pens`, `cp_bpjs_pens_name`, `cp_bpjs_pens_upload`, `cp_ktp`, `cp_ktp_name`, `cp_ktp_upload`, `cp_kk`, `cp_kk_name`, `cp_kk_upload`, `cp_bank_acc`, `cp_bank_acc_name`, `cp_bank_acc_upload`, `cp_npwp`, `cp_npwp_name`, `cp_npwp_upload`, `cp_akta`, `cp_akta_name`, `cp_akta_upload`, `upload_on`) VALUES
('', '', '0000-00-00', 'a', 'aku', 'c', 'd', '0000-00-00', 'e', '', 0, '', '', '', '', '', '', 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00'),
('', '', '0000-00-00', 'q', 'w', 'e', 'r', '0000-00-00', 't', '', 0, '', '', '', '', '', '', 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
