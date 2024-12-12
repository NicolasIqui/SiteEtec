-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2024 às 18:31
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdetec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `codAdmin` int(11) NOT NULL,
  `EmailAdmin` varchar(75) NOT NULL,
  `SenhaAdmin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbadmin`
--

INSERT INTO `tbadmin` (`codAdmin`, `EmailAdmin`, `SenhaAdmin`) VALUES
(1, 'adm@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbapresentacao`
--

CREATE TABLE `tbapresentacao` (
  `codApresentacao` int(11) NOT NULL,
  `localApresentacao` varchar(40) DEFAULT NULL,
  `cursosApresentação` varchar(50) DEFAULT NULL,
  `turmasApresentação` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbapresentacao`
--

INSERT INTO `tbapresentacao` (`codApresentacao`, `localApresentacao`, `cursosApresentação`, `turmasApresentação`) VALUES
(1, 'Etec Guainases', 'Desenvolvimento de Sistemas', '2 Ds');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcadastro`
--

CREATE TABLE `tbcadastro` (
  `CodCadastro` int(11) NOT NULL,
  `EmailCadastro` varchar(75) DEFAULT NULL,
  `SenhaCadastro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcadastro`
--

INSERT INTO `tbcadastro` (`CodCadastro`, `EmailCadastro`, `SenhaCadastro`) VALUES
(6, 'iqui123@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontato`
--

CREATE TABLE `tbcontato` (
  `codContato` int(11) NOT NULL,
  `emailUsuario` varchar(50) DEFAULT NULL,
  `msgUsuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcontato`
--

INSERT INTO `tbcontato` (`codContato`, `emailUsuario`, `msgUsuario`) VALUES
(1, 'Praia', 'SDSADSAD'),
(2, 'dsa', 'DSADADA'),
(3, 'dsa', 'DSADADA'),
(4, 'teste', 'stestest');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcursos`
--

CREATE TABLE `tbcursos` (
  `codCurso` int(11) NOT NULL,
  `nomeCurso` varchar(40) DEFAULT NULL,
  `carhaHoraria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcursos`
--

INSERT INTO `tbcursos` (`codCurso`, `nomeCurso`, `carhaHoraria`) VALUES
(4, 'DESENVOLVIMENTO DE SISTEMAS', 3600),
(5, 'Nutrição e dietica', 3600);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbnoticia`
--

CREATE TABLE `tbnoticia` (
  `codNoticia` int(11) NOT NULL,
  `descNoticia` varchar(40) DEFAULT NULL,
  `dataNoticia` date DEFAULT NULL,
  `localNoticia` varchar(50) DEFAULT NULL,
  `conteudoNoticia` varchar(1000) DEFAULT NULL,
  `imagemNoticia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbnoticia`
--

INSERT INTO `tbnoticia` (`codNoticia`, `descNoticia`, `dataNoticia`, `localNoticia`, `conteudoNoticia`, `imagemNoticia`) VALUES
(2, 'dsa', '2024-11-01', 'asdad', 'sadad', 'imgNoticia/robs.jpg'),
(3, 'qsddq', '0000-00-00', 'sqdqd', 'qsdqdsqd', 'imgNoticia/[].png'),
(4, 'dsa', '2024-12-05', 'Monguagua ', 'dsadsadas', 'imgNoticia/etekinha.jpg'),
(5, 'qsddq', '0000-00-00', 'sqdqd', 'qsdqdsqd', 'imgNoticia/labarotorionutri.jpeg'),
(6, 'etec', '2024-11-24', 'Etec Guainases', 'vai ter uma festa na ete\r\nc', 'imgNoticia/Biblioteca.png'),
(7, 'sd', '2024-11-21', 'sda', 'ads', 'imgNoticia/canguru.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpainel`
--

CREATE TABLE `tbpainel` (
  `codPainel` int(11) NOT NULL,
  `descPainel` varchar(40) DEFAULT NULL,
  `localPainel` varchar(40) DEFAULT NULL,
  `tamanhoPainel` varchar(40) DEFAULT NULL,
  `noticiaPainel` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`codAdmin`);

--
-- Indexes for table `tbapresentacao`
--
ALTER TABLE `tbapresentacao`
  ADD PRIMARY KEY (`codApresentacao`);

--
-- Indexes for table `tbcadastro`
--
ALTER TABLE `tbcadastro`
  ADD PRIMARY KEY (`CodCadastro`);

--
-- Indexes for table `tbcontato`
--
ALTER TABLE `tbcontato`
  ADD PRIMARY KEY (`codContato`);

--
-- Indexes for table `tbcursos`
--
ALTER TABLE `tbcursos`
  ADD PRIMARY KEY (`codCurso`);

--
-- Indexes for table `tbnoticia`
--
ALTER TABLE `tbnoticia`
  ADD PRIMARY KEY (`codNoticia`);

--
-- Indexes for table `tbpainel`
--
ALTER TABLE `tbpainel`
  ADD PRIMARY KEY (`codPainel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `codAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbapresentacao`
--
ALTER TABLE `tbapresentacao`
  MODIFY `codApresentacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbcadastro`
--
ALTER TABLE `tbcadastro`
  MODIFY `CodCadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbcontato`
--
ALTER TABLE `tbcontato`
  MODIFY `codContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbcursos`
--
ALTER TABLE `tbcursos`
  MODIFY `codCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbnoticia`
--
ALTER TABLE `tbnoticia`
  MODIFY `codNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbpainel`
--
ALTER TABLE `tbpainel`
  MODIFY `codPainel` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
