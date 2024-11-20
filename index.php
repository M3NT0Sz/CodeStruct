<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./view/CSS/style.css" />
  <link rel="shortcut icon" href="./view/Imagens/Logo.png" type="image/x-icon" />
  <title>CodeStruct</title>
</head>

<body>
  <header class="navbar">
    <a href="./index.php">
      <img src="./view/Imagens/Logo.png" />
      <h1>CodeStruct</h1>
    </a>

    <ul>
      <h3>
        <li onclick="toggleDropdown()" style="cursor: pointer;">
          <a href="#">
            Conteúdos
          </a>
          <ul id="myDropdown" class="dropdown-content">
            <li><a href="./view/tipoAbstratoDados.php">TAD</a></li>
            <li><a href="./view/listasSimplesmenteEncadeadas.php">Listas Simplesmente Encadeadas</a></li>
            <li><a href="./view/listasDuplamenteEncadeadas.php">Listas Duplamente Encadeadas</a></li>
            <li><a href="./view/FilaFIFO.php">Fila FIFO</a></li>
            <li><a href="./view/FilaDePrioridade.php">Fila de Prioridade</a></li>
            <li><a href="./view/Pilha.php">Pilha</a></li>
            <li><a href="./view/ArvoreBinaria.php">Árvore Binária</a></li>
            <li><a href="./view/ArvoreB.php">Árvore B</a></li>
            <li><a href="./view/ArvoreTrie.php">Árvore Trie</a></li>
            <li><a href="./view/ArvoreAVL.php">Árvore AVL</a></li>
            <li><a href="./view/ArvoreRubroNegra.php">Árvore Rubro-Negra</a></li>
          </ul>
        </li>
      </h3>
      <h3>
        <li>
          <?php
          if ($_SESSION['logado'] != '') {
          ?>
            <a href="./view/jornada.php">
              Jornada
            </a>
          <?php
          } else {
          ?>
            <a href="./view/login.php">
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
            <a href="./view/login.php">
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
    <script src="./view/JS/script.js"></script>
    <script src="https://kit.fontawesome.com/5bcdea54fd.js" crossorigin="anonymous"></script>
  </header>
  <section class="tela">
    <section class="imagemProg">
      <img class="imgInicial" src="./view/Imagens/programacao.png" />
    </section>
    <section class="tela80">
      <header class="pagNome">
        <h1>Qual o objetivo do CodeStruct?</h1>
      </header>

      <section class="textos">
        <p>
          O principal objetivo do CodeStruct é apresentar para o público de
          forma simples e efetiva de como aprender do início ao fim como
          utilizar e implementar os seguintes tipos de Estrutura de Dados:<br />
          <br />
          - Tipo Abstrato de Dados (TAD)<br />
          - Lista Simplesmente Encadeadas<br />
          - Lista Duplamente Encadeadas<br />
          - Fila FIFO<br />
          - Fila de Prioridades<br />
          - Pilha<br />
          - Árvore Binária<br />
          - Árvore B<br />
          - Árvore Trie<br />
          - Árvore AVL<br />
          - Árvore Rubro-Negra<br /><br />
        </p>
      </section>
    </section>
    <section class="navDesen">
      <h1 class="navbar-title">Desenvolvedores</h1>
      <section class="developer-container">
        <section class="developer">
          <img src="./view/Imagens/Ian.jpeg" alt="Desenvolvedor" />
          <section class="developer-name">Ian Gabriel</section>
        </section>
        <section class="developer">
          <img src="./view/Imagens/MatheusMendes.jpeg" alt="Desenvolvedor" />
          <section class="developer-name">Matheus Mendes</section>
        </section>
        <section class="developer">
          <img src="./view/Imagens/MatheusWilliam.jpeg" alt="Desenvolvedor" />
          <section class="developer-name">Matheus William</section>
        </section>
        <section class="developer">
          <img src="./view/Imagens/PauloDinei.jpg" alt="Desenvolvedor" />
          <section class="developer-name">Paulo Diney</section>
        </section>
      </section>
    </section>

    <section class="tela80">
      <section class="pagNome">
        <h1>Quem Somos?</h1>
      </section>

      <section class="textos">
        <p>
          Somos um grupo de alunos da Fatec Presidente Prudente cursando
          Análise e Desenvolvimento de Sistemas, que buscou criar um site com
          conteúdo de Estrutura de Dados para ensinar e descrever quais as
          suas importâncias e como utilizar no dia a dia.
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