<?php

include("conexao.php");

$nome = $_POST['txDesc'];
$msg = $_POST['txNews'];


    $stmt = $pdo->prepare("
    insert into tbContato values(
        null,
        '$nome',
        '$msg'
    )
");
$stmt-> execute();

header("location:consultarContato.php");


?>