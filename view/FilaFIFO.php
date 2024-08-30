<?php
  session_start();
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
          <a href="./jornada.php">
            Jornada
          </a>
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
        <section class="video">
          <h2>Vídeo Explicativo</h2>
          <section>
            <iframe
              src="https://www.youtube.com/embed/EtHZa8XJyYI?si=9tROhifSa7F33O7L"
              frameborder="0"
              allowfullscreen
            ></iframe>
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
            alt="Estrutura de uma fila FIFO"
          />
          <p>
            Nesta imagem, todo novo elemento é adicionado ao final da fila pela operação Enqueue 
            e posteriormente todo elemento que fica no iníco da fila é removido pela operação Dequeue.
          </p>
        </section>

        <section class="textos">
        <h2>Vantagens e Desvantagens</h2><br>
        <h3>Vantagens</h3>
        <ul>
          <li>
            Simples e Intuitiva: Fácil de entender e implementar.
          </li>
          <li>
            Mantém a Ordem: Processa itens na ordem em que foram adicionados.
          </li>
          <li>
            Justiça: Distribui recursos de forma equitativa.
          </li>
          <li>
            Previsibilidade: Comportamento previsível, essencial para sistemas críticos.
          </li>
          <li>
            Facilidade de Implementação: Simples de implementar usando listas encadeadas ou arrays circulares.
          </li>
        </ul>
        <h3>Desvantagens</h3>
        <ul>
          <li>
            Sobrecarregamento: Pode consumir muita memória se a fila crescer demais.
          </li>
          <li>
            Sem Prioridades: Não permite tratamento diferencial de itens com base em urgência.
          </li>
          <li>
            Desperdício de Recursos: Pode ser ineficiente em alguns cenários.
          </li>
          <li>
            Não Adaptável: Não é ideal para situações que exigem reordenação ou gerenciamento complexo.
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
