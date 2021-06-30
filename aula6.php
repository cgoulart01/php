<?php
/**  
 * alguns laços de repetição(loop)*/
echo "usando o while:". PHP_EOL;
$contador=1;
while($contador<=15){
    echo"#$contador".PHP_EOL;
    $contador=$contador+1;
}
echo PHP_EOL . "usando o for:" . PHP_EOL;

for($i=1;$i<=15;$i++){
    echo"#$i".PHP_EOL;
}
/** Obs.: quando uma variável precisar receber o valor (variável=variável + n)
*pode - se compactar em (variável+= n),e quando n for 1 pode ser usando o (++)
*/