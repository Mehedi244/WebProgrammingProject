-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 11:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eimsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'mehedi', 'mehedi');

-- --------------------------------------------------------

--
-- Table structure for table `employeinfo`
--

CREATE TABLE `employeinfo` (
  `id` int(11) NOT NULL,
  `employeid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `mothername` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `bloodgroup` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `barcode` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeinfo`
--

INSERT INTO `employeinfo` (`id`, `employeid`, `name`, `fathername`, `mothername`, `phone`, `email`, `gender`, `address`, `birthdate`, `department`, `salary`, `designation`, `bloodgroup`, `image`, `barcode`) VALUES
(39, 'Emp-1001', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-12-21', 'IOT', '12000', 'Sr.software Engg', 'AB+', 'Mehedi.jpg', 'f708e0f'),
(40, 'Emp-1002', 'Azizul hakim', 'Mr. Baba1', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-12-29', 'Human Resources', '10000', 'Jr.software Engg', 'O+', 'Mehedi.jpg', 'ba6cbc0'),
(41, 'Emp-1003', 'Shakil Khan', 'Mr. Baba', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-12-13', 'IOT', '20000', 'Sr.software Engg', 'AB-', 'Mehedi.jpg', '12f8d44'),
(42, 'Emp-1004', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma1', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-12-29', 'Accounting', '120000', 'Sr.software Engg', 'AB+', 'Mehedi.jpg', '55a9c4f'),
(43, 'Emp-1005', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma2', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-12-14', 'IOT', '20000', 'Sr.software Engg', 'AB-', 'mehedi-p.jpg', 'd23c9f4'),
(44, 'Emp-1006', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2023-01-04', 'IT', '10000', 'Sr.software Engg', 'O+', 'signature.jpg', 'f9dcbe5'),
(45, 'Emp-1007', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-12-28', 'IT', '10000', 'Sr.software Engg', 'AB+', 'Mehedi.jpg', '061952c');

-- --------------------------------------------------------

--
-- Table structure for table `employepassword`
--

CREATE TABLE `employepassword` (
  `id` int(11) NOT NULL,
  `employeid` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employepassword`
--

INSERT INTO `employepassword` (`id`, `employeid`, `password`) VALUES
(1, 'Emp-0002', '2635'),
(3, 'Emp-0003', '5108'),
(4, 'Emp-0004', '7335'),
(5, 'Emp-0005', '1375'),
(6, 'Emp-0006', '1327'),
(7, '', '1479'),
(8, '', '1446'),
(9, '', '8580'),
(10, '', '7724'),
(11, '', '5256'),
(12, '', '6101'),
(13, '', '4280'),
(14, '', '2943'),
(15, '', '5045'),
(16, '', '9264'),
(17, '', '5133'),
(18, 'Emp-1001', '8476'),
(19, 'Emp-1001', '4681'),
(20, 'Emp-1001', '6026'),
(21, 'Emp-1001', '6409'),
(22, 'Emp-1001', '8328'),
(23, 'Emp-1001', '2607'),
(24, 'Emp-1001', '2829'),
(25, 'Emp-1001', '6562'),
(26, 'Emp-1001', '2227'),
(27, 'Emp-1002', '3026'),
(28, 'Emp-1002', '3543'),
(29, 'Emp-1001', '3792'),
(30, 'Emp-1002', '7290'),
(31, 'Emp-1003', '3776'),
(32, '', '7575'),
(33, '', '3135'),
(34, '', '8069'),
(35, 'Emp-1001', '9625'),
(36, 'Emp-1002', '8926'),
(37, 'Emp-1003', '5926'),
(38, 'Emp-1004', '5621'),
(39, 'Emp-1005', '5892'),
(40, 'Emp-1006', '2585'),
(41, 'Emp-1007', '7544');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeinfo`
--
ALTER TABLE `employeinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employepassword`
--
ALTER TABLE `employepassword`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employeinfo`
--
ALTER TABLE `employeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `employepassword`
--
ALTER TABLE `employepassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
