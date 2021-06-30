<?php
/** Testando uso de variáveis em strings
 */
$saudacao="Olá";
$nome = "Caio";
$saudacao2="Tudo Bem";
echo "$saudacao! $nome $saudacao2?". PHP_EOL;/** O uso do PHP_EOL é uma forma 
*quebra de linha de uma forma mais dinâmica independente do SO por que algum usam
* \r outros usam o \n e o Windows por exemplo usa \r\n então criaram o PHP_EOL
* para abstrair o código e poder ser usado o mesmo código de quebra de linha
* para qualquer SO */
echo "Quebrei linha com PHP_EOL";