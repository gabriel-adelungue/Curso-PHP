<?php
/*
$anoNascimento = 1990;

$nomeCompleto = "Gabriel Adelungue Cassiano";
*/
$nome1 = "Jõao";

$sobrenome = "Rangel";

$nomeCompleto = $nome1. " " . $sobrenome;

echo $nomeCompleto;

// exit para a execução do programa onde você colocar.
exit;

echo $nome1;

echo "<br/>";

// unset() tira a varivel da memoria
unset($nome1);

// se a variavel $nome1 existir, mostrar ela.
if (isset($nome1)) {
	echo $nome1;
}


?>