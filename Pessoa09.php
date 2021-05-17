<?php

abstract Class Pessoa09{
    protected $nome;
    protected $idade;
    protected $sexo;


    final function fazerAniversario(){
        $this->idade++;
    }
    

    function getNome(){
        return $this->nome;
    }
    
    function getIdade(){
        return $this->idade;
    }

    function getSexo(){
        return $this->sexo;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function setSexo($sexo){
        $this->sexo = $sexo;
    }
}