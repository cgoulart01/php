<?php
/** Regra de Negócio:
 * imprimir os resultados das multiplicações de 1 a 10
 *  de uma variável a escolha.
 */
$numero = 2;// essa é a variável
echo "Tabuada do número $numero:" .PHP_EOL; /** eu acrescentei uma apresentação
*da tabuada de forma mais amigável*/
for($i=1;$i<=10;$i++){
  echo"$numero * $i = " . $numero * $i . PHP_EOL;
}
/**Demonstração da execução:
 *inicio da execução* 
 Tabuada do número dois:
 2 * 1 = 2
 2 * 2 = 4
 2 * 3 = 6
 2 * 4 = 8
 2 * 5 = 10
 2 * 7 = 14
 2 * 8 = 16
 2 * 9 = 18
 2 * 10 = 20
 *fim da execução*
 */