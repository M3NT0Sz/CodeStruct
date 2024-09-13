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

    public function puxarQuestoes($tipo)
    {
        $tipos = '';
        $listaTipos = $this->bancoDeDados->retornarQuestoes($tipo);
        while ($questao = mysqli_fetch_assoc($listaTipos)) {
            $tipos .=
                "<h2>" . $questao['pergunta'] . "</h2>" .
                "<button>" . $questao["opcao_a"] . "</button>" .
                "<button>" . $questao["opcao_b"] . "</button>" .
                "<button>" . $questao["opcao_c"] . "</button>" .
                "<button>" . $questao["opcao_d"] . "</button>";
        }
        return $tipos;
    }
}
