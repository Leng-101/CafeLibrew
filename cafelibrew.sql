-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 09:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafelibrew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admincafelibrew', 'admincafelibrew');

-- --------------------------------------------------------

--
-- Table structure for table `user_reserveform`
--

CREATE TABLE `user_reserveform` (
  `reservation_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `time_begins` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `time_ends` text NOT NULL,
  `book1` text NOT NULL,
  `book2` text NOT NULL,
  `book3` text NOT NULL,
  `book4` text NOT NULL,
  `beverage1` varchar(255) NOT NULL,
  `pastry1` varchar(255) NOT NULL,
  `beverage2` varchar(255) NOT NULL,
  `pastry2` varchar(255) NOT NULL,
  `admin_status` varchar(255) NOT NULL,
  `admin_note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reserveform`
--

INSERT INTO `user_reserveform` (`reservation_id`, `name`, `contact_number`, `time_begins`, `email`, `date`, `time_ends`, `book1`, `book2`, `book3`, `book4`, `beverage1`, `pastry1`, `beverage2`, `pastry2`, `admin_status`, `admin_note`) VALUES
(1, 'Keziah Dela Cruz', 1234, '7:00 AM', 'kezdc@gmail.com', '2022-10-26', '5:00 PM', 'Bucket List to Love by C.P. Santi', 'The Sweetness of Water by Nathan Harris', 'The Kaiju Preservation Society by John Scalzi', 'The Fifth Season by N.K. Jemisin', 'Lungo Coffee', 'Potato Bread', 'Coconut Milkshake', 'Blueberry Cheesecake', 'approved', 'Thank you for choosing Cafe Librew. <3'),
(2, 'Mika Dennise', 0, '7:00 AM', 'mikadd@gmail.com', '2022-10-28', '2:00 PM', 'none', 'The Remains of the Day by Kazuo Ishiguro', 'How High We Go in the Dark by Sequoia Nagamatsu', 'none', 'none', 'none', 'none', 'Blueberry Cheesecake', 'approved', ''),
(7, 'Christine Barbara', 988888888, '7:00 AM', 'Chris@gmail.com', '2022-10-21', '9:00 AM', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'approved', 'We are happy to see you!'),
(11, 'Patricia Santiago', 123535353, '4:00 PM', 'pat@gmail.com', '2022-10-28', '10:00 PM', 'Bared to You by Sylvia Day', 'The Shadow of the Wind by Carlos Ruiz Zafon', 'none', 'The Fifth Season by N.K. Jemisin', 'none', 'Croissant', 'Coconut Milkshake', 'Strawberry Cake', 'approved', 'Thank you for choosing Cafe Librew.'),
(12, 'Mary Villia', 93535353, '7:00 AM', 'mary@gmail.com', '2022-10-26', '10:00 PM', 'Without Merit by Colleen Hoover', 'none', 'none', 'none', 'Galao Coffee', 'none', 'none', 'Tiramisu', 'approved', ''),
(13, 'Sofi DaFirst', 2147483647, '3:00 PM', 'sofi@gmail.com', '2022-11-15', '9:00 PM', 'Bared to You by Sylvia Day', 'The Dutch House by Ann Patchett', 'none', 'Redwall by Brian Jacques', 'Cookie Choco Frappe', 'none', 'Caramel Milkshake', 'Tiramisu', 'For approval', ''),
(14, 'Marshal Crossing', 2147483647, '7:00 AM', 'marshal@gmail.com', '2022-10-14', '9:00 AM', 'none', 'none', 'none', 'Assassins Apprentice by Robin Hobb', 'Irish Coffee', 'none', 'none', 'Blueberry Cheesecake', 'For approval', ''),
(15, 'Chloe Candie', 2147483647, '2:00 PM', 'chloe@gmail.com', '2022-10-18', '4:00 PM', 'none', 'none', 'Mondays Not Coming by Tiffany D. Jackson', 'none', 'none', 'Croissant', 'none', 'Strawberry Cake', 'For approval', ''),
(16, 'Dutch ConnorLou', 2147483647, '12:00 NN', 'ddd@gmail.com', '2022-11-04', '5:00 PM', 'none', 'none', 'none', '23 11 by Pilosopotasya', 'none', 'none', 'none', 'none', 'For approval', ''),
(17, 'Mirabel Madrigal', 2147483647, '1:00 PM', 'mirabel@gmail.com', '2022-10-27', '5:00 PM', 'none', 'none', 'none', 'The Falling Game (EndMira: Ice) by Alyloony', 'none', 'none', 'none', 'none', 'approved', 'We are excited for you to experience our service. '),
(18, 'Marble Crystal', 2147483647, '4:00 PM', 'marble@gmail.com', '2022-10-28', '9:00 PM', 'none', 'none', 'Sea of Tranquility by Emily St. John Mandel', 'none', 'Coffee Crumble', 'none', 'none', 'none', 'For approval', ''),
(19, 'Flurry Macintosh', 2147483647, '5:00 PM', 'flurryyyy@gmail.com', '2022-11-09', '8:00 PM', 'Bared to You by Sylvia Day', 'none', 'none', 'Dune by Frank Herbert', 'Coffee Crumble', 'none', 'none', 'Strawberry Cake', 'For approval', ''),
(20, 'Kazumi White', 2147483647, '2:00 PM', 'kazwhite@gmail.com', '2022-10-28', '8:00 PM', 'Til Death by Kate Evangelista', 'none', 'none', 'none', 'Vanilla Caramel Frappe', 'Whole Wheat Bread', 'none', 'none', 'For approval', ''),
(21, 'Paulene Reposo', 2147483647, '7:00 AM', 'pau@gmail.com', '2022-10-26', '3:00 PM', 'Eleanor & Park by Rainbow Rowell', 'none', 'none', 'none', 'Cookie Choco Frappe', 'Potato Bread', 'Chocolate Milkshake', 'Strawberry Cake', 'approved', 'Hello Pau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user_reserveform`
--
ALTER TABLE `user_reserveform`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_reserveform`
--
ALTER TABLE `user_reserveform`
  MODIFY `reservation_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
