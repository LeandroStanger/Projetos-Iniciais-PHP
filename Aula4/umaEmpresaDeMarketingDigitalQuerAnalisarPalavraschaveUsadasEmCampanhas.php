<?php
echo "Uma empresa de marketing digital quer analisar palavras-chave usadas em campanhas.
 Crie uma array comum chamada palavras, contendo algumas palavras-chave.
 Percorra a array com foreach e aplique a seguinte lógica:
 - Se a palavra estiver em maiúscula (strtoupper comparado com ela mesma) → imprimir 'Palavra [índice]: Já está em UPPERCASE'.
 - Se a palavra incluir 'SEO' (strpos !== false) → imprimir 'Palavra [índice]: Contém SEO'.
 - Se a palavra tiver menos de 4 caracteres → imprimir 'Palavra [índice]: Muito curta'.
 - Se a palavra tiver mais de 10 caracteres → imprimir 'Palavra [índice]: Muito longa'.
 - Se !(strlen > 0) → imprimir 'Palavra [índice]: Vazia'.
 Ao final, junte todas as palavras em uma única string separada por vírgula usando implode() e imprima.

 Array comum com palavras-chave
palavras = ['SEO', 'ads', 'marketing', 'DATA', 'ux', 'estrategiaDigital', '']\n\n";

$palavras = ["SEO", "ads", "marketing", "DATA", "ux", "estrategiaDigital", ""];

foreach ($palavras as $i => $palavra) {
    if (!(strlen($palavra) > 0)) {
        echo "Palavra " . ($i + 1) . ": Vazia\n";
    } elseif ($palavra == "SEO") {
        echo "Palavra " . ($i + 1) . ": Contém SEO\n";
    } elseif ($palavra == strtoupper($palavra)) {
        echo "Palavra " . ($i + 1) . ": Já está em UPPERCASE\n";
    } elseif (strlen($palavra) < 4) {
        echo "Palavra " . ($i + 1) . ": Muito curta\n";
    } elseif (strlen($palavra) > 7) {
        echo "Palavra " . ($i + 1) . ": Muito longa\n";
    }
}
echo "\n\n";

    echo "Lista final de Palavra: ".implode(", ", $palavras);

