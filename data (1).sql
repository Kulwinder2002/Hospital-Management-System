-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 07:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `sno` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `DEmail` varchar(200) NOT NULL,
  `doctorName` varchar(200) NOT NULL,
  `charges` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `speciality` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`sno`, `name`, `email`, `DEmail`, `doctorName`, `charges`, `date`, `time`, `city`, `speciality`, `status`) VALUES
(3, 'misti', 'misti@gmail.com', 'john@gmail.com', 'john doe', '800', '07/30/2024', '08:00-8:30', 'chandigarh', 'neuro expert10+ experience', '0'),
(4, 'kiran', 'kiran@gmail.com', 'adam@gmail.com', 'Adam Lobester', '1000', '07/11/2024', '08:00-8:30', 'chandigarh', '10+ years experience in orhto', '1'),
(5, 'preeti', 'preeti@gmail.com', 'adam@gmail.com', 'Adam Lobester', '1000', '07/25/2024', '08:00-8:30', 'chandigarh', '10+ years experience in orhto', '0'),
(20, 'palvi', 'palvi@gmail.com', 'john@gmail.com', 'john doe', '800', '2024-07-25', '08:00-8:30', 'chandigarh', '- 10+years experience- MBBS, MS - General Surgery, MCh - Neuro Surgery- Neurosurgeon,Neurologist', '0'),
(21, 'kulwinder', 'kulwinder@gmail.com', 'john@gmail.com', 'john doe', '800', '2024-07-31', '08:00-8:30', 'patiala', '- 10+years experience- MBBS, MS - General Surgery, MCh - Neuro Surgery- Neurosurgeon,Neurologist', '0'),
(22, 'ravi', 'ravi@gmail.com', 'adam@gmail.com', 'Adam Lobester', '1000', '2024-07-24', '09:00-9:30', 'sangrur', '- 15+years experience- Orthopaedics & Joint Replacement, Arthroscopy & Sports Injury, Robotic Surgery- Orthologist', '0'),
(23, 'sita', 'sita@gmail.com', 'jerry@gmail.com', 'jerry', '800', '2024-07-30', '08:30-9:00', 'patiala', '- 15+years experience- MBBS, MS - General Surgery, MCh - Neuro Surgery- Neurosurgeon,Neurologist', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sno` int(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sno`, `message`, `email`) VALUES
(1, 'Your appointment has been approved.', 'kiran@gmail.com'),
(2, 'Your appointment has been approved.', 'kiran@gmail.com'),
(3, 'Your appointment has been approved.', 'kiran@gmail.com'),
(4, 'Your appointment has been approved.', 'kiran@gmail.com'),
(5, 'Your appointment has been approved.', 'kiran@gmail.com'),
(6, 'Your appointment has been approved.', 'kiran@gmail.com'),
(7, 'Your appointment has been approved.', 'kiran@gmail.com'),
(8, 'Your appointment has been approved.', 'kiran@gmail.com'),
(9, 'Your appointment has been approved.', 'kiran@gmail.com'),
(10, 'Your appointment has been approved.', 'kiran@gmail.com'),
(11, 'Your appointment has been approved.', 'kiran@gmail.com'),
(12, 'Your appointment has been approved.', 'kiran@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Contact` varchar(200) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `FirstName`, `LastName`, `Email`, `Contact`, `Subject`, `Message`) VALUES
(1, 'aman', 'kaur', 'aman@gmail.com', '12964', 'medical', 'want ortho doctor'),
(2, 'raman', 'kaur', 'raman@gmail.com', '314678', 'medical', 'want neuro doctor'),
(3, 'kriti', 'sharma', 'kriti@gmail.com', '271324', 'medical', 'want neuro doctor'),
(4, 'bidhi', 'sharma', 'bidhi@gmail.com', '82975', 'medical', 'want dentist doctor'),
(5, 'manav', 'sharma', 'manav@gmail.com', '810975', 'medical', 'issues ');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `sno` int(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `detail` text NOT NULL,
  `demail` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`sno`, `category`, `name`, `image`, `price`, `detail`, `demail`, `password`) VALUES
(1, 'neuro', 'john doe', 't1.jpg', '800', '- 10+years experience\r\n- MBBS, MS - General Surgery, MCh - Neuro Surgery\r\n- Neurosurgeon,Neurologist', 'john@gmail.com', '12345'),
(2, 'ortho', 'Adam Lobester', 't3.jpg', '1000', '- 15+years experience\r\n- Orthopaedics & Joint Replacement, Arthroscopy & Sports Injury, Robotic Surgery\r\n- Orthologist', 'adam@gmail.com', '12345'),
(3, 'dentist', 'Christina', 't4.jpg', '900', '- 9+years experience\r\n- BDS, MDS - Prosthodontist And Crown Bridge\r\n\r\n- Dentist,Dental Surgeon,Implantologist,Prosthodontist,Cosmetic/Aesthetic Dentist\r\n', 'christina@gmail.com', '12345'),
(33, 'neuro', 'jerry', 'te2.jpg', '800', '- 15+years experience\r\n- MBBS, MS - General Surgery, MCh - Neuro Surgery\r\n- Neurosurgeon,Neurologist', 'jerry@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `sno` int(200) NOT NULL,
  `data` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`sno`, `data`, `image`) VALUES
(1, 'camp', 'c1.jpg'),
(2, 'yoga', 'yoga.jpg'),
(3, 'blood', 'Blood1.jpg'),
(4, 'freemedical', 'free3.jpg'),
(5, 'camp', 'c2.jpg'),
(7, 'camp', 'c4.jpg'),
(8, 'camp', 'c5.jpg'),
(9, 'camp', 'c6.jpg'),
(10, 'camp', 'c3.webp'),
(11, 'blood', 'blood2.jpg'),
(12, 'blood', 'blood3.jpg'),
(13, 'blood', 'blood4.jpg'),
(14, 'blood', 'blood5.jpg'),
(15, 'blood', 'blood6.jpg'),
(16, 'yoga', 'yoga2.jpg'),
(17, 'yoga', 'yoga3.jpg'),
(18, 'yoga', 'yoga4.jpg'),
(19, 'yoga', 'yoga5.png'),
(20, 'yoga', 'yoga6.png\r\n'),
(21, 'freemedical', 'free2.jpg'),
(22, 'freemedical', 'free3.jpg'),
(23, 'freemedical', 'free4.jpg'),
(24, 'freemedical', 'free5.jpg'),
(25, 'freemedical', 'free6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `sno` int(200) NOT NULL,
  `User` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `confpass` varchar(200) NOT NULL,
  `Contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`sno`, `User`, `Email`, `Password`, `confpass`, `Contact`) VALUES
(2, 'aman', 'aman@gmail.com', '12345', '12345', '53645'),
(3, 'kulwinder', 'kulwinder@gmail.com', '12345', '12345', '23785'),
(4, 'harman', 'harman@gmail.com', '12345', '12345', '124333332'),
(7, 'janvi', 'janvi@gmail.com', '12345', '12345', '2165097'),
(8, 'param', 'param@gmail.com', '12345', '12345', '6876568'),
(62, 'palvi', 'palvi@gmail.com', '12345', '12345', '328476'),
(63, 'manpreet', 'manpreet@gmail.com', '12345', '12345', '21793856'),
(64, 'ravi', 'ravi@gmail.com', '12345', '12345', '537736'),
(65, 'kiran', 'kiran@gmail.com', '12345', '12345', '6197532'),
(66, 'sita', 'sita@gmail.com', '12345', '12345', '14379');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
