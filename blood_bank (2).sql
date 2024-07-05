-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 10:23 PM
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
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$itHVcmKdIzCv3n.1MZEJCe/VS8IKsVZe8b/3npO7e61VeCZZhydo.');

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `type`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'AB+'),
(4, 'AB-'),
(5, 'B+'),
(6, 'B-'),
(7, 'O+'),
(8, 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `id` int(11) NOT NULL,
  `requester_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `required_date` datetime NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `blood_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`id`, `requester_name`, `description`, `required_date`, `hospital_name`, `blood_group_id`) VALUES
(1, 'Paula Knight French', 'My ill daughter', '2030-10-23 00:00:00', 'Bafoussam-Bamenda', 0),
(2, 'Paula Knight French', 'To save an anaemic patient', '2035-06-23 00:00:00', 'Bafoussam-Bamenda', 3);

-- --------------------------------------------------------

--
-- Table structure for table `donated_blood`
--

CREATE TABLE `donated_blood` (
  `id` int(11) NOT NULL,
  `blood_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `donor` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `region` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'Miltech', '     leroyyung@gmail.com', 'How can i start with a donation?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `requester` tinyint(1) DEFAULT NULL,
  `birth_date` datetime NOT NULL,
  `blood_group` enum('A+','A-','AB+','AB-','B+','B-','O+','O-') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `phone_number`, `gender`, `requester`, `birth_date`, `blood_group`) VALUES
(1, 'Karson', 'Glover', 'Tressie14', 'your.email+fakedata14457@gmail.com', 'Expedita quae perspi', 'female', NULL, '2024-08-28 00:00:00', 'AB-'),
(2, 'Buffy', 'Huffman', 'temamumot', 'tawu@mailinator.com', 'At animi unde in as', 'female', NULL, '1990-11-05 00:00:00', 'AB+'),
(3, 'Serina', 'Richards', 'pyboqexy', 'demir@mailinator.com', 'Ex cillum saepe dolo', 'female', NULL, '1998-02-11 00:00:00', 'B+'),
(4, 'Berk Clark', 'Valdez', '', 'numagewa@mailinator.com', 'Tempore ad est obc', 'female', NULL, '1982-10-09 00:00:00', 'AB-'),
(5, 'Latifah Lopez', 'Tucker', '', 'nepocibok@mailinator.com', 'Omnis dolor quo cons', 'female', NULL, '1970-03-17 00:00:00', 'AB+'),
(6, 'Ryder Conner', 'Owens', '', 'vihubyhod@mailinator.com', 'In quis autem ut ame', 'male', NULL, '2006-10-03 00:00:00', 'A+'),
(7, 'Sean Hess', 'Ashley', '', 'podaco@mailinator.com', 'Et sapiente iusto qu', '', NULL, '1977-05-03 00:00:00', 'A+'),
(8, 'Ethan', 'Hopkins', 'mynujyl', 'jajacodygi@mailinator.com', 'Quos perferendis pro', 'female', NULL, '1970-01-31 00:00:00', ''),
(9, 'Azalia Vincent', 'Rush', '', 'tiquxy@mailinator.com', 'In facilis enim qui ', 'male', NULL, '1985-07-16 00:00:00', 'A+'),
(10, 'Paula Knight', 'French', '', 'jyma@mailinator.com', 'Ipsum vel nulla nih', 'male', NULL, '1996-03-07 00:00:00', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `user_id`, `city`, `postal_code`, `zip`) VALUES
(1, 1, 'Lacey', '41246-2227', '81450-7460'),
(2, 2, 'Suscipit maxime nihi', '97148', '75122'),
(3, 3, 'Quae molestiae nostr', '89214', '97528'),
(4, 4, 'Aliquid est anim rep', '93976', '28999'),
(5, 5, 'Ad sit sit hic labo', '89002', '91839'),
(6, 6, 'Dolor temporibus quo', '44823', '33967'),
(7, 7, 'Ullamco qui irure es', '31331', '16183'),
(8, 8, 'Modi sed quis nulla ', '51709', '18901'),
(9, 9, 'In saepe ea molestia', '51805', '19462'),
(10, 10, 'Aliquam autem omnis ', '82466', '62240');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donated_blood`
--
ALTER TABLE `donated_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donated_blood`
--
ALTER TABLE `donated_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
