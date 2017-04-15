<?
//------TIPOS SIMPLES ou BASICOS
$nome = "Enivaldo";
$site = 'www.enivadoqueiroz.com';

$ano = '1991';
$salario = 5500.99;
$bloqueado = false;
///////////////////////////////////////////////////////////
//------TIPOS COMPOSTOS
$frutas = array("abacaxi", "laranja", "manga");
//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);
///////////////////////////////////////////////////////////]
//------TIPOS ESPECIAIS

//variavel do tipo resource
$arquivo = fopen("exemplo03.php", "r");
//var_dump($arquivo);

//variavel do tipo nula
$nulo = NULL;

?>
