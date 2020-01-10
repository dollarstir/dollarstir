-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2020 at 05:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dollarstir`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text DEFAULT NULL,
  `dateadded` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `contact`, `email`, `message`, `dateadded`) VALUES
(1, 'Dollarstir', '0556676471', 'kpin463@gmail.com', 'I love this website', '31st December,2019'),
(2, 'arhin bernard', '0545470803', 'arhinbernard@gmail.com', 'hi, these is such a wonderful website', '9th January,2020'),
(3, 'arhin bernard', '0545470803', 'arhinbernard@gmail.com', 'hi, these is such a wonderful website', '9th January,2020'),
(4, 'sdgsgs', '3523534352', 'kpin463@gmail.com', 'vgngfgn', '9th January,2020'),
(5, 'sdgsgs', '35235343521', 'kpin463@gmail.com', 'vgngfgn', '9th January,2020'),
(6, 'sdgsgs', '352353435211', 'kpin463@gmail.com', 'vgngfgn', '9th January,2020'),
(7, 'sdgsgs', '3523534352113', 'kpin463@gmail.com', 'vgngfgn', '9th January,2020'),
(8, 'ps/csc/12/0001', '0556676471', 'kpin463@gmail.com', 'fvfdfdv', '9th January,2020'),
(9, 'PS/csc/12/0011', '0556676471', 'kpin463@gmail.com', 'fvfdfdv', '9th January,2020');

-- --------------------------------------------------------

--
-- Table structure for table `pf`
--

CREATE TABLE `pf` (
  `id` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `depo` varchar(200) NOT NULL,
  `customer` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `df` varchar(200) NOT NULL,
  `pic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pf`
--

INSERT INTO `pf` (`id`, `pname`, `depo`, `customer`, `contact`, `category`, `website`, `df`, `pic`) VALUES
(18, 'Perez investment', 'Perez investment is a real estate agency that rent and sell both lands and houses', 'Business Mike', '055566723', '2', 'http://www.perezinvestment.com', '27th December, 2019', 'upload/Screenshot 2019-12-25 at 3.23.13 PM-1577471232.png'),
(19, 'Halidas College Of Technology', 'Halidas College is A Tech institute that teaches Many computer related Courses . They are located at Garu in the Upper West Region', 'Halidas Dasmani', '0556676471', '1', 'http://www.halidazghana.com', '27th December, 2019', 'upload/Screenshot 2019-12-25 at 4.43.11 AM-1577472696.png'),
(20, 'Gilgal Pentecostal Prayer Ministry', 'Gilgal Pentecostal Is a Church Founded By Apostle Anarfi Kwarteng. It is Located at Dunkwa- offin', 'Christian Anarfi kwarteng', '0556676434', '1', 'http://gppmi.org', '27th December, 2019', 'upload/Screenshot 2019-12-25 at 4.41.22 AM-1577476455.png'),
(21, 'Sankofa photography', 'Sankofa Photography is One of the most known Photography Company in Ghana .Main office at Accra and others office is located at the University of Cape Coast . CODE Building', 'Sir Jason Kumabia', '0557363411', '1', 'http://www.teamsankofagh.com', '27th December, 2019', 'upload/Screenshot 2019-12-25 at 4.45.11 AM-1577476694.png'),
(22, 'Knowledge Enlighten', 'The aim, goal and objective are to provide to the country product developed by young entrepreneurs.', 'Mr Daniel Ewusi', '0556267002', '1', 'http://www.knowledgeenlighten.com', '27th December, 2019', 'upload/Screenshot 2019-12-27 at 10.39.43 PM-1577486789.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `depo` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `pic1` varchar(200) NOT NULL,
  `pic2` varchar(200) NOT NULL,
  `pic3` varchar(200) NOT NULL,
  `ptype` varchar(200) NOT NULL,
  `developer` varchar(200) NOT NULL,
  `devcontact` varchar(200) NOT NULL,
  `df` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `post` varchar(200) NOT NULL,
  `timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `post`, `timing`) VALUES
(1, 'Kofi', '1577748120'),
(2, 'dollar', '1577748240'),
(3, 'nanna', '1577748480'),
(4, 'Ghannan must go', '1577748780'),
(5, 'lllll', '1577748960'),
(6, 'Bismark', '1577750040'),
(7, 'Mammpoo', '1577750100'),
(8, 'hihiiihi9', '1578046500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pf`
--
ALTER TABLE `pf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pf`
--
ALTER TABLE `pf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
