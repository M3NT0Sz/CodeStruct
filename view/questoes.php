<?php
session_start();
require_once "../controller/Controller.php";
$controlador = new Controller();
if ($_POST['extra'] === "aumentarVida") {
    $controlador->aumentarVida($_SESSION['usuario_id']);
    $controlador->voltarQuestao($_SESSION['usuario_id']);
    unset($_POST['aumentarVida']);
}
echo $controlador->verificarVida($_SESSION['usuario_id']);
echo $controlador->visualizarPergunta($_SESSION['usuario_id']) . "/5";
if ($_POST['trilha'] === 'Trilha 1' || $_SESSION['trilha'] === 'Trilha 1') {
?>
    <form action="../model/processamento.php" method="post">
        <?php
        echo $controlador->puxarQuestoes('TAD');
        ?>
    </form>
<?php
    unset($_SESSION['trilha']);
} elseif ($_POST['trilha'] === 'Trilha 2' || $_SESSION['trilha'] === 'Trilha 2') {
?>
    <form action="../model/processamento.php" method="post">
        <?php
        echo $controlador->puxarQuestoes('TAD');
        ?>
    </form>
<?php
    unset($_SESSION['trilha']);
} elseif ($_POST['trilha'] === 'Trilha 3' || $_SESSION['trilha'] === 'Trilha 3') {
?>
    <form action="../model/processamento.php" method="post">
        <?php
        echo $controlador->puxarQuestoes('TAD');
        ?>
    </form>
<?php
    unset($_SESSION['trilha']);
} elseif ($_POST['trilha'] === 'Trilha 4' || $_SESSION['trilha'] === 'Trilha 4') {
?>
    <form action="../model/processamento.php" method="post">
        <?php
        echo $controlador->puxarQuestoes('TAD');
        ?>
    </form>
<?php
    unset($_SESSION['trilha']);
} elseif ($_POST['trilha'] === 'Trilha 5' || $_SESSION['trilha'] === 'Trilha 5') {
?>
    <form action="../model/processamento.php" method="post">
        <?php
        echo $controlador->puxarQuestoes('TAD');
        ?>
    </form>
<?php
    unset($_SESSION['trilha']);
} else {
    echo "Trilha não encontrada.";
}
