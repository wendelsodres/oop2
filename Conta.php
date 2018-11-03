<?php

class Conta{

    private $numero;
    private $cliente;
    private $saldo;

    function __construct($numero,$cliente, $saldo = 0){

        $this->numero = $numero;
        $this->cliente = $cliente;
        $this->saldo = $saldo;
    }   

    public function getNumero(){
        return $this->numero;
    }
  
    public function getCliente(){
        return $this->cliente;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function sacar($valSaque){
        if($this->saldo >= $valSaque){
            $this->saldo -= $valSaque;
        }else{
            echo "<p>Você não possui saldo suficiente para saque</p>";
            return false;
        }
    }

    public function depositar($valDeposito){
        if($valDeposito > 0){
            $this->saldo += $valDeposito;
        }
    }

    public function extrato(){
        echo"
                <p><strong>Numero Conta:</strong> {$this->getNumero()}</p>
                <p><strong>Cliente:</strong> {$this->getCliente()}</p>
                <p><strong>Saldo:</strong> ".number_format($this->getSaldo(), 2, ",", ".")."</p>
                <hr/>
            ";
    }
    
}

class ContaPoupanca extends Conta{

    private $juros;

    public function setJuros($val){

        $this->juros = $val;
    }   
    
    public function getSaldo(){

        return parent::getSaldo() * (1 + $this->juros);        
    }
}

$conta = new ContaPoupanca('51000','Wendel', 1500);

$conta->setJuros(0.099);

$conta->extrato();

$conta->depositar(500);
$conta->extrato();

$conta->sacar(800);
$conta->extrato();

class ContaCorrente extends Conta{

    private $creditoPessoal;

    public function setCreditoPessoal($val){

        $this->creditoPessoal = $val;
    }   
    
    public function getSaldo(){

        return parent::getSaldo() * (1 + $this->creditoPessoal);        
    }
}

$conta = new ContaCorrente('3333','Kauã Galdino', 500);

$conta->setCreditoPessoal(0.099);

$conta->extrato();

$conta->depositar(300);
$conta->extrato();

$conta->sacar(200);
$conta->extrato();



