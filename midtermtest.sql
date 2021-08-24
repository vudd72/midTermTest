-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 10:06 AM
-- Server version: 8.0.17
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midtermtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhba`
--

CREATE TABLE `danhba` (
  `STT` int(11) NOT NULL,
  `Hoten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ChucVu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DTCoQuan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DTDD` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhba`
--

INSERT INTO `danhba` (`STT`, `Hoten`, `ChucVu`, `DTCoQuan`, `Email`, `DTDD`) VALUES
(1, 'Garret Burchmore', 'Engineer IV', '990-793-84', 'gburchmore0@freewebs', '658-259-00'),
(2, 'Ebenezer Eva', 'Product Engineer', '758-973-36', 'eeva1@phpbb.com', '507-236-25'),
(3, 'Carey Leggin', 'Teacher', '233-997-57', 'cleggin2@tuttocitta.', '781-600-71'),
(4, 'Lurleen Waberer', 'VP Product Management', '639-339-93', 'lwaberer3@1und1.de', '700-869-35'),
(5, 'Pincas Fosh', 'GIS Technical Architect', '553-847-37', 'pfosh4@skyrock.com', '589-166-34'),
(6, 'Nanette Goldspink', 'Librarian', '371-360-21', 'ngoldspink5@alexa.co', '715-941-30'),
(7, 'Ezequiel Sacker', 'Human Resources Manager', '608-202-97', 'esacker6@gravatar.co', '456-407-31'),
(8, 'Mair MacGeaney', 'Senior Cost Accountant', '583-426-85', 'mmacgeaney7@ezineart', '362-810-16'),
(9, 'Oneida Corbishley', 'VP Quality Control', '253-280-95', 'ocorbishley8@shutter', '225-270-65'),
(10, 'Antonie Anker', 'Chief Design Engineer', '194-338-63', 'aanker9@live.com', '735-448-62');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhba`
--
ALTER TABLE `danhba`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhba`
--
ALTER TABLE `danhba`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
