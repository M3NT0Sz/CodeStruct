-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Set-2024 às 21:03
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `codestruct`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jornada`
--

CREATE TABLE `jornada` (
  `jor_cod` int(11) NOT NULL,
  `jor_codUser` int(11) NOT NULL,
  `jor_fase` int(11) NOT NULL,
  `jor_cash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `per_cod` int(11) NOT NULL,
  `pergunta` text NOT NULL,
  `opcao_a` text NOT NULL,
  `opcao_b` text NOT NULL,
  `opcao_c` text NOT NULL,
  `opcao_d` text NOT NULL,
  `resposta_correta` text NOT NULL,
  `per_nivel` int(11) NOT NULL,
  `per_pontos` int(11) NOT NULL,
  `per_tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`per_cod`, `pergunta`, `opcao_a`, `opcao_b`, `opcao_c`, `opcao_d`, `resposta_correta`, `per_nivel`, `per_pontos`, `per_tipo`) VALUES
(1, 'Qual é a principal característica dos Tipos Abstratos de Dados (TAD)?', 'Definem apenas a estrutura de dados sem operações.', 'Definem operações e estrutura de dados, independentemente da implementação.', 'São tipos de dados específicos para uma linguagem.', 'Definem apenas operações, sem especificar a estrutura.', 'Definem operações e estrutura de dados, independentemente da implementação.', 1, 10, 'TAD'),
(2, 'Qual das seguintes opções é um exemplo de TAD?', 'Algoritmo de busca.', 'Estrutura de controle de fluxo.', 'Lista simplesmente encadeada.', 'Operador aritmético.', 'Lista simplesmente encadeada.', 1, 10, 'TAD'),
(3, 'O que um TAD de fila normalmente não permite?', 'Adicionar elementos no início.', 'Remover elementos do início.', 'Adicionar elementos no final.', 'Remover elementos do final.', 'Adicionar elementos no início.', 1, 10, 'Fila'),
(4, 'Qual operação é típica de um TAD de pilha?', 'Adicionar elementos ao final da estrutura.', 'Remover o elemento do início.', 'Adicionar e remover elementos do topo.', 'Acessar o elemento em uma posição específica.', 'Adicionar e remover elementos do topo.', 1, 10, 'Pilha'),
(5, 'Em um TAD de árvore binária, quantos filhos um nó pode ter?', 'Nenhum.', 'Um.', 'Dois.', 'Três ou mais.', 'Dois.', 1, 10, 'Árvore'),
(6, 'Qual das seguintes opções não é um TAD?', 'Fila.', 'Pilha.', 'Árvore.', 'Função de hash.', 'Função de hash.', 1, 10, 'TAD'),
(7, 'Em um TAD de lista, o que o método `Adicionar` faz?', 'Remove um elemento da lista.', 'Insere um novo elemento na lista.', 'Ordena os elementos da lista.', 'Acessa um elemento por índice.', 'Insere um novo elemento na lista.', 1, 10, 'Lista'),
(8, 'Qual é a característica fundamental de um TAD de fila?', 'LIFO (Last In, First Out).', 'FIFO (First In, First Out).', 'Ordenação automática dos elementos.', 'Acesso aleatório aos elementos.', 'FIFO (First In, First Out).', 1, 10, 'Fila'),
(9, 'Qual operação não é típica de um TAD de árvore?', 'Inserir um nó.', 'Remover um nó.', 'Ordenar os elementos.', 'Navegar pelos elementos em uma ordem específica.', 'Ordenar os elementos.', 1, 10, 'Árvore'),
(10, 'Em um TAD de pilha, como é conhecido o método para remover o elemento no topo?', 'Pop.', 'Push.', 'Peek.', 'Enqueue.', 'Pop.', 1, 10, 'Pilha'),
(11, 'Em um TAD de lista duplamente encadeada, quantos ponteiros cada nó possui?', 'Um ponteiro para o próximo nó.', 'Um ponteiro para o nó anterior e um para o próximo nó.', 'Dois ponteiros para o próximo nó.', 'Nenhum ponteiro.', 'Um ponteiro para o nó anterior e um para o próximo nó.', 1, 10, 'Lista'),
(12, 'Qual é a principal vantagem de uma lista duplamente encadeada sobre uma lista simplesmente encadeada?', 'Melhorar o desempenho de acesso aleatório.', 'Facilitar a navegação em ambas as direções.', 'Reduzir o uso de memória.', 'Simples implementação.', 'Facilitar a navegação em ambas as direções.', 2, 15, 'Lista'),
(13, 'Em um TAD de árvore binária de busca, como são organizados os nós?', 'Níveis de profundidade.', 'Em uma estrutura de heap.', 'Cada nó à esquerda é menor que o nó pai e cada nó à direita é maior.', 'Aleatoriamente.', 'Cada nó à esquerda é menor que o nó pai e cada nó à direita é maior.', 2, 15, 'Árvore'),
(14, 'Qual operação é usada para adicionar um elemento a um TAD de pilha?', 'Push.', 'Pop.', 'Peek.', 'Enqueue.', 'Push.', 1, 10, 'Pilha'),
(15, 'Qual é a principal característica de um TAD de lista?', 'Os elementos são acessados aleatoriamente.', 'Os elementos são organizados em uma sequência linear.', 'Os elementos são removidos em ordem LIFO.', 'Os elementos são organizados hierarquicamente.', 'Os elementos são organizados em uma sequência linear.', 1, 10, 'Lista'),
(16, 'Qual dos seguintes TADs é mais apropriado para implementar um sistema de navegação?', 'Lista.', 'Pilha.', 'Fila.', 'Árvore.', 'Árvore.', 2, 15, 'Árvore'),
(17, 'Em um TAD de grafo, o que representa um \"vértice\"?', 'Uma conexão entre dois vértices.', 'Uma entidade que pode se conectar a outros vértices.', 'A lista de arestas.', 'Um caminho entre dois vértices.', 'Uma entidade que pode se conectar a outros vértices.', 2, 15, 'Grafo'),
(18, 'Qual operação é utilizada para acessar o elemento no topo de uma pilha sem removê-lo?', 'Peek.', 'Pop.', 'Push.', 'Enqueue.', 'Peek.', 1, 10, 'Pilha'),
(19, 'Qual é o principal uso de uma fila em estruturas de dados?', 'Para armazenar elementos em uma ordem aleatória.', 'Para armazenar elementos em ordem LIFO.', 'Para armazenar elementos em ordem FIFO.', 'Para acessar elementos por índice.', 'Para armazenar elementos em ordem FIFO.', 1, 10, 'Fila'),
(20, 'Em um TAD de árvore binária, o que é um \"nó folha\"?', 'Um nó que tem dois filhos.', 'Um nó que não tem filhos.', 'Um nó que tem um filho.', 'Um nó que é a raiz da árvore.', 'Um nó que não tem filhos.', 1, 10, 'Árvore'),
(21, 'O que define a implementação de um TAD de lista circular?', 'A lista tem um ponto de início fixo.', 'A lista é linear, mas o último nó aponta para o primeiro.', 'A lista é dupla e possui dois ponteiros por nó.', 'A lista tem nós ordenados.', 'A lista é linear, mas o último nó aponta para o primeiro.', 2, 15, 'Lista'),
(22, 'Qual é a principal diferença entre uma lista simplesmente encadeada e uma lista duplamente encadeada?', 'A lista duplamente encadeada pode ser navegada em ambas as direções.', 'A lista simplesmente encadeada é mais eficiente para buscas.', 'A lista duplamente encadeada tem menos memória.', 'A lista duplamente encadeada é mais simples de implementar.', 'A lista duplamente encadeada pode ser navegada em ambas as direções.', 2, 15, 'Lista'),
(23, 'Qual é a característica de uma pilha?', 'FIFO (First In, First Out).', 'LIFO (Last In, First Out).', 'Acesso aleatório.', 'Organização hierárquica.', 'LIFO (Last In, First Out).', 1, 10, 'Pilha'),
(24, 'Qual dos seguintes TADs é mais apropriado para implementação de um buffer de impressão?', 'Fila.', 'Pilha.', 'Lista.', 'Árvore.', 'Fila.', 1, 10, 'Fila'),
(25, 'Qual operação não é típica de um TAD de árvore?', 'Adicionar um nó.', 'Remover um nó.', 'Ordenar elementos.', 'Buscar um nó.', 'Ordenar elementos.', 1, 10, 'Árvore'),
(26, 'Qual é a operação padrão para acessar o elemento no final de uma lista encadeada?', 'Adicionar um elemento.', 'Remover o primeiro elemento.', 'Acessar um elemento específico.', 'Percorrer toda a lista.', 'Percorrer toda a lista.', 1, 10, 'Lista'),
(27, 'Qual é a estrutura de dados ideal para realizar operações de undo/redo?', 'Pilha.', 'Fila.', 'Árvore.', 'Lista.', 'Pilha.', 1, 10, 'Pilha'),
(28, 'Qual é a principal característica dos TADs de árvore?', 'Navegação linear.', 'Navegação hierárquica.', 'Ordenação automática.', 'Acesso aleatório.', 'Navegação hierárquica.', 1, 10, 'Árvore'),
(29, 'Qual é a principal diferença entre uma árvore binária e uma árvore binária de busca?', 'A árvore binária de busca possui uma organização específica dos nós.', 'A árvore binária tem apenas dois filhos por nó.', 'A árvore binária de busca é mais complexa.', 'A árvore binária permite diferentes números de filhos por nó.', 'A árvore binária de busca possui uma organização específica dos nós.', 2, 15, 'Árvore'),
(30, 'Qual operação é usada para retornar o elemento mais recente adicionado a uma pilha?', 'Pop.', 'Push.', 'Peek.', 'Enqueue.', 'Peek.', 1, 10, 'Pilha'),
(31, 'Qual é a operação típica de um TAD de grafo?', 'Adicionar um nó.', 'Adicionar uma aresta.', 'Remover um nó.', 'Ordenar os vértices.', 'Adicionar uma aresta.', 2, 15, 'Grafo'),
(32, 'Qual é a estrutura de dados ideal para implementar uma lista de tarefas onde a ordem de execução é importante?', 'Fila.', 'Pilha.', 'Árvore.', 'Lista.', 'Fila.', 1, 10, 'Fila'),
(33, 'Qual é a principal vantagem de uma lista circular sobre uma lista não circular?', 'Permite acesso direto ao último elemento.', 'Acesso mais rápido ao primeiro elemento.', 'Maior uso de memória.', 'Mais fácil de implementar.', 'Permite acesso direto ao último elemento.', 2, 15, 'Lista'),
(34, 'Qual é a principal diferença entre uma fila e uma pilha?', 'Fila usa LIFO e pilha usa FIFO.', 'Fila usa FIFO e pilha usa LIFO.', 'Ambas têm a mesma estrutura.', 'Ambas são usadas para navegação hierárquica.', 'Fila usa FIFO e pilha usa LIFO.', 1, 10, 'Fila'),
(35, 'Qual é a operação típica de um TAD de grafo?', 'Adicionar um nó.', 'Adicionar uma aresta.', 'Remover um nó.', 'Ordenar os vértices.', 'Adicionar uma aresta.', 2, 15, 'Grafo'),
(36, 'Em um TAD de árvore, o que significa \"nó raiz\"?', 'O nó que está no fundo da árvore.', 'O nó que é a base de todos os outros nós.', 'Um nó que tem dois filhos.', 'Um nó sem filhos.', 'O nó que é a base de todos os outros nós.', 1, 10, 'Árvore'),
(37, 'Qual é a estrutura de dados ideal para armazenar uma sequência de operações onde a ordem de inserção e remoção é importante?', 'Pilha.', 'Fila.', 'Lista.', 'Árvore.', 'Pilha.', 1, 10, 'Pilha'),
(38, 'Qual é a operação principal de um TAD de árvore AVL?', 'Adicionar nós com balanceamento automático.', 'Ordenar elementos.', 'Remover nós.', 'Buscar elementos.', 'Adicionar nós com balanceamento automático.', 3, 20, 'Árvore'),
(39, 'Qual é a principal característica de uma fila de prioridade?', 'Os elementos são removidos na ordem em que foram adicionados.', 'Os elementos são removidos com base em sua prioridade.', 'Os elementos são acessados aleatoriamente.', 'Os elementos são organizados em uma estrutura hierárquica.', 'Os elementos são removidos com base em sua prioridade.', 3, 20, 'Fila'),
(40, 'Qual dos seguintes é um exemplo de uma estrutura de dados onde a remoção de elementos ocorre de forma LIFO?', 'Fila.', 'Pilha.', 'Árvore.', 'Lista.', 'Pilha.', 1, 10, 'Pilha'),
(41, 'Em uma lista duplamente encadeada, o que é um \"nó\"?', 'Um elemento que contém um valor e um ponteiro para o próximo nó.', 'Um elemento que contém um valor e dois ponteiros, um para o próximo e outro para o nó anterior.', 'Um ponteiro para o próximo nó.', 'Uma lista de valores.', 'Um elemento que contém um valor e dois ponteiros, um para o próximo e outro para o nó anterior.', 2, 15, 'Lista'),
(42, 'Qual é a estrutura de dados ideal para representar uma rede de conexões entre diferentes entidades?', 'Grafo.', 'Pilha.', 'Fila.', 'Árvore.', 'Grafo.', 2, 15, 'Grafo'),
(43, 'Qual das seguintes operações é mais rápida em uma lista simplesmente encadeada do que em uma lista duplamente encadeada?', 'Adicionar um elemento ao final.', 'Adicionar um elemento ao início.', 'Remover um elemento do meio.', 'Acessar um elemento por índice.', 'Adicionar um elemento ao início.', 1, 10, 'Lista'),
(44, 'Qual é a estrutura de dados ideal para implementar um histórico de navegação onde você pode voltar e avançar?', 'Pilha.', 'Fila.', 'Árvore.', 'Lista.', 'Pilha.', 1, 10, 'Pilha'),
(45, 'Qual dos seguintes conceitos está relacionado com a implementação de TADs em linguagens de programação?', 'Encapsulamento.', 'Herança.', 'Polimorfismo.', 'Todas as anteriores.', 'Todas as anteriores.', 3, 20, 'TAD'),
(46, 'Em um TAD de lista, como a operação de busca é realizada?', 'Através de um índice.', 'Percorrendo a lista a partir do início até encontrar o elemento.', 'Usando uma árvore de busca.', 'Utilizando uma tabela de hash.', 'Percorrendo a lista a partir do início até encontrar o elemento.', 2, 15, 'Lista'),
(47, 'Qual das seguintes operações não é típica de um TAD de árvore?', 'Inserir um nó.', 'Remover um nó.', 'Adicionar um nó ao início.', 'Buscar um nó.', 'Adicionar um nó ao início.', 2, 15, 'Árvore'),
(48, 'Qual é a principal característica dos TADs de pilha e fila?', 'Pilha é LIFO e Fila é FIFO.', 'Pilha é FIFO e Fila é LIFO.', 'Ambos são hierárquicos.', 'Ambos suportam acesso aleatório.', 'Pilha é LIFO e Fila é FIFO.', 1, 10, 'Pilha'),
(49, 'Qual é o conceito fundamental por trás de um TAD de árvore binária?', 'Cada nó tem no máximo dois filhos.', 'Cada nó pode ter qualquer número de filhos.', 'Os nós são armazenados em uma lista.', 'Os nós são armazenados em uma tabela de hash.', 'Cada nó tem no máximo dois filhos.', 1, 10, 'Árvore'),
(50, 'Qual dos seguintes TADs é adequado para representar uma estrutura hierárquica, como uma organização empresarial?', 'Árvore.', 'Pilha.', 'Fila.', 'Lista.', 'Árvore.', 2, 15, 'Árvore'),
(51, 'Qual é a diferença entre uma árvore binária e uma árvore n-ária?', 'Árvore binária tem no máximo dois filhos por nó; árvore n-ária pode ter mais.', 'Árvore binária pode ter qualquer número de filhos por nó; árvore n-ária tem dois.', 'Árvore binária é usada para busca; árvore n-ária é usada para ordenação.', 'Árvore binária e n-ária são idênticas.', 'Árvore binária tem no máximo dois filhos por nó; árvore n-ária pode ter mais.', 2, 15, 'Árvore'),
(52, 'Em um TAD de lista, o que o método `Remover` faz?', 'Remove um elemento específico da lista.', 'Adiciona um novo elemento à lista.', 'Ordena a lista.', 'Acessa um elemento por índice.', 'Remove um elemento específico da lista.', 1, 10, 'Lista'),
(53, 'Qual é a principal vantagem de uma fila circular?', 'Economiza memória ao evitar a realocação.', 'Permite acesso aleatório aos elementos.', 'Facilita a implementação de árvores.', 'Permite navegação em ambas as direções.', 'Economiza memória ao evitar a realocação.', 2, 15, 'Fila'),
(54, 'Qual é a estrutura de dados ideal para implementar uma árvore de decisão?', 'Árvore.', 'Pilha.', 'Fila.', 'Lista.', 'Árvore.', 3, 20, 'Árvore'),
(55, 'Qual é o principal uso de um TAD de lista encadeada?', 'Armazenar dados de forma ordenada e acessível por índice.', 'Armazenar dados onde a ordem de inserção é importante.', 'Permitir acesso rápido a qualquer elemento.', 'Representar dados em uma estrutura hierárquica.', 'Armazenar dados onde a ordem de inserção é importante.', 2, 15, 'Lista'),
(56, 'Qual é a principal característica dos TADs de árvore balanceada?', 'Todos os caminhos da raiz para as folhas têm o mesmo comprimento.', 'Os elementos são armazenados em uma lista ordenada.', 'Cada nó pode ter um número variável de filhos.', 'Os elementos são armazenados aleatoriamente.', 'Todos os caminhos da raiz para as folhas têm o mesmo comprimento.', 3, 20, 'Árvore'),
(57, 'Qual dos seguintes conceitos não está relacionado com TADs?', 'Encapsulamento.', 'Abstração.', 'Polimorfismo.', 'Herança.', 'Herança.', 3, 20, 'TAD'),
(58, 'Qual é a operação de um TAD de lista onde o elemento é inserido na posição desejada?', 'Adicionar.', 'Remover.', 'Buscar.', 'Ordenar.', 'Adicionar.', 2, 15, 'Lista'),
(59, 'Qual é a característica de um TAD de lista quando a inserção e remoção são realizadas em qualquer posição?', 'Acesso sequencial.', 'Acesso aleatório.', 'Acesso hierárquico.', 'Acesso circular.', 'Acesso sequencial.', 2, 15, 'Lista'),
(60, 'Qual é o conceito fundamental por trás de um TAD de grafo?', 'Conexões entre entidades (vértices) através de arestas.', 'Organização hierárquica de nós.', 'Sequência linear de elementos.', 'Hierarquia de elementos.', 'Conexões entre entidades (vértices) através de arestas.', 2, 15, 'Grafo'),
(61, 'Qual das seguintes operações é realizada em um TAD de fila circular?', 'Adicionar e remover elementos de forma eficiente com reutilização de espaço.', 'Ordenar os elementos.', 'Adicionar elementos apenas no início.', 'Acessar elementos aleatoriamente.', 'Adicionar e remover elementos de forma eficiente com reutilização de espaço.', 2, 15, 'Fila');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `use_cod` int(11) NOT NULL,
  `use_name` varchar(100) NOT NULL,
  `use_email` varchar(100) NOT NULL,
  `use_senha` varchar(100) NOT NULL,
  `use_img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`jor_cod`);

--
-- Índices para tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`per_cod`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`use_cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jornada`
--
ALTER TABLE `jornada`
  MODIFY `jor_cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `per_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `use_cod` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
