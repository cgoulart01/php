<?php
/**Regra de Negócio:
calcular qualquer IMC inserindo as variáveis de peso e altura.
 */
$altura = 175;
$peso= 75;
$imc2 = ($peso/$altura**2)*10000;/** o calculo do imc é peso/altura² 
*mas como o resultado é menor que zero eu apliquei o number_format e multipliquei por 1000
*para um visual final mais legível e amigável */
$imc= number_format($imc2, 2,',','');

if ($imc>=18.5 && $imc<=24.9){
    echo "Seu imc é $imc:" . PHP_EOL ."Você está na sua média de peso ideal";
} else if ($imc<18.5){
    echo "Seu imc é $imc:" . PHP_EOL ."Você abaixo da sua média de peso ideal!";
}else{
    echo "Seu imc é $imc:" . PHP_EOL ."Você está acima da sua média de peso ideal!";
}
/**Demonstração da execução:
 * inicio da execução*
 Seu imc é 24,49:
 Você está na sua média de peso ideal
 * fim da execução*
 */