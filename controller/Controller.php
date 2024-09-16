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

    public function verificarVida($cod)
    {
        return $this->bancoDeDados->pegarVida($cod);
    }

    public function visualizarCash($cod)
    {
        return $this->bancoDeDados->pegarCash($cod);
    }

    public function puxarQuestoes($tipo)
    {
        $tipos = '';
        $listaTipos = $this->bancoDeDados->retornarQuestoes($tipo);
        while ($questao = mysqli_fetch_assoc($listaTipos)) {
            $tipos .=
                "<h2>" . $questao['pergunta'] . "</h2>" .
                "<button type='submit' name='resposta' value='" . $questao["opcao_a"] . "'>" . $questao["opcao_a"] . "</button>" .
                "<button type='submit' name='resposta' value='" . $questao["opcao_b"] . "'>" . $questao["opcao_b"] . "</button>" .
                "<button type='submit' name='resposta' value='" . $questao["opcao_c"] . "'>" . $questao["opcao_c"] . "</button>" .
                "<button type='submit' name='resposta' value='" . $questao["opcao_d"] . "'>" . $questao["opcao_d"] . "</button>";
        }
        return $tipos;
    }

    public function obterUsuarioId($email)
    {
        return $this->bancoDeDados->retornarUsuarioId($email);
    }

    public function verificarResposta($resposta)
    {
        $this->bancoDeDados->verificarResposta($resposta);
    }
}
