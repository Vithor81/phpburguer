-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2023 às 19:48
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `phpburguer`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'hamburguer'),
(2, 'bebida'),
(3, 'combo'),
(4, 'promocao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_acesso`
--

CREATE TABLE `tab_acesso` (
  `id` int(11) NOT NULL,
  `id_acesso` int(11) NOT NULL,
  `adm` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tab_acesso`
--

INSERT INTO `tab_acesso` (`id`, `id_acesso`, `adm`) VALUES
(0, 1, 0),
(2, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_login`
--

CREATE TABLE `tab_login` (
  `id` int(11) NOT NULL,
  `nome_user` varchar(80) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha_user` varchar(240) NOT NULL,
  `telefone` bigint(14) DEFAULT NULL,
  `cpf` varchar(13) NOT NULL,
  `id_acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_pedido`
--

CREATE TABLE `tab_pedido` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `VLTotal` decimal(10,2) NOT NULL,
  `produto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_produtos`
--

CREATE TABLE `tab_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `descriçao` text NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tab_produtos`
--

INSERT INTO `tab_produtos` (`id`, `nome`, `valor`, `descriçao`, `id_categoria`) VALUES
(1, 'X-PHP', 25, 'Pao, Hamburguer, Pao', 1),
(2, 'X-html', 23, 'Pao, hamburguer, cebola, queijo', 1),
(3, 'php-cola', 6, 'Refrigerante Caseiro Sabor Cola 350ml', 2),
(4, 'Combo Wandinho', 50, 'X-PHP, X-HTML, Batata-C#ips, 2 php-cola', 3),
(5, 'Combo LALA', 50, 'X-Sql, X-Adobe, onionScript, XamppWheppes, Wamppepsi', 3),
(6, 'X,Sql', 20, 'Pao, Hamburguer, Bacon, Picles', 1),
(7, 'XamppWheppes', 6, 'Refrigerante Caseiro Sabor Limao 350ml', 2),
(8, 'Wamppepsi', 6, 'Refrigerante Caseiro com um leve sabor de cola e um toque de caramelo', 2),
(9, 'CodeMaster Burguer', 18, 'Pao, Hamburguer, queijo derretido, molho secreto de algoritmo', 4),
(10, 'VeggieScript', 25, 'queijo vegano à base de proteína de ervilha, um novo molho de sanduíche vegano, pão de gergelim vegano, mostarda, ketchup, cebola fresca, picles, alface e tomate', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tab_acesso`
--
ALTER TABLE `tab_acesso`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tab_login`
--
ALTER TABLE `tab_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_acesso` (`id_acesso`);

--
-- Índices de tabela `tab_pedido`
--
ALTER TABLE `tab_pedido`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tab_produtos`
--
ALTER TABLE `tab_produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tab_acesso`
--
ALTER TABLE `tab_acesso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tab_login`
--
ALTER TABLE `tab_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tab_pedido`
--
ALTER TABLE `tab_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tab_produtos`
--
ALTER TABLE `tab_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tab_login`
--
ALTER TABLE `tab_login`
  ADD CONSTRAINT `fk_acesso` FOREIGN KEY (`id_acesso`) REFERENCES `tab_acesso` (`id`);

--
-- Restrições para tabelas `tab_produtos`
--
ALTER TABLE `tab_produtos`
  ADD CONSTRAINT `tab_produtos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
