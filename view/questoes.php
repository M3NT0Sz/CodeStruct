<?php
session_start();
require_once "../controller/Controller.php";
$controlador = new Controller();
if ($_POST['extra'] === "aumentarVida") {
    $controlador->aumentarVida($_SESSION['usuario_id']);
    unset($_POST['aumentarVida']);
}
if ($_POST['trilha'] === 'Trilha 1' || $_SESSION['trilha'] === 'Trilha 1') {
    echo $controlador->verificarVida($_SESSION['usuario_id']);
    echo $controlador->visualizarPergunta($_SESSION['usuario_id']);
?>
    <form action="../model/processamento.php" method="post">
        <?php
        echo $controlador->puxarQuestoes('TAD');
        ?>
    </form>
<?php
    unset($_SESSION['trilha']);
} else {
}
