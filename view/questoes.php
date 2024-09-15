<?php
session_start();
require_once "../controller/Controller.php";
$controlador = new Controller();
if ($_POST['trilha'] === 'Trilha 1' || $_SESSION['trilha'] === 'Trilha 1') {
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
