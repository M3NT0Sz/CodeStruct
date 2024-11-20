<?php
error_reporting(0);
session_start();
require_once "../controller/Controller.php";
$controlador = new Controller();

// Randomly select a trail and level
$trilhas = [
    'TAD' => 5,
    'Lista Simplesmente Encadeada' => 10,
    'Lista Duplamente Encadeada' => 15,
    'Fila FIFO' => 20,
    'Fila de Prioridade' => 25,
    'Pilha' => 30,
    'Árvore Binária' => 35,
    'Árvore B' => 40,
    'Árvore Trie' => 45,
    'Árvore AVL' => 50,
    'Árvore Rubro-Negra' => 55
];

$random_trilha = array_rand($trilhas);
$max = $trilhas[$random_trilha];
$random_level = ceil(rand(1, $max) / ($max / 3));
$_SESSION['trilhas'] = $random_level - 1;

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

                echo $random_trilha;
                ?>
                <form action="../model/processamento.php" method="post">
                    <?php
                    echo $controlador->puxarQuestoes($random_trilha, $random_level);
                    ?>
                </form>
                </div>
            </section>
            <img src="./Imagens/Personagem/1.png" alt="" style="position: fixed; bottom: 0; left: 0; width: 40%; height:40%">
        </section>
    </section>
</body>

<script src="./JS/cutCine.js"></script>

</html>
