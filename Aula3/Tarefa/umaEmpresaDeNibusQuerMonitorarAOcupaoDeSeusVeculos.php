<?php
echo "Uma empresa de ônibus quer monitorar a ocupação de seus veículos.
// Crie uma array comum chamada onibus, onde cada elemento representa
// o número de passageiros já embarcados em um ônibus.
// Considere que cada ônibus tem 40 poltronas.
// Percorra a array com foreach e aplique a seguinte lógica:
// - Se passageiros == 40 → imprimir 'Ônibus [índice]: Lotado'.
// - Se passageiros < 40 && passageiros > 0 → imprimir 'Ônibus [índice]: Ainda há vagas'.
// - Se passageiros == 0 → imprimir 'Ônibus [índice]: Vazio'.
// - Se passageiros > 40 → imprimir 'Ônibus [índice]: Superlotado! Revisar operação'.
// Use operadores lógicos e condicionais para simular situações reais.

// Array comum com número de passageiros em cada ônibus
onibus = [40, 25, 0, 50, 10, 39]\n\n";

$onibus = [40, 25, 0, 50, 10, 39];

foreach($onibus as $indice => $poltronas){
    if($poltronas == 40){
        echo "Ônibus ".($indice + 1).": Lotado\n";
    }elseif($poltronas < 40 && $poltronas > 0){
        echo "Ônibus ".($indice + 1).": Ainda há vagas\n";
    }elseif($poltronas == 0){
        echo "Ônibus ".($indice + 1).": Vazio\n";
    }elseif($poltronas > 40){
        echo "Ônibus ".($indice + 1).": Superlotado! Revisar operação\n";
    }
}
?>