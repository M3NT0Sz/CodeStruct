<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="shortcut icon" href="./Imagens/Logo.png" type="image/x-icon" />
  <title>CodeStruct</title>
</head>

<body>
  <header class="navbar">
    <a href="../index.php">
      <img src="./Imagens/Logo.png" />
      <h1>CodeStruct</h1>
    </a>

    <ul>
      <h3>
        <li onclick="toggleDropdown()" style="cursor: pointer;">
          <a href="#">
            Conteúdos
          </a>
          <ul id="myDropdown" class="dropdown-content">
            <li><a href="./tipoAbstratoDados.php">TAD</a></li>
            <li><a href="./listasSimplesmenteEncadeadas.php">Listas Simplesmente Encadeadas</a></li>
            <li><a href="./listasDuplamenteEncadeadas.php">Listas Duplamente Encadeadas</a></li>
            <li><a href="./FilaFIFO.php">Fila FIFO</a></li>
            <li><a href="./FilaDePrioridade.php">Fila de Prioridade</a></li>
            <li><a href="./Pilha.php">Pilha</a></li>
            <li><a href="./ArvoreBinaria.php">Árvore Binária</a></li>
            <li><a href="./ArvoreB.php">Árvore B</a></li>
            <li><a href="./ArvoreTrie.php">Árvore Trie</a></li>
            <li><a href="./ArvoreAVL.php">Árvore AVL</a></li>
            <li><a href="./ArvoreRubroNegra.php">Árvore Rubro-Negra</a></li>
          </ul>
        </li>
      </h3>
      <h3>
        <li>
          <?php
          if ($_SESSION['logado'] != null) {
          ?>
            <a href="./jornada.php">
              Jornada
            </a>
          <?php
          } else {
          ?>
            <a href="./login.php">
              Jornada
            </a>
          <?php
          }
          ?>
        </li>
      </h3>
      <h3>
        <?php
        if (isset($_SESSION['logado']) != "") {
        ?>
          <li>
            <a href="./model/processamento.php">
              Sair
            </a>
          </li>
        <?php
        } else {
        ?>
          <li>
            <a href="./login.php">
              Entrar
            </a>
          </li>
        <?php
        }
        ?>
      </h3>
    </ul>

    <input type="checkbox" class="checkbox" id="chk" />
    <label class="label" for="chk">
      <i class="fas fa-moon"></i>
      <i class="fas fa-sun"></i>
      <div class="bola"></div>
    </label>
    <script src="./JS/script.js"></script>
    <script src="https://kit.fontawesome.com/5bcdea54fd.js" crossorigin="anonymous"></script>
  </header>

  <section class="tela">
    <section class="tela80">
      <header class="pagNome">
        <h1>Fila de Prioridade</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section>
          <iframe
            src="https://www.youtube.com/embed/0CcMXlRcciA?si=JvoJ3f9Z5GI8qsws"
            frameborder="0"
            allowfullscreen></iframe>
        </section>
      </section>

      <section class="textos">
        <h2>Introdução</h2>
        <p>
          Uma fila de prioridade é uma estrutura de dados que gerencia uma coleção de elementos, onde cada elemento
          tem uma "prioridade" associada. Ao contrário de uma fila comum (FIFO – First In, First Out), em uma fila
          de prioridade os elementos são removidos com base em sua prioridade, e não necessariamente na ordem de inserção.
          Elementos com prioridade mais alta são atendidos antes daqueles com prioridade mais baixa.
        </p>
      </section>

      <section class="textos">
        <h2>Importância</h2>
        <p>
          A fila de prioridade é importante porque permite organizar e processar tarefas de acordo com sua urgência.
          Isso otimiza o uso de recursos, melhora o tempo de resposta em sistemas críticos, e é fundamental em
          algoritmos e aplicações como sistemas operacionais, roteamento de redes e atendimento de emergências.
          Ela garante que tarefas mais importantes sejam realizadas primeiro, melhorando a eficiência e a
          justiça no processamento de eventos.
        </p>
      </section>

      <section class="textos">
        <h2>Funcionamento</h2>
        <p>
          Uma fila de prioridade funciona gerenciando uma coleção de itens onde cada item possui uma prioridade associada.
          O funcionamento básico pode ser descrito em três etapas principais:
        </p>
        <ul>
          <li><b>Inserção:</b> Quando um novo item é adicionado à fila, ele é inserido com uma prioridade específica.
            Dependendo da implementação, o item pode ser inserido em uma posição que mantém a ordem de prioridades.</li>

          <li><b>Manutenção da ordem de prioridade:</b> Internamente, a fila mantém a ordem dos itens de acordo com suas prioridades.
            Se a prioridade é mais alta (ou menor número, dependendo da definição), o item é posicionado de forma que possa ser
            removido antes dos itens com prioridades mais baixas.</li>

          <li><b>Remoção:</b> O item com a maior prioridade (ou a prioridade mais alta) é removido primeiro.
            Isso garante que os itens mais importantes sejam processados antes dos menos importantes.</li>
        </ul>
        <img
          style="width: 50%;"
          src="https://upload.wikimedia.org/wikipedia/commons/8/86/Priority.PNG"
          alt="Estrutura de uma Fila de Prioridade" />
      </section>

      <section class="textos">
        <h2>Exemplo de Código em C#</h2>
        <p>
          Vamos examinar um exemplo de código em C# que demonstra como
          implementar uma Fila de Prioridade. Vamos dividir o
          código em partes para melhor compreensão.
        </p>

        <h3>Criação da Fila de Prioridade</h3>
        <p>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
var filaDeChamados = new PriorityQueue<string, int>();
              </code></pre>
        </section>
        <p>
          Cria uma fila de prioridade para armazenar os chamados.
        </p>

        <h3>Adição de Chamados de Prioridade</h3>
        <p>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
filaDeChamados.Enqueue("Erro no servidor - Crítico", 1);   // Prioridade 1 (mais alta)
filaDeChamados.Enqueue("Problema com a rede - Importante", 2);
filaDeChamados.Enqueue("Solicitação de melhoria - Comum", 3);   // Prioridade 3 (mais baixa)
              </code></pre>
        </section>
        <p>
          Adiciona três chamados com diferentes níveis de prioridade.
        </p>

        <h3>Processamento dos Chamados</h3>
        <p>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
while (filaDeChamados.Count > 0)
{
    var chamado = filaDeChamados.Dequeue(); // Remove e obtém o chamado com a maior prioridade
    Console.WriteLine($"Atendendo chamado: {chamado}");
}
              </code></pre>
        </section>
        <p>
          O loop <b>while</b> continua executando enquanto a fila (filaDeChamados) não estiver vazia (Count > 0).
          O método Count retorna o número de itens na fila de prioridade.
          Quando todos os chamados forem processados e a fila estiver vazia, o loop termina.
        </p>

        <h3>Exemplo de Uso</h3>
        <p>Por fim, um exemplo de como usar a Fila de Prioridade:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
class SuporteTecnico
{
    static void Main()
    {
        // Criação da fila de prioridade
        var filaDeChamados = new PriorityQueue<string, int>();

        // Adicionando chamados com suas prioridades
        filaDeChamados.Enqueue("Erro no servidor - Crítico", 1);  // Prioridade 1 (mais alta)
        filaDeChamados.Enqueue("Problema com a rede - Importante", 2);
        filaDeChamados.Enqueue("Solicitação de melhoria - Comum", 3);    // Prioridade 3 (mais baixa)

        // Processamento dos chamados de acordo com a prioridade
        Console.WriteLine("Iniciando o atendimento dos chamados:\n");
        
        while (filaDeChamados.Count > 0)
        {
            var chamado = filaDeChamados.Dequeue(); // Remove e obtém o chamado com a maior prioridade
            Console.WriteLine($"Atendendo chamado: {chamado}");
        }
    }
}
              </code></pre>
        </section>
        <p>
          Neste exemplo, criamos um sistema de suporte técnico que adiciona chamados com diferentes prioridades
          e processamos eles conforme a urgência.
        </p>
      </section>

      <section class="textos">
        <h2>Conclusão</h2>
        <p>
          A fila de prioridade é uma estrutura de dados essencial que organiza e processa elementos com base em suas prioridades,
          em vez da ordem de chegada. Ela permite que itens mais importantes sejam tratados antes dos menos importantes,
          otimizando a alocação de recursos e melhorando o tempo de resposta. Utilizada em diversas aplicações, desde sistemas
          operacionais até algoritmos de roteamento e suporte técnico, a fila de prioridade garante que a ordem de execução reflita
          a urgência e a importância dos itens. Suas diferentes implementações, como heaps binários ou listas ordenadas, oferecem
          eficiência e flexibilidade, tornando-a uma ferramenta crucial para gerenciar tarefas e eventos críticos de maneira eficaz.
        </p>
        <p>
        </p>
      </section>
    </section>
  </section>
  <footer class="rodape">
    <p>
      Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas - AMS
    </p>
    <p>Copyright &copy; 2024 - Todos os direitos reservados</p>
  </footer>
</body>

</html>