<?php

$frase = "A repetição é mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, $palavra); // strpos() — Encontra a posição da primeira ocorrência de uma string

$texto = substr($frase, 0, $q); //substr() — Retorna uma parte de uma string

var_dump($texto);

//strlen() — Retorna o tamanho de uma string
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);
?>