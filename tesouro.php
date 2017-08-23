<?php

/**
 * Problema a - Caça ao Tesouro
 *
 * X => Joao
 * Y => Jose
 * N => quantidade de objetos encontrados na arca
 * V => valor de cada objeto da arca
 */

function calcula($valorJoaoEncontrou, $valorJoseEncontrou, $objetosArca)
{
    $totalArca = array_sum($objetosArca);

    return $valorJoaoEncontrou + ($totalArca / 2) === $valorJoseEncontrou + ($totalArca / 2);
}

echo 'Exemplo 1: ' . (! calcula(10, 20, [3, 8, 7, 2]) ? 'S' : 'N') . PHP_EOL;
echo 'Exemplo 2: ' . (! calcula(1, 1, [2, 7, 7, 12, 5, 3]) ? 'S' : 'N') . PHP_EOL;
