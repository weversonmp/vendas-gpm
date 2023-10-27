-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/10/2023 às 19:45
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 7.4.12

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

CREATE TABLE `tb_address` (
  `id` int(11) NOT NULL,
  `cep` int(8) NOT NULL,
  `add_street` varchar(30) NOT NULL,
  `add_number` int(11) NOT NULL,
  `add_city` varchar(30) NOT NULL,
  `add_state` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_items`
--

CREATE TABLE `tb_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `item_size` int(2) NOT NULL,
  `color` varchar(30) NOT NULL,
  `price` float(7,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_orders`
--

CREATE TABLE `tb_orders` (
  `id` int(11) NOT NULL,
  `total_price` float(7,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Data e hora da compra',
  `order_state` enum('under_analysis','canceled','paid','under_shipping','shipped') NOT NULL DEFAULT 'under_analysis',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_order_item`
--

CREATE TABLE `tb_order_item` (
  `orders_id` int(11) NOT NULL,
  `copy_item_id` int(11) NOT NULL,
  `copy_item_price` float(7,2) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_order_payment_details`
--

CREATE TABLE `tb_order_payment_details` (
  `orders_id` int(11) NOT NULL,
  `copy_payment_type` enum('debit','credit') NOT NULL,
  `copy_card_name` varchar(45) NOT NULL,
  `copy_card_number` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_payment_type`
--

CREATE TABLE `tb_payment_type` (
  `id` int(11) NOT NULL,
  `payment_type` enum('debit, credit') NOT NULL,
  `card_name` varchar(30) NOT NULL,
  `card_number` int(16) NOT NULL,
  `ccv` int(3) NOT NULL,
  `expiration_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `access_type` enum('custumer','admin') DEFAULT 'custumer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `first_name`, `last_name`, `email`, `user_password`, `access_type`) VALUES
(1, 'admin', 'weverson', 'meneses', 'teste@teste.com', '123', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_address`
--
ALTER TABLE `tb_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `tb_items`
--
ALTER TABLE `tb_items`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Índices de tabela `tb_order_item`
--
ALTER TABLE `tb_order_item`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `orders_id` (`orders_id`) USING BTREE;

--
-- Índices de tabela `tb_order_payment_details`
--
ALTER TABLE `tb_order_payment_details`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `orders_id` (`orders_id`) USING BTREE;

--
-- Índices de tabela `tb_payment_type`
--
ALTER TABLE `tb_payment_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_address`
--
ALTER TABLE `tb_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_items`
--
ALTER TABLE `tb_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_payment_type`
--
ALTER TABLE `tb_payment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_address`
--
ALTER TABLE `tb_address`
  ADD CONSTRAINT `tb_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`);

--
-- Restrições para tabelas `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD CONSTRAINT `tb_orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`);

--
-- Restrições para tabelas `tb_order_item`
--
ALTER TABLE `tb_order_item`
  ADD CONSTRAINT `orders_id_fk_1` FOREIGN KEY (`orders_id`) REFERENCES `tb_orders` (`id`);

--
-- Restrições para tabelas `tb_order_payment_details`
--
ALTER TABLE `tb_order_payment_details`
  ADD CONSTRAINT `orders_id_fk` FOREIGN KEY (`orders_id`) REFERENCES `tb_orders` (`id`);

--
-- Restrições para tabelas `tb_payment_type`
--
ALTER TABLE `tb_payment_type`
  ADD CONSTRAINT `tb_payment_type_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
