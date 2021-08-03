-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 09:42 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livetracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `check` text NOT NULL,
  `display` text NOT NULL,
  `indate` text NOT NULL,
  `intime` text NOT NULL,
  `type` text NOT NULL,
  `udate` text NOT NULL,
  `utime` text NOT NULL,
  `udatetime` text NOT NULL,
  `remarks` text NOT NULL,
  `diffe1` text NOT NULL,
  `difference` text NOT NULL,
  `buyer` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`id`, `user`, `check`, `display`, `indate`, `intime`, `type`, `udate`, `utime`, `udatetime`, `remarks`, `diffe1`, `difference`, `buyer`, `status`) VALUES
(1, 'store', 'overall', '', 'StoreInDate', 'StoreInTime', 'GarmentType', 'SIDate', 'SITime', 'SIDateTime', 'SRemarks', '', '', 'Buyers', 'SIStatus'),
(2, 'cuttingin', 'overall', 'cuttingin', 'CuttingInDate', 'CuttingInTime', 'GarmentType', 'CIDate', 'CITime', 'CIDateTime', 'CRemarks', 'SIDateTime', 'SI&CI Time', '', 'CIStatus'),
(3, 'cuttingout', 'overall\r\n', 'cuttingout', 'CuttingOutDate', 'CuttingOutTime', 'GarmentType', 'CODate', 'COTime', 'CODateTime', 'CRemarks', 'CIDateTime', 'CI&CO Time', '', 'COStatus'),
(4, 'lining', 'overall', 'lining', 'LiningDate', 'LiningTime', 'GarmentType', 'LDate', 'LTime', 'LDateTime', 'LRemarks', 'CODateTime', 'CO&L Time', '', 'LStatus'),
(5, 'front', 'overall', 'front', 'FrontDate', 'FrontTime', 'GarmentType', 'FDate', 'FTime', 'FDateTime', 'FRemarks', 'LDateTime', 'L&F Time', '', 'FStatus'),
(6, 'sleevebundling', 'overall', 'sleevebundling', 'SleeveBundlingDate', 'SleeveBundlingTime', 'GarmentType', 'SBDate', 'SBTime', 'SBDateTime', 'SBRemarks', 'FDateTime', 'F&SB Time', '', 'SBStatus'),
(7, 'jprepressing', 'overall', 'jacketprepressing', 'PrePressingDate', 'PrePressingTime', 'GarmentType', 'JPDate', 'JPTime', 'JPDateTime', 'JPRemarks', 'SBDateTime', 'SB&JP Time', '', 'JPStatus'),
(8, 'sideseam', 'overall', 'sideseam', 'SideSeamDate', 'SideSeamTime', 'GarmentType', 'SSDate', 'SSTime', 'SSDateTime', 'SSRemarks', 'CODateTime', 'CO&SS Time', '', 'SSStatus'),
(9, 'tprepressing', 'overall', 'trouserprepressing', 'PrePressingDate', 'PrePressingTime', 'GarmentType', 'TPDate', 'TPTime', 'TPDateTime', 'TPRemarks', 'SSDateTime', 'SS&TP Time', '', 'TPStatus'),
(10, 'vestout', 'overall', 'vestout', 'VestOutDate', 'VestOutTime', 'GarmentType', 'VODate', 'VOTime', 'VODateTime', 'VORemarks', 'CODateTime', 'CO&VO Time', '', 'VOStatus'),
(11, 'warehouse', 'overall', 'warehouse', 'WarehouseDate', 'WarehouseTime', 'GarmentType', 'WHDate', 'WHTime', 'WHDateTime', 'WHRemarks', 'VODateTime', 'VO&WH Time', '', 'WHStatus'),
(12, 'Dispatch', 'overall', 'dispatch', 'DispatchDate', 'DispatchTime', 'GarmentType', 'DPDate', 'DPTime', 'DPDateTime', 'DPRemarks', 'WHDateTime', 'WH&DP Time', '', 'DPStatus');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `sno` int(11) NOT NULL,
  `buyer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`sno`, `buyer`) VALUES
(1, '555'),
(2, 'Lambton'),
(3, 'Transglobal'),
(4, 'Devered'),
(5, 'Tailorman'),
(6, 'Munro'),
(7, 'fdfd'),
(8, 'rttt');

-- --------------------------------------------------------

--
-- Table structure for table `deleted`
--

CREATE TABLE `deleted` (
  `SNO` int(11) NOT NULL,
  `Date` date NOT NULL,
  `OrderID` varchar(50) NOT NULL,
  `AOrderID` varchar(50) NOT NULL,
  `Barcode` varchar(200) NOT NULL,
  `GarmentType1` varchar(50) NOT NULL,
  `Type` text NOT NULL,
  `JKT` int(11) NOT NULL,
  `TRS` int(11) NOT NULL,
  `WST` int(11) NOT NULL,
  `ClothBox_No` varchar(100) NOT NULL,
  `Cloth_at_Store` date NOT NULL,
  `HalfMade_FullCanvas` varchar(50) NOT NULL,
  `Half_Canvas` varchar(50) NOT NULL,
  `Orderstatus` text NOT NULL,
  `Cloth_Article` varchar(500) NOT NULL,
  `Lining_Article` varchar(200) NOT NULL,
  `Mixed_Article` varchar(50) NOT NULL,
  `Buyer1` text NOT NULL,
  `EntryDT` date NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  `Timestamp1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SIDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SIStatus` tinyint(1) NOT NULL DEFAULT '0',
  `CIDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CIStatus` int(11) NOT NULL DEFAULT '0',
  `CODateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `COStatus` tinyint(1) NOT NULL DEFAULT '0',
  `PIDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `PIStatus` tinyint(1) NOT NULL DEFAULT '0',
  `LDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LStatus` tinyint(1) NOT NULL DEFAULT '0',
  `FDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `FStatus` tinyint(1) NOT NULL DEFAULT '0',
  `SBDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SBStatus` tinyint(1) NOT NULL DEFAULT '0',
  `JPDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `JPStatus` tinyint(1) NOT NULL DEFAULT '0',
  `SSDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SSStatus` tinyint(1) NOT NULL DEFAULT '0',
  `TPDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TPStatus` tinyint(1) NOT NULL DEFAULT '0',
  `VODateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `VOStatus` tinyint(1) NOT NULL DEFAULT '0',
  `WHDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `WHStatus` tinyint(1) NOT NULL DEFAULT '0',
  `Pending` varchar(50) NOT NULL,
  `Days` varchar(50) NOT NULL,
  `Remarks1` varchar(200) NOT NULL,
  `Remark2` varchar(200) NOT NULL,
  `GarmentType2` varchar(200) NOT NULL,
  `Buyer2` varchar(200) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Deleted_by` int(11) NOT NULL,
  `Deleted-Time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleted`
--

INSERT INTO `deleted` (`SNO`, `Date`, `OrderID`, `AOrderID`, `Barcode`, `GarmentType1`, `Type`, `JKT`, `TRS`, `WST`, `ClothBox_No`, `Cloth_at_Store`, `HalfMade_FullCanvas`, `Half_Canvas`, `Orderstatus`, `Cloth_Article`, `Lining_Article`, `Mixed_Article`, `Buyer1`, `EntryDT`, `Remarks`, `Timestamp1`, `SIDateTime`, `SIStatus`, `CIDateTime`, `CIStatus`, `CODateTime`, `COStatus`, `PIDateTime`, `PIStatus`, `LDateTime`, `LStatus`, `FDateTime`, `FStatus`, `SBDateTime`, `SBStatus`, `JPDateTime`, `JPStatus`, `SSDateTime`, `SSStatus`, `TPDateTime`, `TPStatus`, `VODateTime`, `VOStatus`, `WHDateTime`, `WHStatus`, `Pending`, `Days`, `Remarks1`, `Remark2`, `GarmentType2`, `Buyer2`, `Timestamp`, `Deleted_by`, `Deleted-Time`) VALUES
(1, '2020-12-29', '12-2', '2', '65', '', 'Trouser', 0, 1, 0, '23', '0000-00-00', '', 'Half_Canvas', '32', '3', '32', '', '', '2020-12-29', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '', '', '', '', '', '', '2020-12-29 15:44:13', 0, '2020-12-29 15:44:13'),
(2, '0000-00-00', '12-3', '', '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '2020-12-29 15:47:49', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '', '', '', 'hlo', '', '', '2020-12-29 15:45:41', 0, '2020-12-29 15:45:41'),
(3, '2020-12-29', '3-1', '2', '2', '', 'Jacket', 1, 0, 0, '44', '0000-00-00', 'HalfMade_FullCanvas', '', '32', '32', '44', '', '', '2020-12-29', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '', '', '', '', '', '', '2020-12-29 15:49:08', 0, '2020-12-29 15:49:08'),
(4, '2020-12-29', '3-2', '2', '2', '', 'Trouser', 0, 1, 0, '44', '0000-00-00', 'HalfMade_FullCanvas', '', '32', '32', '44', '', '', '2020-12-29', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '', '', '', '', '', '', '2020-12-29 15:52:25', 0, '2020-12-29 15:52:25'),
(5, '0000-00-00', '3-3', '', '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '', '', '', '', '', '', '2020-12-29 15:55:06', 0, '2020-12-29 15:55:06'),
(6, '2020-12-29', '7676-1', '3', '5', '', 'Jacket', 1, 0, 0, '5', '0000-00-00', '', 'Half_Canvas', 'u', '22', '5', '', '', '2020-12-29', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '', '', '', '', '', '', '2020-12-29 15:58:30', 0, '2020-12-29 15:58:30'),
(7, '2020-12-29', '7676-2', '3', '5', '', 'Trouser', 0, 1, 0, '5', '0000-00-00', '', 'Half_Canvas', 'u', '22', '5', '', '', '2020-12-29', '', '2020-12-29 16:18:37', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '', '', '', 'kiiii', '', '', '2020-12-29 16:08:56', 0, '2020-12-29 16:08:56'),
(8, '0000-00-00', '7676-3', '', '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '2020-12-29 16:16:54', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '', '', '', 'kiiii', '', '', '2020-12-29 16:14:54', 0, '2020-12-29 16:14:54'),
(9, '2020-12-29', '258-1', '6', '65', '', 'Jacket', 1, 0, 0, '2', '0000-00-00', '', 'Half_Canvas', 'k', '8', '2', '', '', '2020-12-29', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '', '', '', '', '', '', '2020-12-29 16:18:37', 0, '2020-12-29 16:18:37'),
(10, '2020-12-29', '258-2', '6', '65', '', 'Trouser', 0, 1, 0, '2', '0000-00-00', '', 'Half_Canvas', 'k', '8', '2', '', '', '2020-12-29', '', '2020-12-29 16:21:26', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '', '', '', 'grgr', '', '', '2020-12-29 16:21:26', 0, '2020-12-29 16:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `garmenttype`
--

CREATE TABLE `garmenttype` (
  `sno` int(20) NOT NULL,
  `GarmentType` varchar(50) NOT NULL,
  `Jacket` varchar(10) NOT NULL,
  `Trouser` varchar(10) NOT NULL,
  `Vestcoat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garmenttype`
--

INSERT INTO `garmenttype` (`sno`, `GarmentType`, `Jacket`, `Trouser`, `Vestcoat`) VALUES
(1, 'C', '1', '0', '0'),
(2, 'P', '0', '1', '0'),
(3, 'V', '0', '0', '1'),
(4, 'CP', '1', '1', '0'),
(5, 'CPV', '1', '1', '1'),
(6, 'PP', '0', '2', '0'),
(7, 'CVP', '1', '1', '1'),
(8, 'CPP', '1', '2', '0'),
(9, 'CVPP', '1', '2', '1'),
(10, 'CV', '1', '0', '1'),
(11, 'PPCV', '1', '2', '1'),
(12, 'PCVP', '1', '2', '1'),
(13, 'PV', '0', '1', '1'),
(14, 'VP', '0', '1', '1'),
(21, 'hhh', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `SNO` int(11) NOT NULL,
  `Date` date NOT NULL,
  `OrderID` varchar(50) NOT NULL,
  `AOrderID` varchar(50) NOT NULL,
  `Barcode` varchar(200) NOT NULL,
  `GarmentType` varchar(50) NOT NULL,
  `Type` text NOT NULL,
  `JKT` int(11) NOT NULL,
  `TRS` int(11) NOT NULL,
  `WST` int(11) NOT NULL,
  `ClothBox_No` varchar(100) NOT NULL,
  `Cloth_at_Store` date NOT NULL,
  `HalfMade_FullCanvas` varchar(50) NOT NULL,
  `Half_Canvas` varchar(50) NOT NULL,
  `Orderstatus` text NOT NULL,
  `Cloth_Article` varchar(500) NOT NULL,
  `Lining_Article` varchar(200) NOT NULL,
  `Mixed_Article` varchar(50) NOT NULL,
  `Buyer` text NOT NULL,
  `EntryDT` date NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `overall`
--

CREATE TABLE `overall` (
  `SNO` int(11) NOT NULL,
  `OrderID` varchar(100) NOT NULL DEFAULT '0',
  `SIDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SIStatus` tinyint(1) NOT NULL DEFAULT '0',
  `CIDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CIStatus` int(11) NOT NULL DEFAULT '0',
  `CODateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `COStatus` tinyint(1) NOT NULL DEFAULT '0',
  `PIDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `PIStatus` tinyint(1) NOT NULL DEFAULT '0',
  `LDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LStatus` tinyint(1) NOT NULL DEFAULT '0',
  `FDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `FStatus` tinyint(1) NOT NULL DEFAULT '0',
  `SBDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SBStatus` tinyint(1) NOT NULL DEFAULT '0',
  `JPDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `JPStatus` tinyint(1) NOT NULL DEFAULT '0',
  `SSDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SSStatus` tinyint(1) NOT NULL DEFAULT '0',
  `TPDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TPStatus` tinyint(1) NOT NULL DEFAULT '0',
  `VODateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `VOStatus` tinyint(1) NOT NULL DEFAULT '0',
  `WHDateTime` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `WHStatus` tinyint(1) NOT NULL DEFAULT '0',
  `Pending` varchar(50) NOT NULL,
  `Days` varchar(50) NOT NULL,
  `Remarks` varchar(200) NOT NULL,
  `GarmentType` varchar(200) NOT NULL,
  `Buyer` varchar(200) NOT NULL,
  `Remark2` varchar(200) NOT NULL,
  `Problem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'store', 'store', 'store'),
(3, 'cuttingin', 'cuttingin', 'cuttingin'),
(4, 'cuttingout', 'cuttingout', 'cuttingout'),
(5, 'production', 'production', 'production'),
(6, 'warehouse', 'warehouse', 'warehouse'),
(7, 'Devered', 'Devered1', 'Devered'),
(8, 'Transglobal', 'Transglobal2', 'Transglobal'),
(9, 'Tailorman', 'Tailorman3', 'Tailorman'),
(10, 'Lambton', 'Lambton4', 'Lambton'),
(11, 'lining', 'Lining@2', 'lining'),
(12, 'front', 'Front@1', 'front'),
(13, 'sleevebundling', 'Sleevebundling@3', 'sleevebundling'),
(14, 'jprepressing', 'Jprepressing@4', 'jprepressing'),
(15, 'sideseam', 'Sideseam@5', 'sideseam'),
(16, 'tprepressing', 'tprepressing@6', 'tprepressing'),
(17, 'vestout', 'vestout', 'vestout'),
(18, 'Raghu', 'Raghu@123', 'Raghu'),
(19, 'Bhaskar', 'Bhaskar@123', 'Bhaskar'),
(20, 'Nayeem', 'Nayeem@123', 'Nayeem'),
(22, 'Cuttings', 'Cuttings@123', 'Cuttings'),
(23, 'Dispatch', 'Dispatch', 'Dispatch'),
(24, 'test', 'test@123', 'test'),
(25, 'updispatch', 'updispatch', 'updispatch'),
(26, 'Projector', 'Projector@123', 'Projector'),
(27, 'Pooja', 'pooja@3108', 'Pooja'),
(28, 'Kriti', 'kriti@3109', 'Kriti'),
(29, 'Munro', 'Munro@123', 'Munro'),
(30, 'MTMStore', 'MTMStore@123', 'MTMStore'),
(31, 'Manju', 'Manju@123', 'Manju'),
(32, 'Chithra', 'chithra@123', 'Chithra'),
(33, 'CAD', 'CAD@123', 'CAD'),
(34, 'mtmms', 'mtmms@123', 'mtmms'),
(35, 'inventory', 'inventory@123', 'inventory'),
(70, 'Recut1', 'Recut1@123', 'Recut1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `deleted`
--
ALTER TABLE `deleted`
  ADD PRIMARY KEY (`SNO`);

--
-- Indexes for table `garmenttype`
--
ALTER TABLE `garmenttype`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`SNO`),
  ADD UNIQUE KEY `OrderID` (`OrderID`);

--
-- Indexes for table `overall`
--
ALTER TABLE `overall`
  ADD PRIMARY KEY (`SNO`),
  ADD UNIQUE KEY `OrderID` (`OrderID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `deleted`
--
ALTER TABLE `deleted`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `garmenttype`
--
ALTER TABLE `garmenttype`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `overall`
--
ALTER TABLE `overall`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
