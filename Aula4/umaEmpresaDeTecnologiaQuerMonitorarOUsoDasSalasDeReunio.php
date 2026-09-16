<?php
echo "Uma empresa de tecnologia quer monitorar o uso das salas de reunião.
 Cada sala tem capacidade máxima de 10 pessoas.
 Crie uma array comum chamada salas, onde cada elemento representa
 o número de pessoas presentes em cada sala.
 Percorra a array com foreach e aplique a seguinte lógica:
 - Se pessoas == 10 → imprimir 'Sala [índice]: Lotada'.
 - Se pessoas < 10 && pessoas > 0 → imprimir 'Sala [índice]: Ainda há vagas'.
 - Se pessoas == 0 → imprimir 'Sala [índice]: Vazia'.
 - Se pessoas > 10 → imprimir 'Sala [índice]: Superlotada! Revisar operação'.
 - Se pessoas > 5 && pessoas < 10 → imprimir 'Sala [índice]: Ocupação moderada'.
 - Se !(pessoas > 0) → imprimir 'Sala [índice]: Sem uso (condicional com !)'.
 Use operadores lógicos e condicionais para simular situações reais.

// Array comum com número de pessoas em cada sala
salas = [10, 7, 0, 12, 3, 9]\n\n";

$salas = [10, 7, 0, 12, 3, 9];

foreach($salas as $i => $pessoas){
    if($pessoas == 10){
        echo "Sala ".($i +1).": Lotada\n";
    }elseif($pessoas < 10 && $pessoas > 0){
        echo "Sala ".($i + 1).": Ainda há vagas\n";
    }elseif($pessoas == 0){
        echo "Sala ".($i + 1).": Vazia\n";
    }elseif($pessoas > 10){
        echo "Sala ".($i + 1).": Ocupação moderada\n";
    }elseif($pessoas > 5 && $pessoas < 10){
        echo "Sala ".($i + 1).": Ocupação moderada\n";
    }elseif(!($pessoas > 0)){
        echo "Sala ".($i + 1).": Sem uso (condicional com !)\n";
    }
}

?>