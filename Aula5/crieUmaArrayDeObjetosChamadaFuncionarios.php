<?php
echo "Crie uma array de objetos chamada funcionarios.
 Cada objeto deve ter: nome e idade.
 Percorra a array e imprima o nome e a idade de cada funcionário.
 Se a idade for maior ou igual a 18, imprima também 'Maior de idade'.
 Caso contrário, imprima 'Menor de idade'.

// ------------------- SOLUÇÃO -------------------
}\n\n";

// Criando objetos simples
$f1 = new stdClass();
$f1->nome = "Ana";
$f1->idade = 22;

$f2 = new stdClass();
$f2->nome = "Pedro";
$f2->idade = 16;

$f3 = new stdClass();
$f3->nome = "Maria";
$f3->idade = 30;

// Adicionando ao array
$funcionarios[] = $f1;
$funcionarios[] = $f2;
$funcionarios[] = $f3;

// Percorrendo
foreach ($funcionarios as $f) {
    echo "Nome: {$f->nome} | Idade: {$f->idade}\n";
    
    if ($f->idade >= 18) {
        echo ">>> Maior de idade\n";
    } else {
        echo ">>> Menor de idade\n";
    }
    echo "\n";
}

?>