<?php

//variaveis pre-definidas ou arrey superglobal
$nome = (int)$_GET["a"];

//var_dump($nome);

//echo "<br>";
//echo $nome;

//função para mostrar o ip do usuario
//$ip = $_SERVER["REMOTE_ADDR"];

//função para mostrar log de acesso
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;





?>