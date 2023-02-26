-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 02:56 PM
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
-- Database: `course_recommend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `code` int(11) NOT NULL,
  `coursename` varchar(40) NOT NULL,
  `link` varchar(80) NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_rate_sum` int(100) NOT NULL,
  `our_rating` int(11) NOT NULL,
  `total_people` int(20) NOT NULL,
  `free` varchar(5) NOT NULL,
  `image_name` text NOT NULL,
  `image_url` text NOT NULL,
  `coursecontent` text NOT NULL,
  `course_category` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`code`, `coursename`, `link`, `user_rating`, `user_rate_sum`, `our_rating`, `total_people`, `free`, `image_name`, `image_url`, `coursecontent`, `course_category`, `timestamp`) VALUES
(1, 'Full Stack Development', 'https://training.astrowebsolution.com/full-stack-development-2/', 5, 5, 5, 5, 'yes', 'img1.png', 'uploads/img1.png', 'Our Full Stack training is developed according to the latest industry standards to help the students analyze and understand the skills and work processes required to be a professional Web developer. \r\n\r\nFull stack web developer is end-to-end development of Web Apps from front-end to back-end. Mastered full stack developers are able to design user friendly UI, and build complex business logic.\r\n\r\nAs a full stack web developer, you will be able to gain knowledge on every level of how the web works including an understanding of front-end technologies (HTML, CSS, JavaScript, Bootstrap) and backend technologies (Node JS and Expess JS, MongoDB, REST APIs etc.,).we provide HTML, CSS, JavaScript, JQUERY, PHP, My SQL, Angular JS, Node JS.', 'web development', '2022-06-05 11:58:37'),
(2, 'Mean Stack Development', 'https://training.astrowebsolution.com/mean-stack-development/', 5, 5, 5, 5, 'no', 'img_1.jpg', 'uploads/img_1.jpg', 'MEAN Stack Development Training is the name given to a set of JavaScript based technologies used in developing web applications. MEAN is the acronym name given to the set of technologies including Mongo DB, Express JS, Angular,  and NodeJS. Among these technologies Mongo DB is a database system, Node JS is a back-end runtime environment, Express JS is a back-end web framework and Angular is a front-end framework. \r\n\r\nThis training is industry relevant and is framed by industry experts, which will make you a full-fledged MEAN stack developer. The training begins with introduction to NodeJS & Express JS which teaches the training aspirants how to develop and understand web applications using JavaScript. Further you will learn about MEAN stack which helps you in mastering front-end development.  \r\n\r\n', 'web development', '2022-06-05 12:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_category` varchar(30) NOT NULL,
  `img` varchar(100) NOT NULL,
  `image_url` text NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `joburl` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_category`, `img`, `image_url`, `job_title`, `joburl`, `timestamp`) VALUES
(1, 'web development', 'img2.png', 'uploads/img2.png', 'php developer', 'https://in.linkedin.com/', '2022-06-05 12:25:17'),
(3, 'web development', 'logo.png', 'uploads/logo.png', 'java', 'https://www.naukri.com/jobs-in-chennai', '2022-06-05 12:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'Rahul', 'rahul1', 'rahul', 'rahul111@gmail.com'),
(2, 'Sia', 'sia2', 'sia', 'sia8@yahoo.com'),
(3, 'Roe', 'doe', 'doe', 'hamsi@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
