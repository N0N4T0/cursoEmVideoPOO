<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    function __construct(){
        $this->saldo = 0;
        $this->status = false;

        echo "<p>Conta criada com sucesso</p>";
    }

    function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);

        if($t == "CC") {
            $this->setSaldo(50);
        }
        elseif($t == "CP") {
            $this->setSaldo(150);
        }
    }  
        
    function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>Conta ainda com dinheiro, não posso fechá-la</p>";
        }
        elseif($this->getSaldo() < 0){
            echo "<p>Conta está em débito. Impossível encerrar.</p>";
        }
        else {
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso.</p>";
        }
    }

    function depositar($v){
        //se status for verdadeiro
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$ $v realizado na conta de {$this->getDono()}</p>";
        } 
        else{
            echo "<p>Conta fechada. Não consigo depositar.</p>";
        }
    }

    function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v autorizado na conta de {$this->getDono()}</p>";
            } 
            else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        }
        else {
            echo "<p>Não posso sacar de uma conta fechada.</p>";
        }
    }

    function pagarMensal(){
        if($this->getTipo() == "CC"){
            $v = 12;
        }
        elseif($this->getTipo() == "CP"){
            $v = 20;
        }
        if($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p> Mensalidade de R$ $v debitada na conta de {$this->getDono()}</p>";
        }
        else {
            echo "<p>Problemas com a conta. Não posso cobrar.</p>";
        }
    }


    function getnumConta(){
        return $this->numConta;
    }

    function setnumConta($numConta){
        $this->numConta = $numConta;
    }

    function getTipo(){
        return $this->tipo;
    }

    function setTipo($tipo){
        $this->tipo = $tipo;
    }

    function getDono(){
        return $this->dono;
    }

    function setDono($dono){
        $this->dono = $dono;
    }

    function getSaldo(){
        return $this->saldo;
    }

    function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    // $this->saldo é um atributo
    // $saldo é uma variável

    function getStatus(){
        return $this->status;
    }

    function setStatus($status){
        $this->status = $status;
    }

    
}
