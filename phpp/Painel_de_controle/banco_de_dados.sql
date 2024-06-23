-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Jun-2023 às 14:52
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testeaula`
--
CREATE DATABASE IF NOT EXISTS `testeaula` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `testeaula`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

DROP TABLE IF EXISTS `tbproduto`;
CREATE TABLE IF NOT EXISTS `tbproduto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descricao` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_cadastrou` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`id`, `nome`, `tipo`, `descricao`, `id_cadastrou`) VALUES
(9, 'pera', 'fruta', 'pera é uma fruta, geralmente dura', 1),
(10, 'maçã', 'fruta', 'maçã é uma fruta, nao confundir com maça medieval', 1),
(11, 'maça medieval', 'arma', 'maça medieval é um pedaço de pau com uma bola pontuda de ferro na ponta, não confundir com maçã', 1),
(12, 'calculadora', 'eletronico', 'feita para fazer calculos, exemplo: 65486 + 14599', 1),
(13, 'xampu Prakalvo', 'cosmético', 'Cura calvice nível 10, mas se for mais que isso já era.\r\n10 entre 10 calvos aprovam! :)', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nivel` char(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`id`, `login`, `senha`, `nome`, `nivel`) VALUES
(1, 'adm', 'senha', 'Administrador', 'ADM'),
(2, 'usuario', 'senha', 'Jose', 'USUARIO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
