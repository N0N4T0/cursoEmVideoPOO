<?php

// Herança para diferença
require_once 'Pessoa09.php';

Class Aluno09 extends Pessoa09{
    private $matricula;
    private $curso;


    function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno {$this->nome}</p>";
    }


    function getMatricula(){
        return $this->matricula;
    }

    function getCurso(){
        return $this->curso;
    }

    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    function setCurso($curso){
        $this->curso = $curso;
    }
}