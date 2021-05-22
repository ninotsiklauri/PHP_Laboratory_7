-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 04:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Id` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Autor` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Meta_k` varchar(200) NOT NULL,
  `Meta_d` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Id`, `Title`, `Date`, `Type`, `Photo`, `Text`, `Autor`, `Description`, `Meta_k`, `Meta_d`) VALUES
(1, 'title 1', '2021-05-22', '1', 'photo 1', 'text 1', 'autor 1', 'description 1', 'meta_k 1', 'meta_d 1'),
(2, 'title 2', '2021-05-18', '2', 'photo 2', 'text 2', 'autor 2', 'description 2', 'meta_k 2', 'meta_d 2'),
(3, 'title 3', '2021-05-19', '1', 'photo 3', 'text 3', 'autor 3', 'description 3', 'meta_k 3', 'meta_d 3'),
(4, 'title 4', '2021-05-12', '2', 'photo 4', 'text 4', 'autor 4', 'description 4', 'meta_k 4', 'meta_d 4'),
(5, 'title 5', '2021-05-18', '1', 'photo 5', 'text 5', 'autor 5', 'description 5', 'meta_k 5', 'meta_d 5'),
(6, 'title 6', '2021-05-04', '2', 'photo 6', 'text 6', 'autor 6', 'description 6', 'meta_k 6', 'meta_d 6'),
(7, 'title 7', '2021-05-12', '1', 'photo 7', 'text 7', 'autor 7', 'description 7', 'meta_k 7', 'meta_d 7');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(2) UNSIGNED NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Meta_k` varchar(200) NOT NULL,
  `Meta_d` varchar(200) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `Title`, `Meta_k`, `Meta_d`, `Text`) VALUES
(1, 'წიგნები', 'books', 'books for knowledge', 'ტექსტი წიგნებისთვის'),
(5, 'ფილმები', 'films', 'films for fun', 'ტექსტი ფილმებისთვის'),
(7, 'თამაშები', 'games', 'games for fun', 'ტექსტი თამაშებისთვის'),
(8, 'მუსიკები', 'music', 'musics for fun', 'ტექსტი მუსიკებისთვის'),
(9, 'სპორტი', 'sport', 'sport for health', 'ტექსტი სპორტისთვის');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Reg_Date` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Lastname`, `Age`, `Date`, `Reg_Date`, `Password`, `Gender`) VALUES
(1, 'ანა', 'ხიზანიშვილი', 16, '2021-05-22', '2021-05-22', 'pass1', 'female'),
(2, 'ნინო', 'წიკლაური', 19, '2014-06-19', '2021-05-13', 'pass2', 'female'),
(3, 'გიორგი', 'გიორგაძე', 30, '2014-07-04', '2021-05-19', 'pass3', 'male'),
(4, 'კახა', 'ბურჯანაძე', 34, '2014-06-04', '2021-05-13', 'pass4', 'male'),
(5, 'მარი', 'ჭელიძე', 17, '2021-05-06', '2021-05-24', 'pass5', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
