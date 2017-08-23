<?php

/**
 * Problema b - Pulo do Sapo
 */

function puloSapo($numeroPedras, $sapos)
{
    $resultado = [];

    for ($i = 1; $i <= $numeroPedras; $i++) {
        $resultado[$i] = 0;
    }

    foreach ($sapos as $sapo) {
        $resultado[$sapo['posicao']] = 1;

        $i = $sapo['posicao'];
        do {
            $i += $sapo['distancia'];
            if ($i <= $numeroPedras) {
                $resultado[$i] = 1;
            }

        } while ($i <= $numeroPedras);

        $i = $sapo['posicao'];
        do {
            $i -= $sapo['distancia'];
            if ($i > 0) {
                $resultado[$i] = 1;
            }
        } while ($i > 0);
    }

    return $resultado;
}

echo 'Exemplo 1: 5 pedras e 2 sapos' . PHP_EOL;
$saposNasPedras = puloSapo(5, [
    [
        'posicao'   => 3,
        'distancia' => 2,
    ],
    [
        'posicao'   => 4,
        'distancia' => 4,
    ],
]);
foreach ($saposNasPedras as $key => $temOuNaoSapo) {
    echo 'Pedra: ' . $key . ' - Tem sapo? ' . ($temOuNaoSapo ? 'sim' : 'não') . PHP_EOL;
}

echo PHP_EOL;
echo 'Exemplo 1: 8 pedras e 3 sapos' . PHP_EOL;
$saposNasPedras = puloSapo(8, [
    [
        'posicao'   => 3,
        'distancia' => 3,
    ],
    [
        'posicao'   => 2,
        'distancia' => 2,
    ],
    [
        'posicao'   => 6,
        'distancia' => 2,
    ],
]);
foreach ($saposNasPedras as $key => $temOuNaoSapo) {
    echo 'Pedra: ' . $key . ' - Tem sapo? ' . ($temOuNaoSapo ? 'sim' : 'não') . PHP_EOL;
}
echo PHP_EOL;