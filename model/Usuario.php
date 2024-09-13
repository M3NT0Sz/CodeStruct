<?php

class Usuario
{
    protected $nome;
    protected $email;
    protected $senha;
    protected $img;

    public function __construct($nome, $email, $senha, $img)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->img = $img;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getImg()
    {
        return $this->img;
    }
}
