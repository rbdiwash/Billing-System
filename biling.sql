-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 06:19 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biling`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbiling`
--

CREATE TABLE `bbiling` (
  `bname` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `bvatbillno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bbiling`
--

INSERT INTO `bbiling` (`bname`, `bdate`, `bvatbillno`) VALUES
('diwash', '2020-02-27', 2),
('diwash', '2020-12-27', 2),
('diwash', '2021-12-27', 7),
('diwash', '2021-12-27', 5),
('kale', '2029-02-27', 2),
('deepak', '2021-02-27', 165465),
('diwash', '2032-12-27', 6),
('diwah', '2021-01-27', 3),
('', '0000-00-00', 0),
('diwash', '2022-11-28', 6545);

-- --------------------------------------------------------

--
-- Table structure for table `biling`
--

CREATE TABLE `biling` (
  `kname` varchar(30) NOT NULL,
  `kdate` date NOT NULL,
  `vatbillno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biling`
--

INSERT INTO `biling` (`kname`, `kdate`, `vatbillno`) VALUES
('diwash', '2021-02-27', 5446),
('purni', '2021-12-27', 4),
('purni', '2021-12-27', 4),
('purni', '2021-11-27', 2),
('purni', '2022-12-27', 5464),
('purni', '2022-12-27', 5464),
('purni', '2022-12-27', 5464);

-- --------------------------------------------------------

--
-- Table structure for table `bsaman`
--

CREATE TABLE `bsaman` (
  `bid` int(11) NOT NULL,
  `bname` varchar(25) NOT NULL,
  `bitem` varchar(50) NOT NULL,
  `bquantity` int(10) NOT NULL,
  `brate` int(10) NOT NULL,
  `bprice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsaman`
--

INSERT INTO `bsaman` (`bid`, `bname`, `bitem`, `bquantity`, `brate`, `bprice`) VALUES
(1, 'diwash', 'saman', 12, 1220, 1220);

-- --------------------------------------------------------

--
-- Table structure for table `saman`
--

CREATE TABLE `saman` (
  `kid` int(10) NOT NULL,
  `kitem` varchar(50) NOT NULL,
  `kquantity` int(10) NOT NULL,
  `krate` int(10) NOT NULL,
  `kprice` int(10) NOT NULL,
  `kname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saman`
--

INSERT INTO `saman` (`kid`, `kitem`, `kquantity`, `krate`, `kprice`, `kname`) VALUES
(109, 'saman', 10, 100, 500, 'diwash'),
(110, 'saman', 10, 100, 1220, 'purni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsaman`
--
ALTER TABLE `bsaman`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `saman`
--
ALTER TABLE `saman`
  ADD PRIMARY KEY (`kid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsaman`
--
ALTER TABLE `bsaman`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saman`
--
ALTER TABLE `saman`
  MODIFY `kid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
