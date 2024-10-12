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

                                    if ($nome === "Chefão") {
                                        $valor = "Trilha 5";
                                    } else {
                                        $valor = $nome;
                                    }

                                    if ($classe === "buttonBloqueado") {
                                        echo "<button type='button' class='$classe' disabled>
                                                <li>$nome $icone</li>
                                              </button>";
                                    } else {
                                        echo "<button type='submit' name='trilha' value='$valor' class='$classe'>
                                                <li>$nome $icone</li>
                                              </button>";
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </ul>
                    <ul class="trilhaUL">
                        <button id="toggleLSE" class="<?php echo $controlador->verificarTrilha2($_SESSION['usuario_id']) >= 5 ? '' : 'buttonBloqueado'; ?>">
                            Listas Simplesmente Encadeadas
                            <?php echo $controlador->verificarTrilha2($_SESSION['usuario_id']) >= 5 ? '' : "<i class='bx bx-lock-alt'></i>"; ?>
                        </button> <!-- Título clicável para abrir/fechar a lista -->
                        <div id="trilhasLSE" class="trilhas">
                            <form action="questoes.php" method="post">
                                <input type="hidden" name="extra" value="aumentarVida">
                                <?php
                                $trilhas = [
                                    ["Trilha 1", 5],
                                    ["Trilha 2", 6],
                                    ["Trilha 3", 7],
                                    ["Trilha 4", 8],
                                    ["Chefão", 9]
                                ];

                                foreach ($trilhas as $trilha) {
                                    $nome = $trilha[0];
                                    $nivel = $trilha[1];
                                    $classe = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "buttonBloqueado";
                                    $icone = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "<i class='bx bx-lock-alt'></i>";

                                    if ($nome === "Trilha 1") {
                                        $valor = "Trilha 6";
                                    } elseif ($nome === "Trilha 2") {
                                        $valor = "Trilha 7";
                                    } elseif ($nome === "Trilha 3") {
                                        $valor = "Trilha 8";
                                    } elseif ($nome === "Trilha 4") {
                                        $valor = "Trilha 9";
                                    } elseif ($nome === "Chefão") {
                                        $valor = "Trilha 10";
                                    } else {
                                        $valor = $nome;
                                    }

                                    if ($classe === "buttonBloqueado") {
                                        echo "<button type='button' class='$classe' disabled>
                                                <li>$nome $icone</li>
                                              </button>";
                                    } else {
                                        echo "<button type='submit' name='trilha' value='$valor' class='$classe'>
                                                <li>$nome $icone</li>
                                              </button>";
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </ul>
                    <ul class="trilhaUL">
                        <button id="toggleLDE" class="<?php echo $controlador->verificarTrilha2($_SESSION['usuario_id']) >= 10 ? '' : 'buttonBloqueado'; ?>">
                            Listas Duplamente Encadeadas
                            <?php echo $controlador->verificarTrilha2($_SESSION['usuario_id']) >= 10 ? '' : "<i class='bx bx-lock-alt'></i>"; ?>
                        </button> <!-- Título clicável para abrir/fechar a lista -->
                        <div id="trilhasLDE" class="trilhas">
                            <form action="questoes.php" method="post">
                                <input type="hidden" name="extra" value="aumentarVida">
                                <?php
                                $trilhas = [
                                    ["Trilha 1", 10],
                                    ["Trilha 2", 11],
                                    ["Trilha 3", 12],
                                    ["Trilha 4", 13],
                                    ["Chefão", 14]
                                ];

                                foreach ($trilhas as $trilha) {
                                    $nome = $trilha[0];
                                    $nivel = $trilha[1];
                                    $classe = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "buttonBloqueado";
                                    $icone = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "<i class='bx bx-lock-alt'></i>";

                                    if ($nome === "Trilha 1") {
                                        $valor = "Trilha 11";
                                    } elseif ($nome === "Trilha 2") {
                                        $valor = "Trilha 12";
                                    } elseif ($nome === "Trilha 3") {
                                        $valor = "Trilha 13";
                                    } elseif ($nome === "Trilha 4") {
                                        $valor = "Trilha 14";
                                    } elseif ($nome === "Chefão") {
                                        $valor = "Trilha 15";
                                    } else {
                                        $valor = $nome;
                                    }

                                    if ($classe === "buttonBloqueado") {
                                        echo "<button type='button' class='$classe' disabled>
                                                <li>$nome $icone</li>
                                              </button>";
                                    } else {
                                        echo "<button type='submit' name='trilha' value='$valor' class='$classe'>
                                                <li>$nome $icone</li>
                                              </button>";
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </ul>
                    <ul class="trilhaUL">
                        <button id="toggleFIFO" class="<?php echo $controlador->verificarTrilha2($_SESSION['usuario_id']) >= 15 ? '' : 'buttonBloqueado'; ?>">
                            Fila FIFO
                            <?php echo $controlador->verificarTrilha2($_SESSION['usuario_id']) >= 15 ? '' : "<i class='bx bx-lock-alt'></i>"; ?>
                        </button> <!-- Título clicável para abrir/fechar a lista -->
                        <div id="trilhasFIFO" class="trilhas">
                            <form action="questoes.php" method="post">
                                <input type="hidden" name="extra" value="aumentarVida">
                                <?php
                                $trilhas = [
                                    ["Trilha 1", 15],
                                    ["Trilha 2", 16],
                                    ["Trilha 3", 17],
                                    ["Trilha 4", 18],
                                    ["Chefão", 19]
                                ];

                                foreach ($trilhas as $trilha) {
                                    $nome = $trilha[0];
                                    $nivel = $trilha[1];
                                    $classe = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "buttonBloqueado";
                                    $icone = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "<i class='bx bx-lock-alt'></i>";

                                    if ($nome === "Trilha 1") {
                                        $valor = "Trilha 16";
                                    } elseif ($nome === "Trilha 2") {
                                        $valor = "Trilha 17";
                                    } elseif ($nome === "Trilha 3") {
                                        $valor = "Trilha 18";
                                    } elseif ($nome === "Trilha 4") {
                                        $valor = "Trilha 19";
                                    } elseif ($nome === "Chefão") {
                                        $valor = "Trilha 20";
                                    } else {
                                        $valor = $nome;
                                    }

                                    if ($classe === "buttonBloqueado") {
                                        echo "<button type='button' class='$classe' disabled>
                                                <li>$nome $icone</li>
                                              </button>";
                                    } else {
                                        echo "<button type='submit' name='trilha' value='$valor' class='$classe'>
                                                <li>$nome $icone</li>
                                              </button>";
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </ul>
                    <ul class="trilhaUL">
                        <button id="togglePri" class="<?php echo $controlador->verificarTrilha2($_SESSION['usuario_id']) >= 20 ? '' : 'buttonBloqueado'; ?>">
                            Fila de Prioridades
                            <?php echo $controlador->verificarTrilha2($_SESSION['usuario_id']) >= 20 ? '' : "<i class='bx bx-lock-alt'></i>"; ?>
                        </button>
                        <div id="trilhasPri" class="trilhas">
                            <form action="questoes.php" method="post">
                                <input type="hidden" name="extra" value="aumentarVida">
                                <?php
                                $trilhas = [
                                    ["Trilha 1", 20],
                                    ["Trilha 2", 21],
                                    ["Trilha 3", 22],
                                    ["Trilha 4", 23],
                                    ["Chefão", 24]
                                ];

                                foreach ($trilhas as $trilha) {
                                    $nome = $trilha[0];
                                    $nivel = $trilha[1];
                                    $classe = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "buttonBloqueado";
                                    $icone = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "<i class='bx bx-lock-alt'></i>";

                                    if ($nome === "Trilha 1") {
                                        $valor = "Trilha 21";
                                    } elseif ($nome === "Trilha 2") {
                                        $valor = "Trilha 22";
                                    } elseif ($nome === "Trilha 3") {
                                        $valor = "Trilha 23";
                                    } elseif ($nome === "Trilha 4") {
                                        $valor = "Trilha 24";
                                    } elseif ($nome === "Chefão") {
                                        $valor = "Trilha 25";
                                    } else {
                                        $valor = $nome;
                                    }

                                    if ($classe === "buttonBloqueado") {
                                        echo "<button type='button' class='$classe' disabled>
                                                <li>$nome $icone</li>
                                              </button>";
                                    } else {
                                        echo "<button type='submit' name='trilha' value='$valor' class='$classe'>
                                                <li>$nome $icone</li>
                                              </button>";
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </ul>
                    <ul class="trilhaUL">
                        <button id="togglePil" class="<?php echo $controlador->verificarTrilha2($_SESSION['usuario_id']) >= 20 ? '' : 'buttonBloqueado'; ?>">
                            Pilhas
                            <?php echo $controlador->verificarTrilha2($_SESSION['usuario_id']) >= 20 ? '' : "<i class='bx bx-lock-alt'></i>"; ?>
                        </button>
                        <div id="trilhasPil" class="trilhas">
                            <form action="questoes.php" method="post">
                                <input type="hidden" name="extra" value="aumentarVida">
                                <?php
                                $trilhas = [
                                    ["Trilha 1", 25],
                                    ["Trilha 2", 26],
                                    ["Trilha 3", 27],
                                    ["Trilha 4", 28],
                                    ["Chefão", 29]
                                ];

                                foreach ($trilhas as $trilha) {
                                    $nome = $trilha[0];
                                    $nivel = $trilha[1];
                                    $classe = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "buttonBloqueado";
                                    $icone = $controlador->verificarTrilha2($_SESSION['usuario_id']) >= $nivel ? "" : "<i class='bx bx-lock-alt'></i>";

                                    if ($nome === "Trilha 1") {
                                        $valor = "Trilha 26";
                                    } elseif ($nome === "Trilha 2") {
                                        $valor = "Trilha 27";
                                    } elseif ($nome === "Trilha 3") {
                                        $valor = "Trilha 28";
                                    } elseif ($nome === "Trilha 4") {
                                        $valor = "Trilha 29";
                                    } elseif ($nome === "Chefão") {
                                        $valor = "Trilha 30";
                                    } else {
                                        $valor = $nome;
                                    }

                                    if ($classe === "buttonBloqueado") {
                                        echo "<button type='button' class='$classe' disabled>
                                                <li>$nome $icone</li>
                                              </button>";
                                    } else {
                                        echo "<button type='submit' name='trilha' value='$valor' class='$classe'>
                                                <li>$nome $icone</li>
                                              </button>";
                                    }
                                }
                                ?>
                            </form>
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