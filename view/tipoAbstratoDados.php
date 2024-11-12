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
        <h1>Tipo Abstrato de Dados</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section class="video-container">
          <iframe src="https://www.youtube.com/embed/06PJrmeG784?si=foy7GeAu2oTJ1cae" frameborder="0" allowfullscreen></iframe>
        </section>
      </section>

      <section class="textos">
        <h2>Introdução</h2>
        <p>
          Os Tipos Abstrato de Dados (TAD) são conceitos fundamentais na
          ciência da computação que definem estruturas de dados de maneira
          abstrata, independentemente de implementações específicas. Um TAD
          especifica um conjunto de valores possíveis e um conjunto de
          operações que podem ser realizadas sobre esses valores, permitindo
          que os desenvolvedores se concentrem em como usar a estrutura de
          dados em vez de como ela é implementada.
        </p>
      </section>

      <section class="textos">
        <h2>Importância</h2>
        <p>
          Os TADs são cruciais para o desenvolvimento de software robusto e
          eficiente, pois promovem a reutilização de código e a modularidade.
          Eles permitem que programadores definam e utilizem estruturas de
          dados sem se preocupar com os detalhes de implementação, facilitando
          a manutenção e a evolução do software. Exemplos comuns de TADs
          incluem listas, filas, pilhas, árvores e grafos.
        </p>
        <p>
          Além disso, TADs ajudam na abstração dos dados e suas operações,
          tornando o código mais legível e fácil de entender. Isso é
          especialmente útil em grandes projetos de software onde várias
          equipes podem trabalhar em diferentes partes do sistema.
        </p>
      </section>

      <section class="textos">
        <h2>Funcionamento</h2>
        <p>
          Um TAD define uma interface clara para operações sobre uma estrutura
          de dados. Por exemplo, um TAD para uma lista pode incluir operações
          como adicionar um elemento, remover um elemento e acessar um
          elemento em uma posição específica. A implementação concreta desses
          métodos pode variar, mas a interface permanece consistente.
        </p>
        <p>
          Isso significa que você pode ter diferentes implementações do mesmo
          TAD (por exemplo, uma lista pode ser implementada como uma lista
          simplesmente encadeada ou uma lista duplamente encadeada), mas o
          conjunto de operações que você pode realizar sobre a lista permanece
          o mesmo.
        </p>
        <img style="width: 50%;" src="https://blog.pantuza.com/uploads/3c2f826b9b662f523fc857cc9eec0b42c73cd77e" alt="Exemplo de TAD com diferentes implementações" />
      </section>

      <section class="textos">
        <h2>Exemplo de Código em C#</h2>
        <p>
          Vamos examinar um exemplo de código em C# que demonstra como
          implementar uma fila, que é um exemplo de TAD. Vamos dividir o
          código em partes para melhor compreensão.
        </p>

        <h3>Definição do Nó</h3>
        <p>O primeiro passo é definir a estrutura do nó da fila:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
public class No
{
  public string Valor; // Valor armazenado no nó
  public No Proximo; // Ponteiro para o próximo nó
  
  public No(string valor)
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
  private No head; // Ponteiro para o primeiro nó da fila
  private No tail; // Ponteiro para o último nó da fila

  public Fila()
  {
      head = null;
      tail = null;
  }
}
              </code></pre>
        </section>
        <p>
          Aqui, estamos declarando os ponteiros <code>head</code> e
          <code>tail</code> que apontam para o início e o fim da fila,
          respectivamente.
        </p>

        <h3>Método para Enfileirar</h3>
        <p>
          O método <code>Enfileirar</code> adiciona um novo nó ao final da
          fila:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public void Enfileirar(string valor)
{
  No novoNo = new No(valor);
  if (tail != null) tail.Proximo = novoNo;
  tail = novoNo;
  if (head == null) head = novoNo;
}
              </code></pre>
        </section>
        <p>
          Este método cria um novo nó e o adiciona ao final da fila. Se a fila
          estiver vazia, o novo nó também se torna o <code>head</code>.
        </p>

        <h3>Método para Desenfileirar</h3>
        <p>
          O método <code>Desenfileirar</code> remove e retorna o nó do início
          da fila:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public string Desenfileirar()
{
  if (head == null) throw new InvalidOperationException("A fila está vazia.");
  string valor = head.Valor;
  head = head.Proximo;
  if (head == null) tail = null;
  return valor;
}
              </code></pre>
        </section>
        <p>
          Este método remove o nó do início da fila e retorna o valor
          armazenado. Se a fila se tornar vazia após a remoção, o ponteiro
          <code>tail</code> é atualizado para <code>null</code>.
        </p>

        <h3>Exemplo de Uso</h3>
        <p>Por fim, um exemplo de como usar a fila:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
// Exemplo de uso
public class Program
{
  public static void Main()
  {
      Fila fila = new Fila();
      fila.Enfileirar("primeiro");
      fila.Enfileirar("segundo");
      Console.WriteLine(fila.Desenfileirar()); // Saída: primeiro
      Console.WriteLine(fila.Desenfileirar()); // Saída: segundo
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
          Os tipos abstratos de dados são ferramentas poderosas na ciência da
          computação, permitindo a criação de software mais organizado,
          modular e fácil de manter. Ao focar na interface e nas operações
          permitidas por uma estrutura de dados, os desenvolvedores podem
          criar soluções flexíveis e eficientes, abstraindo os detalhes da
          implementação e facilitando o desenvolvimento de aplicações
          complexas.
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