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
        <h1>Pilha</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section>
          <iframe
            src="https://www.youtube.com/embed/nHF_pgep9qE?si=3pCoFkR9hapfcsGP" frameborder="0" allowfullscreen></iframe>
        </section>
      </section>

      <section class="textos">
        <h2>Introdução</h2>
        <p>
          Uma pilha é uma estrutura de dados que segue o princípio LIFO (Last In, First Out - Último a Entrar, Primeiro a Sair).
          Isso significa que o último elemento adicionado à pilha será o primeiro a ser removido. É como o exemplo de uma pilha
          de pratos, onde você adiciona novos pratos no topo e remove o prato do topo quando precisa.
        </p>
      </section>

      <section class="textos">
        <h2>Importância</h2>
        <p>
          A pilha é uma estrutura de dados crucial na ciência da computação devido às suas
          características de último a entrar, primeiro a sair (LIFO). Aqui estão os principais pontos sobre sua importância:
        </p>
        <ul>
          <li><b>Gerenciamento de Chamadas de Função:</b> Utilizada para gerenciar a pilha de chamadas de funções e recursão.</li>
          <li><b>Execução de Algoritmos:</b> Fundamental em algoritmos como busca em profundidade e alguns algoritmos de ordenação.</li>
          <li><b>Desfazer e Refazer:</b> Implementa funcionalidades de desfazer e refazer em aplicativos.
          <li><b>Avaliação de Expressões:</b> Auxilia na avaliação de expressões matemáticas em notação polonesa e pós-fixada.
          <li><b>Backtracking:</b> Usada em problemas de backtracking, como resolução de labirintos.
          <li><b>Gerenciamento de Recursos:</b> Ajuda a gerenciar alocações temporárias de memória e estados do sistema.
        </ul>
      </section>

      <section class="textos">
        <h2>Funcionamento</h2>
        <p>
          Uma pilha é uma estrutura de dados que segue o princípio LIFO (Last In, First Out - Último a Entrar, Primeiro a Sair),
          onde o último elemento adicionado é o primeiro a ser removido. Ela suporta operações básicas como push
          (adicionar um item ao topo), pop (remover o item do topo), e peek (visualizar o item do topo sem removê-lo).
        </p>
        <p>
          Além disso, uma pilha pode verificar se está vazia com a operação estaVazia. Geralmente, é implementada usando arrays
          ou listas encadeadas. Suas principais aplicações incluem o gerenciamento de chamadas de função e recursão, execução de
          algoritmos como busca em profundidade, e funcionalidades de desfazer e refazer em aplicativos. A pilha é fundamental
          por sua simplicidade e eficiência em organizar e controlar o fluxo de dados e operações.
        </p>
        <img
          style="width: 50%;"
          src="https://upload.wikimedia.org/wikipedia/commons/5/56/QUEUE_VS_STACK.svg"
          alt="Exemplo de TAD com diferentes implementações" />
        <p>
          Na imagem é apresentado a diferença entre Fila (Queue) e Pilha (Stack). No exemplo, o primeiro elemento
          da Fila FIFO a chegar é o primeiro a sair dela enquanto a Pilha que o último elemento a chegar é o primeiro elemento a sair.
        </p>
      </section>

      <section class="textos">
        <h2>Exemplo de Código em C#</h2>
        <p>
          Vamos examinar um exemplo de código em C# que demonstra como
          implementar uma Pilha. Vamos dividir o
          código em partes para melhor compreensão.
        </p>

        <h3>Atributos</h3>
        <p>
          <li>Elementos</li>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
private int[] elementos;
              </code></pre>
        </section>
        <p>
          Um array de inteiros que armazena os elementos da pilha. O tamanho do array é definido quando a pilha é criada.
        </p>

        <p>
          <li>Topo</li>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
private int topo;
              </code></pre>
        </section>
        <p>
          Um índice que aponta para o último elemento inserido na pilha. Ele começa em -1, o que indica que a pilha está vazia.
        </p>

        <h3>Construtor</h3>
        <p>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public Pilha(int tamanho)
{
    elementos = new int[tamanho];
    topo = -1;
}
              </code></pre>
        </section>
        <p>
          O construtor inicializa o array com um tamanho definido pelo usuário e define topo como -1 (inicialmente vazio).
        </p>

        <h3>Métodos</h3>
        <p>
          <li>Push</li>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public void Push(int item)
{
    if (topo == elementos.Length - 1)
    {
        throw new InvalidOperationException("A pilha está cheia.");
    }
    elementos[++topo] = item;
    Console.WriteLine($"{item} foi empilhado.");
}
              </code></pre>
        </section>
        <p>
          Este método adiciona um novo elemento no topo da pilha. Antes de adicionar o elemento, ele verifica
          se a pilha está cheia. Se estiver cheia, uma exceção é lançada. Caso contrário, o valor é armazenado
          no próximo índice da pilha, incrementando <b>topo</b>.
        </p>
        <p>
          <b>++topo:</b> Primeiro incrementa topo, depois usa o valor incrementado para armazenar o item.
        </p>
        <p>
          <b>Exceção:</b> InvalidOperationException é lançada se a pilha estiver cheia.
        </p>

        <p>
          <li>Pop</li>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public int Pop()
{
    if (EstaVazia())
    {
        throw new InvalidOperationException("A pilha está vazia.");
    }
    int item = elementos[topo--];
    Console.WriteLine($"{item} foi desempilhado.");
    return item;
}
              </code></pre>
        </section>
        <p>
          Remove e retorna o elemento no topo da pilha. Se a pilha estiver vazia, ele lança uma exceção.
        </p>
        <p>
          <b>topo--:</b> Primeiro armazena o valor no topo, depois decrementa <b>topo</b>.
        </p>
        <p>
          <b>Exceção:</b> <b>InvalidOperationException</b> é lançada se a pilha estiver vazia.
        </p>

        <p>
          <li>Peek</li>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public int Peek()
{
    if (EstaVazia())
    {
        throw new InvalidOperationException("A pilha está vazia.");
    }
    return elementos[topo];
}
              </code></pre>
        </section>
        <p>
          Retorna o elemento no topo da pilha sem removê-lo. Se a pilha estiver vazia, ele lança uma exceção.
        </p>
        <p>
          <b>Exceção:</b> <b>InvalidOperationException</b> é lançada se a pilha estiver vazia.
        </p>

        <p>
          <li>EstaVazia</li>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public bool EstaVazia() => topo == -1;
              </code></pre>
        </section>
        <p>
          Verifica se a pilha está vazia retornando <b>true</b> se o índice <b>topo</b> for -1.
        </p>

        <p>
          <li>EstaVazia</li>
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public int Tamanho() => topo + 1;
              </code></pre>
        </section>
        <p>
          Retorna o número de elementos presentes na pilha. Como o topo começa em -1, o número de elementos é <b>topo + 1</b>.
        </p>

        <h3>Exemplo de Uso</h3>
        <p>Por fim, um exemplo de como usar a fila:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
using System;

class Program
{
    static void Main()
    {
        Pilha pilha = new Pilha(3);

        try
        {
            pilha.Push(10);
            pilha.Push(20);
            pilha.Push(30);

            Console.WriteLine($"Elemento no topo: {pilha.Peek()}");  // 30
            Console.WriteLine($"Tamanho da pilha: {pilha.Tamanho()}"); // 3

            pilha.Pop();
            Console.WriteLine($"Elemento no topo após desempilhar: {pilha.Peek()}"); // 20

            // Tentativa de adicionar mais elementos após atingir a capacidade
            pilha.Push(40);  // Empilha 40

            // Tentando empilhar em uma pilha cheia
            pilha.Push(50);  // Lança uma exceção
        }
        catch (InvalidOperationException ex)
        {
            Console.WriteLine($"Erro: {ex.Message}");
        }
    }
}
              </code></pre>
        </section>
        <p>
          Neste exemplo, criamos uma nova fila, enfileiramos dois elementos e
          depois desenfileiramos e imprimimos esses elementos.
        </p>
      </section>

      <section class="textos">
        <h2>Conclusão</h2>
        <p>
          A pilha é uma estrutura de dados essencial que opera com base no princípio LIFO (Last In, First Out),
          onde o último elemento adicionado é o primeiro a ser removido. Com operações básicas como push (adicionar),
          pop (remover) e peek (visualizar o topo), além da verificação de vazio, a pilha é fundamental para o
          gerenciamento de chamadas de função, execução de algoritmos e implementação de funcionalidades de desfazer e refazer.
          Sua simplicidade e eficiência a tornam crucial para organizar e controlar dados temporários e estados em
          muitos contextos de programação e sistemas computacionais.
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