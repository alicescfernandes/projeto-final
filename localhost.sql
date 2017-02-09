-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2017 at 04:16 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website-dados`
--
CREATE DATABASE IF NOT EXISTS `website-dados` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `website-dados`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_projeto` int(10) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_bin NOT NULL,
  `src` varchar(700) COLLATE utf8_bin NOT NULL,
  `ext` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `id_projeto`, `tipo`, `src`, `ext`) VALUES
(1, 1, 'image', 'img', 'jpg'),
(2, 1, 'image', 'img1', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projetos`
--

CREATE TABLE IF NOT EXISTS `projetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `descricao` text COLLATE utf8_bin NOT NULL,
  `tags` varchar(500) COLLATE utf8_bin NOT NULL,
  `summary-line` varchar(500) COLLATE utf8_bin NOT NULL,
  `likes` int(10) NOT NULL,
  `views` int(10) NOT NULL,
  `share` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projetos`
--

INSERT INTO `projetos` (`id`, `nome`, `descricao`, `tags`, `summary-line`, `likes`, `views`, `share`) VALUES
(1, 'Dummy Project', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur hendrerit purus, ut volutpat enim posuere a. Donec efficitur quam nec orci aliquam, ac fringilla ipsum vehicula. Praesent sagittis lacinia diam. Suspendisse fringilla varius diam, in rhoncus libero auctor ut. Aliquam sed justo lorem. Vivamus venenatis lacus ligula, faucibus aliquet enim malesuada at. Sed vel eros nunc. Donec erat risus, tincidunt vitae commodo vel, congue eget lectus.\r\nPraesent at nulla lacinia, condimentum diam eget, mattis libero. Nullam condimentum pretium posuere. In in luctus dui. Nullam ornare scelerisque nisl nec varius. Aliquam erat volutpat. Aenean accumsan vulputate maximus. Maecenas quam mauris, mattis at neque vel, imperdiet accumsan dui. Nullam et risus et mi fringilla volutpat at et mi. In gravida cursus massa id fermentum. Donec aliquam arcu nec risus tincidunt viverra. Aenean blandit faucibus condimentum.\r\norem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur hendrerit purus, ut volutpat enim posuere a. Donec efficitur quam nec orci aliquam, ac fringilla ipsum vehicula. Praesent sagittis lacinia diam. Suspendisse fringilla varius diam, in rhoncus libero auctor ut. Aliquam sed justo lorem. Vivamus venenatis lacus ligula, faucibus aliquet enim malesuada at. Sed vel eros nunc. Donec erat risus, tincidunt vitae commodo vel, congue eget lectus.\r\nPraesent at nulla lacinia, condimentum diam eget, mattis libero. Nullam condimentum pretium posuere. In in luctus dui. Nullam ornare scelerisque nisl nec varius. Aliquam erat volutpat. Aenean accumsan vulputate maximus. Maecenas quam mauris, mattis at neque vel, imperdiet accumsan dui. Nullam et risus et mi fringilla volutpat at et mi. In gravida cursus massa id fermentum. Donec aliquam arcu nec risus tincidunt viverra. Aenean blandit faucibus condimentum.', 'html, css,web design, web development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.', 230, 230, 230);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
