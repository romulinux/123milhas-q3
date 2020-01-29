<?php
$re = '/R\$ \d\.?\d*/m';
$str = 'Melhor preço sem escalas R$ 1.367(1)
Melhor preço com escalas R$ 994 (1)
Melhor preço com escalas R$ 1994 (1)

1 - Incluindo todas as taxas."';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

$float_values = [];

foreach ($matches as $k => $v) {
  $float_values[] = number_format(end(preg_replace('/[R\$\s*]|[\.]/', '', $v)), 2, '.', '');
}

sort($float_values);

// Print the entire match result
var_dump($float_values);
