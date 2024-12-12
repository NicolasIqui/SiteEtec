<?php



$x= $_GET['id'];

include("conexao.php");

$stmt= $pdo->prepare("delete from tbPainel where codPainel='$x'");
$stmt->execute();

header("location:consultarPainel.php");

?>

 