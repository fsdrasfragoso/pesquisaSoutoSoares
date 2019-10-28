-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 27-Out-2019 às 21:59
-- Versão do servidor: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpesquisa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `data` varchar(100) NOT NULL,
  `responsavel` varchar(100) DEFAULT NULL,
  `zona` varchar(15) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `comunidade` varchar(50) NOT NULL,
  `tipoImovel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `data`, `responsavel`, `zona`, `bairro`, `comunidade`, `tipoImovel`) VALUES
(16, '27/10/2019', 'Sales', '', 'sistemas', 'lobato', ''),
(17, '27-10-2019 14:52', 'neto', '', 'admin', 'lobato', ''),
(18, '27-10-2019 15:16', 'Paulo Coelho', '', 'moda', 'lobato', ''),
(19, '27-10-2019 15:27', 'Mauro Naves', '', 'sistemas', 'lobato', ''),
(20, '27-10-2019 15:29', 'Rose', '', 'Barroquinha', 'willys', ''),
(21, '27-10-2019 15:29', 'FlÃ¡via', '', 'Loteamento Fl&aacutevia', 'lobato', ''),
(22, '27-10-2019 15:30', 'Flavia', '', 'Loteamento Flavia', 'willys', ''),
(23, '27-10-2019 15:34', 'rocha pedro', '', 'Centro', 'lobato', ''),
(24, '27-10-2019 15:37', 'Teste outro Lado', '', 'Outro Lado', 'lobato', ''),
(25, '27-10-2019 15:39', 'teste atalho', '', 'Loteamento Flavia', 'allan', ''),
(26, '27-10-2019 15:43', 'rosa michelon', '', 'Centro', 'Alto da Boa Vista', ''),
(27, '27-10-2019 15:47', 'Zends carlos', '', 'Centro', 'Alto da Boa Vista', ''),
(28, '27-10-2019 15:48', 'Ricarlovich', '', 'Loteamento Flavia', '', ''),
(29, '27-10-2019 15:44', 'Ribacarlovich Certo', '', 'Barroquinha', '', ''),
(30, '27-10-2019 15:57', 'agora vai karai', '', 'Barroquinha', 'Alagadico de Campo Alegre', ''),
(31, '27-10-2019 15:59', 'Roberval ameira', '', 'Centro', 'Alagadico de Pocinho', ''),
(32, '27-10-2019 16:03', 'dheiber', '', 'Barroquinha', 'Alagadico de Campo Alegre', ''),
(33, '27-10-2019 17:19', 'saulo moura', '', 'Centro', 'Boa Vista', ''),
(34, '27-10-2019 17:26', 'pÃ©o do morro', '', 'Outro Lado', 'Morrinhos de Cima', ''),
(35, '27-10-2019 17:43', 'Digitarildo com zona', 'Rural', 'Barroquinha', 'Alagadico de Campo Alegre', ''),
(36, '27-10-2019 17:44', 'Digitarildo com zona', 'Urbana', 'Centro', 'Alagadico de Pocinho', ''),
(37, '27-10-2019 18:43', 'ZÃ© de Pedro', 'Urbana', 'Outro Lado', '', ''),
(38, '27-10-2019 18:44', 'Urbana', 'Urbana', 'Centro', '', ''),
(39, '27-10-2019 18:44', 'Rural', 'Rural', '', 'Barriguda', ''),
(40, '27-10-2019 18:51', 'Pedro', 'Rural', '', 'ArcÃªnio', ''),
(41, '27-10-2019 18:51', 'Zecs', 'Rural', '', 'As Lagoas', ''),
(42, '27-10-2019 19:36', 'Zito', 'Urbana', 'Loteamento Flavia', '', ''),
(43, '27-10-2019 20:10', 'Nnnnnnnn', 'Rural', '', 'Alto da Boa Vista', ''),
(44, '27-10-2019 21:58', 'casa', 'Rural', '', 'Alagadico de Campo Alegre', 'casa'),
(45, '27-10-2019 21:58', 'dois comodos', 'Rural', '', 'Alagadico de Campo Alegre', 'Comodos, Quitinete, Barraco'),
(46, '27-10-2019 21:58', 'Outro', 'Rural', '', 'Alagadico de Campo Alegre', 'outro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
