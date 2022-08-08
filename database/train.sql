-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 02:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `source` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`source`, `destination`) VALUES
('Attaba', ''),
('Test Source Station', 'Test Destination Station'),
('megz', 'wegz'),
('Sheraton', 'Tagamoa');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticketID` int(200) NOT NULL,
  `source` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `trip_type` varchar(200) NOT NULL,
  `trip_class` varchar(200) NOT NULL,
  `ticketCount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticketID`, `source`, `destination`, `date`, `time`, `trip_type`, `trip_class`, `ticketCount`) VALUES
(5, 'station1', 'station5', '2022-08-04', '13:55', 'One way trip', '1st - Class Carriage', 0),
(6, 'station2', 'station1', '2022-08-05', '15:01', 'One way trip', '2nd - Class Carriage', 0),
(7, 'station3', 'station2', '2022-08-05', '00:06', 'One way trip', '2nd - Class Carriage', 5),
(8, 'station5', 'station6', '2022-08-04', '14:09', 'Two way trip', '1st - Class Carriage', 1),
(9, 'test', '></option><option value = Test Destination Station', '2022-08-16', '01:51', 'Two way trip', '2nd - Class Carriage', 1),
(10, 'Attaba', 'Test', '2022-08-11', '01:53', 'Two way trip', '1st - Class Carriage', 1),
(11, 'Attaba', 'Test', '2022-08-11', '01:53', 'Two way trip', '1st - Class Carriage', 1),
(12, 'Test', 'Test', '2022-08-11', '13:57', 'One way trip', '1st - Class Carriage', 1),
(13, 'Test', 'wegz', '2022-08-03', '02:04', 'One way trip', '2nd - Class Carriage', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`, `user_phone`) VALUES
(1, 'Magdy', 'youssef@magdy.com', 'password', 11),
(2, 'asd', 'asd', 'asd', 0),
(3, 'asd', 'asd', 'asd', 0),
(4, 'test2', 'test2', 'test2', 0),
(5, '123', '123', '123', 123),
(6, 'Matchmakers', '123', 'Youssef1_abouyo', 123),
(7, 'Youssef', 'yomagdy555666@gmail.com', 'qweasd123', 0),
(8, 'youssef homie', 'homie@homie.homie', 'homie', 2147483647),
(9, 'Youssef', 'test', 'qweasd123', 0),
(10, 'Youssef', '123', 'qweasd123', 123),
(11, 'youssef@magdy.com', '', 'password', 0),
(12, 'youssef@magdy.com', '', 'password', 0),
(13, 'sas', '', 'password', 0),
(14, '', '', 'password', 0),
(15, '', '', 'password', 0),
(16, 'asd', '', 'password', 0),
(17, '', '', 'password', 0),
(18, '123', '', 'password', 0),
(19, 'a12', '', 'password', 1140523092),
(20, 'youssef@magdy.com', '', 'password', 1140523092),
(21, '12', '', 'password', 1140523092),
(22, 'youssef@magdy.com', '', 'password', 0),
(23, 'youssef@magdy.com', '', 'password', 0),
(24, 'youssef@magdy.com', '', 'password', 0),
(25, 'youssef@magdy.com', 'asd@asd.ai', 'password', 1140523092),
(26, 'youssef@magdy.com', '', 'password', 0),
(27, 'youssef@magdy.com', 'asd@asd.ai', 'qweasd123', 1140523092),
(28, 'youssef@magdy.com', 'youssef@magdy.com121212', 'qweasd123', 1140523092),
(29, 'Ahmed', 'youssef@magdy.com', 'qweqweqwe', 1140523092),
(30, 'q123', 'youssef@magdy.com', 'qweqweqwe', 1140523092),
(31, 'a12', 'a@a.com', 'qweasd123', 1140523092);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticketID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticketID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
