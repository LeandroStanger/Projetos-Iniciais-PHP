<?php
echo "Uma empresa de tecnologia quer validar códigos internos usados em diferentes departamentos.
  Crie uma array comum chamada codigos, contendo palavras, números e caracteres misturados.
  Percorra a array com foreach e aplique a seguinte lógica:
   - Se o texto estiver todo em maiúsculas → imprimir uma frase inventada pelo aluno.
   - Se o texto contiver a palavra 'beta' → imprimir uma frase inventada pelo aluno.
   - Se o tamanho do texto for menor que cinco caracteres → imprimir uma frase inventada pelo aluno.
   - Se o tamanho do texto for maior que doze caracteres → imprimir uma frase inventada pelo aluno.
   - Se o texto estiver vazio → imprimir uma frase inventada pelo aluno.
   - Se o texto tiver mais de cinco caracteres e não contiver palavras proibidas → imprimir uma frase inventada pelo aluno.
  Ao final, junte todas as palavras em uma única string separada por vírgula usando um método usado no exercício anterior e imprima.
  OBS: As frases que aparecem são apenas exemplos. O aluno deve criar frases próprias, elegantes e criativas, como se fossem etiquetas usadas em empresas reais.

// Array comum com códigos
codigos = ['alpha1', 'BETA2026', 'seguranca@', 'OK', 'interno99', 'confidencial#', 'testeRapido123', '', 'X9']\n\n";

$codigos = ["alpha1", "BETA2026", "seguranca@", "OK", "interno99", "confidencial#", "testeRapido123", "", "X9"];

foreach ($codigos as $texto) {
    if ($texto === null || $texto === '') {
        echo $texto . ": Cadê a palavra? Sumiu no vácuo! 👻\n";
    } elseif ($texto === "beta") {
        echo $texto . ": Opa, achei um BETA escondido aqui! Versão de teste detectada 🧪\n";
    } elseif (in_array($texto, ["elegantes", "criativas"], true)) {
        echo $texto . ": Opa, achei uma palavra proibida aqui! 🚫\n";
    } elseif ($texto === strtoupper($texto)) {
        echo $texto . ": UAU! Essa palavra está GRITANDO de tão maiúscula!\n";
    } elseif (strlen($texto) < 5) {
        echo $texto . ": Eita, essa palavra é pequenininha, mal cabe no bolso! 🐜\n";
    } elseif (strlen($texto) > 12) {
        echo $texto . ": Uau, essa palavra é um romance! Alguém chama um resumo! 📚\n";
    }
}
?>