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
          <li>Tipo Abstrato de Dados</li>
        </a>
      </h3>
      <h3>
        <a href="./listasSimplesmenteEncadeadas.php">
          <li>Listas Simplesmente Encadeadas</li>
        </a>
      </h3>
      <h3>
        <a href="./listasDuplamenteEncadeadas.php">
          <li>Listas Duplamente Encadeadas</li>
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
      <script
        src="https://kit.fontawesome.com/5bcdea54fd.js"
        crossorigin="anonymous"
      ></script>
    </header>
    <section class="tela">
        <section class="tela80">
            <form action="./processamento/processamento.php" method="post" class="containerLogin">
                <h3>Nome <input type="text" name="inputNome"></h3>
                <h3>Email <input type="email" name="inputEmail"></h3>
                <h3>Senha <input type="password" name="inputSenha"></h3>
                <button>Cadastrar</button>
            </form>
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
