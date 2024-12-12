<?php
session_start();
include("conexao.php");

$emailDigit = $_POST['txGetEmail'];
$senhaDigit = $_POST['txGetSenha'];

$stmt = $pdo->prepare("SELECT emailCadastro, senhaCadastro FROM tbcadastro WHERE emailCadastro = ? AND senhaCadastro = ?");
$stmt->execute([$emailDigit, $senhaDigit]);

$user = $stmt->fetch();

if ($user) {
    $_SESSION["logado"] = $emailDigit;
    header("Location: Index2.php");
    exit();
} else {
    session_destroy();
    header("Location: Index.php");
}
?>