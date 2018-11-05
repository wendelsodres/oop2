<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WSS - Utilizando Variaveis</title>
</head>
<body>

<?php

    $name = 'Wendel';
    $lastName = 'Sodré dos Santos';
    $address = 'Rua. Ipecaeta';
    $idade = 30;
    $phone = '11 96727-3635';

    echo "
            <p><strong>Nome: </strong>{$name} {$lastName}</p>
            <p><strong>Endereço: </strong>{$address}</p>
            <p><strong>Idade: </strong>{$idade}</p>
            <p><strong>Telefone: </strong>{$phone}</p>
        ";
?>

</body>
</html>


