<?php

// pegando pedaços da string
$email = 'erick.dev@gmail.com';

// pegando apenas o domínio
echo substr($email, 10, 5);

// definindo posição que se encontra o domínio
$posicaoDominio = strpos($email, '@'); 

echo '<br>';

// pegando apenas o domínio dinamicamente com o strpos
echo substr($email, $posicaoDominio + 1, 5);