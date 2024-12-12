<?php



$x= $_GET['id'];

include("conexao.php");

$stmt= $pdo->prepare("delete from tbCursos where codCurso='$x'");
$stmt->execute();



header("location:consultarCursos.php");

?>

 