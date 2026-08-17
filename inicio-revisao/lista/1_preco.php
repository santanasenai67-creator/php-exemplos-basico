<?php

$preco = 50;
$quantidade = 5;

$total = $preco * $quantidade;

if ($total >= 200) {
    $desconto = $total * 0.10;
    $totalFinal = $total - $desconto;

    echo "Valor total: R$ " . $total . "<br>";
    echo "Desconto de 10%: R$ " . $desconto . "<br>";
    echo "Valor final: R$ " . $totalFinal;
} else {
    echo "Valor total: R$ " . $total . "<br>";
    echo "Sem desconto.";
}
