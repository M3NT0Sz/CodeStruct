<?php
error_reporting(0);
session_start();
require_once "../controller/Controller.php";

$controlador = new Controller();

if ($_POST['extra'] === "aumentarVida") {
    $vida = 3;
    $pergunta = 1;

    if($_SESSION['Imagem1'] == 2){
        $pergunta = $pergunta + 1;
    }
    if($_SESSION['Imagem2'] == 2){
        $pergunta = $pergunta + 1;
    }
    if($_SESSION['Imagem3'] == 2){
        $pergunta = $pergunta + 1;
    }

    if ($_SESSION['Imagem1'] == 1) {
        $vida = $vida + 1;
    }
    if ($_SESSION['Imagem2'] == 1) {
        $vida = $vida + 1;
    }
    if ($_SESSION['Imagem3'] == 1) {
        $vida = $vida + 1;
    }
    $controlador->aumentarVida($_SESSION['usuario_id'], $vida);
    $controlador->aumentarPergunta($_SESSION['usuario_id'], $pergunta);
    // $controlador->voltarQuestao($_SESSION['usuario_id']);
    unset($_POST['aumentarVida']);
}

$vida = $controlador->verificarVida($_SESSION['usuario_id']);
$trilha = $_POST['trilha'] ?? $_SESSION['trilha'] ?? null;

function getTipoENivel($i)
{
    $tipos = [
        'TAD',
        'Lista Simplesmente Encadeada',
        'Lista Duplamente Encadeada',
        'Fila FIFO',
        'Fila de Prioridade',
        'Pilha',
        'Árvore Binária',
        'Árvore B',
        'Árvore Trie',
        'Árvore AVL',
        'Árvore Rubro-Negra'
    ];
    $tipoIndex = intdiv($i - 1, 5);
    $nivel = ($i - 1) % 5 < 2 ? 1 : (($i - 1) % 5 < 4 ? 2 : 3);
    return [$tipos[$tipoIndex], $nivel];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>CodeStruct</title>
</head>

<body>
    <section class="tudoQuest">
        <section class="questoes">
            <section class="question-box">
                <?php
                session_start();
                require_once "../controller/Controller.php";
                $controlador = new Controller();
                if ($_POST['extra'] === "aumentarVida") {
                    $controlador->aumentarVida($_SESSION['usuario_id']);
                    $controlador->voltarQuestao($_SESSION['usuario_id']);
                    unset($_POST['aumentarVida']);
                }

                $vida = $controlador->verificarVida($_SESSION['usuario_id']);
                echo "<section style='display: flex; justify-content: space-between; align-items: center;'>";

                for ($i = 0; $i < 3; $i++) {
                    if ($i < $vida) {
                        echo "<img src='./Imagens/poteVida.png' alt='Pote de Vida' style='width: 50px; height: 50px;'>";
                    } else {
                        echo "<img src='./Imagens/poteVazio.png' alt='Pote de Vida Vazio' style='width: 50px; height: 50px;'>";
                    }
                }

                echo "</section>";
                echo $controlador->visualizarPergunta($_SESSION['usuario_id']) . "/5";
                echo "<div>";

                for ($i = 1; $i <= 30; $i++) {
                    if ($_POST['trilha'] === "Trilha $i" || $_SESSION['trilha'] === "Trilha $i") {
                        $_SESSION['trilhas'] = $i - 1;
                        $tipo = '';
                        if ($i <= 5) {
                            if ($i <= 2) {
                                $nivel = 1;
                            } elseif ($i <= 4) {
                                $nivel = 2;
                            } elseif ($i == 5) {
                                $nivel = 3;
                            }
                            $tipo = 'TAD';
                        } elseif ($i <= 10) {
                            if ($i <= 7) {
                                $nivel = 1;
                            } elseif ($i <= 9) {
                                $nivel = 2;
                            } elseif ($i == 10) {
                                $nivel = 3;
                            }
                            $tipo = 'Lista Simplesmente Encadeada';
                        } elseif ($i <= 15) {
                            if ($i <= 12) {
                                $nivel = 1;
                            } elseif ($i <= 14) {
                                $nivel = 2;
                            } elseif ($i == 15) {
                                $nivel = 3;
                            }
                            $tipo = 'Lista Duplamente Encadeada';
                        } elseif ($i <= 20) {
                            if ($i <= 17) {
                                $nivel = 1;
                            } elseif ($i <= 19) {
                                $nivel = 2;
                            } elseif ($i == 20) {
                                $nivel = 3;
                            }
                            $tipo = 'Fila FIFO';
                        } elseif ($i <= 25) {
                            if ($i <= 22) {
                                $nivel = 1;
                            } elseif ($i <= 24) {
                                $nivel = 2;
                            } elseif ($i == 25) {
                                $nivel = 3;
                            }
                            $tipo = 'Fila de Prioridade';
                        } else {
                            if ($i <= 27) {
                                $nivel = 1;
                            } elseif ($i <= 29) {
                                $nivel = 2;
                            } elseif ($i == 30) {
                                $nivel = 3;
                            }
                            $tipo = 'Pilha';
                        }
                ?>
                        <form action="../model/processamento.php" method="post">
                            <?= $controlador->puxarQuestoes($tipo, $nivel) ?>
                        </form>
                    <?php
                        unset($_SESSION['trilha']);
                    } else {
                        echo "Trilha não encontrada.";
                    }
                }
                if ($i > 30) {
                    echo "Trilha não encontrada.";
                }
                ?>
                </section>
            </section>
            <img src="./Imagens/Personagem/1.png" alt="" style="position: fixed; bottom: 0; left: 0; width: 40%; height: 40%;">
        </section>
    </section>
</body>



</html>