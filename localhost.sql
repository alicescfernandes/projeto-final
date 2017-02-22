-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2017 at 03:50 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id802211_portfolio`
--
CREATE DATABASE IF NOT EXISTS `id802211_portfolio` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id802211_portfolio`;

-- --------------------------------------------------------

--
-- Table structure for table `external-urls`
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
-- Dumping data for table `external-urls`
--

INSERT INTO `external-urls` (`projeto_uri`, `id`, `github`, `codepen`, `industria-criativa`) VALUES
('dummy-project', 1, 'https://www.github.com/alicescfernandes/projeto-final', 'http://www.codepen.io/_massimo/pen/mRzRQV', 'https://www.industriacriativa.pt/portfolio/6983/website-1-connect'),
('dummy-project2', 2, 'https://www.github.com/alicescfernandes/projeto-final', 'http://www.codepen.io/_massimo/pen/mRzRQV', 'https://www.industriacriativa.pt/portfolio/6983/website-1-connect');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id_media` int(10) NOT NULL AUTO_INCREMENT,
  `projeto_uri` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(100) COLLATE utf8_bin NOT NULL,
  `src` varchar(700) COLLATE utf8_bin NOT NULL,
  `ext` varchar(50) COLLATE utf8_bin NOT NULL,
  `cover` tinyint(1) DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `descricao` int(11) NOT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=35 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_media`, `projeto_uri`, `tipo`, `src`, `ext`, `cover`, `title`, `nome`, `descricao`) VALUES
(1, 'fotografia', 'image', 'img', 'jpg', 1, 'fotografia', 'Ao lado do céu<br><sup>Doca de Santo Amaro, Alcântara, Lisboa</sup>', 0),
(2, 'fotografia', 'image', 'img1', 'jpg', 1, 'fotografia', 'A cidade no seu melhor<br><sup>Rua de Alcântara, Alcântara, Lisboa</sup>', 0),
(3, '', 'image', 'img2', 'jpg', 1, 'web development', '&#x3C;CODE&#x3E;', 0),
(4, 'fotografia', 'image', 'img3', 'jpg', 1, 'fotografia', 'Repetição<br> <sub>Museu de Arte, Arquitetura e Tecnologia, Belém, Lisboa</sup>', 0),
(5, 'fotografia', 'image', 'img4', 'jpg', 1, 'fotografia', 'Um ponto de vista<br> <sub>Calçada de Santo Amaro, Alcântara, Lisboa</sup>', 0),
(6, '3d', 'image', '3d-01', 'jpg', 1, '3d', 'Mesa Bilhar', 0),
(7, '3d', 'image', '3d-02', 'jpg', 1, '3d', 'Mesa Bilhar #2', 0),
(8, '3d', 'image', '3d-03', 'jpg', 1, '3d', 'Mesa Bilhar #3', 0),
(9, 'maasai', 'image', 'maasai-01', 'jpg', 1, 'Design Gr&#xE1;fico', 'Desenho de logomarca para negócio de joias', 0),
(11, 'cinel', 'image', 'cinel-01', 'jpg', 1, 'Design Gr&#xE1;fico', 'Brochura de Eletrónica', 0),
(12, 'cinel', 'image', 'cinel-03', 'jpg', 1, 'Design Gr&#xE1;fico', 'Pré-visualização de um MUPI', 0),
(13, 'cinel', 'image', 'cinel-02', 'jpg', 1, 'Design Gr&#xE1;fico', 'Pré-visualização de um Outdoor', 0),
(14, 'connect', 'image', 'connect-01', 'jpg', 1, NULL, 'Website fictício para uma empresa de serviços de comunicação', 0),
(15, 'diga', 'image', 'diga-01', 'jpg', 1, 'Design Gr&#xE1;fico', 'Desenho final do logótipo', 0),
(16, 'kiosk', 'image', 'kiosk-01', 'jpg', 1, NULL, 'Desenho e desevolvimento de uma plataforma noticiosa', 0),
(18, 'unicuidar', 'image', 'unicuidar-01', 'jpg', 1, 'Design Gr&#xE1;fico', 'Desenho de marca e branding para negócio de serviços de enfermagem', 0),
(19, 'unicuidar', 'image', 'unicuidar-02', 'jpg', 1, 'Design Gr&#xE1;fico', 'Desenhode marca e branding para negócio de serviços de enfermagem', 0),
(20, 'unicuidar', 'image', 'unicuidar-03', 'jpg', 1, 'Design Gr&#xE1;fico', 'Desenhode marca e branding para negócio de serviços de enfermagem', 0),
(21, 'car', 'image', 'car-01', 'jpg', 1, 'Design Gr&#xE1;fico', 'CarExpress', 0),
(24, 'animacao', 'image', 'retro', 'gif', NULL, NULL, 'Animação Retro', 0),
(25, 'animacao', 'image', 'rocket_exportacao', 'gif', NULL, NULL, 'Animação Rocket', 0),
(26, 'passeios', 'video', 'passeios', 'mp4', NULL, NULL, 'Video sobre a tematica passeios inserida no tema ''As Cores de Lisboa''', 0),
(27, 'passeios', 'image', 'passeios_1', 'png', 1, NULL, 'Video sobre a tematica passeios inserida no tema ''As Cores de Lisboa''', 0),
(28, 'passeios', 'image', 'passeios_2', 'png', 1, NULL, 'Video sobre a tematica passeios inserida no tema ''As Cores de Lisboa''', 0),
(29, 'passeios', 'image', 'passeios_3', 'png', 1, NULL, 'Video sobre a tematica passeios inserida no tema ''As Cores de Lisboa''', 0),
(30, 'animacao', 'image', 'mesa_bilhar', 'gif', NULL, NULL, 'Animação "Abertura Perfeita"', 0),
(31, 'stopmotion', 'video', 'stopmotion', 'mp4', 0, '', 'Video sobre a oferta formativa que o cinel dispõe\r\n', 0),
(32, 'stopmotion', 'image', 'stopmotion-1', 'png', 1, NULL, 'Video sobre a tematica passeios inserida no tema ''As Cores de Lisboa''', 0),
(33, 'stopmotion', 'image', 'stopmotion-2', 'png', 1, NULL, 'Video sobre a tematica passeios inserida no tema ''As Cores de Lisboa''', 0),
(34, 'stopmotion', 'image', 'stopmotion-3', 'png', 1, NULL, 'Video sobre a tematica passeios inserida no tema ''As Cores de Lisboa''', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projetos`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `projetos`
--

INSERT INTO `projetos` (`id_projeto`, `nome`, `descricao`, `tags`, `summary-line`, `likes`, `views`, `share`, `uri`, `external-urls`) VALUES
(4, 'Modelação de Mesa de Bilhar', 'Para este trabalho foi-nos pedido para fazer a modelação e texturizaçao de uma mesa de bilhar, incluindo as bolas e o taco. <br>Podiamos fazer ao nosso gosto, desde que fizesse sentido. Portanto, acabei por fazer uma mesa simples, e nas bolas texturei de modo a que cada uma fosse a representação de um planeta. O taco também foi simples, nada complexo. Para a renderização, coloquei luzes de foco, mais uma luz ambiente que simula o sol.', '3d', 'Modelação de mesa de bilhar com bolas texturizadas', 0, 0, 0, '3d', NULL),
(5, 'Comunicação externa para o CINEL', '<p>Com esta proposta pretendemos dar um look mais fresco à imagem da CINEL. Para isso,\nfoi elaborado uma proposta gráfica que está na linha daquilo que é uma tendência gráfica\ncada vez mais forte, com uma aposta nas cores flat, e também um esquema de cores\nmais predominante.<br>\nPretendemos também reforçar a comunicação exterior através do a luguer de MUPI e\noutdoors nas artérias de Lisboa.</p>\n<p>A identidade gráfica de uma empresa diz muito sobre a sua área d e negócio, e\ntambém a audiência que pretende captar. É essa identidade que s e vende quando se\npublicita um negócio, a mensagem tem de ser clara. Essa comunic ação tem de ser efetiva,\ne para isso, para esta proposta decidimos fazer uma proposta de flyer A5, outdoor e\ntambém um MUPI.<br>\nDesenvolvemos também uma linha de design que se mantém semelhante em todas\nas facetas desta proposta, tendo sido feitas alterações median te o meio em que trabalhamos.</p>\n<p>Toda a comunicação foi desenvolvida com vista a modernizar a imagem da CINEL, de\nforma a atrair formandos mais novos. Para isso, desenvolvemos brochuras que se focam\nem áreas especificas de formação da CINEL, e também com informação geral das formações\nde que a CINEL dispõe.<br>\nPor cada área de formação que consideramos pertinente, foi esco lhida uma cor, que\nachamos que melhor se encaixava no conceito da brochura. No total, foram desenvolvidas\nquatro brochuras, sendo delas uma dedicada à formação em Multimédia, uma sobre\na formação em Informática, uma com ofertas de formação em Eletrónica, e por último,\numa brochura que diz respeito à formação em geral de que a CINEL tem à disposição.</p>\n<p>Para o MUPI, optamos por seguir o estilo gráfico das brochuras, alterando alguns detalhes, como por exemplo, foram removi -\ndos os fundos dos títulos, e a cor dos títulos passou a ser mes ma\nque estava nos fundos. Foram removidos também todos os ícones.\n</p>\n<p>O outdoor segue a mesma linha de design, e visto que é colocado em zonas em que as pessoas\napenas conseguem visualizá-lo em meros segundos, elaboramo-lo de um modo a que nesses meros segundos\na pessoa possa sentir-se cativada pelo design apresentado, e assim, querer visitar o site de modo a ter\nmais informações sobre a CINEL, daí, restringirmo-nos apenas a colocar o site da CINEL. Optamos por fazer\num outdoor de 9m x 3m</p>', 'design-gr%C3%A1fico', 'Criação de comunicação institucional', 0, 0, 0, 'cinel', NULL),
(6, 'Connect Website', '<p>Para este projeto calhou-me o tema sem fios. Por isso, sobre esse tema escolhi fazer um site\nde uma empresa que vende serviços de dados moveis, e de serviço wifi móvel.<br>\nNeste momento, mais de metade do trafego de internet é móvel, mas mesmo assim, as\nempresas de telecomunicações não reconhecem a necessidade de criar pacotes específicos\npara clientes com mais consumo de dados. Podemos ver isso ainda hoje com pacotes de rede\nmóvel de 200 Megabytes por mês. Portanto acho que é um projeto que pretende responder a\nessa necessidade, a de existir mais empresas direcionadas ao consumo móvel.</p>\n<p>O design do site é para set leve, no estilo Material Design e Flat Design. Cada bloco de\nconteúdo estara dentro de um container do com cabeçalho prório. A imagens dos planos\nservirá de base para as restantes páginas, servirá como um template. Só seram feitas as\npáginas que constituem o menu principal.</p>', 'web-design, html, css', 'Site ficticio sobre uma empresa de comunicações', 0, 0, 0, 'connect', NULL),
(7, 'Diga que vai daqui', '<p>Este projeto foi desenvolvido a pedido de um contacto, que tinha uma página onde partilhava os sítios onde ia.</p><p>Foram feitas várias propostas, e quem escolheu foi o cliente. Esta proposta era a que mais se adequava ao projeto, porque o grafismo faz sentido dentro do contexto em que este projeto está a ser aplicado.</p><p>Este projeto consiste numa página na rede socal <i>Facebook</i> onde a cliente partilha com os seus seguidores os destinos por onde passa. Para além de tirar fotografias, também explica a história por detrás dos lugares por onde passa.</p><p>Para além do logótipo, foi também desenvolvido brochuras, papel de carta, cartões de visita e outros elementos de estacionário.</p>', 'design-gr%C3%A1fico, logomarca, estacion%C3%A1rio', 'Logomarca para página sobre viagens', 0, 0, 0, 'diga', NULL),
(8, 'Kiosk Digital', '<p>Para este projeto calharam-me o temas quisque e encerrado. Optei por escolher a palavra \nquiosque como tema e desenvolver o site a partir daí.<br>\nComo estamos numa era digital, optei por fazer um site que albergasse o maior numero de\ninformação possível, informação essa que vem de sites exteriores.<br>A estrutura do site que foi desenhada é uma estrutura template e que depois será replicada\nconsoante o menu e a temática.\nO site tem duas temáticas: Informação e GuiaTV. Estou ainda a considerar fazer mais duas\nsecções: Agenda Cultural e Mapa. Mas a estrutura básica vai contar com essas duas secções:\nInformação e GuiaTV.\nComo referido acima, o layout é um template para a quantidade de informação que vai ter, e\nisso pode variar e tema por tema.\nPara a secção da Informação todo o conteúdo será formatado em blocos de noticias, e todos\nos blocos de noticias contem links para o site original bem como partilha pelo Twitter e\nFacebook. As cores variam aleatoriamente de uma lista já feita,\nPara a secção GuiaTV, vai ser apresentado o programa de 12 canais, podendo o utlizador\nescolher adicionar mais canais. Cada programa da lista vai ter uma imagem de capa quando\npossível, se não, será substituída por uma cor, ou por uma imagem genérica.<br>\nO footer e o header são bastante simples, porque o foco não está sobre esses elementos, mas\nsobre a informação que irá ser recolhida de fontes externas.\nPara as noticias as fontes externas disponibilizam um feed em RSS e para a guiaTV existe um\nwebservice que disponibiliza a programação dos canais que a MEO inclui nos seus pacotes de\nTV.\nAs partilhas pelo Twitter e pelo Facebook serão feitas usando a API disponibilizada para\nprogramadores.\nTanto como as fontes externas como as partilhas já estão programadas por mim, bastando\napenas a adaptação aos conteúdos específicos do site</p>', 'web-development,css,html,php, web-design', 'A tua porta para a internet', 0, 0, 0, 'kiosk', NULL),
(9, 'Maasai', '<p>Esta marca foi desenvolvida para um neg&#xF3;cio de venda de joias de luxo. O nome &#xE9; inspirado numa tribo africana com o mesmo nome, que usa lan&#xE7;as para se defenderem. No briefing que me foi dado, foi me pedido para incorporar os s&#xED;mbolos dessa tribo no log&#xF3;tipo</p><p>Foram também desenvolvidos cartões de visita, carimbos, cartões de agradecimento, envelopes, pastas e papel de carta</p><p>Foi também desenvolvido um manual de normas gráficas.</p>', 'design-gr%C3%A1fico, logomarca, estacion%C3%A1rio', 'Empresa de joias baseada em tribo aficana', 0, 0, 0, 'maasai', NULL),
(10, 'UniCuidar', '<p>Neste projeto foi me pedido para desenvolver um logótipo para um serviço de cuidados personalizados. O meu cliente, um enfermeiro, já tinha este serviço, mas quis fazer um rebranding.</p><p>Este logótipo tem influências nos simbolos que caracterizam a profissão de enfermeiro: a lamarina com a chama. O nome já existia.</p><p>Para além do logótipo, foi também desenvolvido a pintura da viatura, flyers, cartões com os contactos dos enfermeiros e uma folha de toma de medicação a ser distribuida pelas farmácias.</p>', 'design-gr%C3%A1fico, logomarca,estacion%C3%A1rio', 'Serviços de enfermagem personalizados', 0, 0, 0, 'unicuidar', NULL),
(11, 'CarExpress', '<p>Este é um logótip feito para um exercício de branding. Foram distribuidos temas pelos formandos e a mim calhou-me mecânica automóvel</p><p>CarExpress é uma empresa de reparação automóvel,\ncom serviços na manutenção e revisão de veículos.\nPretende ser uma referênçia no mercado,\ncom atendimento permanente durante todo o dia.\nPor isso a marca foi baseada no conceito de ser\num serviço que está sempre com a porta aberta, e\ncom serviços rápidos e eficazes.</p><p>Foi desenvolvido um minikit de normas em forma de desdobravel</p>', 'design-gr%C3%A1fico, logomarca', 'Marca ficticia de oficina automóvel', 0, 0, 0, 'car', NULL),
(12, 'As Cores de Lisboa - Passeios', 'Neste trabalho pretendo demonstrar a arte que existe nos passeios em Lisboa. Vou tentar fotografar passeios desenhados de forma diferente, ou tentar captar os passeios de uma perspectiva diferente. Pretendo usar a luz e a cor para retratar os passeios, de forma a ficarem com mais contraste e cheios de cor, como nunca os vemos. Gostava também de captar passeios diferentes, e alguns mais desgastados, porque representam também a evolução e a passagem do tempo pelas cidades.\n', 'video', 'Video inserido na temática ''As Cores de Lisboa''', 0, 0, 0, 'passeios', NULL),
(13, 'Stopmotion - CINEL', 'Neste trabalho pretendo demonstrar a arte que existe nos passeios em Lisboa. Vou tentar fotografar passeios desenhados de forma diferente, ou tentar captar os passeios de uma perspectiva diferente. Pretendo usar a luz e a cor para retratar os passeios, de forma a ficarem com mais contraste e cheios de cor, como nunca os vemos. Gostava também de captar passeios diferentes, e alguns mais desgastados, porque representam também a evolução e a passagem do tempo pelas cidades.\r\n', 'video', 'Video inserido na temática ''As Cores de Lisboa''', 0, 0, 0, 'stopmotion', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
