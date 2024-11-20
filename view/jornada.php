<?php
error_reporting(0);
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
                    <button type="button" id="cosmeticos" class="cosmeticos cosmeticos1"><?php if ($_SESSION['Imagem1'] == "") {
                                                                                                echo "Clique para ver itens";
                                                                                            } else { ?><img src="./Imagens/Loja/<?php echo $_SESSION['Imagem1'] ?>.png"><?php } ?></button>
                    <button type="button" id="cosmeticos" class="cosmeticos cosmeticos2"><?php if ($_SESSION['Imagem2'] == "") {
                                                                                                echo "Clique para ver itens";
                                                                                            } else { ?><img src="./Imagens/Loja/<?php echo $_SESSION['Imagem2'] ?>.png"><?php } ?></button>
                    <button type="button" id="cosmeticos" class="cosmeticos cosmeticos3"><?php if ($_SESSION['Imagem3'] == "") {
                                                                                                echo "Clique para ver itens";
                                                                                            } else { ?><img src="./Imagens/Loja/<?php echo $_SESSION['Imagem3'] ?>.png"><?php } ?></button>
                    <ul id="ulLoja">
                        <button type="submit" id="liLoja" class="liLoja" name="1" value="1"><img src="./Imagens/Loja/1.png" style="height: 3vw;">200 moedas</button>
                        <button type="submit" id="liLoja" class="liLoja" name="2" value="2"><img src="./Imagens/Loja/2.png" style="height: 3vw;">400 moedas</button>
                        <button type="submit" id="liLoja" class="liLoja" name="3" value="3"><img src="./Imagens/Loja/3.png" style="height: 3vw;">500 moedas</button>
                    </ul>
                    <ul style="display: flex; flex-direction: column; list-style: none;">
                        <li style="display: flex; align-items: center;"><img src="./Imagens/Loja/1.png" style="height: 3vh;"> Adiciona um coração extra</li>
                        <li style="display: flex; align-items: center;"><img src="./Imagens/Loja/2.png" style="height: 3vh;"> Pula uma questão</li>
                        <li style="display: flex; align-items: center;"><img src="./Imagens/Loja/3.png" style="height: 3vh;"> Dobra o valor ganho</li>
                        <li style="display: flex; text-align: center; font-size: 12px;">Dependendo o combo aumenta ainda mais os bonus, faça a melhor composição</li>
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