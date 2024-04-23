-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 03:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backendics2609`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `datehired` date NOT NULL,
  `applicantstatus` enum('Pending','Approved','Denied') NOT NULL DEFAULT 'Pending',
  `totalApplicants` int(11) NOT NULL DEFAULT 0,
  `approvedApplicants` int(11) NOT NULL DEFAULT 0,
  `deniedApplicants` int(11) NOT NULL DEFAULT 0,
  `organization` enum('UST Society of Information Technology Enthusiasts','UST Computer Science Society','UST Information Systems Society','UST Cisco Networking Academy Gateway CICS','UST Thomasian Gaming Society','UST ICS Commission on Elections','UST ICS Student Council','UST Pax Romana - ICS Unit','-') DEFAULT '-',
  `program` enum('Bachelor of Science in Information Technology','Bachelor of Science in Computer Science','Bachelor of Science in Information Systems','-') DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `firstname`, `lastname`, `email`, `datehired`, `applicantstatus`, `totalApplicants`, `approvedApplicants`, `deniedApplicants`, `organization`, `program`) VALUES
(2022023123, 'Test', 'Account', 'test.cics@ust.edu.ph', '2024-04-20', 'Denied', 6, 2, 4, 'UST Society of Information Technology Enthusiasts', 'Bachelor of Science in Information Technology'),
(2022166370, 'Test', 'Account', 'test.cics@ust.edu.ph', '2024-04-20', 'Approved', 6, 2, 4, '', ''),
(2022166371, 'Test', 'Account', 'test.cics@ust.edu.ph', '2024-04-20', 'Denied', 6, 2, 4, '', ''),
(2022166372, 'Test', 'Account', 'test.cics@ust.edu.ph', '2024-04-20', 'Denied', 6, 2, 4, '', ''),
(2022166373, 'Test', 'Account', 'test.cics@ust.edu.ph', '2024-04-20', 'Denied', 6, 2, 4, '', ''),
(2147483647, 'Test', 'Account', 'test.cics@ust.edu.ph', '2024-04-20', 'Approved', 6, 2, 4, 'UST Society of Information Technology Enthusiasts', 'Bachelor of Science in Information Technology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
