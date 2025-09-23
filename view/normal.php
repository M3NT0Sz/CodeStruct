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
$random_level = rand(1, 3);
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
    <section class="tudoQuest" style="min-height:100vh;display:flex;flex-direction:column;justify-content:center;align-items:center;background:linear-gradient(135deg,#8954bb 0%,#fafafa 100%);">
        <nav style="width:100%;display:flex;justify-content:space-between;align-items:center;padding:20px 40px 0 40px;">
            <img src="./Imagens/Logo.png" alt="Logo CodeStruct" style="height:60px;">
            <h1 style="color:#8954bb;font-size:2.2rem;letter-spacing:2px;">Modo Normal</h1>
            <a href="../index.php" style="text-decoration:none;"><button style="background:#8954bb;color:#fff;border:none;padding:12px 28px;border-radius:8px;font-size:1rem;box-shadow:0 0 8px #8954bb;transition:.3s;">Voltar</button></a>
        </nav>
        <section class="questoes" style="width:100%;display:flex;justify-content:center;align-items:center;">
            <section class="question-box" style="width:100%;max-width:600px;">
                <?php
                if ($_POST['extra'] === "aumentarVida") {
                    $vida = 3;
                    $pergunta = 1;
                    if ($_SESSION['Imagem1'] == 2) $pergunta++;
                    if ($_SESSION['Imagem2'] == 2) $pergunta++;
                    if ($_SESSION['Imagem3'] == 2) $pergunta++;
                    if ($_SESSION['Imagem1'] == 1) $vida++;
                    if ($_SESSION['Imagem2'] == 1) $vida++;
                    if ($_SESSION['Imagem3'] == 1) $vida++;
                    $controlador->aumentarVida($_SESSION['usuario_id'], $vida);
                    $controlador->aumentarPergunta($_SESSION['usuario_id'], $pergunta);
                    unset($_POST['aumentarVida']);
                }

                $vida = $controlador->verificarVida($_SESSION['usuario_id']);
                $maxVida = $controlador->pegarVida($_SESSION['usuario_id']);
                $perguntaAtual = $controlador->visualizarPergunta($_SESSION['usuario_id']);
                $totalPerguntas = 5;
                ?>
                <div style="width:100%;display:flex;flex-direction:column;align-items:center;gap:10px;">
                    <div style="display:flex;gap:8px;align-items:center;justify-content:center;">
                        <?php
                        for ($i = 0; $i < $maxVida; $i++) {
                            if ($i < $vida) {
                                echo "<img src='./Imagens/poteVida.png' alt='Pote de Vida' style='width:40px;height:40px;'>";
                            } else {
                                echo "<img src='./Imagens/poteVazio.png' alt='Pote de Vida Vazio' style='width:40px;height:40px;opacity:.5;'>";
                            }
                        }
                        ?>
                    </div>
                    <div style="width:100%;margin:10px 0;">
                        <div style="background:#e0e0e0;border-radius:8px;height:18px;width:100%;overflow:hidden;">
                            <div style="background:#8954bb;height:100%;width:<?php echo ($perguntaAtual/$totalPerguntas)*100; ?>%;transition:.5s;"></div>
                        </div>
                        <span style="font-size:1rem;color:#8954bb;font-weight:bold;display:block;text-align:center;margin-top:4px;">Pergunta <?php echo $perguntaAtual; ?> de <?php echo $totalPerguntas; ?></span>
                    </div>
                </div>
                <div style="width:100%;margin-top:20px;">
                    <?php
                    if ($vida <= 0) {
                        // Resetar vida e progresso para nova partida
                        $controlador->aumentarVida($_SESSION['usuario_id'], 3);
                        $controlador->aumentarPergunta($_SESSION['usuario_id'], 1);
                        echo '<div style="text-align:center;padding:30px 0;">
                                <h2 style="color:#bb5454;">Suas vidas acabaram!</h2>
                                <p style="margin:20px 0;">Clique abaixo para tentar novamente.</p>
                                <form method="post" action="./normal.php">
                                    <button type="submit" style="background:#bb5454;color:#fff;border:none;padding:16px 32px;border-radius:8px;font-size:1.2rem;box-shadow:0 0 8px #bb5454;transition:.3s;">Reiniciar Jogo</button>
                                </form>
                              </div>';
                    } else if ($perguntaAtual >= $totalPerguntas) {
                        // Resetar progresso para nova partida
                        $controlador->aumentarPergunta($_SESSION['usuario_id'], 1);
                        echo '<div style="text-align:center;padding:30px 0;">
                                <h2 style="color:#8954bb;">Parabéns! Você concluiu o modo normal!</h2>
                                <p style="margin:20px 0;">Clique abaixo para jogar novamente.</p>
                                <form method="post" action="./normal.php">
                                    <button type="submit" style="background:#8954bb;color:#fff;border:none;padding:16px 32px;border-radius:8px;font-size:1.2rem;box-shadow:0 0 8px #8954bb;transition:.3s;">Jogar Novamente</button>
                                </form>
                              </div>';
                    } else {
                        echo '<form action="../model/processamento.php" method="post">';
                        echo $controlador->puxarQuestoes($random_trilha, $random_level);
                        echo '</form>';
                    }
                    ?>
                </div>
            </section>
            <img src="./Imagens/Personagem/1.png" alt="Personagem" style="position:fixed;bottom:0;left:0;width:10vw;min-width:80px;height:auto;z-index:2;filter:drop-shadow(0 0 10px #8954bb88);">
        </section>
    </section>
</body>

</html>