<?php
echo "DESAFIO: TRANSFORMAR OS TEXTOS
Com base na sua lista de mensagens filtradas, converta todo o conteúdo dos textos para MAIÚSCULAS e crie uma segunda 
versão do relatório utilizando LETRAS MINÚSCULAS. 
O objetivo é demonstrar o uso prático de funções de transformação de caixa de texto 
(como strtoupper e strtolower em PHP) na formatação do seu resultado final\n\n";

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

    $mensagensElegantesFiltradas = [];
    foreach($mensagensElegantes as $mEf){
    if(strlen($mEf) >= 40){
        $mensagensElegantesFiltradas[] = $mEf;
    }
    }

    echo "\n\n\nMAIÚSCULAS\n\n";

    foreach($mensagensElegantesFiltradas as $i => $mEf){
        echo ($i + 1)." - ".strtoupper($mEf)."\n";
    }

        echo "\n\n\nMINÚSCULAS\n\n";

        foreach($mensagensElegantesFiltradas as $i => $mEf){
            echo ($i + 1)." - ".strtolower($mEf)."\n";
        }
?>