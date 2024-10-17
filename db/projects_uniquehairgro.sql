-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 10:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects_uniquehairgro`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `encrypt_password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `email`, `password`, `encrypt_password`, `status`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'unique@12#', '$2y$10$r6LnUwksJD/iHWHLV.IO3O6ED9BmwQSRRA2rUaJoFNMYJEzkc89uy', 0, '2024-09-26 09:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `name`, `phone_number`, `address`, `service`, `appointment_date`, `appointment_time`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'yukesh kumar', '6325874871', 'Chennai, Vada Palani', 'Facial Therapy', '2024-10-03', '08.00 am to 09.00 am', 'message', 0, '2024-10-03 07:46:20', '2024-10-03 07:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `content` longtext NOT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `title`, `heading`, `content`, `video_link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'welcome To Unique Hairgros', ' Get Back to Your Best Self with Advanced', ' Consult with Our Experts Today for a Customized Treatment Plan!!! ', 'https://www.youtube.com/watch?v=wy74iRBqOzQ&t=1s', '20501575911727786774.jpg', 0, '2024-09-27 10:35:45', '2024-09-27 10:35:45'),
(2, 'Welcome to', 'Get Back TO', 'Treatmentplan', 'https://www.youtube.com/watch?v=--6Z0-406Qs', '12306400261727786252.jpg', 0, '2024-10-01 12:37:32', '2024-10-01 12:37:32'),
(3, 'dhghghgh', 'ghghghgh', 'ghghghghgh', 'https://www.youtube.com/watch?v=EQSo1Z1qnQo', '3191274591727786838.jpg', 0, '2024-10-01 12:47:18', '2024-10-01 12:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_before_after`
--

CREATE TABLE `tbl_before_after` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `alt_name` varchar(255) DEFAULT NULL,
  `before_image` varchar(255) DEFAULT NULL,
  `after_image` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_before_after`
--

INSERT INTO `tbl_before_after` (`id`, `name`, `text`, `alt_name`, `before_image`, `after_image`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'text', 'alt name', '2220970321728023097.jpg', '12965093911728023920.jpg', '12075543011728023077.webp', 0, '2024-10-02 11:59:32', '2024-10-02 11:59:32'),
(2, '', '', '', '1356020241728024265.jpg', '13560202417280242651.jpg', '101927131727870473.webp', 0, '2024-10-02 12:01:13', '2024-10-02 12:01:13'),
(3, '', '', '', '10422159691728024280.jpg', '104221596917280242801.jpg', '12293508791727870487.webp', 0, '2024-10-02 12:01:27', '2024-10-02 12:01:27'),
(4, '', '', '', '3022394001728030046.jpg', '30223940017280300461.jpg', '30223940017280300462.jpg', 1, '2024-10-04 08:20:46', '2024-10-04 08:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `meta_tag` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `description`, `meta_tag`, `meta_title`, `meta_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet adipisici elit Lorem ipsum dolor sit amet adipisici elit', '<p>Quis autem vel eum iure reprehenderit qui inav esse quam nihil molestiae consequatur vel illum Quis autem vel eum iure reprehenderit qui inav esse quam nihil molestiae consequatur vel illum&nbsp;</p>', 'Lorem ipsum dolor sit amet adipisici elit', 'Lorem ipsum dolor sit amet adipisici elit', '<p>Quis autem vel eum iure reprehenderit qui inav esse quam nihil molestiae consequatur vel illum Quis autem vel eum iure reprehenderit qui inav esse quam nihil molestiae consequatur vel illum&nbsp;</p>', '17610448221727938892.jpg', 0, '2024-10-02 12:13:58', '2024-10-02 12:13:58'),
(2, 'uybdcusincius  ushiduhsud uhduhsdus uhduhsduhsid', '<p>Lorem ipsum dolor sit amet adipisici elit Lorem ipsum dolor sit amet adipisici elit</p>', 'uybdcusincius  ushiduhsud uhduhsdus uhduhsduhsid', '<p>Quis autem vel eum iure reprehenderit qui inav esse quam nihil molestiae consequatur vel illum Quis autem vel eum iure reprehenderit qui inav esse quam nihil molestiae consequatur vel illum&nbsp;</p>', 'uybdcusincius  ushiduhsud uhduhsdus uhduhsduhsid', '13734208411727871941.jpg', 0, '2024-10-02 12:25:41', '2024-10-02 12:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `phone_number`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'testing@gmail.com', '6382107598', 'testing', 'message', 0, '2024-10-03 06:48:43', '2024-10-03 06:48:43'),
(2, '', '', '', '', '', 1, '2024-10-03 07:04:24', '2024-10-03 07:04:24'),
(3, 'udusdusd', 'ihi@gmail.com', '6985478521', 'slkmskd', 'smsmsm', 0, '2024-10-03 07:34:36', '2024-10-03 07:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL,
  `video_id` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `video_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=wy74iRBqOzQ', '15067753951728031588.jpg', 0, '2024-10-04 08:44:37', '2024-10-04 08:44:37'),
(2, 'https://www.youtube.com/watch?v=wy74iRBqOzQ', '9211627361728031863.jpg', 0, '2024-10-04 08:51:04', '2024-10-04 08:51:04'),
(3, 'https://www.youtube.com/watch?v=wy74iRBqOzQ', '20752007201728031908.jpg', 0, '2024-10-04 08:51:48', '2024-10-04 08:51:48'),
(4, 'https://www.youtube.com/watch?v=wy74iRBqOzQ', '5942823471728031930.jpg', 0, '2024-10-04 08:52:10', '2024-10-04 08:52:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_before_after`
--
ALTER TABLE `tbl_before_after`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_before_after`
--
ALTER TABLE `tbl_before_after`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
