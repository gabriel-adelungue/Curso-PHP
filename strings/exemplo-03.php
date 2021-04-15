<?php

$empresa = "Hcode";

/*
 str_replace() — Substitui todas as ocorrências da string de procura com a string de substituição. ("procura", "substituição", "variavel que esta buscando")
*/
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>