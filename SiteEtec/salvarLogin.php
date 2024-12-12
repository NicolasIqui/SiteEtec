<?php

include("conexao.php");

$email = $_POST['txEmail'];
$senha = $_POST['txSenha'];
    $stmt = $pdo->prepare("
    insert into tbCadastro values(
        null,
        '$email',
        '$senha'
    )
");
$stmt-> execute();

header("location:index.php");


?>