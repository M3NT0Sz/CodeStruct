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
  <title>CodeStruct - Árvore Trie</title>
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
        <h1>Árvore Trie</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/MEmLEYhna-I?si=xPgavvNOV7AwBaUU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
      </section>

      <section class="textos">
        <h2>Introdução</h2>
        <p>
          A Árvore Trie, também conhecida como árvore de prefixos, é uma estrutura de dados especializada em armazenar um conjunto dinâmico de strings, onde as chaves são geralmente cadeias de caracteres. Ela é muito eficiente para operações de busca, inserção e deleção de palavras, sendo amplamente utilizada em aplicações como dicionários, corretores ortográficos e sistemas de busca por prefixo.
        </p>
      </section>

      <section class="textos">
        <h2>Funcionamento</h2>
        <p>
          A Árvore Trie organiza as palavras de forma hierárquica, onde cada nó representa um caractere. As palavras são armazenadas ao longo dos caminhos da raiz até os nós folha. Cada caminho da raiz até um nó folha corresponde a uma palavra no conjunto.
        </p>
        <p>
          Por exemplo, considere as palavras "carro", "casa" e "casamento". A Árvore Trie para essas palavras seria organizada da seguinte forma:
        </p>
        <img style="width: 25%;" src="https://upload.wikimedia.org/wikipedia/commons/b/be/Trie_example.svg" alt="Exemplo de Árvore Trie" />
      </section>

      <section class="textos">
        <h2>Vantagens</h2>
        <p>
          As principais vantagens da Árvore Trie incluem:
        </p>
        <ul>
          <li>Busca rápida: A busca de uma palavra na Árvore Trie é realizada em tempo proporcional ao comprimento da palavra.</li>
          <li>Inserção eficiente: A inserção de uma nova palavra também é realizada em tempo proporcional ao comprimento da palavra.</li>
          <li>Economia de espaço: Compartilhamento de prefixos comuns entre palavras reduz o espaço necessário para armazenar o conjunto de palavras.</li>
        </ul>
      </section>

      <section class="textos">
        <h2>Exemplo de Código em PHP</h2>
        <p>
          Vamos examinar um exemplo de código em PHP que demonstra como implementar uma Árvore Trie. Vamos dividir o código em partes para melhor compreensão.
        </p>

        <h3>Definição do Nó</h3>
        <p>O primeiro passo é definir a estrutura do nó da Árvore Trie:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
class TrieNode {
  public $children = [];
  public $isEndOfWord = false;
}
              </code></pre>
        </section>
        <p>
          Neste trecho, definimos a classe <code>TrieNode</code> que contém um array de filhos e um booleano que indica se o nó é o fim de uma palavra.
        </p>

        <h3>Definição da Árvore Trie</h3>
        <p>
          Em seguida, definimos a classe <code>Trie</code> que gerencia a Árvore Trie:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
class Trie {
  private $root;

  public function __construct() {
    $this->root = new TrieNode();
  }

  public function insert($word) {
    $node = $this->root;
    for ($i = 0; $i < strlen($word); $i++) {
      $char = $word[$i];
      if (!isset($node->children[$char])) {
        $node->children[$char] = new TrieNode();
      }
      $node = $node->children[$char];
    }
    $node->isEndOfWord = true;
  }

  public function search($word) {
    $node = $this->root;
    for ($i = 0; $i < strlen($word); $i++) {
      $char = $word[$i];
      if (!isset($node->children[$char])) {
        return false;
      }
      $node = $node->children[$char];
    }
    return $node->isEndOfWord;
  }
}
              </code></pre>
        </section>
        <p>
          Aqui, estamos declarando os métodos <code>insert</code> e <code>search</code> para inserir e buscar palavras na Árvore Trie, respectivamente.
        </p>

        <h3>Exemplo de Uso</h3>
        <p>Por fim, um exemplo de como usar a Árvore Trie:</p>
        <section class="code-container">
          <pre><code class="language-csharp">
// Exemplo de uso
$trie = new Trie();
$trie->insert("carro");
$trie->insert("casa");
$trie->insert("casamento");

echo $trie->search("carro") ? "Encontrado\n" : "Não encontrado\n"; // Saída: Encontrado
echo $trie->search("casamento") ? "Encontrado\n" : "Não encontrado\n"; // Saída: Encontrado
echo $trie->search("cas") ? "Encontrado\n" : "Não encontrado\n"; // Saída: Não encontrado
              </code></pre>
        </section>
        <p>
          Neste exemplo, criamos uma nova Árvore Trie, inserimos três palavras e depois buscamos por essas palavras.
        </p>
      </section>

      <section class="textos">
        <h2>Conclusão</h2>
        <p>
          A Árvore Trie é uma estrutura de dados poderosa e eficiente para armazenar e buscar palavras. Ela é especialmente útil em aplicações que requerem operações rápidas de busca por prefixo e inserção de palavras. Com a Árvore Trie, é possível criar soluções flexíveis e eficientes para diversos problemas relacionados a strings.
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