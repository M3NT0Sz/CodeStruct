-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/09/2024 às 03:45
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

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
-- Estrutura para tabela `jornada`
--

CREATE TABLE `jornada` (
  `jor_cod` int(11) NOT NULL,
  `jor_codUser` int(11) NOT NULL,
  `jor_fase` int(11) NOT NULL,
  `jor_cash` int(11) NOT NULL,
  `jor_vida` int(11) NOT NULL,
  `jor_pergunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jornada`
--

INSERT INTO `jornada` (`jor_cod`, `jor_codUser`, `jor_fase`, `jor_cash`, `jor_vida`, `jor_pergunta`) VALUES
(1, 2, 30, 2015, 3, 1),
(2, 3, 0, 30, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `perguntas`
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
-- Despejando dados para a tabela `perguntas`
--

INSERT INTO `perguntas` (`per_cod`, `pergunta`, `opcao_a`, `opcao_b`, `opcao_c`, `opcao_d`, `resposta_correta`, `per_nivel`, `per_pontos`, `per_tipo`) VALUES
(101, 'O que significa FIFO em uma fila?', 'First In First Out.', 'First In First Only.', 'First In First Ordered.', 'First Input First Output.', 'First In First Out.', 1, 10, 'Fila FIFO'),
(102, 'Em uma fila FIFO, qual operação remove um item?', 'Pop.', 'Dequeue.', 'Push.', 'Insert.', 'Dequeue.', 1, 10, 'Fila FIFO'),
(103, 'Em uma fila FIFO, onde os elementos são inseridos?', 'No início da fila.', 'No final da fila.', 'Aleatoriamente.', 'No meio da fila.', 'No final da fila.', 1, 10, 'Fila FIFO'),
(104, 'Qual das opções representa o comportamento correto de uma fila FIFO?', 'Primeiro a entrar, primeiro a sair.', 'Último a entrar, primeiro a sair.', 'Primeiro a entrar, último a sair.', 'A ordem de saída é aleatória.', 'Primeiro a entrar, primeiro a sair.', 1, 10, 'Fila FIFO'),
(105, 'Qual das seguintes estruturas de dados segue o princípio FIFO?', 'Fila.', 'Pilha.', 'Árvore Binária.', 'Grafo.', 'Fila.', 1, 10, 'Fila FIFO'),
(106, 'Se um elemento é enfileirado, onde ele será removido?', 'Do início da fila.', 'Do final da fila.', 'Aleatoriamente.', 'Da posição do meio.', 'Do início da fila.', 1, 10, 'Fila FIFO'),
(107, 'Qual das seguintes operações não faz parte de uma fila FIFO?', 'Enqueue.', 'Dequeue.', 'Push.', 'Peek.', 'Push.', 1, 10, 'Fila FIFO'),
(108, 'Em uma fila vazia, o que acontece quando você realiza um dequeue?', 'Retorna um erro ou exceção.', 'Remove o primeiro elemento.', 'Adiciona um novo elemento.', 'Retorna o último elemento.', 'Retorna um erro ou exceção.', 1, 10, 'Fila FIFO'),
(109, 'Em qual cenário uma fila FIFO é mais apropriada?', 'Impressoras.', 'Função de desfazer (undo).', 'Algoritmo de recursão.', 'Ordenação de números.', 'Impressoras.', 1, 10, 'Fila FIFO'),
(110, 'Qual é a complexidade de tempo para inserção e remoção em uma fila FIFO simples?', 'O(1).', 'O(n).', 'O(log n).', 'O(n^2).', 'O(1).', 1, 10, 'Fila FIFO'),
(111, 'Como a operação de dequeue afeta o tamanho de uma fila FIFO?', 'Diminui em um.', 'Aumenta em um.', 'Mantém o tamanho constante.', 'Aumenta em dois.', 'Diminui em um.', 2, 15, 'Fila FIFO'),
(112, 'Qual é a principal vantagem de uma fila circular em relação a uma fila FIFO simples?', 'Reutilização eficiente de espaço.', 'Inserção mais rápida.', 'Remoção mais rápida.', 'Uso reduzido de memória.', 'Reutilização eficiente de espaço.', 2, 15, 'Fila FIFO'),
(113, 'Se uma fila FIFO tem 5 elementos, quantas operações de dequeue são necessárias para esvaziá-la?', 'Cinco.', 'Seis.', 'Quatro.', 'Depende do tipo de fila.', 'Cinco.', 2, 15, 'Fila FIFO'),
(114, 'O que acontece quando você tenta enfileirar um elemento em uma fila cheia?', 'Retorna um erro ou exceção.', 'Adiciona o elemento no início.', 'Remove o elemento mais antigo.', 'Adiciona o elemento no final.', 'Retorna um erro ou exceção.', 2, 15, 'Fila FIFO'),
(115, 'Qual das seguintes implementações pode ser usada para uma fila FIFO?', 'Lista Encadeada.', 'Árvore AVL.', 'Pilha.', 'Tabela Hash.', 'Lista Encadeada.', 2, 15, 'Fila FIFO'),
(116, 'Qual é a principal limitação de uma fila linear em comparação a uma fila circular?', 'Uso ineficiente de espaço.', 'Remoção mais lenta.', 'Inserção mais lenta.', 'Maior complexidade de tempo.', 'Uso ineficiente de espaço.', 2, 15, 'Fila FIFO'),
(117, 'O que acontece ao tentar realizar um dequeue em uma fila FIFO vazia?', 'Uma exceção é lançada.', 'O primeiro elemento é removido.', 'Nada acontece.', 'O último elemento é removido.', 'Uma exceção é lançada.', 2, 15, 'Fila FIFO'),
(118, 'Em uma fila FIFO circular, qual operação indica o final da fila?', 'O ponteiro traseiro (rear).', 'O ponteiro frontal (front).', 'O tamanho da fila.', 'O número de operações.', 'O ponteiro traseiro (rear).', 2, 15, 'Fila FIFO'),
(119, 'Em uma fila FIFO, qual operação permite visualizar o primeiro elemento sem removê-lo?', 'Peek.', 'Dequeue.', 'Enqueue.', 'Push.', 'Peek.', 2, 15, 'Fila FIFO'),
(120, 'Qual das seguintes é uma aplicação comum de filas FIFO?', 'Gestão de buffers de entrada e saída.', 'Busca em profundidade em grafos.', 'Função de desfazer (undo).', 'Armazenamento de histórico de navegação.', 'Gestão de buffers de entrada e saída.', 2, 15, 'Fila FIFO'),
(121, 'Como você implementaria uma fila FIFO usando duas pilhas?', 'Utilizando uma pilha para enfileirar e outra para desenfileirar.', 'Utilizando apenas uma pilha com operações invertidas.', 'Empilhando os elementos duas vezes.', 'Usando uma pilha circular.', 'Utilizando uma pilha para enfileirar e outra para desenfileirar.', 3, 20, 'Fila FIFO'),
(122, 'Qual é a principal diferença entre uma fila FIFO e uma fila de prioridade?', 'Fila de prioridade remove elementos com base na prioridade, não na ordem de chegada.', 'Fila FIFO remove elementos com base na prioridade.', 'Fila de prioridade é mais lenta.', 'Fila FIFO permite inserção de elementos com prioridade.', 'Fila de prioridade remove elementos com base na prioridade, não na ordem de chegada.', 3, 20, 'Fila FIFO'),
(123, 'Qual seria a complexidade de tempo de uma fila FIFO implementada com uma lista encadeada simples para enfileirar e desenfileirar?', 'O(1) para ambas as operações.', 'O(n) para enfileirar e O(1) para desenfileirar.', 'O(1) para enfileirar e O(n) para desenfileirar.', 'O(n) para ambas as operações.', 'O(1) para ambas as operações.', 3, 20, 'Fila FIFO'),
(124, 'Como você evitaria o desperdício de memória ao usar uma fila FIFO implementada com um array estático?', 'Utilizando uma fila circular.', 'Aumentando o tamanho do array.', 'Reorganizando os elementos no início do array.', 'Removendo elementos do final.', 'Utilizando uma fila circular.', 3, 20, 'Fila FIFO'),
(125, 'Como a fila FIFO pode ser aplicada na simulação de sistemas em tempo real?', 'Para gerenciar tarefas com base na ordem de chegada.', 'Para gerenciar tarefas com base na prioridade.', 'Para organizar dados hierarquicamente.', 'Para resolver problemas de recursão.', 'Para gerenciar tarefas com base na ordem de chegada.', 3, 20, 'Fila FIFO'),
(126, 'Se você tem uma fila FIFO circular com 10 elementos e realiza 3 enqueues seguidos de 3 dequeues, qual é o número de elementos restantes na fila?', 'O mesmo número de antes.', '10.', '7.', '3.', 'O mesmo número de antes.', 3, 20, 'Fila FIFO'),
(127, 'Em uma fila FIFO circular, como você identificaria uma fila cheia?', 'Quando o próximo índice de inserção é igual ao índice de remoção.', 'Quando o número de elementos é zero.', 'Quando o índice de remoção é igual ao último elemento.', 'Quando o índice de inserção for 0.', 'Quando o próximo índice de inserção é igual ao índice de remoção.', 3, 20, 'Fila FIFO'),
(128, 'Qual é a diferença entre uma fila FIFO dinâmica e uma fila FIFO estática?', 'Fila dinâmica redimensiona automaticamente, fila estática tem tamanho fixo.', 'Fila estática redimensiona automaticamente.', 'Fila dinâmica é implementada com arrays.', 'Fila estática usa listas encadeadas.', 'Fila dinâmica redimensiona automaticamente, fila estática tem tamanho fixo.', 3, 20, 'Fila FIFO'),
(129, 'Qual técnica seria usada para otimizar uma fila FIFO com um grande volume de elementos?', 'Fila circular.', 'Fila encadeada.', 'Pilha de prioridade.', 'Árvore de decisão.', 'Fila circular.', 3, 20, 'Fila FIFO'),
(130, 'Em uma fila FIFO implementada com um array, qual seria o principal problema ao não usar uma fila circular?', 'Desperdício de memória ao não reutilizar posições vazias.', 'Inserção lenta.', 'Remoção lenta.', 'A fila nunca enche.', 'Desperdício de memória ao não reutilizar posições vazias.', 3, 20, 'Fila FIFO'),
(201, 'O que define a ordem de saída em uma fila de prioridade?', 'A prioridade dos elementos.', 'A ordem de chegada.', 'O valor do elemento.', 'A posição na fila.', 'A prioridade dos elementos.', 1, 10, 'Fila de Prioridade'),
(202, 'Como os elementos são removidos de uma fila de prioridade?', 'Com base em sua prioridade.', 'Com base em sua posição na fila.', 'Aleatoriamente.', 'Com base em sua ordem de chegada.', 'Com base em sua prioridade.', 1, 10, 'Fila de Prioridade'),
(203, 'Em uma fila de prioridade, como os elementos são organizados?', 'Por suas prioridades.', 'Por sua ordem de chegada.', 'Aleatoriamente.', 'Por sua ordem de remoção.', 'Por suas prioridades.', 1, 10, 'Fila de Prioridade'),
(204, 'Qual operação insere um elemento em uma fila de prioridade?', 'Enqueue.', 'Push.', 'Add.', 'Insert.', 'Enqueue.', 1, 10, 'Fila de Prioridade'),
(205, 'Em uma fila de prioridade, o que ocorre se dois elementos tiverem a mesma prioridade?', 'São removidos pela ordem de chegada.', 'São removidos aleatoriamente.', 'O último elemento é removido primeiro.', 'O maior valor é removido primeiro.', 'São removidos pela ordem de chegada.', 1, 10, 'Fila de Prioridade'),
(206, 'Qual é a principal característica de uma fila de prioridade?', 'Os elementos são removidos com base em sua prioridade.', 'Os elementos são removidos com base na ordem de chegada.', 'Os elementos são removidos com base no seu valor.', 'Os elementos são removidos aleatoriamente.', 'Os elementos são removidos com base em sua prioridade.', 1, 10, 'Fila de Prioridade'),
(207, 'Qual das seguintes estruturas pode ser usada para implementar uma fila de prioridade?', 'Heap.', 'Pilha.', 'Lista Simplesmente Encadeada.', 'Fila FIFO.', 'Heap.', 1, 10, 'Fila de Prioridade'),
(208, 'Qual é o comportamento de uma fila de prioridade mínima?', 'Remove o menor elemento primeiro.', 'Remove o maior elemento primeiro.', 'Remove os elementos na ordem de chegada.', 'Remove os elementos em ordem reversa.', 'Remove o menor elemento primeiro.', 1, 10, 'Fila de Prioridade'),
(209, 'Em qual aplicação uma fila de prioridade é útil?', 'Algoritmos de caminho mínimo.', 'Recuperação de histórico de navegação.', 'Recursão.', 'Função de desfazer.', 'Algoritmos de caminho mínimo.', 1, 10, 'Fila de Prioridade'),
(210, 'Qual é a complexidade de tempo para remover o elemento de maior prioridade em uma fila de prioridade implementada com um heap binário?', 'O(log n).', 'O(n).', 'O(1).', 'O(n log n).', 'O(log n).', 1, 10, 'Fila de Prioridade'),
(211, 'O que acontece ao tentar enfileirar em uma fila de prioridade cheia?', 'Lança uma exceção.', 'O elemento é enfileirado.', 'O elemento mais baixo é removido.', 'A fila é automaticamente redimensionada.', 'Lança uma exceção.', 2, 15, 'Fila de Prioridade'),
(212, 'Como a inserção em uma fila de prioridade afeta a sua ordenação?', 'Os elementos são reposicionados de acordo com sua prioridade.', 'Os elementos são inseridos no final da fila.', 'Os elementos são removidos da fila.', 'A ordenação não muda.', 'Os elementos são reposicionados de acordo com sua prioridade.', 2, 15, 'Fila de Prioridade'),
(213, 'Qual é a principal desvantagem de uma fila de prioridade implementada com uma lista encadeada simples?', 'Inserção lenta.', 'Remoção lenta.', 'Uso excessivo de memória.', 'Busca lenta de elementos.', 'Remoção lenta.', 2, 15, 'Fila de Prioridade'),
(214, 'Se você tem uma fila de prioridade com n elementos, quantas comparações são necessárias para inserir um novo elemento no heap binário?', 'O(log n).', 'O(n).', 'O(n log n).', 'O(1).', 'O(log n).', 2, 15, 'Fila de Prioridade'),
(215, 'O que define o comportamento de uma fila de prioridade máxima?', 'Os elementos de maior prioridade são removidos primeiro.', 'Os elementos de menor prioridade são removidos primeiro.', 'Os elementos são removidos na ordem de chegada.', 'Os elementos são removidos aleatoriamente.', 'Os elementos de maior prioridade são removidos primeiro.', 2, 15, 'Fila de Prioridade'),
(216, 'Qual é a principal diferença entre uma fila de prioridade e uma fila FIFO?', 'A fila de prioridade considera a prioridade dos elementos.', 'A fila FIFO remove os elementos com base em sua prioridade.', 'A fila de prioridade é mais rápida para enfileirar.', 'A fila FIFO tem inserção mais rápida.', 'A fila de prioridade considera a prioridade dos elementos.', 2, 15, 'Fila de Prioridade'),
(217, 'O que acontece quando um elemento com prioridade maior é inserido em uma fila de prioridade máxima?', 'Ele é inserido no topo da fila.', 'Ele é inserido no final da fila.', 'Ele é inserido aleatoriamente.', 'Ele é inserido no meio da fila.', 'Ele é inserido no topo da fila.', 2, 15, 'Fila de Prioridade'),
(218, 'Em uma fila de prioridade mínima, como a remoção do menor elemento afeta a estrutura do heap?', 'O último elemento ocupa o lugar do elemento removido e o heap é reorganizado.', 'O maior elemento ocupa o lugar do elemento removido.', 'Os elementos são reorganizados em ordem crescente.', 'Nada acontece.', 'O último elemento ocupa o lugar do elemento removido e o heap é reorganizado.', 2, 15, 'Fila de Prioridade'),
(219, 'Qual é a diferença entre um heap binário e uma lista encadeada ao implementar uma fila de prioridade?', 'O heap tem melhor eficiência na remoção de elementos de alta prioridade.', 'A lista encadeada tem inserção mais rápida.', 'O heap usa mais memória.', 'A lista encadeada é mais eficiente para inserção de elementos.', 'O heap tem melhor eficiência na remoção de elementos de alta prioridade.', 2, 15, 'Fila de Prioridade'),
(220, 'Em uma fila de prioridade, qual é o principal desafio ao tentar manter a ordenação dos elementos?', 'Reorganizar os elementos após cada inserção ou remoção.', 'Identificar o elemento com menor prioridade.', 'Aumentar a prioridade de um elemento.', 'Remover elementos do final da fila.', 'Reorganizar os elementos após cada inserção ou remoção.', 2, 15, 'Fila de Prioridade'),
(221, 'Qual é a complexidade de tempo de uma fila de prioridade implementada com um heap binário na inserção e remoção?', 'O(log n) para ambas as operações.', 'O(1) para ambas as operações.', 'O(n) para inserção e O(1) para remoção.', 'O(n) para ambas as operações.', 'O(log n) para ambas as operações.', 3, 20, 'Fila de Prioridade'),
(222, 'Como você implementaria uma fila de prioridade usando duas filas FIFO?', 'Uma fila para enfileirar e outra para armazenar elementos temporários.', 'Utilizando uma pilha adicional.', 'Com operações invertidas em cada fila.', 'Não é possível implementar.', 'Uma fila para enfileirar e outra para armazenar elementos temporários.', 3, 20, 'Fila de Prioridade'),
(223, 'Qual seria a estratégia ideal para balancear a eficiência de inserção e remoção em uma fila de prioridade?', 'Usar uma heap binária.', 'Usar uma fila circular.', 'Usar uma lista encadeada dupla.', 'Usar uma árvore AVL.', 'Usar uma heap binária.', 3, 20, 'Fila de Prioridade'),
(224, 'Como a inserção de um elemento em um heap binário afeta sua estrutura?', 'O elemento é adicionado na última posição e depois é reorganizado.', 'O elemento é adicionado no início e a heap é reorganizada.', 'A heap é reorganizada antes da inserção.', 'O elemento é adicionado no meio e reorganizado.', 'O elemento é adicionado na última posição e depois é reorganizado.', 3, 20, 'Fila de Prioridade'),
(225, 'Qual é a principal limitação de uma fila de prioridade ao lidar com dados em tempo real?', 'O tempo necessário para reorganizar a fila após cada operação.', 'A complexidade de inserção é alta.', 'A remoção é ineficiente.', 'A fila não pode ser redimensionada automaticamente.', 'O tempo necessário para reorganizar a fila após cada operação.', 3, 20, 'Fila de Prioridade'),
(226, 'Se você tem uma fila de prioridade com 1000 elementos, quantas comparações são necessárias para remover o elemento de maior prioridade usando um heap binário?', 'Aproximadamente 10 comparações.', 'Aproximadamente 100 comparações.', 'Uma comparação.', 'Depende da implementação.', 'Aproximadamente 10 comparações.', 3, 20, 'Fila de Prioridade'),
(227, 'Como seria possível melhorar a eficiência de uma fila de prioridade para grandes volumes de dados?', 'Usar um heap d-ário em vez de um heap binário.', 'Reduzir o número de comparações.', 'Usar uma fila FIFO.', 'Aumentar o tamanho do array subjacente.', 'Usar um heap d-ário em vez de um heap binário.', 3, 20, 'Fila de Prioridade'),
(228, 'Qual é a complexidade de tempo para aumentar a prioridade de um elemento em uma fila de prioridade implementada com um heap binário?', 'O(log n).', 'O(n log n).', 'O(1).', 'O(n).', 'O(log n).', 3, 20, 'Fila de Prioridade'),
(229, 'Como você implementaria uma fila de prioridade com capacidade de alterar a prioridade de um elemento?', 'Usando um heap binário com operações de atualização.', 'Usando uma lista encadeada dupla.', 'Usando uma pilha e uma fila FIFO combinadas.', 'Usando uma árvore binária de busca.', 'Usando um heap binário com operações de atualização.', 3, 20, 'Fila de Prioridade'),
(230, 'Em uma fila de prioridade, como seria possível garantir que as operações de remoção e inserção sejam balanceadas em termos de eficiência?', 'Manter a heap sempre balanceada após cada operação.', 'Priorizar a remoção sobre a inserção.', 'Aumentar o tamanho da fila para evitar reorganizações.', 'Reduzir o número de elementos na fila.', 'Manter a heap sempre balanceada após cada operação.', 3, 20, 'Fila de Prioridade'),
(301, 'O que é um TAD?', 'Tipo Abstrato de Dados.', 'Tipo Aritmético de Dados.', 'Tabela Abstrata de Dados.', 'Tipo Avançado de Dados.', 'Tipo Abstrato de Dados.', 1, 10, 'TAD'),
(302, 'Qual é o principal objetivo de um TAD?', 'Ocultar a implementação e expor apenas operações.', 'Facilitar a visualização de dados.', 'Aumentar a eficiência de memória.', 'Reduzir o número de variáveis.', 'Ocultar a implementação e expor apenas operações.', 1, 10, 'TAD'),
(303, 'Qual é um exemplo comum de TAD?', 'Fila.', 'Variável.', 'Função recursiva.', 'Ponteiro.', 'Fila.', 1, 10, 'TAD'),
(304, 'Quais são os principais componentes de um TAD?', 'Operações e estrutura de dados.', 'Funções e classes.', 'Objetos e métodos.', 'Atributos e funções.', 'Operações e estrutura de dados.', 1, 10, 'TAD'),
(305, 'O que define as operações permitidas em um TAD?', 'Suas especificações.', 'Seu tipo de dado.', 'Sua complexidade algorítmica.', 'Seu tamanho.', 'Suas especificações.', 1, 10, 'TAD'),
(306, 'Qual é a vantagem de usar um TAD?', 'Facilita a implementação de estruturas de dados sem expor detalhes internos.', 'Aumenta a eficiência de tempo.', 'Reduz a quantidade de código.', 'Permite execução paralela.', 'Facilita a implementação de estruturas de dados sem expor detalhes internos.', 1, 10, 'TAD'),
(307, 'Qual das opções NÃO é um exemplo de TAD?', 'Número inteiro.', 'Pilha.', 'Fila.', 'Lista encadeada.', 'Número inteiro.', 1, 10, 'TAD'),
(308, 'Por que a abstração é importante em TADs?', 'Porque esconde a complexidade da implementação.', 'Porque aumenta o desempenho.', 'Porque melhora a legibilidade do código.', 'Porque usa menos memória.', 'Porque esconde a complexidade da implementação.', 1, 10, 'TAD'),
(309, 'Qual é a principal diferença entre um TAD e uma estrutura de dados?', 'Um TAD define operações abstratas, enquanto uma estrutura de dados é uma implementação concreta.', 'Um TAD é mais rápido que uma estrutura de dados.', 'Um TAD usa mais memória.', 'Um TAD pode ser modificado dinamicamente.', 'Um TAD define operações abstratas, enquanto uma estrutura de dados é uma implementação concreta.', 1, 10, 'TAD'),
(310, 'Como um TAD é tipicamente implementado em linguagens de programação?', 'Através de classes ou módulos.', 'Através de variáveis globais.', 'Através de ponteiros.', 'Através de funções anônimas.', 'Através de classes ou módulos.', 1, 10, 'TAD'),
(311, 'Quais operações são geralmente associadas a um TAD?', 'Inserção, remoção, pesquisa e atualização.', 'Atribuição e cópia de valores.', 'Execução paralela.', 'Comparação de objetos.', 'Inserção, remoção, pesquisa e atualização.', 2, 15, 'TAD'),
(312, 'Qual é a principal desvantagem de um TAD mal implementado?', 'Desempenho ineficiente e desperdício de recursos.', 'Maior uso de memória.', 'Problemas de sincronização.', 'Dificuldade em adicionar novos métodos.', 'Desempenho ineficiente e desperdício de recursos.', 2, 15, 'TAD'),
(313, 'O que significa dizer que um TAD é modular?', 'Ele pode ser alterado sem afetar o restante do programa.', 'Ele pode ser executado em múltiplos núcleos.', 'Ele usa classes abstratas.', 'Ele não pode ser implementado com herança.', 'Ele pode ser alterado sem afetar o restante do programa.', 2, 15, 'TAD'),
(314, 'Como a eficiência de um TAD é medida?', 'Com base no tempo e espaço consumidos por suas operações.', 'Com base na quantidade de memória alocada.', 'Pelo número de linhas de código.', 'Pela quantidade de variáveis internas.', 'Com base no tempo e espaço consumidos por suas operações.', 2, 15, 'TAD'),
(315, 'Quais são os dois tipos de operações que um TAD expõe?', 'Operações de modificação e consulta.', 'Operações de atribuição e comparação.', 'Operações de sobrecarga e cópia.', 'Operações de execução e sincronização.', 'Operações de modificação e consulta.', 2, 15, 'TAD'),
(316, 'Por que os TADs são importantes em programação orientada a objetos?', 'Eles ajudam a garantir encapsulamento e ocultação de dados.', 'Eles permitem acesso direto à memória.', 'Eles aumentam a eficiência do compilador.', 'Eles reduzem a complexidade algorítmica.', 'Eles ajudam a garantir encapsulamento e ocultação de dados.', 2, 15, 'TAD'),
(317, 'Qual é a diferença entre um TAD estático e um TAD dinâmico?', 'Um TAD estático tem tamanho fixo, enquanto um TAD dinâmico pode crescer e encolher.', 'Um TAD dinâmico usa ponteiros.', 'Um TAD estático não pode ser implementado com classes.', 'Um TAD dinâmico é mais eficiente.', 'Um TAD estático tem tamanho fixo, enquanto um TAD dinâmico pode crescer e encolher.', 2, 15, 'TAD'),
(318, 'Qual das seguintes é uma operação típica de consulta em um TAD?', 'Verificar se um elemento está presente.', 'Adicionar um novo elemento.', 'Atualizar um elemento.', 'Excluir todos os elementos.', 'Verificar se um elemento está presente.', 2, 15, 'TAD'),
(319, 'O que caracteriza um TAD mutável?', 'Os dados podem ser alterados após a criação do TAD.', 'A estrutura de dados não pode ser modificada.', 'Ele não permite operações de consulta.', 'Ele só permite leitura.', 'Os dados podem ser alterados após a criação do TAD.', 2, 15, 'TAD'),
(320, 'Como um TAD garante a integridade dos dados?', 'Através de encapsulamento e controle de acesso.', 'Através de ponteiros constantes.', 'Usando algoritmos de hashing.', 'Implementando árvores binárias.', 'Através de encapsulamento e controle de acesso.', 2, 15, 'TAD'),
(321, 'Como a complexidade de tempo de um TAD influencia a escolha de sua implementação?', 'Um TAD com menor complexidade de tempo é preferido em aplicações com grandes volumes de dados.', 'A complexidade de tempo não é relevante na escolha.', 'Implementações com maior complexidade são sempre mais eficientes.', 'A complexidade de tempo afeta apenas o uso de memória.', 'Um TAD com menor complexidade de tempo é preferido em aplicações com grandes volumes de dados.', 3, 20, 'TAD'),
(322, 'Qual é a principal dificuldade ao implementar um TAD com múltiplos métodos de consulta?', 'Garantir que cada método seja eficiente em termos de tempo.', 'Reduzir o uso de memória.', 'Evitar duplicidade de dados.', 'Manter a legibilidade do código.', 'Garantir que cada método seja eficiente em termos de tempo.', 3, 20, 'TAD'),
(323, 'Quais são os benefícios de usar um TAD ao invés de manipular diretamente estruturas de dados?', 'Maior controle sobre a manipulação dos dados e maior flexibilidade para mudanças futuras.', 'Redução de memória utilizada.', 'Maior velocidade de execução.', 'Menor quantidade de código escrito.', 'Maior controle sobre a manipulação dos dados e maior flexibilidade para mudanças futuras.', 3, 20, 'TAD'),
(324, 'Como um TAD pode ser projetado para ser reutilizável em diferentes programas?', 'Usando interfaces e abstrações genéricas.', 'Evitando o uso de classes abstratas.', 'Implementando o TAD diretamente no código-fonte.', 'Reduzindo o número de operações expostas.', 'Usando interfaces e abstrações genéricas.', 3, 20, 'TAD'),
(325, 'Em uma aplicação de grande porte, como a escolha do TAD impacta o desempenho geral do sistema?', 'Afeta diretamente a eficiência de operações críticas, como pesquisa e inserção.', 'Não tem impacto significativo.', 'Apenas afeta a modularidade do sistema.', 'Influencia apenas o uso de memória.', 'Afeta diretamente a eficiência de operações críticas, como pesquisa e inserção.', 3, 20, 'TAD'),
(326, 'Por que a escolha da implementação interna de um TAD pode ser crítica?', 'A implementação afeta a eficiência das operações e o uso de recursos do sistema.', 'Porque afeta a compatibilidade com o sistema operacional.', 'Porque limita o tamanho do programa.', 'Porque restringe o número de operações disponíveis.', 'A implementação afeta a eficiência das operações e o uso de recursos do sistema.', 3, 20, 'TAD'),
(327, 'Qual é uma desvantagem de usar TADs genéricos em aplicações?', 'Maior complexidade de implementação e sobrecarga de desempenho.', 'Eles não podem ser reutilizados.', 'Eles ocupam mais memória.', 'Eles não são compatíveis com algoritmos recursivos.', 'Maior complexidade de implementação e sobrecarga de desempenho.', 3, 20, 'TAD'),
(328, 'Qual é o principal desafio ao trabalhar com TADs mutáveis em aplicações concorrentes?', 'Garantir a consistência dos dados quando várias threads acessam o TAD simultaneamente.', 'Reduzir o tempo de execução das operações.', 'Evitar o uso de ponteiros inválidos.', 'Maximizar o uso de memória.', 'Garantir a consistência dos dados quando várias threads acessam o TAD simultaneamente.', 3, 20, 'TAD'),
(329, 'Quais são as vantagens de combinar múltiplos TADs em um sistema?', 'Permite a manipulação eficiente de diferentes tipos de dados, com flexibilidade para cada tipo de operação.', 'Reduz a quantidade de código escrito.', 'Aumenta a velocidade do sistema.', 'Melhora a interface gráfica do usuário.', 'Permite a manipulação eficiente de diferentes tipos de dados, com flexibilidade para cada tipo de operação.', 3, 20, 'TAD'),
(330, 'Como a modularidade dos TADs facilita a manutenção de sistemas de software?', 'Ao permitir que alterações em uma parte do sistema não afetem outras partes.', 'Reduzindo a quantidade de variáveis usadas.', 'Facilitando a sincronização entre threads.', 'Aumentando a quantidade de memória disponível.', 'Ao permitir que alterações em uma parte do sistema não afetem outras partes.', 3, 20, 'TAD'),
(401, 'O que é uma lista simplesmente encadeada?', 'Uma sequência de elementos onde cada elemento aponta para o próximo.', 'Uma sequência de elementos que armazena seu próprio índice.', 'Uma lista em que cada elemento possui um índice fixo.', 'Uma lista que permite acesso aleatório a qualquer elemento.', 'Uma sequência de elementos onde cada elemento aponta para o próximo.', 1, 10, 'Lista Simplesmente Encadeada'),
(402, 'Qual é a principal vantagem de uma lista simplesmente encadeada sobre um array?', 'A lista pode crescer dinamicamente sem realocação de memória.', 'Os elementos podem ser acessados diretamente.', 'A lista ocupa menos memória.', 'Os elementos podem ser ordenados automaticamente.', 'A lista pode crescer dinamicamente sem realocação de memória.', 1, 10, 'Lista Simplesmente Encadeada'),
(403, 'O que é um nó em uma lista simplesmente encadeada?', 'Uma estrutura que contém um valor e uma referência para o próximo nó.', 'Um índice no array.', 'Uma posição fixa na memória.', 'Um elemento que pode ser acessado diretamente.', 'Uma estrutura que contém um valor e uma referência para o próximo nó.', 1, 10, 'Lista Simplesmente Encadeada'),
(404, 'Como se chama o primeiro nó de uma lista simplesmente encadeada?', 'Cabeça da lista.', 'Ponteiro inicial.', 'Raiz da lista.', 'Elemento base.', 'Cabeça da lista.', 1, 10, 'Lista Simplesmente Encadeada'),
(405, 'Como acessar o último elemento de uma lista simplesmente encadeada?', 'Percorrendo a lista até encontrar um nó cuja referência ao próximo seja nula.', 'Acessando diretamente o índice do último elemento.', 'Utilizando uma função de acesso rápido.', 'Utilizando a referência armazenada no primeiro nó.', 'Percorrendo a lista até encontrar um nó cuja referência ao próximo seja nula.', 1, 10, 'Lista Simplesmente Encadeada'),
(406, 'O que acontece quando você tenta remover o primeiro nó de uma lista simplesmente encadeada?', 'O ponteiro de cabeça é atualizado para apontar para o segundo nó.', 'A lista é esvaziada.', 'Todos os nós são removidos.', 'A referência ao segundo nó é apagada.', 'O ponteiro de cabeça é atualizado para apontar para o segundo nó.', 1, 10, 'Lista Simplesmente Encadeada'),
(407, 'Quais operações são tipicamente realizadas em uma lista simplesmente encadeada?', 'Inserção, remoção, pesquisa e atualização.', 'Cálculo de média, adição e subtração.', 'Ordenação, compressão e criptografia.', 'Comparação e fusão.', 'Inserção, remoção, pesquisa e atualização.', 1, 10, 'Lista Simplesmente Encadeada'),
(408, 'O que caracteriza uma lista simplesmente encadeada circular?', 'O último nó aponta para o primeiro nó, formando um ciclo.', 'Os nós podem ser acessados em ordem inversa.', 'Ela permite acesso aleatório aos elementos.', 'Todos os nós têm a mesma posição na memória.', 'O último nó aponta para o primeiro nó, formando um ciclo.', 1, 10, 'Lista Simplesmente Encadeada'),
(409, 'Como é feita a inserção de um novo nó no início de uma lista simplesmente encadeada?', 'Criando um novo nó e apontando o ponteiro de cabeça para ele.', 'Movendo o último nó para a primeira posição.', 'Redefinindo os índices da lista.', 'Invertendo a ordem da lista.', 'Criando um novo nó e apontando o ponteiro de cabeça para ele.', 1, 10, 'Lista Simplesmente Encadeada'),
(410, 'Qual das alternativas NÃO é uma vantagem das listas simplesmente encadeadas?', 'Acesso aleatório a qualquer elemento.', 'Inserção dinâmica de elementos.', 'Facilidade em remover o primeiro nó.', 'Crescimento dinâmico sem realocação de memória.', 'Acesso aleatório a qualquer elemento.', 1, 10, 'Lista Simplesmente Encadeada'),
(411, 'Como você removeria um nó intermediário de uma lista simplesmente encadeada?', 'Atualizando a referência do nó anterior para apontar para o próximo nó.', 'Redefinindo os índices da lista.', 'Movendo o nó para o final da lista.', 'Acessando o nó diretamente e removendo-o.', 'Atualizando a referência do nó anterior para apontar para o próximo nó.', 2, 15, 'Lista Simplesmente Encadeada'),
(412, 'Qual é a complexidade de tempo para pesquisar um elemento em uma lista simplesmente encadeada?', 'O(n), onde n é o número de elementos.', 'O(1), pois cada nó pode ser acessado diretamente.', 'O(log n), usando busca binária.', 'O(n^2), pois é necessário percorrer todos os nós.', 'O(n), onde n é o número de elementos.', 2, 15, 'Lista Simplesmente Encadeada'),
(413, 'O que acontece com a memória ao remover um nó de uma lista simplesmente encadeada?', 'A memória associada ao nó é liberada.', 'A memória permanece alocada até o fim do programa.', 'A memória é realocada para o próximo nó.', 'O tamanho da memória alocada dobra.', 'A memória associada ao nó é liberada.', 2, 15, 'Lista Simplesmente Encadeada'),
(414, 'Qual é a desvantagem de uma lista simplesmente encadeada quando comparada a um array?', 'Não oferece acesso direto aos elementos.', 'Requer mais memória para armazenar os elementos.', 'Não permite adicionar novos elementos.', 'É mais difícil de implementar.', 'Não oferece acesso direto aos elementos.', 2, 15, 'Lista Simplesmente Encadeada'),
(415, 'Qual a vantagem de usar listas simplesmente encadeadas em relação a arrays para inserções frequentes?', 'A inserção é mais eficiente, especialmente no início ou no fim da lista.', 'O espaço em memória é sempre menor.', 'O tempo de busca é menor.', 'A lista pode ser acessada de forma aleatória.', 'A inserção é mais eficiente, especialmente no início ou no fim da lista.', 2, 15, 'Lista Simplesmente Encadeada'),
(416, 'Como podemos evitar a perda de memória (memory leak) ao manipular listas simplesmente encadeadas?', 'Garantindo que os nós removidos sejam liberados corretamente da memória.', 'Evitando o uso de ponteiros.', 'Usando listas duplamente encadeadas.', 'Evitando criar novos nós.', 'Garantindo que os nós removidos sejam liberados corretamente da memória.', 2, 15, 'Lista Simplesmente Encadeada'),
(417, 'Qual operação em uma lista simplesmente encadeada pode causar uma violação de acesso à memória se não for feita corretamente?', 'Remoção de um nó intermediário.', 'Inserção no final da lista.', 'Pesquisa de um elemento inexistente.', 'Atualização do valor do primeiro nó.', 'Remoção de um nó intermediário.', 2, 15, 'Lista Simplesmente Encadeada'),
(418, 'Como implementar um algoritmo de reversão de uma lista simplesmente encadeada?', 'Modificando os ponteiros de cada nó para apontar para o nó anterior.', 'Invertendo os valores armazenados nos nós.', 'Reiniciando os índices de cada nó.', 'Usando um array auxiliar para armazenar os valores.', 'Modificando os ponteiros de cada nó para apontar para o nó anterior.', 2, 15, 'Lista Simplesmente Encadeada'),
(419, 'Qual estrutura de dados auxilia na implementação de uma lista simplesmente encadeada?', 'Ponteiros ou referências para o próximo nó.', 'Matrizes para armazenar os elementos.', 'Pilhas para armazenar índices.', 'Árvores para organizar os nós.', 'Ponteiros ou referências para o próximo nó.', 2, 15, 'Lista Simplesmente Encadeada'),
(420, 'Como uma lista simplesmente encadeada pode ser percorrida?', 'Usando um laço para seguir as referências dos nós, começando pela cabeça.', 'Acessando diretamente os índices dos nós.', 'Utilizando uma árvore de busca.', 'Redefinindo a estrutura de memória.', 'Usando um laço para seguir as referências dos nós, começando pela cabeça.', 2, 15, 'Lista Simplesmente Encadeada'),
(421, 'Como seria implementada uma função recursiva para contar o número de nós em uma lista simplesmente encadeada?', 'A função chamaria a si mesma para contar nós subsequentes, terminando na referência nula.', 'Utilizando um laço for para contar cada nó.', 'Ordenando os nós antes de contar.', 'Usando uma estrutura de árvore para dividir a lista.', 'A função chamaria a si mesma para contar nós subsequentes, terminando na referência nula.', 3, 20, 'Lista Simplesmente Encadeada'),
(422, 'Quais são as implicações de um ciclo em uma lista simplesmente encadeada?', 'A lista pode ser percorrida indefinidamente sem chegar ao final.', 'Os nós serão removidos automaticamente.', 'Todos os nós terão valores duplicados.', 'A memória alocada para a lista será liberada.', 'A lista pode ser percorrida indefinidamente sem chegar ao final.', 3, 20, 'Lista Simplesmente Encadeada'),
(423, 'Qual é a principal dificuldade ao implementar a remoção de um nó com valor específico em uma lista simplesmente encadeada?', 'Manter a integridade das referências ao próximo nó.', 'Encontrar o nó exato para remover.', 'Liberar corretamente a memória associada ao nó.', 'Atualizar todos os valores na lista.', 'Manter a integridade das referências ao próximo nó.', 3, 20, 'Lista Simplesmente Encadeada'),
(424, 'Como evitar a perda de referência ao resto da lista ao remover o primeiro nó?', 'Atribuir o ponteiro de cabeça ao próximo nó.', 'Mover o último nó para a primeira posição.', 'Redefinir todos os nós subsequentes.', 'Manter uma cópia de todos os nós em um array.', 'Atribuir o ponteiro de cabeça ao próximo nó.', 3, 20, 'Lista Simplesmente Encadeada'),
(425, 'Qual seria uma abordagem eficiente para inserir um nó em uma lista simplesmente encadeada já ordenada?', 'Percorrer a lista até encontrar o ponto correto e inserir o novo nó.', 'Inserir o nó no início e reordenar.', 'Inserir o nó no final e reordenar.', 'Dividir a lista e inserir o nó no meio.', 'Percorrer a lista até encontrar o ponto correto e inserir o novo nó.', 3, 20, 'Lista Simplesmente Encadeada'),
(426, 'Por que a operação de concatenação de duas listas simplesmente encadeadas pode ser custosa?', 'Porque é necessário percorrer toda a primeira lista até o final.', 'Porque os nós precisam ser duplicados.', 'Porque os ponteiros de todas as listas devem ser atualizados.', 'Porque os valores dos nós precisam ser comparados.', 'Porque é necessário percorrer toda a primeira lista até o final.', 3, 20, 'Lista Simplesmente Encadeada'),
(427, 'Como você poderia detectar a presença de um ciclo em uma lista simplesmente encadeada?', 'Utilizando o algoritmo de Floyd (tartaruga e lebre).', 'Percorrendo a lista duas vezes.', 'Usando uma pilha auxiliar para armazenar os nós.', 'Acessando o último nó diretamente.', 'Utilizando o algoritmo de Floyd (tartaruga e lebre).', 3, 20, 'Lista Simplesmente Encadeada'),
(428, 'Como implementar uma função para mesclar duas listas simplesmente encadeadas ordenadas?', 'Percorrendo ambas as listas e inserindo os elementos em ordem.', 'Inserindo a segunda lista no início da primeira.', 'Copiando os valores em um array auxiliar e ordenando.', 'Multiplicando os valores dos nós antes de inseri-los.', 'Percorrendo ambas as listas e inserindo os elementos em ordem.', 3, 20, 'Lista Simplesmente Encadeada'),
(429, 'Qual é a abordagem correta para liberar a memória de uma lista simplesmente encadeada?', 'Percorrer a lista e liberar a memória de cada nó.', 'Liberar apenas o primeiro nó.', 'Deixar que o sistema operacional faça a limpeza.', 'Apagar os valores dos nós sem liberar memória.', 'Percorrer a lista e liberar a memória de cada nó.', 3, 20, 'Lista Simplesmente Encadeada'),
(430, 'Quais são os cuidados necessários ao implementar uma lista simplesmente encadeada em um ambiente de concorrência?', 'Garantir que as operações de inserção e remoção sejam atomicamente seguras.', 'Aumentar o número de nós.', 'Evitar o uso de ponteiros para referência.', 'Duplicar os nós em threads diferentes.', 'Garantir que as operações de inserção e remoção sejam atomicamente seguras.', 3, 20, 'Lista Simplesmente Encadeada'),
(431, 'O que é uma lista duplamente encadeada?', 'Uma lista onde cada nó tem referências para o nó anterior e o próximo.', 'Uma lista que permite acesso aleatório.', 'Uma lista que armazena elementos em um array.', 'Uma lista que só aponta para o próximo nó.', 'Uma lista onde cada nó tem referências para o nó anterior e o próximo.', 1, 10, 'Lista Duplamente Encadeada'),
(432, 'Qual é a principal vantagem de uma lista duplamente encadeada sobre uma lista simplesmente encadeada?', 'Permite percorrer a lista em ambas as direções.', 'Ocupa menos memória.', 'Permite acesso direto aos elementos.', 'É mais fácil de implementar.', 'Permite percorrer a lista em ambas as direções.', 1, 10, 'Lista Duplamente Encadeada'),
(433, 'Como você removeria um nó de uma lista duplamente encadeada?', 'Atualizando as referências do nó anterior e do próximo.', 'Removendo o nó e duplicando os outros.', 'Reorganizando os índices.', 'Movendo o nó para o final da lista.', 'Atualizando as referências do nó anterior e do próximo.', 1, 10, 'Lista Duplamente Encadeada'),
(434, 'Qual é a desvantagem de uma lista duplamente encadeada?', 'Requer mais memória devido ao armazenamento do ponteiro anterior.', 'É mais fácil de implementar.', 'Permite acesso aleatório.', 'Os nós são imutáveis.', 'Requer mais memória devido ao armazenamento do ponteiro anterior.', 1, 10, 'Lista Duplamente Encadeada'),
(435, 'Como se chama o primeiro nó de uma lista duplamente encadeada?', 'Cabeça da lista.', 'Raiz da lista.', 'Ponteiro inicial.', 'Elemento base.', 'Cabeça da lista.', 1, 10, 'Lista Duplamente Encadeada'),
(436, 'O que acontece quando você remove o último nó de uma lista duplamente encadeada?', 'O nó anterior é atualizado para ter a referência nula.', 'O primeiro nó é removido.', 'A lista é esvaziada.', 'Nada acontece.', 'O nó anterior é atualizado para ter a referência nula.', 1, 10, 'Lista Duplamente Encadeada'),
(437, 'Como você acessa um nó intermediário em uma lista duplamente encadeada?', 'Percorrendo a lista a partir da cabeça ou da cauda.', 'Acessando diretamente pelo índice.', 'Usando uma referência ao último nó.', 'Não é possível acessar nós intermediários.', 'Percorrendo a lista a partir da cabeça ou da cauda.', 1, 10, 'Lista Duplamente Encadeada'),
(438, 'Qual é a complexidade de tempo para inserir um nó no início de uma lista duplamente encadeada?', 'O(1).', 'O(n).', 'O(log n).', 'O(n^2).', 'O(1).', 1, 10, 'Lista Duplamente Encadeada'),
(439, 'Qual operação é utilizada para percorrer a lista duplamente encadeada?', 'Iteração através de ponteiros.', 'Usar índices.', 'Armazenar em uma matriz.', 'Nenhuma das alternativas.', 'Iteração através de ponteiros.', 1, 10, 'Lista Duplamente Encadeada'),
(440, 'Como você pode inverter uma lista duplamente encadeada?', 'Trocando as referências de próximo e anterior de cada nó.', 'Movendo todos os nós para um novo array.', 'Reordenando os nós.', 'Removendo e adicionando novamente os nós.', 'Trocando as referências de próximo e anterior de cada nó.', 2, 15, 'Lista Duplamente Encadeada'),
(441, 'Qual é a complexidade de tempo para pesquisar um elemento em uma lista duplamente encadeada?', 'O(n), onde n é o número de elementos.', 'O(1), pois cada nó pode ser acessado diretamente.', 'O(log n), usando busca binária.', 'O(n^2), pois é necessário percorrer todos os nós.', 'O(n), onde n é o número de elementos.', 2, 15, 'Lista Duplamente Encadeada'),
(442, 'Qual operação pode ser custosa ao remover um nó de uma lista duplamente encadeada?', 'Manter as referências corretamente atualizadas.', 'Contar os nós.', 'Inserir um novo nó.', 'Adicionar um nó ao final da lista.', 'Manter as referências corretamente atualizadas.', 2, 15, 'Lista Duplamente Encadeada'),
(443, 'Qual a vantagem de usar listas duplamente encadeadas em relação a simplesmente encadeadas?', 'Permite remoção mais fácil de nós intermediários.', 'Ocupa menos memória.', 'É mais fácil de implementar.', 'Não requer ponteiros.', 'Permite remoção mais fácil de nós intermediários.', 2, 15, 'Lista Duplamente Encadeada'),
(444, 'Como detectar um ciclo em uma lista duplamente encadeada?', 'Usando o algoritmo de Floyd.', 'Contando os nós.', 'Percorrendo a lista várias vezes.', 'Não é possível detectar.', 'Usando o algoritmo de Floyd.', 2, 15, 'Lista Duplamente Encadeada'),
(445, 'Qual é a complexidade de tempo para concatenar duas listas duplamente encadeadas?', 'O(n), onde n é o número de nós na primeira lista.', 'O(1).', 'O(n^2).', 'O(log n).', 'O(n), onde n é o número de nós na primeira lista.', 2, 15, 'Lista Duplamente Encadeada'),
(446, 'O que caracteriza um nó de uma lista duplamente encadeada?', 'Possui ponteiros para o próximo e o anterior.', 'Possui apenas um ponteiro.', 'Não pode armazenar valores.', 'É fixo em tamanho.', 'Possui ponteiros para o próximo e o anterior.', 2, 15, 'Lista Duplamente Encadeada'),
(447, 'Como você liberaria a memória de uma lista duplamente encadeada?', 'Percorrendo a lista e liberando cada nó.', 'Liberando apenas o primeiro nó.', 'Deixando que o sistema operacional faça a limpeza.', 'Não é necessário liberar.', 'Percorrendo a lista e liberando cada nó.', 2, 15, 'Lista Duplamente Encadeada'),
(448, 'Qual é a principal diferença entre listas duplamente encadeadas e listas simplesmente encadeadas?', 'Listas duplamente encadeadas têm um ponteiro anterior.', 'Listas duplamente encadeadas não podem ser percorridas.', 'Listas duplamente encadeadas ocupam menos memória.', 'Listas duplamente encadeadas não permitem remoção.', 'Listas duplamente encadeadas têm um ponteiro anterior.', 2, 15, 'Lista Duplamente Encadeada'),
(449, 'Como você implementaria uma função para mesclar duas listas duplamente encadeadas ordenadas?', 'Percorrendo ambas as listas e inserindo os elementos em ordem.', 'Inserindo a segunda lista no início da primeira.', 'Copiando os valores em um array auxiliar e ordenando.', 'Multiplicando os valores dos nós.', 'Percorrendo ambas as listas e inserindo os elementos em ordem.', 3, 20, 'Lista Duplamente Encadeada'),
(450, 'Quais são as implicações de um ciclo em uma lista duplamente encadeada?', 'A lista pode ser percorrida indefinidamente.', 'Os nós serão removidos automaticamente.', 'Todos os nós terão valores duplicados.', 'A memória alocada para a lista será liberada.', 'A lista pode ser percorrida indefinidamente.', 3, 20, 'Lista Duplamente Encadeada'),
(451, 'Como você implementaria uma função recursiva para contar o número de nós em uma lista duplamente encadeada?', 'Chamando a si mesma para contar nós subsequentes, terminando na referência nula.', 'Utilizando um laço for.', 'Ordenando os nós antes de contar.', 'Usando uma estrutura de árvore.', 'Chamando a si mesma para contar nós subsequentes, terminando na referência nula.', 3, 20, 'Lista Duplamente Encadeada'),
(452, 'Qual é a principal dificuldade ao implementar a remoção de um nó com valor específico em uma lista duplamente encadeada?', 'Manter a integridade das referências do nó anterior e do próximo.', 'Encontrar o nó exato para remover.', 'Liberar corretamente a memória.', 'Atualizar todos os valores na lista.', 'Manter a integridade das referências do nó anterior e do próximo.', 3, 20, 'Lista Duplamente Encadeada'),
(453, 'Qual seria uma abordagem eficiente para inserir um nó em uma lista duplamente encadeada já ordenada?', 'Percorrer a lista até encontrar o ponto correto e inserir o novo nó.', 'Inserir no início e reordenar.', 'Inserir no final e reordenar.', 'Dividir a lista e inserir no meio.', 'Percorrer a lista até encontrar o ponto correto e inserir o novo nó.', 3, 20, 'Lista Duplamente Encadeada'),
(454, 'Por que a operação de concatenação de duas listas duplamente encadeadas pode ser custosa?', 'Porque é necessário percorrer toda a primeira lista até o final.', 'Porque os nós precisam ser duplicados.', 'Porque os ponteiros de todas as listas devem ser atualizados.', 'Porque os valores dos nós precisam ser comparados.', 'Porque é necessário percorrer toda a primeira lista até o final.', 3, 20, 'Lista Duplamente Encadeada'),
(455, 'Como você poderia detectar a presença de um ciclo em uma lista duplamente encadeada?', 'Usando o algoritmo de Floyd (tartaruga e lebre).', 'Percorrendo a lista duas vezes.', 'Usando uma pilha auxiliar para armazenar os nós.', 'Acessando o último nó diretamente.', 'Usando o algoritmo de Floyd (tartaruga e lebre).', 3, 20, 'Lista Duplamente Encadeada'),
(456, 'Quais são os cuidados necessários ao implementar uma lista duplamente encadeada em um ambiente de concorrência?', 'Garantir que as operações de inserção e remoção sejam atomicamente seguras.', 'Aumentar o número de nós.', 'Evitar o uso de ponteiros.', 'Duplicar os nós em threads diferentes.', 'Garantir que as operações de inserção e remoção sejam atomicamente seguras.', 3, 20, 'Lista Duplamente Encadeada'),
(457, 'Como você liberaria a memória de uma lista duplamente encadeada?', 'Percorrendo a lista e liberando a memória de cada nó.', 'Liberando apenas o primeiro nó.', 'Deixando que o sistema operacional faça a limpeza.', 'Apagando os valores sem liberar memória.', 'Percorrendo a lista e liberando a memória de cada nó.', 3, 20, 'Lista Duplamente Encadeada'),
(461, 'O que caracteriza uma pilha?', 'A operação LIFO (Last In, First Out).', 'A operação FIFO (First In, First Out).', 'Permite acesso aleatório aos elementos.', 'Os elementos são ordenados automaticamente.', 'A operação LIFO (Last In, First Out).', 1, 10, 'Pilha'),
(462, 'Qual operação é usada para adicionar um elemento a uma pilha?', 'Push.', 'Pop.', 'Peek.', 'Add.', 'Push.', 1, 10, 'Pilha'),
(463, 'Qual operação remove o elemento do topo de uma pilha?', 'Pop.', 'Push.', 'Top.', 'Remove.', 'Pop.', 1, 10, 'Pilha'),
(464, 'Como você acessa o elemento do topo de uma pilha sem removê-lo?', 'Usando a operação Peek.', 'Usando a operação Pop.', 'Usando a operação Push.', 'Não é possível acessar sem remover.', 'Usando a operação Peek.', 1, 10, 'Pilha'),
(465, 'Qual é a principal desvantagem de usar uma pilha?', 'Não permite acesso aleatório aos elementos.', 'É mais difícil de implementar.', 'Ocupa mais memória.', 'Não permite inserções dinâmicas.', 'Não permite acesso aleatório aos elementos.', 1, 10, 'Pilha'),
(466, 'Qual operação verifica se uma pilha está vazia?', 'IsEmpty.', 'IsFull.', 'Peek.', 'Pop.', 'IsEmpty.', 1, 10, 'Pilha'),
(467, 'Como você pode verificar o tamanho de uma pilha?', 'Contando os elementos durante operações de push e pop.', 'Usando uma operação específica.', 'Não é possível contar.', 'A pilha não tem tamanho fixo.', 'Contando os elementos durante operações de push e pop.', 1, 10, 'Pilha'),
(468, 'O que acontece se você tentar fazer um pop em uma pilha vazia?', 'Gera um erro ou exceção.', 'Retorna nulo.', 'Nada acontece.', 'Retorna zero.', 'Gera um erro ou exceção.', 1, 10, 'Pilha'),
(469, 'Como você pode esvaziar uma pilha?', 'Fazendo pop de todos os elementos.', 'Reinicializando.', 'Apenas removendo o topo.', 'Não é possível esvaziar uma pilha.', 'Fazendo pop de todos os elementos.', 1, 10, 'Pilha'),
(470, 'Qual é a complexidade de tempo para empilhar um elemento em uma pilha?', 'O(1).', 'O(n).', 'O(log n).', 'O(n^2).', 'O(1).', 2, 15, 'Pilha'),
(471, 'Qual é a complexidade de tempo para desempilhar um elemento de uma pilha?', 'O(1).', 'O(n).', 'O(log n).', 'O(n^2).', 'O(1).', 2, 15, 'Pilha'),
(472, 'Qual é a diferença entre uma pilha e uma fila?', 'Pilha usa LIFO, enquanto fila usa FIFO.', 'Ambas são as mesmas.', 'Pilha permite acesso aleatório, fila não.', 'Fila usa LIFO, enquanto pilha usa FIFO.', 'Pilha usa LIFO, enquanto fila usa FIFO.', 2, 15, 'Pilha'),
(473, 'Como você pode implementar uma pilha usando uma lista encadeada?', 'Criando nós que apontam para o próximo nó.', 'Usando um array fixo.', 'Não é possível.', 'Usando uma lista simplesmente encadeada apenas.', 'Criando nós que apontam para o próximo nó.', 2, 15, 'Pilha'),
(474, 'O que é uma pilha de chamadas?', 'Uma estrutura que armazena informações sobre as funções chamadas.', 'Uma pilha normal.', 'Uma fila de funções.', 'Uma lista de funções.', 'Uma estrutura que armazena informações sobre as funções chamadas.', 2, 15, 'Pilha'),
(475, 'Qual é a principal aplicação de pilhas?', 'Gerenciamento de chamadas de função e recursão.', 'Armazenar dados permanentemente.', 'Ordenar dados.', 'Acessar dados aleatoriamente.', 'Gerenciamento de chamadas de função e recursão.', 2, 15, 'Pilha');
INSERT INTO `perguntas` (`per_cod`, `pergunta`, `opcao_a`, `opcao_b`, `opcao_c`, `opcao_d`, `resposta_correta`, `per_nivel`, `per_pontos`, `per_tipo`) VALUES
(476, 'Como você reverte uma string usando uma pilha?', 'Empilhando os caracteres e desempilhando-os.', 'Acessando os índices.', 'Usando uma lista temporária.', 'Não é possível reverter.', 'Empilhando os caracteres e desempilhando-os.', 2, 15, 'Pilha'),
(477, 'Qual é a representação comum de uma pilha na memória?', 'Usando um array ou uma lista encadeada.', 'Apenas um array.', 'Apenas uma lista.', 'Uma árvore.', 'Usando um array ou uma lista encadeada.', 2, 15, 'Pilha'),
(478, 'O que é overflow em uma pilha?', 'Quando tenta empilhar em uma pilha cheia.', 'Quando a pilha está vazia.', 'Quando a pilha tem elementos duplicados.', 'Quando a pilha não tem limite.', 'Quando tenta empilhar em uma pilha cheia.', 2, 15, 'Pilha'),
(479, 'Como você implementaria uma função para verificar se uma expressão está balanceada usando pilhas?', 'Empilhando os parênteses e verificando no desempilhamento.', 'Contando os caracteres.', 'Usando um array.', 'Não é possível verificar.', 'Empilhando os parênteses e verificando no desempilhamento.', 3, 20, 'Pilha'),
(480, 'Qual é a complexidade de tempo para inverter uma pilha usando recursão?', 'O(n), onde n é o número de elementos.', 'O(1).', 'O(n^2).', 'O(log n).', 'O(n), onde n é o número de elementos.', 3, 20, 'Pilha'),
(481, 'Como você implementaria uma pilha mínima que sempre retorna o menor elemento?', 'Mantendo uma pilha auxiliar para os mínimos.', 'Ordenando a pilha sempre.', 'Usando listas encadeadas.', 'Não é possível.', 'Mantendo uma pilha auxiliar para os mínimos.', 3, 20, 'Pilha'),
(482, 'Qual é a principal dificuldade ao implementar uma pilha com tamanho fixo?', 'Gerenciar o overflow e underflow.', 'Aumentar o tamanho.', 'Remover elementos.', 'Acessar elementos aleatoriamente.', 'Gerenciar o overflow e underflow.', 3, 20, 'Pilha'),
(483, 'Como você implementaria uma função que retorna a soma dos elementos de uma pilha?', 'Usando recursão para desempilhar e somar.', 'Contando os elementos.', 'Multiplicando os elementos.', 'Não é possível somar.', 'Usando recursão para desempilhar e somar.', 3, 20, 'Pilha'),
(484, 'Qual é a principal aplicação de pilhas na programação?', 'Gerenciamento de chamadas de função e controle de fluxo.', 'Armazenar permanentemente dados.', 'Ordenar dados.', 'Armazenar dados temporariamente.', 'Gerenciamento de chamadas de função e controle de fluxo.', 3, 20, 'Pilha'),
(485, 'Como você pode criar uma pilha com suporte a múltiplos tipos de dados?', 'Usando uma estrutura que armazena dados como um objeto genérico.', 'Não é possível.', 'Usando apenas dados inteiros.', 'Usando apenas strings.', 'Usando uma estrutura que armazena dados como um objeto genérico.', 3, 20, 'Pilha'),
(486, 'Como lidar com exceções em uma pilha?', 'Usando blocos try/catch durante operações de push/pop.', 'Ignorando as exceções.', 'Sempre limpando a pilha.', 'Apenas logando erros.', 'Usando blocos try/catch durante operações de push/pop.', 3, 20, 'Pilha'),
(487, 'Qual é o efeito de chamar recursivamente uma função que usa pilhas?', 'Aumenta o uso da pilha de chamadas.', 'Diminui a eficiência.', 'Não tem efeito.', 'Cria uma nova pilha.', 'Aumenta o uso da pilha de chamadas.', 3, 20, 'Pilha');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
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
-- Índices de tabela `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`jor_cod`);

--
-- Índices de tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`per_cod`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`use_cod`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jornada`
--
ALTER TABLE `jornada`
  MODIFY `jor_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `per_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=488;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `use_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
