<?php

    include("conexao.php");
    $id= $_POST['txidPainel'];
    $descPainel = $_POST['txdescPainel'];
    $local = $_POST['txlocalPainel'];
    $tamanho = $_POST['txTamanho'];

    $stmt = $pdo->prepare("
        update tbPainel set
            descPainel='$descPainel',
            localPainel='$local',
            tamanhoPainel='$tamanho'
            where codPainel ='$id';
    ");	 

    $stmt-> execute();
        header("location:consultarPainel.php");

    
?>  