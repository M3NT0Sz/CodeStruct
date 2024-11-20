<?php
error_reporting(0);
session_start();
require_once "../controller/Controller.php";

$controlador = new Controller();

if ($_POST['extra'] === "aumentarVida") {
    $controlador->aumentarVida($_SESSION['usuario_id']);
    $controlador->voltarQuestao($_SESSION['usuario_id']);
    unset($_POST['aumentarVida']);
}

$vida = $controlador->verificarVida($_SESSION['usuario_id']);
$trilha = $_POST['trilha'] ?? $_SESSION['trilha'] ?? null;

function getTipoENivel($i) {
    $tipos = [
        'TAD', 'Lista Simplesmente Encadeada', 'Lista Duplamente Encadeada', 'Fila FIFO', 'Fila de Prioridade',
        'Pilha', 'Árvore Binária', 'Árvore B', 'Árvore Trie', 'Árvore AVL', 'Árvore Rubro-Negra'
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
                <section style='display: flex; justify-content: space-between; align-items: center;'>
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <img src='./Imagens/<?= $i < $vida ? "poteVida" : "poteVazio" ?>.png' alt='Pote de Vida' style='width: 50px; height: 50px;'>
                    <?php endfor; ?>
                </section>
                <?= $controlador->visualizarPergunta($_SESSION['usuario_id']) . "/5" ?>
                <div>
                    <?php
                    if ($trilha) {
                        $_SESSION['trilhas'] = intval(substr($trilha, 7)) - 1;
                        list($tipo, $nivel) = getTipoENivel($_SESSION['trilhas'] + 1);
                    ?>
                        <form action="../model/processamento.php" method="post">
                            <?= $controlador->puxarQuestoes($tipo, $nivel) ?>
                        </form>
                    <?php
                        unset($_SESSION['trilha']);
                    } else {
                        echo "Trilha não encontrada.";
                    }
                    ?>
                </div>
            </section>
            <img src="./Imagens/Personagem/1.png" alt="" style="position: fixed; bottom: 0; left: 0; width: 40%; height: 40%;">
        </section>
    </section>
</body>

<script src="./JS/cutCine.js"></script>

</html>
