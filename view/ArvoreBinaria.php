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
  <title>CodeStruct - Árvore Binária</title>
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
        <h1>Árvore Binária</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/VmKkAQtnjsM?si=lsw67ak264i6fJRz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
      </section>

      <section class="textos">
        <h2>Introdução</h2>
        <p>
          Uma árvore binária é uma estrutura de dados hierárquica na qual cada nó tem no máximo dois filhos, geralmente chamados de "esquerda" e "direita". As árvores binárias são usadas em diversas aplicações, como pesquisa e ordenação.
        </p>
      </section>

      <section class="textos">
        <h2>Importância</h2>
        <p>
          As árvores binárias são fundamentais em ciência da computação devido à sua eficiência em operações de inserção, exclusão e busca. Elas são a base para estruturas de dados mais complexas, como árvores de busca binária, árvores AVL e árvores rubro-negras.
        </p>
      </section>

      <section class="textos">
        <h2>Funcionamento</h2>
        <p>
          Em uma árvore binária, cada nó contém um valor e referências para seus filhos esquerdo e direito. A árvore começa com um nó raiz e se expande para baixo, com cada nó podendo ter zero, um ou dois filhos.
        </p>
        <img style="width: 25%;" src="https://upload.wikimedia.org/wikipedia/commons/f/f7/Binary_tree.svg" alt="Exemplo de Árvore Binária" />
      </section>

      <section class="textos">
        <h2>Exemplo de Código em PHP</h2>
        <p>
          Vamos examinar um exemplo de código em PHP que demonstra como implementar uma árvore binária.
        </p>

        <h3>Definição do Nó</h3>
        <p>O primeiro passo é definir a estrutura do nó da árvore:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
class Node {
  public $value;
  public $left;
  public $right;

  public function __construct($value) {
    $this->value = $value;
    $this->left = null;
    $this->right = null;
  }
}
              </code></pre>
        </section>
        <p>
          Neste trecho, definimos a classe <code>Node</code> que contém um valor e referências para os filhos esquerdo e direito.
        </p>

        <h3>Definição da Árvore Binária</h3>
        <p>
          Em seguida, definimos a classe <code>BinaryTree</code> que gerencia a árvore:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
class BinaryTree {
  public $root;

  public function __construct() {
    $this->root = null;
  }

  public function insert($value) {
    $newNode = new Node($value);
    if ($this->root === null) {
      $this->root = $newNode;
    } else {
      $this->insertNode($this->root, $newNode);
    }
  }

  private function insertNode($node, $newNode) {
    if ($newNode->value < $node->value) {
      if ($node->left === null) {
        $node->left = $newNode;
      } else {
        $this->insertNode($node->left, $newNode);
      }
    } else {
      if ($node->right === null) {
        $node->right = $newNode;
      } else {
        $this->insertNode($node->right, $newNode);
      }
    }
  }
}
              </code></pre>
        </section>
        <p>
          Aqui, estamos declarando a classe <code>BinaryTree</code> com métodos para inserir novos nós na árvore.
        </p>

        <h3>Exemplo de Uso</h3>
        <p>Por fim, um exemplo de como usar a árvore binária:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
// Exemplo de uso
$tree = new BinaryTree();
$tree->insert(10);
$tree->insert(5);
$tree->insert(15);
$tree->insert(3);
$tree->insert(7);
              </code></pre>
        </section>
        <p>
          Neste exemplo, criamos uma nova árvore binária e inserimos alguns valores.
        </p>
      </section>

      <section class="textos">
        <h2>Conclusão</h2>
        <p>
          As árvores binárias são estruturas de dados versáteis e eficientes, amplamente utilizadas em algoritmos de busca e ordenação. Compreender seu funcionamento e implementação é essencial para qualquer desenvolvedor.
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