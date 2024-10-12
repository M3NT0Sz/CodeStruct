<?php
session_start();
require_once "../controller/Controller.php";
$controlador = new Controller();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="shortcut icon" href="./Imagens/Logo.png" type="image/x-icon" />
    <title>CodeStruct - Jornada</title>
</head>

<body class="bodyJogo">
    <main class="jogoTudo">
        <nav class="menuEsquerda">
            <section class="imgJogo">
                <?php echo $controlador->visualizarImg($_SESSION['usuario_id']); ?>
            </section>
            <section class="configuracaoJogo">
                <a href="./trilha.php"><button class="JogarBtn">Jogar</button></a>
                <a href="./configuracoes.php"><button>Configurações</button></a>
                <a href="../index.php"><button>Voltar</button></a>
            </section>
        </nav>
        <main class="jogoDireita">
            <nav class="cimaJogo">
                <img src="./Imagens/Logo.png" />
                <h1>CodeStruct</h1>
            </nav>
            <main class="personagem">
                <section class="editar">
                    <form class="containerLogin" action="../model/processamento.php" method="post">
                        <h1>Editar</h1>
                        <?php
                        echo $controlador->puxarEditar();
                        ?>
                        <button>Editar</button>
                    </form>
                    <form class="containerLogin" action="../model/processamento.php" method="post" enctype="multipart/form-data">
                        <h1>Editar Imagem</h1>
                        <input type="file" name="inputImageEditar" id="img" accept="image/*">
                        <button>Editar</button>
                    </form>
                </section>
            </main>
        </main>
    </main>
    <script src="./JS/script.js"></script>
</body>

</html>