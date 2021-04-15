<?php

$condicao = true;

while ($condicao){
	// rand() sorteia numeros randomicamente.
	$numero = rand(1, 10);
	
	if ($numero ===3){
		echo "TRES";
		$condicao = false;
	}
	
	echo $numero . " ";
}

?>