<?php

namespace Alura;

require 'autoload.php';

$correntistas_e_compras = [
    'Giovanni',
    'João',
    12,
    'Maria',
    25,
    'Luís',
    'Luísa',
    '12'
];

ArrayUtils::remover('Giovanni', $correntistas_e_compras);