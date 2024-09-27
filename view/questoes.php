<?php
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>codestruct</title>

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
                    if ($_POST['trilha'] === 'Trilha ' . $i || $_SESSION['trilha'] === 'Trilha ' . $i) {
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
                            <?php
                            echo $controlador->puxarQuestoes($tipo, $nivel);
                            ?>
                        </form>
                <?php
                        unset($_SESSION['trilha']);
                        break;
                    }
                }
                if ($i > 30) {
                    echo "Trilha não encontrada.";
                }
                ?>
                </scetion>
            </section>
            <img src="./Imagens/Personagem/1.png" alt="" style="position: fixed; bottom: 0; left: 0; width: 40%px; height:40%">
        </section>


</body>

<script src="./JS/cutCine.js"></script>

</html>