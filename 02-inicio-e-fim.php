<?php

// Podemos verificar se uma string começa ou termina com uma determinada frase/palavra
$exemploUrl = 'https://erick.agostinho.com.br/login'; // string

$seguranca = str_starts_with($exemploUrl, 'https') ? 'Segura' : 'Insegura'; // verificação - if ternário para definir retorno
$pathLogin = str_ends_with($exemploUrl, 'login') ? 'Rota de login' : 'Outra rota'; // verificação ''

echo $seguranca;
echo $pathLogin;
