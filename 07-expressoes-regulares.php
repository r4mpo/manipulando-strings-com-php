<?php

// Expressões regulares!!
// Regex

$frase = 'Frase de exemplo que utilizaremos!';

// Retirando letras 'e'
var_dump(preg_replace('[e]', '', $frase));

echo '<br>';

// Deixando apenas números de uma string
$frase = '249320-34xne09232034';
var_dump(preg_replace('/\D/', '', $frase));