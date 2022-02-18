<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtores</title>
</head>
<body>
    
<?php

include_once "./Classes/Pessoa.class.php";
include_once "./Classes/Conta.class.php";

$rodrigo_gonzaga = new Pessoa(01,"Rodrigo Gonzaga",1.86,34,"05/06/1986","Graduação em RH- Completo e Analise e Desenvolvimento de Sistemas- Cursando", 850.00);

echo "Manipulando o objeto {$rodrigo_gonzaga->Nome}:<br><br>";

echo "{$rodrigo_gonzaga->Nome} é formado em: {$rodrigo_gonzaga->Escolaridade}<br>";
$rodrigo_gonzaga->Formar('Programador');
echo "{$rodrigo_gonzaga->Nome} é formado em: {$rodrigo_gonzaga->Escolaridade}<br>";

echo "{$rodrigo_gonzaga->Nome} possui {$rodrigo_gonzaga->Idade}<br>";
$rodrigo_gonzaga->Envelhecer(9);


$conta_rodrigogonzaga = new Conta(0055,"CC.12345.67","18/02/2022",$rodrigo_gonzaga,12345,1234540.00,);

echo "Manipulando a conta de {$rodrigo_gonzaga->Nome}:<br><br>";
echo "O saldo atual é R/$ {$conta_rodrigo_gonzaga->ObterSaldo()}<br>";
$conta_rodrigo_gonzaga->Depositar(100);
$conta_rodrigo_gonzaga->Retirar(58);

?>

</body>
</html>