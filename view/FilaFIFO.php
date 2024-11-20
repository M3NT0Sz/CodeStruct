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
        <h1>Fila FIFO</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section class="video-container">
          <iframe src="https://www.youtube.com/embed/EtHZa8XJyYI?si=9tROhifSa7F33O7L" frameborder="0" allowfullscreen></iframe>
        </section>
      </section>

      <section class="textos">
        <h2>Introdução</h2>
        <p>
          FIFO, que significa "First In, First Out" (Primeiro a Entrar, Primeiro a Sair), é um conceito amplamente
          utilizado em ciência da computação, estruturas de dados e sistemas de filas. Em uma fila FIFO, os elementos
          são inseridos em uma extremidade (normalmente chamada de "cauda" ou "fundo") e removidos da outra extremidade
          (chamada de "cabeça" ou "frente"). Isso significa que o primeiro elemento a ser inserido na fila será
          o primeiro a ser removido, seguindo uma ordem cronológica de chegada.
        </p>
      </section>

      <section class="textos">
        <h2>Importância</h2>
        <p>
          A fila FIFO (First In, First Out) é importante por várias razões:
        </p>
        <ul>
          <li><b>Manutenção da Ordem:</b> Assegura que os elementos sejam processados na ordem em que foram inseridos,
            o que é crucial em sistemas onde a sequência de chegada deve ser preservada, como em filas de impressão ou
            gerenciamento de tarefas.</li>

          <li><b>Simplicidade e Eficiência:</b> A estrutura FIFO é fácil de entender e implementar, o que a torna ideal para
            organizar dados e processos de maneira eficiente e sem complexidade adicional.</li>

          <li><b>Gerenciamento em Redes:</b> Em redes de computadores, filas FIFO são usadas para organizar pacotes de dados,
            garantindo que sejam processados na ordem correta, o que é essencial para a integridade das comunicações
            e a sincronização dos dados.</li>

          <li><b>Distribuição Justa de Recursos:</b> Em sistemas operacionais, a FIFO ajuda a gerenciar recursos limitados,
            como tempo de CPU ou acesso a dispositivos, de forma que todos os processos tenham uma chance justa de serem executados.

          <li><b>Previsibilidade:</b> Fornece um comportamento previsível no processamento de tarefas, o que é importante para aplicações
            em tempo real e sistemas críticos, onde é necessário garantir que as tarefas sejam executadas na ordem correta.</li>
        </ul>
      </section>

      <section class="textos">
        <h2>Funcionamento</h2>
        <p>
          O funcionamento da fila FIFO (First In, First Out) é baseado em duas operações principais:
        </p>
        <ul>
          <li><b>Enqueue:</b> Esta operação adiciona um novo elemento à fila. O elemento é inserido na cauda ou fundo da fila.
            O novo item se torna o último na fila.</li>
          <li><b>Dequeue:</b> Esta operação remove um elemento da fila. O elemento removido é sempre o que está na
            cabeça ou frente da fila, ou seja, o primeiro a ter sido adicionado.</li>
        </ul>
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Fifo_queue.png"
          alt="Estrutura de uma Fila FIFO" />
      </section>

      <section class="textos">
        <h2>Exemplo de Código em C#</h2>
        <p>
          Vamos examinar um exemplo de código em C# que demonstra como
          implementar uma fila FIFO. Vamos dividir o
          código em partes para melhor compreensão.
        </p>

        <h3>Definição do Nó</h3>
        <p>O primeiro passo é definir a estrutura do nó da fila:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
public class No
{
    public int Valor; // Valor armazenado no nó
    public No Proximo; // Ponteiro para o próximo nó
            
    public No(int valor)
    {
        Valor = valor;
        Proximo = null;
    }
}
              </code></pre>
        </section>
        <p>
          Neste trecho, definimos a classe <code>No</code> que contém um valor
          e um ponteiro para o próximo nó.
        </p>

        <h3>Definição da Fila</h3>
        <p>
          Em seguida, definimos a classe <code>Fila</code> que gerencia a
          fila:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public class Fila
{
    private No head; // Primeiro da fila (cabeça)
    private No tail; // Último da fila (cauda)
    private int size; // Tamanho da fila

    public Fila()
    {
        head = null;
        tail = null;
        size = 0;
    }
}
            </code></pre>
        </section>
        <p>
          Aqui, estamos declarando os ponteiros <code><b>head</b></code> e
          <code><b>tail</b></code> que apontam para o início e o fim da fila,
          respectivamente.
        </p>

        <h3>Método Enqueue</h3>
        <p>
          O método <code>Enqueue</code> adiciona um novo nó ao final da
          fila:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
// Método para adicionar um item no final da fila (enqueue)
public void Enqueue(int valor)
{
    No newNo = new No(value);

    if (tail == null)
    {
        head = newNo;
        tail = newNo;
    }
    else
    {
        tail.Next = newNo;
        tail = newNo;
    }

    size++;
}
              </code></pre>
        </section>
        <p>
          Este método cria um novo nó e o adiciona ao final da fila. Se a fila
          estiver vazia, o novo nó também se torna o <code>head</code>.
        </p>

        <h3>Método Dequeue</h3>
        <p>
          O método <code>Dequeue</code> remove e retorna o nó do início
          da fila:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public int Dequeue()
{
    if (head == null)
    {
        throw new InvalidOperationException("A fila está vazia.");
    }

    int valor = head.Value;
    head = head.Next;

    if (head == null)
    {
        tail = null;
    }

    size--;
    return valor;
}
              </code></pre>
        </section>
        <p>
          Este método remove o nó do início da fila e retorna o valor
          armazenado. Se a fila se tornar vazia após a remoção, o ponteiro
          <code>tail</code> é atualizado para <code>null</code>.
        </p>

        <h3>isEmpty</h3>
        <p>
          Verifica se a fila está vazia:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public bool IsEmpty()
{
    return size == 0;
}

              </code></pre>
        </section>
        <p>
          O método IsEmpty retorna <b>true</b> se o tamanho da fila for 0, ou seja, a fila está vazia.
        </p>

        <h3>Size</h3>
        <p>
          Retorna o tamanho da fila:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public int Size()
{
    return size;
}

              </code></pre>
        </section>
        <p>
          O método Size retorna o número de elementos atualmente presentes na fila.
        </p>

        <h3>Peek</h3>
        <p>
          Verifica o primeiro elemento da fila sem removê-lo:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public int Peek()
{
    if (front == null)
    {
        throw new InvalidOperationException("A fila está vazia.");
    }

    return front.Value;
}
              </code></pre>
        </section>
        <p>
          O método Peek permite que você veja o valor do primeiro nó na fila, sem removê-lo.
          Se a fila estiver vazia, ele lança uma exceção.
        </p>

        <h3>Exemplo de Uso</h3>
        <p>Por fim, um exemplo de como utilizar a fila:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
public class Program
{
    public static void Main(string[] args)
    {
        Lista lista = new Lista();

        lista.Enqueue(10);
        lista.Enqueue(20);
        lista.Enqueue(30);

        Console.WriteLine($"Tamanho da fila: {Lista.Size()}");
        Console.WriteLine($"Primeiro da fila: {Lista.Peek()}");

        Console.WriteLine($"Removido da fila: {Lista.Dequeue()}");
        Console.WriteLine($"Primeiro da fila após remoção: {Lista.Peek()}");

        Console.WriteLine($"Fila está vazia? {Lista.IsEmpty()}");
    }
}

              </code></pre>
        </section>
        <p>
          Neste exemplo, criamos uma nova fila, enfileiramos três elementos e
          depois removemos o primeiro da fila um por um até a fila acabar.
        </p>
      </section>

      <section class="textos">
        <h2>Conclusão</h2>
        <p>
          A fila FIFO é uma solução ideal para problemas que requerem a preservação da ordem de processamento dos elementos.
          Sua simplicidade e eficiência tornam-na uma das estruturas de dados mais úteis em computação, sendo indispensável
          em cenários onde a ordem de entrada precisa ser respeitada.
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