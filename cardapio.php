<?php

$cardapio = array("X-Salada","X-Tudo","X-Burguer","Mistro Quente","Cachorro Quente","Beirute");

$opcao = 2;

if(is_int($opcao)){

    switch ($opcao) {
        case 1:
            echo "A opção ${opcao} foi <strong>".$cardapio[0]."</strong>";
            break;
        case 2:
            echo "A opção ${opcao} foi <strong>".$cardapio[1]."</strong>";
            break;
        case 3:
            echo "A opção ${opcao} foi <strong>".$cardapio[2]."</strong>";
            break;
        case 4:
            echo "A opção ${opcao} foi <strong>".$cardapio[3]."</strong>";
            break;
        case 5:
            echo "A opção ${opcao} foi <strong>".$cardapio[4]."</strong>";
            break;        
        default:
            echo "Infelizmente não tempos esta opção";
    }
}else{
    echo "Informe o cardapio de 1 a 6";
}