<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WSS - Condição IF</title>
</head>
<body>

<?php

    $idade = 22;

    if(isset($idade)){
        if(isset($idade) && $idade >= 21){
            echo "<p>A idade {$idade} atingiu a maioridade jurídica</p>";
        }else{
            echo "<p>A idade {$idade} não atingiu a maioridade jurídica</p>";
        }
    }else{
        echo "<p style=\"color:red\">Precisa informar a idade</p>";
    }
?>

</body>
</html>


