<?php

// Criando variáveis
$idade = 19;
$temDocumento = false;

// Estrutura de decisão (Operador E)
if ($idade >= 18 && $temDocumento == true) {
    echo "Pode entrar na festa";
} else {
    echo "Não pode entrar na festa";
}

// Estrutura de decisão (Operador OU)
if ($idade >= 18 || $temDocumento == true) {
    echo "\n Pode entrar na festa";
} else {
    echo "Não pode entrar na festa";
}

//Operador de negação
$presente = false;
if (!$presente) {
    echo "\n Não está presente";
} else {
    echo "\nEstá presente";
}