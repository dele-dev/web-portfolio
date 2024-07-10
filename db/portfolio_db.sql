-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 08:03 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tbl`
--

CREATE TABLE `about_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(1) NOT NULL,
  `title` varchar(111) NOT NULL,
  `descprition` text NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_tbl`
--

INSERT INTO `about_tbl` (`id`, `profile_id`, `title`, `descprition`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Gender', 'male', '0000-00-00 00:00:00', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_track`
--

CREATE TABLE `admin_track` (
  `id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_track`
--

INSERT INTO `admin_track` (`id`, `username`, `password`, `date_at`, `status`, `deleted`) VALUES
(1, '8c7283a0d1faac5fd6a755f69d327d1ddff0d6b9', 'b7ae55452438a684e7f4f505c0a06884bb0a2872', '2024-06-27 02:59:17', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `awards_tbl`
--

CREATE TABLE `awards_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `tile` varchar(121) NOT NULL,
  `description` varchar(221) NOT NULL,
  `Awarder` varchar(111) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards_tbl`
--

INSERT INTO `awards_tbl` (`id`, `profile_id`, `tile`, `description`, `Awarder`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Aws Cloud Practitioner', 'Cloud practitioner', 'Aws Cloud', '2024-07-06 21:11:26', '0', 0),
(2, 1, 'Google Data Analyst ', 'Analysis', 'Google Data Analytics Foundation', '2024-07-06 21:13:00', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `suject` varchar(111) NOT NULL,
  `value` varchar(111) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`id`, `profile_id`, `suject`, `value`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Email Address', 'Quaysontitus@gmail.com', '2024-07-01 05:36:27', '0', 0),
(2, 1, 'Phone number', '+233543611072', '2024-07-06 21:29:38', '0', 0),
(3, 1, 'Address', 'P.O BOX KD 92, ACCRA GHANA', '2024-07-01 05:39:12', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `expirences_tbl`
--

CREATE TABLE `expirences_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `title` varchar(121) NOT NULL,
  `description` varchar(121) NOT NULL,
  `company_name` varchar(121) NOT NULL,
  `start_date` varchar(111) NOT NULL,
  `end` varchar(121) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expirences_tbl`
--

INSERT INTO `expirences_tbl` (`id`, `profile_id`, `title`, `description`, `company_name`, `start_date`, `end`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Web Developer', 'Developed e-commerce and blog.', 'Encane Web Solution', '2020-10-13', '2021-01-11', '0000-00-00 00:00:00', '0', 0),
(2, 1, 'Operational support', 'recorded customer interaction', 'Emergent Payment Ghana Limited', '2022-05-08', '2024-06-30', '0000-00-00 00:00:00', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq_tbl`
--

CREATE TABLE `faq_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `details` mediumtext NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq_tbl`
--

INSERT INTO `faq_tbl` (`id`, `profile_id`, `title`, `details`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'What does a product designer need to know?', 'I am here to help if you are searching for a product designer to bring your idea to', '2024-07-01 06:10:06', '0', 0),
(2, 1, 'What does a product designer need to know?', 'life or a design partner to help take your business to the next level.', '2024-07-01 06:11:30', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `fullname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(22) NOT NULL,
  `budget` varchar(99) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`id`, `profile_id`, `fullname`, `email`, `subject`, `budget`, `message`, `created_at`, `status`, `deleted`) VALUES
(1, 1, 'Simple shareIt', 'shakeIt@simpple.com', 'Work matters', '$5000 - $1000', 'this is what I wan to say!', '2024-07-02 16:43:46', '0', 0),
(2, 1, 'Simple shareIt', 'shakeIt@simpple.com', 'Work matters', '$5000 - $1000', 'this is what I wan to say!', '2024-07-02 16:43:50', '0', 0),
(3, 1, 'Simple shareIt', 'shakeIt@simpple.com', 'Work matters', '$5000 - $1000', 'this is what I wan to say!', '2024-07-02 16:44:30', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `frame_works_tbl`
--

CREATE TABLE `frame_works_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `title` varchar(121) NOT NULL,
  `description` varchar(111) NOT NULL,
  `logo_url` varchar(111) NOT NULL,
  `ratings` varchar(111) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frame_works_tbl`
--

INSERT INTO `frame_works_tbl` (`id`, `profile_id`, `title`, `description`, `logo_url`, `ratings`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Laravel', 'I love it.', 'laravel-removebg-preview.png', '5', '2024-07-06 20:53:19', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoobies_tbl`
--

CREATE TABLE `hoobies_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `title` varchar(121) NOT NULL,
  `description` varchar(111) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoobies_tbl`
--

INSERT INTO `hoobies_tbl` (`id`, `profile_id`, `title`, `description`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Swimming', 'I can swim', '2024-07-01 06:08:05', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `languages_tbl`
--

CREATE TABLE `languages_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `name` varchar(121) NOT NULL,
  `logo_url` varchar(111) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages_tbl`
--

INSERT INTO `languages_tbl` (`id`, `profile_id`, `name`, `logo_url`, `rating`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Php', 'php-removebg-preview.png', '4', '2024-07-06 20:51:09', '0', 0),
(2, 1, 'Sql', 'sql-removebg-preview.png', '4', '2024-07-06 20:51:41', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile_tbl`
--

CREATE TABLE `profile_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(111) NOT NULL,
  `lastname` varchar(111) NOT NULL,
  `middlename` varchar(111) NOT NULL,
  `picture_url` varchar(121) NOT NULL,
  `bio_text` mediumtext NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_tbl`
--

INSERT INTO `profile_tbl` (`id`, `firstname`, `lastname`, `middlename`, `picture_url`, `bio_text`, `date_at`, `status`, `deleted`) VALUES
(1, 'Quayson', 'Nana', 'Titus', 'profile.png', 'secure a career opportunity that allows for the optimal application of my extensive training and skills, with the aim of significantly contributing to the overall success and growth of the organization.', '2024-07-06 19:59:38', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects_tbl`
--

CREATE TABLE `projects_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `title` varchar(121) NOT NULL,
  `descriptions` text NOT NULL,
  `start_date` varchar(121) NOT NULL,
  `end_date` varchar(121) NOT NULL,
  `url_1` varchar(111) NOT NULL,
  `url_2` varchar(111) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_tbl`
--

INSERT INTO `projects_tbl` (`id`, `profile_id`, `title`, `descriptions`, `start_date`, `end_date`, `url_1`, `url_2`, `rating`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Data Research ', 'Web design encompasses the process of creating and designing websites It involves a\r\n                          combination of different skills and disciplines to produce a visually appealing and\r\n                          user-friendly website. Here\'s an overview of key aspects of web design.', '2023-06-13', '2024-06-30', 'project-3.png', 'project-details-3.png', '4', '2024-07-02 05:41:50', '0', 0),
(2, 1, 'Cloud Map', 'Web design encompasses the process of creating and designing websites It involves a\r\n                          combination of different skills and disciplines to produce a visually appealing and\r\n                          user-friendly website. Here\'s an overview of key aspects of web design.', '2022-03-02', '2024-06-28', 'project-2.png', 'project-details-2.png', '5', '2024-07-02 05:42:00', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skills_tbl`
--

CREATE TABLE `skills_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `title` varchar(121) NOT NULL,
  `logo_url` varchar(111) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills_tbl`
--

INSERT INTO `skills_tbl` (`id`, `profile_id`, `title`, `logo_url`, `rating`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Kubernetes', 'kuber-removebg-preview.png', '4', '2024-07-06 20:46:41', '0', 0),
(2, 1, 'Mysql', 'mysql-removebg-preview.png', '4', '2024-07-06 20:47:15', '0', 0),
(3, 1, 'Aws Cloud Practitioner', 'aws-removebg-preview.png', '3', '2024-07-06 20:48:36', '0', 0),
(4, 1, 'Nginx', 'nginx-removebg-preview.png', '4', '2024-07-06 20:49:11', '0', 0),
(5, 1, 'Apache 2', 'apach-removebg-preview.png', '4', '2024-07-06 20:49:49', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `soft_skills_tbl`
--

CREATE TABLE `soft_skills_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `title` varchar(121) NOT NULL,
  `description` varchar(111) NOT NULL,
  `icon_url` varchar(111) NOT NULL,
  `ratings` varchar(111) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soft_skills_tbl`
--

INSERT INTO `soft_skills_tbl` (`id`, `profile_id`, `title`, `description`, `icon_url`, `ratings`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Reporting', 'Ability  to report well', 'app.svg', '5', '2024-07-01 06:06:40', '0', 0),
(2, 1, 'intellij code', 'Smooth to use', 'notion.svg', '5', '2024-07-01 06:07:42', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tools_tbl`
--

CREATE TABLE `tools_tbl` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `title` varchar(121) NOT NULL,
  `description` varchar(111) NOT NULL,
  `logo_url` varchar(111) NOT NULL,
  `ratings` varchar(111) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools_tbl`
--

INSERT INTO `tools_tbl` (`id`, `profile_id`, `title`, `description`, `logo_url`, `ratings`, `date_at`, `status`, `deleted`) VALUES
(1, 1, 'Postman', 'Api development and integration', 'postman-removebg-preview.png', '5', '2024-07-06 20:54:29', '0', 0),
(2, 1, 'SqliLite', 'Database management and integration', 'sqllite-removebg-preview.png', '5', '2024-07-06 20:55:16', '0', 0),
(3, 1, 'Vs Code', 'Coding all the way!', 'vsc-removebg-preview.png', '4', '2024-07-06 20:56:04', '0', 0),
(4, 1, 'Intellij IDEA', 'coding', 'inteli-removebg-preview.png', '5', '2024-07-06 20:56:37', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_tbl`
--
ALTER TABLE `about_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_track`
--
ALTER TABLE `admin_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards_tbl`
--
ALTER TABLE `awards_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expirences_tbl`
--
ALTER TABLE `expirences_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_tbl`
--
ALTER TABLE `faq_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frame_works_tbl`
--
ALTER TABLE `frame_works_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoobies_tbl`
--
ALTER TABLE `hoobies_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages_tbl`
--
ALTER TABLE `languages_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_tbl`
--
ALTER TABLE `profile_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_tbl`
--
ALTER TABLE `projects_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_tbl`
--
ALTER TABLE `skills_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soft_skills_tbl`
--
ALTER TABLE `soft_skills_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools_tbl`
--
ALTER TABLE `tools_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_tbl`
--
ALTER TABLE `about_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_track`
--
ALTER TABLE `admin_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards_tbl`
--
ALTER TABLE `awards_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expirences_tbl`
--
ALTER TABLE `expirences_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq_tbl`
--
ALTER TABLE `faq_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `frame_works_tbl`
--
ALTER TABLE `frame_works_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoobies_tbl`
--
ALTER TABLE `hoobies_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages_tbl`
--
ALTER TABLE `languages_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile_tbl`
--
ALTER TABLE `profile_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects_tbl`
--
ALTER TABLE `projects_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills_tbl`
--
ALTER TABLE `skills_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soft_skills_tbl`
--
ALTER TABLE `soft_skills_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tools_tbl`
--
ALTER TABLE `tools_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
