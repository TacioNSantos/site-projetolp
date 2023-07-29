-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/07/2023 às 21:25
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto-lp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `usuario`, `senha`) VALUES
(1, 'adm', '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_pgn-index`
--

CREATE TABLE `tbl_pgn-index` (
  `id` int(11) NOT NULL,
  `titulo_carrossel-01` varchar(100) NOT NULL,
  `titulo_carrossel-02` varchar(100) NOT NULL,
  `titulo_carrossel-03` varchar(100) NOT NULL,
  `img_carrossel-01` varchar(100) NOT NULL,
  `img_carrossel-02` varchar(100) NOT NULL,
  `img_carrossel-03` varchar(100) NOT NULL,
  `titulo_fundo_roxo` varchar(100) NOT NULL,
  `texto_fundo_roxo` mediumtext NOT NULL,
  `img_fundo_roxo` varchar(100) NOT NULL,
  `titulo_servico-01` varchar(100) NOT NULL,
  `texto_servico-01` mediumtext NOT NULL,
  `titulo_servico-02` varchar(100) NOT NULL,
  `texto_servico-02` mediumtext NOT NULL,
  `titulo_servico-03` varchar(100) NOT NULL,
  `texto_servico-03` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbl_pgn-index`
--

INSERT INTO `tbl_pgn-index` (`id`, `titulo_carrossel-01`, `titulo_carrossel-02`, `titulo_carrossel-03`, `img_carrossel-01`, `img_carrossel-02`, `img_carrossel-03`, `titulo_fundo_roxo`, `texto_fundo_roxo`, `img_fundo_roxo`, `titulo_servico-01`, `texto_servico-01`, `titulo_servico-02`, `texto_servico-02`, `titulo_servico-03`, `texto_servico-03`) VALUES
(1, 'VITOR ALTEROU AQUI KKKKKKKKKKK', 'Potencialize sua Empresa com Soluções de TI sob Medida', 'Potencialize sua Empresa com Soluções de TI sob Medida', 'imagem-carrossel.png', 'imagem-carrossel.png', 'imagem-carrossel.png', 'Mais Sobre Quem Somos', 'A HOWSEC é uma empresa especializada em fornecer soluções avançadas em Tecnologia da Informação (TI) para atender às necessidades do mercado empresarial. Com uma equipe altamente qualificada e experiente, a HOWSEC se destaca no cenário tecnológico, oferecendo serviços personalizados e inovadores para clientes de diversos segmentos.', 'fundo-zaul.jpg', 'Desenvolvimento', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impress', 'Infraestrutura', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impress', 'Cloud Services', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impress');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_pgn-pagina-01`
--

CREATE TABLE `tbl_pgn-pagina-01` (
  `id_servico` int(11) NOT NULL,
  `titulo_servico` varchar(25) NOT NULL,
  `descricao_servico` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbl_pgn-pagina-01`
--

INSERT INTO `tbl_pgn-pagina-01` (`id_servico`, `titulo_servico`, `descricao_servico`) VALUES
(1, 'Microsoft Office 365', 'Eleve a produtividade com o Microsoft Office 365.'),
(2, 'Cybersecurity', 'Cuide da segurança do teu negócio.'),
(3, 'Consultoria em T.I', 'Desbrave o potencial da sua empresa com nossa Consultoria em T.I.'),
(4, 'Desenvolvimento', 'Transforme ideias em realidade através do Desenvolvimento de Software.'),
(5, 'UX/UI Desing', 'Encante seus clientes com o poder do UX/UI Design.'),
(6, 'Automação', 'Otimize processos repetitivos com a automação inteligente.'),
(7, 'Redes de Computadores', 'Conecte e expanda seus horizontes com redes de computadores.'),
(8, 'Cloud Services', 'Modernize, escale e crie. Transforme seu negócio com as soluções em nuvem.'),
(9, 'Infraestrutura', 'Construa bases sólidas para o futuro com a Infraestrutura certa.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices de tabela `tbl_pgn-index`
--
ALTER TABLE `tbl_pgn-index`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_pgn-pagina-01`
--
ALTER TABLE `tbl_pgn-pagina-01`
  ADD PRIMARY KEY (`id_servico`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_pgn-index`
--
ALTER TABLE `tbl_pgn-index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_pgn-pagina-01`
--
ALTER TABLE `tbl_pgn-pagina-01`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
