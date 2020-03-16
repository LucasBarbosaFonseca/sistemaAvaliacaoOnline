-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2020 às 20:12
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `USER_ID` bigint(20) NOT NULL,
  `USER_NAME` varchar(40) NOT NULL,
  `USER_EMAIL` varchar(50) NOT NULL,
  `USER_PASSWORD` varchar(80) NOT NULL,
  `USER_TYPE` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`USER_ID`, `USER_NAME`, `USER_EMAIL`, `USER_PASSWORD`, `USER_TYPE`) VALUES
(6, 'Lucas Barbosa Fonseca ', 'lufonsecabarbosa@hotmail.com', '$2y$10$hCjjQrLL9Pmsi6Xz.m1hg.im8JwRJRW9JZ38OAn6bFUyiEPDj3JN.', 'admin');

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
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`);

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

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `USER_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
