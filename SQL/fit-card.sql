-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 31-Maio-2018 às 01:52
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit-card`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

DROP TABLE IF EXISTS `estabelecimento`;
CREATE TABLE IF NOT EXISTS `estabelecimento` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Rs` varchar(100) NOT NULL,
  `Nf` varchar(100) NOT NULL,
  `CNPJ` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `dateCad` varchar(100) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `agcc` varchar(100) NOT NULL,
  `conta` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estabelecimento`
--

INSERT INTO `estabelecimento` (`id`, `Rs`, `Nf`, `CNPJ`, `email`, `adress`, `city`, `state`, `tel`, `dateCad`, `Categoria`, `Status`, `agcc`, `conta`) VALUES
(2, 'SapoDoido', 'Hahahahaha', '33.333.333/3333-33', 'xxx', 'xxx', 'xxx', 'AC', 'dasdasdasa', '19/99/3929', 'Supermercado', 'Ativo', '212-1', '21.212-1'),
(3, '58.179.526/0001-60', 'sddadsad', '58.179.526/0001-60', '', '', '', 'AC', '212112', '', 'Supermercado', 'Ativo', '', ''),
(6, 'Raabe Doces', 'RaabetÃ£o', '96.437.580/0001-58', 'dakdsaokdas', '96.437.580/0001-58', '', 'AC', '19 99494949', '', 'Supermercado', 'Ativo', '', ''),
(12, 'Raabe Doces', 'RabetÃ£o GostosÃ£o', '96.437.580/0001-58', 'raabe@gmail.com', '96.437.580/0001-58', 'XXX', 'AC', '19 996968088', '01/03/1992', 'Supermercado', 'Ativo', '000-0', '00.000-0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
