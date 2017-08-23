<?php

/**
 * Problema c - Corrida
 */

function correr($distancia, $comprimento)
{
    return $distancia % $comprimento;
}

echo 'Exemplo 1: 7000 e 100' . PHP_EOL;
echo '> Termina em ' . correr(7000, 100) . ' metros ' . PHP_EOL . PHP_EOL;

echo 'Exemplo 2: 918 e 76' . PHP_EOL;
echo '> Termina em ' . correr(918, 76) . ' metros ' . PHP_EOL . PHP_EOL;