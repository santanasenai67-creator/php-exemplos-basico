<?php

//Vetor (array simples)
$vetor = array("maça","banana", "laranja");

//Exibir (Usando Laço)
foreach ($frutas as $indice => $fruta) {
    echo "Índice: $indice - Fruta: $fruta \n";
}

//Matriz (array completo)
$matriz = [
    ["Max Verstappen", "Lando Norris", "Lewis Hamilton"],
    ["Charles Leclerc", "Sergio Pérez", "George Russell"],
    ["Fernando Alonso", "Carlos Sainz", "Valtteri Bottas"]
];

//Exibindo nome pilotos
echo "\n";
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo "$piloto\n";
    }
    echo "\n";
}