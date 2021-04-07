<?php

use geangontijo\Validador\Validador;

require_once __DIR__ . '/vendor/autoload.php';

Validador::validar(['inteiro' => 1, 'string' => 'pedro'], [
    'inteiro' => [Validador::STRING]
]);

echo 'Validacao realizada com sucesso!';
