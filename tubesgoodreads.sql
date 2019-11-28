-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 06:18 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesgoodreads`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis_buku` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sinopsis` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis_buku`, `image`, `sinopsis`) VALUES
(1, 'The Hunger Games', 'Suzanne Collins', 'http://localhost/tubesgoodreads/assets/img/1.jpg', 'Could you survive on your own, in the wild, with everyone out to make sure you don\'t live to see the morning?\r\n\r\nIn the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. The Capitol is harsh and cruel and keeps the districts in line by forcing them all to send one boy and one girl between the ages of twelve and eighteen to participate in the annual Hunger Games, a fight to the death on live TV. Sixteen-year-old Katniss Everdeen, who lives alone with her mother and younger sister, regards it as a death sentence when she is forced to represent her district in the Games. But Katniss has been close to dead before - and survival, for her, is second nature. Without really meaning to, she becomes a contender. But if she is to win, she will have to start making choices that weigh survival against humanity and life against love.\r\n\r\nNew York Times bestselling author Suzanne Collins delivers equal parts suspense and philosophy, adventure and romance, in this searing novel set in a future with unsettling parallels to our present.'),
(2, 'Speak', 'Laurie Halse Anderson', 'http://localhost/tubesgoodreads/assets/img/2.jpg', 'The first ten lies they tell you in high school.\r\n\r\n\"Speak up for yourself—we want to know what you have to say.\" \r\n\r\nFrom the first moment of her freshman year at Merryweather High, Melinda knows this is a big fat lie, part of the nonsense of high school. She is friendless, outcast, because she busted an end-of-summer party by calling the cops, so now nobody will talk to her, let alone listen to her. As time passes, she becomes increasingly isolated and practically stops talking altogether. Only her art class offers any solace, and it is through her work on an art project that she is finally able to face what really happened at that terrible party: she was raped by an upperclassman, a guy who still attends Merryweather and is still a threat to her. Her healing process has just begun when she has another violent encounter with him. But this time Melinda fights back, refuses to be silent, and thereby achieves a measure of vindication. \r\n\r\nIn Laurie Halse Anderson\'s powerful novel, an utterly believable heroine with a bitterly ironic voice delivers a blow to the hypocritical world of high school. She speaks for many a disenfranchised teenager while demonstrating the importance of speaking up for oneself.\r\n\r\nSpeak was a 1999 National Book Award Finalist for Young People\'s Literature.'),
(3, 'Lord of the Flies', 'William Golding', 'http://localhost/tubesgoodreads/assets/img/3.jpg', 'At the dawn of the next world war, a plane crashes on an uncharted island, stranding a group of schoolboys. At first, with no adult supervision, their freedom is something to celebrate; this far from civilization the boys can do anything they want. Anything. They attempt to forge their own society, failing, however, in the face of terror, sin and evil. And as order collapses, as strange howls echo in the night, as terror begins its reign, the hope of adventure seems as far from reality as the hope of being rescued. Labeled a parable, an allegory, a myth, a morality tale, a parody, a political treatise, even a vision of the apocalypse, Lord of the Flies is perhaps our most memorable novel about “the end of innocence, the darkness of man’s heart.”'),
(4, 'The Handmaid\'s Tale', 'Margaret Atwood', 'http://localhost/tubesgoodreads/assets/img/4.jpg', 'Offred is a Handmaid in the Republic of Gilead. She may leave the home of the Commander and his wife once a day to walk to food markets whose signs are now pictures instead of words because women are no longer allowed to read. She must lie on her back once a month and pray that the Commander makes her pregnant, because in an age of declining births, Offred and the other Handmaids are valued only if their ovaries are viable. Offred can remember the years before, when she lived and made love with her husband, Luke; when she played with and protected her daughter; when she had a job, money of her own, and access to knowledge. But all of that is gone now...');

-- --------------------------------------------------------

--
-- Table structure for table `buku_user`
--

CREATE TABLE `buku_user` (
  `id_buku` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_user`
--

INSERT INTO `buku_user` (`id_buku`, `username`, `rating`, `review`) VALUES
(1, 'username', 1, 'gfddhgc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `regist` varchar(20) NOT NULL,
  `middleName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `yearBirth` varchar(20) NOT NULL,
  `monthBirth` varchar(20) NOT NULL,
  `dateBirth` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `imgName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `regist`, `middleName`, `lastName`, `yearBirth`, `monthBirth`, `dateBirth`, `gender`, `age`, `city`, `imgName`) VALUES
('rahmat', 'rahmat@gmail.com', '123', '04-2019', '', '', '', '', '', '', '', '', ''),
('rta@gmail.com', 'rta@gmail.com', '1234', '04-2019', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
