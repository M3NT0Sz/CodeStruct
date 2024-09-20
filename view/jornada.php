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
                
                <a href="../index.php"><button>Voltar</button></a>
            </section>
        </nav>
        <main class="jogoDireita">
            <nav class="cimaJogo">
                <img src="./Imagens/Logo.png" />
                <h1>CodeStruct</h1>
            </nav>
            <main class="personagem">
                <section class="loja" id="loja">
                    <button class="chapeu"><img src="./Imagens/chapeu.jpg"></button>
                    <button class="camisa"><img src="./Imagens/camisa.png"></button>
                    <button class="calca"><img src="./Imagens/calca.jpg"></button>
                </section>

                <section class="personagemImg">
                    <img src="./Imagens/Personagem/1.jpeg">
                </section>

                <section class="dinheiro">
                    <h3>
                        <img src="./Imagens/Logo.png">
                        <p><?php echo $controlador->visualizarCash($_SESSION['usuario_id']); ?></p>
                    </h3>
                    <button id="toggleLoja">Abrir Loja</button>
                </section>
            </main>
        </main>
    </main>
    <script src="./JS/script.js"></script>
</body>

</html>