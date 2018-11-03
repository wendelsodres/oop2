<?php

require('Pessoa.php');

class Funcionario extends Pessoa{

    private $salario;
    private $departamento;

}

$funcionario = new Funcionario();

$funcionario->setNome('Wendel Sodré');

$funcionario->setEndereco('Rua. Ipecaeta -  Vila Perus , São Paulo');

echo "
    <p><strong>Nome: </strong>: {$funcionario->getNome()}</p>
    <p><strong>Endereço: </strong>: {$funcionario->getEndereco()}</p>
";