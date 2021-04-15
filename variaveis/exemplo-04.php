<?php

//
$nome = (int)$_GET["a"];

//var_dump($nome);

// $_SERVER["REMOTE_ADDR"] O endereço IP do cliente que está solicitando a página atual.
//$ip = $_SERVER["REMOTE_ADDR"];

// $_SERVER["SCRIPT_NAME"] contém o nome do script atual. Isso é útil quando as páginas precisam chamar a si mesmas. A constante __FILE__ contém o caminho completo, bem como o nome do arquivo atual (ou seja, inclui).
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>