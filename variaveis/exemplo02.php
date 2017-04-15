<?
/*
Mexendo com variaveis
*/

$anoCompleto  = 1990;

//$nomeCompleto = "";

//variavel como nome
$nome = "Enivaldo";
$sobreNome = "Queiroz";
//Concatenando variaveis
$nomeCompleto = $nome ." ". $sobreNome;

echo $nomeCompleto;

//exit para sair da execução
exit;

echo $nome;
echo "</br>";
echo $anoCompleto;

//Limpando valores das variaveis

unset($nome, $anoCompleto);

//echo $nome;
//echo $anoCompleto;

//fazer verificações de existenci de variaveis
if (isset($nome)){

    echo "</br>";
    echo "--",$nome;
    echo "</br>";
    echo "--",$anoCompleto;
}
?>
