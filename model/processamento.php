<?php

session_start();

require "../controller/Controller.php";

$controlador = new Controller();

if (
    !empty($_POST['inputNome']) && !empty($_POST['inputEmail']) &&
    !empty($_POST['inputSenha'])
) {

    $nome = $_POST['inputNome'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    $img = addslashes(file_get_contents($_FILES['inputFile']['tmp_name']));

    $controlador->inserirUsuario($nome, $email, $senha, $img);

    header("Location: ../view/login.php");
    die();
} else {
    header('Location:../index.php');
    die();
}

if (
    !empty($_POST['inputEmail']) &&
    !empty($_POST['inputSenha'])
) {
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    if ($controlador->verificarUsuario($email, $senha)) {
        $_SESSION['estaLogado'] = TRUE;
        $_SESSION['logado'] = "Sim";
        $_SESSION['usuario_id'] = $controlador->obterUsuarioId($email);
        header('Location:../index.php');
    } else {
        header('Location:../view/login.php');
    }
    die();
} else {
    header('Location:../index.php');
    die();
}

if (!empty($_POST['resposta'])) {
    $resposta = $_POST['resposta'];
    $controlador->verificarResposta($resposta);

    if ($_SESSION['resposta'] == "Correta" || $_SESSION['resposta'] == "Errada") {
        unset($_SESSION['resposta']);
        header('Location:../view/questoes.php');
    } else if ($_SESSION['resposta'] == "Incorreta") {
        unset($_SESSION['resposta']);
        header('Location:../view/jornada.php');
    } else if ($_SESSION['acabou'] == "Acabou") {
        unset($_SESSION['acabou']);
        header('Location:../view/jornada.php');
    }
    die();
} else {
    header('Location:../index.php');
    die();
}


if (isset($_SESSION['logado']) == "Sim") {
    session_destroy();
    header("Location: ../index.php");
    die();
} else {
    header('Location:../index.php');
    die();
}
