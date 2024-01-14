<?php

$correntistas = [
  'Giovanni',
  'João',
  'Maria',
  'Luís',
  'Luísa',
  'Rafael'  
];

$correntistasNaoPagantes = [
  'Luís',
  'Luísa',
  'Rafael'  
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

var_dump($correntistasPagantes);