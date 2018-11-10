<?php

$salario = 3500;

if($salario < 500):
    echo "Você ganha menos que R$ 500";
elseif($salario == 500):
    echo "Você ganha R$ 500";
else:
    echo "Você ganha mais que R$ 500";
endif;