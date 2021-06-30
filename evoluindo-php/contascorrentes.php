<?php
/** foreach($array as $key => $value) é uma forma de manipular dados de um array mesmo se não
 * tiver conhecimento dos dados
 */
$contasCorrentes = [
    'cpf1' => [
        'titular'=>'Caio',
        'saldo'=>1000
    ],
    'cpf2' => [
        'titular'=>'Maria',
        'saldo'=>10000
    ],
    'cpf3' => [
        'titular'=>'Alberto',
        'saldo'=>300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
   echo $conta['titular'] . PHP_EOL;
}
