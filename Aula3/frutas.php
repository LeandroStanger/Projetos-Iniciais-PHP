<?php
echo "Crie uma nova array em PHP chamada frutas contendo três elementos: 'maçã', 'banana' e 'laranja'.\n\n";

$frutas = ["maçã", "banana", "laranja"];

echo "Declare a array usando a forma moderna ([]).\n\n";
$frutas1 = ["maçã", "banana", "laranja"];


echo "\nDeclare a mesma array usando a forma tradicional (array()).\n\n";
$frutas2 = array("maçã", "banana", "laranja");


echo "\nImprima a array inteira com print_r.\n\n";
print_r ($frutas1);

echo "\nImprima a array inteira com var_dump.\n\n";
var_dump ($frutas2);

echo "\nPercorra a array com foreach e imprima cada elemento em uma linha.\n\n";

foreach($frutas as $lista){
    echo $lista."\n";
}

?>