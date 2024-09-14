<?php
function conectarBD()
{
    $conexao = mysqli_connect("localhost", "root", "", "codestruct");
    return $conexao;
}