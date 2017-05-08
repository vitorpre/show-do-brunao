-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2017 às 23:37
-- Versão do servidor: 5.6.16
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showdobrunao`
--
CREATE DATABASE IF NOT EXISTS `showdobrunao` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `showdobrunao`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `idJogador` int(6) UNSIGNED NOT NULL,
  `nome` varchar(200) CHARACTER SET latin1 NOT NULL,
  `pontuacao` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`idJogador`, `nome`, `pontuacao`) VALUES
(1, 'Vitorpre', 5),
(2, 'Vitorpre', 5),
(3, 'Vitorpre', 2),
(4, 'Vitorpre', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `idPergunta` int(6) UNSIGNED NOT NULL,
  `descricaoPergunta` varchar(255) CHARACTER SET latin1 NOT NULL,
  `alternativaA` varchar(255) CHARACTER SET latin1 NOT NULL,
  `alternativaB` varchar(255) CHARACTER SET latin1 NOT NULL,
  `alternativaC` varchar(255) CHARACTER SET latin1 NOT NULL,
  `alternativaD` varchar(255) CHARACTER SET latin1 NOT NULL,
  `alternativaE` varchar(255) CHARACTER SET latin1 NOT NULL,
  `alternativaCorreta` char(1) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`idPergunta`, `descricaoPergunta`, `alternativaA`, `alternativaB`, `alternativaC`, `alternativaD`, `alternativaE`, `alternativaCorreta`) VALUES
(1, 'Qual dos versos abaixo pertence a uma música do Péricles?', '"Como uma deusa você me mantem"', '"É preciso amar as pessoas como se não houvesse amanhã"', '"Que talvez a gente se encontrou na hora errada"', '"Por isso essa força que me leva a cantar"', '"Quando eu estou aqui vivendo este momento"', 'C'),
(2, 'Quem?', '"Como uma deusa você me mantem"', '"Como uma deusa você me mantem"', '"Como uma deusa você me mantem"', '"Como uma deusa você me mantem"', '"Como uma deusa você me mantem"', 'C'),
(3, 'Como podemos definir o outono?', 'Malhando', 'Época da queda das folhas', 'Frio de fim de tarde', 'É sempre igual, as folhas caem no quintal', 'Estação antes do verão', 'D'),
(4, 'Teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'D'),
(7, 'Teste1', 'teste', 'teste', 'teste', 'teste', 'teste', 'D'),
(8, 'Teste2', 'teste', 'teste', 'teste', 'teste', 'teste', 'D'),
(9, 'Teste3', 'teste', 'teste', 'teste', 'teste', 'teste', 'D'),
(10, 'Teste4', 'teste', 'teste', 'teste', 'teste', 'teste', 'D'),
(11, 'Teste5', 'teste', 'teste', 'teste', 'teste', 'teste', 'D'),
(12, 'Teste6', 'teste', 'teste', 'teste', 'teste', 'teste', 'D'),
(13, 'Teste7', 'teste', 'teste', 'teste', 'teste', 'teste', 'D'),
(14, 'Teste8', 'teste', 'teste', 'teste', 'teste', 'teste', 'D'),
(15, 'Teste9', 'teste', 'teste', 'teste', 'teste', 'teste', 'D'),
(16, 'Teste10', 'teste', 'teste', 'teste', 'teste', 'teste', 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`idJogador`);

--
-- Indexes for table `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`idPergunta`),
  ADD UNIQUE KEY `descricaoPergunta` (`descricaoPergunta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `idJogador` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `idPergunta` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
