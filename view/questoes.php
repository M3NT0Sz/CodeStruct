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
            echo "<section style='font-size: 20px;'>" . $controlador->verificarVida($_SESSION['usuario_id']) . "</section>";
            echo "<section style='font-size: 20px;'>" . $controlador->visualizarPergunta($_SESSION['usuario_id']) . "/5</section>";
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
            ?>
            </scetion>
        </section>
        <img src="./Imagens/Personagem/1.png" alt="" style="position: fixed; bottom: 0; left: 0;">
    </section>
    

</body>

</html>