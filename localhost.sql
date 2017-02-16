-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 16-Fev-2017 às 22:53
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `id802211_portfolio`
--
CREATE DATABASE IF NOT EXISTS `id802211_portfolio` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id802211_portfolio`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `external-urls`
--

CREATE TABLE IF NOT EXISTS `external-urls` (
  `projeto_uri` varchar(1000) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `github` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `codepen` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `industria-criativa` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `external-urls`
--

INSERT INTO `external-urls` (`projeto_uri`, `id`, `github`, `codepen`, `industria-criativa`) VALUES
('dummy-project', 1, 'https://www.github.com/alicescfernandes/projeto-final', 'http://www.codepen.io/_massimo/pen/mRzRQV', 'https://www.industriacriativa.pt/portfolio/6983/website-1-connect'),
('dummy-project2', 2, 'https://www.github.com/alicescfernandes/projeto-final', 'http://www.codepen.io/_massimo/pen/mRzRQV', 'https://www.industriacriativa.pt/portfolio/6983/website-1-connect');

-- --------------------------------------------------------

--
-- Estrutura da tabela `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id_media` int(10) NOT NULL AUTO_INCREMENT,
  `projeto_uri` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(100) COLLATE utf8_bin NOT NULL,
  `src` varchar(700) COLLATE utf8_bin NOT NULL,
  `ext` varchar(50) COLLATE utf8_bin NOT NULL,
  `cover` tinyint(1) DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8_bin NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `media`
--

INSERT INTO `media` (`id_media`, `projeto_uri`, `tipo`, `src`, `ext`, `cover`, `title`, `nome`) VALUES
(1, 'fotografia', 'image', 'img', 'jpg', 1, 'fotografia', 'Ponte'),
(2, 'fotografia', 'image', 'img1', 'jpg', NULL, 'fotografia', 'Parado no Movimento'),
(3, 'fotografia', 'image', 'img2', 'jpg', NULL, 'web development', '&#x3C;CODE&#x3E;'),
(4, 'fotografia', 'image', 'img3', 'jpg', NULL, 'fotografia', 'MAAT'),
(5, 'fotografia', 'image', 'img4', 'jpg', NULL, 'fotografia', 'Ponte #2'),
(6, '3d', 'image', '3d-01', 'jpg', NULL, '3d', 'Mesa Bilhar'),
(7, '3d', 'image', '3d-02', 'jpg', NULL, '3d', 'Mesa Bilhar #2'),
(8, '3d', 'image', '3d-03', 'jpg', NULL, '3d', 'Mesa Bilhar #3'),
(9, 'maasai', 'image', 'maasai-01', 'jpg', NULL, 'Design Gr&#xE1;fico', 'Desenho de logomarca para negócio de joias'),
(11, 'cinel', 'image', 'cinel-01', 'jpg', NULL, 'Design Gr&#xE1;fico', 'Brochura de Eletrónica'),
(12, 'cinel', 'image', 'cinel-03', 'jpg', NULL, 'Design Gr&#xE1;fico', 'Pré-visualização de um MUPI'),
(13, 'cinel', 'image', 'cinel-02', 'jpg', NULL, 'Design Gr&#xE1;fico', 'Pré-visualização de um Outdoor'),
(14, 'connect', 'image', 'connect-01', 'jpg', NULL, 'web design', 'Website fictício para uma empresa de serviços de comunicação'),
(15, 'diga', 'image', 'diga-01', 'jpg', NULL, 'Design Gr&#xE1;fico', 'Desenho final do logótipo'),
(16, 'kiosk', 'image', 'kiosk-01', 'jpg', NULL, 'web development', 'Desenho e desevolvimento de uma plataforma noticiosa'),
(18, 'unicuidar', 'image', 'unicuidar-01', 'jpg', NULL, 'Design Gr&#xE1;fico', 'Desenho de marca e branding para negócio de serviços de enfermagem'),
(19, 'unicuidar', 'image', 'unicuidar-02', 'jpg', NULL, 'Design Gr&#xE1;fico', 'Desenhode marca e branding para negócio de serviços de enfermagem'),
(20, 'unicuidar', 'image', 'unicuidar-03', 'jpg', NULL, 'Design Gr&#xE1;fico', 'Desenhode marca e branding para negócio de serviços de enfermagem'),
(21, 'car', 'image', 'car-01', 'jpg', NULL, 'Design Gr&#xE1;fico', 'CarExpress');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE IF NOT EXISTS `projetos` (
  `id_projeto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tags` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `summary-line` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `likes` int(10) NOT NULL,
  `views` int(10) NOT NULL,
  `share` int(10) NOT NULL,
  `uri` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `external-urls` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_projeto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id_projeto`, `nome`, `descricao`, `tags`, `summary-line`, `likes`, `views`, `share`, `uri`, `external-urls`) VALUES
(3, 'fotografia', 'Algumas fotos que tirei', 'fotografia', 'Algumas fotos que tirei', 0, 0, 0, 'fotografias', NULL),
(4, 'Modelação de Mesa de Bilhar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '3d', 'Modelação de mesa de bilhar com bolas texturizadas', 0, 0, 0, '3d', NULL),
(5, 'Comunicação externa para a CINEL', 'dadasd', 'design-gr%C3%A1fico', 'Criação de comunicação institucional', 0, 0, 0, 'cinel', NULL),
(6, 'Connect Website', 'djashjjsakladf', 'web-design, html, css', 'Site ficticio sobre uma empresa de comunicações', 0, 0, 0, 'connect', NULL),
(7, 'Diga que vai daqui', 'asdfbfasd', 'design-gráfico, logomarca, estacion%C3%A1rio', 'Logomarca para página sobre viagens', 0, 0, 0, 'diga', NULL),
(8, 'Kiosk Digital', 'sdafjdajkdhakjsdhakjsdhaksjdhakjsd', 'web-development,css,html,php, web-design', 'A tua porta para a internet', 0, 0, 0, 'kiosk', NULL),
(9, 'Maasai', 'adjkajdaksldjaksdj', 'design-gr%C3%A1fico, logomarca, estacion%C3%A1rio', 'Empresa de joias baseada em tribo aficana', 0, 0, 0, 'maasai', NULL),
(10, 'UniCuidar', 'adaklsdjaljdaksdj', 'design-gr%C3%A1fico, logomarca,estacion%C3%A1rio', 'Serviços de enfermagem personalizados', 0, 0, 0, 'unicuidar', NULL),
(11, 'CarExpress', 'asdasdasdjl', 'design-gr%C3%A1fico, logomarca', 'Marca ficticia de oficina automóvel', 0, 0, 0, 'car', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
