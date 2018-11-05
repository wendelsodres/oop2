<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WSS - Exercício III</title>
</head>
<body>

<?php
$nome = 'Wendel';
$sexo = 'Masculino';
$idade = 30;

if($sexo == 'Feminino' && $idade < 25){
    echo "<p>Nome: {$nome}</p>";
    echo "<p></strong>ACEITA</strong></p>";
}else{
    echo "<p>Nome: {$nome}</p>";
    echo "<p><strong>NÃO ACEITA</strong></p>";
}

?>

</body>
</html>