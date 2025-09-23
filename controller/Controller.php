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

    public function visualizarImg($cod)
    {
        $tipos = '';
        $listaTipos = $this->bancoDeDados->pegarImg($cod);
        while ($questao = mysqli_fetch_assoc($listaTipos)) {

            $tipos .= "<img src='data:image/jpeg;base64," . base64_encode($questao['use_img']) . "'/>";
        }
        return $tipos;
    }

    public function verificarTrilha($cod)
    {
        return $this->bancoDeDados->pegarTrilha($cod);
    }

    public function verificarTrilha2($cod)
    {
        return $this->bancoDeDados->pegarTrilha2($cod);
    }

    public function verificarVida($cod)
    {
        return $this->bancoDeDados->pegarVida($cod);
    }

    public function aumentarVida($cod, $vida)
    {
        $this->bancoDeDados->aumentarVida($cod, $vida);
    }

    public function visualizarCash($cod)
    {
        return $this->bancoDeDados->pegarCash($cod);
    }

    public function puxarQuestoes($tipo, $nivel)
    {
        $tipos = '';
        $listaTipos = $this->bancoDeDados->retornarQuestoes($tipo, $nivel);
        while ($questao = mysqli_fetch_assoc($listaTipos)) {
            $alternativas = [
                $questao["opcao_a"],
                $questao["opcao_b"],
                $questao["opcao_c"],
                $questao["opcao_d"]
            ];
            // Embaralha as alternativas
            shuffle($alternativas);
            $tipos .=
                "<h2>" . $questao['pergunta'] . "</h2>" .
                "<section class='alternativas'>";
            foreach ($alternativas as $alt) {
                $tipos .= "<button type='submit' name='resposta' value='" . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . "</button>";
            }
            $tipos .= "</section>";
        }
        return $tipos;
    }

    public function puxarEditar()
    {
        $tipos = '';
        $listaTipos = $this->bancoDeDados->retornarEditar($_SESSION['usuario_id']);
        while ($editar = mysqli_fetch_assoc($listaTipos)) {
            $tipos .=
                "<h3>Nome: <input type='text' name='inputNomeEditar' value='" . $editar['use_name'] . "'></h3>" .
                "<h3>Email: <input type='email' name='inputEmailEditar' value='" . $editar['use_email'] . "'></h3>";
        }
        return $tipos;
    }

    public function editarUsuario($nome, $email)
    {
        $this->bancoDeDados->editarUsuario($nome, $email, $_SESSION['usuario_id']);
    }

    public function editarUsuarioImage($cod, $img)
    {
        $this->bancoDeDados->editarUsuarioImage($cod, $img);
    }

    public function obterUsuarioId($email)
    {
        return $this->bancoDeDados->retornarUsuarioId($email);
    }

    public function visualizarPergunta($cod)
    {
        return $this->bancoDeDados->pegarPergunta($cod);
    }

    public function voltarQuestao($cod)
    {
        $this->bancoDeDados->voltarQuestao($cod);
    }

    public function verificarResposta($resposta)
    {
        $this->bancoDeDados->verificarResposta($resposta);
    }

    public function comprarItem($cod, $cash, $imagem, $tipo)
    {
        if ($this->bancoDeDados->pegarCash($cod) >= $cash) {
            $_SESSION['Imagem' . $imagem] = $tipo;
            $this->bancoDeDados->comprarItem($cod, $cash);
        } else {
            echo "<script>alert('Você não tem dinheiro suficiente!');</script>";
        }
    }

    public function pegarVida($cod)
    {
        return $this->bancoDeDados->pegarVida($cod);
    }

    public function aumentarPergunta($cod, $pergunta)
    {
        $this->bancoDeDados->aumentarPergunta($cod, $pergunta);
    }
}
