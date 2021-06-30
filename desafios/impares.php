<?php
/** Regra de Negócio do desafio:
 * imprimir valores impares entre 0 e 10
 * 
 */
$intervalo=1; // variável que representa o interválo
$diff = $intervalo+0; /**acrescentei a variável para ter uma apresentação a amigável 
 levando em conta da possíbilidade de ter somente um ou mais de um número impar no intervalo. 
*/if($diff==1){
    echo "O Número ímpar no intervalo de 0 à $intervalo é:".PHP_EOL;
}elseif($diff>1){
    echo "Os Números ímpares no intervalo de 0 à $intervalo são:".PHP_EOL;
}
for ($i=0;$i<=$intervalo;$i++)/**fiz o uso do for para imprimir 
o intervalo pedido*/{
    if($i%2!=0) /**usando a condição de excessão */
        echo"#$i".PHP_EOL;
}
/**Demonstração da execução:
 *inicio da execução* 
 Os Números ímpares no intervalo de 0 à 10 são:
 #1
 #3
 #5
 #7
 #9
 *fim da execução*
 */