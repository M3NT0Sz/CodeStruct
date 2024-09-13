<?php

require_once "../model/BancoDeDados.php";
require_once "../model/Usuario.php";

class Controller
{
    private $bancoDeDados;
    public function __construct()
    {
        $this->bancoDeDados = new BancoDeDados("localhost", "root", "", "codestruct");
    }

    public function inserirUsuario($nome, $email, $senha, $img)
    {
        $usuario = new Usuario($nome, $email, $senha, $img);
        $this->bancoDeDados->inserirUsuario($usuario);
    }

    public function verificarUsuario($email, $senha)
    {
        if ($this->bancoDeDados->verificarUsuario($email, $senha)) {
            return true;
        } else {
            return false;
        }
    }

    public function visualizarCash($cod)
    {
        $this->bancoDeDados->retornarCash($cod);
    }
}
