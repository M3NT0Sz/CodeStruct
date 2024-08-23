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
    <a href="./index.php">
      <img src="Imagens/Logo.png" />
      <h1>CodeStruct</h1>
    </a>

    <ul>
      <h3>
        <a href="./tipoAbstratoDados.php">
          <li>Conteudos</li>
        </a>
      </h3>
      <h3>
        <a href="./jornada.php">
          <li>Jornada</li>
        </a>
      </h3>
      <h3>
        <?php
        if (isset($_SESSION['logado']) != "") {
        ?>
          <a href="./processamento/processamento.php">
            <li>Sair</li>
          </a>
        <?php
        } else {
        ?>
          <a href="./login.php">
            <li>Entrar</li>
          </a>
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
    <section class="imagemProg">
      <img class="imgInicial" src="Imagens/programacao.png" />
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
          - Lista Duplamente Encadeadas<br /><br />
        </p>
      </section>
    </section>
    <section class="navDesen">
      <h1 class="navbar-title">Desenvolvedores</h1>
      <section class="developer-container">
        <section class="developer">
          <img src="Imagens/Ian.jpeg" alt="Desenvolvedor 1" />
          <section class="developer-name">Ian</section>
        </section>
        <section class="developer">
          <img src="Imagens/MatheusMendes.jpeg" alt="Desenvolvedor 2" />
          <section class="developer-name">Matheus Mendes</section>
        </section>
        <section class="developer">
          <img src="Imagens/MatheusWilliam.jpeg" alt="Desenvolvedor 3" />
          <section class="developer-name">Matheus William</section>
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