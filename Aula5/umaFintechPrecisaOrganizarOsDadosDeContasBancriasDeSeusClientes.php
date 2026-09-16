<?php
echo "Uma fintech precisa organizar os dados de contas bancárias de seus clientes.
  Crie uma array de objetos chamada contas.
  Cada objeto deve ter: titular e saldo.
  Percorra a array e imprima o nome do titular e o saldo.
  Use condicionais para classificar:
  - Se o saldo for maior ou igual a 10000 → 'Cliente Premium'
  - Se o saldo for maior ou igual a 1000 → 'Cliente Regular'
  - Se o saldo for maior ou igual a 0 → 'Cliente Básico'
  - Caso contrário (saldo negativo) → 'Cliente em débito'
  Ao final, junte todos os nomes dos titulares em uma única string separada por vírgula usando implode() e imprima.\n\n";

  $contas =[];

  $bank1 = new stdClass();
  $bank1->titular = "Alice";
  $bank1->saldo = 15000;

  $bank2 = new stdClass();
  $bank2->titular = "Bruno";
  $bank2->saldo = 2500;

  $bank3 = new stdClass();
  $bank3->titular = "Carla";
  $bank3->saldo = 200;

  $bank4 = new stdClass();
  $bank4->titular = "Diego";
  $bank4->saldo = -500;

  $contas[]= $bank1;
  $contas[]= $bank2;
  $contas[]= $bank3;
  $contas[]= $bank4;

  foreach($contas as $conta){
    if($conta->saldo >= 10000){
        echo "Titular: {$conta->titular} | Saldo: R$ {$conta->saldo}\n";
        echo ">>>Cliente Premium\n\n";
    }elseif($conta->saldo >= 1000){
        echo "Titular: {$conta->titular} | Saldo: R$ {$conta->saldo}\n";
        echo ">>>Cliente Regular\n\n";
    }elseif($conta->saldo >= 0){
        echo "Titular: {$conta->titular} | Saldo: R$ {$conta->saldo}\n";
        echo ">>>Cliente Básico\n\n";
    }elseif($conta->saldo < 0){
        echo "Titular: {$conta->titular} | Saldo: R$ {$conta->saldo}\n";
        echo ">>>Cliente em débito\n\n";
    }
  }

  echo "Lista de titulares: ".implode(", ", array_column($contas, "titular"));

?>