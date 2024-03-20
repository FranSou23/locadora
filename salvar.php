<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$veiculo = $_POST["veiculo"];
echo $nome, $email, $veiculo;

$arquivo = fopen("veiculos.csv", "a");

fwrite($arquivo, $nome. " ; ");
fwrite($arquivo, $email. " ; ");
fwrite($arquivo, $veiculo. "\n");
fclose($arquivo);


?>
