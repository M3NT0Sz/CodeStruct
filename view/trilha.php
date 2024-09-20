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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>CodeStruct - Jornada</title>
</head>

<body class="bodyJogo">
    <main class="jogoTudo">
        <nav class="menuEsquerda">
            <section class="imgJogo">
                <?php echo $controlador->visualizarImg($_SESSION['usuario_id']); ?>
            </section>
            <section class="configuracaoJogo">
                <a href="../index.php"><button class="JogarBtn">Jogar</button></a>

                <a href="../index.php"><button>Voltar</button></a>
            </section>
        </nav>
        <main class="jogoDireita">
            <nav class="cimaJogo">
                <img src="./Imagens/Logo.png" />
                <h1>CodeStruct</h1>
            </nav>
            <main class="personagem">
                <section class="trilhasTudo">
                    <ul class="trilhaUL">
                        <button id="toggleTAD">TAD</button> <!-- Título clicável para abrir/fechar a lista -->
                        <div id="trilhasTAD" class="trilhas">
                            <form action="questoes.php" method="post">
                                <input type="hidden" name="extra" value="aumentarVida">
                                <button type="submit" name="trilha" value="Trilha 1">
                                    <li>Trilha 1</li>
                                </button>
                                <?php
                                $trilhas = [
                                    ["Trilha 2", 1],
                                    ["Trilha 3", 2],
                                    ["Trilha 4", 3],
                                    ["Chefão", 4]
                                ];

                                foreach ($trilhas as $trilha) {
                                    $nome = $trilha[0];
                                    $nivel = $trilha[1];
                                    $classe = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "buttonBloqueado";
                                    $icone = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "<i class='bx bx-lock-alt'></i>";
                                    
                                    if ($classe === "buttonBloqueado") {
                                        echo "<button type='button' class='$classe' disabled>
                                                <li>$nome $icone</li>
                                              </button>";
                                    } else {
                                        echo "<button type='submit' name='trilha' value='$nome' class='$classe'>
                                                <li>$nome $icone</li>
                                              </button>";
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </ul>
                    <ul class="trilhaUL">
                        <button class="buttonBloqueado" id="toggleLSE">Listas Simplesmente Encadeadas <i class='bx bx-lock-alt'></i></button> <!-- Título clicável para abrir/fechar a lista -->
                        <div id="trilhasLSE" class="trilhas">
                            <li>Trilha 1</li>
                            <li>Trilha 2</li>
                            <li>Trilha 3</li>
                            <li>Trilha 4</li>
                            <li>Chefão</li>
                        </div>
                    </ul>
                    <ul class="trilhaUL">
                        <button class="buttonBloqueado" id="toggleLDE">Listas Duplamente Encadeadas <i class='bx bx-lock-alt'></i></button> <!-- Título clicável para abrir/fechar a lista -->
                        <div id="trilhasLDE" class="trilhas">
                            <li>Trilha 1</li>
                            <li>Trilha 2</li>
                            <li>Trilha 3</li>
                            <li>Trilha 4</li>
                            <li>Chefão</li>
                        </div>
                    </ul>
                    <ul class="trilhaUL">
                        <button class="buttonBloqueado" id="toggleFIFO">Fila FIFO <i class='bx bx-lock-alt'></i></button> <!-- Título clicável para abrir/fechar a lista -->
                        <div id="trilhasFIFO" class="trilhas">
                            <li>Trilha 1</li>
                            <li>Trilha 2</li>
                            <li>Trilha 3</li>
                            <li>Trilha 4</li>
                            <li>Chefão</li>
                        </div>
                    </ul>
                    <ul class="trilhaUL">
                        <button class="buttonBloqueado" id="togglePri">Fila de Prioridades <i class='bx bx-lock-alt'></i></button> <!-- Título clicável para abrir/fechar a lista -->
                        <div id="trilhasPri" class="trilhas">
                            <li>Trilha 1</li>
                            <li>Trilha 2</li>
                            <li>Trilha 3</li>
                            <li>Trilha 4</li>
                            <li>Chefão</li>
                        </div>
                    </ul>
                    <ul class="trilhaUL">
                        <button class="buttonBloqueado" id="togglePil">Pilhas <i class='bx bx-lock-alt'></i></button> <!-- Título clicável para abrir/fechar a lista -->
                        <div id="trilhasPil" class="trilhas">
                            <li>Trilha 1</li>
                            <li>Trilha 2</li>
                            <li>Trilha 3</li>
                            <li>Trilha 4</li>
                            <li>Chefão</li>
                        </div>
                    </ul>
                </section>
            </main>
        </main>
    </main>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="./JS/trilha.js"></script>
</body>

</html>