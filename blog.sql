-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Fev-2020 às 10:06
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cards`
--

INSERT INTO `cards` (`id`, `titulo`, `subtitulo`) VALUES
(1, 'hoooooooo', 'obdwc bd9fvh ebi9f h1kbkjb'),
(2, 'pnd iqshf hfev poqj p', 'hdf 2'),
(3, 'ih fpidwhg oeh eihfqh', 'pifh pqiehf pejh3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `carousels`
--

INSERT INTO `carousels` (`id`, `titulo`, `subtitulo`, `nome_imagem`) VALUES
(1, 'The standard Lorem Ipsum passage', 'Used since the 1500s', '01.jpg'),
(10, 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\"', 'Written by Cicero in 45 BC', '02.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `name`, `last_name`, `address`, `state`, `city`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Daniel Augusto', 'das Neves Carrijo', 'Rua 3130', 'AC', 'Acrelândia', 'sakfhicbs', '2020-02-05 09:45:51', '2020-02-05 09:45:51'),
(3, 'Alice', 'Silva de Souza', 'Dr. Jose Ribeiro Ferreira', 'SP', 'Ribeirão Preto', 'osiwjfeopgvjdopgj diojhih hwd giowh gihdw gh', '2020-02-05 09:56:50', '2020-02-05 09:56:50'),
(4, 'Maria Madalena', 'das Neves', 'Rua 3131', 'GO', 'Ouvidor', 'ochs fiw', '2020-02-05 10:06:01', '2020-02-05 10:06:01'),
(5, 'Maria Madalena', 'das Neves', 'Rua 3131', 'GO', 'Ouvidor', 'ochs fiw', '2020-02-05 10:06:02', '2020-02-05 10:06:02'),
(6, 'okfnofn', 'n', 'nkonfsnfkodn', 'PE', 'Abreu e Lima', 'fkjfjd', '2020-02-05 10:09:23', '2020-02-05 10:09:23'),
(7, 'kndk', 'fijdifj', 'frfr', 'PR', 'Antonina', 'xciqsb qbf ehf euf hrefhi', '2020-02-05 10:09:58', '2020-02-05 10:09:58'),
(8, 'ofjdf', 'das Neves', 'sd', 'GO', 'Amaralina', 'oewhvihew gi9r98gmrgmir9jvmr', '2020-02-05 10:10:47', '2020-02-05 10:10:47'),
(9, 'si', 'hfbw', 'jofwf\'wibfw\'b\'', 'AC', 'Acrelândia', 'ifbjqfebf', '2020-02-05 10:12:02', '2020-02-05 10:12:02'),
(10, 'kfjndj', 'ieifh', 'wfeijei', 'AC', 'Acrelândia', 'qjfjififnjnfejnfjenf', '2020-02-05 10:12:20', '2020-02-05 10:12:20'),
(11, 'fj', 'ofih', 'wi9fjwifwifh', 'AC', 'Acrelândia', 'foeje1iofjef', '2020-02-05 10:12:50', '2020-02-05 10:12:50'),
(12, 'fkjeiebhfuie', 'qdkh', '9if', 'RO', 'Jaru', 'fekjffje', '2020-02-05 10:13:30', '2020-02-05 10:13:30'),
(13, 'fkj', 'qjf', 'f ejfn1en i', 'AC', 'Acrelândia', 'skjfjfhn', '2020-02-05 10:14:28', '2020-02-05 10:14:28'),
(14, 'fkjeiebhfuie', 'qdkh', '9if', 'RO', 'Alta Floresta d\'Oeste', 'JJJ', '2020-02-05 10:15:09', '2020-02-05 10:15:09'),
(15, 'fj', 'ofih', 'wi9fjwifwifh', 'AC', 'Acrelândia', 'wejfe', '2020-02-05 10:15:56', '2020-02-05 10:15:56'),
(16, 'skfj', 'q\'jdfi', 'difsb', 'AC', 'Acrelândia', 'sifjf9 hqei9fhne9hjv2n9h', '2020-02-05 10:16:17', '2020-02-05 10:16:17'),
(17, 'Daniel', 'das Neves Carrijo', 'nkonfsnfkodn', 'PI', 'Acauã', 'FJNEQFJJE', '2020-02-05 10:18:04', '2020-02-05 10:18:04'),
(18, 'dkjaj', 'isjfi', 'fjb', 'AC', 'Acrelândia', 'sfnsf', '2020-02-05 10:18:45', '2020-02-05 10:18:45'),
(20, 'Alice', 'Silva de Souza', 'sdjfiqv78fn', 'SP', 'Ribeirão Preto', 'clq\\sh9n dfoe foewhf eoijgroew ihr vpejf emgwr omgw ipme -9jew piej ej eojfn eouo e8hf oeu', '2020-02-06 07:15:47', '2020-02-06 07:15:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_29_194659_create_cards_table', 2),
(5, '2020_01_29_212512_add_titulo', 3),
(6, '2020_02_03_061157_create_carousel_table', 4),
(10, '2020_02_05_055242_create_contatos_table', 5),
(11, '2020_02_06_051622_create_textos_table', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `textos`
--

CREATE TABLE `textos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `textos`
--

INSERT INTO `textos` (`id`, `texto`) VALUES
(1, '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"'),
(3, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(4, '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'Daniel Carrijo', 'daniel.carrijo@outlook.com', NULL, '$2y$10$swZAYODBWBxldGnTtXtWIuOiRsght.je4sRY23gR7g9o1JU71rDIu', NULL, '2020-02-03 08:56:40', '2020-02-03 08:56:40');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `textos`
--
ALTER TABLE `textos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
