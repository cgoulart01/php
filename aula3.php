<?php
/**
 * Tipos primitivos de váriáveis
 */
echo "Tipos Primitivos das variáveis:\n";
$nome = "Caio"/** String para texto */;
$tipo = gettype($nome);
echo "O tipo primitivos da variável pode ser {$tipo}, ";

$idade = 21 /**  integer para inteiro */;
$tipo = gettype($idade);
echo "{$tipo}, ";

$dec = 21.9/** Double ou float para decimal */;
$tipo = gettype($dec);
echo "{$tipo} e ";

$boll = True/** True ou False para resultados Boleanos o tipo é Boolean*/;
$tipo = gettype($boll);
echo "{$tipo}.";
