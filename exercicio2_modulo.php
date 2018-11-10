<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WSS - Exercício II Modulo</title>
</head>
<body>

<?php

$inicio = 1;
$fim = 15;

$divisao = 3;

while($inicio <= $fim){
    if($inicio% $divisao==0){
        echo $inicio.'  é divisivel por '.$divisao.'<br>';
    }
    $inicio ++;
}


?>

</body>
</html>