-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Jun-2018 às 00:41
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licitsave`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

DROP TABLE IF EXISTS `arquivos`;
CREATE TABLE IF NOT EXISTS `arquivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `id_licitacao` int(11) NOT NULL,
  `nome_arquivo` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `descricao`, `id_licitacao`, `nome_arquivo`, `tipo`) VALUES
(1, 'Edital 060/2016', 3, 'eba5a7a0c0f362a7ad93ced82c48f739.pdf', 'Edital'),
(2, 'Contrato 060/2016', 2, '02f96d21b9ad2aeb020fd31307dc65e0.pdf', 'Contrato'),
(3, 'Edital 25/2016', 4, 'b14037c34a64835a38d43b014d566f31docx', 'Edital'),
(4, 'Edital 181/2016', 6, '4d56c5983d4f48e633295da55b9afa06.pdf', 'Edital'),
(5, 'Edital 39/2016', 7, '08f631723fc722f47ff4f4d6090d8df9.pdf', 'Edital'),
(6, 'Ediatal 48/2016', 8, '62c4cd1c698b2477a68cd2455ae6aea4.pdf', 'Edital'),
(7, 'Edital 007/2016', 9, 'c07553834e3a54416bec28c96102cbd5.pdf', 'Edital'),
(8, 'Edital 010/2016 - Bocaiuva', 10, 'a39d7fb4ebf9af185e4ccb5d4732b09d.pdf', 'Edital'),
(9, 'Edital 105/2015 - Bom Despacho', 11, '179c2b212eb1ecb07b4e029c3cbd0279.pdf', 'Edital'),
(10, 'Edital 123/2015 - Bom Despacho', 12, '88ace0fe0bef24564ef671a6ccd9786b.pdf', 'Edital'),
(11, 'Edital 127/2015 - Bom Despacho', 13, 'b16bd50fe4f36e9e8685f9bcd7f95456.pdf', 'Edital'),
(12, 'Edital 128/2015 - Bom Despacho', 14, 'b2c04e4dd9e831aa26f18735d3396925.pdf', 'Edital'),
(13, 'Edital 128/2017 - Bom Despacho', 14, 'eb81be11a1f513bab3e8751fc03d1641.pdf', 'Edital'),
(14, 'teste 2', 14, '74d8f6e1d4ac8e5d4c5a8c1a86bb1688.txt', 'Edital'),
(15, '01/2018 - Bom Despacho', 15, '17355b31a18544c0623255c0beafadca.pdf', 'Edital');

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `envios` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `docs_empresa`
--

DROP TABLE IF EXISTS `docs_empresa`;
CREATE TABLE IF NOT EXISTS `docs_empresa` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `validade` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `docs_empresa`
--

INSERT INTO `docs_empresa` (`id`, `nome`, `data`, `validade`, `arquivo`) VALUES
(16, 'CertidÃ£o de FalÃªncia e Concordata', '16/06/2018 ', '15/06/2018', 'c5cbbdc8b28117536b2479915f81693c.pdf'),
(15, 'Contrato Social', '16/06/2018 ', 'Sem Validade', 'ecc4adf289b788762151ad8730bc1b94.pdf'),
(13, 'CertidÃ£o Negativa Municipal', '16/06/2018 ', '02/07/2018', 'ebdf8bbf7941342665273342adbc0bbf.pdf'),
(14, 'CertidÃ£o Negativa  Estadual', '16/06/2018 ', '02/07/2018', 'd0daab7f1fd2f8eaeef75a04dd0fb200.pdf'),
(17, 'CNPJ', '16/06/2018 ', '02/07/2018', '1f73272b7883fa9c62e9e06eead60c5a.pdf'),
(18, 'InscriÃ§Ã£o ICMS/ISS', '16/06/2018 ', '02/07/2018', 'f7db61565421562e1a0d65bb1c605912.pdf'),
(19, 'CertidÃ£o Negativa Federal', '16/06/2018 ', '02/07/2018', '35cf6adad75b2177c848c97ba1ba7820.pdf'),
(20, 'CertidÃ£o Negativa INSS', '16/06/2018 ', '02/07/2018', '47f1d9b8703f854ce51da0ddeba89897.pdf'),
(21, 'CertidÃ£o Negativa FGTS', '16/06/2018 ', '02/07/2018', '72147842a10ecf7a471e421c886a394d.pdf'),
(22, 'CertidÃ£o de SuperveniÃªncia Fatos Impeditivos', '16/06/2018 ', '20/06/2018', '72cff5a93d0890a5978588092ac2a23c.pdf'),
(23, 'DeclaraÃ§Ã£o Emprego de Menores', '16/06/2018 ', '16/06/2018', '8dbf63ea0f6a8ab24b2ea014a0a85464.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `envios`
--

DROP TABLE IF EXISTS `envios`;
CREATE TABLE IF NOT EXISTS `envios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `para` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pagina` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `licitacao`
--

DROP TABLE IF EXISTS `licitacao`;
CREATE TABLE IF NOT EXISTS `licitacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ano` varchar(255) NOT NULL,
  `num_processo` varchar(255) NOT NULL,
  `num_edital` varchar(255) NOT NULL,
  `objeto` varchar(255) NOT NULL,
  `modalidade` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `entidade` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `licitacao`
--

INSERT INTO `licitacao` (`id`, `ano`, `num_processo`, `num_edital`, `objeto`, `modalidade`, `cidade`, `entidade`, `data`) VALUES
(3, '2016', '238/2016', '60/2016', 'Uniformes', 'Registro de PreÃ§os', 'Alfenas/MG', NULL, NULL),
(4, '2016', '36/2016', '25/2016', 'Uniformes', 'Registro de PreÃ§os', 'AraÃ§uai/MG', NULL, NULL),
(5, '2016', '101/2016', '08.058/2016', 'Uniformes', 'PregÃ£o Presencial', 'Araxa/MG', NULL, NULL),
(6, '2016', '248/2016', '181/2016', 'Uniformes', 'PregÃ£o Presencial', 'Arcos', NULL, NULL),
(7, '2016', '92/2016', '39/2016', 'Tecidos p/ bloco Cirurgico', 'Registro de PreÃ§os', 'BarÃ£o de Cocais/MG', NULL, NULL),
(8, '2016', '84/2016', '48/2016', 'Uniformes', 'PregÃ£o Presencial', 'Barroso/MG', NULL, '2018-07-14'),
(9, '2016', '007/2016', '007/2016', 'EPI', 'Registro de PreÃ§os', 'BocaiÃºva/MG', NULL, NULL),
(10, '2016', '009/2016', '010/2016', 'Material de Limpeza', 'Registro de PreÃ§os', 'BocaiÃºva/MG', NULL, NULL),
(11, '2016', '20298.000222/2015-36 ', '105/2015 ', 'Roupas Diversas', 'Registro de PreÃ§os', 'Bom Despacho/MG', NULL, NULL),
(12, '2016', '20298.000267/2015-19', '123/2015', 'EPI', 'Registro de PreÃ§os', 'Bom Despacho/MG', NULL, NULL),
(13, '2016', '20298.000273/2015-68 ', '127/2015', 'Uniformes', 'PregÃ£o Presencial', 'Bom Despacho/MG', NULL, NULL),
(14, '2016', '20298.000273/2015-68 ', '128/2015', 'Aquisicao de uniformes, nas quantidades e especificoes determinadas no item 2.1 deste Termo de Referencia', 'PregÃ£o Presencial', 'Bom Despacho/MG', NULL, NULL),
(22, '2018', '01/2018', '01/2018', 'compra de maÃ§a', 'PregÃ£o EletrÃ´nico', 'Montes Claros', NULL, '2018-08-15'),
(23, '2018', '01/2018', '01/2018', 'Teste 2', 'PregÃ£o Presencial', 'Montes Claros', NULL, NULL),
(24, '2018', '01/2018', '01/2018', 'teste 3', 'ConcorrÃªncia', 'Montes Claros', NULL, NULL),
(25, '2018', '441644', '10/2018', 'Teste5', 'PregÃ£o Presencial', 'Montes Claros', 'SSPMG', '2018-07-19'),
(26, '2018', '441644', '10/2018', 'Teste5', 'PregÃ£o Presencial', 'Montes Claros', 'SSPMG', '2018-10-20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

DROP TABLE IF EXISTS `niveis_acessos`;
CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-02-19 00:00:00', NULL),
(2, 'Colaborador', '2016-02-19 00:00:00', NULL),
(3, 'Cliente', '2016-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `dias` longtext NOT NULL,
  `envios` int(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `dias`, `envios`, `created`, `modified`) VALUES
(11, 'Steve Jobs', 'usuario@oi.com.br', '00b7691d86d96aebd21dd9e138f90840', 1, 3, '999', 390, '2017-02-01 00:00:00', '2017-01-28 03:11:16'),
(39, 'Neto', 'netomartins2@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 2, '999', 0, '2017-02-01 00:00:00', '2017-02-01 00:00:00'),
(40, 'teste', 'teste@teste.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 2, '999', 0, '2017-02-01 00:00:00', '2017-02-01 00:00:00'),
(41, 'Joao', 'joao@casa.com', '202cb962ac59075b964b07152d234b70', 1, 2, '999', 0, '2017-02-01 00:00:00', '2017-02-01 00:00:00'),
(42, 'professor', 'fasa@fasa.com.br', 'e10adc3949ba59abbe56e057f20f883e', 1, 2, '999', 0, '2017-02-01 00:00:00', '2017-02-01 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
