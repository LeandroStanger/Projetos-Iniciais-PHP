<?php
echo  "Crie um programa em PHP que simule a entrada de pessoas em uma sessão de cinema. 
O programa deve verificar se uma pessoa maior de idade com ingresso pode assistir ao filme, 
ou se uma pessoa menor de idade acompanhada por alguém maior de idade, ambos com ingresso, 
também pode assistir.\n\n";
echo "Defina variáveis para representar a idade das pessoas e se possuem ingresso. 
Utilize operadores lógicos para determinar se a entrada será permitida.\n 
Ao final, o programa deve imprimir 'Pode Assistir' caso a entrada seja permitida, 
ou 'Não pode assistir' caso contrário.\n\n";

$idade = 14;
$ingresso = true;
$acompanhado = true;

if($idade >= 18 && $ingresso == true){
    echo "Pode Assistir!";
}else if($idade < 18 && $ingresso == true && $acompanhado == true){
    echo "Pode Assistir! \nAcompanhado por um adulto!";
}else{
    echo "Não pode assistir!";
}


?>