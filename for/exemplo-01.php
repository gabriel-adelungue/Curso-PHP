<?php

for ($i = 0; $i < 1000; $i+=5){ //contando até mil pulando de 5 em 5;
	
	if($i >= 200 && $i <= 800) continue;
		
	if($i === 900) break;
	
	echo $i . "<br>";
	
}

?>