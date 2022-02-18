<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa / Conta</title>
</head>
<body>
    
<?php

include_once "./Classes/Pessoa.class.php";
include_once "./Classes/Conta.class.php";

$rodrigo_gonzaga = new Pessoa;

$rodrigo_gonzaga->Codigo       = 01;
$rodrigo_gonzaga->Nome         = "Rodrigo Gonzaga";
$rodrigo_gonzaga->Altura       = 1.86;
$rodrigo_gonzaga->Idade        = 34;
$rodrigo_gonzaga->Nascimento   = "05/06/1986;
$rodrigo_gonzaga->Escolaridade = "Graduação em RH- Completo e Analise e Desenvolvimento de Sistemas- Cursando";

echo "Manipulando o objeto {$rodrigo_gonzaga->Nome}: <br><br>";

echo "{$rodrigo_gonzaga->Nome} é formado em: {$rodrigo_gonzaga->Escolaridade}<br>";
$rodrigo_gonzaga->Formar('Programador Web');
echo "{$rodrigo_gonzaga->Nome} é formado em: {$rodrigo_gonzaga->Escolaridade}<br>";

echo "{$rodrigo_gonzaga->Nome} possui {$rodrigo_gonzaga->Idade}<br>";
$rodrigo_gonzaga->Envelhecer(9);

echo "<br>";

$conta_rodrigo_gonzaga = new Conta(0055,"CC.12345.67","18/02/2022",$rodrigo_gonzaga,12345,1234540.00,false);

echo "<hr>";

echo "Manipulando a conta de {$rodrigo_gonzaga->Nome}:<br><br>";
echo "O saldo atual é R/$ {$conta_rodrigo_gonzaga->ObterSaldo()}<br>";
$conta_rodrigo_gonzaga->Depositar(100);
$conta_rodrigo_gonzaga->Retirar(58);

?>

</body>
</html>