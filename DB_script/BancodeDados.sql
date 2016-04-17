-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 17/04/2016 às 17:46
-- Versão do servidor: 5.5.47-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
--
-- Banco de dados: `projetox`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administracao`
--

CREATE TABLE IF NOT EXISTS `administracao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `administracao`
--

INSERT INTO `administracao` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Phelipe', 'phelipe@email.com', 'abc123'),
(2, 'root', 'root', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `celular` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `endereco`, `numero`, `telefone`, `celular`) VALUES
(2, 'Lucas Galiotti', 'lucas@email.com', 'Endereço', '12', '000000000000', '23212321'),
(3, 'Pedro', 'pedro@email.com', 'Endereço ', '2', '56546545', '56454');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `s_tipo` varchar(255) NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `s_tipo`, `valor`) VALUES
(1, 'Faxina Completa', 'Serviços Gerais', 100),
(2, 'Instalação de Antena', 'Serviços Gerais', 180),
(3, 'Lavar Carro (completo)', 'Serviços Gerais ', 80);

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos_contratados`
--

CREATE TABLE IF NOT EXISTS `servicos_contratados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_servico` varchar(200) NOT NULL,
  `nome_cliente` varchar(200) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Fazendo dump de dados para tabela `servicos_contratados`
--

INSERT INTO `servicos_contratados` (`id`, `nome_servico`, `nome_cliente`, `data_inicio`, `data_fim`) VALUES
(5, 'Instalação de Antena', 'Lucas Galiotti', '2016-04-12', '2016-04-18'),
(6, 'Instalação de Antena', 'Pedro', '2016-05-01', '2016-06-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
