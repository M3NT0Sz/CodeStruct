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
}
