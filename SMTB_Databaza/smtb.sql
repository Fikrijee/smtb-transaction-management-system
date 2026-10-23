-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 07:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smtb`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksionet_smtb`
--

CREATE TABLE `transaksionet_smtb` (
  `id` int(11) NOT NULL,
  `LlogariaBurimore_SMTB` varchar(255) NOT NULL,
  `LlogariaPranuese_SMTB` varchar(255) NOT NULL,
  `ShumaTransaksionit_SMTB` varchar(255) NOT NULL,
  `ValutaTransaksionit_SMTB` varchar(255) NOT NULL,
  `LlojiTransaksionit_SMTB` varchar(255) NOT NULL,
  `DataTransaksionit_SMTB` varchar(255) NOT NULL,
  `StatusiTransaksionit_SMTB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksionet_smtb`
--

INSERT INTO `transaksionet_smtb` (`id`, `LlogariaBurimore_SMTB`, `LlogariaPranuese_SMTB`, `ShumaTransaksionit_SMTB`, `ValutaTransaksionit_SMTB`, `LlojiTransaksionit_SMTB`, `DataTransaksionit_SMTB`, `StatusiTransaksionit_SMTB`) VALUES
(1, '1234567890  ', '0987654321', '100.00', 'USD', 'Transferim', '2024-05-27', 'Suksesshëm'),
(2, '9876543210', '0123456789', '50.00', 'EUR', 'Transferim', '2024-05-28', 'Suksesshëm'),
(3, '3456789012', '4567890123', '150.00', 'USD', 'Depozitë', '2024-05-29', 'Në pritje'),
(4, '3456789012', '4567890123', '150.00', 'USD', 'Transferim', '2024-05-29', 'Anuluar'),
(5, '1234567890', '0987654321', '500.00', 'EUR', 'Pagesë', '2024-05-27', 'Suksesshëm'),
(6, '9876543210', '0123456789', '250.00', 'USD', 'Para tërheqje', '2024-05-28', 'Në pritje'),
(7, '9876543210', '5678901234', '250.00', 'USD', 'Transferim', '2024-05-28', 'Anuluar'),
(18, 'er', 'rf', 'sf', '', 'fsd', '0431-03-04', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksionet_smtb`
--
ALTER TABLE `transaksionet_smtb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksionet_smtb`
--
ALTER TABLE `transaksionet_smtb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
