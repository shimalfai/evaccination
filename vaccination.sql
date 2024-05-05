-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 04:12 PM
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
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `child_id` int(12) NOT NULL,
  `Name` text NOT NULL,
  `NID` varchar(12) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `child_id`, `Name`, `NID`, `Designation`, `Pass`) VALUES
(7, 0, 'shimal', 'A123123', 'Technician', 'Admin'),
(8, 0, 'Hawwa Shimal', 'A223121', 'Technician', 'Admin'),
(10, 0, 'Ahmed', 'A123009', 'Technician', 'Admin123'),
(11, 0, 'Hassan Manik', 'A120789', 'Senior Technician', 'Admin123'),
(12, 0, 'Ali Nadheem', 'A029102', 'Developer', 'Admin456');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `child_id` int(255) NOT NULL,
  `parents_id` int(255) NOT NULL,
  `Name` text NOT NULL,
  `Gender` text NOT NULL,
  `DOB` date NOT NULL,
  `NID` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `data` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`child_id`, `parents_id`, `Name`, `Gender`, `DOB`, `NID`, `Address`, `data`) VALUES
(7, 2, 'Shareef Ahmed Shimal', 'Male', '2023-04-07', 'A345678', 'HM lot 11233', ''),
(8, 2, 'Hawwa Shimal', 'Female', '2023-05-13', 'A234452', 'HM lot 11233', ''),
(10, 3, 'Isha', 'Female', '2023-01-05', 'A009922', 'Flower', ''),
(11, 4, 'Dua', 'Female', '2023-04-07', 'A902312', 'Flower 1', ''),
(12, 1, 'Haarun Shimal Ahmed', 'Male', '2023-04-07', 'A453215', 'HM lot 11233 1A', ''),
(13, 3, 'Shaama Ahsan', 'Female', '2023-04-05', 'A112801', 'Flower', ''),
(14, 7, 'Mohamed Samah', 'Male', '2023-05-12', 'A097865', 'Dhun', ''),
(15, 2, 'Mohamed Shaleem', 'Male', '2023-06-02', 'A121213', 'Dhun', ''),
(16, 1, 'Yoosuf Shimal Ahmed', 'Male', '2023-05-18', 'A190876', 'HM lot 11233', ''),
(17, 1, 'Fathimath Ismail', 'Female', '2023-04-14', 'A782381', 'HM lot 11233', ''),
(18, 2, 'Faaii Ahmed Shimal', 'Female', '2023-03-31', 'A675423', 'HM lot 11233', ''),
(19, 12, 'Simana Hussain', 'Female', '2023-05-12', 'A123098', 'Saikal, Male&#039;', ''),
(21, 2, 'Samaha Ahmed', 'Female', '2023-03-08', 'A123112', 'Flower 1', ''),
(22, 1, 'Saamin Ahmed', 'Male', '2023-03-02', 'A123009', 'Flower 1', ''),
(23, 1, 'Hassan Saamil Shimal', 'Male', '2023-04-06', 'A098876', 'Flower', ''),
(24, 1, 'Sazuna Shimal', 'Female', '2023-05-17', 'A009654', 'Flower 1', ''),
(25, 16, 'Ibrahim Aleef Shareef', 'Male', '2023-05-10', 'A8977923', 'Boaganvilla', ''),
(26, 1, 'Ibrahim Aleem', 'Male', '2024-04-18', 'A009921', 'Flower 1', ''),
(27, 1, 'Aishath Raeefa Hassan', 'Female', '2024-04-02', 'A121121', 'Hiyaa 1-2-3', ''),
(28, 1, 'Hussain Mohamed', 'Male', '2024-03-10', 'A009988', 'Flower', ''),
(29, 21, 'Ali Ihsan', 'Male', '2024-04-25', 'A876543', 'Sun flower', '');

-- --------------------------------------------------------

--
-- Table structure for table `child_vaccines`
--

CREATE TABLE `child_vaccines` (
  `id` int(25) NOT NULL,
  `child_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_vaccines`
--

INSERT INTO `child_vaccines` (`id`, `child_id`, `Date`, `Name`) VALUES
(73, 4, '2023-08-02', 'BCG'),
(74, 4, '2023-08-03', 'MR'),
(75, 4, '2023-08-07', 'OPV'),
(76, 7, '2023-07-20', 'BCG'),
(77, 7, '2023-07-31', 'MR'),
(78, 7, '2023-08-03', 'Hepatitis'),
(79, 7, '2023-08-08', 'OPV'),
(80, 11, '2023-04-12', 'BCG'),
(81, 15, '2023-08-01', 'BCG'),
(82, 12, '2023-08-02', 'BCG'),
(83, 4, '2023-04-01', 'MMR'),
(84, 14, '2023-08-02', 'BCG'),
(85, 13, '2023-06-23', 'BCG'),
(89, 7, '2023-08-11', 'MMR'),
(90, 4, '2023-08-24', 'Hepatitis'),
(91, 10, '2024-01-16', 'BCG');

-- --------------------------------------------------------

--
-- Table structure for table `health_facilities`
--

CREATE TABLE `health_facilities` (
  `id` int(255) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `island` varchar(25) NOT NULL,
  `Address` varchar(12) NOT NULL,
  `City` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_facilities`
--

INSERT INTO `health_facilities` (`id`, `Name`, `email`, `island`, `Address`, `City`) VALUES
(1, 'Huraa Health Center', 'fake@gmail.com', '', 'Huraa', 'Huraa'),
(2, 'Innamaadhoo Health Center', 'fake@gmail.com', 'lot 1230', 'Innamaadhoo', 'Innamaadhoo'),
(3, 'Ungoofaaru Hospital', 'ungoofaaru@outlook.com', 'Lot No 1234', 'Ungoofaaru', 'Ungoofaaru'),
(4, 'Guraidhoo health Center', 'guraidhoo@health.gov.mv', 'Guraidhoo lot', 'Guraidhoo', 'Guraidhoo');

-- --------------------------------------------------------

--
-- Table structure for table `immunization`
--

CREATE TABLE `immunization` (
  `id` int(25) NOT NULL,
  `child_id` int(25) NOT NULL,
  `BCG` text NOT NULL,
  `Hepatitis` text NOT NULL,
  `OPV` text NOT NULL,
  `IPV` text NOT NULL,
  `MR` text NOT NULL,
  `MMR` text NOT NULL,
  `DPT Booster` text NOT NULL,
  `Pentavalent` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `immunization`
--

INSERT INTO `immunization` (`id`, `child_id`, `BCG`, `Hepatitis`, `OPV`, `IPV`, `MR`, `MMR`, `DPT Booster`, `Pentavalent`, `Date`) VALUES
(7, 0, 'BCG', 'Hepatitis', '', '', '', '', '', '', '2023-07-11'),
(19, 7, 'BCG', '', '', '', '', '', '', '', '2023-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(255) NOT NULL,
  `fname` text NOT NULL,
  `NID` varchar(11) NOT NULL,
  `Address` text NOT NULL,
  `mobile` int(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `fname`, `NID`, `Address`, `mobile`, `email`, `psw`) VALUES
(1, 'Hawwa Faiga', 'A443322', 'Rose', 7554433, 'faai@gmail.com', 'love'),
(2, 'Hawwa Faaii', 'A873673', '0', 7886651, 'faai@gmail.com', 'love'),
(3, 'Aishath Samaha', 'A453215', 'Flower', 7845342, 'aishath@hotmail.com', 'Welcome1'),
(4, 'Aminath Suna', 'A112233', 'Flower 1', 9808889, 'amina@gmail.com', 'Welcome1'),
(5, 'Khadheeja Mohamed', 'A171819', 'HM Hiyaa 5-10-15', 7321511, 'khad@outlook.com', 'Welcome2'),
(6, 'Fathimath Greena', 'A009988', 'Dabiyage', 9787878, 'gree@live.com', 'Welcome123'),
(7, 'Huna Yellow', 'A123654', 'Dhun', 9898098, 'Hun@gmail.com', 'Welcome3'),
(8, 'Jameela Hassan', 'A675634', 'Huvandhuge', 7654321, 'jam@gmail.com', 'Welcome4'),
(9, 'Saruma Waheed', 'A989767', 'Ujaalaa', 9876542, 'saruma@gmail.com', 'Welcome'),
(10, 'Hawwa Ali', 'A144325', 'fenge', 7886651, 'hawa@outlook.com', 'Welcome2'),
(11, 'Gulshana Hussain', 'A221312', 'Doosia', 9876553, 'gul@gmail.com', 'Welcome'),
(12, 'Hisamaa', 'A231356', 'Saikal, Male&#039;', 7865432, 'hisma@hotmail.com', 'Welcome23'),
(13, 'Salma Ali', 'A098712', 'H.Dhunfini', 7896543, 'Salma@outlook.com', 'Welcome2'),
(14, 'Mueena Rasheed', 'A987972', 'G.Hithige', 7809987, 'Mueena@hotmail.com', 'Welcome3'),
(15, 'Sama Haleem', 'A909876', 'Newstar', 7866543, 'samaa@live.com', 'Welcome321'),
(16, 'Aminath Ali', 'A980876', 'Athage', 7876542, 'aminali@gmail.com', 'Welcome123'),
(17, 'Khaleela Jaleel', 'A123654', 'Banaana', 7881101, 'Khaleejalee@hotmail.', 'Jaleel'),
(18, 'Mariyam Ali', 'A654789', 'Roanuge', 9878907, 'maryali@gmail.com', 'Ali'),
(19, 'Jaleela Hassan', 'A990990', 'kokaage', 7651123, 'jaleela@live.com', 'Jaleela'),
(20, 'Saamilaa Hassan', 'A098765', 'G.Akirige', 7654321, 'saamilaa@hotmail.com', 'Welcome1'),
(21, 'Aishath Ishama', 'A244212', 'Hulumale H1-2-3', 7998331, 'ishama@gmail.com', 'Welcome2');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(12) NOT NULL,
  `parents_id` int(12) NOT NULL,
  `mobile` int(12) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `parents_id`, `mobile`, `text`) VALUES
(21, 0, 7554433, 'Salaam! This is to inform your child has to be vaccinated before 25th Aug 2023.\nThank You\n'),
(22, 0, 7554433, 'Salaam! This is to inform your child has to be vaccinated before 25th Aug 2023.\r\nThank You\r\n'),
(23, 0, 7554433, 'Please be informed that your child needs to be vaccinated on 30 Sept 2023'),
(24, 0, 7554433, 'This is to inform that your child needs to be vaccinated before 30th of August 2023. Thank You'),
(25, 0, 7554433, 'This is to inform that your child needs to be vaccinated before 30th of August 2023. Thank You'),
(26, 0, 7554433, 'This is to inform that your child needs to be vaccinated before 30th of August 2023. Thank You'),
(27, 0, 7554433, 'This is to inform that your child needs to be vaccinated on 30th August'),
(28, 0, 7554433, 'This is to inform that your child needs to be vaccinated on 30th August'),
(29, 0, 7554433, 'Salaam! This is to inform your child has to be vaccinated before 25th Aug 2023.'),
(30, 0, 7554433, 'Salaam! This is to inform your child has to be vaccinated before 25th Aug 2023.'),
(31, 0, 7554433, 'Salaam! This is to inform your child has to be vaccinated before 25th Aug 2023.\r\n'),
(32, 0, 7554433, 'Salaam! This is to inform your child has to be vaccinated before 25th Aug 2023.\r\n'),
(33, 0, 7554433, 'Welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `vaccine_id` int(12) NOT NULL,
  `Name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`vaccine_id`, `Name`) VALUES
(56, 'BCG'),
(57, 'Hepatitis'),
(58, 'MR'),
(60, 'OPV'),
(61, 'IPV'),
(62, 'MMR'),
(63, 'DPT Booster'),
(64, 'Pentavalent'),
(66, 'Covid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`child_id`),
  ADD KEY `user_id` (`parents_id`),
  ADD KEY `parents_id` (`parents_id`);

--
-- Indexes for table `child_vaccines`
--
ALTER TABLE `child_vaccines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `health_facilities`
--
ALTER TABLE `health_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `immunization`
--
ALTER TABLE `immunization`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`vaccine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `child_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `child_vaccines`
--
ALTER TABLE `child_vaccines`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `health_facilities`
--
ALTER TABLE `health_facilities`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `immunization`
--
ALTER TABLE `immunization`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `vaccine_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
