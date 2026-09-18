<?php
echo "1) INVERTER A LÓGICA
Neste exercício, você deverá trabalhar com as mensagens de forma INVERSA à lógica utilizada no exercício
anterior.
Observe cuidadosamente as condições e pense:
• O que antes era considerado válido?
• O que agora deverá ser considerado?
• Qual condição precisa ser invertida?
Não simplesmente copie a lógica anterior. Analise e construa a nova lógica.\n\n";

$mensagens = [
"Gostei muito do atendimento ele é eficientemente!",
"O produto chegou no prazo!",
"Preciso de mais informações dese produto!",
"Fui muito bem atendido pelo atendente!",
"Pretendo comprar novamente nessa loja!",
"O serviço superou minhas expectativas que estava baixa!",
"Não gostei muito do atendimento ele não é eficientemente!",
"O produto chegou no atrasado!",
"Não preciso de mais informações dese produto!",
"Fui muito mal atendido pelo atendente!",
"Não pretendo comprar novamente nessa loja!",
"O serviço me desalimou minhas expectativas que estava alta!"
];

foreach($mensagens as $i => $mensagen){
    echo ($i + 1).") ".$mensagen."\n";
}

echo "\n\n2) FILTRAR AS MENSAGENS
Utilize um método de array para selecionar somente as mensagens que atendam à condição determinada pela sua
nova lógica. A condição deverá ser diferente da utilizada no exercício anterior.\n\n";
$mensagensFiltrada = [];

foreach($mensagens as $i => $mensagen){
    if(strlen($mensagen) >= 32){
        $mensagensFiltrada[] = $mensagen;
        echo ($i + 1).") ".$mensagen."\n";
    }
}


echo "\n\n3) TRANSFORMAR OS TEXTOS
Depois de selecionar as mensagens, transforme os textos para MAIÚSCULAS. Depois, faça também uma segunda
transformação utilizando LETRAS MINÚSCULAS.\n\n";
$resultado = [];
foreach($mensagensFiltrada as $i => $mF){
    $resultado[] = ($i < 5) ? strtoupper($mF) : strtolower($mF);
}
foreach($resultado as $i => $mF){
echo ($i + 1).") ".strval($mF)."\n";
}

echo "\n\n4) ORGANIZAR AS MENSAGENS
Organize os resultados em ordem alfabética. Utilize .sort().
Observe o comportamento do método .sort() com textos. Não basta apenas colocar o método: entenda o que ele
está fazendo.\n\n";

sort($mensagensFiltrada);
print_r($mensagensFiltrada);


echo "\n\n5) GERAR UMA SAÍDA NUMERADA
Apresente os resultados no console de maneira organizada. Cada mensagem deverá possuir uma numeração.
Exemplo:
1. ...
2. ...
3. ...
4. ...\n\n";

foreach($mensagensFiltrada as $i => $mF){
    echo ($i + 1).") ".$mF."\n";
}


echo "\n\n6) CRIE FRASES ELEGANTES
Em vez de simplesmente imprimir o conteúdo do array, crie uma apresentação elegante para cada resultado.
Por exemplo, em vez de simplesmente:
1. GOSTEI MUITO DO ATENDIMENTO
você poderia criar uma frase semelhante a:
“É uma satisfação registrar que o atendimento proporcionou uma experiência especialmente positiva.”
MAS NÃO COPIE ESSA FRASE! Ela é apenas um exemplo. Crie suas próprias frases. Seja criativo.\n\n";

$mensagensElegantes = [
    "Fiquei muito satisfeito com o atendimento, que foi bastante eficiente.",
    "O produto chegou dentro do prazo esperado.",
    "Gostaria de obter mais informações sobre este produto.",
    "Recebi um atendimento excelente por parte do atendente.",
    "Pretendo voltar a comprar nesta loja.",
    "O serviço superou minhas expectativas, que eram modestas.",
    "Não fiquei satisfeito com o atendimento, que deixou a desejar em eficiência.",
    "O produto chegou com atraso.",
    "Não necessito de informações adicionais sobre este produto.",
    "Recebi um atendimento bastante insatisfatório por parte do atendente.",
    "Não pretendo voltar a comprar nesta loja.",
    "O serviço ficou muito aquém das minhas expectativas, que eram elevadas."
    ];

    foreach($mensagensElegantes as $i => $mE){
        echo ($i + 1).") ".$mE."\n";
    }

    echo "\n\n7) USE MAIÚSCULAS E MINÚSCULAS
Sua saída deverá demonstrar que você sabe trabalhar com .toUpperCase() e .toLowerCase().
Faça pelo menos uma parte da apresentação utilizando MAIÚSCULAS e outra utilizando minúsculas. A
apresentação final deve ficar organizada e agradável.\n\n";

$resultado2 = [];
foreach($mensagensElegantes as $i => $mF){
    $resultado2[] = ($i < 5) ? strtoupper($mF) : strtolower($mF);
}
foreach($resultado2 as $i => $mF){
echo ($i + 1).") ".strval($mF)."\n";
}

echo "\n\n8) SAÍDA BONITA E ORGANIZADA
Crie uma saída parecida com esta estrutura:
nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
RELATÓRIO DE MENSAGENS
nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
1. [SUA FRASE ELEGANTE AQUI]
2. [SUA FRASE ELEGANTE AQUI]
3. [SUA FRASE ELEGANTE AQUI]
4. [SUA FRASE ELEGANTE AQUI]
nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
TOTAL DE MENSAGENS ANALISADAS: X
nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
nn IMPORTANTE: As frases acima são apenas um MODELO VISUAL. NÃO COPIE as frases. Você deve
escrever suas próprias frases elegantes.
n DICAS
Você poderá precisar utilizar:
• array • .filter() • .map() • .sort() • .toUpperCase() • .toLowerCase()
• condição if • operador lógico • variável • contador ou índice
• console.log() • template strings
Não é necessário utilizar todos os métodos acima se sua solução não precisar deles. O objetivo é entender a lógica
e construir sua própria solução.\n\n";

echo "-----------------------------------------------------------\n";
echo "RELATÓRIO DE MENSAGENS";
echo "\n-----------------------------------------------------------\n";
foreach($mensagensElegantes as $i => $mE){
    echo ($i + 1).". ".$mE."\n";
}
echo "\n-----------------------------------------------------------";
echo "\nTOTAL DE MENSAGENS ANALISADAS: ".count($mensagensElegantes);
echo "\n-----------------------------------------------------------";


echo "\n\n DESAFIO EXTRA
Depois de terminar, tente melhorar ainda mais a apresentação:
4 um título elegante;
4 uma separação visual;
4 mensagens numeradas;
4 frases criativas;
4 palavras em MAIÚSCULAS;
4 palavras em minúsculas;
4 uma informação final mostrando a quantidade de resultados.
Tente fazer com que seu console pareça um pequeno relatório profissional.
n REGRAS DO DESAFIO
1. Não copie a solução de outra pessoa.
2. Não copie as frases elegantes deste enunciado.
3. Crie suas próprias frases.
4. Seja criativo na apresentação.
5. Utilize os métodos estudados.
6. Preste atenção à inversão da lógica.
7. Teste seu código antes de entregar.
8. O mais importante não é deixar a saída exatamente igual ao exemplo. O mais importante é demonstrar que você
ENTENDEU a lógica.\n\n";
$titulo = "Relatório de Mensagens — Síntese de Comunicações!";
$total = "VOLUME TOTAL DE MENSAGENS ANALISADAS: ";
$fim = "RELATÓRIO ENCERRADO!";


echo "palavras em MAIÚSCULAS\n\n";
echo "-----------------------------------------------------------\n";
echo strtoupper($titulo);
echo "\n-----------------------------------------------------------\n";
foreach($mensagensElegantes as $i => $mE){
    echo ($i + 1).". ".strtoupper($mE)."\n";
}
echo "\n-----------------------------------------------------------";
echo "\n".strtoupper($total).count($mensagensElegantes);
echo "\n-----------------------------------------------------------";
echo "\n".strtoupper($fim);
echo "\n-----------------------------------------------------------";



echo "\n\npalavras em minúsculas\n\n";
echo "-----------------------------------------------------------\n";
echo strtolower($titulo);
echo "\n-----------------------------------------------------------\n";
foreach($mensagensElegantes as $i => $mE){
    echo ($i + 1).". ".strtolower($mE)."\n";
}
echo "\n-----------------------------------------------------------";
echo "\n".strtolower($total).count($mensagensElegantes);
echo "\n-----------------------------------------------------------";
echo "\n".strtolower($fim);
echo "\n-----------------------------------------------------------";

?>