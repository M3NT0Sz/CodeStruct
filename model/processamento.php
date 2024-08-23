<?php

session_start();

require_once "funcoesBD.php";

if (
    !empty($_POST['inputNome']) && !empty($_POST['inputEmail']) &&
    !empty($_POST['inputSenha'])
) {

    $nome = $_POST['inputNome'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    inserirUsuario($nome, $email, $senha);

    header("Location: ../login.php");
    die();
}

if (
    !empty($_POST['inputEmail']) &&
    !empty($_POST['inputSenha'])
) {
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    verificarUsuario($email, $senha);

    if (isset($_SESSION['logado']) != "") {
        header("Location: ../index.php");
    } else {
        header("Location: ../login.php");
    }

    die();
}


if(isset($_SESSION['logado']) == "Sim"){
    session_destroy();
    header("Location: ../index.php");
    die();
}