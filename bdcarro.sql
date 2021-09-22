-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2021 às 18:36
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdcarro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcarro`
--

CREATE TABLE `tbcarro` (
  `idCarro` int(11) NOT NULL,
  `nomeCarro` varchar(50) DEFAULT NULL,
  `corCarro` varchar(50) DEFAULT NULL,
  `marcaCarro` varchar(50) DEFAULT NULL,
  `velMaxCarro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcarro`
--

INSERT INTO `tbcarro` (`idCarro`, `nomeCarro`, `corCarro`, `marcaCarro`, `velMaxCarro`) VALUES
(1, 'GTR', 'Cinza', 'Nissan', '315'),
(2, 'Ferrari 488', 'Vermelho', 'Ferrari', '340'),
(3, 'Ferrari 812', 'Vermelho', 'Ferrari', '340'),
(8, 'Lamborghini Urus', 'Amarelo', 'Lamborghini', '305'),
(9, 'Lamborghini Aventador SV', 'Preto', 'Lamborghini', '350'),
(10, 'Mercedes GLS', 'Branco', 'Mercedes', '246'),
(11, 'BMW M3', 'Azul', 'BMW', '290'),
(12, 'BMW M5', 'Vermelho', 'BMW', '250'),
(13, 'BMW X3', 'Cinza', 'BMW', '285'),
(14, 'BMW Z4', 'Branco', 'BMW', '250'),
(15, 'Lamborghini Huracan', 'Laranja', 'Lamborghini', '325'),
(17, 'Ferrari California', 'Vermelho', 'Ferrari', '310'),
(18, 'Bugatti Veyron', 'Preto', 'Bugatti', '434'),
(19, 'Bugatti Chiron', 'Azul', 'Bugatti', '400'),
(21, 'Ferrari F8 Spider', 'Preto', 'Ferrari', '310'),
(22, 'Mercedes GLS1', 'Preto', 'Mercedes', '246'),
(24, 'GTR', 'Azul', 'Nissan', '300'),
(26, 'GTR teste', 'Amarelo', 'Nissan', '300');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcarro`
--
ALTER TABLE `tbcarro`
  ADD PRIMARY KEY (`idCarro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcarro`
--
ALTER TABLE `tbcarro`
  MODIFY `idCarro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
