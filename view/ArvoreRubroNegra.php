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
  <title>CodeStruct - Árvore Rubro-Negra</title>
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
        <h1>Árvore Rubro-Negra</h1>
      </header>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/dOz0PpFGUeA?si=9o0afOdDE3EqYjrV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
      </section>

      <section class="textos">
        <h2>Introdução</h2>
        <p>
          A Árvore Rubro-Negra é uma estrutura de dados do tipo árvore binária de busca balanceada. Ela garante que o caminho mais longo da raiz até uma folha não seja mais do que o dobro do caminho mais curto, mantendo a árvore aproximadamente balanceada.
        </p>
      </section>

      <section class="textos">
        <h2>Propriedades</h2>
        <p>
          As principais propriedades de uma Árvore Rubro-Negra são:
        </p>
        <ul>
          <li>Cada nó é vermelho ou preto.</li>
          <li>A raiz é sempre preta.</li>
          <li>Todas as folhas (NIL) são pretas.</li>
          <li>Se um nó é vermelho, então ambos os seus filhos são pretos.</li>
          <li>Para cada nó, todos os caminhos simples da raiz até as folhas descendentes contêm o mesmo número de nós pretos.</li>
        </ul>
      </section>

      <section class="textos">
        <h2>Operações</h2>
        <p>
          As operações básicas em uma Árvore Rubro-Negra incluem inserção, remoção e busca. A inserção e a remoção são seguidas por operações de rotação e recoloração para manter as propriedades da árvore.
        </p>
      </section>

      <section class="textos">
        <h2>Exemplo de Código em C++</h2>
        <p>
          Abaixo está um exemplo de implementação de uma Árvore Rubro-Negra em C++:
        </p>
        <section class="code-container">
          <pre><code class="language-csharp">
#include &lt;iostream&gt;
using namespace std;

enum Color {RED, BLACK};

struct Node {
    int data;
    bool color;
    Node *left, *right, *parent;

    Node(int data) {
        this->data = data;
        left = right = parent = nullptr;
        this->color = RED;
    }
};

class RBTree {
private:
    Node *root;
protected:
    void rotateLeft(Node *&, Node *&);
    void rotateRight(Node *&, Node *&);
    void fixInsertRBTree(Node *&, Node *&);
public:
    RBTree() { root = nullptr; }
    void insert(const int &n);
    void inorder();
    void levelOrder();
};

// Implementação das funções omitida para brevidade
              </code></pre>
        </section>
      </section>

      <section class="textos">
        <h2>Conclusão</h2>
        <p>
          As Árvores Rubro-Negras são uma ferramenta poderosa para garantir operações eficientes de inserção, remoção e busca em conjuntos de dados dinâmicos. Elas são amplamente utilizadas em sistemas que requerem acesso rápido e balanceado aos dados.
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