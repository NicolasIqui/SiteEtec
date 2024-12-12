<?php

    include("conexao.php");
    $id= $_POST['txidLogin'];
    $Email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];
    $stmt = $pdo->prepare("
        update tbCadastro set
            emailCadastro='$Email',
            senhaCadastro='$senha'
            where codCadastro ='$id';
    ");	 

    $stmt-> execute();
    header("location:consultarLogin.php");


?>  