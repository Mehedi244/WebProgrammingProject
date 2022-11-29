-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 06:36 PM
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
(4, 'Emp-0001', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-12-04', 'Accounting', '120000', 'Sr.software Engg', 'A+', 'Mehedi.jpg', ''),
(6, 'Emp-0002', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-11-15', 'IT', '10000', 'Sr.software Engg', 'A+', 'mehedi-p.jpg', ''),
(7, 'Emp-0003', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-11-24', 'IT', '10000', 'Sr.software Engg', 'A+', 'Mehedi.jpg', '21ba955'),
(8, 'Emp-0004', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-12-08', 'Deparment', '10000', 'Jr.software Engg', 'A+', 'Mehedi.jpg', '2a71d51'),
(9, 'Emp-0005', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-11-24', 'Human Resources', '1200001', 'Sr.software Engg', 'AB+', 'Mehedi.jpg', '1cedced'),
(10, 'Emp-0006', 'Mehedi Hasan', 'Mr. Baba', 'Mrs. Ma', '+8801994477977', 'mehedi.mk93@gmail.com', 'Male', 'Mirpur,Dhaka,Bangladesh', '2022-11-24', 'IOT', '10000', 'Sr.software Engg', 'AB+', 'signature.jpg', '81f7e18');

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
(6, 'Emp-0006', '1327');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employepassword`
--
ALTER TABLE `employepassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
