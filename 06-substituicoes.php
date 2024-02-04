<?php

// Substituindo palavras em uma string
$texto = 'Este texto contém um palavrão caramba !!!';

echo str_replace(['palavrão', 'caramba'], '*****', $texto);