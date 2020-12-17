-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 08:39 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bubt`
--

-- --------------------------------------------------------

--
-- Table structure for table `acheivements`
--

CREATE TABLE `acheivements` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `img_text` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acheivements`
--

INSERT INTO `acheivements` (`id`, `department_id`, `img_text`, `image`) VALUES
(1, 1, 'aaaLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis mauris vel nisi mattis ornare non a est', '4a47f922729aa383451167a7d9cdb8fc7d038a62ced02163fdee3970df34c0ed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `type` enum('event','notice','course') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `cat_title`, `type`) VALUES
(1, 'category', 'event'),
(3, 'tests', 'event'),
(4, 'latest', 'event'),
(5, 'Graduate Courses (Day)', 'course'),
(6, 'Graduate Courses (Evening)', 'course'),
(7, 'Master’s Program', 'course'),
(9, 'General', 'notice'),
(10, 'Class Related', 'notice'),
(11, 'Exam related', 'notice');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clients_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clients_id`, `url`, `logo`) VALUES
(2, '#', 'BUBT-Logo.png'),
(3, '#', 'center-box.png'),
(4, '#', 'BUBT-Logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_title`, `cat_id`, `start_date`, `image`) VALUES
(6, ' B. Sc in CSE', 5, '2017-02-19', 'CB4.png'),
(7, ' B. Sc in CSE', 5, '2017-02-19', 'CB4.png'),
(8, ' B. Sc in CSE', 5, '2017-02-19', 'CB4.png'),
(9, ' B. Sc in CSE', 5, '2017-02-19', 'CB4.png'),
(10, ' B. Sc in CSE', 5, '2017-02-19', 'CB4.png'),
(11, ' B. Sc in CSE', 6, '2017-02-19', 'CB4.png'),
(12, ' B. Sc in CSE', 6, '2017-02-19', 'CB4.png'),
(13, ' B. Sc in CSE', 6, '2017-02-19', 'CB4.png'),
(14, ' B. Sc in CSE', 7, '2017-02-19', 'CB4.png'),
(15, ' B. Sc in CSE', 7, '2017-02-19', 'CB4.png'),
(16, ' B. Sc in CSE', 7, '2017-02-19', ''),
(17, ' B. Sc in CSE', 5, '2017-02-19', 'CB4.png'),
(18, ' B. Sc in CSE', 7, '2017-02-19', 'CB4.png'),
(19, ' B. Sc in CSE', 7, '2017-02-19', 'CB4.png'),
(20, ' B. Sc in CSE', 7, '2017-02-19', ''),
(21, ' B. Sc in CSE', 5, '2017-02-19', 'CB4.png');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_title` varchar(255) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `bg_img` text,
  `sort` int(11) NOT NULL,
  `faculty_members` varchar(255) DEFAULT NULL,
  `students` varchar(255) DEFAULT NULL,
  `achievements` varchar(255) DEFAULT NULL,
  `chairmen_msg` varchar(255) DEFAULT NULL,
  `chairman_name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `chairment_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_title`, `faculty_id`, `bg_img`, `sort`, `faculty_members`, `students`, `achievements`, `chairmen_msg`, `chairman_name`, `designation`, `department`, `chairment_photo`) VALUES
(1, 'test', 1, NULL, 0, '50', '50', '50', 'Tstaaaa', 'John Doe', 'Chairman', 'Tst', 'dean.jpg'),
(2, 'test3', 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(19, 'test4', 1, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `department_menu`
--

CREATE TABLE `department_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_menu`
--

INSERT INTO `department_menu` (`menu_id`, `menu_name`, `department_id`, `title`, `description`) VALUES
(1, 'feature', 1, 'Welcome', 'asdasd'),
(2, 'program_details', 1, 'Welcome', 'asdasd'),
(3, 'test2', 1, 'test1', 'test3');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` bigint(20) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `event_date` datetime NOT NULL,
  `event_desc` text NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `cat_id`, `event_date`, `event_desc`, `image`) VALUES
(2, 'testsssss', 1, '2017-02-17 12:06:00', 'teststest', 'blog_1.jpg'),
(5, 'Hello', 1, '2017-02-13 12:51:02', '                                    \r\n              tesrsres                  ', '11560-NNX7RR.png'),
(6, 'Test', 1, '2017-02-20 18:58:07', 'dsadsad', 'CB4.jpg'),
(7, 'Test', 4, '2017-02-18 18:58:07', 'dsadsad', '03.png'),
(8, 'gotokal', 4, '2017-02-15 18:58:07', 'dsadsad', '02.png'),
(9, 'testsssss', 1, '2017-02-17 12:06:00', 'teststest', 'blog_1.jpg'),
(10, 'Hello', 1, '2017-02-13 12:51:02', '                                    \r\n              tesrsres                  ', '11560-NNX7RR.png'),
(11, 'Test', 1, '2017-02-20 18:58:07', 'dsadsad', 'CB4.jpg'),
(12, 'Test', 4, '2017-02-18 18:58:07', 'dsadsad', '03.png'),
(13, 'gotokal', 4, '2017-02-15 18:58:07', 'dsadsad', '02.png'),
(14, 'testsssss', 1, '2017-02-24 12:06:00', 'teststest', 'blog_1.jpg'),
(15, 'Hello', 1, '2017-02-13 12:51:02', '                                    \r\n              tesrsres                  ', '11560-NNX7RR.png'),
(16, 'Test', 1, '2017-05-09 18:58:07', 'dsadsad', ''),
(17, 'Test', 4, '2017-02-18 18:58:07', 'dsadsad', '03.png'),
(18, 'gotokal', 4, '2017-02-19 18:58:07', 'dsadsad', ''),
(19, 'testsssss', 1, '2017-02-17 12:06:00', 'teststest', 'blog_1.jpg'),
(20, 'Hello', 1, '2017-02-13 12:51:02', '                                    \r\n              tesrsres                  ', '11560-NNX7RR.png'),
(21, 'Test', 1, '2017-02-20 18:58:07', 'dsadsad', 'CB4.jpg'),
(22, 'Test', 4, '2017-02-18 18:58:07', 'dsadsad', '03.png'),
(23, 'gotokal', 4, '2017-02-19 18:58:07', 'dsadsad', '02.png');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `faculty_id` int(11) NOT NULL,
  `faculty_title` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `faculty_desc` text NOT NULL,
  `head_photo` text NOT NULL,
  `head_name` varchar(255) NOT NULL,
  `head_designation` varchar(255) NOT NULL,
  `head_others` text NOT NULL,
  `department_title` varchar(255) NOT NULL,
  `department_count` int(11) NOT NULL,
  `qoutes` text NOT NULL,
  `under_g_page` text NOT NULL,
  `g_page` text NOT NULL,
  `r_page` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`faculty_id`, `faculty_title`, `slug`, `faculty_desc`, `head_photo`, `head_name`, `head_designation`, `head_others`, `department_title`, `department_count`, `qoutes`, `under_g_page`, `g_page`, `r_page`) VALUES
(1, 'Faculty of Business Study', 'faculty-of-business', 'The department of Computer Science and Engineering (CSE) is one of the significant departments of Bangladesh University of Business and Technology (BUBT). It was established in November 2005. It started its journey with B.Sc. (Hons) in Computer Science & Information Technology (CSIT) program. In 2007 it starts B.Sc. Engg. in Computer Science & Engineering (CSE). Both of the programs are offered in day time. In the year 2008 considering the need of higher education ', 'dean.jpg', 'Dr. Jhon Doe ', 'Test', 'ChairmanDepartment of CSE', 'gloriasdepartments', 4, 'Sample Text Sample Text Sample Text Sample Text Sample Text ', '#', '#', '#'),
(2, 'Faculty of CSE', 'faculty-of-cse', 'The department of Computer Science and Engineering (CSE) is one of the significant departments of Bangladesh University of Business and Technology (BUBT). It was established in November 2005. It started its journey with B.Sc. (Hons) in Computer Science & Information Technology (CSIT) program. In 2007 it starts B.Sc. Engg. in Computer Science & Engineering (CSE). Both of the programs are offered in day time. In the year 2008 considering the need of higher education ', 'dean.jpg', 'Dr. Jhon Doe ', '', 'ChairmanDepartment of CSE', 'gloriasdepartments', 4, 'Sample Text Sample Text Sample Text Sample Text Sample Text ', '#', '#', '#'),
(3, 'Faculty of Engineering', 'faculty-of-engineering', 'The department of Computer Science and Engineering (CSE) is one of the significant departments of Bangladesh University of Business and Technology (BUBT). It was established in November 2005. It started its journey with B.Sc. (Hons) in Computer Science & Information Technology (CSIT) program. In 2007 it starts B.Sc. Engg. in Computer Science & Engineering (CSE). Both of the programs are offered in day time. In the year 2008 considering the need of higher education ', 'dean.jpg', 'Dr. Jhon Doe ', '', 'Chairman Department of CSE', 'glorias departments', 4, 'Sample Text Sample Text Sample Text Sample Text Sample Text ', '#', '#', '#'),
(4, 'Faculty of Arts', 'faculty-of-arts', 'The department of Computer Science and Engineering (CSE) is one of the significant departments of Bangladesh University of Business and Technology (BUBT). It was established in November 2005. It started its journey with B.Sc. (Hons) in Computer Science & Information Technology (CSIT) program. In 2007 it starts B.Sc. Engg. in Computer Science & Engineering (CSE). Both of the programs are offered in day time. In the year 2008 considering the need of higher education ', 'dean.jpg', 'Dr. Jhon Doe ', '', 'Chairman Department of CSE', 'glorias departments', 4, 'Sample Text Sample Text Sample Text Sample Text Sample Text ', '#', '#', '#'),
(5, 'Faculty of Social Science', 'faculty-of-social', 'The department of Computer Science and Engineering (CSE) is one of the significant departments of Bangladesh University of Business and Technology (BUBT). It was established in November 2005. It started its journey with B.Sc. (Hons) in Computer Science & Information Technology (CSIT) program. In 2007 it starts B.Sc. Engg. in Computer Science & Engineering (CSE). Both of the programs are offered in day time. In the year 2008 considering the need of higher education ', 'dean.jpg', 'Dr. Jhon Doe ', '', 'Chairman Department of CSE', 'glorias departments', 4, 'Sample Text Sample Text Sample Text Sample Text Sample Text ', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_member`
--

CREATE TABLE `faculty_member` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_post` varchar(255) NOT NULL,
  `department_id` int(255) NOT NULL,
  `member_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_member`
--

INSERT INTO `faculty_member` (`member_id`, `member_name`, `member_post`, `department_id`, `member_image`) VALUES
(1, 'John Doe', 'Asst. Professor', 1, '5c469889d3bdee3609de9afb8d5a7d1a4ffeb1e90017504c1eb28649ae3b415d_(17).jpg'),
(3, 'test1', 'Professor', 1, '0dc5cb8af0606280483fcfa221b0ede260592e8d0378b52df521b07826851359.jpg'),
(5, 'test3', 'lecturer', 1, '3f687e875351d97f4c22542142712ce709830728e6c00a3efb582dc7b8702f9c.jpg'),
(6, 'test', 'Junior lecturer', 1, '4aa4ab8415bb3fd8ce76ca25ab5dcad607f2a8d8d8a02bf032cc960101195535.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content_left` mediumtext NOT NULL,
  `content_right` text,
  `img_text` mediumtext NOT NULL,
  `video_url` mediumtext,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `category`, `content_left`, `content_right`, `img_text`, `video_url`, `image`) VALUES
(1, 'location', '            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1974392721645!2d90.35523716631175!3d23.81157719010534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c12015382851%3A0x3ceca92fcf1a72d2!2sBangladesh+University+of+Business+%26+Technology!5e0!3m2!1sen!2sbd!4v1487491943633" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>\r\n', '<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><br /><strong style="box-sizing: border-box; font-weight: bold; color: #333333; font-family: calibri; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Contact Us</strong></p>\r\n<h4 style="box-sizing: border-box; font-family: calibri; font-weight: 500; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">&nbsp;</h4>\r\n<h4 style="box-sizing: border-box; font-family: calibri; font-weight: 500; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Bangladesh University of Business and Technology (BUBT)</h4>\r\n<p><span style="color: #333333; font-family: calibri; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; display: inline !important; float: none;">Campus-2 Dhaka Commerce College Road Mirpur-2, Dhaka-1216<span class="Apple-converted-space">&nbsp;</span></span><br style="box-sizing: border-box; color: #333333; font-family: calibri; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;" /><span style="color: #333333; font-family: calibri; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; display: inline !important; float: none;">Permanent Campus Plot # 77-78 Road # 9 Rupnagar Mirpur-2, Dhaka-1216<span class="Apple-converted-space">&nbsp;</span></span></p>', '', '0', ''),
(2, 'campus', '', NULL, 'gallerygallerygallery gallery gallerygallerygallerygallery gallery gallerygallerygallerygallery gallery gallerygallerygallerygallery gallery gallerygallerygallerygallery gallery gallerygallerygallerygallery gallery gallery', NULL, '01.png'),
(3, 'campus', '', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ', NULL, '02.png'),
(4, 'campus', '', '<p><em><strong>Test test</strong></em></p>', 'psum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ev', NULL, '01.png'),
(5, 'faculty', '', NULL, '', 'https://www.youtube.com/embed/WMq1qXh1oWE', ''),
(6, 'campus', '', NULL, 'test test', NULL, '02.png'),
(8, 'faculty', '', NULL, 'asd asd asd sad asd asd asd asd asd asdasd asd asd asd sad', NULL, '01.png'),
(9, 'convocation', '', '<p>sad asd sad sad sad asd asd asd asd sad</p>', '', 'https://www.youtube.com/embed/WMq1qXh1oWE', ''),
(11, 'club', '', NULL, 'sadasdasdsad', NULL, '02.png'),
(12, 'club', '', NULL, 'asdasd sad sad sad sad sad asd as', NULL, '03.png'),
(13, 'club', '', '<p>tedsad asd asd</p>', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(100) NOT NULL DEFAULT '#',
  `parent` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `label`, `link`, `parent`, `sort`) VALUES
(2, 'About', '#', NULL, 2),
(7, 'test', '#', NULL, 0),
(6, 'Test', '#', 0, 0),
(12, 'Who we are', '', 2, 0),
(9, 'Administration', '#', 2, 2),
(10, 'History', '#', 12, 1),
(11, 'List Of Officers', '#', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` int(11) NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `notice_desc` text NOT NULL,
  `notice_date` date NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice_id`, `notice_title`, `cat_id`, `notice_desc`, `notice_date`, `image`) VALUES
(1, 'asd', 9, 'ds', '2017-02-01', ''),
(2, 'testssssssssssssss', 11, 'sasdasd', '2017-02-13', '03.png'),
(3, 'sadssss', 9, 'dsa', '2017-02-15', '02.png'),
(5, 'asd', 9, '                                    \r\n           asd                     ', '2017-02-09', 'CB4.jpg'),
(6, 'asd', 9, '                                    \r\n           asd                     ', '2017-02-09', 'CB4.jpg'),
(7, 'asd', 9, 'ds', '2017-02-01', '01.png'),
(8, 'testssssssssssssss', 11, 'sasdasd', '2017-02-13', '03.png'),
(9, 'sadssss', 10, 'dsa', '2017-02-15', '02.png'),
(10, 'asd', 10, '                                    \r\n           asd                     ', '2017-02-09', ''),
(11, 'asd', 10, '                                    \r\n           asd                     ', '2017-02-09', 'CB4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` text COLLATE utf8_bin NOT NULL,
  `post_date` datetime NOT NULL,
  `post_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8_bin,
  `post_status` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'draft',
  `posted_by` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_date`, `post_content`, `image`, `post_status`, `posted_by`) VALUES
(2, 'testssss', '2017-02-15 00:00:00', 'sda', '01.png', 'publish', '34'),
(3, 'tyessdsdsa', '2017-02-09 13:29:03', 'dasdasda', '01.png', 'publish', ''),
(4, '234324', '2017-02-09 13:29:26', 'saedsadad', '03.png', 'publish', ''),
(11, 'test', '2017-02-17 17:56:17', 'sadasd', '02.png', 'publish', ''),
(12, 'test', '2017-02-17 17:56:21', 'sadasd', '02.png', 'publish', ''),
(13, 'test', '2017-02-17 17:57:01', 'dsafsad', '01.png', 'publish', '');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `logo` text,
  `favicon` text,
  `faculty` int(11) DEFAULT NULL,
  `teachers` int(11) DEFAULT NULL,
  `campus` int(11) DEFAULT NULL,
  `students` int(11) DEFAULT NULL,
  `facebook` text,
  `twitter` text,
  `gplus` text,
  `youtube` text,
  `linkdin` text,
  `welcome_link` text,
  `tour_link` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `site_title`, `logo`, `favicon`, `faculty`, `teachers`, `campus`, `students`, `facebook`, `twitter`, `gplus`, `youtube`, `linkdin`, `welcome_link`, `tour_link`) VALUES
(1, 'Bangladesh University of Business and Technology', 'BUBT-Logo.png', NULL, 6, 250, 2, 11000, 'http://facebook.com', 'http://twitter.com', 'http://google.com', 'http://youtube.com', 'testsss', 'https://www.youtube.com/embed/WMq1qXh1oWE', 'https://www.youtube.com/embed/WMq1qXh1oWE');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(11) NOT NULL,
  `slider_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slider_image`) VALUES
(1, 'slider1.png'),
(2, 'slider2.jpg'),
(3, 'slider3.png'),
(4, 'slider6.png'),
(5, 'slider5.png'),
(6, 'slider7.jpg'),
(7, '01.png'),
(8, '02.png'),
(9, '03.png'),
(10, 'CB1.png'),
(11, 'aa.png'),
(12, 'devszone11.png');

-- --------------------------------------------------------

--
-- Table structure for table `success_story`
--

CREATE TABLE `success_story` (
  `story_id` int(11) NOT NULL,
  `video_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success_story`
--

INSERT INTO `success_story` (`story_id`, `video_link`) VALUES
(1, 'https://www.youtube.com/watch?v=sMzBJGiJHVk'),
(2, 'https://www.youtube.com/watch?v=3DGKgxNLnME'),
(3, 'https://www.youtube.com/watch?v=YHsAfRTlCOg'),
(4, 'https://www.youtube.com/watch?v=Pnp0upDOn6E');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', 'A4Up.wlIUmuEkue172s.de3d8a6a4385697f7f01', 1488113658, NULL, 1268889823, 1491383007, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'azamanrsl@gmail.com', '$2y$08$Qlj6IR321ifq9s2Xngin3urlGz1Rds6Ps5H40XFUeZsnRpN9qlfZS', NULL, 'azamanrsl@gmail.com', NULL, 'Owc6fMuByIuZn38Qq5hKxu2ddefc053821091671', 1488116293, NULL, 1488116038, 1488116068, 1, 'Asaduzaman', 'rasel', 'DevsZone', '01874041873');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `widget_id` int(11) NOT NULL,
  `widget_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`widget_id`, `widget_title`) VALUES
(1, 'Widget '),
(2, 'Widget 2'),
(3, 'Widget 3'),
(4, 'Widget 4'),
(5, 'Widget 5'),
(6, 'Widget6');

-- --------------------------------------------------------

--
-- Table structure for table `widget_meta`
--

CREATE TABLE `widget_meta` (
  `widget_meta_id` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL,
  `link_title` varchar(255) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget_meta`
--

INSERT INTO `widget_meta` (`widget_meta_id`, `widget_id`, `link_title`, `url`) VALUES
(46, 1, 'test22', '#1'),
(47, 1, 'tes222', '@2'),
(48, 1, 'test333', '3'),
(49, 2, 'widget 2 link', '22'),
(50, 2, 'test', '#1'),
(51, 2, 'widget 2 link33', '#22'),
(52, 3, 'test', '#'),
(53, 3, 'asd', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acheivements`
--
ALTER TABLE `acheivements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clients_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `department_menu`
--
ALTER TABLE `department_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `faculty_member`
--
ALTER TABLE `faculty_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `success_story`
--
ALTER TABLE `success_story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`widget_id`);

--
-- Indexes for table `widget_meta`
--
ALTER TABLE `widget_meta`
  ADD PRIMARY KEY (`widget_meta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acheivements`
--
ALTER TABLE `acheivements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clients_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `department_menu`
--
ALTER TABLE `department_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `faculty_member`
--
ALTER TABLE `faculty_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `success_story`
--
ALTER TABLE `success_story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `widget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `widget_meta`
--
ALTER TABLE `widget_meta`
  MODIFY `widget_meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
