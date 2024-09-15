<?php

class BancoDeDados
{
    private $host;
    private $login;
    private $senha;
    private $dataBase;

    public function __construct($host, $login, $senha, $dataBase)
    {
        $this->host = $host;
        $this->login = $login;
        $this->senha = $senha;
        $this->dataBase = $dataBase;
    }

    //Métodos
    public function conectarBD()
    {
        $conexao = mysqli_connect($this->host, $this->login, $this->senha, $this->dataBase);
        return ($conexao);
    }

    public function inserirUsuario($usuario)
    {
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO usuario (use_name, use_email, use_senha, use_img) VALUES ('" . $usuario->getNome() . "', '" . $usuario->getEmail() . "', '" . $usuario->getSenha() . "', '" . $usuario->getImg() . "')";

        $_SESSION['cadastro'] = "Usuario cadastrado com sucesso";

        mysqli_query($conexao, $consulta);

        $userId = mysqli_insert_id($conexao);
        $consultaJornada = "INSERT INTO jornada (jor_codUser, jor_cash, jor_fase) VALUES ('$userId', 0, 0)";
        mysqli_query($conexao, $consultaJornada);
    }


    public function verificarUsuario($email, $senha)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM usuario WHERE use_email = '$email' and use_senha = '$senha'";
        $resultado = mysqli_query($conexao, $consulta);

        if (mysqli_num_rows($resultado) == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function retornarCash($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT jor_cash FROM jornada WHERE jor_cod = $cod";
        $resultado = mysqli_query($conexao, $consulta);

        return $resultado;
    }

    public function retornarQuestoes($tipo)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM perguntas WHERE per_tipo = '$tipo' ORDER BY RAND() LIMIT 1";

        $listaTipos = mysqli_query($conexao, $consulta);
        return $listaTipos;
    }

    public function retornarUsuarioId($email)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT use_cod FROM usuario WHERE use_email = '$email'";
        $resultado = mysqli_query($conexao, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        return $row['use_cod'];
    }

    public function pegarPontos($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT jor_cash FROM jornada WHERE jor_codUser = " . $cod;
        $resultado = mysqli_query($conexao, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        return $row['jor_cash'];
    }

    public function pegarCodJornada($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT jor_cod FROM jornada WHERE jor_codUser = " . $cod;
        $resultado = mysqli_query($conexao, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        return $row['jor_cod'];
    }

    public function pegarTrilha($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT jor_fase FROM jornada WHERE jor_cod = " . $cod;
        $resultado = mysqli_query($conexao, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        $fase = $row['jor_fase'] + 1;
        return $fase;
    }

    public function verificarResposta($resposta, $pergunta)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM perguntas WHERE resposta_correta = '$resposta'";
        $resultado = mysqli_query($conexao, $consulta);

        if (mysqli_num_rows($resultado) == 1) {
            $_SESSION['resposta'] = "Resposta correta";
            $_SESSION['trilha'] = "Trilha " . $this->pegarTrilha($_SESSION['usuario_id']) ?? 1;
            $pontos = $this->pegarPontos($_SESSION['usuario_id']);
            $jor_cod = $this->pegarCodJornada($_SESSION['usuario_id']);
            $consultaUpdate = "UPDATE jornada SET jor_cash = jor_cash + '$pontos' WHERE jor_cod = '$jor_cod'";
            mysqli_query($conexao, $consultaUpdate);
        } else {
            $_SESSION['resposta'] = "Resposta incorreta";
        }
    }
}
