-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 06 يونيو 2022 الساعة 21:15
-- إصدار الخادم: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19044585_web2`
--

-- --------------------------------------------------------

--
-- بنية الجدول `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `episode` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `library`
--

INSERT INTO `library` (`id`, `name`, `image`, `link`, `type`, `episode`) VALUES
(26, 'عالم مرح ', 'عالم المرح.jpg', 'https://www.youtube.com/watch?v=mO55IotlJqY&list=PLL7eoHGPQGToZpZnAtZXBRJj5zso4ONoj', 'Song', NULL),
(36, 'لغتي العربية', 'لغتي العربية.jpg', 'https://www.youtube.com/watch?v=HC7Nefuv7Bo', 'Song', NULL),
(39, 'عالم مرح التعليمي', 'عالم المرح التعليمي.jpg', 'https://www.youtube.com/watch?v=HC7Nefuv7Bo&list=PLL7eoHGPQGTrKXytL_bh7YanCTHOYFif9', 'Song', NULL),
(54, 'المحافظة على الصلاة', 'المحافظة على الصلاة.jpg', '-على-الصلاة.pdf', 'story', NULL),
(55, 'اغانينا', 'اغانينا.jpg', 'https://www.youtube.com/watch?v=VMJk0oMizjI&list=PLL7eoHGPQGToEjVKPSzK5Nvph3TinWSZ5', 'Song', NULL),
(60, 'اسالو لبيبة', 'اسالو لبيبة.jpg', 'https://www.youtube.com/watch?v=2NIhvR6Jtgg&list=PLL7eoHGPQGTpIDiwKk775qFV4t49prQjg', 'film', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `date` date DEFAULT NULL,
  `sex` varchar(5) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `speak` varchar(5) DEFAULT NULL,
  `study` varchar(5) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  `fatherName` varchar(25) DEFAULT NULL,
  `matherName` varchar(25) DEFAULT NULL,
  `supervisor` varchar(50) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `date`, `sex`, `language`, `speak`, `study`, `level`, `fatherName`, `matherName`, `supervisor`, `email`, `phone`, `country`, `city`, `address`, `message`) VALUES
(1, 'admin', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'hadil', '123', '2007-06-24', 'girl', 'AR', 'yes', 'yes', 'good', 'radwan', 'soher', 'father', 'Hadoosh2000k@gmail.com', '+966503792580', 'KSA', 'Riyadh', 'بنك الرياض', 'شكرا'),
(19, 'firas', '123', '2008-07-15', 'boy', 'ENG', 'yes', 'yes', 'elementry', 'asam', 'mey', 'father', 'hadoosh2000k@gmail.com', '+966503792580', 'KSA', 'Riyadh', 'jj', 'ee'),
(20, 'dsf', 'jj', '2022-06-14', 'boy', 'AR', 'yes', 'yes', 'elementry', 'i', 'o', 'father', 'o', 'o', 'o', 'o', 'o', 'o'),
(21, 'تامر قربي', 'تامر', '2019-09-15', 'boy', 'AR', 'yes', 'yes', 'elementry', 'محمد قربي', 'نور حامدة', 'father', '....', '...', '....', '....', '. ...', '....'),
(22, 'فشرت فشرت فشرت ', 'www', '2021-08-10', 'boy', 'AR', 'yes', 'yes', 'elementry', 'ابو فشرت ', 'ام فشرت ', 'father', 'ghambwlwatrswn298@gmail.com', '9639444444444', 'باب الحارة ', 'بيت ابو فشرت ', 'مخصك ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
