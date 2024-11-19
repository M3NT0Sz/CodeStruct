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
  <title>CodeStruct - Árvore B</title>
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
        <h1>Árvore B</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/EGuJuxMMTDI?si=bUZ5WdKdTCDJkhxN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
      </section>

      <section class="textos">
        <h2>Introdução</h2>
        <p>
          A Árvore B é uma estrutura de dados auto-balanceada que mantém os dados ordenados e permite buscas, inserções e deleções em tempo logarítmico. Ela é amplamente utilizada em sistemas de gerenciamento de banco de dados e sistemas de arquivos.
        </p>
      </section>

      <section class="textos">
        <h2>Características</h2>
        <p>
          As principais características de uma Árvore B são:
        </p>
        <ul>
          <li>Todos os nós internos têm no mínimo ⌈m/2⌉ filhos e no máximo m filhos, onde m é a ordem da árvore.</li>
          <li>Todos os nós folha estão no mesmo nível.</li>
          <li>Uma Árvore B de ordem m pode armazenar até m-1 chaves em cada nó.</li>
        </ul>
      </section>

      <section class="textos">
        <h2>Funcionamento</h2>
        <p>
          A Árvore B mantém suas chaves ordenadas e permite operações eficientes de busca, inserção e deleção. A inserção e a deleção podem causar a divisão ou a fusão de nós para manter as propriedades da árvore.
        </p>
        <img style="width: 50%;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/B-tree.svg/1200px-B-tree.svg.png" alt="Exemplo de Árvore B" />
      </section>

      <section class="textos">
        <h2>Exemplo de Código em C</h2>
        <p>
          Vamos examinar um exemplo de código em C que demonstra como implementar uma Árvore B.
        </p>

        <h3>Definição do Nó</h3>
        <p>O primeiro passo é definir a estrutura do nó da Árvore B:</p>
        <section class="code-container">
          <pre><code class="language-c">
#define MAX 3
#define MIN 2

struct BTreeNode {
  int val[MAX + 1], count;
  struct BTreeNode *link[MAX + 1];
};
              </code></pre>
        </section>
        <p>
          Neste trecho, definimos a estrutura <code>BTreeNode</code> que contém um array de valores e um array de ponteiros para os filhos.
        </p>

        <h3>Inserção na Árvore B</h3>
        <p>
          Em seguida, definimos a função para inserir um valor na Árvore B:
        </p>
        <section class="code-container">
          <pre><code class="language-c">
void insert(int val) {
  int flag, i;
  struct BTreeNode *child;

  flag = setValue(val, root, &child);
  if (flag)
    root = createNode(val, child);
}
              </code></pre>
        </section>
        <p>
          Esta função insere um valor na Árvore B e cria um novo nó raiz se necessário.
        </p>

        <h3>Busca na Árvore B</h3>
        <p>
          A função para buscar um valor na Árvore B é definida da seguinte forma:
        </p>
        <section class="code-container">
          <pre><code class="language-c">
int search(int val, struct BTreeNode *node) {
  int i;
  if (node) {
    for (i = 0; i < node->count; i++) {
      if (val < node->val[i])
        return search(val, node->link[i]);
      if (val == node->val[i])
        return 1;
    }
    return search(val, node->link[i]);
  }
  return 0;
}
              </code></pre>
        </section>
        <p>
          Esta função busca um valor na Árvore B de forma recursiva.
        </p>
      </section>

      <section class="textos">
        <h2>Conclusão</h2>
        <p>
          A Árvore B é uma estrutura de dados eficiente para operações de busca, inserção e deleção. Sua capacidade de manter os dados ordenados e balanceados a torna ideal para sistemas de gerenciamento de banco de dados e sistemas de arquivos.
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