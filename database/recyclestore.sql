-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2020 at 05:53 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recyclestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `user_id`, `qty`) VALUES
(21, 1, 1, 1),
(37, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tran_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `p_id`, `qty`, `tran_id`, `p_status`) VALUES
(1, 2, 2, 1, '20191105111212800110168271000991169', 'Completed'),
(2, 2, 4, 1, '20191105111212800110168271000991169', 'Completed'),
(3, 2, 4, 1, '20191105111212800110168185401022539', 'Completed'),
(4, 2, 2, 1, '20191105111212800110168185401022539', 'Completed'),
(5, 2, 3, 4, '20191105111212800110168185401022539', 'Completed'),
(6, 2, 3, 1, '20191106111212800110168756300993583', 'Completed'),
(7, 1, 4, 1, '20191106111212800110168138100981847', 'Completed'),
(8, 2, 2, 1, '20191106111212800110168115400983175', 'Completed'),
(9, 2, 1, 3, '20191106111212800110168825100987284', 'Completed'),
(10, 2, 2, 1, '20191106111212800110168825100987284', 'Completed'),
(11, 3, 2, 2, '20191109111212800110168975701004898', 'Completed'),
(12, 3, 1, 1, '20191109111212800110168975701004898', 'Completed'),
(13, 3, 1, 1, '20191109111212800110168177800973724', 'Completed'),
(14, 3, 4, 1, '20191109111212800110168628802406560', 'Completed'),
(15, 3, 3, 1, '20191109111212800110168981500998769', 'Completed'),
(16, 3, 2, 1, '20191110111212800110168231400998779', 'Completed'),
(17, 3, 4, 1, '20191110111212800110168231400998779', 'Completed'),
(18, 4, 2, 1, '20191110111212800110168421000983409', 'Completed'),
(19, 4, 3, 1, '20191110111212800110168421000983409', 'Completed'),
(20, 3, 3, 1, '20191113111212800110168210400990583', 'Completed'),
(21, 3, 4, 1, '20191113111212800110168210400990583', 'Completed'),
(22, 3, 2, 1, '20191113111212800110168210400990583', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `verify` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `user_id`, `verify`) VALUES
(1, 'recyclable waste', '2 kg of waste food', 1, 'false'),
(2, 'plastic', 'from thane', 1, 'false'),
(3, 'bag', 'from mumbai', 2, 'false'),
(4, 'Plastic', '2kg of Plastic present at Thane. ', 3, 'false'),
(5, 'Food', 'Waste food', 3, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `product_desc` text NOT NULL,
  `price` int(10) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `title`, `product_desc`, `price`, `product_image`) VALUES
(1, 'Shopping Bag', 'Shopping Bag created using plastic', 200, 'product3.jpg'),
(2, 'Phone Support', 'Charger holder made with sot drinks bottle', 100, 'product2.jpg'),
(3, 'Dustbin', 'Dustbin created using wood.', 500, 'product4.jpg'),
(4, 'Decorative', 'Wooden Bucket or cups', 150, 'product1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `user_pic` varchar(30) NOT NULL DEFAULT 'default.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `address`, `mobile`, `Name`, `user_pic`) VALUES
(1, 'govinda@gmail.com', '436c28de357796000a92752205d8229b', 'thane mumbai', 1110001110, 'Govinda Patel', 'default.jpeg'),
(2, 'anjan@gmail.com', '00f5d6ee481f2750d91c79d26b6bc750', 'Thane Mumbai', 1110001111, 'Anjan', '2images.jpeg'),
(3, 'gspatel4555@gmail.com', '436c28de357796000a92752205d8229b', 'Thane Maharashtra', 8080328981, 'Govinda Patel', '3thank1.jpeg'),
(4, 'spatel2262001@gmail.com', '3b6beb51e76816e632a40d440eab0097', 'Thane Maharashtra India', 9819535754, 'Shubham Patel', 'default.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_foreign` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
