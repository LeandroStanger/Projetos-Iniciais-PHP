<?php
echo "Crie um programa em PHP que simule a lista de compras de uma família no supermercado. 
O programa deve armazenar em um array os itens que precisam ser comprados (como 'Arroz', 'Feijão', 'Sabão'). 

Primeiro, o programa deve verificar se algum dos itens contém a palavra 'Sabão'. 
Caso exista, deve imprimir ao final: 'Item de limpeza encontrado'. 
Se não houver nenhum item relacionado a limpeza, deve imprimir: 'Nenhum item de limpeza'.

Depois disso, utilize um laço foreach para percorrer o array e imprimir cada item numerado.\n\n";

$supermercado = ["Arroz", "Feijão", "Sabão"];
$temSabao = false;
$i = 1;

foreach($supermercado as $lista){
    if(strpos($lista, "Sabão") !== false){
        $temSabao = true;
        break;
    }
}

if($temSabao == true){
    echo "Item de limpeza encontrado";
}else{
    echo "Nenhum item de limpeza";
}
echo"\n\n";
foreach($supermercado as $lista){
    echo $i.") ".$lista."\n";
    $i++;
}

?>