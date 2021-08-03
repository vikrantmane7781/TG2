-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2021 at 12:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `measure`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `countas` (IN `num` INT)  BEGIN
    SELECT *
    FROM employee order by salary desc
    LIMIT num;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `countass` (IN `num` INT)  BEGIN
select * from employee order by salary limit num;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `4len`
--

CREATE TABLE `4len` (
  `id` int(11) NOT NULL,
  `4LEN` varchar(20) NOT NULL,
  `0.125` float NOT NULL,
  `0.25` float NOT NULL,
  `0.375` float NOT NULL,
  `0.5` float NOT NULL,
  `0.625` float NOT NULL,
  `0.75` float NOT NULL,
  `0.875` float NOT NULL,
  `1` float NOT NULL,
  `1.125` float NOT NULL,
  `1.25` float NOT NULL,
  `1.375` float NOT NULL,
  `1.5` float NOT NULL,
  `1.625` float NOT NULL,
  `1.75` float NOT NULL,
  `1.875` float NOT NULL,
  `2` float NOT NULL,
  `2.125` float NOT NULL,
  `2.25` float NOT NULL,
  `2.375` float NOT NULL,
  `2.5` float NOT NULL,
  `2.625` float NOT NULL,
  `2.75` float NOT NULL,
  `2.875` float NOT NULL,
  `3` float NOT NULL,
  `3.125` float NOT NULL,
  `3.25` float NOT NULL,
  `3.375` float NOT NULL,
  `3.5` float NOT NULL,
  `3.625` float NOT NULL,
  `3.75` float NOT NULL,
  `3.875` float NOT NULL,
  `4` float NOT NULL,
  `-0.125` float NOT NULL,
  `-0.25` float NOT NULL,
  `-0.375` float NOT NULL,
  `-0.5` float NOT NULL,
  `-0.625` float NOT NULL,
  `-0.75` float NOT NULL,
  `-0.875` float NOT NULL,
  `-1` float NOT NULL,
  `-1.125` float NOT NULL,
  `-1.25` float NOT NULL,
  `-1.375` float NOT NULL,
  `-1.5` float NOT NULL,
  `-1.625` float NOT NULL,
  `-1.75` float NOT NULL,
  `-1.875` float NOT NULL,
  `-2` float NOT NULL,
  `-2.125` float NOT NULL,
  `-2.25` float NOT NULL,
  `-2.375` float NOT NULL,
  `-2.5` float NOT NULL,
  `-2.625` float NOT NULL,
  `-2.75` float NOT NULL,
  `-2.875` float NOT NULL,
  `-3` float NOT NULL,
  `-3.125` float NOT NULL,
  `-3.25` float NOT NULL,
  `-3.375` float NOT NULL,
  `-3.5` float NOT NULL,
  `-3.625` float NOT NULL,
  `-3.75` float NOT NULL,
  `-3.875` float NOT NULL,
  `-4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `4len`
--

INSERT INTO `4len` (`id`, `4LEN`, `0.125`, `0.25`, `0.375`, `0.5`, `0.625`, `0.75`, `0.875`, `1`, `1.125`, `1.25`, `1.375`, `1.5`, `1.625`, `1.75`, `1.875`, `2`, `2.125`, `2.25`, `2.375`, `2.5`, `2.625`, `2.75`, `2.875`, `3`, `3.125`, `3.25`, `3.375`, `3.5`, `3.625`, `3.75`, `3.875`, `4`, `-0.125`, `-0.25`, `-0.375`, `-0.5`, `-0.625`, `-0.75`, `-0.875`, `-1`, `-1.125`, `-1.25`, `-1.375`, `-1.5`, `-1.625`, `-1.75`, `-1.875`, `-2`, `-2.125`, `-2.25`, `-2.375`, `-2.5`, `-2.625`, `-2.75`, `-2.875`, `-3`, `-3.125`, `-3.25`, `-3.375`, `-3.5`, `-3.625`, `-3.75`, `-3.875`, `-4`) VALUES
(1, '1CHE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '2GIR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '3SEAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '4LEN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '5FRTLEN', 0.125, 0.25, 0.375, 0.5, 0.625, 0.75, 0.875, 1, 1.125, 1.25, 1.375, 1.5, 1.625, 1.75, 1.875, 2, 2.125, 2.25, 2.375, 2.5, 2.625, 2.75, 2.875, 3, 3.125, 3.25, 3.375, 3.5, 3.625, 3.75, 3.875, 4, -0.125, -0.25, -0.375, -0.5, -0.625, -0.75, -0.875, -1, -1.125, -1.25, -1.375, -1.5, -1.625, -1.75, -1.875, -2, -2.125, -2.25, -2.375, -2.5, -2.625, -2.75, -2.875, -3, -3.125, -3.25, -3.375, -3.5, -3.625, -3.75, -3.875, -4),
(6, '6PP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '7BCKWDTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '9BICEP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '10LAPK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '11LAPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, '12BTN', 0.0625, 0.125, 0.1875, 0.25, 0.3125, 0.375, 0.4375, 0.5, 0.5625, 0.625, 0.6875, 0.75, 0.8125, 0.875, 0.9375, 1, 1.0625, 1.125, 1.1875, 1.25, 1.3125, 1.375, 1.4375, 1.5, 1.5625, 1.625, 1.6875, 1.75, 1.8125, 1.875, 1.9375, 2, -0.0625, -0.125, -0.1875, -0.25, -0.3125, -0.375, -0.4375, -0.5, -0.5625, -0.625, -0.6875, -0.75, -0.8125, -0.875, -0.9375, -1, -1.0625, -1.125, -1.1875, -1.25, -1.3125, -1.375, -1.4375, -1.5, -1.5625, -1.625, -1.6875, -1.75, -1.8125, -1.875, -1.9375, -2),
(13, '13WRIST', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, '14AHDEPTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, '15VENT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `12back`
--

CREATE TABLE `12back` (
  `id` int(11) NOT NULL,
  `12BACK` varchar(20) NOT NULL,
  `0.5` float DEFAULT NULL,
  `-0.5` float DEFAULT NULL,
  `0.625` float DEFAULT NULL,
  `-0.625` float DEFAULT NULL,
  `0.75` float DEFAULT NULL,
  `-0.75` float DEFAULT NULL,
  `0.875` float DEFAULT NULL,
  `-0.875` float DEFAULT NULL,
  `1` float NOT NULL,
  `-1` float NOT NULL,
  `1.125` float DEFAULT NULL,
  `-1.125` float DEFAULT NULL,
  `1.25` float DEFAULT NULL,
  `-1.25` float DEFAULT NULL,
  `1.375` float DEFAULT NULL,
  `-1.375` float DEFAULT NULL,
  `1.5` float DEFAULT NULL,
  `-1.5` float DEFAULT NULL,
  `1.625` float DEFAULT NULL,
  `-1.625` float DEFAULT NULL,
  `1.75` float DEFAULT NULL,
  `-1.75` float DEFAULT NULL,
  `1.875` float DEFAULT NULL,
  `-1.875` float DEFAULT NULL,
  `2` float NOT NULL,
  `-2` float NOT NULL,
  `2.125` float DEFAULT NULL,
  `-2.125` float DEFAULT NULL,
  `2.25` float DEFAULT NULL,
  `-2.25` float DEFAULT NULL,
  `2.375` float DEFAULT NULL,
  `-2.375` float DEFAULT NULL,
  `2.5` float DEFAULT NULL,
  `-2.5` float DEFAULT NULL,
  `2.625` float DEFAULT NULL,
  `-2.625` float DEFAULT NULL,
  `2.75` float DEFAULT NULL,
  `-2.75` float DEFAULT NULL,
  `2.875` float DEFAULT NULL,
  `-2.875` float DEFAULT NULL,
  `3` float NOT NULL,
  `-3` float NOT NULL,
  `3.125` float DEFAULT NULL,
  `-3.125` float DEFAULT NULL,
  `3.25` float DEFAULT NULL,
  `-3.25` float DEFAULT NULL,
  `3.375` float DEFAULT NULL,
  `-3.375` float DEFAULT NULL,
  `3.5` float DEFAULT NULL,
  `-3.5` float DEFAULT NULL,
  `3.625` float DEFAULT NULL,
  `-3.625` float DEFAULT NULL,
  `3.75` float DEFAULT NULL,
  `-3.75` float DEFAULT NULL,
  `3.875` float DEFAULT NULL,
  `-3.875` float DEFAULT NULL,
  `4` float NOT NULL,
  `-4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12back`
--

INSERT INTO `12back` (`id`, `12BACK`, `0.5`, `-0.5`, `0.625`, `-0.625`, `0.75`, `-0.75`, `0.875`, `-0.875`, `1`, `-1`, `1.125`, `-1.125`, `1.25`, `-1.25`, `1.375`, `-1.375`, `1.5`, `-1.5`, `1.625`, `-1.625`, `1.75`, `-1.75`, `1.875`, `-1.875`, `2`, `-2`, `2.125`, `-2.125`, `2.25`, `-2.25`, `2.375`, `-2.375`, `2.5`, `-2.5`, `2.625`, `-2.625`, `2.75`, `-2.75`, `2.875`, `-2.875`, `3`, `-3`, `3.125`, `-3.125`, `3.25`, `-3.25`, `3.375`, `-3.375`, `3.5`, `-3.5`, `3.625`, `-3.625`, `3.75`, `-3.75`, `3.875`, `-3.875`, `4`, `-4`) VALUES
(1, '1CHE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '2GIR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '3SEAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '4LEN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '5FRTLEN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '6PP', 0.13, -0.13, 0.13, -0.13, 0.13, -0.13, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.38, -0.38, 0.38, -0.38, 0.38, -0.38, 0.38, -0.38, 0.38, -0.38, 0.38, -0.38, 0.38, -0.38, 0.38, -0.38, 0.5, -0.5, 0.5, -0.5, 0.5, -0.5, 0.5, -0.5, 0.5, -0.5, 0.5, -0.5, 0.63, -0.63, 0.63, -0.63, 0.63, -0.63, 0.63, -0.63, 0.63, -0.63, 0.63, -0.63, 0.63, -0.63),
(7, '7BCKWDTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '9BICEP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '10LAPK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '11LAPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, '12BTN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, '13WRIST', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, '14AHDEPTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, '15VENT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `15vent`
--

CREATE TABLE `15vent` (
  `id` int(11) NOT NULL,
  `15VENT` varchar(20) NOT NULL,
  `0.125` float DEFAULT NULL,
  `0.25` float DEFAULT NULL,
  `0.375` float DEFAULT NULL,
  `0.5` float DEFAULT NULL,
  `0.625` float DEFAULT NULL,
  `0.75` float DEFAULT NULL,
  `0.875` float DEFAULT NULL,
  `1` float DEFAULT NULL,
  `1.125` float DEFAULT NULL,
  `1.25` float DEFAULT NULL,
  `1.375` float DEFAULT NULL,
  `1.5` float DEFAULT NULL,
  `1.625` float DEFAULT NULL,
  `1.75` float DEFAULT NULL,
  `1.875` float DEFAULT NULL,
  `2` float DEFAULT NULL,
  `2.125` float DEFAULT NULL,
  `2.25` float DEFAULT NULL,
  `2.375` float DEFAULT NULL,
  `2.5` float DEFAULT NULL,
  `2.625` float DEFAULT NULL,
  `2.75` float DEFAULT NULL,
  `2.875` float DEFAULT NULL,
  `3` float DEFAULT NULL,
  `3.125` float DEFAULT NULL,
  `3.25` float DEFAULT NULL,
  `3.375` float DEFAULT NULL,
  `3.5` float DEFAULT NULL,
  `3.625` float DEFAULT NULL,
  `3.75` float DEFAULT NULL,
  `3.875` float DEFAULT NULL,
  `4` float DEFAULT NULL,
  `-0.125` float DEFAULT NULL,
  `-0.25` float DEFAULT NULL,
  `-0.375` float DEFAULT NULL,
  `-0.5` float DEFAULT NULL,
  `-0.625` float DEFAULT NULL,
  `-0.75` float DEFAULT NULL,
  `-0.875` float DEFAULT NULL,
  `-1` float DEFAULT NULL,
  `-1.125` float DEFAULT NULL,
  `-1.25` float DEFAULT NULL,
  `-1.375` float DEFAULT NULL,
  `-1.5` float DEFAULT NULL,
  `-1.625` float DEFAULT NULL,
  `-1.75` float DEFAULT NULL,
  `-1.875` float DEFAULT NULL,
  `-2` float DEFAULT NULL,
  `-2.125` float DEFAULT NULL,
  `-2.25` float DEFAULT NULL,
  `-2.375` float DEFAULT NULL,
  `-2.5` float DEFAULT NULL,
  `-2.625` float DEFAULT NULL,
  `-2.75` float DEFAULT NULL,
  `-2.875` float DEFAULT NULL,
  `-3` float DEFAULT NULL,
  `-3.125` float DEFAULT NULL,
  `-3.25` float DEFAULT NULL,
  `-3.375` float DEFAULT NULL,
  `-3.5` float DEFAULT NULL,
  `-3.625` float DEFAULT NULL,
  `-3.75` float DEFAULT NULL,
  `-3.875` float DEFAULT NULL,
  `-4` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `15vent`
--

INSERT INTO `15vent` (`id`, `15VENT`, `0.125`, `0.25`, `0.375`, `0.5`, `0.625`, `0.75`, `0.875`, `1`, `1.125`, `1.25`, `1.375`, `1.5`, `1.625`, `1.75`, `1.875`, `2`, `2.125`, `2.25`, `2.375`, `2.5`, `2.625`, `2.75`, `2.875`, `3`, `3.125`, `3.25`, `3.375`, `3.5`, `3.625`, `3.75`, `3.875`, `4`, `-0.125`, `-0.25`, `-0.375`, `-0.5`, `-0.625`, `-0.75`, `-0.875`, `-1`, `-1.125`, `-1.25`, `-1.375`, `-1.5`, `-1.625`, `-1.75`, `-1.875`, `-2`, `-2.125`, `-2.25`, `-2.375`, `-2.5`, `-2.625`, `-2.75`, `-2.875`, `-3`, `-3.125`, `-3.25`, `-3.375`, `-3.5`, `-3.625`, `-3.75`, `-3.875`, `-4`) VALUES
(1, '1CHE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '2GIR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '3SEAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '4LEN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '5FRTLEN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '6PP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '7BCKWDTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '9BICEP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '10LAPK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '11LAPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, '12BTN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, '13WRIST', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, '14AHDEPTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, '15VENT', 0, 0, 0, 0.13, 0.13, 0.13, 0.13, 0.25, 0.25, 0.25, 0.25, 0.38, 0.38, 0.38, 0.38, 0.5, 0.5, 0.5, 0.5, 0.63, 0.63, 0.63, 0.63, 0.75, 0.75, 0.75, 0.75, 0.88, 0.88, 0.88, 0.88, 1, 0, 0, 0, -0.13, -0.13, -0.13, -0.13, -0.25, -0.25, -0.25, -0.25, -0.38, -0.38, -0.38, -0.38, -0.5, -0.5, -0.5, -0.5, -0.63, -0.63, -0.63, -0.63, -0.75, -0.75, -0.75, -0.75, -0.88, -0.88, -0.88, -0.88, -1);

-- --------------------------------------------------------

--
-- Table structure for table `ah_34_a_plus`
--

CREATE TABLE `ah_34_a_plus` (
  `id` int(11) NOT NULL,
  `AH_3/4_A+` varchar(20) NOT NULL,
  `0.75` float NOT NULL,
  `1` float NOT NULL,
  `2` float NOT NULL,
  `1.75` float NOT NULL,
  `1.25` float NOT NULL,
  `1.5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ah_34_a_plus`
--

INSERT INTO `ah_34_a_plus` (`id`, `AH_3/4_A+`, `0.75`, `1`, `2`, `1.75`, `1.25`, `1.5`) VALUES
(1, '1CHE', 0, 0.38, 0.63, 0.63, 0.38, 0.5),
(2, '2GIR', 0, 0.13, 0.25, 0.22, 0.17, 0.13),
(3, '3SEAT', 0, 0, 0, 0, 0, 0),
(4, '4LEN', 0.13, 0.25, 0.5, 0.44, 0.33, 0.25),
(5, '5FRTLEN', 0.13, 0.25, 0.5, 0.44, 0.33, 0.25),
(6, '6PP', 0, 0, 0, 0, 0, 0),
(7, '7BCKWDTH', 0, 0, 0, 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0, 0, 0, 0),
(9, '9BICEP', 0.75, 1, 2, 1.75, 1.25, 1.5),
(10, '10LAPK', 0, 0, 0, 0, 0, 0),
(11, '11LAPP', 0, 0, 0, 0, 0, 0),
(12, '12BTN', 0.13, 0.25, 0.5, 0.44, 0.33, 0.25),
(13, '13WRIST', 0.25, 0.38, 0.75, 0.67, 0.5, 0.38),
(14, '14AHDEPTH', 0.13, 0.25, 0.5, 0.44, 0.33, 0.25),
(15, '15VENT', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `all_cols`
--

CREATE TABLE `all_cols` (
  `id` int(11) NOT NULL,
  `names` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_cols`
--

INSERT INTO `all_cols` (`id`, `names`) VALUES
(1, '16PLUSAH3'),
(2, '17ERECT'),
(3, '18FULLCHES'),
(4, '19HEADF'),
(5, '20LOWCLR'),
(6, '21PLUSAH2'),
(7, '22MINUSCLR'),
(8, '23SLOPE'),
(9, '24BTN1'),
(10, '25BTN3'),
(11, '26ROPESLV'),
(12, '27SLANTPKT'),
(13, '28ADDLIFT'),
(14, '29NOOBW'),
(15, '30NODART'),
(16, '31FRTEDGE'),
(17, '32LEAFCLR'),
(18, '33LEFTDN'),
(19, '34RIGTDN'),
(20, '35FULCANV'),
(21, '36HALFCANV'),
(22, '37PATCHPKT'),
(23, '38SLVVENT'),
(24, '39SLVBACK'),
(25, '40SLVFW'),
(26, '41LONDONF'),
(27, '42PORTLYF'),
(28, '43DB'),
(29, '44TKTPKT'),
(30, '45CBPLUS'),
(31, '46SHGIRTHF'),
(32, '47SHGIRTBK'),
(33, '48PLTPPK'),
(34, '49OPENDART'),
(35, '50PORTYGRI'),
(36, '51ATHLETIC'),
(37, '52STBTM'),
(38, '54WIDER-FR'),
(39, '55FLATCHEST'),
(40, '56HN'),
(41, '57OPENBK'),
(42, '58PLSLVS');

-- --------------------------------------------------------

--
-- Table structure for table `athletic_fit`
--

CREATE TABLE `athletic_fit` (
  `_SIZE` varchar(20) NOT NULL,
  `34` float NOT NULL,
  `35` float NOT NULL,
  `36` float NOT NULL,
  `37` float NOT NULL,
  `38` float NOT NULL,
  `39` float NOT NULL,
  `40` float NOT NULL,
  `41` float NOT NULL,
  `42` float NOT NULL,
  `43` float NOT NULL,
  `44` float NOT NULL,
  `45` float NOT NULL,
  `46` float NOT NULL,
  `47` float NOT NULL,
  `48` float NOT NULL,
  `49` float NOT NULL,
  `50` float NOT NULL,
  `51` float NOT NULL,
  `52` float NOT NULL,
  `53` float NOT NULL,
  `54` float NOT NULL,
  `55` float NOT NULL,
  `56` float NOT NULL,
  `57` float NOT NULL,
  `58` float NOT NULL,
  `59` float NOT NULL,
  `60` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `athletic_fit`
--

INSERT INTO `athletic_fit` (`_SIZE`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`) VALUES
('1CHE', 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60),
('2GIR', 15.75, 16.25, 16.75, 17.25, 17.75, 18.25, 18.75, 19.25, 19.75, 20.25, 20.75, 21.25, 21.75, 22.25, 22.75, 23.25, 23.75, 24.25, 24.75, 25.25, 25.75, 26.25, 26.75, 27.25, 27.75, 28.25, 28.75),
('3SEAT', 30.5, 31.5, 32.5, 33.5, 34.5, 35.5, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.5, 47.5, 48.5, 49.5, 50.5, 51.5, 52.5, 53.5, 54.5, 55.5, 56.5),
('4LEN', 30.25, 30.38, 30.5, 30.63, 30.75, 30.88, 31, 31.13, 31.25, 31.38, 31.5, 31.63, 31.75, 31.88, 32, 32.13, 32.25, 32.38, 32.5, 32.63, 32.75, 32.88, 33, 33.13, 33.25, 33.38, 33.5),
('5FRTLEN', 30.88, 31, 31.13, 31.25, 31.5, 31.63, 31.75, 31.88, 32, 32.25, 32.38, 32.5, 32.63, 32.75, 33, 33.13, 33.25, 33.38, 33.5, 33.75, 33.88, 34, 34.13, 34.25, 34.5, 34.63, 34.75),
('6PP', 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.75, 20, 20.25, 20.5, 20.75, 21, 21.25, 21.38, 21.63, 21.75, 22, 22.13, 22.38, 22.5, 22.75, 22.88, 23.13, 23.25, 23.5, 23.63),
('7BCKWDTH', 8.75, 8.88, 9, 9.13, 9.25, 9.38, 9.5, 9.63, 9.75, 9.88, 10, 10.13, 10.25, 10.38, 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12),
('8SLVOUT', 23.88, 24, 24.13, 24.25, 24.38, 24.5, 24.63, 24.75, 24.88, 25, 25.13, 25.25, 25.38, 25.5, 25.63, 25.75, 25.88, 26, 26.13, 26.25, 26.38, 26.5, 26.63, 26.75, 26.88, 27, 27.13),
('9BICEP', 15.63, 15.88, 16.13, 16.38, 16.63, 16.88, 17, 17.25, 17.5, 17.75, 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.63, 19.88, 20.13, 20.38, 20.63, 20.88, 21.13, 21.25, 21.5, 21.75),
('10LAPK', 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5),
('11LAPP', 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88),
('12BTN', 16.88, 17.13, 17.38, 17.63, 17.75, 18, 18.13, 18.25, 18.5, 18.63, 18.88, 19, 19.25, 19.38, 19.5, 19.75, 19.88, 20.13, 20.25, 20.5, 20.63, 20.88, 21, 21.25, 21.38, 21.63, 21.75),
('13WRIST', 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5),
('14AHDEPTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('15VENT', 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5);

-- --------------------------------------------------------

--
-- Table structure for table `deep_seat_minus`
--

CREATE TABLE `deep_seat_minus` (
  `id` int(11) NOT NULL,
  `Deep_seat(-)` varchar(20) NOT NULL,
  `0.5` int(11) NOT NULL,
  `0.75` float NOT NULL,
  `0.25` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deep_seat_minus`
--

INSERT INTO `deep_seat_minus` (`id`, `Deep_seat(-)`, `0.5`, `0.75`, `0.25`) VALUES
(1, '1WAIST', 0, 0, 0),
(2, 'Waistband Width', 0, 0, 0),
(3, '2SEAT', 0, 0.75, 0.25),
(4, '3THIGH', 0, 0, 0),
(5, '4KNEE', 0, 0, 0),
(6, '5BTM', 0, 0, 0),
(7, '6INSEAM', 0, 0, 0),
(8, '7OTSEAM', 0, 0, 0),
(9, '8TRURISE', 0, 0, 0),
(10, '9FRTRISE', 0, 0, 0),
(11, '10BKRISE', 0, 0.25, 0),
(12, '11URISE', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL,
  `grp` varchar(30) NOT NULL,
  `Jkt_FITMODEL` varchar(30) NOT NULL,
  `orderno` varchar(30) NOT NULL,
  `Customer_Name` varchar(30) NOT NULL,
  `Marker` varchar(30) NOT NULL,
  `Cloth_Article` varchar(30) NOT NULL,
  `Cloth` varchar(30) NOT NULL,
  `Fabric_Width` float NOT NULL,
  `Plaid` float NOT NULL,
  `Stripe` float NOT NULL,
  `Offset` float NOT NULL,
  `Fabric_Way` float NOT NULL,
  `1_Way_Stripe` float NOT NULL,
  `S95-SHELL_SOLID` float NOT NULL,
  `S95-SHELL_STP` float NOT NULL,
  `S95-SHELL_PLAID` float NOT NULL,
  `BUFFER_SOLID-S95` float NOT NULL,
  `BUFFER_STP-S95` float NOT NULL,
  `BUFFER_PLAID-S95` float NOT NULL,
  `Jkt_HANDMD` float NOT NULL,
  `Jkt_LINING` varchar(30) NOT NULL,
  `Jkt_CHE` float NOT NULL,
  `Jkt_GIR` float NOT NULL,
  `Jkt_SEAT` float NOT NULL,
  `Jkt_LEN` float NOT NULL,
  `Jkt_FRTLEN` float NOT NULL,
  `Jkt_PP` float NOT NULL,
  `Jkt_BCKWDTH` float NOT NULL,
  `Jkt_SLVOUT_RIGHT` float NOT NULL,
  `Jkt_SLVOUT_LEFT` float NOT NULL,
  `Jkt_BICEP` float NOT NULL,
  `Jkt_LAPK` float NOT NULL,
  `Jkt_LAPP` float NOT NULL,
  `Jkt_BTN` float NOT NULL,
  `Jkt_WRIST` float NOT NULL,
  `Jkt_AHDEPTH` float NOT NULL,
  `Jkt_VENT` float NOT NULL,
  `Jkt_PLUSAH3` float NOT NULL,
  `Jkt_ERECT` float NOT NULL,
  `Jkt_FULLCHES` float NOT NULL,
  `Jkt_HEADF` float NOT NULL,
  `Jkt_LOWCLR` float NOT NULL,
  `Jkt_PLUSAH2` float NOT NULL,
  `Jkt_MINUSCLR` float NOT NULL,
  `Jkt_SLOPE` float NOT NULL,
  `Jkt_BTN1` float NOT NULL,
  `Jkt_BTN3` float NOT NULL,
  `Jkt_ROPESLV` float NOT NULL,
  `Jkt_SLANTPKT` float NOT NULL,
  `Jkt_TKTPKT` float NOT NULL,
  `Jkt_ADDLIFT` float NOT NULL,
  `Jkt_NOOBW` float NOT NULL,
  `Jkt_NODART` float NOT NULL,
  `Jkt_FRTEDGE` float NOT NULL,
  `Jkt_LEARCLR` float NOT NULL,
  `Jkt_LEFTDN` float NOT NULL,
  `Jkt_RIGTDN` float NOT NULL,
  `Jkt_FULCANV` float NOT NULL,
  `Jkt_HALFCANV` float NOT NULL,
  `Jkt_FLTCANV` float NOT NULL,
  `Jkt_PATCHPKT` float NOT NULL,
  `Jkt_SLVVENT` float NOT NULL,
  `Jkt_SLVBACK` varchar(30) NOT NULL,
  `Jkt_SLVFW` float NOT NULL,
  `Jkt_LONDONF` float NOT NULL,
  `Jkt_PORTLYF` float NOT NULL,
  `Jkt_DB` float NOT NULL,
  `Jkt_CBPLULS` float NOT NULL,
  `Jkt_SHGIRTHF` float NOT NULL,
  `Jkt_SHGIRTBK` float NOT NULL,
  `Jkt_PLTPPK` float NOT NULL,
  `Jkt_OPENDART` float NOT NULL,
  `Jkt_PORTLYGRI` float NOT NULL,
  `Jkt_ATHLETIC` float NOT NULL,
  `Jkt_STBTM` float NOT NULL,
  `Jkt_FLAPPK` varchar(30) NOT NULL,
  `Jkt_BESOMP` varchar(30) NOT NULL,
  `Jkt_2PATCH` varchar(30) NOT NULL,
  `Jkt_2PATFL` varchar(30) NOT NULL,
  `Jkt_3PATCH` varchar(30) NOT NULL,
  `Jkt_3PATFL` varchar(30) NOT NULL,
  `Jkt_L_WELT` varchar(30) NOT NULL,
  `Jkt_STDPLG` varchar(30) NOT NULL,
  `Jkt_STDPSH` varchar(30) NOT NULL,
  `Jkt_CIGLG` varchar(30) NOT NULL,
  `Jkt_CIGSH` varchar(30) NOT NULL,
  `Jkt_PENPLG` varchar(30) NOT NULL,
  `Jkt_PENPSH` varchar(30) NOT NULL,
  `Jkt_CELLLG` varchar(30) NOT NULL,
  `Jkt_CELLSH` varchar(30) NOT NULL,
  `Jkt_PASSPK` varchar(30) NOT NULL,
  `Jkt_SVSTRA` varchar(30) NOT NULL,
  `Jkt_SWEATP` varchar(30) NOT NULL,
  `Jkt_TKT-PK` varchar(30) NOT NULL,
  `Jkt_ELBOWP` varchar(30) NOT NULL,
  `Jkt_C-SETN` varchar(30) NOT NULL,
  `Jkt_C-SETF` varchar(30) NOT NULL,
  `Jkt_C-SETH` varchar(30) NOT NULL,
  `Jkt_RIOFAC` varchar(30) NOT NULL,
  `Jkt_SOVFAC` varchar(30) NOT NULL,
  `Jkt_FF` varchar(30) NOT NULL,
  `Jkt_CPSLV` varchar(30) NOT NULL,
  `Jkt_YOKE` varchar(30) NOT NULL,
  `Jkt_BELTBK` varchar(30) NOT NULL,
  `Jkt_US-SV-RG-HG-TR-FLG` varchar(30) NOT NULL,
  `Jkt_US-SV-RG-HG-TR-HLG` float NOT NULL,
  `Jkt_US-SV-RG-HG-TR-HLG-A` float NOT NULL,
  `Jkt_US-SV-SHAWL-FLG` float NOT NULL,
  `Jkt_US-SV-SHAWL-HLG` float NOT NULL,
  `Jkt_US-SV-SHAWL-HLG-A` float NOT NULL,
  `Jkt_US-SV-SRP-DRP-DB-FLG` float NOT NULL,
  `Jkt_US-SV-SRP-DRP-DB-HLG` float NOT NULL,
  `Jkt_US-SV-SRP-DRP-DB-HLG-A` float NOT NULL,
  `Jkt_US-CV-RG-HG-TR-FLG` float NOT NULL,
  `Jkt_US-CV-RG-HG-TR-HLG` float NOT NULL,
  `Jkt_US-CV-RG-HG-TR-HLG-A` float NOT NULL,
  `Jkt_US-CV-SHAWL-FLG` float NOT NULL,
  `Jkt_US-CV-SHAWL-HLG` float NOT NULL,
  `Jkt_US-CV-SHAWL-HLG-A` float NOT NULL,
  `Jkt_US-CV-SRP-DRP-DB-FLG` float NOT NULL,
  `Jkt_US-CV-SRP-DRP-DB-HLG` float NOT NULL,
  `Jkt_US-CV-SRP-DRP-DB-HLG-A` float NOT NULL,
  `Jkt_US-NV-RG-HG-TR-FLG` float NOT NULL,
  `Jkt_US-NV-RG-HG-TR-HLG` float NOT NULL,
  `Jkt_US-NV-RG-HG-TR-HLG-A` float NOT NULL,
  `Jkt_US-NV-SHAWL-FLG` float NOT NULL,
  `Jkt_US-NV-SHAWL-HLG` float NOT NULL,
  `Jkt_US-NV-SHAWL-HLG-A` float NOT NULL,
  `Jkt_US-NV-SRP-DRP-DB-FLG` float NOT NULL,
  `Jkt_US-NV-SRP-DRP-DB-HLG` float NOT NULL,
  `Jkt_US-NV-SRP-DRP-DB-HLG-A` float NOT NULL,
  `Trs_HANDMD` float NOT NULL,
  `Trs_LINING` varchar(30) NOT NULL,
  `Trs1_WAIST` float NOT NULL,
  `Trs1_SEAT` float NOT NULL,
  `Trs1_THIGH` float NOT NULL,
  `Trs1_KNEE` float NOT NULL,
  `Trs1_BTM` float NOT NULL,
  `Trs1_INSEAM_RIGHT` float NOT NULL,
  `Trs1_INSEAM_LEFT` float NOT NULL,
  `Trs1_OTSEAM` float NOT NULL,
  `Trs1_TRURISE` float NOT NULL,
  `Trs1_FRTRISE` float NOT NULL,
  `Trs1_BKRISE` float NOT NULL,
  `Trs1_URISE` float NOT NULL,
  `Trs1_DPSEAT` float NOT NULL,
  `Trs1_HIPFWD` float NOT NULL,
  `Trs1_LWFRT` float NOT NULL,
  `Trs1_PLCROT` float NOT NULL,
  `Trs1_RISEBK` float NOT NULL,
  `Trs1_DEP1PLE` float NOT NULL,
  `Trs1_DEP2PLE` float NOT NULL,
  `Trs1_BPKTD` float NOT NULL,
  `Trs1_CUFF` varchar(30) NOT NULL,
  `Trs1_SLTHM` float NOT NULL,
  `Trs1_SQEXT` float NOT NULL,
  `Trs1_TRNPLT` float NOT NULL,
  `Trs1_WBHT` float NOT NULL,
  `Trs1_MINUSPEG` float NOT NULL,
  `Trs1_FRTPKTD` float NOT NULL,
  `Trs1_ZIPPER` float NOT NULL,
  `Trs1_EXTENT` float NOT NULL,
  `Trs1_C-PKT` float NOT NULL,
  `Trs1_CFHKLG` float NOT NULL,
  `Trs1_C-HKLG` float NOT NULL,
  `Trs1_CPFKLG` float NOT NULL,
  `Trs1_S-PKT` float NOT NULL,
  `Trs1_SFHKLG` float NOT NULL,
  `Trs1_S-HKLG` float NOT NULL,
  `Trs1_SPFKLG` float NOT NULL,
  `Trs1_FB-PKT` float NOT NULL,
  `Trs1_FFHKLG` float NOT NULL,
  `Trs1_F-HKLG` float NOT NULL,
  `Trs1_FPFKLG` float NOT NULL,
  `Trs1_P-EXTN` float NOT NULL,
  `Trs1_NOLOOP` float NOT NULL,
  `Trs1_TNLLOP` float NOT NULL,
  `Trs1_BKFLAP` float NOT NULL,
  `Trs1_WATCHP` float NOT NULL,
  `Trs1_WAFLAP` float NOT NULL,
  `Trs1_ADJTAB` float NOT NULL,
  `Trs1_EXITAB` float NOT NULL,
  `Trs1_TABFLY` float NOT NULL,
  `Trs1_COINPK` float NOT NULL,
  `Trs1_RENFLG` float NOT NULL,
  `Trs1_RENFSH` float NOT NULL,
  `Trs1_D-RING` float NOT NULL,
  `Trs1_PSQUFL` float NOT NULL,
  `Trs1_ADBUCK` float NOT NULL,
  `Trs1_WBSKIR` float NOT NULL,
  `Trs1_STAYBA` float NOT NULL,
  `Trs1_W-PKT` float NOT NULL,
  `Trs1_WFHKLG` float NOT NULL,
  `Trs1_W-HKLG` float NOT NULL,
  `Trs1_WPFKLG` float NOT NULL,
  `Trs1_US-1PLEAT-TRS-1DART` float NOT NULL,
  `Trs1_US-1PLEAT-TRS-2DART` float NOT NULL,
  `Trs1_US-2PLEAT-TRS-1DART` float NOT NULL,
  `Trs1_US-2PLEAT-TRS-2DART` float NOT NULL,
  `Trs1_US-3PLEAT-TRS-1DART` float NOT NULL,
  `Trs1_US-3PLEAT-TRS-2DART` float NOT NULL,
  `Trs1_US-4PLEAT-TRS-1DART` float NOT NULL,
  `Trs1_US-4PLEAT-TRS-2DART` float NOT NULL,
  `Trs1_US-11-FF-TRS-1DART` float NOT NULL,
  `Trs1_US-11-FF-TRS-2DART` float NOT NULL,
  `Trs1_HARI-1PLEAT-TRS` float NOT NULL,
  `Trs1_HARI-2PLEAT-TRS` float NOT NULL,
  `Trs1_HARI-3PLEAT-TRS` float NOT NULL,
  `Trs1_HARI-4PLEAT-TRS` float NOT NULL,
  `Trs1_HARI-11-FF-TRS` float NOT NULL,
  `Trs2_HANDMD` float NOT NULL,
  `Trs2_WAIST` float NOT NULL,
  `Trs2_SEAT` float NOT NULL,
  `Trs2_THIGH` float NOT NULL,
  `Trs2_KNEE` float NOT NULL,
  `Trs2_BTM` float NOT NULL,
  `Trs2_INSEAM_RIGHT` float NOT NULL,
  `Trs2_INSEAM_LEFT` float NOT NULL,
  `Trs2_OTSEAM` float NOT NULL,
  `Trs2_TRURISE` float NOT NULL,
  `Trs2_FRTRISE` float NOT NULL,
  `Trs2_BKRISE` float NOT NULL,
  `Trs2_URISE` float NOT NULL,
  `Trs2_DPSEAT` float NOT NULL,
  `Trs2_HIPFWD` float NOT NULL,
  `Trs2_LWFRT` float NOT NULL,
  `Trs2_PLCROT` float NOT NULL,
  `Trs2_RISEBK` float NOT NULL,
  `Trs2_DEP1PLE` float NOT NULL,
  `Trs2_DEP2PLE` float NOT NULL,
  `Trs2_BPKTD` float NOT NULL,
  `Trs2_CUFF` float NOT NULL,
  `Trs2_SLTHM` float NOT NULL,
  `Trs2_SQEXT` float NOT NULL,
  `Trs2_TRNPLT` float NOT NULL,
  `Trs2_WBHT` float NOT NULL,
  `Trs2_MINUSPEG` float NOT NULL,
  `Trs2_FRTPKTD` float NOT NULL,
  `Trs2_ZIPPER` float NOT NULL,
  `Trs2_EXTENT` float NOT NULL,
  `Trs2_C-PKT` float NOT NULL,
  `Trs2_CFHKLG` float NOT NULL,
  `Trs2_C-HKLG` float NOT NULL,
  `Trs2_CPFKLG` float NOT NULL,
  `Trs2_S-PKT` float NOT NULL,
  `Trs2_SFHKLG` float NOT NULL,
  `Trs2_S-HKLG` float NOT NULL,
  `Trs2_SPFKLG` float NOT NULL,
  `Trs2_FB-PKT` float NOT NULL,
  `Trs2_FFHKLG` float NOT NULL,
  `Trs2_F-HKLG` float NOT NULL,
  `Trs2_FPFKLG` float NOT NULL,
  `Trs2_P-EXTN` float NOT NULL,
  `Trs2_NOLOOP` float NOT NULL,
  `Trs2_TNLLOP` float NOT NULL,
  `Trs2_BKFLAP` float NOT NULL,
  `Trs2_WATCHP` float NOT NULL,
  `Trs2_WAFLAP` float NOT NULL,
  `Trs2_ADJTAB` float NOT NULL,
  `Trs2_EXITAB` float NOT NULL,
  `Trs2_TABFLY` float NOT NULL,
  `Trs2_COINPK` float NOT NULL,
  `Trs2_RENFLG` float NOT NULL,
  `Trs2_RENFSH` float NOT NULL,
  `Trs2_D-RING` float NOT NULL,
  `Trs2_PSQUFL` float NOT NULL,
  `Trs2_ADBUCK` float NOT NULL,
  `Trs2_WBSKIR` float NOT NULL,
  `Trs2_STAYBA` float NOT NULL,
  `Trs2_W-PKT` float NOT NULL,
  `Trs2_WFHKLG` float NOT NULL,
  `Trs2_W-HKLG` float NOT NULL,
  `Trs2_WPFKLG` float NOT NULL,
  `Trs2_US-1PLEAT-TRS-1DART` float NOT NULL,
  `Trs2_US-1PLEAT-TRS-2DART` float NOT NULL,
  `Trs2_US-2PLEAT-TRS-1DART` float NOT NULL,
  `Trs2_US-2PLEAT-TRS-2DART` float NOT NULL,
  `Trs2_US-3PLEAT-TRS-1DART` float NOT NULL,
  `Trs2_US-3PLEAT-TRS-2DART` float NOT NULL,
  `Trs2_US-4PLEAT-TRS-1DART` float NOT NULL,
  `Trs2_US-4PLEAT-TRS-2DART` float NOT NULL,
  `Trs2_US-11-FF-TRS-1DART` float NOT NULL,
  `Trs2_US-11-FF-TRS-2DART` float NOT NULL,
  `Trs2_HARI-1PLEAT-TRS` float NOT NULL,
  `Trs2_HARI-2PLEAT-TRS` float NOT NULL,
  `Trs2_HARI-3PLEAT-TRS` float NOT NULL,
  `Trs2_HARI-4PLEAT-TRS` float NOT NULL,
  `Trs2_HARI-11-FF-TRS` float NOT NULL,
  `Vst_HANDMD` float NOT NULL,
  `Vst_LINING` varchar(20) NOT NULL,
  `Vst_GIRTH` float NOT NULL,
  `Vst_CHE` float NOT NULL,
  `Vst_FLCB` float NOT NULL,
  `Vst_BKL` float NOT NULL,
  `Vst_PP` float NOT NULL,
  `Vst_BACKWDTH` float NOT NULL,
  `Vst_2WELTP` float NOT NULL,
  `Vst_4WELTP` float NOT NULL,
  `Vst_2PIPEP` float NOT NULL,
  `Vst_4PIPEP` float NOT NULL,
  `Vst_SHBACK` float NOT NULL,
  `Vst_Break_Point-474/VS2/VS4/VS6` float NOT NULL,
  `Vst_Break_Point-VS-5` float NOT NULL,
  `Vst_Break_Point-VS-I4` float NOT NULL,
  `Vst_Break_Point-VL9-VL22` float NOT NULL,
  `Vst_Break_Point-VL-1/VL-10` float NOT NULL,
  `Vst_Break_Point-VL-8` float NOT NULL,
  `Vst_Break_Point-VL-25` float NOT NULL,
  `Vst_S95-SHELL_PLAID` float NOT NULL,
  `Vst_S95-SHELL_SOLID` float NOT NULL,
  `Vst_S95-SHELL_STP` float NOT NULL,
  `Vst_BUFFER_PLAID-S95` float NOT NULL,
  `Vst_BUFFER_SOLID-S95` float NOT NULL,
  `Vst_BUFFER_STP-S95` float NOT NULL,
  `Vst_US-474-2WELTS-VEST` float NOT NULL,
  `Vst_US-474-4WELTS-VEST` float NOT NULL,
  `Vst_US-VL-1-VEST` float NOT NULL,
  `Vst_US-VL-10-VEST` float NOT NULL,
  `Vst_US-VL1-PEAK-VEST` float NOT NULL,
  `Vst_US-VL8-VEST` float NOT NULL,
  `Vst_US-VL9-VEST` float NOT NULL,
  `Vst_US-VL22-VEST` float NOT NULL,
  `Vst_US-VL25-VEST` float NOT NULL,
  `Vst_US-VS-2-VEST` float NOT NULL,
  `Vst_US-VS-4-VEST` float NOT NULL,
  `Vst_US-VS-5-VEST` float NOT NULL,
  `Vst_US-VS-6-VEST` float NOT NULL,
  `Vst_US-VS-14-VEST` float NOT NULL,
  `Barcode` varchar(20) NOT NULL,
  `Jkt_Remarks` varchar(20) NOT NULL,
  `Trs1_Remarks` varchar(20) NOT NULL,
  `Trs2_Remarks` varchar(20) NOT NULL,
  `Vst_Remarks` varchar(20) NOT NULL,
  `Trs1_RAISE_FRONT` varchar(20) NOT NULL,
  `Trs1_LOWER_BACK` varchar(20) NOT NULL,
  `Trs2_RAISE_FRONT` varchar(20) NOT NULL,
  `Trs2_LOWER_BACK` varchar(20) NOT NULL,
  `Dealer_Name` varchar(20) NOT NULL,
  `Trs1_TG-US-FF-TRS-1DART` float NOT NULL,
  `Trs1_TG-US-FF-TRS-2DART` float NOT NULL,
  `Trs2_TG-US-FF-TRS-1DART` float NOT NULL,
  `Trs2_TG-US-FF-TRS-2DART` float NOT NULL,
  `Jkt_54WIDER-FR` float NOT NULL,
  `Jkt_PKT-SQ` varchar(30) NOT NULL,
  `Jkt_SLV-CUF` varchar(30) NOT NULL,
  `Jkt_GUNPAT` varchar(30) NOT NULL,
  `Jkt_STOTAB` varchar(30) NOT NULL,
  `Jkt_SH-TAB` varchar(30) NOT NULL,
  `Jkt_NOOBW_` varchar(30) NOT NULL,
  `Jkt_MILL-F` varchar(30) NOT NULL,
  `Jkt_1WELT` varchar(30) NOT NULL,
  `Jkt_1PLYBK` varchar(30) NOT NULL,
  `Jkt_2PLYBK` varchar(30) NOT NULL,
  `Trs1_33TNLLOOP` float NOT NULL,
  `Trs1_34FRTPKTOPEN` float NOT NULL,
  `Trs1_35FRTDART` float NOT NULL,
  `Trs1_NOHIPP` float NOT NULL,
  `Trs1_BHKLG` float NOT NULL,
  `Trs2_33TNLLOOP` float NOT NULL,
  `Trs2_34FRTPKTOPEN` float NOT NULL,
  `Trs2_35FRTDART` float NOT NULL,
  `Trs2_NOHIPP` float NOT NULL,
  `Trs2_BHKLG` float NOT NULL,
  `Jkt_FLATCHEST` float NOT NULL,
  `Jkt_HN` float NOT NULL,
  `Jkt_OPENBK` float NOT NULL,
  `Trs1_DEPTURN1` float NOT NULL,
  `Trs1_DEPTURN2` float NOT NULL,
  `Trs2_DEPTURN1` float NOT NULL,
  `Trs2_DEPTURN2` float NOT NULL,
  `Trs1_18PKT` float NOT NULL,
  `Trs2_18PKT` float NOT NULL,
  `Trs1_JNW` float NOT NULL,
  `Trs2_JNW` float NOT NULL,
  `Trs1_JNN` float NOT NULL,
  `Trs2_JNN` float NOT NULL,
  `Vst_AVSTGR` float NOT NULL,
  `Jkt_NOVSLV` varchar(30) NOT NULL,
  `Jkt_BISWBK` varchar(30) NOT NULL,
  `Jkt_STBKYK` varchar(30) NOT NULL,
  `Jkt_STFRYK` varchar(30) NOT NULL,
  `user_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `grp`, `Jkt_FITMODEL`, `orderno`, `Customer_Name`, `Marker`, `Cloth_Article`, `Cloth`, `Fabric_Width`, `Plaid`, `Stripe`, `Offset`, `Fabric_Way`, `1_Way_Stripe`, `S95-SHELL_SOLID`, `S95-SHELL_STP`, `S95-SHELL_PLAID`, `BUFFER_SOLID-S95`, `BUFFER_STP-S95`, `BUFFER_PLAID-S95`, `Jkt_HANDMD`, `Jkt_LINING`, `Jkt_CHE`, `Jkt_GIR`, `Jkt_SEAT`, `Jkt_LEN`, `Jkt_FRTLEN`, `Jkt_PP`, `Jkt_BCKWDTH`, `Jkt_SLVOUT_RIGHT`, `Jkt_SLVOUT_LEFT`, `Jkt_BICEP`, `Jkt_LAPK`, `Jkt_LAPP`, `Jkt_BTN`, `Jkt_WRIST`, `Jkt_AHDEPTH`, `Jkt_VENT`, `Jkt_PLUSAH3`, `Jkt_ERECT`, `Jkt_FULLCHES`, `Jkt_HEADF`, `Jkt_LOWCLR`, `Jkt_PLUSAH2`, `Jkt_MINUSCLR`, `Jkt_SLOPE`, `Jkt_BTN1`, `Jkt_BTN3`, `Jkt_ROPESLV`, `Jkt_SLANTPKT`, `Jkt_TKTPKT`, `Jkt_ADDLIFT`, `Jkt_NOOBW`, `Jkt_NODART`, `Jkt_FRTEDGE`, `Jkt_LEARCLR`, `Jkt_LEFTDN`, `Jkt_RIGTDN`, `Jkt_FULCANV`, `Jkt_HALFCANV`, `Jkt_FLTCANV`, `Jkt_PATCHPKT`, `Jkt_SLVVENT`, `Jkt_SLVBACK`, `Jkt_SLVFW`, `Jkt_LONDONF`, `Jkt_PORTLYF`, `Jkt_DB`, `Jkt_CBPLULS`, `Jkt_SHGIRTHF`, `Jkt_SHGIRTBK`, `Jkt_PLTPPK`, `Jkt_OPENDART`, `Jkt_PORTLYGRI`, `Jkt_ATHLETIC`, `Jkt_STBTM`, `Jkt_FLAPPK`, `Jkt_BESOMP`, `Jkt_2PATCH`, `Jkt_2PATFL`, `Jkt_3PATCH`, `Jkt_3PATFL`, `Jkt_L_WELT`, `Jkt_STDPLG`, `Jkt_STDPSH`, `Jkt_CIGLG`, `Jkt_CIGSH`, `Jkt_PENPLG`, `Jkt_PENPSH`, `Jkt_CELLLG`, `Jkt_CELLSH`, `Jkt_PASSPK`, `Jkt_SVSTRA`, `Jkt_SWEATP`, `Jkt_TKT-PK`, `Jkt_ELBOWP`, `Jkt_C-SETN`, `Jkt_C-SETF`, `Jkt_C-SETH`, `Jkt_RIOFAC`, `Jkt_SOVFAC`, `Jkt_FF`, `Jkt_CPSLV`, `Jkt_YOKE`, `Jkt_BELTBK`, `Jkt_US-SV-RG-HG-TR-FLG`, `Jkt_US-SV-RG-HG-TR-HLG`, `Jkt_US-SV-RG-HG-TR-HLG-A`, `Jkt_US-SV-SHAWL-FLG`, `Jkt_US-SV-SHAWL-HLG`, `Jkt_US-SV-SHAWL-HLG-A`, `Jkt_US-SV-SRP-DRP-DB-FLG`, `Jkt_US-SV-SRP-DRP-DB-HLG`, `Jkt_US-SV-SRP-DRP-DB-HLG-A`, `Jkt_US-CV-RG-HG-TR-FLG`, `Jkt_US-CV-RG-HG-TR-HLG`, `Jkt_US-CV-RG-HG-TR-HLG-A`, `Jkt_US-CV-SHAWL-FLG`, `Jkt_US-CV-SHAWL-HLG`, `Jkt_US-CV-SHAWL-HLG-A`, `Jkt_US-CV-SRP-DRP-DB-FLG`, `Jkt_US-CV-SRP-DRP-DB-HLG`, `Jkt_US-CV-SRP-DRP-DB-HLG-A`, `Jkt_US-NV-RG-HG-TR-FLG`, `Jkt_US-NV-RG-HG-TR-HLG`, `Jkt_US-NV-RG-HG-TR-HLG-A`, `Jkt_US-NV-SHAWL-FLG`, `Jkt_US-NV-SHAWL-HLG`, `Jkt_US-NV-SHAWL-HLG-A`, `Jkt_US-NV-SRP-DRP-DB-FLG`, `Jkt_US-NV-SRP-DRP-DB-HLG`, `Jkt_US-NV-SRP-DRP-DB-HLG-A`, `Trs_HANDMD`, `Trs_LINING`, `Trs1_WAIST`, `Trs1_SEAT`, `Trs1_THIGH`, `Trs1_KNEE`, `Trs1_BTM`, `Trs1_INSEAM_RIGHT`, `Trs1_INSEAM_LEFT`, `Trs1_OTSEAM`, `Trs1_TRURISE`, `Trs1_FRTRISE`, `Trs1_BKRISE`, `Trs1_URISE`, `Trs1_DPSEAT`, `Trs1_HIPFWD`, `Trs1_LWFRT`, `Trs1_PLCROT`, `Trs1_RISEBK`, `Trs1_DEP1PLE`, `Trs1_DEP2PLE`, `Trs1_BPKTD`, `Trs1_CUFF`, `Trs1_SLTHM`, `Trs1_SQEXT`, `Trs1_TRNPLT`, `Trs1_WBHT`, `Trs1_MINUSPEG`, `Trs1_FRTPKTD`, `Trs1_ZIPPER`, `Trs1_EXTENT`, `Trs1_C-PKT`, `Trs1_CFHKLG`, `Trs1_C-HKLG`, `Trs1_CPFKLG`, `Trs1_S-PKT`, `Trs1_SFHKLG`, `Trs1_S-HKLG`, `Trs1_SPFKLG`, `Trs1_FB-PKT`, `Trs1_FFHKLG`, `Trs1_F-HKLG`, `Trs1_FPFKLG`, `Trs1_P-EXTN`, `Trs1_NOLOOP`, `Trs1_TNLLOP`, `Trs1_BKFLAP`, `Trs1_WATCHP`, `Trs1_WAFLAP`, `Trs1_ADJTAB`, `Trs1_EXITAB`, `Trs1_TABFLY`, `Trs1_COINPK`, `Trs1_RENFLG`, `Trs1_RENFSH`, `Trs1_D-RING`, `Trs1_PSQUFL`, `Trs1_ADBUCK`, `Trs1_WBSKIR`, `Trs1_STAYBA`, `Trs1_W-PKT`, `Trs1_WFHKLG`, `Trs1_W-HKLG`, `Trs1_WPFKLG`, `Trs1_US-1PLEAT-TRS-1DART`, `Trs1_US-1PLEAT-TRS-2DART`, `Trs1_US-2PLEAT-TRS-1DART`, `Trs1_US-2PLEAT-TRS-2DART`, `Trs1_US-3PLEAT-TRS-1DART`, `Trs1_US-3PLEAT-TRS-2DART`, `Trs1_US-4PLEAT-TRS-1DART`, `Trs1_US-4PLEAT-TRS-2DART`, `Trs1_US-11-FF-TRS-1DART`, `Trs1_US-11-FF-TRS-2DART`, `Trs1_HARI-1PLEAT-TRS`, `Trs1_HARI-2PLEAT-TRS`, `Trs1_HARI-3PLEAT-TRS`, `Trs1_HARI-4PLEAT-TRS`, `Trs1_HARI-11-FF-TRS`, `Trs2_HANDMD`, `Trs2_WAIST`, `Trs2_SEAT`, `Trs2_THIGH`, `Trs2_KNEE`, `Trs2_BTM`, `Trs2_INSEAM_RIGHT`, `Trs2_INSEAM_LEFT`, `Trs2_OTSEAM`, `Trs2_TRURISE`, `Trs2_FRTRISE`, `Trs2_BKRISE`, `Trs2_URISE`, `Trs2_DPSEAT`, `Trs2_HIPFWD`, `Trs2_LWFRT`, `Trs2_PLCROT`, `Trs2_RISEBK`, `Trs2_DEP1PLE`, `Trs2_DEP2PLE`, `Trs2_BPKTD`, `Trs2_CUFF`, `Trs2_SLTHM`, `Trs2_SQEXT`, `Trs2_TRNPLT`, `Trs2_WBHT`, `Trs2_MINUSPEG`, `Trs2_FRTPKTD`, `Trs2_ZIPPER`, `Trs2_EXTENT`, `Trs2_C-PKT`, `Trs2_CFHKLG`, `Trs2_C-HKLG`, `Trs2_CPFKLG`, `Trs2_S-PKT`, `Trs2_SFHKLG`, `Trs2_S-HKLG`, `Trs2_SPFKLG`, `Trs2_FB-PKT`, `Trs2_FFHKLG`, `Trs2_F-HKLG`, `Trs2_FPFKLG`, `Trs2_P-EXTN`, `Trs2_NOLOOP`, `Trs2_TNLLOP`, `Trs2_BKFLAP`, `Trs2_WATCHP`, `Trs2_WAFLAP`, `Trs2_ADJTAB`, `Trs2_EXITAB`, `Trs2_TABFLY`, `Trs2_COINPK`, `Trs2_RENFLG`, `Trs2_RENFSH`, `Trs2_D-RING`, `Trs2_PSQUFL`, `Trs2_ADBUCK`, `Trs2_WBSKIR`, `Trs2_STAYBA`, `Trs2_W-PKT`, `Trs2_WFHKLG`, `Trs2_W-HKLG`, `Trs2_WPFKLG`, `Trs2_US-1PLEAT-TRS-1DART`, `Trs2_US-1PLEAT-TRS-2DART`, `Trs2_US-2PLEAT-TRS-1DART`, `Trs2_US-2PLEAT-TRS-2DART`, `Trs2_US-3PLEAT-TRS-1DART`, `Trs2_US-3PLEAT-TRS-2DART`, `Trs2_US-4PLEAT-TRS-1DART`, `Trs2_US-4PLEAT-TRS-2DART`, `Trs2_US-11-FF-TRS-1DART`, `Trs2_US-11-FF-TRS-2DART`, `Trs2_HARI-1PLEAT-TRS`, `Trs2_HARI-2PLEAT-TRS`, `Trs2_HARI-3PLEAT-TRS`, `Trs2_HARI-4PLEAT-TRS`, `Trs2_HARI-11-FF-TRS`, `Vst_HANDMD`, `Vst_LINING`, `Vst_GIRTH`, `Vst_CHE`, `Vst_FLCB`, `Vst_BKL`, `Vst_PP`, `Vst_BACKWDTH`, `Vst_2WELTP`, `Vst_4WELTP`, `Vst_2PIPEP`, `Vst_4PIPEP`, `Vst_SHBACK`, `Vst_Break_Point-474/VS2/VS4/VS6`, `Vst_Break_Point-VS-5`, `Vst_Break_Point-VS-I4`, `Vst_Break_Point-VL9-VL22`, `Vst_Break_Point-VL-1/VL-10`, `Vst_Break_Point-VL-8`, `Vst_Break_Point-VL-25`, `Vst_S95-SHELL_PLAID`, `Vst_S95-SHELL_SOLID`, `Vst_S95-SHELL_STP`, `Vst_BUFFER_PLAID-S95`, `Vst_BUFFER_SOLID-S95`, `Vst_BUFFER_STP-S95`, `Vst_US-474-2WELTS-VEST`, `Vst_US-474-4WELTS-VEST`, `Vst_US-VL-1-VEST`, `Vst_US-VL-10-VEST`, `Vst_US-VL1-PEAK-VEST`, `Vst_US-VL8-VEST`, `Vst_US-VL9-VEST`, `Vst_US-VL22-VEST`, `Vst_US-VL25-VEST`, `Vst_US-VS-2-VEST`, `Vst_US-VS-4-VEST`, `Vst_US-VS-5-VEST`, `Vst_US-VS-6-VEST`, `Vst_US-VS-14-VEST`, `Barcode`, `Jkt_Remarks`, `Trs1_Remarks`, `Trs2_Remarks`, `Vst_Remarks`, `Trs1_RAISE_FRONT`, `Trs1_LOWER_BACK`, `Trs2_RAISE_FRONT`, `Trs2_LOWER_BACK`, `Dealer_Name`, `Trs1_TG-US-FF-TRS-1DART`, `Trs1_TG-US-FF-TRS-2DART`, `Trs2_TG-US-FF-TRS-1DART`, `Trs2_TG-US-FF-TRS-2DART`, `Jkt_54WIDER-FR`, `Jkt_PKT-SQ`, `Jkt_SLV-CUF`, `Jkt_GUNPAT`, `Jkt_STOTAB`, `Jkt_SH-TAB`, `Jkt_NOOBW_`, `Jkt_MILL-F`, `Jkt_1WELT`, `Jkt_1PLYBK`, `Jkt_2PLYBK`, `Trs1_33TNLLOOP`, `Trs1_34FRTPKTOPEN`, `Trs1_35FRTDART`, `Trs1_NOHIPP`, `Trs1_BHKLG`, `Trs2_33TNLLOOP`, `Trs2_34FRTPKTOPEN`, `Trs2_35FRTDART`, `Trs2_NOHIPP`, `Trs2_BHKLG`, `Jkt_FLATCHEST`, `Jkt_HN`, `Jkt_OPENBK`, `Trs1_DEPTURN1`, `Trs1_DEPTURN2`, `Trs2_DEPTURN1`, `Trs2_DEPTURN2`, `Trs1_18PKT`, `Trs2_18PKT`, `Trs1_JNW`, `Trs2_JNW`, `Trs1_JNN`, `Trs2_JNN`, `Vst_AVSTGR`, `Jkt_NOVSLV`, `Jkt_BISWBK`, `Jkt_STBKYK`, `Jkt_STFRYK`, `user_name`) VALUES
(1, 'TD0403', '', '5104', 'Peter Reardon', '20737', 'C', 'TN-3325 1', 28.62, 1.75, 1.5, 0.12, 1, 0, 0, 0, 1, 0, 0, 1, 0, '916775', 47, 22, 43, 30.25, 0, 19.75, 9.5, 24.5, 24.25, 0, 3.25, 0, 0, 0, 0, 0, 0, 0, 0.75, 0, 0, 0.5, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '1L', '', '', '', '', '', '', '', '', '', '', '1', '', '', '1', '', '', '', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '207370', 'TKT PKT RT\nBW Slv Li', '', '', '', '', '', '', '', 'Ventresca, Ltd.', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(2, 'TD0403', 'LONDON', '5119', 'J. Rob Terry', '20769', 'C', 'TN-5125 3', 29, 0, 0.44, 0, 2, 0, 0, 1, 1, 0, 1, 0, 0, '0', 40, 18.25, 41, 29.75, 0, 18, 8.75, 25, 0, 0, 2.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '1L', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '207690', '\n', '', '', '', '', '', '', '', 'Local - Jackson', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(3, 'TD0403', '', '5176', 'John Driscoll', '20905', 'CP', 'TN-5044 5', 29, 0, 0, 0, 2, 0, 1, 0, 0, 1, 0, 0, 0, '0', 41, 21.75, 44.25, 30, 0, 19, 0, 26, 25.75, 0, 2.75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '1L', '', '1L', '', '', '', '1R', '1', '1', '', '', '', '', '1', '', '', '', '', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'BDG', 37.5, 44.25, 0, 18, 17, 33, 0, 0, 9.75, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'NO', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '209050', '\n', '\nLSBH\nRSOPEN\n', '', '', '', '', '', '', 'Franco Terriaco', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(4, 'TD0403', '', '5183', 'JAY RUNYON', '20913', 'CP', 'TN-3590 3', 30.12, 2.18, 1.5, 0.12, 1, 0, 0, 0, 1, 0, 0, 1, 0, '0', 50, 25.25, 48, 32.5, 0, 20.25, 10.5, 25.5, 25.25, 0, 3.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.375, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '1', '', '1L', '', '1L', '', '1R', '1L', '', '1', '', '', '', '', '1', '', '', '', '', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'BDG', 39, 45.25, 0, 22.25, 18.25, 31.25, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '209130', '\nContrast #1 Sleeve ', '\nLSBH\nLOOP TAB RHP\nI', '', '', '', '', '', '', 'Boston Louie\'s Cloth', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(5, 'TD0403', '', '5199', 'JOHN P. GINTY', '20944', 'C', 'TN-3610 1', 28.87, 0, 0, 0, 2, 0, 1, 0, 0, 1, 0, 0, 0, '0', 47, 26, 46.5, 32.5, 0, 21, 10.25, 26.25, 0, 0, 2.75, 0, 0, 0, 0, 0, 0, 0, 0, 0.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '1', '', '2', '', '1L', '', '1L', '1L', '', '1', '', '', '1', '', '', '1', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '209440', 'STRIPE Slv Lin\n', '', '', '', '', '', '', '', 'Richard Kay Clothier', 0, 0, 0, 0, 0, '1', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(6, 'TD0403', '', '5211', 'Walt Gilbertson', '20962', 'C', 'TN-3635 5', 29, 0, 0.36, 0, 2, 0, 0, 1, 1, 0, 1, 0, 0, '0', 42, 21, 44.5, 30, 0, 19.25, 9.375, 25, 24.75, 0, 3.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Back 1/4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '1', '', '1L', '', '1L', '', '', '1R', '', '', '', '', '1', '', '', '', '', '', '', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '209620', '\nBW Slv Lin\n-LAPELS\n', '', '', '', '', '', '', '', 'Local - Jackson', 0, 0, 0, 0, 0, '1', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(7, 'TD0403', '', '5211', 'Walt Gilbertson', '20963', 'CP', 'TN-5209 1', 28.25, 1.93, 1.62, 0.12, 1, 1, 0, 0, 1, 0, 0, 1, 0, '0', 42, 21, 44.5, 30, 0, 19.25, 9.375, 25, 24.75, 0, 3.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Back 1/4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '1', '', '1L', '', '1L', '', '', '1R', '', '', '', '', '1', '', '', '', '', '', '', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'BS', 36.5, 44.5, 0, 18.75, 16.25, 29.75, 0, 0, 10.5, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 'NO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '209630', '\nBW Slv Lin\n', '\nLSBH\nRSOPEN\n', '', '', '', '', '', '', 'Local - Jackson', 1, 0, 0, 0, 0, '1', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(8, 'TD0403', '', '5212', 'R. Brent Miller', '20965', 'CP', 'TN-3656 5', 28.75, 0, 0, 0, 2, 0, 1, 0, 0, 1, 0, 0, 0, '0', 35, 18.5, 40.5, 32.75, 0, 17.5, 8.125, 26, 0, 0, 3.5, 0, 0, 0, 0, 0, 0, 0, 0, 0.5, 0, 0, 0.25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Back 1/4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '1L', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'BN', 32, 40.5, 0, 18, 15.75, 32.25, 0, 0, 10.25, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'NO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '209650', '\n', '\nLSBH\nRSOPEN\n', '', '', '', '', '', '', 'Local - Jackson', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(9, 'TD0403', '', '5212', 'R. Brent Miller', '20966', 'CP', 'TN-3624 4', 29, 0, 0, 0, 2, 0, 1, 0, 0, 1, 0, 0, 0, '0', 35, 18.5, 40.5, 32.75, 0, 17.5, 8.125, 26, 0, 0, 3.5, 0, 0, 0, 0, 0, 0, 0, 0, 0.5, 0, 0, 0.25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Back 1/4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '1L', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'BBK', 32, 40.5, 0, 18, 15.75, 32.25, 0, 0, 10.25, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'NO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '209660', '\n', '\nLSBH\nRSOPEN\n', '', '', '', '', '', '', 'Local - Jackson', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(10, 'TD0403', '', '5219', 'Ashton Wray', '20976', 'CPV', 'TN-2020 6', 29.62, 0, 0, 0, 2, 0, 1, 0, 0, 1, 0, 0, 0, '0', 43, 22, 44, 31, 0, 20, 9.5, 24.25, 0, 0, 0, 3.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '2', '', '2', '', '2', '', '2', '', '1', '', '', '1', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'BBK', 37.25, 44, 0, 21.5, 16.75, 29.5, 29.25, 0, 12, 0, 0, 0, 0.5, 0, 0, 0, 0, 0, 0, 0, 'NO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'BBK', 22, 44, 28, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '209760', '\nTKT PKT RT\n', '\nLSBH\nRSOPEN\n', '', '\nAdjustable Strap - ', '', '', '', '', 'Benton-Knight, Ltd', 0, 0, 0, 0, 0, '1', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(11, 'TD0403', '', '5215', 'Steve Traicoff', '20977', 'P', 'TN-3812 2', 29.25, 0, 0, 0, 2, 0, 1, 0, 0, 1, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'BT', 55, 59, 0, 25, 20, 27, 0, 0, 11.5, 0, 0, 0, 0.5, 0, 0, 3, 0, 0, 0, 0, '1 1/2', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '209770', '', '\nLSBH\nRSOPEN\n', '', '', '', '', '', '', 'Mike Holsey', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(12, 'TD0403', '', '5211', 'Walt Gilbertson', '20980', 'P', 'TN-3635 5', 29, 0, 0.36, 0, 2, 0, 0, 1, 1, 0, 1, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'BBK', 36.5, 44.5, 0, 18.75, 16.25, 29.75, 0, 0, 10.5, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 'NO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '209800', '', '\nLSBH\nRSOPEN\n', '', '', '', '', '', '', 'Local - Jackson', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(13, 'TD0403', '', '3471', 'Chance Ballew', '21038', 'P', 'TN-3310 9', 28.5, 0, 0, 0, 2, 0, 1, 0, 0, 1, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 36, 42, 0, 18, 17, 31, 0, 0, 10.25, 11, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NO', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '210380', '', '\nJNW | JPKT | BTN & ', '', '', '', '', '', '', 'Local - Jackson', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `dept` varchar(10) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `dept`, `salary`) VALUES
(100, 'Thomas', 'Sales', 5000),
(200, 'Jason', 'Technology', 5500),
(300, 'Mayla', 'Technology', 7000),
(400, 'Nisha', 'Marketing', 9500),
(500, 'Randy', 'Technology', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `erect_plus`
--

CREATE TABLE `erect_plus` (
  `id` int(11) NOT NULL,
  `Erect_plus` varchar(20) NOT NULL,
  `0.5` float NOT NULL,
  `0.75` float NOT NULL,
  `1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erect_plus`
--

INSERT INTO `erect_plus` (`id`, `Erect_plus`, `0.5`, `0.75`, `1`) VALUES
(1, '1CHE', 0, 0, 0),
(2, '2GIR', 0, 0, 0),
(3, '3SEAT', 0, 0, 0),
(4, '4LEN', -0.5, -0.75, -1),
(5, '5FRTLEN', 0.5, 0.75, 1),
(6, '6PP', 0, 0, 0),
(7, '7BCKWDTH', 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0),
(9, '9BICEP', 0, 0, 0),
(10, '10LAPK', 0, 0, 0),
(11, '11LAPP', 0, 0, 0),
(12, '12BTN', 0.5, 0.75, 1),
(13, '13WRIST', 0, 0, 0),
(14, '14AHDEPTH', 0.5, 0.75, 1),
(15, '15VENT', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `frommeasure`
--

CREATE TABLE `frommeasure` (
  `id` int(11) NOT NULL,
  `orderno` varchar(30) NOT NULL,
  `all_cols` varchar(30) NOT NULL,
  `che` float NOT NULL,
  `16plus3` double NOT NULL,
  `17erect` float NOT NULL,
  `18fullches` float NOT NULL,
  `19headf` float NOT NULL,
  `20lowclr` float NOT NULL,
  `21push2` float NOT NULL,
  `btn1/3` float NOT NULL,
  `sum` float NOT NULL,
  `user_values` float NOT NULL,
  `diff` float NOT NULL,
  `1/2back` float NOT NULL,
  `15vent` float NOT NULL,
  `4len` float NOT NULL,
  `seat` float NOT NULL,
  `open_waist_1/2_girth` float NOT NULL,
  `lastDiff` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frommeasure`
--

INSERT INTO `frommeasure` (`id`, `orderno`, `all_cols`, `che`, `16plus3`, `17erect`, `18fullches`, `19headf`, `20lowclr`, `21push2`, `btn1/3`, `sum`, `user_values`, `diff`, `1/2back`, `15vent`, `4len`, `seat`, `open_waist_1/2_girth`, `lastDiff`) VALUES
(1, '5104', '1CHE', 47, 0, 0, -0.13, 0, 0, 0, 0, 46.87, 47, 0.130001, 0, 0, 0, 0, -1.5, 0),
(2, '5104', '2GIR', 24.75, 0, 0, 0, 0, 0, 0, 0, 24.75, 22, -2.75, 0, 0, 0, -0.375, 0, 0),
(3, '5104', '3SEAT', 47.75, 0, 0, 0, 0, 0, 0, 0, 47.75, 43, -4.75, 0, 0, 0, 0, -1.38, 0),
(4, '5104', '4LEN', 31.875, 0, 0, 0, 0, 0, 0, 0, 31.875, 30.25, -1.625, 0, 0, 0, 0, 0, 0),
(5, '5104', '5FRTLEN', 32.75, 0, 0, 0.38, 0, 0, 0, 0, 33.13, 0, 0, 0, 0, -1.625, 0, 0, 0),
(6, '5104', '6PP', 21.25, 0, 0, 0.25, 0, 0, 0, 0, 21.5, 19.75, -1.75, -0.25, 0, 0, 0, 0, 0),
(7, '5104', '7BCKWDTH', 10.375, 0, 0, 0, 0, 0, 0, 0, 10.375, 9.5, -0.875, 0, 0, 0, 0, 0, 0),
(8, '5104', '8SLVOUT', 25.5, 0, 0, 0, 0, 0, 0, 0, 25.5, 24.5, -1, 0, 0, 0, 0, 0, 0),
(9, '5104', '9BICEP', 17.5, 0, 0, 0.13, 0, 0.5, 0, 0, 18.13, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '5104', '10LAPK', 3.5, 0, 0, 0, 0, 0, 0, 0, 3.5, 3.25, -0.25, 0, 0, 0, 0, 0, 0),
(11, '5104', '11LAPP', 3.875, 0, 0, 0, 0, 0, 0, 0, 3.875, 0, 0, 0, 0, 0, 0, 0, 0),
(12, '5104', '12BTN', 19.375, 0, 0, 0.25, 0, 0, 0, 0, 19.625, 0, 0, 0, 0, -0.8125, 0, 0, 0),
(13, '5104', '13WRIST', 12.875, 0, 0, 0, 0, 0, 0, 0, 12.875, 0, 0, 0, 0, 0, 0, 0, 0),
(14, '5104', '14AHDEPTH', 0, 0, 0, 0.25, 0, 0, 0, 0, 0.25, 0, 0, 0, 0, 0, 0, 0, 0),
(15, '5104', '15VENT', 9.5, 0, 0, 0, 0, 0, 0, 0, 9.5, 0, 0, 0, -0.38, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `frommeasuret`
--

CREATE TABLE `frommeasuret` (
  `id` int(11) NOT NULL,
  `orderno` varchar(30) NOT NULL,
  `all_cols` varchar(30) NOT NULL,
  `main_size` double NOT NULL,
  `deep_seat_minus` float NOT NULL,
  `hip_frow_plus` double NOT NULL,
  `low_fron` double NOT NULL,
  `plu_crot` double NOT NULL,
  `raise_bk_plus_minus` double NOT NULL,
  `sum` double NOT NULL,
  `user_values` float NOT NULL,
  `lst_diff` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frommeasuret`
--

INSERT INTO `frommeasuret` (`id`, `orderno`, `all_cols`, `main_size`, `deep_seat_minus`, `hip_frow_plus`, `low_fron`, `plu_crot`, `raise_bk_plus_minus`, `sum`, `user_values`, `lst_diff`) VALUES
(1, '', '1WAIST', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '', 'Waistband Width', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '', '2SEAT', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '', '3THIGH', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '', '4KNEE', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '', '5BTM', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '', '6INSEAM', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '', '7OTSEAM', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '', '8TRURISE', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '', '9FRTRISE', 0, 0, 0, -0.25, 0, 0, -0.25, 0, 0),
(11, '', '10BKRISE', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, '', '11URISE', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `frommeasurev`
--

CREATE TABLE `frommeasurev` (
  `id` int(11) NOT NULL,
  `orderno` varchar(30) NOT NULL,
  `all_cols` varchar(30) NOT NULL,
  `che` float NOT NULL,
  `useValues` float NOT NULL,
  `full_length_plus` float DEFAULT NULL,
  `full_length_minus` float DEFAULT NULL,
  `diff` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frommeasurev`
--

INSERT INTO `frommeasurev` (`id`, `orderno`, `all_cols`, `che`, `useValues`, `full_length_plus`, `full_length_minus`, `diff`) VALUES
(1, '', '1GRITH ', 0, 0, NULL, NULL, 0),
(2, '', '2CHE', 0, 0, NULL, NULL, 0),
(3, '', '3FLCB', 0, 0, NULL, NULL, 0),
(4, '', '4BKL', 0, 0, NULL, NULL, 0),
(5, '', '5PP', 0, 0, NULL, NULL, 0),
(6, '', '6BACKWDTH', 0, 0, NULL, NULL, 0),
(7, '', '7BP1 (474 / VS2 /VS4', 0, 0, NULL, NULL, 0),
(8, '', '8BP2 (VS-5)', 0, 0, NULL, NULL, 0),
(9, '', '9BP3 (VS-14)', 0, 0, NULL, NULL, 0),
(10, '', '10BP4 (VL9-VL22', 0, 0, NULL, NULL, 0),
(11, '', '11BP5 (VL-1 / VL-10)', 0, 0, NULL, NULL, 0),
(12, '', '12BP6 (VL-8)', 0, 0, NULL, NULL, 0),
(13, '', '13BP7 (VL-25)', 0, 0, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fromuser`
--

CREATE TABLE `fromuser` (
  `id` int(11) NOT NULL,
  `orderno` varchar(30) NOT NULL,
  `che` float NOT NULL,
  `16plus3` float NOT NULL,
  `17erect` float NOT NULL,
  `18fullches` float NOT NULL,
  `19headf` float NOT NULL,
  `20lowclr` float NOT NULL,
  `21push2` float NOT NULL,
  `btn1/3` float NOT NULL,
  `1/2back` float NOT NULL,
  `15vent` float NOT NULL,
  `4len` float NOT NULL,
  `seat` float NOT NULL,
  `open_waist_1/2_girth` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `front_length_minus`
--

CREATE TABLE `front_length_minus` (
  `id` int(11) NOT NULL,
  `Front_Length_Minus` varchar(20) NOT NULL,
  `-0.125` float NOT NULL,
  `-0.250` float NOT NULL,
  `-0.375` float NOT NULL,
  `-0.5` float NOT NULL,
  `-0.625` float NOT NULL,
  `-0.750` float NOT NULL,
  `-0.875` float NOT NULL,
  `-1` float NOT NULL,
  `-1.125` float NOT NULL,
  `-1.25` float NOT NULL,
  `-1.375` float NOT NULL,
  `-1.5` float NOT NULL,
  `-1.625` float NOT NULL,
  `-1.75` float NOT NULL,
  `-1.875` float NOT NULL,
  `-2` float NOT NULL,
  `-2.125` float NOT NULL,
  `-2.25` float NOT NULL,
  `-2.375` float NOT NULL,
  `-2.5` float NOT NULL,
  `-2.625` float NOT NULL,
  `-2.75` float NOT NULL,
  `-2.875` float NOT NULL,
  `-3` float NOT NULL,
  `-3.125` float NOT NULL,
  `-3.25` float NOT NULL,
  `-3.375` float NOT NULL,
  `-3.5` float NOT NULL,
  `-3.625` float NOT NULL,
  `-3.75` float NOT NULL,
  `-3.875` float NOT NULL,
  `-4` float NOT NULL,
  `-4.125` float NOT NULL,
  `-4.250` float NOT NULL,
  `-4.375` float NOT NULL,
  `-4.5` float NOT NULL,
  `-4.625` float NOT NULL,
  `-4.75` float NOT NULL,
  `-4.875` float NOT NULL,
  `-5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_length_minus`
--

INSERT INTO `front_length_minus` (`id`, `Front_Length_Minus`, `-0.125`, `-0.250`, `-0.375`, `-0.5`, `-0.625`, `-0.750`, `-0.875`, `-1`, `-1.125`, `-1.25`, `-1.375`, `-1.5`, `-1.625`, `-1.75`, `-1.875`, `-2`, `-2.125`, `-2.25`, `-2.375`, `-2.5`, `-2.625`, `-2.75`, `-2.875`, `-3`, `-3.125`, `-3.25`, `-3.375`, `-3.5`, `-3.625`, `-3.75`, `-3.875`, `-4`, `-4.125`, `-4.250`, `-4.375`, `-4.5`, `-4.625`, `-4.75`, `-4.875`, `-5`) VALUES
(1, '1GRITH ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '2CHE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '3FLCB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '4BKL', -0.13, -0.25, -0.38, -0.5, -0.63, -0.75, -0.88, -1, -1.13, -1.25, -1.38, -1.5, -1.63, -1.75, -1.88, -2, -2.13, -2.25, -2.38, -2.5, -2.63, -2.75, -2.88, -3, -3.13, -3.25, -3.38, -3.5, -3.63, -3.75, -3.88, -4, -4.13, -4.25, -4.38, -4.5, -4.63, -4.75, -4.88, -5),
(5, '5PP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '6BACKWDTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '7BP1 (474 / VS2 /VS4', 0, 0, -0.13, -0.13, -0.13, -0.13, -0.13, -0.25, -0.25, -0.25, -0.25, -0.38, -0.38, -0.38, -0.38, -0.38, -0.5, -0.5, -0.5, -0.5, -0.5, -0.63, -0.63, -0.63, -0.63, -0.75, -0.75, -0.75, -0.75, -0.75, -0.88, -0.88, -0.88, -0.88, -0.88, -1, -1, -1, -1, -1.13),
(8, '8BP2 (VS-5)', 0, 0, -0.13, -0.13, -0.13, -0.13, -0.13, -0.25, -0.25, -0.25, -0.25, -0.38, -0.38, -0.38, -0.38, -0.38, -0.5, -0.5, -0.5, -0.5, -0.5, -0.63, -0.63, -0.63, -0.63, -0.75, -0.75, -0.75, -0.75, -0.75, -0.88, -0.88, -0.88, -0.88, -0.88, -1, -1, -1, -1, -1.13),
(9, '9BP3 (VS-14)', 0, 0, -0.13, -0.13, -0.13, -0.13, -0.13, -0.25, -0.25, -0.25, -0.25, -0.38, -0.38, -0.38, -0.38, -0.38, -0.5, -0.5, -0.5, -0.5, -0.5, -0.63, -0.63, -0.63, -0.63, -0.75, -0.75, -0.75, -0.75, -0.75, -0.88, -0.88, -0.88, -0.88, -0.88, -1, -1, -1, -1, -1.13),
(10, '10BP4 (VL9-VL22', 0, 0, -0.13, -0.13, -0.13, -0.13, -0.13, -0.25, -0.25, -0.25, -0.25, -0.38, -0.38, -0.38, -0.38, -0.38, -0.5, -0.5, -0.5, -0.5, -0.5, -0.63, -0.63, -0.63, -0.63, -0.75, -0.75, -0.75, -0.75, -0.75, -0.88, -0.88, -0.88, -0.88, -0.88, -1, -1, -1, -1, -1.13),
(11, '11BP5 (VL-1 / VL-10)', 0, 0, -0.13, -0.13, -0.13, -0.13, -0.13, -0.25, -0.25, -0.25, -0.25, -0.38, -0.38, -0.38, -0.38, -0.38, -0.5, -0.5, -0.5, -0.5, -0.5, -0.63, -0.63, -0.63, -0.63, -0.75, -0.75, -0.75, -0.75, -0.75, -0.88, -0.88, -0.88, -0.88, -0.88, -1, -1, -1, -1, -1.13),
(12, '12BP6 (VL-8)', 0, 0, -0.13, -0.13, -0.13, -0.13, -0.13, -0.25, -0.25, -0.25, -0.25, -0.38, -0.38, -0.38, -0.38, -0.38, -0.5, -0.5, -0.5, -0.5, -0.5, -0.63, -0.63, -0.63, -0.63, -0.75, -0.75, -0.75, -0.75, -0.75, -0.88, -0.88, -0.88, -0.88, -0.88, -1, -1, -1, -1, -1.13),
(13, '13BP7 (VL-25)', 0, 0, -0.13, -0.13, -0.13, -0.13, -0.13, -0.25, -0.25, -0.25, -0.25, -0.38, -0.38, -0.38, -0.38, -0.38, -0.5, -0.5, -0.5, -0.5, -0.5, -0.63, -0.63, -0.63, -0.63, -0.75, -0.75, -0.75, -0.75, -0.75, -0.88, -0.88, -0.88, -0.88, -0.88, -1, -1, -1, -1, -1.13);

-- --------------------------------------------------------

--
-- Table structure for table `front_length_plus`
--

CREATE TABLE `front_length_plus` (
  `id` int(11) NOT NULL,
  `Front_Length_Plus` varchar(20) NOT NULL,
  `0.125` float NOT NULL,
  `0.250` float NOT NULL,
  `0.375` float NOT NULL,
  `0.5` float NOT NULL,
  `0.625` float NOT NULL,
  `0.750` float NOT NULL,
  `0.875` float NOT NULL,
  `1` float NOT NULL,
  `1.125` float NOT NULL,
  `1.250` float NOT NULL,
  `1.375` float NOT NULL,
  `1.5` float NOT NULL,
  `1.625` float NOT NULL,
  `1.750` float NOT NULL,
  `1.875` float NOT NULL,
  `2` float NOT NULL,
  `2.125` float NOT NULL,
  `2.250` float NOT NULL,
  `2.375` float NOT NULL,
  `2.5` float NOT NULL,
  `2.625` float NOT NULL,
  `2.750` float NOT NULL,
  `2.875` float NOT NULL,
  `3` float NOT NULL,
  `3.125` float NOT NULL,
  `3.250` float NOT NULL,
  `3.375` float NOT NULL,
  `3.5` float NOT NULL,
  `3.625` float NOT NULL,
  `3.750` float NOT NULL,
  `3.875` float NOT NULL,
  `4` float NOT NULL,
  `4.125` float NOT NULL,
  `4.250` float NOT NULL,
  `4.375` float NOT NULL,
  `4.5` float NOT NULL,
  `4.625` float NOT NULL,
  `4.750` float NOT NULL,
  `4.875` float NOT NULL,
  `5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_length_plus`
--

INSERT INTO `front_length_plus` (`id`, `Front_Length_Plus`, `0.125`, `0.250`, `0.375`, `0.5`, `0.625`, `0.750`, `0.875`, `1`, `1.125`, `1.250`, `1.375`, `1.5`, `1.625`, `1.750`, `1.875`, `2`, `2.125`, `2.250`, `2.375`, `2.5`, `2.625`, `2.750`, `2.875`, `3`, `3.125`, `3.250`, `3.375`, `3.5`, `3.625`, `3.750`, `3.875`, `4`, `4.125`, `4.250`, `4.375`, `4.5`, `4.625`, `4.750`, `4.875`, `5`) VALUES
(1, '1GRITH ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '2CHE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '3FLCB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '4BKL', 0.13, 0.25, 0.38, 0.5, 0.63, 0.75, 0.88, 1, 1.13, 1.25, 1.38, 1.5, 1.63, 1.75, 1.88, 2, 2.13, 2.25, 2.38, 2.5, 2.63, 2.75, 2.88, 3, 3.13, 3.25, 3.38, 3.5, 3.63, 3.75, 3.88, 4, 4.13, 4.25, 4.38, 4.5, 4.63, 4.75, 4.88, 5),
(5, '5PP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '6BACKWDTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '7BP1 (474 / VS2 /VS4', 0, 0, 0.13, 0.13, 0.13, 0.13, 0.13, 0.25, 0.25, 0.25, 0.25, 0.38, 0.38, 0.38, 0.38, 0.38, 0.5, 0.5, 0.5, 0.5, 0.5, 0.63, 0.63, 0.63, 0.63, 0.75, 0.75, 0.75, 0.75, 0.75, 0.88, 0.88, 0.88, 0.88, 0.88, 1, 1, 1, 1, 1.13),
(8, '8BP2 (VS-5)', 0, 0, 0.13, 0.13, 0.13, 0.13, 0.13, 0.25, 0.25, 0.25, 0.25, 0.38, 0.38, 0.38, 0.38, 0.38, 0.5, 0.5, 0.5, 0.5, 0.5, 0.63, 0.63, 0.63, 0.63, 0.75, 0.75, 0.75, 0.75, 0.75, 0.88, 0.88, 0.88, 0.88, 0.88, 1, 1, 1, 1, 1.13),
(9, '9BP3 (VS-14)', 0, 0, 0.13, 0.13, 0.13, 0.13, 0.13, 0.25, 0.25, 0.25, 0.25, 0.38, 0.38, 0.38, 0.38, 0.38, 0.5, 0.5, 0.5, 0.5, 0.5, 0.63, 0.63, 0.63, 0.63, 0.75, 0.75, 0.75, 0.75, 0.75, 0.88, 0.88, 0.88, 0.88, 0.88, 1, 1, 1, 1, 1.13),
(10, '10BP4 (VL9-VL22', 0, 0, 0.13, 0.13, 0.13, 0.13, 0.13, 0.25, 0.25, 0.25, 0.25, 0.38, 0.38, 0.38, 0.38, 0.38, 0.5, 0.5, 0.5, 0.5, 0.5, 0.63, 0.63, 0.63, 0.63, 0.75, 0.75, 0.75, 0.75, 0.75, 0.88, 0.88, 0.88, 0.88, 0.88, 1, 1, 1, 1, 1.13),
(11, '11BP5 (VL-1 / VL-10)', 0, 0, 0.13, 0.13, 0.13, 0.13, 0.13, 0.25, 0.25, 0.25, 0.25, 0.38, 0.38, 0.38, 0.38, 0.38, 0.5, 0.5, 0.5, 0.5, 0.5, 0.63, 0.63, 0.63, 0.63, 0.75, 0.75, 0.75, 0.75, 0.75, 0.88, 0.88, 0.88, 0.88, 0.88, 1, 1, 1, 1, 1.13),
(12, '12BP6 (VL-8)', 0, 0, 0.13, 0.13, 0.13, 0.13, 0.13, 0.25, 0.25, 0.25, 0.25, 0.38, 0.38, 0.38, 0.38, 0.38, 0.5, 0.5, 0.5, 0.5, 0.5, 0.63, 0.63, 0.63, 0.63, 0.75, 0.75, 0.75, 0.75, 0.75, 0.88, 0.88, 0.88, 0.88, 0.88, 1, 1, 1, 1, 1.13),
(13, '13BP7 (VL-25)', 0, 0, 0.13, 0.13, 0.13, 0.13, 0.13, 0.25, 0.25, 0.25, 0.25, 0.38, 0.38, 0.38, 0.38, 0.38, 0.5, 0.5, 0.5, 0.5, 0.5, 0.63, 0.63, 0.63, 0.63, 0.75, 0.75, 0.75, 0.75, 0.75, 0.88, 0.88, 0.88, 0.88, 0.88, 1, 1, 1, 1, 1.13);

-- --------------------------------------------------------

--
-- Table structure for table `full_chest`
--

CREATE TABLE `full_chest` (
  `id` int(11) NOT NULL,
  `Full_Chest` varchar(20) NOT NULL,
  `0.5` float NOT NULL,
  `0.75` float NOT NULL,
  `1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `full_chest`
--

INSERT INTO `full_chest` (`id`, `Full_Chest`, `0.5`, `0.75`, `1`) VALUES
(1, '1CHE', 0, -0.13, -0.13),
(2, '2GIR', 0, 0, 0),
(3, '3SEAT', 0, 0, 0),
(4, '4LEN', 0, 0, 0),
(5, '5FRTLEN', 0.25, 0.38, 0.5),
(6, '6PP', 0.13, 0.25, 0.25),
(7, '7BCKWDTH', 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0),
(9, '9BICEP', 0, 0.13, 0),
(10, '10LAPK', 0, 0, 0),
(11, '11LAPP', 0, 0, 0),
(12, '12BTN', 0.13, 0.25, 0.25),
(13, '13WRIST', 0, 0, 0),
(14, '14AHDEPTH', 0.13, 0.25, 0.25),
(15, '15VENT', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `half_grith`
--

CREATE TABLE `half_grith` (
  `id` int(11) NOT NULL,
  `Half_Grith` varchar(20) NOT NULL,
  `0.5` float DEFAULT NULL,
  `0.625` float DEFAULT NULL,
  `0.75` float DEFAULT NULL,
  `0.875` float DEFAULT NULL,
  `1` float DEFAULT NULL,
  `1.125` float DEFAULT NULL,
  `1.25` float DEFAULT NULL,
  `1.375` float DEFAULT NULL,
  `1.5` float DEFAULT NULL,
  `1.625` float DEFAULT NULL,
  `1.75` float DEFAULT NULL,
  `1.875` float DEFAULT NULL,
  `2` float DEFAULT NULL,
  `2.125` float DEFAULT NULL,
  `2.25` float DEFAULT NULL,
  `2.375` float DEFAULT NULL,
  `2.5` float DEFAULT NULL,
  `2.625` float DEFAULT NULL,
  `2.75` float DEFAULT NULL,
  `2.875` float DEFAULT NULL,
  `3` float DEFAULT NULL,
  `3.125` float DEFAULT NULL,
  `3.25` float DEFAULT NULL,
  `3.375` float DEFAULT NULL,
  `3.5` float DEFAULT NULL,
  `3.625` float DEFAULT NULL,
  `3.75` float DEFAULT NULL,
  `3.875` float DEFAULT NULL,
  `4` float DEFAULT NULL,
  `4.125` float DEFAULT NULL,
  `4.25` float DEFAULT NULL,
  `4.375` float DEFAULT NULL,
  `4.5` float DEFAULT NULL,
  `-0.5` float DEFAULT NULL,
  `-0.625` float DEFAULT NULL,
  `-0.75` float DEFAULT NULL,
  `-0.875` float DEFAULT NULL,
  `-1` float DEFAULT NULL,
  `-1.125` float DEFAULT NULL,
  `-1.25` float DEFAULT NULL,
  `-1.375` float DEFAULT NULL,
  `-1.5` float DEFAULT NULL,
  `-1.625` float DEFAULT NULL,
  `-1.75` float DEFAULT NULL,
  `-1.875` float DEFAULT NULL,
  `-2` float DEFAULT NULL,
  `-2.125` float DEFAULT NULL,
  `-2.25` float DEFAULT NULL,
  `-2.375` float DEFAULT NULL,
  `-2.5` float DEFAULT NULL,
  `-2.625` float DEFAULT NULL,
  `-2.75` float DEFAULT NULL,
  `-2.875` float DEFAULT NULL,
  `-3` float DEFAULT NULL,
  `-3.125` float DEFAULT NULL,
  `-3.25` float DEFAULT NULL,
  `-3.375` float DEFAULT NULL,
  `-3.5` float DEFAULT NULL,
  `-3.625` float DEFAULT NULL,
  `-3.75` float DEFAULT NULL,
  `-3.875` float DEFAULT NULL,
  `-4` float DEFAULT NULL,
  `-4.125` float DEFAULT NULL,
  `-4.25` float DEFAULT NULL,
  `-4.375` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `half_grith`
--

INSERT INTO `half_grith` (`id`, `Half_Grith`, `0.5`, `0.625`, `0.75`, `0.875`, `1`, `1.125`, `1.25`, `1.375`, `1.5`, `1.625`, `1.75`, `1.875`, `2`, `2.125`, `2.25`, `2.375`, `2.5`, `2.625`, `2.75`, `2.875`, `3`, `3.125`, `3.25`, `3.375`, `3.5`, `3.625`, `3.75`, `3.875`, `4`, `4.125`, `4.25`, `4.375`, `4.5`, `-0.5`, `-0.625`, `-0.75`, `-0.875`, `-1`, `-1.125`, `-1.25`, `-1.375`, `-1.5`, `-1.625`, `-1.75`, `-1.875`, `-2`, `-2.125`, `-2.25`, `-2.375`, `-2.5`, `-2.625`, `-2.75`, `-2.875`, `-3`, `-3.125`, `-3.25`, `-3.375`, `-3.5`, `-3.625`, `-3.75`, `-3.875`, `-4`, `-4.125`, `-4.25`, `-4.375`) VALUES
(1, '1CHE', 0.25, 0.25, 0.38, 0.38, 0.5, 0.5, 0.5, 0.75, 0.75, 0.75, 1, 1, 1, 1.5, 1.5, 1.75, 1.75, 1.75, 1.5, 1.5, 1.5, 1.5, 1.5, 1.75, 1.75, 1.75, 2, 2, 2, 2.5, 2.5, 2.25, 2.25, -0.25, -0.25, -0.38, -0.38, -0.5, -0.5, -0.5, -0.75, -0.75, -0.75, -1, -1, -1, -1.5, -1.5, -1.75, -1.75, -1.75, -1.5, -1.5, -1.5, -1.5, -1.5, -1.75, -1.75, -1.75, -2, -2, -2, -2.5, -2.5, -2.25),
(2, '2GIR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '3SEAT', 0.25, 0.31, 0.38, 0.44, 0.5, 0.56, 0.63, 0.69, 0.75, 0.81, 0.88, 0.94, 1, 1.06, 1.13, 1.19, 1.25, 1.31, 1.38, 1.44, 1.5, 1.56, 1.63, 1.69, 1.75, 1.81, 1.88, 1.94, 2, 2.06, 2.13, 2.19, 2.25, -0.25, -0.31, -0.38, -0.44, -0.5, -0.56, -0.63, -0.69, -0.75, -0.81, -0.88, -0.94, -1, -1.06, -1.13, -1.19, -1.25, -1.31, -1.38, -1.44, -1.5, -1.56, -1.63, -1.69, -1.75, -1.81, -1.88, -1.94, -2, -2.06, -2.13, -2.19),
(4, '4LEN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '5FRTLEN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '6PP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '7BCKWDTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '9BICEP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '10LAPK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '11LAPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, '12BTN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, '13WRIST', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, '14AHDEPTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, '15VENT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `head_for_plus`
--

CREATE TABLE `head_for_plus` (
  `id` int(11) NOT NULL,
  `head_for_plus` varchar(20) NOT NULL,
  `0.25` float NOT NULL,
  `0.5` float NOT NULL,
  `0.75` float NOT NULL,
  `1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head_for_plus`
--

INSERT INTO `head_for_plus` (`id`, `head_for_plus`, `0.25`, `0.5`, `0.75`, `1`) VALUES
(1, '1CHE', 0, 0, 0, 0),
(2, '2GIR', 0, 0, 0, 0),
(3, '3SEAT', 0, 0, 0, 0),
(4, '4LEN', 0.25, 0.5, 0.75, 1),
(5, '5FRTLEN', -0.13, -0.25, -0.38, -0.5),
(6, '6PP', 0, 0, 0, 0),
(7, '7BCKWDTH', 0, 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0, 0),
(9, '9BICEP', 0, 0, 0, 0),
(10, '10LAPK', 0, 0, 0, 0),
(11, '11LAPP', 0, 0, 0, 0),
(12, '12BTN', -0.13, -0.25, -0.38, -0.5),
(13, '13WRIST', 0, 0, 0, 0),
(14, '14AHDEPTH', -0.13, -0.25, -0.38, -0.5),
(15, '15VENT', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hip_forw_plus`
--

CREATE TABLE `hip_forw_plus` (
  `id` int(11) NOT NULL,
  `hip_forw_plus` varchar(30) DEFAULT NULL,
  `0.25` float NOT NULL,
  `0.5` float NOT NULL,
  `0.75` float NOT NULL,
  `1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hip_forw_plus`
--

INSERT INTO `hip_forw_plus` (`id`, `hip_forw_plus`, `0.25`, `0.5`, `0.75`, `1`) VALUES
(1, '1WAIST', 0, 0, 0, 0),
(2, 'Waistband Width', 0, 0, 0, 0),
(3, '2SEAT', 0, 1, 1, 1),
(4, '3THIGH', 0, 0, 0, 0),
(5, '4KNEE', 0, 0, 0, 0),
(6, '5BTM', 0, 0, 0, 0),
(7, '6INSEAM', 0, 0, 0, 0),
(8, '7OTSEAM', 0, 0, 0, 0),
(9, '8TRURISE', 0, 0, 0, 0),
(10, '9FRTRISE', 1, 1, 3, 1),
(11, '10BKRISE', -0.25, -0.5, -0.75, -1),
(12, '11URISE', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jkt_london_fit_r`
--

CREATE TABLE `jkt_london_fit_r` (
  `size` varchar(20) NOT NULL,
  `34` float NOT NULL,
  `35` float NOT NULL,
  `36` float NOT NULL,
  `37` float NOT NULL,
  `38` float NOT NULL,
  `39` float NOT NULL,
  `40` float NOT NULL,
  `41` float NOT NULL,
  `42` float NOT NULL,
  `43` float NOT NULL,
  `44` float NOT NULL,
  `45` float NOT NULL,
  `46` float NOT NULL,
  `47` float NOT NULL,
  `48` float NOT NULL,
  `49` float NOT NULL,
  `50` float NOT NULL,
  `51` float NOT NULL,
  `52` float NOT NULL,
  `53` float NOT NULL,
  `54` float NOT NULL,
  `55` float NOT NULL,
  `56` float NOT NULL,
  `57` float NOT NULL,
  `58` float NOT NULL,
  `59` float NOT NULL,
  `60` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jkt_london_fit_r`
--

INSERT INTO `jkt_london_fit_r` (`size`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`) VALUES
('1CHE', 34.63, 35.63, 36.63, 37.63, 38.63, 39.63, 40.63, 41.63, 42.63, 43.63, 44.63, 45.63, 46.63, 47.63, 48.63, 49.63, 50.63, 51.63, 52.63, 53.63, 54.63, 55.63, 56.63, 57.63, 58.63, 59.63, 60.63),
('2GIR', 17.75, 18.25, 18.75, 19.25, 19.75, 20.25, 20.75, 21.25, 21.75, 22.25, 22.75, 23.25, 23.75, 24.25, 24.75, 25.25, 25.75, 26.25, 26.75, 27.25, 27.75, 28.25, 28.75, 29.25, 29.75, 30.25, 30.75),
('3SEAT', 35.63, 36.63, 37.63, 38.63, 39.63, 40.63, 41.63, 42.63, 43.63, 44.63, 45.63, 46.63, 47.63, 48.63, 49.63, 50.63, 51.63, 52.63, 53.63, 54.63, 55.63, 56.63, 57.63, 58.63, 59.63, 60.63, 61.63),
('4LEN', 30.25, 30.38, 30.5, 30.63, 30.75, 30.88, 31, 31.13, 31.25, 31.38, 31.5, 31.63, 31.75, 31.88, 32, 32.13, 32.25, 32.38, 32.5, 32.63, 32.75, 32.88, 33, 33.13, 33.25, 33.38, 33.5),
('5FRTLEN', 30.88, 31, 31.13, 31.25, 31.5, 31.63, 31.75, 31.88, 32, 32.25, 32.38, 32.5, 32.63, 32.75, 33, 33.13, 33.25, 33.38, 33.5, 33.75, 33.88, 34, 34.13, 34.25, 34.5, 34.63, 34.75),
('6PP', 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.75, 20, 20.25, 20.5, 20.75, 21, 21.25, 21.38, 21.63, 21.75, 22, 22.13, 22.38, 22.5, 22.75, 22.88, 23.13, 23.25, 23.5, 23.63),
('7BCKWDTH', 8.75, 8.88, 9, 9.13, 9.25, 9.38, 9.5, 9.63, 9.75, 9.88, 10, 10.13, 10.25, 10.38, 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12),
('8SLVOUT', 23.88, 24, 24.13, 24.25, 24.38, 24.5, 24.63, 24.75, 24.88, 25, 25.13, 25.25, 25.38, 25.5, 25.63, 25.75, 25.88, 26, 26.13, 26.25, 26.38, 26.5, 26.63, 26.75, 26.88, 27, 27.13),
('9BICEP', 13.94, 14.13, 14.31, 14.5, 14.75, 15, 15.13, 15.31, 15.5, 15.75, 15.88, 16.13, 16.31, 16.5, 16.75, 16.88, 17.13, 17.25, 17.5, 17.63, 17.88, 18.06, 18.25, 18.5, 18.63, 18.88, 19.06),
('10LAPK', 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5),
('11LAPP', 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88),
('12BTN', 16.88, 17.13, 17.38, 17.63, 17.75, 18, 18.13, 18.25, 18.5, 18.63, 18.88, 19, 19.25, 19.38, 19.5, 19.75, 19.88, 20.13, 20.25, 20.5, 20.63, 20.88, 21, 21.25, 21.38, 21.63, 21.75),
('13WRIST', 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14),
('14AHDEPTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('15VENT', 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5);

-- --------------------------------------------------------

--
-- Table structure for table `low_clr_plus`
--

CREATE TABLE `low_clr_plus` (
  `id` int(11) NOT NULL,
  `low_clr_plus` varchar(20) NOT NULL,
  `0.25` float NOT NULL,
  `0.375` float NOT NULL,
  `0.5` float NOT NULL,
  `0.625` float NOT NULL,
  `0.75` float NOT NULL,
  `0.875` float NOT NULL,
  `1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `low_clr_plus`
--

INSERT INTO `low_clr_plus` (`id`, `low_clr_plus`, `0.25`, `0.375`, `0.5`, `0.625`, `0.75`, `0.875`, `1`) VALUES
(1, '1CHE', 0, 0, 0, 0, 0, 0, 0),
(2, '2GIR', 0, 0, 0, 0, 0, 0, 0),
(3, '3SEAT', 0, 0, 0, 0, 0, 0, 0),
(4, '4LEN', -0.25, -0.38, -0.5, -0.63, -0.75, -0.88, -1),
(5, '5FRTLEN', 0, 0, 0, 0, 0, 0, 0),
(6, '6PP', 0, 0, 0, 0, 0, 0, 0),
(7, '7BCKWDTH', 0, 0, 0, 0, 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0, 0, 0, 0, 0),
(9, '9BICEP', 0, 0, 0, 0, 0, 0, 0),
(10, '10LAPK', 0, 0, 0, 0, 0, 0, 0),
(11, '11LAPP', 0, 0, 0, 0, 0, 0, 0),
(12, '12BTN', 0, 0, 0, 0, 0, 0, 0),
(13, '13WRIST', 0, 0, 0, 0, 0, 0, 0),
(14, '14AHDEPTH', 0, 0, 0, 0, 0, 0, 0),
(15, '15VENT', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `low_fron`
--

CREATE TABLE `low_fron` (
  `id` int(11) NOT NULL,
  `low_fron` varchar(20) NOT NULL,
  `0.25` float NOT NULL,
  `0.38` float NOT NULL,
  `0.5` float NOT NULL,
  `0.63` float NOT NULL,
  `0.75` float NOT NULL,
  `0.88` float NOT NULL,
  `1` float NOT NULL,
  `1.13` float NOT NULL,
  `1.25` float NOT NULL,
  `1.38` float NOT NULL,
  `1.5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `low_fron`
--

INSERT INTO `low_fron` (`id`, `low_fron`, `0.25`, `0.38`, `0.5`, `0.63`, `0.75`, `0.88`, `1`, `1.13`, `1.25`, `1.38`, `1.5`) VALUES
(1, '1WAIST', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Waistband Width', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '2SEAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '3THIGH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '4KNEE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '5BTM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '6INSEAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '7OTSEAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '8TRURISE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '9FRTRISE', -0.25, -0.38, -0.5, -0.63, -0.75, -0.88, -1, -1.13, -1.25, -1.38, -1.5),
(11, '10BKRISE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, '11URISE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `measurement_chart`
--

CREATE TABLE `measurement_chart` (
  `id` int(11) NOT NULL,
  `description` varchar(20) NOT NULL,
  `pa` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `34` float NOT NULL,
  `35` float NOT NULL,
  `36` float NOT NULL,
  `37` float NOT NULL,
  `38` float NOT NULL,
  `39` float NOT NULL,
  `40` float NOT NULL,
  `41` float NOT NULL,
  `42` float NOT NULL,
  `43` float NOT NULL,
  `44` float NOT NULL,
  `45` float NOT NULL,
  `46` float NOT NULL,
  `47` float NOT NULL,
  `48` float NOT NULL,
  `49` float NOT NULL,
  `50` float NOT NULL,
  `51` float NOT NULL,
  `52` float NOT NULL,
  `53` float NOT NULL,
  `54` float NOT NULL,
  `55` float NOT NULL,
  `56` float NOT NULL,
  `57` float NOT NULL,
  `58` float NOT NULL,
  `59` float NOT NULL,
  `60` float NOT NULL,
  `tol_plus` float NOT NULL,
  `tol_minus` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurement_chart`
--

INSERT INTO `measurement_chart` (`id`, `description`, `pa`, `grade`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`, `tol_plus`, `tol_minus`) VALUES
(1, '1GRITH ', '3/8\"', '1\"', 18.25, 18.75, 19.25, 19.75, 20.25, 20.75, 21.25, 21.75, 22.25, 22.75, 23.25, 23.75, 24.25, 24.75, 25.25, 25.75, 26.25, 26.75, 27.25, 27.75, 28.25, 28.75, 29.25, 29.75, 30.25, 30.75, 31.25, 1.3, 1.3),
(2, '2CHE', '7/8\"', '1.00', 33.25, 34.25, 35.25, 36.25, 37.25, 38.25, 39.25, 40.25, 41.25, 42.25, 43.25, 44.25, 45.25, 46.25, 47.25, 48.25, 49.25, 50.25, 51.25, 52.25, 53.25, 54.25, 55.25, 56.25, 57.25, 58.25, 59.25, 0, 0),
(3, '3FLCB', '5/16\"', '3/16\"', 27.13, 27.38, 27.63, 27.88, 28.13, 28.25, 28.5, 28.63, 28.88, 29, 29.25, 29.38, 29.63, 29.88, 30, 30.25, 30.38, 30.63, 30.75, 31, 31.25, 31.5, 31.75, 32, 32.25, 32.5, 32.75, 1.3, 1.3),
(4, '4BKL', '3/16\"', '1/8\"', 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 21.88, 22, 22.13, 22.25, 22.38, 22.5, 22.63, 22.75, 22.88, 23, 23.13, 23.25, 23.38, 23.5, 23.63, 23.75, 23.88, 24, 24.13, 24.25, 0.6, 0.6),
(5, '5PP', ' 1/4', '1/4\"', 12.13, 12.38, 12.63, 12.88, 13.13, 13.38, 13.63, 13.88, 14.13, 14.38, 14.63, 14.88, 15.13, 15.38, 15.63, 15.88, 16.13, 16.38, 16.63, 16.88, 17.13, 17.38, 17.63, 17.88, 18.13, 18.38, 18.63, 0.6, 0.6),
(6, '6BACKWDTH', ' 1/4', '1/4\"', 10.63, 10.88, 11.13, 11.38, 11.63, 11.88, 12.13, 12.38, 12.63, 12.88, 13.13, 13.38, 13.63, 13.88, 14.13, 14.38, 14.63, 14.88, 15.13, 15.38, 15.63, 15.88, 16.13, 16.38, 16.63, 16.88, 17.13, 0.6, 0.6),
(7, '7BP1', '', '0.25', 13, 13.25, 13.5, 13.75, 14, 14.25, 14.5, 14.75, 15, 15.25, 15.38, 15.63, 15.88, 16.13, 16.38, 16.63, 16.88, 17.13, 17.38, 17.63, 17.88, 18.13, 18.38, 18.63, 18.88, 19.13, 19.38, 0, 0),
(8, '8BP2', '', '0.25', 16.25, 16.63, 17, 17.38, 17.5, 17.88, 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.75, 20, 20.25, 20.5, 20.75, 21, 21.38, 21.75, 22.13, 22.5, 22.88, 23.25, 23.63, 24, 0, 0),
(9, '9BP3', '', '0.16', 7.5, 7.63, 7.75, 7.88, 8, 8.25, 8.38, 8.5, 8.75, 8.88, 9, 9.25, 9.38, 9.5, 9.63, 9.88, 10, 10.13, 10.38, 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 0, 0),
(10, '10BP4', '', '0.25', 12.25, 12.5, 12.75, 13, 13.25, 13.5, 13.75, 14, 14.25, 14.5, 14.75, 15, 15.25, 15.5, 15.75, 16, 16.25, 16.5, 16.75, 17, 17.25, 17.5, 17.75, 18, 18.25, 18.5, 18.75, 0, 0),
(11, '11BP5', '', '0.25', 12.25, 12.5, 12.75, 13, 13.25, 13.38, 13.63, 14, 14.13, 14.38, 14.63, 14.88, 15.13, 15.38, 15.63, 15.88, 16.13, 16.38, 16.5, 16.75, 17, 17.25, 17.5, 17.75, 18, 18.25, 18.5, 0, 0),
(12, '12BP6', '', '0.25', 14.38, 14.63, 14.88, 15.13, 15.38, 15.63, 15.88, 16.13, 16.38, 16.63, 16.88, 17.13, 17.38, 17.63, 17.88, 18.13, 18.38, 18.63, 18.88, 19.13, 19.38, 19.63, 19.88, 20.13, 20.38, 20.63, 20.88, 0, 0),
(13, '13BP7', '', '0.25', 13, 13.25, 13.5, 13.75, 14, 14.25, 14.5, 14.75, 15, 15.25, 15.5, 15.75, 16, 16.25, 16.5, 16.75, 17, 17.25, 17.5, 17.75, 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `modeloptions`
--

CREATE TABLE `modeloptions` (
  `options` varchar(30) NOT NULL,
  `val` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modeloptions`
--

INSERT INTO `modeloptions` (`options`, `val`) VALUES
('FLAPPK', '0'),
('BESOMP', '0'),
('2PATCH', '0'),
('2PATFL', '0'),
('3PATCH', '0'),
('3PATFL', '0'),
('L-WELT', '0'),
('STDPLG', '0'),
('STDPSH', '0'),
('CIGLG', '1L'),
('CIGSH', ''),
('PENPLG', ''),
('PENPSH', ''),
('CELLLG', ''),
('CELLSH', ''),
('PASSPK', ''),
('SVSTRA', ''),
('SWEATP', ''),
('TKT-PK', ''),
('ELBOWP', ''),
('C_SETN', '1'),
('C_SETF', ''),
('C-SETH', ''),
('RIOFAC', '1'),
('SOVFAC', ''),
('FF', ''),
('CPSLV', ''),
('YOKE', ''),
('HANDMD', '0'),
('BELTBK', ''),
('PKT-SQ', '0'),
('SLV_CUF', '0'),
('GUNPAT', '0'),
('STOTAB', '0'),
('SH-TAB', '0'),
('NOOBW', '0'),
('MILL-F', '0'),
('1WELT', '0'),
('1PLYBK', '0'),
('2PLYBK', '0'),
('NOVSLV', '0'),
('BISWBK', '0'),
('STBKYK', '0'),
('STFRYK', '0'),
('Jkt_NODART', '0'),
('NODA-H', ''),
('NODA-F', ''),
('FLAPPK', '0'),
('BESOMP', '0'),
('2PATCH', '0'),
('2PATFL', '0'),
('3PATCH', '0'),
('3PATFL', '0'),
('L-WELT', '0'),
('STDPLG', '0'),
('STDPSH', '0'),
('CIGLG', '1L'),
('CIGSH', ''),
('PENPLG', ''),
('PENPSH', ''),
('CELLLG', ''),
('CELLSH', ''),
('PASSPK', ''),
('SVSTRA', ''),
('SWEATP', ''),
('TKT-PK', ''),
('ELBOWP', ''),
('C_SETN', '1'),
('C_SETF', ''),
('C-SETH', ''),
('RIOFAC', '1'),
('SOVFAC', ''),
('FF', ''),
('CPSLV', ''),
('YOKE', ''),
('HANDMD', '0'),
('BELTBK', ''),
('PKT-SQ', '0'),
('SLV_CUF', '0'),
('GUNPAT', '0'),
('STOTAB', '0'),
('SH-TAB', '0'),
('NOOBW', '0'),
('MILL-F', '0'),
('1WELT', '0'),
('1PLYBK', '0'),
('2PLYBK', '0'),
('NOVSLV', '0'),
('BISWBK', '0'),
('STBKYK', '0'),
('STFRYK', '0'),
('Jkt_NODART', '0'),
('NODA-H', ''),
('NODA-F', ''),
('FLAPPK', '0'),
('BESOMP', '0'),
('2PATCH', '0'),
('2PATFL', '0'),
('3PATCH', '0'),
('3PATFL', '0'),
('L-WELT', '0'),
('STDPLG', '0'),
('STDPSH', '0'),
('CIGLG', '1L'),
('CIGSH', ''),
('PENPLG', ''),
('PENPSH', ''),
('CELLLG', ''),
('CELLSH', ''),
('PASSPK', ''),
('SVSTRA', ''),
('SWEATP', ''),
('TKT-PK', ''),
('ELBOWP', ''),
('C_SETN', '1'),
('C_SETF', ''),
('C-SETH', ''),
('RIOFAC', '1'),
('SOVFAC', ''),
('FF', ''),
('CPSLV', ''),
('YOKE', ''),
('HANDMD', '0'),
('BELTBK', ''),
('PKT-SQ', '0'),
('SLV_CUF', '0'),
('GUNPAT', '0'),
('STOTAB', '0'),
('SH-TAB', '0'),
('NOOBW', '0'),
('MILL-F', '0'),
('1WELT', '0'),
('1PLYBK', '0'),
('2PLYBK', '0'),
('NOVSLV', '0'),
('BISWBK', '0'),
('STBKYK', '0'),
('STFRYK', '0'),
('Jkt_NODART', '0'),
('NODA-H', ''),
('NODA-F', ''),
('FLAPPK', '0'),
('BESOMP', '0'),
('2PATCH', '0'),
('2PATFL', '0'),
('3PATCH', '0'),
('3PATFL', '0'),
('L-WELT', '0'),
('STDPLG', '0'),
('STDPSH', '0'),
('CIGLG', '1L'),
('CIGSH', ''),
('PENPLG', ''),
('PENPSH', ''),
('CELLLG', ''),
('CELLSH', ''),
('PASSPK', ''),
('SVSTRA', ''),
('SWEATP', ''),
('TKT-PK', ''),
('ELBOWP', ''),
('C_SETN', '1'),
('C_SETF', ''),
('C-SETH', ''),
('RIOFAC', '1'),
('SOVFAC', ''),
('FF', ''),
('CPSLV', ''),
('YOKE', ''),
('HANDMD', '0'),
('BELTBK', ''),
('PKT-SQ', '0'),
('SLV_CUF', '0'),
('GUNPAT', '0'),
('STOTAB', '0'),
('SH-TAB', '0'),
('NOOBW', '0'),
('MILL-F', '0'),
('1WELT', '0'),
('1PLYBK', '0'),
('2PLYBK', '0'),
('NOVSLV', '0'),
('BISWBK', '0'),
('STBKYK', '0'),
('STFRYK', '0'),
('Jkt_NODART', '0'),
('NODA-H', ''),
('NODA-F', ''),
('FLAPPK', ''),
('BESOMP', ''),
('2PATCH', ''),
('2PATFL', ''),
('3PATCH', ''),
('3PATFL', ''),
('L-WELT', ''),
('STDPLG', ''),
('STDPSH', ''),
('CIGLG', '1L'),
('CIGSH', ''),
('PENPLG', ''),
('PENPSH', ''),
('CELLLG', ''),
('CELLSH', ''),
('PASSPK', ''),
('SVSTRA', ''),
('SWEATP', ''),
('TKT-PK', ''),
('ELBOWP', ''),
('C_SETN', '1'),
('C_SETF', ''),
('C-SETH', ''),
('RIOFAC', '1'),
('SOVFAC', ''),
('FF', ''),
('CPSLV', ''),
('YOKE', ''),
('HANDMD', '0'),
('BELTBK', ''),
('PKT-SQ', ''),
('SLV_CUF', ''),
('GUNPAT', ''),
('STOTAB', ''),
('SH-TAB', ''),
('NOOBW', '0'),
('MILL-F', ''),
('1WELT', ''),
('1PLYBK', ''),
('2PLYBK', ''),
('NOVSLV', ''),
('BISWBK', ''),
('STBKYK', ''),
('STFRYK', ''),
('Jkt_NODART', '0'),
('NODA-H', ''),
('NODA-F', ''),
('FLAPPK', ''),
('BESOMP', ''),
('2PATCH', ''),
('2PATFL', ''),
('3PATCH', ''),
('3PATFL', ''),
('L-WELT', ''),
('STDPLG', ''),
('STDPSH', ''),
('CIGLG', '1L'),
('CIGSH', ''),
('PENPLG', ''),
('PENPSH', ''),
('CELLLG', ''),
('CELLSH', ''),
('PASSPK', ''),
('SVSTRA', ''),
('SWEATP', ''),
('TKT-PK', ''),
('ELBOWP', ''),
('C_SETN', '1'),
('C_SETF', ''),
('C-SETH', ''),
('RIOFAC', '1'),
('SOVFAC', ''),
('FF', ''),
('CPSLV', ''),
('YOKE', ''),
('HANDMD', '0'),
('BELTBK', ''),
('PKT-SQ', ''),
('SLV_CUF', ''),
('GUNPAT', ''),
('STOTAB', ''),
('SH-TAB', ''),
('NOOBW', '0'),
('MILL-F', ''),
('1WELT', ''),
('1PLYBK', ''),
('2PLYBK', ''),
('NOVSLV', ''),
('BISWBK', ''),
('STBKYK', ''),
('STFRYK', ''),
('Jkt_NODART', '0'),
('NODA-H', ''),
('NODA-F', ''),
('FLAPPK', ''),
('BESOMP', ''),
('2PATCH', ''),
('2PATFL', ''),
('3PATCH', ''),
('3PATFL', ''),
('L-WELT', ''),
('STDPLG', ''),
('STDPSH', ''),
('CIGLG', '1L'),
('CIGSH', ''),
('PENPLG', ''),
('PENPSH', ''),
('CELLLG', ''),
('CELLSH', ''),
('PASSPK', ''),
('SVSTRA', ''),
('SWEATP', ''),
('TKT-PK', ''),
('ELBOWP', ''),
('C_SETN', '1'),
('C_SETF', ''),
('C-SETH', ''),
('RIOFAC', '1'),
('SOVFAC', ''),
('FF', ''),
('CPSLV', ''),
('YOKE', ''),
('HANDMD', '0'),
('BELTBK', ''),
('PKT-SQ', ''),
('SLV_CUF', ''),
('GUNPAT', ''),
('STOTAB', ''),
('SH-TAB', ''),
('NOOBW', '0'),
('MILL-F', ''),
('1WELT', ''),
('1PLYBK', ''),
('2PLYBK', ''),
('NOVSLV', ''),
('BISWBK', ''),
('STBKYK', ''),
('STFRYK', ''),
('Jkt_NODART', '0'),
('NODA-H', ''),
('NODA-F', ''),
('FLAPPK', ''),
('BESOMP', ''),
('2PATCH', ''),
('2PATFL', ''),
('3PATCH', ''),
('3PATFL', ''),
('L-WELT', ''),
('STDPLG', ''),
('STDPSH', ''),
('CIGLG', '1L'),
('CIGSH', ''),
('PENPLG', ''),
('PENPSH', ''),
('CELLLG', ''),
('CELLSH', ''),
('PASSPK', ''),
('SVSTRA', ''),
('SWEATP', ''),
('TKT-PK', ''),
('ELBOWP', ''),
('C_SETN', '1'),
('C_SETF', ''),
('C-SETH', ''),
('RIOFAC', '1'),
('SOVFAC', ''),
('FF', ''),
('CPSLV', ''),
('YOKE', ''),
('HANDMD', '0'),
('BELTBK', ''),
('PKT-SQ', ''),
('SLV_CUF', ''),
('GUNPAT', ''),
('STOTAB', ''),
('SH-TAB', ''),
('NOOBW', '0'),
('MILL-F', ''),
('1WELT', ''),
('1PLYBK', ''),
('2PLYBK', ''),
('NOVSLV', ''),
('BISWBK', ''),
('STBKYK', ''),
('STFRYK', ''),
('Jkt_NODART', '0'),
('NODA-H', ''),
('NODA-F', ''),
('FLAPPK', ''),
('BESOMP', ''),
('2PATCH', ''),
('2PATFL', ''),
('3PATCH', ''),
('3PATFL', ''),
('L-WELT', ''),
('STDPLG', ''),
('STDPSH', ''),
('CIGLG', '1L'),
('CIGSH', ''),
('PENPLG', ''),
('PENPSH', ''),
('CELLLG', ''),
('CELLSH', ''),
('PASSPK', ''),
('SVSTRA', ''),
('SWEATP', ''),
('TKT-PK', ''),
('ELBOWP', ''),
('C_SETN', '1'),
('C_SETF', ''),
('C-SETH', ''),
('RIOFAC', '1'),
('SOVFAC', ''),
('FF', ''),
('CPSLV', ''),
('YOKE', ''),
('HANDMD', '0'),
('BELTBK', ''),
('PKT-SQ', ''),
('SLV_CUF', ''),
('GUNPAT', ''),
('STOTAB', ''),
('SH-TAB', ''),
('NOOBW', '0'),
('MILL-F', ''),
('1WELT', ''),
('1PLYBK', ''),
('2PLYBK', ''),
('NOVSLV', ''),
('BISWBK', ''),
('STBKYK', ''),
('STFRYK', ''),
('Jkt_NODART', '0'),
('NODA-H', ''),
('NODA-F', '');

-- --------------------------------------------------------

--
-- Table structure for table `modeloptionst`
--

CREATE TABLE `modeloptionst` (
  `name` varchar(30) NOT NULL,
  `val` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modeloptionst`
--

INSERT INTO `modeloptionst` (`name`, `val`) VALUES
('C-PKT', '0'),
('CFHKLG', '0'),
('C-HKLG', '0'),
('CPFKLG', '0'),
('S-PKT', '0'),
('SFHKLG', '0'),
('S-HKLG', '0'),
('SPFKLG', '0'),
('FB-PKT', '0'),
('FFHKLG', '0'),
('F-HKLG', '0'),
('FPFKLG', '0'),
('P-EXTN', '0'),
('NOLOOP', '0'),
('TNLLOP', '0'),
('BKFLAP', '0'),
('WATCHP', '0'),
('WAFLAP', '0'),
('ADJTAB', '0'),
('EXITAB', '0'),
('TABFLY', '0'),
('COINPK', '0'),
('RENFLG', '0'),
('RENFSH', '0'),
('D-RING', '0'),
('PSQUFL', '0'),
('ADBUCK', '0'),
('WBSKIR', '0'),
('STAYBA', '0'),
('W-PKT', '0'),
('WFHKLG', '0'),
('W-HKLG', '0'),
('WPFKLG', '0');

-- --------------------------------------------------------

--
-- Table structure for table `mtm_us_trs(l)`
--

CREATE TABLE `mtm_us_trs(l)` (
  `Measurement_points` varchar(20) NOT NULL,
  `28M` float NOT NULL,
  `29M` float NOT NULL,
  `30M` float NOT NULL,
  `31M` float NOT NULL,
  `32M` float NOT NULL,
  `33M` float NOT NULL,
  `34M` float NOT NULL,
  `35M` float NOT NULL,
  `36M` float NOT NULL,
  `37M` float NOT NULL,
  `38M` float NOT NULL,
  `39M` float NOT NULL,
  `40M` float NOT NULL,
  `41M` float NOT NULL,
  `42M` float NOT NULL,
  `43M` float NOT NULL,
  `44M` float NOT NULL,
  `45M` float NOT NULL,
  `46M` float NOT NULL,
  `47M` float NOT NULL,
  `48M` float NOT NULL,
  `49M` float NOT NULL,
  `50M` float NOT NULL,
  `51M` float NOT NULL,
  `52M` float NOT NULL,
  `53M` float NOT NULL,
  `54M` float NOT NULL,
  `55M` float NOT NULL,
  `56M` float NOT NULL,
  `57M` float NOT NULL,
  `58M` float NOT NULL,
  `59M` float NOT NULL,
  `60M` float NOT NULL,
  `61M` float NOT NULL,
  `62M` float NOT NULL,
  `63M` float NOT NULL,
  `64M` float NOT NULL,
  `28S` float NOT NULL,
  `29S` float NOT NULL,
  `30S` float NOT NULL,
  `31S` float NOT NULL,
  `32S` float NOT NULL,
  `33S` float NOT NULL,
  `34S` float NOT NULL,
  `35S` float NOT NULL,
  `36S` float NOT NULL,
  `37S` float NOT NULL,
  `38S` float NOT NULL,
  `39S` float NOT NULL,
  `40S` float NOT NULL,
  `41S` float NOT NULL,
  `42S` float NOT NULL,
  `43S` float NOT NULL,
  `44S` float NOT NULL,
  `45S` float NOT NULL,
  `46S` float NOT NULL,
  `47S` float NOT NULL,
  `48S` float NOT NULL,
  `49S` float NOT NULL,
  `50S` float NOT NULL,
  `51S` float NOT NULL,
  `52S` float NOT NULL,
  `53S` float NOT NULL,
  `54S` float NOT NULL,
  `55S` float NOT NULL,
  `56S` float NOT NULL,
  `57S` float NOT NULL,
  `58S` float NOT NULL,
  `59S` float NOT NULL,
  `60S` float NOT NULL,
  `61S` float NOT NULL,
  `62S` float NOT NULL,
  `63S` float NOT NULL,
  `64S` float NOT NULL,
  `28F` float NOT NULL,
  `29F` float NOT NULL,
  `30F` float NOT NULL,
  `31F` float NOT NULL,
  `32F` float NOT NULL,
  `33F` float NOT NULL,
  `34F` float NOT NULL,
  `35F` float NOT NULL,
  `36F` float NOT NULL,
  `37F` float NOT NULL,
  `38F` float NOT NULL,
  `39F` float NOT NULL,
  `40F` float NOT NULL,
  `41F` float NOT NULL,
  `42F` float NOT NULL,
  `43F` float NOT NULL,
  `44F` float NOT NULL,
  `45F` float NOT NULL,
  `46F` float NOT NULL,
  `47F` float NOT NULL,
  `48F` float NOT NULL,
  `49F` float NOT NULL,
  `50F` float NOT NULL,
  `51F` float NOT NULL,
  `52F` float NOT NULL,
  `53F` float NOT NULL,
  `54F` float NOT NULL,
  `55F` float NOT NULL,
  `56F` float NOT NULL,
  `57F` float NOT NULL,
  `58F` float NOT NULL,
  `59F` float NOT NULL,
  `60F` float NOT NULL,
  `61F` float NOT NULL,
  `62F` float NOT NULL,
  `63F` float NOT NULL,
  `64F` float NOT NULL,
  `24T` float NOT NULL,
  `25T` float NOT NULL,
  `26T` float NOT NULL,
  `27T` float NOT NULL,
  `28T` float NOT NULL,
  `29T` float NOT NULL,
  `30T` float NOT NULL,
  `31T` float NOT NULL,
  `32T` float NOT NULL,
  `33T` float NOT NULL,
  `34T` float NOT NULL,
  `35T` float NOT NULL,
  `36T` float NOT NULL,
  `37T` float NOT NULL,
  `38T` float NOT NULL,
  `39T` float NOT NULL,
  `40T` float NOT NULL,
  `41T` float NOT NULL,
  `42T` float NOT NULL,
  `43T` float NOT NULL,
  `44T` float NOT NULL,
  `45T` float NOT NULL,
  `46T` float NOT NULL,
  `47T` float NOT NULL,
  `48T` float NOT NULL,
  `49T` float NOT NULL,
  `50T` float NOT NULL,
  `51T` float NOT NULL,
  `52T` float NOT NULL,
  `53T` float NOT NULL,
  `54T` float NOT NULL,
  `55T` float NOT NULL,
  `56T` float NOT NULL,
  `57T` float NOT NULL,
  `58T` float NOT NULL,
  `59T` float NOT NULL,
  `60T` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtm_us_trs(l)`
--

INSERT INTO `mtm_us_trs(l)` (`Measurement_points`, `28M`, `29M`, `30M`, `31M`, `32M`, `33M`, `34M`, `35M`, `36M`, `37M`, `38M`, `39M`, `40M`, `41M`, `42M`, `43M`, `44M`, `45M`, `46M`, `47M`, `48M`, `49M`, `50M`, `51M`, `52M`, `53M`, `54M`, `55M`, `56M`, `57M`, `58M`, `59M`, `60M`, `61M`, `62M`, `63M`, `64M`, `28S`, `29S`, `30S`, `31S`, `32S`, `33S`, `34S`, `35S`, `36S`, `37S`, `38S`, `39S`, `40S`, `41S`, `42S`, `43S`, `44S`, `45S`, `46S`, `47S`, `48S`, `49S`, `50S`, `51S`, `52S`, `53S`, `54S`, `55S`, `56S`, `57S`, `58S`, `59S`, `60S`, `61S`, `62S`, `63S`, `64S`, `28F`, `29F`, `30F`, `31F`, `32F`, `33F`, `34F`, `35F`, `36F`, `37F`, `38F`, `39F`, `40F`, `41F`, `42F`, `43F`, `44F`, `45F`, `46F`, `47F`, `48F`, `49F`, `50F`, `51F`, `52F`, `53F`, `54F`, `55F`, `56F`, `57F`, `58F`, `59F`, `60F`, `61F`, `62F`, `63F`, `64F`, `24T`, `25T`, `26T`, `27T`, `28T`, `29T`, `30T`, `31T`, `32T`, `33T`, `34T`, `35T`, `36T`, `37T`, `38T`, `39T`, `40T`, `41T`, `42T`, `43T`, `44T`, `45T`, `46T`, `47T`, `48T`, `49T`, `50T`, `51T`, `52T`, `53T`, `54T`, `55T`, `56T`, `57T`, `58T`, `59T`, `60T`) VALUES
('Waist', 28.5, 29.5, 30.5, 31.5, 32.5, 33.5, 34.5, 35.5, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.5, 47.5, 48.5, 49.5, 50.5, 51.5, 52.5, 53.5, 54.5, 55.5, 56.5, 57.5, 58.5, 59.5, 60.5, 61.5, 62.5, 63.5, 64.5, 28.5, 29.5, 30.5, 31.5, 32.5, 33.5, 34.5, 35.5, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.5, 47.5, 48.5, 49.5, 50.5, 51.5, 52.5, 53.5, 54.5, 55.5, 56.5, 57.5, 58.5, 59.5, 60.5, 61.5, 62.5, 63.5, 64.5, 28.5, 29.5, 30.5, 31.5, 32.5, 33.5, 34.5, 35.5, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.5, 47.5, 48.5, 49.5, 50.5, 51.5, 52.5, 53.5, 54.5, 55.5, 56.5, 57.5, 58.5, 59.5, 60.5, 61.5, 62.5, 63.5, 64.5, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60),
('Seat(at fly 3 points', 37.75, 38.75, 39.75, 40.75, 41.75, 42.75, 43.75, 44.75, 45.75, 46.75, 47.63, 48.5, 49.38, 50.25, 51.13, 52, 52.88, 53.75, 54.63, 55.5, 56.38, 57.25, 58.13, 59, 59.88, 60.75, 61.63, 62.5, 63.38, 64.25, 65.13, 66, 66.88, 67.75, 68.63, 69.5, 70.38, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.38, 47.25, 48.13, 49, 49.88, 50.75, 51.63, 52.5, 53.38, 54.25, 55.13, 56, 56.88, 57.75, 58.63, 59.5, 60.38, 61.25, 62.13, 63, 63.88, 64.75, 65.63, 66.5, 67.38, 68.25, 69.13, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.38, 47.25, 48.13, 49, 49.88, 50.75, 51.63, 52.5, 53.38, 54.25, 55.13, 56, 56.88, 57.75, 58.63, 59.5, 60.38, 61.25, 62.13, 63, 63.88, 64.75, 65.63, 66.5, 67.38, 68.25, 69.13, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68),
('Thigh (1\'\' below cro', 26.75, 27.25, 27.75, 28.25, 28.75, 29.25, 29.75, 30.25, 30.75, 31.25, 31.69, 32.13, 32.56, 33, 33.44, 33.88, 34.31, 34.75, 35.19, 35.63, 36.06, 36.5, 36.94, 37.38, 37.81, 38.25, 38.69, 39.13, 39.56, 40, 40.44, 40.88, 41.31, 41.75, 42.19, 42.63, 43.06, 26.25, 26.75, 27.25, 27.75, 28.25, 28.75, 29.25, 29.75, 30.25, 30.75, 31.19, 31.63, 32.06, 32.5, 32.94, 33.38, 33.81, 34.25, 34.69, 35.13, 35.56, 36, 36.44, 36.88, 37.31, 37.75, 38.19, 38.63, 39.06, 39.5, 39.94, 40.38, 40.81, 41.25, 41.69, 42.13, 42.56, 25.75, 26.25, 26.75, 27.25, 27.75, 28.25, 28.75, 29.25, 29.75, 30.25, 30.69, 31.13, 31.56, 32, 32.44, 32.88, 33.31, 33.75, 34.19, 34.63, 35.06, 35.5, 35.94, 36.38, 36.81, 37.25, 37.69, 38.13, 38.56, 39, 39.44, 39.88, 40.31, 40.75, 41.19, 41.63, 42.06, 22.5, 22.88, 23.38, 23.63, 24.25, 24.63, 25.13, 25.63, 26, 26.38, 26.88, 27.38, 27.63, 28.25, 28.5, 28.88, 29.38, 29.5, 30.25, 30.5, 31.13, 31.38, 31.88, 32.25, 32.75, 33, 33.38, 33.88, 34.5, 35, 35.25, 35.75, 36.25, 36.75, 37, 37.25, 37.88),
('Knee(half of inseam ', 20.25, 20.5, 20.75, 21, 21.25, 21.5, 21.75, 22, 22.25, 22.5, 22.75, 23, 23.25, 23.5, 23.75, 24, 24.25, 24.5, 24.75, 25, 25.25, 25.5, 25.75, 26, 26.25, 26.5, 26.75, 27, 27.25, 27.5, 27.75, 28, 28.25, 28.5, 28.75, 29, 29.25, 20.25, 20.5, 20.75, 21, 21.25, 21.5, 21.75, 22, 22.25, 22.5, 22.75, 23, 23.25, 23.5, 23.75, 24, 24.25, 24.5, 24.75, 25, 25.25, 25.5, 25.75, 26, 26.25, 26.5, 26.75, 27, 27.25, 27.5, 27.75, 28, 28.25, 28.5, 28.75, 29, 29.25, 20.25, 20.5, 20.75, 21, 21.25, 21.5, 21.75, 22, 22.25, 22.5, 22.75, 23, 23.25, 23.5, 23.75, 24, 24.25, 24.5, 24.75, 25, 25.25, 25.5, 25.75, 26, 26.25, 26.5, 26.75, 27, 27.25, 27.5, 27.75, 28, 28.25, 28.5, 28.75, 29, 29.25, 17.5, 17.75, 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.75, 20, 20.25, 20.5, 20.75, 21, 21.25, 21.5, 21.75, 22, 22.25, 22.5, 22.75, 23, 23.25, 23.5, 23.75, 24, 24.25, 24.5, 24.75, 25, 25.25, 25.5, 25.75, 26, 26.25, 26.5),
('Bottom', 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 16.5, 16.75, 17, 17.25, 17.5, 17.75, 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.75, 20, 20.25, 20.5, 20.75, 21, 21.25, 21.5, 21.75, 22, 22.25, 22.5, 22.75, 23, 23.25, 23.5, 23.75, 24, 24.25, 24.5, 24.75, 25, 25.25, 25.5),
('Inseam-FINISHED HEM', 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5),
('Outseam-FINISHED HEM', 44.5, 44.63, 44.75, 44.88, 45, 45.13, 45.25, 45.38, 45.5, 45.63, 45.75, 45.88, 46, 46.13, 46.25, 46.38, 46.5, 46.63, 46.75, 46.88, 47, 47.13, 47.25, 47.38, 47.5, 47.63, 47.75, 47.88, 48, 48.13, 48.25, 48.38, 48.5, 48.63, 48.75, 48.88, 49, 44.5, 44.63, 44.75, 44.88, 45, 45.13, 45.25, 45.38, 45.5, 45.63, 45.75, 45.88, 46, 46.13, 46.25, 46.38, 46.5, 46.63, 46.75, 46.88, 47, 47.13, 47.25, 47.38, 47.5, 47.63, 47.75, 47.88, 48, 48.13, 48.25, 48.38, 48.5, 48.63, 48.75, 48.88, 49, 44.5, 44.63, 44.75, 44.88, 45, 45.13, 45.25, 45.38, 45.5, 45.63, 45.75, 45.88, 46, 46.13, 46.25, 46.38, 46.5, 46.63, 46.75, 46.88, 47, 47.13, 47.25, 47.38, 47.5, 47.63, 47.75, 47.88, 48, 48.13, 48.25, 48.38, 48.5, 48.63, 48.75, 48.88, 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('True Rise', 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 9.5, 9.63, 9.75, 9.88, 10, 10.13, 10.25, 10.38, 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14),
('Front Rise(Inc.WB)', 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 15.13, 15.25, 15.38, 15.5, 15.63, 15.75, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 15.13, 15.25, 15.38, 15.5, 15.63, 15.75, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 15.13, 15.25, 15.38, 15.5, 15.63, 15.75, 10.5, 10.63, 10.88, 10.88, 11.13, 11.25, 11.38, 11.38, 11.63, 11.63, 11.88, 11.88, 12, 12.13, 12.25, 12.25, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.63, 13.88, 14.13, 14.13, 14.13, 14.38, 14.63, 14.63, 14.63, 14.88, 15),
('Back Rise(Inc.WB)', 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 16.63, 16.75, 17, 17.13, 17.25, 17.38, 17.5, 17.63, 17.63, 17.88, 17.88, 18.13, 18.13, 18.38, 18.38, 18.63, 18.63, 18.88, 18.88, 19.13, 19.25, 19.5, 19.5, 19.63, 19.88, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25),
('\"U\'\' Rise(Inc.WB)', 28.5, 28.75, 29, 29.25, 29.5, 29.75, 30, 30.25, 30.5, 30.75, 31, 31.25, 31.5, 31.75, 32, 32.25, 32.5, 32.75, 33, 33.25, 33.5, 33.75, 34, 34.25, 34.5, 34.75, 35, 35.25, 35.5, 35.75, 36, 36.25, 36.5, 36.75, 37, 37.25, 37.5, 28.5, 28.75, 29, 29.25, 29.5, 29.75, 30, 30.25, 30.5, 30.75, 31, 31.25, 31.5, 31.75, 32, 32.25, 32.5, 32.75, 33, 33.25, 33.5, 33.75, 34, 34.25, 34.5, 34.75, 35, 35.25, 35.5, 35.75, 36, 36.25, 36.5, 36.75, 37, 37.25, 37.5, 28.5, 28.75, 29, 29.25, 29.5, 29.75, 30, 30.25, 30.5, 30.75, 31, 31.25, 31.5, 31.75, 32, 32.25, 32.5, 32.75, 33, 33.25, 33.5, 33.75, 34, 34.25, 34.5, 34.75, 35, 35.25, 35.5, 35.75, 36, 36.25, 36.5, 36.75, 37, 37.25, 37.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mtm_us_trs(r)`
--

CREATE TABLE `mtm_us_trs(r)` (
  `id` int(11) NOT NULL,
  `Measurement_points` varchar(20) NOT NULL,
  `28M` float NOT NULL,
  `29M` float NOT NULL,
  `30M` float NOT NULL,
  `31M` float NOT NULL,
  `32M` float NOT NULL,
  `33M` float NOT NULL,
  `34M` float NOT NULL,
  `35M` float NOT NULL,
  `36M` float NOT NULL,
  `37M` float NOT NULL,
  `38M` float NOT NULL,
  `39M` float NOT NULL,
  `40M` float NOT NULL,
  `41M` float NOT NULL,
  `42M` float NOT NULL,
  `43M` float NOT NULL,
  `44M` float NOT NULL,
  `45M` float NOT NULL,
  `46M` float NOT NULL,
  `47M` float NOT NULL,
  `48M` float NOT NULL,
  `49M` float NOT NULL,
  `50M` float NOT NULL,
  `51M` float NOT NULL,
  `52M` float NOT NULL,
  `53M` float NOT NULL,
  `54M` float NOT NULL,
  `55M` float NOT NULL,
  `56M` float NOT NULL,
  `57M` float NOT NULL,
  `58M` float NOT NULL,
  `59M` float NOT NULL,
  `60M` float NOT NULL,
  `61M` float NOT NULL,
  `62M` float NOT NULL,
  `63M` float NOT NULL,
  `64M` float NOT NULL,
  `28S` float NOT NULL,
  `29S` float NOT NULL,
  `30S` float NOT NULL,
  `31S` float NOT NULL,
  `32S` float NOT NULL,
  `33S` float NOT NULL,
  `34S` float NOT NULL,
  `35S` float NOT NULL,
  `36S` float NOT NULL,
  `37S` float NOT NULL,
  `38S` float NOT NULL,
  `39S` float NOT NULL,
  `40S` float NOT NULL,
  `41S` float NOT NULL,
  `42S` float NOT NULL,
  `43S` float NOT NULL,
  `44S` float NOT NULL,
  `45S` float NOT NULL,
  `46S` float NOT NULL,
  `47S` float NOT NULL,
  `48S` float NOT NULL,
  `49S` float NOT NULL,
  `50S` float NOT NULL,
  `51S` float NOT NULL,
  `52S` float NOT NULL,
  `53S` float NOT NULL,
  `54S` float NOT NULL,
  `55S` float NOT NULL,
  `56S` float NOT NULL,
  `57S` float NOT NULL,
  `58S` float NOT NULL,
  `59S` float NOT NULL,
  `60S` float NOT NULL,
  `61S` float NOT NULL,
  `62S` float NOT NULL,
  `63S` float NOT NULL,
  `64S` float NOT NULL,
  `28F` float NOT NULL,
  `29F` float NOT NULL,
  `30F` float NOT NULL,
  `31F` float NOT NULL,
  `32F` float NOT NULL,
  `33F` float NOT NULL,
  `34F` float NOT NULL,
  `35F` float NOT NULL,
  `36F` float NOT NULL,
  `37F` float NOT NULL,
  `38F` float NOT NULL,
  `39F` float NOT NULL,
  `40F` float NOT NULL,
  `41F` float NOT NULL,
  `42F` float NOT NULL,
  `43F` float NOT NULL,
  `44F` float NOT NULL,
  `45F` float NOT NULL,
  `46F` float NOT NULL,
  `47F` float NOT NULL,
  `48F` float NOT NULL,
  `49F` float NOT NULL,
  `50F` float NOT NULL,
  `51F` float NOT NULL,
  `52F` float NOT NULL,
  `53F` float NOT NULL,
  `54F` float NOT NULL,
  `55F` float NOT NULL,
  `56F` float NOT NULL,
  `57F` float NOT NULL,
  `58F` float NOT NULL,
  `59F` float NOT NULL,
  `60F` float NOT NULL,
  `61F` float NOT NULL,
  `62F` float NOT NULL,
  `63F` float NOT NULL,
  `64F` float NOT NULL,
  `24T` float NOT NULL,
  `25T` float NOT NULL,
  `26T` float NOT NULL,
  `27T` float NOT NULL,
  `28T` float NOT NULL,
  `29T` float NOT NULL,
  `30T` float NOT NULL,
  `31T` float NOT NULL,
  `32T` float NOT NULL,
  `33T` float NOT NULL,
  `34T` float NOT NULL,
  `35T` float NOT NULL,
  `36T` float NOT NULL,
  `37T` float NOT NULL,
  `38T` float NOT NULL,
  `39T` float NOT NULL,
  `40T` float NOT NULL,
  `41T` float NOT NULL,
  `42T` float NOT NULL,
  `43T` float NOT NULL,
  `44T` float NOT NULL,
  `45T` float NOT NULL,
  `46T` float NOT NULL,
  `47T` float NOT NULL,
  `48T` float NOT NULL,
  `49T` float NOT NULL,
  `50T` float NOT NULL,
  `51T` float NOT NULL,
  `52T` float NOT NULL,
  `53T` float NOT NULL,
  `54T` float NOT NULL,
  `55T` float NOT NULL,
  `56T` float NOT NULL,
  `57T` float NOT NULL,
  `58T` float NOT NULL,
  `59T` float NOT NULL,
  `60T` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtm_us_trs(r)`
--

INSERT INTO `mtm_us_trs(r)` (`id`, `Measurement_points`, `28M`, `29M`, `30M`, `31M`, `32M`, `33M`, `34M`, `35M`, `36M`, `37M`, `38M`, `39M`, `40M`, `41M`, `42M`, `43M`, `44M`, `45M`, `46M`, `47M`, `48M`, `49M`, `50M`, `51M`, `52M`, `53M`, `54M`, `55M`, `56M`, `57M`, `58M`, `59M`, `60M`, `61M`, `62M`, `63M`, `64M`, `28S`, `29S`, `30S`, `31S`, `32S`, `33S`, `34S`, `35S`, `36S`, `37S`, `38S`, `39S`, `40S`, `41S`, `42S`, `43S`, `44S`, `45S`, `46S`, `47S`, `48S`, `49S`, `50S`, `51S`, `52S`, `53S`, `54S`, `55S`, `56S`, `57S`, `58S`, `59S`, `60S`, `61S`, `62S`, `63S`, `64S`, `28F`, `29F`, `30F`, `31F`, `32F`, `33F`, `34F`, `35F`, `36F`, `37F`, `38F`, `39F`, `40F`, `41F`, `42F`, `43F`, `44F`, `45F`, `46F`, `47F`, `48F`, `49F`, `50F`, `51F`, `52F`, `53F`, `54F`, `55F`, `56F`, `57F`, `58F`, `59F`, `60F`, `61F`, `62F`, `63F`, `64F`, `24T`, `25T`, `26T`, `27T`, `28T`, `29T`, `30T`, `31T`, `32T`, `33T`, `34T`, `35T`, `36T`, `37T`, `38T`, `39T`, `40T`, `41T`, `42T`, `43T`, `44T`, `45T`, `46T`, `47T`, `48T`, `49T`, `50T`, `51T`, `52T`, `53T`, `54T`, `55T`, `56T`, `57T`, `58T`, `59T`, `60T`) VALUES
(1, 'Waist', 28.5, 29.5, 30.5, 31.5, 32.5, 33.5, 34.5, 35.5, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.5, 47.5, 48.5, 49.5, 50.5, 51.5, 52.5, 53.5, 54.5, 55.5, 56.5, 57.5, 58.5, 59.5, 60.5, 61.5, 62.5, 63.5, 64.5, 28.5, 29.5, 30.5, 31.5, 32.5, 33.5, 34.5, 35.5, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.5, 47.5, 48.5, 49.5, 50.5, 51.5, 52.5, 53.5, 54.5, 55.5, 56.5, 57.5, 58.5, 59.5, 60.5, 61.5, 62.5, 63.5, 64.5, 28.5, 29.5, 30.5, 31.5, 32.5, 33.5, 34.5, 35.5, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.5, 47.5, 48.5, 49.5, 50.5, 51.5, 52.5, 53.5, 54.5, 55.5, 56.5, 57.5, 58.5, 59.5, 60.5, 61.5, 62.5, 63.5, 64.5, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60),
(2, 'Seat(at fly 3 points', 37.25, 38.25, 39.25, 40.25, 41.25, 42.25, 43.25, 44.25, 45.25, 46.25, 47.13, 48, 48.88, 49.75, 50.63, 51.5, 52.38, 53.25, 54.13, 55, 55.88, 56.75, 57.63, 58.5, 59.38, 60.25, 61.13, 62, 62.88, 63.75, 64.63, 65.5, 66.38, 67.25, 68.13, 69, 69.88, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 45.88, 46.75, 47.63, 48.5, 49.38, 50.25, 51.13, 52, 52.88, 53.75, 54.63, 55.5, 56.38, 57.25, 58.13, 59, 59.88, 60.75, 61.63, 62.5, 63.38, 64.25, 65.13, 66, 66.88, 67.75, 68.63, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 45.88, 46.75, 47.63, 48.5, 49.38, 50.25, 51.13, 52, 52.88, 53.75, 54.63, 55.5, 56.38, 57.25, 58.13, 59, 59.88, 60.75, 61.63, 62.5, 63.38, 64.25, 65.13, 66, 66.88, 67.75, 68.63, 31.5, 32.5, 33.5, 34.5, 35.5, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.5, 47.5, 48.5, 49.5, 50.5, 51.5, 52.5, 53.5, 54.5, 55.5, 56.5, 57.5, 58.5, 59.5, 60.5, 61.5, 62.5, 63.5, 64.5, 65.5, 66.5, 67.5),
(3, 'Thigh (1\'\' below cro', 26.75, 27.25, 27.75, 28.25, 28.75, 29.25, 29.75, 30.25, 30.75, 31.25, 31.69, 32.13, 32.56, 33, 33.44, 33.88, 34.31, 34.75, 35.19, 35.63, 36.06, 36.5, 36.94, 37.38, 37.81, 38.25, 38.69, 39.13, 39.56, 40, 40.44, 40.88, 41.31, 41.75, 42.19, 42.63, 43.06, 26.25, 26.75, 27.25, 27.75, 28.25, 28.75, 29.25, 29.75, 30.25, 30.75, 31.19, 31.63, 32.06, 32.5, 32.94, 33.38, 33.81, 34.25, 34.69, 35.13, 35.56, 36, 36.44, 36.88, 37.31, 37.75, 38.19, 38.63, 39.06, 39.5, 39.94, 40.38, 40.81, 41.25, 41.69, 42.13, 42.56, 25.75, 26.25, 26.75, 27.25, 27.75, 28.25, 28.75, 29.25, 29.75, 30.25, 30.69, 31.13, 31.56, 32, 32.44, 32.88, 33.31, 33.75, 34.19, 34.63, 35.06, 35.5, 35.94, 36.38, 36.81, 37.25, 37.69, 38.13, 38.56, 39, 39.44, 39.88, 40.31, 40.75, 41.19, 41.63, 42.06, 22.5, 22.88, 23.38, 23.63, 24.25, 24.63, 25.13, 25.63, 26, 26.38, 26.88, 27.38, 27.63, 28.25, 28.5, 28.88, 29.38, 29.5, 30.25, 30.5, 31.13, 31.38, 31.88, 32.25, 32.75, 33, 33.38, 33.88, 34.5, 35, 35.25, 35.75, 36.25, 36.75, 37, 37.25, 37.88),
(4, 'Knee(half of inseam ', 20.25, 20.5, 20.75, 21, 21.25, 21.5, 21.75, 22, 22.25, 22.5, 22.75, 23, 23.25, 23.5, 23.75, 24, 24.25, 24.5, 24.75, 25, 25.25, 25.5, 25.75, 26, 26.25, 26.5, 26.75, 27, 27.25, 27.5, 27.75, 28, 28.25, 28.5, 28.75, 29, 29.25, 20.25, 20.5, 20.75, 21, 21.25, 21.5, 21.75, 22, 22.25, 22.5, 22.75, 23, 23.25, 23.5, 23.75, 24, 24.25, 24.5, 24.75, 25, 25.25, 25.5, 25.75, 26, 26.25, 26.5, 26.75, 27, 27.25, 27.5, 27.75, 28, 28.25, 28.5, 28.75, 29, 29.25, 20.25, 20.5, 20.75, 21, 21.25, 21.5, 21.75, 22, 22.25, 22.5, 22.75, 23, 23.25, 23.5, 23.75, 24, 24.25, 24.5, 24.75, 25, 25.25, 25.5, 25.75, 26, 26.25, 26.5, 26.75, 27, 27.25, 27.5, 27.75, 28, 28.25, 28.5, 28.75, 29, 29.25, 17.5, 17.75, 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.75, 20, 20.25, 20.5, 20.75, 21, 21.25, 21.5, 21.75, 22, 22.25, 22.5, 22.75, 23, 23.25, 23.5, 23.75, 24, 24.25, 24.5, 24.75, 25, 25.25, 25.5, 25.75, 26, 26.25, 26.5),
(5, 'Bottom', 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 16.5, 16.75, 17, 17.25, 17.5, 17.75, 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.75, 20, 20.25, 20.5, 20.75, 21, 21.25, 21.5, 21.75, 22, 22.25, 22.5, 22.75, 23, 23.25, 23.5, 23.75, 24, 24.25, 24.5, 24.75, 25, 25.25, 25.5),
(6, 'Inseam-FINISHED HEM', 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5, 33.5),
(7, 'Outseam-FINISHED HEM', 44.5, 44.63, 44.75, 44.88, 45, 45.13, 45.25, 45.38, 45.5, 45.63, 45.75, 45.88, 46, 46.13, 46.25, 46.38, 46.5, 46.63, 46.75, 46.88, 47, 47.13, 47.25, 47.38, 47.5, 47.63, 47.75, 47.88, 48, 48.13, 48.25, 48.38, 48.5, 48.63, 48.75, 48.88, 49, 44.5, 44.63, 44.75, 44.88, 45, 45.13, 45.25, 45.38, 45.5, 45.63, 45.75, 45.88, 46, 46.13, 46.25, 46.38, 46.5, 46.63, 46.75, 46.88, 47, 47.13, 47.25, 47.38, 47.5, 47.63, 47.75, 47.88, 48, 48.13, 48.25, 48.38, 48.5, 48.63, 48.75, 48.88, 49, 44.5, 44.63, 44.75, 44.88, 45, 45.13, 45.25, 45.38, 45.5, 45.63, 45.75, 45.88, 46, 46.13, 46.25, 46.38, 46.5, 46.63, 46.75, 46.88, 47, 47.13, 47.25, 47.38, 47.5, 47.63, 47.75, 47.88, 48, 48.13, 48.25, 48.38, 48.5, 48.63, 48.75, 48.88, 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'True Rise', 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 9.5, 9.63, 9.75, 9.88, 10, 10.13, 10.25, 10.38, 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14),
(9, 'Front Rise(Inc.WB)', 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 15.13, 15.25, 15.38, 15.5, 15.63, 15.75, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 15.13, 15.25, 15.38, 15.5, 15.63, 15.75, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5, 14.63, 14.75, 14.88, 15, 15.13, 15.25, 15.38, 15.5, 15.63, 15.75, 10.5, 10.63, 10.88, 10.88, 11.13, 11.25, 11.38, 11.38, 11.63, 11.63, 11.88, 11.88, 12, 12.13, 12.25, 12.25, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.63, 13.88, 14.13, 14.13, 14.13, 14.38, 14.63, 14.63, 14.63, 14.88, 15),
(10, 'Back Rise(Inc.WB)', 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 17.25, 17.38, 17.5, 17.63, 17.75, 17.88, 18, 18.13, 18.25, 18.38, 18.5, 18.63, 18.75, 18.88, 19, 19.13, 19.25, 19.38, 19.5, 19.63, 19.75, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25, 21.38, 21.5, 21.63, 21.75, 16.63, 16.75, 17, 17.13, 17.25, 17.38, 17.5, 17.63, 17.63, 17.88, 17.88, 18.13, 18.13, 18.38, 18.38, 18.63, 18.63, 18.88, 18.88, 19.13, 19.25, 19.5, 19.5, 19.63, 19.88, 19.88, 20, 20.13, 20.25, 20.38, 20.5, 20.63, 20.75, 20.88, 21, 21.13, 21.25),
(11, '\"U\'\' Rise(Inc.WB)', 28.5, 28.75, 29, 29.25, 29.5, 29.75, 30, 30.25, 30.5, 30.75, 31, 31.25, 31.5, 31.75, 32, 32.25, 32.5, 32.75, 33, 33.25, 33.5, 33.75, 34, 34.25, 34.5, 34.75, 35, 35.25, 35.5, 35.75, 36, 36.25, 36.5, 36.75, 37, 37.25, 37.5, 28.5, 28.75, 29, 29.25, 29.5, 29.75, 30, 30.25, 30.5, 30.75, 31, 31.25, 31.5, 31.75, 32, 32.25, 32.5, 32.75, 33, 33.25, 33.5, 33.75, 34, 34.25, 34.5, 34.75, 35, 35.25, 35.5, 35.75, 36, 36.25, 36.5, 36.75, 37, 37.25, 37.5, 28.5, 28.75, 29, 29.25, 29.5, 29.75, 30, 30.25, 30.5, 30.75, 31, 31.25, 31.5, 31.75, 32, 32.25, 32.5, 32.75, 33, 33.25, 33.5, 33.75, 34, 34.25, 34.5, 34.75, 35, 35.25, 35.5, 35.75, 36, 36.25, 36.5, 36.75, 37, 37.25, 37.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nextfiftyseven1`
--

CREATE TABLE `nextfiftyseven1` (
  `name` varchar(30) NOT NULL,
  `val` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nextfiftyseven1`
--

INSERT INTO `nextfiftyseven1` (`name`, `val`) VALUES
('PLUSAH3', 0),
('ERECT', 0),
('FULLCHES', 0.75),
('HEADF', 0),
('LOWCLR', 0),
('PLUSAH2', 0.5),
('MINUSCLR', 0),
('SLOPE', 0),
('BTN1', 0),
('BTN3', 0),
('ROPESLV', 0),
('SLANTPKT', 0),
('TKTPKT', 1),
('ADDLIFT', 0),
('NOOBW', 0),
('NODART', 0),
('FRTEDGE', 0),
('LEARCLR', 0),
('LEFTDN', 0),
('RIGTDN', 0),
('FULCANV', 0),
('HALFCANV', 0),
('PATCHPKT', 0),
('SLVVENT', 0),
('SLVBACK', 0),
('SLVFW', 0),
('LONDONF', 0),
('PORTLYF', 0),
('DB', 0),
('CBPLULS', 0),
('SHGIRTHF', 1),
('SHGIRTBK', 0),
('PLTPPK', 0),
('OPENDART', 0),
('PORTLYGRI', 0),
('ATHLETIC', 0),
('STBTM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nextfiftyseven2`
--

CREATE TABLE `nextfiftyseven2` (
  `name` varchar(30) NOT NULL,
  `val` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nextfiftyseven2`
--

INSERT INTO `nextfiftyseven2` (`name`, `val`) VALUES
('DPSEAT', '0'),
('HIPFWD', '0'),
('LWFRT', '0'),
('PLCROT', '0'),
('RISEBK', '0'),
('DEP1PLE', '0'),
('DEP2PLE', '0'),
('BPKTD', '0'),
('CUFF', ''),
('SLTHM', '0'),
('SQEXT', '0'),
('TRNPLT', '0'),
('WBHT', '0'),
('MINUSPEG', '0'),
('FRTPKTD', '0'),
('EXTENT', '0'),
('33TNLLOOP', '0'),
('34FRTPKTOPEN', '0'),
('35FRTDART', '0'),
('DEPTURN1', '0'),
('DEPTURN2', '0'),
('18PKT', '0');

-- --------------------------------------------------------

--
-- Table structure for table `overall_dummy`
--

CREATE TABLE `overall_dummy` (
  `id` int(11) NOT NULL,
  `grp` varchar(30) NOT NULL,
  `Jkt_FITMODEL` varchar(30) NOT NULL,
  `orderno` varchar(30) NOT NULL,
  `Customer_Name` varchar(30) NOT NULL,
  `Marker` varchar(30) NOT NULL,
  `Cloth_Article` varchar(30) NOT NULL,
  `Cloth` varchar(30) NOT NULL,
  `Fabric_Width` float NOT NULL,
  `Plaid` float NOT NULL,
  `Stripe` float NOT NULL,
  `Offset` float NOT NULL,
  `Fabric_Way` float NOT NULL,
  `1_Way_Stripe` float NOT NULL,
  `S95-SHELL_SOLID` float NOT NULL,
  `S95-SHELL_STP` float NOT NULL,
  `S95-SHELL_PLAID` float NOT NULL,
  `BUFFER_SOLID-S95` float NOT NULL,
  `BUFFER_STP-S95` float NOT NULL,
  `BUFFER_PLAID-S95` float NOT NULL,
  `Jkt_HANDMD` float NOT NULL,
  `Jkt_LINING` varchar(30) NOT NULL,
  `Jkt_CHE` float NOT NULL,
  `Jkt_GIR` float NOT NULL,
  `Jkt_SEAT` float NOT NULL,
  `Jkt_LEN` float NOT NULL,
  `Jkt_FRTLEN` float NOT NULL,
  `Jkt_PP` float NOT NULL,
  `Jkt_BCKWDTH` float NOT NULL,
  `Jkt_SLVOUT_RIGHT` float NOT NULL,
  `Jkt_SLVOUT_LEFT` float NOT NULL,
  `Jkt_BICEP` float NOT NULL,
  `Jkt_LAPK` float NOT NULL,
  `Jkt_LAPP` float NOT NULL,
  `Jkt_BTN` float NOT NULL,
  `Jkt_WRIST` float NOT NULL,
  `Jkt_AHDEPTH` float NOT NULL,
  `Jkt_VENT` float NOT NULL,
  `Jkt_PLUSAH3` float NOT NULL,
  `Jkt_ERECT` float NOT NULL,
  `Jkt_FULLCHES` float NOT NULL,
  `Jkt_HEADF` float NOT NULL,
  `Jkt_LOWCLR` float NOT NULL,
  `Jkt_PLUSAH2` float NOT NULL,
  `Jkt_MINUSCLR` float NOT NULL,
  `Jkt_SLOPE` float NOT NULL,
  `Jkt_BTN1` float NOT NULL,
  `Jkt_BTN3` float NOT NULL,
  `Jkt_ROPESLV` float NOT NULL,
  `Jkt_SLANTPKT` float NOT NULL,
  `Jkt_TKTPKT` float NOT NULL,
  `Jkt_ADDLIFT` float NOT NULL,
  `Jkt_NOOBW` float NOT NULL,
  `Jkt_NODART` float NOT NULL,
  `Jkt_FRTEDGE` float NOT NULL,
  `Jkt_LEARCLR` float NOT NULL,
  `Jkt_LEFTDN` float NOT NULL,
  `Jkt_RIGTDN` float NOT NULL,
  `Jkt_FULCANV` float NOT NULL,
  `Jkt_HALFCANV` float NOT NULL,
  `Jkt_FLTCANV` float NOT NULL,
  `Jkt_PATCHPKT` float NOT NULL,
  `Jkt_SLVVENT` float NOT NULL,
  `Jkt_SLVBACK` varchar(30) NOT NULL,
  `Jkt_SLVFW` float NOT NULL,
  `Jkt_LONDONF` float NOT NULL,
  `Jkt_PORTLYF` float NOT NULL,
  `Jkt_DB` float NOT NULL,
  `Jkt_CBPLULS` float NOT NULL,
  `Jkt_SHGIRTHF` float NOT NULL,
  `Jkt_SHGIRTBK` float NOT NULL,
  `Jkt_PLTPPK` float NOT NULL,
  `Jkt_OPENDART` float NOT NULL,
  `Jkt_PORTLYGRI` float NOT NULL,
  `Jkt_ATHLETIC` float NOT NULL,
  `Jkt_STBTM` float NOT NULL,
  `Jkt_FLAPPK` varchar(30) NOT NULL,
  `Jkt_BESOMP` varchar(30) NOT NULL,
  `Jkt_2PATCH` varchar(30) NOT NULL,
  `Jkt_2PATFL` varchar(30) NOT NULL,
  `Jkt_3PATCH` varchar(30) NOT NULL,
  `Jkt_3PATFL` varchar(30) NOT NULL,
  `Jkt_L_WELT` varchar(30) NOT NULL,
  `Jkt_STDPLG` varchar(30) NOT NULL,
  `Jkt_STDPSH` varchar(30) NOT NULL,
  `Jkt_CIGLG` varchar(30) NOT NULL,
  `Jkt_CIGSH` varchar(30) NOT NULL,
  `Jkt_PENPLG` varchar(30) NOT NULL,
  `Jkt_PENPSH` varchar(30) NOT NULL,
  `Jkt_CELLLG` varchar(30) NOT NULL,
  `Jkt_CELLSH` varchar(30) NOT NULL,
  `Jkt_PASSPK` varchar(30) NOT NULL,
  `Jkt_SVSTRA` varchar(30) NOT NULL,
  `Jkt_SWEATP` varchar(30) NOT NULL,
  `Jkt_TKT-PK` varchar(30) NOT NULL,
  `Jkt_ELBOWP` varchar(30) NOT NULL,
  `Jkt_C-SETN` varchar(30) NOT NULL,
  `Jkt_C-SETF` varchar(30) NOT NULL,
  `Jkt_C-SETH` varchar(30) NOT NULL,
  `Jkt_RIOFAC` varchar(30) NOT NULL,
  `Jkt_SOVFAC` varchar(30) NOT NULL,
  `Jkt_FF` varchar(30) NOT NULL,
  `Jkt_CPSLV` varchar(30) NOT NULL,
  `Jkt_YOKE` varchar(30) NOT NULL,
  `Jkt_BELTBK` varchar(30) NOT NULL,
  `Jkt_US-SV-RG-HG-TR-FLG` varchar(30) NOT NULL,
  `Jkt_US-SV-RG-HG-TR-HLG` float NOT NULL,
  `Jkt_US-SV-RG-HG-TR-HLG-A` float NOT NULL,
  `Jkt_US-SV-SHAWL-FLG` float NOT NULL,
  `Jkt_US-SV-SHAWL-HLG` float NOT NULL,
  `Jkt_US-SV-SHAWL-HLG-A` float NOT NULL,
  `Jkt_US-SV-SRP-DRP-DB-FLG` float NOT NULL,
  `Jkt_US-SV-SRP-DRP-DB-HLG` float NOT NULL,
  `Jkt_US-SV-SRP-DRP-DB-HLG-A` float NOT NULL,
  `Jkt_US-CV-RG-HG-TR-FLG` float NOT NULL,
  `Jkt_US-CV-RG-HG-TR-HLG` float NOT NULL,
  `Jkt_US-CV-RG-HG-TR-HLG-A` float NOT NULL,
  `Jkt_US-CV-SHAWL-FLG` float NOT NULL,
  `Jkt_US-CV-SHAWL-HLG` float NOT NULL,
  `Jkt_US-CV-SHAWL-HLG-A` float NOT NULL,
  `Jkt_US-CV-SRP-DRP-DB-FLG` float NOT NULL,
  `Jkt_US-CV-SRP-DRP-DB-HLG` float NOT NULL,
  `Jkt_US-CV-SRP-DRP-DB-HLG-A` float NOT NULL,
  `Jkt_US-NV-RG-HG-TR-FLG` float NOT NULL,
  `Jkt_US-NV-RG-HG-TR-HLG` float NOT NULL,
  `Jkt_US-NV-RG-HG-TR-HLG-A` float NOT NULL,
  `Jkt_US-NV-SHAWL-FLG` float NOT NULL,
  `Jkt_US-NV-SHAWL-HLG` float NOT NULL,
  `Jkt_US-NV-SHAWL-HLG-A` float NOT NULL,
  `Jkt_US-NV-SRP-DRP-DB-FLG` float NOT NULL,
  `Jkt_US-NV-SRP-DRP-DB-HLG` float NOT NULL,
  `Jkt_US-NV-SRP-DRP-DB-HLG-A` float NOT NULL,
  `Trs_HANDMD` float NOT NULL,
  `Trs_LINING` varchar(30) NOT NULL,
  `Trs1_WAIST` float NOT NULL,
  `Trs1_SEAT` float NOT NULL,
  `Trs1_THIGH` float NOT NULL,
  `Trs1_KNEE` float NOT NULL,
  `Trs1_BTM` float NOT NULL,
  `Trs1_INSEAM_RIGHT` float NOT NULL,
  `Trs1_INSEAM_LEFT` float NOT NULL,
  `Trs1_OTSEAM` float NOT NULL,
  `Trs1_TRURISE` float NOT NULL,
  `Trs1_FRTRISE` float NOT NULL,
  `Trs1_BKRISE` float NOT NULL,
  `Trs1_URISE` float NOT NULL,
  `Trs1_DPSEAT` float NOT NULL,
  `Trs1_HIPFWD` float NOT NULL,
  `Trs1_LWFRT` float NOT NULL,
  `Trs1_PLCROT` float NOT NULL,
  `Trs1_RISEBK` float NOT NULL,
  `Trs1_DEP1PLE` float NOT NULL,
  `Trs1_DEP2PLE` float NOT NULL,
  `Trs1_BPKTD` float NOT NULL,
  `Trs1_CUFF` varchar(30) NOT NULL,
  `Trs1_SLTHM` float NOT NULL,
  `Trs1_SQEXT` float NOT NULL,
  `Trs1_TRNPLT` float NOT NULL,
  `Trs1_WBHT` float NOT NULL,
  `Trs1_MINUSPEG` float NOT NULL,
  `Trs1_FRTPKTD` float NOT NULL,
  `Trs1_ZIPPER` float NOT NULL,
  `Trs1_EXTENT` float NOT NULL,
  `Trs1_C-PKT` float NOT NULL,
  `Trs1_CFHKLG` float NOT NULL,
  `Trs1_C-HKLG` float NOT NULL,
  `Trs1_CPFKLG` float NOT NULL,
  `Trs1_S-PKT` float NOT NULL,
  `Trs1_SFHKLG` float NOT NULL,
  `Trs1_S-HKLG` float NOT NULL,
  `Trs1_SPFKLG` float NOT NULL,
  `Trs1_FB-PKT` float NOT NULL,
  `Trs1_FFHKLG` float NOT NULL,
  `Trs1_F-HKLG` float NOT NULL,
  `Trs1_FPFKLG` float NOT NULL,
  `Trs1_P-EXTN` float NOT NULL,
  `Trs1_NOLOOP` float NOT NULL,
  `Trs1_TNLLOP` float NOT NULL,
  `Trs1_BKFLAP` float NOT NULL,
  `Trs1_WATCHP` float NOT NULL,
  `Trs1_WAFLAP` float NOT NULL,
  `Trs1_ADJTAB` float NOT NULL,
  `Trs1_EXITAB` float NOT NULL,
  `Trs1_TABFLY` float NOT NULL,
  `Trs1_COINPK` float NOT NULL,
  `Trs1_RENFLG` float NOT NULL,
  `Trs1_RENFSH` float NOT NULL,
  `Trs1_D-RING` float NOT NULL,
  `Trs1_PSQUFL` float NOT NULL,
  `Trs1_ADBUCK` float NOT NULL,
  `Trs1_WBSKIR` float NOT NULL,
  `Trs1_STAYBA` float NOT NULL,
  `Trs1_W-PKT` float NOT NULL,
  `Trs1_WFHKLG` float NOT NULL,
  `Trs1_W-HKLG` float NOT NULL,
  `Trs1_WPFKLG` float NOT NULL,
  `Trs1_US-1PLEAT-TRS-1DART` float NOT NULL,
  `Trs1_US-1PLEAT-TRS-2DART` float NOT NULL,
  `Trs1_US-2PLEAT-TRS-1DART` float NOT NULL,
  `Trs1_US-2PLEAT-TRS-2DART` float NOT NULL,
  `Trs1_US-3PLEAT-TRS-1DART` float NOT NULL,
  `Trs1_US-3PLEAT-TRS-2DART` float NOT NULL,
  `Trs1_US-4PLEAT-TRS-1DART` float NOT NULL,
  `Trs1_US-4PLEAT-TRS-2DART` float NOT NULL,
  `Trs1_US-11-FF-TRS-1DART` float NOT NULL,
  `Trs1_US-11-FF-TRS-2DART` float NOT NULL,
  `Trs1_HARI-1PLEAT-TRS` float NOT NULL,
  `Trs1_HARI-2PLEAT-TRS` float NOT NULL,
  `Trs1_HARI-3PLEAT-TRS` float NOT NULL,
  `Trs1_HARI-4PLEAT-TRS` float NOT NULL,
  `Trs1_HARI-11-FF-TRS` float NOT NULL,
  `Trs2_HANDMD` float NOT NULL,
  `Trs2_WAIST` float NOT NULL,
  `Trs2_SEAT` float NOT NULL,
  `Trs2_THIGH` float NOT NULL,
  `Trs2_KNEE` float NOT NULL,
  `Trs2_BTM` float NOT NULL,
  `Trs2_INSEAM_RIGHT` float NOT NULL,
  `Trs2_INSEAM_LEFT` float NOT NULL,
  `Trs2_OTSEAM` float NOT NULL,
  `Trs2_TRURISE` float NOT NULL,
  `Trs2_FRTRISE` float NOT NULL,
  `Trs2_BKRISE` float NOT NULL,
  `Trs2_URISE` float NOT NULL,
  `Trs2_DPSEAT` float NOT NULL,
  `Trs2_HIPFWD` float NOT NULL,
  `Trs2_LWFRT` float NOT NULL,
  `Trs2_PLCROT` float NOT NULL,
  `Trs2_RISEBK` float NOT NULL,
  `Trs2_DEP1PLE` float NOT NULL,
  `Trs2_DEP2PLE` float NOT NULL,
  `Trs2_BPKTD` float NOT NULL,
  `Trs2_CUFF` float NOT NULL,
  `Trs2_SLTHM` float NOT NULL,
  `Trs2_SQEXT` float NOT NULL,
  `Trs2_TRNPLT` float NOT NULL,
  `Trs2_WBHT` float NOT NULL,
  `Trs2_MINUSPEG` float NOT NULL,
  `Trs2_FRTPKTD` float NOT NULL,
  `Trs2_ZIPPER` float NOT NULL,
  `Trs2_EXTENT` float NOT NULL,
  `Trs2_C-PKT` float NOT NULL,
  `Trs2_CFHKLG` float NOT NULL,
  `Trs2_C-HKLG` float NOT NULL,
  `Trs2_CPFKLG` float NOT NULL,
  `Trs2_S-PKT` float NOT NULL,
  `Trs2_SFHKLG` float NOT NULL,
  `Trs2_S-HKLG` float NOT NULL,
  `Trs2_SPFKLG` float NOT NULL,
  `Trs2_FB-PKT` float NOT NULL,
  `Trs2_FFHKLG` float NOT NULL,
  `Trs2_F-HKLG` float NOT NULL,
  `Trs2_FPFKLG` float NOT NULL,
  `Trs2_P-EXTN` float NOT NULL,
  `Trs2_NOLOOP` float NOT NULL,
  `Trs2_TNLLOP` float NOT NULL,
  `Trs2_BKFLAP` float NOT NULL,
  `Trs2_WATCHP` float NOT NULL,
  `Trs2_WAFLAP` float NOT NULL,
  `Trs2_ADJTAB` float NOT NULL,
  `Trs2_EXITAB` float NOT NULL,
  `Trs2_TABFLY` float NOT NULL,
  `Trs2_COINPK` float NOT NULL,
  `Trs2_RENFLG` float NOT NULL,
  `Trs2_RENFSH` float NOT NULL,
  `Trs2_D-RING` float NOT NULL,
  `Trs2_PSQUFL` float NOT NULL,
  `Trs2_ADBUCK` float NOT NULL,
  `Trs2_WBSKIR` float NOT NULL,
  `Trs2_STAYBA` float NOT NULL,
  `Trs2_W-PKT` float NOT NULL,
  `Trs2_WFHKLG` float NOT NULL,
  `Trs2_W-HKLG` float NOT NULL,
  `Trs2_WPFKLG` float NOT NULL,
  `Trs2_US-1PLEAT-TRS-1DART` float NOT NULL,
  `Trs2_US-1PLEAT-TRS-2DART` float NOT NULL,
  `Trs2_US-2PLEAT-TRS-1DART` float NOT NULL,
  `Trs2_US-2PLEAT-TRS-2DART` float NOT NULL,
  `Trs2_US-3PLEAT-TRS-1DART` float NOT NULL,
  `Trs2_US-3PLEAT-TRS-2DART` float NOT NULL,
  `Trs2_US-4PLEAT-TRS-1DART` float NOT NULL,
  `Trs2_US-4PLEAT-TRS-2DART` float NOT NULL,
  `Trs2_US-11-FF-TRS-1DART` float NOT NULL,
  `Trs2_US-11-FF-TRS-2DART` float NOT NULL,
  `Trs2_HARI-1PLEAT-TRS` float NOT NULL,
  `Trs2_HARI-2PLEAT-TRS` float NOT NULL,
  `Trs2_HARI-3PLEAT-TRS` float NOT NULL,
  `Trs2_HARI-4PLEAT-TRS` float NOT NULL,
  `Trs2_HARI-11-FF-TRS` float NOT NULL,
  `Vst_HANDMD` float NOT NULL,
  `Vst_LINING` varchar(20) NOT NULL,
  `Vst_GIRTH` float NOT NULL,
  `Vst_CHE` float NOT NULL,
  `Vst_FLCB` float NOT NULL,
  `Vst_BKL` float NOT NULL,
  `Vst_PP` float NOT NULL,
  `Vst_BACKWDTH` float NOT NULL,
  `Vst_2WELTP` float NOT NULL,
  `Vst_4WELTP` float NOT NULL,
  `Vst_2PIPEP` float NOT NULL,
  `Vst_4PIPEP` float NOT NULL,
  `Vst_SHBACK` float NOT NULL,
  `Vst_Break_Point-474/VS2/VS4/VS6` float NOT NULL,
  `Vst_Break_Point-VS-5` float NOT NULL,
  `Vst_Break_Point-VS-I4` float NOT NULL,
  `Vst_Break_Point-VL9-VL22` float NOT NULL,
  `Vst_Break_Point-VL-1/VL-10` float NOT NULL,
  `Vst_Break_Point-VL-8` float NOT NULL,
  `Vst_Break_Point-VL-25` float NOT NULL,
  `Vst_S95-SHELL_PLAID` float NOT NULL,
  `Vst_S95-SHELL_SOLID` float NOT NULL,
  `Vst_S95-SHELL_STP` float NOT NULL,
  `Vst_BUFFER_PLAID-S95` float NOT NULL,
  `Vst_BUFFER_SOLID-S95` float NOT NULL,
  `Vst_BUFFER_STP-S95` float NOT NULL,
  `Vst_US-474-2WELTS-VEST` float NOT NULL,
  `Vst_US-474-4WELTS-VEST` float NOT NULL,
  `Vst_US-VL-1-VEST` float NOT NULL,
  `Vst_US-VL-10-VEST` float NOT NULL,
  `Vst_US-VL1-PEAK-VEST` float NOT NULL,
  `Vst_US-VL8-VEST` float NOT NULL,
  `Vst_US-VL9-VEST` float NOT NULL,
  `Vst_US-VL22-VEST` float NOT NULL,
  `Vst_US-VL25-VEST` float NOT NULL,
  `Vst_US-VS-2-VEST` float NOT NULL,
  `Vst_US-VS-4-VEST` float NOT NULL,
  `Vst_US-VS-5-VEST` float NOT NULL,
  `Vst_US-VS-6-VEST` float NOT NULL,
  `Vst_US-VS-14-VEST` float NOT NULL,
  `Barcode` varchar(20) NOT NULL,
  `Jkt_Remarks` varchar(20) NOT NULL,
  `Trs1_Remarks` varchar(20) NOT NULL,
  `Trs2_Remarks` varchar(20) NOT NULL,
  `Vst_Remarks` varchar(20) NOT NULL,
  `Trs1_RAISE_FRONT` varchar(20) NOT NULL,
  `Trs1_LOWER_BACK` varchar(20) NOT NULL,
  `Trs2_RAISE_FRONT` varchar(20) NOT NULL,
  `Trs2_LOWER_BACK` varchar(20) NOT NULL,
  `Dealer_Name` varchar(20) NOT NULL,
  `Trs1_TG-US-FF-TRS-1DART` float NOT NULL,
  `Trs1_TG-US-FF-TRS-2DART` float NOT NULL,
  `Trs2_TG-US-FF-TRS-1DART` float NOT NULL,
  `Trs2_TG-US-FF-TRS-2DART` float NOT NULL,
  `Jkt_54WIDER-FR` float NOT NULL,
  `Jkt_PKT-SQ` varchar(30) NOT NULL,
  `Jkt_SLV-CUF` varchar(30) NOT NULL,
  `Jkt_GUNPAT` varchar(30) NOT NULL,
  `Jkt_STOTAB` varchar(30) NOT NULL,
  `Jkt_SH-TAB` varchar(30) NOT NULL,
  `Jkt_NOOBW_` varchar(30) NOT NULL,
  `Jkt_MILL-F` varchar(30) NOT NULL,
  `Jkt_1WELT` varchar(30) NOT NULL,
  `Jkt_1PLYBK` varchar(30) NOT NULL,
  `Jkt_2PLYBK` varchar(30) NOT NULL,
  `Trs1_33TNLLOOP` float NOT NULL,
  `Trs1_34FRTPKTOPEN` float NOT NULL,
  `Trs1_35FRTDART` float NOT NULL,
  `Trs1_NOHIPP` float NOT NULL,
  `Trs1_BHKLG` float NOT NULL,
  `Trs2_33TNLLOOP` float NOT NULL,
  `Trs2_34FRTPKTOPEN` float NOT NULL,
  `Trs2_35FRTDART` float NOT NULL,
  `Trs2_NOHIPP` float NOT NULL,
  `Trs2_BHKLG` float NOT NULL,
  `Jkt_FLATCHEST` float NOT NULL,
  `Jkt_HN` float NOT NULL,
  `Jkt_OPENBK` float NOT NULL,
  `Trs1_DEPTURN1` float NOT NULL,
  `Trs1_DEPTURN2` float NOT NULL,
  `Trs2_DEPTURN1` float NOT NULL,
  `Trs2_DEPTURN2` float NOT NULL,
  `Trs1_18PKT` float NOT NULL,
  `Trs2_18PKT` float NOT NULL,
  `Trs1_JNW` float NOT NULL,
  `Trs2_JNW` float NOT NULL,
  `Trs1_JNN` float NOT NULL,
  `Trs2_JNN` float NOT NULL,
  `Vst_AVSTGR` float NOT NULL,
  `Jkt_NOVSLV` varchar(30) NOT NULL,
  `Jkt_BISWBK` varchar(30) NOT NULL,
  `Jkt_STBKYK` varchar(30) NOT NULL,
  `Jkt_STFRYK` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plu_crot_plus`
--

CREATE TABLE `plu_crot_plus` (
  `id` int(11) NOT NULL,
  `Plucrot_plus` varchar(20) NOT NULL,
  `0.25` float DEFAULT NULL,
  `0.375` float DEFAULT NULL,
  `0.5` float DEFAULT NULL,
  `0.625` float DEFAULT NULL,
  `0.75` float DEFAULT NULL,
  `0.875` float DEFAULT NULL,
  `1` float DEFAULT NULL,
  `1.125` float DEFAULT NULL,
  `1.25` float DEFAULT NULL,
  `1.375` float DEFAULT NULL,
  `1.5` float DEFAULT NULL,
  `-0.25` float DEFAULT NULL,
  `-0.375` float DEFAULT NULL,
  `-0.5` float DEFAULT NULL,
  `-0.625` float DEFAULT NULL,
  `-0.75` float DEFAULT NULL,
  `-0.875` float DEFAULT NULL,
  `-1` float DEFAULT NULL,
  `-1.125` float DEFAULT NULL,
  `-1.25` float DEFAULT NULL,
  `-1.375` float DEFAULT NULL,
  `-1.5` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plu_crot_plus`
--

INSERT INTO `plu_crot_plus` (`id`, `Plucrot_plus`, `0.25`, `0.375`, `0.5`, `0.625`, `0.75`, `0.875`, `1`, `1.125`, `1.25`, `1.375`, `1.5`, `-0.25`, `-0.375`, `-0.5`, `-0.625`, `-0.75`, `-0.875`, `-1`, `-1.125`, `-1.25`, `-1.375`, `-1.5`) VALUES
(1, '1WAIST', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Waistband Width', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '2SEAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '3THIGH', 0.13, 0.25, 0.38, 0.5, 0.5, 0.5, 0.75, 1, 1, 1.13, 1.13, -0.13, -0.25, -0.38, -0.5, -0.5, -0.5, -0.75, -1, -1, -1.13, -1.13),
(5, '4KNEE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '5BTM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '6INSEAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '7OTSEAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '8TRURISE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '9FRTRISE', 0.13, 0.13, 0.13, 0.13, 0.25, 0.25, 0.25, 0.25, 0.25, 0.5, 0.5, -0.13, -0.13, -0.13, -0.13, -0.25, -0.25, -0.25, -0.25, -0.25, -0.5, -0.5),
(11, '10BKRISE', 0.25, 0.38, 0.5, 0.63, 0.75, 0.88, 1, 1.13, 1.25, 1.38, 1.5, -0.25, -0.38, -0.5, -0.63, -0.75, -0.88, -1, -1.13, -1.25, -1.38, -1.5),
(12, '11URISE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `portly_fit`
--

CREATE TABLE `portly_fit` (
  `id` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `34` float NOT NULL,
  `35` float NOT NULL,
  `36` float NOT NULL,
  `37` float NOT NULL,
  `38` float NOT NULL,
  `39` float NOT NULL,
  `40` float NOT NULL,
  `41` float NOT NULL,
  `42` float NOT NULL,
  `43` float NOT NULL,
  `44` float NOT NULL,
  `45` float NOT NULL,
  `46` float NOT NULL,
  `47` float NOT NULL,
  `48` float NOT NULL,
  `49` float NOT NULL,
  `50` float NOT NULL,
  `51` float NOT NULL,
  `52` float NOT NULL,
  `53` float NOT NULL,
  `54` float NOT NULL,
  `55` float NOT NULL,
  `56` float NOT NULL,
  `57` float NOT NULL,
  `58` float NOT NULL,
  `59` float NOT NULL,
  `60` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portly_fit`
--

INSERT INTO `portly_fit` (`id`, `size`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`) VALUES
(1, '1CHE', 34.5, 35.5, 36.5, 37.5, 38.5, 39.5, 40.5, 41.5, 42.5, 43.5, 44.5, 45.5, 46.5, 47.5, 48.5, 49.5, 50.5, 51.5, 52.5, 53.5, 54.5, 55.5, 56.5, 57.5, 58.5, 59.5, 60.5),
(2, '2GIR', 20, 20.5, 21, 21.5, 22, 22.5, 23, 23.5, 24, 24.5, 25, 25.5, 26, 26.5, 27, 27.5, 28, 28.5, 29, 29.5, 30, 30.5, 31, 31.5, 32, 32.5, 33),
(3, '3SEAT', 36.25, 37.25, 38.25, 39.25, 40.25, 41.25, 42.25, 43.25, 44.25, 45.25, 46.25, 47.25, 48.25, 49.25, 50.25, 51.25, 52.25, 53.25, 54.25, 55.25, 56.25, 57.25, 58.25, 59.25, 60.25, 61.25, 62.25),
(4, '4LEN', 30.25, 30.38, 30.5, 30.63, 30.75, 30.88, 31, 31.13, 31.25, 31.38, 31.5, 31.63, 31.75, 31.88, 32, 32.13, 32.25, 32.38, 32.5, 32.63, 32.75, 32.88, 33, 33.13, 33.25, 33.38, 33.5),
(5, '5FRTLEN', 30.88, 31, 31.13, 31.25, 31.5, 31.63, 31.75, 31.88, 32, 32.25, 32.38, 32.5, 32.63, 32.75, 33, 33.13, 33.25, 33.38, 33.5, 33.75, 33.88, 34, 34.13, 34.25, 34.5, 34.63, 34.75),
(6, '6PP', 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.75, 20, 20.25, 20.5, 20.75, 21, 21.25, 21.38, 21.63, 21.75, 22, 22.13, 22.38, 22.5, 22.75, 22.88, 23.13, 23.25, 23.5, 23.63),
(7, '7BCKWDTH', 8.75, 8.88, 9, 9.13, 9.25, 9.38, 9.5, 9.63, 9.75, 9.88, 10, 10.13, 10.25, 10.38, 10.5, 10.63, 10.75, 10.88, 11, 11.13, 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12),
(8, '8SLVOUT', 23.88, 24, 24.13, 24.25, 24.38, 24.5, 24.63, 24.75, 24.88, 25, 25.13, 25.25, 25.38, 25.5, 25.63, 25.75, 25.88, 26, 26.13, 26.25, 26.38, 26.5, 26.63, 26.75, 26.88, 27, 27.13),
(9, '9BICEP', 15.63, 15.88, 16.13, 16.38, 16.63, 16.88, 17, 17.25, 17.5, 17.75, 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.63, 19.88, 20.13, 20.38, 20.63, 20.88, 21.13, 21.25, 21.5, 21.75),
(10, '10LAPK', 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5),
(11, '11LAPP', 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88, 3.88),
(12, '12BTN', 16.88, 17.13, 17.38, 17.63, 17.75, 18, 18.13, 18.25, 18.5, 18.63, 18.88, 19, 19.25, 19.38, 19.5, 19.75, 19.88, 20.13, 20.25, 20.5, 20.63, 20.88, 21, 21.25, 21.38, 21.63, 21.75),
(13, '13WRIST', 11.25, 11.38, 11.5, 11.63, 11.75, 11.88, 12, 12.13, 12.25, 12.38, 12.5, 12.63, 12.75, 12.88, 13, 13.13, 13.25, 13.38, 13.5, 13.63, 13.75, 13.88, 14, 14.13, 14.25, 14.38, 14.5),
(14, '14AHDEPTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, '15VENT', 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5);

-- --------------------------------------------------------

--
-- Table structure for table `p_plus_ah_plus_12`
--

CREATE TABLE `p_plus_ah_plus_12` (
  `id` int(11) NOT NULL,
  `p_plus_ah_plus_12` varchar(20) NOT NULL,
  `0.25` float NOT NULL,
  `0.5` float NOT NULL,
  `1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_plus_ah_plus_12`
--

INSERT INTO `p_plus_ah_plus_12` (`id`, `p_plus_ah_plus_12`, `0.25`, `0.5`, `1`) VALUES
(1, '1CHE', 0, 0, 0),
(2, '2GIR', 0, 0, 0),
(3, '3SEAT', 0, 0, 0),
(4, '4LEN', 0, 0, 0),
(5, '5FRTLEN', 0, 0, 0),
(6, '6PP', 0, 0, 0),
(7, '7BCKWDTH', 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0),
(9, '9BICEP', 0.25, 0.5, 1),
(10, '10LAPK', 0, 0, 0),
(11, '11LAPP', 0, 0, 0),
(12, '12BTN', 0, 0, 0),
(13, '13WRIST', 0, 0, 0),
(14, '14AHDEPTH', 0, 0, 0),
(15, '15VENT', 0, 0, 0),
(16, '1CHE', 0, 0, 0),
(17, '2GIR', 0, 0, 0),
(18, '3SEAT', 0, 0, 0),
(19, '4LEN', 0, 0, 0),
(20, '5FRTLEN', 0, 0, 0),
(21, '6PP', 0, 0, 0),
(22, '7BCKWDTH', 0, 0, 0),
(23, '8SLVOUT', 0, 0, 0),
(24, '9BICEP', 0.25, 0.5, 1),
(25, '10LAPK', 0, 0, 0),
(26, '11LAPP', 0, 0, 0),
(27, '12BTN', 0, 0, 0),
(28, '13WRIST', 0, 0, 0),
(29, '14AHDEPTH', 0, 0, 0),
(30, '15VENT', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `raise_bk_plus_minus`
--

CREATE TABLE `raise_bk_plus_minus` (
  `id` int(11) NOT NULL,
  `Rais_BK_plus_minus` varchar(20) NOT NULL,
  `0.25` float DEFAULT NULL,
  `0.375` float DEFAULT NULL,
  `0.5` float DEFAULT NULL,
  `0.625` float DEFAULT NULL,
  `0.75` float DEFAULT NULL,
  `0.875` float DEFAULT NULL,
  `1` float DEFAULT NULL,
  `1.125` float DEFAULT NULL,
  `1.25` float DEFAULT NULL,
  `1.375` float DEFAULT NULL,
  `1.5` float DEFAULT NULL,
  `-0.25` float DEFAULT NULL,
  `-0.375` float DEFAULT NULL,
  `-0.5` float DEFAULT NULL,
  `-0.625` float DEFAULT NULL,
  `-0.75` float DEFAULT NULL,
  `-0.875` float DEFAULT NULL,
  `-1` float DEFAULT NULL,
  `-1.125` float DEFAULT NULL,
  `-1.25` float DEFAULT NULL,
  `-1.375` float DEFAULT NULL,
  `-1.5` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raise_bk_plus_minus`
--

INSERT INTO `raise_bk_plus_minus` (`id`, `Rais_BK_plus_minus`, `0.25`, `0.375`, `0.5`, `0.625`, `0.75`, `0.875`, `1`, `1.125`, `1.25`, `1.375`, `1.5`, `-0.25`, `-0.375`, `-0.5`, `-0.625`, `-0.75`, `-0.875`, `-1`, `-1.125`, `-1.25`, `-1.375`, `-1.5`) VALUES
(1, '1WAIST', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Waistband Width', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '2SEAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '3THIGH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '4KNEE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '5BTM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '6INSEAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '7OTSEAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '8TRURISE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '9FRTRISE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '10BKRISE', 0.25, 0.38, 0.5, 0.63, 0.75, 0.88, 1, 1.13, 1.25, 1.38, 1.5, -0.25, -0.38, -0.5, -0.63, -0.75, -0.88, -1, -1.13, -1.25, -1.38, -1.5),
(12, '11URISE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `SEAT` varchar(20) NOT NULL,
  `2` float DEFAULT NULL,
  `-2` float DEFAULT NULL,
  `2.125` float DEFAULT NULL,
  `-2.125` float DEFAULT NULL,
  `2.25` float DEFAULT NULL,
  `-2.25` float DEFAULT NULL,
  `2.375` float DEFAULT NULL,
  `-2.375` float DEFAULT NULL,
  `2.5` float DEFAULT NULL,
  `-2.5` float DEFAULT NULL,
  `2.625` float DEFAULT NULL,
  `-2.625` float DEFAULT NULL,
  `2.75` float DEFAULT NULL,
  `-2.75` float DEFAULT NULL,
  `2.875` float DEFAULT NULL,
  `-2.875` float DEFAULT NULL,
  `3` float DEFAULT NULL,
  `-3` float DEFAULT NULL,
  `3.125` float DEFAULT NULL,
  `-3.125` float DEFAULT NULL,
  `3.25` float DEFAULT NULL,
  `-3.25` float DEFAULT NULL,
  `3.375` float DEFAULT NULL,
  `-3.375` float DEFAULT NULL,
  `3.5` float DEFAULT NULL,
  `-3.5` float DEFAULT NULL,
  `3.625` float DEFAULT NULL,
  `-3.625` float DEFAULT NULL,
  `3.75` float DEFAULT NULL,
  `-3.75` float DEFAULT NULL,
  `3.875` float DEFAULT NULL,
  `-3.875` float DEFAULT NULL,
  `4` float DEFAULT NULL,
  `-4` float DEFAULT NULL,
  `4.125` float DEFAULT NULL,
  `-4.125` float DEFAULT NULL,
  `4.25` float DEFAULT NULL,
  `-4.25` float DEFAULT NULL,
  `4.375` float DEFAULT NULL,
  `-4.375` float DEFAULT NULL,
  `4.5` float DEFAULT NULL,
  `-4.5` float DEFAULT NULL,
  `4.625` float DEFAULT NULL,
  `-4.625` float DEFAULT NULL,
  `4.75` float DEFAULT NULL,
  `-4.75` float DEFAULT NULL,
  `4.875` float DEFAULT NULL,
  `-4.875` float DEFAULT NULL,
  `5` float DEFAULT NULL,
  `-5` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `SEAT`, `2`, `-2`, `2.125`, `-2.125`, `2.25`, `-2.25`, `2.375`, `-2.375`, `2.5`, `-2.5`, `2.625`, `-2.625`, `2.75`, `-2.75`, `2.875`, `-2.875`, `3`, `-3`, `3.125`, `-3.125`, `3.25`, `-3.25`, `3.375`, `-3.375`, `3.5`, `-3.5`, `3.625`, `-3.625`, `3.75`, `-3.75`, `3.875`, `-3.875`, `4`, `-4`, `4.125`, `-4.125`, `4.25`, `-4.25`, `4.375`, `-4.375`, `4.5`, `-4.5`, `4.625`, `-4.625`, `4.75`, `-4.75`, `4.875`, `-4.875`, `5`, `-5`) VALUES
(1, '1CHE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '2GIR', 0.125, -0.125, 0.125, -0.125, 0.125, -0.125, 0.125, -0.125, 0.125, -0.125, 0.125, -0.125, 0.125, -0.125, 0.125, -0.125, 0.125, -0.125, 0.125, -0.125, 0.125, -0.125, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.25, -0.25, 0.375, -0.375, 0.375, -0.375, 0.375, -0.375, 0.375, -0.375),
(3, '3SEAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '4LEN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '5FRTLEN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '6PP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '7BCKWDTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '8SLVOUT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '9BICEP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '10LAPK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '11LAPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, '12BTN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, '13WRIST', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, '14AHDEPTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, '15VENT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `size_chart`
--

CREATE TABLE `size_chart` (
  `size` varchar(20) NOT NULL,
  `34` float NOT NULL,
  `35` float NOT NULL,
  `36` float NOT NULL,
  `37` float NOT NULL,
  `38` float NOT NULL,
  `39` float NOT NULL,
  `40` float NOT NULL,
  `41` float NOT NULL,
  `42` float NOT NULL,
  `43` float NOT NULL,
  `44` float NOT NULL,
  `45` float NOT NULL,
  `46` float NOT NULL,
  `47` float NOT NULL,
  `48` float NOT NULL,
  `49` float NOT NULL,
  `50` float NOT NULL,
  `51` float NOT NULL,
  `52` float NOT NULL,
  `53` float NOT NULL,
  `54` float NOT NULL,
  `55` float NOT NULL,
  `56` float NOT NULL,
  `57` float NOT NULL,
  `58` float NOT NULL,
  `59` float NOT NULL,
  `60` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size_chart`
--

INSERT INTO `size_chart` (`size`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`) VALUES
('1CHE', 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60),
('2GIR', 18.25, 18.75, 19.25, 19.75, 20.25, 20.75, 21.25, 21.75, 22.25, 22.75, 23.25, 23.75, 24.25, 24.75, 25.25, 25.75, 26.25, 26.75, 27.25, 27.75, 28.25, 28.75, 29.25, 29.75, 30.25, 30.75, 31.25),
('3SEAT', 34.75, 35.75, 36.75, 37.75, 38.75, 39.75, 40.75, 41.75, 42.75, 43.75, 44.75, 45.75, 46.75, 47.75, 48.75, 49.75, 50.75, 51.75, 52.75, 53.75, 54.75, 55.75, 56.75, 57.75, 58.75, 59.75, 60.75),
('4LEN', 30.25, 30.375, 30.5, 30.625, 30.75, 30.875, 31, 31.125, 31.25, 31.375, 31.5, 31.625, 31.75, 31.875, 32, 32.125, 32.25, 32.375, 32.5, 32.625, 32.75, 32.875, 33, 33.125, 33.25, 33.375, 33.5),
('5FRTLEN', 30.875, 31, 31.125, 31.25, 31.5, 31.625, 31.75, 31.875, 32, 32.25, 32.375, 32.5, 32.625, 32.75, 33, 33.125, 33.25, 33.375, 33.5, 33.75, 33.875, 34, 34.125, 34.25, 34.5, 34.625, 34.75),
('6PP', 18, 18.25, 18.5, 18.75, 19, 19.25, 19.5, 19.75, 20, 20.25, 20.5, 20.75, 21, 21.25, 21.375, 21.625, 21.75, 22, 22.125, 22.375, 22.5, 22.75, 22.875, 23.125, 23.25, 23.5, 23.625),
('7BCKWDTH', 8.75, 8.875, 9, 9.125, 9.25, 9.375, 9.5, 9.625, 9.75, 9.875, 10, 10.125, 10.25, 10.375, 10.5, 10.625, 10.75, 10.875, 11, 11.125, 11.25, 11.375, 11.5, 11.625, 11.75, 11.875, 12),
('8SLVOUT', 23.875, 24, 24.125, 24.25, 24.375, 24.5, 24.625, 24.75, 24.875, 25, 25.125, 25.25, 25.375, 25.5, 25.625, 25.75, 25.875, 26, 26.125, 26.25, 26.375, 26.5, 26.625, 26.75, 26.875, 27, 27.125),
('9BICEP', 15, 15.125, 15, 15.5, 15.75, 16, 16.125, 16, 16.5, 16.75, 16.875, 17.125, 17, 17.5, 17.75, 17.875, 18.125, 18.25, 18.5, 18.625, 18.875, 19, 19.25, 19.5, 19.625, 19.875, 20),
('10LAPK', 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5, 3.5),
('11LAPP', 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875, 3.875),
('12BTN', 16.875, 17.125, 17.375, 17.625, 17.75, 18, 18.125, 18.25, 18.5, 18.625, 18.875, 19, 19.25, 19.375, 19.5, 19.75, 19.875, 20.125, 20.25, 20.5, 20.625, 20.875, 21, 21.25, 21.375, 21.625, 21.75),
('13WRIST', 11.25, 11.375, 11.5, 11.625, 11.75, 11.875, 12, 12.125, 12.25, 12.375, 12.5, 12.625, 12.75, 12.875, 13, 13.125, 13.25, 13.375, 13.5, 13.625, 13.75, 13.875, 14, 14.125, 14.25, 14.375, 14.5),
('14AHDEPTH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('15VENT', 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5);

-- --------------------------------------------------------

--
-- Table structure for table `table 25`
--

CREATE TABLE `table 25` (
  `COL 1` varchar(9) DEFAULT NULL,
  `COL 2` varchar(6) DEFAULT NULL,
  `COL 3` varchar(6) DEFAULT NULL,
  `COL 4` varchar(6) DEFAULT NULL,
  `COL 5` varchar(6) DEFAULT NULL,
  `COL 6` varchar(6) DEFAULT NULL,
  `COL 7` varchar(6) DEFAULT NULL,
  `COL 8` varchar(6) DEFAULT NULL,
  `COL 9` varchar(7) DEFAULT NULL,
  `COL 10` varchar(7) DEFAULT NULL,
  `COL 11` varchar(7) DEFAULT NULL,
  `COL 12` varchar(7) DEFAULT NULL,
  `COL 13` varchar(7) DEFAULT NULL,
  `COL 14` varchar(7) DEFAULT NULL,
  `COL 15` varchar(7) DEFAULT NULL,
  `COL 16` varchar(7) DEFAULT NULL,
  `COL 17` varchar(7) DEFAULT NULL,
  `COL 18` varchar(7) DEFAULT NULL,
  `COL 19` varchar(7) DEFAULT NULL,
  `COL 20` varchar(7) DEFAULT NULL,
  `COL 21` varchar(7) DEFAULT NULL,
  `COL 22` varchar(7) DEFAULT NULL,
  `COL 23` varchar(7) DEFAULT NULL,
  `COL 24` varchar(7) DEFAULT NULL,
  `COL 25` varchar(7) DEFAULT NULL,
  `COL 26` varchar(7) DEFAULT NULL,
  `COL 27` varchar(7) DEFAULT NULL,
  `COL 28` varchar(7) DEFAULT NULL,
  `COL 29` varchar(7) DEFAULT NULL,
  `COL 30` varchar(7) DEFAULT NULL,
  `COL 31` varchar(7) DEFAULT NULL,
  `COL 32` varchar(7) DEFAULT NULL,
  `COL 33` varchar(7) DEFAULT NULL,
  `COL 34` varchar(7) DEFAULT NULL,
  `COL 35` varchar(7) DEFAULT NULL,
  `COL 36` varchar(7) DEFAULT NULL,
  `COL 37` varchar(7) DEFAULT NULL,
  `COL 38` varchar(7) DEFAULT NULL,
  `COL 39` varchar(7) DEFAULT NULL,
  `COL 40` varchar(7) DEFAULT NULL,
  `COL 41` varchar(8) DEFAULT NULL,
  `COL 42` varchar(8) DEFAULT NULL,
  `COL 43` varchar(8) DEFAULT NULL,
  `COL 44` varchar(8) DEFAULT NULL,
  `COL 45` varchar(8) DEFAULT NULL,
  `COL 46` varchar(8) DEFAULT NULL,
  `COL 47` varchar(8) DEFAULT NULL,
  `COL 48` varchar(8) DEFAULT NULL,
  `COL 49` varchar(8) DEFAULT NULL,
  `COL 50` varchar(8) DEFAULT NULL,
  `COL 51` varchar(8) DEFAULT NULL,
  `COL 52` varchar(8) DEFAULT NULL,
  `COL 53` varchar(8) DEFAULT NULL,
  `COL 54` varchar(8) DEFAULT NULL,
  `COL 55` varchar(8) DEFAULT NULL,
  `COL 56` varchar(8) DEFAULT NULL,
  `COL 57` varchar(8) DEFAULT NULL,
  `COL 58` varchar(8) DEFAULT NULL,
  `COL 59` varchar(8) DEFAULT NULL,
  `COL 60` varchar(8) DEFAULT NULL,
  `COL 61` varchar(8) DEFAULT NULL,
  `COL 62` varchar(8) DEFAULT NULL,
  `COL 63` varchar(8) DEFAULT NULL,
  `COL 64` varchar(8) DEFAULT NULL,
  `COL 65` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 25`
--

INSERT INTO `table 25` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`, `COL 15`, `COL 16`, `COL 17`, `COL 18`, `COL 19`, `COL 20`, `COL 21`, `COL 22`, `COL 23`, `COL 24`, `COL 25`, `COL 26`, `COL 27`, `COL 28`, `COL 29`, `COL 30`, `COL 31`, `COL 32`, `COL 33`, `COL 34`, `COL 35`, `COL 36`, `COL 37`, `COL 38`, `COL 39`, `COL 40`, `COL 41`, `COL 42`, `COL 43`, `COL 44`, `COL 45`, `COL 46`, `COL 47`, `COL 48`, `COL 49`, `COL 50`, `COL 51`, `COL 52`, `COL 53`, `COL 54`, `COL 55`, `COL 56`, `COL 57`, `COL 58`, `COL 59`, `COL 60`, `COL 61`, `COL 62`, `COL 63`, `COL 64`, `COL 65`) VALUES
('1CHE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2GIR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('3SEAT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('4LEN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('5FRTLEN', '  1/8 ', '  1/4 ', '  3/8 ', '  1/2 ', '  5/8 ', '  3/4 ', '  7/8 ', '1      ', '1  1/8 ', '1  1/4 ', '1  3/8 ', '1  1/2 ', '1  5/8 ', '1  3/4 ', '1  7/8 ', '2      ', '2  1/8 ', '2  1/4 ', '2  3/8 ', '2  1/2 ', '2  5/8 ', '2  3/4 ', '2  7/8 ', '3      ', '3  1/8 ', '3  1/4 ', '3  3/8 ', '3  1/2 ', '3  5/8 ', '3  3/4 ', '3  7/8 ', '4      ', '-  1/8 ', '-  1/4 ', '-  3/8 ', '-  1/2 ', '-  5/8 ', '-  3/4 ', '-  7/8 ', '-1      ', '-1  1/8 ', '-1  1/4 ', '-1  3/8 ', '-1  1/2 ', '-1  5/8 ', '-1  3/4 ', '-1  7/8 ', '-2      ', '-2  1/8 ', '-2  1/4 ', '-2  3/8 ', '-2  1/2 ', '-2  5/8 ', '-2  3/4 ', '-2  7/8 ', '-3      ', '-3  1/8 ', '-3  1/4 ', '-3  3/8 ', '-3  1/2 ', '-3  5/8 ', '-3  3/4 ', '-3  7/8 ', '-4      '),
('6PP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7BCKWDTH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('8SLVOUT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('9BICEP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('10LAPK', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('11LAPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12BTN', '  1/16', '  1/8 ', '  3/16', '  1/4 ', '  5/16', '  3/8 ', '  7/16', '  1/2 ', '  9/16', '  5/8 ', ' 11/16', '  3/4 ', ' 13/16', '  7/8 ', ' 15/16', '1      ', '1  1/16', '1  1/8 ', '1  3/16', '1  1/4 ', '1  5/16', '1  3/8 ', '1  7/16', '1  1/2 ', '1  9/16', '1  5/8 ', '1 11/16', '1  3/4 ', '1 13/16', '1  7/8 ', '1 15/16', '2      ', '-  1/16', '-  1/8 ', '-  3/16', '-  1/4 ', '-  5/16', '-  3/8 ', '-  7/16', '-  1/2 ', '-  9/16', '-  5/8 ', '- 11/16', '-  3/4 ', '- 13/16', '-  7/8 ', '- 15/16', '-1      ', '-1  1/16', '-1  1/8 ', '-1  3/16', '-1  1/4 ', '-1  5/16', '-1  3/8 ', '-1  7/16', '-1  1/2 ', '-1  9/16', '-1  5/8 ', '-1 11/16', '-1  3/4 ', '-1 13/16', '-1  7/8 ', '-1 15/16', '-2      '),
('13WRIST', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('14AHDEPTH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('15VENT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `4len`
--
ALTER TABLE `4len`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `12back`
--
ALTER TABLE `12back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `15vent`
--
ALTER TABLE `15vent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ah_34_a_plus`
--
ALTER TABLE `ah_34_a_plus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_cols`
--
ALTER TABLE `all_cols`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deep_seat_minus`
--
ALTER TABLE `deep_seat_minus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `erect_plus`
--
ALTER TABLE `erect_plus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frommeasure`
--
ALTER TABLE `frommeasure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frommeasuret`
--
ALTER TABLE `frommeasuret`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frommeasurev`
--
ALTER TABLE `frommeasurev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fromuser`
--
ALTER TABLE `fromuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_length_minus`
--
ALTER TABLE `front_length_minus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_length_plus`
--
ALTER TABLE `front_length_plus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `full_chest`
--
ALTER TABLE `full_chest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `half_grith`
--
ALTER TABLE `half_grith`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `head_for_plus`
--
ALTER TABLE `head_for_plus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hip_forw_plus`
--
ALTER TABLE `hip_forw_plus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `low_clr_plus`
--
ALTER TABLE `low_clr_plus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `low_fron`
--
ALTER TABLE `low_fron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurement_chart`
--
ALTER TABLE `measurement_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtm_us_trs(r)`
--
ALTER TABLE `mtm_us_trs(r)`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plu_crot_plus`
--
ALTER TABLE `plu_crot_plus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portly_fit`
--
ALTER TABLE `portly_fit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_plus_ah_plus_12`
--
ALTER TABLE `p_plus_ah_plus_12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raise_bk_plus_minus`
--
ALTER TABLE `raise_bk_plus_minus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `4len`
--
ALTER TABLE `4len`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `12back`
--
ALTER TABLE `12back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `15vent`
--
ALTER TABLE `15vent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ah_34_a_plus`
--
ALTER TABLE `ah_34_a_plus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `all_cols`
--
ALTER TABLE `all_cols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `deep_seat_minus`
--
ALTER TABLE `deep_seat_minus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `erect_plus`
--
ALTER TABLE `erect_plus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `frommeasure`
--
ALTER TABLE `frommeasure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `frommeasuret`
--
ALTER TABLE `frommeasuret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `frommeasurev`
--
ALTER TABLE `frommeasurev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fromuser`
--
ALTER TABLE `fromuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_length_minus`
--
ALTER TABLE `front_length_minus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `front_length_plus`
--
ALTER TABLE `front_length_plus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `full_chest`
--
ALTER TABLE `full_chest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `half_grith`
--
ALTER TABLE `half_grith`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `head_for_plus`
--
ALTER TABLE `head_for_plus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hip_forw_plus`
--
ALTER TABLE `hip_forw_plus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `low_clr_plus`
--
ALTER TABLE `low_clr_plus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `low_fron`
--
ALTER TABLE `low_fron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `measurement_chart`
--
ALTER TABLE `measurement_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mtm_us_trs(r)`
--
ALTER TABLE `mtm_us_trs(r)`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `plu_crot_plus`
--
ALTER TABLE `plu_crot_plus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portly_fit`
--
ALTER TABLE `portly_fit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `p_plus_ah_plus_12`
--
ALTER TABLE `p_plus_ah_plus_12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `raise_bk_plus_minus`
--
ALTER TABLE `raise_bk_plus_minus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
