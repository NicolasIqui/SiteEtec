-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/11/2024 às 23:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdetec`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `codAdmin` int(11) NOT NULL,
  `EmailAdmin` varchar(75) NOT NULL,
  `SenhaAdmin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbadmin`
--

INSERT INTO `tbadmin` (`codAdmin`, `EmailAdmin`, `SenhaAdmin`) VALUES
(1, 'adm@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbapresentacao`
--

CREATE TABLE `tbapresentacao` (
  `codApresentacao` int(11) NOT NULL,
  `localApresentacao` varchar(40) DEFAULT NULL,
  `cursosApresentação` varchar(50) DEFAULT NULL,
  `turmasApresentação` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbapresentacao`
--

INSERT INTO `tbapresentacao` (`codApresentacao`, `localApresentacao`, `cursosApresentação`, `turmasApresentação`) VALUES
(1, 'Etec Guainases', 'Desenvolvimento de Sistemas', '2 Ds');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcadastro`
--

CREATE TABLE `tbcadastro` (
  `CodCadastro` int(11) NOT NULL,
  `EmailCadastro` varchar(75) DEFAULT NULL,
  `SenhaCadastro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcadastro`
--

INSERT INTO `tbcadastro` (`CodCadastro`, `EmailCadastro`, `SenhaCadastro`) VALUES
(1, 'adm@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcontato`
--

CREATE TABLE `tbcontato` (
  `codContato` int(11) NOT NULL,
  `nomeUsuario` varchar(50) DEFAULT NULL,
  `msgContato` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcursos`
--

CREATE TABLE `tbcursos` (
  `codCurso` int(11) NOT NULL,
  `nomeCurso` varchar(40) DEFAULT NULL,
  `carhaHoraria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcursos`
--

INSERT INTO `tbcursos` (`codCurso`, `nomeCurso`, `carhaHoraria`) VALUES
(4, 'DESENVOLVIMENTO DE SISTEMAS', 3600),
(5, 'Nutrição e dietica', 3600);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbnoticia`
--

CREATE TABLE `tbnoticia` (
  `codNoticia` int(11) NOT NULL,
  `descNoticia` varchar(40) DEFAULT NULL,
  `dataNoticia` datetime DEFAULT NULL,
  `localNoticia` varchar(50) DEFAULT NULL,
  `conteudoNoticia` varchar(1000) DEFAULT NULL,
  `imagemNoticia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbnoticia`
--

INSERT INTO `tbnoticia` (`codNoticia`, `descNoticia`, `dataNoticia`, `localNoticia`, `conteudoNoticia`, `imagemNoticia`) VALUES
(8, 'Vandalismo', '2024-08-22 00:00:00', 'Etec guaianases', 'Jogaram casca de bananana porta da escola', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpainel`
--

CREATE TABLE `tbpainel` (
  `codPainel` int(11) NOT NULL,
  `descPainel` varchar(40) DEFAULT NULL,
  `localPainel` varchar(40) DEFAULT NULL,
  `tamanhoPainel` varchar(40) DEFAULT NULL,
  `noticiaPainel` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcadastro`
--
ALTER TABLE `tbcadastro`
  ADD PRIMARY KEY (`CodCadastro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcadastro`
--
ALTER TABLE `tbcadastro`
  MODIFY `CodCadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
