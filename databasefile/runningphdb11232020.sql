-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2020 at 11:48 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

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
  `userID` int(11) NOT NULL,
  `event_title` varchar(45) DEFAULT NULL,
  `event_description` text,
  `event_start_date` date DEFAULT NULL COMMENT '		',
  `event_end_date` date DEFAULT NULL,
  `event_status` char(30) DEFAULT NULL,
  `event_photo` text,
  `event_date_added` datetime DEFAULT NULL,
  `event_date_updated` datetime DEFAULT NULL,
  `isDeleted` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`idevents`, `userID`, `event_title`, `event_description`, `event_start_date`, `event_end_date`, `event_status`, `event_photo`, `event_date_added`, `event_date_updated`, `isDeleted`) VALUES
(2, 1, 'Rizal 55 Virtual Run', '<p><b>Registration Period:</b> November 15, 2020 to December 15, 2020</p><p><b>Registration Guidelines:</b></p><p>1. Pay registration to the following bank account and send us or upload your photo for verifications.</p><p>2. Verification will take us 2 business days.</p><p><b>Run Guidelines:</b></p><p><b></b>1. Use any of the following running app. e.g Strava, Nike App, Suunto or Garmin.</p><p>2. Record your activity.</p><p>3. Upload your activity in your account in web running app.</p><p>4. Initial upload will be subject for verification.&nbsp;</p><p>5. Please indicate in you photo upload the following details: Distance, Time, Date.</p><p><br></p>', '2020-11-20', '2020-11-30', '1', 'rizal55.jpg', '2020-10-26 20:40:14', NULL, 0),
(3, 1, 'TK 100 Virtual Challenge', '<p>The TK100km VIRTUAL RUN CHALLENGE 2020 will officially start on December 01, 2020 and will end on December 31, 2020. The challenge is to complete the 100 kilometer in 30 days. A month-long run-jog-walk (at your own pace and place) mileage buildup activity either on roads or trails. In this version of our challenge, we will NOT ALLOW an activity using a TREADMILL and strictly NO RIDING.<br><br>• RULES and GUIDELINES •<br>Every participant is required to use a GPS running App which indicates the distance (in kilometers), time and date. You can download any App of your choice in your phone and screenshot your runs and take a selfie or goupie after every run to serve as your proof for that particular activity.<br><br>If you will use a GPS running watch, please take a picture of your watch after your run clearly showing the time, date and distance and incorporate it with your selfie or groupie.<br><br>To our participants who are ultra thirsty and wish to complete the challenge in a single stage run, you can do so. You know the drill in an ultramarathon run and we will take your online signup registration as your waiver. Same thing, record your run using a GPS running App or watch, take a screenshot and a selfie or groupie. NO CHEATING!<br><br>• IMPORTANT REMINDER •<br>Run safely, wear your proper running gears, hydrate and strictly follow your LGU health protocols and guidelines when outdoors. Stay Safe.<br><br>After your run, upload your activity in this FB group page: TK100km VIRTUAL RUN CHALLENGE 2020<br><br>When uploading or posting your run, use this format for us to easily monitor your progress. Attach your e-bib, your photo and the screenshot of the running app of that particular activity.<br><br></p>', '2020-12-01', '2020-12-31', '0', 'tk100.jpg', '2020-10-28 15:54:29', NULL, 0),
(4, 2, 'PASSIONATELY PINK', '<p><p><p><p><p><p><p><p>Run to help raise awareness and support for Cancer patients and their families. Support the Pink Project by running either 3km, 5km, 10km, 15km, or 25km anytime and anywhere within Oct 26 to Nov 15, 2020. Get these cool token of shirt and medal as a show of support for this very worthy cause.</p></p></p></p></p></p></p></p><p><p><p><p><p><p><br></p></p></p></p></p></p><br>', '2020-10-30', '2020-11-08', '1', 'pationately pink.jpg', '2020-10-30 13:39:13', NULL, 0),
(5, 2, 'Balik Alindog 21km RUn', '<p>Single stage 21km Run as new year blah2</p>', '2021-01-10', '2021-01-31', '0', 'tk100.jpg', '2020-11-08 19:46:55', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `events_payment`
--

CREATE TABLE `events_payment` (
  `idpayment` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `amount_paid` smallint(5) UNSIGNED NOT NULL,
  `payment_photo` text NOT NULL,
  `date_paid` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events_payment`
--

INSERT INTO `events_payment` (`idpayment`, `eventid`, `userid`, `amount_paid`, `payment_photo`, `date_paid`) VALUES
(1, 2, 4, 1500, 'depslip.png', '2020-11-03 13:39:57');

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
  `time` int(20) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events_progress`
--

INSERT INTO `events_progress` (`event_progress_id`, `user_id`, `events_id`, `progress_photo`, `distance`, `time`, `date_added`, `date_updated`, `status`) VALUES
(1, 4, 2, '', 6, 34, '2020-11-22 20:32:31', '2020-11-22 20:32:31', 0);

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
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `idparticipant` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`idparticipant`, `userid`, `eventid`, `payment_status`, `date_added`) VALUES
(1, 4, 2, 1, '2020-11-01 15:56:05'),
(2, 5, 2, 0, '2020-11-01 16:59:48');

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
(2, 'Richelle Jean P. Tuyco', 'bb8b2af44d7129fae36e23c3e833bad2', 'richellejeanpantinople@yahoo.com', '09176211816', '700 Bldg. Unit C. Jeremiah St. Sun Valley, Paranaque City', 'rjtuyco', 'avatar.png', 1, 'Event Administrator', '2020-07-31'),
(3, NULL, '13a37c9283cc9b0470ad0b54da443234', 'jeri@gmail.com', NULL, NULL, 'jeri', 'avatar.png', 0, 'User', '2020-07-19'),
(4, 'Pastor Patawaran', 'ed2da5a209557e7e23d43dd8b9cb13cc', 'rotsap@yahoo.com', '09182983176', 'Marikina City', 'rotsap2019', 'avatar.png', 1, 'User', '2020-08-02'),
(5, 'Mark Elloh Quinag', 'bb8b2af44d7129fae36e23c3e833bad2', 'mark@gmail.com', '09334649021', 'Batangas City', 'markelloh', 'avatar.png', 1, 'User', '2020-08-02'),
(8, 'Fullwin Group of Companies Inc', 'ed2da5a209557e7e23d43dd8b9cb13cc', 'info@fullwinph.com', '09215959021', 'One Neo Bdlg. 26th St. 3rd Ave. BGC, Taguig City', 'fullwin', 'avatar.png', 1, 'User', '2020-08-02'),
(9, NULL, 'ed2da5a209557e7e23d43dd8b9cb13cc', 'sul@gmail.com', NULL, NULL, 'sulmarl', 'avatar.png', 0, 'User', '2020-11-08'),
(10, NULL, 'bb8b2af44d7129fae36e23c3e833bad2', 'alex@gmail.com', NULL, NULL, 'alex', 'avatar.png', 0, 'User', '2020-11-08');

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
-- Indexes for table `events_payment`
--
ALTER TABLE `events_payment`
  ADD PRIMARY KEY (`idpayment`);

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
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`idparticipant`);

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
  MODIFY `idevents` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events_payment`
--
ALTER TABLE `events_payment`
  MODIFY `idpayment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_progress`
--
ALTER TABLE `events_progress`
  MODIFY `event_progress_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idorders` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `idparticipant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
