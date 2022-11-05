-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Nov-2022 às 19:41
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ancient`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime DEFAULT current_timestamp(),
  `capa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `classe` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `data`, `capa`, `descricao`, `conteudo`, `classe`, `idade`) VALUES
(27, 'Descoberta do Brasil', '2022-11-05 15:24:55', 'Imagens/6a4120be23c814f80233ecbb34e71adc.png', 'Descoberta ou descobrimento do Brasil refere-se, do ponto de vista eurocêntrico, à chegada dos europeus ao território atualmente conhecido como Brasil.', 'Descoberta ou descobrimento do Brasil refere-se, do ponto de vista eurocêntrico, à chegada dos europeus ao território atualmente conhecido como Brasil.', 'brasil', 'moderna'),
(28, 'Júlio César', '2022-11-05 15:25:28', 'Imagens/6f597c1ddab467f7bf5498aad1b41899.png', 'Caio Júlio César foi um patrício, líder militar e político romano. Desempenhou um papel crítico na transformação da República Romana no Império Romano.', 'Caio Júlio César foi um patrício, líder militar e político romano. Desempenhou um papel crítico na transformação da República Romana no Império Romano.', 'bio', ''),
(29, 'As Cruzadas', '2022-11-05 15:26:36', 'Imagens/43702744493af41e844ce643dcba4507.png', 'As Cruzadas foram movimentos militares  cristãos em direção à Terra Santa e à cidade de Jerusalém para conquistá-las, ocupá-las e mantê-las sob domínio cristão.', 'Cruzada é um termo utilizado para designar qualquer dos movimentos militares de inspiração cristã que partiram da Europa Ocidental em direção à Terra Santa e à cidade de Jerusalém com o intuito de conquistá-las, ocupá-las e mantê-las sob domínio cristão.', 'mundo', 'media'),
(30, 'Egito Antigo', '2022-11-05 15:28:35', 'Imagens/1486cbefbe88fe9cb1d74bbadd4a35da.png', 'O Antigo Egito foi uma civilização do Antigo Oriente Próximo do Norte de África, concentrada ao longo ao curso inferior do rio Nilo, no que é hoje o país moderno do Egito.', 'O Antigo Egito foi uma civilização do Antigo Oriente Próximo do Norte de África, concentrada ao longo ao curso inferior do rio Nilo, no que é hoje o país moderno do Egito.', 'mundo', 'antiga'),
(31, 'Independência do Brasil', '2022-11-05 15:29:26', 'Imagens/8dd329389531f662a87e57dbbcabad5b.png', 'A Independência do Brasil foi o processo histórico de separação entre o então Reino do Brasil e Portugal, que ocorreu no período de 1821 a 1825.', 'A Independência do Brasil foi o processo histórico de separação entre o então Reino do Brasil e Portugal, que ocorreu no período de 1821 a 1825.', 'brasil', 'contemporanea'),
(32, 'Revolução Industrial', '2022-11-05 15:30:13', 'Imagens/eb2a269fe925a708101ab71541a7c1ff.png', 'A Revolução Industrial foi a transição para novos processos de fabricação, no período de cerca de 1760 a algum momento entre 1820 e 1840.', 'A Revolução Industrial foi a transição para novos processos de fabricação na Grã-Bretanha, Europa continental e Estados Unidos, no período de cerca de 1760 a algum momento entre 1820 e 1840.', 'mundo', 'contemporanea'),
(33, 'Albert Einsten', '2022-11-05 15:30:35', 'Imagens/81a9eff9191c1642d3a5220bae105bc4.png', 'Albert Einstein foi um físico teórico alemão que desenvolveu a teoria da relatividade geral, um dos pilares da física moderna ao lado da mecânica quântica.', 'Albert Einstein foi um físico teórico alemão que desenvolveu a teoria da relatividade geral, um dos pilares da física moderna ao lado da mecânica quântica.', 'bio', ''),
(34, 'Leônidas de Esparta', '2022-11-05 15:30:59', 'Imagens/512b53d89adbc7c4754f8a46740e471e.png', 'Leónidas I ou Leônidas I foi rei e general de Esparta de 491 a.C até a data de sua morte em 480 a.C., durante a batalha de Termópilas.', 'Leónidas I ou Leônidas I foi rei e general de Esparta de 491 a.C até a data de sua morte em 480 a.C., durante a batalha de Termópilas.', 'bio', ''),
(35, 'Dom Pedro I', '2022-11-05 15:31:59', 'Imagens/c6cc8094c2dc07b700ffcc36d64e2138.png', 'Dom Pedro I do Brasil foi o primeiro Imperador do Brasil como Pedro I de 1822 até sua abdicação em 1831.', 'Dom Pedro I do Brasil foi o primeiro Imperador do Brasil como Pedro I de 1822 até sua abdicação em 1831.', 'bio', ''),
(36, 'Getúlio Vargas', '2022-11-05 15:33:07', 'Imagens/d49fab26ac2dfc1970ae462229264f35.png', 'Getúlio Vargas foi um político brasileiro, líder da Revolução de 1930, que pôs fim à República Velha, depondo Washington Luís, e impedindo a posse de Júlio Prestes.', 'Getúlio Dornelles Vargas foi um advogado e político brasileiro, líder da Revolução de 1930, que pôs fim à República Velha, depondo seu 13.º e último presidente, Washington Luís, e impedindo a posse do presidente eleito em 1.º de março de 1930, Júlio Prestes.', 'bio', ''),
(37, 'Pré-História', '2022-11-05 15:34:16', 'Imagens/6bf9e70a1f928aba143ef1eebe2720b5.png', 'A pré-história corresponde ao período da história que antecede a invenção da escrita, desde o começo dos tempos históricos registrados até aproximadamente em 3 500 a.C..', 'A pré-história corresponde ao período da história que antecede a invenção da escrita, desde o começo dos tempos históricos registrados até aproximadamente em 3 500 a.C.. É estudada pela antropologia, arqueologia e paleontologia.', 'mundo', 'prehistoria'),
(38, 'Revolução Francesa', '2022-11-05 15:35:18', 'Imagens/a1348ca670d81990aa74bd1997480760.png', 'Revolução Francesa foi um período, entre 1789 e 1799, de intensa agitação política e social na França.', 'Revolução Francesa foi um período, entre 1789 e 1799, de intensa agitação política e social na França, que teve um impacto duradouro na história do país e, mais amplamente, em todo o continente europeu. A monarquia absolutista que tinha governado a nação durante séculos entrou em colapso em apenas três anos.', 'mundo', 'moderna');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
