<?php

require_once("config.php");

//session_unset() - Limpa variaveis de sessao
unset($_SESSION['nome']);


echo $_SESSION['nome'];

//session_destroy() -  Limpa variaveis de sessao e remove o usuario
session_destroy();


?>