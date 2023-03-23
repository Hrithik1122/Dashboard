-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 23, 2023 at 11:29 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_task`
--

CREATE TABLE `add_task` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_detail` text NOT NULL,
  `task_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_task`
--

INSERT INTO `add_task` (`id`, `user_id`, `task_detail`, `task_type`) VALUES
(1, 2, 'New task', 'Pending'),
(2, 1, 'NEWWWWW', 'Pending'),
(3, 1, 'HA', 'Done'),
(4, 5, 'NEW Task', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '@gmail.com',
  `ccode` varchar(5) NOT NULL DEFAULT '+91',
  `mobile` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `ccode`, `mobile`, `password`, `status`) VALUES
(1, 'Hrithik Bansal', 'user@gmail.com', '+91', '9876543210', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text,
  `email` text,
  `mobile` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`) VALUES
(1, 'hrithik', 'h@gmail.com', '9876543210'),
(2, 'Test', 'test@gmail.com', '123'),
(3, 'NEW', 'h@g.c', '12'),
(4, 'Test1', 'h@g.c', 'ha'),
(5, 'Z1', 'a@g.c', 'aa'),
(6, 'Test123', 'a@g.c', 'a'),
(7, 'Test3', 'test@gmail.com', '9876543210'),
(8, 'NEW', 'h@gmail.com', '9876543210'),
(9, 'hrithik', 'h@gmail.com', '123'),
(10, 'hrithik', 'h@gmail.com', '9876543210'),
(11, 'hrithik', 'h@gmail.com', '9876543210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_task`
--
ALTER TABLE `add_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_task`
--
ALTER TABLE `add_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
