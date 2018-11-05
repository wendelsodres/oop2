<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WSS - Exercício V Tabuada</title>
</head>
<body>

<?php

$intervalo = 10;
$tabuada = 2;

for ($i=0; $i <= $intervalo ; $i++) { 
    echo "<p>". $tabuada .'x'. $i .' = '. $tabuada*$i . "</p>"; 
}
    
?>

</body>
</html>