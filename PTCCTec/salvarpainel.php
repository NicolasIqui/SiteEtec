<?php

include("conexao.php");

$desc = $_POST['txDesc'];
$dia =$_POST['txData2'];
$local = $_POST['txLocal'];
$noticia = $_POST['txNews'];


    $stmt = $pdo->prepare("
    insert into tbNoticia values(
        null,
        '$desc',
        '$dia', 
        '$local',
        '$noticia'
    )
");
$stmt-> execute();


header("location:index2.php");

?>