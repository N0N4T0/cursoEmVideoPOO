<?php

require_once 'Pessoa08.php';

Class Professor08 extends Pessoa08{
    private $especialidade;
    private $salario;


    function receberAum($aum){
        $this->setSalario($this->getSalario() + $aum);
    }


    function getEspecialidade(){
        return $this->especialidade;
    }
    
    function getSalario(){
        return $this->salario;
    }

    function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    function setSalario($salario){
        $this->salario = $salario;
    }
}
