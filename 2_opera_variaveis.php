<?php

// Passando valores pela URL (Método GET)
// http://localhost/php-exemplos-basicos/2_opera_variaveis.php?numero1=10&número2=5

// Recebe 2 valores
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

// Verifica se os valores foram passados correntamente
// A função nativa do PHP "isset" faz isso
if (isset($numero1) && isset($numero2)) {
    $numero1 = (float)$numero1;
    $numero2 = (float)$numero2;

   
// Calculos
$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;

// Exibição dos resultados
echo "Soma: $soma \n";
echo "Subtração: $subtracao \n";
echo "Multiplicação: $multiplicacao \n";
echo "Divisão: $divisao \n";

} else {
    echo "Por favor, forneça os valores pela URL.";
}