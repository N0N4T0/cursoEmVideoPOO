<?php

require_once 'Pessoa08.php';

Class Funcionario08 extends Pessoa08{
    private $setor;
    private $trabalhando;


    function mudarTrabalho(){
        $this->trabalhando != $this->trabalhando;
    }


    function getSetor(){
        return $this->setor;
    }

    function setSetor($setor){
        $this->setor = $setor;
    }
    
    function getTrabalhando(){
        return $this->trabalhando;
    }

    function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }
}
