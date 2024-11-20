<?php

session_start();

require "../controller/Controller.php";

$controlador = new Controller();

if (!empty($_POST['inputNomeEditar']) && !empty($_POST['inputEmailEditar'])) {
    $nome = $_POST['inputNomeEditar'];
    $email = $_POST['inputEmailEditar'];

    $controlador->editarUsuario($nome, $email);

    header("Location: ../view/jornada.php");
    die();
} else if (!empty($_FILES['inputImageEditar'])) {
    $image = addslashes(file_get_contents($_FILES['inputImageEditar']['tmp_name']));
    $controlador->editarUsuarioImage($_SESSION['usuario_id'], $image);
    header("location: ../view/jornada.php");
} else if (
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
} else if (
    !empty($_POST['inputEmailLogin']) &&
    !empty($_POST['inputSenhaLogin'])
) {
    $email = $_POST['inputEmailLogin'];
    $senha = $_POST['inputSenhaLogin'];

    if ($controlador->verificarUsuario($email, $senha)) {
        $_SESSION['estaLogado'] = TRUE;
        $_SESSION['logado'] = "Sim";
        $_SESSION['usuario_id'] = $controlador->obterUsuarioId($email);
        header('Location:../index.php');
    } else {
        header('Location:../view/login.php');
    }
    die();
} else if (!empty($_POST['resposta'])) {
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
} else if ($_POST['1']) {
    $imagem = $_POST['imagem'];
    $controlador->comprarItem($_SESSION['usuario_id'], 200, $imagem, 1);
    header('Location:../view/jornada.php');
    die();
} else if ($_POST['2']) {
    $imagem = $_POST['imagem'];
    $controlador->comprarItem($_SESSION['usuario_id'], 400, $imagem, 2);
    header('Location:../view/jornada.php');
    die();
} else if ($_POST['3']) {
    $imagem = $_POST['imagem'];
    $controlador->comprarItem($_SESSION['usuario_id'], 500, $imagem, 3);
    header('Location:../view/jornada.php');
    die();
} else if (isset($_SESSION['logado']) == "Sim") {
    session_destroy();
    header("Location: ../index.php");
    die();
} else {
    header('Location:../index.php');
    die();
}
