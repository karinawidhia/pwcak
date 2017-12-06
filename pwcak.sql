-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Des 2017 pada 08.56
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwcak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_content`
--

CREATE TABLE `course_content` (
  `id_course` int(11) NOT NULL,
  `id_title` int(11) NOT NULL,
  `step_number` int(11) NOT NULL,
  `step_title` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `img` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `last_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_title`
--

CREATE TABLE `course_title` (
  `id_title` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `qna`
--

CREATE TABLE `qna` (
  `id_qna` int(11) NOT NULL,
  `question` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `role` int(1) NOT NULL DEFAULT '0',
  `hash_validation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `name`, `city`, `bio`, `role`, `hash_validation`) VALUES
(1, 'yusronzain@gmail.com', 'yusron', 'yusron', 'yusron hanan', 'situbondo', 'mboh', 0, '09718937138ajknakjsjas'),
(2, 'qori@gmail.com', 'qori', 'qoriatul', 'Yusron', 'ngawi', 'ngawi coy', 0, ''),
(3, 'karin@gmail.com', 'karin', 'karin', 'karin', 'sda', 'sda', 0, ''),
(4, 'bayu@gmail.com', 'bayu', 'bayu', 'bayu', 'kdr', 'kdr', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_action`
--

CREATE TABLE `user_action` (
  `id_action` int(11) NOT NULL,
  `id_title` int(11) DEFAULT NULL,
  `id_qna` int(11) DEFAULT NULL,
  `from_id` int(11) NOT NULL,
  `from_username` varchar(40) NOT NULL,
  `type_action` int(2) NOT NULL,
  `text_comment` varchar(150) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_following`
--

CREATE TABLE `user_following` (
  `id_following` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  `follower_username` varchar(40) NOT NULL,
  `followed_username` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_content`
--
ALTER TABLE `course_content`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `course_title`
--
ALTER TABLE `course_title`
  ADD PRIMARY KEY (`id_title`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id_qna`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_action`
--
ALTER TABLE `user_action`
  ADD PRIMARY KEY (`id_action`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_content`
--
ALTER TABLE `course_content`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_title`
--
ALTER TABLE `course_title`
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `id_qna` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_action`
--
ALTER TABLE `user_action`
  MODIFY `id_action` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
