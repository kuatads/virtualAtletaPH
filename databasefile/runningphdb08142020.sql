-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 14, 2020 at 11:26 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `runningphdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `charities`
--

CREATE TABLE `charities` (
  `charity_id` int(11) NOT NULL,
  `charity_name` varchar(50) NOT NULL,
  `charity_description` text NOT NULL,
  `charity_address` text NOT NULL,
  `charity_contact_person` varchar(40) NOT NULL,
  `charity_contact_no` varchar(20) NOT NULL,
  `charity_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `idevents` int(11) NOT NULL,
  `event_title` varchar(45) DEFAULT NULL,
  `event_description` text,
  `event_start_date` datetime DEFAULT NULL COMMENT '		',
  `event_end_date` datetime DEFAULT NULL,
  `event_status` char(30) DEFAULT NULL,
  `event_photo` text,
  `event_date_added` datetime DEFAULT NULL,
  `event_date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events_progress`
--

CREATE TABLE `events_progress` (
  `event_progress_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `events_id` int(11) NOT NULL,
  `progress_photo` text NOT NULL,
  `distance` int(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idorders` int(11) NOT NULL,
  `eventid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `amount_paid` decimal(9,2) DEFAULT NULL,
  `date_paid` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `address` text,
  `username` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT 'avatar.png',
  `status` int(1) NOT NULL DEFAULT '0',
  `user_type` varchar(45) NOT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `password`, `email`, `mobile`, `address`, `username`, `photo`, `status`, `user_type`, `date_added`) VALUES
(1, 'Edsador R Tuyco', 'ed2da5a209557e7e23d43dd8b9cb13cc', 'etuyco@gmail.com', '09177933245', 'One Neo Bdlg. 26th St. 3rd Ave. BGC, Taguig City', 'etuyco', 'avatar.png', 1, 'Administrator', '2020-07-31'),
(2, 'Richelle Jean P. Tuyco', 'bb8b2af44d7129fae36e23c3e833bad2', 'richellejeanpantinople@yahoo.com', '09176211816', '700 Bldg. Unit C. Jeremiah St. Sun Valley, Paranaque City', 'rjtuyco', 'avatar.png', 1, 'User', '2020-07-31'),
(3, NULL, '13a37c9283cc9b0470ad0b54da443234', 'jeri@gmail.com', NULL, NULL, 'jeri', 'avatar.png', 0, 'User', '2020-07-19'),
(4, 'Pastor Patawaran', 'ed2da5a209557e7e23d43dd8b9cb13cc', 'rotsap@yahoo.com', '09182983176', 'Marikina City', 'rotsap2019', 'avatar.png', 1, 'User', '2020-08-02'),
(5, 'Mark Elloh Quinag', 'bb8b2af44d7129fae36e23c3e833bad2', 'mark@gmail.com', '09334649021', 'Batangas City', 'markelloh', 'avatar.png', 1, 'User', '2020-08-02'),
(8, 'Fullwin Group of Companies Inc', 'ed2da5a209557e7e23d43dd8b9cb13cc', 'info@fullwinph.com', '09215959021', 'One Neo Bdlg. 26th St. 3rd Ave. BGC, Taguig City', 'fullwin', 'avatar.png', 1, 'User', '2020-08-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charities`
--
ALTER TABLE `charities`
  ADD PRIMARY KEY (`charity_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`idevents`);

--
-- Indexes for table `events_progress`
--
ALTER TABLE `events_progress`
  ADD PRIMARY KEY (`event_progress_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idorders`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charities`
--
ALTER TABLE `charities`
  MODIFY `charity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `idevents` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events_progress`
--
ALTER TABLE `events_progress`
  MODIFY `event_progress_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idorders` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
