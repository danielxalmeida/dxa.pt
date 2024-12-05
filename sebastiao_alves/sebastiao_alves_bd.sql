-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2024 às 15:25
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
-- Banco de dados: `sebastiao_alves_bd`
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
(1, 2, '10:14:45 - 16/12/2023'),
(120, 2, '16:33:19 - 19/12/2023'),
(121, 1, '17:46:02 - 19/12/2023'),
(122, 2, '17:46:09 - 19/12/2023'),
(123, 1, '17:46:13 - 19/12/2023'),
(124, 1, '18:34:48 - 19/12/2023'),
(125, 1, '14:56:34 - 20/12/2023'),
(126, 2, '11:24:03 - 27/12/2023'),
(127, 1, '15:29:12 - 29/11/2024'),
(128, 1, '15:33:00 - 29/11/2024'),
(129, 2, '12:05:26 - 05/12/2024');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL,
  `ultima_edicao` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `imagem`, `texto`, `ultima_edicao`) VALUES
(1, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/conteudo.jpg', '<p>Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido, e é professor no Instituto Superior Técnico.&nbsp;</p><p><br>Até aos 45 anos, escreveu exclusivamente poesia, mas começou a sentir que se repetia e decidiu mais uma vez tentar escrever ficção, com um afinco que nunca pusera em anteriores tentativas. E finalmente descobriu que era capaz de escrever diálogos e congeminar enredos.</p><p><br>Publicou então sucessivamente um livro de contos, “O caracol estrábico” (2011), e os romances “O colecionador de amnésias” (2014), “O velho que pensava que fugia” (2017) e o romance histórico “Senhora do amor e da guerra” (2020) e o romance \"O homem certo é difícil de encontrar\"&nbsp;</p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure autem dolorum porro. Voluptatem quasi expedita doloribus debitis facere sit, atque maiores, voluptatibus animi quam vel eius inventore. Totam vitae nemo quos quas. Nam qui assumenda accusamus perferendis maxime deserunt aliquid nobis commodi, quae quia consequuntur pariatur ex, tempore deleniti suscipit voluptates delectus animi quibusdam corrupti. Nostrum saepe assumenda cum obcaecati fugiat tempora quo totam exercitationem autem? Autem cum eum commodi perferendis molestiae totam repudiandae itaque harum cumque a doloremque vero illo, excepturi reprehenderit accusamus explicabo atque molestias nemo sapiente provident aspernatur numquam. Adipisci, nam eos. Suscipit blanditiis maiores recusandae? Deserunt.&nbsp;</p>', '2- Administrador a 16:38:23 - 19/12/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `imagem_desktop` varchar(1000) NOT NULL,
  `imagem_mobile` varchar(1000) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `subtitulo` text NOT NULL,
  `observacao` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `activo` int(11) NOT NULL,
  `ultima_edicao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `imagem_desktop`, `imagem_mobile`, `titulo`, `subtitulo`, `observacao`, `link`, `activo`, `ultima_edicao`) VALUES
(1, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/cabecalho1.jpg', 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/cabecalho1mobile.jpg', 'SENHORA DO AMOR E DA GUERRA', '<p>Séculos antes do famoso Gilgamesh, uma bela mulher aparece a comandar os destinos da maior cidade do mundo.Sete extraordinárias plaquetas de barro cozido sugerem a sua história: a inteligência, a coragem, o dom de seduzir, que a conduzem a</p>', 'Novidade', 'https://www.danielxalmeida.pt/sebastiao_alves/livros.php?livro=1', 1, '2- Administrador a 16:33:29 - 19/12/2023'),
(2, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/cabecalho2.jpg', 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/cabecalho2mobile.jpg', 'O CARACOL ESTRÁBICO', '<p>12 PERSONAGENS. 12 HISTÓRIAS DE DESFECHO INSÓLITO: * Xana desistiu por fim de repelir as atenções de um celibatário de meia-idade que lhe apareceu na loja. Este não imagina a surpresa que o aguarda. * Rodrigo chega a&nbsp;</p>', '', 'https://www.danielxalmeida.pt/sebastiao_alves/livros.php?livro=2', 1, '2- Administrador a 16:33:46 - 19/12/2023'),
(3, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/cabecalho3.jpg', 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/cabecalho3mobile.jpg', 'O COLECCIONADOR DE AMNÉSIAS', '<p>Um lapso de memória, um acidente na fábrica … O Engº Zeferino não tem dúvidas: só lhe resta demitir-se. Até porque, tem reparado, lapsos destes tendem a ocorrer-lhe. Espaçados, é certo, mas in...</p>', '', 'https://www.danielxalmeida.pt/sebastiao_alves/livros.php?livro=3', 1, '2- Administrador a 16:33:49 - 19/12/2023'),
(4, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/cabecalho4.jpg', 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/cabecalho4mobile.jpg', 'O VELHO QUE PENSAVA QUE FUGIA', '<p>Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos? De que foge? Que procura? Quem o persegue?Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros?Porque ...</p>', '', 'https://www.danielxalmeida.pt/sebastiao_alves/livros.php?livro=4', 1, '2- Administrador a 16:33:51 - 19/12/2023'),
(5, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/Imagem%20WhatsApp%202023-11-25%20%C3%A0s%2019.36.24_bf343ded.jpg', 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/Captura%20de%20ecr%C3%A3%202023-12-14%20160200.png', 'TURMA 6', '', '', 'www.google.pt', 0, '2- Administrador a 16:34:08 - 19/12/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `morada` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `horario` varchar(150) NOT NULL,
  `ultima_edicao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `morada`, `email`, `horario`, `ultima_edicao`) VALUES
(1, '+351 123 456 321', 'Sebastião Alves, Nº1, lote 3456, Avesbastião, 1000-999, Lisboa, Portugal', 'alvessebastiao@email.com', 'De Segunda a Sexta, das 00h00 às 24h00', '2- Administrador a 17:43:23 - 19/12/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `id_livros` int(11) NOT NULL,
  `observacao` varchar(1000) NOT NULL,
  `activo` int(11) NOT NULL,
  `ultima_edicao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `id_livros`, `observacao`, `activo`, `ultima_edicao`) VALUES
(1, 1, 'Novidade', 1, '1- Sebastião a 18:53:32 - 19/12/2023'),
(2, 4, 'Mais Vendido', 1, ''),
(3, 3, 'Em Promoção', 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `textobemvindo` longtext NOT NULL,
  `link` varchar(1000) NOT NULL,
  `texto_livros` longtext NOT NULL,
  `ultima_edicao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `imagem`, `textobemvindo`, `link`, `texto_livros`, `ultima_edicao`) VALUES
(1, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/FOTO-editada.jpg', '<p>O autor de \"Senhora do Amor e da Guerra\"&nbsp;&nbsp;nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido e é professor no Instituto Superior Técnico.&nbsp;<br>Até aos 45 anos, escreveu exclusivamente poesia, mas começou a sentir que se repetia e decidiu mais uma vez tentar escrever ficção, com um afinco que nunca pusera em anteriores tentativas.&nbsp;E&nbsp;descobriu que era capaz de imaginar personagens, escrever diálogos e congeminar enredos.<br>Publicou então sucessivamente “O caracol estrábico” (contos, 2011), “O colecionador de amnésias” (romance, 2014), “O velho que pensava que fugia” (romance, 2017), “Senhora do amor e da guerra” (romance histórico, 2020), \"O homem certo é difícil de encontrar\"&nbsp;(romance, 2021) e “Contos perversos” (contos, 2023).</p>', 'https://www.danielxalmeida.pt/sebastiao_alves/autor.php', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure autem dolorum porro. Voluptatem quasi expedita doloribus debitis facere sit, atque maiores, voluptatibus animi quam vel eius inventore. Totam vitae nemo quos quas. Nam qui assumenda accusamus perferendis maxime deserunt aliquid nobis commodi, quae quia consequuntur pariatur ex, tempore deleniti suscipit voluptates delectus animi quibusdam corrupti. Nostrum saepe assumenda cum obcaecati fugiat tempora quo totam exercitationem autem? Autem cum eum commodi perferendis molestiae totam repudiandae itaque harum cumque a doloremque vero illo, excepturi reprehenderit accusamus explicabo atque molestias nemo sapiente provident aspernatur numquam. Adipisci, nam eos. Suscipit blanditiis maiores recusandae? Deserunt.&nbsp;<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, blanditiis incidunt reprehenderit nam officia labore, nesciunt sequi optio, iusto praesentium culpa inventore? Quisquam necessitatibus, pariatur repudiandae iure explicabo cupiditate, minus nam architecto quibusdam illum eveniet deleniti tenetur? Quasi cupiditate corporis exercitationem voluptatibus qui, temporibus odio saepe consequuntur non magnam. Incidunt odit blanditiis explicabo libero consequatur veritatis esse rem quidem tempore labore illo sed minus, fugit ipsam quod praesentium nulla non facilis, neque quis veniam iste?</p>', '2- Administrador a 16:36:41 - 19/12/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL,
  `data` varchar(1000) NOT NULL,
  `activo` int(11) NOT NULL,
  `ultima_edicao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `imagem`, `titulo`, `texto`, `data`, `activo`, `ultima_edicao`) VALUES
(1, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/Captura%20de%20ecr%C3%A3%202023-12-14%20160200.png', 'Almoço - TURMA 6 - Codemaster', '<p>“Jantar” especial, que junto 15 a 20 aspirantes a desenvolvedores WEB.&nbsp;<br>especial pois foi a primeira vez que nos encontramos pessoalmente.&nbsp;<br>Muitos contestaram o timming do almoço, pois deveria ter sido realizado praticamente no inicio do curso e não no final.&nbsp;<br>No entanto, quem foiu gostou e voltaria a repetir.&nbsp;</p><p>Agradeço a todos por estes meses de aprendizagem e espero, um dia, ver todos no ramo da programação!&nbsp;</p><p>&nbsp;</p><p>Abraço ,</p><p>Daniel Almeida</p>', 'Publicado a 25/11/2023', 1, '2- Administrador a 17:12:25 - 19/12/2023'),
(2, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/Imagem%20WhatsApp%202023-11-25%20%C3%A0s%2019.36.24_bf343ded.jpg', 'TURMA 6 - CODEMASTER', '<p>Aqui fica o último registo desta turma!&nbsp;</p>', 'Publicado a 25/11/2023', 1, '2- Administrador a 17:13:36 - 19/12/2023'),
(3, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/2023_03_22_t6.png', 'TURMA 6 - CODEMASTER', '<p>O início!&nbsp;</p>', 'Publicado a 22/03/2023', 1, '2- Administrador a 17:17:57 - 19/12/2023'),
(4, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/conteudo-imprensa1.jpg', 'Lançamento | Senhora do amor e da guerra', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum optio eveniet ipsa illum distinctio provident reprehenderit aspernatur, consequuntur pariatur! Architecto, et. Eos deserunt odio quidem sint repellat tenetur eum, error omnis magni ipsum sed aperiam harum, rem consequatur libero</p>', '29/11/2023', 0, '2- Administrador a 17:18:15 - 19/12/2023'),
(5, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/conteudo-imprensa2.jpg', 'Lançamento | O velho que pensava que fugia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum optio eveniet ipsa illum distinctio provident reprehenderit aspernatur, consequuntur pariatur! Architecto, et. Eos deserunt odio quidem sint repellat tenetur eum, error omnis magni ipsum sed aperiam harum, rem consequatur libero sunt, odit velit maiores quod aliquid veritatis? Iure, suscipit recusandae fuga eum reiciendis facere ut possimus at a totam ea ex magnam saepe laudantium incidunt doloremque vel nobis alias quas magni nisi, molestias placeat. Deleniti voluptatum numquam libero impedit sapiente provident laborum aliquam, ut, aspernatur unde ipsa mollitia enim eveniet minima quisquam eius consequuntur, ea nam? Blanditiis quas dignissimos assumenda consequatur maiores adipisci atque debitis ex praesentium ducimus excepturi non veritatis reiciendis totam laborum nobis quaerat illo iste at deserunt officia, ipsum cupiditate. Asperiores architecto iusto quidem possimus, eum sed voluptate autem beatae non quod repellendus harum ullam odio iure tempora nihil, deleniti dignissimos tempore ratione veniam aperiam molestias nam! Nesciunt non perspiciatis accusantium optio consequuntur illo maiores facilis architecto? Omnis voluptate iusto, explicabo labore deleniti porro quod commodi inventore assumenda maiores libero repellendus quibusdam, accusamus eveniet, odio aliquid exercitationem? Optio, laborum aperiam. Voluptates amet alias blanditiis laboriosam quam odit exercitationem magni unde veniam! Culpa perferendis molestias illum provident sed voluptatum!</p>', 'Publicado a 30/11/2023', 1, ''),
(6, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/conteudo-imprensa1.jpg', 'Lançamento | Senhora do amor e da guerra', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure autem dolorum porro. Voluptatem quasi expedita doloribus debitis facere sit, atque maiores, voluptatibus animi quam vel eius inventore. Totam vitae nemo quos quas. Nam qui assumenda accusamus perferendis maxime deserunt aliquid nobis commodi, quae quia consequuntur pariatur ex, tempore deleniti suscipit voluptates delectus animi quibusdam corrupti. Nostrum saepe assumenda cum obcaecati fugiat tempora quo totam exercitationem autem? Autem cum eum commodi perferendis molestiae totam repudiandae itaque harum cumque a doloremque vero illo, excepturi reprehenderit accusamus explicabo atque molestias nemo sapiente provident aspernatur numquam. Adipisci, nam eos. Suscipit blanditiis maiores recusandae? Deserunt.&nbsp;</p>', 'Publicado a 29/11/2023', 1, '2- Administrador a 17:18:45 - 19/12/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL,
  `detalhes` varchar(1000) NOT NULL,
  `activo` int(11) NOT NULL,
  `ultima_edicao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `imagem`, `titulo`, `texto`, `detalhes`, `activo`, `ultima_edicao`) VALUES
(1, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/livro-conteudo.jpg', 'SENHORA DO AMOR E DA GUERRA', '<p>Uruk, Mesopotâmia, 3000 a.C.</p><p>Séculos antes do famoso Gilgamesh, uma bela mulher aparece a comandar os destinos da maior cidade do mundo.<br>Sete extraordinárias plaquetas de barro cozido sugerem a sua história: a inteligência, a coragem, o dom de seduzir, que a conduzem ao poder vencendo todas as adversidades; a luta contra a corrupção dos sacerdotes de Inanna; a vitória sobre os invasores amorritas; e finalmente o dia em que embarca para o reino das trevas, vitimada pela pestilência, após inundações que cobriram a terra como após um dilúvio bíblico…</p><p><br>As plaquetas chegam-nos assinadas por Zamug, o Coxo, que abandonou a cidade maldita levando consigo os ensinamentos de Nisaba, ou seja, o segredo da escrita.</p><p><strong>LER&nbsp;EXCERTO&nbsp;NO BROWSER (PDF):</strong>&nbsp;<a href=\"https://sebastiaoalves.com/public/uploads/livros/pdf/1-senhora%20do%20amor%20e%20da%20guerra.pdf\">LER EXCERTO</a></p><p>&nbsp;</p><p><strong>FAZER DOWNLOAD DO EXCERTO (EBOOK ):</strong>&nbsp;<a href=\"https://sebastiaoalves.com/public/uploads/livros/epub/senhora%20do%20amor%20e%20da%20guerra%20(1).epub\">DOWNLOAD</a></p><p>&nbsp;</p>', '<p><strong>Edição:</strong>&nbsp;Junho de 2020</p><p><strong>Editora:</strong>&nbsp;Cultura Editora</p><p><strong>Classificação Temática:</strong>&nbsp;Romance</p><p><strong>Dimensões:</strong>&nbsp;150 x 228 x 14 mm</p><p><strong>Encadernação:</strong>&nbsp;Capa mole Páginas:&nbsp;240</p><p>&nbsp;</p><p><strong>Onde Comprar&nbsp;em Papel</strong>:</p><p>Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc</p><p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Cultura Editora, Bertrand, etc</p><p>&nbsp;</p><p><strong>Onde comprar o E-BOOK:&nbsp;</strong></p><p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Cultura Editora, Bertrand, etc</p>', 1, '2- Administrador a 11:24:33 - 27/12/2023'),
(2, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/livro-conteudo3.jpg', 'O caracol estrábico', '<p>12 PERSONAGENS. 12 HISTÓRIAS DE DESFECHO INSÓLITO:</p><p>* Xana desistiu por fim de repelir as atenções de um celibatário de meia-idade que lhe apareceu na loja. Este não imagina a surpresa que o aguarda.</p><p><br>* Rodrigo chega a casa angustiado, sabendo que as filhas ficaram sozinhas com a mãe…</p><p><br>* Joaquim acorda e descobre que está cego. A sua reacção não é a que seria de esperar.</p><p><br>* Emigrado em Inglaterra, naturalizado inglês e pouco orgulhoso das suas origens, António tem que deslocar-se à terra onde, certo dia por engano, a cegonha o depositou.</p><p><br>* O velho professor tenta assegurar-se de que está vivo.</p><p><br>* Um pai extraviado telefona à filha dias depois de esta receber a herança.</p><p>&nbsp;</p><p><br>* Atormentado pelo reumatismo, há dois anos que o velho caçador não pega numa espingarda. Mas no dia do seu nonagésimo aniversário…</p><p><br>* Vendo a bandeira a meia haste, o presidente do instituto pergunta quem morreu…</p><p><br>* Uma esforçada pintora tenta gerir a relação com a sua talentosa mãe.</p><p><br>* O que poderá impedir um sem-abrigo de atingir a glória?</p><p><br>* Num lar de terceira idade, a amizade entre um surdo e um mudo é perturbada pela chegada de uma enigmática mulher.</p><p><br>* Um jovem cientista tem uma inspiração que pode revolucionar a Física Teórica. Infelizmente, como a História não se cansa de demonstrar, os verdadeiros génios não são apenas incompreendidos. São uma raça a abater</p><p><strong>LER&nbsp;EXCERTO NO BROWSER (PDF):&nbsp;</strong><a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/pdf/o%20caracol%20estrabico.pdf\">LER EXCERTO</a></p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p><strong>FAZER DOWNLOAD DO EXCERTO (EBOOK):</strong>&nbsp;<a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/epub/o%20caracol%20estrabico.epub\">DOWNLOAD</a></p><p>&nbsp;</p>', '<p><strong>Editora:</strong>&nbsp;Chiado&nbsp;Editora&nbsp;</p><p><strong>Classificação Temática:</strong>&nbsp;Contos</p><p><strong>Dimensões:</strong>&nbsp;143 x 220 x 14 mm</p><p><strong>Encadernação:</strong>&nbsp;Capa mole</p><p><strong>Páginas:</strong>&nbsp;159</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>Onde Comprar&nbsp;em Papel</strong>:</p><p>Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc</p><p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon,&nbsp;Chiado Editora, Bertrand, etc</p><p>&nbsp;</p><p><strong>Onde comprar o E-BOOK:&nbsp;</strong></p><p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc</p>', 1, '2- Administrador a 17:34:18 - 19/12/2023'),
(3, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/livro-conteudo2.jpg', 'O coleccionador de amenésias', '<p>Um lapso de memória, um acidente na fábrica… O Engº Zeferino não tem dúvidas: só lhe resta demitir-se. Até porque, tem reparado, lapsos destes tendem a ocorrer-lhe. Espaçados, é certo, mas inevitáveis como o pingar de uma torneira avariada… Decide pois reformar-se e realizar o seu sonho de sempre: escrever um romance.</p><p><br>Mas a Ideia não vem e a reforma transforma-se num deserto. Horas, semanas, meses, iguais como grãos de areia… Até ao dia mágico em que, numa tabacaria em Pedrouços, repara num livrinho de absurdos com um título extraordinário: Memórias de um amnésico. E embora sinta que o título lhe foi roubado, ao mesmo tempo já sabe o que vai escrever.</p><p><br>Agora trabalha com método. De manhã escreve o passado, aquilo que lhe aconteceu desde o acidente na fábrica, com que se iniciou aquilo a que chama o resto da sua vida. À noite inventa o futuro, pois sabe que não pode dar-se ao luxo de esperar por ele.</p><p><br><br>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><br><i>Como filha e cuidadora de uma doente de Alzheimer, revivi e revi-me, emocionada, em muitas das situações aqui narradas, nestes momentos de ternura, nestes momentos de humor, nestes momentos de tristeza e solidão que fazem o percurso de um homem, desde os tempos em que, embora já atingido pela doença, ainda tinha autonomia... Eis uma forma diferente - e comovente - de falar sobre um doente de Alzheimer.</i>&nbsp;<br><strong>Manuela Morais, Associação Alzheimer Portugal</strong></p><p><br><strong>LER&nbsp;EXCERTO NO BROWSER (PDF):</strong>&nbsp;<a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/pdf/o%20coleccionador%20de%20amnesias.pdf\">LER EXCERTO</a></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p><strong>FAZER DOWNLOAD DO EXCERTO (EBOOK):</strong>&nbsp;<a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/epub/o%20coleccionador%20de%20amnesias.epub\">DOWNLOAD</a></p><p>&nbsp;</p>', '<p><strong>Editora:</strong>&nbsp;Chiado&nbsp;Editora</p><p><strong>Classificação Temática:</strong>&nbsp;Romance</p><p><strong>Dimensões:</strong>&nbsp;141 x 217 x 16 mm</p><p><strong>Encadernação:</strong>&nbsp;Capa mole</p><p><strong>Páginas:</strong>&nbsp;206</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>Onde Comprar&nbsp;em Papel</strong>:</p><p>Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc</p><p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon,&nbsp;Chiado Editora, Bertrand, etc</p><p>&nbsp;</p><p><strong>Onde comprar o E-BOOK:&nbsp;</strong></p><p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc</p>', 1, '2- Administrador a 17:35:02 - 19/12/2023'),
(4, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/imagens/JPG/livro-conteudo4.jpg', 'O velho que pensava que fugia', '<p>Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos?&nbsp;<br>De que foge? Que procura? Quem o persegue?<br>Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros?<br>Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade Média?<br>E que dilema o vem finalmente surpreender, quando pensava ter encontrado a paz e mesmo reencontrado amor?</p><p><strong>LER&nbsp;EXCERTO NO BROWSER (PDF):</strong>&nbsp;<a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/pdf/o%20velho%20que%20pensava%20que%20fugia.pdf\">LER EXCERTO</a></p><p>&nbsp;</p><p><strong>FAZER DOWNLOAD DO EXCERTO (EBOOK):</strong>&nbsp;<a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/epub/o%20velho%20que%20pensava%20que%20fugia.epub\">DOWNLOAD</a></p>', '<p><strong>Editora:</strong>&nbsp;Chiado&nbsp;Editora<br><strong>Classificação Temática:</strong>&nbsp;Romance<br><strong>Dimensões:</strong>&nbsp;139 x 218 x 13 mm<br><strong>Encadernação:</strong>&nbsp;Capa mole<br><strong>Páginas:</strong>&nbsp;168</p><p>&nbsp;</p><p><strong>Onde Comprar&nbsp;em Papel</strong>:</p><p>Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc</p><p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon,&nbsp;Chiado Editora, Bertrand, etc</p><p>&nbsp;</p><p><strong>Onde comprar o E-BOOK:&nbsp;</strong></p><p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc</p>', 1, '2- Administrador a 17:35:20 - 19/12/2023'),
(17, 'https://www.danielxalmeida.pt/sebastiao_alves/uploads/carregamentos/Captura%20de%20ecr%C3%A3%202023-12-14%20160200.png', 'TURMA 6 - CODEMASTER', '<p>O Final do Curso!<br><br>Imagens e mais imagens, até o<a href=\"https://picsum.photos/ \"> Lorem Picsum</a> usamos, mas no final, ninguém esquece o SpongeBob!&nbsp;</p>', '<p>Disponível gratuitamente em toda a www!&nbsp;</p><p>&nbsp;</p>', 0, '1- Sebastião a 18:53:13 - 19/12/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes`
--

CREATE TABLE `redes` (
  `id` int(11) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `ultima_edicao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `redes`
--

INSERT INTO `redes` (`id`, `facebook`, `instagram`, `linkedin`, `ultima_edicao`) VALUES
(1, 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', '2- Administrador a 17:43:34 - 19/12/2023');

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
(1, 'Sebastião', 'Alves', 'sebastiao', '$2y$10$xNOgSpNhlGxIOmxzwdIlvedmct30gO5KwjycwxXkTW/Tuy37vuxpO', '15:33:00 - 29/11/2024'),
(2, 'Administrador', 'admin', 'Admin', '$2y$10$xAWoa5Gv4g/y4FzrLS.pZOch.EMCI5vtkhGA/AK8RVD1ljFayzm6G', '12:05:26 - 05/12/2024');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `redes`
--
ALTER TABLE `redes`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
