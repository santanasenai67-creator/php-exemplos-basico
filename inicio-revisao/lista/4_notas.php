<?php

$notas = [7, 8.5, 6, 9, 5.5];

$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);
$maiorNota = max($notas);
$menorNota = min($notas);

echo "Média da turma: $media<br>";
echo "Maior nota: $maiorNota<br>";
echo "Menor nota: $menorNota";
