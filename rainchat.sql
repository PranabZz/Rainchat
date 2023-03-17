-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2023 at 05:13 AM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18428070_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `ID` int NOT NULL,
  `Message_To` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Message_From` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Message` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`ID`, `Message_To`, `Message_From`, `Message`) VALUES
(1, 'Pranab', 'Bot', 'hello '),
(2, 'Bot', 'Pranab', 'hey bot'),
(3, 'Bot', 'Pranab', 'whats up'),
(4, 'Pranab', 'Bot', 'all good'),
(5, 'Pranab', 'Bot', 'scroll animation!!'),
(6, 'Bot', 'Pranab', 'aeae works'),
(7, 'Pranab', 'Bot', 'ahh works'),
(8, 'Pranab', 'Bot', 'ok\r\n'),
(9, 'Pranab', 'Bot', 'oorpeor'),
(10, 'Pranab', 'Bot', 'ewqewas'),
(11, 'Pranab', 'Bot', 'resdfsdf'),
(12, 'Bot', 'Pranab', 'resdf'),
(13, 'Pranab', 'Bot', 'realsld'),
(14, 'Bot', 'Pranab', 'reras'),
(15, 'Pranab', 'Bot', 'okay donw'),
(16, 'manish', 'Pranab', 'oi'),
(17, 'Pranab', 'manish', 'geda khau\r\n'),
(18, 'manish', 'Pranab', 'timi khau na'),
(19, 'manish', 'Pranab', 'la muju chalyo chalyo '),
(21, 'manish', 'Pranab', 'refresh na hani ni aayerah cha hiana  message ?'),
(24, 'Suman', 'krips', 'hello0'),
(25, 'krips', 'Suman', 'hello'),
(26, 'Bot', 'Pranab', 'ok\r\n'),
(27, 'Pranu', 'bharat', 'helo'),
(28, 'Pranu', 'bharat', 'pranab\r\n'),
(29, 'bharat', 'Pranu', 'VVVV\r\n'),
(30, 'Pranu', 'bharat', 'reply me\r\n'),
(31, 'bharat', 'Pranu', 'vanana bepy k chaiyo\r\n'),
(32, 'bharat', 'Pranu', 'lauda chaiya ho?'),
(33, 'pooo', 'lale', 'jajajajajaj\r\n'),
(34, 'lale', 'pooo', 'k cha sathi ?\r\n'),
(35, 'pooo', 'lale', 'k cha sathi'),
(36, 'pooo', 'lale', 'thikai cha vhai '),
(37, 'lale', 'pooo', 'daya baya haina hai tya'),
(38, 'pooo', 'lale', 'girlfriend cha ki nai vhai'),
(39, 'manish', 'divock', 'k cha supriya?'),
(40, 'divock', 'lale', 'fuck you'),
(41, 'manish', 'divock', 'k cha supria'),
(42, 'manish', 'divock', 'jane haina ta terai tira??'),
(43, 'Suman', 'lale', 'clz kina naaako\r\n'),
(44, 'lale', 'divock', 'k cha supriya???\r\n'),
(45, 'divock', 'lale', 'geda khau sathi'),
(46, 'divock', 'lale', 'pathako ko'),
(47, 'Pranab', 'rainchat', 'hello\r\n'),
(48, 'rainchat', 'Pranab', 'okay works fine to me\r\n'),
(49, 'alert(1)', 'Pranab', 'hello\r\n'),
(50, 'alert(1)', 'Pranab', 'ds'),
(51, 'alert(1)', 'Pranab', 'ds'),
(52, 'dwq', 'Pranab', 'hey'),
(53, 'dwq', 'Pranab', 'ers'),
(54, 'Pranab', 'dwq', 'resas'),
(55, 'bharat', 'abc', 'Pranab\r\n'),
(56, 'abc', 'Pranab', '&lt;script&gt;alert(1)&lt;/script&gt;'),
(57, 'Pranab', 'PPP', 'hi\r\n'),
(58, 'PPP', 'Pranab', 'hello\r\n'),
(59, 'Pranab', 'PPP', 'k cha?\r\n'),
(60, 'PPP', 'Pranab', 'thik cha\r\n'),
(61, 'Pranab', 'New44', 'Hi'),
(62, 'abc', 'abc', 'sas'),
(63, 'abc', 'abc', 'sasas');

-- --------------------------------------------------------

--
-- Table structure for table `Post`
--

CREATE TABLE `Post` (
  `id` int NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Post` varchar(250) NOT NULL,
  `Time` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Likes` int NOT NULL,
  `Comment` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Post`
--

INSERT INTO `Post` (`id`, `Username`, `Post`, `Time`, `Image`, `Likes`, `Comment`) VALUES
(1, 'abc', 'Hey world', '06:03:06 PM', 'post_photos/wgo2fhq9gJSY3a5UwxCI2wVA31gK5hScMQvKH1vL.png06:03:06 PM', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `Name` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Email` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Password` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`Name`, `Email`, `Password`) VALUES
('abc', 'abc@gmail.com', 'abc123'),
('bharat', 'bharat@gmail.com', 'bharat'),
('Bot', 'Bot@gmail.com', 'Bot123'),
('divock', 'origi@gmail.com', 'origi'),
('dwq', 'new2@gmail.com', 'new'),
('ii', 'ii', 'ii'),
('krips', 'krips223', 'krips'),
('lale', 'jjjjjjj@gmail.com', 'sexy'),
('manish', 'timilsinamanish19@gmail.com', 'manish.@9'),
('New44', 'New@gmail.com', '123'),
('pooo', 'poo@gmail.com', 'pooo'),
('PPP', 'ppp@gmail.com', 'ppp123'),
('prabin bhattarai', 'prabinbhattarai010@gmail.com', 'terobau@23'),
('Pranab', 'Pranab@gmail.com', 'Pranab'),
('Pranab Raj Kc', 'Pranab', '123'),
('Pranabq', 'pranabkcaqw321@gmail.com', ''),
('Pranu', 'pranumanugeh69@gede.com', 'pranulovesmanuD'),
('Prime', 'prime@gmail.com', 'prime123'),
('rainchat', 'rain@gmail.com', 'rain'),
('sagar', 'sagar@gmail.com', 'pranab'),
('Shreyan', 'tylerbeljin444@gmail.com', 'nepal123'),
('Suman', 'Suman@gmail.com', 'suman'),
('uuu', 'uuu', 'uuuuuu'),
('uuuuu', 'uuuuu', 'uuuuu'),
('yyu', 'yuyyu', 'yuyuyu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Messages`
--
ALTER TABLE `Messages`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `Post`
--
ALTER TABLE `Post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
