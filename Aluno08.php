<?php

require_once 'Pessoa08.php';

Class Aluno08 extends Pessoa08{
    private $mat;
    private $curso;


    function cancelarMatr(){
        echo "<p>Matrícula será cancelada</p>";
    }


    function getMat(){
        return $this->mat;
    }

    function getCurso(){
        return $this->curso;
    }

    function setMat($mat){
        $this->mat = $mat;
    }

    function setCurso($curso){
        $this->curso = $curso;
    }
}