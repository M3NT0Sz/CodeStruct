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
        header('Location:../index.php');
    } else {
        header('Location:../view/login.php');
    }
    die();
}


if (isset($_SESSION['logado']) == "Sim") {
    session_destroy();
    header("Location: ../index.php");
    die();
}
