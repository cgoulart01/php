<?php
/** estruturas Lógicas:
 * igual (==)
 * diferente (!=)
 * maior (>)
 * menor (<)
 * maior ou igual (>=)
 * menor ou igual (<=)
 * uma ou outra condição é valida ( || ou or )
 * as duas condições tem que ser validas (&& ou and) 
 */
$idade = 19;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver a partir de 18 anos".PHP_EOL;

if ($idade>=18){
echo "Você tem $idade anos. Pode entrar";
}else{
echo "Voce tem $idade anos. Você não pode entrar no site.";
}