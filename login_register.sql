-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 06:13 PM
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
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `phone_number`, `password`, `gender`) VALUES
(0, 'Aldrin Conde', 'aldrinnyl.conde', 'aldrinnyl123@gmail.com', '+639638121005', '$2y$10$9/V.0o/ZQo6egAP0i8TqnemqVHyLCDt.V98l/nAtrAeDJqZ/HqSP2', 'on'),
(0, 'Aldrin Conde', 'nayl.aep', 'aldrinnyl123@gmail.com', '+639638121005', '$2y$10$bYkw3oADZ8.8nJRZwx7cGecxSzrEBy/YwahpqhdwUDIALs4F3FZMS', 'on'),
(0, 'Aldrin Conde', 'nyylll.w', 'kimtaehyung@gmail.com', '+639638121005', '$2y$10$kUNyzMhztOdWflOvrl73Aem6uPeGJwGLMkW5gd1XaCAYwH2wryhoW', 'on');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
