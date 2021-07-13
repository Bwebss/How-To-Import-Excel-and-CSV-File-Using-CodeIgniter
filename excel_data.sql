-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 04:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excel_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `excelsheet_dates`
--

CREATE TABLE `excelsheet_dates` (
  `id` int(11) NOT NULL,
  `categories` text NOT NULL,
  `sub_categories` text NOT NULL,
  `words_tamil` text NOT NULL,
  `audio_tamil` text NOT NULL,
  `words_english` text NOT NULL,
  `audio_english` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excelsheet_dates`
--

INSERT INTO `excelsheet_dates` (`id`, `categories`, `sub_categories`, `words_tamil`, `audio_tamil`, `words_english`, `audio_english`) VALUES
(518, 'Adjectives', 'Explanation', 'nandri', 'audio.mp3', 'thank you', 'audio.mp3'),
(519, 'adverb', 'positive statements', 'vanakam', 'audio2.mp3goodmorning', 'good', 'audio2.mp3'),
(520, 'Active verbs', 'Negative statements', 'nandri', 'audio3.mp3', 'morning', 'audio3.mp3'),
(521, 'Active verbs', 'Negative statements', 'vanakam', 'audio3.mp3evening', 'evening', 'audio3.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `excelsheet_dates`
--
ALTER TABLE `excelsheet_dates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `excelsheet_dates`
--
ALTER TABLE `excelsheet_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
