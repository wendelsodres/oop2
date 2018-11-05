<?php

require_once('Pessoa.php');

class Funcionario extends Pessoa{

    private $salario;
    private $departamento;

    public function getSalario(){
        return $this->salario;        
    }

    public function setSalario($val){
        $this->salario = $val;
    }

    public function getDepartamento(){
        return $this->departamento;        
    }

    public function setDepartamento($departa){
        $this->departamento = $departa;
    }

}

$funcionario = new Funcionario();

$funcionario->setSalario(3500);
$funcionario->setDepartamento('Desenvolvimento');

$funcionario->setNome('Wendel Sodré');

$funcionario->setEndereco('Rua. Ipecaeta -  Vila Perus , São Paulo');

echo "
    <p><strong>Nome: </strong>: {$funcionario->getNome()}</p>
    <p><strong>Endereço: </strong>: {$funcionario->getEndereco()}</p>
    <p><strong>Salário: </strong>: {$funcionario->getSalario()}</p>
    <p><strong>Departamento: </strong>: {$funcionario->getDepartamento()}</p>
";