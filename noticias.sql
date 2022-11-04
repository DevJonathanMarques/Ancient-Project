-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2022 às 18:28
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
(2, 'Independência do Brasil', '2022-09-18 13:21:36', 'Imagens/8dd329389531f662a87e57dbbcabad5b.jpg', 'O Primeiro Reinado foi o período da história brasileira em que Pedro I do Brasil governou o Brasil como Imperador', '\"O Primeiro Reinado foi resultado direto do processo de independência do Brasil, que teve como ponto de partida a transferência da Corte portuguesa para o Rio de Janeiro a partir de 1808. Quando isso aconteceu, uma série de transformações aconteceu no Brasil: a cidade do Rio de Janeiro cresceu e desenvolveu-se, os portos foram abertos e o comércio prosperou. Dessa forma, o Brasil deixou de ser colônia, tornando-se parte do Reino de Portugal.\r\n\r\nOs ânimos do Brasil estavam relativamente sob controle até 1820, quando eclodiu a Revolução Liberal do Porto, em Portugal. Essa revolução foi realizada pela burguesia portuguesa, que demandava o retorno do rei português para Lisboa e a revogação das medidas que haviam sido implantadas no Brasil.\r\n\r\nA Revolução Liberal do Porto foi muito mal recebida pelas elites econômicas do Brasil, que encararam essa revolta como uma tentativa de recolonizar o país. Assim, surgiu um movimento pela independência do Brasil, o qual considerou Pedro, filho de D. João VI, como a pessoa ideal para liderar esse processo.\r\n\r\nApós ser pressionado pelas Cortes portuguesas (espécie de parlamento) a retornar a Portugal, Pedro percebeu que o único caminho a ser tomado era declarar a independência do Brasil. Assim, em 7 de setembro de 1822, aconteceu o grito do Ipiranga, por meio do qual o regente declarou a independência do Brasil. Pedro foi, então, coroado imperador, tornando-se D. Pedro I.\"', 'brasil', 'contemporanea'),
(3, 'Revolução Francesa', '2022-09-18 13:22:51', 'Imagens/a1348ca670d81990aa74bd1997480760.jpg', 'Revolução Francesa foi um período, entre 1789 e 1799, de intensa agitação política e social na França', '\"A Revolução Francesa é o nome dado ao ciclo revolucionário que aconteceu na França entre 1789 e 1799 que marcou o fim do absolutismo nesse país. Essa revolução, além de seu caráter burguês, teve uma grande participação popular e atingiu um alto grau de radicalismo, uma vez que a situação do povo francês era precária em virtude da crise que o país enfrentava.\r\n\r\nA Revolução Francesa foi um marco na história da humanidade, porque inaugurou um processo que levou à universalização dos direitos sociais e das liberdades individuais a partir da Declaração dos Direitos do Homem e do Cidadão. Essa revolução também abriu caminho para a consolidação de um sistema republicano pautado pela representatividade popular, hoje chamado de democracia representativa. A Revolução Francesa só foi possível graças à popularização dos ideais do Iluminismo.\"', 'mundo', 'contemporanea'),
(4, 'Revolta da Vacina', '2022-09-18 13:24:39', 'Imagens/397380304dcb0d5574c3d818d78595c9.jpg', 'A Revolta da Vacina foi um motim popular ocorrido entre 10 e 16 de novembro de 1904 na cidade do Rio de Janeiro', 'O médico Oswaldo Cruz (1872-1917), contratado para combater as doenças, impôs vacinação obrigatória contra a varíola, para todo brasileiro com mais de seis meses de idade.\r\n\r\nPolíticos, militares de oposição e a população da cidade se opuseram à vacina.Agitadores incitavam a massa urbana a enfrentar os funcionários da Saúde Pública que, protegidos pelos policiais, invadiam as casas e vacinavam as pessoas à força. Os mais radicais pregavam a resistência à bala, alegando que o cidadão tinha o direito de preservar o próprio corpo e não aceitar aquele líquido desconhecido.\r\n\r\nO descontentamento se generalizou, somando aos problemas de moradia e ao elevado custo de vida, resultando na Revolta da Vacina Obrigatória. Entre 10 e 16 de novembro de 1904, as camadas populares do Rio de Janeiro saíram às ruas para enfrentar os agentes da Saúde Pública e a polícia.', 'brasil', 'contemporanea'),
(5, 'Egito Antigo', '2022-09-18 13:26:39', 'Imagens/1486cbefbe88fe9cb1d74bbadd4a35da.jpg', 'O Antigo Egito foi uma civilização do Antigo Oriente Próximo do Norte de África, concentrada ao longo ao curso inferior do rio Nilo', 'O Egito Antigo foi uma das mais importantes civilizações da Antiguidade.\r\n\r\nA vida egípcia estava regulada pelas cheias do rio Nilo. Quando as águas voltavam ao leito normal deixavam o solo recoberto com um limo que fertilizava a terra para a agricultura.\r\n\r\nPara melhor aproveitá-lo, os egípcios desenvolveram sistemas de medida e escrita baseada nos hieroglifos.\r\n\r\nQuanto à religião eram politeístas e no seu panteão cultuavam o deus do Sol, Rá e o deus dos Vivos, Hórus, entre vários outros.', 'mundo', 'antiga'),
(6, 'Descoberta do Brasil', '2022-09-18 13:27:41', 'Imagens/6a4120be23c814f80233ecbb34e71adc.jpg', 'Descoberta ou descobrimento do Brasil refere-se, do ponto de vista eurocêntrico, à chegada dos europeus ao território atualmente conhecido como Brasil.', 'A chegada dos portugueses ao Brasil ocorreu em 22 de abril de 1500.\r\n\r\nNeste dia, navegantes liderados por Pedro Álvares Cabral desembarcaram na região da atual cidade de Porto Seguro. Lá permaneceram do dia 22 de abril a 2 de maio de 1500.\r\n\r\nO principal testemunho escrito da chegada dos portugueses foi o relato do escrivão Pero Vaz de Caminha, que passou à história como a \"Carta de Caminha\".', 'brasil', 'moderna'),
(7, 'As Cruzadas', '2022-09-18 13:29:09', 'Imagens/43702744493af41e844ce643dcba4507.jpg', 'As Cruzada são os movimentos militares cristão que partiram da Europa Ocidental em direção à Terra Santa e à cidade de Jerusalém com o intuito de conquistá-las.', '\"As Cruzadas foram expedições religiosas e militares que saíram da Europa em direção ao Oriente para resgatar Jerusalém, que estava sob domínio dos islâmicos.\r\n\r\nEntre os séculos XI e XIII, houve, ao todo, nove cruzadas.\r\n\r\nAlém dos caráteres religioso e militar, as expedições também influenciaram na retomada do comércio, ao levarem para a Europa produtos como as especiarias orientais.\r\n\r\nOs cruzados que participassem das expedições ganhavam a indulgência, ou seja, o perdão de seus pecados.\"', 'mundo', 'media'),
(8, 'Júlio César', '2022-09-18 13:30:07', 'Imagens/6f597c1ddab467f7bf5498aad1b41899.jpg', 'Caio Júlio César foi um patrício, líder militar e político romano. Desempenhou um papel crítico na transformação da República Romana no Império Romano.', 'Caio Júlio César, mais conhecido apenas como Júlio César, foi um líder romano importante no processo de transição do modelo republicano para o Império. Nascido em 100 a.C. viveu até 44 a.C. quando foi assassinado. O general se proclamava como filho de Vênus e Enéas (este, filho de Marte, o deus da guerra e de Vênus, a deusa do amor). Essa relação representava a junção de importantes características, que nortearam a vida política de Júlio César: o amor e a guerra, a força e a procriação, lado a lado. Muitos historiadores modernos classificam Júlio César como o último ditador da República Romana, embora escritores romanos antigos atribuíssem a ele o título de primeiro Imperador de Roma.\r\n\r\nJúlio César nasceu em uma família de patrícios e recebeu treinamento militar. Foi um líder militar e se destacou como comandante de tropas. Dentre seus feitos estão a formação de uma aliança que dominou o território romano e as conquistas territoriais. Ao se unir a Crasso e a Pompeu, formando o Primeiro Triunvirato Romano, construiu uma aliança que gerou incômodos políticos, especialmente por parte do senado.', 'bio', ''),
(9, 'Albert Einsten', '2022-09-18 13:30:45', 'Imagens/6c5bc43b443975b806740d8e41146479.jpg', 'Albert Einstein foi um físico teórico alemão que desenvolveu a teoria da relatividade geral, um dos pilares da física moderna ao lado da mecânica quântica.', '\"Albert Einstein (1879-1955) foi um físico alemão, nascido na cidade de Ulm em 1879. Quando jovem, mudou-se para a Suíça, onde se formou, tornando-se professor da Escola Politécnica de Zurique. Em 1903, casou-se com Mileva Maric, com quem teve dois filhos. O casal permaneceu junto até 1919, mesmo tendo vivido os cinco últimos anos do matrimônio separados.\r\n\r\nEinstein foi uma das mentes mais brilhantes da ciência, e o seu legado inclui a explicação do efeito fotoelétrico, a formulação da teoria da relatividade espacial geral e restrita, além de grandes contribuições para a Física Estatística, por meio de sua explicação para o movimento browniano.\"', 'bio', ''),
(10, 'Napoleão Bonaparte', '2022-09-18 13:33:03', 'Imagens/a6e514f9486b83cb53d8d932f9a04292.jpg', 'Napoleão foi um estadista, líder militar francês nas campanhas das Guerras Revolucionárias Francesas e imperador da França.', 'Napoleão Bonaparte, aclamado pelo povo como herói nacional, no dia 9 de novembro de 1799, promoveu num golpe de Estado o “Golpe do 18 de Brumário”.\r\n\r\nNesta data, ele derrubou o Diretório, dissolveu a Assembleia e assumiu o governo. Implantou o regime de Consulado e foi nomeado Primeiro Cônsul.\r\n\r\nEm 1800 aprovou, em plebiscito, uma Constituição. Em 1802, assinou a paz de Amiens com a Inglaterra.', 'bio', ''),
(19, 'Nicolas Tesla', '2022-09-24 20:27:58', 'Imagens/fa58572eeaee2d2e7ef6b650b50661dfwebp', 'Nicolas Tesla', 'Nicolas Tesla', 'bio', ''),
(25, 'Leônidas de Esparta', '2022-10-13 12:38:02', 'Imagens/512b53d89adbc7c4754f8a46740e471e.jpg', 'Leônidas de Esparta', 'Leônidas de Esparta', 'bio', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
