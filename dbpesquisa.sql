-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 28-Out-2019 às 23:47
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
  `tipoImovel` varchar(100) NOT NULL,
  `regOcupImovel` varchar(20) NOT NULL,
  `tipoConstr` varchar(255) NOT NULL,
  `abastAgua` varchar(150) NOT NULL,
  `tratamentoAgua` varchar(150) NOT NULL,
  `coletaEsgoto` varchar(200) NOT NULL,
  `destinoLixo` varchar(255) NOT NULL,
  `segPublica` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `data`, `responsavel`, `zona`, `bairro`, `comunidade`, `tipoImovel`, `regOcupImovel`, `tipoConstr`, `abastAgua`, `tratamentoAgua`, `coletaEsgoto`, `destinoLixo`, `segPublica`) VALUES
(88, '28-10-2019 22:35', 'UM ITEM COLETA ESGOTO', 'Rural', '', 'Alagadico de Campo Alegre', 'casa', 'Propria', 'Alvenaria / Tijolo', 'Rede geral', 'Filtro', 'Fossa rudimentar', '', ''),
(89, '28-10-2019 23:02', 'DESTINO LIXO SALVANDO UM ITEM', 'Rural', '', 'Alagadico de Campo Alegre', 'casa', 'Propria', 'Alvenaria / Tijolo', 'Rede geral', 'Filtro', 'Rede Geral', 'Coleta publica', ''),
(90, '28-10-2019 23:03', 'SALVANDO TODOS ITEM 7', 'Rural', '', 'Alagadico de Campo Alegre', 'casa', 'Propria', 'Alvenaria / Tijolo', 'Rede geral', 'Filtro', 'Rede Geral', 'Coleta publicaQueimadoEnterradoLancado no fundo d quintalLancado em terreno baldioLancado em curso dagua', ''),
(91, '28-10-2019 23:05', 'QUESTAO 7 SEM RESPOSTA', 'Rural', '', 'Alagadico de Campo Alegre', 'casa', 'Propria', 'Alvenaria / Tijolo', 'Rede geral', 'Filtro', 'Rede Geral', 'Sem Resposta', ''),
(92, '28-10-2019 23:42', 'SEGURANÃ‡A RUIM', 'Rural', '', 'Alagadico de Campo Alegre', 'casa', 'Propria', 'Alvenaria / Tijolo', 'Rede geral', 'Filtro', 'Rede Geral', 'Coleta publica', 'Ruim');

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
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
