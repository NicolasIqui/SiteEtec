<?php



$x= $_GET['id'];

include("conexao.php");

$stmt= $pdo->prepare("delete from tbNoticia where codNoticia='$x'");
$stmt->execute();

header("location:ConsultarNoticia.php");

?>

 