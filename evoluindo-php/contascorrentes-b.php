<?php
/** foreach($array as $key => $value) é uma forma de manipular dados de um array mesmo se não
 * tiver conhecimento dos dados
 */
$contasCorrentes = [
    '159.957.485-48' => [
        'titular'=>'Caio',
        'saldo'=>1000
    ],
    '154.582.485-47' => [
        'titular'=>'Maria',
        'saldo'=>10000
    ],
    '148.154.485-45' => [
        'titular'=>'Alberto',
        'saldo'=>300
    ]
];
function exibiMensagem ($mensagem){
    echo $mensagem . PHP_EOL;
}
function sacar ($conta,$valor){
    exibiMensagem(mensagem:"sacar $valor...");
   if($valor>$conta['saldo']){
    exibiMensagem(mensagem:"Não tem Saque disponível");
    exibiMensagem(mensagem:"valor em conta é insuficiente!");
   } else{
        $conta['saldo']-=$valor;
        echo exibiMensagem(mensagem:"saque efetuado de $valor!");
   }
   return $conta;
}
$contasCorrentes['159.957.485-48'] = sacar($contasCorrentes['159.957.485-48'],valor:700) ;
$contasCorrentes['159.957.485-48'] = sacar($contasCorrentes['159.957.485-48'],valor:700) ;


foreach ($contasCorrentes as $cpf => $conta) {
   echo exibiMensagem(mensagem:$cpf . " " . $conta['titular'] ." " . $conta['saldo']);
}
