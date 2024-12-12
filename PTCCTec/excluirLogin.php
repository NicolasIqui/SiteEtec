<?php



$x= $_GET['id'];

include("conexao.php");

$stmt= $pdo->prepare("delete from tbCadastro where codCadastro='$x'");
$stmt->execute();

header("location:consultarLogin.php");

?>

 