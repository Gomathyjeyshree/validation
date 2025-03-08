-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2025 at 11:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `newrecord`
--

CREATE TABLE `newrecord` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `regis_no` int(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newrecord`
--

INSERT INTO `newrecord` (`sno`, `name`, `email`, `address`, `mobile`, `regis_no`, `password`) VALUES
(1, 'abinaya', 'rtyr5an444@gmail.com', NULL, 8270367862, NULL, 'Mano420@m'),
(2, 'Abinaya Mano', 'rtyr5an444@gmail.com', NULL, 8270678623, NULL, 'Mahug7f7yg'),
(3, 'vijaya', 'rtyr5an444@gmail.com', NULL, 8270678623, NULL, 'shdufy7f47'),
(4, 'Ahalya', 'abinayakaran444@gmail.com', NULL, 7845675655, NULL, 'asdfghjkl'),
(5, 'newname', 'newname@gmail.com', NULL, 8270235902, NULL, '12345678'),
(6, 'Prasanna', 'prasa@gmail.com', NULL, 9715334421, NULL, 'Prasa@123'),
(37, 'arun', 'a@gmail.com', NULL, 8270678620, NULL, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `serial` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `reg_no` int(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`serial`, `name`, `address`, `mobile`, `reg_no`, `status`) VALUES
(1, 'Abinaya', 'No1, big street,zamin,chrompet', 827067862, 100, 'passed'),
(2, 'Abinaya', 'No1, big street,zamin,chrompet', 827067862, 200, 'passes'),
(3, 'Abinaya', 'thoothukudi', 2147483647, 300, 'passed'),
(4, 'Abinaya', 'chennai', 2147483647, 400, 'failed'),
(5, 'kavii', 'velore', 827067862, 500, 'failed'),
(6, 'Abinaya', 'No1, big street,zamin,chrompet', 827067862, 600, 'passed'),
(7, 'mano', 'No3,big street, zamin royapet,chennai', 827025902, 700, 'passed'),
(8, 'Abinaya', 'No3,big street, zamin royapet,chennai', 827025902, 800, 'failed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newrecord`
--
ALTER TABLE `newrecord`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newrecord`
--
ALTER TABLE `newrecord`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
