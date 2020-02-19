-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Fev-2020 às 23:49
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testapplication`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `question_alternative`
--

CREATE TABLE `question_alternative` (
  `ID_QUEST_ALT` int(11) NOT NULL,
  `QUESTION_NUMBER` int(11) NOT NULL,
  `DESC_QUESTION_ALT` text NOT NULL,
  `ALTERNATIVE_A` text NOT NULL,
  `ALTERNATIVE_B` text NOT NULL,
  `ALTERNATIVE_C` text DEFAULT NULL,
  `ALTERNATIVE_D` text DEFAULT NULL,
  `ALTERNATIVE_E` text DEFAULT NULL,
  `ALTERNATIVE_F` text DEFAULT NULL,
  `ALTERNATIVE_G` text DEFAULT NULL,
  `ALT_CORRECT` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `question_dissertative`
--

CREATE TABLE `question_dissertative` (
  `ID_QUEST_DIS` int(11) NOT NULL,
  `QUESTION_DIS_NUMBER` int(11) NOT NULL,
  `DESC_QUESTION_DIS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `question_alternative`
--
ALTER TABLE `question_alternative`
  ADD PRIMARY KEY (`ID_QUEST_ALT`);

--
-- Índices para tabela `question_dissertative`
--
ALTER TABLE `question_dissertative`
  ADD PRIMARY KEY (`ID_QUEST_DIS`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `question_alternative`
--
ALTER TABLE `question_alternative`
  MODIFY `ID_QUEST_ALT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT de tabela `question_dissertative`
--
ALTER TABLE `question_dissertative`
  MODIFY `ID_QUEST_DIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
