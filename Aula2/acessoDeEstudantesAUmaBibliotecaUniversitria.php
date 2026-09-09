<?php
echo "Crie um programa em PHP que simule a lista de tarefas de um estudante durante a semana. 
O programa deve armazenar em um array as tarefas diárias (como 'Estudar Matemática', 'Fazer Exercícios de PHP', 'Ler um Livro'). 
Utilize um laço foreach para percorrer o array e imprimir cada tarefa numerada.

Além disso, o programa deve verificar se alguma tarefa contém a palavra 'PHP'. 
Caso exista, deve imprimir ao final: 'Tarefa de programação encontrada'. 
Se não houver nenhuma tarefa relacionada a PHP, deve imprimir: 'Nenhuma tarefa de programação'.\n\n";

$tarefaDiarias = ["Estudar Matemática", "Fazer Exercícios de PHP", "Ler um Livro"];
$contador = 1;
$phpEncontrado = false;

foreach($tarefaDiarias as $i){
    echo $contador."-".$i."\n";
    $contador++;
}
echo "\n\n";
foreach($tarefaDiarias as $i){
    if(strpos($i, "PHP")!== false){
        $phpEncontrado = true;
        break;
    }
}
if($phpEncontrado == true){
    echo "Tarefa de programação encontrada!";
}else{
    echo "Nenhuma tarefa de programação!";
}

?>