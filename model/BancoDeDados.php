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

    public function retornarEditar($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM usuario WHERE use_cod = $cod";
        $resultado = mysqli_query($conexao, $consulta);

        return $resultado;
    }

    public function editarUsuario($nome, $email, $cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "UPDATE usuario SET use_name = '$nome', use_email = '$email' WHERE use_cod = $cod";
        mysqli_query($conexao, $consulta);
    }

    public function editarUsuarioImage($cod, $img)
    {
        $conexao = $this->conectarBD();
        $consulta = "UPDATE usuario SET use_img = '$img' WHERE use_cod = $cod";
        mysqli_query($conexao, $consulta);
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

    public function pegarImg($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT use_img FROM usuario WHERE use_cod = $cod";
        $resultado = mysqli_query($conexao, $consulta);

        return $resultado;
    }

    public function retornarCash($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT jor_cash FROM jornada WHERE jor_cod = $cod";
        $resultado = mysqli_query($conexao, $consulta);

        return $resultado;
    }

    public function retornarQuestoes($tipo, $nivel)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM perguntas WHERE per_tipo = '$tipo' AND per_nivel = '$nivel' ORDER BY RAND() LIMIT 1";

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

    public function pegarPontos($resposta)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT per_pontos FROM perguntas WHERE resposta_correta = '$resposta'";
        $resultado = mysqli_query($conexao, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        return $row['per_pontos'];
    }

    public function pegarCash($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT jor_cash FROM jornada WHERE jor_codUser = " . $cod;
        $resultado = mysqli_query($conexao, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        if ($row['jor_cash'] == 0) {
            return 0;
        } else {
            return $row['jor_cash'];
        }
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
        $consulta = "SELECT jor_fase FROM jornada WHERE jor_codUser = " . $cod;
        $resultado = mysqli_query($conexao, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        $fase = $row['jor_fase'] + 1;
        return $fase;
    }

    public function pegarTrilha2($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT jor_fase FROM jornada WHERE jor_codUser = " . $cod;
        $resultado = mysqli_query($conexao, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        $fase = $row['jor_fase'];
        return $fase;
    }

    public function aumentarVida($cod, $vida)
    {
        $conexao = $this->conectarBD();
        $consulta = "UPDATE jornada SET jor_vida = $vida WHERE jor_codUser = " . $cod;
        mysqli_query($conexao, $consulta);
    }

    public function pegarVida($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT jor_vida FROM jornada WHERE jor_codUser = " . $cod;
        $resultado = mysqli_query($conexao, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        return $row['jor_vida'];
    }

    public function pegarPergunta($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT jor_pergunta FROM jornada WHERE jor_codUser = " . $cod;
        $resultado = mysqli_query($conexao, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        return $row['jor_pergunta'];
    }

    public function voltarQuestao($cod)
    {
        $conexao = $this->conectarBD();
        $consulta = "UPDATE jornada SET jor_pergunta = 1 WHERE jor_codUser = " . $cod;
        mysqli_query($conexao, $consulta);
    }

    public function verificarResposta($resposta)
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM perguntas WHERE resposta_correta = '$resposta'";
        $resultado = mysqli_query($conexao, $consulta);

        if (mysqli_num_rows($resultado) == 1) {
            if ($this->pegarTrilha2($_SESSION['usuario_id']) == $_SESSION['trilhas']) {
                if ($this->pegarPergunta($_SESSION['usuario_id']) >= 5) {
                    $consultaUpdate = "UPDATE jornada SET jor_fase = jor_fase + 1 WHERE jor_cod = " . $this->pegarCodJornada($_SESSION['usuario_id']);
                    mysqli_query($conexao, $consultaUpdate);
                    $_SESSION['acabou'] = "Acabou";
                    $pontos = $this->pegarPontos($resposta);
                    $multiplicador = 1;
                    $imagens = [$_SESSION['Imagem1'], $_SESSION['Imagem2'], $_SESSION['Imagem3']];
                    $count = count(array_filter($imagens, function ($img) {
                        return $img == 3;
                    }));

                    if ($count == 1) {
                        $multiplicador = 2;
                    } elseif ($count == 2) {
                        $multiplicador = 3;
                    } elseif ($count == 3) {
                        $multiplicador = 4;
                    }

                    $pontos *= $multiplicador;
                    $jor_cod = $this->pegarCodJornada($_SESSION['usuario_id']);
                    $consultaUpdate = "UPDATE jornada SET jor_cash = jor_cash + '$pontos' WHERE jor_cod = '$jor_cod'";
                    mysqli_query($conexao, $consultaUpdate);
                } else {
                    $_SESSION['resposta'] = "Correta";
                    $_SESSION['trilha'] = "Trilha " . $this->pegarTrilha($_SESSION['usuario_id']) ?? 1;
                    $pontos = $this->pegarPontos($resposta);
                    $jor_cod = $this->pegarCodJornada($_SESSION['usuario_id']);
                    $consultaUpdate = "UPDATE jornada SET jor_cash = jor_cash + '$pontos' WHERE jor_cod = '$jor_cod'";
                    mysqli_query($conexao, $consultaUpdate);
                    $consultaUpdate = "UPDATE jornada SET jor_pergunta = jor_pergunta + 1 WHERE jor_cod = '$jor_cod'";
                    mysqli_query($conexao, $consultaUpdate);
                }
                unset($_SESSION['trilhas']);
            } else {
                if ($this->pegarPergunta($_SESSION['usuario_id']) >= 5) {
                    $_SESSION['acabou'] = "Acabou";
                    $pontos = $this->pegarPontos($resposta);
                    $multiplicador = 1;
                    $imagens = [$_SESSION['Imagem1'], $_SESSION['Imagem2'], $_SESSION['Imagem3']];
                    $count = count(array_filter($imagens, function ($img) {
                        return $img == 3;
                    }));

                    if ($count == 1) {
                        $multiplicador = 2;
                    } elseif ($count == 2) {
                        $multiplicador = 3;
                    } elseif ($count == 3) {
                        $multiplicador = 4;
                    }

                    $pontos *= $multiplicador;
                    $jor_cod = $this->pegarCodJornada($_SESSION['usuario_id']);
                    $consultaUpdate = "UPDATE jornada SET jor_cash = jor_cash + '$pontos' WHERE jor_cod = '$jor_cod'";
                    mysqli_query($conexao, $consultaUpdate);
                } else {
                    $_SESSION['resposta'] = "Correta";
                    $_SESSION['trilha'] = "Trilha " . ($_SESSION['trilhas'] + 1);
                    $pontos = $this->pegarPontos($resposta);
                    $multiplicador = 1;
                    $imagens = [$_SESSION['Imagem1'], $_SESSION['Imagem2'], $_SESSION['Imagem3']];
                    $count = count(array_filter($imagens, function ($img) {
                        return $img == 3;
                    }));

                    if ($count == 1) {
                        $multiplicador = 2;
                    } elseif ($count == 2) {
                        $multiplicador = 3;
                    } elseif ($count == 3) {
                        $multiplicador = 4;
                    }

                    $pontos *= $multiplicador;
                    $jor_cod = $this->pegarCodJornada($_SESSION['usuario_id']);
                    $consultaUpdate = "UPDATE jornada SET jor_cash = jor_cash + '$pontos' WHERE jor_cod = '$jor_cod'";
                    mysqli_query($conexao, $consultaUpdate);
                    $consultaUpdate = "UPDATE jornada SET jor_pergunta = jor_pergunta + 1 WHERE jor_cod = '$jor_cod'";
                    mysqli_query($conexao, $consultaUpdate);
                }
                unset($_SESSION['trilhas']);
            }
        } else if ($this->pegarTrilha2($_SESSION['usuario_id']) == $_SESSION['trilhas']) {
            $jor_cod = $this->pegarCodJornada($_SESSION['usuario_id']);
            $consultaUpdate = "UPDATE jornada SET jor_vida = jor_vida - 1 WHERE jor_cod = '$jor_cod'";
            mysqli_query($conexao, $consultaUpdate);
            if ($this->pegarVida($_SESSION['usuario_id']) == 0) {
                $_SESSION['resposta'] = "Incorreta";
            } else {
                $_SESSION['trilha'] = "Trilha " . $this->pegarTrilha($_SESSION['usuario_id']) ?? 1;
                $_SESSION['resposta'] = "Errada";
            }
            unset($_SESSION['trilhas']);
        } else {
            $jor_cod = $this->pegarCodJornada($_SESSION['usuario_id']);
            $consultaUpdate = "UPDATE jornada SET jor_vida = jor_vida - 1 WHERE jor_cod = '$jor_cod'";
            mysqli_query($conexao, $consultaUpdate);
            if ($this->pegarVida($_SESSION['usuario_id']) == 0) {
                $_SESSION['resposta'] = "Incorreta";
            } else {
                $_SESSION['trilha'] = "Trilha " . ($_SESSION['trilhas'] + 1);
                $_SESSION['resposta'] = "Errada";
            }
            unset($_SESSION['trilhas']);
        }
    }

    public function comprarItem($cod, $cash)
    {
        $conexao = $this->conectarBD();
        $consulta = "UPDATE jornada SET jor_cash = jor_cash - $cash WHERE jor_codUser = $cod";
        mysqli_query($conexao, $consulta);
    }

    public function aumentarPergunta($cod, $pergunta)
    {
        $conexao = $this->conectarBD();
        $consulta = "UPDATE jornada SET jor_pergunta = $pergunta WHERE jor_codUser = $cod";
        mysqli_query($conexao, $consulta);
    }
}
