<?php

for($i = 1; $i <= 100; $i++){
    if($i % 2 != 0)
    echo $i . PHP_EOL;
}


$numero = 2;

for($i=0; $i <= 10; $i++){
    echo "$numero x $i = " . $numero * $i . PHP_EOL;
}


$peso = 55.8;
$altura = 1.7;

// o php segue a regra de procedencia da matematica
$imc = $peso / $altura ** 2;

if($imc < 18.5){
    echo "Abaixo do peso";
} elseif($imc <= 24.9){
    echo "peso ideal";
}else{
    echo "acima do peso";
}