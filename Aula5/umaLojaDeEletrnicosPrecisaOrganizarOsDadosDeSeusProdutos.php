<?php
echo "Uma loja de eletrônicos precisa organizar os dados de seus produtos.
  Crie uma array de objetos chamada produtos.
  Cada objeto deve ter: nome e preço.
  Percorra a array e imprima o nome e o preço de cada produto.
  Se o preço for maior ou igual a 1000, imprima também 'Produto caro'.
  Caso contrário, imprima 'Produto acessível'.\n\n";

  $produtos =[];

  $p1 = new stdClass();
  $p1->produto = "Notebook";
  $p1->preco = 3500;

  $p2 = new stdClass();
  $p2->produto = "Mouse";
  $p2->preco = 80;

  $p3 = new stdClass();
  $p3->produto = "Monitor";
  $p3->preco = 1200;

  $produtos[] = $p1;
  $produtos[] = $p2;
  $produtos[] = $p3;

  foreach($produtos as $prod){
    if($prod->preco >= 1000){
        echo "Produto: {$prod->produto} | Preço: {$prod->preco}\n";
        echo ">>>Produto caro\n\n";
    }else{
        echo "Produto: {$prod->produto} | Preço: {$prod->preco}\n";
        echo ">>>Produto acessível\n\n";
    }
  }
?>