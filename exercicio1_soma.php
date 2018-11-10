<?php

$valor1 = 11;
$valor2 = 10;

$total = ($valor1 + $valor2);

if($total > 20){
    $total += 8;
}else{
    $total -= 5;
}

echo $total;
