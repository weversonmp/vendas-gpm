-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16/11/2023 às 16:55
-- Versão do servidor: 10.4.16-MariaDB
-- Versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `buyashoes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_address`
--

DROP TABLE IF EXISTS `tb_address`;
CREATE TABLE IF NOT EXISTS `tb_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cep` int(8) NOT NULL,
  `add_street` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_number` int(11) NOT NULL,
  `add_city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_items`
--

DROP TABLE IF EXISTS `tb_items`;
CREATE TABLE IF NOT EXISTS `tb_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `item_size` int(2) NOT NULL,
  `color` varchar(30) NOT NULL,
  `price` float(7,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_items`
--

INSERT INTO `tb_items` (`id`, `item_name`, `description`, `brand`, `model`, `item_size`, `color`, `price`, `stock`) VALUES
(11, 'Air Max 90', '', 'Nike', 'Classic', 41, 'Black', 199.99, 10),
(12, 'Air Jordan 1', 'O Air Jordan 1 é um tênis de basquete de alto desempenho da Nike, lançado em 1985.', 'Nike', 'Air Jordan 1', 42, 'Branco', 1299.00, 100),
(13, 'Yeezy Boost 350 V2', 'O Yeezy Boost 350 V2 é um tênis de corrida da Adidas, lançado em 2016.', 'Adidas', 'Yeezy Boost 350 V2', 39, 'Preto', 2999.00, 50),
(14, 'Nike Air Max 97', 'O Nike Air Max 97 é um tênis de corrida da Nike, lançado em 1997.', 'Nike', 'Air Max 97', 41, 'Vermelho', 999.00, 75),
(15, 'Adidas Superstar', 'O Adidas Superstar é um tênis de basquete da Adidas, lançado em 1969.', 'Adidas', 'Superstar', 38, 'Branco', 599.00, 125),
(16, 'Nike Air Force 1', 'O Nike Air Force 1 é um tênis de basquete da Nike, lançado em 1982.', 'Nike', 'Air Force 1', 40, 'Preto', 799.00, 100),
(17, 'Air Max 270', 'Tênis de corrida leve e confortável', 'Nike', 'Air Max 270', 42, 'Preto', 699.99, 10),
(18, 'Yeezy Boost 350 V2', 'Tênis casual elegante e moderno', 'Adidas', 'Yeezy Boost 350 V2', 40, 'Branco', 899.99, 5),
(19, 'Classic Leather', 'Tênis clássico de couro para o dia a dia', 'Reebok', 'Classic Leather', 41, 'Azul', 299.99, 15),
(20, 'Nike Air Max 270', 'O Nike Air Max 270 é um tênis de corrida da Nike, lançado em 2018.', 'Nike', 'Air Max 270', 43, 'Branco/Verde', 1199.00, 75),
(22, 'Converse Chuck Taylor All Star', 'O Converse Chuck Taylor All Star é um tênis casual da Converse, lançado em 1917.', 'Converse', 'Chuck Taylor All Star', 37, 'Preto/Branco', 499.00, 100),
(23, 'Vans Old Skool', 'O Vans Old Skool é um tênis casual da Vans, lançado em 1977.', 'Vans', 'Old Skool', 36, 'Preto/Branco', 399.00, 125),
(24, 'New Balance 574', 'O New Balance 574 é um tênis casual da New Balance, lançado em 1988.', 'New Balance', '574', 45, 'Azul/Vermelho', 699.00, 75),
(25, 'Puma Suede', 'O Puma Suede é um tênis casual da Puma, lançado em 1968.', 'Puma', 'Suede', 38, 'Branco/Vermelho', 599.00, 50),
(26, 'Asics Gel-Lyte III', 'O Asics Gel-Lyte III é um tênis de corrida da Asics, lançado em 1990.', 'Asics', 'Gel-Lyte III', 40, 'Vermelho/Branco', 799.00, 100),
(27, 'Brooks Ghost 14', 'O Brooks Ghost 14 é um tênis de corrida da Brooks, lançado em 2022.', 'Brooks', 'Ghost 14', 41, 'Preto/Branco', 999.00, 125),
(28, 'Saucony Endorphin Speed 2', 'O Saucony Endorphin Speed 2 é um tênis de corrida da Saucony, lançado em 2022.', 'Saucony', 'Endorphin Speed 2', 42, 'Vermelho/Branco', 1199.00, 75),
(31, 'Adidas NMD R1', 'O Adidas NMD R1 é um tênis de corrida da Adidas, lançado em 2015.', 'Adidas', 'NMD R1', 44, 'Vermelho/Branco', 899.00, 50);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_orders`
--

DROP TABLE IF EXISTS `tb_orders`;
CREATE TABLE IF NOT EXISTS `tb_orders` (
  `id` int(99) NOT NULL,
  `total_price` float(7,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Data e hora da compra',
  `order_state` enum('Em análise','Cancelado','Pago','Em separação','Enviado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Em análise',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_order_item`
--

DROP TABLE IF EXISTS `tb_order_item`;
CREATE TABLE IF NOT EXISTS `tb_order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(99) NOT NULL,
  `copy_item_id` int(11) NOT NULL,
  `copy_item_price` float(7,2) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `order_id_index` (`id`),
  KEY `order_id_fk` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_order_payment_details`
--

DROP TABLE IF EXISTS `tb_order_payment_details`;
CREATE TABLE IF NOT EXISTS `tb_order_payment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `copy_payment_type` enum('debit','credit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_card_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_card_number` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_payment_type`
--

DROP TABLE IF EXISTS `tb_payment_type`;
CREATE TABLE IF NOT EXISTS `tb_payment_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type` enum('debit, credit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` int(16) NOT NULL,
  `ccv` int(3) NOT NULL,
  `expiration_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_type` enum('custumer','admin') COLLATE utf8mb4_unicode_ci DEFAULT 'custumer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `first_name`, `last_name`, `email`, `user_password`, `access_type`) VALUES
(1, 'admin', 'weverson', 'meneses', 'teste@teste.com', '123', 'admin');

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_address`
--
ALTER TABLE `tb_address`
  ADD CONSTRAINT `tb_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`);

--
-- Restrições para tabelas `tb_order_item`
--
ALTER TABLE `tb_order_item`
  ADD CONSTRAINT `order_id_fk` FOREIGN KEY (`order_id`) REFERENCES `tb_orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_payment_type`
--
ALTER TABLE `tb_payment_type`
  ADD CONSTRAINT `tb_payment_type_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
