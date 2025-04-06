<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dataNascimento = $_POST['data_nascimento'] ?? '';

    if (!empty($dataNascimento)) {
        // Formata a data de nascimento para o formato dia/mês
        $dataFormatada = date('d/m', strtotime($dataNascimento));

        // Carrega o arquivo XML
        $xml = simplexml_load_file('signos.xml');

        // Itera pelos signos para encontrar o correspondente
        foreach ($xml->signo as $signo) {
            $dataInicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
            $dataFim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);
            $dataAtual = DateTime::createFromFormat('d/m', $dataFormatada);

            // Ajusta o ano para lidar com intervalos que passam pelo ano novo
            if ($dataInicio > $dataFim) {
                $dataFim->modify('+1 year');
                if ($dataAtual < $dataInicio) {
                    $dataAtual->modify('+1 year');
                }
            }

            // Verifica se a data está no intervalo
            if ($dataAtual >= $dataInicio && $dataAtual <= $dataFim) {
                echo json_encode([
                    'signo' => (string)$signo->nome,
                    'elemento' => (string)$signo->elemento,
                    'planetaRegente' => (string)$signo->planetaRegente
                ]);
                exit;
            }
        }

        echo "Não foi possível determinar o signo.";
    } else {
        echo "Por favor, preencha a data de nascimento.";
    }
} else {
    echo "Método de requisição inválido.";
}