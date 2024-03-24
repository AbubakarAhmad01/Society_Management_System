-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 01:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', '7ece99e593ff5dd200e2b9233d9ba654', '24-02-2021 01:10:29 AM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(1, 'E-commerce', 'E-commerce', '2017-03-28 07:10:55', '2019-06-24 07:06:04'),
(3, 'light', 'light issue', '2021-02-09 07:07:39', NULL),
(4, 'bill ', 'bill issue', '2021-02-09 07:07:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complaintremark`
--

CREATE TABLE `complaintremark` (
  `id` int(11) NOT NULL,
  `complaintNumber` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `remarkDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintremark`
--

INSERT INTO `complaintremark` (`id`, `complaintNumber`, `status`, `remark`, `remarkDate`) VALUES
(11, 26, 'in process', 'dont worry it will solve soon', '2021-02-09 07:01:59'),
(12, 29, 'closed', 'solved ', '2021-02-09 07:10:28'),
(13, 34, 'in process', 'solve soon', '2021-02-19 16:53:27'),
(14, 32, 'in process', 'jnjnkj', '2021-03-09 08:39:50'),
(15, 38, 'in process', 'ghgfhh', '2021-03-09 08:41:05'),
(16, 36, 'in process', 'in progress', '2021-03-09 08:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `helpdeskinfo`
--

CREATE TABLE `helpdeskinfo` (
  `id` int(9) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `secretryNo` int(20) DEFAULT NULL,
  `securityguardNo` int(20) DEFAULT NULL,
  `electricianNo` int(20) DEFAULT NULL,
  `ambulanceNo` int(20) DEFAULT NULL,
  `firebrigadeNo` int(20) DEFAULT NULL,
  `policeNo` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helpdeskinfo`
--

INSERT INTO `helpdeskinfo` (`id`, `email`, `secretryNo`, `securityguardNo`, `electricianNo`, `ambulanceNo`, `firebrigadeNo`, `policeNo`) VALUES
(1, 'Gokuldham@gmail.com', 1234567896, 1234567895, 1234567894, 1234567893, 1234567892, 100);

-- --------------------------------------------------------

--
-- Table structure for table `managebills`
--

CREATE TABLE `managebills` (
  `id` int(11) NOT NULL,
  `user` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `contact` bigint(11) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Address` tinytext CHARACTER SET latin1 DEFAULT NULL,
  `flatno` int(11) DEFAULT NULL,
  `maintainenceCharge` int(11) DEFAULT NULL,
  `waterbillCharge` int(11) DEFAULT NULL,
  `billDate` timestamp NULL DEFAULT current_timestamp(),
  `dueDate` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `monthofBill` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `unitConsumed` int(11) DEFAULT NULL,
  `priceperunit` int(11) DEFAULT NULL,
  `electricityCharge` int(11) DEFAULT NULL,
  `totalCharge` int(11) DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managebills`
--

INSERT INTO `managebills` (`id`, `user`, `name`, `contact`, `email`, `Address`, `flatno`, `maintainenceCharge`, `waterbillCharge`, `billDate`, `dueDate`, `monthofBill`, `unitConsumed`, `priceperunit`, `electricityCharge`, `totalCharge`, `status`) VALUES
(23, 'Abubakar@gmail.com', 'Abubakar shah', 1234567890, 'Abubakar@gmail.com', ' vashi navi mumbai', 101, 100, 100, '2021-03-06 16:21:29', '1 March 2021', '1 February 2021', 100, 5, 500, 700, NULL),
(24, 'vishal@gmail.com', 'vishal chaudhary', 1234567891, 'vishal@gmail.com', ' navi mumbai', 102, 100, 100, '2021-03-06 16:22:46', '1 March 2021', '1 February 2021', 100, 5, 500, 700, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manage_client`
--

CREATE TABLE `manage_client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_client`
--

INSERT INTO `manage_client` (`id`, `name`, `contact`, `email`, `message`, `date`) VALUES
(8, 'azan', 2147483647, 'azan123@gmail.com', 'hi', '2021-02-15 12:46:49'),
(9, 'satish', 2147483647, 'satish@gmail.com', 'hello', '2021-02-15 18:04:35'),
(10, 'zaid', 1234567890, 'zaid@gmail.com', 'hii', '2021-02-15 18:07:32'),
(11, 'vishal', 2147483647, 'vishal@gmail.com', 'hello guys', '2021-02-15 18:13:44'),
(12, 'sanjay', 2147483647, 'sanjay@gmail.com', 'hi', '2021-02-15 18:19:23'),
(13, 'satish', 1234567890, 'satish@gmail.com', 'hello ', '2021-02-16 08:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `manage_visitors`
--

CREATE TABLE `manage_visitors` (
  `id` int(11) NOT NULL,
  `visitorName` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `contactNo` bigint(11) DEFAULT NULL,
  `address` tinytext CHARACTER SET latin1 DEFAULT NULL,
  `whomTomeet` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `reasonTomeet` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `inTime` timestamp NULL DEFAULT current_timestamp(),
  `remark` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `outTime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_visitors`
--

INSERT INTO `manage_visitors` (`id`, `visitorName`, `contactNo`, `address`, `whomTomeet`, `reasonTomeet`, `inTime`, `remark`, `outTime`) VALUES
(1, 'satish', 9930184921, 'turbhe navi mumbai', 'Abubakar', 'personal', '2021-02-11 07:37:21', 'out', '2021-02-11 07:37:47'),
(2, 'sanjay', 1234567890, 'turbhe navi mumbai', 'vishal', 'personal', '2021-02-19 13:53:19', 'out', '2021-02-19 13:54:46'),
(3, 'vishal', 1234567890, 'navi mumbai', 'abu', 'personal', '2021-02-20 10:01:12', 'out', '2021-02-20 10:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(50) NOT NULL,
  `user` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Discription` text CHARACTER SET latin1 DEFAULT NULL,
  `Date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `user`, `subject`, `Discription`, `Date`) VALUES
(21, 'Abubakar@gmail.com', 'hiiii', 'hiiii hello', '2021-02-24 14:56:54'),
(24, 'vishal@gmail.com', 'hiiii', 'heloo', '2021-02-24 14:58:47'),
(34, 'Abubakar@gmail.com', 'Hello', 'HELLO BROTHER', '2021-03-03 15:54:31'),
(35, 'vishal@gmail.com', 'Hello', 'HELLO BROTHER', '2021-03-03 15:54:31'),
(36, 'Abubakar@gmail.com', 'hey', 'how r u', '2021-03-03 17:27:09'),
(37, 'vishal@gmail.com', 'meeting', 'meetint at 9pm', '2021-03-03 17:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `cardNo` int(255) DEFAULT NULL,
  `cardExp` int(11) DEFAULT NULL,
  `cardCvc` int(11) DEFAULT NULL,
  `billStatus` int(11) DEFAULT NULL,
  `payDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `flatno` int(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `deposit` int(100) DEFAULT NULL,
  `flattype` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `flatno`, `price`, `deposit`, `flattype`, `date`) VALUES
(6, 105, 12000, 25000, '2BHK', '2021-02-15 10:01:33'),
(9, 106, 15000, 20000, '2BHK', '2021-02-15 17:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(11) NOT NULL,
  `flatno` int(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `flattype` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `flatno`, `price`, `flattype`, `date`) VALUES
(1, 105, 3000000, '3BHK', '2021-02-15 10:09:57'),
(2, 103, 3000000, '3BHK', '2021-02-15 10:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `societyinfo`
--

CREATE TABLE `societyinfo` (
  `id` int(11) NOT NULL,
  `societyName` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `since` int(11) DEFAULT NULL,
  `ownerName` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `totalFlats` int(11) DEFAULT NULL,
  `totalMembers` int(11) DEFAULT NULL,
  `socAddress` tinytext CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `societyinfo`
--

INSERT INTO `societyinfo` (`id`, `societyName`, `since`, `ownerName`, `contact`, `email`, `totalFlats`, `totalMembers`, `socAddress`) VALUES
(1, 'Gokuldham Society', 2020, 'Vishal Choudhary', 2147483647, 'vishal@gmail.com', 100, 100, 'Gokuldham Society Mumbai India  ');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `stateName` varchar(255) DEFAULT NULL,
  `stateDescription` tinytext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `stateName`, `stateDescription`, `postingDate`, `updationDate`) VALUES
(3, 'Uttar Pradesh', 'up', '2016-10-18 11:35:02', '2021-02-23 18:55:56'),
(5, 'Haryana', 'Haryana', '2017-03-28 07:20:36', '0000-00-00 00:00:00'),
(6, 'Delhi', 'Delhi', '2017-06-11 10:54:12', '2019-06-24 07:24:19'),
(7, 'Maharashtra', 'mumbai', '2021-02-06 12:18:32', '2021-02-09 06:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(1, 1, 'Payment-issue', '2017-03-28 07:11:07', '2021-02-23 18:42:44'),
(3, 2, 'other', '2019-06-24 07:06:44', '2019-06-24 07:21:38'),
(4, 3, 'light issue', '2021-02-09 07:11:06', NULL),
(5, 4, 'bill issue', '2021-02-09 07:11:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaints`
--

CREATE TABLE `tblcomplaints` (
  `complaintNumber` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `complaintType` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `noc` varchar(255) DEFAULT NULL,
  `complaintDetails` mediumtext DEFAULT NULL,
  `complaintFile` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomplaints`
--

INSERT INTO `tblcomplaints` (`complaintNumber`, `userId`, `category`, `subcategory`, `complaintType`, `state`, `noc`, `complaintDetails`, `complaintFile`, `regDate`, `status`, `lastUpdationDate`) VALUES
(29, 4, 1, 'Online Shopping', 'General Query', 'Delhi', 'online shop', 'online shop', '', '2021-02-09 07:09:36', 'closed', '2021-02-09 07:10:28'),
(34, 4, 1, 'Online Shopping', 'General Query', 'Maharashtra', 'online shoping ', 'online shoping ', '', '2021-02-19 16:15:48', 'in process', '2021-02-19 16:53:27'),
(36, 4, 1, 'Payment-issue', 'General Query', 'Delhi', 'online shoping ', 'online shoping ', '', '2021-03-09 08:46:33', 'in process', '2021-03-09 08:49:16'),
(37, 8, 4, 'bill issue', 'General Query', 'Haryana', 'bill not recived', 'bill not recived', '', '2021-03-09 08:52:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(42, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-09 06:17:29', '', 1),
(43, 4, 'abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-09 06:57:17', '', 1),
(44, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-09 07:00:22', '', 1),
(45, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-09 07:08:20', '', 1),
(46, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-09 07:12:40', '09-02-2021 12:43:34 PM', 1),
(47, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-09 07:14:43', '09-02-2021 12:45:50 PM', 1),
(48, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-09 07:16:22', '', 1),
(49, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-10 07:54:09', '', 1),
(50, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-10 09:29:51', '10-02-2021 03:15:54 PM', 1),
(51, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-10 09:47:13', '10-02-2021 03:21:56 PM', 1),
(52, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-10 09:52:08', '10-02-2021 03:25:26 PM', 1),
(53, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-10 09:55:33', '10-02-2021 03:28:35 PM', 1),
(54, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-10 09:58:44', '10-02-2021 04:35:41 PM', 1),
(55, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-10 11:05:51', '10-02-2021 04:36:00 PM', 1),
(56, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-11 07:10:28', '', 1),
(57, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-11 11:05:31', '', 1),
(58, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-11 16:58:48', '12-02-2021 12:29:41 AM', 1),
(59, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-11 19:01:26', '12-02-2021 12:32:36 AM', 1),
(60, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-11 19:13:00', '12-02-2021 01:51:15 AM', 1),
(61, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-12 08:43:05', '', 1),
(62, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-12 09:45:17', '', 1),
(63, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-12 10:48:35', '12-02-2021 04:18:38 PM', 1),
(64, 5, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-12 10:49:24', '', 1),
(65, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-12 10:55:17', '12-02-2021 04:25:24 PM', 1),
(66, 5, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-12 10:55:34', '12-02-2021 04:27:57 PM', 1),
(67, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-12 10:58:05', '12-02-2021 04:28:54 PM', 1),
(68, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-12 16:22:27', '', 1),
(69, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-12 17:35:58', '12-02-2021 11:06:58 PM', 1),
(70, 5, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-12 17:37:07', '13-02-2021 01:32:08 AM', 1),
(71, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-13 06:32:15', '13-02-2021 12:03:21 PM', 1),
(72, 5, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-13 06:33:30', '13-02-2021 12:22:44 PM', 1),
(73, 6, 'vishal123@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-13 06:54:30', '13-02-2021 12:28:26 PM', 1),
(74, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-13 06:58:33', '13-02-2021 12:29:23 PM', 1),
(75, 6, 'vishal123@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-13 06:59:37', '', 1),
(76, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-13 13:55:37', '13-02-2021 07:51:11 PM', 1),
(77, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-13 18:41:49', '14-02-2021 12:27:04 AM', 1),
(78, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-13 18:57:13', '14-02-2021 12:44:06 AM', 1),
(79, 6, 'vishal123@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-13 19:14:20', '', 1),
(80, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-14 05:36:07', '14-02-2021 11:27:50 AM', 1),
(81, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-14 05:57:59', '', 1),
(82, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-14 07:20:32', '14-02-2021 01:40:57 PM', 1),
(83, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-14 08:11:07', '14-02-2021 01:41:23 PM', 1),
(84, 6, 'vishal123@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-14 08:11:37', '14-02-2021 01:46:39 PM', 1),
(85, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-14 08:16:48', '14-02-2021 01:50:18 PM', 1),
(86, 0, 'vishal123@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-14 08:20:26', '', 0),
(87, 6, 'vishal123@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-14 08:20:33', '14-02-2021 06:26:36 PM', 1),
(88, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-14 17:31:19', '', 1),
(89, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-14 18:46:12', '15-02-2021 01:52:14 AM', 1),
(90, 0, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-15 07:29:13', '', 0),
(91, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-15 07:29:21', '', 1),
(92, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-15 17:29:06', '', 1),
(93, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-15 17:33:51', '', 1),
(94, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-15 17:34:41', '', 1),
(95, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-15 18:05:03', '', 1),
(96, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-15 18:06:47', '15-02-2021 11:36:51 PM', 1),
(97, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-15 18:07:41', '', 1),
(98, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-15 18:19:57', '15-02-2021 11:50:11 PM', 1),
(99, 6, 'vishal123@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-15 18:20:30', '', 1),
(100, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-16 06:02:23', '', 1),
(101, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-16 06:17:48', '', 1),
(102, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-16 08:15:56', '', 1),
(103, 6, 'vishal123@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-16 08:20:05', '16-02-2021 01:51:45 PM', 1),
(104, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-16 08:25:56', '', 1),
(105, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-16 09:19:30', '16-02-2021 02:51:00 PM', 1),
(106, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-16 14:29:23', '16-02-2021 08:03:33 PM', 1),
(107, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-16 14:34:10', '16-02-2021 08:04:50 PM', 1),
(108, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-16 14:37:24', '', 1),
(109, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-16 14:55:43', '', 1),
(110, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 06:58:01', '', 1),
(111, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 07:43:10', '', 1),
(112, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 12:20:43', '', 1),
(113, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 13:32:34', '', 1),
(114, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 14:52:39', '', 1),
(115, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 15:37:41', '', 1),
(116, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 16:50:11', '', 1),
(117, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 18:07:55', '', 1),
(118, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 18:14:03', '17-02-2021 11:44:38 PM', 1),
(119, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 18:27:43', '', 1),
(120, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-17 19:37:46', '18-02-2021 01:13:11 AM', 1),
(121, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 10:37:40', '', 1),
(122, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 11:20:36', '', 1),
(123, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 05:58:10', '', 1),
(124, 0, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 13:03:04', '', 0),
(125, 0, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 13:03:55', '', 0),
(126, 0, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 13:04:14', '', 0),
(127, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 13:06:52', '19-02-2021 06:39:23 PM', 1),
(128, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 13:53:43', '', 1),
(129, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 14:25:38', '19-02-2021 07:57:43 PM', 1),
(130, 0, 'vishal123@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 14:27:52', '', 0),
(131, 6, 'vishal123@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 14:28:00', '19-02-2021 08:00:10 PM', 1),
(132, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 14:31:49', '', 1),
(133, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 14:33:42', '', 1),
(134, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 14:44:11', '', 1),
(135, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 16:15:07', '', 1),
(136, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 16:25:25', '', 1),
(137, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 17:16:56', '19-02-2021 10:47:41 PM', 1),
(138, 0, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 17:17:52', '', 0),
(139, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 17:18:05', '19-02-2021 11:16:46 PM', 1),
(140, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 17:47:15', '19-02-2021 11:17:27 PM', 1),
(141, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 17:48:34', '19-02-2021 11:18:37 PM', 1),
(142, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 17:53:19', '19-02-2021 11:32:25 PM', 1),
(143, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 18:02:32', '19-02-2021 11:34:42 PM', 1),
(144, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 18:04:48', '', 1),
(145, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 18:12:23', '', 1),
(146, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-19 18:47:29', '20-02-2021 12:23:56 AM', 1),
(147, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 07:32:51', '', 1),
(148, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 07:59:06', '', 1),
(149, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 08:45:38', '', 1),
(150, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 08:47:24', '', 1),
(151, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 10:03:32', '', 1),
(152, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 15:11:54', '20-02-2021 08:44:13 PM', 1),
(153, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-21 06:04:52', '21-02-2021 12:03:03 PM', 1),
(154, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-22 14:01:46', '', 1),
(155, 7, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 06:18:14', '24-02-2021 01:44:57 PM', 1),
(156, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 08:15:08', '24-02-2021 01:45:25 PM', 1),
(157, 7, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 08:15:35', '24-02-2021 01:45:54 PM', 1),
(158, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 08:30:48', '24-02-2021 02:57:24 PM', 1),
(159, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 12:56:43', '', 1),
(160, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 13:28:57', '24-02-2021 06:59:16 PM', 1),
(161, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 13:45:28', '24-02-2021 07:15:40 PM', 1),
(162, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 13:46:04', '24-02-2021 07:35:28 PM', 1),
(163, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 14:05:34', '24-02-2021 08:32:02 PM', 1),
(164, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 15:02:15', '24-02-2021 09:10:06 PM', 1),
(165, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 15:40:16', '24-02-2021 09:10:24 PM', 1),
(166, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 15:40:58', '24-02-2021 09:58:18 PM', 1),
(167, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 16:28:27', '24-02-2021 09:58:38 PM', 1),
(168, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 16:28:47', '24-02-2021 10:29:48 PM', 1),
(169, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 16:59:55', '24-02-2021 10:32:26 PM', 1),
(170, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-24 17:45:47', '25-02-2021 12:42:12 AM', 1),
(171, 0, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 13:49:55', '', 0),
(172, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 13:50:02', '', 1),
(173, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 15:58:19', '', 1),
(174, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 16:31:37', '26-02-2021 01:53:01 AM', 1),
(175, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-26 11:34:46', '', 1),
(176, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-26 12:29:20', '26-02-2021 05:59:29 PM', 1),
(177, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-26 12:29:41', '', 1),
(178, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-28 09:27:02', '', 1),
(179, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-28 09:30:57', '28-02-2021 03:07:07 PM', 1),
(180, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-28 09:40:19', '', 1),
(181, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-28 11:46:59', '28-02-2021 08:33:16 PM', 1),
(182, 0, 'vishal@gmail.com1234', 0x3a3a3100000000000000000000000000, '2021-03-01 06:27:17', '', 0),
(183, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-01 06:27:28', '01-03-2021 12:00:53 PM', 1),
(184, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-01 07:18:06', '01-03-2021 02:35:30 PM', 1),
(185, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-01 09:05:37', '01-03-2021 03:49:27 PM', 1),
(186, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-03 08:10:49', '', 1),
(187, 0, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-03 17:26:32', '', 0),
(188, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-03 17:26:42', '03-03-2021 10:57:51 PM', 1),
(189, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-03 17:27:58', '', 1),
(190, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-06 14:12:30', '06-03-2021 07:50:33 PM', 1),
(191, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-06 14:20:46', '06-03-2021 08:11:19 PM', 1),
(192, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-06 14:41:27', '06-03-2021 08:11:47 PM', 1),
(193, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-06 14:41:58', '06-03-2021 08:16:10 PM', 1),
(194, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-06 14:46:17', '06-03-2021 08:30:18 PM', 1),
(195, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-06 15:12:16', '06-03-2021 09:45:11 PM', 1),
(196, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-06 16:15:46', '06-03-2021 09:47:47 PM', 1),
(197, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-06 16:17:54', '', 1),
(198, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-09 07:47:43', '', 1),
(199, 4, 'Abubakar@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-09 08:46:12', '', 1),
(200, 8, 'vishal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-09 08:52:16', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` bigint(11) DEFAULT NULL,
  `address` tinytext DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `flatNo` int(11) DEFAULT NULL,
  `flatType` varchar(255) DEFAULT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `address`, `State`, `country`, `pincode`, `flatNo`, `flatType`, `userImage`, `regDate`, `updationDate`, `status`) VALUES
(4, 'Abubakar shah', 'Abubakar@gmail.com', '3b81b1bca0e0c6ca003549dc036d422e', 1234567890, 'Vashi navi Mumbai', 'Maharashtra', 'india', 400703, 101, '2BHK', '3e42ed504c72be0b4c9b3775ff283953.jpg', '2021-02-09 06:17:02', '2021-03-06 16:17:40', 1),
(8, 'Vishal Choudhary', 'vishal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1234567891, 'navi mumbai', 'Maharashtra', 'india', 400703, 102, '2BHK', 'fcd96cd11c42808ef47be8a086bd3961jpeg', '2021-02-24 13:45:55', '2021-03-06 16:18:42', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaintremark`
--
ALTER TABLE `complaintremark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpdeskinfo`
--
ALTER TABLE `helpdeskinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managebills`
--
ALTER TABLE `managebills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_client`
--
ALTER TABLE `manage_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_visitors`
--
ALTER TABLE `manage_visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `societyinfo`
--
ALTER TABLE `societyinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  ADD PRIMARY KEY (`complaintNumber`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `complaintremark`
--
ALTER TABLE `complaintremark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `helpdeskinfo`
--
ALTER TABLE `helpdeskinfo`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `managebills`
--
ALTER TABLE `managebills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `manage_client`
--
ALTER TABLE `manage_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `manage_visitors`
--
ALTER TABLE `manage_visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `societyinfo`
--
ALTER TABLE `societyinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  MODIFY `complaintNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
