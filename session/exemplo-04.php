<?php

session_id('kaehq1opq2bjqfn4tnn9em5auuarray');

require_once("config.php");

//session_regenerate_id() - Geras novos ids
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>