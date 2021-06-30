<?php
/** estruturas condicionais:
 * igual (==)
 * maior (>)
 * menor (<)
 * maior ou igual (>=)
 * menor ou igual (<=)
 * uma ou outra condição é valida ( || ou or )
 * as duas condições tem que ser validas (&& ou and) 
 */
$idade = 16;
$idade2 = 16; 
$numPessoas= 2;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver a partir de 18 anos";
echo " ou a partir de 16 acompanhado de algum adulto." . PHP_EOL.PHP_EOL;

if ($idade>=18){
echo "Vejo que você tem $idade anos. Então pode entrar";
}elseif($idade>=16&&$numPessoas>1){
    if($idade2<18){
        echo "Você tem $idade anos e está acompanhado, mas precisa estar acompanhado com algum adulto.";
    }elseif($idade2>=18&&$idade>=16){
        echo "Você tem $idade anos mas está acompanhado, então pode entrar!";
    }
}
elseif($idade<16&&$numPessoas>1){
    echo "Você tem $idade e não pode entrar por que a idade miníma acompanhada é de 16 anos";
}elseif($idade>=16&&$numPessoas<=1){
echo "Voce tem $idade anos. Você não pode entrar por que não está acompanhado.";
}else{
echo "Voce tem $idade anos. Você não pode entrar a idade idade miníma acompanhada é de 16 anos para entrar.";
}