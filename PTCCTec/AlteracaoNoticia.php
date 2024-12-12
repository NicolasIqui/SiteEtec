<?php

    include("conexao.php");
    $id= $_POST['txid'];
    $desc = $_POST['txDesc'];
    $data = $_POST['txData2'];
    $local = $_POST['txlocal'];
    $mensagem = $_POST['txNews'];
    $stmt = $pdo->prepare("
        update tbNoticia set
            descNoticia='$desc',
            dataNoticia='$data',
            localNoticia='$local',
            conteudoNoticia='$mensagem'
            where codNoticia ='$id';
    ");	 

    $stmt-> execute();
    header("location:ConsultarNoticia.php");


?>  