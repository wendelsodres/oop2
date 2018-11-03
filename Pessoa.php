<?php

class Pessoa{

    private $nome;
    private $endereço;

    public function setNome($valor){
        $this->nome = $valor;
    }

    public function getNome(){
        $nome = $this->nome;
        return $this->transformUpperCase($nome);
    }

    private function transformUpperCase($palavra){
        return strtoupper($palavra);
    }   
    
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }
}