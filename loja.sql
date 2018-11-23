-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2018 às 22:34
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `rua` varchar(150) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `cpf`, `email`, `telefone`, `rua`, `numero`, `complemento`, `bairro`, `cidade`) VALUES
(1, '1', '1', 'a@a.com', '1', '1', 1, '1', '1', '1'),
(2, '1', '1', '1@a.com', '1', '1', 1, '1', '1', '1'),
(3, '1', '1', '1@a.com', '1', '1', 1, '1', '1', '1'),
(4, '1', '1', '1@a.com', '1', '1', 1, '1', '1', '1'),
(5, '1', '151', 'a@a.com', '1', '1', 1, '1', '1', '1'),
(6, '1', '1', '1@a.com', '1', '1', 1, '1', '1', '1'),
(7, '1', '1', '1@a.com', '1', '1', 1, '1', '1', '1'),
(8, '1', '1', '1@a.com', '1', '1', 1, '1', '1', '1'),
(9, '4', '4', '4@a.com', '54', '5', 45, '45', '45', '454'),
(10, '5', '5', '5@5.com', '5', '5', 5, '5', '5123', '5'),
(11, '5', '5', '5@5.com', '5', '5', 5, '5', '5123', '5'),
(12, '8', '8', '8@8.com', '8', '8', 8, '8', '8', '8'),
(13, '5', '5', '5@5.com', '5', '5', 5, '5', '5', '5'),
(14, '9', '9', '9@a.com', '9', '9', 9, '9', '9', '9'),
(15, '9', '9', '9@9.com', '9', '9', 9, '888', '9', '99'),
(16, '9', '9', '9@9.com', '9', '9', 9, '888', '9', '99'),
(17, '9', '9', '9@9.com', '9', '9', 9, '888', '9', '99'),
(18, '9', '9', '9@9.com', '9', '9', 9, '888', '9', '99'),
(19, '8', '8', '8@a.com', '8', '8', 8, '8', '8', '8'),
(20, '8', '8', '8@a.com', '8', '8', 8, '8', '8', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
