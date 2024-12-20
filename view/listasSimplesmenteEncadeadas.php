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
        <h1>Listas Simplesmente Encadeadas</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section class="video-container">
          <iframe
            src="https://www.youtube.com/embed/bqwIoNiHAuQ?si=AHYhT-lLrGOjG0K-"
            frameborder="0"
            allowfullscreen></iframe>
        </section>
      </section>
      <section class="textos">
        <h2>Introdução</h2>
        <p>
          As listas simplesmente encadeadas são uma das estruturas de dados
          mais básicas e fundamentais na ciência da computação. Em uma lista
          simplesmente encadeada, cada nó contém um valor e um ponteiro para o
          próximo nó da sequência. Essa estrutura permite a inserção e remoção
          de elementos de forma eficiente.
        </p>
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Singly-linked-list.svg"
          alt="Estrutura de uma lista simplesmente encadeada" />
      </section>

      <section class="textos">
        <h2>Importância</h2>
        <p>
          Listas simplesmente encadeadas são amplamente utilizadas em diversas
          aplicações devido à sua simplicidade e eficiência. Elas são
          especialmente úteis em situações onde as operações de inserção e
          remoção são frequentes, como em implementações de filas e pilhas,
          bem como em algoritmos que requerem uma estrutura de dados dinâmica.
        </p>
        <p>
          Em comparação com arrays, as listas simplesmente encadeadas têm a
          vantagem de não precisar de um tamanho fixo no momento da criação.
          Isso as torna uma escolha ideal para aplicações onde o número de
          elementos é desconhecido ou varia frequentemente.
        </p>
      </section>

      <section class="textos">
        <h2>Funcionamento</h2>
        <p>
          Uma lista simplesmente encadeada é composta por nós, onde cada nó
          contém dois componentes principais:
        </p>
        <ul>
          <li>O valor armazenado.</li>
          <li>Um ponteiro para o próximo nó.</li>
        </ul>
      </section>

      <section class="textos">
        <h2>Exemplo de Código em C#</h2>
        <p>
          Vamos agora examinar um exemplo de código em C# que demonstra como
          implementar uma lista simplesmente encadeada. Vamos dividir o código
          em partes para melhor compreensão.
        </p>

        <h3>Definição do Nó</h3>
        <p>O primeiro passo é definir a estrutura do nó da lista:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
  public class Node
  {
      public int Value; // Valor armazenado no nó
      public Node Next; // Ponteiro para o próximo nó
      
      public Node(int value)
      {
          Value = value;
          Next = null;
      }
  }
                  </code></pre>
        </section>
        <p>
          Neste trecho, definimos a classe <code>Node</code> que contém um
          valor e um ponteiro para o próximo nó.
        </p>

        <h3>Definição da Lista Simplesmente Encadeada</h3>
        <p>
          Em seguida, definimos a classe <code>SinglyLinkedList</code> que
          gerencia a lista:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
  public class SinglyLinkedList
  {
      private Node head; // Ponteiro para o primeiro nó da lista
  
      public SinglyLinkedList()
      {
          head = null;
      }
  }
                  </code></pre>
        </section>
        <p>
          Aqui, estamos declarando o ponteiro <code>head</code> que aponta
          para o início da lista.
        </p>

        <h3>Método para Adicionar Nó ao Final da Lista</h3>
        <p>
          O método <code>AddToEnd</code> adiciona um novo nó ao final da
          lista:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
  public void AddToEnd(int value)
  {
      Node newNode = new Node(value);
      if (head == null)
      {
          head = newNode;
      }
      else
      {
          Node current = head;
          while (current.Next != null)
          {
              current = current.Next;
          }
          current.Next = newNode;
      }
  }
                  </code></pre>
        </section>
        <p>
          Este método cria um novo nó e o adiciona ao final da lista,
          percorrendo a lista a partir do <code>head</code> até encontrar o
          último nó.
        </p>

        <h3>Método para Imprimir a Lista</h3>
        <p>
          O método <code>PrintList</code> percorre a lista e imprime os
          valores de cada nó:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
  public void PrintList()
  {
      Node current = head;
      while (current != null)
      {
          Console.Write(current.Value + " ");
          current = current.Next;
      }
      Console.WriteLine();
  }
                  </code></pre>
        </section>
        <p>
          Este método percorre a lista a partir do <code>head</code> e imprime
          os valores de cada nó até chegar ao final da lista.
        </p>

        <h3>Exemplo de Uso</h3>
        <p>
          Por fim, um exemplo de como usar a lista simplesmente encadeada:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
  // Exemplo de uso
  SinglyLinkedList list = new SinglyLinkedList();
  list.AddToEnd(1);
  list.AddToEnd(2);
  list.AddToEnd(3);
  list.PrintList();
                  </code></pre>
        </section>
        <p>
          Este exemplo cria uma nova lista simplesmente encadeada, adiciona
          três nós e imprime os valores da lista.
        </p>
      </section>
      <section class="textos">
        <h2>Conclusão</h2>
        <p>
          Listas simplesmente encadeadas são uma estrutura de dados versátil e
          eficiente, adequada para uma variedade de aplicações em ciência da
          computação. Sua simplicidade de implementação e eficiência nas
          operações de inserção e remoção as tornam uma escolha popular entre
          os desenvolvedores e engenheiros de software. Embora as listas
          simplesmente encadeadas tenham algumas limitações, como a navegação
          unidirecional, elas ainda são extremamente úteis em muitos
          contextos.
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