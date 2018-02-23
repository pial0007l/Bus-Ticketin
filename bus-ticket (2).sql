-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2017 at 06:04 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus-ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_name`, `password`) VALUES
('bob', 'bob');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(11) NOT NULL,
  `bus_name` varchar(50) NOT NULL,
  `route` varchar(50) NOT NULL,
  `departuer_date` date NOT NULL,
  `departure_time` time NOT NULL,
  `starting_counter` varchar(50) NOT NULL,
  `ending_counter` varchar(50) NOT NULL,
  `fare` int(10) DEFAULT NULL,
  `coach_type` varchar(10) NOT NULL,
  `arival_Time` time DEFAULT NULL,
  `seat_Available` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_name`, `route`, `departuer_date`, `departure_time`, `starting_counter`, `ending_counter`, `fare`, `coach_type`, `arival_Time`, `seat_Available`) VALUES
(32, 'Bus 2', 'Dhaka-Chittagong', '2017-11-16', '22:18:28', 'Dhaka', 'Syllet', 700, 'AC', '04:18:28', 32),
(33, 'Bus 2', 'Dhaka-Syllet', '2017-11-09', '23:47:41', 'Dhaka', 'Syllet', 700, 'AC', '23:47:41', 32),
(34, 'Bus 3', 'Dhaka-Chittagong', '2017-11-22', '01:43:07', 'Dhaka', 'Syllet', 500, 'AC', '01:43:07', 32),
(35, 'Bus 3', 'Dhaka-Syllet', '2017-11-17', '20:13:16', 'Dhaka', 'Syllet', 700, 'AC', '01:13:16', 28);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `Passenger_id` int(11) NOT NULL,
  `Passenger_name` varchar(50) NOT NULL,
  `Mobile` int(15) NOT NULL,
  `Age` int(2) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Nationality` varchar(50) DEFAULT NULL,
  `Boarding_point` varchar(50) DEFAULT NULL,
  `Droping_point` varchar(50) DEFAULT NULL,
  `Departure_date` date DEFAULT NULL,
  `Boarding_time` time DEFAULT NULL,
  `Payment_method` varchar(50) NOT NULL,
  `nid/pass` varchar(50) NOT NULL,
  `Bus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL,
  `seat_name` varchar(10) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `passenger_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `seat_name`, `bus_id`, `passenger_id`, `status`) VALUES
(29, 'A1', 32, NULL, 0),
(30, 'A2', 32, NULL, 0),
(31, 'A3', 32, NULL, 0),
(32, 'A4', 32, NULL, 0),
(33, 'B1', 32, NULL, 0),
(34, 'B2', 32, NULL, 0),
(35, 'B3', 32, NULL, 0),
(36, 'B4', 32, NULL, 0),
(37, 'C1', 32, NULL, 0),
(38, 'C2', 32, NULL, 0),
(39, 'C3', 32, NULL, 0),
(40, 'C4', 32, NULL, 0),
(41, 'D1', 32, NULL, 0),
(42, 'D2', 32, NULL, 0),
(43, 'd3', 32, NULL, 0),
(44, 'D4', 32, NULL, 0),
(45, 'E1', 32, NULL, 0),
(46, 'E2', 32, NULL, 0),
(47, 'E3', 32, NULL, 0),
(48, 'E4', 32, NULL, 0),
(49, 'F1', 32, NULL, 0),
(50, 'F2', 32, NULL, 0),
(51, 'F3', 32, NULL, 0),
(52, 'F4', 32, NULL, 0),
(53, 'G1', 32, NULL, 0),
(54, 'G2', 32, NULL, 0),
(55, 'G3', 32, NULL, 0),
(56, 'G4', 32, NULL, 0),
(57, 'H1', 32, NULL, 0),
(58, 'H2', 32, NULL, 0),
(59, 'H3', 32, NULL, 0),
(60, 'H4', 32, NULL, 0),
(61, 'A1', 33, NULL, 0),
(62, 'A2', 33, NULL, 0),
(63, 'A3', 33, NULL, 0),
(64, 'A4', 33, NULL, 0),
(65, 'B1', 33, NULL, 0),
(66, 'B2', 33, NULL, 0),
(67, 'B3', 33, NULL, 0),
(68, 'B4', 33, NULL, 0),
(69, 'C1', 33, NULL, 0),
(70, 'C2', 33, NULL, 0),
(71, 'C3', 33, NULL, 0),
(72, 'C4', 33, NULL, 0),
(73, 'D1', 33, NULL, 1),
(74, 'D2', 33, NULL, 1),
(75, 'd3', 33, NULL, 0),
(76, 'D4', 33, NULL, 0),
(77, 'E1', 33, NULL, 0),
(78, 'E2', 33, NULL, 0),
(79, 'E3', 33, NULL, 0),
(80, 'E4', 33, NULL, 0),
(81, 'F1', 33, NULL, 0),
(82, 'F2', 33, NULL, 0),
(83, 'F3', 33, NULL, 0),
(84, 'F4', 33, NULL, 0),
(85, 'G1', 33, NULL, 0),
(86, 'G2', 33, NULL, 0),
(87, 'G3', 33, NULL, 0),
(88, 'G4', 33, NULL, 0),
(89, 'H1', 33, NULL, 0),
(90, 'H2', 33, NULL, 0),
(91, 'H3', 33, NULL, 0),
(92, 'H4', 33, NULL, 0),
(93, 'A1', 34, NULL, 0),
(94, 'A2', 34, NULL, 0),
(95, 'A3', 34, NULL, 0),
(96, 'A4', 34, NULL, 0),
(97, 'B1', 34, NULL, 0),
(98, 'B2', 34, NULL, 0),
(99, 'B3', 34, NULL, 0),
(100, 'B4', 34, NULL, 0),
(101, 'C1', 34, NULL, 0),
(102, 'C2', 34, NULL, 0),
(103, 'C3', 34, NULL, 0),
(104, 'C4', 34, NULL, 0),
(105, 'D1', 34, NULL, 0),
(106, 'D2', 34, NULL, 0),
(107, 'd3', 34, NULL, 0),
(108, 'D4', 34, NULL, 0),
(109, 'E1', 34, NULL, 0),
(110, 'E2', 34, NULL, 0),
(111, 'E3', 34, NULL, 0),
(112, 'E4', 34, NULL, 0),
(113, 'F1', 34, NULL, 0),
(114, 'F2', 34, NULL, 0),
(115, 'F3', 34, NULL, 0),
(116, 'F4', 34, NULL, 0),
(117, 'G1', 34, NULL, 0),
(118, 'G2', 34, NULL, 0),
(119, 'G3', 34, NULL, 0),
(120, 'G4', 34, NULL, 0),
(121, 'H1', 34, NULL, 0),
(122, 'H2', 34, NULL, 0),
(123, 'H3', 34, NULL, 0),
(124, 'H4', 34, NULL, 0),
(125, 'A1', 35, NULL, 0),
(126, 'A2', 35, NULL, 0),
(127, 'A3', 35, NULL, 0),
(128, 'A4', 35, NULL, 0),
(129, 'B1', 35, NULL, 0),
(130, 'B2', 35, NULL, 0),
(131, 'B3', 35, NULL, 0),
(132, 'B4', 35, NULL, 0),
(133, 'C1', 35, NULL, 0),
(134, 'C2', 35, NULL, 0),
(135, 'C3', 35, NULL, 0),
(136, 'C4', 35, NULL, 0),
(137, 'D1', 35, NULL, 0),
(138, 'D2', 35, NULL, 0),
(139, 'd3', 35, NULL, 0),
(140, 'D4', 35, NULL, 0),
(141, 'E1', 35, NULL, 0),
(142, 'E2', 35, NULL, 0),
(143, 'E3', 35, NULL, 0),
(144, 'E4', 35, NULL, 0),
(145, 'F1', 35, NULL, 0),
(146, 'F2', 35, NULL, 0),
(147, 'F3', 35, NULL, 0),
(148, 'F4', 35, NULL, 0),
(149, 'G1', 35, NULL, 0),
(150, 'G2', 35, NULL, 0),
(151, 'G3', 35, NULL, 0),
(152, 'G4', 35, NULL, 0),
(153, 'H1', 35, NULL, 1),
(154, 'H2', 35, NULL, 1),
(155, 'H3', 35, NULL, 1),
(156, 'H4', 35, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User_name`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`Passenger_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `Passenger_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
