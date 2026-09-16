<?php
echo "Crie uma array de objetos chamada contas, cada objeto com: titular e saldo.
  Percorra a array com foreach e:
  - Se o saldo for maior ou igual a 20000 → 'Cliente VIP'
  - Se o saldo for entre 5000 e 19999 → 'Cliente Regular'
  - Se o saldo for entre 0 e 4999 → 'Cliente Básico'
  - Caso contrário (saldo negativo) → 'Cliente em débito'
  Durante o loop, use array_push() para adicionar cada classificação em uma nova array chamada classificacoes.
  Ao final, use implode() para juntar todas as classificações em uma única string separada por ponto e vírgula.
  Imprima também o total de clientes analisados usando count().\n\n";

  $contas =[];

  $bank1 = new stdClass();
  $bank1->titular = "Alice";
  $bank1->saldo = 25000;

  $bank2 = new stdClass();
  $bank2->titular = "Bruno";
  $bank2->saldo = 12000;

  $bank3 = new stdClass();
  $bank3->titular = "Carla";
  $bank3->saldo = 3000;

  $bank4 = new stdClass();
  $bank4->titular = "Diego";
  $bank4->saldo = -200;

  $contas[]= $bank1;
  $contas[]= $bank2;
  $contas[]= $bank3;
  $contas[]= $bank4;

$classificacoes = [];

foreach($contas as $conta){
    if($conta->saldo >= 20000){
        echo "Titular: {$conta->titular} | Saldo: {$conta->saldo}\n";
        echo ">>>Cliente VIP\n\n";
        array_push($classificacoes, "VIP");
    }elseif($conta->saldo >= 5000 && $conta->saldo <= 19999){
        echo "Titular: {$conta->titular} | Saldo: {$conta->saldo}\n";
        echo ">>>Cliente Regular\n\n";
        array_push($classificacoes, "Regular");
    }elseif($conta->saldo > 0 && $conta->saldo <= 4999){
        echo "Titular: {$conta->titular} | Saldo: {$conta->saldo}\n";
        echo ">>>Cliente Básico\n\n";
        array_push($classificacoes, "Básico");
    }elseif($conta->saldo < 0){
        echo "Titular: {$conta->titular} | Saldo: {$conta->saldo}\n";
        echo ">>>Cliente em débito\n\n";
        array_push($classificacoes, "Débito");
    }
  }

  echo "Resumo das classificações: ".implode(";", $classificacoes)."\n\n";

  echo "Total de clientes analisados: ".count($contas);

  echo "\n\nAo final, use array_sum() para calcular o valor total de todos os pedidos e imprima.\n\n";

  echo "Total de todos os pedidos: ".array_sum(array_column($contas, "saldo"));
?>