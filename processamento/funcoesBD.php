<?php
function conectarBD()
{
    $conexao = mysqli_connect("localhost", "root", "", "codestruct");
    return $conexao;
}

function inserirUsuario($nome, $email, $senha)
{
    $conexao = conectarBD();
    $consulta = "INSERT INTO usuarios (usu_nome, usu_email, usu_senha) VALUES ('$nome', '$email', '$senha')";

    $_SESSION['cadastro'] = "Usuario cadastrado com sucesso";

    mysqli_query($conexao, $consulta);
}


function verificarUsuario($email, $senha){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM usuarios WHERE usu_email = '$email' and usu_senha = '$senha'";
    $resultado = mysqli_query($conexao, $consulta);

    if(mysqli_num_rows($resultado) == 1){
        $_SESSION['logado'] = "Sim";
    } else {
        $_SESSION['cadastro'] = "Usuario não cadastrado";
    }
}