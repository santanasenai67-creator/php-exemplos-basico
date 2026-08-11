<?php

//Laço (FOR)
for ($i = 1; $i <= 10; $i++) {
    echo "8 x $i = " . (8 * $i) . "\n";
}

// While - (Equanto) Contagem regressiva
echo "\n";
$n =5;
while ($n > 0) {
    echo $n . "\n";
    $n--;
}

// Do While - (Faça enquanto) Executa ao menos uma vez
echo "\n";
$x = 0;
do {
    echo "O vale : $x \n";
    $x++;
} while ($x <= 10);