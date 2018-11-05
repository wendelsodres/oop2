<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WSS - Condição ELSEIF Imposto</title>
</head>
<body>

<?php

$salario = 2001;

    if($salario <= 1000){
        echo "<p>Uau! Você não vai pagar nada de imposto!</p>";
    }elseif($salario > 1000 && $salario <= 1500){
        echo "<p> Salário : R$ {$salario}, Você vai pagar 10% de imposto!</p>";
    }
    elseif($salario > 1500 && $salario <= 2000){
        echo "<p> Salário : R$ {$salario}, Você vai pagar 15% de imposto!</p>";   
    }else{
        echo "<p> Salário : R$ {$salario}, Você vai pagar 20% de imposto!</p>";
    }
    
?>

</body>
</html>