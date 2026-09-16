<?php
echo "Imagine que você é responsável por organizar as frutas em um mercado.
  Atualize a sua array para: frutas com os elementos:
  'maçã', 'banana', 'laranja', 'uva', 'melancia', 'limão', 'pera', 'Archicum'.
   Percorra a array com foreach e classifique cada fruta em categorias:
  - 'Fruta cítrica'  para laranja e limão.
  - 'Fruta tropical'  para banana e melancia.
  - 'Fruta de clima temperado' para maçã, uva e pera.
  - 'Fruta típica de Santa Catarina' para Archicum.
   Ao final, imprima a fruta seguida da sua classificação, simulando etiquetas de mercado.\n\n";

   $frutas = ["maçã", "banana", "laranja", "uva", "melancia", "limão", "pera", "Archicum"];

   foreach($frutas as $fruta){
    if($fruta === "laranja" || $fruta === "limão"){
        echo $fruta." Fruta cítrica\n";
    }elseif($fruta === "banana" || $fruta === "melancia"){
        echo $fruta." Fruta tropical\n";
    }elseif($fruta === "maçã" || $fruta === "uva" || $fruta === "pera"){
        echo $fruta." Fruta de clima temperado\n";
    }elseif($fruta === "Archicum"){
        echo $fruta." Fruta típica de Santa Catarina\n";
    }
   }

?>