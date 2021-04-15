<?php

$nome = "gabriel adelungue";

$nome = strtoupper($nome);  // strtoupper() deixa todas as letras em maiusculas.
echo $nome;
echo "<br>";

$nome = strtolower($nome); // strlower() deixa todas as letras em minusculas.
echo $nome;
echo "<br>";

echo ucwords($nome); // ucwords() deica a primeira letra das palavras em maiusculas.
echo "<br>";

echo ucfirst($nome); // ucfirst() deixa somente a primeira letra da palavra maiuscula.


?>