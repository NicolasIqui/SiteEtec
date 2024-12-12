<?php

    include("conexao.php");
    $id= $_POST['txidContato'];
    $nomeUsuario = $_POST['txUsuario'];
    $msgUsuario = $_POST['txmsgUsuario'];
    $stmt = $pdo->prepare("
        update tbContato set
            nomeUsuario='$nomeUsuario',
            msgContato='$msgUsuario '
            where codContato ='$id';
    ");	 

    $stmt-> execute();
        header("location:ConsultarContato.php");


?>      