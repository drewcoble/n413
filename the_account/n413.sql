-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 06:06 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n413`
--
CREATE DATABASE IF NOT EXISTS `n413` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `n413`;

-- --------------------------------------------------------

--
-- Table structure for table `the_form`
--

CREATE TABLE IF NOT EXISTS `the_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `the_form`
--

INSERT INTO `the_form` (`id`, `email`, `name`, `comment`, `timestamp`) VALUES
(1, 'agase@gmail.com', 'Adam Gase', 'Me no likey Lev Bell', '2020-09-17 00:46:31'),
(2, 'agase@gmail.com', 'Adam Gase', 'Lev Bell is on IR. This makes me happy.', '2020-09-17 01:07:48'),
(3, 'who@gmail.com', 'Mike Jones', 'Back then they didn\\\'t want me, now I\\\'m hot they all on me.', '2020-09-17 01:10:50'),
(4, 'who@gmail.com', 'Mike Jones', 'bLAH bLAH', '2020-09-17 01:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `the_list`
--

CREATE TABLE IF NOT EXISTS `the_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `the_list`
--

INSERT INTO `the_list` (`id`, `name`, `position`, `description`, `image`) VALUES
(1, 'Lamar Jackson', 'QB', 'Lamar Jackson led the NFL in passing touchdowns in 2019, while also rushing for over 1,000 yards.', 'lamar-jackson.png'),
(2, 'Austin Ekeler', 'RB', 'Austin Ekeler was a top-5 RB in 2019 despite playing behind Melvin Gordon for 12 of the 16 games.', 'austin-ekeler.png'),
(3, 'Nick Chubb', 'RB', 'Nick Chubb was second in the NFL in rushing yards in 2019, but was not as involved as a pass-catcher once Kareem Hunt started playing in week 10.', 'nick-chubb.png'),
(4, 'Cooper Kupp', 'WR', 'Cooper Kupp bounced back from his ACL injury in 2018 to be a top-5 WR in the 2019 season.', 'cooper-kupp.png'),
(5, 'AJ Brown', 'WR', 'AJ Brown was one of the most impressive rookies in 2019 after Ryan Tannehill took over as the starter for the Tennessee Titans. ', 'aj-brown.png'),
(6, 'Darren Waller', 'TE', 'Darren Waller was 28 years old during his breakout season in 2019. He led the Raiders in targets.', 'darren-waller.png'),
(7, 'Le\'Veon Bell', 'RB', 'Le\'Veon Bell had his worst season as a pro in 2019, but this was largely due to the New York Jets not having their starting QB for much of the season.', 'leveon-bell.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_hash`
--

CREATE TABLE IF NOT EXISTS `users_hash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_hash`
--

INSERT INTO `users_hash` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'groot', 'groot@guardians.com', '$2y$10$CEc6KF7zaYXIPdQrsiILqu8ro9j2UpqPdKtZ3wz3xEQ5LpD626QCG', 1),
(2, 'rocket', 'rocket@guardians.com', '$2y$10$xngf4UYeK7Pbupz5IE21hexBeuLLjXHcyZ3Kj90revx5.6rL8ffeW', 0),
(3, 'driffdraff', 'driff@draff.com', '$2y$10$e.55B25z/7MZoa5vKvd9fecx7si7AfGwnYjdnjrU.gUARjdPVkB.e', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
