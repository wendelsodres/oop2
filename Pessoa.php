<?php

class Conta{

    private $numero;
    private $cliente;

    public function setNumero($valor){
        $this->numero = $valor;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }

    public function getCliente(){
        return $this->cliente;
    }
    
}

$conta1 = new Conta();

$conta1->setNumero("51100");
$conta1->setCliente("Wendel Sodré");

echo "
    <strong>Numero Conta </strong>{$conta1->getNumero()} <br>

    <strong>Cliente: </strong> {$conta1->getCliente()}
";
