<?php

function ola() {
	//func_get_args() — Retorna um array contendo uma lista de argumentos da função
	$argumentos = func_get_args();

	return $argumentos;
}

var_dump(ola("Bom dia", 10));



?>