<?php



$x= $_GET['id'];

include("conexao.php");

$stmt= $pdo->prepare("delete from tbContato where codContato='$x'");
$stmt->execute();

header("location:ConsultarContato.php");

?>

 