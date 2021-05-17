<?php

require_once 'Aluno09.php';

Class Bolsista09 extends Aluno09{
    private $bolsa;


    function renovarBolsa(){
        echo "<p>Bolsa renovada</p>";
    }

    // Sobreposição
    function pagarMensalidade(){
        echo "<p>{$this->nome} é bolsista então paga com desconto</p>";
    }


    function getBolsa(){
        return $this->bolsa;
    }

    function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }

}