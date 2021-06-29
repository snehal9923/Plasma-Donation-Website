-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 28, 2021 at 07:29 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donateplasma`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `save_life_date` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `gender`, `email`, `city`, `dob`, `contact_no`, `save_life_date`, `password`, `blood_group`) VALUES
(4, 'Siddhantika Thorat', 'Male', 'avidas00@gmail.com', 'Ichalkaranji', '2000-10-20', '9923270095', '2021-03-25', 'e10adc3949ba59abbe56e057f20f883e', 'B-'),
(5, 'Rashi agrawal  ', 'Male', 'snwehaldas0093@icloud.com', 'Ichalkaranji', '2000-03-02', ' 987654321', '2021-05-21', 'e10adc3949ba59abbe56e057f20f883e', 'A-'),
(6, 'Albina Attar ', 'Female', 'snehalvdas0093@gmail.com', 'Kolhapur', '2000-11-17', ' 942267944', '2021-05-25', 'e10adc3949ba59abbe56e057f20f883e', 'B-'),
(7, 'Snehal Das', 'Female', 'snehaldas0093@icloud.com', 'Kolhapur', '2000-09-17', '9876789821', '0', 'e10adc3949ba59abbe56e057f20f883e', 'B+'),
(8, 'Firdous sayyad', 'Male', 'snehalvvvdas0093@icloud.com', 'Kolhapur', '2000-11-15', '1234567898', '0', 'e10adc3949ba59abbe56e057f20f883e', 'B+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
