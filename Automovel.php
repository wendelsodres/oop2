<?php

    class Automovel{
        
        private $velocidade;
        private $potencia;

        public function getVelocidade(){
            return $this->velocidade;
        }

        public function setVelocidade($velo){
            $this->velocidade = $velo;
        }

        public function getPotencia(){
            return $this->potencia;
        }

        public function setPotencia($valor){
            $this->potencia = $valor;
        }

        public function acelerar($valor){
            $this->velocidade += ($valor*10);
        }
        public function frear($valor){
            $this->velocidade -= ($valor*10);
        }

    }

    class Barco extends Automovel{

        private $alturaMastro;

        public function getAlturaMastro(){
            return $this->alturaMastro;
        }

        public function setAlturaMastro($valor){
            $this->alturaMastro = $valor;
        }

    }

    class Fusca extends Automovel{
        public $tipoCombustivel;
    
    }

    class Aviao extends Automovel{
        public $tempoVoo;
    }

    $ferrari = new Automovel();

    $ferrari->setVelocidade(200);
    $ferrari->setPotencia("500 Cavalos");
    $ferrari->getPotencia();    

    echo "Ferrari - Velocidade " . $ferrari->getVelocidade()."KM por hora <br/>";
    echo "Potência " . $ferrari->getPotencia()."<br/>";

    $ferrari->acelerar(5);

    echo "Acelerando, velocidade atual ".$ferrari->getVelocidade(). "KM por hora<br/ >";

    $ferrari->frear(10);

    echo "Frear, velocidade atual ".$ferrari->getVelocidade(). "KM por hora<br/ >";    
   