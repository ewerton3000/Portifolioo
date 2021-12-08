
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `nome` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `flag` tinyint(1) DEFAULT 0,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


