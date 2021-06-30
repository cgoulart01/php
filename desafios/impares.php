<?php
/** Regra de Negócio do desafio:
 * imprimir valores impares entre 0 e 10
 * 
 */
for ($i=0;$i<=10;$i++)/**fiz o uso do for para imprimir 
o intervalo pedido
*/{
    if($i%2!=0) /**usando a condição de excessão */
        echo"#$i".PHP_EOL;
}
