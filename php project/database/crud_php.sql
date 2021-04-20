-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 03:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `massage` text NOT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `email`, `mobile`, `massage`, `photo`) VALUES
(8, 'md omar faruk', 'akomarfci@gmail.com', '01761302367', 'dfsdfsdcdsfd', ''),
(9, 'md omar faruk', 'akomarfci@gmail.com', '00099', 'xxxx', '9.jpg'),
(10, 'md omar faruk', 'akomarfci@gmail.com', '+0093854', 'cccccccccc', '10.jpg'),
(21, 'md omar faruk', 'akomarfci@gmail.com', '+0093854', 'cccccccccc', '21.jpg'),
(24, 'Talha Rahman', 'talha@gmail.com', '+0093854', 'df', '24.jpg'),
(25, 'md nasir', 'akomarfci@gmail.com', '+0093854', 'df', '25.jpg'),
(26, 'md omar faruk', 'akomarfci@gmail.com', '+0093854', 'df', '26.jpg'),
(27, 'md nasir', 'akomarfci@gmail.com', '+0093854', 'df', '27.jpg'),
(28, 'md nasir', 'akomarfci@gmail.com', '+0093854', 'dfdf', '28.jpg'),
(29, 'md nasir', 'akomarfci@gmail.com', '+0093854', 'df', '29.jpg'),
(30, 'md nasir', 'akomarfci@gmail.com', '+0093854', 'df', '30.jpg'),
(31, 'md omar faruk', 'akomarfci@gmail.com', '01310027292', 'hi', '31.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `status`) VALUES
(7, '7.png', 0),
(8, '8.png', 1),
(9, '9.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `photo`, `title`, `description`, `status`) VALUES
(1, '', 'df', 'sdf', 0),
(2, '', 'Digital School', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ea, quis magnam deserunt.', 1),
(3, '', 'fg', 'fg', 0),
(4, '', 'dfsdf', 'fg', 0),
(5, '', 'dfsdf', 'dffdf', 0),
(6, '', 'dfsdf', 'df', 1),
(7, '7.jpg', 'df', 'fgfg', 0),
(8, '8.jpg', 'computer soluation', 'computer is  a good for any general student', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `role` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile`, `photo`, `role`) VALUES
(1, 'super_admin', 'akomarfci@gmail.com', 'faruk123', '01878459345', '', 0),
(2, 'omar45', 'omar@gmail.com', 'omar', '01832210111', '', 0),
(3, 'omar45', 'omar@gmail.com', 'dfsdf', '01832210111', '', 0),
(4, 'omar45', 'omar@gmail.com', 'dfdf', '01832210111', '', 0),
(5, '', 'akomarfci@gmail.com', '', '01878469345', '', 0),
(6, '', 'akomarfci@gmail.com', '', '01878469345', '', 0),
(7, '', '', '', '', '', 0),
(8, 'super_admin', '', 'talha123', '01878469345', '', 0),
(9, 'talha', '', 'tlaha123', '01616074454', '', 0),
(10, 'super_admin', '', 'faruk', '00099', '', 0),
(11, 'fartuk', '', 'faarifj', '018789469345', '', 0),
(12, 'faruk', '', 'fakjf', '01711075170', '', 0),
(13, 'faruk', '', 'dfdfd', '01711075170', '', 0),
(14, 'faruk', '', 'faruk', '01712478063', '14.jpg', 0),
(15, 'faruk', '', 'df', '01310027292', '15.jpg', 0),
(16, 'Md omar faruk', '', 'faruk123', '01878459345', '16.jpg', 0),
(17, 'super_admin', '', 'fsdkf', '01310027292', '17.jpg', 0),
(18, 'super_admin', '', 'fakfjjf', '12312', '18.jpg', 0),
(19, 'Md omar faruk', 'faruk@gmail.com', 'faruk', '+0093854', '19.jpg', 0),
(20, 'akomarfci', 'akomarfci@gmail.com', '123', '+0093854', '20.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
