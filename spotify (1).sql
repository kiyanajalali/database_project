-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 10:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `gener` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `user_id`, `title`, `gener`, `date`) VALUES
(456453, 2, 'bvhz45', '54vjkh', '2020-07-14'),
(456454, 443, 'bwr3g', 'vydfatftth', '2020-07-03'),
(456455, 443, '[poiuytrertyuipppppp', 'ksggdttuowpo', '2020-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `user_id` int(255) NOT NULL,
  `artist_name` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`user_id`, `artist_name`, `nationality`, `start_date`) VALUES
(2, '1111111', '111', '2020-07-15'),
(443, 'sredg', 'aayetry', '2020-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `credit_n` varchar(100) NOT NULL,
  `user_id` int(255) NOT NULL,
  `expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`credit_n`, `user_id`, `expiration_date`) VALUES
('4lzlkjg', 54654, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `user1_id` int(225) NOT NULL,
  `user2_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`user1_id`, `user2_id`) VALUES
(2, 443),
(443, 2);

-- --------------------------------------------------------

--
-- Table structure for table `listener`
--

CREATE TABLE `listener` (
  `user_id` int(225) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listener`
--

INSERT INTO `listener` (`user_id`, `birth_date`) VALUES
(2, '0000-00-00'),
(443, '2020-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `music_id` int(255) NOT NULL,
  `album_id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `duration` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`music_id`, `album_id`, `title`, `duration`, `date`) VALUES
(44323, 456453, 'hhxffgs5', 2517, '2020-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `play`
--

CREATE TABLE `play` (
  `p_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `music_id` int(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `play`
--

INSERT INTO `play` (`p_id`, `user_id`, `music_id`, `date`) VALUES
(15, 443, 44323, '2020-07-02'),
(16, 443, 44323, '2020-07-02'),
(64, 443, 44323, '2020-07-03'),
(65, 443, 44323, '2020-07-03'),
(66, 443, 44323, '2020-07-03'),
(67, 443, 44323, '2020-07-03'),
(68, 443, 44323, '2020-07-03'),
(69, 443, 44323, '2020-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_like`
--

CREATE TABLE `playlist_like` (
  `user_id` int(225) NOT NULL,
  `music_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist_like`
--

INSERT INTO `playlist_like` (`user_id`, `music_id`) VALUES
(443, 44323);

-- --------------------------------------------------------

--
-- Table structure for table `play_list`
--

CREATE TABLE `play_list` (
  `playlist_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `access_type` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `play_list`
--

INSERT INTO `play_list` (`playlist_id`, `user_id`, `title`, `access_type`) VALUES
(0, 443, 'ffdgff', 1),
(545, 443, 'tfdsfgf', 2),
(4656, 443, 'aiiuu78', 0),
(5465, 443, '54jhgy', 1),
(12346, 443, 'nzjkhjhx', 0),
(12347, 443, 'nzjkhjhx', 0),
(12348, 443, 'nzjkhjhx', 0),
(12349, 443, '', 0),
(12350, 443, 'ffdgffdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `play_music`
--

CREATE TABLE `play_music` (
  `playlist_id` int(225) NOT NULL,
  `music_id` int(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `play_music`
--

INSERT INTO `play_music` (`playlist_id`, `music_id`, `date`) VALUES
(5465, 44323, '2020-07-03'),
(12350, 44323, '2020-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `premium_listener`
--

CREATE TABLE `premium_listener` (
  `premium_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `start_time` date NOT NULL,
  `expiretion_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `premium_listener`
--

INSERT INTO `premium_listener` (`premium_id`, `user_id`, `start_time`, `expiretion_time`) VALUES
(3, 443, '2020-07-01', '2020-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(255) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`) VALUES
(1, 'q1');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `user_id` int(225) NOT NULL,
  `music_id` int(225) NOT NULL,
  `report_id` int(225) NOT NULL,
  `message` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_artist`
--

CREATE TABLE `request_artist` (
  `user_id` int(225) NOT NULL,
  `artist_name` varchar(7000) NOT NULL,
  `nationality` varchar(7000) NOT NULL,
  `activity_start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `q_id` int(255) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `first_name`, `last_name`, `password`, `nationality`, `user_type`, `q_id`, `answer`) VALUES
(2, 'kiyana', 'jalali.kiyana@gamil.com', 'jalal', 'kia', '446466', 'iran', 'mmdnasjkhfvj', 1, 'a1'),
(443, 'zjhbjb', 'zgkjvbjvzlbvjzlh\\', 'n\\ggyg\\ghhh', '\\cpihPHp\\g', 'h\\h54654\\vjbg', 'uysnjh', 's', 1, 'a13'),
(54654, '5653hvjsrd', 'jhsdrgawgtuguuaguigGRiigh', 'idfiha', 'hfhvjhz', '946496', 'hzdhvkzv', 'a', 1, '\\vjvhjbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_ibfk_1` (`user_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD PRIMARY KEY (`credit_n`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`user1_id`,`user2_id`),
  ADD KEY `user2_id` (`user2_id`);

--
-- Indexes for table `listener`
--
ALTER TABLE `listener`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`),
  ADD KEY `al_id` (`album_id`);

--
-- Indexes for table `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `music_id` (`music_id`),
  ADD KEY `play_ibfk_1` (`user_id`);

--
-- Indexes for table `playlist_like`
--
ALTER TABLE `playlist_like`
  ADD PRIMARY KEY (`user_id`,`music_id`),
  ADD KEY `music_id` (`music_id`);

--
-- Indexes for table `play_list`
--
ALTER TABLE `play_list`
  ADD PRIMARY KEY (`playlist_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `play_music`
--
ALTER TABLE `play_music`
  ADD PRIMARY KEY (`playlist_id`,`music_id`),
  ADD KEY `music_id` (`music_id`);

--
-- Indexes for table `premium_listener`
--
ALTER TABLE `premium_listener`
  ADD PRIMARY KEY (`premium_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `music_id` (`music_id`);

--
-- Indexes for table `request_artist`
--
ALTER TABLE `request_artist`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `q_id` (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=456462;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;

--
-- AUTO_INCREMENT for table `listener`
--
ALTER TABLE `listener`
  MODIFY `user_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `music_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44326;

--
-- AUTO_INCREMENT for table `play`
--
ALTER TABLE `play`
  MODIFY `p_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `premium_listener`
--
ALTER TABLE `premium_listener`
  MODIFY `premium_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7896;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54655;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `artist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD CONSTRAINT `credit_card_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`user1_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`user2_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `listener`
--
ALTER TABLE `listener`
  ADD CONSTRAINT `listener_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `music_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `play`
--
ALTER TABLE `play`
  ADD CONSTRAINT `play_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `listener` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `play_ibfk_2` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `playlist_like`
--
ALTER TABLE `playlist_like`
  ADD CONSTRAINT `playlist_like_ibfk_1` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`),
  ADD CONSTRAINT `playlist_like_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `play_list`
--
ALTER TABLE `play_list`
  ADD CONSTRAINT `play_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `play_music`
--
ALTER TABLE `play_music`
  ADD CONSTRAINT `play_music_ibfk_1` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `play_music_ibfk_2` FOREIGN KEY (`playlist_id`) REFERENCES `play_list` (`playlist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `premium_listener`
--
ALTER TABLE `premium_listener`
  ADD CONSTRAINT `premium_listener_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `request_artist`
--
ALTER TABLE `request_artist`
  ADD CONSTRAINT `request_artist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `question` (`question_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
