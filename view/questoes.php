<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>codestruct</title>

</head>
<body>
    <section class="questoes">
        <section class="question-box">
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
                ?>
            </scetion>
    </section>
   
</body>
</html>