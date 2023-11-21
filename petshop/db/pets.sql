-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/11/2023 às 02:32
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
-- Banco de dados: `pets`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(25) NOT NULL,
  `nome` text NOT NULL,
  `preco` text NOT NULL,
  `descricao` text NOT NULL,
  `url` text NOT NULL,
  `imagem` text NOT NULL,
  `grupo` text NOT NULL,
  `subcategoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `url`, `imagem`, `grupo`, `subcategoria`) VALUES
(1, 'Ração para cachorro', '$15.99', 'Um produto muito bom', 'foodcachorro.html', 'dogfood.jpg', 'Cachorros', 'Comidas'),
(2, 'Osso para Cachorro', '$30.50', 'Osso para cachorro ', 'produto.html', 'dogfoodbone.jpg', 'Cachorros', 'Comidas'),
(3, 'Ração Doge Premium filhote', '$400,00', 'Uma ração boa pra cachorros filhotes', '', 'dogfood.jpg', 'Cachorros', 'Comidas'),
(4, 'Ração de Pássaro', '5,99$', 'Alpiste, semente de girassol, semente de mamão e verdurinhas', '', 'sementes.jpg', 'Pássaros', 'Comidas'),
(5, 'Brinquedo para pássaro', '4,99$', '-Material: plástico. </br> -Tipo de brinquedo: escada.', '', 'birdtoy.jpg', 'Pássaros', 'Acessórios'),
(6, 'Casa dos Pássaros Branca', '50,99$', 'Casinha para pássaros branca </br> Tamanho: Médio - cabem até 3 passárinhos', '', 'birdboxwood.jpg', 'Pássaros', 'Acessórios'),
(7, 'Saco para Gato', '29,99$', ' Leve seu gato com conforto, segurança e comodidade', '', 'catbag.jpg', 'Gatos', 'Acessórios'),
(8, 'Bola de brinquedo', '8,99$', 'Bolinha de plástico que faz barulho ao rodar', '', 'cattoy.jpg', 'Gatos', 'Acessórios'),
(9, 'Camisa de gato', '14,99$', 'Uma camisa para proteger seu gato do sol', '', 'catclothes.jpg', 'Gatos', 'Roupas'),
(10, 'Comida de hamster', '$12.99', 'Comida saudável para hamisters: sementes e verduras <br/> Peso: 200 gramas', '', 'foodham.jpg', 'Hamister', 'Comidas'),
(11, 'Brinquedo para hamster', '14,99$', 'Túnel para seu hamster brincar', '', 'brinquedoham.jpg', 'Hamister', 'Acessórios'),
(12, 'Casa para hamster', '29,99$', '- Casa de madeira tamanho grande <br/> - Cabem até 5 hamster', '', 'casaham.jpg', 'Hamister', 'Acessórios'),
(13, 'Roupas de banana para Cachorros', '19,99$', 'Roupinha engraçada para cachorros seu pet vai adorar!', 'asdad', 'dogclothes.jpg', 'cachorro', 'Roupas'),
(14, 'Máscara para Cachorros', '4,99$', 'Máscara para Cachorros deixe seu doguinho protegido de doenças', '', 'dogmask.jpg', 'Cachorros', 'Roupas'),
(15, 'Frisbee de brinquedo', '21,99$', 'Frisbee de brinquedo feito de plástico - cor vermelha', '', 'dogtoyfris.jpg', 'Cachorros', 'Acessórios'),
(16, 'Coleira Médica para Cachorros', '14,99$', 'Coleira Médica para Cachorros feita de plástico, garantimos que seu cachorro ficara confortavel', '', 'dogmed.jpg', 'Cachorros', 'Remédios'),
(17, 'Mascara médica para Cachorros', '4,99$', 'Mascara para Cachorros feita para evitar problemas respiratórios', '', 'dogmask.jpg', 'Cachorros', 'Remédios');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
