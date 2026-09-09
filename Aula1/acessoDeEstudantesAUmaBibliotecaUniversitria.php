<?php
echo "Crie um programa em PHP que simule o acesso de estudantes a uma biblioteca universitária. 
O sistema deve verificar se:
- Um estudante com matrícula ativa e carteirinha válida pode entrar sozinho.
- Um estudante sem carteirinha, mas acompanhado por outro estudante com carteirinha válida, também pode entrar.
- Estudantes com matrícula inativa não podem entrar em hipótese alguma.\n\n";
echo "Defina variáveis para representar a situação da matrícula, se possuem carteirinha e se estão acompanhados. 
Utilize operadores lógicos para determinar se o acesso será permitido. 
Ao final, o programa deve imprimir 'Entrada Permitida' caso o acesso seja autorizado, 
ou 'Entrada Negada' caso contrário.\n\n";

$matricula = false;
$carteirinha = true;
$acompanhado = true;
$amigocarteirinha = true;


if($matricula == true && $carteirinha == true){
    echo "Entrada Permitida!!!";
}else if($matricula == true && $carteirinha == false && $acompanhado == true && $amigocarteirinha == true){
    echo "Entrada Permitida com acompanhate!!!";
}else if($matricula == false){
    echo "Entrada Negada!!!\nNão pode entrar em hipotese alguma!!!";
}else{
    echo "Entrada Negada!!!";
}

?>