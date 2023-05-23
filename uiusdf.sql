-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2023 at 07:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiusdf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(500) NOT NULL,
  `admin_email` varchar(500) NOT NULL,
  `adminpass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `adminpass`) VALUES
(1, 'Mahmud', 'mmoeen30@gmail.com', '123d');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `e_title` varchar(500) NOT NULL,
  `e_desc` varchar(1000) NOT NULL,
  `e_date` date NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_title`, `e_desc`, `e_date`, `image`) VALUES
(2, 'Arduino Workshop', 'This is a workshop on Arduino Microcontroller. Participants will learn the basics of an Arduino functionality', '2022-07-18', 'Images/event-arduino.jpg'),
(3, 'Trinomial Podcast', 'Hello, people!\r\nUIU Skill Development Forum (UIUSDF) is excited to invite you to\r\nCareer Talk With The Trinomial Podcast in association with UIU CCC. This event is open for all university, college, and school students.\r\n\r\nOur honorable guests are the legendary host trio of The Trinomial Podcast who have brought upon a new perspective on how we consume digital content.\r\n', '2021-12-21', 'Images/event-trinomial.jpg'),
(5, 'IoT & Applications for Beginners', 'Hello, people!\r\nUIU Skill Development Forum (UIUSDF) is excited to invite you to\r\nIoT & Applications for Beginners in association with UIU CCC. This event is open for all university, college, and school students.\r\n', '2022-08-24', 'Images/event-iot.jpg'),
(6, 'Career in IT: Cyber Security', 'Hello, people!\r\nUIU Skill Development Forum (UIUSDF) is excited to invite you to\r\nCareer in IT: Cyber Security in association with UIU CCC. This event is open for all university, college, and school students.\r\n', '2022-08-22', 'Images/seminar.jpg.jpg'),
(7, 'Deploy your site with Redhat', 'UIU Skill Development Forum (UIUSDF) is excited to invite you to Career Talk With The Trinomial Podcast in association with UIU CCC. This event is open for all university, college, and school students.', '2022-08-17', 'Images/event-redhat.jpg'),
(8, 'Cyber Wales Webiner', 'UIU Skill Development Forum (UIUSDF) is excited to invite you to Career Talk With The Trinomial Podcast in association with UIU CCC. This event is open for all university, college, and school students.', '2022-02-06', 'Images/event-wales.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `pid` int(11) NOT NULL,
  `pname` varchar(500) NOT NULL,
  `prole` varchar(500) NOT NULL,
  `uiuid` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`pid`, `pname`, `prole`, `uiuid`, `image`) VALUES
(1, 'Mahmudul Hasan', 'Assistant Secretary', 11182061, ''),
(2, 'Md. Saiful Islam', 'President', 11172061, ''),
(3, 'Sabitur Rahman', 'Executive', 11192011, ''),
(4, 'Moeen', 'General Member', 11182062, ''),
(5, 'New member', 'General Member', 11182064, '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `uiuid` varchar(200) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `skills` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uiuid`, `name`, `email`, `skills`) VALUES
('', '', '', ''),
('011181081', 'Tishme Hasan', 'thasan@gmail.com', ''),
('01182064', 'Doha Mazlish', 'doha@bscse.uiu.ac.bd', 'Web designing');

-- --------------------------------------------------------

--
-- Table structure for table `tarunnya`
--

CREATE TABLE `tarunnya` (
  `id` int(11) NOT NULL,
  `email` varchar(400) NOT NULL,
  `uiuid` varchar(400) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarunnya`
--

INSERT INTO `tarunnya` (`id`, `email`, `uiuid`, `name`) VALUES
(1, 'mmoeen30@gmail.com', '011182061', 'Mahmud'),
(2, 'karimuddin@gmail.com', '011182081', 'Karimuddin'),
(3, 'kuddus@gmail.com', '011182011', 'Kuddus Miah'),
(4, 'zuhayir@gmail.com', '011182001', 'Zuhayir'),
(5, 'andrei@gmail.com', '01182081', 'Andrei Tarkovsky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uiuid`);

--
-- Indexes for table `tarunnya`
--
ALTER TABLE `tarunnya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tarunnya`
--
ALTER TABLE `tarunnya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
