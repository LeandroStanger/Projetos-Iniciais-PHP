<?php
echo "Crie um programa em PHP que simule a entrada de pessoas em um cinema. 
O sistema deve verificar se:
 ● Um adulto (maior de 18 anos) pode assistir ao filme desde que tenha ingresso.
 ● Uma criança ou menor de idade só pode assistir se estiver acompanhada de um adulto com ingresso, e também possuir ingresso próprio.
 ● Caso nenhuma dessas condições seja atendida, a saída deve informar que não é possível assistir ao filme. 

 Utilize operadores lógicos (&&, ||), operadores relacionais (>=, <) e o operador ternário para determinar o resultado final.\n\n";

$idade = 17;
$ingresso = true;
$acompanhado = true;
$acompanhateTemIngresso = true;

if($idade >= 18 && $ingresso == true){
    echo "Pode assistir ao filme!";
}else if($idade < 18 && $ingresso == true && $acompanhado == true && $acompanhateTemIngresso == true){
    echo "Uma criança ou menor de idade só pode assistir se estiver acompanhada de um adulto com ingresso, e também possuir ingresso próprio.";
}else{
    echo "Não é possível assistir ao filme!";
}

?>