<?php
session_start();
include("conexao.php");

$admEmailDigit = $_POST['txEmailAdm'];
$admSenhaDigit = $_POST['txSenhaAdm'];

$stmt = $pdo->prepare("SELECT emailAdmin, senhaAdmin FROM tbAdmin WHERE emailAdmin = ? AND senhaAdmin = ?");
$stmt->execute([$admEmailDigit, $admSenhaDigit]);

$admin = $stmt->fetch();

if ($admin) {
    $_SESSION["logado2"] = $admEmailDigit;
    header("Location: consultas.php");
    exit();
} else {
    unset($_SESSION["logado2"]);
    header("Location: Index2.php");
    exit();
}
?>