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
        <h1>Árvore AVL</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/l8IBdCb2BWA?si=F9ppA13PnL6HPLmv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
      </section>

      <section class="textos">
        <h2>Introdução</h2>
        <p>
          A Árvore AVL é um tipo de árvore binária de busca auto-balanceada, onde a diferença de altura entre as subárvores esquerda e direita de qualquer nó é no máximo 1. Isso garante que as operações de inserção, exclusão e busca sejam realizadas em tempo logarítmico.
        </p>
      </section>

      <section class="textos">
        <h2>Importância</h2>
        <p>
          As Árvores AVL são importantes porque mantêm a árvore balanceada, garantindo uma performance eficiente para operações de busca, inserção e exclusão. Elas são usadas em aplicações onde a performance de busca é crítica, como em bancos de dados e sistemas de arquivos.
        </p>
      </section>

      <section class="textos">
        <h2>Funcionamento</h2>
        <p>
          Cada nó em uma Árvore AVL armazena uma chave e dois ponteiros para seus filhos esquerdo e direito. Além disso, cada nó mantém um valor de balanceamento que é a diferença entre as alturas das subárvores esquerda e direita. Se a diferença de altura for maior que 1, a árvore precisa ser re-balanceada.
        </p>
        <p>
          O re-balanceamento é feito através de rotações, que podem ser simples ou duplas. Existem quatro tipos de rotações: rotação à esquerda, rotação à direita, rotação à esquerda-direita e rotação à direita-esquerda.
        </p>
        <img style="width: 25%;" src="https://media.geeksforgeeks.org/wp-content/uploads/20221229121830/avl.png" alt="Exemplo de Árvore AVL" />
      </section>

      <section class="textos">
        <h2>Exemplo de Código em PHP</h2>
        <p>
          Vamos examinar um exemplo de código em PHP que demonstra como implementar uma Árvore AVL. Vamos dividir o código em partes para melhor compreensão.
        </p>

        <h3>Definição do Nó</h3>
        <p>O primeiro passo é definir a estrutura do nó da árvore:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
class Node {
  public $key;
  public $left;
  public $right;
  public $height;

  public function __construct($key) {
    $this->key = $key;
    $this->left = null;
    $this->right = null;
    $this->height = 1;
  }
}
              </code></pre>
        </section>
        <p>
          Neste trecho, definimos a classe <code>Node</code> que contém uma chave, ponteiros para os filhos esquerdo e direito, e a altura do nó.
        </p>

        <h3>Definição da Árvore AVL</h3>
        <p>
          Em seguida, definimos a classe <code>AVLTree</code> que gerencia a árvore:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
class AVLTree {
  private $root;

  public function __construct() {
    $this->root = null;
  }

  // Funções para inserção, exclusão e balanceamento da árvore
}
              </code></pre>
        </section>
        <p>
          Aqui, estamos declarando a raiz da árvore e preparando a estrutura para as funções de inserção, exclusão e balanceamento.
        </p>

        <h3>Método para Inserir</h3>
        <p>
          O método <code>insert</code> adiciona um novo nó à árvore:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
public function insert($key) {
  $this->root = $this->insertNode($this->root, $key);
}

private function insertNode($node, $key) {
  if ($node == null) {
    return new Node($key);
  }

  if ($key < $node->key) {
    $node->left = $this->insertNode($node->left, $key);
  } else if ($key > $node->key) {
    $node->right = $this->insertNode($node->right, $key);
  } else {
    return $node;
  }

  $node->height = 1 + max($this->getHeight($node->left), $this->getHeight($node->right));
  return $this->balance($node);
}
              </code></pre>
        </section>
        <p>
          Este método insere um novo nó na árvore e atualiza a altura dos nós. Se necessário, a árvore é balanceada.
        </p>

        <h3>Método para Balancear</h3>
        <p>
          O método <code>balance</code> re-balanceia a árvore se necessário:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
private function balance($node) {
  $balanceFactor = $this->getBalanceFactor($node);

  if ($balanceFactor > 1) {
    if ($this->getBalanceFactor($node->left) < 0) {
      $node->left = $this->rotateLeft($node->left);
    }
    return $this->rotateRight($node);
  }

  if ($balanceFactor < -1) {
    if ($this->getBalanceFactor($node->right) > 0) {
      $node->right = $this->rotateRight($node->right);
    }
    return $this->rotateLeft($node);
  }

  return $node;
}
              </code></pre>
        </section>
        <p>
          Este método verifica o fator de balanceamento do nó e realiza as rotações necessárias para manter a árvore balanceada.
        </p>

        <h3>Exemplo de Uso</h3>
        <p>Por fim, um exemplo de como usar a árvore AVL:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
$avl = new AVLTree();
$avl->insert(10);
$avl->insert(20);
$avl->insert(30);
$avl->insert(40);
$avl->insert(50);
$avl->insert(25);
              </code></pre>
        </section>
        <p>
          Neste exemplo, criamos uma nova árvore AVL e inserimos alguns elementos.
        </p>
      </section>

      <section class="textos">
        <h2>Conclusão</h2>
        <p>
          As Árvores AVL são estruturas de dados poderosas que garantem operações eficientes de busca, inserção e exclusão. Elas são essenciais para aplicações que requerem alta performance e são amplamente utilizadas em sistemas de banco de dados e sistemas de arquivos.
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