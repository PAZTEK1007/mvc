-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 26, 2023 at 12:18 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `description` text,
  `author` text,
  `img_src` text,
  `publish_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `author`, `img_src`, `publish_date`) VALUES
(1, 'Les dernières avancées technologiques en IA', 'Cet article explore les progrès récents dans le domaine de l intelligence artificielle, mettant en lumière les applications émergentes, les défis et les implications éthiques. Des sujets tels que l apprentissage profond, la vision par ordinateur et les chatbots sont abordés en détail.', 'FuturoByte Expert', './Assets/Img/ia_750.png', '2023-01-15 08:00:00'),
(2, 'Voyager à travers le temps avec la physique quantique', ' Découvrez les théories fascinantes de la physique quantique qui suggèrent la possibilité de voyager dans le temps. Cet article explore les concepts de distorsion temporelle, les expériences de pensée et les implications philosophiques liées à cette idée intrigante.', 'TemporalVortex Voyager', './Assets/Img/voyage-temps-science.avif', '2023-02-10 12:30:00'),
(3, 'Les bienfaits de la méditation pour la santé mentale', 'Plongez dans les avantages de la méditation sur la santé mentale. Cet article examine les effets positifs de la méditation sur le stress, l anxiété et la concentration. Des techniques de méditation populaires et des études scientifiques récentes sont également présentées.', 'SerenitySeeker', './Assets/Img/mental-health-2019924_640.jpg','2023-03-05 18:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

