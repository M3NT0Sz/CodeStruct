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
                <a href="./trilha.php"><button class="JogarBtn">Jogar Modo Historia</button></a>
                <form method="post" action="./normal.php">
                    <input type="hidden" name="extra" value="aumentarVida">
                    <button class="JogarBtn">Jogar Modo Normal</button>
                </form>
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
                <form method="post" action="../model/processamento.php" class="loja" id="loja">
                    <input type="hidden" name="imagem" id="imagem">
                    <button type="button" id="cosmeticos" class="cosmeticos cosmeticos1"><img src="./Imagens/Loja/1.png"></button>
                    <button type="button" id="cosmeticos" class="cosmeticos cosmeticos2"><img src="./Imagens/Loja/2.png"></button>
                    <button type="button" id="cosmeticos" class="cosmeticos cosmeticos3"><img src="./Imagens/Loja/3.png"></button>
                    <ul id="ulLoja">
                        <button id="liLoja" class="liLoja" name="1"><img src="./Imagens/Loja/1.png" style="height: 3vw;">200 moedas</button>
                        <button id="liLoja" class="liLoja" name="2"><img src="./Imagens/Loja/2.png" style="height: 3vw;">400 moedas</button>
                        <button id="liLoja" class="liLoja" name="3"><img src="./Imagens/Loja/3.png" style="height: 3vw;">500 moedas</button>
                    </ul>
                </form>

                <section class="personagemImg">
                    <img src="./Imagens/Personagem/1.png">
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
    <script src="./JS/loja.js"></script>
</body>

</html>