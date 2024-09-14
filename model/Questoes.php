<?php

class Questao{
    protected $questao;
    protected $alternativa1;
    protected $alternativa2;
    protected $alternativa3;
    protected $alternativa4;
    protected $resposta;
    protected $tipo;
    protected $nivel;
    protected $pontos;

    public function __construct($questao, $alternativa1, $alternativa2, $alternativa3, $alternativa4, $resposta, $tipo, $nivel, $pontos){
        $this->questao = $questao;
        $this->alternativa1 = $alternativa1;
        $this->alternativa2 = $alternativa2;
        $this->alternativa3 = $alternativa3;
        $this->alternativa4 = $alternativa4;
        $this->resposta = $resposta;
        $this->tipo = $tipo;
        $this->nivel = $nivel;
        $this->pontos = $pontos;
    }

    public function getQuestao(){
        return $this->questao;
    }

    public function getAlternativa1(){
        return $this->alternativa1;
    }

    public function getAlternativa2(){
        return $this->alternativa2;
    }

    public function getAlternativa3(){
        return $this->alternativa3;
    }

    public function getAlternativa4(){
        return $this->alternativa4;
    }

    public function getResposta(){
        return $this->resposta;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function getPontos(){
        return $this->pontos;
    }
}