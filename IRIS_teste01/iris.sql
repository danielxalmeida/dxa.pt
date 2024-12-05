-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2024 às 15:55
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `iris`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `id_utilizador`, `data`) VALUES
(127, 1, '17:42:07 - 06/03/2024'),
(128, 2, '15:48:36 - 07/03/2024'),
(129, 1, '17:08:50 - 07/03/2024'),
(130, 1, '17:31:09 - 07/03/2024'),
(131, 1, '17:32:34 - 07/03/2024'),
(132, 1, '18:01:30 - 07/03/2024'),
(133, 2, '18:08:39 - 07/03/2024'),
(134, 1, '16:17:41 - 12/03/2024'),
(135, 2, '11:25:16 - 13/03/2024'),
(136, 2, '11:27:49 - 13/03/2024'),
(137, 2, '12:52:10 - 13/03/2024'),
(138, 2, '12:52:26 - 13/03/2024'),
(139, 2, '13:10:52 - 13/03/2024'),
(140, 2, '13:10:56 - 13/03/2024'),
(141, 2, '18:18:25 - 13/03/2024'),
(142, 2, '18:20:10 - 13/03/2024'),
(143, 2, '18:20:16 - 13/03/2024'),
(144, 1, '15:04:07 - 29/11/2024');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blogiris`
--

CREATE TABLE `blogiris` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `visivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactosiris`
--

CREATE TABLE `contactosiris` (
  `id` int(11) NOT NULL,
  `morada` varchar(1000) NOT NULL,
  `telefone` varchar(1000) NOT NULL,
  `whatsapp` varchar(1000) NOT NULL,
  `whatsapp_link` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `instagram` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactosiris`
--

INSERT INTO `contactosiris` (`id`, `morada`, `telefone`, `whatsapp`, `whatsapp_link`, `email`, `facebook`, `instagram`) VALUES
(1, 'AVEIRO', '912345678', '987654321 222', 'https://wa.me/p/9684330644971436/351912290597', 'iris@email.iris', 'https://www.facebook.com/iris.polymerclayearrings', 'https://www.instagram.com/iris_polymerclayearrings/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `envios`
--

CREATE TABLE `envios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `data` varchar(1000) NOT NULL,
  `texto` text NOT NULL,
  `ultima_edicao` varchar(1000) NOT NULL,
  `tooltip` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `envios`
--

INSERT INTO `envios` (`id`, `titulo`, `data`, `texto`, `ultima_edicao`, `tooltip`) VALUES
(1, 'Encomendas e Envios', 'Março, 2024', '<h2><strong>njsdjkgjkfldghklkldghf</strong></h2><ol><li><figure class=\"table\"><table><tbody><tr><td><ol><li>gdh</li></ol></td><td><ul><li>&nbsp;</li></ul></td><td>&nbsp;</td><td><ol><li><h2>&nbsp;</h2></li></ol></td></tr><tr><td><ol><li>dfghgfh</li></ol></td><td><ul><li>fdh</li></ul></td><td>&nbsp;</td><td><ol><li><h2>&nbsp;</h2></li></ol></td></tr><tr><td><ol><li>rdfgh</li></ol></td><td><ul><li>&nbsp;</li></ul></td><td>dfg</td><td><ol><li><h2>&nbsp;</h2></li></ol></td></tr><tr><td><ol><li>fgjhgjhgj</li></ol></td><td><ul><li>&nbsp;</li></ul></td><td>&nbsp;</td><td><ol><li><h2><strong>dfg</strong></h2></li></ol></td></tr></tbody></table></figure><p><i>sdfgfsdgh</i></p></li><li><i>sdfsrgh</i></li><li><i>htjgfj</i></li><li><i>kjl</i></li></ol><h3>dgfg</h3><h3>dfh</h3><h3>dfh</h3><h3>gfj</h3><h3>&nbsp;</h3>', '', 'Encomendas e Envios');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `activo` int(11) NOT NULL,
  `disposicao` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `ultima_edicao` varchar(500) NOT NULL,
  `tooltip` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `id_produto`, `activo`, `disposicao`, `quantidade`, `ultima_edicao`, `tooltip`) VALUES
(1, 3, 0, 0, 3, '', ''),
(2, 2, 1, 0, 3, '', ''),
(3, 8, 1, 0, 3, '', ''),
(4, 6, 1, 0, 0, '', ''),
(5, 5, 1, 0, 0, '', ''),
(6, 8, 1, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `visivel` int(11) NOT NULL,
  `lugar` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `tooltip` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `iris`
--

CREATE TABLE `iris` (
  `id` int(11) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `data` varchar(500) NOT NULL,
  `texto` text NOT NULL,
  `activo` int(11) NOT NULL,
  `ultima_edicao` varchar(500) NOT NULL,
  `tooltip` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `iris`
--

INSERT INTO `iris` (`id`, `titulo`, `data`, `texto`, `activo`, `ultima_edicao`, `tooltip`) VALUES
(6, 'A origem da IRIS', 'dezembro de 2021', '<p>Lorem ipsum dolor sit amet. Aut sunt nisi nam similique voluptatibus aut sequi assumenda sed mollitia autem aut numquam alias rem dolorum cumque. Non numquam tempore est deserunt iste sed aliquid illum aut provident veniam ad velit Quis. Ea repellat autem aut aperiam velit ut nobis magni? Ea laudantium perspiciatis et iusto soluta ex rerum autem.</p><ul><li><strong>Aut sint galisum in officia nostrum id dolorum eius ad omnis quisquam.</strong></li><li><strong>Ea cumque natus ut dolorum minima et eius quidem aut esse quia.</strong></li><li><strong>Qui officia nisi et velit neque non necessitatibus voluptatum.</strong></li></ul><p>Id molestiae consectetur sed enim nulla non nobis fuga aut aspernatur recusandae ut voluptas dolor et assumenda aspernatur qui totam dolore. Qui corporis deleniti ab Quis cumque et eaque beatae ad quaerat dolorum. Nam doloribus sunt ea dolore ipsa ut voluptates error id molestiae laboriosam. Ex enim consequatur id beatae galisum sed quaerat reprehenderit.</p><ol><li><i>Ut laboriosam obcaecati in consequuntur repudiandae est sunt accusamus est voluptatem perspiciatis.</i></li><li><i>Quo quibusdam eligendi qui deserunt animi.</i></li><li><i>Eos quae molestiae sed natus voluptatibus est nihil itaque!</i></li></ol><p>&nbsp;</p><p>&nbsp;</p><p>Et odio voluptatem in laudantium expedita ut libero odit sed mollitia repudiandae est rerum explicabo ad sint obcaecati sed alias quas. Aut repellat odio et odit sint ad eius omnis est alias facere ex molestiae dolorem ea amet modi. Non distinctio facilis eos molestiae rerum quo harum consequuntur.</p>', 1, '2- Administrador a 13:00:48 - 13/03/2024', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(1000) NOT NULL,
  `modelo` varchar(1000) NOT NULL,
  `tamanho` varchar(1000) NOT NULL,
  `cor1` varchar(1000) NOT NULL,
  `cor2` varchar(1000) NOT NULL,
  `preco` double NOT NULL,
  `link` varchar(1000) NOT NULL,
  `linkwts` varchar(1000) NOT NULL,
  `stock` int(11) NOT NULL,
  `imagem_1` varchar(1000) NOT NULL,
  `imagem_2` varchar(1000) NOT NULL,
  `imagem_3` varchar(1000) NOT NULL,
  `imagem_4` varchar(1000) NOT NULL,
  `imagem_5` varchar(1000) NOT NULL,
  `texto` text NOT NULL,
  `visualizacoes` int(11) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `modelo`, `tamanho`, `cor1`, `cor2`, `preco`, `link`, `linkwts`, `stock`, `imagem_1`, `imagem_2`, `imagem_3`, `imagem_4`, `imagem_5`, `texto`, `visualizacoes`, `activo`) VALUES
(2, 'Brinco 1 2', 'Pandora', 'pequeno', 'azul', 'laranja', 15, '', 'https://wa.me/p/6413488248767632/351912290597', 3, 'https://www.danielxalmeida.pt/iris/imagens/iris_2.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_12.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_22.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_32.jpg', '', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum optio eveniet ipsa illum distinctio provident reprehenderit aspernatur, consequuntur pariatur! Architecto, et. Eos deserunt odio quidem sint repellat tenetur eum, error omnis magni ipsum sed aperiam harum, rem consequatur libero</p>', 0, 1),
(3, 'Brinco 1 3', 'Pandora', 'grande', 'azul', 'laranja', 15, '', 'https://wa.me/p/9846379548735865/351912290597', 3, 'https://www.danielxalmeida.pt/iris/imagens/iris_3.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_13.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_23.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_33.jpg', '', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum optio eveniet ipsa illum distinctio provident reprehenderit aspernatur, consequuntur pariatur! Architecto, et. Eos deserunt odio quidem sint repellat tenetur eum, error omnis magni ipsum sed aperiam harum, rem consequatur libero</p>', 0, 1),
(4, 'Brinco 2 1', 'arodnaP', 'medio', 'azul', 'laranja', 12.5, '', 'https://wa.me/p/7541214925905532/351912290597', 3, 'https://www.danielxalmeida.pt/iris/imagens/iris_4.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_14.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_24.jpg', '', '', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum optio eveniet ipsa illum distinctio provident reprehenderit aspernatur, consequuntur pariatur! Architecto, et. Eos deserunt odio quidem sint repellat tenetur eum, error omnis magni ipsum sed aperiam harum, rem consequatur libero</p>', 0, 1),
(5, 'Brinco 2 2', 'arodnaP', 'pequeno', 'azul', 'laranja', 15, '', 'https://wa.me/p/7541214925905532/351912290597', 3, 'https://www.danielxalmeida.pt/iris/imagens/iris_5.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_15.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_25.jpg', '', '', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum optio eveniet ipsa illum distinctio provident reprehenderit aspernatur, consequuntur pariatur! Architecto, et. Eos deserunt odio quidem sint repellat tenetur eum, error omnis magni ipsum sed aperiam harum, rem consequatur libero</p>', 0, 1),
(6, 'Brinco 3 2', 'arodnaP', 'grande', 'azul', 'laranja', 15, '', 'https://wa.me/p/7541214925905532/351912290597', 3, 'https://www.danielxalmeida.pt/iris/imagens/iris_6.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_16.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_26.jpg', '', '', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum optio eveniet ipsa illum distinctio provident reprehenderit aspernatur, consequuntur pariatur! Architecto, et. Eos deserunt odio quidem sint repellat tenetur eum, error omnis magni ipsum sed aperiam harum, rem consequatur libero</p>', 0, 1),
(7, 'Brinco 3 3', 'arodnaP', 'grande222', 'azul333', 'laranja444', 15, '555', 'https://wa.me/p/7541214925905532/351912290597', 3, 'https://www.danielxalmeida.pt/iris/imagens/iris_6.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_16.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_26.jpg', '', '', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum optio eveniet ipsa illum distinctio provident reprehenderit aspernatur, consequuntur pariatur! Architecto, et. Eos deserunt odio quidem sint repellat tenetur eum, error omnis magni ipsum sed aperiam harum, rem consequatur libero</p>', 0, 1),
(8, 'Dani', 'Pandora', 'x', 'preto', 'castanho', 0, '', 'https://wa.me/p/6413488248767632/351912290597', 2, 'https://www.danielxalmeida.pt/iris/imagens/iris_9.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_11.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_26.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_16.jpg', 'https://www.danielxalmeida.pt/iris/imagens/iris_6.jpg', '<p>Muito lindos!!<br>Combinam com qualquer roupa!</p><p>Para todas as ocasiões!</p><p>Pode usar com tudo.. ou com nada ;)<br><br>Experimente já hoje!</p>', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ultimo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id`, `nome`, `apelido`, `username`, `password`, `ultimo`) VALUES
(1, 'Sebastião', 'Alves', 'sebastiao', '$2y$10$xNOgSpNhlGxIOmxzwdIlvedmct30gO5KwjycwxXkTW/Tuy37vuxpO', '15:04:07 - 29/11/2024'),
(2, 'Administrador', 'admin', 'Admin', '$2y$10$Ku.troIun2icBB9Hnhv5w.u0E4qIzx2JXgzp5UMOlqWf4uffuD29C', '18:20:16 - 13/03/2024');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blogiris`
--
ALTER TABLE `blogiris`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactosiris`
--
ALTER TABLE `contactosiris`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `iris`
--
ALTER TABLE `iris`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de tabela `blogiris`
--
ALTER TABLE `blogiris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contactosiris`
--
ALTER TABLE `contactosiris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `envios`
--
ALTER TABLE `envios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `iris`
--
ALTER TABLE `iris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
