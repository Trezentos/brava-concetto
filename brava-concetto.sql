-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2025 às 21:34
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `brava-concetto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_acessos`
--

CREATE TABLE `adm_acessos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_acesso` datetime NOT NULL,
  `ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `adm_acessos`
--

INSERT INTO `adm_acessos` (`id`, `id_usuario`, `data_acesso`, `ip`) VALUES
(1, 1, '2024-05-10 09:11:10', '::1'),
(2, 1, '2024-05-13 09:05:46', '::1'),
(3, 1, '2024-05-13 15:19:36', '::1'),
(4, 1, '2024-05-15 15:16:01', '::1'),
(5, 1, '2024-05-21 13:41:33', '::1'),
(6, 1, '2024-10-18 11:11:44', '::1'),
(7, 1, '2024-10-22 16:37:40', '::1'),
(8, 1, '2024-10-23 18:00:20', '::1'),
(9, 1, '2024-10-23 18:17:06', '::1'),
(10, 1, '2024-10-24 09:09:40', '::1'),
(11, 1, '2024-10-25 15:09:58', '::1'),
(12, 1, '2024-10-29 14:28:08', '::1'),
(13, 1, '2024-10-29 15:23:45', '131.161.16.192'),
(14, 1, '2024-10-30 14:55:55', '131.161.16.192'),
(15, 1, '2024-11-01 11:42:57', '131.161.16.192'),
(16, 1, '2024-11-05 14:26:13', '131.161.16.192'),
(17, 1, '2024-11-05 14:51:35', '131.161.16.192');

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_banners`
--

CREATE TABLE `adm_banners` (
  `id` int(3) UNSIGNED NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `subtitulo` varchar(60) DEFAULT NULL,
  `status` int(1) UNSIGNED NOT NULL DEFAULT 0,
  `link` varchar(255) DEFAULT NULL,
  `imagem` varchar(80) DEFAULT NULL,
  `imagem_mobile` varchar(60) DEFAULT NULL,
  `destino_cta` varchar(10) DEFAULT '_self',
  `texto_cta` varchar(50) DEFAULT NULL,
  `video` varchar(40) DEFAULT NULL,
  `ordem` varchar(3) DEFAULT NULL,
  `criado` datetime NOT NULL DEFAULT current_timestamp(),
  `atualizado` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `adm_banners`
--

INSERT INTO `adm_banners` (`id`, `titulo`, `subtitulo`, `status`, `link`, `imagem`, `imagem_mobile`, `destino_cta`, `texto_cta`, `video`, `ordem`, `criado`, `atualizado`) VALUES
(8, '<p>Movimento e equil&iacute;brio</p>', 'Em cada ambiente, sinta-se livre para compor o', 1, '#bolshoi-brasil', 'banner-8-185.webp', 'banner-mobile-8-944.webp', '_self', 'Conhecer', '', '001', '2022-10-04 15:10:46', '2024-10-25 15:16:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_cadastro`
--

CREATE TABLE `adm_cadastro` (
  `id` int(3) UNSIGNED NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `p1` varchar(150) DEFAULT NULL,
  `p2` varchar(150) DEFAULT NULL,
  `criado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_config`
--

CREATE TABLE `adm_config` (
  `id` int(1) NOT NULL,
  `nome_empresa` varchar(60) NOT NULL,
  `email_contato` varchar(200) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `celular2` varchar(20) DEFAULT NULL,
  `texto_whatsapp` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `behance` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `google_analytics` varchar(25) DEFAULT NULL,
  `smtp_host` varchar(50) NOT NULL,
  `smtp_user` varchar(50) NOT NULL,
  `smtp_pass` varchar(30) NOT NULL,
  `email_reply` varchar(50) NOT NULL,
  `smtp_port` varchar(5) NOT NULL,
  `incorporar_head` text DEFAULT NULL,
  `incorporar_body` text DEFAULT NULL,
  `instagram_token` varchar(255) DEFAULT NULL,
  `escavacao` varchar(4) DEFAULT NULL,
  `fundacao` varchar(4) DEFAULT NULL,
  `estrutura` varchar(4) DEFAULT NULL,
  `alvenaria` varchar(4) DEFAULT NULL,
  `acabamento_externo` varchar(4) DEFAULT NULL,
  `acabamento_interno` varchar(4) DEFAULT NULL,
  `total` varchar(4) NOT NULL,
  `atualizacao_obras` varchar(30) NOT NULL,
  `atualizado` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Extraindo dados da tabela `adm_config`
--

INSERT INTO `adm_config` (`id`, `nome_empresa`, `email_contato`, `telefone`, `celular`, `celular2`, `texto_whatsapp`, `facebook`, `instagram`, `twitter`, `linkedin`, `behance`, `youtube`, `google_analytics`, `smtp_host`, `smtp_user`, `smtp_pass`, `email_reply`, `smtp_port`, `incorporar_head`, `incorporar_body`, `instagram_token`, `escavacao`, `fundacao`, `estrutura`, `alvenaria`, `acabamento_externo`, `acabamento_interno`, `total`, `atualizacao_obras`, `atualizado`) VALUES
(1, 'Aram - Praia da Baleia', 'contato@angatuincorporadora.com.br', '.', '11 96414.0024', '', 'Olá! (Contato do site da Aram)', '', '', '', '', '', '', '', 'mail.quax.com.br', 'envio@quax.com.br', 'U)E07oU)YfkS', 'contato@angatuincorporadora.com.br', '587', '', '', '', '100%', '78%', '50%', '40%', '23%', '9%', '50%', '30 AGOSTO 2024', '2024-11-01 11:44:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_empreendimentos_imagens`
--

CREATE TABLE `adm_empreendimentos_imagens` (
  `id` int(11) NOT NULL,
  `id_galeria` int(11) NOT NULL DEFAULT 0,
  `arquivo` varchar(200) NOT NULL DEFAULT '',
  `legenda` varchar(200) NOT NULL DEFAULT '',
  `capa` int(1) NOT NULL DEFAULT 0,
  `ativo` int(1) NOT NULL DEFAULT 1,
  `ordem` varchar(3) NOT NULL DEFAULT '',
  `categoria` varchar(255) NOT NULL,
  `criado` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_galeria`
--

CREATE TABLE `adm_galeria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `permalink` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `criado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `adm_galeria`
--

INSERT INTO `adm_galeria` (`id`, `titulo`, `permalink`, `status`, `criado`) VALUES
(1, 'Aram - Flora - Aurora - Onda', 'aram-flora-aurora-onda', 1, '2020-10-19 18:45:22'),
(2, 'Aram - Brisa - Serena - Areia', 'aram-brisa-serena-areia', 1, '2024-10-30 17:18:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_galeria_imagens`
--

CREATE TABLE `adm_galeria_imagens` (
  `id` int(11) NOT NULL,
  `id_galeria` int(11) NOT NULL DEFAULT 0,
  `arquivo` varchar(200) NOT NULL DEFAULT '',
  `legenda` varchar(200) NOT NULL DEFAULT '',
  `capa` int(1) NOT NULL DEFAULT 0,
  `ativo` int(1) NOT NULL DEFAULT 1,
  `ordem` varchar(3) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `criado` datetime DEFAULT current_timestamp(),
  `atualizado` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `adm_galeria_imagens`
--

INSERT INTO `adm_galeria_imagens` (`id`, `id_galeria`, `arquivo`, `legenda`, `capa`, `ativo`, `ordem`, `categoria`, `criado`, `atualizado`) VALUES
(79, 1, 'aram-1-855.jpg', 'Vista Aérea', 0, 1, '', 'galeria', '2024-10-29 14:40:56', '2024-10-29 14:56:21'),
(80, 1, 'aram-1-729.jpg', 'Fachada Duirna', 0, 1, '', 'galeria', '2024-10-29 14:41:49', '2024-10-29 14:56:38'),
(81, 1, 'aram-1-888.jpg', 'Fachada Noturna', 0, 1, '', 'galeria', '2024-10-29 14:41:53', '2024-10-29 14:56:50'),
(82, 1, 'aram-1-566.jpg', 'Living', 0, 1, '', 'galeria', '2024-10-29 14:41:58', '2024-10-29 14:56:59'),
(83, 1, 'aram-1-59.jpg', 'Piscina', 0, 1, '', 'galeria', '2024-10-29 14:42:02', '2024-10-29 14:57:09'),
(84, 1, 'aram-1-588.jpg', 'Sala Íntima', 0, 1, '', 'galeria', '2024-10-29 14:42:08', '2024-10-29 14:57:49'),
(85, 1, 'aram-1-394.jpg', 'Suíte Master', 0, 1, '', 'galeria', '2024-10-29 14:42:12', '2024-10-29 14:58:02'),
(86, 1, 'aram-1-961.jpg', 'Sala de Banho', 0, 1, '', 'galeria', '2024-10-29 14:42:16', '2024-10-29 14:58:45'),
(87, 1, 'aram-1-677.jpg', 'Rooftop', 0, 1, '', 'galeria', '2024-10-29 14:42:22', '2024-10-29 14:58:17'),
(89, 2, 'aram-brisa-serena-areia-2-310.jpg', 'Fachada Diurna', 0, 1, '004', 'galeria', '2024-10-30 14:21:48', '2024-10-30 14:45:49'),
(91, 2, 'aram-brisa-serena-areia-2-126.jpg', 'Vista Aérea', 0, 1, '002', 'galeria', '2024-10-30 14:22:00', '2024-10-30 14:45:58'),
(92, 2, 'aram-brisa-serena-areia-2-368.jpg', 'Living', 0, 1, '005', 'galeria', '2024-10-30 14:22:06', '2024-10-30 14:45:49'),
(93, 2, 'aram-brisa-serena-areia-2-832.jpg', 'Living', 0, 1, '006', 'galeria', '2024-10-30 14:22:10', '2024-10-30 14:45:49'),
(95, 2, 'aram-brisa-serena-areia-2-496.jpg', 'Sala Íntima', 0, 1, '008', 'galeria', '2024-10-30 14:22:23', '2024-10-30 14:45:49'),
(96, 2, 'aram-brisa-serena-areia-2-12.jpg', 'Suíte Master', 0, 1, '009', 'galeria', '2024-10-30 14:22:28', '2024-10-30 14:45:49'),
(97, 2, 'aram-brisa-serena-areia-2-817.jpg', 'Sala de Banho', 0, 1, '010', 'galeria', '2024-10-30 14:22:35', '2024-10-30 14:45:49'),
(98, 2, 'aram-brisa-serena-areia-2-562.jpg', 'Rooftop', 0, 1, '001', 'galeria', '2024-10-30 14:44:35', '2024-10-30 14:45:58'),
(99, 2, 'aram-brisa-serena-areia-2-997.jpg', 'Fachada Noturna', 0, 1, '003', 'galeria', '2024-10-30 14:45:16', '2024-10-30 14:45:49'),
(100, 2, 'aram-brisa-serena-areia-2-46.jpg', 'Piscina', 0, 1, '007', 'galeria', '2024-10-30 14:48:10', '2024-10-30 14:48:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_paginas`
--

CREATE TABLE `adm_paginas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `permalink` varchar(100) NOT NULL,
  `arquivo` varchar(100) NOT NULL,
  `conteudo` longtext NOT NULL,
  `description` varchar(160) NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'pt',
  `autor` int(11) NOT NULL,
  `criado` datetime NOT NULL DEFAULT current_timestamp(),
  `atualizado` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `adm_paginas`
--

INSERT INTO `adm_paginas` (`id`, `titulo`, `permalink`, `arquivo`, `conteudo`, `description`, `lang`, `autor`, `criado`, `atualizado`) VALUES
(1, 'Home', 'index', 'index.php', '', 'O condomínio fechado Aram possui 6 residências à 260 metros do mar e cercado pela natureza. Proporcionando muita exclusividade.', 'pt', 1, '2014-08-08 20:49:46', '2024-10-29 15:08:04'),
(86, 'Política de Privacidade', 'politica-de-privacidade', 'politica-de-privacidade.php', '', '', 'pt', 1, '2021-03-04 09:39:00', '2023-03-07 14:55:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_usuarios`
--

CREATE TABLE `adm_usuarios` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `acesso` varchar(100) NOT NULL,
  `categoria` varchar(20) NOT NULL DEFAULT 'cliente',
  `autor` int(11) NOT NULL,
  `criado` timestamp NOT NULL DEFAULT current_timestamp(),
  `atualizado` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `adm_usuarios`
--

INSERT INTO `adm_usuarios` (`id`, `nome_completo`, `usuario`, `senha`, `email`, `acesso`, `categoria`, `autor`, `criado`, `atualizado`) VALUES
(1, 'QUAX', 'burgo', '$2y$10$Oa3ahjQc4v4uFpR8FMAQF.XLEvdcQlb8AWak6QLBhC05wS/Qsz2TS', 'quax@quax.com.br', '6-5-7-3-1-2', 'master', 0, '0000-00-00 00:00:00', '2024-11-05 14:31:12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm_acessos`
--
ALTER TABLE `adm_acessos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_USER` (`id_usuario`);

--
-- Índices para tabela `adm_banners`
--
ALTER TABLE `adm_banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `adm_cadastro`
--
ALTER TABLE `adm_cadastro`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices para tabela `adm_config`
--
ALTER TABLE `adm_config`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `adm_empreendimentos_imagens`
--
ALTER TABLE `adm_empreendimentos_imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_EMP_IMG` (`id_galeria`);

--
-- Índices para tabela `adm_galeria`
--
ALTER TABLE `adm_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `adm_galeria_imagens`
--
ALTER TABLE `adm_galeria_imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_GALERIA` (`id_galeria`);

--
-- Índices para tabela `adm_paginas`
--
ALTER TABLE `adm_paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `adm_usuarios`
--
ALTER TABLE `adm_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm_acessos`
--
ALTER TABLE `adm_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `adm_banners`
--
ALTER TABLE `adm_banners`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `adm_cadastro`
--
ALTER TABLE `adm_cadastro`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `adm_config`
--
ALTER TABLE `adm_config`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `adm_empreendimentos_imagens`
--
ALTER TABLE `adm_empreendimentos_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `adm_galeria`
--
ALTER TABLE `adm_galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `adm_galeria_imagens`
--
ALTER TABLE `adm_galeria_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de tabela `adm_paginas`
--
ALTER TABLE `adm_paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT de tabela `adm_usuarios`
--
ALTER TABLE `adm_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `adm_acessos`
--
ALTER TABLE `adm_acessos`
  ADD CONSTRAINT `FK_ID_USER` FOREIGN KEY (`id_usuario`) REFERENCES `adm_usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
