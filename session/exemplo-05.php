<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){

	case PHP_SESSION_DISABLED:
	echo "As sessões estão desabilitadas.";
	break;

	case PHP_SESSION_NONE:
	echo "Sessões habilitadas, mas não iniciada.";
	break;

	case PHP_SESSION_ACTIVE:
	echo "Sessões habilitadas, e uma existe";
	break;
}

?>