-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 08:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samplephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_price`, `product_desc`, `product_image`) VALUES
(19, 'Nokia 7.2', 65201, 'best nokia mobile phone..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie leo hendrerit magna ultrices posuere. Aliquam congue nec lorem tempor auctor. Aenean faucibus ultricies orci, id consequat sapien. Nullam vitae tellus sed augue convallis viverra. Quisque id arcu ut mauris feugiat accumsan. Suspendisse porta velit malesuada', '5ed7e7cf947d0.jpg'),
(20, 'Iphone X', 544555, 'best I phone.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie leo hendrerit magna ultrices posuere. Aliquam congue nec lorem tempor auctor. Aenean faucibus ultricies orci, id consequat sapien. Nullam vitae tellus sed augue convallis viverra. Quisque id arcu ut mauris feugiat accumsan. Suspendisse porta velit malesuada', '5ed7e75aec282.jpg'),
(21, 'Y7', 29300, 'Best mobile... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie leo hendrerit magna ultrices posuere. Aliquam congue nec lorem tempor auctor. Aenean faucibus ultricies orci, id consequat sapien. Nullam vitae tellus sed augue convallis viverra. Quisque id arcu ut mauris feugiat accumsan. Suspendisse porta velit malesuada', '5ed7e7f681911.jpg'),
(22, 'Nova 5T', 56555, 'mobile.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie leo hendrerit magna ultrices posuere. Aliquam congue nec lorem tempor auctor. Aenean faucibus ultricies orci, id consequat sapien. Nullam vitae tellus sed augue convallis viverra. Quisque id arcu ut mauris feugiat accumsan. Suspendisse porta velit malesuada', '5ed7e8186031a.jpg'),
(23, 'Samsung A51', 25365, 'samsung best.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie leo hendrerit magna ultrices posuere. Aliquam congue nec lorem tempor auctor. Aenean faucibus ultricies orci, id consequat sapien. Nullam vitae tellus sed augue convallis viverra. Quisque id arcu ut mauris feugiat accumsan. Suspendisse porta velit malesuada', '5ed7e8377de50.jpg'),
(24, 'Samsung A70', 75000, 'best ... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie leo hendrerit magna ultrices posuere. Aliquam congue nec lorem tempor auctor. Aenean faucibus ultricies orci, id consequat sapien. Nullam vitae tellus sed augue convallis viverra. Quisque id arcu ut mauris feugiat accumsan. Suspendisse porta velit malesuada', '5ed7e855d1c36.jpg'),
(25, 'M30S Samsung', 35200, 'sssamsung... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie leo hendrerit magna ultrices posuere. Aliquam congue nec lorem tempor auctor. Aenean faucibus ultricies orci, id consequat sapien. Nullam vitae tellus sed augue convallis viverra. Quisque id arcu ut mauris feugiat accumsan. Suspendisse porta velit malesuada', '5ed7e876b07fd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(300) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address`, `username`) VALUES
(1, 'kamal', 'assasa', 'namaljayaweera422@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0712685735', '229, Pahala kumbura, Mitipola, Eheliyagoda', 'kamal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
