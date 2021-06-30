<?php
/** Usando loops em arrays no PHP */
$idadeList =[21,23,19,41,54];

for ($i=0;$i<count($idadeList);$i++){ /**  usar o count($array) abistrai o código facilitando a manutenção do código 
*  caso necessite acrescentar ou tirar um item do array sem precisar rescrever todo o código
* mas já a mudança na lista já é percebida pelo código  */
    echo $idadeList[$i] . PHP_EOL;
}