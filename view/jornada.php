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
    <title>CodeStruct - Jornada</title>
</head>

<body class="bodyJogo">
    <main class="jogoTudo">
        <nav class="menuEsquerda">
            <section class="imgJogo">
                <img src="./Imagens/MatheusMendes.jpeg">
            </section>
            <section class="configuracaoJogo">
                <a href="../index.php"><button class="JogarBtn">Jogar</button></a>
                <a href="../index.php"><button>Configurações</button></a>
                <a href="../index.php"><button>Voltar</button></a>
            </section>
        </nav>
        <main class="jogoDireita">
            <nav class="cimaJogo">
                <img src="./Imagens/Logo.png" />
                <h1>CodeStruct</h1>
            </nav>
            <main class="personagem">
                <section class="loja">
                    <button class="chapeu"><img src="./Imagens/chapeu.jpg"></button>
                    <button class="camisa"><img src="./Imagens/camisa.png"></button>
                    <button class="calca"><img src="./Imagens/calca.jpg"></button>
                </section>
                <section class="personagemImg"><img src="./Imagens/personagem.png"></section>
                <section class="dinheiro">
                    <h3>80</h3>
                </section>
            </main>
        </main>
    </main>
</body>

</html>