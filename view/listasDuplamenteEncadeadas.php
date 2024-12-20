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
        <h1>Listas Duplamente Encadeadas</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section>
          <iframe
            src="https://www.youtube.com/embed/RCWPih5bEVs?si=SyOvsphKEsONM_pU"
            frameborder="0"
            allowfullscreen></iframe>
        </section>
      </section>
      <section class="textos">
        <h2>Introdução</h2>
        <p>
          As listas duplamente encadeadas são uma estrutura de dados
          fundamental na ciência da computação. Ao contrário das listas
          simplesmente encadeadas, onde cada nó aponta apenas para o próximo
          nó, as listas duplamente encadeadas permitem a navegação nos dois
          sentidos, pois cada nó aponta tanto para o próximo quanto para o nó
          anterior.
        </p>
      </section>

      <section class="textos">
        <h2>Importância</h2>
        <p>
          Essa estrutura de dados é extremamente útil em diversos cenários,
          como na implementação de navegadores de páginas da web (para ir e
          voltar entre as páginas), em editores de texto (para desfazer e
          refazer ações) e em várias outras aplicações onde é necessário
          navegar bidirecionalmente através dos dados. A possibilidade de
          navegação nos dois sentidos aumenta a flexibilidade e eficiência em
          operações de inserção e remoção de elementos.
        </p>
      </section>

      <section class="textos">
        <h2>Funcionamento</h2>
        <p>
          Uma lista duplamente encadeada é composta por nós, onde cada nó
          contém três componentes principais:
        </p>
        <ul>
          <li>O valor armazenado.</li>
          <li>Um ponteiro para o próximo nó.</li>
          <li>Um ponteiro para o nó anterior.</li>
        </ul>
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Doubly-linked-list.svg"
          alt="Estrutura de uma lista duplamente encadeada" />
        <p>
          Nesta imagem, cada caixa representa um nó da lista, onde os
          ponteiros para frente e para trás conectam os nós em ambas as
          direções.
        </p>
      </section>

      <section class="textos">
        <h2>Vantagens e Desvantagens</h2>
        <h3>Vantagens</h3>
        <ul>
          <li>
            Navegação bidirecional: Permite mover-se para frente e para trás
            na lista.
          </li>
          <li>
            Remoção eficiente: A remoção de um nó pode ser feita facilmente,
            dado o nó a ser removido.
          </li>
        </ul>
        <h3>Desvantagens</h3>
        <ul>
          <li>
            Maior uso de memória: Cada nó armazena um ponteiro adicional para
            o nó anterior.
          </li>
          <li>
            Complexidade de implementação: Mais complexa de implementar em
            comparação com listas simplesmente encadeadas.
          </li>
        </ul>
      </section>

      <section class="textos">
        <h2>Exemplo de Código em C#</h2>
        <p>
          Vamos agora examinar um exemplo de código em C# que demonstra como
          implementar uma lista duplamente encadeada. Vamos dividir o código
          em partes para melhor compreensão.
        </p>

        <h3>Definição do Nó</h3>
        <p>O primeiro passo é definir a estrutura do nó da lista:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
  public class Node
  {
      public int Value;
      public Node Next;
      public Node Previous;
      
      public Node(int value)
      {
          Value = value;
          Next = null;
          Previous = null;
      }
  }
                  </code></pre>
        </section>
        <p>
          Neste trecho, definimos a classe <code>Node</code> que contém um
          valor, um ponteiro para o próximo nó e um ponteiro para o nó
          anterior.
        </p>

        <h3>Definição da Lista Duplamente Encadeada</h3>
        <p>
          Em seguida, definimos a classe <code>DoublyLinkedList</code> que
          gerencia a lista:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
  public class DoublyLinkedList
  {
      private Node head;
      private Node tail;
  
      public DoublyLinkedList()
      {
          head = null;
          tail = null;
      }
  }
                  </code></pre>
        </section>
        <p>
          Aqui, estamos declarando os ponteiros <code>head</code> e
          <code>tail</code> que apontam para o início e o fim da lista,
          respectivamente.
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
          tail = newNode;
      }
      else
      {
          tail.Next = newNode;
          newNode.Previous = tail;
          tail = newNode;
      }
  }
                  </code></pre>
        </section>
        <p>
          Este método cria um novo nó e o adiciona ao final da lista,
          atualizando os ponteiros <code>Next</code> e
          <code>Previous</code> conforme necessário.
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
        <p>Por fim, um exemplo de como usar a lista duplamente encadeada:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
  // Exemplo de uso
  DoublyLinkedList list = new DoublyLinkedList();
  list.AddToEnd(1);
  list.AddToEnd(2);
  list.AddToEnd(3);
  list.PrintList();
                  </code></pre>
        </section>
        <p>
          Este exemplo cria uma nova lista duplamente encadeada, adiciona três
          nós e imprime os valores da lista.
        </p>
      </section>
      <section class="textos">
        <h2>Conclusão</h2>
        <p>
          Listas duplamente encadeadas são uma estrutura de dados versátil e
          eficiente, adequada para uma variedade de aplicações em ciência da
          computação. Sua capacidade de navegação bidirecional e operações
          eficientes de inserção e remoção as tornam uma escolha popular em
          muitos contextos. Apesar de serem um pouco mais complexas que as
          listas simplesmente encadeadas, suas vantagens frequentemente
          superam as desvantagens, especialmente em situações onde é
          necessária uma navegação mais flexível pelos dados.
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