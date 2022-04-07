-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 05:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_name` varchar(10) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_name`, `admin_password`) VALUES
('Admin', 'admin123'),
('Help-desk', 'helpdesk12');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `booking_id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `guest` enum('guest1','guest2','guest3','guest4','guest5','guest6','guest7','guest8','guest9','guest10') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`booking_id`, `name`, `email`, `mobile`, `date`, `time`, `guest`) VALUES
(2, 'anandita', 'anandita2916@gmail.com', 7982262575, '2021-11-11', '11:30:00.000000', 'guest5'),
(3, 'ISHA', 'ISHA2916@gmail.com', 5678945678, '2021-11-02', '05:30:00.000000', 'guest5'),
(255, 'anjali jain', 'anjalijain2916@gmail.com', 9289902532, '2021-12-02', '23:04:00.000000', 'guest7');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'anjali jain', 'anjalijain2916@gmail.com', 'our birthday party experience', 'we were very unhappy with the overall service.Our party was scheduled to begin at 4:00; however at 3:55,the room was not ready'),
(2, 'geetanshi', 'geetanshi@gmail.com', 'i am writing this to thank you', 'it is fantastic and memorable evening for me and my friends at your cafe .i would love to see you continue offering such an appreciating dining experience.'),
(3, 'anandita', 'anandita11@gmail.com', 'question', 'is there any discounts or special offers?');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `name`, `email`, `website`, `message`) VALUES
(1, 'Sonali', 'sonali2916@gmail.com', '', 'The food we ordered was great .the quality was good. The package was hot and on time meal. Overall experience is commendable and the pizza stands out recomend'),
(2, 'Mahima Khandelwal', 'mahimakhandelwal@gmail.com', '', 'The place is good for quick bites. We ordered sandwich and iced tea. Sad that we live very far from this place otherwise would have visited it very frequently for filling my stomach with tasty and healthy snacks.'),
(3, 'Megha Rani', 'megharani@gmail.com', '', 'It\'s an average place to eat. Veg patty and cutlet is the only thing i liked. Chicken roll is the worst i couldn\'t even eat the half of ir. They really need to upgrade their items and improve the taste'),
(4, 'Yashika Saluja', 'yashikasaluja@gmail.com', '', 'Best place for snacks and evening cravings♥️ i love sandwich and spring roll!! Aloo party, Veg burger and and chicken kebab roll is something for which i can visit this place every day!'),
(5, 'Piyush Joshi', 'piyushjoshi@gmail.com', '', 'Old is always gold.This was the place I used to go for my bites.Seriously guys loved it.All andrewsians love it I know it very well.Feeling nostalgic .');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `password` varchar(7) NOT NULL,
  `confirmpassword` varchar(7) NOT NULL,
  `gender` enum('male','female','perfer not to say','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `phonenumber`, `password`, `confirmpassword`, `gender`) VALUES
(1, 'ANJALI', 'ANJALI', 'anjalijain2916@gmail', 2147483647, '123456', '123456', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `booking_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
