-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 04:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cars`
--

CREATE TABLE `tbl_cars` (
  `car_id` int(11) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `car_name` varchar(200) NOT NULL,
  `car_clr` varchar(200) NOT NULL,
  `car_reg_no` varchar(200) NOT NULL,
  `car_reg_yr` varchar(200) NOT NULL,
  `car_note` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cars`
--

INSERT INTO `tbl_cars` (`car_id`, `manu_id`, `car_name`, `car_clr`, `car_reg_no`, `car_reg_yr`, `car_note`) VALUES
(16, 1, 'WagonR', 'Brown', 'Mh050439', '2016', 'Best in class'),
(17, 1, 'WagonR 1.0', 'Brown', 'Mh050439', '2016', 'Best in class'),
(18, 1, 'Baleno', 'Blue', 'ksajdk', '2019', 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cars_images`
--

CREATE TABLE `tbl_cars_images` (
  `id` int(11) NOT NULL,
  `car_img` text NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cars_images`
--

INSERT INTO `tbl_cars_images` (`id`, `car_img`, `car_id`) VALUES
(1, '../car_images/545614_422870814399837_368458323_n.jpg', 0),
(2, '../car_images/545614_422870814399837_368458323_n.jpg', 12),
(3, '545614_422870814399837_368458323_n.jpg', 13),
(4, '545614_422870814399837_368458323_n.jpg', 14),
(5, '545614_422870814399837_368458323_n.jpg', 15),
(6, '545614_422870814399837_368458323_n.jpg', 16),
(7, '545614_422870814399837_368458323_n.jpg', 17),
(8, 'img1.png', 18),
(9, 'img2.png', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

CREATE TABLE `tbl_manufacture` (
  `id` int(11) NOT NULL,
  `manufacture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`id`, `manufacture`) VALUES
(1, 'Maruti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cars`
--
ALTER TABLE `tbl_cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `tbl_cars_images`
--
ALTER TABLE `tbl_cars_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cars`
--
ALTER TABLE `tbl_cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_cars_images`
--
ALTER TABLE `tbl_cars_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
