<?php
echo "Crie um programa em PHP que simule a decisão de uma família sobre sair para passear. O sistema deve verificar:

     ● Se o clima está ensolarado e todos têm disposição, então podem sair para passear.
      ● Se o clima está chuvoso, só podem sair se tiverem guarda-chuva e disposição.
       ● Caso contrário, devem ficar em casa. Utilize variáveis para representar o clima, a disposição e a posse de guarda-chuva. 

Combine operadores relacionais e lógicos para avaliar as condições, e use o operador ternário para determinar a mensagem final exibida.\n\n";

$clima = "Ensolarado";
$todosTemDiposicao = true;
$temGuardaChuma = true;


if($clima == "Ensolarado" && $todosTemDiposicao == true){
    echo "Podem passear!";
}else if($clima == "Chuvoso" && $temGuardaChuma == true && $todosTemDiposicao == true){
    echo "Podem sair se tiverem guarda-chuva!";
}else{
    echo "Devem ficar em casa!";
}


echo "\n\nDesafio Extra (Complementar)

Agora deixe o programa mais inteligente. 
Em vez de exibir apenas 'Podem passear!' ou 'Devem ficar em casa!', faça o programa informar o motivo da decisão. 
Utilize apenas os conhecimentos estudados até agora para criar uma mensagem mais completa. 

Exemplos de saídas: 

  ● ✅ Podem passear, porque o dia está ensolarado e todos estão dispostos.
  ● ✅ Podem passear, mesmo com chuva, porque possuem guarda-chuva e estão dispostos.
  ● ❌ Devem ficar em casa, porque ninguém está disposto.
  ● ❌ Devem ficar em casa, porque está chovendo e não há guarda-chuva. 
  ● ❌ Devem ficar em casa, porque está chovendo, não há guarda-chuva e ninguém está disposto. 
\n\n";

if($clima == "Ensolarado" && $todosTemDiposicao == true){
    echo "✅ Podem passear, porque o dia está ensolarado e todos estão dispostos. ";
}else if($clima == "Chuvoso" && $temGuardaChuma == true && $todosTemDiposicao == true){
    echo "✅ Podem passear, mesmo com chuva, porque possuem guarda-chuva e estão dispostos. ";
}else if($todosTemDiposicao == false){
    echo "❌ Devem ficar em casa, porque ninguém está disposto. ";
}else if($temGuardaChuma == false){
    echo "❌ Devem ficar em casa, porque está chovendo e não há guarda-chuva";
}else{
    echo "❌ Devem ficar em casa, porque está chovendo, não há guarda-chuva e ninguém está disposto.";
}
?>