<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WSS - Calendário Switch</title>
</head>
<body>

<?php

$calendario = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

$mes = 3;

if(is_int($mes)){

    switch ($mes) {
        case 1:
            echo $calendario[0];
            break;
        case 2:
            echo $calendario[1];
            break;
        case 3:
            echo $calendario[2];
            break;
        case 4:
            echo $calendario[3];
            break;
        case 5:
            echo $calendario[4];
            break;
        case 6:
            echo $calendario[5];
            break;
        case 7:
            echo $calendario[6];
            break;
        case 8:
            echo $calendario[7];
            break;
        case 9:
            echo $calendario[8];
            break;
        case 10:
            echo $calendario[9];
            break;
        case 11:
            echo $calendario[10];
            break;
        case 12:
            echo $calendario[11];
            break;
        default:
            echo "Não existe mês com o valor informado";
    }
}else{
    echo "O número do mês precisa ser inteiro";
}
    
?>

</body>
</html>