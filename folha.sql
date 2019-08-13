-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13/08/2019 às 11:49
-- Versão do servidor: 10.3.16-MariaDB
-- Versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `folha_ponto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `folha`
--

CREATE TABLE `folha` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `cpf` varchar(220) NOT NULL,
  `ctps` varchar(220) NOT NULL,
  `cargo` varchar(220) NOT NULL,
  `mes` date NOT NULL,
  `entrada` time NOT NULL,
  `inicioIntervalo` time NOT NULL,
  `fimIntervalo` time NOT NULL,
  `saida` time NOT NULL,
  `horaExtra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `folha`
--

INSERT INTO `folha` (`id`, `nome`, `cpf`, `ctps`, `cargo`, `mes`, `entrada`, `inicioIntervalo`, `fimIntervalo`, `saida`, `horaExtra`) VALUES
(1, 'cleyton', '15457657', '15543543', 'estagiario', '2019-08-08', '21:06:03', '15:03:05', '12:07:14', '17:06:11', 1),
(2, 'dfsd', '5163513', '21321', 'sdfsd', '2011-09-08', '15:02:00', '16:00:00', '16:03:00', '16:05:00', 1),
(3, 'Capetao', '15154545', '54465465', 'Listador', '2019-08-30', '09:09:00', '09:10:00', '11:11:00', '10:10:00', 5),
(4, 'Paulo gatÃ£o ', '666,666,777-68', '40028922', 'vasp', '2019-08-12', '00:00:00', '12:00:00', '17:59:00', '18:01:00', 766);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `folha`
--
ALTER TABLE `folha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `folha`
--
ALTER TABLE `folha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
