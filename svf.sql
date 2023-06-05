-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 12:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svf`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `departname` varchar(100) NOT NULL,
  `hod` int(11) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `departname`, `hod`, `contact`, `img`, `created_at`, `updated_at`) VALUES
(13, 'Computer', 23, '9849762334', '', '2022-10-18 10:43:01', NULL),
(14, 'English', 31, '9851174368', '', '2022-10-18 10:43:49', NULL),
(15, 'Science', 30, '9849856114', '', '2022-10-18 10:44:21', NULL),
(16, 'Korean Language', 29, '9856051009', '', '2022-10-18 10:45:13', NULL),
(17, 'Japanese Languge', 29, '9856051009', '', '2022-11-01 07:59:26', NULL),
(18, 'Tuition', 29, '9856051009', '', '2022-11-01 16:11:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `form` varchar(100) NOT NULL,
  `stdsname` varchar(100) NOT NULL,
  `sex` enum('male','female') DEFAULT 'male',
  `contactnum` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `parentcontact` varchar(100) DEFAULT NULL,
  `course` int(11) DEFAULT NULL,
  `teacherid` int(11) NOT NULL,
  `classtime` enum('5am','6am','7am','8am','9am','10am','11am','12pm','1pm','2pm','3pm','4pm','5pm','6pm','7pm','8pm') DEFAULT NULL,
  `acaqua` varchar(100) DEFAULT NULL,
  `schname` varchar(100) DEFAULT NULL,
  `formfee` varchar(100) NOT NULL,
  `totalfee` varchar(100) DEFAULT NULL,
  `givenfee` varchar(100) DEFAULT NULL,
  `dateofadmission` varchar(100) DEFAULT NULL,
  `dateofending` varchar(100) DEFAULT NULL,
  `img` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `form`, `stdsname`, `sex`, `contactnum`, `address`, `email`, `parentcontact`, `course`, `teacherid`, `classtime`, `acaqua`, `schname`, `formfee`, `totalfee`, `givenfee`, `dateofadmission`, `dateofending`, `img`, `created_at`, `updated_at`) VALUES
(16, '1204', 'Kalsang Lama', 'male', '9825052831', 'Tarkeshwor', '', '9817669662', 16, 28, '8am', '12', '', '100', '18000', '0', '2079-07-01', '', '', '2022-10-18 11:15:08', '2022-11-10 08:57:50'),
(17, '1203', 'Suman k Simkhada', 'male', '9864359987', 'Tokha', '', '', 16, 28, '8am', '12', '', '100', '18000', '0', '2079-06-31', '', '', '2022-10-18 11:30:04', '2022-10-31 13:06:53'),
(18, '1202', 'Narayan Neupane', 'male', '9848348915', 'Tokha', 'narayanneupane623@gmail.com', '', 16, 28, '8am', '', '', '100', '15000', '15000', '2079-06-31', '', '', '2022-10-18 11:32:39', '2022-12-04 13:46:44'),
(19, '1201', 'Ashika Aryal', 'female', '9860148107', 'Kalanki', 'aryalashika43@gmail.com', '9862264414', 16, 28, '8am', '12', 'ED Mark Academy', '100', '18000', '3000', '2079-06-31', '', '', '2022-10-18 11:35:24', '2022-11-16 10:34:38'),
(20, '1151', 'Hira bahadur Tamang', 'male', '9869064522', 'Nuwakot', '', '', 16, 28, '8am', '12', '', '100', '18000', '3000', '2079-06-30', '', '', '2022-10-18 11:37:35', '2022-11-08 15:26:05'),
(21, '2976', 'Pushpa Maya Chhetri', 'female', '9818690285', 'Samakhusi', 'pchhetriushpa123@gmail.com', '', 19, 31, '8am', 'Bachelor', 'Trichandra Multiple Campus', '100', '7000', '7000', '2079-06-26', '', '', '2022-10-18 11:40:31', '2022-11-13 12:32:52'),
(23, '1153', 'Babina Shrestha', 'female', '9826188158', 'Tokha', '', '', 10, 23, '1pm', '12', '', '100', '6000', '6000', '2079-06-28', '', 'Student-20221018024052510.jpg', '2022-10-18 14:40:52', '2022-11-23 14:38:53'),
(24, '1205', 'Dipendra Thapaliya', 'male', '9806518301', 'Basundhara', 'thapaliya9@gmail.com', '9806529490', 10, 23, '8am', 'Bachelor', 'Saraswati Multiple Campus', '100', '6000', '0', '2079-07-01', '', '', '2022-10-18 15:10:31', '2022-10-31 13:10:58'),
(25, '1209', 'Aakansha Waiba', 'female', '9848822797', 'Dhading', '', '', 17, 31, '9am', '12', '', '100', '4500', '4500', '2079-07-04', '', '', '2022-10-21 10:42:51', '2022-11-16 09:05:58'),
(26, '1210', 'Anisha Dimdung', 'female', '9860003955', 'Dhading', '', '', 17, 31, '9am', '12', '', '100', '4500', '4500', '2079-07-04', '', '', '2022-10-21 10:44:50', '2022-11-16 08:52:38'),
(27, '1155', 'Chandra Bahadur Thapa', 'male', '9840162740', 'MitraPark, Buspark', 'pm147653@gmail.com', '9747076003', 10, 23, '12pm', '+2', '', '100', '2500', '2500', '2079-07-12', '2079-07-25', 'Student-20221029025354113.jpg', '2022-10-29 14:53:54', '2022-11-11 11:17:22'),
(28, '1211', 'Chhatra bahadur tamang', 'male', '9861161170', 'Kam Bazzar Santitol', '', '', 16, 28, '6am', '12', '', '100', '18000', '2500', '2079-07-14', '', 'Student-20221101075408807.jpg', '2022-10-31 12:36:17', '2022-11-02 11:43:26'),
(29, '1157', 'Ranju Maharajan', 'female', '9862254196', 'Manamaiju 9', 'maharjanranju66@gmail.com', '', 19, 31, '7am', 'Bachelor', '', '100', '6000', '4000', '2079-07-15', '', '', '2022-11-01 10:36:37', '2022-11-11 10:29:28'),
(30, '2980', 'Dipika Khadka', 'female', '9847666292', 'Syambhu, KTM', '', '', 16, 28, '8am', '12', '', '100', '18000', '16000', '2079-06-07', '', '', '2022-09-07 10:50:41', '2022-11-07 12:47:51'),
(31, '2379', 'Deepa Kumark Basnet', 'female', '9765597176', 'Saymbhu', '', '', 16, 28, '8am', '12', '', '100', '18000', '9000', '2079-06-07', '', '', '2022-09-07 11:04:44', '2022-11-07 12:48:04'),
(32, '1156', 'Safal Thapa', 'male', '9867603099', 'Samakhusi', 'safalmagar02@gmail.com', '9847119439', 22, 29, '3pm', '12(Running)', 'Canvas Int College', '100', '66000', '60000', '2079-07-15', '', 'Student-2022110104394512.jpg', '2022-11-01 16:17:01', '2022-12-06 12:31:54'),
(33, '1158', 'Santa Bahadur Ghale', 'male', '9813228475', 'Manamaiju 9', '', '', 16, 28, '6am', '12', '', '100', '18000', '0', '2079-07-16', '', '', '2022-11-02 11:46:21', '2022-11-11 11:02:05'),
(34, '778', 'Dipak Budha Magar', 'male', '9865026902', 'Phutung', '', '', 16, 28, '9am', '10 pass', '', '100', '18000', '0', '2079-07-16', '', 'Student-20221103110439159.jpg', '2022-11-02 11:50:20', '2022-11-03 11:04:39'),
(35, '1159', 'Ashish Sapkota', 'male', '9845651623', 'Gorkha', 'sapkotaashish35@gmail.com', '', 23, 23, '11am', 'Bachelor', 'Gramin', '100', '5000', '2000', '2079-07-16', '', '', '2022-11-02 12:21:22', '2022-12-02 12:59:01'),
(36, '2982', 'Rachana pun magar', 'female', '9842317941', 'Tokha', 'khumarajpun857@gmail.com', '9840494165', 18, 33, '7am', '12 pass', '', '100', '5000', '5000', '2079-07-16', '', 'Student-20221102022821604.jpg', '2022-11-02 14:28:21', '2022-11-03 10:45:34'),
(37, '2982', 'Rachana Pun Magar', 'female', '9842317941', 'Tokha', 'khumrajpun857@gmail.com', '9840494165', 10, 23, '8am', '12', '', '100', '6000', '6000', '2079-07-16', '', 'Student-20221103105724328.jpg', '2022-11-03 10:54:46', '2022-12-01 14:07:36'),
(38, '2984', 'Janaki Magar', 'female', '9862906467', 'Tokha', '', '9841945139', 16, 28, '1pm', '12', 'Baundeshwor', '100', '18000', '5000', '2079-07-17', '', 'Student-20221103013431599.jpg', '2022-11-03 13:34:31', '2022-11-09 12:15:00'),
(39, '2983', 'Kumari Gurung', 'female', '9823553378', 'Baniyatar', '', '', 17, 31, '1pm', '10 pass', '', '100', '8000', '5000', '2079-07-17', '', '', '2022-11-03 14:00:34', NULL),
(40, '1164', 'Ram Sharan Tamang', 'male', '9864295620', 'KTM', '', '', 16, 28, '6am', '12', '', '100', '18000', '13400', '2079-07-18', '', '', '2022-11-04 10:31:57', '2022-11-07 10:27:43'),
(41, '1163', 'Sunil Ale Magar', 'male', '9749874738', 'KTM', '', '', 16, 28, '6am', '12', '', '100', '18000', '4900', '2079-07-18', '', '', '2022-11-04 10:36:11', '2022-11-07 10:26:01'),
(42, '1165', 'Sarita Giri', 'female', '9746455048', 'Tarkeshwor - 9', 'sg4151034@gmail.com', '9810065806', 11, 23, '8am', '12', '', '100', '6000', '6000', '2079-07-18', '', '', '2022-11-04 10:41:07', '2022-12-07 14:55:20'),
(43, '1161', 'Anju Pokhrel', 'female', '9813811114', 'Macchapokhari ', 'anzupokhrel97@gmail.com', '9866494666', 25, 32, '5pm', 'Bachelor', 'puspalal Memorial College', '100', '2500', '2500', '2079-07-21', '', 'Student-20221107051253578.jpg', '2022-11-04 11:14:58', '2022-11-07 17:12:53'),
(44, '1161', 'Anju Pokhrel', 'female', '9813811114', 'Macchapokhari ', 'anzupokhrel97@gmail.com', '9866494666', 27, 29, '6pm', 'Bachelor', 'puspalal Memorial College', '100', '2500', '0', '2079-07-21', '', '', '2022-11-04 11:16:58', NULL),
(45, '1162', 'Roji Tamli', 'female', '9823477965', 'Handigaun , KTM', 'rojisubba1@gmail.com', '9813487773', 25, 32, '5pm', 'Bachelor', 'puspalal Memorial College', '100', '2500', '2500', '2079-07-21', '', 'Student-2022110705094977.jpg', '2022-11-04 11:20:47', '2022-11-07 17:09:49'),
(46, '1162', 'Roji Tamli', 'female', '9823477965', 'Handigaun , KTM', 'rojisubba1@gmail.com', '9813487773', 27, 29, '6pm', 'Bachelor', 'puspalal Memorial College', '100', '2500', '0', '2079-07-21', '', '', '2022-11-04 11:22:32', NULL),
(47, '1166', 'Anisha Lama ', 'female', '9810124686', 'Tokha', '', '9849954586', 19, 31, '8am', '12', 'NEA', '100', '7000', '3000', '2079-07-18', '', '', '2022-11-04 12:57:45', '2022-11-08 11:53:59'),
(48, '2988', 'Sashika Gurung', 'female', '9847771342', 'Manamaiju 9', '', '', 16, 28, '6am', '12', '', '100', '18000', '6000', '2079-07-20', '', '', '2022-11-06 11:01:21', '2022-11-16 10:33:06'),
(49, '2985', 'Sahadev Dulal', 'male', '9840035842', 'Nuwakot', 'dulalsahadev111@gmail.com', '9808704468', 16, 28, '6am', '12', '', '100', '18000', '5000', '2079-07-20', '', '', '2022-11-06 11:09:16', '2022-11-16 10:30:09'),
(50, '2986', 'Urmila Tamang', 'female', '9866265672', 'Tarkeshwor', 'urmeetamang1360@gmail.com', '', 16, 28, '8am', '12', 'SS Collage', '100', '18000', '0', '2079-07-20', '', '', '2022-11-06 11:17:42', NULL),
(53, '1214', 'Ram Chandra timsina', 'male', '9841212081', 'Nuwakot', '', '9801017660', 16, 28, '12pm', '12', '', '100', '18000', '5000', '2079-07-20', '', 'Student-20221106013453902.jpg', '2022-11-06 13:34:53', '2022-11-09 13:44:29'),
(54, '1217', 'Nishan Magar', 'male', '9865148088', 'Baniyatar', '', '9841565265', 16, 28, '6am', '12', '', '100', '15000', '7000', '2079-07-20', '', '', '2022-11-06 14:32:05', '2022-11-11 07:16:28'),
(55, '1218', 'Maya Tamang', 'female', '9840805816', 'Manamaiju 9', 'tamangmaya4526@gmail.com', '9862253121', 19, 31, '4pm', 'Diploma', '', '100', '5000', '5000', '2079-07-20', '', '', '2022-11-06 15:45:31', '2022-11-25 15:59:20'),
(56, '2909', 'Yashoda Baigar', 'female', '9819506432', 'Gongabu Chowk', '', '9810013362', 10, 23, '8am', '12', '', '100', '6000', '1900', '2079-07-21', '', '', '2022-11-07 10:38:02', '2022-11-16 08:57:23'),
(57, '2990', 'Mamata Gharti Magar', 'female', '9806274165', 'Dang', 'magarmamata393@gmail.com', '9809878516', 16, 28, '12pm', '12', '', '100', '18000', '900', '2079-07-21', '', '', '2022-11-07 10:57:50', '2022-11-09 12:15:48'),
(58, '1219', 'Pratiksha Gaire', 'female', '9860541181', 'Manamaiju 9', 'pratikshagaire57@gmail.com', '', 28, 23, '1pm', 'Bachelor', 'Shahid multiple campus', '100', '5600', '0', '2079-07-21', '', '', '2022-11-07 13:16:39', '2022-11-23 14:40:53'),
(59, '1167', 'Januka Devkota', 'female', '9840921405', 'Manamaiju 9', '', '', 28, 23, '12pm', 'Bachelor', 'Padma clz', '100', '5600', '5600', '2079-07-21', '', '', '2022-11-07 13:18:27', '2022-12-01 13:04:55'),
(60, '2991', 'Ashish Tamang', 'male', '9803088160', 'Tarkeshwor, Nuwakot', 'aasisht082@gmail.com', '9803987186', 16, 28, '6am', '12', 'Sankha Devi secondary', '100', '18000', '4000', '2079-07-22', '', 'Student-20221108114851327.jpg', '2022-11-08 11:34:39', '2022-11-16 10:32:15'),
(61, '2992', 'Pode Tamang', 'male', '9813501001', 'Tarkeshwor, Nuwakot', '', '', 16, 28, '6am', '12', '', '100', '18000', '200', '2079-07-22', '', '', '2022-11-08 11:38:08', NULL),
(62, '2994', 'Sandesh Meyongba', 'male', '9827932093', 'Buspark', 'sandieslimbuo@gmail.com', '9826978693', 16, 28, '6am', '12', '', '100', '18000', '500', '2079-07-22', '', '', '2022-11-08 11:42:32', '2022-12-01 13:47:26'),
(63, '2993', 'Ashok Gurung', 'male', '9812475784', 'Baniyatar', 'gurungashok920@gmail.com', '', 20, 31, '9am', '12', '', '100', '7000', '0', '2079-07-22', '', '', '2022-11-08 11:53:05', NULL),
(64, '2995', 'Sofina Balal Magar', 'female', '9818272154', 'Surya Dharshan Height', 'sofinamagar777@gmail.com', '9803497110', 16, 28, '12pm', '12', '', '100', '8000', '8000', '2079-07-22', '', '', '2022-11-08 14:34:43', '2022-11-08 14:35:29'),
(65, '2995', 'Sofina Balal Magar', 'male', '9818272154', 'Surya Dharshan Height', 'sofinamagar777@gmail.com', '9803497110', 10, 23, '8am', '12', '', '100', '5000', '5000', '2079-07-22', '', '', '2022-11-08 14:37:12', '2022-12-01 14:01:17'),
(66, '1220', 'Aarati Thapa Magar', 'female', '9823820693', 'Gongabu Chowk', '', '', 18, 33, '7am', '12', '', '100', '18000', '5400', '2079-07-23', '', '', '2022-11-09 12:00:49', '2022-11-14 10:55:58'),
(67, '2996', 'Sonika Tamang', 'female', '9861738603', 'Dhading', '', '', 10, 23, '8am', '12', '', '100', '6000', '0', '2079-07-23', '', '', '2022-11-09 12:13:56', NULL),
(68, '1222', 'Goma Poudel', 'female', '9849146709', 'Tarkeshwor', '', '', 29, 23, '7am', '12', '', '100', '1050', '500', '2079-07-23', '', '', '2022-11-09 15:05:54', '2022-11-10 10:30:51'),
(70, '1223', 'Indu Karki', 'female', '9843289167', 'Dhapashi', '', '', 18, 33, '5pm', '12', '', '100', '18000', '3000', '2079-07-23', '', 'Student-20221111104838810.jpg', '2022-11-09 16:40:15', '2022-11-13 16:13:44'),
(71, '1224', 'Yanjen pejaba Bhote', 'female', '9803429950', 'Manamaiju', 'yanjenpejaba16@gmail.com', '', 18, 33, '5pm', '12', '', '100', '10000', '0', '2079-07-23', '', '', '2022-11-10 10:19:53', NULL),
(72, '2997', 'Hikmat Bista', 'male', '9869655586', 'Tokha', 'bistahikmat216@gmail.com', '', 19, 31, '7am', '12', '', '100', '7000', '3000', '2079-07-24', '', '', '2022-11-10 10:24:25', '2022-11-13 12:03:03'),
(73, '1225', 'Devendra singh', 'male', '9865729874', 'Manamaiju 9', 'singhdevendra2058@gmail.com', '', 16, 28, '12pm', '12', '', '100', '17000', '17000', '2079-07-25', '', '', '2022-11-11 10:45:09', '2022-11-27 12:00:11'),
(74, '1228', 'Dill Kumari Tamang', 'female', '9846643051', 'Samakhusi', '', '9849649679', 28, 23, '8am', '12', '', '100', '8000', '2100', '2079-07-25', '', '', '2022-11-11 16:50:33', NULL),
(75, '3000', 'Krishna Budha Thoki', 'male', '9809767120', 'Gongabu Chowk', 'krishnabudhathoki835@gmail.com', '9822819559', 19, 31, '6am', '12', '', '100', '7000', '3000', '2079-07-27', '', '', '2022-11-13 15:48:01', '2022-11-16 10:33:51'),
(76, '2999', 'Saroj Pandit', 'male', '9744239647', 'Manamaiju', 'sarojchhetri898@gmail.com', '', 16, 28, '6am', '12', '', '100', '18000', '5000', '2079-07-27', '', '', '2022-11-13 15:50:27', '2022-11-28 12:12:12'),
(77, '2998', 'Bikram pandit', 'male', '9823449241', 'Manamaiju', '', '', 16, 28, '6pm', 'see', '', '100', '18000', '5000', '2079-07-27', '', '', '2022-11-13 16:09:29', '2022-12-02 11:48:13'),
(78, '1168', 'Chhabilal pun', 'male', '9806208037', 'pabitra nagar', '', '', 15, 23, '4pm', 'Diploming', '', '100', '25000', '5000', '2079-07-27', '', '', '2022-11-13 16:12:25', '2022-11-15 16:09:00'),
(79, '1231', 'Simran pariyar', 'female', '9806150962', 'Manamaiju', '', '9806106242', 30, 23, '12pm', '12', 'Angle Heart', '100', '6000', '6000', '2079-07-27', '', '', '2022-11-13 17:13:55', '2022-12-01 13:10:00'),
(80, '1232', 'Deepak Raj Sunar', 'male', '9804529626', 'Jalpa Chowk', '', '', 16, 28, '6pm', '10 pass', '', '100', '18000', '0', '2079-07-28', '', '', '2022-11-14 10:44:26', NULL),
(81, '1233', 'Bijay Gurung', 'male', '9829046747', 'Gorkha', '', '', 16, 28, '8am', '12', '', '100', '18000', '3500', '2079-07-28', '', '', '2022-11-14 10:46:21', '2022-11-30 11:02:22'),
(82, '1229', 'Alina Sinjali', 'female', '9810995738', 'Samakhusi', '', '9847893324', 18, 33, '7am', '12', '', '100', '18000', '0', '2079-07-27', '', '', '2022-11-14 10:50:42', NULL),
(83, '1230', 'Sushma Thapa Magar', 'female', '9823383154', 'Manamaiju', 'susmathapa@gmail.com', '', 18, 33, '7am', '12', '', '100', '18000', '0', '2079-07-27', '', '', '2022-11-14 10:53:35', NULL),
(84, '1226', 'Niruta Shrestha', 'female', '9809152769', 'Gongabu Chowk', '', '9861736375', 16, 28, '12pm', '12', '', '100', '18000', '5000', '2079-07-25', '', '', '2022-11-14 11:14:54', '2022-11-23 12:21:54'),
(85, '1234', 'Kusum Lama', 'female', '9840184763', 'Gongabu Chowk', '', '', 20, 31, '6am', 'BBA Pass', '', '100', '7000', '0', '2079-07-29', '', '', '2022-11-15 10:37:57', NULL),
(86, '1235', 'Dipesh Thapa', 'male', '9821947138', 'Sesmati', 'dipeshchetri@gmail.com', '9806993811', 16, 28, '12pm', '12', '', '100', '18000', '0', '2079-07-29', '', '', '2022-11-15 13:45:27', NULL),
(87, '2994', 'Sandesh Meyongba', 'male', '9827932093', 'Buspark', '', '', 10, 23, '8am', '', '', '100', '5000', '5000', '2079-07-22', '', '', '2022-11-16 08:51:18', '2022-12-01 13:48:14'),
(88, '1210', 'Anisha Dimdung', 'female', '9860003955', 'Manamaiju', '', '', 11, 23, '8am', '', '', '100', '6000', '0', '2079-07-04', '', '', '2022-11-16 08:54:29', '2022-12-01 13:43:22'),
(89, '1165', 'Sarita Giri', 'female', '9746455048', 'Manamaiju', '', '', 18, 33, '7am', '', '', '100', '5000', '5000', '2079-07-18', '', '', '2022-11-16 08:56:31', '2022-11-29 09:04:17'),
(90, '1210', 'Anisha Dimdung', 'female', '9860003955', 'Manamaiju', '', '', 16, 28, '9am', '', '', '100', '18000', '0', '2079-07-04', '', '', '2022-11-16 09:01:05', NULL),
(91, '1209', 'Akanksha Waiba', 'female', '98488822797', 'Manamaiju', '', '', 11, 23, '8am', '', '', '100', '6000', '0', '2079-07-04', '', '', '2022-11-16 09:04:59', '2022-12-01 13:42:01'),
(92, '1209', 'Akanksha Waiba', 'female', '98488822797', 'Manamaiju', '', '', 16, 28, '9am', '', '', '100', '18000', '0', '2079-07-04', '', '', '2022-11-16 09:05:39', NULL),
(93, '1170', 'Bishal Khatiwada', 'male', '9810142499', 'Kalanki', 'bishalkhatiwada28@gmail.com', '9803840113', 16, 28, '8am', '12', '', '100', '18000', '3000', '2079-07-30', '', '', '2022-11-16 10:40:22', '2022-12-04 13:44:38'),
(94, '1239', 'Jyamkeshal Garbuja', 'female', '9748764463', 'Gongabu Chowk', '', '', 31, 29, '3pm', '12', 'Angel Heart', '100', '2000', '1000', '2079-08-02', '', '', '2022-11-23 12:41:34', NULL),
(95, '1240', 'krisha Pariyar', 'female', '9810083334', 'Ghale Pun', 'pariyarkrisha13@gmail.com', '9818903529', 26, 29, '7am', 'Bachelor', 'Padma clz', '100', '2500', '0', '2079-08-06', '', '', '2022-11-23 12:47:27', NULL),
(96, '1240', 'krisha Pariyar', 'female', '9810083334', 'Ghale Pun', 'pariyarkrisha13@gmail.com', '9818903529', 24, 29, '8am', 'Bachelor', 'Padma clz', '100', '2500', '0', '2079-08-06', '', '', '2022-11-23 12:49:50', NULL),
(97, '1241', 'Sudha magar', 'female', '9808501338', 'Baniyatar', '', '9851017225', 16, 28, '7am', '12', 'NR', '100', '16000', '15000', '2079-08-06', '', '', '2022-11-23 12:53:32', '2022-11-28 15:50:21'),
(98, '1242', 'Laxmi Thapa Magar', 'female', '9849477932', 'Baniyatar', '', '', 16, 28, '7am', '12', '', '100', '16000', '15000', '2079-08-06', '', '', '2022-11-23 12:55:58', '2022-11-28 15:49:06'),
(99, '1243', 'Manisha Ghale', 'female', '9818317736', 'LOktrantrik Chowk', '', '', 26, 29, '7am', 'Bachelor', '', '100', '2500', '0', '2079-08-06', '', '', '2022-11-23 13:04:52', NULL),
(100, '1243', 'Manisha Ghale', 'female', '9818317736', 'LOktrantrik Chowk', '', '', 24, 29, '7am', 'Bachelor', '', '100', '2500', '0', '2079-08-06', '', '', '2022-11-23 13:06:05', NULL),
(101, '1244', 'Sanjay Rai', 'male', '9814042366', 'Panchthar', '', '', 16, 28, '6am', '12', '', '100', '15500', '15500', '2079-08-06', '', '', '2022-11-23 13:11:45', '2022-11-29 11:01:43'),
(102, '1245', 'Muna Rai', 'female', '9813807107', 'panchter', '', '', 16, 28, '6am', '12', '', '100', '15500', '15500', '2079-08-06', '', '', '2022-11-23 13:14:08', '2022-11-29 11:02:49'),
(103, '1247', 'Sarita  Tamang', 'female', '9865459823', 'Manamaiju', 'saritatm117@gmail.com', '9746428800', 16, 28, '12pm', '12', 'Gramin', '100', '17000', '5900', '2079-08-06', '', '', '2022-11-23 13:17:44', '2022-12-04 13:46:02'),
(104, '1248', 'Sabina bohora', 'female', '9741868070', 'Samakhusi', '', '9841599380', 17, 31, '4pm', 'Bachelor', '', '100', '10000', '2000', '2079-08-06', '', '', '2022-11-23 13:28:02', '2022-11-25 12:34:11'),
(105, '1246', 'Barsha Karki', 'female', '9848911822', 'Manamaiju', 'karkibarsha2@gmail.com', '9813768780', 26, 29, '7am', 'Bachelor', '', '100', '2500', '0', '2079-08-06', '', '', '2022-11-23 13:31:36', NULL),
(106, '1246', 'Barsha Karki', 'female', '9848911822', 'Manamaiju', 'karkibarsha2@gmail.com', '9813768780', 24, 29, '7am', 'Bachelor', '', '100', '2500', '0', '2079-08-06', '', '', '2022-11-23 13:33:09', NULL),
(107, '1251', 'Pabitra BHatta', 'female', '9849680917', 'Nepaltar', '', '', 20, 31, '10am', 'master', '', '100', '15000', '5000', '2079-08-07', '', '', '2022-11-23 13:42:12', '2022-11-25 12:33:36'),
(109, '1250', 'Bishal Rai', 'male', '9813448353', 'Basundhara', '', '', 32, 31, '11am', '12', '', '100', '6000', '6000', '2079-08-07', '', '', '2022-11-23 14:06:22', '2022-11-25 12:22:22'),
(110, '1236', 'Akriti Gurung', 'female', '9818362866', 'Jalapa Chok ', '', '', 26, 29, '7am', 'Bachelor', '', '100', '2500', '0', '2079-08-06', '', '', '2022-11-23 14:25:48', NULL),
(111, '1236', 'Akriti Gurung', 'female', '9818362866', 'Jalapa Chok ', '', '', 24, 29, '7am', 'Bachelor', '', '100', '2500', '0', '2079-08-06', '', '', '2022-11-23 14:27:48', NULL),
(112, '1249', 'Anjana Tamang', 'female', '9823391070', 'Tokha', '', '', 10, 23, '8am', 'Bachelor', 'Saraswati Multiple Campus', '100', '5000', '0', '2079-08-07', '', '', '2022-11-23 14:44:23', NULL),
(113, '1254', 'Kyatrina Lama', 'female', '9742893834', 'Samakhusi', '', '986100591', 33, 23, '7am', 'Bachelor', '', '100', '3000', '1400', '2079-08-08', '', '', '2022-11-24 12:05:51', NULL),
(114, '1255', 'Sangita Rimal', 'female', '9840182363', 'Baniyatar', '', '', 10, 23, '12pm', 'Bachelor', 'NR', '100', '5000', '5000', '2079-08-08', '', '', '2022-11-24 13:19:34', '2022-11-27 11:56:14'),
(115, '1256', 'Bishal Kumar Agri', 'male', '9842886941', 'Rani BARI', '', '', 34, 31, '2pm', '12', 'Maheshwary S S', '100', '15000', '12000', '2079-08-08', '', '', '2022-11-24 15:44:57', '2022-11-25 14:17:34'),
(116, '1260', 'Sudip Giri', 'male', '9816617253', 'Palungtar', '', '9846181959', 12, 23, '12pm', '12', '', '100', '12000', '0', '2079-08-08', '', '', '2022-11-24 15:48:13', NULL),
(117, '1257', 'Niroj Budha Magar', 'male', '9863287039', 'Pyuthan', '', '', 16, 28, '12pm', '10 pass', '', '100', '16000', '0', '2079-08-08', '', '', '2022-11-24 15:50:58', NULL),
(118, '1258', 'Lal bahadur Budha Magar', 'male', '9843290432', 'Pyuthan', '', '', 16, 28, '12pm', '10 pass', '', '100', '16000', '0', '2079-08-08', '', '', '2022-11-24 15:52:41', NULL),
(119, '1259', 'Chhabi Shrechan Thakali', 'male', '9748776013', 'Pyuthan', '', '', 16, 28, '12pm', '10 pass', '', '100', '16000', '0', '2079-08-08', '', '', '2022-11-24 15:54:57', NULL),
(120, '1262', 'Gopal Giri', 'male', '9867790985', 'Samakhusi', 'girigopal5822@gmail.com', '9867366290', 17, 31, '4pm', 'Bachelor', '', '100', '7000', '0', '2079-08-08', '', '', '2022-11-24 16:08:26', '2022-12-02 16:04:59'),
(121, '1263', 'Punam Ghale', 'female', '9742422905', 'Manamaiju 9', '', '', 10, 23, '12pm', '12', 'NR', '100', '5000', '5000', '2079-08-09', '', '', '2022-11-25 12:17:47', '2022-12-01 13:18:11'),
(122, '1264', 'Ajoy  Tamang', 'male', '9840008019', 'Balaji', 'tamangajay571@gmail.com', '9810263666', 19, 31, '12pm', '12', '', '100', '7000', '2000', '2079-08-09', '', '', '2022-11-25 12:21:33', '2022-11-27 12:13:11'),
(123, '1265', 'Jamuna Ranabhat', 'female', '9803638915', 'Greenland', '', '', 17, 31, '4pm', '12', '', '100', '5000', '0', '2079-08-09', '', '', '2022-11-25 16:15:22', NULL),
(124, '1267', 'Smritee tripathi', 'female', '9813004244', 'Gongabu Chowk', 'smritee62@gmail.com', '9851090902', 20, 31, '6am', 'A Leval', '', '100', '7000', '4000', '2079-08-11', '', '', '2022-11-27 11:09:35', NULL),
(125, '1268', 'Bhumika Gharti Magar', 'female', '9816182027', 'Gongabu Chowk', '', '', 12, 23, '11am', '12', '', '100', '8000', '1900', '2079-08-11', '', '', '2022-11-27 11:36:25', NULL),
(126, '1269', 'Puspa Shrestha', 'female', '9818863187', 'Bhandari Tol', '', '', 16, 28, '12pm', '12', '', '100', '18000', '1000', '2079-08-11', '', '', '2022-11-27 12:22:18', NULL),
(127, '437', 'Aashis Kumar Sati', 'male', '9807527202', 'Samakhusi', 'bangtang110@gmail.com', '9746391294', 19, 31, '11am', '12', '', '100', '7000', '3000', '2079-08-12', '', '', '2022-11-28 12:24:38', NULL),
(128, '1172', 'Jamuna Giri', 'female', '9749350090', 'Gongabu Chowk', '', '9810214956', 17, 31, '4pm', '12', '', '100', '5000', '0', '2079-08-12', '', '', '2022-11-28 15:58:22', NULL),
(129, '1173', 'Sunita Gurung', 'female', '9813701199', 'Manamaiju', '', '', 16, 28, '6am', '12', '', '100', '18000', '500', '2079-08-13', '', '', '2022-11-29 10:52:33', NULL),
(131, '1271', 'Iswori  Karki', 'female', '9745677600', 'Gongabu Chowk', '', '', 10, 23, '7am', '10 pass', '', '100', '5000', '1900', '2079-08-13', '', '', '2022-11-29 13:44:45', '2022-12-06 08:35:35'),
(132, '1270', 'Aliz Belbase', 'male', '9867671731', 'Samakhusi', '', '', 18, 33, '8am', '12', '', '100', '18000', '0', '2079-08-13', '', '', '2022-11-29 13:46:59', NULL),
(133, '1276', 'Bijay Gurung', 'male', '9860239134', 'Manamaiju', '', '', 16, 28, '12pm', '12', '', '100', '17000', '17000', '2079-08-14', '', 'Student-20221130115729616.jpg', '2022-11-30 11:01:36', '2022-11-30 11:57:29'),
(134, '1273', 'Gita Shrestha', 'female', '9842443109', 'Gongabu Chowk', '', '', 16, 28, '6am', '12', '', '100', '18000', '0', '2079-08-14', '', '', '2022-11-30 11:11:37', NULL),
(135, '1272', 'Sita Shrestha', 'female', '9819497167', 'Gongabu Chowk', '', '', 16, 28, '6am', '12', '', '100', '18000', '800', '2079-08-14', '', '', '2022-11-30 11:15:53', NULL),
(136, '1277', 'Ranhari Achhami', 'male', '9823165876', 'Manamaiju', '', '', 16, 28, '8am', '12', '', '100', '18000', '2000', '2079-08-15', '', 'Student-20221201111711523.jpg', '2022-12-01 11:11:07', '2022-12-01 11:17:11'),
(137, '1279', 'Binod Pathak', 'male', '9813511000', 'Gongabu Chowk', '', '', 16, 28, '12pm', '12', '', '100', '18000', '0', '2079-08-15', '', '', '2022-12-01 13:22:58', NULL),
(138, '1278', 'bimala lama', 'female', '9749718281', 'Kakarni-4, Nuwakot', '', '9823606563', 18, 33, '8am', '12', '', '100', '12000', '0', '2079-08-15', '', '', '2022-12-01 13:29:13', NULL),
(139, '1274', 'Bindu chhantyal', 'female', '9862440257', 'Tamankhola -6 Baglung', '', '9742479015', 18, 33, '8am', '12', '', '100', '15000', '5000', '2079-08-15', '', '', '2022-12-01 13:52:38', '2022-12-02 12:06:37'),
(140, '1280', 'Thir Kumari lago Magar', 'female', '9863394112', 'Gongabu Chowk', '', '9803490955', 18, 33, '6am', '12', 'Rehdan clz', '100', '5000', '5000', '2079-08-15', '', '', '2022-12-01 14:00:23', NULL),
(141, '1281', 'Sakuna Dhakal Pokharel', 'female', '9860308573', 'siranchowk 4 chhropka Gorkha', '', '', 10, 23, '8am', '12', '', '100', '5000', '3000', '2079-08-16', '', '', '2022-12-02 11:52:33', '2022-12-07 14:25:30'),
(142, '1282', 'Kabita Bharati', 'female', '9813521992', 'Nepaltar Sanopul', 'bhaartikabita@gmail.com', '9749414221', 16, 28, '6am', '12', 'MRM', '100', '18000', '0', '2079-08-16', '', '', '2022-12-02 11:56:11', NULL),
(143, '482', 'Jasmin Chhetri', 'female', '9810070310', 'Nepaltar Sanopul', '', '9803089205', 16, 28, '6am', '12', 'NEA', '100', '18000', '0', '2079-08-16', '', '', '2022-12-02 12:01:43', NULL),
(144, '1802', 'Manju Poudel', 'female', '9746548653', 'Tokha', '', '9848348915', 16, 28, '12pm', '12', '', '100', '15000', '0', '2079-08-18', '', '', '2022-12-04 13:32:18', NULL),
(145, '1174', 'Sapana Thansuhang', 'female', '9818386486', 'Balaji', '', '9849375296', 35, 30, '7am', '12', 'NR', '100', '12000', '0', '2079-08-18', '', '', '2022-12-04 13:43:14', NULL),
(146, '1286', 'Laxman Saru Magar', 'male', '9745418439', 'Arghakhachi', '', '9745418439', 16, 28, '8am', '12', '', '100', '18000', '1000', '2079-08-19', '', '', '2022-12-05 11:04:42', NULL),
(147, '1287', 'Kunjan thapa', 'male', '9861808078', 'Nuwakot', '', '9849281334', 16, 28, '8am', '', 'Gramin', '100', '18000', '1000', '2079-08-19', '', '', '2022-12-05 11:09:37', NULL),
(148, '1285', 'Puspa Subedi', 'female', '9840266368', 'Manamaiju', '', '', 19, 31, '7am', '12', '', '100', '7000', '2500', '2079-08-19', '', '', '2022-12-05 11:20:10', '2022-12-09 12:58:26'),
(149, '1284', 'Karisma Pun', 'female', '9844345003', 'Manamaiju', '', '', 19, 31, '7am', '12', '', '100', '7000', '2500', '2079-08-19', '', '', '2022-12-05 11:23:20', '2022-12-09 12:57:43'),
(150, '1175', 'Mandira Bhandari', 'female', '9844839046', 'new busspark', '', '9803390682', 18, 33, '7am', '12', '', '100', '12000', '0', '2079-08-19', '', '', '2022-12-05 12:08:24', NULL),
(151, '1803', 'Nitisha  Tamang', 'female', '9813967789', 'Tokha', '', '9841839690', 16, 28, '8am', '12', 'Hritz College', '100', '18000', '0', '2079-08-19', '', '', '2022-12-05 13:43:15', NULL),
(152, '1804', 'Niru Tamang', 'female', '9865415687', 'Baniyatar', '', '9866401364', 18, 33, '4pm', '12', '', '100', '18000', '0', '2079-08-20', '', '', '2022-12-06 12:35:48', NULL),
(153, '1289', 'Raj Kumar Tamang', 'male', '9806477087', 'Balaji', '', '9818886389', 10, 23, '10am', '12', '', '100', '6000', '2000', '2079-08-20', '', '', '2022-12-06 12:38:13', '2022-12-07 14:26:05'),
(154, '1177', 'Som Br.Tamang', 'male', '9818676890', 'Nuwakot', '', '9808893568', 16, 28, '8am', '12', '', '100', '18000', '0', '2079-08-20', '', '', '2022-12-06 12:40:27', NULL),
(155, '1176', 'Bimala Tamang', 'female', '9803942063', 'Nuwakot', '', '', 16, 28, '8am', '12', '', '100', '18000', '0', '2079-08-20', '', '', '2022-12-06 12:43:31', NULL),
(156, '1288', 'Reetu Thapa  magar', 'female', '9813466706', 'Samakhusi', '', '9808442221', 16, 28, '8am', '12', '', '100', '18000', '0', '2079-08-20', '', '', '2022-12-06 13:08:34', NULL),
(157, '1805', 'Pooja Khanal', 'female', '9867502579', 'Gongabu Chowk', '', '9851193626', 16, 28, '1pm', 'Bachelor', '', '100', '18000', '0', '2079-08-20', '', '', '2022-12-06 13:48:48', NULL),
(158, '1808', 'Nirjan Thapa', 'male', '9847448867', 'Baniyatar', '', '', 16, 28, '8am', '12', '', '100', '18000', '0', '2079-08-21', '', '', '2022-12-07 14:11:29', NULL),
(159, '1806', 'Bibek Poudel', 'female', '9848006178', 'Mandikhatar kathmandu', '', '9841807840', 16, 28, '8am', '12', '', '100', '18000', '0', '2079-08-21', '', '', '2022-12-07 14:19:53', NULL),
(160, '1807', 'Rasu Gurung', 'female', '9818465634', 'Gongabu Chowk', '', '9818465634', 16, 28, '8am', '12', '', '100', '18000', '0', '2079-08-21', '', '', '2022-12-07 14:21:50', NULL),
(161, '1809', 'Bikash pokhrel', 'male', '9827168245', 'Gorkha', '', '9869549730', 18, 33, '7am', '12', '', '100', '10000', '0', '2079-08-21', '', '', '2022-12-07 14:44:13', '2022-12-07 14:44:37'),
(162, '1817', 'Sangita  Pariyar', 'female', '9828586524', 'Manamaiju', '', '', 16, 28, '6pm', '12', '', '100', '18000', '0', '2079-08-23', '', '', '2022-12-09 12:52:51', NULL),
(163, '1818', 'Narendra Jang Thapa', 'male', '9851009994', 'Gongabu Chowk', '', '', 16, 28, '8am', '', '', '100', '18000', '500', '2079-08-23', '', '', '2022-12-09 12:55:09', NULL),
(164, '1816', 'Maita Tamang', 'male', '9803119419', 'Macchapokhari ', '', '9023323009', 16, 28, '12pm', '10 pass', '', '100', '17000', '17000', '2079-08-23', '', 'Student-2022120901034691.jpg', '2022-12-09 13:01:12', '2022-12-09 13:03:46'),
(165, '1811', 'Bishwo Bikram  Ale Magar', 'male', '9860105372', 'Gongabu Chowk', '', '', 16, 28, '8am', '', '', '100', '18000', '0', '2079-08-23', '', '', '2022-12-09 13:28:17', NULL),
(166, '1813', 'Himani Thapa', 'female', '9841982163', 'loktantrik Chowk', '', '9858074122', 17, 31, '9am', '12', '', '100', '5000', '3900', '2079-08-22', '', '', '2022-12-09 13:32:40', NULL),
(167, '1812', 'Laxmi Chalise', 'female', '9741700530', 'Nepaltar', '', '9849114622', 17, 31, '9am', '12', '', '100', '5000', '3900', '2079-08-23', '', '', '2022-12-09 13:36:34', NULL),
(168, '1821', 'Roshan Tamang', 'male', '9745945968', 'Nuwakot', '', '9808128807', 16, 28, '8am', '12', '', '100', '18000', '0', '2079-08-25', '', '', '2022-12-11 14:23:36', NULL),
(169, '1823', 'Kabita Bagati', 'female', '9847525790', 'Samakhusi', 'bogatikabita80@gmail.com', '', 16, 28, '8am', '12', '', '100', '18000', '0', '2079-08-25', '', '', '2022-12-11 14:27:15', NULL),
(170, '1824', 'Tanka Bhandara', 'male', '9861433190', 'Gongabu Chowk', '', '', 16, 28, '12pm', '12', '', '100', '18000', '0', '2079-08-25', '', '', '2022-12-11 14:29:04', NULL),
(171, '1825', 'Prakash Pudasaini', 'male', '9840826117', 'Nuwakot', '', '', 16, 28, '2pm', '12', '', '100', '18000', '0', '2079-08-25', '', '', '2022-12-11 14:31:06', NULL),
(172, '1826', 'Mina Thapa Bhattarai', 'female', '9843922117', 'Gongabu Chowk', '', '9841625369', 28, 23, '12pm', '12', '', '100', '12000', '0', '2079-08-25', '', '', '2022-12-11 14:42:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subname` varchar(100) NOT NULL,
  `depart` int(11) DEFAULT NULL,
  `teachername` int(11) DEFAULT NULL,
  `coursedu` varchar(50) NOT NULL,
  `fee` varchar(50) NOT NULL,
  `units` enum('course','months','','') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subname`, `depart`, `teachername`, `coursedu`, `fee`, `units`, `created_at`, `updated_at`) VALUES
(9, 'Basic Diploma', 13, 23, '2 Months', '5000', 'course', '2022-10-18 10:48:03', '2022-10-18 14:22:19'),
(10, 'Office Package', 13, 23, '3 Months', '6000', 'course', '2022-10-18 10:57:15', '2022-10-18 14:22:08'),
(11, 'Accounting Package', 13, 23, '4 Months', '7000', 'course', '2022-10-18 10:58:20', '2022-10-18 14:21:55'),
(12, 'Computer Diploma', 13, 23, '6 Months', '15000', 'course', '2022-10-18 10:59:26', '2022-10-18 14:21:42'),
(13, 'Web Page Design', 13, 23, '2 Months', '15000', 'course', '2022-10-18 11:00:10', '2022-10-18 14:21:17'),
(14, 'Auto Cad', 13, 23, '3 Months', '15000', 'course', '2022-10-18 11:01:01', '2022-10-18 14:21:26'),
(15, 'Web Developing', 13, 23, '3 Months', '20000', 'course', '2022-10-18 11:02:13', '2022-10-18 14:20:38'),
(16, 'Korean Language', 16, 28, '6 Months', '18000', 'course', '2022-10-18 11:07:37', '2022-10-18 14:22:36'),
(17, 'English Language', 14, 31, '2 Months', '4500', 'course', '2022-10-21 10:40:52', '2022-10-29 14:57:59'),
(18, 'Japanese Language', 17, 33, '6 Months', '18000', 'course', '2022-11-01 08:00:06', NULL),
(19, 'IELTS', 14, 31, '2 Month', '7000', 'course', '2022-11-01 10:31:28', NULL),
(20, 'PTE', 14, 31, '2 Month', '6000', 'course', '2022-11-01 10:32:49', NULL),
(22, 'Tuition (+2 Old Question , Math + Account +English) ', 18, 29, '4 Month', '66000 (Special)', 'course', '2022-11-01 16:12:59', NULL),
(23, 'Hardware Networking', 13, 23, '1 Month', '7000', 'course', '2022-11-02 12:18:13', NULL),
(24, 'BBS 1sr Year , Stat Maths ( Morning)', 18, 30, '4 Month', '2500(Per Subject)', 'course', '2022-11-04 11:01:28', NULL),
(25, 'BBS 1st Year Stat Maths ( Evening)', 18, 32, '4 Month', '2500 (Per Subject )', 'course', '2022-11-04 11:03:28', NULL),
(26, 'BBS 1st Year Account (Morning )', 18, 29, '4 Month', '2500 (Per Subject )', 'course', '2022-11-04 11:07:49', NULL),
(27, 'BBS 1st Year Account (Evening)', 18, 29, '4 Month', '2500', 'course', '2022-11-04 11:09:37', NULL),
(28, 'Graphic Design', 13, 23, '3 month', '8000', 'course', '2022-11-07 13:14:00', NULL),
(29, 'Excel', 13, 23, '1 Month', '4500', 'course', '2022-11-09 14:56:42', '2022-11-10 14:36:00'),
(30, 'Office Package with Account', 13, 23, '4 Month', '6000', 'course', '2022-11-13 17:11:41', NULL),
(31, 'Account (+2)', 18, 29, '4 Month', '2500', 'course', '2022-11-23 12:28:26', NULL),
(32, 'GT(General Tranning)', 14, 31, '2 Month', '7000', 'course', '2022-11-23 14:01:59', NULL),
(33, 'Tally', 13, 23, '1 Month', '3000', 'course', '2022-11-24 12:03:46', NULL),
(34, 'Major English (+2)', 18, 31, '4 Month', '2000', 'course', '2022-11-24 15:40:48', NULL),
(35, '+2 Business Math +Basic Math+Account , Back Paper', 18, 30, '1 Month (monthly basis special)', '6000', 'months', '2022-12-04 13:36:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `priority` enum('normal','urgent') DEFAULT 'normal',
  `taskhead` text DEFAULT NULL,
  `taskdis` text DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'inactive',
  `tskcmplt` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `priority`, `taskhead`, `taskdis`, `status`, `tskcmplt`, `created_at`, `updated_at`) VALUES
(10, 'urgent', 'Goma Poudel', 'Goma Poudel Vanne name search Gara ta ani Call garera Class aaunu vayeko xaina ni vana ta...', 'active', 1, '2022-12-01 14:09:58', '2022-12-01 14:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `teachername` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `college` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teachername`, `sub`, `email`, `contact`, `college`, `img`, `created_at`, `updated_at`) VALUES
(23, 'Arjun Shrestha', 'Computer', 'shresthaknobjesh@gmail.com', '9849762334', 'Sky vision ', 'Teacher-20221017023537182.jpg', '2022-10-17 14:35:37', NULL),
(28, 'Nabaraj Poudel', 'Korean Language', 'nabarajpoudel0311@gmail.com', '9845341348', 'sky vision foundation', 'Teacher-20221029030432747.jpg', '2022-10-18 10:32:17', '2022-10-29 15:04:32'),
(29, 'Sunil Bhattari', 'Science', 'sunilbhattarai1987@gmail.com', '9856051009', 'sky vision foundation', 'Teacher-20221029030449593.jpg', '2022-10-18 10:36:12', '2022-10-29 15:04:49'),
(30, 'Bal Krishna Chapain', 'Maths', 'chapagainbc@gmail.com', '9849856114', 'sky vision foundation', 'Teacher-20221029030511419.jpg', '2022-10-18 10:38:32', '2022-10-29 15:05:11'),
(31, 'Ramesh Sapkota', 'English', 'sapkota.anjan444@gmail.com', '9851174368', 'sky vision foundation', 'Teacher-20221029030538951.jpg', '2022-10-18 10:40:48', '2022-10-29 15:05:38'),
(32, 'Dhurba Pd. Acharya', 'Science', 'dhurba.acharya2017@gmail.com', '9841657418', 'sky vision foundation', 'Teacher-20221029030702350.jpg', '2022-10-18 14:00:12', '2022-10-29 15:07:02'),
(33, 'Jwala Lama', 'Japanese Language', 'tamangketa.80@gmail.com', '9862253864', 'Sky Vision Foundation', '', '2022-11-01 07:58:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'inactive',
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `password`, `status`, `role`, `created_at`, `updated_at`) VALUES
(8, 'Arjun Shrestha', 'shresthaknobjesh@gmail.com', '8e20aa6f3b3eb258430611b6e97032b3639a0911', 'active', 'admin', '2022-10-06 22:07:11', NULL),
(12, 'Samiksha Gyawali', 'samikshagyawali9861@gmail.com', '48eb74c4105da3943206bb7d7cdd100ed65d0d5a', 'active', 'user', '2022-10-17 13:59:43', '2022-10-17 14:28:23'),
(14, 'Sunil Bhattarai', 'sunilbhattarai1987@gmail.com', '2b9456f1dd98cb439239fc93c28fa810dab30fa0', 'active', 'admin', '2022-11-11 07:55:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hod` (`hod`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course` (`course`),
  ADD KEY `teacherid` (`teacherid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `depart` (`depart`,`teachername`),
  ADD KEY `teachername` (`teachername`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`hod`) REFERENCES `teachers` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`course`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`teacherid`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`depart`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`teachername`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
